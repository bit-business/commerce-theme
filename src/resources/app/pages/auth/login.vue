<template>


  <div>
  
        <template v-if="isWideScreen">
        
        <Head title="Prijava"/>
          <div class="hzuts-login-desktop">
      <img
        class="backgroundslika-icon"
        alt=""
        src="/storage/slike/hzuts-login-desktop@3x.png"
      />
  
      <Link :href="route('skijasi.commerce-theme.home')" class="backgumb">
        <img class="vector-icon2" alt="" src="/storage/slike/vectornazad1.svg" />
        <img class="vector-icon2" alt="" src="/storage/slike/vectornazad2.svg" />
      </Link>
      <div class="srednjiframe">
        <div class="pozadinasrednjiframe" />
        <div class="srednjipodframe">
          <b class="prijavi-se">{{ $t('prijaviSe') }}</b>
          <div class="emailframe">
            <div class="email-label">
              <div class="background-container" />
              <input class="poljezaupisemail" type="email" v-model="email"
                @keypress.enter="login" ref="emailInput" :class="{ invalid: $v.email.$error }"/>
              <img class="mail-icon" alt="" src="/storage/slike/mail-iconprijava.svg" />
            </div>
            <div class="email">{{ $t('email') }}</div>
          </div>
  
  
          <div class="lozinkaframe">
            <div class="email-label1">
              <div class="background-container" />
              <input class="poljezaupispassword" type="password" v-model="password" :type="showPassword ? 'password' : 'text'"
                @keypress.enter="login" ref="passwordInput" :class="{ invalid: $v.password.$error }" />
              <img class="mail-icon" alt="" src="/storage/slike/password-iconprijava.svg" />
            </div>
            <div class="email">{{ $t('lozinka') }}</div>
          </div>
  
  
  
          <button class="prijavisegumb" :class="buttonClasses" @click="login">
             <commerce-loading v-if="loading" />
               
            <div class="prijavisepozadina" />
            <div class="prijavisetekst">{{ $t('prijaviSe') }}</div>
          </button>
          <div class="registrirajsetekst">
            <span>{{ $t('nemas-racun') }} </span>
            <Link :href="route('skijasi.commerce-theme.register')" class="registrirajte-se cursor-pointer">
              {{ $t('registrirajte-se') }}
                  </Link>
      
          </div>
          <button class="okoikona" @click="showPassword = !showPassword">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" v-if="showPassword" fill="none" viewBox="0 0 24 24" stroke="#03a9f4">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" v-else fill="none" viewBox="0 0 24 24" stroke="#03a9f4">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
              </svg>
            
          </button>
          <div class="zapamtimeframe">
            <div class="zapamtime">
  
              <input class="zapamtime-child" type="checkbox" v-model="rememberMe" />
              <div class="zapamti-me">{{ $t('zapamti-me') }}</div>
            </div>
            <Link :href="route('skijasi.commerce-theme.forgot-password')" class="zaboravljenalozinka">{{ $t('zaboravljena-lozinka') }}</Link>
         
          </div>
        </div>
      </div>
  
      <div class="hzuts-login-desktop-child" />
      <div class="footertext">
        {{ $t('copyright-c-2023-sva-prava-pridrzana-od-strane-hzuts-a') }}
      </div>
      <img class="logohzuts-icon" alt="" src="/storage/slike/logohzuts.svg" />
      </div>
  </template>
  
  
  
  <template v-else>
    <div class="hzuts-login-desktop-mob360">
      <img class="backgroundslika-icon" alt="" src="/storage/slike/hzuts-login-desktop@3x.png" />
      <div class="srednjiframe">
        <img class="logohzuts-icon" alt="" src="/storage/slike/logohzuts.svg" />
  
        <div class="pozadinasrednjiframe" />
        <div class="srednjipodframe">
          <div class="prijavi-se">{{ $t('prijaviSe') }}</div>
          <div class="emailframe">
  
            <div class="email-label">
              <div class="background-container" />
              <input class="poljezaupisemail" type="email" v-model="email"
                @keypress.enter="login" ref="emailInput" :class="{ invalid: $v.email.$error }"/>
              <img class="mail-icon" alt="" src="/storage/slike/mail-iconprijava.svg" />
            </div>
            <div class="email">{{ $t('email-0') }}</div>
          </div>
          <div class="lozinkaframe">
  
            <div class="email-label1">
              <div class="background-container" />
              <input class="poljezaupisemail" type="password" v-model="password" :type="showPassword ? 'password' : 'text'"
                @keypress.enter="login" ref="passwordInput" :class="{ invalid: $v.password.$error }" />
              <img class="mail-icon" alt="" src="/storage/slike/password-iconprijava.svg" />
            </div>
  
         
            <div class="email">{{ $t('lozinka-0') }}</div>
          </div>
          <button class="prijavisegumb" :class="buttonClasses" @click="login">
             <commerce-loading v-if="loading" />
            <div class="prijavisepozadina" />
            <div class="prijavisetekst">{{ $t('prijaviSe') }}</div>
          </button>
     
  
          <div class="registrirajsetekst">
            <span>{{ $t('nemas-racun-0') }} </span>
            <Link :href="route('skijasi.commerce-theme.register')" class="registrirajte-se cursor-pointer">
              {{ $t('registrirajte-se-0') }}
            </Link>
          </div>
          <button class="okoikona" @click="showPassword = !showPassword">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" v-if="showPassword" fill="none" viewBox="0 0 24 24" stroke="#03a9f4">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" v-else fill="none" viewBox="0 0 24 24" stroke="#03a9f4">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
              </svg>
          </button>
          <div class="zapamtimeframe">
            <div class="zapamtime">
              <input class="zapamtime-child" type="checkbox" v-model="rememberMe" />
              <div class="zapamti-me">{{ $t('zapamti-me-0') }}</div>
            </div>
            <Link :href="route('skijasi.commerce-theme.forgot-password')" class="zaboravljenalozinka">{{ $t('zaboravljena-lozinka-0') }}</Link>
          </div>
        </div>
      </div>
      <div class="hzuts-login-desktop-child" />
      <div class="footertext">
        {{ $t('copyright-c-2023-sva-prava-pridrzana-od-strane-hzuts-a-0') }}
      </div>
  
      <Link :href="route('skijasi.commerce-theme.home')" class="backgumb">
        <img class="vector-icon2" alt="" src="/storage/slike/vectornazad1.svg" />
        <img class="vector-icon2" alt="" src="/storage/slike/vectornazad2.svg" />
      </Link>
    </div>
  </template>
  </div>
  </template>
  
  <script>
  import Password from "./../../components/form/password.vue";
  import { mapState } from "vuex";
  import { Link, Head } from "@inertiajs/inertia-vue"
  import {
    required,
    minLength,
    maxLength,
    email,
  } from "vuelidate/lib/validators";
  import appLayout from '../../layouts/app.vue'
  import authLayout from '../../layouts/auth.vue'
  
  export default {
    layout: [appLayout, authLayout],
    components: {
      Password,
      Link,
      Head,
    },
    data() {
      return {
        email: null,
        password: null,
        loading: false,
        showPassword: true,
        rememberMe: false,
  
  
  
      windowWidth: window.innerWidth,
    
      };
    },
    validations: {
      password: {
        required,
        minLength: minLength(4),
        maxLength: maxLength(255),
      },
      email: {
        required,
        email,
        minLength: minLength(4),
        maxLength: maxLength(255),
      },
    },
  
    watch: {
      '$root.windowWidth': function(newWidth) {
        this.$forceUpdate();
      }
    },
    destroyed() {
      window.removeEventListener('resize', this.handleResize);
    },
    computed: {
      isWideScreen() {
      const wide = window.innerWidth > 460;
      console.log('Window width:', window.innerWidth, 'Is wide screen:', wide);
      return wide;
    },
  
  
      buttonClasses() {
        return [
          this.$t('w-full-bg-primary-text-white-py-2-rounded-md-text-sm-font-medium-mt-4-select-none-flex-items-center-justify-center-gap-2'),
          this.$v.$invalid || this.loading ? this.$t('cursor-not-allowed-opacity-50') : "",
        ];
      },
      ...mapState({
        isAuthenticated(state) {
          return state.isAuthenticated
        },
        title(state) {
          return this.$_.find(state.themeConfigurations, { key: "themeTitle" }).value;
        },
        subtitle(state) {
          return this.$_.find(state.themeConfigurations, { key: "themeSubtitle" })
            .value;
        },
        logo(state) {
          return this.$_.find(state.themeConfigurations, { key: "logoTheme" }).value;
        },
        appName(state) {
          return this.$_.find(state.themeConfigurations, { key: "appName" }).value;
        },
      }),
    },
    mounted() {
      if (this.isAuthenticated) {
        this.$inertia.visit(this.route("skijasi.commerce-theme.profile"))
      };
  
      window.addEventListener('resize', this.handleResize);
  
      document.addEventListener('focusout', function() {
      window.scrollTo(0, 0);
  });
    },
  
  beforeDestroy() {  
      window.removeEventListener('resize', this.handleResize);
      document.removeEventListener('focusout', this.focusoutHandler);
    },
    methods: {
  
      handleResize() {
      this.windowWidth = window.innerWidth;
    },
  
      back() {
        window.history.back();
      },
      
      login() {
        this.$v.email.$touch(); 
        this.loading = true
  
            // Retrieve the previous route from session storage from prijavnice
            const fromRoute = sessionStorage.getItem('previousRoute');
  
        this.$api.skijasiAuth
          .loginweb({
            email: this.email,
            password: this.password,
            remember: this.rememberMe,
          })
          .then((response) => {
            if (response.data.accessToken) {
            // this.$inertia.visit(this.route("skijasi.commerce-theme.profile"))
  
            const previousRoute = sessionStorage.getItem('previousRoute');
          if (previousRoute) {
            this.$inertia.visit(previousRoute, { preserveState: false });
          sessionStorage.removeItem('previousRoute');
          } else {
            this.$inertia.visit(this.route("skijasi.commerce-theme.profile"), { preserveState: false });
                  }
  
              this.$store.dispatch("SET_IS_AUTHENTICATED", true);
              this.$store.dispatch("SET_USER", response.data.user);
              this.$store.dispatch('FETCH_CARTS')
              this.$store.dispatch('FETCH_NOTIFICATIONS')
  
     
  
            } else {
              this.$inertia.visit(this.route("skijasi.commerce-theme.verification", this.email))
            }
          })
          .catch((error) => {
            this.$helper.alert(this.$t('email-ili-lozinka-nisu-ispravno-upisani'))
          })
          .finally(() => {
            this.loading = false
          })
      },
    },
  };
  
  </script>
  
  
  <style scoped>
  
  
  
  
    .backgroundslika-icon {
      position: absolute;
      top: 0rem;
      left: 0rem;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .vector-icon2 {
      position: absolute;
      height: 56.25%;
      width: 56.25%;
      top: 21.88%;
      right: 21.88%;
      bottom: 21.88%;
      left: 21.88%;
      max-width: 100%;
      overflow: hidden;
      max-height: 100%;
    }
    .backgumb {
      text-decoration: none;
      position: absolute;
      top: 1.88rem;
      right: 1.88rem;
      width: 2rem;
      height: 2rem;
      overflow: hidden;
    }
    .pozadinasrednjiframe {
      position: absolute;
      height: 100%;
      top: 0%;
      bottom: 0%;
      left: calc(50% - 248px);
      border-radius: 20px;
      background-color: #fff;
      width: 31rem;
    }
    .prijavi-se {
      position: absolute;
      top: 0%;
      left: calc(50% - 80px);
      font-size: 2.25rem;
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
    .poljezaupisemail {
      border: 2px solid #03a9f4;
      background-color: transparent;
      position: absolute;
      height: 100%;
      top: 0%;
      bottom: 0%;
      left: calc(50% - 148px);
      border-radius: 0px 20px 20px 0px;
      box-sizing: border-box;
      width: 21.75rem;
      padding-left: 14px; 
    }
    .poljezaupisemail.invalid {
    border-color: #f88379; /* Change this to the desired border color */
  }
  .poljezaupispassword.invalid {
    border-color: #f88379; /* Change this to the desired border color */
  }
    .poljezaupispassword {
      border: 2px solid #03a9f4;
      background-color: transparent;
      position: absolute;
      height: 100%;
      top: 0%;
      bottom: 0%;
      left: calc(50% - 148px);
      border-radius: 0px 20px 20px 0px;
      box-sizing: border-box;
      width: 21.75rem;
      padding-left: 14px; 
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
    .emailframe {
      position: absolute;
      top: 6.31rem;
      left: 0rem;
      width: 25rem;
      height: 4.63rem;
    }
    .email-label1 {
      position: absolute;
      top: 1.5rem;
      left: 0rem;
      width: 25rem;
      height: 3.13rem;
    }
    .lozinkaframe {
      position: absolute;
      top: 13.06rem;
      left: 0rem;
      width: 25rem;
      height: 4.63rem;
    }
    .prijavisepozadina {
      position: absolute;
      height: 100%;
      top: 0%;
      bottom: 0%;
      left: calc(50% - 200px);
      border-radius: 20px;
      background-color: #03a9f4;
      width: 25rem;
    }
    .prijavisetekst {
      position: absolute;
      top: 32%;
      left: calc(50% - 45.33px);
      font-size: 1rem;
      letter-spacing: -0.17px;
      font-weight: 600;
      font-family: Inter;
      color: #fff;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 5.67rem;
      z-index: 3;
    }
    .prijavisegumb {
      cursor: pointer;
      border: none;
      padding: 0;
      background-color: transparent;
      position: absolute;
      top: 22.44rem;
      left: 0rem;
      width: 25rem;
      height: 3.13rem;
    }
    .registrirajte-se {
      color: #03a9f4;
    }
    .registrirajsetekst {
      position: absolute;
      top: 96.26%;
      left: calc(50% - 99px);
      text-align: left;
    }
    .vector-icon4 {
      position: absolute;
      height: 75%;
      width: 100%;
      top: 12.5%;
      right: 0%;
      bottom: 12.5%;
      left: 0%;
      max-width: 100%;
      overflow: hidden;
      max-height: 100%;
    }
    .vector-icon5 {
      position: absolute;
      height: 100%;
      width: 100%;
      top: 0%;
      right: 0%;
      bottom: 0%;
      left: 0%;
      max-width: 100%;
      overflow: hidden;
      max-height: 100%;
    }
    .okoikona {
      cursor: pointer;
      border: none;
      padding: 0;
      background-color: transparent;
      position: absolute;
      height: 5.27%;
      top: 54.07%;
      bottom: 40.66%;
      left: calc(50% + 158px);
      width: 1.5rem;
      overflow: hidden;
    }
    .zapamtime-child {
      cursor: pointer;
      position: absolute;
      height: 100%;
      top: 10%;
      bottom: 0%;
      left: calc(50% - 46px);
      border-radius: 3px;
      border: 1px solid #03a9f4;
      box-sizing: border-box;
      width: 0.94rem;
    }
    .zapamti-me {
      position: absolute;
      top: 0%;
      left: calc(50% - 20px);
      font-weight: 300;
    }
    .zapamtime {
      position: absolute;
      top: 0rem;
      left: 0.3rem;
      width: 6.1rem;
      height: 0.94rem;
    }
    .zaboravljenalozinka {
      text-decoration: none;
      position: absolute;
      top: 0%;
      left: calc(50% + 75px);
      font-weight: 300;
      color: #03a9f4;
    }
    .zapamtimeframe {
      position: absolute;
      top: 19.06rem;
      left: 0rem;
      width: 25rem;
      height: 0.94rem;
      font-size: 0.75rem;
    }
    .srednjipodframe {
      position: absolute;
      top: 3.56rem;
      left: 3rem;
      width: 25rem;
      height: 28.44rem;
    }
    .srednjiframe {
    position: fixed; /* Use fixed positioning */
    height: 34.5rem;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 31rem;
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
  
  
  
  
    .logohzuts-icon {
      position: relative !important;
      width: 13.89% !important;
      top: 2.34rem !important;
      right: 82.64% !important;
    
      max-width: 100% !important;
      overflow: hidden !important;
      height: 12.5rem !important;
      z-index: 2 !important;
    }
    .hzuts-login-desktop {
      position: relative;
      background-color: #fff;
      width: 100%;
      height: 100%;
      overflow: hidden;
      text-align: center;
      font-size: 0.88rem;
      color: #000;
      font-family: Inter;
    }
  
    @media screen and (min-width: 461px) {
      .hzuts-login-desktop {
        position: absolute !important;
      }
      .logohzuts-icon {
      position: absolute !important;
    }
    }
  
  
    @media screen and (max-width: 1200px) {
      .hzuts-login-desktop {
        max-width: 1200px;
      }
    }
    @media screen and (max-width: 960px) {
      .hzuts-login-desktop {
        max-width: 960px;
      }
  
      .logohzuts-icon {
      top: 1rem !important;
      left: 43% !important;
      height: 5rem !important;
    }
  
    }
    @media screen and (max-width: 460px) {
  
      .backgroundslika-icon {
   margin-bottom: -20%;
    }
   
     
    .prijavi-se {
      position: absolute;
      top: 0%;
      left: calc(50% - 45.5px);
      font-size: 1.31rem;
      font-weight: 600;
      text-align: left;
    }
    .background-container {
      position: absolute;
      height: 100%;
      top: 0%;
      bottom: 0%;
      left: calc(50% - 134.1px);
      border-radius: 13.41px;
      border: 1.3px solid #03a9f4;
      box-sizing: border-box;
      width: 16.76rem;
    }
    .poljezaupisemail {
      border: 1.3px solid #03a9f4;
      background-color: transparent;
      position: absolute;
      height: 100%;
      top: 0%;
      bottom: 0%;
      left: calc(50% - 99.2px);
      border-radius: 0px 13.41px 13.41px 0px;
      box-sizing: border-box;
      width: 14.58rem;
    }
    .mail-icon {
      position: absolute;
      height: 48.06%;
      top: 25.97%;
      bottom: 25.97%;
      left: calc(50% - 124px);
      max-height: 100%;
      width: 1.01rem;
      overflow: hidden;
    }
    .email-label {
      position: absolute;
      height: 67.54%;
      top: 32.46%;
      bottom: 0%;
      left: calc(50% - 134.1px);
      width: 16.76rem;
    }
    .email {
      position: absolute;
      top: 0%;
      left: calc(50% - 134.1px);
      font-weight: 500;
    }
    .emailframe {
      position: absolute;
      top: 3rem;
      left: 0.01rem;
      width: 16.76rem;
      height: 3.1rem;
    }
    .email-label1 {
      position: absolute;
      top: 1.01rem;
      left: 0rem;
      border-radius: 13.41px;
      width: 16.76rem;
      height: 2.09rem;
    }
    .lozinkaframe {
      position: absolute;
      top: 7.53rem;
      left: 0.01rem;
      width: 16.76rem;
      height: 3.1rem;
    }
    .prijavisepozadina {
      position: absolute;
      height: 100%;
      top: 0%;
      bottom: 0%;
      left: calc(50% - 134.1px);
      border-radius: 13.41px;
      background-color: #03a9f4;
      width: 16.76rem;
    }
    .prijavisetekst {
      position: absolute;
      top: 31.94%;
      left: calc(50% - 30.4px);
      font-size: 0.67rem;
      letter-spacing: -0.11px;
      font-weight: 600;
      font-family: Inter;
      color: #fff;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 3.8rem;
    }
    .prijavisegumb {
      cursor: pointer;
      border: none;
      padding: 0;
      background-color: transparent;
      position: absolute;
      top: 13.81rem;
      left: 0.01rem;
      border-radius: 13.41px;
      width: 16.76rem;
      height: 2.09rem;
      z-index: 3;
    }
    .registrirajte-se {
      color: #03a9f4;
    }
    .registrirajsetekst {
      position: absolute;
      top: 100%;
      left: calc(50% - 66.3px);
      text-align: left;
    }
    .vector-icon {
      position: absolute;
      height: 75.16%;
      width: 100%;
      top: 12.42%;
      right: 0%;
      bottom: 12.42%;
      left: 0%;
      max-width: 100%;
      overflow: hidden;
      max-height: 100%;
    }
    .vector-icon1 {
      position: absolute;
      height: 100%;
      width: 100%;
      top: 0%;
      right: 0%;
      bottom: 0%;
      left: 0%;
      max-width: 100%;
      overflow: hidden;
      max-height: 100%;
    }
    .okoikona {
      cursor: pointer;
      border: none;
      padding: 0;
      background-color: transparent;
      position: relative !important;
      height: initial !important;
      top: 50% !important; 
      bottom: 41.66% !important;
      left: 110px !important;
      right: 10px !important; 
      width: 1.5rem;
      overflow: hidden;
    }
    .zapamtime-child {
      position: absolute;
      height: 100%;
      top: 0%;
      bottom: 0%;
      left: calc(50% - 32.2px);
      border-radius: 2.01px;
      border: 0.7px solid #03a9f4;
      box-sizing: border-box;
      width: 0.63rem;
    }
    .zapamti-me {
      position: absolute;
      top: 0%;
      left: calc(50% - 12.1px);
      font-weight: 300;
    }
    .zapamtime {
      position: absolute;
      top: 0rem;
      left: 0rem;
      width: 4.03rem;
      height: 0.63rem;
    }
    .zaboravljena-lozinka {
      text-decoration: none;
      position: absolute;
      top: 0%;
      left: calc(50% + 57px);
      font-weight: 300;
      color: #03a9f4;
    }
    .zapamtimeframe {
      position: absolute;
      top: 11.54rem;
      left: 0.01rem;
      width: 16.76rem;
      height: 0.63rem;
      font-size: 0.5rem;
    }
    .srednjipodframe {
      position: absolute;
      margin: 0 !important;
      top: 13%;
      left: calc(50% - 135px);
      width: 16.81rem;
      height: 17.81rem;
      z-index: 1;
    }
    
  
    .logohzuts-icon {
    position: absolute !important;
    left: calc(50% - 1.5rem) !important;
    top: 0.5rem !important;
    bottom: -3rem !important; /* Half the height of the logo */
    width: 3rem !important; /* Set the width of your logo */
    height: 3rem !important; /* Set the height of your logo */
    /* other styling as needed */
    z-index: 2;
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
   
    .vector-icon2 {
      position: absolute;
      height: 53.85%;
      width: 53.85%;
      top: 23.08%;
      right: 23.08%;
      bottom: 23.08%;
      left: 23.08%;
      max-width: 100%;
      overflow: hidden;
      max-height: 100%;
    }
    .backgumb {
      text-decoration: none;
      position: absolute;
      margin: 0 !important;
      top: 1.34rem;
      right: 0.94rem;
      width: 1rem;
      height: 1rem;
      overflow: hidden;
      flex-shrink: 0;
      z-index: 4;
    }
    .hzuts-login-desktop-mob360 {
  
      background-color: #fff;
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      font-size: 0.59rem;
      color: #000;
      font-family: Inter;
      overflow: hidden;
  
      height: 100%;
    }
  
    .backgroundslika-icon {
      align-self: stretch;
      position: relative;
      max-width: 100%;
      overflow: hidden;
      height: 35%;
      flex-shrink: 0;
      object-fit: cover;
      z-index: 0;
      top: 0rem;
      left: 0rem;
  
      
    }
    .pozadinasrednjiframe {
      align-self: stretch;
      flex: 1;
      position: relative;
      background-color: #fff;
      z-index: 0;
    }
    .srednjiframe {
      width: 100% !important;
      max-height: 80%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      position: relative !important;
      transform: initial !important;
      top:30%;
      z-index: 1;
  left: auto;
  height: 34.5rem;
   max-height: 50rem;
    }
  
    .zaboravljenalozinka {
      text-decoration: none;
      position: absolute;
      top: 0%;
      left: calc(50% + 55px);
      font-weight: 300;
      color: #03a9f4;
    }
  
    
  
  
  }
  
  
  
  
  </style>
  