<?php

namespace NadzorServera\Skijasi\Theme\CommerceTheme\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use NadzorServera\Skijasi\Exceptions\SingleException;
use NadzorServera\Skijasi\Helpers\ApiResponse;
use NadzorServera\Skijasi\Models\Configuration;
use NadzorServera\Skijasi\Traits\FileHandler;



use Illuminate\Support\Facades\Log;

use NadzorServera\Skijasi\Theme\CommerceTheme\Models\Form;
use NadzorServera\Skijasi\Theme\CommerceTheme\Models\FormField;
use NadzorServera\Skijasi\Theme\CommerceTheme\Models\FormEntry;
use NadzorServera\Skijasi\Models\User;

class ConfigurationController extends Controller
{
    use FileHandler;

    public function browse()
    {
        $configurations = Configuration::where('group', 'commerceThemePanel')->orderBy('order')->get();

        $data['configurations'] = $configurations;

        return ApiResponse::success(collect($data)->toArray());
    }

    public function read(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required',
            ]);
            $configuration = Configuration::where('group', 'commerceThemePanel')->where('id', $request->id)->first();

            $data['configuration'] = $configuration;

            return ApiResponse::success($data);
        } catch (Exception $e) {
            return ApiResponse::failed($e);
        }
    }

    public function edit(Request $request)
    {
        DB::beginTransaction();

        try {
            $request->validate([
                'id'           => 'required|exists:NadzorServera\Skijasi\Models\Configuration',
                'key'          => 'required',
                'display_name' => 'required',
                'value'        => 'required',
                'details'      => 'required',
                'type'         => 'required',
                'order'        => 'required',
                'group'        => 'required',
            ]);

            $configuration = Configuration::where('group', 'commerceThemePanel')->where('id', $request->id)->first();

            if (!is_null($configuration)) {
                $configuration->key = $request->key;
                $configuration->display_name = $request->display_name;
                $configuration->value = $request->value;
                $configuration->details = $request->details;
                $configuration->type = $request->type;
                $configuration->order = $request->order;
                $configuration->group = 'commerceThemePanel';
                $configuration->save();
            }

            DB::commit();

            return ApiResponse::success($configuration);
        } catch (Exception $e) {
            DB::rollback();

            return ApiResponse::failed($e);
        }
    }

    public function editMultiple(Request $request)
    {
        DB::beginTransaction();

        try {
            $request->validate([
                'configurations' => 'required',
            ]);
            foreach ($request->configurations as $configuration) {
                Validator::make($configuration, [
                    'id' => ['required'],
                ])->validate();
                $updated_configuration = Configuration::where('group', 'commerceThemePanel')->where('id', $configuration['id'])->first();
                if (!is_null($configuration)) {
                    $updated_configuration->key = $configuration['key'];
                    $updated_configuration->display_name = $configuration['display_name'];
                    $updated_configuration->value = $configuration['value'];
                    $updated_configuration->details = json_encode($configuration['details']);
                    $updated_configuration->type = $configuration['type'];
                    $updated_configuration->order = $configuration['order'];
                    $updated_configuration->group = 'commerceThemePanel';
                    $updated_configuration->save();
                }
            }

            DB::commit();

            return ApiResponse::success();
        } catch (Exception $e) {
            DB::rollBack();

            return ApiResponse::failed($e);
        }
    }

    public function add(Request $request)
    {
        DB::beginTransaction();

        try {
            $request->validate([
                'key'          => 'required|unique:NadzorServera\Skijasi\Models\Configuration',
                'display_name' => 'required',
                'group'        => 'required',
                'type'         => 'required',
                'details'      => [
                    function ($attribute, $value, $fail) use ($request) {
                        if (in_array($request->type, ['checkbox', 'radio', 'select', 'select_multiple'])) {
                            json_decode($value);
                            $is_json = (json_last_error() == JSON_ERROR_NONE);
                            if (!$is_json) {
                                $fail('The details must be a valid JSON string.');
                            }
                        }
                    },
                    function ($attribute, $value, $fail) use ($request) {
                        if (in_array($request->type, ['checkbox', 'radio', 'select', 'select_multiple'])) {
                            if (!isset($value) || is_null($value)) {
                                $fail('Options is required for  Checkbox, Radio, Select, Select-multiple');
                            }
                        }
                    },
                ],
            ]);
            $configurationOrder = Configuration::select('order')->where('group', 'commercePanel')->latest()->first();
            $configuration = new Configuration();
            $data = $request->all();
            $data['can_delete'] = $request->get('can_delete', true);
            $configuration_fillable = $configuration->getFillable();
            foreach ($data as $key => $value) {
                $property = Str::snake($key);
                if (in_array($property, $configuration_fillable)) {
                    $configuration->{$property} = $value;
                }
            }
            $configuration->order = $configurationOrder->order + 1;
            $configuration->save();

            DB::commit();

            return ApiResponse::success($configuration);
        } catch (Exception $e) {
            DB::rollBack();

            return ApiResponse::failed($e);
        }
    }

    public function delete(Request $request)
    {
        DB::beginTransaction();

        try {
            $request->validate([
                'id' => 'required',
            ]);

            $config = Configuration::where('group', 'commerceThemePanel')->where('id', $request->id)->first();
            if ($config->can_delete) {
                $config->delete();
            } else {
                throw new SingleException('Cannot delete this config');
            }

            DB::commit();

            return ApiResponse::success();
        } catch (Exception $e) {
            DB::rollBack();

            return ApiResponse::failed($e);
        }
    }






    // New methods for form handling
    public function getFormFields($formId)
    {
        try {
            $formFields = FormField::where('form_id', $formId)->get()->map(function ($field) {
                $decodedOptions = json_decode($field->options, true);
                $field->options = $decodedOptions['options'] ?? null;
                $field->translations = $decodedOptions['translations'] ?? null;
                if ($field->label === 'Na seminaru:') {
                    $field->showForStatus = $decodedOptions['showForStatus'] ?? null;
                }
                return $field;
            });
            $form = Form::find($formId);
    
            if (!$form) {
                throw new Exception('Form not found');
            }
    
            return ApiResponse::success([
                'name' => $form->name,
                'description' => $form->description,
                'fields' => $formFields
            ]);
        } catch (Exception $e) {
            return ApiResponse::failed($e);
        }
    }


    public function checkUserFormEntry($formId, $userId)
    {
        try {
            $user = User::findOrFail($userId);
            
            $existingEntry = FormEntry::where('form_id', $formId)
                ->where('ispunio', $user->name . '  ' . $user->username)
                ->first();
    
            return ApiResponse::success(['hasEntry' => !!$existingEntry]);
        } catch (\Exception $e) {
            return ApiResponse::failed($e);
        }
    }

    public function getUserData($userId)
    {
        try {
            $user = User::find($userId);

            if (!$user) {
                throw new SingleException('User not found');
            }

            return ApiResponse::success(['user' => $user]);
        } catch (Exception $e) {
            return ApiResponse::failed($e);
        }
    }

    public function saveFormEntry(Request $request, $formId)
    {
        DB::beginTransaction();
    
        try {
            $form = Form::findOrFail($formId);
            $user = auth()->user();
    
            // Check if the user has already submitted this form
            $unrestrictedIds = array_merge(range(1, 10), [4417, 2439]);

            // Check if the user has already submitted this form, but only if they're not in the unrestricted list
            if (!in_array($user->id, $unrestrictedIds)) {
                $existingEntry = FormEntry::where('form_id', $formId)
                    ->where('ispunio', $user->name . '  ' . $user->username)
                    ->first();

                if ($existingEntry) {
                    DB::rollBack();
                    return ApiResponse::failed(new Exception('Već ste prijavljeni na ovaj seminar! Ukoliko mislite da je to greška ili ste krivo ispunili, molimo kontaktirajte nas.'), 400);
                }
            }

    
            // Validate the form data
            $formFields = $form->fields;
            $rules = [];
    
            foreach ($formFields as $field) {
                if ($field->label === 'Napomena') {
                    $rules[$field->label] = 'nullable';
                } elseif ($field->label === 'Na seminaru:') {
                    // Make "Na seminaru:" field optional
                    $rules[$field->label] = 'nullable';
                } else {
                    $rules[$field->label] = $field->required ? 'required' : 'nullable';
                }
                
                if ($field->field_type === 'email') {
                    $rules[$field->label] .= '|email';
                }
            }
    
            $rules['Status člana'] = 'required|string';
    
            $validatedData = $request->validate($rules);
    
            $entryData = $validatedData;
            $entryData['Status člana'] = $request->input('Status člana');
    
            // Handle "Na seminaru:" field
            if (!isset($entryData['Na seminaru:']) || $entryData['Na seminaru:'] === '') {
                $entryData['Na seminaru:'] = null;
            }
    
            $entry = new FormEntry();
            $entry->form_id = $formId;
            $entry->data = json_encode($entryData);
            $entry->ispunio = $user->name . '  ' . $user->username;
            $entry->hzutsid = $request->input('Hzuts ID');
            $entry->userid = $request->input('User ID');
    
            $entry->save();
    
            DB::commit();

            activity('Nova prijavnica ispunjena')
    ->causedBy(auth()->user() ?? null)
    ->withProperties([
        'attributes' => [
            'form_id' => $formId,
            'form_data' => $entryData,
            'submitted_by' => [
                'name' => $user->name,
                'username' => $user->username,
                'id' => $user->id
            ]
        ]
    ])
    ->performedOn($entry)
    ->event('created')
    ->log('Korisnik je ispunio obrazac');

    
    
            return ApiResponse::success(['entry' => $entry, 'message' => 'Form submitted successfully.']);
        } catch (Exception $e) {
            DB::rollBack();
            return ApiResponse::failed($e);
        }
    }




    public function updateFormProductSlug(Request $request)
    {
        DB::beginTransaction();
    
        try {
            $request->validate([
                'id' => 'required|exists:skijasi_forms,id', 
                'productslug' => 'required|string',
            ]);
    
            $form = Form::findOrFail($request->id);
            $form->productslug = $request->productslug;
            $form->save();
    
            DB::commit();
    
            return ApiResponse::success(['form' => $form, 'message' => 'Form updated successfully with new product slug.']);
        } catch (Exception $e) {
            DB::rollBack();
            return ApiResponse::failed($e);
        }
    }




    public function browseForms()
    {
        try {
            $forms = Form::all();
            return ApiResponse::success(['forms' => $forms]);
        } catch (Exception $e) {
            return ApiResponse::failed($e);
        }
    }

    // Method to read a specific form
    public function readForm($formId)
    {
        try {
            $form = Form::with('fields')->find($formId);
            if (!$form) {
                throw new SingleException('Form not found');
            }
            return ApiResponse::success(['form' => $form]);
        } catch (Exception $e) {
            return ApiResponse::failed($e);
        }
    }

    public function saveForm(Request $request)
    {
        DB::beginTransaction();
    
        try {
            // Validation remains the same
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'fields' => 'nullable|array',
                'fields.*.label' => 'nullable|string|max:255',
                'fields.*.field_type' => 'nullable|string',
                'fields.*.required' => 'nullable|boolean',
                'fields.*.options' => 'nullable',
                'fields.*.translations' => 'nullable|string',
            ]);
    
            $form = new Form();
            $form->name = $validatedData['name'];
            $form->description = $validatedData['description'] ?? null;
            $form->save();
    
            foreach ($validatedData['fields'] as $fieldData) {
                $field = new FormField();
                $field->form_id = $form->id;
                $field->label = $fieldData['label'];
                $field->field_type = $fieldData['fieldType'] ?? $fieldData['field_type'];
                $field->required = $fieldData['required'] ? 1 : 0;
    
                // Handle options and translations
                $optionsData = [];
                $translations = is_string($fieldData['translations']) ? json_decode($fieldData['translations'], true) : $fieldData['translations'];
    
                if ($fieldData['label'] === 'Na seminaru:') {
                    $options = is_string($fieldData['options']) ? json_decode($fieldData['options'], true) : $fieldData['options'];
                    $optionsData = [
                        'options' => $options['options'] ?? [],
                        'showForStatus' => $options['showForStatus'] ?? [],
                        'translations' => [
                            'en' => [
                                'label' => $translations['en']['label'] ?? '',
                                'options' => $translations['en']['options'] ?? [],
                            ],
                            'it' => [
                                'label' => $translations['it']['label'] ?? '',
                                'options' => $translations['it']['options'] ?? [],
                            ],
                        ],
                    ];
                } else {
                    $optionsData = [
                        'options' => $fieldData['options'] ?? '',
                        'translations' => $translations,
                    ];
                }
    
                $field->options = json_encode($optionsData);
                $field->save();
            }
    
            DB::commit();
    
            return response()->json([
                'status' => 'success',
                'message' => 'Form saved successfully.',
                'data' => [
                    'form' => $form
                ]
            ], 200);
        } catch (ValidationException $e) {
            DB::rollBack();
            Log::error('Validation failed: ' . json_encode($e->errors()));
            return response()->json([
                'status' => 'fail',
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error saving form: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while saving the form',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function updateForm(Request $request, $formId)
    {
        DB::beginTransaction();
    
        try {
            // Validation remains the same
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'fields' => 'nullable|array',
                'fields.*.label' => 'nullable|string|max:255',
                'fields.*.fieldType' => 'nullable|string',
                'fields.*.field_type' => 'nullable|string',
                'fields.*.required' => 'nullable|boolean',
                'fields.*.options' => 'nullable',
                'fields.*.translations' => 'nullable',
            ]);
    
            if ($validator->fails()) {
                Log::error('Validation failed: ' . json_encode($validator->errors()));
                return ApiResponse::failed($validator->errors(), 422, 'Validation failed');
            }
    
            $validatedData = $validator->validated();
        
            $form = Form::findOrFail($formId);
            $form->name = $validatedData['name'];
            $form->description = $validatedData['description'] ?? null;
            $form->save();
    
            // Delete existing fields
            FormField::where('form_id', $formId)->delete();
    
            foreach ($validatedData['fields'] as $fieldData) {
                $field = new FormField();
                $field->form_id = $form->id;
                $field->label = $fieldData['label'];
                $field->field_type = $fieldData['fieldType'] ?? $fieldData['field_type'] ?? 'text';
                $field->required = $fieldData['required'] ? 1 : 0;
    
                // Handle options and translations
                $optionsData = [
                    'options' => $this->decodeJsonField($fieldData['options']),
                    'translations' => $this->decodeJsonField($fieldData['translations']),
                ];
    
                if ($fieldData['label'] === 'Na seminaru:') {
                    $optionsData['showForStatus'] = $optionsData['options']['showForStatus'] ?? [];
                    $optionsData['options'] = $optionsData['options']['options'] ?? [];
                }
    
                $field->options = json_encode($optionsData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
                $field->save();
    
                Log::info('Saved field: ' . json_encode($field));
            }
    
            DB::commit();
    
            return ApiResponse::success(['status' => 'success', 'form' => $form, 'message' => 'Form updated successfully.']);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error updating form: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());
            return ApiResponse::failed($e, 500, 'An error occurred while updating the form: ' . $e->getMessage());
        }
    }
    
    private function decodeJsonField($field)
    {
        if (is_string($field)) {
            $decoded = json_decode($field, true);
            return (json_last_error() === JSON_ERROR_NONE) ? $decoded : $field;
        }
        return $field;
    }
    
    private function getDefaultTranslation($label, $lang)
    {
        $defaultTranslations = [
            'en' => [
                'name' => 'Name',
                'username' => 'Surname',
                'spol' => 'Gender',
                'datumrodjenja' => 'Date of Birth',
                'OIB' => 'OIB',
                'Adresa' => 'Address',
                'Grad' => 'City',
                'Email' => 'Email',
                'brojmobitela' => 'Mobile Number'
            ],
            'it' => [
                'name' => 'Nome',
                'username' => 'Cognome',
                'spol' => 'Genere',
                'datumrodjenja' => 'Data di nascita',
                'OIB' => 'OIB',
                'Adresa' => 'Indirizzo',
                'Grad' => 'Città',
                'Email' => 'Email',
                'brojmobitela' => 'Numero di cellulare'
            ]
        ];
    
        return $defaultTranslations[$lang][$label] ?? $label;
    }

}





