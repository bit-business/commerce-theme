<template>
  <div class="form-renderer">
    <div class="form-background">
      <div class="form-content">
        <div class="slikazvijezda"></div>
        <div class="header">
          <h1>Prijavnica</h1>
        </div>

        <form @submit.prevent="submitForm" class="form-container" ref="form">
          <div
            v-if="field.required"
            v-for="field in formFields"
            :key="field.id"
            class="form-group" 
       
          >
  
          
          <label>
  {{ getDisplayLabel(field.label) }}<span class="asterisk">*</span>
</label>
            <div class="input-wrapper">
              <input
                v-if="field.fieldType === 'text' || field.fieldType === 'email'"
                :id="field.label"
                :type="field.fieldType"
                v-model="formData[field.label]"
      
                class="form-input"
              />
              <textarea
                v-else-if="field.fieldType === 'textarea'"
                :id="field.label"
                v-model="formData[field.label]"
              
                class="form-input"
              ></textarea>
              <div v-else-if="field.fieldType === 'select'" class="form-group">
  <div class="dropdown" @click="toggleDropdown(field.label)">
    <div class="dropdown-select">
      <span>{{ formData[field.label] || 'Izaberite' }}</span>
      <i class="arrow" :class="{ 'arrow-up': activeDropdown === field.label }"></i>
    </div>
    <transition name="fade">
      <div class="dropdown-list" v-if="activeDropdown === field.label">
        <div 
          v-for="option in parseOptions(field.options)" 
          :key="option" 
          class="dropdown-list-item" 
          @click.stop="selectOption(option, field.label)"
        >
          {{ option }}
        </div>
      </div>
    </transition>
  </div>
  <span v-if="errors[field.label]" class="error-message">{{ errors[field.label] }}</span>
</div>
          
<div v-else-if="field.fieldType === 'radio' && field.label !== 'Na seminaru želim' && (field.required === '1' || field.required === true)" class="radio-group">
  <div
    v-for="option in parseOptions(field.options)"
    :key="option"
    class="radio-option"
  >
    <input
      type="radio"
      :id="`${field.label}-${option}`"
      :name="field.label"
      :value="option"
      v-model="formData[field.label]"
    
    />
    <label :for="`${field.label}-${option}`">{{ option }}</label>
  </div>
</div>

              <div v-else-if="field.fieldType === 'checkbox'" class="checkbox-group">
                <input
                  type="checkbox"
                  :id="field.label"
                  v-model="formData[field.label]"
            
                />
                <label :for="field.label">{{ field.label }}</label>
              </div>
              <input
                v-else-if="field.fieldType === 'date'"
                type="date"
                :id="field.label"
                v-model="formData[field.label]"
            
                class="form-input"
              />

              
              <div v-if="field.label === 'Na seminaru želim' && field.required" class="radio-group">
  <label>{{ field.displayLabel }}</label>
  <div v-for="(options, status) in getOptions(field.options)" :key="status">
    <div v-if="shouldShowStatus(field, status) && getStatusOptions(getOptions(field.options), status).length > 0">
          <!-- <label class="status-label">{{ status }}</label> -->
      <div v-for="option in getStatusOptions(getOptions(field.options), status)" :key="option" class="radio-option">
        <input 
          type="radio" 
          :id="`${field.label}-${option}`"
          :name="field.label" 
          :value="option" 
       
          v-model="formData[field.label]"
        >
        <label :for="`${field.label}-${option}`">{{ option }}</label>
      </div>
    </div>
  </div>
</div>

            </div>
          </div>
          
          <!-- GDPR Agreement -->
          <div class="form-group gdpr-checkbox">
            <input type="checkbox"
       id="gdpr-agreement"
       v-model="gdprAgreement"
       required 
       class="hidden-checkbox">
<label for="gdpr-agreement" class="custom-checkbox"></label>
  <label for="gdpr-agreement" class="gdpr-label">
    Potvrđujem da sam suglasan s navedenim:<span class="asterisk">*</span><br><br>
    Zaštita i privatnost osobnih podataka (GDPR 2016/679) Prema novom zakonu vezanom uz zaštitu i privatnost podataka (GDPR 2016/679) svi navedeni podaci služe isključivo za potrebe organiziranja usluge (skijanje) za koje se korisnik prijavljuje te se ne koriste u druge svrhe. Zaprimljene podatke čuvamo i obrađujemo korištenjem najsigurnijih metoda zaštite u skladu s navedenim propisima te ih brišemo poštujući propise koji su navedeni u zakonu vezanom uz zaštitu i privatnost podataka. Korisnik u bilo kojem trenutku može zatražiti uklanjanje svojih podataka iz našeg sustava slanjem e-mail poruke na adresu info@hzuts.hr 
  </label>
</div>




          <div class="form-group submit-group">
            <button type="submit" class="submit-btn" :disabled="!gdprAgreement">Pošalji</button>
          </div>
        </form>
      </div>
    </div>

     <!-- Confirmation dialog -->
 <div v-if="showConfirmation" class="confirmation-overlay">
  <div class="confirmation-dialog">
    <div class="checkmark-circle">
      <span class="checkmark">&check;</span>
      <span class="stars">&#10022;</span> <!-- This is a star character -->
    </div>
    <p>Prijavnica je uspješno poslana!</p>
    <button class="gumbOK" @click="closeConfirmation">OK</button>
  </div>
</div>
  </div>





</template>

<script>
import api from "../../js/api/modules/skijasi-commerce-theme-configuration.js";
import podaciusera from '../../../../../core/src/resources/js/api/modules/skijasi-user.js';


import { Link, Head } from '@inertiajs/inertia-vue';
import { mapState } from 'vuex';
import appLayout from '../layouts/app.vue';

const fixedDisplayLabels = {
  name: 'Ime',
  username: 'Prezime',
  brojmobitela: 'Broj Mobitela'
};

export default {
  layout: [appLayout],
  props: ['formId'],
  components: {
    Link,
    Head
  },
  data() {
    return {

      formFields: [],
      formData: {},
      userId: null,

      korisnik: [],

      gdprAgreement: false,
      activeDropdown: null,
      errors: {},
      showConfirmation: false,
    }
  },
  computed: {
    ...mapState({
      isAuthenticated(state) {
        return state.isAuthenticated
      },
      user(state) {
        return state.user
      },
      appName(state) {
        return this.$_.find(state.themeConfigurations, { key: "appName" }).value;
      },
    }),

    userStatus() {
    if (this.korisnik && this.korisnik.status) {
      return this.korisnik.status;
    }
    return this.korisnik.statusString || "Nije član";
  },
     
  
  },



  watch: {
    user: {
      handler(newValue) {
        this.fetchForms(newValue);
      },
      immediate: true,
      deep: true
    }
  },

  mounted() {
    if (!this.isAuthenticated) {
      sessionStorage.setItem('previousRoute', this.route('skijasi.commerce-theme.prijavanadogadaj'));
      this.$inertia.visit(this.route('skijasi.commerce-theme.login'))
    }

this.ucitajClanove();

  },
  methods: {


    shouldShowStatus(field, status) {
    if (field.label !== 'Na seminaru želim') {
      return true; // Show all options for non-OdabirSeminara fields
    }

    // For OdabirSeminara field
    if (this.userStatus === status) {
      return true; // Show options for the user's status
    }

    // If user's status doesn't match any option, show "Nije član"
    if (status === "Nije član" && !this.getOptions(field.options)[this.userStatus]) {
      return true;
    }

    return false; // Hide other options
  },

  getOptions(optionsString) {
    try {
      // Parse the outer JSON string
      const parsedOuter = JSON.parse(optionsString);
      // Parse the inner JSON string
      const parsedInner = JSON.parse(parsedOuter);
      return parsedInner;
    } catch (e) {
      console.error('Error parsing options:', e);
      return {};
    }
  },

  getStatusOptions(options, status) {
    if (typeof options[status] === 'string') {
      return options[status].split(',').map(opt => opt.trim()).filter(opt => opt !== '');
    }
    return [];
  },


    parseOdabirSeminaraOptions(options) {
    if (typeof options === 'string') {
      try {
        return JSON.parse(options);
      } catch (e) {
        console.error('Error parsing OdabirSeminara options:', e);
        return {};
      }
    }
    return options || {};
  },

  shouldShowForStatus(status, field) {
    if (field.showForStatus && typeof field.showForStatus === 'string') {
      try {
        const showForStatus = JSON.parse(field.showForStatus);
        return showForStatus[status];
      } catch (e) {
        console.error('Error parsing showForStatus:', e);
        return true;
      }
    }
    return true;
  },

  
  parseOptions(optionsString) {
    console.log('Original options string:', optionsString);
    if (!optionsString) return [];

    try {
      // Try parsing as JSON first
      const parsed = JSON.parse(optionsString);
      if (Array.isArray(parsed)) {
        return parsed;
      } else if (typeof parsed === 'string') {
        // If it's a string, split by comma
        return this.splitAndClean(parsed);
      } else {
        return [String(parsed)];
      }
    } catch (e) {
      // If JSON parsing fails, treat as a string
      return this.splitAndClean(optionsString);
    }
  },

  splitAndClean(str) {
    return str
      .split(',')
      .map(opt => opt.trim().replace(/^["']|["']$/g, ''))
      .filter(opt => opt !== '');
  },


  toggleDropdown(fieldLabel) {
    if (this.activeDropdown === fieldLabel) {
      this.activeDropdown = null;
    } else {
      this.activeDropdown = fieldLabel;
    }
  },

  selectOption(option, fieldLabel) {
    this.formData[fieldLabel] = option;
    this.activeDropdown = null;
    this.errors[fieldLabel] = null; // Clear any existing error
  },

  getDisplayLabel(label) {
    return fixedDisplayLabels[label] || label;
  },

  async fetchForms(userid) {
  try {
    this.userId = userid;
    const formFieldsResponse = await api.getFormFields(this.formId);
    console.log("Form fields:", formFieldsResponse.data);
    
    // Set formFields and then immediately map over it to normalize the 'required' property
    this.formFields = formFieldsResponse.data.fields["\u0000*\u0000items"] || [];
    this.formFields = this.formFields.map(field => ({
      ...field,
      required: field.required === '1' || field.required === true || field.required === 1
    }));

    // Log the updated formFields to check the 'required' values
    console.log("Updated form fields:", this.formFields);

    this.formFields.forEach(field => {
      this.$set(this.formData, field.label, '');
    });

    const userResponse = await api.getUserData(this.user.id);
    const userData = userResponse.data.user;
    if (userData) {
      Object.keys(this.formData).forEach(key => {
        if (userData[key.toLowerCase()]) {
          this.$set(this.formData, key, userData[key.toLowerCase()]);
        }
      });
    }
    this.$forceUpdate();
  } catch (error) {
    console.error('Error in created hook:', error);
  }
},

  closeConfirmation() {
    this.showConfirmation = false;
    this.$inertia.visit(this.route('skijasi.commerce-theme.profile'))
  },

  async submitForm() {
    try {
      if (!this.formId) {
        throw new Error('Form ID is not set');
      }
        // Create a copy of the form data
    const submissionData = { ...this.formData };

    submissionData['Status člana'] = this.userStatus;
    // Submit the form with the updated data
    const response = await api.saveFormEntry(this.formId, submissionData);
      this.$refs.form.reset();
      this.showConfirmation = true; 
    } catch (error) {
      console.error(error);
      alert('Niste ispunili sve. Molimo pokušajte opet');
    }
  },






  
  async ucitajClanove() {
    

  try {
    this.number = Number(this.user.id);
  
    const response = await podaciusera.readmojstatus({
        id: this.number,
    });
    console.log("TEST PODACI1", response);
    
        this.korisnik = response.data.user;

     
    //  await this.loadAllStatusData();


     
      } catch (error) {
      // this.$closeLoader();
   
  }
},

}
}
</script>
<style scoped>
.form-renderer {
  max-width: 90%;
  margin: 40px auto;
  padding: 0;
  background-color: #ffffff;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  overflow: hidden;
}

.form-background {
  background-image: url("/storage/slike/infoclanarine/desktop/logousredininevidljivi.svg");
  background-size: cover;
  background-position: center;
  padding: 40px;
}

.form-content {
  padding-top: 8%;
  padding-bottom: 8%;
  padding-left: 14%;
  padding-right: 14%;
  border-radius: 8px;
}

.header {
margin-bottom: 3.3rem;

text-align: center;
white-space: nowrap;
}

.header h1 {
  font-size: 2.9rem;
font-weight: 600;
font-family: Inter;
color: #03a9f4;
  font-size: 32px;
  font-weight: bold;
  text-transform: uppercase;
}

.form-container {
  display: flex;
  flex-direction: column;
}

.form-group {
  margin-bottom: 25px;
}

label {
  display: block;
  margin-bottom: 8px;
  font-weight: 600;
  color: #444;
  font-size: 16px;
}

.input-wrapper {
  position: relative;
}

.form-input {
  margin-top: 10px; 

width: 100%;
padding: 20px;
margin-bottom: 20px;
border: 2px solid #00aaff;
border-radius: 24px;
outline: none;
font-size: 18px;
font-weight: 600;

padding-left: 1.8rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;

}

.form-input:focus {
  border-color: #00aaff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(58, 181, 74, 0.25);
}



/* Hide the default checkbox *//* Hide the default checkbox */
.hidden-checkbox {
  display: none;
}

/* Style for the custom checkbox */
.custom-checkbox {

  border: 1.5px solid #00aaff; /* border color, can be omitted if background is solid */

  min-width: 30px;
  min-height: 30px;

  display: inline-block;
  cursor: pointer;
  position: relative;
  top: 6px; /* adjust as needed */
  margin-right: 8px; /* space between checkbox and label */
  background-color: #fff; /* background color when not checked */
  transition: background-color 0.2s; /* Smooth transition for background color */
}

/* When the hidden checkbox is checked, change background and add a "checkmark" */
.hidden-checkbox:checked + .custom-checkbox {
  background-color: #00aaff; /* background color when checked */
}

.hidden-checkbox:checked + .custom-checkbox::after {
  content: '';
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%) rotate(45deg);
  height: 12px; /* half of checkbox height */
  width: 6px; /* a third of checkbox width */
  border-bottom: 2px solid white; /* checkmark color */
  border-right: 2px solid white; /* checkmark color */
}

/* Style for the GDPR label text */
.gdpr-label {
  display: inline-block;
  vertical-align: top;
  cursor: pointer;
  margin: 0;
  padding-bottom: 1.5rem;
  padding-top: 1.3rem;
}
.form-group.gdpr-checkbox {
  display: flex;
  align-items: center;
  gap: 8px;
}



.radio-option input[type="radio"] {
  display: none;
}

.radio-option label {
  display: flex;
  align-items: center;
  cursor: pointer;
  font-size: 16px;
  color: #333;
    padding-top: 6px;
}

.radio-option label::before {
  content: '';
  width: 24px;
  height: 24px;
  border: 2px solid #00aaff;
  border-radius: 4px;
  margin-right: 10px;
  display: inline-block;
  background-color: #fff;
}

.radio-option input[type="radio"]:checked + label::before {
  background-color: #00aaff;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='4' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='20 6 9 17 4 12'%3E%3C/polyline%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: center;
  background-size: 14px;
}

.radio-option input[type="radio"]:checked + label {
  font-weight: bold;
}






.radio-group,
.checkbox-group {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.radio-option,
.checkbox-group {
  display: flex;
  align-items: center;
}

input[type="checkbox"],
input[type="radio"] {
  margin-right: 10px;
  width: 20px;
  height: 20px;
}

.submit-group {
  margin-top: 20px;
}

.submit-btn {
  margin-top: 10px; 

  background-color: #00aaff;
  color: white;
  padding: 20px 15px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-size: 1.2rem;
  font-weight: 600;
  min-width: 100%;
  text-transform: uppercase;
  outline: none;
  border: 2px solid transparent;
  transition: background-color 0.3s ease, transform 0.3s ease;
  width: 100%;
}

.submit-btn:hover:not(:disabled) {
  background-color: #00aaff;
  transform: translateY(-2px);
}

.submit-btn:active:not(:disabled) {
  transform: translateY(0);
}

.submit-btn:disabled {
  background-color: #6c757d;
  cursor: not-allowed;
}

.checkbox-group label {
  font-size: 14px;
  font-weight: normal;
}

.checkbox-group a {
  color: #00aaff;
  text-decoration: none;
}

.checkbox-group a:hover {
  color: #00aaff;
  text-decoration: underline;
}

.asterisk {
  color: red;
  padding-left: 4px;
}
.asterisk-top {
  color: red;
  position: absolute;
  padding-top: 3px;
  padding-left: 3px;
}


/* Custom select container */
.custom-select-container {
  position: relative;
  display: inline-block;
  width: 100%;
}

/* Custom select dropdown styling */
.custom-select {
  width: 100%;
  padding: 10px 15px;
  border-radius: 4px;
  border: 2px solid #00aaff;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background-color: white;
  position: relative;
  z-index: 1;
}

.dropdown {
  position: relative;
  width: 100%;
  font-weight: 600;
padding-top: 10px;
}

.dropdown-select {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 23px 15px;
  border: 2px solid #00aaff; /* Your border color */
  border-radius: 25px; /* Adjust as per the design */
  background-color: #fff; /* Your background color */
  cursor: pointer;

  padding-left: 25px;
}

.dropdown-list {
  position: absolute;
  padding: 10px 20px;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 10;
  background-color: #fff;
  box-shadow: 0 7px 10px rgba(0, 0, 0, 0.22);
  overflow: hidden;
}

.dropdown-list-item {
  padding: 10px 20px;
  border-bottom: 1px solid #eaeaea; /* Last item shouldn't have a border */
  cursor: pointer;
}

.dropdown-list-item:last-child {
  border-bottom: none;
}

.dropdown-list-item:hover {
  background-color: #eaeaea; /* Your hover color */
}

/* Arrow styles */
.arrow {
  border: solid #000;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 4px;
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}

.arrow-up {
  transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
}

.slikazvijezda {
  position: absolute; /* change from relative to absolute */
  top: 7%; /* align to the top edge of the form-container */
  right: 7%; /* align to the right edge of the form-container */
  background-image: url("/storage/slike/nasiclanovi/slikaplaceholder.png");
  background-size: contain; /* or cover, depending on your needs */
  background-repeat: no-repeat;
  width: 20%;
  height: 20%;
}

.confirmation-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 1000;
}
.gumbOK {
  position: relative;
margin-top: 41px; 
background-color: #00aaff;
color: white;
padding: 15px 15px;
border: none;
border-radius: 8px;
cursor: pointer;
font-size: 1.2rem;
font-weight: 600;
min-width: 50%;
text-transform: uppercase;
outline: none;
border: 2px solid transparent;
transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
}

.confirmation-dialog {

  background: white;
  padding: 50px;
  border-radius: 12px;
  text-align: center;
  transform: scale(0.9); /* start smaller */
  opacity: 0; /* start transparent */
  animation: dialog-appear 0.5s ease forwards; /* animate in */
}

@keyframes dialog-appear {
  0% {
    transform: scale(0.9);
    opacity: 0;
  }
  100% {
    transform: scale(1);
    opacity: 1;
  }
}

.checkmark-circle {
  width: 100px;
  height: 100px;
  background-color: #00aaff; /* green background */
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 20px;
  position: relative;
}

.checkmark {
  color: white;
  font-size: 50px;
  animation: checkmark-appear 0.5s ease forwards;
}

.stars {
  color: white;
  position: absolute;
  font-size: 20px;
  animation: stars-appear 1s ease infinite;
  opacity: 0; /* initially hidden */
}

/* Keyframes for checkmark appearance */
@keyframes checkmark-appear {
  0% {
    transform: scale(0);
    opacity: 0;
  }
  50% {
    transform: scale(1.2);
    opacity: 1;
  }
  100% {
    transform: scale(1);
  }
}

/* Keyframes for stars animation */
@keyframes stars-appear {
  0%, 100% {
    transform: translate(0, 0);
    opacity: 1;
  }
  50% {
    transform: translate(20px, -20px);
    opacity: 0;
  }
}





@media (min-width: 1200px) {
.form-content {
  padding-top: 7%;
  padding-bottom: 7%;
  padding-left: 20%;
  padding-right: 20%;
  border-radius: 8px;
}
.form-renderer {
  max-width: 70%;
}
.header h1 {
  font-size: 2.9rem;
}
}



@media (max-width: 768px) {
  .form-background {
    padding: 20px;
  }

  .form-content {
    padding: 30px;
  }

  .header h1 {
    font-size: 2.13rem;
  }

  .form-input,
  .submit-btn {
    font-size: 16px;
  }
}
</style>