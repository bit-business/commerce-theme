  
  <template>
  <div class="hzuts-podrucni-zborovi-screen-">
    <Head :title="$page.props.name" />
    <div class="slikanavrhupodrucnihzborova">
      <div class="podruni-zborovi">PODRUČNI ZBOROVI</div>
    </div>
    <div class="podrucnizbor1">
      <div class="frame-parent">
        <div class="zuts-istra-parent">
          <b class="zuts-istra">{{ zborovi && zborovi[2] ? zborovi[2].ime : '' }}</b>
          <img class="frame-child" alt="" src="/storage/slike/podrucnizborovi/line-32.svg" />
        </div>
        <div class="tekstovi1">
          <div class="frame">
            <div class="predsjednik">Predsjednik:</div>
            <b class="dubravko-grgi">{{ zborovi && zborovi[2] ? zborovi[2].predsjednik : '' }}</b>
          </div>
          <div class="frame1">
            <div class="predsjednik">Tajnik:</div>
            <b class="predsjednik">{{ zborovi && zborovi[2] ? zborovi[2].tajnik : '' }}</b>
          </div>
          <div class="adresa-parent">
            <div class="adresa">Adresa:</div>
            <a class="ulica-grada-vukovara"
              >{{ zborovi && zborovi[2] ? zborovi[2].depaddress : '' }}</a
            >
          </div>
        </div>
      </div>
      <div class="frame-group">
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/phone-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[2] ? zborovi[2].depphone : '' }}</div>
        </div>
        <div class="mail-icon-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/mail-icon.svg" />
          <div class="predsjednik">
    <a :href="'mailto:' + (zborovi && zborovi[2] ? zborovi[2].depemail : '')">{{ zborovi && zborovi[2] ? zborovi[2].depemail : '' }}</a>
</div>

        </div>
        <div class="layout-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/layout-1.svg" />
          <a 
   :href="zborovi && zborovi[2] && zborovi[2].depwww ? (zborovi[2].depwww.startsWith('https') ? zborovi[2].depwww : 'https://' + zborovi[2].depwww) : '#'" 
   target="_blank" 
   class="wwwzuts-istrahr">
   {{ zborovi && zborovi[2] && zborovi[2].depwww ? zborovi[2].depwww : '' }}
</a>

        </div>
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/printer-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[2] ? zborovi[2].depfax : '' }}</div>
        </div>
        <div class="dollar-sign-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/dollarsign-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[2] ? zborovi[2].clanarina : '' }}</div>
        </div>
        <div class="credit-card-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/creditcard-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[2] ? zborovi[2].ziroracun : '' }}</div>
        </div>
      </div>
      <div class="slikaframe">
        <div class="frame-container">
          <div class="frame2" />
          <img class="slika1zbor-icon" alt="" src="/storage/slike/podrucnizborovi/undefined8.png" />
          <b class="b">1</b>
        </div>
        <div class="frame3">
          <iframe class="map-group" src="https://google.maps/nekiurl" />
        </div>
      </div>
    </div>
    <div class="podrucnizbor2">
      <div class="slika2zbor-parent">
        <img class="slika2zbor-icon" alt="" src="/storage/slike/podrucnizborovi/undefined7.png" />
        <div class="frame4">
          <b class="predsjednik">2</b>
        </div>
        <div class="frame5">
          <iframe class="map-group" src="http://google.maps/nekiurl" />
        </div>
      </div>
      <div class="frame-div">
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/phone-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[3] ? zborovi[3].depphone: '' }}</div>
        </div>
        <div class="mail-icon-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/mail-icon.svg" />
          <div class="predsjednik">
    <a :href="'mailto:' + (zborovi && zborovi[3] ? zborovi[3].depemail : '')">{{ zborovi && zborovi[3] ? zborovi[3].depemail : '' }}</a>
</div>
        </div>
        <div class="layout-1-parentveci">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/layout-1.svg" />
          <a 
   :href="zborovi && zborovi[3] && zborovi[3].depwww ? (zborovi[3].depwww.startsWith('https') ? zborovi[3].depwww : 'https://' + zborovi[3].depwww) : '#'" 
   target="_blank" 
   class="wwwzuts-istrahr">
   {{ zborovi && zborovi[3] && zborovi[3].depwww ? zborovi[3].depwww : '' }}
</a>
        </div>
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/printer-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[3] ? zborovi[3].depfax: '' }}</div>
        </div>
        <div class="dollar-sign-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/dollarsign-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[3] ? zborovi[3].clanarina: '' }}</div>
        </div>
        <div class="credit-card-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/creditcard-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[3] ? zborovi[3].ziroracun: '' }}</div>
        </div>
      </div>
      <div class="frame-parent1">
        <div class="frame6">
          <b class="zutss-nik-krmar">{{ zborovi && zborovi[3] ? zborovi[3].ime : '' }}</b>
          <img class="frame-child" alt="" src="/storage/slike/podrucnizborovi/line-32.svg" />
        </div>
        <div class="frame-parent2">
          <div class="frame7">
            <div class="predsjednik">Predsjednik:</div>
            <b class="predsjednik">{{ zborovi && zborovi[3] ? zborovi[3].predsjednik : '' }}</b>
          </div>
          <div class="frame8">
            <div class="predsjednik">Tajnik:</div>
            <b class="predsjednik">{{ zborovi && zborovi[3] ? zborovi[3].tajnik : '' }}</b>
          </div>
          <div class="adresa2">
            <div class="adresa1">Adresa:</div>
            <a class="ulica-grada-vukovara1"
              >{{ zborovi && zborovi[3] ? zborovi[3].depaddress : '' }}</a
            >
          </div>
        </div>
      </div>
    </div>
    <div class="podrucnizbor3">
      <div class="frame-parent3">
        <div class="zuts-ogulin-parent">
          <b class="zuts-ogulin">{{ zborovi && zborovi[4] ? zborovi[4].ime : '' }}</b>
          <img class="frame-child" alt="" src="/storage/slike/podrucnizborovi/line-32.svg" />
        </div>
        <div class="adresa2-parent">
          <div class="adresa21">
            <div class="adresa1">Adresa:</div>
            <a class="ulica-grada-vukovara2"
              >{{ zborovi && zborovi[4] ? zborovi[4].depaddress : '' }}</a
            >
          </div>
          <div class="frame9">
            <div class="predsjednik">Predsjednik:</div>
            <b class="predsjednik">{{ zborovi && zborovi[4] ? zborovi[4].predsjednik : '' }}</b>
          </div>
          <div class="frame10">
            <div class="predsjednik">Tajnik:</div>
            <b class="predsjednik">{{ zborovi && zborovi[4] ? zborovi[4].tajnik : '' }}</b>
          </div>
        </div>
      </div>
      <div class="frame-group">
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/phone-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[4] ? zborovi[4].depphone : '' }}</div>
        </div>
        <div class="mail-icon-container">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/mail-icon.svg" />
          <div class="predsjednik">
    <a :href="'mailto:' + (zborovi && zborovi[4] ? zborovi[4].depemail : '')">{{ zborovi && zborovi[4] ? zborovi[4].depemail : '' }}</a>
</div>
        </div>
        <div class="layout-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/layout-1.svg" />
          <a 
   :href="zborovi && zborovi[4] && zborovi[4].depwww ? (zborovi[4].depwww.startsWith('https') ? zborovi[4].depwww : 'https://' + zborovi[4].depwww) : '#'" 
   target="_blank" 
   class="wwwzuts-istrahr">
   {{ zborovi && zborovi[4] && zborovi[4].depwww ? zborovi[4].depwww : '' }}
</a>
        </div>
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/printer-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[4] ? zborovi[4].depfax : '' }}</div>
        </div>
        <div class="dollar-sign-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/dollarsign-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[4] ? zborovi[4].clanarina : '' }}</div>
        </div>
        <div class="credit-card-1-container">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/creditcard-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[4] ? zborovi[4].ziroracun : '' }}</div>
        </div>
      </div>
      <div class="slika3zbor-parent">
        <img class="slika3zbor-icon" alt="" src="/storage/slike/podrucnizborovi/undefined7.png" />
        <div class="frame11">
          <b class="predsjednik">3</b>
        </div>
        <div class="frame12">
          <iframe class="map-group" />
        </div>
      </div>
    </div>
    <div class="podrucnizbor4">
      <div class="slika4zbor-parent">
        <img class="slika2zbor-icon" alt="" src="/storage/slike/podrucnizborovi/undefined8.png" />
        <div class="frame13">
          <b class="predsjednik">4</b>
        </div>
        <div class="frame5">
          <iframe class="map-group" />
        </div>
      </div>
      <div class="frame-group">
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/phone-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[5] ? zborovi[5].depphone : '' }}</div>
        </div>
        <div class="mail-icon-container">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/mail-icon.svg" />
          <div class="predsjednik">
    <a :href="'mailto:' + (zborovi && zborovi[5] ? zborovi[5].depemail : '')">{{ zborovi && zborovi[5] ? zborovi[5].depemail : '' }}</a>
</div>
        </div>
        <div class="layout-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/layout-1.svg" />
          <a 
   :href="zborovi && zborovi[5] && zborovi[5].depwww ? (zborovi[5].depwww.startsWith('https') ? zborovi[5].depwww : 'https://' + zborovi[5].depwww) : '#'" 
   target="_blank" 
   class="wwwzuts-istrahr">
   {{ zborovi && zborovi[5] && zborovi[5].depwww ? zborovi[5].depwww : '' }}
</a>
        </div>
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/printer-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[5] ? zborovi[5].depfax : '' }}</div>
        </div>
        <div class="dollar-sign-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/dollarsign-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[5] ? zborovi[5].clanarina : '' }}</div>
        </div>
        <div class="credit-card-1-container">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/creditcard-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[5] ? zborovi[5].ziroracun : '' }}</div>
        </div>
      </div>
      <div class="frame-parent6">
        <div class="zuts-primorsko-goranske-upani-parent">
          <b class="zuts-primorsko-goranske-upani"
            >{{ zborovi && zborovi[5] ? zborovi[5].ime : '' }}</b
          >
          <img class="frame-child" alt="" src="/storage/slike/podrucnizborovi/line-32.svg" />
        </div>
        <div class="adresa2-group">
          <div class="adresa22">
            <div class="adresa1">Adresa:</div>
            <a class="ulica-grada-vukovara1"
              >{{ zborovi && zborovi[5] ? zborovi[5].depaddress : '' }}</a
            >
          </div>
          <div class="frame15">
            <div class="predsjednik">Predsjednik:</div>
            <b class="predsjednik">{{ zborovi && zborovi[5] ? zborovi[5].predsjednik : '' }}</b>
          </div>
          <div class="frame16">
            <div class="predsjednik">Tajnik:</div>
            <b class="predsjednik">{{ zborovi && zborovi[5] ? zborovi[5].tajnik : '' }}</b>
          </div>
        </div>
      </div>
    </div>
    <div class="podrucnizbor5">
      <div class="frame-parent7">
        <div class="zuts-sjeverozapadna-hrvatska-parent">
          <b class="zuts-sjeverozapadna-hrvatska"
            >{{ zborovi && zborovi[6] ? zborovi[6].ime : '' }}</b
          >
          <img class="frame-child" alt="" src="/storage/slike/podrucnizborovi/line-32.svg" />
        </div>
        <div class="adresa2-container">
          <div class="adresa23">
            <div class="adresa1">Adresa:</div>
            <a class="ulica-grada-vukovara2"
              >{{ zborovi && zborovi[6] ? zborovi[6].depaddress : '' }}</a
            >
          </div>
          <div class="frame17">
            <div class="predsjednik">Predsjednik:</div>
            <b class="predsjednik">{{ zborovi && zborovi[6] ? zborovi[6].predsjednik : '' }}</b>
          </div>
          <div class="frame18">
            <div class="predsjednik">Tajnik:</div>
            <b class="predsjednik">{{ zborovi && zborovi[6] ? zborovi[6].tajnik : '' }}</b>
          </div>
        </div>
      </div>
      <div class="frame-group">
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/phone-11.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[6] ? zborovi[6].depphone : '' }}</div>
        </div>
        <div class="mail-icon-container">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/mail-icon1.svg" />
          <div class="predsjednik">
    <a :href="'mailto:' + (zborovi && zborovi[6] ? zborovi[6].depemail : '')">{{ zborovi && zborovi[6] ? zborovi[6].depemail : '' }}</a>
</div>
        </div>
        <div class="layout-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/layout-11.svg" />
          <a 
   :href="zborovi && zborovi[6] && zborovi[6].depwww ? (zborovi[6].depwww.startsWith('https') ? zborovi[6].depwww : 'https://' + zborovi[6].depwww) : '#'" 
   target="_blank" 
   class="wwwzuts-istrahr">
   {{ zborovi && zborovi[6] && zborovi[6].depwww ? zborovi[6].depwww : '' }}
</a>
        </div>
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/printer-11.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[6] ? zborovi[6].depfax : '' }}</div>
        </div>
        <div class="dollar-sign-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/dollarsign-11.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[6] ? zborovi[6].clanarina : '' }}</div>
        </div>
        <div class="credit-card-1-container">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/creditcard-11.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[6] ? zborovi[6].ziroracun : '' }}</div>
        </div>
      </div>
      <div class="slika5zbor-parent">
        <img class="slika5zbor-icon" alt="" src="/storage/slike/podrucnizborovi/undefined7.png" />
        <div class="frame19">
          <b class="predsjednik">5</b>
        </div>
        <div class="frame20">
          <iframe class="map-group" />
        </div>
      </div>
    </div>
    <div class="podrucnizbor4">
      <div class="slika6zbor-parent">
        <img class="slika2zbor-icon" alt="" src="/storage/slike/podrucnizborovi/undefined8.png" />
        <div class="frame21">
          <b class="predsjednik">6</b>
        </div>
        <div class="frame5">
          <iframe class="map-group" />
        </div>
      </div>
      <div class="frame-group">
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/phone-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[7] ? zborovi[7].depphone : '' }}</div>
        </div>
        <div class="mail-icon-container">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/mail-icon.svg" />
          <div class="predsjednik">
    <a :href="'mailto:' + (zborovi && zborovi[7] ? zborovi[7].depemail : '')">{{ zborovi && zborovi[7] ? zborovi[7].depemail : '' }}</a>
</div>
        </div>
        <div class="layout-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/layout-1.svg" />
          <a 
   :href="zborovi && zborovi[7] && zborovi[7].depwww ? (zborovi[7].depwww.startsWith('https') ? zborovi[7].depwww : 'https://' + zborovi[7].depwww) : '#'" 
   target="_blank" 
   class="wwwzuts-istrahr">
   {{ zborovi && zborovi[7] && zborovi[7].depwww ? zborovi[7].depwww : '' }}
</a>
        </div>
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/printer-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[7] ? zborovi[7].depfax : '' }}</div>
        </div>
        <div class="dollar-sign-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/dollarsign-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[7] ? zborovi[7].clanarina : '' }}</div>
        </div>
        <div class="credit-card-1-container">
          <img class="phone-1-icon" alt="" src="/storage/slike/podrucnizborovi/creditcard-1.svg" />
          <div class="predsjednik">{{ zborovi && zborovi[7] ? zborovi[7].ziroracun : '' }}</div>
        </div>
      </div>
      <div class="frame-parent10">
        <div class="zuts-slavonije-i-baranje-parent">
          <b class="zuts-slavonije-i">{{ zborovi && zborovi[7] ? zborovi[7].ime : '' }}</b>
          <img class="frame-child" alt="" src="/storage/slike/podrucnizborovi/line-32.svg" />
        </div>
        <div class="frame-parent11">
          <div class="frame23">
            <div class="predsjednik">Predsjednik:</div>
            <b class="predsjednik">{{ zborovi && zborovi[7] ? zborovi[7].predsjednik : '' }}</b>
          </div>
          <div class="frame24">
            <div class="tajnik5">Tajnik:</div>
            <b class="mirna-rajle-broanac">{{ zborovi && zborovi[7] ? zborovi[7].tajnik : '' }}</b>
          </div>
          <div class="adresa6">
            <div class="adresa1">Adresa:</div>
            <a class="ulica-grada-vukovara5"
              >{{ zborovi && zborovi[7] ? zborovi[7].depaddress : '' }}</a
            >
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
  name: "podrucnizborovi",
  layout: [appLayout, galerijaLayout],
  components: {
    Link,
    Head
  },
  data() {
    return {
      zborovi: [],

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
    this.ucitajPodrucnizborovi();
  
  },


  methods: {

    async ucitajPodrucnizborovi() {
    this.$api.skijasiUser
    .browsetbldep()
    .then((response) => {
      this.zborovi = response;
    })
    .catch((error) => {
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
  .podruni-zborovi {
    position: relative;
    letter-spacing: 3px;
    font-weight: 600;
  }
  .slikanavrhupodrucnihzborova {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    padding: 15rem 31rem;
    background-image: url("/storage/slike/podrucnizborovi/slikanavrhupodrucnihzborova@3x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
    font-size: 2.5rem;
    color: #fff;
    white-space: nowrap;
  }
  .zuts-istra {
    position: relative;
    letter-spacing: 3px;
    display: flex;
    align-items: center;
    width: 21.31rem;
  }
  .frame-child {
    position: relative;
    width: 18.75rem;
    height: 0.13rem;
  }
  .zuts-istra-parent {
    position: absolute;
    top: 0.13rem;
    left: 0rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 0.63rem;
  }
  .predsjednik {
    position: relative;
 
  }
  .dubravko-grgi {
    position: relative;
    text-align: left;
  }
  .frame {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 0.94rem;
  }
  .frame1 {
    align-self: stretch;
    height: 1.19rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 3.56rem;
  }
  .adresa {
    align-self: stretch;
    position: relative;
    display: inline-block;
    width: 3.63rem;
    flex-shrink: 0;
  }
  .ulica-grada-vukovara {
    text-decoration: none;
    position: relative;
    font-weight: 700;
    color: inherit;
    text-align: left;
    display: inline-block;
    width: 13.38rem;
    height: 3rem;
    flex-shrink: 0;
  }
  .adresa-parent {
    align-self: stretch;
    height: 3rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 3rem;
  }
  .tekstovi1 {
    position: absolute;
    top: 3.81rem;
    left: 0rem;
    width: 18rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 0.63rem;
    text-align: center;
    font-size: 1rem;
    color: #000;
  }
  .frame-parent {
    position: relative;
    width: 18rem;
    height: 10.5rem;
    text-align: left;
  }
  .phone-1-icon {
    position: relative;
    width: 1.5rem;
    height: 1.5rem;
    overflow: hidden;
    flex-shrink: 0;
  }
  .phone-1-parent {
    width: 12.56rem;
    height: 1.5rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 1.25rem;
  }
  .mail-icon-parent {
    align-self: stretch;
    height: 1.5rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 1.13rem;
  }
  .wwwzuts-istrahr {
    text-decoration: none;
    position: relative;
    color: inherit;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 8.44rem;
    height: 1.19rem;
    flex-shrink: 0;
  }
  .layout-1-parent {
    width: 11.06rem;
    height: 1.5rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 1.13rem;
    color: #03a9f4;
  }

  .layout-1-parentveci {
    width: 16.06rem;
    height: 1.5rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 1.93rem;
    color: #03a9f4;
    white-space: nowrap;
  }
  .dollar-sign-1-parent {
    width: 6.25rem;
    height: 1.5rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 1.25rem;
  }
  .credit-card-1-parent {
    align-self: stretch;
    height: 1.5rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 1.19rem;
  }
  .frame-group {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 3.75rem 0rem;
    gap: 1.25rem;
    font-size: 1rem;
    color: #000;
  }
  .frame2 {
    position: relative;
    width: 9.19rem;
    height: 23.81rem;
    z-index: 0;
  }
  .slika1zbor-icon {
    position: relative;
    border-radius: 10px;
    width: 25rem;
    height: 25rem;
    object-fit: cover;
    z-index: 1;
  }
  .b {
    position: absolute;
    margin: 0 !important;
    top: 0.56rem;
    left: 0rem;
    display: inline-block;
    z-index: 2;
  }
  .frame-container {
    width: 30.25rem;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: space-between;
    position: relative;
    z-index: 0;
  }
  .map-group {
    border: none;
    position: relative;
    width: 3.75rem;
    height: 3.75rem;
  }
  .frame3 {
    margin: 0 !important;
    position: absolute;
    top: 0rem;
    left: 25rem;
    width: 3.75rem;
    height: 23.31rem;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
    z-index: 1;
  }
  .slikaframe {
    width: 30.25rem;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: space-between;
    position: relative;
    font-size: 18.75rem;
    color: #03a9f4;
  }
  .podrucnizbor1 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: space-between;
    padding: 1.5rem 1.63rem;
  }
  .slika2zbor-icon {
    position: absolute;
    top: 0rem;
    left: 0rem;
    border-radius: 10px;
    width: 25rem;
    height: 25rem;
    object-fit: cover;
  }
  .frame4 {
    position: absolute;
    top: 1.13rem;
    left: 0rem;
    width: 31.69rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
  }
  .frame5 {
    position: absolute;
    top: 19.88rem;
    left: 0rem;
    width: 5.56rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
  }
  .slika2zbor-parent {
    position: relative;
    width: 32.13rem;
    height: 25rem;
  }
  .wwwzuts-istrahr1 {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 8.44rem;
    height: 1.19rem;
    flex-shrink: 0;
  }
  .frame-div {
    height: 22.75rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 4.38rem 0rem;
    box-sizing: border-box;
    gap: 1.25rem;
    font-size: 1rem;
    color: #000;
  }
  .zutss-nik-krmar {
    position: relative;
    letter-spacing: 3px;
    display: flex;
    align-items: center;
    width: 23.75rem;
  }
  .frame6 {
    position: absolute;
    top: 0rem;
    left: 0rem;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: flex-start;
    gap: 0.63rem;
  }
  .frame7 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-end;
    gap: 4.81rem;
  }
  .frame8 {

    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-end;
    gap: 4rem;
    
  }
  .adresa1 {
    position: relative;
    display: inline-block;
    width: 3.63rem;
    height: 1.19rem;
    flex-shrink: 0;
  }
  .ulica-grada-vukovara1 {
    text-decoration: none;
    position: relative;
    font-weight: 700;
    color: inherit;
    text-align: right;
    display: inline-block;
    width: 13.38rem;
    height: 3rem;
    flex-shrink: 0;
    margin-left: -0.69rem;
  }
  .adresa2 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .frame-parent2 {
    position: absolute;
    top: 3.88rem;
    left: 6.34rem;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
    gap: 0.63rem;
    text-align: center;
    font-size: 1rem;
    color: #000;
  }
  .frame-parent1 {
    position: relative;
    width: 23.75rem;
    height: 10.5rem;
    text-align: right;
    font-size: 2rem;
    color: #21231e;
  }
  .podrucnizbor2 {
    align-self: stretch;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: space-between;
    padding: 1.5rem 1.63rem;
    font-size: 18.75rem;
    color: #03a9f4;
  }
  .zuts-ogulin {
    position: relative;
    letter-spacing: 3px;
    display: flex;
    align-items: center;
    width: 20.81rem;
  }
  .zuts-ogulin-parent {
    position: absolute;
    top: 0rem;
    left: 0rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 0.56rem;
  }
  .ulica-grada-vukovara2 {
    text-decoration: none;
    position: relative;
    font-weight: 700;
    color: inherit;
    text-align: left;
    display: inline-block;
    width: 13.38rem;
    height: 3rem;
    flex-shrink: 0;
  }
  .adresa21 {
    position: absolute;
    top: 3.63rem;
    left: 0.06rem;
    width: 16.31rem;
    height: 1.19rem;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 3.36rem;

  }
  .frame9 {
    position: absolute;
    top: 0rem;
    left: 0.03rem;
    width: 14.69rem;
    height: 1.19rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 1.25rem;
  }
  .frame10 {
    position: absolute;
    top: 1.81rem;
    left: 0.03rem;
    width: 13.94rem;
    height: 1.19rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 4rem;
  }
  .adresa2-parent {
    position: absolute;
    top: 3.63rem;
    left: 0rem;
    width: 19.49rem;
    height: 6rem;
    text-align: center;
    font-size: 1rem;
    color: #000;
  }
  .frame-parent3 {
    position: relative;
    width: 20.81rem;
    height: 7.25rem;
    text-align: left;
  }
  .mail-icon-container {
    width: 15rem;
    height: 1.5rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 1.13rem;
  }
  .credit-card-1-container {
    width: 13.38rem;
    height: 1.5rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 1.19rem;
  }
  .slika3zbor-icon {
    position: absolute;
    top: 0rem;
    left: 6.81rem;
    border-radius: 10px;
    width: 25rem;
    height: 25rem;
    object-fit: cover;
  }
  .frame11 {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 12.38rem;
    height: 23.31rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
  }
  .frame12 {
    position: absolute;
    top: 0rem;
    left: 26.63rem;
    width: 3.75rem;
    height: 23.31rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
  }
  .slika3zbor-parent {
    position: relative;
    width: 31.81rem;
    height: 25rem;
    font-size: 18.75rem;
    color: #03a9f4;
  }
  .podrucnizbor3 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: space-between;
    padding: 1.88rem 1.63rem;
  }
  .frame13 {
    position: absolute;
    top: 1.13rem;
    left: 0rem;
    width: 32.13rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
  }
  .slika4zbor-parent {
    position: relative;
    width: 32.13rem;
    height: 25rem;
  }
  .zuts-primorsko-goranske-upani {
    position: relative;
    letter-spacing: 3px;
    display: flex;
    align-items: center;
    width: 21.25rem;
  }
  .zuts-primorsko-goranske-upani-parent {
    position: absolute;
    top: 0rem;
    left: -0.06rem;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: flex-start;
    gap: 0.63rem;
  }
  .adresa22 {
    position: absolute;
    top: 3.63rem;
    left: 0.06rem;
    width: 16.31rem;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .frame15 {
    position: absolute;
    top: 0rem;
    left: 0.06rem;
    height: 1.19rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 3rem;
  }
  .frame16 {
    position: absolute;
    top: 1.81rem;
    left: 0rem;
    height: 1.19rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 6.88rem;
  }
  .adresa2-group {
    position: absolute;
    top: 6.56rem;
    left: 4.88rem;
    width: 16.38rem;
    height: 6.63rem;
    text-align: center;
    font-size: 1rem;
    color: #000;
  }
  .frame-parent6 {
    position: relative;
    width: 21.25rem;
    height: 10.94rem;
    text-align: right;
    font-size: 2rem;
    color: #21231e;
  }
  .podrucnizbor4 {
    align-self: stretch;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: space-between;
    padding: 2.13rem 1.63rem;
    font-size: 18.75rem;
    color: #03a9f4;
  }
  .zuts-sjeverozapadna-hrvatska {
    position: relative;
    letter-spacing: 3px;
    display: flex;
    align-items: center;
    width: 35.31rem;
  }
  .zuts-sjeverozapadna-hrvatska-parent {
    position: absolute;
    top: 0rem;
    left: 0rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 0.63rem;
  }
  .adresa23 {
    position: absolute;
    top: 3.63rem;
    left: 0rem;
    width: 16.31rem;
    height: 1.19rem;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 3.33rem;
  }
  .frame17 {
    position: absolute;
    top: 0rem;
    left: 0rem;
    height: 1.19rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 1.25rem;
  }
  .frame18 {
    position: absolute;
    top: 1.81rem;
    left: 0rem;
    height: 1.19rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 4rem;
  }
  .adresa2-container {
    position: absolute;
    top: 6.38rem;
    left: 0rem;
    width: 14.56rem;
    height: 6.06rem;
    text-align: center;
    font-size: 1rem;
    color: #000;
  }
  .frame-parent7 {
    position: relative;
    width: 35.38rem;
    height: 10.94rem;
    text-align: left;
  }
  .slika5zbor-icon {
    position: absolute;
    top: 0rem;
    left: 6.69rem;
    border-radius: 10px;
    width: 25rem;
    height: 25rem;
    object-fit: cover;
  }
  .frame19 {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 12.13rem;
    height: 23.31rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
  }
  .frame20 {
    position: absolute;
    top: 0rem;
    left: 26.5rem;
    width: 3.75rem;
    height: 23.31rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
  }
  .slika5zbor-parent {
    position: relative;
    width: 31.69rem;
    height: 25rem;
    font-size: 18.75rem;
    color: #03a9f4;
  }
  .podrucnizbor5 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: space-between;
    padding: 2.13rem 1.63rem;
  }
  .frame21 {
    position: absolute;
    top: 1.13rem;
    left: 0rem;
    width: 32rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
  }
  .slika6zbor-parent {
    position: relative;
    width: 32rem;
    height: 25rem;
  }
  .zuts-slavonije-i {
    position: relative;
    letter-spacing: 3px;
    display: flex;
    align-items: center;
    width: 18.75rem;
  }
  .zuts-slavonije-i-baranje-parent {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: flex-start;
    gap: 0.63rem;
  }
  .frame23 {
    align-self: stretch;
    height: 1.19rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-end;
    gap: 2rem;
    z-index: 0;
  }
  .tajnik5 {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 3.69rem;
    flex-shrink: 0;
  
  }
  .mirna-rajle-broanac {
    position: relative;
    display: flex;
    text-align: right;
    align-items: center;
    width: 10.8rem;
    flex-shrink: 0;
  }
  .frame24 {
    align-self: stretch;
    height: 1.19rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-end;
    gap: 2.1rem;
    z-index: 1;
  }
  .ulica-grada-vukovara5 {
    text-decoration: none;
    position: relative;
    font-weight: 700;
    color: inherit;
    text-align: right;
    display: inline-block;
    width: 13.38rem;
    height: 3rem;
    flex-shrink: 0;
    margin-left: -0.75rem;
  }
  .adresa6 {
    margin: 0 !important;
    position: absolute;
    top: 4.06rem;
    left: 2.56rem;
    height: 2.75rem;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    z-index: 2;
  }
  .frame-parent11 {
    align-self: stretch;
    height: 3.31rem;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: space-between;
    position: relative;
    text-align: center;
    font-size: 1rem;
    color: #000;
  }
  .frame-parent10 {
    height: 9.81rem;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: space-between;
    text-align: right;
    font-size: 2rem;
    color: #21231e;
  }
  .hzuts-podrucni-zborovi-screen- {
    position: relative;
    background-color: #f8f7f5;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    text-align: center;
    font-size: 2rem;
    color: #21231e;
    font-family: Inter;
  }

  @media screen and (max-width: 1200px) {
    .slikanavrhupodrucnihzborova {
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      gap: 0rem;
      padding-left: 0rem;
      padding-right: 0rem;
      box-sizing: border-box;
    }
  }
  @media screen and (max-width: 960px) {
    .slikanavrhupodrucnihzborova {
      align-items: center;
      justify-content: center;
      padding-left: 0rem;
      padding-right: 0rem;
      box-sizing: border-box;
    }

    .slikaframe {
      flex: 1;
      height: auto;
      flex-direction: row;
      align-items: center;
      justify-content: center;
      padding-left: 0rem;
      padding-top: -37.5rem;
      box-sizing: border-box;
      order: -1;
    }
    .slika3zbor-parent {
    order: -1;
  }
    .slika5zbor-parent {
    order: -1;
  }

    .podrucnizbor1 {
      flex-direction: row;
    }

    .zuts-primorsko-goranske-upani {
      text-align: left;
    }

    .frame16 {
      width: auto;
      align-self: unset;
    }

    .podrucnizbor4 {
 padding-bottom: 5rem;
    }
  }
  @media screen and (max-width: 420px) {
    .slikanavrhupodrucnihzborova {
      align-items: center;
      justify-content: center;
      padding-left: 0rem;
      padding-right: 0rem;
      box-sizing: border-box;
    }

    .slikaframe {
      align-self: stretch;
      width: auto;
      order: -1;
    }
    .slika3zbor-parent {
    order: -1;
  }
    .slika5zbor-parent {
    order: -1;
  }

    .podrucnizbor1 {
      flex-direction: column;
    }

    .slika2zbor-parent {
      width: 32.13rem;
      height: 25rem;
    }

    .podrucnizbor2 {
      flex-direction: column;
    }

    .podrucnizbor3 {
      flex-direction: column;
    }

    .podrucnizbor4 {
      flex-direction: column;
 padding-bottom: 5rem;
    }
    .frame-group{
      order: +1;
  }
  .frame-div{
      order: +1;
  }

    .podrucnizbor5 {
      flex-direction: column;
    }
  }
</style>