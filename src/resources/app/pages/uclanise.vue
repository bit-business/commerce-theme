    <template>
  <div class="uclanisescreen">
    <Head :title="$page.props.name" />
    <div class="ulanite-se-u-hzuts-wrapper">
      <div class="ulanite-se-u">UČLANITE SE U HZUTS</div>
    </div>
    <div class="licence-i-hologrami-podiu-se-parent">
      <div class="licence-i-hologrami-container">
        <span class="licence-i-hologrami-container1">
          <b
            >Licence i hologrami podižu se isključivo u vrijeme dežurstva
            HZUTS-a ili Vašeg područnog zbora</b
          >
          <span class="koje-moete-saznati">
            koje možete saznati na web stranicama područnih zborova ili
            kontaktiranjem tajnika područnog zbora. Vrijeme izrade iskaznice je
            minimalno tjedan dana od zaprimanja svih materijala. Nakon izrade
            iskaznicu i amblem možete pruzeti u uredovno vrijeme u HZUTS-u ili
            iste možemo poslati na vašu kućnu adresu.</span
          >
        </span>
      </div>
      <b class="za-ulanjenje-u"
        >Za učlanjenje u HZUTS je potrebno ispuniti sljedeće uvjete:</b
      >
      <div class="frame-parent">
        <div class="frame-group">
          <div class="ellipse-parent">
            <div class="frame-child" />
            <div class="div">1</div>
          </div>
          <div class="posjedovat-minimalno-status-container">
            <span class="licence-i-hologrami-container1">
              <span>posjedovat minimalno </span>
              <span class="status-uitelja-ili"
                >status učitelja ili voditelja skijanja</span
              >
            </span>
          </div>
        </div>
        <div class="frame-container">
          <div class="ellipse-group">
            <div class="frame-child" />
            <div class="div1">2</div>
          </div>
          <div class="prethodno-se-ulaniti-container">
            <span class="licence-i-hologrami-container1">
              <span class="prethodno-se-ulaniti"
                >prethodno se učlaniti u jedan od
              </span>
              <span class="status-uitelja-ili"
                >Područnih zborova na način da kontaktirate tajnika određenog
                područnog zbora</span
              >
              <span class="prethodno-se-ulaniti"
                >. Možete se učlaniti u Područni zbor prema svome izboru.</span
              >
            </span>
          </div>
        </div>
        <div class="frame-div">
          <div class="ellipse-container">
            <div class="frame-child" />
            <div class="div2">3</div>
          </div>
          <div class="ispuniti-dolje-navedeni-container">
            <span class="ispuniti-dolje-navedeni-container1">
              <span>ispuniti dolje navedeni </span>
              <b>obrazac za prijavu</b>
            </span>
          </div>
        </div>
        <div class="frame-parent1">
          <div class="ellipse-container">
            <div class="frame-child" />
            <div class="div2">4</div>
          </div>
          <div class="uz-prijavu-poslat-container">
            <span class="licence-i-hologrami-container1">
              <span>uz prijavu </span>
              <b>poslat fotografiju</b>
              <span> u digitalnom obliku</span>
            </span>
          </div>
          <button class="alert-circle-1">
            <img class="vector-icon" alt="" src="/storage/slike/uclanisevector.svg" />
            <img class="vector-icon1" alt="" src="/storage/slike/uclanisevector1.svg" />
            <img class="vector-icon2" alt="" src="/storage/slike/uclanisevector2.svg" />
          </button>
        </div>
        <div class="frame-parent2">
          <div class="ellipse-parent2">
            <div class="frame-child" />
            <div class="div1">5</div>
          </div>
          <div class="uz-prijavu-poslat-container">
            <span class="licence-i-hologrami-container1">
              <span class="status-uitelja-ili"
                >uplatite članarinu HZUTS-a i članarinu područnom zboru</span
              >
              <span class="prethodno-se-ulaniti">
                na račun i prema cijenama članarina područnih zborova</span
              >
            </span>
          </div>
        </div>
        <div class="frame-parent3">
          <div class="ellipse-container">
            <div class="frame-child" />
            <div class="div2">6</div>
          </div>
          <div class="dostaviti-svu-dokumentaciju">
            dostaviti svu dokumentaciju za dokaz statusa (Uvjerenje o
            osposobljavanju, potvrda s KIF-a o statusu ili diploma o stečenom
            zvanju dipl. profesora za Voditelje skijanja.
          </div>
        </div>
        <div class="frame-parent4">
          <a class="prijavnica-za-lanstvo-wrapper">
            <b class="prijavnica-za-lanstvo">PRIJAVNICA ZA ČLANSTVO</b>
          </a>
         
            <Link :href="route('skijasi.commerce-theme.cart')" class="uplatite-lanarinu-hzuts-u-wrapper">
            
              <b class="prijavnica-za-lanstvo">UPLATITE ČLANARINU HZUTS-U</b>
      </Link>
          
         
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
  name: "uclanise",
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
  .ulanite-se-u {
    position: relative;
    letter-spacing: 3px;
    font-weight: 600;
  }
  .ulanite-se-u-hzuts-wrapper {
    width: 90rem;
    height: 33rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-image: url("/storage/slike/frame-451@3x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
  }
  .koje-moete-saznati {
    font-weight: 500;
  }
  .licence-i-hologrami-container1 {
    line-break: anywhere;
  }
  .licence-i-hologrami-container {
    align-self: stretch;
    position: relative;
    display: flex;
    align-items: center;
    height: 7.47rem;
    flex-shrink: 0;
  }
  .za-ulanjenje-u {
    align-self: stretch;
    position: relative;
    font-size: 2.25rem;
    display: flex;
    color: #03a9f4;
    align-items: center;
    height: 7.47rem;
    flex-shrink: 0;
  }
  .frame-child {
    position: relative;
    border-radius: 50%;
    background-color: #03a9f4;
    width: 6.25rem;
    height: 6.25rem;
    z-index: 0;
  }
  .div {
    position: absolute;
    margin: 0 !important;
    top: calc(50% - 38px);
    left: calc(50% - 15px);
    font-weight: 600;
    z-index: 1;
  }
  .ellipse-parent {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    position: relative;
    gap: 0.63rem;
  }
  .status-uitelja-ili {
    font-weight: 600;
  }
  .posjedovat-minimalno-status-container {
    flex: 1;
    position: relative;
    font-size: 2rem;
    color: #000;
    text-align: left;
    display: flex;
    align-items: center;
    height: 6.25rem;
  }
  .frame-group {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    gap: 2.19rem;
  }
  .div1 {
    position: absolute;
    margin: 0 !important;
    top: calc(50% - 38px);
    left: calc(50% - 20px);
    font-weight: 600;
    z-index: 1;
  }
  .ellipse-group {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    position: relative;
    gap: 0.63rem;
  }
  .prethodno-se-ulaniti {
    font-weight: 300;
  }
  .prethodno-se-ulaniti-container {
    flex: 1;
    position: relative;
    font-size: 2rem;
    color: #000;
    text-align: left;
    display: flex;
    align-items: center;
    height: 7.31rem;
  }
  .frame-container {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    gap: 2.19rem;
  }
  .div2 {
    position: absolute;
    margin: 0 !important;
    top: calc(50% - 38px);
    left: calc(50% - 21px);
    font-weight: 600;
    z-index: 1;
  }
  .ellipse-container {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    position: relative;
    gap: 0.63rem;
  }
  .ispuniti-dolje-navedeni-container1 {
    line-break: anywhere;
    width: 100%;
  }
  .ispuniti-dolje-navedeni-container {
    position: relative;
    font-size: 2rem;
    color: #000;
    text-align: left;
    display: flex;
    align-items: center;
    width: 39.44rem;
    height: 2.44rem;
    flex-shrink: 0;
  }
  .frame-div {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    gap: 2.19rem;
  }
  .ellipse-parent1 {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    position: relative;
    gap: 0.63rem;
    z-index: 0;
  }
  .uz-prijavu-poslat-container {
    flex: 1;
    position: relative;
    font-size: 2rem;
    color: #000;
    text-align: left;
    display: flex;
    align-items: center;
    height: 6.25rem;
    z-index: 1;
  }
  .vector-icon {
    position: relative;
    width: 1.79rem;
    height: 1.79rem;
    z-index: 0;
  }
  .vector-icon1 {
    position: absolute;
    margin: 0 !important;
    height: 22.79%;
    width: 6.12%;
    top: 30.27%;
    right: 46.94%;
    bottom: 46.94%;
    left: 46.94%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    z-index: 1;
  }
  .vector-icon2 {
    position: absolute;
    margin: 0 !important;
    height: 6.12%;
    width: 6.16%;
    top: 63.61%;
    right: 46.9%;
    bottom: 30.27%;
    left: 46.94%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    z-index: 2;
  }
  .alert-circle-1 {
    cursor: pointer;
    border: none;
    padding: 0.19rem;
    background-color: transparent;
    margin: 0 !important;
    position: absolute;
    top: 1.13rem;
    left: 53.69rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 0.63rem;
    z-index: 2;
  }
  .frame-parent1 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    position: relative;
    gap: 2.19rem;
  }
  .ellipse-parent2 {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    position: relative;
    gap: 0.63rem;
  }
  .uplatite-lanarinu-hzuts-a-container {
    flex: 1;
    position: relative;
    font-size: 2rem;
    color: #000;
    text-align: left;
    display: flex;
    align-items: center;
    height: 6.25rem;
  }
  .frame-parent2 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    gap: 2.19rem;
  }
  .dostaviti-svu-dokumentaciju {
    flex: 1;
    position: relative;
    font-size: 2rem;
    font-weight: 300;
    color: #000;
    text-align: left;
    display: flex;
    align-items: center;
    height: 7.31rem;
  }
  .frame-parent3 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    gap: 2.19rem;
  }
  .prijavnica-za-lanstvo {
    position: relative;
  }
  .prijavnica-za-lanstvo-wrapper {
    text-decoration: none;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    width: 28.13rem;
    height: 5rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    color: inherit;
  }
  .prijavnica-za-lanstvo-wrapper:hover {
    background-color: #03a9f4;  
    color: #fff;
  }
  .uplatite-lanarinu-hzuts-u-wrapper {
    text-decoration: none;
    border: 2px solid #03a9f4;
    width: 28.13rem;
    height: 4.81rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    color: inherit;
  }

  .uplatite-lanarinu-hzuts-u-wrapper:hover {
    background-color: #03a9f4;  
    color: #fff;
  }
  .frame-parent4 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 6.25rem;
    font-size: 1.25rem;
    color: #000;
  }
  .frame-parent {
    align-self: stretch;
    height: 69rem;
    display: flex;
    flex-direction: column;
    padding: 0rem 0.38rem;
    box-sizing: border-box;
    align-items: flex-start;
    justify-content: center;
    gap: 4.06rem;
    text-align: center;
    font-size: 4rem;
    color: #fff;
  }
  .licence-i-hologrami-podiu-se-parent {
    align-self: stretch;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    padding: 1.88rem 3.75rem;
    align-items: center;
    justify-content: flex-start;
    gap: 3rem;
    text-align: left;
    font-size: 1.5rem;
    color: #21231e;
  }
  .uclanisescreen {
    position: relative;
    background-color: #f8f7f5;
    width: 100%;
    height: 132.19rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1.88rem;
    text-align: center;
    font-size: 2.5rem;
    color: #fff;
    font-family: Inter;
  }

  @media screen and (max-width: 1200px) {
    .frame-parent4 {
      flex-direction: row;
      gap: 0.63rem;
      align-items: center;
      justify-content: flex-start;
    }
  }
  @media screen and (max-width: 960px) {
    .ulanite-se-u-hzuts-wrapper {
      align-self: stretch;
      width: auto;
      flex: 1;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
    }

    .posjedovat-minimalno-status-container {
      text-align: left;
      flex: unset;
      align-self: stretch;
    }

    .frame-group {
      flex-direction: column;
    }

    .prethodno-se-ulaniti-container {
      flex: unset;
      align-self: stretch;
    }

    .frame-container {
      flex-direction: column;
    }

    .ispuniti-dolje-navedeni-container {
      align-self: stretch;
      width: auto;
    }

    .frame-div {
      flex-direction: column;
    }

    .uz-prijavu-poslat-container {
      flex: unset;
      align-self: stretch;
    }

    .alert-circle-1 {
      height: auto;
      flex-direction: column;
      gap: 0.63rem;
      align-items: flex-start;
      justify-content: flex-start;
      padding-left: 0.19rem;
      box-sizing: border-box;
    }

    .frame-parent1 {
      flex-direction: column;
    }

    .uplatite-lanarinu-hzuts-a-container {
      flex: unset;
      align-self: stretch;
    }

    .frame-parent2 {
      flex-direction: column;
    }

    .dostaviti-svu-dokumentaciju {
      flex: unset;
      align-self: stretch;
    }

    .frame-parent3 {
      flex-direction: column;
    }

    .frame-parent4 {
      flex-direction: column;
      gap: 0.63rem;
      align-items: center;
      justify-content: flex-start;
    }

    .frame-parent {
      height: auto;
      align-items: center;
      justify-content: center;
    }

    .licence-i-hologrami-podiu-se-parent {
      flex: 1;
    }

    .uclanisescreen {
      height: auto;
    }
  }
  @media screen and (max-width: 420px) {
    .ulanite-se-u-hzuts-wrapper {
      height: auto;
    }

    .licence-i-hologrami-container {
      flex: 1;
    }

    .za-ulanjenje-u {
      flex: 1;
    }

    .posjedovat-minimalno-status-container {
      flex: unset;
      align-self: stretch;
    }

    .frame-group {
      flex-direction: column;
      gap: 2.88rem;
      align-items: center;
      justify-content: center;
    }

    .ellipse-group {
      width: auto;
      align-self: unset;
      height: auto;
      flex-direction: column;
      gap: 0.63rem;
      padding-bottom: 0rem;
      box-sizing: border-box;
    }

    .prethodno-se-ulaniti-container {
      flex: unset;
      align-self: stretch;
    }

    .frame-container {
      align-self: stretch;
      width: auto;
      height: auto;
      flex-direction: column;
      gap: 9.38rem;
      align-items: center;
      justify-content: center;
    }

    .ellipse-container {
      flex-direction: column;
    }

    .ispuniti-dolje-navedeni-container {
      align-self: stretch;
      width: auto;
    }

    .frame-div {
      width: auto;
      align-self: unset;
      flex-direction: column;
      gap: 3.75rem;
      align-items: center;
      justify-content: flex-start;
    }

    .ellipse-parent1 {
      flex-direction: column;
    }

    .uz-prijavu-poslat-container {
      flex: unset;
      align-self: stretch;
    }

    .frame-parent1 {
      flex-direction: column;
      gap: 1.56rem;
    }

    .ellipse-parent2 {
      align-self: stretch;
      width: auto;
      height: auto;
      flex-direction: column;
      gap: 2.19rem;
      padding-bottom: 0rem;
      box-sizing: border-box;
    }

    .uplatite-lanarinu-hzuts-a-container {
      flex: unset;
      align-self: stretch;
    }

    .frame-parent2 {
      align-self: stretch;
      width: auto;
      flex-direction: column;
      gap: 6.88rem;
      align-items: center;
      justify-content: flex-start;
      padding-bottom: 0rem;
      box-sizing: border-box;
    }

    .dostaviti-svu-dokumentaciju {
      flex: unset;
      align-self: stretch;
    }

    .frame-parent3 {
      align-self: stretch;
      width: auto;
      height: auto;
      flex-direction: column;
      gap: 9.75rem;
      align-items: center;
      justify-content: center;
      padding-bottom: 0rem;
      box-sizing: border-box;
    }

    .frame-parent4 {
      width: auto;
      align-self: unset;
      height: auto;
      flex-direction: column;
      gap: 0.63rem;
      align-items: flex-start;
      justify-content: flex-start;
    }

    .frame-parent {
      align-self: stretch;
      width: auto;
      height: auto;
      flex-direction: column;
      gap: 13.13rem;
      align-items: center;
      justify-content: flex-start;
    }

    .licence-i-hologrami-podiu-se-parent {
      height: auto;
    }

    .uclanisescreen {
      height: auto;
    }
  }
</style>

