    <template>
    <div class="nasiclanovi">
      <Head :title="$page.props.name" />

      <div class="blurbackground" v-if="showDetailsFrame" @click="closeDetailsFrame"></div>

    <div class="glavnipodframe">
      <div class="frame">
<!-- FILTERI pocetak-->
        <div class="filteriframeglavni">
          <div class="filteriframeglavni-child" />
          <div class="filteritraka">
         

             <!-- Zborovi Dropdown -->
<div class="custom-dropdown1" @click="toggleDropdown('zborovi', $event)">
  <div class="dropdown-label">{{ 'Odaberi područne zborove' }}</div>
  <span class="selected-count" v-if="selectedZboroviCount">{{ selectedZboroviCount }}</span>
  <img class="strelicapremadolje-icon" alt="" src="/storage/slike/nasiclanovi/strelicapremadolje.svg" />
  <div class="dropdown-content" v-show="dropdowns.zborovi">
    <label v-for="zbor in zboroviOptions" :key="zbor.value" class="dropdown-item">
      <input type="checkbox" :value="zbor.value" v-model="selectedZborovi" />
      {{ zbor.text }}
    </label>
  </div>
</div>



<!-- Status Dropdown -->
<div class="custom-dropdown2" @click="toggleDropdown('status', $event)">
  <div class="dropdown-label">{{ 'Status' }}</div>
  <span class="selected-count" v-if="selectedStatusCount">{{ selectedStatusCount }}</span>
  <img class="strelicapremadolje-icon2" alt="" src="/storage/slike/nasiclanovi/strelicapremadolje.svg" />
  <div class="dropdown-content" v-show="dropdowns.status">
    <label v-for="option in statusOptions" :key="option.value" class="dropdown-item">
      <input type="checkbox" v-model="selectedStatus" :value="option.value">
      {{ option.text }}
    </label>
  </div>
</div>


<!-- Payments Dropdown -->
<div class="custom-dropdown3" @click="toggleDropdown('payments', $event)">
  <div class="dropdown-label">{{ 'Članarine' }}</div>
  <span class="selected-count" v-if="selectedPaymentsCount">{{ selectedPaymentsCount }}</span>
  <img class="strelicapremadolje-icon2" alt="" src="/storage/slike/nasiclanovi/strelicapremadolje.svg" />
  <div class="dropdown-content" v-show="dropdowns.payments">
    <label v-for="option in paymentOptions" :key="option.value" class="dropdown-item">
      <input type="checkbox" v-model="selectedPayments" :value="option.value">
      {{ option.text }}
    </label>
  </div>
</div>

<!-- Licence Dropdown -->
<div class="custom-dropdown4" @click="toggleDropdown('licence', $event)">
  <div class="dropdown-label">{{ 'Licence' }}</div>
  <span class="selected-count" v-if="selectedLicenceCount">{{ selectedLicenceCount }}</span>
  <img class="strelicapremadolje-icon2" alt="" src="/storage/slike/nasiclanovi/strelicapremadolje.svg" />
  <div class="dropdown-content" v-show="dropdowns.licence">
    <label v-for="option in licenceOptions" :key="option.value" class="dropdown-item">
      <input type="checkbox" v-model="selectedLicence" :value="option.value">
      {{ option.text }}
    </label>
  </div>
</div>


<div class="custom-dropdown4" @click="toggleDropdown('sorting', $event)">
            <div class="dropdown-label">Prikaz</div>
            <div class="dropdown-contentAZ" v-show="dropdowns.sorting">
            <label v-for="option in sortingOptions" :key="option.value" class="dropdown-item">
      <input type="radio" :value="option.value" v-model="sortOrder" @change="changeSortingOrder(option.value)" />
      {{ option.text }}
    </label>   </div>
          </div>

          </div>
       

          <div class="pretrazivanjepoimenu">
  <svg class="input-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M21.0004 21.0004L16.6504 16.6504" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
  <input
    class="input-wrapper"
    placeholder="Pretraživanje po imenu, prezimenu..."
    type="text"
    v-model="searchQuery"
    @keyup.enter="handleSearchEnter" 
  />
  <span v-if="searchQuery" class="clear-icon" @click="searchQuery = ''">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18 6L6 18" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M6 6L18 18" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
</div>




          <div class="filteriframeglavni-item" />


    


        
          
          <b class="popis-lanova-hzuts-a">POPIS ČLANOVA HZUTS-a</b>
          <button @click="resetAllSelections" class="ponistigumb">
            <img class="arrow-1-icon" alt="" src="/storage/slike/nasiclanovi/arrow-1.svg" />
            <b class="poniti-sve">Poništi sve</b>
          </button>
        </div>
<!-- FILTERI kraj-->
 <!-- KARTICA GRID pocetak -->
 <div class="grid-wrapper">
    <div v-if="searchQuery" class="grid-container"> 
      <KarticaClana
        v-for="user in users" 
        :key="user.id" 
        :user="user" 
        :get-status-aktivan="getStatusAktivan"
        @cardClicked="handleCardClick"
      />
    </div>
    <div v-else class="placeholder-container">
      <img src="/storage/slike/nasiclanovi/placeholderclanovi.jpg" alt="Pretrazivanje" class="placeholder-image">
    </div>
  </div>
  <!-- KARTICA GRID kraj -->



    

<!-- SELECT PAGE pocetak-->
<div class="pagination">
  <button @click="prevPage" :disabled="currentPage === 1">&laquo;</button>

  <button
    v-for="page in paginationRange"
    :key="page"
    :class="{ 'active': page === currentPage, 'separator': page === '...' }"
    @click="page !== '...' && changePage(page)"
    :disabled="page === '...'">
    {{ page }}
  </button>

  <button @click="nextPage" :disabled="currentPage === totalPages">&raquo;</button>
</div>
</div>
<!-- SELECT PAGE kraj-->

    </div>


<!-- DETALJI pocetak-->

  <transition name="slide-fade">
<div class="detaljiclanaframeglavni" v-if="showDetailsFrame" ref="myScrollableElement">
    <div class="glavnipodframedetalji">
      <div class="framedetalji">
         <img class="placeholderzaslike-icon" :alt="'slika'" :src="selectedUser.avatar || '/storage/slike/nasiclanovi/slikaplaceholder.png'" />
        <div class="detaljnije-informacije">Detaljnije informacije</div>

        <div @click="viewingPaymentsList ? closePaymentsList() : closeDetailsFrame()">
    <template v-if="viewingPaymentsList">
      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M30.666 16H6.66602" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M15.9993 25.3337L6.66602 16.0003L15.9993 6.66699" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </template>
    <template v-else>
      <img class="closexgumb-icon" alt="" src="/storage/slike/nasiclanovi/closexgumb.svg" />
    </template>
  </div>


      </div>
      <div class="sviframeoviizaduzenje">
        <div class="frameimeistatus">
          <b class="imeclana">{{ selectedUser?.name }} {{ selectedUser?.username }}</b>
          <b class="statusclanaaktivan">{{ selectedUser?.statusAktivan }}</b>
        </div>
      </div>
      <div class="framesvekartice" v-if="!viewingPaymentsList">
        <div class="prviframedetalji">
          <div class="naslovosnovneinfo">
            <img class="info-icon" alt="" src="/storage/slike/nasiclanovi/info-icon.svg" />
            <div class="osnovne-informacije">Osnovne informacije</div>
          </div>
          <div class="kvadrat">
            <div class="gradframe">
              <div class="grad-wrapper">
                <div class="grad">Grad:</div>
              </div>
              <div class="zagreb-wrapper">
                <div class="osnovne-informacije">{{ selectedUser?.grad }}</div>
              </div>
            </div>
            <div class="podrucnizborframe">
              <div class="podruni-zbor-wrapper">
                <div class="grad">Područni zbor:</div>
              </div>
              <div class="zagreb-wrapper">
                <div class="osnovne-informacije">{{ selectedUser?.department }}</div>
              </div>
            </div>
            <div class="clanskibrojframe">
              <div class="lanski-broj-wrapper">
                <div class="grad">Članski broj:</div>
              </div>
              <div class="zagreb-wrapper">
                <div class="osnovne-informacije">{{ selectedUser?.idmember }}</div>
              </div>
            </div>
          </div>
        </div>
        <div class="drugiframe">
          <div class="kvadrat1">
            <div class="naslovstatus">
              <img class="info-icon" alt="" src="/storage/slike/nasiclanovi/user-icon.svg" />
              <div class="statusdetalji">Status</div>
            </div>
            <div class="kvadrat">
              <div class="statusframedetalji">
                <div class="status-wrapperdetalji">
                  <div class="grad">Status</div>
                </div>
                <div class="zagreb-wrapper">
                  <div class="osnovne-informacije">  {{ selectedUser?.statusString }}</div>
                </div>
              </div>
              <div class="licenceframe">
                <div class="licenca-wrapper">
                  <div class="grad">Licenca:</div>
                </div>
                <div class="isia-br-7654-ivsi-wrapper">
                  <div class="osnovne-informacije">{{ activeLicences }}</div>
                </div>
              </div>
              <div class="licencavrijediframe">
                <div class="licenca-vrijedi-do-wrapper">
                  <div class="grad">Licenca vrijedi do:</div>
                </div>
                <div class="isia-br-7654-ivsi-wrapper">
                  <div class="osnovne-informacije">{{ formatEuropeanDate(selectedUser?.endstatusdate) }}</div>
                </div>
              </div>
              <div class="valjanostlicenceframe">
                <div class="valjanost-licence-wrapper">
                  <div class="grad">Valjanost licence:</div>
                </div>
                <div class="zagreb-wrapper">
                  <div class="osnovne-informacije">{{ yearDifference }}</div>
                </div>
              </div>
              <div class="clanskaiskaznicaframe">
                <div class="lanska-iskaznica-wrapper">
                  <div class="grad">Članska iskaznica:</div>
                </div>
                <div class="isia-br-7654-ivsi-wrapper">

                  <div class="osnovne-informacije">
    {{ selectedUser?.carddate === null ? 'Nije izdana' : 'Izdana' }}
  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="kvadrat2">
            <div class="naslovseminar">
              <img class="info-icon" alt="" src="/storage/slike/nasiclanovi/trending-icon.svg" />
              <div class="osnovne-informacije">Seminar</div>
            </div>
            <div class="kvadrat">
              <div class="statusstecenframe">
                <div class="status-steen-wrapper">
                  <div class="grad">Status stečen:</div>
                </div>
                <div class="seminar-za-potvrivanje-licenc-wrapper">
                  <div class="osnovne-informacije">
                    {{ getEventDetails(selectedUser?.idevent)?.label }}
                  </div>
                </div>
              </div>
              <div class="datumseminaraframe">
                <div class="datum-seminara-wrapper">
                  <div class="grad">Datum seminara:</div>
                </div>
                <div class="seminar-za-potvrivanje-licenc-wrapper">
                  <div class="osnovne-informacije">{{ getEventDetails(selectedUser?.idevent)?.eventdate }}</div>
                </div>
              </div>
              <div class="mjestoseminaraframe">
                <div class="mjesto-seminara-wrapper">
                  <div class="mjesto-seminara">Mjesto seminara:</div>
                </div>
                <div class="seminar-za-potvrivanje-licenc-wrapper">
                  <div class="osnovne-informacije">{{ getEventDetails(selectedUser?.idevent)?.eventplace }}</div>
                </div>
              </div>
              <div class="drzavaframe">
                <div class="drava-wrapper">
                  <div class="grad">Država:</div>
                </div>
                <div class="seminar-za-potvrivanje-licenc-wrapper">
                  <div class="osnovne-informacije">{{ getEventDetails(selectedUser?.idevent)?.eventstate }}</div>
                </div>
              </div>
              <div class="organizatorframe">
                <div class="organizator-wrapper">
                  <div class="grad">Organizator:</div>
                </div>
                <div class="seminar-za-potvrivanje-licenc-wrapper">
                  <div class="hzuts-i-nik">{{ getEventDetails(selectedUser?.idevent)?.eventorganisation }}</div>
                </div>
              </div>
              <div class="licencaframe">
                <div class="licenca-wrapper">
                  <div class="grad">Licenca:</div>
                </div>
                <div class="isia-br-7654-ivsi-wrapper">
                  <div class="osnovne-informacije">{{ selectedUser?.statusAktivan === 'Aktivan' ? 'Važeća' : 'Nije važeća' }} </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="gumbzaduzenja" @click="viewPaymentsList">
  <div class="zaduenja">Zaduženja</div>
</div>
      </div>

<!-- New payments list view -->
<div v-if="viewingPaymentsList" class="payments-list">
  <div v-for="payment in staraPlacanjaArray" :key="payment.id" class="payment-item">
    <!-- Payment title on its own line -->
    <div class="payment-title">{{ payment.paymenttitle }}</div>

    <!-- Payment status, date, and price on the next line -->
    <div class="payment-info">
      <div class="payment-status">
  {{ payment.paidstatus === 1 ? 'PODMIRENO' : 'NEPODMIRENO' }}
</div>
<span class="payment-date">{{ formatDate(payment.paydate) }}</span>
      <span class="payment-price">{{ payment.price }} eura</span>
    </div>

    <!-- Blue line separator -->
    <div class="payment-separator"></div>
  </div>
</div>





    </div>
  </div>

</transition>
<!-- DETALJI kraj-->


  </div>
</template>

<script>

import CarouselSingle from '../components/carousel-single/carousel.vue'
import CarouselItemSingle from '../components/carousel-single/carousel-item.vue'


import KarticaClana from '../components/karticaclana/karticaclana.vue'
import podaciusera from '../../../../../core/src/resources/js/api/modules/skijasi-user.js';
import statususera from '../../../../../core/src/resources/js/api/modules/skijasi-statusclanova.js';
import skijasitrainersts from '../../../../../core/src/resources/js/api/modules/skijasi-trainersts.js';
import skijasiLicence from '../../../../../core/src/resources/js/api/modules/skijasi-licence.js';
import skijasiTblevents from '../../../../../core/src/resources/js/api/modules/skijasi-tblevents.js';
import skijasiStaraplacanja from '../../../../../core/src/resources/js/api/modules/skijasi-staraplacanja.js';

import nasiclanoviLayout from '../layouts/nasiclanovi.vue';
import appLayout from '../layouts/app.vue'
import { mapState } from 'vuex'
import { Link, Head } from '@inertiajs/inertia-vue'
import _ from "lodash";

export default {
  name: "nasiclanovi",
  layout: [appLayout,nasiclanoviLayout],
  components: {
    Link,
    Head,
  KarticaClana,
    CarouselSingle,
    CarouselItemSingle
  },
  data() {
    return {
      relationDataTRAINERSTS: {
      tblTrainersts: [], 
    },

    dataLICENCE: [], 
    relationDataTBLEVENTS: {
      tblEvents: [],
      tblEventsSAARHIVOM: [],
    },

    dropdowns: {
      zborovi: false,
      status: false,
      payments: false,
      licence: false,
      sorting: false
    },


    statusOptions: [
      { value: 'Demostrator skijanja', text: 'Demostrator skijanja' },
      { value: 'Voditelj skijanja', text: 'Voditelj skijanja' },
      { value: 'Učitelj skijanja', text: 'Učitelj skijanja' },
      { value: 'ISIA učitelj', text: 'ISIA učitelj' },
      { value: 'Snowboard učitelj', text: 'Snowboard učitelj' },
      { value: 'Snowboard demostrator', text: 'Snowboard demostrator' },
    ],
    paymentOptions: [
      { value: 'Sve plaćeno', text: 'Plaćena' },
      { value: 'Nije plaćeno', text: 'Nije plaćena' },
      // ... other payment options ...
    ],
    licenceOptions: [
    { value: 'Aktivan', text: 'Aktivna licenca' },
      { value: 'Istekla licenca', text: 'Istekla licenca' },
 
      // ... other payment options ...
    ],
    selectedStatus: [], // Holds selected statuses
    selectedPayments: [], // Holds selected payment statuses
    selectedLicence: [],
 

    sortingOptions: [
      { value: 'asc', text: 'A-Z' },
      { value: 'desc', text: 'Z-A' },
    ],


      selectedZborovi: [], // Holds selected zborovi

      zboroviOptions: [ 
        { value: 'HZUTS', text: 'HZUTS' },
        { value: 'ZUTS Primorsko-goranske županije', text: 'ZUTS Primorsko-goranske županije' },
        { value: 'ZUTS "Istra"', text: 'ZUTS "Istra"' },
        { value: 'ZUTS "Nik Krčmar"', text: 'ZUTS "Nik Krčmar"' },
        { value: 'ZUTS Ogulin', text: 'ZUTS Ogulin' },
        { value: 'ZUTS Slavonije i Baranje', text: 'ZUTS Slavonije i Baranje' },
        { value: 'ZUTS Sjeverozapadna Hrvatska', text: 'ZUTS Sjeverozapadna Hrvatska' },

      ],


      users: [], // This will hold your users data
    selectedUser: null, // This will hold the clicked user's data
    showDetailsFrame: false, // To control the visibility of details frame

    currentPage: 1,
    perPage: 32, // Number of items per page
    totalItems: 0,
    

    searchQuery: '',
    sortKey: 'name', 
    sortOrder: 'asc', 

    staraPlacanjaArray: [],
    viewingPaymentsList: false, 
 
    errors: {},
  }
  },
  watch: {
    selectedStatus(newVal, oldVal) {
    if (newVal !== oldVal) {
      this.ucitajClanove();
    }
  },
  selectedPayments(newVal, oldVal) {
    if (newVal !== oldVal) {
      this.ucitajClanove();
    }
  },
  selectedLicence(newVal, oldVal) {
    if (newVal !== oldVal) {
      this.ucitajClanove();
    }
  },


    selectedZborovi(newVal, oldVal) {
      if (newVal !== oldVal) {
        this.currentPage = 1; // Reset to the first page
        this.ucitajClanove();
      }
    },
    
  searchQuery(newVal) {
    this.currentPage = 1; // Reset to first page
    this.ucitajClanove();
  },
  sortKey(newVal) {
    this.currentPage = 1; // Reset to first page
    this.ucitajClanove();
  },
  sortOrder(newVal) {
    this.currentPage = 1; // Reset to first page
    this.ucitajClanove();
  },
},

  computed: {
    totalPages() {
    return Math.ceil(this.totalItems / this.perPage);
  },
    selectedZboroviCount() {
    return this.selectedZborovi.length;
  },
  selectedStatusCount() {
    return this.selectedStatus.length;
  },
  selectedPaymentsCount() {
    return this.selectedPayments.length;
  },
  selectedLicenceCount() {
    return this.selectedLicence.length;
  },
  





  activeLicences() {
  // Define the allowed idpaygroup values
  const allowedIdPayGroups = [2, 7, 8, 9, 10, 11, 12, 13, 14];

  if (!Array.isArray(this.dataLICENCE)) {
    console.error('dataLICENCE is not an array', this.dataLICENCE);
    return '';
  }

  return this.dataLICENCE
    .filter(licence => licence.aktivna && allowedIdPayGroups.includes(licence.idpaygroup))
    .map(licence => {
      if (licence.nazivlicence.includes("ISIA Skijanje")) {
        // Check if selectedUser and isiaBroj are valid and not null
        const isiaNumber = (this.selectedUser && this.selectedUser.isiaBroj && this.selectedUser.isiaBroj.idisia) 
                           ? this.selectedUser.isiaBroj.idisia 
                           : '';
        return `ISIA${isiaNumber ? ' (br. ' + isiaNumber + ')' : ''}`;
      }
      if (licence.nazivlicence.includes("IVSI Skijanje")) {
        return `IVSI`;
      }
      return licence.nazivlicence;
    })
    .join(', ');
},
   
  paginationRange() {
    const range = [];

    let start = Math.max(2, this.currentPage - 2);
    let end = Math.min(start + 2, this.totalPages - 1);

    if (this.currentPage > this.totalPages - 2) {
      start = Math.max(2, this.totalPages - 2);
      end = this.totalPages - 1;
    }

    range.push(1);
    if (start > 2) {
      range.push('...');
    }
    for (let i = start; i <= end; i++) {
      range.push(i);
    }
    if (end < this.totalPages - 1) {
      range.push('...');
    }
    if (this.totalPages > 1) {
      range.push(this.totalPages);
    }

    return range;
  },


  yearDifference() {
      const endStatusDate = this.selectedUser?.endstatusdate;
      if (!endStatusDate) return '';

      const endDate = new Date(endStatusDate);
      const today = new Date();
      const diffTime = Math.abs(endDate - today);
      const diffYears = diffTime / (1000 * 60 * 60 * 24 * 365); // Convert milliseconds to years

      if (diffYears < 1) {
        return '<1 godine';
      } else if (diffYears >= 1 && diffYears < 2) {
        return '2 godine';
      } else if (diffYears >= 2 && diffYears < 3) {
        return '3 godine';
      } else if (diffYears >= 4) {
        return 'Doživotna';
      }

      return ''; // Default return value if none of the conditions are met
    },



  
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
},
async mounted() {

await this.ucitajClanove(); // Ensure users are loaded before proceeding
 await this.fetchRelationDataTBLEVENTS();

 document.addEventListener('click', this.closeAllDropdowns);


  },


  beforeDestroy() {
    document.removeEventListener('click', this.closeAllDropdowns);
},




  methods: {

    handleSearchEnter() {
    this.currentPage = 1; // Reset to first page
    this.ucitajClanove(); // Assuming this method handles the search logic
  },

    scrollToTop() {
    if (this.$refs.myScrollableElement) {
      this.$refs.myScrollableElement.scrollTop = 0;
    }
  },


    closeAllDropdowns() {
  Object.keys(this.dropdowns).forEach(key => {
    this.dropdowns[key] = false;
  });
},

    changeSortingOrder(newOrder) {
    this.sortOrder = newOrder;
    this.ucitajClanove(); // Call the method that fetches or sorts the user data
  },

  
       //sortiranje placanja:
       sortDataDescending() {
    this.staraPlacanjaArray.sort((a, b) => {
      // Assuming 'opendate' is in a format that can be directly compared
      // Convert to Date objects if needed
      return new Date(b.paydate) - new Date(a.paydate);
    });
  },
    viewPaymentsList() {
    this.viewingPaymentsList = true;
    this.scrollToTop();

  },
  closePaymentsList() {
      // Logic to hide the payments list and show the main details frame
      this.viewingPaymentsList = false;
      // Any additional logic needed to revert the view back to the main details
    },
    closeDetailsFrame() {
      // Logic to close the details frame entirely
      this.showDetailsFrame = false;
    },



    resetAllSelections() {
      this.selectedZborovi = [];
      this.selectedStatus = [];
    this.selectedPayments = [];
    this.selectedLicence = [];
   this.closeAllDropdowns;
  },

  toggleDropdown(dropdownName, event) {
    event.stopPropagation();
    // Close all dropdowns first
    Object.keys(this.dropdowns).forEach(key => {
      if (key !== dropdownName) {
        this.dropdowns[key] = false;
      }
    });

    // Then toggle the specified dropdown
    this.dropdowns[dropdownName] = !this.dropdowns[dropdownName];
  },



    nextPage() {
    if (this.currentPage < this.totalPages) {
      this.currentPage++;
    }
    this.ucitajClanove();
  },
  prevPage() {
    if (this.currentPage > 1) {
      this.currentPage--;
    }
    this.ucitajClanove();
  },
  firstPage() {
    this.currentPage = 1;
  },
  lastPage() {
    this.currentPage = this.totalPages;
    this.ucitajClanove();
  },
  changePage(page) {
  this.currentPage = page;
  this.ucitajClanove();
},



handleCardClick(user) {
  console.log('Card clicked:', user);
  this.selectedUser = user;
  this.showDetailsFrame = true;
  this.ucitajLICENCEPodatke();
  this.getStaraPlacanja();
},
  closeDetailsFrame() {
    this.showDetailsFrame = false;
  },


  // Close frame if clicked outside
  handleClickOutside(event) {
    if (this.showDetailsFrame && !this.$refs.detailsFrame.contains(event.target)) {
      this.closeDetailsFrame();
    }
  },


  formatEuropeanDate(dateString) {
      if (!dateString) return ''; // Handle null, undefined, or empty string


      const date = new Date(dateString);
      const year = date.getFullYear();
        // Check if the year is 2030 or greater
        if (year >= 2030) {
        return 'Doživotno';
      }

  
      const day = date.getDate().toString().padStart(2, '0');
      const month = (date.getMonth() + 1).toString().padStart(2, '0'); // +1 because months are 0-indexed
  

      return `${day}.${month}.${year}.`;
    },


    async fetchRelationDataTBLEVENTS() {
  try {
    const response = await skijasiTblevents.allnasiclanovi();
    if (Array.isArray(response.data.data)) {
      this.relationDataTBLEVENTS.tblEvents = response.data.data.map(item => ({
        label: item.eventname,
        eventdate: item.eventdate,
        eventplace: item.eventplace,
        eventstate: item.eventstate,
        eventorganisation: item.eventorganisation,
        value: item.id, // add this line
      }));

console.log ("TEST EVENTI", response.data);

    } else {
      console.error('Unexpected response data:', response.data);
    }
  } catch (error) {
    console.error('Failed to fetch relation data:', error);
  }
},



async getStaraPlacanja() {
  
  this.staraPlacanjaArray = [];
  this.number = Number(this.selectedUser.idmember);
 skijasiStaraplacanja
    .citanjenasiclanovi({ slug: "tbl-payments", idmember: this.number })
    .then((response) => {
      // Check if response.data exists and is an array
      if (response.data) {
  if (Array.isArray(response.data)) {
    // If data is an array, assign it directly to staraPlacanjaArray
    this.staraPlacanjaArray = response.data;
  } else {
    // If data is an object, wrap it in an array before assigning it to staraPlacanjaArray
    this.staraPlacanjaArray = [response.data];
  }
 
} else {
  console.error("Unexpected response format:", response);
}
      this.sortDataDescending();
    })
    .catch((error) => {
   
      console.error("API Error:", error);
      
    });

  },




  getEventDetails(idevent) {
    return this.relationDataTBLEVENTS.tblEvents.find(item => item.value == idevent);
},
    


    async ucitajLICENCEPodatke() {
    console.log("Selected User ID for Licence:", this.selectedUser?.idmember);
    if (!this.selectedUser?.idmember) {
        console.error('No selected user ID for licence data');
        return;
    }

    this.number = Number(this.selectedUser.idmember);
    try {
        const response = await skijasiLicence.citanjenasiclanovi({ slug: "tbl-licence", idmember: this.number });
        console.log("Response Data Licence:", response);
        if (response.data) {
      // Check if data is an array
      if (Array.isArray(response.data)) {
        this.dataLICENCE = response.data;
      } else {
        this.dataLICENCE = [response.data];
      }
    } else {
       this.dataLICENCE = [];
      // or display a message to the user
    }
        // ... rest of your code ...
    } catch (error) {
        console.error("An error occurred while fetching licence data:", error);
    }
},



  async ucitajClanove() {
  // this.$openLoader();
 
  try {
    const response = await podaciusera.browsenasiclanovi({
   
        search: this.searchQuery,
        sort: this.sortKey,
        order: this.sortOrder,
        page: this.currentPage,
        perPage: this.perPage,
        zborovi: this.selectedZborovi.join(','), 
        status: this.selectedStatus.join(','), 

        payments: this.selectedPayments.join(','),
        licence: this.selectedLicence.join(','),
    });

      // this.$closeLoader();
      if (response && response.data) {
        this.users = response.data.users;


   // Update pagination information
      this.totalItems = response.data.total;
      this.currentPage = response.data.currentPage;

    //  await this.loadAllStatusData();

      } else {
        console.error('Unexpected response format:', response);
      }
      console.log("TEST PODACI", response);
  

      } catch (error) {
      // this.$closeLoader();
      this.$vs.notify({
        title: this.$t("alert.danger"),
        text: error.message,
        color: "danger", });
  }
},

formatDate(dateString) {
    if (!dateString) return ''; // Handle null, undefined, or empty strings
    const date = new Date(dateString);
    const day = date.getDate().toString().padStart(2, '0');
    const month = (date.getMonth() + 1).toString().padStart(2, '0'); // +1 because months are 0-indexed
    const year = date.getFullYear();
    return `${day}.${month}.${year}.`;
  },

async loadAllStatusData() {
  try {
    const statusPromises = this.users.map(user => this.ucitajStatusPodatke(user.idmember));
    await Promise.all(statusPromises);
  } catch (error) {
    console.error('Error in loadAllStatusData:', error);
  }
},


 // za STATUSE clanova  da ucita sve podatke
 async ucitajStatusPodatke(idmember) {
  try {
    const response = await statususera.citanje({ 
      slug: "tbl-member-status", 
      idmember: idmember});
      
    const statusDataArray = Array.isArray(response.data) ? response.data : [response.data];

    // Find the user and update statusData
    const userIndex = this.users.findIndex(u => u.idmember === idmember);
    if (userIndex !== -1) {
      this.$set(this.users[userIndex], 'statusData', statusDataArray);
    }
  } catch (error) {
    console.error("Error loading status data:", error);
  }
},

getTrainerstsLabel(trainerstsid) {
    // Find the item in the array where item.value matches trainerstsid
    const item = this.relationDataTRAINERSTS.tblTrainersts.find(item => item.value == trainerstsid);

    // If an item was found, return its label. Otherwise, return an empty string or some default value.
    return item ? item.label : null;
  },

  async fetchRelationDataTRAINERSTS() {
  try {
    const response = await skijasitrainersts.all();
    if (Array.isArray(response.data.data)) {
      this.relationDataTRAINERSTS.tblTrainersts = response.data.data.map(item => ({
        label: item.statusname, // the label to be displayed in the dropdown
  value: item.id // , // the value to be emitted when an option is selected
 // membershipfee: item.membershipfee
}));
    } else {
      console.error('Unexpected response data:', response.data);
    }
  } catch (error) {
    console.error('Failed to fetch relation data:', error);
  }
},



getStatusString(user) {
    // Assuming `record.statusData` holds the relevant status information for this row
    console.log(`Status data for record with ID ${user.idmember}:`, user.statusData);

    if (!user.statusData) {
    return "Nema status?"; // or return an empty string
  }

    if (!Array.isArray(user.statusData)) {
      console.error('statusData is not an array for record:', user);
      return "";
    }

    const labels = user.statusData
      .filter(item => item.statusdefault == 1)
      .map(item => this.getTrainerstsLabel(item.trainerstsid))
      .filter(Boolean) // Ensure that only valid labels are included
      .join(', ');

    console.log("Generated Status Labels for record:", labels);
    return labels;
  },

  getStatusAktivan(user) {
    // Assuming `record.statusData` holds the relevant status information for this row
    if (!Array.isArray(user.statusData)) {
      console.error('statusData is not an array for record:', user);
      return "";
    }

    const today = new Date();
    today.setHours(0, 0, 0, 0); // Set to midnight for comparison

    const status = user.statusData
      .filter(item => item.statusdefault === 1)
      .map(item => {
        const endDate = item.endstatusdate ? new Date(item.endstatusdate) : null;
        return (!endDate || endDate < today) ? "Istekla licenca" : "Aktivan";
      })
      .join(', ');

    console.log("Generated Active Status for record:", status);
    return status;
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

.slide-fade-enter-active, .slide-fade-leave-active {
  transition: all 0.5s ease;
}
.slide-fade-enter, .slide-fade-leave-to {
  transform: translateX(100%);
  opacity: 0.8;
}


.pagination button.active {
  background-color: #03a9f4;
  color: white;
}
.pagination button.separator {
  background: none;
  border: none;
  pointer-events: none;
}

.grid-container {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
  grid-gap: 60px;
  grid-row-gap: 90px;
  width: 100%;


max-width: 1500px;

  justify-content: center;
  align-items: stretch;


}
.grid-wrapper {
  display: flex;
  justify-content: center;
  padding: 0 4%; /* Adjust padding as needed */
    margin-bottom: 5.9%;
}

/* Responsive adjustments */
@media (max-width: 1200px) {
  .grid-container {
    grid-template-columns: repeat(3, minmax(270px, 1fr));
  }
}

@media (max-width: 992px) {
  .grid-container {
    grid-template-columns: repeat(2, minmax(270px, 1fr));
  }
  .grid-wrapper {
margin-top: 5%;
    margin-bottom: 5.9%;
}



}

@media (max-width: 768px) {
  .grid-container {
    grid-template-columns: 1fr;
  }
  .grid-wrapper {
    margin-top: 5%;
    margin-bottom: 5.9%;
}


}
.pagination {
  display: flex;
  align-items: center;
  justify-content: center;
  list-style: none;
  padding: 0;
  padding-top: 3.6rem;
}

.pagination button {
  cursor: pointer;
  border-radius: 50%; /* Circular buttons */
  width: 40px;
  height: 40px;
  margin: 0 5px;
  border: 1px solid #03a9f4; /* Blue border */
  background-color: #fff;
  color: #03a9f4; /* Blue text */
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background-color 0.3s, color 0.3s;
}

.pagination button:hover,
.pagination button.active {
  background-color: #03a9f4; /* Blue background for active/hover state */
  color: #fff; /* White text for active/hover state */
}

.pagination button:disabled {
  cursor: default;
  opacity: 0.5;
}

.pagination button.separator {
  pointer-events: none;
  cursor: default;
  background: transparent;
  color: #aaa;
}

/* Arrow buttons styling */
.pagination button.prev,
.pagination button.next {
  border-radius: 5px; /* Slightly rounded for arrows */
}

/* Hide the default arrows and use custom ones */
.pagination button.prev::before,
.pagination button.next::after {
  content: '';
  display: inline-block;
  width: 10px;
  height: 10px;
  border-top: 2px solid currentColor;
  border-right: 2px solid currentColor;
}

.pagination button.prev::before {
  transform: rotate(-135deg);
  margin-right: 5px;
}

.pagination button.next::after {
  transform: rotate(45deg);
  margin-left: 5px;
}








  .filteriframeglavni-child {
    position: absolute;
    top: 0rem;
    left: 0rem;
    background-color: #fff;
    width: 100%;
    height: 14.81rem;
  }
  .strokeframe-child {
    position: relative;
    border: 1px solid #03a9f4;
    box-sizing: border-box;
    width: 14.75rem;
    height: 1.88rem;
  }
  .strokeframe {
    width: 14.75rem;
    height: 2.25rem;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  .frame1 {
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
  }
  .odaberi-podrune-zborove {
    position: relative;
  }
  .tekstokdaberizborframe {
    position: absolute;
    top: 0rem;
    left: 0.06rem;
    width: 13.06rem;
    height: 1.6rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
  }
  .strelicapremadolje-icon {
    position: absolute;
    top: 0.39rem;
    left: 84%;
    width: 0.75rem;
    height: 1.13rem;
    overflow: hidden;
  }
  .strelicapremadolje-icon2 {
    position: absolute;
    top: 0.39rem;
    left: 84%;
    width: 0.75rem;
    height: 1.13rem;
    overflow: hidden;
  }
  .odaberizbor {
    flex: 1;
    position: relative;
    height: 21.5rem;
    overflow: hidden;
    margin-left: -14rem;
  }
  .odaberipodrucnizbor {
    width: 15.13rem;
    height: 2.25rem;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
  }
  .status {
    position: relative;
    opacity: 0.2;
  }
  .chevron-right-1-icon {
    position: relative;
    width: 0.75rem;
    height: 0.75rem;
    overflow: hidden;
    flex-shrink: 0;
    opacity: 0.2;
  }
  .statusfilter {
    border: 1px solid rgba(3, 169, 244, 0.4);
    box-sizing: border-box;
    width: 6.25rem;
    height: 1.88rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    padding: 0rem 0rem 0.44rem 0.75rem;
    gap: 1.63rem;
  }
  .chevron-right-1-icon1 {
    position: relative;
    width: 0.75rem;
    height: 0.75rem;
    overflow: hidden;
    flex-shrink: 0;
  }
  .clanarinefilter {
    border: 1px solid rgba(3, 169, 244, 0.4);
    box-sizing: border-box;
    width: 6.25rem;
    height: 1.88rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    padding: 0rem 0.44rem 0.44rem 0.75rem;
    gap: 0.38rem;
  }
  .gradovifilter {
    border: 1px solid rgba(3, 169, 244, 0.4);
    box-sizing: border-box;
    width: 6.25rem;
    height: 1.88rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    padding: 0rem 0rem 0.44rem 0.75rem;
    gap: 1.06rem;
  }
  .filteritraka {
    position: absolute;
    top: 10.75rem;
    left: 3.75rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    
    padding: 0.63rem 10rem 0.63rem 0.63rem;
    gap: 1.63rem;
    
    justify-content: space-between; 
  }
  .frame2 {
    background-color: #73d2f6;
    width: 1.25rem;
    height: 1.25rem;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  .nije-plaena {
    position: relative;
    font-weight: 600;
  }
  .nijeplaceno {
    width: 6.38rem;
    height: 1.25rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 0.63rem;
  }
  .placenaodabir-child {
    position: relative;
    border: 1px solid #73d2f6;
    box-sizing: border-box;
    width: 1.25rem;
    height: 1.25rem;
  }
  .plaena {
    position: relative;
    font-weight: 600;
    opacity: 0.2;
  }
  .placenaodabir {
    width: 4.75rem;
    height: 1.25rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 0.63rem;
  }
  .meniizbor {
    position: absolute;
    top: 13.45rem;
    left: 29rem;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.2);
    width: 11.19rem;
    height: 5.31rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0.94rem 0.94rem 0rem;
    box-sizing: border-box;
    gap: 0.94rem;
    font-size: 0.75rem;
    z-index: 2000;
  }





  .clear-icon {
  cursor: pointer;
  position: absolute;
  right: 10px; /* Adjust the value as needed */
  z-index: 10;
  /* Other styling as needed, e.g., color, font size, etc. */
}



  
  .input-wrapper {

  display: flex;
  align-items: center;
  width: 24.13rem;
    height: 2.35rem;
    position: relative;
  flex-grow: 1; /* Let the input grow to fill the space */
  border: none; /* Remove border if not needed */
  outline: none; /* Remove default focus outline */
  padding-right: 30px; /* Add padding to prevent text from going under the 'X' */
}

.input-icon {
  position: absolute;
  left: 10px; /* Adjust the value as needed */
  z-index: 10;
  fill: #fff; /* Color of the icon */
}

  .pretrazivanjepoimenu {
    border: 2px solid #03a9f4;
    font-weight: 300;
    font-family: Inter;
    font-size: 1rem;
    overflow: visible !important;
    background-color: transparent;
    position: absolute;
    top: 4.44rem;
    left: 3.75rem;
    border-radius: 10px;
    box-sizing: border-box;
    width: 24.13rem;
    height: 2.75rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    padding: 0.63rem 2.5rem 0.63rem 2.81rem;
  }
  .filteriframeglavni-item {
    position: absolute;
    top: 9.41rem;
    left: 3.72rem;
    border-top: 1px solid rgba(3, 169, 244, 0.3);
    box-sizing: border-box;
    width: 82.56rem;
    height: 0.06rem;
  }
  .chevron-right-1-icon4 {
    position: relative;
    width: 0.75rem;
    height: 0.75rem;
    opacity: 0.2;
  }
  .prikaz-group {
    position: absolute;
    top: 4.88rem;
    right: 3.75rem;
    border: 1px solid rgba(3, 169, 244, 0.5); 
    box-sizing: border-box;
    width: 3.25rem;
    height: 1.88rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 0.44rem 0rem 0.44rem 0.75rem;
    gap: 1.75rem;
  }
  .popis-lanova-hzuts-a {
    position: absolute;
    top: 1.25rem;
    left: 3.75rem;
    font-size: 1.5rem;
    display: flex;
    text-align: center;
    align-items: center;
    justify-content: center;
    width: 19.44rem;
  }
  .arrow-1-icon {
    position: relative;
    width: 1rem;
    height: 1rem;
    overflow: hidden;
    flex-shrink: 0;
  }
  .poniti-sve {
    position: relative;
    font-size: 0.75rem;
    font-family: Inter;
    color: #000;
    text-align: left;
  }
  .ponistigumb:active {
  transform: scale(0.95); /* Slightly reduce the button size when clicked */
  background-color: #ececec; /* Change background color when clicked */
}
  .ponistigumb {
    transition: transform 0.2s ease-in-out, background-color 0.2s ease-in-out;

    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: absolute;
    height: 4.22%;
    top: 72%;
    right: 4.31rem;
    bottom: 45.65%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 0.63rem;
  }
  .filteriframeglavni {
    align-self: stretch;
    position: relative;
    height: 17rem;
  }
  .frame-icon {
    align-self: stretch;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    height: 13.75rem;
    flex-shrink: 0;
  }
  .franjo-ml-jardas {
    position: absolute;
    top: 0rem;
    left: calc(50% - 83px);
  }
  .demostrator-skijanja {
    position: absolute;
    top: 1.81rem;
    left: calc(50% - 61px);
    font-size: 0.75rem;
    color: #03a9f4;
  }
  .frame4 {
    position: absolute;
    top: 5.25rem;
    left: 2.81rem;
    width: 5.63rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #68c471;
  }
  .span {
    color: #03a9f4;
  }
  .licenca-vrijedi-do-container {
    position: absolute;
    top: 3.06rem;
    left: calc(50% - 90px);
    font-size: 0.75rem;
    font-weight: 600;
  }
  .frame3 {
    position: relative;
    width: 11.25rem;
    height: 6.75rem;
    overflow: hidden;
    flex-shrink: 0;
  }
  .kartica-clana {
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0px 4px 4px rgba(3, 169, 244, 0.2);
    width: 20rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 2.53rem 0.63rem;
    box-sizing: border-box;
    gap: 0.88rem;
  }
  .containerkartica {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    padding: 0rem 3.25rem;
    margin-top: -2.5rem;
    font-size: 1.25rem;
  }
  .frame {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;

    padding-bottom: 3rem;
  }
  .stroke-1-icon {
    position: relative;
    width: 1.19rem;
    height: 1.19rem;
  }
  .frame-child {
    position: absolute;
    top: 0rem;
    left: 0rem;
    border-radius: 50%;
    border: 1px solid #03a9f4;
    box-sizing: border-box;
    width: 2.19rem;
    height: 2.19rem;
  }
  .div {
    position: absolute;
    top: 0.19rem;
    left: 0.88rem;
    letter-spacing: 0.02em;
    font-weight: 500;
  }
  .ellipse-parent {
    position: relative;
    width: 2.19rem;
    height: 2.19rem;
  }
  .frame-item {
    position: absolute;
    top: 0rem;
    left: 0rem;
    border-radius: 50%;
    background-color: #03a9f4;
    width: 2.19rem;
    height: 2.19rem;
  }
  .div1 {
    position: absolute;
    top: 0.19rem;
    left: 0.69rem;
    font-weight: 500;
  }
  .ellipse-group {
    position: relative;
    width: 2.19rem;
    height: 2.19rem;
    color: #fff;
  }
  .div2 {
    position: absolute;
    top: 0.19rem;
    left: 0.69rem;
    letter-spacing: 0.02em;
    font-weight: 500;
  }
  .div3 {
    position: relative;
    letter-spacing: 0.02em;
    font-weight: 500;
  }
  .div4 {
    position: absolute;
    top: 0.19rem;
    left: calc(50% - 11.5px);
    letter-spacing: 0.02em;
    font-weight: 500;
  }
  .straniceselector {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 0.25rem;
    font-size: 1.25rem;
    color: #03a9f4;
    font-family: Poppins;
  }
  .glavnipodframe {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 5.38rem 0rem;
    gap: 6rem;
    z-index: 0;
  }
  .blurbackground {
    flex: 1;
    position: absolute;
    margin: 0 !important;
    top: 0rem;
    left: 0rem;
    background-color: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(10px);
    height: 100%;
    width: 100%;
    z-index: 2002;
  }
 
  .nasiclanovi {
    position: relative;
    background-color: #f8f7f5;
    width: 100%;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: center;
    gap: 0.63rem;
    text-align: left;
    font-size: 0.88rem;
    color: #000;
    font-family: Inter;
  }

  @media screen and (max-width: 600px) {

    .placeholder-image {
    content: url('/storage/slike/nasiclanovi/placeholderclanovi_mobile.jpg');
  }
    .filteriframeglavni-child {
    height: 24.81rem;
  }
    .filteritraka {
      flex-direction: row;
  
      box-sizing: border-box;
      
    }

    .pretrazivanjepoimenu {
      width: calc(100% - 16%); /* Subtract left and right padding from 100% */
    padding-left: 4%;
    padding-right: 4%;

  
      
      box-sizing: border-box;
    }

    .ponistigumb {
    top: 47%;
    right: 5%;

  }
    .input-wrapper {
padding-left: 24px;
}
  
  }

  @media screen and (max-width: 978px) {
  .filteriframeglavni-child {
    height: 19.81rem;
  }
  .filteriframeglavni {
    height: 26rem;
  }

  .ponistigumb {
    top: 63%;
    right: 7%;

  }
  }


  @media screen and (max-width: 350px) {

    .pretrazivanjepoimenu {


width: calc(100% - 28%) !important; /* Subtract left and right padding from 100% */
padding-left: 4%;
padding-right: 4%;
margin-left: 8%;
margin-right: 8%;
height: auto;


}
  
    .popis-lanova-hzuts-a {
    left: 3.05rem;
  }

    .ponistigumb {
      height: auto;
      flex-direction: row;
      gap: 0.63rem;
      padding-top: 0;
      padding-bottom: 0rem;
      box-sizing: border-box;
    }
  }
  @media screen and (max-width: 460px) {
    .popis-lanova-hzuts-a {
    left: 2.8rem;
  }
    .filteritraka {
   left: 2.8rem;
      
    }
 .prikaz-group {
    position: absolute;
    top: 20.88rem;
    right: 7.75rem;
    border: 1px solid rgba(3, 169, 244, 0.5); 
    box-sizing: border-box;
    width: 5.25rem;
    height: 1.88rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 0.44rem 0rem 0.44rem 0.75rem;
    gap: 1.75rem;
  }
    
    .pretrazivanjepoimenu {
      width: 16.35rem;
      padding: 0.63rem 0.5rem 0.63rem 0.81rem;
      left: 2.1rem;
    }
    .filteriframeglavni-child {
    height: 24.81rem;
  }
  .input-wrapper {
    width: calc(100% - 8%); /* Subtract left and right padding from 100% */
    padding-left: 4%;
    padding-right: 4%;

align-items: center;

  height: 2.35rem;
padding-left: 24px;
overflow: visible;
}

.input-wrapper::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */

  color: #999999;
  opacity: 1; 
}

.ponistigumb {
    top: 90%;
    right: 40%;

  }

  }



  @media screen and (max-width: 675px) {
    .filteriframeglavni-child {
    height: 24.81rem;
  }
      .pretrazivanjepoimenu {


      width: calc(100% - 16%); /* Subtract left and right padding from 100% */
    padding-left: 4%;
    padding-right: 4%;
    height: auto;

   
  }
.ponistigumb {
    top: 90%;
    right: 40%;

  }

  }






  
  .detaljnije-informacije {
    position: relative;
    font-weight: 500;
  }
  .closexgumb-icon {
    position: relative;
    width: 32px;
    height: 32px;
    overflow: hidden;
    flex-shrink: 0;
  }
  .framedetalji {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: space-between;
    text-align: center;
    margin-left: 0%
  }
  .imeclana {
    position: relative;
  }
  .statusclanaaktivan {
    position: relative;
    font-size: 20px;
    color: #68c471;
  }
  .frameimeistatus {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 5px;
  }
  .sviframeoviizaduzenje {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    font-size: 32px;
    margin-left: 24%;
    margin-top: 6%;
  }
  .info-icon {
    position: relative;
    width: 40px;
    height: 40px;
    overflow: hidden;
    flex-shrink: 0;
  }
  .osnovne-informacije {
    position: relative;
    font-weight: 600;
  }
  .naslovosnovneinfo {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 116px;
  }
  .grad {
    position: relative;
  }
  .grad-wrapper {
    width: 42px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .zagreb-wrapper {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    color: #03a9f4;
  }
  .gradframe {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 181px;
  }
  .podruni-zbor-wrapper {
    width: 110px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .podrucnizborframe {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 113px;
  }
  .lanski-broj-wrapper {
    width: 93px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .clanskibrojframe {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 130px;
  }
  .kvadrat {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 5px;
    font-size: 16px;
  }
  .prviframedetalji {
    align-self: stretch;
    border-radius: 10px;
    background-color: #f8f7f5;
    height: 200px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 15px;
    box-sizing: border-box;
    gap: 20px;
  }
  .statusdetalji {
    position: relative;
    font-weight: 600;
  }
  .naslovstatus {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 184px;
  }
  .status-wrapperdetalji {
    width: 49px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .statusframedetalji {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 172px;
  }
  .licenca-wrapper {
    width: 63px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .isia-br-7654-ivsi-wrapper {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    color: #68c471;
  }
  .licenceframe {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 158px;
  }
  .licenca-vrijedi-do-wrapper {
    width: 137px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .licencavrijediframe {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 84px;
  }
  .valjanost-licence-wrapper {
    width: 132px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .valjanostlicenceframe {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 89px;
  }
  .lanska-iskaznica-wrapper {
    width: 139px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .clanskaiskaznicaframe {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 82px;
  }
  .kvadrat1 {
    align-self: stretch;
    border-radius: 10px 10px 0px 0px;
    background-color: #f8f7f5;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 22px 15px;
    gap: 20px;
  }
  .naslovseminar {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 175px;
  }
  .status-steen-wrapper {
    width: 151px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
  }
  .seminar-za-potvrivanje-licenc-wrapper {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    color: #03a9f4;
  }
  .statusstecenframe {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 70px;
  }
  .datum-seminara-wrapper {
    width: 128px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .datumseminaraframe {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 93px;
  }
  .mjesto-seminara {
    position: relative;
  }
  .mjesto-seminara-wrapper {
    width: 129px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .mjestoseminaraframe {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 92px;
  }
  .drava-wrapper {
    width: 57px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .drzavaframe {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 164px;
  }
  .organizator-wrapper {
    width: 94px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .hzuts-i-nik {
    position: relative;
    font-weight: 600;
  }
  .organizatorframe {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 127px;
  }
  .licencaframe {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 158px;
  }
  .kvadrat2 {
    align-self: stretch;
    border-radius: 0px 0px 10px 10px;
    background-color: #f8f7f5;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 18px 15px;
    gap: 20px;
  }
  .drugiframe {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
  }
  .zaduenja {
    position: relative;
    font-weight: 600;
  }
  .gumbzaduzenja {
    align-self: stretch;
    border-radius: 10px;
    background-color: #03a9f4;
    height: 60px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #fff;
  }
  .framesvekartice {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    gap: 30px;
    padding-top: 1.6rem;
  }
  .glavnipodframedetalji {
    align-self: stretch;

    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0px 1px 0px 0px;
  
  }
  .detaljiclanaframeglavni {

    flex: 1;
    min-width: 600px;
    height: 100%; 
    overflow-y: scroll; 

    margin: 0 !important;
    position: fixed; 
    top: 0rem;
    right: 0.06rem;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 1.75rem 1.81rem;
    gap: 1.5rem;
    z-index: 2003;
    font-size: 1.25rem;

   

  }

  @media screen and (max-width: 600px) {

    .detaljiclanaframeglavni {
      min-width: auto; 
    width: 100%;
}

    .imeclana {
      font-size: 30px;
    }

    .frameimeistatus {
      align-items: flex-start;
      justify-content: center;
      padding-top: 20px;
      padding-bottom: 0px;
      box-sizing: border-box;
    }

    .osnovne-informacije {
      font-size: 14px;
    }

    .grad {
      font-size: 14px;
    }

    .status {
      font-size: 14px;
    }

    .mjesto-seminara {
      font-size: 14px;
      text-align: left;
    }

    .hzuts-i-nik {
      font-size: 14px;
      text-align: left;
    }
  }



  @media screen and (max-width: 460px) {

      .naslovosnovneinfo {
    gap: 66px;
  }
  .gradframe {
    gap: 121px;
  }

  .podrucnizborframe {
    gap: 93px;
  }
  .clanskibrojframe {
    gap: 70px;
  }


.naslovstatus {
    gap: 104px;
  }

  .statusframedetalji {

    gap: 112px;
  }



  .licenceframe {
    gap: 98px;
  }
  .licencavrijediframe {
    gap: 24px;
  }

  .valjanostlicenceframe {
    gap: 29px;
  }

  .clanskaiskaznicaframe {

    gap: 22px;
  }


 .framesvekartice {

    padding-top: 3.4rem;
  }

.payments-list {
  
    padding-top: 3.4rem;

}


      .sviframeoviizaduzenje {

    margin-left: 30%;
    margin-top: 5%;
  }

    .placeholderzaslike-icon {
        width: 70px; /* Set the desired size */
        height: 70px; /* Set the desired size */
        position: absolute;
        left: 4%;
        margin-top: 6%;
top:6%
    
    }

 
     .statusdetalji {
    font-size: 12px;
  }
 .statusstecenframe {

    gap: 30px;
  }
  .drzavaframe {

    gap: 104px;
  }
  .organizatorframe {
    gap: 67px;
  }
  .licencaframe {
    gap: 98px;
  }
      .datumseminaraframe {
    gap: 33px;
  }
  .mjestoseminaraframe {
    gap: 32px;
  }
    .imeclana {
      font-size: 26px;
    }

    .naslovseminar {
      font-size: 12px;
     gap: 105px;
    }
    
    .frameimeistatus {
      align-items: flex-start;
      justify-content: center;
      padding-top: 20px;
      padding-bottom: 0px;
      box-sizing: border-box;
        font-size: 12px;
    }

    .osnovne-informacije {
      font-size: 12px;
    }

    .grad {
      font-size: 12px;
    }

    .status {
      font-size: 12px;
    }

    .mjesto-seminara {
      font-size: 12px;
      text-align: left;
    }

    .hzuts-i-nik {
      font-size: 12px;
      text-align: left;
    }
  }




.custom-dropdown1 {
  position: relative;
  width: 300px; /* Adjust as necessary */
  border: 1px solid rgba(3, 169, 244, 0.5); 
  cursor: pointer;
  
}
.custom-dropdown2 {
  position: relative;
  width: 120px; /* Adjust as necessary */
  border: 1px solid rgba(3, 169, 244, 0.5); 
  cursor: pointer;

}
.custom-dropdown3 {
  position: relative;
  width: 120px; /* Adjust as necessary */
  border: 1px solid rgba(3, 169, 244, 0.5); 
  cursor: pointer;

}
.custom-dropdown4 {
  position: relative;
  width: 120px; /* Adjust as necessary */
  border: 1px solid rgba(3, 169, 244, 0.5); 
  cursor: pointer;
 
}

.dropdown-label {
  padding: 10px; /* Adjust as necessary */
  background-color: white;
  border: 1px solid rgba(3, 169, 244, 0.5); 
 
}





.dropdown-content {
/* Initially hide the dropdown content */
  position: absolute; /* Position it absolutely within the relative container */
  background-color: #ffffff; /* Set background color */
  min-width: 170px; /* Minimum width of the dropdown content */
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); /* Add some shadow for depth */
  z-index: 2010; /* Ensure it's above other content */
  top: 100%;
  border-bottom-left-radius: 5px;  
  border-bottom-right-radius: 5px; 
}
.dropdown-contentAZ {
/* Initially hide the dropdown content */
  position: absolute; /* Position it absolutely within the relative container */
  background-color: #ffffff; /* Set background color */
  min-width: 5.25rem; /* Minimum width of the dropdown content */
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); /* Add some shadow for depth */
  z-index: 2010; /* Ensure it's above other content */
  top: 100%;
right: 0%;
border-bottom-left-radius: 5px;  
  border-bottom-right-radius: 5px; 

}



.dropdown-item label {
  padding: 10px;
  cursor: pointer;
  display: flex;
  align-items: center;
  width: 100%;
}

.dropdown-item label:hover {
  background-color: #e6e6e6; /* Slight color change on hover */
}


.dropdown-item {
  padding: 10px;
  border-bottom: 1px solid #f0f0f0;
  display: flex;
  align-items: center;
  z-index: 1000;
}

.dropdown-item:last-child {
  border-bottom: none;
}

.dropdown-item input[type="checkbox"] {
  margin-right: 10px;
}
.dropdown-item:hover {
  background-color:  rgba(3, 169, 244, 1);  /* Color change on hover */
}




.payments-list {

  align-self: stretch;
    display: block;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    gap: 30px;
    padding-top: 1.9rem;
    max-height: 100%;
overflow-y: scroll;

}

.payment-separator {
  height: 2px;
  background-color: #03A9F4; /* blue separator line */
  margin-top: 3px; /* space between the info and the line */
}

.payment-title {
  display: block; /* ensures the title is on its own line */
  font-weight: bold;
  font-size: medium;
  margin-top: 8px; /* Space between title and details */
}


.payment-name {
  font-weight: bold;
}

.payment-date {
  font-size: 0.9rem;
  margin-top: auto;
margin-right: auto;
padding-left: 1rem;
}

.payment-status {
  background-color: #67C371; /* green background */
  color: white; /* white text */
  padding: 5px 5px; /* padding inside the status tag */

  font-weight: bold;
  font-size: 0.9rem !important;
}
.payment-info {
  /* styles for the container of status, date, and price */
  display: flex;
  justify-content: space-between; /* adjust as needed */
  align-items: flex-start;
  padding: 8px 0; /* spacing above and below the info line */
}

.payment-price {
  margin-left: 10px; /* Space between the status and the price */
  font-size: 0.9rem;
  margin-top: auto;
}

/* Adjust the background-color and color properties to match your actual 'paidstatus' values */
.payment-status.paid {
  background-color: #67C371; /* Green background for paid status */
}

.payment-status.unpaid {
  background-color: #f44336; /* Red background for unpaid status */
}


.placeholderzaslike-icon {
        width: 100px; /* Set the desired size */
        height: 100px; /* Set the desired size */
        position: absolute;
        left: 4%;
        margin-top: 7%;

        border-radius: 50%; /* Makes it circular */
        border: 2px solid #03A9F4; /* Adds a blue stroke. Change the color as needed */
        object-fit: cover; /* Ensures the image covers the area without distortion */
    }


    .selected-count {
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 24px;
  height: 24px;
 /* This will help in case the numbers have two digits or more */
  border-radius: 50%; /* circle */
  background-color: #03a9f4; /* any color you want */
  color: white; /* text color */
  position: absolute;
  top: -10px; /* half of the height to ensure it's centered on the y-axis */
  left: -10px; /* half of the width to ensure it's centered on the x-axis */
  font-size: 0.75rem;
  font-weight: bold;
  z-index: 2;
  border: 2px solid white; /* match the background color of .custom-dropdown */
}

 /* Placeholder container styling */
 .placeholder-container {
    position: relative;
    text-align: center;
    width: 100%; 
    height: auto;
    color: #fff; /* Adjust text color as needed */
  }

  .placeholder-image {
    width: 100%; /* Adjust width as needed */
    height: auto; /* Adjust height as needed */

  }

  .placeholder-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 20px; /* Adjust font size as needed */
  }
  

</style>
