<template>
  <div>
  <div v-if="isOpen" class="modal-overlay">
    <div class="modal">
      <div v-if="contentMode === 'default'" class="modal-content">
  <div class="w-full flex justify-center flex-wrap">
    <Head :title="$page.props.name" />

    <div class="h-12 flex justify-center items-center w-full border-b border-gray-300">
      <div class="wmax80 w-full flex items-center justify-center relative">
        <span class="select-none">
          {{ $page.props.title }}
        </span>
        <div class="absolute left-4 cursor-pointer" @click="closeModal">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6  plava-boja" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
          </svg> 
        </div><button class="plava-boja font-bold items-start">Plaćanje</button>
      </div>
    </div>
    <div class="lg:max-w-xl w-full">
      <div class="flex w-full flex-wrap justify-center select-none">
        <div class="w-full bg-white p-4 border-b border-gray-300">
          <p>Iznos za plaćanje:
          <p class="text-3xl plava-boja">{{ separator }}<span class=" font-medium">{{ last }}{{ first }}</span></p></p>
          <div class="mt-4 text-sm text-white p-1 px-2 bg-plava-boja bg-opacity-80 border-l border-r border-dotted">
            Platite narudžbu prema gore navedenom iznosu.
          </div>

          <div class="w-full gap-2 flex bg-white border-t border-b p-4 border-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 plava-boja" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
          <div class="flex-grow flex flex-col w-full">
            <div class="w-full">Podaci za plaćanje:</div>
            <div class="flex w-full mt-2 text-gray-500 text-sm">
              <div class="flex-grow">
                Broj računa: {{ bank.accountNumber }} <br />
                Ime računa: {{ bank.accountName }}<br />
                Poziv na broj primatelja: {{ user.idmember }} 
              </div>
              <div 
      class="cursor-pointer self-baseline text-gray-400"
      @click="copyToClipboard(bank.accountNumber)"
    >
      Kopiraj
    </div>
    <div v-if="showCopiedMessage" class="text-green-500 ml-2">Broj računa kopiran!</div>
            </div>
          </div>
        </div>


          <div class="text-sm mt-2 text-gray-500">Provjerite jeste li ispunili sve podatke dobro prije plaćanja. Uplata uobičajeno stiže u roku 24-72 sati. Mi ćemo Vam svakako poslati obavijest kada je potvrđena uplata.</div>
        </div>

          <div class="mt-4 text-sm p-1 px-2 border-l border-r border-dotted">
            Plaćanje možete izvršiti na sljedeće naćine:
          </div>

        <div class="w-full flex flex-nowrap gap-2 p-2">
          <div class="w-6 h-6">
            <svg id="svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6 plava-boja flex-grow" viewBox="0, 0, 400,400" version="1.1">
              <path d="M143.037 41.161 C 3.999 92.696,-5.971 287.174,127.083 352.339 C 186.443 381.411,271.324 366.663,318.993 318.993 C 443.452 194.535,307.671 -19.861,143.037 41.161 M220.833 191.941 C 220.833 258.944,217.966 275.000,206.000 275.000 C 195.621 275.000,191.667 255.910,191.667 205.798 L 191.667 157.973 176.189 159.195 C 164.626 160.108,160.360 158.711,159.322 153.672 C 158.134 147.901,202.341 126.367,217.708 125.231 C 219.427 125.104,220.833 155.123,220.833 191.941 " stroke="none" fill="currentColor" fill-rule="evenodd">
              </path>
            </svg>
          </div>
          <div class="text-sm text-gray-500">Skeniranjem koda na uplatnici sa aplikacijom za internet bankarstvo</div>
        </div>
 
        <div class="w-full flex flex-wrap gap-4 p-2">

          <div class="flex gap-2">
            <div class="w-6 h-6">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6 plava-boja flex-grow" viewBox="0, 0, 400,400" version="1.1">
                <path id="path0" d="M137.778 49.836 C 33.422 89.851,5.497 232.941,86.278 313.722 C 188.849 416.294,360.000 345.186,360.000 200.000 C 360.000 84.104,247.198 7.880,137.778 49.836 M222.311 140.046 C 253.193 156.015,250.268 177.904,212.073 216.667 L 184.701 244.444 214.573 244.444 C 243.473 244.444,244.444 244.806,244.444 255.556 L 244.444 266.667 200.000 266.667 C 144.280 266.667,143.777 264.427,188.889 217.209 C 207.222 198.020,222.222 178.441,222.222 173.700 C 222.222 151.410,192.006 143.275,179.591 162.222 C 172.004 173.801,155.556 177.520,155.556 167.656 C 155.556 141.869,194.605 125.718,222.311 140.046 " stroke="none" fill="currentColor" fill-rule="evenodd">
                </path>
              </svg>
            </div>
            <div class="text-sm text-gray-500">Plaćanje internet bankarstvom 
              <!-- <span v-if="order.expiredAt">prije {{ $moment(order.expiredAt).format('DD-MM-YYYY H:mm:ss') }}</span> --> 
            </div>
          </div>
          <div class="flex flex-nowrap gap-2">
            <div class="w-6 h-6">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6 plava-boja" viewBox="0, 0, 400,400" version="1.1">
                <path id="path0" d="M137.778 49.836 C 33.422 89.851,5.497 232.941,86.278 313.722 C 188.849 416.294,360.000 345.186,360.000 200.000 C 360.000 84.104,247.198 7.880,137.778 49.836 M231.453 146.325 C 247.767 162.639,247.801 171.076,231.611 186.200 L 218.777 198.189 231.688 205.599 C 254.954 218.951,254.119 243.121,229.881 257.899 C 203.731 273.843,160.506 263.854,154.386 240.453 C 151.135 228.019,165.519 227.741,177.778 240.000 C 196.968 259.190,233.725 243.471,223.278 220.542 C 220.055 213.469,213.254 209.030,202.573 207.026 C 185.400 203.804,180.036 191.111,195.848 191.111 C 218.121 191.111,230.750 170.305,216.889 156.444 C 208.585 148.140,187.424 150.125,178.969 160.000 C 164.554 176.835,147.817 168.133,161.252 150.788 C 177.986 129.187,212.144 127.016,231.453 146.325 " stroke="none" fill="currentColor" fill-rule="evenodd"></path>
              </svg>
            </div>
            <div class="text-sm text-gray-500">Plaćanjem u pošti ili banci sa isprintanom uplatnicom ili podacima</div>
          </div>
        </div>
        <div class="w-full flex flex-wrap gap-2 my-2 px-3 sm:px-0">
         <Link class="w-full p-4 bg-plava-boja text-white font-bold rounded text-center text-sm" @click="potvrdaplacanjabezdokaza">
            Potvrdi da je uplaćeno
          </Link>
          <!-- <div class="w-full text-center ">ili</div> -->
          <button class="w-full p-4 bg-plava-boja font-bold text-white rounded text-center text-sm" @click="showUploadProofContent">
           Potvrdi da je uplaćeno i učitaj dokaz plaćanja za bržu obradu
          </button>
   
          <Link 
            class="w-full p-2 bg-transparent  plava-boja border border-primary rounded text-center text-sm" 
            :href="route('skijasi.commerce-theme.zaduzenja')"
          >
          Odustani
          </Link>
        </div>



    <div>


     
<div v-show="contentMode === 'default'">
  <div class="button-container">
  <button @click="printPDF" class="action-button">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
    </svg>
    Isprintaj uplatnicu
  </button>
  <button @click="downloadPDF" class="action-button">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
    </svg>
    Spremi uplatnicu
  </button>
</div>
<iframe v-if="pdfUrl" ref="pdfViewer" :src="pdfUrl" class="pdf-iframe" frameborder="0"></iframe>
</div>
  </div>
      </div>
    </div>
  </div>   
    </div>




    <div v-else-if="contentMode === 'uploadProof'">
    <div class="w-full flex justify-center flex-wrap">
    <Head :title="$page.props.name" />

    <div class="h-12 flex justify-center items-center w-full border-b border-gray-300">
      <div class="wmax80 w-full flex items-center justify-center relative">
        <span class="select-none">
          {{ $page.props.title }}
        </span>
        <div class="absolute left-4 cursor-pointer" @click="contentMode = 'default'">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6  plava-boja" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
          </svg> 
        </div><button class="plava-boja font-bold items-start">Slanje potvrde plaćanja</button>
      </div>
    </div>
    <div class="lg:max-w-xl w-full">
      <div class="flex w-full flex-wrap justify-center select-none">
        <div class="w-full flex text-sm bg-white p-3 border-b border-gray-300 justify-between">
          <p>Ukupno za platiti</p>
          <span class="plava-boja font-medium">{{ last }}{{ first }}</span>
        </div>
        <div 
          class="w-full flex text-sm bg-white p-3 border-b border-gray-300 justify-between cursor-pointer items-center" 
          @click="openAccordion = !openAccordion"
        >
          <p>Podaci za plaćanje</p>
          <div class="w-6 h-6 transform transition-transform duration-300 ease-in-out" :class="openAccordion ? '-rotate-180' : ''">
            <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 9l-7 7-7-7" />
            </svg>
          </div>
        </div>
        <div 
          class="w-full gap-2 bg-white border-b p-4 border-gray-300 origin-top transform transition-transform duration-300 ease-in-out" 
          :class="[openAccordion ? 'flex' : 'hidden']"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 plava-boja" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
          <div class="flex-grow flex flex-col w-full">
            <div class="w-full text-sm sm:text-base">{{ bank.displayName }}</div>
            <div class="flex w-full mt-2 text-gray-500 text-xs sm:text-sm">
    <div class="flex-grow">
      Uplatite na broj računa: {{ bank.accountNumber }} <br />
      Ime računa: {{ bank.accountName }} <br />
      Poziv na broj primatelja: {{ user.idmember }} 
    </div>
    <div 
      class="cursor-pointer self-baseline text-gray-400"
      @click="copyToClipboard(bank.accountNumber)"
    >
      Kopiraj
    </div>
    <div v-if="showCopiedMessage" class="text-green-500 ml-2">Broj računa kopiran!</div>
  </div>
          </div>
        </div>
        <div class="w-full flex flex-nowrap gap-2 p-2">
          <div class="text-xs text-gray-500">Provjerite jeste li ispunili sve podatke dobro prije plaćanja. Uplata uobičajeno stiže u roku 24-72 sati. Mi ćemo Vam svakako poslati obavijest kada je potvrđena uplata.</div>
        </div>
        <div class="w-full flex text-sm flex-col bg-white p-3 border-t border-b border-gray-300 justify-between">
          <p>Slanje potvrde plaćanja:</p>
          <label class="block text-center select-none max-w-full" for="receipt_file">
            <div class="inline-block mx-3 mt-3.5 w-24 h-24 border-2 border-gray-700 text-gray-700 border-dashed cursor-pointer">
              <template v-if="selected.proofOfTransaction === null">
                <div class="flex justify-center flex-col items-center h-full">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                  </svg>
                  <div class="text-center">Dodirnite za prijenos</div>
                </div>
              </template>
              <template v-else>
                <div class="flex justify-center items-center h-full w-full">
                  <img :src="selected.proofOfTransaction">
                </div>
              </template>
            </div>
          </label>
          <input accept="image/*" type="file" class="w-full h-full absolute opacity-0 hidden" name="receipt_file" id="receipt_file" ref="image" @change="onFilePicked">
        </div>
   

        <!-- Modal Dialog -->
        <transition
          enter-active-class="transition-all duration-300 ease-in-out"
          leave-active-class="transition-all duration-300 ease-in-out"
          enter-class="opacity-0"
          leave-to-class="opacity-0"
        >
          <div class="fixed z-10 inset-0 w-full h-full overflow-x-hidden overflow-y-hidden flex justify-center items-center" v-if="openDialog">
            <div class="absolute z-10 bg-black bg-opacity-30 w-full h-full cursor-pointer" @click="openDialog = false"></div>
            <div class="absolute z-20 bg-white max-w-xl w-full p-4 rounded flex justify-center flex-wrap gap-2">
              <img :src="sampleProofOfTransaction" alt="Sample proof of transaction" class="h-40 mb-2">
              <a 
                :href="sampleProofOfTransaction"
                download="transaction.png"
                target="_blank"
                class="py-2 bg-plava-boja text-white w-full rounded text-sm text-center"
              >
              Spremi 
              </a>
              <iframe ref="pdfViewer" class="pdf-iframe" frameborder="0"></iframe>
              <button 
                @click="openDialog = false"
                class="py-2 bg-white border border-primary hover:bg-plava-boja hover:bg-opacity-10 plava-boja w-full rounded text-sm"
              >
               Zatvori
              </button>
            </div>
          </div>
        </transition>

        <!-- <div class="w-full flex flex-wrap text-sm bg-white border-b border-gray-300 items-center divide-y mt-2 mb-15">
          <div class="flex justify-between items-center w-full h-12 px-3">
            <div class="sm:text-sm text-xs">Ime pošiljatelja na bankovnom računu</div>
            <input type="text" v-model="selected.name" placeholder="Nama Lengkap" class="max-h-20 outline-none p-1 border border-gray-300 text-right">
          </div>
          <div class="flex justify-between items-center w-full h-12 px-3">
            <div class="sm:text-sm text-xs">Transferi iz banaka</div>
            <bottom-sheet v-model="bankSourceSheet" full-screen>
              <template v-slot:activator="{ on, attrs }">
                <div 
                  class="flex gap-2 text-sm items-center cursor-pointer text-gray-400"
                  v-bind="attrs"
                  v-on="on"
                  v-if="!selected.sourceBank.key"
                >
                Odaberite Banku
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>
                </div>
                <div 
                  class="flex gap-2 text-sm items-center cursor-pointer text-gray-700"
                  v-bind="attrs"
                  v-on="on" 
                  v-else
                >
                  {{ selected.sourceBank.item }}
                </div>
              </template>
              <list :items="availableBanks">
                <template v-slot:item="{ data }">
                  <div 
                    class="h-16 flex w-full items-center px-4 cursor-pointer"
                    :class="selected.sourceBank.key == data.key ? 'gap-2' : ''"
                    @click="selected.sourceBank = data; bankSourceSheet = false"
                  >
                    <span v-if="selected.sourceBank.key == data.key">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    </span> {{ data.item }}
                  </div>
                </template>
              </list>
            </bottom-sheet>
          </div>
          <div class="flex justify-between items-center w-full h-14 px-3">
            <div class="sm:text-sm text-xs flex flex-col">
              Unesite broj vašeg računa banke
              <small class="hidden sm:block">Plaćanje putem šaltera, ispunite 9999.</small>
            </div>
            <input type="text" v-model="selected.accountNumber" placeholder="1234567890" class="max-h-20 outline-none p-1 border border-gray-300 text-right">
          </div>
          <div class="flex justify-between items-center w-full h-12 px-3">
            <div class="sm:text-sm text-xs">Virmansko plaćanje</div>
            <bottom-sheet v-model="bankDestinationSheet" full-screen>
              <template v-slot:activator="{ on, attrs }">
                <div 
                  class="flex gap-2 text-sm items-center cursor-pointer text-gray-400"
                  v-bind="attrs"
                  v-on="on"
                  v-if="!selected.destinationBank.name"
                >
                Odaberite Banku
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>
                </div>
                <div 
                  class="flex gap-2 text-sm items-center cursor-pointer text-gray-700"
                  v-bind="attrs"
                  v-on="on" 
                  v-else
                >
                  {{ selected.destinationBank.displayName }}
                </div>
              </template>
              <list :items="[bank]">
                <template v-slot:item="{ data }">
                  <div 
                    class="h-16 flex w-full items-center px-4 cursor-pointer"
                    :class="selected.destinationBank.name == data.item.name ? 'gap-2' : ''"
                    @click="selected.destinationBank = {name: data.item.name, displayName: data.item.displayName}; bankDestinationSheet = false"
                  >
                    <span v-if="selected.destinationBank.name == data.item.name">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    </span> {{ data.item.displayName }}
                  </div>
                </template>
              </list>
            </bottom-sheet>
          </div>
          <div class="flex justify-between items-center w-full h-12 px-3">
            <div class="text-xs sm:text-sm">Jumlah Ditransfer ({{ currencySymbol }})</div>
            <div class="flex gap-2 text-sm items-center cursor-pointer">
              <label class="text-gray-400">{{ currencySymbol }}</label>
              <input type="text" v-model="selected.totalTransfered" placeholder="Jumlah Ditransfer" class="max-h-20 outline-none p-1 border border-gray-300 text-right">
            </div>
          </div>
        </div> -->

        <div class="w-full flex flex-wrap gap-2 p-2 border-t border-gray-300  max-w-xl bg-white">
          <button @click="send" class="w-full p-4 font-bold bg-plava-boja text-white rounded text-center text-sm" :to="{ name: 'PaymentConfirm' }">
           POTVRDI DA JE PLAĆENO
          </button>
        </div>
      </div>
    </div>
  </div>



  </div>



  </div> 
  </div>

</div>
</template>

<script>
import { mapState } from 'vuex'
import appLayout from '../../layouts/app.vue'
import paymentLayout from '../../layouts/payment.vue'
import { Link, Head } from '@inertiajs/inertia-vue'

import BottomSheet from './../../components/bottom-sheet/bottom-sheet.vue'
import List from './../../components/list/list.vue'

export default {


  layout: [appLayout, paymentLayout],
  components: {
    Link,
    BottomSheet,
    List,
    Head
  },
  
  props: {
    isOpen: {
      type: Boolean,
      required: true,
    },
    id: {
      type: String, 
      required: true,
    },
  },
  data() {
    return {
      contentMode: 'default',
      showCopiedMessage: false,
      pdfUrl: null,

      order: {
      recipientName: "",
      addressLine1: "",
      addressLine2: "",
      city: "",
      postalCode: "",
      country: "",
      telephone: "",
      mobile: "",
      discounted: 0,
      total: 0,
      payed: 0,
      status: 0,
      expiredAt: this.$moment(),
      image: "",
      trackingNumber: null,
      user: {
        email: "",
      },
      orderDetails: [],
      orderPayment: {
        sourceBank: null,
        destinationBank: null,
        accountNumber: null,
        totalTransfered: null,
        proofOfTransaction: null,
      },
    },

    selected: {
        proofOfTransaction: null,
        destinationBank: {
          name: null,
          displayName: null
        },
        sourceBank: {
          key: null,
          name: null
        },
        accountNumber: null,
        name: null,
        totalTransfered: 0
      },
      openAccordion: false,
      openDialog: false,
      bankDestinationSheet: false,
      bankSourceSheet: false,
  }
  
  },

  computed: {



    last() {
      let string = `${parseInt(this.order.payed)}`
      return string.substr(-3)
    },
    ...mapState({
      first(state) {
        if (parseInt(this.order.payed) > 1000) {
          let string = `${parseInt(this.order.payed)}`
      
          return this.$currency(this.$voca.slice(string, 0, string.length - this.transactionUniqueCode))
        }
        return this.$_.find(state.moduleConfigurations, { key: "currencySymbol" }).value
      },
      transactionUniqueCode(state) {
        return this.$_.find(state.themeConfigurations, { key: "transactionUniqueCode" }).value
      },
      separator(state) {
        if (parseInt(this.order.payed) > 1000) {
          return this.$_.find(state.moduleConfigurations, { key: "currencySeparator" }).value
        }
      },
      bank(state) {
        return JSON.parse(this.$_.find(state.moduleConfigurations, { key: "paymentBank" }).value)
      },
      appName(state) {
        return this.$_.find(state.themeConfigurations, { key: "appName" }).value
      },
      title(state) {
        return this.$_.find(state.themeConfigurations, { key: "themeTitle" }).value;
      },

      user(state) {
        return state.user
      },
      sampleProofOfTransaction(state) {
        return this.$_.find(state.themeConfigurations, { key: "sampleProofOfTransaction" }).value;
      },
      currencySymbol(state) {
        return this.$_.find(state.moduleConfigurations, { key: "currencySymbol" }).value;
      },

    })
  },
  mounted() {
    this.fetchOrder()
  },
  watch: {
  contentMode(newMode) {
    if (newMode === 'default') {
      this.$nextTick(() => {
        this.reloadPdf();
      });
    }
  }
},
  methods: {

    potvrdaplacanjabezdokaza() {
      console.log('Sending data:', {
    orderId: this.id,
    ...this.selected,
    destinationBank: this.selected.destinationBank.name,
    sourceBank: this.selected.sourceBank.key,
  });
   
        this.$openLoading()
        this.$api.skijasiOrder
          .pay({
  
            orderId: this.id,
            ...this.selected,
            destinationBank: this.selected.destinationBank.name,
            sourceBank: this.selected.sourceBank.key,
          })
          .then(res => {
            this.$helper.alert(res.message)
            this.$inertia.visit(this.route('skijasi.commerce-theme.zaduzenja'))
          })
          .catch(err => {
            this.$helper.displayErrors(err)
            this.$inertia.visit(this.route('skijasi.commerce-theme.cart'))
          })
          .finally(() => {
            this.$closeLoading()
          })

  },

    printPDF() {
    if (this.$refs.pdfViewer && this.$refs.pdfViewer.contentWindow) {
      this.$refs.pdfViewer.contentWindow.print();
    }
  },

  downloadPDF() {
    if (this.$refs.pdfViewer && this.$refs.pdfViewer.src) {
      const link = document.createElement('a');
      link.href = this.$refs.pdfViewer.src;
      link.download = 'HZUTS_uplatnica.pdf';
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    }
  },
    copyToClipboard(text) {
      navigator.clipboard.writeText(text).then(() => {
        this.showCopiedMessage = true;
        setTimeout(() => {
          this.showCopiedMessage = false;
        }, 2000);
      }).catch(err => {
        console.error('Greška prilikom kopiranja: ', err);
      });
    },
    showUploadProofContent() {
      this.contentMode = 'uploadProof'
    },


    closeModal() {
      this.$emit('close');
    },

    getProductNames() {
    const productNames = this.order.orderDetails.map(
      (orderDetail) => orderDetail.productDetail.product.name
    );
    return productNames.join(', ');
  },

    async generatePaymentSlip() {

      const iznos = `${parseFloat(this.order.payed).toFixed(0)}00`;


      const opis = this.getProductNames() + "," + this.user.name + " " + this.user.username;
      const ime = this.user.name + " " + this.user.username;

    // Initialize pozivnabroj with an empty string or null to avoid errors
    let pozivnabroj = this.user.idmember ? this.user.idmember.toString() : '';

    // Check if user.idmember is empty and format datumrodjenja if necessary
    if (!pozivnabroj) {
        const datumrodjenja = new Date(this.user.datumrodjenja);
        const dd = String(datumrodjenja.getDate()).padStart(2, '0');
        const mm = String(datumrodjenja.getMonth() + 1).padStart(2, '0'); // Months are zero-based
        const yyyy = datumrodjenja.getFullYear();
        pozivnabroj = `${dd}${mm}${yyyy}`;
    }

      console.log ("TEST:", pozivnabroj)

      const uplatnicaPodaci = {
                 "poziv_na_broj_platitelja": "",
                 "poziv_na_broj_primatelja": pozivnabroj,
                 "iznos": iznos,
                 "iban_primatelja": "HR7423600001101359833",
                 "iban_platitelja": "",
                 "model_primatelja": "HR07",
                 "model_platitelja": "",
                 "sifra_namjene": "",
                 "datum_izvrsenja": "",
                 "valuta_placanja": "EUR",
               
                 "ime_i_prezime_platitelja": ime,
                 "ulica_i_broj_platitelja": "Ilica 1",
                 "postanski_i_grad_platitelja": "grad",
                 "naziv_primatelja": "Hrvatski zbor učitelja i trenera sportova na snijegu(HZUTS)",
                 "ulica_i_broj_primatelja": "Maksimirska 51a",
                 "postanski_i_grad_primatelja": "10 000 Zagreb,Hrvatska",
                 "opis_placanja": opis
      };
      try {
        const transactionUniqueCode = this.order.id; // Retrieve transactionUniqueCode from Vue component

        console.log("TEST CODE:", transactionUniqueCode)
        // Make API call to generate and fetch PDF URL
        const response = await this.$api.skijasiOrder.stvoriuplatnicu({
          paymentSlipData: JSON.stringify(uplatnicaPodaci),
          transactionUniqueCode: transactionUniqueCode
        });

        // Ensure response contains PDF URL
        if (response.pdfUrl) {
    this.pdfUrl = response.pdfUrl;
    this.$nextTick(() => {
      if (this.$refs.pdfViewer) {
        this.$refs.pdfViewer.src = this.pdfUrl;
      }
    });
  } else {
          console.error("PDF URL not found in response:", response);
     
        }

      } catch (error) {
        console.error("Error generating or loading PDF:", error);

      }
    },

    reloadPdf() {
  if (this.pdfUrl && this.$refs.pdfViewer) {
    this.$refs.pdfViewer.src = this.pdfUrl;
  }
},
switchToDefaultView() {
  this.contentMode = 'default';
  this.$nextTick(() => {
    this.reloadPdf();
  });
},

    fetchOrder() {
      this.$openLoading()
      this.$api.skijasiOrder
        .read({
          id: this.id
        })
        .then(res => {
          this.order = res.data.order
          if (res.data.order.status != 'waitingBuyerPayment' || res.data.order.orderPayment.paymentType != 'manual-transfer') {
         //   this.$inertia.visit('skijasi.commerce-theme.order')
         }
          this.generatePaymentSlip(); 
        })
        .catch(err => {
       //   this.$helper.displayErrors(err)
       //   this.$inertia.visit('skijasi.commerce-theme.order')
        })
        .finally(() => {
          this.$closeLoading()
        })
    },


    onFilePicked(e) {
      const files = e.target.files;
      if (files[0] !== undefined) {
        if (files[0].size > 5120000) {
          this.$helper.alert("Prevelika datoteka!")
          return;
        }

        let fr = new FileReader()
        fr.readAsDataURL(files[0])
        fr.addEventListener("load", () => {
          this.selected.proofOfTransaction = fr.result
        })
      }
      return
    },
    send() {
      console.log('Sending data:', {
    orderId: this.id,
    ...this.selected,
    destinationBank: this.selected.destinationBank.name,
    sourceBank: this.selected.sourceBank.key,
  });
   
        this.$openLoading()
        this.$api.skijasiOrder
          .pay({
  
            orderId: this.id,
            ...this.selected,
            destinationBank: this.selected.destinationBank.name,
            sourceBank: this.selected.sourceBank.key,
          })
          .then(res => {
            this.$helper.alert(res.message)
            this.$inertia.visit(this.route('skijasi.commerce-theme.zaduzenja'))
          })
          .catch(err => {
            this.$helper.displayErrors(err)
            this.$inertia.visit(this.route('skijasi.commerce-theme.cart'))
          })
          .finally(() => {
            this.$closeLoading()
          })

    },


  }
}
</script>

<style scoped>
/* Modal overlay styles */
.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.6); /* semi-transparent dark overlay */
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 10000;
}

.modal {
  position: fixed;
  background-color: white;
  padding: 20px;
  border-radius: 8px;
  z-index: 10000000; /* Ensure modal appears above other content */
  max-height: 90%; 
  max-width: 70%;
  min-width: 40%;
  overflow-y: auto; /* Enable vertical scrolling */
}

.modal-content {
  /* Optional: Customize modal content styles */
}

.pdf-iframe {
  width: 600px;
  max-width: 800px;
  height: 500px;
  border: none;
  overflow: visible;
  margin-bottom: 2.4rem;
}
.wmax80{
  width: 80%;
}


.button-container {
  display: flex;
  justify-content: center;
  margin-bottom: 10px;

  margin-top: 2.4rem;
}

.action-button {
  display: flex;
  align-items: center;
  padding: 8px 16px;
  margin-left: 10px;
  background-color: #4a5568;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.action-button:hover {
  background-color: #2d3748;
}

.action-button svg {
  margin-right: 8px;
}


.plava-boja {
   color: #03A9F4;
 }
 .bg-plava-boja {
   background-color: #03A9F4;
 }

@media (max-width: 760px) {
.modal {
  max-height: 90%; 
  max-width: 94%;
  min-width: 50%;
}
.pdf-iframe {
  width: 100%;
}


}


</style>
