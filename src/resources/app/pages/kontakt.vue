<template>
  <div>
    <Head :title="$page.props.name" />

    <div class="hzuts-kontakt-page">
    <div class="kartakontaktframe">
      <img class="kartakontakt-icon" alt="" src="/storage/slike/kartakontakt@2x.png" />
      <img class="placeholder-1-icon" alt="" src="/storage/slike/mapplaceholder-1.svg" />
    </div>
    <div class="kontaktformaframe">

    <div class="kontaktiraj-nas-parent">
    <div class="kontaktiraj-nas">Kontaktiraj nas</div>
    <div class="kontaktformapolja">
      <div class="va-e-mail">Vaš e-mail</div>
      <div class="image-wrapper">
          <img class="crtekontaktforma3-icon" alt="" src="/storage/slike/crtekontaktforma3.svg">
          <input v-model="email" type="email" class="crtekontaktforma3-icon">
      </div>
      <div class="naslov">Naslov</div>
      <div class="image-wrapper">
          <img class="crtekontaktforma2-icon" alt="" src="/storage/slike/crtekontaktforma3.svg"/>
          <input v-model="subject" type="text" class="crtekontaktforma2-icon">
      </div>
      <div class="poruka">Poruka</div>
      <div class="image-wrapper">
          <img class="crtekontaktforma1-icon" alt="" src="/storage/slike/crtekontaktforma1.svg"/>
          <textarea v-model="message" class="crtekontaktforma1-icon"></textarea>
      </div>
      <button class="poalji-wrapper" @click="sendContactEmail()">
        <div class="poalji">POŠALJI</div>
      </button>
    </div>
</div>


      <div class="kontaktpodacionama">
        <div class="uredovno-vrijeme-za-lanove-u-parent">
          <div class="uredovno-vrijeme-za-container">
            <span>Uredovno vrijeme za članove: </span>
            <span class="utorkom">utorkom</span>
            <span> i </span>
            <span class="utorkom">četvrtkom</span>
            <span> od 11 - 15h</span>
          </div>
          <img class="group-icon" alt="" src="/storage/slike/calendargroup.svg" />
        </div>
        <div class="maksimirska-51a-10000-zagreb-parent">
          <div class="maksimirska-51a-10000">
            Maksimirska 51A, 10000 Zagreb, Hrvatska
          </div>
          <img class="map-pin-1-icon" alt="" src="/storage/slike/mappin-1.svg" />
        </div>
        <div class="parent">
          <div class="div">+385 1 23 999 50</div>
          <img class="map-pin-1-icon" alt="" src="/storage/slike/phone-1-1.svg" />
        </div>
        <div class="printer-2-parent">
          <img class="map-pin-1-icon" alt="" src="/storage/slike/printer-2.svg" />
          <div class="div1">+385 1 23 999 55</div>
        </div>
        <div class="mail-icon-parent">
          <img class="map-pin-1-icon" alt="" src="/storage/slike/mail-icon.svg" />
          <a class="infohzutshr">info@hzuts.hr</a>
        </div>
        <div class="hr7423600001101359833-parent">
          <div class="uredovno-vrijeme-za-container">HR7423600001101359833</div>
          <img class="map-pin-1-icon" alt="" src="/storage/slike/creditcard-1.svg" />
        </div>
        <div class="clip-path-group-parent">
          <img class="clip-path-group" alt="" src="/storage/slike/paintclip-path-group.svg" />
          <div class="mb-1603388">MB: 1603388</div>
        </div>
        <div class="vector-parent">
          <img class="vector-icon" alt="" src="/storage/slike/iconacontactvector.svg" />
          <div class="oib-31990276348">OIB: 31990276348</div>
        </div>
      </div>
    </div>
  </div>

      

       

   
    </div>

<!-- BLOCK ZA MOBITELE OBRISATI?-->


</template>

<script>

import CarouselSingle from '../components/carousel-single/carousel.vue'
import CarouselItemSingle from '../components/carousel-single/carousel-item.vue'

import MasonryWall from "@yeger/vue2-masonry-wall";

import galerijaLayout from '../layouts/galerija.vue'
import appLayout from '../layouts/app.vue'
import { mapState } from 'vuex'
import { Link, Head } from '@inertiajs/inertia-vue'
import _ from "lodash";

export default {
  name: "Kontakt",
  layout: [appLayout, galerijaLayout],
  components: {
    Link,
    Head,
    MasonryWall,
    CarouselSingle,
    CarouselItemSingle
  },
  data() {
    return {

      res: {
      active: false,
      icon: "",
      status: "",
      message: "",
    },

    errors: {},
    


    }
  },
  computed: {
    ...mapState({
      appName(state) {
        return this.$_.find(state.themeConfigurations, { key: "appName" }).value;
      },
    }),
  },
  mounted() {


  },


  methods: {

    sendContactEmail() {

      this.$api.skijasiAuth
        .sendContactForm({
          email: this.email,
    subject: this.subject,
    message: this.message,
        })
        .then((response) => {
          this.$helper.alert("Uspješno je poslana poruka!")
  
       
       
        })
        .catch((error) => {
          this.$helper.alert("Nije uspjelo slanje! Provjerit da li ste dobro unijeli email.")
        });
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
  .kartakontakt-icon {
    flex: 1;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    height: 60.13rem;
    object-fit: cover;
    z-index: 0;
  }
  .placeholder-1-icon {
    position: absolute;
    margin: 0 !important;
    top: 24.63rem;
    left: 22.44rem;
    width: 4.06rem;
    height: 4rem;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
  }
  .kartakontaktframe {
    width: 44.03rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    position: relative;
    gap: 0.63rem;
  }
  .kontaktiraj-nas {
    position: absolute;
    top: 0rem;
    left: 0rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 39.78rem;
    height: 3.63rem;
  }
  .va-e-mail {
    position: absolute;
    top: 0rem;
    left: 0rem;
    font-weight: 600;
  }
  .crtekontaktforma3-icon {
    position: absolute;
    top: 2.13rem;
    left: 0rem;
    width: 37.5rem;
    height: 1.88rem;
    border-left: 1.5px solid #03a9f4; 
    border-bottom: 1.5px solid #03a9f4;  
  }
  .naslov {
    position: absolute;
    top: 5.25rem;
    left: 0rem;
    font-weight: 600;
  }
  .crtekontaktforma2-icon {
    position: absolute;
    top: 7.38rem;
    left: 0rem;
    width: 37.5rem;
    height: 1.88rem;
    border-left: 1.5px solid #03a9f4; 
    border-bottom: 1.5px solid #03a9f4;  
  }
  .poruka {
    position: absolute;
    top: 10.5rem;
    left: 0rem;
    font-weight: 600;
  }
  .crtekontaktforma1-icon {
    position: absolute;
    top: 12.63rem;
    left: 0rem;
    width: 37.5rem;
    height: 3.75rem;
    border-left: 1.5px solid #03a9f4; 
    border-bottom: 1.5px solid #03a9f4;  
}

  .poalji {
    position: absolute;
    top: calc(50% - 7px);
    left: calc(50% - 41px);
    font-size: 0.75rem;
    letter-spacing: 5px;
    font-weight: 600;
    font-family: Inter;
    color: #000;
    text-align: center;
  }
  .poalji-wrapper {
    cursor: pointer;
    border: 1px solid #03a9f4;
    padding: 0;
    background-color: transparent;
    position: absolute;
    top: 18.56rem;
    left: 0rem;
    border-radius: 30px;
    box-sizing: border-box;
    width: 9.38rem;
    height: 2.5rem;
  }
  .kontaktformapolja {
    position: absolute;
    top: 7.19rem;
    left: 0rem;
    width: 37.5rem;
    height: 21.06rem;
    font-size: 1rem;
  }
  .kontaktiraj-nas-parent {
    position: relative;
    width: 39.78rem;
    height: 28.25rem;
  }
  .utorkom {
    color: #03a9f4;
  }
  .uredovno-vrijeme-za-container {
    position: absolute;
    top: 0.19rem;
    left: 2.38rem;
  }
  .group-icon {
    position: absolute;
    height: 100%;
    width: 5.38%;
    top: 0%;
    right: 94.62%;
    bottom: 0%;
    left: 0%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
  }
  .uredovno-vrijeme-za-lanove-u-parent {
    position: absolute;
    top: 0rem;
    left: 0.06rem;
    width: 27.88rem;
    height: 1.5rem;
  }
  .maksimirska-51a-10000 {
    position: absolute;
    top: calc(50% - 10px);
    left: calc(50% - 120px);
  }
  .map-pin-1-icon {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 1.5rem;
    height: 1.5rem;
    overflow: hidden;
  }
  .maksimirska-51a-10000-zagreb-parent {
    position: absolute;
    top: 2.75rem;
    left: 0rem;
    width: 19.75rem;
    height: 1.5rem;
    text-align: left;
  }
  .div {
    position: absolute;
    top: 0.13rem;
    left: 2.31rem;
    letter-spacing: -0.17px;
  }
  .parent {
    position: absolute;
    top: 5.5rem;
    left: 0.13rem;
    width: 9.56rem;
    height: 1.5rem;
  }
  .div1 {
    position: absolute;
    top: 0.13rem;
    left: 2.44rem;
    letter-spacing: -0.17px;
  }
  .printer-2-parent {
    position: absolute;
    top: 8.25rem;
    left: 0rem;
    width: 9.69rem;
    height: 1.5rem;
  }
  .infohzutshr {
    text-decoration: none;
    position: absolute;
    top: 0.13rem;
    left: 2.38rem;
    letter-spacing: -0.17px;
    color: inherit;
  }
  .mail-icon-parent {
    position: absolute;
    top: 11rem;
    left: 0.06rem;
    width: 8rem;
    height: 1.5rem;
    color: #03a9f4;
  }
  .hr7423600001101359833-parent {
    position: absolute;
    top: 13.75rem;
    left: 0.06rem;
    width: 13.5rem;
    height: 1.5rem;
  }
  .clip-path-group {
    position: absolute;
    height: 100%;
    width: 18.9%;
    top: 0%;
    right: 81.1%;
    bottom: 0%;
    left: 0%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
  }
  .mb-1603388 {
    position: absolute;
    top: 12.5%;
    left: 29.92%;
  }
  .clip-path-group-parent {
    position: absolute;
    top: 16.5rem;
    left: 0.06rem;
    width: 7.94rem;
    height: 1.5rem;
  }
  .vector-icon {
    position: absolute;
    height: 100%;
    width: 14.72%;
    top: 0%;
    right: 85.28%;
    bottom: 0%;
    left: 0%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
  }
  .oib-31990276348 {
    position: absolute;
    top: 5%;
    left: 23.31%;
  }
  .vector-parent {
    position: absolute;
    top: 19.25rem;
    left: 0.06rem;
    width: 10.19rem;
    height: 1.25rem;
  }
  .kontaktpodacionama {
    position: relative;
    width: 27.94rem;
    height: 20.5rem;
    font-size: 0.88rem;
  }
  .kontaktformaframe {
    background-color: #fff;
    width: 44.03rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    padding: 2.44rem 2.13rem;
    box-sizing: border-box;
    align-items: center;
    justify-content: flex-start;
    gap: 3.56rem;
  }
  .hzuts-kontakt-page {
    position: relative;
    background-color: #f8f7f5;
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    gap: 1.94rem;
    text-align: center;
    font-size: 3rem;
    color: #000;
    font-family: Inter;
  }

  .image-wrapper {
    position: relative;
}

.input-email, .input-subject, .input-message {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    /* Add any additional styling you need for your inputs here */
}


  @media screen and (max-width: 960px) {
    .kartakontakt-icon {
      flex: unset;
      align-self: stretch;
    }

    .kartakontaktframe {
      flex-direction: column;
    }

    .kontaktformaframe {
      width: auto;
      align-self: unset;
      height: auto;
      flex-direction: column;
    }

    .hzuts-kontakt-page {
      flex-direction: column;
    }
  }
  @media screen and (max-width: 420px) {
    .kartakontaktframe {
      align-items: flex-start;
      justify-content: flex-start;
    }

    .kontaktformaframe {
      flex-direction: column;
      align-items: flex-start;
      justify-content: flex-start;
    }
  }
</style>

