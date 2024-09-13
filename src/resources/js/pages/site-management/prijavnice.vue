<template>
  <div class="form-creator">
    <div class="header">
      <h1>{{ selectedFormId ? 'Mijenjanje Postojeće Prijavnice' : 'Administracija Prijavnica' }}</h1>
    </div>

 <vs-card class="form-list paddinzi"> 
  <div class="button-wrapper">
  <vs-button class="nova-prijavnica-btn" @click="createNewForm">Nova Prijavnica</vs-button></div>
  <h2>Postojeće Prijavnice ({{ availableForms.length }})</h2>
     <!-- Use flexbox for horizontal layout -->

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
      placeholder="Unesite interne napomene ili opis prijavnice (neće biti vidljivo kandidatima)"
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
          v-if="showOptions(field)"
          type="text"
          v-model="field.options"
          placeholder="Opcije (odvoji zarezom)"
        />
  
        <button type="button" @click="removeField(index)" class="remove-btn">Obriši</button>


<div v-if="field.label === 'Na seminaru:'" class="seminar-options-container">
  <div class="seminar-options">
  <h4>Opcije za "Na seminaru:"</h4>
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
          { label: 'name', field_type: 'text', required: true },
          { label: 'username', field_type: 'text', required: true },
          { label: 'spol', field_type: 'text', required: true },
          { label: 'datumrodjenja', field_type: 'date', required: true },
          { label: 'OIB', field_type: 'text', required: true },
          { label: 'Adresa', field_type: 'text', required: true },
          { label: 'Grad', field_type: 'text', required: true },
          { label: 'Email', field_type: 'email', required: true },
          { label: 'brojmobitela', field_type: 'text', required: true },
          { 
          label: 'Na seminaru:', 
          displayLabel: 'Na seminaru:', 
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
            if (field.label === 'Na seminaru:') {
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


    this.saveSuccess = true;
    setTimeout(() => {
      this.saveSuccess = false;
    }, 3000);

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
            fixed: ['name', 'username', 'spol', 'datumrodjenja', 'OIB', 'Adresa', 'Grad', 'Email', 'brojmobitela', 'Na seminaru:'].includes(field.label)
          };

          
          if (field.label === 'Na seminaru:') {
  try {
    let parsedOptions = JSON.parse(field.options);
    if (typeof parsedOptions === 'string') {
      parsedOptions = JSON.parse(parsedOptions);
    }
    processedField.options = parsedOptions;
    processedField.showForStatus = field.showForStatus || {};
  } catch (e) {
    console.error('Error parsing Na seminaru: options:', e);
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
          { label: 'spol', displayLabel: 'Spol', field_type: 'text', required: true, fixed: true },
          { label: 'datumrodjenja', displayLabel: 'Datum rođenja', field_type: 'date', required: true, fixed: true },
          { label: 'OIB', displayLabel: 'OIB', field_type: 'text', required: true, fixed: true },
          { label: 'Adresa', displayLabel: 'Adresa', field_type: 'text', required: true, fixed: true },
          { label: 'Grad', displayLabel: 'Grad', field_type: 'text', required: true, fixed: true },
          { label: 'Email', displayLabel: 'Email', field_type: 'email', required: true, fixed: true },
          { label: 'brojmobitela', displayLabel: this.fixedDisplayLabels.brojmobitela, field_type: 'text', required: true, fixed: true },
          { 
          label: 'Na seminaru:', 
          displayLabel: 'Na seminaru:', 
          field_type: 'radio', 
          required: true, 
          fixed: true,
          options: {
            "Demonstrator skijanja": "",
            "Učitelj skijanja": "",
            "Voditelj skijanja": "",
            "ISIA učitelj": "",
            "IVSI učitelj": "",
            "Nije član": "",
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
            "Nije član": true,
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
  max-width: 1200px;
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
</style>