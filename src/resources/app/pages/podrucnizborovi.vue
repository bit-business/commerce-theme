    <template>
  <div class="hzuts-podrucni-zborovi-screen-">
    <Head :title="$page.props.name" />
    <div class="slikanavrhupodrucnihzborova">
      <div class="podruni-zborovi">PODRUČNI ZBOROVI</div>
    </div>
    <div class="podrucnizbor1">
      <div class="zuts-istra-parent">
        <b class="zuts-istra">{{ zborovi && zborovi[2] ? zborovi[2].ime : '' }}
</b>
        <img class="frame-child" alt="" src="/storage/slike/undefined.png" />
        <div class="adresa">Adresa:</div>
        <a class="ulica-grada-vukovara"
          >Ulica grada Vukovara 32, 10 000 Zagreb</a
        >
        <div class="frameprvi">
          <div class="predsjednik">Predsjednik:</div>
          <b class="predsjednik">Dubravko Grgić</b>
        </div>
        <div class="frame1prvi">
          <div class="predsjednik">Tajnik:</div>
          <b class="predsjednik">Andrej Hubel</b>
        </div>
      </div>
      <div class="frame-parent">
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined1.png" />
          <div class="predsjednik">099 839 8367</div>
        </div>
        <div class="mail-icon-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined2.png" />
          <div class="predsjednik">tajnikzutsistra@gmail.com</div>
        </div>
        <div class="layout-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined3.png" />
          <a class="wwwzuts-istrahr">www.zuts-istra.hr</a>
        </div>
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined4.png" />
          <div class="predsjednik">099 839 8367</div>
        </div>
        <div class="dollar-sign-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined5.png" />
          <div class="predsjednik">10 eura</div>
        </div>
        <div class="credit-card-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined6.png" />
          <div class="predsjednik">HR899823232323232</div>
        </div>
      </div>
      <div class="slikaframe">
        <div class="frame-group">
          <div class="frame2" />
          <img class="slika1zbor-icon" alt="" src="/storage/slike/undefined7.png" />
          <b class="b">1</b>
        </div>
        <div class="frame3">
          <iframe class="map-group" src="https://google.maps/nekiurl" />
        </div>
      </div>
    </div>
    <div class="podrucnizbor2">
      <div class="slika2zbor-parent">
        <img class="slika2zbor-icon" alt="" src="/storage/slike/undefined8.png" />
        <div class="frame4">
          <b class="predsjednik">2</b>
        </div>
        <div class="frame5">
          <iframe class="map-group" src="http://google.maps/nekiurl" />
        </div>
      </div>
      <div class="frame-container">
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined1.png" />
          <div class="predsjednik">099 839 8367</div>
        </div>
        <div class="mail-icon-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined2.png" />
          <div class="predsjednik">tajnikzutsistra@gmail.com</div>
        </div>
        <div class="layout-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined3.png" />
          <div class="wwwzuts-istrahr1">www.zuts-istra.hr</div>
        </div>
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined4.png" />
          <div class="predsjednik">099 839 8367</div>
        </div>
        <div class="dollar-sign-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined5.png" />
          <div class="predsjednik">10 eura</div>
        </div>
        <div class="credit-card-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined6.png" />
          <div class="predsjednik">HR899823232323232</div>
        </div>
      </div>
      <div class="frame-div">
        <div class="frame6">
          <div class="frame7">
            <b class="zuts-istra1">{{ zborovi && zborovi[3] ? zborovi[3].ime : '' }}</b>
            <img class="frame-item" alt="" src="/storage/slike/undefined9.png" />
          </div>
          <div class="frame8">
            <div class="predsjednik">Predsjednik:</div>
            <b class="predsjednik">Dubravko Grgić</b>
          </div>
        </div>
        <div class="frame9">
          <div class="predsjednik">Tajnik:</div>
          <b class="predsjednik">Andrej Hubel</b>
        </div>
      </div>
    </div>
    <div class="podrucnizbor3">
      <div class="zuts-istra-group">
        <b class="zuts-istra2">{{ zborovi && zborovi[4] ? zborovi[4].ime : '' }}</b>
        <img class="frame-inner" alt="" src="/storage/slike/undefined9.png" />
        <div class="frame10">
          <div class="predsjednik">Predsjednik:</div>
          <b class="predsjednik">Dubravko Grgić</b>
        </div>
        <div class="frame11">
          <div class="predsjednik">Tajnik:</div>
          <b class="predsjednik">Andrej Hubel</b>
        </div>
      </div>
      <div class="frame-parent">
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined10.png" />
          <div class="predsjednik">099 839 8367</div>
        </div>
        <div class="mail-icon-container">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined11.png" />
          <div class="predsjednik">tajnikzutsistra@gmail.com</div>
        </div>
        <div class="layout-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined12.png" />
          <a class="wwwzuts-istrahr">www.zuts-istra.hr</a>
        </div>
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined13.png" />
          <div class="predsjednik">099 839 8367</div>
        </div>
        <div class="dollar-sign-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined14.png" />
          <div class="predsjednik">10 eura</div>
        </div>
        <div class="credit-card-1-container">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined15.png" />
          <div class="predsjednik">HR899823232323232</div>
        </div>
      </div>
      <div class="slika3zbor-parent">
        <img class="slika3zbor-icon" alt="" src="/storage/slike/undefined7.png" />
        <div class="frame12">
          <b class="predsjednik">3</b>
        </div>
        <div class="frame13">
          <iframe class="map-group" />
        </div>
      </div>
    </div>
    <div class="podrucnizbor4">
      <div class="slika4zbor-parent">
        <img class="slika2zbor-icon" alt="" src="/storage/slike/undefined8.png" />
        <div class="frame14">
          <b class="predsjednik">4</b>
        </div>
        <div class="frame5">
          <iframe class="map-group" />
        </div>
      </div>
      <div class="frame-parent">
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined1.png" />
          <div class="predsjednik">099 839 8367</div>
        </div>
        <div class="mail-icon-container">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined2.png" />
          <div class="predsjednik">tajnikzutsistra@gmail.com</div>
        </div>
        <div class="layout-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined3.png" />
          <div class="wwwzuts-istrahr1">www.zuts-istra.hr</div>
        </div>
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined4.png" />
          <div class="predsjednik">099 839 8367</div>
        </div>
        <div class="dollar-sign-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined5.png" />
          <div class="predsjednik">10 eura</div>
        </div>
        <div class="credit-card-1-container">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined6.png" />
          <div class="predsjednik">HR899823232323232</div>
        </div>
      </div>
      <div class="zuts-istra-group">
        <b class="zuts-istra3">{{ zborovi && zborovi[5] ? zborovi[5].ime : '' }}</b>
        <img class="frame-inner" alt="" src="/storage/slike/undefined9.png" />
        <div class="frame16">
          <div class="predsjednik">Predsjednik:</div>
          <b class="predsjednik">Dubravko Grgić</b>
        </div>
        <div class="frame17">
          <div class="predsjednik">Tajnik:</div>
          <b class="predsjednik">Andrej Hubel</b>
        </div>
      </div>
    </div>
    <div class="podrucnizbor3">
      <div class="zuts-istra-group">
        <b class="zuts-istra4">{{ zborovi && zborovi[6] ? zborovi[6].ime : '' }}</b>
        <img class="frame-inner" alt="" src="/storage/slike/undefined9.png" />
        <div class="frame10">
          <div class="predsjednik">Predsjednik:</div>
          <b class="predsjednik">Dubravko Grgić</b>
        </div>
        <div class="frame11">
          <div class="predsjednik">Tajnik:</div>
          <b class="predsjednik">Andrej Hubel</b>
        </div>
      </div>
      <div class="frame-parent">
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined10.png" />
          <div class="predsjednik">099 839 8367</div>
        </div>
        <div class="mail-icon-container">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined11.png" />
          <div class="predsjednik">tajnikzutsistra@gmail.com</div>
        </div>
        <div class="layout-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined12.png" />
          <div class="wwwzuts-istrahr1">www.zuts-istra.hr</div>
        </div>
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined13.png" />
          <div class="predsjednik">099 839 8367</div>
        </div>
        <div class="dollar-sign-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined14.png" />
          <div class="predsjednik">10 eura</div>
        </div>
        <div class="credit-card-1-container">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined15.png" />
          <div class="predsjednik">HR899823232323232</div>
        </div>
      </div>
      <div class="slika5zbor-parent">
        <img class="slika5zbor-icon" alt="" src="/storage/slike/undefined7.png" />
        <div class="frame20">
          <b class="predsjednik">5</b>
        </div>
        <div class="frame21">
          <iframe class="map-group" />
        </div>
      </div>
    </div>
    <div class="podrucnizbor4">
      <div class="slika6zbor-parent">
        <img class="slika2zbor-icon" alt="" src="/storage/slike/undefined8.png" />
        <div class="frame22">
          <b class="predsjednik">6</b>
        </div>
        <div class="frame5">
          <iframe class="map-group" />
        </div>
      </div>
      <div class="frame-parent">
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined1.png" />
          <div class="predsjednik">099 839 8367</div>
        </div>
        <div class="mail-icon-container">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined2.png" />
          <div class="predsjednik">tajnikzutsistra@gmail.com</div>
        </div>
        <div class="layout-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined3.png" />
          <div class="wwwzuts-istrahr1">www.zuts-istra.hr</div>
        </div>
        <div class="phone-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined4.png" />
          <div class="predsjednik">099 839 8367</div>
        </div>
        <div class="dollar-sign-1-parent">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined5.png" />
          <div class="predsjednik">10 eura</div>
        </div>
        <div class="credit-card-1-container">
          <img class="phone-1-icon" alt="" src="/storage/slike/undefined6.png" />
          <div class="predsjednik">HR899823232323232</div>
        </div>
      </div>
      <div class="zuts-istra-group">
        <b class="zuts-istra3">{{ zborovi && zborovi[7] ? zborovi[7].ime : '' }}</b>
        <img class="frame-inner" alt="" src="/storage/slike/undefined9.png" />
        <div class="frame16">
          <div class="predsjednik">Predsjednik:</div>
          <b class="predsjednik">Dubravko Grgić</b>
        </div>
        <div class="frame17">
          <div class="predsjednik">Tajnik:</div>
          <b class="predsjednik">Andrej Hubel</b>
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
    padding: 15rem 31rem;
    align-items: center;
    justify-content: flex-start;
    background-image: url("/storage/slike/slikanavrhupodrucnihzborova@3x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
    font-size: 2.5rem;
    color: #fff;
    white-space: nowrap;
  }
  .zuts-istra {
    position: absolute;
    top: 0.13rem;
    left: 0.03rem;
    font-size: 2rem;
    letter-spacing: 3px;
    display: flex;
    color: #21231e;
    text-align: left;
    align-items: center;
    width: 21.31rem;
  }
  .frame-child {
    position: absolute;
    top: 3.09rem;
    left: 0rem;
    width: 18.75rem;
    height: 0.13rem;
    object-fit: cover;
  }
  .adresa {
    position: absolute;
    top: 7.41rem;
    left: 0rem;
  }
  .ulica-grada-vukovara {
    text-decoration: none;
    position: absolute;
    top: 9.22rem;
    left: 0rem;
    font-weight: 700;
    color: inherit;
  }
  .predsjednik {
    position: relative;
  }
  .predsjednik1 {
    position: relative;
    text-align: left;
  }
  .frameprvi {
    position: absolute;
    top: 3.78rem;
    left: 0rem;
    width: 20.06rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: left;
    justify-content: flex-start;
    gap: 1.5rem;
  }
  .frame1prvi {
    position: absolute;
    top: 5.59rem;
    left: 0rem;
    width: 20.06rem;
    height: 1.19rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: right;
    justify-content: flex-start;
    gap: 4.2rem;
  }
  .frame {
    position: absolute;
    top: 3.78rem;
    left: 0rem;
    width: 16.06rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
  }
  .frame1 {
    position: absolute;
    top: 5.59rem;
    left: 0rem;
    width: 12.06rem;
    height: 1.19rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 2.63rem;
  }
  .zuts-istra-parent {
    position: relative;
    width: 18rem;
    height: 10.5rem;
  }
  .phone-1-icon {
    position: relative;
    width: 1.5rem;
    height: 1.5rem;
    overflow: hidden;
    flex-shrink: 0;
    object-fit: cover;
  }
  .phone-1-parent {
    width: 9.56rem;
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
  .frame-parent {
    display: flex;
    flex-direction: column;
    padding: 3.75rem 0rem;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1.25rem;
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
  .frame-group {
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
    padding: 1.5rem 1.63rem;
    align-items: flex-start;
    justify-content: space-between;
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
  .frame-container {
    height: 22.75rem;
    display: flex;
    flex-direction: column;
    padding: 4.38rem 0rem;
    box-sizing: border-box;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1.25rem;
    font-size: 1rem;
    color: #000;
  }
  .zuts-istra1 {
    position: relative;
    letter-spacing: 3px;
    display: flex;
    align-items: center;
    width: 18rem;
  }
  .frame-item {
    position: relative;
    width: 18.75rem;
    height: 0.06rem;
    object-fit: cover;
  }
  .frame7 {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: flex-start;
    gap: 0.56rem;
  }
  .frame8 {
    width: 14.69rem;
    height: 1.19rem;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 1.25rem;
    text-align: center;
    font-size: 1rem;
    color: #000;
  }
  .frame6 {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: flex-start;
    gap: 1.25rem;
  }
  .frame9 {
    width: 14.69rem;
    height: 1.19rem;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 5.25rem;
    text-align: center;
    font-size: 1rem;
    color: #000;
  }
  .frame-div {
    width: 18.75rem;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: flex-start;
    gap: 0.63rem;
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
    padding: 1.5rem 1.63rem;
    align-items: flex-start;
    justify-content: space-between;
    font-size: 18.75rem;
    color: #03a9f4;
  }
  .zuts-istra2 {
    position: absolute;
    top: 0rem;
    left: -0.03rem;
    font-size: 2rem;
    letter-spacing: 3px;
    display: flex;
    color: #21231e;
    text-align: left;
    align-items: center;
    width: 20.81rem;
  }
  .frame-inner {
    position: absolute;
    top: 2.94rem;
    left: 0rem;
    width: 18.75rem;
    height: 0.13rem;
    object-fit: cover;
  }
  .frame10 {
    position: absolute;
    top: 4.25rem;
    left: 0rem;
    width: 14.69rem;
    height: 1.19rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 1.25rem;
  }
  .frame11 {
    position: absolute;
    top: 6.06rem;
    left: 0rem;
    width: 13.44rem;
    height: 1.19rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 4rem;
  }
  .zuts-istra-group {
    position: relative;
    width: 18.75rem;
    height: 7.25rem;
    display: flex;
    align-items: center;
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
  .frame12 {
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
  .frame13 {
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
    padding: 1.5rem 1.63rem;
    align-items: flex-start;
    justify-content: space-between;
  }
  .frame14 {
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
    font-size: 18.75rem;
    color: #03a9f4;
  }
  .zuts-istra3 {
    position: absolute;
    top: 0rem;
    left: 0rem;
    font-size: 2rem;
    letter-spacing: 3px;
    display: flex;
    color: #21231e;
    text-align: right;
    align-items: center;
    width: 18.75rem;
  }
  .frame16 {
    position: absolute;
    top: 4.25rem;
    left: 4.06rem;
    width: 14.69rem;
    height: 1.19rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 1.25rem;
  }
  .frame17 {
    position: absolute;
    top: 6.06rem;
    left: 4.06rem;
    width: 14.69rem;
    height: 1.19rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 5.25rem;
  }
  .podrucnizbor4 {
    align-self: stretch;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    padding: 1.5rem 1.63rem;
    align-items: flex-start;
    justify-content: space-between;
  }
  .zuts-istra4 {
    position: absolute;
    top: 0rem;
    left: 0.03rem;
    font-size: 2rem;
    letter-spacing: 3px;
    display: flex;
    color: #21231e;
    text-align: left;
    align-items: center;
    width: 18.75rem;
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
  .frame20 {
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
  .frame21 {
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
  .frame22 {
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
    font-size: 18.75rem;
    color: #03a9f4;
  }
  .hzuts-podrucni-zborovi-screen- {
    position: relative;
    background-color: #f8f7f5;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    text-align: left;
    font-size: 1rem;
    color: #000;
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
      width: 32.13rem;
      height: 25rem;
      order: -1;
    }
    .slika5zbor-parent {
      order: -1;
    }

    .podrucnizbor1 {
      flex-direction: row;
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
      width: 32.13rem;
      height: 25rem;
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
    }
  }
</style>
