<template>
  <div>
    <Head :title="$page.props.name" />

    <div class="hzuts-kontakt-page">

      <a class="kartakontaktframe" href="https://www.google.com/maps/dir/?api=1&destination=Maksimirska+51A,10000+Zagreb,Hrvatska" target="_blank">
        <iframe class="kartakontakt-icon"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2780.715944467365!2d16.000421276077827!3d45.816946971081975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d7b1bda6afb3%3A0x8e64d5b9cc2ee7ca!2sMaksimirska%20cesta%2051A%2C%2010000%2C%20Zagreb!5e0!3m2!1sen!2shr!4v1696560637473!5m2!1sen!2shr"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     <!-- <div class="placeholder-1">
        <img class="vector-icon" alt="" src="/storage/slike/kontakt/vector.svg" />
        <img class="vector-icon1" alt="" src="/storage/slike/kontakt/vector1.svg" />
      </div>-->
    </a>
    <div class="kontaktformaframe">
      <div class="kontaktiraj-nas-parent">
        <div class="kontaktiraj-nas">Kontaktiraj nas</div>
        <div class="kontaktformapolja">
          <div class="va-e-mail">Vaš e-mail</div>
          <div class="image-wrapper">
  <img class="crtekontaktforma3-icon" alt="" src="/storage/slike/kontakt/crtekontaktforma3.svg" />
  <input v-model="email" type="email" class="input-email">
</div>

          <div class="naslov">Naslov</div>
          <div class="image-wrapper">
  <img class="crtekontaktforma2-icon" alt="" src="/storage/slike/kontakt/crtekontaktforma3.svg" />
  <input v-model="subject" type="text" class="input-subject">
</div>
          <div class="poruka">Poruka</div>
          <div class="image-wrapper">
  <img class="crtekontaktforma1-icon" alt="" src="/storage/slike/kontakt/crtekontaktforma1.svg" />
  <textarea v-model="message" class="textarea-message"></textarea>
</div>
          <button class="poalji-wrapper" @click="sendContactEmail()">
        <div class="poalji">POŠALJI</div>
      </button>
        </div>
      </div>
      <div class="kontaktpodacionama">
        <div class="uredovno-vrijeme-za-lanove-u-parent">
          <div class="uredovno-vrijeme-za-container">
            <span class="uredovno-vrijeme-za-container1">
              <span>Uredovno vrijeme za članove: </span>
              <span class="utorkom">utorkom</span>
              <span> i </span>
              <span class="utorkom">četvrtkom</span>
              <span> od 11 - 15h</span>
            </span>
          </div>
          <img class="group-icon" alt="" src="/storage/slike/kontakt/group2.svg" />
        </div>
        <div class="maksimirska-51a-10000-zagreb-parent">
          <div class="maksimirska-51a-10000">
            Maksimirska 51A, 10000 Zagreb, Hrvatska
          </div>
          <img class="map-pin-1-icon" alt="" src="/storage/slike/kontakt/mappin-12.svg" />
        </div>
        <div class="parent">
          <div class="div">+385 1 23 999 50</div>
          <img class="map-pin-1-icon" alt="" src="/storage/slike/kontakt/phone-1-1.svg" />
        </div>
  
        <div class="mail-icon-parent">
          <img class="map-pin-1-icon" alt="" src="/storage/slike/kontakt/mail-icon.svg" />
      
          <a href="mailto:info@hzuts.hr" class="infohzutshr">&#105;&#110;&#102;&#111;&#64;&#104;&#122;&#117;&#116;&#115;&#46;&#104;&#114;</a>

        </div>
        <div class="hr7423600001101359833-parent">
          <div class="hr7423600001101359833">HR7423600001101359833</div>
          <img class="map-pin-1-icon" alt="" src="/storage/slike/kontakt/creditcard-1.svg" />
        </div>
        <div class="clip-path-group-parent">
          <img class="clip-path-group" alt="" src="/storage/slike/kontakt/clip-path-group1.svg" />
          <div class="mb-1603388">MB: 1603388</div>
        </div>
        <div class="vector-parent">
          <img class="vector-icon2" alt="" src="/storage/slike/kontakt/vector3.svg" />
          <div class="oib-31990276348">OIB: 31990276348</div>
        </div>
      </div>
    </div>
  </div>
</div>
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

      email: '',
    subject: '',
    message: '',
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

.input-email,
.input-subject,
.textarea-message {
  z-index: 2;
  left: 2rem;

}


.input-email {
  width: 37.5rem;
  border: none;
  background: transparent;
  outline: none;
  position: absolute;
  top: 2.13rem;

}

.input-subject {
  width: 37.5rem;
  border: none;
  background: transparent;
  outline: none;
  position: absolute;
  top: 7.38rem;
}

.textarea-message {
  width: 37.5rem;
  border: none;
  background: transparent;
  outline: none;
  position: absolute;
  top: 12.63rem;
  resize: none;
  height: 3.75rem;
}



  .kartakontakt-icon {
    flex: 1;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    height: 60.13rem;
    object-fit: cover;
    z-index: 0;
  }
  .vector-icon {
    position: relative;
    width: 2.86rem;
    height: 4rem;
    z-index: 0;
  }
  .vector-icon1 {
    position: absolute;
    margin: 0 !important;
    height: 23.44%;
    width: 32.41%;
    top: 23.44%;
    right: 33.79%;
    bottom: 53.12%;
    left: 33.79%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    z-index: 1;
  }
  .placeholder-1 {
    margin: 0 !important;
    position: absolute;
    top: calc(50% - 147px);
    left: calc(50% - 64.25px);
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    padding: 0rem 0.06rem;
    gap: 0.63rem;
    z-index: 1;
  }
  .kartakontaktframe {
    align-self: stretch;
    flex: 1;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    position: relative;
    gap: 0.63rem;
  }
  .kontaktiraj-nas {
    position: absolute;
    width: 100%;
    top: 0rem;
    left: 0%;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
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
    left: -0.3rem;
    width: 37.5rem;
    height: 1.88rem;
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
    left: -0.3rem;
    width: 37.5rem;
    height: 1.88rem;
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
  }
  .poalji {
    position: absolute;
    top: calc(50% - 7px);
    left: calc(50% - 41px);
    font-size: 0.75rem;
    letter-spacing: 5px;
    font-weight: 600;
    font-family: Inter;

    text-align: center;
  }
  .poalji-wrapper:hover {
  background-color: #03a9f4;
  color: #fff;
}
  .poalji-wrapper {
    color: #000;
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
    width: 94.27%;
    top: 7.19rem;
    right: 5.73%;
    left: 0%;
    height: 21.06rem;
    overflow: hidden;
    font-size: 1rem;
  }
  .kontaktiraj-nas-parent {
    align-self: stretch;
    position: relative;
    height: 28.25rem;
  }
  .utorkom {
    color: #03a9f4;
  }
  .uredovno-vrijeme-za-container1 {
    line-break: anywhere;
    width: 100%;
  }
  .uredovno-vrijeme-za-container {
    position: absolute;
    width: 93.95%;
    top: 0.22rem;
    left: 8.63%;
    display: -webkit-inline-box;
    align-items: center;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
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
    text-align: left;
  }
  .maksimirska-51a-10000 {
    position: absolute;
    top: calc(50% - 10px);
    left: calc(50% - 120px);
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
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
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
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
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }

  .infohzutshr {
    text-decoration: none;
    position: absolute;
    top: 0.13rem;
    left: 2.38rem;
    letter-spacing: -0.17px;
    color: inherit;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .mail-icon-parent {
    position: absolute;

    top: 8.25rem;
    left: 0.06rem;
    width: 8rem;
    height: 1.5rem;
    color: #03a9f4;
  }
  .hr7423600001101359833 {
    position: absolute;
    top: 0.19rem;
    left: 2.38rem;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .hr7423600001101359833-parent {
    position: absolute;
    top: 11rem;

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
    top: 13.75rem;
 
    left: 0.06rem;
    width: 7.94rem;
    height: 1.5rem;
  }
  .vector-icon2 {
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
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .vector-parent {
    position: absolute;
    top: 16.5rem;

    left: 0.06rem;
    width: 10.19rem;
    height: 1.25rem;
  }
  .kontaktpodacionama {
    align-self: stretch;
    position: relative;
    height: 20.5rem;
    font-size: 0.88rem;
  }
  .kontaktformaframe {
    align-self: stretch;
    flex: 1;
    background-color: #fff;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    padding: 2.44rem 2.13rem;
    gap: 3.56rem;
  }
  .hzuts-kontakt-page {
    position: relative;
    background-color: #f8f7f5;
    width: 100%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 0.94rem;
    text-align: center;
    font-size: 3rem;
    color: #000;
    font-family: Inter;

    padding: 2%;
    padding-top: 5%;
  }

  @media screen and (max-width: 960px) {
    .kartakontakt-icon {
      flex: unset;
      align-self: stretch;
    }

    .kartakontaktframe {
      flex-direction: column;
      flex: unset;
      align-self: stretch;
    }

    .kontaktformaframe {
      width: auto;
      align-self: stretch;
      height: auto;
      flex-direction: column;
      flex: unset;
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

    .uredovno-vrijeme-za-container {
      word-wrap: break-word;
   height: auto;  /* Adjust this according to your needs */
}

  }



  @media screen and (max-width: 500px) {
.uredovno-vrijeme-za-container {



    position: absolute;
    width: 93.95%;
    top: 0.22rem;
    left: 12.63%;

    align-items: center;

    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    display: flex;

  }
  .uredovno-vrijeme-za-lanove-u-parent {

    width: 17.88rem;
max-height: 2rem;
  }
  .group-icon {

    height: 1.34rem;
    width: 1.34rem;
    top: 1%;
    right: 94.62%;
    bottom: 0%;
    left: 0.8%;

  }



.kartakontaktframe {
height: 30rem;
  }


  }



</style>
