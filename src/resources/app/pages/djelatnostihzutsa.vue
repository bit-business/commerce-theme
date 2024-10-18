<template>
    <div class="djelatnosti-hzuts-a">
      <Head :title="$page.props.name" />
    <div class="djelatnosti-hzuts-a-inner">
      <div class="djelatnosti-hzuts-a-wrapper">
        <div class="djelatnosti-hzuts-a1">{{ $t('djelatnosti-hzuts-a') }}</div>
      </div>
    </div>
    <div class="djelatnosti-hzuts-a-child">
      <div class="hzuts-sudjeluje-u-razvoju-i-pr-wrapper">
        <div class="hzuts-sudjeluje-u-container">
          <p class="hzuts-sudjeluje-u">
            {{ $t('hzuts-sudjeluje-u-razvoju-i-promicanju-sportova-na-snijegu-osposobljavanju-skolovanju-doskolovanju-i-obuci-kadrova-i-osoba-koje-se-bave-sportovima-na-snijegu-hzuts-suraduje-s-hrvatskim-olimpijskim-odborom-hrvatskim-skijaskim-savezom-fakul-tetima-skolama-zavodima-i-drugim-subjektima-s-podrucja-bavljenja-sportovima-na-snijegu-vazan-cilj-hzuts-a-takoder-je-i-ostvarivanje-medunarodnih-veza-i-suradnje-s-meduna-rodnim-sportskim-udrugama-i-organizacijama') }}
          </p>
          <p class="hzuts-sudjeluje-u">&nbsp;</p>
          <p class="hzuts-sudjeluje-u">
            {{ $t('statutom-hrvatskog-skijaskog-saveza-u-kojem-hzuts-ima-status-punopravnog-clana-hzuts-u-je-povjerena-skrb-oko-skolovanja-i-izobrazbe-ucitelja-i-trenera-sportova-na-snijegu-u-hrvatskoj-te-je-posebno-ovlasten-za-vrsenje-kontrole-posjedovanja-potrebne-kvalifikacije-za-obavljanje-poslova-u-poducavanju-osoba-na-hrvatskim-i-inozemnim-skijalistima') }}
          </p>
          <p class="hzuts-sudjeluje-u">
            {{ $t('temeljem-tih-ovlasti-hzuts-tijekom-skijaske-sezone-organi-zira-strucne-skupove-seminare-za-obrazovanje-kadrova-u-sportovima-na-snijegu-u-smislu-pripreme-stjecanja-licence-te-produzivanja-licence-voditelja-ucitelja-i-trenera-sportova-na-snijegu-osim-toga-hzuts-organizira-i-kampove-za-pri-premu-buducih-ucitelja-sportova-na-snijegu-te-kampove-za-usavrsavanje-tehnike') }}
          </p>
          <p class="hzuts-sudjeluje-u">&nbsp;</p>
          <p class="hzuts-sudjeluje-u">
            {{ $t('hzuts-zajedno-s-clanovima-svoje-nastavne-komisije-kon-tinuirano-radi-na-usavrsavanju-tehnike-poducavanja-pri-cemu-se-najveci-naglasak-stavlja-na-pracenje-svjetskih-trendova-i-metodologije-poducavanja') }}
          </p>
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
  name: "djelatnostihzutsa",
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
  .djelatnosti-hzuts-a1 {
    position: relative;
    letter-spacing: 3px;
    font-weight: 600;
  }
  .djelatnosti-hzuts-a-wrapper {
    align-self: stretch;
    height: 30rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-image: url("/storage/slike/djelatnosti/djelatnostinaslovna.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
  }
  .djelatnosti-hzuts-a-inner {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 3.75rem 0rem;
  }
  .hzuts-sudjeluje-u {
    margin: 0;
  }
  .hzuts-sudjeluje-u-container {
    align-self: stretch;
    position: relative;
    font-weight: 300;
  }
  .hzuts-sudjeluje-u-razvoju-i-pr-wrapper {
    align-self: stretch;
    border-radius: 20px;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
    padding: 3.88rem 2.88rem;
  }
  .djelatnosti-hzuts-a-child {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
    padding: 0rem 1.88rem;
    text-align: left;
    font-size: 1.5rem;
    color: #000;
  }
  .djelatnosti-hzuts-a {
    position: relative;
    background-color: #f8f7f5;
    width: 100%;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
    padding: 0rem 0rem 2.88rem;
    box-sizing: border-box;
    text-align: center;
    font-size: 2.5rem;
    color: #fff;
    font-family: Inter;
  }

  @media screen and (max-width: 600px) {
    .djelatnosti-hzuts-a1 {
      font-size: 1.75rem;
    }

    .hzuts-sudjeluje-u-container {
      font-size: 1.06rem;
    }
  }
  @media screen and (max-width: 460px) {
    .djelatnosti-hzuts-a1 {
      font-size: 1.42rem;
    }

    .djelatnosti-hzuts-a-inner {
      padding-left: 0rem;
      padding-right: 0rem;
      box-sizing: border-box;
    }

    .hzuts-sudjeluje-u-container {
      font-size: 0.94rem;
    }

    .hzuts-sudjeluje-u-razvoju-i-pr-wrapper {
      padding-left: 1.25rem;
      padding-right: 1.25rem;
      box-sizing: border-box;
    }
  }
</style>