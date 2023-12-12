<template>
 
  <div class="hzuts-reset-password-desktop">
    <Head title="Verifikacija" />
    <img
      class="backgroundzaboravljenalozinka-icon"
      alt=""
      src="/storage/slike/hzuts-login-desktop@3x.png"
    />
    <Link :href="route('skijasi.commerce-theme.home')">
    <img class="x-1-icon" alt="" src="/storage/slike/x-1.svg" />
    </Link>
    <div class="srednjiframeglavni">
      
    



      <div class="flex">
      <div class="grid grid-cols-1 container p-12 place-items-center">
   
        <div class="col-span-1 md:px-0 lg:px-20">
          <div class="bg-white rounded-xl p-12 flex flex-wrap gap-2 shadow-md">
            <b class="text-xl w-full zaboravljena-lozinka">Verifikacija</b>
            <input
              type="email"
              class="
                w-full
                text-sm
                border border-gray-300
                p-2
                focus:outline-none
                focus:shadow-md
                focus:border-gray-700
                rounded-md
                mt-4
              "
              placeholder="Email"
              v-model="email"
            />
            
            <pin
              v-model="token"
              :length="6"
              class="mt-4"
              label="Upišite token"
            />
            <div :class="['inline-block text-xs justify-end text-center w-30 rounded-md  p-2', getCountdown === 0 ? 'bg-primary text-white border-transparent' : 'border-gray-200 text-gray-400 bg-transparent']" @click="sendVerify">
            Ponovno pošalji({{ getCountdown }})
          </div>
            <button :class="buttonClasses" @click="verify">
              <commerce-loading v-if="loading" />
              
              <span v-else>Verificiraj</span>
            </button>

            
            
            
            <div class="flex w-full flex-wrap">
              
              <Link :href="route('skijasi.commerce-theme.forgot-password', $page.props.email)" class="text-xs plavitekst font-medium">
                Zaboravili ste lozinku?
              </Link>
           
      
      

              <div class="w-full flex items-center gap-4 my-2">
                <div class="h-px w-full bg-gray-300" />
                <div class="uppercase text-gray-300 text-sm"></div>
                <div class="h-px w-full bg-gray-300" />
              </div>
              <div class="text-sm text-gray-300 w-full text-center">
                Nemaš račun?
                <Link :href="route('skijasi.commerce-theme.register')" class="plavitekst font-medium cursor-pointer">
                 Registrirajte se
                </Link>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>




    <!--
    <div class="flex flex-col sm:hidden bg-gray-50 h-auth relative z-0 justify-start pt-4 items-center transform px-4">
      <div class="relative mt-8 w-full">
        <div class="text-xs text-gray-400">Potvrdite svoju e-poštu unosom tokena koji je poslan na vašu e-poštu.</div>
      </div>
      <div class="relative mt-6 w-full">
        <input type="text" class="border-none outline-none w-full py-2 pl-8 pr-24 focus:outline-none text-sm rounded-md rounded-b-none bg-transparent" placeholder="Token verifikacije" v-model="mobileToken" maxlength="6" max="999999">
        <div class="w-full h-px bg-gray-400 absolute bottom-0" />
        <div class="absolute left-1 top-1/2 transform -translate-y-1/2 text-gray-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
          </svg>
        </div>
        <div class="absolute right-1 top-1/2 transform -translate-y-1/2">
          <div :class="['inline-block text-xs border py-1.5 text-center w-24 rounded-md', getCountdown === 0 ? 'bg-primary text-white border-transparent' : 'border-gray-200 text-gray-400 bg-transparent']" @click="sendVerify">
            Ponovno pošalji({{ getCountdown }})
          </div>
        </div>
      </div>
      <div :class="['h-10 w-full mt-6 flex items-center justify-center rounded-md', $v.$invalid ? 'cursor-none text-gray-500 bg-gray-200 pointer-events-none' : 'bg-primary text-white']" @click="mobileVerify">
        Verifikacija
      </div>
    </div>
-->



    
    </div>



    <div class="footer">
      <div class="backgroundfooter" />
    </div>
    <div class="footertext">
      Copyright © 2023 Sva prava pridržana od strane HZUTS-a.
    </div>
    <img class="logoprijava-icon" alt="" src="/storage/slike/logoprijava.svg" />
  </div>
</template>




<script>
import Password from "./../../components/form/password.vue";
import Pin from "./../../components/form/pin.vue";
import { mapState } from "vuex";
import { Link, Head } from "@inertiajs/inertia-vue"
import appLayout from '../../layouts/app.vue'
import authLayout from '../../layouts/auth.vue'
import {
  required,
  minLength,
  maxLength,
  email,
} from "vuelidate/lib/validators";

export default {
  layout: [appLayout, authLayout],
  components: {
    Password,
    Pin,
    Link,
    Head,
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
  data() {
    return {
      email: "",
      token: "",
      loading: false,
      
      mobileToken: "",
      countdown: 60,
      interval: null,
    };
  },
  computed: {
    getCountdown() {
      return this.countdown;
    },
    isFormValid() {
    // This will ensure that any change in validation state triggers a re-render
    return !this.$v.$invalid;
  },
  buttonClasses() {
    return [
      "w-full plavitekstbg text-white py-2 rounded-md text-sm font-medium mt-4 select-none flex items-center justify-center gap-2",
       this.loading ? "opacity-100" : "",
    ];
  },
    ...mapState({
      isAuthenticated(state) {
        return state.isAuthenticated
      },
      appName(state) {
        return this.$_.find(state.themeConfigurations, { key: "appName" }).value;
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
    }),
  },
  mounted() {
    if (this.isAuthenticated) {
      this.$inertia.visit(this.route('skijasi.commerce-theme.home'))
    }

    this.email = this.$page.props.email;

    // set countdown 60 seconds
    this.interval = setInterval(() => {
      if (this.countdown > 0) {
        this.countdown--;
      } else {
        clearInterval(this.interval);
      }
    }, 1000);
  },
  beforeDestroy() {
    clearInterval(this.interval);
  },
  methods: {
    
    verify() {
      this.loading = true
      this.$api.skijasiAuth
        .verify({
          email: this.email,
          token: this.token,
         
        })
        .then((response) => {
          this.$inertia.visit(this.route("skijasi.commerce-theme.login"));
          this.$helper.alert("Verifikacija uspješna")
        })
        .catch((error) => {
          if (error.message && error.message === "EXPIRED") {
            this.expired = true;
            this.$helper.displayErrors("Verifikacijski token je istekao")
          } else {
            this.$helper.displayErrors(error)
          }
        })
        .finally(() => {
          this.loading = false
        })
    },
    mobileVerify() {
      this.loading = true
      this.$api.skijasiAuth
        .verify({
          email: this.email,
          token: this.mobileToken,
        })
        .then((response) => {
          this.$inertia.visit(this.route("skijasi.commerce-theme.login"));
          this.$helper.alert("Verifikacija uspješna")
        })
        .catch((error) => {
          if (error.message && error.message === "EXPIRED") {
            this.expired = true;
            this.$helper.displayErrors("Verifikacijski token je istekao")
          } else {
            this.$helper.displayErrors(error)
          }
        })
        .finally(() => {
          this.loading = false
        })
    },
    sendVerify() {
      if (this.getCountdown === 0) {
        this.loading = true
        this.$api.skijasiAuth
          .reRequestVerificationToken({
            email: this.email,
          })
          .then((response) => {
            this.$helper.alert("Email sa tokenom je poslan")
          })
          .catch((error) => {
            this.$helper.displayErrors(error)
          })
          .finally(() => {
            this.loading = false
          })
      }
    },
  },
};
</script>

<style scoped>
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

    font-size: 2.25rem;

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
  .plavitekst{
  color: #03a9f4;
}

.plavitekstbg{
  background-color: #03a9f4;
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
    left: calc(50% - 71px);
    width: 8.88rem;
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
    position: absolute;
    height: 7.13%;
    width: 100%;
    top: 92.87%;
    right: 0%;
    bottom: 0%;
    left: 0%;
    background-color: #03a9f4;
  }
  .footertext {
    position: absolute;
    top: 95%;
    left: calc(50% - 200px);
    font-size: 0.9rem;
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


  .footertext {
    position: absolute;
    top: 95%;
    left: calc(50% - 158px);
    font-size: 0.7rem;
    color: #fff;
    text-align: center;
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
  }
</style>