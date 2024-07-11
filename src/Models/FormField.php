<?php

namespace NadzorServera\Skijasi\Theme\CommerceTheme\Models;

use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    protected $table = 'skijasi_form_fields'; 

    protected $fillable = ['form_id', 'label', 'displaylabel', 'field_type', 'options', 'required'];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }
}