<template>
  <div class="hzuts-registration-desktop">
    <Head title="Registracija" />
    <Link :href="route('skijasi.commerce-theme.home')" class="backgumb">
      <img class="vector-icon2" alt="" src="/storage/slike/vectornazad1.svg" />
      <img class="vector-icon2" alt="" src="/storage/slike/vectornazad2.svg" />
    </Link>

      <!-- 1. screen po redu -->
      <transition name="frame-fade" mode="out-in">
    <div class="srednjiframe" v-if="showCurrentFrame">
      <div class="srednjipodframe">
        <b class="registracijatekst">Registracija</b>



        <button :disabled="!isFormValid"
        :style="{ backgroundColor: isFormValid ? '#03a9f4' : 'rgba(152, 208, 241, 0.6)' }"
        class="gumbsljedece" 
        @click="toggleContent">
  <div class="sljedee">Sljedeće</div>
</button>
        <div class="frame1234">
          <div class="framegore4">
            <div class="framebroj4">
              <div class="framebroj4-child" />
              <div class="tekstdiv">4</div>
            </div>
            <img class="framegore4-child" alt="" src="/storage/slike/line-10.svg" />
          </div>
          <div class="framegore3">
            <div class="framebroj4">
              <div class="framebroj4-child" />
              <div class="tekstdiv">3</div>
            </div>
            <img class="framegore4-child" alt="" src="/storage/slike/line-10.svg" />
          </div>
          <div class="framegore12">
            <div class="framebroj1">
              <div class="framebroj1-child" />
              <div class="framebroj1-item" />
              <div class="tekstdiv2">1</div>
            </div>
            <div class="framebroj2">
              <div class="framebroj4-child" />
              <div class="tekstdiv3">2</div>
            </div>
            <img class="framegore12-child" alt="" src="/storage/slike/line-10.svg" />
          </div>
        </div>
        
        <div class="frameimeiprezime">
          <div class="frameime">
            <div class="imebackground">
              <div class="containerzaime" />
              <input class="poljezaupisime" type="text" required v-model="name" ref="name"/>
              <img class="user-icon" alt="" src="/storage/slike/user-icon.svg" />
            </div>
            <div class="ime">Ime</div>
          </div>
          <div class="frameprezime">
            <div class="imebackground">
              <div class="containerzaime" />
              <input class="poljezaupisime" type="text" required v-model="username" ref="username" />
              <img class="user-icon" alt="" src="/storage/slike/user-icon.svg" />
            </div>
            <div class="ime">Prezime</div>
          </div>
        </div>
        <div class="frameemail">
          <div class="framezaemail">
            <div class="containerzaemail" />
            <input class="poljezaupisemaila" type="email" required v-model="email" ref="email"/>
            <img class="user-icon" alt="" src="/storage/slike/mail-iconprijava.svg" />
          </div>
          <div class="ime">Email</div>
        </div>
        <div class="framedatumrodjenja">
          <div class="framezaemail">
            <div class="containerzaemail" />
            <input class="poljezaupisemaila" type="date" required v-model="datumrodjenja" ref="datumrodjenja"/>
            <img
              class="user-icon"
              alt=""
              src="/storage/slike/calendarikonazadatumrodenja.svg"
            />
          </div>
          <div class="ime">Datum rođenja</div>
        </div>
      </div>
    </div>
  </transition>
  <transition name="frame-fade" mode="out-in">
     <!-- 2.screen po redu -->

      <!-- Content of the second frame you want to show on top of the current one -->
      <div class="srednjiframe2" v-if="!showCurrentFrame && showSecondFrame">
      <div class="srednjipodframe2">
        <b class="registracijatekst">Registracija</b>
        <button :disabled="!isSecondFormValid"
        :style="{ backgroundColor: isSecondFormValid ? '#03a9f4' : 'rgba(152, 208, 241, 0.6)' }"
        class="gumbsljedece" 
        @click="toggleContent">
  <div class="sljedee">Sljedeće</div>
</button>

        <div class="frameregistracija-1do4glavni">
          <div class="frameregistracija-1do4glavni-f">
            <div class="frameregistracija-1do4glavni-b">
              <div class="frameregistracija-1do4glavni-b-child" />
              <div class="screen2div">4</div>
            </div>
            <img
              class="frameregistracija-1do4glavni-f-child"
              alt=""
              src="/storage/slike/line-10.svg"
            />
          </div>
          <div class="frameregistracija-1do4glavni-f1">
            <div class="frameregistracija-1do4glavni-b">
              <div class="frameregistracija-1do4glavni-b-child" />
              <div class="screen2div">3</div>
            </div>
            <img
              class="frameregistracija-1do4glavni-f-child"
              alt=""
              src="/storage/slike/line-10.svg"
            />
          </div>
          <div class="podframeregistracija-1do4glavn">
            <button class="frameregistracija-1do4glavni-b2" @click="switchToFirstFrame">
              <div class="frameregistracija-1do4glavni-b-inner" />
              <div class="screen2div2">1</div>
            </button>
            <div class="frameregistracija-1do4glavni-b3">
              <div class="ellipse-div" />
              <div class="frameregistracija-1do4glavni-b-child1" />
              <div class="screen2div3">2</div>
            </div>
            <img
              class="frameregistracija-1do4glavni-l-icon"
              alt=""
              src="/storage/slike/line-10.svg"
            />
          </div>
        </div>
        <div class="framebrojmobiteladrzava">
          <div class="framebrojmobitela">
            <div class="podframebrojmobitela">
              <div class="containerbrojmobitela" />
              <input
                class="poljezaunosbrojmobitela"
                type="tel"
                maxlength="25"
                minlength="5"
                required
                v-model="brojmobitela" 
              />
              <img
                class="ikonareg-mobitel-icon"
                alt=""
                src="/storage/slike/ikonareg-mobitel.svg"
              />
            </div>
            <div class="broj-mobitela">Broj mobitela</div>
          </div>
          <div class="framedrzava">
            <div class="podframebrojmobitela">
              <div class="containerbrojmobitela" />
              <input
                class="poljezaunosbrojmobitela"
                type="text"
                maxlength="20"
                minlength="3"
                v-model="drzava"
                required
              />
              <img
                class="ikonareg-mobitel-icon"
                alt=""
                src="/storage/slike/ikonareg-drzava.svg"
              />
            </div>
            <div class="broj-mobitela">Država</div>
          </div>
        </div>
        <div class="frameadresa">
          <div class="adresapodframe">
            <div class="containeradresa" />
            <input
              class="poljezaupisadresa"
              type="text"
              maxlength="100"
              minlength="4"
              required
              v-model="adresa" 
            />
            <img
              class="registracija-ikonaadresa-icon"
              alt=""
              src="/storage/slike/registracija-ikonaadresa.svg"
            />
          </div>
          <div class="adresa">Adresa</div>
        </div>
        <div class="framenatrag">
          <button @click="switchToFirstFrame" class="tekstnatragnaprethodnigrad">Natrag na prethodni korak</button>
          <img
            class="ikona-reg-strelicazanazad-icon"
            alt=""
            src="/storage/slike/ikona-reg-strelicazanazad.svg"
          />
        </div>
        <div class="framegradpostanskibroj">
          <div class="framebrojmobitela">
            <div class="podframebrojmobitela">
              <div class="containerbrojmobitela" />
              <input
                class="poljezaunosbrojmobitela"
                type="text"
                maxlength="20"
                minlength="3"
                required
                v-model="grad" 
              />
              <img
                class="ikonareg-adresa-icon"
                alt=""
                src="/storage/slike/registracija-ikonaadresa.svg"
              />
            </div>
            <div class="broj-mobitela">Grad</div>
          </div>
          <div class="framedrzava">
            <div class="podframebrojmobitela">
              <div class="containerbrojmobitela" />
              <input class="poljezaunosbrojmobitela" type="text" required v-model="postanskibroj"  />
              <img
                class="ikonareg-adresa-icon"
                alt=""
                src="/storage/slike/registracija-ikonaadresa.svg"
              />
            </div>
            <div class="broj-mobitela">Poštanski broj</div>
          </div>
        </div>
      </div>
    </div>

     

    </transition>


  <transition name="frame-fade" mode="out-in">
    <div class="srednjiframe3" v-if="!showCurrentFrame && !showSecondFrame && showThirdFrame">
      <!-- Content of the third frame you want to show on top of the current and second one -->
   

      <div class="srednjipodframe3">
        <b class="registracijatekst">Registracija</b>
     
        <button :disabled="!isThirdFormValid"
        :style="{ backgroundColor: isThirdFormValid ? '#03a9f4' : 'rgba(152, 208, 241, 0.6)' }"
        class="login-with-email-button" 
        @click="toggleContent">
  <div class="sljedee">Sljedeće</div>
</button>


        <div class="frame-parent">
          <div class="frame-group">
            <div class="reg-3screen-vector17-parent">
              <div class="reg-3screen-vector17" />
              <div class="div">4</div>
            </div>
            <img class="reg-3screen-vector16-icon" alt="" src="/storage/slike/line-10.svg" />
          </div>
          <div class="frame-container">
            <div class="reg-3screen-vector15-parent">
              <div class="reg-3screen-vector15" />
              <div class="reg-3screen-vector14" />
              <div class="div1">3</div>
            </div>
            <img class="reg-3screen-vector13-icon" alt="" src="/storage/slike/line-10.svg" />
          </div>
          <div class="frame-div">
            <button class="reg-3screen-vector12-parent" @click="switchToFirstFrame">
              <div class="reg-3screen-vector12" />
              <div class="div2">1</div>
            </button>
            <button class="reg-3screen-vector11-parent" @click="switchToSecondFrame"> 
              <div class="reg-3screen-vector12" />
              <div class="div3">2</div>
          </button>
            <img class="frame-child" alt="" src="/storage/slike/line-10.svg" />
          </div>
        </div>
        <div class="framezalozinkuipotvrdulozinke">
          <div class="email-label-parent">
            <div class="email-label">
              <div class="containerlozinkaunos" />
              <input
                class="poljezaunoslozinka-treciscreen"
                maxlength="50"
                minlength="4"
                required
                v-model="password"
                ref="password"
                :type="showPassword ? 'password' : 'text'" 
              />
              <div class="absolute right-1 top-1/2 transform -translate-y-1/2 flex">
          <div @click="showPassword = !showPassword">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" v-if="showPassword" fill="none" viewBox="0 0 24 24" stroke="#03a9f4">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" v-else fill="none" viewBox="0 0 24 24" stroke="#03a9f4">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
            </svg>
          </div>
        </div>

              <img class="password-icon" alt="" src="/storage/slike/password-icon.svg" />
            </div>
            <div class="lozinka">Lozinka</div>
            
          </div>



          
          <div class="framezapotvrdulozinke">
            <div class="email-label">
              <div class="containerlozinkaunos" />



  


              <input
              :type="showPasswordConfirmation ? 'password' : 'text'"
                class="poljezaunoslozinka-treciscreen"
    
                maxlength="50"
                minlength="4"
                required 
                v-model="passwordConfirmation" 
                ref="passwordConfirmation"
              />
              <div class="absolute right-1 top-1/2 transform -translate-y-1/2 flex">
          <div @click="showPasswordConfirmation = !showPasswordConfirmation">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" v-if="showPasswordConfirmation" fill="none" viewBox="0 0 24 24" stroke="#03a9f4">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" v-else fill="none" viewBox="0 0 24 24" stroke="#03a9f4">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
            </svg>
          </div>
        </div>
              <img class="password-icon" alt="" src="/storage/slike/password-icon.svg" />
            </div>
            <div class="lozinka">Potvrda lozinke</div>
          </div>
        </div>
        <div class="frameaddphoto">
          <!-- Hidden file input -->
          <input
            class="input-file"
            type="file"
            ref="file"
            accept="image/*" 
           @change="filesChange"
          />
          <!-- Custom button -->
          <button @click="$refs.file.click()">
            <div class="ikona-reg-treciekran-elipsa" />
            <img
              class="ikona-zagumbaddphoto-icon selected-image-preview"
              alt=""
              :src="avatar ? avatar : '/storage/slike/ikona-zagumbaddphoto.svg'"
            />
          </button>
     
         
        </div>



        
        <div class="framezanatragnaprethodnikorak">
          <button @click="switchToSecondFrame" class="tekstnatragnaprethodnigrad">Natrag na prethodni korak</button>
          <img
            class="arrow-left-1-icon"
            alt=""
            src="/storage/slike/ikona-reg-strelicazanazad.svg"
          />
        </div>
        <div class="framepoib">
          <div class="email-label1">
            <div class="containerzaoib" />
            <input
              class="poljezunosoib"
              type="text"
              maxlength="11"
              minlength="11"
              required
              v-model="oib"
            />
            <img class="ikonareg-oib-icon" alt="" src="/storage/slike/ikonareg-oib.svg" />
          </div>
          <div class="oib">OIB</div>
        </div>
      </div>
 
    </div>
  </transition>



  <transition name="frame-fade" mode="out-in">
    <div class="srednjiframe4" v-if="!showCurrentFrame && !showSecondFrame && !showThirdFrame && showFourthFrame">
  <!-- Content of the fourth frame you want to show on top of the current, second, and third one -->
      <div class="srednjipodframe4">
        <b class="registracijatekst">Registracija</b>
        <button :disabled="!isFourthFormValid"
        :style="{ backgroundColor: isFourthFormValid ? '#03a9f4' : 'rgba(152, 208, 241, 0.6)' }"
        class="screen4gumbregistrirajseframe" 
        @click="register">
  <div class="screen4tekstregistrirajsezagumb">Registriraj se</div>
</button>
        <div class="screen4reg4-frame1do4brojevi">
          <div class="screen4frame-parent">
            <div class="screen4ellipse-parent">
              <div class="screen4frame-child" />
              <div class="screen4frame-item" />
              <div class="screen4div">4</div>
            </div>
            <img class="screen4frame-inner" alt="" src="/storage/slike/line-10.svg" />
          </div>
          <div class="screen4frame-group">
            <button class="screen4ellipse-group" @click="switchToThirdFrame">
              <div class="screen4ellipse-div" />
              <div class="screen4div1">3</div>
            </button>
            <img class="screen4line-icon" alt="" src="/storage/slike/line-10.svg" />
          </div>
          <div class="screen4reg4-frame1do2brojevi">
            <button class="screen4ellipse-container" @click="switchToFirstFrame">
              <div class="screen4ellipse-div" />
              <div class="screen4div2">1</div>
            </button>
            <button class="screen4frame-div" @click="switchToSecondFrame">
              <div class="screen4ellipse-div" />
              <div class="screen4div3">2</div>
            </button>
            <img
              class="screen4reg4-frame1do2brojevi-child"
              alt=""
              src="/storage/slike/line-10.svg"
            />
          </div>
        </div>
        <div class="screen4framespolidodajlinkove">
          <div class="screen4framezaodabirpola">
            <div class="screen4tekstspol">Spol</div>
            <div class="screen4framemusko">
              <input class="screen4radiooff" type="radio"    
              @click="spol = 'Muško'"
              :checked="spol === 'Muško'"/>
              <div class="screen4muko">Muško</div>
            </div>
            <div class="screen4framezensko">
              <input class="screen4radioon" 
              type="radio" 
              @click="spol = 'Žensko'"
        :checked="spol === 'Žensko'" />
              <div class="screen4ensko">Žensko</div>
            </div>
          </div>


          <!--dodaj linkove dio koji se nece koristiti ipak--><!--
          <div class="screen4framedodajlinkovesve">
            <div class="screen4tekstdodajlinkovenasvoj">
              Dodajte linkove na svoje društvene mreže
            </div>
            <div class="screen4frameikonezadrustvnemreze">
              <button class="instagram-group" @click="showInputField('urlinstagram')">
                <div class="screen4background" />
                <img
                  class="reg4-ikonainstagram-icon"
                  alt=""
                  src="/storage/slike/reg4-ikonainstagram.svg"
                />
              </button>
              <button class="facebook-group" @click="showInputField('urlfacebook')">
                <div class="screen4background" />
                <img class="facebook-icon" alt="" src="/storage/slike/facebook-icon.svg" />
              </button>
              <button class="twitter-group" @click="showInputField('urltwitter')">
                <div class="screen4background" />
                <img class="facebook-icon" alt="" src="/storage/slike/twitter-icon.svg" />
              </button>
              <button class="linkedin-group" @click="showInputField('urllinkedin')">
                <div class="screen4background" />
                <img
                  class="reg4-ikonalinkedin-icon"
                  alt=""
                  src="/storage/slike/reg4-ikonalinkedin.svg"
                />
              </button>
            </div>
          </div>
        -->


        </div>
        <div class="screen4framechecktermsofuse">
          <div class="screen4tekst-pristajemnaregistraciju">
            <span
              >Registracijom pristajem na obradu osobnih podataka i pristajem na
            </span>
            <Link :href="route('skijasi.commerce-theme.politikaprivatnosti')" class="uvjete-i-politiku text-primary cursor-pointer">
              uvjete korištenja i
                </Link>
                <Link :href="route('skijasi.commerce-theme.politikaprivatnosti')" class="text-primary cursor-pointer">
                  politiku privatnosti
                </Link>
         
          </div>
          <input
            class="screen4kvadratzacheckmark"
            type="checkbox"
            required
            v-model="checkboxValue"
          />
        </div>

   
        <a class="framezanatrag">
          <button @click="switchToThirdFrame" class="tekstnatragnaprethodnigrad">Natrag na prethodni korak</button>
          <img class="arrow-left-1-icon" alt="" src="/storage/slike/arrowleft-1.svg" />
        </a>

        <!--2.dio dodaj linkove dio koji se nece koristiti ipak--><!--
        <div v-if="showInput">
        <div class="dodajlinkglavni">
          <input
            class="poljezunoslinkova"
            type="text"
            maxlength="50"
            minlength="4"
            v-model="socialUrl"
            placeholder="Dodaj Link"
          />
          <button class="gumbspremilink" @click="saveSocialUrl">
            <div class="tekstgumbaspremilink">Spremi</div>
          </button>
          
        </div>
      </div>
-->




      </div>
    </div>
  </transition>






    <div class="footerbackground" />
    <div class="footertekst">
      Copyright © 2023 Sva prava pridržana od strane HZUTS-a.
    </div>
    <img class="logohzuts-icon" alt="" src="/storage/slike/logohzuts.svg" />
  </div>
</template>


<script>
import { mapState } from "vuex";
import Password from "./../../components/form/password.vue";
import appLayout from '../../layouts/app.vue'
import authLayout from '../../layouts/auth.vue'
import { Link, Head } from "@inertiajs/inertia-vue"
import {
  required,
  minLength,
  maxLength,
  email,
  sameAs,
} from "vuelidate/lib/validators";

export default {
  layout: [appLayout, authLayout],
  components: {
    Password,
    Link,
    Head
  },
  data() {
    return {
      showInput: false,
      socialUrl: '',
      selectedSocial: '',
      urlfacebook: null,
      urlinstagram: null,
      urltwitter: null,
      urllinkedin: null,


      checkboxValue: false,
      selectedImage: null,

      showCurrentFrame: true,
      showSecondFrame: false,
      showThirdFrame: false,
      showFourthFrame: false,

      user_type: null,
      
      datumrodjenja: null,
      name: null,
      username: null,
      email: null,
      avatar: null,


      brojmobitela: null,
      drzava: null,
      grad: null,
      postanskibroj: null,
      adresa: null,
      oib: null,
      spol: null,
     
      password: null,
      passwordConfirmation: null,
      loading: false,
      showPassword: true,
      showPasswordConfirmation: true,
    };
  },
  validations: {
    name: {
      required,
      minLength: minLength(3),
      maxLength: maxLength(35),
    },
    username: {
      required,
      minLength: minLength(3),
      maxLength: maxLength(35),
    },
    datumrodjenja: {
      required,
      minLength: minLength(4),
      maxLength: maxLength(20),
    },
    email: {
      required,
      email,
      minLength: minLength(4),
      maxLength: maxLength(55),
    },

    brojmobitela: {
      required,
      minLength: minLength(5),
      maxLength: maxLength(255),
    },
    grad: {
      required,
      minLength: minLength(3),
      maxLength: maxLength(55),
    },
    drzava: {
      required,
      minLength: minLength(3),
      maxLength: maxLength(55),
    },
    postanskibroj: {
      required,
      minLength: minLength(1),
      maxLength: maxLength(55),
    },
    adresa: {
      required,
      minLength: minLength(3),
      maxLength: maxLength(55),
    },



  
   oib: {
      required,
      minLength: minLength(10),
      maxLength: maxLength(11),
    },
    password: {
      required,
      minLength: minLength(5),
      maxLength: maxLength(50),
    },
    passwordConfirmation: {
      required,
      minLength: minLength(5),
      maxLength: maxLength(50),
      sameAsPassword: sameAs("password"),
    },

    checkboxValue: {
      required
    }

  },
  computed: {
    isFormValid() {
    return this.name && this.username && this.email && this.datumrodjenja;
  },
  isSecondFormValid() {
    return this.brojmobitela && this.drzava && this.grad && this.postanskibroj && this.adresa;
  },

  isThirdFormValid() {
    return this.password && 
           this.passwordConfirmation && 
           this.oib &&
           this.avatar && // Check if avatar is added
           this.password.length >= 4 && // Assuming minimum length is 4
           this.password === this.passwordConfirmation; // Check if passwords match
  },


  isFourthFormValid() {
    return this.checkboxValue && (this.spol === 'Muško' || this.spol === 'Žensko');
  },


    buttonClasses() {
      return [
        "w-full bg-primary text-white py-2 rounded-md text-sm font-medium mt-4 select-none flex items-center justify-center gap-2",
        this.$v.$invalid || this.loading ? "cursor-not-allowed opacity-50" : "",
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
  },
  methods: {
    showInputField(selectedSocial) {
      this.selectedSocial = selectedSocial;
      this.showInput = true;
      this.socialUrl = this[selectedSocial] || ''; // Prepopulate the input if URL is already entered
    },
    saveSocialUrl() {
      if (this.socialUrl) {
        this[this.selectedSocial] = this.socialUrl;
        this.socialUrl = '';
        this.showInput = false;
        this.selectedSocial = '';
      }
    },


    filesChange(e) {
      const file = e.target.files[0]
      const fileSize = Math.round((file.size / 1024))
      if (fileSize > 4048) {
        this.$alert('Maksimalna veličina slike je 4MB!')
        return
      }
      const fileReader = new FileReader()
      fileReader.readAsDataURL(file)
      fileReader.onload = () => {
        this.avatar = fileReader.result
      }
      fileReader.onerror = (error) => {
        this.$alert(error)
      };
    },
 

    openFileInput() {
      // Trigger the click event of the hidden file input
      this.$refs.fileInput.click();
    },
 

    switchToFirstFrame() {
      this.showCurrentFrame = true;
      this.showSecondFrame = false;
      // Reset other show properties if needed
    },
    switchToSecondFrame() {
      this.showSecondFrame = true;
      this.showThirdFrame = false;
      // Reset other show properties if needed
    },
    switchToThirdFrame() {
      this.showThirdFrame = true;
      this.showFourthFrame = false;
      // Reset other show properties if needed
    },

    toggleContent() {
  if (this.showCurrentFrame) {
    // 1
    if (!this.$v.name.$invalid && !this.$v.username.$invalid && !this.$v.email.$invalid) {
      this.showCurrentFrame = false;
      this.showSecondFrame = true;
    }
  } else if (this.showSecondFrame) {
  
  if (!this.$v.brojmobitela.$invalid && !this.$v.drzava.$invalid && !this.$v.grad.$invalid && !this.$v.postanskibroj.$invalid && !this.$v.adresa.$invalid) 
  {
    // 2
      this.showSecondFrame = false;
      this.showThirdFrame = true;
    }

  } else if (this.showThirdFrame) {
    // 3
    if (!this.$v.passwordConfirmation.$invalid && !this.$v.password.$invalid && !this.$v.oib.$invalid) {
      this.showThirdFrame = false;
      this.showFourthFrame = true; 
    }

   
  } else {
    // 1
    this.showCurrentFrame = true;
    this.showSecondFrame = false;
    this.showThirdFrame = false;
    this.showFourthFrame = false; 
  }


}, // za prikaz 1-4 screenova za registraciju


    register() {
      console.log(this.checkboxValue); 
      if (!this.checkboxValue) {
        alert("Morate prihvatiti uvjete korištenja i politiku privatnosti za nastavak.");

        return;
      }
 

      this.loading = true
      this.$api.skijasiAuth
        .register({
          name: this.name,
          username: this.username,
          datumrodjenja: this.datumrodjenja,
          email: this.email,
          brojmobitela: this.brojmobitela,
          password: this.password,
          passwordConfirmation: this.passwordConfirmation,
          avatar: this.avatar,
        //  urlinstagram: this.urlinstagram,
        //  urltwitter: this.urltwitter,
        //  urllinkedin: this.urllinkedin,
        //  urlfacebook: this.urlfacebook,
          drzava: this.drzava,
          grad: this.grad,
          postanskibroj: this.postanskibroj,
          adresa: this.adresa,
          oib: this.oib,
          spol: this.spol,
          user_type: this.user_type

        })
        .then((response) => {
          this.$inertia.visit(this.route('skijasi.commerce-theme.verification', this.email))
        })
        .catch((error) => {
          this.$helper.displayErrors(error)
        })
        .finally(() => {
          this.loading = false
        });
      
     },
  },
};
</script>



<style scoped>

.dodavanjelinkova {
    position: absolute;
    height: 49.44%;
    top: 30.28%;
    bottom: 25.28%;
    left: calc(50% - 7.42px);
    max-height: 100%;
    width: 10.93rem;
    color: #03a9f4;
  }

.selected-image-preview {
  
    border-radius: 50%; /* Makes the image circular */
    object-fit: cover; /* Ensures the image fills the circular container */
  }
.input-file {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
  width: 1px;
  height: 1px;
  overflow: hidden;
}
  .ikonagumbzanazad-icon {
    position: absolute;
    top: 2.31rem;
    right: 2.31rem;
    width: 1.13rem;
    height: 1.13rem;
  }
  .registracijatekst {
    position: absolute;
    top: 0rem;
    left: calc(50% - 104.5px);
    font-size: 2.25rem;
    text-align: left;
  }
  .sljedee {
    position: absolute;
    top: calc(50% - 9px);
    left: calc(50% - 45px);
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
  }
  .gumbsljedece {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: #03a9f4;
    position: absolute;
    top: 30.13rem;
    left: calc(50% - 197.5px);
    border-radius: 20px;
    width: 25rem;
    height: 3.13rem;
  }
  .framebroj4-child {
    position: absolute;
    top: 0rem;
    left: 0rem;
    border-radius: 50%;
    background-color: #98d0f1;
    width: 3.13rem;
    height: 3.13rem;
  }
  .tekstdiv {
    position: absolute;
    top: calc(50% - 14px);
    left: calc(50% - 8px);
    font-weight: 600;
  }
  .framebroj4 {
    position: absolute;
    top: 0rem;
    left: 3.5rem;
    width: 3.13rem;
    height: 3.13rem;
  }
  .framegore4-child {
    position: absolute;
    top: 1.5rem;
    left: 0rem;
    width: 3.13rem;
    height: 0.13rem;
  }
  .framegore4 {
    position: absolute;
    top: 0.63rem;
    left: 18.69rem;
    width: 6.63rem;
    height: 3.13rem;
  }
  .framegore3 {
    position: absolute;
    top: 0.63rem;
    left: 11.69rem;
    width: 6.63rem;
    height: 3.13rem;
  }
  .framebroj1-child {
    position: absolute;
    top: 0rem;
    left: 0rem;
    border-radius: 50%;
    background-color: rgba(3, 169, 244, 0.1);
    width: 4.38rem;
    height: 4.38rem;
  }
  .framebroj1-item {
    position: absolute;
    top: 0.63rem;
    left: 0.63rem;
    border-radius: 50%;
    background-color: rgba(3, 169, 244, 0.2);
    width: 3.13rem;
    height: 3.13rem;
  }
  .tekstdiv2 {
    position: absolute;
    top: calc(50% - 14px);
    left: calc(50% - 6px);
    font-weight: 600;
  }
  .framebroj1 {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 4.38rem;
    height: 4.38rem;
  }
  .tekstdiv3 {
    position: absolute;
    top: calc(50% - 14px);
    left: calc(50% - 7px);
    font-weight: 600;
  }
  .framebroj2 {
    position: absolute;
    top: 0.73rem;
    left: 8.19rem;
    width: 3.13rem;
    height: 3.13rem;
  }
  .framegore12-child {
    position: absolute;
    top: 2.13rem;
    left: 4.69rem;
    width: 3.13rem;
    height: 0.13rem;
  }
  .framegore12 {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 11.31rem;
    height: 4.38rem;
  }
  .frame1234 {
    position: absolute;
    top: 4.63rem;
    left: 3.81rem;
    width: 25.31rem;
    height: 4.38rem;
    font-size: 1.5rem;
    color: #fff;
  }
  .containerzaime {
    position: absolute;
    top: 0rem;
    left: 0rem;
    border-radius: 20px;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    width: 15.63rem;
    height: 3.13rem;
  }
  .poljezaupisime {
    border: 2px solid #03a9f4;
    background-color: transparent;
    position: absolute;
    top: 0rem;
    left: 3.25rem;
    border-radius: 0px 20px 20px 0px;
    box-sizing: border-box;
    width: 12.38rem;
    height: 3.13rem;
    padding-left: 14px; 
  }
  .user-icon {
    position: absolute;
    top: 0.81rem;
    left: 0.94rem;
    width: 1.5rem;
    height: 1.5rem;
    overflow: hidden;
  }
  .imebackground {
    position: absolute;
    top: 1.44rem;
    left: 0rem;
    width: 15.63rem;
    height: 3.13rem;
  }
  .ime {
    position: absolute;
    top: 0rem;
    left: 0rem;
    font-weight: 500;
  }
  .frameime {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 15.63rem;
    height: 4.56rem;
  }
  .frameprezime {
    position: absolute;
    top: 0rem;
    left: 17.31rem;
    width: 15.63rem;
    height: 4.56rem;
  }
  .frameimeiprezime {
    position: absolute;
    top: 10.88rem;
    left: 0rem;
    width: 32.94rem;
    height: 4.56rem;
  }
  .containerzaemail {
    position: absolute;
    top: 0rem;
    left: 0rem;
    border-radius: 20px;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    width: 32.94rem;
    height: 3.13rem;
  }
  .poljezaupisemaila {
    border: 2px solid #03a9f4;
    background-color: transparent;
    position: absolute;
    top: 0rem;
    left: 3.25rem;
    border-radius: 0px 20px 20px 0px;
    box-sizing: border-box;
    width: 29.69rem;
    height: 3.13rem;
    padding-left: 14px; 
  }
  .framezaemail {
    position: absolute;
    top: 1.44rem;
    left: 0rem;
    width: 32.94rem;
    height: 3.13rem;
  }
  .frameemail {
    position: absolute;
    top: 16.44rem;
    left: 0rem;
    width: 32.94rem;
    height: 4.56rem;
  }
  .framedatumrodjenja {
    position: absolute;
    top: 22rem;
    left: 0rem;
    width: 32.94rem;
    height: 4.56rem;
  }
  .srednjipodframe {
    position: absolute;
    top: 1.56rem;
    left: 2.31rem;
    width: 32.94rem;
    height: 33.25rem;
  }
 



  .footerbackground {
    position: fixed;
    height: 7.13%;
    width: 100%;
    top: 92.87%;
    right: 0%;
    bottom: 0%;
    left: 0%;
    background-color: #03a9f4;
  }
  .footertekst {
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
    position: absolute;
    width: 13.89%;
    top: 2.38rem;
    right: 82.64%;
    left: 3.47%;
    max-width: 100%;
    overflow: hidden;
    height: 12.5rem;
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

  .srednjiframe {
    border-radius: 20px;
  background-color: #fff;
  width: 37.56rem;
  max-height: 92vh;  
  overflow-y: auto; 
  position: fixed; 
  height: 39rem;
  top: 47%;
  left: 50%;
  transform: translate(-50%, -50%);
  }
/* Animation class */
.frame-fade-enter-active, .frame-fade-leave-active {
  transition: opacity 0.5s;
}
.frame-fade-enter, .frame-fade-leave-to {
  opacity: 0.3;
}


  .hzuts-registration-desktop {
    position: relative;
    width: 100%;
    height: 100%;
    overflow-y: auto;
    background-image: url("/storage/slike/hzuts-login-desktop@3x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
    text-align: center;
    font-size: 0.8rem;
    color: #000;
    font-family: Inter;

  }











/* srednji frame 2  */


  .sljedecegumbframe {
    position: absolute;
    height: 8.88%;
    top: 83.66%;
    bottom: 7.46%;
    left: calc(50% - 212.5px);
    border-radius: 20px;
    background-color: rgba(152, 208, 241, 0.6);
    width: 25rem;
    font-size: 1rem;
    color: #fff;
  }
  .frameregistracija-1do4glavni-b-child {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 25px);
    border-radius: 50%;
    background-color: #98d0f1;
    width: 3.13rem;
  }
  .screen2div {
    position: absolute;
    top: 22%;
    left: calc(50% - 8px);
    font-weight: 600;
  }
  .frameregistracija-1do4glavni-b {
    position: absolute;
    top: 0rem;
    left: 3.5rem;
    width: 3.13rem;
    height: 3.13rem;
  }
  .frameregistracija-1do4glavni-f-child {
    position: absolute;
    height: 4%;
    top: 48%;
    bottom: 48%;
    left: calc(50% - 53px);
    max-height: 100%;
    width: 3.13rem;
  }
  .frameregistracija-1do4glavni-f {
    position: absolute;
    top: 0.63rem;
    left: 18.63rem;
    width: 6.63rem;
    height: 3.13rem;
  }
  .frameregistracija-1do4glavni-f1 {
    position: absolute;
    top: 0.63rem;
    left: 11.63rem;
    width: 6.63rem;
    height: 3.13rem;
  }
  .frameregistracija-1do4glavni-b-inner {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 25px);
    border-radius: 50%;
    background-color: #03a9f4;
    width: 3.13rem;
  }
  .screen2div2 {
    position: absolute;
    top: 22%;
    left: calc(50% - 6px);
    font-weight: 600;
  }
  .frameregistracija-1do4glavni-b2 {
    position: absolute;
    top: 0.63rem;
    left: 0rem;
    width: 3.13rem;
    height: 3.13rem;
  }
  .ellipse-div {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 35px);
    border-radius: 50%;
    background-color: rgba(3, 169, 244, 0.1);
    width: 4.38rem;
  }
  .frameregistracija-1do4glavni-b-child1 {
    position: absolute;
    height: 71.43%;
    top: 14.29%;
    bottom: 14.29%;
    left: calc(50% - 25px);
    border-radius: 50%;
    background-color: rgba(3, 169, 244, 0.2);
    width: 3.13rem;
  }
  .screen2div3 {
    position: absolute;
    top: 30%;
    left: calc(50% - 7px);
    font-weight: 600;
  }
  .frameregistracija-1do4glavni-b3 {
    position: absolute;
    top: 0rem;
    left: 6.94rem;
    width: 4.38rem;
    height: 4.38rem;
  }
  .frameregistracija-1do4glavni-l-icon {
    position: absolute;
    height: 2.86%;
    top: 48.57%;
    bottom: 48.57%;
    left: calc(50% - 35.5px);
    max-height: 100%;
    width: 3.13rem;
  }
  .podframeregistracija-1do4glavn {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 11.31rem;
    height: 4.38rem;
  }
  .frameregistracija-1do4glavni {
    position: absolute;
    top: 4.63rem;
    left: 3.81rem;
    width: 25.25rem;
    height: 4.38rem;
    font-size: 1.5rem;
    color: #fff;
  }
  .containerbrojmobitela {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 125px);
    border-radius: 20px;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    width: 15.63rem;
  }
  .poljezaunosbrojmobitela {
    border: 2px solid #03a9f4;
    background-color: transparent;
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 73px);
    border-radius: 0px 20px 20px 0px;
    box-sizing: border-box;
    width: 12.38rem;
    padding-left: 14px; 
  }
  .ikonareg-mobitel-icon {
    position: absolute;
    height: 48%;
    top: 26%;
    bottom: 26%;
    left: calc(50% - 110px);
    max-height: 100%;
    width: 1.5rem;
    overflow: hidden;
  }
  .podframebrojmobitela {
    position: absolute;
    height: 68.49%;
    top: 31.51%;
    bottom: 0%;
    left: calc(50% - 125px);
    width: 15.63rem;
  }
  .broj-mobitela {
    position: absolute;
    top: 0%;
    left: calc(50% - 125px);
    font-weight: 500;
  }
  .framebrojmobitela {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 15.63rem;
    height: 4.56rem;
  }
  .framedrzava {
    position: absolute;
    top: 0rem;
    left: 17.31rem;
    width: 15.63rem;
    height: 4.56rem;
  }
  .framebrojmobiteladrzava {
    position: absolute;
    top: 10.88rem;
    left: 0rem;
    width: 32.94rem;
    height: 4.56rem;
  }
  .containeradresa {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 263.5px);
    border-radius: 20px;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    width: 32.94rem;
  }
  .poljezaupisadresa {
    border: 2px solid #03a9f4;
    background-color: transparent;
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 211.5px);
    border-radius: 0px 20px 20px 0px;
    box-sizing: border-box;
    width: 29.69rem;
    padding-left: 14px; 
  }
  .registracija-ikonaadresa-icon {
    position: absolute;
    height: 48%;
    top: 26%;
    bottom: 26%;
    left: calc(50% - 246.5px);
    max-height: 100%;
    width: 1.25rem;
  }
  .adresapodframe {
    position: absolute;
    height: 68.49%;
    top: 31.51%;
    bottom: 0%;
    left: calc(50% - 263.5px);
    width: 32.94rem;
  }
  .adresa {
    position: absolute;
    top: 0%;
    left: calc(50% - 263.5px);
    font-weight: 500;
  }
  .frameadresa {
    position: absolute;
    top: 22rem;
    left: 0rem;
    width: 32.94rem;
    height: 4.56rem;
  }
  .tekstnatragnaprethodnigrad {
    text-decoration: none;
    position: absolute;
    top: 0%;
    left: calc(50% - 78px);
    font-weight: 600;
    color: inherit;
  }
  .ikona-reg-strelicazanazad-icon {
    position: absolute;
    height: 94.12%;
    top: 5.88%;
    bottom: 0%;
    left: calc(50% - 99px);
    max-height: 100%;
    width: 1rem;
    overflow: hidden;
  }
  .framenatrag {
    position: absolute;
    top: 34.13rem;
    left: 10.25rem;
    width: 12.38rem;
    height: 1.06rem;
    font-size: 0.88rem;
    color: #21231e;
  }
  .ikonareg-adresa-icon {
    position: absolute;
    height: 48%;
    top: 26%;
    bottom: 26%;
    left: calc(50% - 108px);
    max-height: 100%;
    width: 1.25rem;
  }
  .framegradpostanskibroj {
    position: absolute;
    top: 16.38rem;
    left: 0rem;
    width: 32.94rem;
    height: 4.56rem;
  }
  .srednjipodframe2 {
    position: absolute;
    top: 1.53rem;
    left: 2.31rem;
    width: 32.94rem;
    height: 35.19rem;
  }
  .srednjiframe2 {
    max-height: 92vh; 
  overflow-y: auto; 
  position: fixed;
  height: 40rem;
  overflow-y: auto;
  top: 45%;
  left: 50%;
  transform: translate(-50%, -50%);
    border-radius: 20px;
    background-color: #fff;
    width: 37.56rem;
  }

  



/*   Treci screen */

  .login-with-email-button {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: rgba(152, 208, 241, 0.6);
    position: absolute;
    height: 7.92%;
    top: 84.63%;
    bottom: 7.45%;
    left: calc(50% - 212.5px);
    border-radius: 20px;
    width: 25rem;
  }
  .reg-3screen-vector17 {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 25px);
    border-radius: 50%;
    background-color: #98d0f1;
    width: 3.13rem;
  }
  .div {
    position: absolute;
    top: 22%;
    left: calc(50% - 8px);
    font-weight: 600;
  }
  .reg-3screen-vector17-parent {
    position: absolute;
    top: 0rem;
    left: 3.5rem;
    width: 3.13rem;
    height: 3.13rem;
  }
  .reg-3screen-vector16-icon {
    position: absolute;
    height: 4%;
    top: 48%;
    bottom: 48%;
    left: calc(50% - 53px);
    max-height: 100%;
    width: 3.13rem;
  }
  .frame-group {
    position: absolute;
    top: 0.56rem;
    left: 18.63rem;
    width: 6.63rem;
    height: 3.13rem;
  }
  .reg-3screen-vector15 {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 35px);
    border-radius: 50%;
    background-color: rgba(3, 169, 244, 0.1);
    width: 4.38rem;
  }
  .reg-3screen-vector14 {
    position: absolute;
    height: 71.43%;
    top: 14.29%;
    bottom: 14.29%;
    left: calc(50% - 25px);
    border-radius: 50%;
    background-color: rgba(3, 169, 244, 0.2);
    width: 3.13rem;
  }
  .div1 {
    position: absolute;
    top: 30%;
    left: calc(50% - 8px);
    font-weight: 600;
  }
  .reg-3screen-vector15-parent {
    position: absolute;
    top: 0rem;
    left: 3.5rem;
    width: 4.38rem;
    height: 4.38rem;
  }
  .reg-3screen-vector13-icon {
    position: absolute;
    height: 2.86%;
    top: 47.14%;
    bottom: 50%;
    left: calc(50% - 63px);
    max-height: 100%;
    width: 3.13rem;
  }
  .frame-container {
    position: absolute;
    top: 0rem;
    left: 10.5rem;
    width: 7.88rem;
    height: 4.38rem;
  }
  .reg-3screen-vector12 {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 25px);
    border-radius: 50%;
    background-color: #03a9f4;
    width: 3.13rem;
  }
  .div2 {
    position: absolute;
    top: 22%;
    left: calc(50% - 6px);
    font-weight: 600;
  }
  .reg-3screen-vector12-parent {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 3.13rem;
    height: 3.13rem;
  }
  .div3 {
    position: absolute;
    top: 22%;
    left: calc(50% - 7px);
    font-weight: 600;
  }
  .reg-3screen-vector11-parent {
    position: absolute;
    top: 0rem;
    left: 6.88rem;
    width: 3.13rem;
    height: 3.13rem;
  }
  .frame-child {
    position: absolute;
    height: 4%;
    top: 48%;
    bottom: 48%;
    left: calc(50% - 25px);
    max-height: 100%;
    width: 3.13rem;
  }
  .frame-div {
    position: absolute;
    top: 0.56rem;
    left: 0rem;
    width: 10rem;
    height: 3.13rem;
  }
  .frame-parent {
    position: absolute;
    top: 4.69rem;
    left: 3.88rem;
    width: 25.25rem;
    height: 4.38rem;
    font-size: 1.5rem;
    color: #fff;
  }
  .containerlozinkaunos {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 125px);
    border-radius: 20px;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    width: 15.63rem;
  }
  .poljezaunoslozinka-treciscreen {
    border: 2px solid #03a9f4;
    background-color: transparent;
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 73px);
    border-radius: 0px 20px 20px 0px;
    box-sizing: border-box;
    width: 12.38rem;
    padding-left: 14px; 
  }
  .password-icon {
    position: absolute;
    height: 48%;
    top: 26%;
    bottom: 26%;
    left: calc(50% - 110px);
    max-height: 100%;
    width: 1.5rem;
    overflow: hidden;
  }
  .email-label {
    position: absolute;
    height: 68.49%;
    top: 31.51%;
    bottom: 0%;
    left: calc(50% - 125px);
    width: 15.63rem;
  }
  .lozinka {
    position: absolute;
    top: 0%;
    left: calc(50% - 125px);
    font-weight: 500;
  }
  .email-label-parent {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 15.63rem;
    height: 4.56rem;
  }
  .framezapotvrdulozinke {
    position: absolute;
    top: 0rem;
    left: 17.31rem;
    width: 15.63rem;
    height: 4.56rem;
  }
  .framezalozinkuipotvrdulozinke {
    position: absolute;
    top: 26rem;
    left: 0rem;
    width: 32.94rem;
    height: 4.56rem;
  }
  .ikona-reg-treciekran-elipsa {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 75px);
    border-radius: 50%;
    background-color: rgba(3, 155, 229, 0.7);
    width: 9.38rem;
  }
  .ikona-zagumbaddphoto-icon {
    position: absolute;
    height: 64%;
    top: 18%;
    bottom: 18%;
    left: calc(50% - 49px);
    max-height: 100%;
    width: 6rem;
    overflow: hidden;
  }
  .frameaddphoto {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: absolute;
    height: 23.77%;
    top: 25.52%;
    bottom: 50.71%;
    left: calc(50% - 74.5px);
    width: 9.38rem;
  }
  .tekstnatragnaprethkorak {
    text-decoration: none;
    position: absolute;
    top: 0%;
    left: calc(50% - 78px);
    font-weight: 600;
    color: inherit;
  }
  .arrow-left-1-icon {
    position: absolute;
    height: 94.12%;
    top: 5.88%;
    bottom: 0%;
    left: calc(50% - 99px);
    max-height: 100%;
    width: 1rem;
    overflow: hidden;
  }
  .framezanatragnaprethodnikorak {
    position: absolute;
    top: 37.58rem;
    left: 10.01rem;
    width: 12.38rem;
    height: 1.06rem;
    font-size: 0.88rem;
    color: #21231e;
  }
  .containerzaoib {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 263.5px);
    border-radius: 20px;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    width: 32.94rem;
  }
  .poljezunosoib {
    border: 2px solid #03a9f4;
    background-color: transparent;
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 211.5px);
    border-radius: 0px 20px 20px 0px;
    box-sizing: border-box;
    width: 29.69rem;
    padding-left: 14px; 
  }
  .ikonareg-oib-icon {
    position: absolute;
    height: 48%;
    top: 26%;
    bottom: 26%;
    left: calc(50% - 248.5px);
    max-height: 100%;
    width: 1.5rem;
    overflow: hidden;
  }
  .email-label1 {
    position: absolute;
    height: 68.49%;
    top: 31.51%;
    bottom: 0%;
    left: calc(50% - 263.5px);
    width: 32.94rem;
  }
  .oib {
    position: absolute;
    top: 0%;
    left: calc(50% - 263.5px);
    font-weight: 500;
  }
  .framepoib {
    position: absolute;
    top: 20.44rem;
    left: 0rem;
    width: 32.94rem;
    height: 4.56rem;
  }
  .srednjipodframe3 {
    position: absolute;
    top: 1.06rem;
    left: 2.31rem;
    width: 32.94rem;
    height: 39.44rem;
  }
  .srednjiframe3 {
    max-height: 92vh; 
  overflow-y: auto; 
  position: fixed;
  height: 41rem;
  overflow-y: auto;
  top: 46%;
  left: 50%;
  transform: translate(-50%, -50%);
    border-radius: 20px;
    background-color: #fff;
    width: 37.56rem;
  }
  .hzuts-regis-screen3 {
    position: relative;
    background-color: #fff;
    width: 100%;
    height: 64rem;
    overflow: hidden;
    text-align: center;
    font-size: 0.75rem;
    color: #000;
    font-family: Inter;
  }










  /* 4.screen */
 
  .screen4tekstregistrirajsezagumb {
    position: absolute;
    top: 32%;
    left: calc(50% - 50px);
    font-size: 1rem;
    letter-spacing: -0.17px;
    font-weight: 600;
    font-family: Inter;
    color: #fff;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 6.19rem;
  }
  .screen4gumbregistrirajseframe {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: #03a9f4;
    position: absolute;
    height: 11.34%;
    top: 77.78%;
    bottom: 10.88%;
    left: calc(50% - 203.5px);
    border-radius: 20px;
    width: 25rem;
  }
  .screen4frame-child {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 35px);
    border-radius: 50%;
    background-color: rgba(3, 169, 244, 0.1);
    width: 4.38rem;
  }
  .screen4frame-item {
    position: absolute;
    height: 71.43%;
    top: 14.29%;
    bottom: 14.29%;
    left: calc(50% - 25px);
    border-radius: 50%;
    background-color: rgba(3, 169, 244, 0.2);
    width: 3.13rem;
  }
  .screen4div {
    position: absolute;
    top: 30%;
    left: calc(50% - 8px);
    font-weight: 600;
  }
  .screen4ellipse-parent {
    position: absolute;
    top: 0rem;
    left: 3.5rem;
    width: 4.38rem;
    height: 4.38rem;
  }
  .screen4frame-inner {
    position: absolute;
    height: 2.86%;
    top: 47.14%;
    bottom: 50%;
    left: calc(50% - 63px);
    max-height: 100%;
    width: 3.13rem;
  }
  .screen4frame-parent {
    position: absolute;
    top: 0rem;
    left: 17.75rem;
    width: 7.88rem;
    height: 4.38rem;
  }
  .screen4ellipse-div {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 25px);
    border-radius: 50%;
    background-color: #03a9f4;
    width: 3.13rem;
  }
  .screen4div1 {
    position: absolute;
    top: 22%;
    left: calc(50% - 8px);
    font-weight: 600;
  }
  .screen4ellipse-group {
    position: absolute;
    top: 0rem;
    left: 3.63rem;
    width: 3.13rem;
    height: 3.13rem;
  }
  .screen4line-icon {
    position: absolute;
    height: 4%;
    top: 48%;
    bottom: 48%;
    left: calc(50% - 54px);
    max-height: 100%;
    width: 3.13rem;
  }
  .screen4frame-group {
    position: absolute;
    top: 0.56rem;
    left: 10.5rem;
    width: 6.75rem;
    height: 3.13rem;
  }
  .screen4div2 {
    position: absolute;
    top: 22%;
    left: calc(50% - 6px);
    font-weight: 600;
  }
  .screen4ellipse-container {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 3.13rem;
    height: 3.13rem;
  }
  .screen4div3 {
    position: absolute;
    top: 22%;
    left: calc(50% - 7px);
    font-weight: 600;
  }
  .screen4frame-div {
    position: absolute;
    top: 0rem;
    left: 6.88rem;
    width: 3.13rem;
    height: 3.13rem;
  }
  .screen4reg4-frame1do2brojevi-child {
    position: absolute;
    height: 4%;
    top: 48%;
    bottom: 48%;
    left: calc(50% - 25px);
    max-height: 100%;
    width: 3.13rem;
  }
  .screen4reg4-frame1do2brojevi {
    position: absolute;
    top: 0.56rem;
    left: 0rem;
    width: 10rem;
    height: 3.13rem;
  }
  .screen4reg4-frame1do4brojevi {
    position: absolute;
    top: 4.69rem;
    left: 0.25rem;
    width: 25.63rem;
    height: 4.38rem;
    font-size: 1.5rem;
    color: #fff;
  }
  .screen4tekstspol {
    position: absolute;
    top: 0%;
    left: calc(50% - 35.5px);
    font-weight: 600;
    display: inline-block;
    width: 2rem;
  }
  .screen4radiooff {
    cursor: pointer;
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 34px);
    border-radius: 50%;
    border: 1px solid #03a9f4;
    box-sizing: border-box;
    width: 0.94rem;
  }
  .screen4muko {
    position: absolute;
    top: 0%;
    left: calc(50% - 5px);
    display: inline-block;
    width: 2.44rem;
  }
  .screen4framemusko {
    position: absolute;
    top: 1.69rem;
    left: 0rem;
    width: 4.25rem;
    height: 0.94rem;
  }
  .screen4radioon {
    cursor: pointer;
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 35.5px);
    width: 0.94rem;
  }
  .screen4ensko {
    position: absolute;
    top: 0%;
    left: calc(50% - 6.5px);
    display: inline-block;
    width: 2.63rem;
  }
  .screen4framezensko {
    position: absolute;
    top: 3.25rem;
    left: 0rem;
    width: 4.44rem;
    height: 0.94rem;
  }
  .screen4framezaodabirpola {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 4.44rem;
    height: 4.19rem;
  }
  .screen4tekstdodajlinkovenasvoj {
    position: absolute;
    top: 0%;
    left: calc(50% - 117.5px);
    letter-spacing: -0.17px;
    font-weight: 600;
  }
  .screen4background {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 15px);
    border-radius: 5px;
    background-color: rgba(29, 161, 242, 0.95);
    width: 1.88rem;
  }
  .reg4-ikonainstagram-icon {
    position: absolute;
    height: 49.44%;
    top: 25.28%;
    bottom: 25.28%;
    left: calc(50% - 7.42px);
    max-height: 100%;
    width: 0.93rem;
  }
  .instagram-group {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 90px);
    width: 1.88rem;
  }
  .facebook-icon {
    position: absolute;
    height: 53.33%;
    top: 23.33%;
    bottom: 23.33%;
    left: calc(50% - 8px);
    max-height: 100%;
    width: 1rem;
    overflow: hidden;
  }
  .facebook-group {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 40px);
    width: 1.88rem;
  }
  .twitter-group {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% + 10px);
    width: 1.88rem;
  }
  .reg4-ikonalinkedin-icon {
    position: absolute;
    height: 45.56%;
    top: 26.11%;
    bottom: 28.33%;
    left: calc(50% - 7.17px);
    max-height: 100%;
    width: 0.9rem;
  }
  .linkedin-group {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% + 60px);
    width: 1.88rem;
  }
  .screen4frameikonezadrustvnemreze {
    position: absolute;
    height: 46.15%;
    top: 53.85%;
    bottom: 0%;
    left: calc(50% - 89.5px);
    width: 11.25rem;
  }
  .screen4framedodajlinkovesve {
    position: absolute;
    top: 0.06rem;
    left: 10.94rem;
    width: 14.69rem;
    height: 4.06rem;
    text-align: center;
  }
  .screen4framespolidodajlinkove {
    position: absolute;
    top: 10.75rem;
    left: 0.25rem;
    width: 25.63rem;
    height: 4.19rem;
    text-align: left;
    font-size: 0.75rem;
  }
  .screen4uvjete-i-politiku {
    color: #03a9f4;
  }
  .screen4tekst-pristajemnaregistraciju {
    position: absolute;
    top: 8.67%;
    left: calc(50% - 197.5px);
    letter-spacing: -0.17px;
    font-weight: 300;
    text-align: left;
    font-size: 11px;
  }
  .screen4kvadratzacheckmark {
    cursor: pointer;
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 221.5px);
    border-radius: 2px;
    background-color: #03a9f4;
    border: 1px solid #03a9f4;
    box-sizing: border-box;
    width: 0.94rem;
  }
  .screen4framechecktermsofuse {
    position: absolute;
    top: 17.31rem;
    left: 0rem;
    width: 28.69rem;
    height: 0.94rem;
    font-size: 0.65rem;
  }
  .natrag-na-prethodni {
    position: absolute;
    top: 0%;
    left: calc(50% - 78px);
    font-weight: 600;
  }
  .screen4arrow-left-1-icon {
    position: absolute;
    height: 94.12%;
    top: 5.88%;
    bottom: 0%;
    left: calc(50% - 99px);
    max-height: 100%;
    width: 1rem;
    overflow: hidden;
  }


  .poljezunoslinkova {
    border: 2px solid #03a9f4;
    background-color: transparent;
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 103.5px);
    border-radius: 14px;
    box-sizing: border-box;
    width: 12.94rem;
    padding-left: 10px; 
    font-size: 0.63rem;
  }
  .tekstgumbaspremilink {
    position: absolute;
    height: 38%;
    top: 32%;
    left: calc(50% - 50px);
    font-size: 0.63rem;
    letter-spacing: -0.17px;
    font-weight: 300;
    font-family: Inter;
    color: #fff;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 6.19rem;
  }
  .gumbspremilink {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: #03a9f4;
    position: absolute;
    height: 76.92%;
    top: 11.54%;
    bottom: 11.54%;
    left: calc(50% + 60.5px);
    border-radius: 20px;
    width: 2.5rem;
  }
  .dodajlinkglavni {
    position: absolute;
    height: 5.9%;
    top: 56.01%;
    bottom: 38.1%;
    left: calc(50% - 26.5px);
    width: 12.94rem;
  }

  .framezanatrag {
    text-decoration: none;
    position: absolute;
    top: 26.5rem;
    left: 7.24rem;
    width: 12.38rem;
    height: 1.06rem;
    font-size: 0.88rem;
    color: #21231e;
  }
  .srednjipodframe4 {
    position: absolute;
    top: 1.13rem;
    left: 4.94rem;
    width: 27.69rem;
    height: 27.56rem;
  }
  .srednjiframe4 {
    max-height: 92vh; 
  overflow-y: auto; 
  position: fixed;
  height: 30rem;
  overflow-y: auto;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
    border-radius: 20px;
    background-color: #fff;
    width: 37.56rem;
  }




  @media screen and (max-width: 960px) {
    .hzuts-registration-desktop {
      max-width: 960px;
    }
    .logohzuts-icon {
        top: 0.18rem;
        left: 44%;
        height: 4rem;
  }
  .backgumb {
    top: 0rem;
    z-index: 100;
  }

  }
  @media screen and (max-width: 420px) {
    .hzuts-registration-desktop {
      max-width: 420px;
    }
    .logohzuts-icon {
      top: 0.18rem;
      left: 44%;
      height: 4rem;
  }
  .backgumb {
    top: 0rem;
    z-index: 100;
  }
  }


</style>


