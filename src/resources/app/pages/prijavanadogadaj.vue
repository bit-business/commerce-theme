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
        v-for="field in formFields"
        :key="field.id"
        class="form-group"
        v-if="shouldShowField(field)"
      >
          <label>
          {{ getDisplayLabel(field.label) }}<span v-if="isFieldRequired(field)" class="asterisk">*</span>
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
          
<div v-else-if="field.fieldType === 'radio' && field.label !== 'Na seminaru:' && (field.required === '1' || field.required === true)" class="radio-group">
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
              <div
                v-else-if="field.fieldType === 'date'" class="date-input-group">
          <input
            type="date"
            :id="field.label"
            v-model="formData[field.label]"
            class="form-input"
          />
        </div>

              
              <div v-if="field.label === 'Na seminaru:' && isFieldRequired(field)" class="radio-group">
          <label>{{ field.displayLabel }}</label>
          <div v-for="(options, status) in getOptions(field.options)" :key="status">
            <div v-if="status === userStatus && getStatusOptions(getOptions(field.options), status).length > 0">
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
      <span class="stars">&#10022;</span>
      <span class="stars">&#10022;</span>
      <span class="stars">&#10022;</span>
      <span class="stars">&#10022;</span>
    </div>
    <p>Prijavnica je uspješno poslana!  <br> <br><br>Prijavljeni ste na događaj!<br>Sljedeći korak je plaćanje koje slijedi nakon ovoga.</p>
    <button class="gumbOK" @click="closeConfirmation">Dalje</button>
  </div>
</div>







<!-- Skiing Type Selection Popup -->
<div v-if="showSkiingTypePopup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Odaberite vrstu skijanja</h2>
    <div class="space-y-4">
      <button @click="selectSkiingType('Samostalno skijanje')" 
       v-if="korisnik.additionalInfo !== 'KIF'"
      class="w-full py-3 bg-blue-500 pt-6 pb-6 text-white text-lg rounded-lg hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105 flex justify-between items-center px-4">
        <span>Samostalno skijanje</span>
        <span class="font-bold">{{ $currency(getSkiingTypePrice('Samostalno skijanje')) }}</span>
      </button>
      <button v-if = "korisnik.statusString !== ''" @click="selectSkiingType('Produženje licence')" class="w-full py-3 bg-green-500 pt-6 pb-6 text-white text-lg rounded-lg hover:bg-green-600 transition duration-300 ease-in-out transform hover:scale-105 flex justify-between items-center px-4">
        <span>{{ korisnik.additionalInfo === 'KIF' ? 'Grupno skijanje' : 'Produženje licence' }}</span>
        <span class="font-bold">{{ $currency(getSkiingTypePrice('Produženje licence')) }}</span>
      </button>
    </div>
    <button @click="showSkiingTypePopup = false" class="text-nazad mt-6 w-3/4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">
      Nazad
    </button>
  </div>
</div>

  <!-- Loading Overlay -->
  <div v-if="isLoading" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-5 rounded-full">
      <svg class="animate-spin h-10 w-10 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
      </svg>
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
  spol: 'Spol',
  datumrodjenja: 'Datum Rođenja',
  brojmobitela: 'Broj Mobitela'
  
};

export default {
  layout: [appLayout],
  props: {
    formId: {
      type: [Number, String],
      required: true
    },
    slug: {
      type: String,
      required: true
    },
  },
  components: {
    Link,
    Head
  },
  data() {
    return {
      selectedProduct: {
        id: null
      },
      quantity: 1,
      product: {
        closed: 1, 
        form_id: null,

        desc: null,
        desc2: null,
        desc3: null,
        desc4: null,
        desc5: null,
        name: "",
        datum_pocetka: null,
        datum_kraja: null,
        mjesto: "",
        prijavnicalink: "",
        sakrij: null,


        reviewAvgRating: 0,
        reviewCount: 0,
        productCategory: {
          name: null,
          slug: null,
        },
        productDetails: [
          {
            price: null,
            quantity: 0,
            discount: {
              active: false,
              discountFixed: 0,
              discountPercent: 0,
              discountType: 'fixed'
            },
            sold: 0
          }
        ],
        productImage: null,
        slug: null,
        updatedAt: this.$moment.now(),
      },

      showSkiingTypePopup: false,
      selectedSkiingType: null,
      isLoading: false,


      formFields: [],
      formData: {},
      userId: null,

      korisnik: [],

      gdprAgreement: false,
      activeDropdown: null,
      errors: {},
      showConfirmation: false,

      scrollPosition: 0,
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

  beforeDestroy() {
  document.removeEventListener('click', this.closeAllDropdowns);
    window.removeEventListener('scroll', this.handleScroll);
  },
  updated() {
    this.$nextTick(() => {
      window.scrollTo(0, this.scrollPosition);
    });
  },

  watch: {
    user: {
      handler(newValue) {
        this.fetchForms(newValue);
      },
      immediate: true,
      deep: true
    },
    '$page.props': {
      handler() {
        this.getProduct()
      },
      deep: true
    },
  },

  mounted() {
    if (!this.isAuthenticated) {
      sessionStorage.setItem('previousRoute', this.route('skijasi.commerce-theme.prijavanadogadaj', { 
        id: this.formId, 
        slug: this.slug 
      }));
      this.$inertia.visit(this.route('skijasi.commerce-theme.login'))
    } else {
      this.ucitajClanove();
      this.getProduct();
    }

    document.addEventListener('click', this.closeAllDropdowns);
    window.addEventListener('scroll', this.handleScroll);
  },
  methods: {

    handleScroll() {
      this.scrollPosition = window.pageYOffset;
    },

    closeAllDropdowns(event) {
    if (!event.target.closest('.dropdown')) {
      this.activeDropdown = null;
    }
  },

    getSkiingTypePrice(type) {
      if (type === 'Samostalno skijanje') {
        const hzutsProduct = this.product.productDetails.find(
      detail => detail.name === "HZUTS član"
    );
    return hzutsProduct ? hzutsProduct.price : 0;
        // const matchingProduct = this.product.productDetails.find(
        //   detail => detail.name === this.korisnik.statusString
        // );
        // return matchingProduct ? matchingProduct.price : 0;
      } else if (type === 'Produženje licence') {
        const grupnoProduct = this.product.productDetails.find(
          detail => detail.name === "Produženje licence"
        );
        return grupnoProduct ? grupnoProduct.price : 0;
      }
      return 0;
    },


    buyNow() {
              // if (this.selectedProduct.id === null) {
              //   this.$helper.alert("Potrebno je odabrati barem jednu vrstu!")
              //   return
              // }

              if (!this.isAuthenticated) {
                this.$helper.alert("Morate se prijaviti prvo. Niste logirani!")
                this.$inertia.visit(this.route('skijasi.commerce-theme.login'))
                return
              }
          
              this.isLoading = true; // Start loading

        // Check if the user is "Nije član"
        if (this.korisnik.statusString === "Nije član" || this.korisnik.statusString === "") {

          // Set the product for "Nije član" without showing the popup
          const nijeclanProduct = this.product.productDetails.find(
            detail => detail.name === "Nije član"
          );
          this.selectedProduct.id = nijeclanProduct ? nijeclanProduct.id : this.product.productDetails[0].id;
          this.processOrder();
        } else {
          // Show the skiing type selection popup for other users
          this.isLoading = false; 
          // this.showSkiingTypePopup = true;
          this.$inertia.visit(this.route('skijasi.commerce-theme.zaduzenja'))
         // Stop loading as we're waiting for user input
        }

   },

   processOrder() {
  this.isLoading = true;
  let currentCartQuantity = 0;
  let productDetail;

  this.$api.skijasiCart.browse()
    .then(cartResponse => {
      const currentCartItem = cartResponse.data.carts.find(item => item.product_detail_id === this.selectedProduct.id);
      currentCartQuantity = currentCartItem ? currentCartItem.quantity : 0;
      return this.$api.skijasiProduct.read({ slug: this.slug });
    })
    .then(productResponse => {
      productDetail = productResponse.data.product.productDetails.find(detail => detail.id === this.selectedProduct.id);
      
      if (!productDetail) {
        throw new Error('Product detail not found');
      }

      const totalRequestedQuantity = currentCartQuantity + this.quantity;

      if (totalRequestedQuantity > productDetail.quantity) {
        throw new Error('skijasi_commerce::validation.stock_not_available');
      }

      return this.$api.skijasiCart.add({
        id: this.selectedProduct.id,
        quantity: this.quantity
      });
    })
    .then(addToCartResponse => {
      this.$helper.alert(addToCartResponse.message);
      return this.$store.dispatch('FETCH_CARTS');
    })
    .then(() => {
      this.$inertia.visit(this.route('skijasi.commerce-theme.zaduzenja'));
    })
    .catch(err => {
      if (err.message === 'skijasi_commerce::validation.stock_not_available') {
        this.$helper.alert('Nažalost, nema dovoljno zaliha za ovu narudžbu.');
      } else {
        console.error('Error in processOrder:', err);
        this.$helper.displayErrors(err);
      }
    })
    .finally(() => {
      this.isLoading = false;
    });
},

selectSkiingType(type) {
  this.selectedSkiingType = type;
  this.setSelectedProduct();
  if (this.selectedProduct.id) {
    this.showSkiingTypePopup = false;
    this.processOrder(); // Process the order after selection
  }
},

getProduct() {
  this.$api.skijasiProduct
  .read({ slug: this.slug })
    .then(res => {
      this.product = res.data.product;
      this.product.reviewAvgRating = parseFloat(res.data.product.reviewAvgRating) || 0;
      this.activeImageSource = res.data.product.productDetails[0].productImage;
      this.activePrice = res.data.product.productDetails[0].price;
      this.activeStock = res.data.product.productDetails[0].quantity;
      this.activeDiscount = res.data.product.productDetails[0].discount;
// this.getSimilarProduct() // this.getReviews() 
     

     
    })
    .catch(err => {
      this.$helper.displayErrors(err);
      this.$inertia.visit(this.route('skijasi.commerce-theme.404'));
    });
},

setSelectedProduct() {
  if (this.korisnik.statusString === "Nije član" || this.korisnik.statusString === "") {
    const nijeclanProduct = this.product.productDetails.find(
      detail => detail.name === "Nije član"
    );
    this.selectedProduct.id = nijeclanProduct ? nijeclanProduct.id : this.product.productDetails[0].id;
  } else if (this.selectedSkiingType === 'Samostalno skijanje') {
    const hzutsProduct = this.product.productDetails.find(
      detail => detail.name === "HZUTS član"
    );
    this.selectedProduct.id = hzutsProduct ? hzutsProduct.id : this.product.productDetails[0].id;
  } else if (this.selectedSkiingType === 'Produženje licence') {
    const grupnoProduct = this.product.productDetails.find(
      detail => detail.name === "Produženje licence"
    );
    if (grupnoProduct) {
      this.selectedProduct.id = grupnoProduct.id;
    } else {
      // Handle case where "Produženje licence" is not found
      this.$helper.alert("Opcija 'Produženje licence' nije dostupna. Molimo odaberite drugu opciju.");
      this.showSkiingTypePopup = true; 
      this.isLoading = false; 
      // Show the popup again
      return; // Exit the method without setting selectedProduct.id
    }
  }

  // Log the selected product for debugging
  console.log("Selected product ID:", this.selectedProduct.id);
},


    shouldShowField(field) {
      if (field.label === 'Na seminaru:') {
        const options = this.getOptions(field.options);
        const statusOptions = this.getStatusOptions(options, this.userStatus);
        return statusOptions.length > 0;
      }
      return true;
    },

    isFieldRequired(field) {
      // If the field label is 'Napomena', it should not be required
      if (field.label === 'Napomena') {
        return false;
      }

      // Check if the field is 'Na seminaru:' and has no options for the current status
      if (field.label === 'Na seminaru:') {
        const options = this.getOptions(field.options);
        const statusOptions = this.getStatusOptions(options, this.userStatus);
        if (statusOptions.length === 0) {
          return false;
        }
      }
         // General condition to check if the field is required
         return field.required === '1' || field.required === true || field.required === 1;
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


    shouldShowStatus(field, status) {
      if (field.label !== 'Na seminaru:') {
        return true;
      }
      if (this.userStatus === status) {
        return true;
      }
      if (status === "Nije član" && !this.getOptions(field.options)[this.userStatus]) {
        return false; // Hide for "Nije član" status
      }
      return false;
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
    // this.$inertia.visit(this.route('skijasi.commerce-theme.profile'))
    this.buyNow();
  },


  async submitForm() {
      try {
        if (!this.formId) {
          throw new Error('Form ID is not set');
        }

        // Validate required fields
        const errors = {};
        this.formFields.forEach(field => {
          if (this.isFieldRequired(field) && this.shouldShowField(field) && !this.formData[field.label]) {
            errors[field.label] = 'Ovo polje niste ispunili';
          }
        });

        // Special handling for "Na seminaru:" field
        if (this.formFields.some(field => field.label === 'Na seminaru:')) {
          const naSeminaruField = this.formFields.find(field => field.label === 'Na seminaru:');
          const options = this.getOptions(naSeminaruField.options);
          const statusOptions = this.getStatusOptions(options, this.userStatus);
          
          if (statusOptions.length === 0) {
            // If there are no options for the user's status, remove any existing error for this field
            delete errors['Na seminaru:'];
            // Also remove the field from formData to prevent submitting an empty value
            delete this.formData['Na seminaru:'];
          }
        }

        if (Object.keys(errors).length > 0) {
          this.errors = errors;
          alert('Molimo ispunite sva polja prijavnice.');
          return;
        }

        // Create a copy of the form data
        const submissionData = { ...this.formData };

        // Safely add user status and ID
        submissionData['Status člana'] = this.userStatus || 'Nepoznato';
        submissionData['Hzuts ID'] = this.korisnik && this.korisnik.idmember ? this.korisnik.idmember.toString() : null;

        
        // Submit the form with the updated data
        const response = await api.saveFormEntry(this.formId, submissionData);
        this.$refs.form.reset();
        this.showConfirmation = true; 
      } catch (error) {
        alert(error.message || 'Greška prilikom slanja prijavnice. Pokušajte ponovo ili nas kontaktirajte.');
      }
    },

    formatDateToCroatian(dateString) {
      if (!dateString) return '';
      const [year, month, day] = dateString.split('-');
      return `${day}.${month}.${year}`;
    },

    parseCroatianDate(dateString) {
      if (!dateString) return '';
      const [day, month, year] = dateString.split('.');
      return `${year}-${month}-${day}`;
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


/* Styles for the enhanced confirmation dialog */
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

.confirmation-dialog {
  background: white;

  border-radius: 16px;
  text-align: center;
  transform: scale(0.9);
  opacity: 0;
  animation: dialog-appear 0.5s ease forwards;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
  max-width: 90%;
  width: 350px;
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
  width: 120px;
  height: 120px;
  background-color: #00aaff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 30px;
  position: relative;
  overflow: hidden;
}

.checkmark {
  color: white;
  font-weight: 900;
  font-size: 60px;
  animation: checkmark-appear 1s ease forwards;
}

.stars {
  color: white;
  position: absolute;
  font-size: 24px;
  animation: stars-animate 2s ease-in-out infinite;
}

.stars:nth-child(2) { top: 20%; left: 20%; animation-delay: 0.2s; }
.stars:nth-child(3) { top: 20%; right: 20%; animation-delay: 0.4s; }
.stars:nth-child(4) { bottom: 20%; left: 20%; animation-delay: 0.6s; }
.stars:nth-child(5) { bottom: 20%; right: 20%; animation-delay: 0.8s; }

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

@keyframes stars-animate {
  0%, 100% {
    transform: scale(1);
    opacity: 1;
  }
  50% {
    transform: scale(1.5);
    opacity: 0.7;
  }
}

.confirmation-dialog p {
  font-size: 1.7rem;
  font-weight: bold;
  color: #333;
  margin-bottom: 30px;
  animation: text-appear 0.5s ease forwards 0.3s;
  opacity: 0;

}

@keyframes text-appear {
  0% {
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}

.gumbOK {
  background-color: #00aaff;
  color: white;
  padding: 15px 30px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-size: 1.2rem;
  font-weight: 600;
  text-transform: uppercase;
  transition: all 0.3s ease;
  animation: button-appear 0.5s ease forwards 0.5s;
  opacity: 0;
}

.gumbOK:hover {
  background-color: #0088cc;
  transform: translateY(-2px);
  box-shadow: 0 4px 10px rgba(0, 170, 255, 0.3);
}

@keyframes button-appear {
  0% {
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}

/* Add a subtle background animation */
.confirmation-dialog::before {
  content: '';
  position: absolute;
  top: -30%;
  left: -30%;
  right: -30%;
  bottom: -30%;
  background: linear-gradient(45deg, #f3f3f3, #e6e6e6, #f3f3f3);
  z-index: -1;
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