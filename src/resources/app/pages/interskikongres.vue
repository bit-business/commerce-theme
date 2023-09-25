    <template>
    <div class="interskikongresi">
      <Head :title="$page.props.name" />


    <div class="glavnaslikagoreitekst">
      <div class="tekstvrh">
        <div class="interski-kongres-i">INTERSKI KONGRES I DEMO TEAM</div>
        <div class="demo-team-je">
          DEMO TEAM je selekcija ponajboljih hrvatskih demonstratora skijanja
          izabranih po rang listi na seminarima za demostratore skijanja koji se
          održavaju svake dvije godine. Zadatak 'DEMO TEAM-a' je predstavljanje
          Hrvatske na INTERSKI kongresima koji se održavaju svake četiri godine
          u drugom mjestu.
        </div>
      </div>
    </div>

    
    <div class="prvired">
      <div class="lijeviprvidio">
        <img class="lijeviprvidio-child" alt="" src="/storage/slike/zastava_finska.png" />
      </div>
      <div class="desniprvidio">
        <div class="frame">
          <div class="frame1">
            <b class="interski-kongres-">INTERSKI KONGRES - FINSKA</b>
          </div>
          <b class="b">2023</b>
          <div class="frame2">
            <div class="interski-kongres-">
              Saznajte članove demo teama koji su predstavljali Hrvatsku, te
              pogledajte galeriju slika.
            </div>
          </div>
          <div class="frame3">
            <a class="saznaj-vie-wrapper">
              <b class="saznaj-vie">SAZNAJ VIŠE</b>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="drugired">
      <div class="lijevidrugidio">
        <div class="frame4">
          <div class="frame5">
            <b class="interski-kongres-">INTERSKI KONGRES - BUGARSKA</b>
          </div>
          <div class="frame6">
            <div class="interski-kongres-">
              Saznajte članove demo teama koji su predstavljali Hrvatsku, te
              pogledajte galeriju slika.
            </div>
          </div>
          <div class="frame7">
            <a class="saznaj-vie-wrapper">
              <b class="saznaj-vie1">SAZNAJ VIŠE</b>
            </a>
          </div>
          <div class="frame8">
            <b class="b1">2019</b>
          </div>
        </div>
      </div>
      <div class="desnidrugidio">
        <img class="desnidrugidio-child" alt="" src="/storage/slike/zastava_bugarska.png" />
      </div>
    </div>
    <div class="trecired">
      <div class="lijevitrecidio">
        <img class="lijevitrecidio-child" alt="" src="/storage/slike/zastava_argentina.png" />
      </div>
      <div class="desnitrecidio">
        <div class="frame9">
          <div class="frame10">
            <b class="interski-kongres-">INTERSKI KONGRES - ARGENTINA</b>
          </div>
          <b class="b2">2015</b>
          <div class="frame11">
            <a class="saznaj-vie-wrapper">
              <b class="saznaj-vie2">SAZNAJ VIŠE</b>
            </a>
          </div>
          <div class="frame2">
            <div class="interski-kongres-">
              Saznajte članove demo teama koji su predstavljali Hrvatsku, te
              pogledajte galeriju slika.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
</template>
<script>


import galerijaLayout from '../layouts/galerija.vue'
import appLayout from '../layouts/app.vue'
import { mapState } from 'vuex'
import { Link, Head } from '@inertiajs/inertia-vue'
import _ from "lodash";

export default {
  name: "interskikongres",
  layout: [appLayout, galerijaLayout],
  components: {
    Link,
    Head
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
  .interski-kongres-i {
    align-self: stretch;
    position: relative;
    letter-spacing: 3px;
    font-weight: 600;
  }
  .demo-team-je {
    align-self: stretch;
    position: relative;
    font-size: 1.25rem;
    font-weight: 500;
  }
  .tekstvrh {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 2.38rem;
  }
  .glavnaslikagoreitekst {
    align-self: stretch;
    height: 32.88rem;
    display: flex;
    flex-direction: row;
    padding: 10.75rem 15.38rem;
    box-sizing: border-box;
    align-items: center;
    justify-content: center;
    background-image: url("/storage/slike/glavnaslikagoreitekst@3x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
    font-size: 2.5rem;
    color: #fff;
  }
  .lijeviprvidio-child {
    position: absolute;
    margin: 0 !important;
    height: 32.38%;
    width: 36.57%;
    top: 67.62%;
    right: 63.43%;
    bottom: 0%;
    left: 0%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    object-fit: cover;
    z-index: 0;
  }
  .lijeviprvidio {
    flex: 1;
    height: 26.25rem;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    position: relative;
    background-image: url("/storage/slike/lijeviprvidio@3x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
  }
  .interski-kongres- {
    align-self: stretch;
    position: relative;
  }
  .frame1 {
    position: absolute;
    top: 0rem;
    left: 2.72rem;
    width: 37.63rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
    font-size: 2.25rem;
  }
  .b {
    position: absolute;
    top: 2.75rem;
    left: 0.34rem;
    font-size: 16.25rem;
    color: rgba(3, 169, 244, 0.1);
  }
  .frame2 {
    position: absolute;
    top: 5.5rem;
    left: 8.56rem;
    width: 25.25rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
  }
  .saznaj-vie {
    position: relative;
    letter-spacing: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 18.19rem;
    flex-shrink: 0;
  }
  .saznaj-vie-wrapper {
    text-decoration: none;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    width: 25rem;
    height: 3.75rem;
    display: flex;
    flex-direction: row;
    padding: 0rem 5.19rem;
    align-items: center;
    justify-content: center;
    color: inherit;
  }
  .frame3 {
    position: absolute;
    top: 14.44rem;
    left: 6.94rem;
    width: 28.5rem;
    height: 3.75rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
  }
  .frame {
    position: relative;
    width: 43.06rem;
    height: 20.81rem;
  }
  .desniprvidio {
    flex: 1;
    height: 20.81rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: center;
  }
  .prvired {
    align-self: stretch;
    background-color: #fff;
    height: 26.25rem;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 0.63rem;
  }
  .frame5 {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 42.19rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
    font-size: 2.25rem;
  }
  .frame6 {
    position: absolute;
    top: 5.5rem;
    left: 9.38rem;
    width: 23.44rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  .saznaj-vie1 {
    position: relative;
    letter-spacing: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 18.88rem;
    flex-shrink: 0;
  }
  .frame7 {
    position: absolute;
    top: 14.44rem;
    left: 7.81rem;
    width: 26.56rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  .b1 {
    position: relative;
  }
  .frame8 {
    position: absolute;
    top: 2.75rem;
    left: 0rem;
    width: 42.19rem;
    height: 18.06rem;
    display: flex;
    flex-direction: column;
    padding: 0rem 1rem;
    box-sizing: border-box;
    align-items: flex-end;
    justify-content: center;
    font-size: 16.25rem;
    color: rgba(3, 169, 244, 0.1);
  }
  .frame4 {
    position: relative;
    width: 42.19rem;
    height: 20.81rem;
  }
  .lijevidrugidio {
    flex: 1;
    height: 26.25rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    padding: 0.63rem 0rem;
    box-sizing: border-box;
    align-items: center;
    justify-content: center;
  }
  .desnidrugidio-child {
    position: absolute;
    margin: 0 !important;
    height: 32.38%;
    width: 36.95%;
    top: 67.62%;
    right: -0.73%;
    bottom: 0%;
    left: 63.78%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    object-fit: cover;
    z-index: 0;
  }
  .desnidrugidio {
    flex: 1;
    height: 26.25rem;
    display: flex;
    flex-direction: row;
    padding: 0.63rem 3.13rem;
    box-sizing: border-box;
    align-items: center;
    justify-content: flex-end;
    position: relative;
    background-image: url("/storage/slike/desnidrugidio@3x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
  }
  .drugired {
    align-self: stretch;
    background-color: #fff;
    height: 26.25rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
  }
  .lijevitrecidio-child {
    position: absolute;
    margin: 0 !important;
    height: 32.38%;
    width: 36%;
    top: 67.62%;
    right: 64%;
    bottom: 0%;
    left: 0%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    object-fit: cover;
    z-index: 0;
  }
  .lijevitrecidio {
    flex: 1;
    height: 26.25rem;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    position: relative;
    background-image: url("/storage/slike/lijevitrecidio@3x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
  }
  .frame10 {
    position: absolute;
    top: 0rem;
    left: 2.38rem;
    width: 37.63rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
    font-size: 2.25rem;
  }
  .b2 {
    position: absolute;
    top: calc(50% - 148.5px);
    left: calc(50% - 319px);
    font-size: 16.25rem;
    color: rgba(3, 169, 244, 0.1);
  }
  .saznaj-vie2 {
    position: relative;
    letter-spacing: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 18.75rem;
    flex-shrink: 0;
  }
  .frame11 {
    position: absolute;
    top: 14.44rem;
    left: 6.94rem;
    width: 28.5rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  .frame9 {
    position: relative;
    width: 42.38rem;
    height: 20.81rem;
  }
  .desnitrecidio {
    flex: 1;
    height: 21.88rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: center;
  }
  .trecired {
    align-self: stretch;
    background-color: #fff;
    height: 26.25rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
  }
  .interskikongresi {
    position: relative;
    background-color: #f8f7f5;
    width: 100%;
    height: 119.31rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    gap: 1.88rem;
    text-align: center;
    font-size: 1.25rem;
    color: #000;
    font-family: Inter;
  }

  

  @media screen and (max-width: 660px) {
  


  }



  @media screen and (max-width: 960px) {

    .glavnaslikagoreitekst {
    padding: 8.85rem 2.38rem;
  }
    
    .tekstvrh {
      flex: 1;
      height: auto;
      flex-direction: column;
      gap: 2.38rem;
      align-items: center;
      justify-content: flex-start;
      padding-left: 0rem;
      box-sizing: border-box;
    }

    .lijeviprvidio {
      height: auto;
      flex-direction: column;
      align-items: flex-end;
      justify-content: flex-start;
      padding: 23.75rem 3.13rem 0.63rem;
      box-sizing: border-box;
      flex: unset;
      align-self: stretch;
    }

    .desniprvidio {
      align-self: stretch;
      width: auto;
      height: auto;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      padding-left: 0rem;
      padding-top: 0rem;
      box-sizing: border-box;
      flex: unset;
    }

    .prvired {
      align-self: stretch;
      width: auto;
      height: auto;
      flex-direction: column;
    }

    .lijevidrugidio {
      flex-direction: column;
      align-items: center;
      justify-content: center;
      flex: unset;
      align-self: stretch;
    }

    .desnidrugidio {
      flex-direction: column;
      flex: unset;
      align-self: stretch;

    order: -1;
  }
    

    .drugired {
      align-self: stretch;
      width: auto;
      height: auto;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .lijevitrecidio {
      flex: unset;
      align-self: stretch;
    }

    .desnitrecidio {
      flex: unset;
      align-self: stretch;
    }

    .trecired {
      align-self: stretch;
      width: auto;
      height: auto;
      flex-direction: column;
    }

    .interskikongresi {
      width: auto;
      align-self: unset;
      height: auto;
    }
  }


  


</style>


