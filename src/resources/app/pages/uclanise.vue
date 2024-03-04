<template>
  <div class="hzuts-join-screen-desktop">
    <Head :title="$page.props.name" />
    <div class="uclanise-glavnipodframe">
      <div class="gornjiblokframe">
        <img class="gornjiblokframe-child" alt="" src="/storage/slike/uclanise/rectangle-200@2x.png" />
        <div class="gornjiblokframe-item" />
        <div class="ulanite-se-u-hzuts-wrapper">
          <div class="ulanite-se-u">UČLANITE SE U HZUTS</div>
        </div>
      </div>
      <div class="donjiblokframe">
        <div class="bijelidioglavniframe">
          <b class="za-ulanjenje-u"
            >Za učlanjenje u HZUTS potrebno je ispuniti sljedeće uvjete:</b
          >
          <div class="prvired">
            <div class="ellipse-parent-uclanise">
              <div class="group-child-uclanise" />
              <div class="div-uclanise">1</div>
            </div>
            <div class="imati-zvanje-uitelja">navršiti minimalno 18 godina</div>
          </div>
          <div class="drugired-uclanise">
            <div class="ellipse-group-uclanise">
              <div class="group-item-uclanise" />
              <div class="div1-uclanise">2</div>
            </div>
            <div class="imati-zvanje-uitelja">
              imati zvanje učitelja ili trenera sportova na snijegu (za učitelja
              skijanja to znači završen program odobren od Ministarstva znanosti
              i obrazovanja u trajanju od minimalno 310 sati te položen ispit
              ispred komisije HZUTS-a)
            </div>
          </div>
          <div class="prvired">
            <div class="ellipse-container-uclanise">
              <div class="group-inner-uclanise" />
              <div class="div-uclanise">3</div>
            </div>
            <div class="imati-zvanje-uitelja">
              dostaviti svu dokumentaciju za dokaz statusa prethodne točke
              (Uvjerenje o osposobljavanju, diploma Kineziološkog fakulteta
              osoba koje su diplomirale i usmjerile skijanje – zvanje:
              Sveučilišni magistar kineziologije u edukaciji i skijanju)
            </div>
          </div>
          <div class="prvired">
            <div class="ellipse-container-uclanise">
              <div class="group-inner-uclanise" />
              <div class="div-uclanise">4</div>
            </div>
            <div class="prethodno-se-ulaniti-container">
              <span>prethodno se učlaniti u jedan od </span>     
              <Link :href="route('skijasi.commerce-theme.podrucnizborovi')" class="podrunih-zborova">Područnih zborova</Link>
            </div>
          </div>
          <div class="prvired">
            <div class="ellipse-container-uclanise">
              <div class="group-inner-uclanise" />
              <div class="div-uclanise">5</div>
            </div>
            <div class="imati-zvanje-uitelja">ispuniti obrazac za prijavu</div>
          </div>
          <div class="prvired">
            <div class="ellipse-container-uclanise">
              <div class="group-inner-uclanise" />
              <div class="div-uclanise">6</div>
            </div>
            <div class="uz-prijavu-ili-container">
              <span class="uz-prijavu-ili">uz prijavu (ili na </span>
              <span class="infohzutshr">          <a href="mailto:info@hzuts.hr" >&#105;&#110;&#102;&#111;&#64;&#104;&#122;&#117;&#116;&#115;&#46;&#104;&#114;</a>
</span>
              <span class="uz-prijavu-ili"
                >) poslati fotografiju u digitalnom obliku - više informacija
                potražite pod linkom
              </span>
              <Link :href="route('skijasi.commerce-theme.izradaiskaznice')" class="izrada-lanske-iskaznice"
                >Izrada članske iskaznice</Link>
            </div>
          </div>
          <div class="prvired">
            <div class="ellipse-container-uclanise">
              <div class="group-inner-uclanise" />
              <div class="div-uclanise">7</div>
            </div>
            <div class="imati-zvanje-uitelja">
              uplatiti članarinu HZUTS-u i članarinu područnom zboru na račun
              prema cijenama članarina područnih zborova
            </div>
          </div>
          <div class="vano-vrijeme-izrade-container">
            <p class="vano">
              <b>VAŽNO</b>
            </p>
            <p class="vano">
              <b>&nbsp;</b>
            </p>
            <p class="vrijeme-izrade-iskaznice">
              Vrijeme izrade iskaznice je minimalno tjedan dana od zaprimanja
              svih materijala.
            </p>
            <p class="vrijeme-izrade-iskaznice">
              Nakon izrade iskaznicu i amblem možete pruzeti u uredovno vrijeme
              u HZUTS-u ili iste možemo poslati na vašu kućnu adresu.
            </p>
            <p class="vrijeme-izrade-iskaznice">
              Licence i hologrami podižu se isključivo u vrijeme dežurstva Vašeg
              područnog zbora koje možete saznati na web stranicama područnih
              zborova ili kontaktiranjem tajnika područnog zbora.
            </p>
          </div>
          <div class="gumbiframeglavni">
            <div class="lijevigumbframe">
              <a class="pozadinalijevoggumba">
                <Link :href="route('skijasi.commerce-theme.prijavazaclanstvo')" class="prijavnica-za-lanstvo font-bold">PRIJAVNICA ZA ČLANSTVO</Link>
              </a>
            </div>
            <div class="desnigumbframe">
              <a class="pozadinadesnoggumba" href="https://hzuts.hr/infoclanarine" >
              <b class="uplatite-lanarinu-hzuts-u" 
                >UPLATITE ČLANARINU HZUTS-U</b
              ></a>
            </div>
          </div>
        </div>
        <img class="maskota-final-2-1" alt="" src="/storage/slike/uclanise/maskota-final-2-1@2x.png" />
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
  name: "uclanise",
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
  .gornjiblokframe-child {
    position: absolute;
    width: 100%;
    top: calc(50% - 264px);
    right: 0%;
    left: 0%;
    max-width: 100%;
    overflow: hidden;
    height: 33rem;
    object-fit: cover;
  }
  .gornjiblokframe-item {
    position: absolute;
    width: 100%;
    top: calc(50% - 264px);
    right: 0%;
    left: 0%;
    background-color: rgba(0, 0, 0, 0.7);
    height: 33rem;
  }
  .ulanite-se-u {
    flex: 1;
    position: relative;
    letter-spacing: 3px;
    font-weight: 600;
  }
  .ulanite-se-u-hzuts-wrapper {
    position: absolute;
    top: calc(50% - 24px);
    left: calc(50% - 252px);
    width: 31.56rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
  }
  .gornjiblokframe {
    position: relative;
    width: 100%;
    height: 33rem;
  }
  .za-ulanjenje-u {
    align-self: stretch;
    position: relative;
    font-size: 1.5rem;
    color: #03a9f4;
    text-align: left;
  }
  .group-child-uclanise {
    position: absolute;
    top: 0rem;
    left: 0rem;
    border-radius: 50%;
    background-color: #03a9f4;
    width: 4.38rem;
    height: 4.38rem;
  }
  .div-uclanise {
    position: absolute;
    top: calc(50% - 26.6px);
    left: calc(50% - 10.5px);
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 1.36rem;
    height: 3.37rem;
  }
  .ellipse-parent-uclanise {
    position: relative;
    width: 4.38rem;
    height: 4.38rem;
  }
  .prvired {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 1.88rem;
  }
  .group-item-uclanise {
    position: absolute;
    top: 0rem;
    left: 0rem;
    border-radius: 50%;
    background-color: #03a9f4;
    width: 4.26rem;
    height: 4.38rem;
  }
  .div1-uclanise {
    position: absolute;
    top: calc(50% - 26.6px);
    left: calc(50% - 10.2px);
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 1.32rem;
    height: 3.37rem;
  }
  .ellipse-group-uclanise {
    position: relative;
    width: 4.26rem;
    height: 4.38rem;
  }
  .imati-zvanje-uitelja {
    flex: 1;
    position: relative;
    font-size: 1.63rem;
    color: #000;
    text-align: left;
  }
  .drugired-uclanise {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 1.81rem;
  }
  .group-inner-uclanise {
    position: absolute;
    top: 0rem;
    left: 0rem;
    border-radius: 50%;
    background-color: #03a9f4;
    width: 4.38rem;
    height: 4.38rem;
  }
  .ellipse-container-uclanise {
    position: relative;
    width: 4.38rem;
    height: 4.38rem;
  }
  .podrunih-zborova {
    text-decoration: underline;
    color: #03a9f4;
  }
  .prethodno-se-ulaniti-container {
    flex: 1;
    position: relative;
    font-size: 1.63rem;
    text-align: left;
    color: #000;
  }
  .group-child2-uclanise {
    position: absolute;
    top: 0rem;
    left: 0rem;
    border-radius: 50%;
    background-color: #03a9f4;
    width: 4.92rem;
    height: 4.38rem;
  }
  .div5-uclanise {
    position: absolute;
    top: calc(50% - 26.6px);
    left: calc(50% - 11.85px);
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 1.53rem;
    height: 3.37rem;
  }
  .ellipse-parent2-uclanise {
    position: relative;
    width: 4.38rem;
    height: 4.38rem;
  }
  .uz-prijavu-ili {
    color: #000;
  }
  .infohzutshr {
    color: #03a9f4;
  }
  .izrada-lanske-iskaznice {
    text-decoration: underline;
  }
  .uz-prijavu-ili-container {
    flex: 1;
    position: relative;
    font-size: 1.63rem;
    text-align: left;
    color: #03a9f4;
  }
  .vano {
    margin: 0;
  }
  .vrijeme-izrade-iskaznice {
    margin: 0;
    font-weight: 500;
  }
  .vano-vrijeme-izrade-container {
    align-self: stretch;
    position: relative;
    font-size: 1.25rem;
    color: #000;
    text-align: left;
  }

  .prijavnica-za-lanstvo {
    position: absolute;
    top: calc(50% - 12px);
    left: calc(50% - 139px);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 17.44rem;
  }
  .lijevigumbframe {
    position: relative;
    width: 28.13rem;
    height: 5rem;
  }


    .pozadinalijevoggumba {
    position: absolute;
    top: 0rem;
    left: 0rem;
    border: 2px solid #03a9f4;
    background-color: #fff;
    box-sizing: border-box;
    width: 28.13rem;
    height: 5rem;
  }
  .pozadinadesnoggumba {
    position: absolute;
    top: 0rem;
    left: 0rem;
    border: 2px solid #03a9f4;
    background-color: #fff;
    width: 28.13rem;
    height: 5rem;
  }

  .pozadinalijevoggumba:hover{
    background-color: #03a9f4;
    border: 2px solid #fff;
    color: #fff;
  }
  .pozadinadesnoggumba:hover{
  background-color: #03a9f4;
  color: #fff;
  border: 2px solid #fff;
}
  .uplatite-lanarinu-hzuts-u {
    position: absolute;
    top: calc(50% - 12px);
    left: calc(50% - 192px);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 24.06rem;
  }
  .desnigumbframe {
    position: relative;
    width: 28.13rem;
    height: 5rem;

  }
  .gumbiframeglavni {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    padding: 5.06rem 0rem;
    gap: 6.25rem;
    font-size: 1.25rem;
    color: #000;
  }
  .bijelidioglavniframe {
    align-self: stretch;
    border-radius: 40px;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 2.88rem 3.75rem 1.56rem;
    gap: 1.94rem;
    z-index: 0;
  }
  .maskota-final-2-1 {
    position: absolute;
    margin: 0 !important;
    height: 11.53%;
    top: 2%;
    right: 7.5rem;
    bottom: 86.47%;
    max-height: 100%;
    width: 12.5rem;
    object-fit: cover;
    z-index: 1;
  }
  .donjiblokframe {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 0rem 3.75rem;
    position: relative;
    gap: 0.63rem;
  }
  .uclanise-glavnipodframe {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    gap: 2.5rem;
  }
  .hzuts-join-screen-desktop {
    position: relative;
    background-color: #f8f7f5;
    width: 100%;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 3.75rem 0rem;
    box-sizing: border-box;
    text-align: center;
    font-size: 2.5rem;
    color: #fff;
    font-family: Inter;
  }

  @media screen and (max-width: 1150px) {
    .maskota-final-2-1 {
      align-self: stretch;
      width: auto;
      flex: 1;
      max-height: 6.25rem;
    }
  }
  @media screen and (max-width: 800px) {
    .prijavnica-za-lanstvo {
      font-size: 1.25rem;
    }

    .lijevigumbframe {
      width: 28.13rem;
    }

    .uplatite-lanarinu-hzuts-u {
      font-size: 1.25rem;
      width: 24.06rem;
    }

    .desnigumbframe {
      width: 28.13rem;
    }

    .gumbiframeglavni {
      height: 4.5rem;
      flex-direction: row;
      gap: 1.25rem;
      align-items: center;
      justify-content: center;
      padding-top: 3.75rem;
      padding-bottom: 12.5rem;
      box-sizing: border-box;
    }

    .maskota-final-2-1 {
      width: 6.25rem;
      height: 4.63rem;
    }
  }
  @media screen and (max-width: 600px) {
    .za-ulanjenje-u {
      font-size: 1.13rem;
    }

    .group-child-uclanise {
      height: 4.5rem;
    }

    .ellipse-parent-uclanise {
      height: 4.5rem;
    }

    .imati-zvanje-uitelja {
      font-size: 1.13rem;
    }

    .prethodno-se-ulaniti-container {
      font-size: 1.13rem;
    }

    .uz-prijavu-ili-container {
      font-size: 1.13rem;
    }

    .vano-vrijeme-izrade-container {
      font-size: 0.94rem;
    }

    .lijevigumbframe {
      height: 5rem;
    }

    .gumbiframeglavni {
      flex-direction: row;
      gap: 1.88rem;
      align-items: center;
      justify-content: center;
      padding-left: 0rem;
      padding-top: 3.75rem;
      padding-bottom: 0rem;
      box-sizing: border-box;
    }

    .bijelidioglavniframe {
      align-self: stretch;
      width: auto;
      flex-direction: column;
      gap: 1.88rem;
      align-items: center;
      justify-content: flex-start;
      padding: 2.88rem 1.25rem 17.5rem;
      box-sizing: border-box;
    }

    .maskota-final-2-1 {
      align-self: stretch;
      width: auto;
      flex: 1;

      width: 5.25rem;
      height: 3.63rem;
    bottom: 96.47%;
    right: 1%;

    }

    .pozadinalijevoggumba {
  position: absolute;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
  border: 2px solid #03a9f4;
  box-sizing: border-box;
  width: 18rem; /* Or a smaller width */
  height: 4rem;
}

  .pozadinadesnoggumba {
    position: absolute;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
  border: 2px solid #03a9f4;
  box-sizing: border-box;
  width: 18rem; /* Or a smaller width */
  height: 4rem;
  }
  .prijavnica-za-lanstvo {
      font-size: 1rem;

    }
    .uplatite-lanarinu-hzuts-u {
      font-size: 1rem;
  

    }


    .donjiblokframe {
      gap: 0.63rem;
      padding-left: 1.75rem;
      padding-right: 1.75rem;
      box-sizing: border-box;
    }
  }
  @media screen and (max-width: 460px) {
    .prvired {
      flex-direction: column;
    }

    .imati-zvanje-uitelja {
      text-align: center;
      flex: unset;
      align-self: stretch;
    }

    .drugired-uclanise {
      flex-direction: column;
    }

    .prethodno-se-ulaniti-container {
      text-align: center;
      flex: unset;
      align-self: stretch;
    }

    .uz-prijavu-ili-container {
      text-align: center;
      flex: unset;
      align-self: stretch;
    }

 
    .bijelidioglavniframe {

      padding: 2.88rem 1.25rem 14.5rem;

    }
  }


  @media screen and (max-width: 340px) {
  .ulanite-se-u {
    letter-spacing: 1px;
    padding-left: 4%;
    padding-right: 4%;
  }
  }


  @media screen and (max-width: 1020px) {
    .maskota-final-2-1 {
    top: 4%;
    right: 9%;

  }
  }


</style>

