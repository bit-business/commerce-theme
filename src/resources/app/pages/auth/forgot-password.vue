<template>
 
  <div class="hzuts-reset-password-desktop">
    <Head title="$t('zaboravljena-lozinka-0')" />
    <img
      class="backgroundzaboravljenalozinka-icon"
      alt=""
      src="/storage/slike/hzuts-login-desktop@3x.png"
    />
    <Link :href="route('skijasi.commerce-theme.home')">
    <img class="x-1-icon" alt="" src="/storage/slike/x-1.svg" />
    </Link>
    <div class="srednjiframeglavni">
      <div class="srednjiframeglavni-child" />
      <div class="srednjiframepodgrupa">

      
        
      


        <template v-if="!isVerify">
          <b class="zaboravljena-lozinka">{{ $t('zaboravljena-lozinka-0') }}</b>
          <div class="bez-brige-poslat">
          {{ $t('bez-brige-poslat-cemo-vam-upute-za-ponovno-postavljanje') }}
        </div>
        
          <div class="upisemaila">
          <div class="email-label">
            <div class="background-container" />
            <input class="poljezaupis" type="email" v-model="email" @keypress.enter="reset" ref="emailInput" :class="{ invalid: $v.email.$error }" />
            <img class="mail-icon" alt="" src="/storage/slike/mail-iconprijava.svg" />
          </div>
          <div class="email">{{ $t('email-0') }}</div>
        </div>
       
            <button :class="emailButtonClasses" @click="reset">
              <commerce-loading v-if="loading" />
              <div class="posaljigumbzaboravljenalozinka">
          <div class="posaljigumbzaboravljenalozinka-child" />
          <span class="poalji">{{ $t('posalji-0') }}</span>
        </div>
            </button>
    
        </template>


        <template v-else>
      
            <b class="zaboravljena-lozinka2">{{ $t('verificiraj') }}</b>
            <div class="">
            <alert color="primary popup2 absolute" closeable>
              <template slot="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </template>
              <span>{{ $t('provjerite-svoju-e-postu-kako-biste-dobili-kod-tokena') }}</span>
            </alert>
            <pin
              v-model="token"
              :length="6"
              class="mt-4 tokenpozicija"
              label="$t('upisite-token-dobiven-na-email')"
              @keypress.enter="verify"
            />
            <button :class="tokenButtonClasses" @click="verify">
              <commerce-loading v-if="loading" />
              <div v-else class="posaljigumbzaboravljenalozinka2">
          <div class="posaljigumbzaboravljenalozinka-child" />
          <span class="poalji">{{ $t('posalji-1') }}</span>
        </div>
              
            </button>
          </div>
          
        </template>





     
        <img
          class="ikonasrednjiframetop-icon"
          alt=""
          src="/storage/slike/ikonasrednjiframetop.svg"
        />
        <div class="natragnaprijavutekst" @click="back">
          <div class="natrag-na-prijavu cursor-pointer" >{{ $t('natrag-na-prijavu') }}</div>
          <img class="arrow-left-1-icon" alt="" src="/storage/slike/arrowleft-1.svg" />
        </div>
        <div class="e-mail-adresa-nije" v-if="$v.email.$error">
          {{ $t('e-mail-adresa-nije-valjanog-formata') }}
        </div>
      </div>
    </div>

    <div class="hzuts-login-desktop-child" />
    <div class="footertext">
      {{ $t('copyright-c-2023-sva-prava-pridrzana-od-strane-hzuts-a-0') }}
    </div>
    <img class="logoprijava-icon" alt="" src="/storage/slike/logoprijava.svg" />
  </div>
</template>
<!--
  <div class="h-auth sm:h-auto">
    <Head title="Forgot Password" />
    <div class="hidden sm:flex sm:container sm:py-32 items-center justify-center">
      <div class="col-span-1 w-96">
        <template v-if="!isVerify">
          <div class="bg-white rounded-xl p-8 flex flex-wrap gap-2 shadow-md">
            <div class="text-xl w-full text-center relative">
              <Link :href="route('skijasi.commerce-theme.login')" class="absolute left-0 top-1/2 transform -translate-y-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </Link>
              Forgot Password
            </div>
            <input type="email" class="w-full border border-gray-300 text-sm p-2 focus:outline-none focus:shadow-md focus:border-gray-700 rounded-md mt-4" placeholder="Email" v-model="email" @keypress.enter="reset">
            <button :class="emailButtonClasses" @click="reset">
              <commerce-loading v-if="loading" />
              <span v-else>RESET</span>
            </button>
          </div>
        </template>
        <template v-else>
          <div class="bg-white rounded-xl p-8 flex flex-wrap gap-2 shadow-md">
            <div class="text-xl w-full text-center relative">
              <Link :href="route('skijasi.commerce-theme.login')" class="absolute left-0 top-1/2 transform -translate-y-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </Link>
              Verifikasi
            </div>
            <alert color="primary" closeable>
              <template slot="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </template>
              <span>Silakan cek email kamu untuk mendapatkan kode token</span>
            </alert>
            <pin
              v-model="token"
              :length="6"
              class="mt-4"
              label="Enter your token"
              @keypress.enter="verify"
            />
            <button :class="tokenButtonClasses" @click="verify">
              <commerce-loading v-if="loading" />
              <span v-else>RESET</span>
            </button>
          </div>
        </template>
      </div>
    </div>
    <div class="flex flex-col sm:hidden bg-gray-50 h-auth relative z-0 justify-start pt-4 items-center transform px-4">
      <div class="w-full" v-if="!isVerify">
        <div class="relative w-full">
          <input type="email" class="border-none outline-none w-full py-2 pl-8 pr-6 focus:outline-none text-sm rounded-md rounded-b-none bg-transparent" placeholder="Email" v-model="email" ref="email">
          <div class="w-full h-px bg-gray-400 absolute bottom-0" />
          <div class="absolute left-1 top-1/2 transform -translate-y-1/2 text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
          </div>
          <div class="absolute right-1 top-1/2 transform -translate-y-1/2 text-gray-500" @click="() => $refs.email.value = null" v-if="email">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </div>
        </div>
        <div :class="['h-10 w-full mt-6 flex items-center justify-center rounded-md', $v.email.$invalid ? 'cursor-none text-gray-500 bg-gray-200 pointer-events-none' : 'bg-primary text-white']" @click="reset">
          Berikutnya
        </div>
      </div>
      <div class="w-full" v-else>
        <div class="relative w-full">
          <input type="text" class="border-none outline-none w-full py-2 pl-8 pr-24 focus:outline-none text-sm rounded-md rounded-b-none bg-transparent" placeholder="Kode Verifikasi" v-model="mobileToken" maxlength="6" max="999999">
          <div class="w-full h-px bg-gray-400 absolute bottom-0" />
          <div class="absolute left-1 top-1/2 transform -translate-y-1/2 text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
            </svg>
          </div>
          <div class="absolute right-1 top-1/2 transform -translate-y-1/2">
            <div :class="['inline-block text-xs border py-1.5 text-center w-24 rounded-md', getCountdown === 0 ? 'bg-primary text-white border-transparent' : 'border-gray-200 text-gray-400 bg-transparent']" @click="sendVerify">
              Kirim Ulang ({{ getCountdown }})
            </div>
          </div>
        </div>
        <div :class="['h-10 w-full mt-6 flex items-center justify-center rounded-md', $v.mobileToken.$invalid ? 'cursor-none text-gray-500 bg-gray-200 pointer-events-none' : 'bg-primary text-white']" @click="mobileVerify">
          Verifikasi
        </div>
      </div>
    </div>
  </div>
-->



<script>
import { mapState } from 'vuex';
import Password from './../../components/form/password.vue'
import Pin from "./../../components/form/pin.vue";
import {
  required,
  minLength,
  maxLength,
  email,
} from "vuelidate/lib/validators";

import appLayout from '../../layouts/app.vue'
import authLayout from '../../layouts/auth.vue'
import { Link, Head } from '@inertiajs/inertia-vue'

export default {
  layout: [appLayout, authLayout],
  components: {
    Password,
    Pin,
    Link,
    Head,
  },
  data() {
    return {
      email: null,
      token: '',
      mobileToken: '',
      countdown: 60,
      loading: false,
      isVerify: false,
      interval: null,
    }
  },
  validations: {
    email: {
      required,
      email,
      minLength: minLength(4),
      maxLength: maxLength(255),
    },
    token: {
      required,
      minLength: minLength(6),
      maxLength: maxLength(6),
    },
    mobileToken: {
      required,
      minLength: minLength(6),
      maxLength: maxLength(6),
    },
  },
  computed: {
    getCountdown() {
      return this.countdown;
    },
    emailButtonClasses() {
      return [
        "posalji",
        this.$v.email.$invalid || this.loading ? this.$t('cursor-not-allowed-opacity-50') : "",
      ];
    },
    tokenButtonClasses() {
      return [
        "posalji",
        this.$v.token.$invalid || this.loading ? this.$t('cursor-not-allowed-opacity-50') : "",
      ];
    },
    ...mapState({
      isAuthenticated(state) {
        return state.isAuthenticated
      },
      appName(state) {
        return this.$_.find(state.themeConfigurations, { key: "appName" }).value;
      },
    }),
  },
  mounted() {
    if (this.isAuthenticated) {
      this.$inertia.visit(this.route("skijasi.commerce-theme.login"))
    }
  },
  methods: {
    back() {
      window.history.back();
    },
    reset() {
      this.$v.email.$touch(); 
      this.loading = true
      this.$api.skijasiAuth
        .forgotPassword({
          email: this.email,
        })
        .then((response) => {
          this.isVerify = true;
          // set countdown 60 seconds
          this.interval = setInterval(() => {
            if (this.countdown > 0) {
              this.countdown--;
            } else {
              clearInterval(this.interval);
            }
          }, 1000);
        })
        .catch((error) => {
          this.$helper.displayErrors(error)
        })
        .finally(() => {
          this.loading = false
        })
    },
    sendVerify() {
      this.loading = true
      this.$api.skijasiAuth
        .forgotPassword({
          email: this.email,
        })
        .then((response) => {
          this.isVerify = true;
        })
        .catch((error) => {
          this.$helper.displayErrors(error)
        })
        .finally(() => {
          this.loading = false
        })
    },
    verify() {
      this.loading = true
      this.$api.skijasiAuth
        .forgotPasswordVerifyToken({
          email: this.email,
          token: this.token,
        })
        .then((response) => {
          this.$inertia.visit(this.route("skijasi.commerce-theme.reset-password", {
            email: this.email,
            token: this.token,
          }));
        })
        .catch((error) => {
          this.$helper.displayErrors(error)
        })
        .finally(() => {
          this.loading = false
        })
    },
    mobileVerify() {
      this.loading = true
      this.$api.skijasiAuth
        .forgotPasswordVerifyToken({
          email: this.email,
          token: this.mobileToken,
        })
        .then((response) => {
          this.$inertia.visit(this.route("skijasi.commerce-theme.reset-password", {
            email: this.email,
            token: this.mobileToken,
          }));
        })
        .catch((error) => {
          this.$helper.displayErrors(error)
        })
        .finally(() => {
          this.loading = false
        })
    },
  }
}
</script>




<style scoped>

.popup2{
top: 74% ;
position: absolute;
}
.tokenpozicija {
top: 33% ;
position: absolute;
}
  .backgroundzaboravljenalozinka-icon {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 100%;
    height: 64rem;
    object-fit: cover;
  }
  .x-1-icon {
    position: absolute;
    top: 1.88rem;
    right: 1.88rem;
    width: 2rem;
    height: 2rem;
    overflow: hidden;
  }
  .srednjiframeglavni-child {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 248px);
    border-radius: 20px;
    background-color: #fff;
    width: 31rem;
  }
  .zaboravljena-lozinka {
    position: absolute;
    top: 21.3%;
    left: calc(50% - 183px);
    font-size: 2.1rem;
    text-align: left;
  }
  .zaboravljena-lozinka2 {
    position: absolute;
    top: 17.3%;
    left: calc(50% - 83px);
    font-size: 2.1rem;
    text-align: left;
  }
  .background-container {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 200px);
    border-radius: 20px;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    width: 25rem;
  }
  .poljezaupis {
    border: 2px solid #03a9f4;
    background-color: transparent;
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 147px);
    border-radius: 0px 20px 20px 0px;
    box-sizing: border-box;
    width: 21.69rem;
    padding-left: 14px; 
  }

  .poljezaupis.invalid {
  border-color: #f88379; /* Change this to the desired border color */
}

  .mail-icon {
    position: absolute;
    height: 48%;
    top: 26%;
    bottom: 26%;
    left: calc(50% - 185px);
    max-height: 100%;
    width: 1.5rem;
    overflow: hidden;
  }
  .email-label {
    position: absolute;
    height: 67.57%;
    top: 32.43%;
    bottom: 0%;
    left: calc(50% - 200px);
    width: 25rem;
  }
  .email {
    position: absolute;
    top: 0%;
    left: calc(50% - 200px);
    font-weight: 500;
  }
  .upisemaila {
    position: absolute;
    height: 15.01%;
    top: 52.13%;
    bottom: 32.86%;
    left: calc(50% - 200px);
    width: 25rem;
  }
  .bez-brige-poslat {
    position: absolute;
    top: 37.32%;
    left: calc(50% - 200px);
    font-size: 1rem;
    color: #21231e;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 25rem;
  }
  .posaljigumbzaboravljenalozinka-child {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 200px);
    border-radius: 20px;
    background-color: #03a9f4;
    width: 25rem;
  }
  .poalji {
    position: absolute;
    top: 30%;
    left: calc(50% - 45px);
    letter-spacing: -0.17px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 5.67rem;
  }
  .posaljigumbzaboravljenalozinka {
    position: absolute;
    height: 10.14%;
    top: 79.31%;
    bottom: 10.55%;
    left: calc(50% - 200px);
    width: 25rem;
    font-size: 1rem;
    color: #fff;
  }
  .posaljigumbzaboravljenalozinka2 {
    position: absolute;
    height: 10.14%;
    top: 55%;
    bottom: 10.55%;
    left: calc(50% - 200px);
    width: 25rem;
    font-size: 1rem;
    color: #fff;
  }
  .ikonasrednjiframetop-icon {
    position: absolute;
    height: 14.2%;
    top: 0%;
    bottom: 85.8%;
    left: calc(50% - 35px);
    max-height: 100%;
    width: 4.38rem;
  }
  .natrag-na-prijavu {
    position: absolute;
    top: 0%;
    left: calc(50% - 45px);
    white-space: nowrap;
    font-weight: 600;
  }
  .arrow-left-1-icon {
    position: absolute;
    height: 94.12%;
    top: 5.88%;
    bottom: 0%;
    left: calc(50% - 71px);
    max-height: 100%;
    width: 1rem;
    overflow: hidden;
  }
  .natragnaprijavutekst {
    position: absolute;
    height: 3.45%;
    top: 96.55%;
    bottom: 0%;
    left: calc(50% - 91px);
    width: 10rem;
    color: #21231e;
  }
  .e-mail-adresa-nije {
    position: absolute;
    top: 69.17%;
    left: calc(50% - 196px);
    font-size: 0.75rem;
    letter-spacing: -0.17px;
    color: #f88379;
  }
  .srednjiframepodgrupa {
    position: absolute;
    height: 86.8%;
    top: 6.16%;
    bottom: 7.04%;
    left: calc(50% - 200px);
    width: 25rem;
  }
  .srednjiframeglavni {
    position: absolute;
    height: 75.47%;
    top: 10.36%;
    bottom: 22.17%;
    left: calc(50% - 248px);
    width: 31rem;
  }
  .backgroundfooter {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0%;
    right: 0%;
    bottom: 0%;
    left: 0%;
    background-color: #03a9f4;
  }
  .footer {
    position: absolute;
    height: 7.13%;
    width: 100%;
    top: 92.87%;
    right: 0%;
    bottom: 0%;
    left: 0%;
  }

  .hzuts-login-desktop-child {
    position: fixed;
    height: 7.13%;
    width: 100%;
    top: 92.87%;
    right: 0%;
    bottom: 0%;
    left: 0%;
    background-color: #03a9f4;
  }
  .footertext {
    position: fixed;
    top: 95.43%;
    height: 3.56%;
  width: 100%;
    bottom: 0%;
    font-size: 0.82rem;
    font-weight: 500;
    color: #fff;
    text-align: center;
  }
  .logoprijava-icon {
    position: absolute;
    width: 13.89%;
    top: 2.38rem;
    right: 82.64%;
    left: 3.47%;
    max-width: 100%;
    overflow: hidden;
    height: 12.5rem;
  }
  .hzuts-reset-password-desktop {
    position: relative;
    background-color: #fff;
    width: 100%;
    height: 100%;
    overflow: hidden;
    text-align: center;
    font-size: 0.88rem;
    color: #000;
    font-family: Inter;
    padding-top: -3.75rem; 
  }
  
  @media screen and (max-width: 1200px) {
    .hzuts-reset-password-desktop {
      max-width: 1200px;
    }
  }
  @media screen and (max-width: 960px) {
    .hzuts-reset-password-desktop {
      max-width: 960px;
    }
    .logoprijava-icon {
      top: 0.38rem;
left: 43%;
height: 5.5rem;
  }
  }
  @media screen and (max-width: 420px) {
    .hzuts-reset-password-desktop {
      max-width: 420px;
    }
    .logoprijava-icon {
      top: 0.38rem;
left: 43%;
height: 5.5rem;
  }
  .footertext {
   
   margin: 0 !important;
   font-weight: 500;
   font-size: 0.56rem;
   z-index: 2;
 }

 .hzuts-login-desktop-child {

height: 7.13%;
width: 100%;
top: 92.87%;
right: 0%;
bottom: 0%;
left: 0%;
background-color: #03a9f4;
z-index: 2;
}

  }
</style>