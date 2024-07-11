<template>
  <div class="form-creator">
    <div class="header">
      <h1>{{ selectedFormId ? 'Mijenjanje postojeće prijavnice' : 'Administracija Prijavnica' }}</h1>
    </div>

 <vs-card class="form-list paddinzi">
  <vs-button class="" @click="createNewForm">Nova Prijavnica</vs-button>
  <h2>Postojeće Prijavnice ({{ availableForms.length }})</h2>
     <!-- Use flexbox for horizontal layout -->
     <ul class="horizontal-list" v-if="availableForms.length > 0">
        <li v-for="form in availableForms" :key="form.id" @click="selectForm(form.id)">
          {{ form.name }}
        </li>
      </ul>
  <p v-else>Nema prijavnica...</p>
</vs-card>

<div v-if="selectedFormId || isCreatingNewForm">
  <vs-card>
  <h2>{{ selectedFormId ? 'Mijenjanje postojeće prijavnice:' : 'Nova prijavnica:' }} {{ form.name || 'prijavnica nema naziv' }}</h2>
  <form @submit.prevent="saveForm" class="form-container" ref="form">
    <div class="form-group paddinzi">
      <label for="formName">Naziv Prijavnice</label>
      <input
        type="text"
        id="formName"
        v-model="form.name"
        required
      />
    </div>

    <div class="form-group paddinzi">
      <label for="formDescription">Opis ili napomene za prijavnicu (interno)</label>
      <textarea
        id="formDescription"
        v-model="form.description"
      ></textarea>
    </div>

    <h3 class="paddinzi">Pitanja za prijavitelje ({{ form.fields.length }}):</h3>
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
          v-if="showOptions(field)"
          type="text"
          v-model="field.options"
          placeholder="Opcije (odvoji zarezom)"
        />
  
        <button type="button" @click="removeField(index)" class="remove-btn">Obriši</button>


<div v-if="field.label === 'Na seminaru želim'" class="seminar-options">
  <h4>Opcije za "Odabir seminara za status"</h4>
  <div v-for="(options, status) in field.options" :key="status" class="status-options">
    <label>{{ status }}</label>   
    <!-- <label>
      <input
        type="checkbox"
        v-model="field.showForStatus[status]"
      />
      Prikaži za ovaj status
    </label> -->
    <input
      type="text"
      v-model="field.options[status]"
      placeholder="Opcije (odvoji zarezom)"
    />
  </div>
</div>


      </div>
    </div>

    <vs-button @click="addField" class="add-btn">Dodaj pitanje</vs-button>
    <button type="submit" class="save-btn">Spremi prijavnicu</button>
  </form></vs-card>
</div>
  </div>
</template>

<script>
import api from "../../../js/api/modules/skijasi-commerce-theme-configuration.js";

import { Link, Head } from '@inertiajs/inertia-vue'
export default {

  components: {
    Link,
    Head,
  },
  data() {
    return {
      isCreatingNewForm: false,
      loading: true,
      forms: {
        items: []
      },
      selectedFormId: null,
      fixedDisplayLabels: {
        name: 'Ime',
        username: 'Prezime',
        brojmobitela: 'Broj Mobitela'
      },
      form: {
        name: '',
        description: '',
        fields: [
          { label: 'name', field_type: 'text', required: true },
          { label: 'username', field_type: 'text', required: true },
          { label: 'OIB', field_type: 'text', required: true },
          { label: 'Adresa', field_type: 'text', required: true },
          { label: 'Grad', field_type: 'text', required: true },
          { label: 'Email', field_type: 'email', required: true },
          { label: 'brojmobitela', field_type: 'text', required: true },
          { 
          label: 'Na seminaru želim', 
          displayLabel: 'Odabir opcija seminara za status', 
          field_type: 'radio', 
          required: true, 
          fixed: true,
          options: {},
          showForStatus: {}
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
        required: true, // Initialize correctly
        options: '',
        fixed: false
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
        let label;
        if (field.fixed) {
          label = field.label;
        } else {
          label = field.displayLabel || field.label;
        }

        if (!label) {
          throw new Error(`Label cannot be empty for field type: ${field.field_type}`);
        }

        let options = '';
        if (field.options) {
            if (field.label === 'Na seminaru želim') {
            options = JSON.stringify(field.options);
          } else if (field.field_type === 'radio' || field.field_type === 'select') {
              options = field.options; // Assuming options is already a string for these fields
            }
        }

        let processedField = {
          label: label,
          fieldType: field.field_type,
          required: field.required ? 1 : 0,
          options: options
        };

      

        return processedField;
      })
    };

    let response;
    if (this.selectedFormId) {
      response = await api.editForm(this.selectedFormId, formData);
    } else {
      response = await api.saveForm(formData);
    }

    this.$refs.form.reset();
    this.form = {
      name: '',
      description: '',
      fields: []
    };
    this.selectedFormId = null;
    this.isCreatingNewForm = false;
    alert('Uspješno napravljena prijavnica!');
    this.fetchForms();
  } catch (error) {
    console.error('Error saving form:', error);
    alert('Error saving form: ' + error.message);
  }
},

    async selectForm(formId) {
      try {
        this.selectedFormId = formId;
        this.isCreatingNewForm = false;
        const response = await api.getFormFields(formId);

        if (response.data && response.data.fields && response.data.fields['\u0000*\u0000items']) {
          this.form = {
            name: response.data.name || '',
            description: response.data.description || '',
            fields: response.data.fields['\u0000*\u0000items'].map(field => {
              let processedField = {
            label: field.label,
            displayLabel: this.getDisplayLabel(field.label),
            field_type: field.fieldType,
            required: field.required === '1' || field.required === 1 || field.required === true,
            options: field.options ? JSON.parse(field.options) : [],
            fixed: ['name', 'username', 'OIB', 'Adresa', 'Grad', 'Email', 'brojmobitela', 'Na seminaru želim'].includes(field.label)
          };

          
          if (field.label === 'Na seminaru želim') {
  try {
    let parsedOptions = JSON.parse(field.options);
    if (typeof parsedOptions === 'string') {
      parsedOptions = JSON.parse(parsedOptions);
    }
    processedField.options = parsedOptions;
    processedField.showForStatus = field.showForStatus || {};
  } catch (e) {
    console.error('Error parsing Na seminaru želim options:', e);
    processedField.options = {};
    processedField.showForStatus = {};
  }
}
  

          return processedField;
        })

            
          };
        } else {
          throw new Error('Invalid form data structure');
        }
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
          { label: 'name', displayLabel: this.fixedDisplayLabels.name, field_type: 'text', required: true, fixed: true },
          { label: 'username', displayLabel: this.fixedDisplayLabels.username, field_type: 'text', required: true, fixed: true },
          { label: 'OIB', displayLabel: 'OIB', field_type: 'text', required: true, fixed: true },
          { label: 'Adresa', displayLabel: 'Adresa', field_type: 'text', required: true, fixed: true },
          { label: 'Grad', displayLabel: 'Grad', field_type: 'text', required: true, fixed: true },
          { label: 'Email', displayLabel: 'Email', field_type: 'email', required: true, fixed: true },
          { label: 'brojmobitela', displayLabel: this.fixedDisplayLabels.brojmobitela, field_type: 'text', required: true, fixed: true },
          { 
          label: 'Na seminaru želim', 
          displayLabel: 'Odabir seminara za status', 
          field_type: 'radio', 
          required: true, 
          fixed: true,
          options: {
            "Demonstrator skijanja": "",
            "Učitelj skijanja": "",
            "Trener skijanja": "",
            "ISIA učitelj": "",
            "IVSI učitelj": "",
            "Počasni član": "",
            "Nije član": ""
          },
          showForStatus: {
            "Demonstrator skijanja": true,
            "Učitelj skijanja": true,
            "Trener skijanja": true,
            "ISIA učitelj": true,
            "IVSI učitelj": true,
            "Počasni član": true,
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
.form-creator {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;

  border-radius: 5px;
  background-color: #fefefe;
}

.paddinzi {
padding: 1.5rem;
}

.header {
  text-align: center;
  margin-bottom: 20px;
}

.form-list {
  margin-bottom: 20px;
}

.form-list ul {
  list-style-type: none;
  padding: 0;
}

.form-list li {
  cursor: pointer;
  margin-bottom: 5px;
  color: #007bff;
}

.form-list li:hover {
  text-decoration: underline;
}

.form-container {
  display: flex;
  flex-direction: column;
}

.form-group {
  margin-bottom: 15px;
}

.field-row {
  display: flex;
  align-items: center;
}

.field-row input,
.field-row select {
  margin-right: 10px;
}

.add-btn,
.save-btn {
  margin-top: 20px;
}
.save-btn {
  margin-top: 20px;
  padding: 1rem;
  background-color:deepskyblue;
  color: white;
}

.remove-btn {
  background-color: #7a7a7a5e;
  color: white;
  border: none;
  padding: 5px 10px;
  cursor: pointer;
  border-radius: 4px;
}

.remove-btn:hover {
  background-color: #f3513f;
}


.horizontal-list {
    display: flex;
    list-style-type: none;
    padding: 0;
  }

  .horizontal-list li {
    margin-right: 10px; /* Adjust spacing between items as needed */
    cursor: pointer; /* Optional: Change cursor on hover */
  }


  .seminar-options {
  margin-top: 20px;
  border: 1px solid #ccc;
  padding: 10px;
  border-radius: 5px;
}

.status-options {
  margin-bottom: 20px;
}

.status-options label {
  display: block;
  margin-bottom: 5px;
}

.status-options input[type="text"] {
  width: 100%;
  margin-bottom: 5px;
}
</style>
