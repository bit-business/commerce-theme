<template>
  <div class="hzuts-reset-password-desktop">
    <Head :title="$t('reset-password')" />
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
        <img
          class="ikonasrednjiframetop-icon"
          alt=""
          src="/storage/slike/ikonasrednjiframetop.svg"
        />
        <b class="zaboravljena-lozinka">{{ $t('resetiraj-lozinku') }}</b>

        <div class="upisemaila">
    <div class="email-label">
      <div class="background-container" />
      <input 
        :type="showPassword ? 'password' : 'text'"
        class="poljezaupis" 
        v-model="password"
        :class="{ invalid: $v.password.$error }"
        :placeholder="$t('password')"
      />
      <img class="mail-icon" alt="" src="/storage/slike/password-iconprijava.svg" />
      <div class="password-toggle" @click="showPassword = !showPassword">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" v-if="showPassword" fill="none" viewBox="0 0 24 24" stroke="#03a9f4">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" v-else fill="none" viewBox="0 0 24 24" stroke="#03a9f4">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
        </svg>
      </div>
    </div>
    <div class="email">{{ $t('password') }}</div>
  </div>

  <div class="upisemaila confirmation-field">
    <div class="email-label">
      <div class="background-container" />
      <input 
        :type="showPasswordConfirmation ? 'password' : 'text'"
        class="poljezaupis"
        v-model="passwordConfirmation"
        :class="{ invalid: $v.passwordConfirmation.$error }"
        :placeholder="$t('password-confirmation')"
      />
      <img class="mail-icon" alt="" src="/storage/slike/password-iconprijava.svg" />
      <div class="password-toggle" @click="showPasswordConfirmation = !showPasswordConfirmation">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" v-if="showPasswordConfirmation" fill="none" viewBox="0 0 24 24" stroke="#03a9f4">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" v-else fill="none" viewBox="0 0 24 24" stroke="#03a9f4">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
        </svg>
      </div>
    </div>
    <div class="email">{{ $t('password-confirmation') }}</div>
  </div>

        <div class="posaljigumbzaboravljenalozinka" @click="reset">
          <div class="posaljigumbzaboravljenalozinka-child" />
          <div class="poalji">
            <commerce-loading v-if="loading" />
            <span v-else>{{ $t('resetiraj-lozinku-0') }}</span>
          </div>
        </div>

    
      </div>
      <div class="natragnaprijavutekst" @click="back">
          <img class="arrow-left-1-icon" alt="" src="/storage/slike/arrowleft-1.svg" />
          <div class="natrag-na-prijavu cursor-pointer">{{ $t('natrag-na-prijavu') }}</div>
        
        </div>
    </div>

    <div class="hzuts-login-desktop-child">
    <div class="footertext">
      {{ $t('copyright-c-2023-sva-prava-pridrzana-od-strane-hzuts-a-0') }}
    </div>
  </div>
  <img class="logoprijava-icon" alt="" src="/storage/slike/logoprijava.svg" />
  </div>
</template>

<script>
import { mapState } from 'vuex';
import Password from './../../components/form/password.vue'
import appLayout from '../../layouts/app.vue'
import authLayout from '../../layouts/auth.vue'
import { Link, Head } from "@inertiajs/inertia-vue"
import {
  required,
  minLength,
  maxLength,
  sameAs,
} from "vuelidate/lib/validators";

export default {
  layout: [appLayout, authLayout],
  components: {
    Password,
    Link,
    Head,
  },
  data() {
    return {
      password: null,
      passwordConfirmation: null,
      showPassword: true,
      showPasswordConfirmation: true,
      loading: false,
    }
  },
  validations: {
    password: {
      required,
      minLength: minLength(4),
      maxLength: maxLength(255),
    },
    passwordConfirmation: {
      required,
      minLength: minLength(4),
      maxLength: maxLength(255),
      sameAsPassword: sameAs("password"),
    },
  },
  computed: {
    buttonClasses() {
      return [
        'w-full bg-primary text-white py-2 rounded-md text-sm font-medium mt-4 select-none flex items-center justify-center gap-2',
        this.$v.$invalid || this.loading ? 'cursor-not-allowed opacity-50' : '',
      ];
    },
    ...mapState({
      appName(state) {
        return this.$_.find(state.themeConfigurations, { key: "appName" }).value;
      },
      isAuthenticated(state) {
        return state.isAuthenticated
      },
    }),
  },
  methods: {
    back() {
      window.history.back();
    },
    reset() {
      this.loading = true
      this.$api.skijasiAuth
        .resetPassword({
          email: this.$page.props.email,
          token: this.$page.props.token,
          password: this.password,
          password_confirmation: this.passwordConfirmation,
        })
        .then((response) => {
          this.$helper.alert(this.$t('redirect-on-5-seconds'))
          setTimeout(() => {
            this.$inertia.visit(this.route('skijasi.commerce-theme.login'))
          }, 5000);
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
.backgroundzaboravljenalozinka-icon {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.x-1-icon {
  position: absolute;
  top: 1.88rem;
  right: 1.88rem;
  width: 2rem;
  height: 2rem;
  overflow: hidden;
  z-index: 10;
}

.srednjiframeglavni {
  position: absolute;
  width: 31rem;
  height: 42rem;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: transparent;
}

.srednjiframeglavni-child {
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 20px;
  background-color: #fff;
}

.srednjiframepodgrupa {
  position: relative;
  width: 25rem;
  height: 100%;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding-top: 1rem; /* Added padding to give space at the top */
}

.zaboravljena-lozinka {
  font-size: 2.1rem;
  text-align: center;
  width: 100%;
  margin-bottom: 2.9rem;
  position: relative;
  z-index: 2;
}
.upisemaila {
  position: relative;
  width: 100%;
  height: 3.5rem;
  margin-bottom: 1.5rem;
}

.email-label {
  position: relative;
  width: 100%;
  height: 100%;
}

.background-container {
  position: absolute;
  width: 100%;
  height: 100%;
  border: 2px solid #03a9f4;
  border-radius: 20px;
}

.poljezaupis {
  position: absolute;
  width: calc(100% - 3.3rem);
  height: 100%;
  left: 3.3rem;
  padding: 0 1rem;
  border: 2px solid #03a9f4;

  border-radius: 0 20px 20px 0;
  font-size: 1rem;
  background: transparent;
}

.poljezaupis.invalid {
  border-color: #f88379;
}

.password-toggle {
  position: absolute;
  right: 1rem;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
  color: #666;
  z-index: 2;
}

.email {
  position: absolute;
  top: -1.5rem;
  left: 0;
  font-weight: 500;
}

.confirmation-field {
  margin-top: 2rem;
}

.posaljigumbzaboravljenalozinka {
  position: relative;
  width: 100%;
  height: 3.5rem;
  margin-top: 2rem;
  cursor: pointer;
}

.posaljigumbzaboravljenalozinka-child {
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 20px;
  background-color: #03a9f4;
}

.poalji {
  position: absolute;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-weight: 600;
  font-size: 1rem;
  letter-spacing: -0.17px;
}

.ikonasrednjiframetop-icon {
  width: 4.38rem;
  height: auto;
  margin: 2rem auto;
  display: block;
  position: relative;
  z-index: 2;
}

.natragnaprijavutekst {
  position: relative;
  width: 100%;
  text-align: center;
bottom: 10%;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  left: -0.5rem;
}

.natrag-na-prijavu {
  font-weight: 600;
  margin-left: 0.3rem;
  bottom: 0.5rem;
}

.arrow-left-1-icon {
  width: 1rem;
  height: auto;
}

.hzuts-login-desktop-child {
  position: fixed;
  height: 7.13%;
  width: 100%;
  bottom: 0;
  left: 0;
  background-color: #03a9f4;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1;
}

.footertext {
  color: #fff;
  font-size: 0.82rem;
  font-weight: 500;
  text-align: center;
  width: 100%;
}

.logoprijava-icon {
  position: absolute;
  width: 13.89%;
  max-width: 12.5rem;
  height: auto;
  top: 2.38rem;
  left: 3.47%;
}


.hzuts-reset-password-desktop {
  position: relative;
  width: 100%;
  min-height: 100vh;
  background-color: #fff;
  overflow: hidden;
  font-family: Inter;
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

.password-toggle {
  position: absolute;
  right: 1rem;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
  z-index: 2;
}







@media screen and (max-width: 960px) {
  .srednjiframeglavni {
    width: 90%;
    max-width: 31rem;
  }
  
  .srednjiframepodgrupa {
    width: 80%;
  }
  
  .logoprijava-icon {
    width: 5.5rem;
    height: auto;
    top: 0.38rem;
    left: 50%;
    transform: translateX(-50%);
  }
  
  .zaboravljena-lozinka {
    font-size: 1.8rem;
    margin-top: 5rem;
  }

  .ikonasrednjiframetop-icon {
    width: 3.5rem;
    margin: 1.5rem auto;
  }
}

@media screen and (max-width: 640px) {


  
  .footertext {
    font-size: 0.56rem;
  }
  
  .zaboravljena-lozinka {
    font-size: 1.5rem;
    margin-top: 7rem;
  }
  
  .poljezaupis {
    font-size: 0.9rem;
  }

  .ikonasrednjiframetop-icon {
    width: 3rem;
    margin: 1rem auto;
  }

  .natragnaprijavutekst {
    position: absolute;
    bottom: 4rem;
    left: 50%;
    transform: translateX(-50%);
    width: auto;
    z-index: 2;
  }
}

@media screen and (max-width: 560px) {


  .upisemaila {
    width: 100%;
    margin-bottom: 1.5rem;
  }

  .email-label {
    width: 100%;
  }

  .background-container {
    width: 100%;
  }

  .poljezaupis {
    width: calc(100% - 3rem);
    left: 3rem;
    padding-right: 3rem;
  }

  .mail-icon {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    width: 1.5rem;
    height: 1.5rem;
  }

  .password-toggle {
    right: 0.5rem;
  }

  .password-toggle svg {
    width: 1.25rem;
    height: 1.25rem;
  }

  .zaboravljena-lozinka {
    font-size: 1.4rem;
    margin-top: 3rem;
    padding: 0 1rem;
  }

  .email {
    font-size: 0.9rem;
  }

  .posaljigumbzaboravljenalozinka {
    width: 100%;
  }

  .natragnaprijavutekst {
    position: absolute;
    bottom: 4rem;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    width: auto;
    z-index: 2;
  }

  .arrow-left-1-icon {
    width: 1rem;
    height: 1rem;
  }

  .natrag-na-prijavu {
    font-size: 0.9rem;
    margin-left: 0;
  }

  .x-1-icon {
    top: 1rem;
    right: 1rem;
    width: 1.5rem;
    height: 1.5rem;
  }

  .confirmation-field {
    margin-top: 1.5rem;
  }

  .hzuts-login-desktop-child {
    height: 2.5rem;
    z-index: 3;
  }
}

@media screen and (max-width: 360px) {

  .zaboravljena-lozinka {
    font-size: 1.3rem;
    margin-top: 5rem;
  }

  .poljezaupis {
    font-size: 0.85rem;
  }

  .email {
    font-size: 0.85rem;
  }

  .natragnaprijavutekst {
    bottom: 3.5rem;
    font-size: 0.85rem;
  }

  .mail-icon,
  .password-toggle svg {
    width: 1.2rem;
    height: 1.2rem;
  }

  .backgroundzaboravljenalozinka-icon {
    object-position: center;
  }
}

/* Add these base styles if not already present */
.backgroundzaboravljenalozinka-icon {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 0;
}

.hzuts-reset-password-desktop {
  position: relative;
  width: 100%;
  min-height: 100vh;
  overflow: hidden;
  font-family: Inter;
}

</style>