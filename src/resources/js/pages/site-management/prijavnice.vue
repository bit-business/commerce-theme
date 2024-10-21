<template>
  <div class="form-creator">
    <div class="header">
      <h1>{{ selectedFormId ? 'Mijenjanje Postojeće Prijavnice' : 'Administracija Prijavnica' }}</h1>
    </div>

    <vs-card class="form-list paddinzi"> 
      <div class="button-wrapper">
        <vs-button class="nova-prijavnica-btn" @click="createNewForm">Nova Prijavnica</vs-button>
      </div>
      <h2>Postojeće Prijavnice ({{ availableForms.length }})</h2>
      <transition-group name="slide" tag="ul" class="horizontal-list" v-if="availableForms.length > 0">
        <li v-for="form in availableForms" :key="form.id" @click="selectForm(form.id)">
          {{ form.name }}
        </li>
      </transition-group>
      <p v-else>Nema prijavnica...</p>
    </vs-card>

    <div v-if="selectedFormId || isCreatingNewForm">
      <vs-card>
        <h2>{{ selectedFormId ? 'Naziv spremljene prijavnice:' : 'Nova prijavnica:' }} {{ form.name || 'prijavnica nema naziv' }}</h2>
        <form @submit.prevent="saveForm" class="form-container" ref="form">
          <!-- Existing form inputs -->
          <div class="form-group">
            <label for="formName" class="form-label">Naziv prijavnice</label>
            <input
              type="text"
              id="formName"
              v-model="form.name"
              required
              class="form-input"
              placeholder="Unesite naziv prijavnice"
            />
          </div>

          <div class="form-group">
            <label for="formDescription" class="form-label">Interna napomena (opcionalno)</label>
            <textarea
              id="formDescription"
              v-model="form.description"
              class="form-input"
              rows="3"
              placeholder="Unesite interne napomene ili opis prijavnice (neće biti vidljivo prijaviteljima)"
            ></textarea>
          </div>

          <vs-button v-if="selectedFormId" @click="navigateToPrijava()" class="link-btn">Link na ovu prijavnicu (za kontrolu kako izgleda) </vs-button>

          <h3 class="paddinzi">Pitanja za prijavitelje ({{ form.fields.length }} pitanja):</h3>
          <div class="form-fields paddinzi">
    <div class="form-group field-row" v-for="(field, index) in form.fields" :key="index">
      <input
        type="checkbox"
        v-model="field.required"
      />
      <input
        type="text"
        v-model="field.displayLabel"
        :disabled="field.fixed"
        placeholder="Upiši pitanje"
        required
      />
      <select v-model="field.field_type" required @change="resetOptions(field)">
        <option v-for="type in fieldTypes" :key="type.value" :value="type.value">
          {{ type.text }}
        </option>
      </select>
      <input
        v-if="showOptions(field) && field.label !== 'Na seminaru:'"
        type="text"
        v-model="field.options"
        placeholder="Opcije (odvoji zarezom)"
      />
      <button type="button" @click="removeField(index)" class="remove-btn">Obriši</button>

  
<!-- Special handling for "Na seminaru:" field -->
<div v-if="field.label === 'Na seminaru:'" class="seminar-options-container">
      <!-- Add translation inputs for "Na seminaru:" label -->
      <div class="translations">
      <input
        type="text"
        v-model="field.translations.en.label"
        placeholder="Engleski prijevod za 'Na seminaru:'"
      />
      <input
        type="text"
        v-model="field.translations.it.label"
        placeholder="Talijanski prijevod za 'Na seminaru:'"
      />
    </div>
  <div class="seminar-options">
    <h3 style="padding-bottom: 1.3rem;" >Opcije za "Na seminaru:"</h3>


    <div v-for="(options, status) in field.options" :key="status" class="status-options">
      <vs-card><label class="font-semibold">{{ status }}</label>
      <input
        type="text"
        v-model="field.options[status]"
        placeholder="Opcije (odvoji zarezom)"
      />
      <!-- Translations for "Na seminaru:" options -->
      <div class="translations">
        <input
          type="text"
          v-model="field.translations.en.options[status]"
          placeholder="Engleski prijevod opcija (odvoji zarezom)"
        />
        <input
          type="text"
          v-model="field.translations.it.options[status]"
          placeholder="Talijanski prijevod opcija (odvoji zarezom)"
        />
      </div></vs-card>
    </div>
  </div>
</div>


      <!-- Translation inputs for other fields -->
      <div v-else class="translations">
        <input
          type="text"
          v-model="field.translations.en.label"
          placeholder="Engleski prijevod pitanja"
        />
        <input
          type="text"
          v-model="field.translations.it.label"
          placeholder="Talijanski prijevod pitanja"
        />
      </div>
  <!-- Translation inputs for options -->
  <div v-if="showOptions(field) && field.label !== 'Na seminaru:'" class="translations">
        <input
          type="text"
          v-model="field.translations.en.options"
          placeholder="Engleski prijevod opcija (odvojit zarezom)"
        />
        <input
          type="text"
          v-model="field.translations.it.options"
          placeholder="Talijanski prijevod opcija (odvojit zarezom)"
        />
      </div>




      </div>
    </div>

    <div class="button-group">
    <vs-button @click="addField" class="add-btn">Dodaj pitanje</vs-button>
    <button type="submit" class="save-btn">Spremi prijavnicu</button>
  </div>
  </form></vs-card>
</div>


<transition name="fade">
  <div v-if="saveSuccess" class="success-message">
    Prijavnica je uspješno spremljena!
  </div>
</transition>
  </div>

  
</template>

<script>
import api from "../../../js/api/modules/skijasi-commerce-theme-configuration.js";
import PrijavaNaDogadaj from '../../../app/pages/prijavanadogadaj.vue';

import { Link, Head } from '@inertiajs/inertia-vue'
import { Inertia } from '@inertiajs/inertia'
export default {

  components: {
    Link,
    Head,
    PrijavaNaDogadaj,
  },
  data() {
    return {
      saveSuccess: false,
      isCreatingNewForm: false,
      loading: true,
      forms: {
        items: []
      },
      selectedFormId: null,
      fixedDisplayLabels: {
        name: 'Ime',
        username: 'Prezime',
        spol: 'Spol',
        datumrodjenja: 'Datum rođenja',
        brojmobitela: 'Broj Mobitela'
      },
      form: {
        name: '',
        description: '',
               fields: [
          { label: 'name', displayLabel: 'Ime', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'Name' }, it: { label: 'Nome' } } },
          { label: 'username', displayLabel: 'Prezime', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'Surname' }, it: { label: 'Cognome' } } },
          { label: 'spol', displayLabel: 'Spol', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'Gender' }, it: { label: 'Genere' } } },
          { label: 'datumrodjenja', displayLabel: 'Datum rođenja', field_type: 'date', required: true, fixed: true, translations: { en: { label: 'Date of Birth' }, it: { label: 'Data di nascita' } } },
          { label: 'OIB', displayLabel: 'OIB', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'OIB' }, it: { label: 'OIB' } } },
          { label: 'Adresa', displayLabel: 'Adresa', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'Address' }, it: { label: 'Indirizzo' } } },
          { label: 'Grad', displayLabel: 'Grad', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'City' }, it: { label: 'Città' } } },
          { label: 'Email', displayLabel: 'Email', field_type: 'email', required: true, fixed: true, translations: { en: { label: 'Email' }, it: { label: 'Email' } } },
          { label: 'brojmobitela', displayLabel: 'Broj Mobitela', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'Phone Number' }, it: { label: 'Numero di cellulare' } } },
          { 
            label: 'Na seminaru:', 
            displayLabel: 'Na seminaru:', 
            field_type: 'radio', 
            required: true, 
            fixed: true,
            options: {},
            showForStatus: {},
            translations: { 
              en: { label: 'At the seminar:', options: '' }, 
              it: { label: 'Al seminario:', options: '' } 
            }
          }
        ]
      },
      fieldTypes: [
        { text: 'Tekst', value: 'text' },
        { text: 'Veliki tekst', value: 'textarea' },
        { text: 'Odabir opcija', value: 'select' },
        { text: 'Odabir (kvačice)', value: 'radio' },
        { text: 'Datum', value: 'date' },
        { text: 'Email', value: 'email' }
      ]
    };
  },
  computed: {
    availableForms() {
      return this.forms.items || [];
    },
  
  },
  mounted() {

    this.fetchForms();
   
  },
  methods: {
    navigateToPrijava() {
  Inertia.visit(`/prijavanadogadaj/${this.selectedFormId}`);
},


    async fetchForms() {
      try {
        const response = await api.browseForm();
        console.log("Raw API response:", response.data);

        let formsData;
        if (typeof response.data === 'string') {
          formsData = JSON.parse(response.data);
        } else {
          formsData = response.data;
        }

        if (formsData && formsData.forms && formsData.forms['\u0000*\u0000items']) {
          this.forms = {
            items: formsData.forms['\u0000*\u0000items'].map(item => ({ ...item }))
          };
        } else {
          console.error("Unexpected API response structure:", formsData);
          this.forms = { items: [] };
        }

      } catch (error) {
        console.error('Error fetching forms:', error);
        this.forms = { items: [] };
      }
     
    },
    addField() {
      this.form.fields.push({
        label: '',
        displayLabel: '',
        field_type: 'text', 
        required: true,
        options: '',
        fixed: false,
        translations: {
          en: { label: '', options: '' },
          it: { label: '', options: '' }
        }
      });
    },

    removeField(index) {
      this.form.fields.splice(index, 1);
    },
    showOptions(field) {
      return field.field_type === 'select' || field.field_type === 'radio';
    },
    resetOptions(field) {
      if (!this.showOptions(field)) {
        field.options = '';
      }
    },


    async saveForm() {
  try {
    const formData = {
      id: this.form.id,
      name: this.form.name,
      description: this.form.description,
      fields: this.form.fields.map(field => {
        let label = field.fixed ? field.label : (field.displayLabel || field.label);
        if (!label) {
          throw new Error(`Label cannot be empty for field type: ${field.field_type}`);
        }

        let options = '';
        let translations = field.translations || { en: {}, it: {} };

        if (field.label === 'Na seminaru:') {
          options = JSON.stringify({
            options: field.options,
            showForStatus: field.showForStatus || {},
            translations: {
              en: { 
                label: translations.en.label || 'At the seminar:',
                options: translations.en.options || {}
              },
              it: { 
                label: translations.it.label || 'Al seminario:',
                options: translations.it.options || {}
              }
            }
          });
        } else if (field.options) {
          options = typeof field.options === 'string' ? field.options : JSON.stringify(field.options);
        }

        return {
          label: label,
          fieldType: field.field_type || 'text',
          required: field.required ? 1 : 0,
          options: options,
          translations: JSON.stringify(translations)
        };
      })
    };

    console.log('Saving form data:', JSON.stringify(formData, null, 2));

    let response;
    if (this.selectedFormId) {
      response = await api.editForm(this.selectedFormId, formData);
    } else {
      response = await api.saveForm(formData);
    }

    console.log('API response:', response);

    if (response.status === 'success' || response.data.status === 'success') {
      // Handle success
      this.$refs.form.reset();
      this.form = {
        name: '',
        description: '',
        fields: this.getDefaultFields()
      };
      this.selectedFormId = null;
      this.isCreatingNewForm = false;

      this.saveSuccess = true;
      setTimeout(() => {
        this.saveSuccess = false;
      }, 3000);

      await this.fetchForms();
    } else {
      throw new Error('API returned unsuccessful status');
    }
  } catch (error) {
    console.error('Error saving form:', error);
    console.error('Error details:', error.response ? error.response.data : 'No response data');
    alert('Error saving form: ' + (error.message || 'Unknown error occurred'));
  }
},

getDefaultFields() {
  return [
    { label: 'name', displayLabel: 'Ime', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'Name' }, it: { label: 'Nome' } } },
    { label: 'username', displayLabel: 'Prezime', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'Surname' }, it: { label: 'Cognome' } } },
    { label: 'spol', displayLabel: 'Spol', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'Gender' }, it: { label: 'Genere' } } },
    { label: 'datumrodjenja', displayLabel: 'Datum rođenja', field_type: 'date', required: true, fixed: true, translations: { en: { label: 'Date of Birth' }, it: { label: 'Data di nascita' } } },
    { label: 'OIB', displayLabel: 'OIB', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'OIB' }, it: { label: 'OIB' } } },
    { label: 'Adresa', displayLabel: 'Adresa', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'Address' }, it: { label: 'Indirizzo' } } },
    { label: 'Grad', displayLabel: 'Grad', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'City' }, it: { label: 'Città' } } },
    { label: 'Email', displayLabel: 'Email', field_type: 'email', required: true, fixed: true, translations: { en: { label: 'Email' }, it: { label: 'Email' } } },
    { label: 'brojmobitela', displayLabel: 'Broj Mobitela', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'Phone Number' }, it: { label: 'Numero di cellulare' } } },
    { 
      label: 'Na seminaru:', 
      displayLabel: 'Na seminaru:', 
      field_type: 'radio', 
      required: true, 
      fixed: true,
      translations: { 
        en: { label: 'At the seminar:', options: {} }, 
        it: { label: 'Al seminario:', options: {} } 
      },
      options: {
        "Demonstrator skijanja": "",
        "Učitelj skijanja": "",
        "Voditelj skijanja": "",
        "ISIA učitelj": "",
        "IVSI učitelj": "",
        "Počasni član": "", 
        "Podupirući član": "",
        "Snowboard Trener": "",
        "Trener skijanja": "",
        "Nije član": "",
      },
      showForStatus: {
        "Demonstrator skijanja": true,
        "Učitelj skijanja": true,
        "Voditelj skijanja": true,
        "ISIA učitelj": true,
        "IVSI učitelj": true,
        "Počasni član": true,
        "Podupirući član": true,
        "Snowboard Trener": true,
        "Trener skijanja": true,
        "Nije član": true
      }
    }
  ];
},


async selectForm(formId) {
  try {
    this.selectedFormId = formId;
    this.isCreatingNewForm = false;
    const response = await api.getFormFields(formId);

    console.log('Raw API response:', response);

    if (!response.data) {
      throw new Error('No data in API response');
    }

    console.log('Response data:', response.data);

    let fields = [];
    if (response.data.fields && Array.isArray(response.data.fields)) {
      fields = response.data.fields;
    } else if (response.data.fields && response.data.fields['\u0000*\u0000items']) {
      fields = response.data.fields['\u0000*\u0000items'];
    } else {
      console.error('Unexpected fields structure:', response.data.fields);
      throw new Error('Unexpected fields structure in API response');
    }

    this.form = {
      name: response.data.name || '',
      description: response.data.description || '',
      fields: fields.map(field => {
        let processedField = {
          label: field.label,
          displayLabel: this.getDisplayLabel(field.label),
          field_type: field.fieldType || field.field_type,
          required: field.required === '1' || field.required === 1 || field.required === true,
          fixed: ['name', 'username', 'spol', 'datumrodjenja', 'OIB', 'Adresa', 'Grad', 'Email', 'brojmobitela', 'Na seminaru:'].includes(field.label),
          translations: field.translations ? (typeof field.translations === 'string' ? JSON.parse(field.translations) : field.translations) : {
            en: { label: '', options: {} },
            it: { label: '', options: {} }
          }
        };

        if (field.label === 'Na seminaru:') {
          try {
            let parsedOptions = typeof field.options === 'string' ? JSON.parse(field.options) : field.options;
            
            // Ensure the structure is correct
            if (parsedOptions.options && parsedOptions.showForStatus) {
              processedField.options = parsedOptions.options;
              processedField.showForStatus = parsedOptions.showForStatus;
            } else {
              // If the structure is not as expected, create a default structure
              processedField.options = parsedOptions;
              processedField.showForStatus = Object.keys(parsedOptions).reduce((acc, key) => {
                acc[key] = true;
                return acc;
              }, {});
            }

            // Handle translations
            if (parsedOptions.translations) {
              processedField.translations = parsedOptions.translations;
            }

            // Ensure translations for "Na seminaru:" label are set
            if (!processedField.translations.en.label) {
              processedField.translations.en.label = 'At the seminar:';
            }
            if (!processedField.translations.it.label) {
              processedField.translations.it.label = 'Al seminario:';
            }

            // Ensure options for translations are initialized
            if (!processedField.translations.en.options) {
              processedField.translations.en.options = {};
            }
            if (!processedField.translations.it.options) {
              processedField.translations.it.options = {};
            }

            // Populate translation options if they're empty
            Object.keys(processedField.options).forEach(status => {
              if (!processedField.translations.en.options[status]) {
                processedField.translations.en.options[status] = processedField.options[status];
              }
              if (!processedField.translations.it.options[status]) {
                processedField.translations.it.options[status] = processedField.options[status];
              }
            });

          } catch (e) {
            console.error('Error parsing Na seminaru: options:', e);
            processedField.options = {
              "Demonstrator skijanja": "",
              "Učitelj skijanja": "",
              "Voditelj skijanja": "",
              "ISIA učitelj": "",
              "IVSI učitelj": "",
              "Počasni član": "", 
              "Podupirući član": "",
              "Snowboard Trener": "",
              "Trener skijanja": "",
              "Nije član": "",
            };
            processedField.showForStatus = Object.keys(processedField.options).reduce((acc, key) => {
              acc[key] = true;
              return acc;
            }, {});
          }
        } else {
          processedField.options = field.options || '';
        }

        // Ensure translations are set for default fields
        if (processedField.fixed) {
          const defaultTranslations = this.getDefaultFields().find(f => f.label === field.label)?.translations;
          if (defaultTranslations) {
            processedField.translations = {
              ...defaultTranslations,
              ...processedField.translations
            };
          }
        }

        return processedField;
      })
    };

    console.log('Processed form data:', this.form);
  } catch (error) {
    console.error('Error fetching form:', error);
    this.form = { name: '', description: '', fields: [] };
  }
},
    getDisplayLabel(label) {
      return this.fixedDisplayLabels[label] || label;
    },
    createNewForm() {
      this.selectedFormId = null;
      this.form = {
        name: '',
        description: '',
        fields: [
        { label: 'name', displayLabel: 'Ime', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'Name' }, it: { label: 'Nome' } } },
          { label: 'username', displayLabel: 'Prezime', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'Surname' }, it: { label: 'Cognome' } } },
          { label: 'spol', displayLabel: 'Spol', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'Gender' }, it: { label: 'Genere' } } },
          { label: 'datumrodjenja', displayLabel: 'Datum rođenja', field_type: 'date', required: true, fixed: true, translations: { en: { label: 'Date of Birth' }, it: { label: 'Data di nascita' } } },
          { label: 'OIB', displayLabel: 'OIB', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'OIB' }, it: { label: 'OIB' } } },
          { label: 'Adresa', displayLabel: 'Adresa', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'Address' }, it: { label: 'Indirizzo' } } },
          { label: 'Grad', displayLabel: 'Grad', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'City' }, it: { label: 'Città' } } },
          { label: 'Email', displayLabel: 'Email', field_type: 'email', required: true, fixed: true, translations: { en: { label: 'Email' }, it: { label: 'Email' } } },
          { label: 'brojmobitela', displayLabel: 'Broj Mobitela', field_type: 'text', required: true, fixed: true, translations: { en: { label: 'Phone Number' }, it: { label: 'Numero di cellulare' } } },
          { 
          label: 'Na seminaru:', 
          displayLabel: 'Na seminaru:', 
          field_type: 'radio', 
          required: true, 
          fixed: true,
          translations: { 
              en: { label: 'At the seminar:', options: '' }, 
              it: { label: 'Al seminario:', options: '' } 
            },
          options: {
            "Demonstrator skijanja": "",
            "Učitelj skijanja": "",
            "Voditelj skijanja": "",
            "ISIA učitelj": "",
            "IVSI učitelj": "",
            "Počasni član": "", 
            "Podupirući član": "",
            "Snowboard Trener": "",
            "Trener skijanja": "",
            "Nije član": "",
          },
          showForStatus: {
            "Demonstrator skijanja": true,
            "Učitelj skijanja": true,
            "Voditelj skijanja": true,
            "ISIA učitelj": true,
            "IVSI učitelj": true,
            "Počasni član": true,
            "Podupirući član": true,
            "Snowboard Trener": true,
            "Trener skijanja": true,
            "Nije član": true
          }
        }
        ]
      };
      this.isCreatingNewForm = true;
    },
  },

};
</script>

<style scoped>
/* Global styles */
* {
  box-sizing: border-box;
  transition: all 0.3s ease;
}
.button-wrapper {
  width: 100%;
  display: flex;
  justify-content: center;
  margin-bottom: 1rem; /* Add some space below the button */
}

.nova-prijavnica-btn {
  /* You can adjust these styles as needed */
  padding: 0.75rem 1.5rem;
  font-size: 1rem;
  font-weight: bold;
}

.form-creator {
  max-width: 1600px;
  margin: 0 auto;
  padding: 3rem;
  background-color: #f8f9fa;
  border-radius: 12px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.paddinzi {
  padding: 2rem;
}

.header {
  text-align: center;
  margin-bottom: 3rem;
}

.header h1 {
  font-size: 2.5rem;
  color: #333;
  animation: fadeIn 0.5s ease-out;
}

.form-list {
  margin-bottom: 3rem;
  background-color: white;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  border-radius: 12px;
  padding: 2rem;
}

.horizontal-list {
  display: flex;
  flex-wrap: wrap;
  list-style-type: none;
  padding: 0;
  margin: 1rem 0;
}

.horizontal-list li {
  margin: 0.75rem 1rem 0.75rem 0;
  padding: 0.75rem 1.5rem;
  background-color: #e9ecef;
  border-radius: 25px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.horizontal-list li:hover {
  background-color: #007bff;
  color: white;
  transform: translateY(-2px);
  box-shadow: 0 2px 4px rgba(0,0,0,0.2);
}

.form-container {
  display: flex;
  flex-direction: column;
  animation: fadeIn 0.5s ease-out;
}

.form-group {
  margin-bottom: 2rem;
  margin-top: 1rem;
}


.field-row {
  display: grid;
  grid-template-columns: auto 1fr auto auto auto;
  gap: 1.5rem;
  align-items: start;
  margin-bottom: 1.5rem;
  padding: 1rem;
  background-color: #f8f9fa;
  border-radius: 8px;
  transition: all 0.3s ease;
}

.field-row:hover {
  background-color: #e9ecef;
  transform: translateY(-2px);
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.field-row input[type="checkbox"] {
  margin-right: 0.75rem;
}

.field-row input[type="text"],
.field-row select {
  padding: 0.75rem;
  border: 1px solid #ced4da;
  border-radius: 6px;
  font-size: 1rem;
}

.add-btn,
.save-btn,
.remove-btn {
  padding: 1rem 2rem;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: all 0.3s ease;
  font-size: 1rem;
  font-weight: bold;
}

.add-btn {
  background-color: #28a745;
  color: white;
}

.save-btn {
  background-color: #007bff;
  color: white;
}

.remove-btn {
  background-color: #dc3545;
  color: white;
}

.add-btn:hover,
.save-btn:hover,
.remove-btn:hover {
  opacity: 0.9;
  transform: translateY(-2px);
  box-shadow: 0 2px 4px rgba(0,0,0,0.2);
}

.seminar-options {
  margin: 2rem auto;
  border: 1px solid #ced4da;
  padding: 1.5rem;
  border-radius: 8px;
  background-color: #f8f9fa;
  width: 100%; /* Take full width of the container */
  max-width: none; /* Remove max-width constraint */
}
.seminar-options-container {
  grid-column: 1 / -1;
  width: 100%;
}

.seminar-options {
  margin: 2rem 0;
  border: 1px solid #ced4da;
  padding: 1.5rem;
  border-radius: 8px;
  background-color: #f8f9fa;
  width: 100%;
}

.status-options label {
  display: block;
  margin-bottom: 0.75rem;
  font-weight: bold;
  color: #333;
}

.status-options input[type="text"] {
  width: 100%;
  padding: 0.75rem;
  border: 1px solid #ced4da;
  border-radius: 6px;
  font-size: 1rem;
}



.button-group {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 2rem;
}

.add-btn,
.save-btn {
  padding: 1rem 2rem;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: all 0.3s ease;
  font-size: 1rem;
  font-weight: bold;
  min-width: 200px;
  margin-bottom: 1rem;  /* Add vertical space between buttons */
}

.add-btn {
  background-color: #28a745;
  color: white;
}

.save-btn {
  background-color: #007bff;
  color: white;
}

.add-btn:hover,
.save-btn:hover {
  opacity: 0.9;
  transform: translateY(-2px);
  box-shadow: 0 2px 4px rgba(0,0,0,0.2);
}

.form-header {
  background-color: #f0f4f8;
  padding: 1.5rem;
  border-radius: 8px;
  margin-bottom: 2rem;
}

.form-header h2 {
  color: #2c3e50;
  font-size: 1.8rem;
  margin-bottom: 1rem;
}

.form-input {
  width: 100%;
  padding: 0.75rem;
  border: 1px solid #ced4da;
  border-radius: 6px;
  font-size: 1rem;
  transition: border-color 0.3s ease;
}

.form-input:focus {
  border-color: #007bff;
  outline: none;
  box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
}

.form-label {
  display: block;
  margin-bottom: 0.5rem;
  font-weight: bold;
  color: #495057;
}

/* Modify existing styles */
.save-btn {
  background-color: #28a745;
  color: white;
  transition: all 0.3s ease;
}

.save-btn:hover {
  background-color: #218838;
  transform: translateY(-2px);
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Add a success message style */
.success-message {
  background-color: #d4edda;
  color: #155724;
  padding: 1rem;
  border-radius: 6px;
  margin-top: 1rem;
  text-align: center;
  font-weight: bold;
  animation: fadeIn 0.5s ease-out;
}

@media (max-width: 768px) {
  .seminar-options {
    width: 95%;  /* Slightly reduced for mobile to ensure some margin */
  }
}


@media (max-width: 768px) {
 

  .form-creator {
    padding: 1.5rem;
  }
  
  .paddinzi {
    padding: 1rem;
  }

  .field-row {
    grid-template-columns: 1fr;
    gap: 1rem;
  }

  .field-row > * {
    width: 100%;
  }

  .seminar-options-container,
  .seminar-options {
    width: 100%;
  }
}

/* Animations */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s ease;
}
.fade-enter, .fade-leave-to {
  opacity: 0;
}

.slide-enter-active, .slide-leave-active {
  transition: all 0.3s ease;
}
.slide-enter, .slide-leave-to {
  transform: translateX(-20px);
  opacity: 0;
}



.link-btn {
  background-color: #17a2b8;
  color: white;
}

.link-btn:hover {
  background-color: #138496;
  transform: translateY(-2px);
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}





.translations {
  display: flex;
  gap: 10px;
  margin-top: 10px;
}

.translations input {
  flex: 1;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
}
</style>