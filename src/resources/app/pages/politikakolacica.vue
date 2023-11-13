<template>
  <div class="osnovneinformacije">
    <Head :title="$page.props.name" />
    <div class="osnovneinformacije-inner">
      <div class="osnovne-informacije-parent">
        <div class="osnovne-informacije">POLITIKA O KOLAČIĆIMA</div>

      </div>
    </div>
    <div class="g14-parent">
      <img class="g14-icon" alt="" src="/storage/slike/g14.svg" />
      <div class="o-hzuts-u-parent">
       
        <div class="left">
          <span >
            <p><b>Politika kolačića Hrvatskog zbora učitelja i trenera sportova na snijegu</b></p>
<p></p><br>
<p>Ova politika kolačića (u daljnjem tekstu "Politika") odnosi se na web stranicu i aplikaciju Hrvatskog zbora učitelja i trenera sportova na snijegu (u daljnjem tekstu "Zbor", "mi", "nas", ili "na&scaron;"). Kori&scaron;tenjem na&scaron;e web stranice <span><b>staviti link stranice</b> </span>i aplikacije, pristajete na upotrebu kolačića i drugih tehnologija kako je opisano u ovoj Politici.</p>
<p></p><br>
<p><b>1. &Scaron;to su kolačići?</b></p>
<p></p><br>
<p>Kolačići su male tekstualne datoteke koje web stranica ili aplikacija pohranjuju na uređaju korisnika pri posjetu određenom web mjestu ili aplikaciji. Kolačići omogućuju web stranici ili aplikaciji da prepozna uređaj korisnika i tijekom duljeg razdoblja pamti određene informacije kako bi pobolj&scaron;ala korisničko iskustvo.</p>
<p></p><br>
<p><b>2. Vrste kolačića koje koristimo</b></p>
<p></p><br>
<p>2.1. Obavezni kolačići: Ovi kolačići su neophodni za ispravno funkcioniranje web stranice i aplikacije, uvijek su aktivni. Bez njih, neke funkcionalnosti ne bi bile dostupne. Obavezni kolačići ne pohranjuju podatke koji bi vas mogli identificirati.<span class="Apple-converted-space">&nbsp;</span></p>
<p></p><br>
<p>2.2. Statistički kolačići: Koristimo statističke kolačiće kako bismo prikupljali informacije o načinu kori&scaron;tenja na&scaron;e web stranice i aplikacije u svrhu mjerenja i pobolj&scaron;anja na&scaron;e web stranice i aplikacije, mogu se isključiti.<span class="Apple-converted-space">&nbsp;</span></p>
<p></p><br>
<p><b>3. Upravljanje kolačićima</b></p>
<p></p><br>
<p>3.1. Većina web preglednika omogućuje vam upravljanje postavkama kolačića. Možete blokirati ili izbrisati kolačiće prema svojim željama. Opcije za upravljanje kolačićima obično se nalaze u postavkama preglednika pod "Privatnost" ili "Sigurnost".</p>
<p></p><br>
<p>3.2. Imajte na umu da blokiranje ili brisanje kolačića može utjecati na funkcionalnost na&scaron;e web stranice i aplikacije te vam može otežati ili onemogućiti određene značajke.</p>
<p></p><br>
<p><b>4. Ažuriranje Politike kolačića</b></p>
<p></p><br>
<p>4.1. Povremeno možemo ažurirati ovu Politiku kolačića kako bismo odražavali promjene u na&scaron;oj praksi upotrebe kolačića ili kako bismo se uskladili s relevantnim zakonima i standardima.</p>
<p></p><br>
<p>4.2. Datum posljednjeg ažuriranja bit će vidljiv na dnu ove Politike.</p>
<p></p><br>
<p><b>5. Kontakt informacije</b></p>
<p></p><br>
<p>5.1. Ako imate pitanja ili komentare o na&scaron;oj Politici kolačića, kontaktirajte na&scaron;eg povjerenika.<span class="Apple-converted-space">&nbsp;</span></p>
<p></p><br>
<p></p><br>
<p></p><br>
<p></p><br>
<p></p><br>
<p>Hrvatski zbor učitelja i trenera sportova na snijegu (HZUTS); adresa: Maksimirska 51a; tel.: 0038512399950</p>
<p></p><br>
<p>Povjerenik: Helena Gaube; e-mail: <a href="mailto:helenagaube5@gmail.com"><span>&#104;&#101;&#108;&#101;&#110;&#97;&#103;&#97;&#117;&#98;&#101;&#53;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;</span></a> ; tel.: 00385981973625</p>
<p></p><br>
<p>Posljednje ažuriranje: 13. studeni 2023.<span class="Apple-converted-space">&nbsp;</span></p>
<br>
</span>
            
       
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
  name: "politikakolacica",
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
  .osnovne-informacije {
    position: relative;
    letter-spacing: 3px;
    font-weight: 600;
  }
  .hrvatski-zbor-uitelja {
    font-weight: 500;
  }
  .hrvatski-zbor-uitelja-container {
    align-self: stretch;
    position: relative;
    font-size: 1.25rem;
  }
  .osnovne-informacije-parent {
    align-self: stretch;
    height: 10.63rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 3.13rem;
  }
  .osnovneinformacije-inner {
    position: absolute;
    width: 99.86%;
    top: 0rem;
    right: 0.03%;
    left: 0.03%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 10.88rem 15.38rem;
    box-sizing: border-box;
    background-image: url("/storage/demo/frame-451@3x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
    font-size: 2.5rem;
    color: #fff;
    overflow: hidden;
  }
  .g14-icon {
    position: absolute;
    height: 46.97%;
    width: 70.67%;
    top: 26.54%;
    right: 14.63%;
    bottom: 26.49%;
    left: 14.7%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    opacity: 0.1;
  }
  .o-hzuts-u {
    position: absolute;
    top: 0rem;
    left: 0rem;
    letter-spacing: 10px;
  }
  .lanovi-hzuts-a-su {
    font-weight: 300;
  }
  .ivsi {
    font-weight: 600;
  }
  .lanovi-hzuts-a-su-container1 {
    line-break: anywhere;
    width: 100%;
  }
  .lanovi-hzuts-a-su-container {
    position: absolute;
    top: 5.44rem;
    left: 0rem;
    font-size: 1.5rem;
    text-align: left;
    display: flex;
    align-items: center;
    width: 39.19rem;
  }
  .frame-child {
    position: absolute;
    top: 0rem;
    left: 37.19rem;
    width: 39.25rem;
    height: 29.44rem;
    object-fit: cover;
  }
  .o-hzuts-u-parent {
    position: absolute;
    width: 86.43%;
    top: 8.38rem;
    right: 6.78%;
    left: 6.78%;
    height: 100%;
  }
  .hzuts-i-podruni {
    position: absolute;
    top: 0rem;
    left: 33.44rem;
    letter-spacing: 10px;
  }
  .hzuts-se-sastoji {
    margin: 0;
    font-weight: 300;
  }
  .zuts-istra {
    margin-bottom: false;
  }
  .zuts-istra-zuts-ogulin-zut {
    margin: 0;
    padding-left: 1.33rem;
  }
  .hzuts-se-sastoji-container {
    position: absolute;
    top: 5.44rem;
    left: 33.44rem;
    font-size: inherit;
    text-align: left;
    display: flex;
    align-items: center;
    width: 43rem;
  }
  .frame-item {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 26.8rem;
    height: 34.67rem;
    object-fit: cover;
  }
  .saznaj-vie {
    position: relative;
    font-weight: 600;
  }
  .vector-icon {
    position: relative;
    width: 0.63rem;
    height: 1.13rem;
  }
  .saznaj-vie-parent {
    position: absolute;
    top: 20rem;
    left: 33.44rem;
    width: 9.56rem;
    height: 1.81rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-end;
    gap: 0.88rem;
    font-size: 1.5rem;
    color: #03a9f4;
  }
  .hzuts-i-podruni-zborovi-parent {
    position: absolute;
    width: 86.43%;
    top: 42.25rem;
    right: 6.78%;
    left: 6.78%;
    height: 34.67rem;
  }
  .hzuts-i-meunarodne {
    position: absolute;
    top: 0.26rem;
    left: 0rem;
    letter-spacing: 10px;
    display: flex;
    align-items: center;
    width: 43rem;
  }
  .hzuts-je-lan-meunarodnih-org {
    margin: 0;
  }
  .isia2 {
    text-decoration: underline;
  }
  .span {
    font-weight: 600;
    font-family: Inter;
  }
  .international-ski-instructors {
    font-weight: 300;
    font-family: Inter;
  }
  .internationaler-verband-des {
    color: #000;
  }
  .od-1995g {
    color: #03a9f4;
  }
  .hzuts-je-lan-container {
    position: absolute;
    top: 8.14rem;
    left: 0rem;
    font-size: inherit;
    display: flex;
    align-items: center;
    width: 43rem;
  }
  .frame-inner {
    position: absolute;
    top: 0rem;
    left: 42.74rem;
    width: 33.67rem;
    height: 38.42rem;
    object-fit: cover;
  }
  .saznaj-vie-group {
    position: absolute;
    top: 24.51rem;
    left: 0rem;
    width: 9.56rem;
    height: 1.81rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-end;
    gap: 0.88rem;
    text-align: center;
    font-size: 1.5rem;
    color: #03a9f4;
  }
  .hzuts-i-meunarodne-organizaci-parent {
    position: absolute;
    width: 86.4%;
    top: 81.3rem;
    right: 6.82%;
    left: 6.78%;
    height: 38.42rem;
    text-align: left;
  }

  .g14-parent {
    position: absolute;
    height: 80%;
    width: 98.26%;
    top: 18.26%;
    right: 0.87%;
    bottom: 2.5%;
    left: 0.87%;
    background-color: #fff;
  }
  .predsjedniklikvidator-dag-mo-container {
    position: relative;
  }
  .predsjedniklikvidator-dag-mo-parent {
    position: absolute;
    top: 9.38rem;
    left: 6.31rem;
    width: 39.38rem;
    height: 15.38rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1.88rem;
  }
  .vodstvo-hzuts-a {
    position: absolute;
    top: 3.81rem;
    left: 6.31rem;
    letter-spacing: 10px;
    text-align: center;
  }
  .dag-modri-predstavnik-pz-nik {
    margin: 0;
    padding-left: 1.34rem;
    color: #03a9f4;
  }
  .lanovi-izvrnog-odbora-container {
    position: absolute;
    top: 29.81rem;
    left: 6.31rem;
    font-size: inherit;
    font-family: inherit;
  }
  .line-icon {
    position: absolute;
    top: 27.22rem;
    left: calc(50% - 600.5px);
    width: 75rem;
    height: 0.13rem;
  }
  .predsjednik-dario-maravi {
    position: absolute;
    top: 2.56rem;
    left: 3.88rem;
  }
  .nastavna-komisija {
    position: absolute;
    top: 0rem;
    left: 0rem;
  }
  .predsjednik-dario-maravi-parent {
    position: relative;
    width: 29.06rem;
    height: 5rem;
  }
  .predsjednik-edin-sara-parent {
    position: relative;
    width: 26.13rem;
    height: 5rem;
  }
  .predsjednik-petar-thur {
    position: absolute;
    top: 3.06rem;
    left: 3.88rem;
  }
  .interski-komisija-parent {
    position: relative;
    width: 26rem;
    height: 5.5rem;
  }
  .neven-putar-pero-miheli-pavl {
    margin: 0;
    padding-left: 1.34rem;
  }
  .nadzorni-odbor-neven-container {
    position: absolute;
    top: 7.38rem;
    left: 3.88rem;
    font-size: inherit;
    font-family: inherit;
  }
  .stegovni-sud-tomislav-container {
    position: absolute;
    top: 19rem;
    left: 3.88rem;
    font-size: inherit;
    font-family: inherit;
  }
  .predsjednik-dario-ali-parent {
    position: relative;
    width: 26.06rem;
    height: 28.75rem;
  }
  .frame-group {
    position: absolute;
    top: 67.06rem;
    left: 6.31rem;
    width: 29.06rem;
    height: 49.88rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1.88rem;
  }
  .g14-icon1 {
    position: absolute;
    height: 51.1%;
    width: 70.67%;
    top: 35.8%;
    right: 14.63%;
    bottom: 23.1%;
    left: 14.7%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    opacity: 0.1;
  }
  .frame-parent {
    position: absolute;
    height: 41.96%;
    width: 98.26%;
    top: 68.04%;
    right: 0.87%;
    bottom: 0%;
    left: 0.87%;
    background-color: #fff;
    text-align: left;
  }
  .osnovneinformacije {
    position: relative;
    background-color: #f8f7f5;
    width: 100%;
    height: 181.5rem;
    overflow: hidden;
    text-align: center;
    font-size: 2rem;
    color: #000;
    font-family: Inter;
  }



  .left {
  text-align: left;
  font-size: large;
}
</style>

