<template>
    <div class="glavniscreen">
  <div class="form-container">
    <div class="form-header">
      <h1>{{ $t('prijavnica-za-clanstvo') }}</h1>
    </div>

    <div class="slikazvijezda"></div>

    <form @submit.prevent="submitForm">
      <!-- Ime -->
      <div class="form-group">
        <label for="ime">{{ $t('ime-0') }} <span class="asterisk">*</span></label>
        <input   type="text" id="ime" v-model.lazy="form.name" required>
        <span v-if="errors.name" class="error-message">{{ errors.name }}</span>
      </div>

      <!-- Prezime -->
      <div class="form-group">
        <label for="prezime">{{ $t('prezime') }} <span class="asterisk">*</span></label>
        <input  type="text" id="prezime" v-model.lazy="form.username" required>
        <span v-if="errors.username" class="error-message">{{ errors.username }}</span>
      </div>




      <!-- OIB -->
      <div class="form-group">
        <label for="oib">OIB <span class="asterisk">*</span></label>
        <input  type="text" id="oib" v-model.lazy="form.oib" required>
        <span v-if="errors.oib" class="error-message">{{ errors.oib }}</span>
      </div>

      <!-- Datum rođenja -->
      <div class="form-group">
        <label for="datumRodenja">{{ $t('datum-rodenja') }} <span class="asterisk">*</span></label>
        <input  type="date" id="datumRodenja" v-model.lazy="form.datumrodjenja" required>
        <span v-if="errors.datumrodjenja" class="error-message">{{ errors.datumrodjenja }}</span>
      </div>

      <!-- Adresa -->
      <div class="form-group">
        <label for="adresa">{{ $t('adresa') }} <span class="asterisk">*</span></label>
        <input  type="text" id="adresa" v-model.lazy="form.adresa" required>
        <span v-if="errors.adresa" class="error-message">{{ errors.adresa }}</span>
      </div>

      <!-- Poštanski broj -->
      <div class="form-group">
        <label for="postanskiBroj">{{ $t('postanski-broj') }} <span class="asterisk">*</span></label>
        <input type="text" id="postanskiBroj" v-model.lazy="form.postanskibroj" required>
        <span v-if="errors.postanskibroj" class="error-message">{{ errors.postanskibroj }}</span>
      </div>

      <!-- Grad -->
      <div class="form-group">
        <label for="grad">{{ $t('grad') }} <span class="asterisk">*</span></label>
        <input type="text" id="grad" v-model.lazy="form.grad" required>
        <span v-if="errors.grad" class="error-message">{{ errors.grad }}</span>
      </div>

      <!-- Država -->
      <div class="form-group">
        <label for="drzava">{{ $t('drzava') }} <span class="asterisk">*</span></label>
        <input type="text" id="drzava" v-model.lazy="form.drzava" required>
        <span v-if="errors.drzava" class="error-message">{{ errors.drzava }}</span>
      </div>

      <!-- Mobitel -->
      <div class="form-group">
        <label for="mobitel">{{ $t('mobitel') }} <span class="asterisk">*</span></label>
        <input type="tel" id="mobitel" v-model.lazy="form.brojmobitela" required>
        <span v-if="errors.brojmobitela" class="error-message">{{ errors.brojmobitela }}</span>

      </div>
      

      <!-- E-mail adresa -->
      <div class="form-group">
        <label for="email">{{ $t('e-mail-adresa') }} <span class="asterisk">*</span></label>
        <input type="email" id="email" v-model.lazy="form.email" required>
        <span v-if="errors.email" class="error-message">{{ errors.email }}</span>
      </div>

        <!-- Spol -->  
<!-- Regular Dropdowns (spol, ostvarenistatus) -->
<div class="form-group" v-for="(options, model) in dropdownOptions" :key="model" required>
  <label class="selektortekst" :for="model">{{ translatedLabels[model] }} <span class="asterisk">*</span></label>
  <div class="dropdown" @click.prevent="toggleDropdown(model, $event)">
    <div class="dropdown-select">
      <span>
        {{ 
          form[model] 
            ? (model === 'spol' 
                ? $t(`gender.${form[model]}`) 
                : $t(`status.${form[model]}`))
            : $t('common.choose') 
        }}
      </span>
      <i class="arrow" :class="{ 'arrow-up': activeDropdown === model }"></i>
    </div>
    <transition name="fade">
      <div class="dropdown-list" v-if="activeDropdown === model">
        <div 
          v-for="option in translatedDropdownOptions[model]" 
          :key="option.original"
          class="dropdown-list-item" 
          @click.stop="selectOption(option.original, model)"
        >
          {{ option.translated }}
        </div>
      </div>
    </transition>
  </div>
  <span v-if="errors[model]" class="error-message">{{ errors[model] }}</span>
</div>


      <!-- Datum i mjesto polaganja -->
      <div class="form-group">
        <label for="datumMjestoPolaganja">{{ $t('datum-i-mjesto-polaganja-za-ucitelja-trenera') }} <span class="asterisk">*</span></label>
        <input type="text" id="datumMjestoPolaganja" v-model.lazy="form.datummjestopolaganja" required>
        <span v-if="errors.datummjestopolaganja" class="error-message">{{ errors.datummjestopolaganja }}</span>
      </div>

      <!-- Ustanova -->
      <div class="form-group">
        <label for="ustanova">{{ $t('ustanova-koja-je-izdala-uvjerenje-za-ucitelja-trenera') }} <span class="asterisk">*</span></label>
        <input type="text" id="ustanova" v-model.lazy="form.ustanova" required>
        <span v-if="errors.ustanova" class="error-message">{{ errors.ustanova }}</span>
      </div>

  <!-- Zbor -->
<!-- Zbor Dropdown (untranslated) -->
<div class="form-group" v-for="(options, model) in dropdownOptionsZbor" :key="model" required>
  <label class="selektortekst" :for="model">{{ translatedLabelsZbor[model] }} <span class="asterisk">*</span></label>
  <div class="dropdown" @click.prevent="toggleDropdown(model, $event)">
    <div class="dropdown-select">
      <span>{{ form[model] || $t('common.choose') }}</span>
      <i class="arrow" :class="{ 'arrow-up': activeDropdown === model }"></i>
    </div>
    <transition name="fade">
      <div class="dropdown-list" v-if="activeDropdown === model">
        <div 
          v-for="option in dropdownOptionsZbor[model]" 
          :key="option"
          class="dropdown-list-item" 
          @click.stop="selectOption(option, model)"
        >
          {{ option }}
        </div>
      </div>
    </transition>
  </div>
  <span v-if="errors[model]" class="error-message">{{ errors[model] }}</span>
</div>



      <div class="form-groupAvatar">
        <input type="file" @change="filesChangeAvatar" accept="image/png, image/jpeg, image/jpg" ref="avatarslika" class="hidden">
              <button @click.prevent="$refs.avatarslika.click()" class="gumbSlika">
                {{ $t('odaberite-svoju-sliku') }}
              </button>  <span class="asterisk-top">*</span>
     
              <div v-if="showCropperModal" class="cropper-modal">
  <Cropper
    ref="cropper"
    :src="imageSrc"
    :aspectRatio="2/3"
    :guides="true"
    :viewMode="2"
    :autoCropArea="0.97"
    :dragMode="'move'"
    :movable="true"
    :zoomable="true"
    :rotatable="true"
    :scalable="true"
    :cropBoxMovable="true"
    :cropBoxResizable="true"
    :showClose="false"
    :showResetCrop="false"
    :showConfirmCrop="false"
    @cropped="cropImage"
  />
      <div class="button-group">
    <button @click="cancelCrop" class="cancel-button">{{ $t('odustani') }}</button>
    <button @click="confirmCrop" class="confirm-button">{{ $t('potvrdi-0') }}</button>
  </div>
    </div>
              
              <!-- Check if avatar is approved 
              <img
                v-if="avatar_approved"
                :src="avatar ? avatar : user.new_avatar"
                alt=""
                class="object-cover avatardesni"
              />-->
              <div v-if="form.avatar" class="avatar-preview-container">
    <img :src="form.avatar" alt="Avatar Preview" class="object-cover avatardesni">
  </div>
         
              <!-- Conditional overlay based on avatar approval status -->
              <span v-if="errors.avatar" class="error-message">{{ errors.avatar }}</span>

       
     </div>

      <div class="form-groupUpload">

    
    <!-- This input will handle file selection -->
    <input
  type="file"
  class="hidden"
  ref="dokument"
  accept=".pdf, .doc, .docx, .jpg, .jpeg, .png, application/pdf, image/jpeg, image/png"
  @change="onFilePicked"
  multiple
/>

  <div class="dokumentitekst">

    {{ $t('molimo-dodajte-potvrdu-uclanjenja-u-podrucni-zbor') }},<br>
             {{ $t('te-dodajte-svu-dokumentaciju-za-dokaz-statusa') }}<br>
              {{ $t('uvjerenje-o-osposobljavanju-diploma-kinezioloskog-fakulteta-za-osobe-koje-su-diplomirale-i-usmjerile-skijanje-zvanje-sveucilisni-magistar-kineziologije-u-edukaciji-i-skijanju') }}
</div>


<button @click.prevent="$refs.dokument.click()" class="gumbOK">
  {{ $t('upload-dokumenta') }} 
  <span v-if="uploadedFilesCount > 0" class="upload-count">{{ uploadedFilesCount }}</span>
</button> <span class="asterisk-top">*</span>

<span v-if="errors.uploadedFiles" class="error-message">{{ errors.uploadedFiles }}</span>

            </div>

      <!-- GDPR Agreement -->
      <div class="form-group gdpr-checkbox">
  <input type="checkbox" id="gdpr" v-model.lazy="form.gdpr" class="hidden-checkbox">
  <label for="gdpr" class="custom-checkbox"></label>
  <label for="gdpr" class="gdpr-label">
    {{ $t('potvrdujem-da-sam-suglasan-s-navedenim') }}<span class="asterisk">*</span><br><br>
    {{ $t('zastita-i-privatnost-osobnih-podataka-gdpr-2016-679-prema-novom-zakonu-vezanom-uz-zastitu-i-privatnost-podataka-gdpr-2016-679-svi-navedeni-podaci-sluze-iskljucivo-za-potrebe-upisa-u-nas-registar-clanova-te-se-ne-koriste-u-druge-svrhe-zaprimljene-podatke-cuvamo-i-obradujemo-koristenjem-najsigurnijih-metoda-zastite-u-skladu-s-navedenim-propisima-te-ih-brisemo-postujuci-propise-koji-su-navedeni-u-zakonu-vezanom-uz-zastitu-i-privatnost-podataka-korisnik-u-bilo-kojem-trenutku-moze-zatraziti-uklanjanje-svojih-podataka-iz-naseg-sustava-slanjem-e-mail-poruke-na-adresu-info-hzuts-hr') }} 
  </label>
</div>
<span v-if="errors.gdpr" class="error-message">{{ errors.gdpr }}</span>

<div class="gdpr-text">

  <!-- Rest of GDPR text -->
  
   
        
      </div>

      <!-- Submit Button -->
      <div class="form-group">
        <button type="submit">{{ $t('posaljite') }}</button>
      </div>
    </form>





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
    <p>{{ $t('prijavnica-je-uspjesno-poslana') }}</p>
    <button class="gumbOK" @click="closeConfirmation">{{ $t('u-redu') }}</button>
  </div>
</div>



  </div>
  
</div>
</template>


 

<script>




import galerijaLayout from '../layouts/galerija.vue'
import appLayout from '../layouts/app.vue'
import { mapState } from 'vuex'
import { Link, Head } from '@inertiajs/inertia-vue'
import _ from "lodash";

import Cropper from 'vue-cropperjs';
import 'cropperjs/dist/cropper.css';


import osobnidosje from '../../../../../core/src/resources/js/api/modules/skijasi-memberfiles.js';
import apiuploaddokumenta from '../../../../../core/src/resources/js/api/modules/skijasi-file.js';
import skijasidatoteke from '../../../../../core/src/resources/js/api/modules/skijasi-datoteke.js';

export default {
  name: "prijavazaclanstvo",
  layout: [appLayout, galerijaLayout],
  components: {
    Link,
    Head,
    Cropper
  },
  
  data() {
    return {

      
      uploadedFilesCount: 0,
    uploadedFiles: [],

      previewImage: null, 


      showConfirmation: false,

      activeDropdown: null,
      
    dropdownOptions: {
      spol: ['Muško', 'Žensko'],
      ostvarenistatus: ['Voditelj skijanja', 'Učitelj skijanja', 'Trener skijanja', 'Učitelj daskanja na snijegu', 'Trener daskanja'],
     
    },
    dropdownOptionsZbor: {
      podrucnizbor: ['HZUTS', 'ZUTS "Nik Krčmar"', 'ZUTS "Istra"', 'ZUTS Primorsko-goranske županije', 'ZUTS Slavonije i Baranje', 'ZUTS Ogulin', 'ZUTS Sjeverozapadna Hrvatska'],     
    },
    labels: {
      spol: 'Spol',
      ostvarenistatus: 'Ostvareni status s kojim se učlanjujete u HZUTS',
    },
    labelsZbor: {
      podrucnizbor: 'U koji područni zbor ste se učlanili?',
    },

    initialState: {},

    adddataFILES: {
        idmember: '0',
        id: '0',
        filedate: null,
        filetitle: "",
        filecontent: "",
    },

    adddataDATOTEKE: {
        idmember: '0',
        id: '0',
        filetitle: "",
        filecontent: "",
        created_at: null,
        updated_at: null,
    },



      form: {
        name: '',
        username: '',
        spol: '',
        oib: '',
        datumrodjenja: '',
        adresa: '',
        postanskibroj: '',
        grad: '',
        drzava: '',
        brojmobitela: '',
        email: '',
        podrucnizbor: '',
        ostvarenistatus: '',
        datummjestopolaganja: '',
        ustanova: '',
        gdpr: false,

        avatar: null,
        avatar_approved: null,
        zahtjev_approved: null,
      },


      res: {
      active: false,
      icon: "",
      status: "",
      message: "",
    },

    errors: {},



    imageSrc: null,
      showCropperModal: false,
      croppedImage: null,
      avatar: null,
      avatarReadyToUpload: false,
      file: null,

      lastFocusedElement: null,
      lastScrollTop: 0,
    }
  },

  watch: {
    // Watch for changes in the user object and update data properties
    user: {
      handler(newValue) {
        this.prefillData(newValue);
      },
      immediate: true, // Trigger handler immediately with the current value of the expression
      deep: true // Watch for nested changes in the user object
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


    translatedLabels() {
      return {
        spol: this.$t('dropdownLabels.spol'),
        ostvarenistatus: this.$t('dropdownLabels.ostvarenistatus'),
      }
    },
    translatedLabelsZbor() {
      return {
        podrucnizbor: this.$t('dropdownLabels.podrucnizbor'),
      }
    },
    
    // Translated options while keeping original values
    translatedDropdownOptions() {
      return {
        spol: this.dropdownOptions.spol.map(value => ({
          original: value,
          translated: this.$t(`gender.${value}`)
        })),
        ostvarenistatus: this.dropdownOptions.ostvarenistatus.map(value => ({
          original: value,
          translated: this.$t(`status.${value}`)
        }))
      }
    },
    
    translatedDropdownOptionsZbor() {
      return {
        podrucnizbor: this.dropdownOptionsZbor.podrucnizbor.map(value => ({
          original: value,
          translated: this.$t(`zbor.${value}`)
        }))
      }
    },



  },
  mounted() {

    if (!this.isAuthenticated) {
      sessionStorage.setItem('previousRoute', this.route('skijasi.commerce-theme.prijavazaclanstvo'));

      this.$inertia.visit(this.route('skijasi.commerce-theme.login'))
    }


    if (this.user) {
      this.prefillData(this.user);
    }
  this.$forceUpdate();
  },

  beforeDestroy() {
    window.removeEventListener('click', this.closeDropdown);
  },

  methods: {

    validateForm() {
    // Clear previous errors
    this.errors = {};
    let valid = true; // Flag to track if the form is valid

    // List of all text fields to validate
    const fieldsToValidate = [
      'name', 'username', 'oib', 'datumrodjenja', 'adresa', 
      'postanskibroj', 'grad', 'drzava', 'brojmobitela', 
      'email', 'datummjestopolaganja', 'ustanova'
    ];

    // Check each text field and if it's empty, add an error message
    fieldsToValidate.forEach(field => {
      if (!this.form[field]) {
        this.errors[field] = this.$t('polje-ne-smije-biti-prazno');
        valid = false; // Mark form as invalid
      }
    });

    // Validate dropdowns
    for (const model in this.dropdownOptions) {
      if (!this.form[model] || this.form[model] === 'Izaberite') {
        this.errors[model] = this.$t('polje-ne-smije-biti-prazno');
        valid = false; // Mark form as invalid
      }
    }

    // Validate GDPR checkbox
    if (!this.form.gdpr) {
      this.errors.gdpr = this.$t('morate-prihvatiti-uvjete-privatnosti-i-koristenja');
      valid = false; // Mark form as invalid
    }

    if (!this.form.avatar) {
    this.errors.avatar = this.$t('molimo-dodajte-avatar');
    valid = false; // Mark form as invalid
  }

  // Check for document upload
  if (this.uploadedFilesCount === 0) {
    this.errors.uploadedFiles = this.$t('molimo-dodajte-potrebnu-dokumentaciju');
    valid = false; // Mark form as invalid
  }


    // Return true if the form is valid, otherwise false
    return valid;
  },

  filesChangeAvatar(event) {
    const currentScrollY = window.pageYOffset || document.documentElement.scrollTop;
      this.file = event.target.files[0];
      if (this.file) {
        this.imageSrc = URL.createObjectURL(this.file);
        this.showCropperModal = true;
      }
    
    },


    cropImage(data) {
      this.croppedImage = data;
      this.showCropperModal = false;

      const croppedImageBlob = this.dataURItoBlob(this.croppedImage);
      const croppedImageFile = new File([croppedImageBlob], 'cropped_image.jpg', { type: 'image/jpeg' });
      this.uploadCroppedImage(croppedImageFile);
    },
 
    dataURItoBlob(dataURI) {
  if (!dataURI || dataURI === '') {
    return null; // Return null if dataURI is null or an empty string
  }

  const byteString = atob(dataURI.split(',')[1]);
  const mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];
  const ab = new ArrayBuffer(byteString.length);
  const ia = new Uint8Array(ab);
  for (let i = 0; i < byteString.length; i++) {
    ia[i] = byteString.charCodeAt(i);
  }
  return new Blob([ab], { type: mimeString });
},

confirmCrop() {
  if (!this.file) {
    return; // No file selected
  }

  // Get the cropped canvas from the cropper component
  const croppedCanvas = this.$refs.cropper.getCroppedCanvas();

  // Convert the cropped canvas to a blob
  croppedCanvas.toBlob((blob) => {
    const croppedImageFile = new File([blob], 'cropped_image.jpg', { type: 'image/jpeg' });

    // Upload the cropped image or perform any other necessary action
    this.uploadCroppedImage(croppedImageFile);

    // Hide the cropper modal
    this.showCropperModal = false;
  }, 'image/jpeg');
  
},



  cancelCrop() {
    this.showCropperModal = false;
    this.croppedImage = null;
    this.form.avatar = null;
    this.avatarReadyToUpload = false;
  },
  uploadCroppedImage(croppedImageFile) {
  // Create a new FileReader instance to read the cropped image file
  const reader = new FileReader();
  
  // Set up the onload event handler to handle when the FileReader has finished loading the file
  reader.onload = () => {
    // Retrieve the Base64 encoded data URI of the cropped image
    const base64String = reader.result;

    // Now you can add this string to your form data, which you will send to the server
    // Assuming you have a form object in your data, you can set the avatar property with the base64String
    this.form.avatar = base64String;

    // Set a flag to indicate that the avatar is ready to be uploaded
    this.avatarReadyToUpload = true;

    // Alternatively, you can directly initiate the upload process here
    // Example: this.$api.uploadAvatar(base64String);
  };

  // Read the cropped image file as a data URL
  reader.readAsDataURL(croppedImageFile);
},





    isImageFile(filePath) {
      return /\.(jpg|jpeg|png|gif)$/i.test(filePath);
    },
    removeImage() {
      // Set both value and previewImage to null
      this.$emit('input', null);
      this.previewImage = null;
    },

 
    async onFilePicked(event) {
  const files = event.target.files;
  if (files.length === 0) return;

  const chunkSize = 1024 * 1024; // 1MB
  let uploadPromises = [];

  for (let fileIndex = 0; fileIndex < files.length; fileIndex++) {
    const file = files[fileIndex];
    let start = 0;
    const totalChunks = Math.ceil(file.size / chunkSize);

    console.log(`Preparing to upload file: ${file.name}, size: ${file.size}, chunks: ${totalChunks}`);

    let fileChunks = [];
    for (let i = 0; i < totalChunks; i++) {
      const end = Math.min(start + chunkSize, file.size);
      const chunk = file.slice(start, end);
      const formData = new FormData();
      formData.append('file', chunk, file.name);
      formData.append('filename', file.name);
      formData.append('chunkIndex', i);
      formData.append('totalChunks', totalChunks);
      formData.append('fileIndex', fileIndex);

      fileChunks.push(this.uploadChunk(formData));
      start = end;
    }
    uploadPromises.push(Promise.all(fileChunks));
  }

  try {
    const fileResponses = await Promise.all(uploadPromises);
    const successfulUploads = fileResponses.filter(chunks => chunks.every(path => path !== ''));

    console.log(`Successful uploads: ${successfulUploads.length} out of ${files.length}`);

    if (successfulUploads.length === files.length) {
      console.log("All files uploaded successfully");
      // Use the last chunk's path as the complete file path
      const filePaths = successfulUploads.map(chunks => chunks[chunks.length - 1]);
      this.uploadedFiles = [...this.uploadedFiles, ...filePaths];
      this.uploadedFilesCount = this.uploadedFiles.length;

      // Save file paths to the database
      for (const filePath of filePaths) {
        await this.dodavanjeDATOTEKE(filePath);
      }
    } else {
      console.error("Some files failed to upload");
    }
  } catch (error) {
    console.error('Error during the upload process:', error);
  }

  event.target.value = ''; // Reset the file input
},

uploadChunk(formData) {
  return new Promise((resolve, reject) => {
    console.log('Uploading chunk:', {
      filename: formData.get('filename'),
      chunkIndex: formData.get('chunkIndex'),
      totalChunks: formData.get('totalChunks'),
      fileIndex: formData.get('fileIndex'),
      fileSize: formData.get('file').size
    });

    apiuploaddokumenta.customuploadfiledokumenti(formData)
      .then(response => {
        console.log('Chunk upload response:', response);
        if (response.data && (response.data.message.includes("successfully") || response.data.message === "Uspješno")) {
          console.log('Chunk uploaded successfully', response);
          resolve(response.data.path || response.data.url || ''); // Return the file path or URL
        } else {
          console.error('Chunk upload reported failure', response);
          reject(new Error('Upload failed for a chunk.'));
        }
      })
      .catch(error => {
        console.error('Error uploading chunk:', error);
        console.error('Error response:', error.response);
        reject(error);
      });
  });
},
uploadAvatar(resizedImage) {
    const reader = new FileReader();
    reader.onloadend = () => {
      // Here we get the Base64 string
      const base64String = reader.result;

      // Now you can add this string to your form data, which you will send to the server
      // Assuming you have a form object in your data
      this.form.avatar = base64String;

      // You can also set a flag that indicates the avatar is ready to be uploaded
      this.avatarReadyToUpload = true;
    };
    reader.readAsDataURL(resizedImage);
  },


    uploadDatoteke(file) {
  const formData = new FormData();
  formData.append("file", file);
  // Retrieve the name and idmember values

  // Post the form data to the customUploadFile endpoint
  apiuploaddokumenta.customuploadfiledokumenti(formData)
  .then(response => {
        // Update the value to show the image preview from the server
        this.value = response.data.path; // Assuming 'path' is the key where the image URL is stored
       // this.adddataDATOTEKE.filecontent = this.value; // Update the preview image to the final URL
     // Emit the event to parent component with the new image URL
     this.$emit("input", response.data.path); 

     const filePath = response.data.path;
      this.dodavanjeDATOTEKE(filePath);

    // Revoke the object URL if you want to release memory
    URL.revokeObjectURL(this.previewImage);
    console.log(response.data);
    // You can now update your component's data or emit an event with the file's path if needed
  })
  .catch(error => {
    console.error(error);
  });
},

deleteImage() {

      this.$api.skijasiFile
        .deleteUsingLfm({
          workingDir: this.getActiveFolder,
          type: "image",
          "items[]": _.find(this.images, { url: this.model }).name,
        })
        .then((res) => {
          const error = _.get(res, "data.original.error", null);
      

          this.getImages();
        })
        .catch((error) => {
          console.log(error);
        })
        .finally(() => {
  
          this.closeDeleteDialog();
        });
    },


    

    toggleDropdown(dropdown, event) {
      if (event) event.preventDefault();
      if (this.activeDropdown === dropdown) {
        this.activeDropdown = null;
      } else {
        this.activeDropdown = dropdown;
      }

    },

    selectOption(option, model) {
      this.form[model] = option;
      this.activeDropdown = null;

    },

  getChangedData() {
  const changedData = {};
  for (const key in this.initialState) {
    if (this.form[key] !== this.initialState[key]) {
      changedData[key] = this.form[key];
    }
  }
  console.log("TEST changed data:", changedData);
  return changedData;
},


prefillData(user) {
      if (user) {
    
        this.form.name = user.name || '';
        this.form.username = user.username || ''; 
        this.form.email = user.email || '';
        this.form.datumrodjenja = user.datumrodjenja || '';
        this.form.brojmobitela = user.brojmobitela || '';
        this.form.drzava = user.drzava || '';
        this.form.grad = user.grad || '';
        this.form.postanskibroj = user.postanskibroj || '';
        this.form.adresa = user.adresa || '';
        this.form.oib = user.oib || '';
        this.form.spol = user.spol || '';
        this.form.avatar = user.avatar || null;
    //    this.form.avatar_approved = user.avatarApproved ? '1' : '0';



     this.initialState = {

        name: this.form.name,
      username: this.form.username,
      datumrodjenja: this.form.datumrodjenja,
      brojmobitela: this.form.brojmobitela,
      drzava: this.form.drzava,
      grad: this.grad,
      postanskibroj: this.form.postanskibroj,
      adresa: this.form.adresa,
      oib: this.form.oib,
      spol: this.form.spol,
      avatar: this.form.avatar,
      zahtjev_approved: '1',

      email: this.form.email,
      podrucnizbor: this.form.podrucnizbor,
      datummjestopolaganja: this.form.datummjestopolaganja,
      ustanova: this.form.ustanova,
      };
    }
    },


    submitForm() {
  if (this.validateForm()) {
    const changedData = this.getChangedData();

    if (Object.keys(changedData).length === 0) {
      this.$alert(this.$t('nema-promjena'));
      return;
    }

    console.log("TEST prije submita changeddata:", changedData)

    this.$api.skijasiUser.prijavnicaedit(changedData)
      .then(res => {
        console.log("API response:", res.data);
        this.$store.dispatch('SET_USER', res.data.user)

        this.dodavanjeFILES();
        // Remove this line: this.uploadFilesAndAddDatoteke(); 

        this.showConfirmation = true; 
      })
      .catch((error) => {
        console.error("Error submitting form:", error);
        this.$alert(this.$t('neuspjesno-provjerite-da-li-ste-unijeli-sve-dobro-i-da-vam-internet-radi'));
      });
  }
  else {
    console.error('Validation failed');
  }
},


    closeConfirmation() {
      // Set showConfirmation to false to close the dialog
      this.showConfirmation = false;

      this.$inertia.visit(this.route('skijasi.commerce-theme.home'))
    },


    async uploadFilesAndAddDatoteke() {
  for (const filePath of this.uploadedFiles) {
    try {
      await this.dodavanjeDATOTEKE(filePath);
    } catch (error) {
      console.error('Error adding file to database:', error);
    }
  }
},



    // DATOTEKE TBL_DATOTEKE pocetak
    dodavanjeDATOTEKE(filePath) {
  return new Promise((resolve, reject) => {
    const data = {
      idmember: this.user.id,
      filetitle: 'Prijavnica za članstvo dokument',
      filecontent: filePath,
    };
    skijasidatoteke.add({ data: data })
      .then((response) => {
        console.log('File path saved to database:', filePath);
        resolve(response);
      })
      .catch((error) => {
        console.error('Error saving file path to database:', error);
        reject(error);
      });
  });
},



//osobni dosje dodavanje
    dodavanjeFILES() {
  const data = {
        idmember: this.user.id,
        filedate: this.adddataFILES.filedate,
        filetitle: 'Prijavnica za članstvo',
        filecontent: 'Ostvareni status: ' + this.form.ostvarenistatus + ', Datum i mjesto polaganja: ' + this.form.datummjestopolaganja + ', Ustanova: ' + this.form.ustanova,

  };

  console.log("dodavanje files pocetak data:", data);

  let date = new Date();
  let datum = date.getFullYear() + '-' + 
                 ('0' + (date.getMonth()+1)).slice(-2) + '-' + 
                 ('0' + date.getDate()).slice(-2) + ' ' + 
                 ('0' + date.getHours()).slice(-2) + ':' + 
                 ('0' + date.getMinutes()).slice(-2) + ':' + 
                 ('0' + date.getSeconds()).slice(-2);
data.filedate = datum;
console.log("TEST FILES podaci spremni za spremanje: ", data);
  osobnidosje
  .add({ data: data, })
    .then((response) => {
      
    })
    .catch((error) => {
      this.$alert(this.$t('greska-provjerite-internet'));
    });

},


    filesChange(e) {
      const file = e.target.files[0]
      const fileSize = Math.round((file.size / 1024))
      if (fileSize > 4048) {
        this.$alert(this.$t('maksimalna-velicina-slike-je-4mb'))
        return
      }
      const fileReader = new FileReader()
      fileReader.readAsDataURL(file)
      fileReader.onload = () => {
        this.form.avatar = fileReader.result
      }
      fileReader.onerror = (error) => {
        this.$alert(error)
      };
    },





    logout() {
      this.$api.skijasiAuth
        .logout()
        .then(res => {
        })
        .catch(err => {
        })
        .finally(() => {
          this.$store.dispatch("SET_IS_AUTHENTICATED", false);
          this.$store.dispatch("SET_NOTIFICATIONS", {
            data: [],
            total: null,
            currentPage: 1,
            perPage: 10
          });
          this.$store.dispatch("SET_USER", {
            name: null,
            email: null,
            additionalInfo: null,
            avatar: null,
            emailVerifiedAt: null,
            password: null,
            rememberToken: null,
            createdAt: null,
            updatedAt: null,

   
          });
          this.$inertia.visit(this.route('skijasi.commerce-theme.login'))
        })
    }
  }
}
</script>

<style scoped>

.error-message {
    color: red;
    font-size: 0.875rem; /* Adjust the size as needed */
    margin-top: 0.12rem; /* Space between the input and the error message */
  }

.form-group {
  margin: 24px;
}
.form-groupUpload {
  margin: 30px;
  text-align: center;
  padding-bottom: 42px;
}
.form-groupAvatar{
  position: relative;
  margin: 30px;
  text-align: center;
}
.avatar-preview-container {
  margin-top: 15px; /* Adjust as needed for spacing */
}

.avatardesni {
  max-height: 250px; /* Set a max-height */
  max-width: 350px; /* Set a max-width based on a 3:2 aspect ratio */
  width: auto; /* To maintain aspect ratio */
  height: auto; /* To maintain aspect ratio */
  border: 1px solid #ddd; /* Optional: adds a border around the image */
  border-radius: 4px; /* Optional: rounds the corners of the border */
  margin: 0 auto; /* This centers the image in the container */
}

.slikazvijezda {
  position: absolute; /* change from relative to absolute */
  top: 4%; /* align to the top edge of the form-container */
  right: 2%; /* align to the right edge of the form-container */
  background-image: url("/storage/slike/nasiclanovi/slikaplaceholder.png");
  background-size: contain; /* or cover, depending on your needs */
  background-repeat: no-repeat;
  width: 20%;
  height: 20%;
}
/* Form Container */
.form-container {
  position: relative;
  background-image: url("/storage/slike/infoclanarine/desktop/logousredininevidljivi.svg");
  background-color: #fff;
  padding-left: 24%;
  padding-right: 24%;
  padding-top: 4rem;
  padding-bottom: 4rem;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  max-width: 90%;
  margin: 40px auto;
  margin-top: 6rem;

  /* Center the image */
  background-position: top center;
  /* Ensure it covers the whole container */
  background-size: contain;
  /* Do not repeat the image */
  background-repeat: no-repeat;
}


/* Form Input and Select Elements */
.form-container input[type="text"],
.form-container input[type="date"],
.form-container input[type="tel"],
.form-container input[type="email"],
.form-container select {
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

}
.form-container input[type="text"],
.form-container input[type="tel"],
.form-container select {
  text-transform: capitalize;
}

.selektortekst {
  margin-bottom: 14px !important; 
 
}

/* Form Radio Buttons */
.form-container input[type="radio"] {
  margin-right: 10px;
  padding-left: 1.8rem;
}

/* Align Radio Labels Horizontally */
.radio-label {
  display: inline-block;
  margin-right: 20px;
}

/* Form Checkbox */
.form-container input[type="checkbox"] {
  margin-right: 5px;
}

/* Form Submit Button */
.form-container button[type="submit"],
.form-container input[type="submit"],
.form-container .submit-button {
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
  transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
}
.form-container button[type="submit"]:hover,
.form-container input[type="submit"]:hover,
.form-container .submit-button:hover,
.gumbOK:hover,
.gumbSlika:hover {
  background-color: transparent;
  color: #00aaff;
  border-color: #00aaff;
}


/* File Upload Button */
.file-upload-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.file-upload-wrapper::after {
  content: 'Upload';
  font-size: 16px;
  position: absolute;
  top: 0;
  right: 0;
  background-color: #00aaff;
  padding: 10px 20px;
  color: white;
  border-radius: 4px;
  cursor: pointer;
}

.file-upload-input {
  font-size: 16px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  cursor: pointer;
}

/* Style specific to document preview link */
.document-preview-link {
  color: #00aaff;
  text-decoration: underline;
  cursor: pointer;
  margin-bottom: 20px;
  display: inline-block;
}

/* Additional custom styles */
/* ... */


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

/* Custom arrow styling */
.custom-arrow {
  position: absolute;
  right: 15px;
  top: 50%;
  transform: translateY(-50%);
  width: 10px;
  height: 10px;
  pointer-events: none;
  z-index: 0;
}

/* Additional styles for the form-group label */
.form-group > label {
  display: block;
  margin-bottom: 4px;
  font-weight: 400;
  font-size: 19px;
}

.dokumentitekst {
  display: block;
  padding-top: 4rem;
  font-weight: 400;
  font-size: 19px;
padding-bottom: 5px;
}


/* Ensure the form-group class has the correct margin and padding */
/* Custom Dropdown Styles */
.dropdown {
  position: relative;
  width: 100%;
  font-weight: 600;
  padding-bottom: 16px;
  z-index: 1000;
}

.dropdown-select {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 15px;
  border: 2px solid #00aaff; /* Your border color */
  border-radius: 25px; /* Adjust as per the design */
  background-color: #fff; /* Your background color */
  cursor: pointer;

  padding-left: 25px;
}

.dropdown .dropdown-list {
  position: absolute;
  padding: 10px 20px;
  top: 100%;
  left: 0;
  right: 0;
  /* Higher z-index and ensure GPU acceleration */
  z-index: 9999;
  transform: translateZ(0);
  background-color: #fff;
  box-shadow: 0 7px 10px rgba(0, 0, 0, 0.22);
  overflow: hidden;
}

.form-group:has(.dropdown-list) {
  z-index: 1050; 
}
.dropdown-list[data-type="zbor"] {
  max-height: none; /* Remove max height limitation */
  overflow: visible; /* Change from auto to visible */
  z-index: 1000;
}

.form-container {
  position: relative;
  overflow: visible !important;
}
.dropdown-list-item {
  padding: 10px 20px;
  border-bottom: 1px solid #eaeaea;
  cursor: pointer;
}

.dropdown-list-item:last-child {
  border-bottom: none;
}

.dropdown-list-item:hover {
  background-color: #eaeaea; /* Your hover color */
}


/* Update form group styles to handle z-index properly */
.form-group {
  position: relative;
  margin: 24px;
  /* Create stacking context for each form group */
  isolation: isolate;
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

/* Fade transition for dropdown opening */
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.3s;
}

.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
.asterisk {
  color: red;
}
.asterisk-top {
  color: red;
  position: absolute;
  padding-top: 3px;
  padding-left: 3px;
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
}
.form-group.gdpr-checkbox {
  display: flex;
  align-items: center;
  gap: 8px;
}

.gdpr-text {
  margin-top: 10px;
  padding: 10px;
  /* Other styling for the text if needed */
}


/* Style for the form header added from the image */
.form-header {
margin-bottom: 5.3rem;
font-size: 2.9rem;
font-weight: 600;
font-family: Inter;
color: #03a9f4;
text-align: center;
white-space: nowrap;
}

/* Styles for the confirmation dialog */
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
  width: 300px;
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
  padding-top: 1rem;
  padding-bottom: 1rem;
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
  top: -50%;
  left: -50%;
  right: -50%;
  bottom: -50%;
  background: linear-gradient(45deg, #f3f3f3, #e6e6e6, #f3f3f3);
  z-index: -1;
}









.upload-count {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: -12px; /* Adjust as needed */
  right: -12px; /* Adjust as needed */
  height: 24px; /* Size of the circle */
  width: 24px; /* Size of the circle */
  background-color: #74d1ff;; /* Color of the circle */
  color: white;
  border-radius: 50%;
  font-size: 0.85rem;
  line-height: 24px; /* Match the height to center the text vertically */
}
.gumbSlika {
margin-top: 10px; 
margin-bottom: 20px;

background-color: #00aaff;
color: white;
padding: 15px 15px;
border: none;
border-radius: 8px;
cursor: pointer;
font-size: 1.2rem;
font-weight: 600;
min-width: 44%;

outline: none;
border: 2px solid transparent;
transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
}

@media screen and (max-width: 1390px) {

.form-header {

font-size: 2.5rem;
}}

@media screen and (max-width: 920px) {

.form-header {
margin-bottom: 5.3rem;
font-size: 2rem;
font-weight: 600;
font-family: Inter;
color: #03a9f4;
text-align: center;
white-space: initial;
}
.form-container {
  padding-left: 10%;
  padding-right: 10%;
  padding-top: 4rem;
  padding-bottom: 4rem;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  max-width: 94%;
  margin: 40px auto;
  margin-top: 5rem;

}

}

@media screen and (max-width: 420px) {

  .gumbSlika, .gumbOK, .submit-button {
font-size: 0.86rem;
}
.upload-count {
    top: -8px; /* Adjust for smaller screens if needed */
    right: -8px; /* Adjust for smaller screens if needed */
    height: 16px; /* Adjust for smaller screens if needed */
    width: 16px; /* Adjust for smaller screens if needed */
    line-height: 16px; /* Adjust for smaller screens if needed */
    font-size: 0.7rem; /* Adjust for smaller screens if needed */
  }
.form-group > label {
font-size: 1rem;
}

.form-header {
margin-bottom: 5.3rem;
font-size: 2rem;
font-weight: 600;
font-family: Inter;
color: #03a9f4;
text-align: center;
}
.form-container {
  padding-left: 4%;
  padding-right: 4%;
  padding-top: 4rem;
  padding-bottom: 4rem;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  max-width: 94%;
  margin: 40px auto;
  margin-top: 5rem;


  background-position: center center;
  /* Ensure it covers the whole container */
  background-size: cover;
  /* Do not repeat the image */
  background-repeat: no-repeat;

}
.slikazvijezda {
  position: absolute; /* change from relative to absolute */
  top: 4.3%; /* align to the top edge of the form-container */
  right: 2%; /* align to the right edge of the form-container */
  background-image: url("/storage/slike/nasiclanovi/slikaplaceholder.png");
  background-size: contain; /* or cover, depending on your needs */
  background-repeat: no-repeat;
  width: 40%;
  height: 40%;
}

}



.cropper-modal {
  position: relative;


  z-index: 9999;
  background-color: white;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  opacity: 1;


}

.button-group {
  display: flex;
  justify-content: center;
  margin-top: 10px;
}


.confirm-button,
.cancel-button {
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 14px;
  cursor: pointer;
}

.confirm-button {
  background-color: #03A9F4;
  color: white;
  
}

.cancel-button {
  background-color: #676767;
  color: white;
  margin-right: 6px;
}




/* Base input styles */
.form-input,
.poljezaupisime,
.poljezaupisemaila,
.poljezaunoslinkova,
.poljezaunosbrojmobitela,
.poljezaupisadresa,
.poljezunosoib {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  position: relative;
  font-size: 16px !important;
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
}

/* Date input specific styles */
.date-input-group {
  position: relative;
  width: 100%;
}

.real-date-input {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  z-index: 1;
  cursor: pointer;
  -webkit-appearance: none;
  appearance: none;
}

/* Make sure the date picker is clickable */
.real-date-input::-webkit-calendar-picker-indicator {
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  width: 100%;
  height: 100%;
  opacity: 0;
  cursor: pointer;
  z-index: 2;
  -webkit-appearance: none;
  appearance: none;
}

.display-date-input {
  background-color: white;
  cursor: pointer;
  padding-right: 40px; /* Space for the calendar icon */
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Crect x='3' y='4' width='18' height='18' rx='2' ry='2'%3E%3C/rect%3E%3Cline x1='16' y1='2' x2='16' y2='6'%3E%3C/line%3E%3Cline x1='8' y1='2' x2='8' y2='6'%3E%3C/line%3E%3Cline x1='3' y1='10' x2='21' y2='10'%3E%3C/line%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: calc(100% - 10px) center;
  background-size: 20px;
}

/* iOS specific fixes */
@supports (-webkit-touch-callout: none) {
  input[type="date"] {
    -webkit-appearance: textfield;
    appearance: textfield;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
}

/* Prevent scroll on focus but allow date picker */
input:not([type="date"]):focus {
  position: relative !important;
  transform: none !important;
}

/* Dropdown positioning */
.dropdown {
  position: relative;
  z-index: 1;
}

.dropdown-list {
  position: absolute;
  z-index: 2;
}

</style>

