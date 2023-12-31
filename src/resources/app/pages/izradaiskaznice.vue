<template>
      <div class="hzuts-izrada-lanske-iskaznice">
        <Head :title="$page.props.name" />
    <div class="frame-parent">
      <div class="izrada-lanske-iskaznice-wrapper">
        <div class="izrada-lanske-iskaznice">IZRADA ČLANSKE ISKAZNICE</div>
      </div>
      <div class="frame-wrapper">
        <div class="frame-group">
          <div class="frame">
            <div class="frame1">
              <div class="frame2">
                <div class="frame3">
                  <div class="nakon-ulanjenja-u">
                    Nakon učlanjenja u Područni zbor i HZUTS, svaki član ima
                    pravo na člansku iskaznicu.
                  </div>
                </div>
                <div class="frame3">
                  <div class="nakon-ulanjenja-u">
                    Iskaznice HZUTS-a su plastične, a sa stražnje strane nalazi
                    se slika člana, njegovi osobni podaci, te prostor za
                    hologram i licencu.
                  </div>
                </div>
              </div>
              <div class="frame5">
                <b class="izgled-iskaznice">IZGLED ISKAZNICE:</b>
              </div>
            </div>
            <div class="frame6">
              <div class="frame-container">
                <div class="prednja-strana-1-parent">
                  <img
                    class="prednja-strana-1"
                    alt=""
                    src="/storage/slike/izradaiskaznice/prednja-strana-1@2x.png"
                  />
                  <div class="slika-1-lanska">
                    Slika 1. Članska iskaznica HZUTS-a (prednja strana)
                  </div>
                </div>
                <div class="frame-frame">
                  <div class="frame7">
                    <img
                      class="straznja-strana-1"
                      alt=""
                      src="/storage/slike/izradaiskaznice/straznja-strana--1@2x.png"
                    />
                    <div class="slika-1-lanska">
                      Slika 2. Članska iskaznica HZUTS-a (stražnja strana)
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="frame8">
            <div class="frame2">
              <div class="frame3">
                <b class="izgled-iskaznice">IZRADA:</b>
              </div>
              <div class="frame11">
                <div class="frame12">
                  <div class="za-izradu-iskaznice-container">
                    <p class="za-izradu-iskaznice-potrebna-j">
                      <span>
                        <span class="za-izradu-iskaznice"
                          >Za izradu iskaznice potrebna je:</span
                        >
                      </span>
                    </p>
                    <p class="za-izradu-iskaznice-potrebna-j">
                      <span>
                        <span class="za-izradu-iskaznice">&nbsp;</span>
                      </span>
                    </p>
                    <p class="za-izradu-iskaznice-potrebna-j">
                      <span>
                        <b>1. Potvrda o uplati za izradu iste</b>
                      </span>
                    </p>
                    <ul class="cijena-i-podaci-za-uplatu-">
                      <li class="format-jpg">
                        <span>
                          <span class="za-izradu-iskaznice"
                            >Cijena i podaci za uplatu -&gt;
                          </span>
                        </span>
                        <Link :href="route('skijasi.commerce-theme.infoclanarine')" class="lanarine">Članarine</Link>      

                      </li>
                    </ul>
                    <p class="za-izradu-iskaznice-potrebna-j">
                      <span class="blank-line3">
                        <span class="blank-line4">&nbsp;</span>
                      </span>
                    </p>
                    <p class="za-izradu-iskaznice-potrebna-j">
                      <span class="blank-line3">
                        <b class="fotografija-u-digitalnom"
                          >2. Fotografija u digitalnom obliku sa sljedećim
                          karakteristikama:</b
                        >
                      </span>
                    </p>
                    <ul class="cijena-i-podaci-za-uplatu-">
                      <li class="format-jpg">
                        <span class="opis">Opis:</span>
                        <span class="jpg">
                          Fotografija u digitalnom obliku, po mogućnosti u
                          skijaškom odijelu, s vidljivim licem (bez naočala,
                          kape, kacige i slično)</span
                        >
                      </li>
                      <li class="format-jpg">
                        <span class="opis">Format:</span>
                        <span class="jpg"> JPG</span>
                      </li>
                      <li>
                        <span class="opis">Veličina:</span>
                        <span class="jpg">
                          minimalna dimenzija 300x540 pixela (vertikalna
                          orijentacija)</span
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="frame3">
                  <b class="osobe-koje-prilikom-container">
                    <span
                      >!! Osobe koje prilikom registracije za prijavu na
                      web/aplikaciju nisu priložile fotografiju, fotografiju je
                      potrebno poslati na e-mail:
                    </span>
                    <a
                      class="infohzutshr"
                      href="mailto:info@hzuts.hr"
                      target="_blank"
                    >
                      <span class="infohzutshr1">info@hzuts.hr</span>
                    </a>
                  </b>
                </div>
              </div>
            </div>
            <div class="frame14">
              <img class="frame-child" alt="" src="/storage/slike/izradaiskaznice/rectangle-280@2x.png" />
              <div class="frame3">
                <div class="slika-1-lanska">
                  Slika 3. Primjer fotografije potrebne za izradu članske
                  iskaznice
                </div>
              </div>
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
  .izrada-lanske-iskaznice {
    position: relative;
    letter-spacing: 3px;
    font-weight: 600;
  }
  .izrada-lanske-iskaznice-wrapper {
    align-self: stretch;
    height: 33rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-image: url("/storage/slike/izradaiskaznice/naslovnaizradaiskaznice.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
  }
  .nakon-ulanjenja-u {
    align-self: stretch;
    position: relative;
    font-weight: 300;
  }
  .frame3 {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
  }
  .frame2 {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    gap: 1.56rem;
  }
  .izgled-iskaznice {
    position: relative;
  }
  .frame5 {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    color: #03a9f4;
  }
  .frame1 {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    gap: 2.5rem;
  }
  .prednja-strana-1 {
    position: relative;
    border-radius: 20px;
    width: 24.53rem;
    height: 15.63rem;
    object-fit: contain;
  }
  .slika-1-lanska {
    align-self: stretch;
    position: relative;
    font-weight: 300;
  }
  .prednja-strana-1-parent {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 0rem 0.28rem 0rem 0rem;
    gap: 0.75rem;
  }
  .straznja-strana-1 {
    position: relative;
    border-radius: 20px;
    width: 24.9rem;
    height: 15.63rem;
    object-fit: contain;
  }
  .frame7 {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0rem 0.09rem 0rem 0.44rem;
    gap: 0.75rem;
  }
  .frame-frame {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
  }
  .frame-container {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    gap: 7.5rem;
  }
  .frame6 {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    text-align: center;
    font-size: 1rem;
  }
  .frame {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
    gap: 2.75rem;
  }
  .za-izradu-iskaznice {
    font-weight: 300;
  }
  .za-izradu-iskaznice-potrebna-j {
    margin: 0;
  }
  .lanarine {
    text-decoration: underline;
    font-weight: 600;
    font-family: Inter;
    color: #03a9f4;
  }
  .cijena-i-podaci-za-uplatu- {
    margin: 0;
    font-size: inherit;
    padding-left: 1.35rem;
  }
  .blank-line4 {
    font-weight: 300;
    font-family: Inter;
  }
  .blank-line3 {
    color: #000;
  }
  .fotografija-u-digitalnom {
    font-family: Inter;
  }
  .opis {
    font-weight: 600;
    font-family: Inter;
    color: #03a9f4;
  }
  .jpg {
    font-weight: 300;
    font-family: Inter;
    color: #000;
  }
  .format-jpg {
    margin-bottom: false;
  }
  .za-izradu-iskaznice-container {
    align-self: stretch;
    position: relative;
  
  }
  .frame12 {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
  }
  .infohzutshr1 {
    text-decoration: underline;
  }
  .infohzutshr {
    color: #03a9f4;
  }
  .osobe-koje-prilikom-container {
    align-self: stretch;
    position: relative;
  }
  .frame11 {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    gap: 3.13rem;
    color: #000;
  }
  .frame-child {
    align-self: start;
    position: undefined;
    max-width: 100%;
    overflow: hidden;
    height: 18.75rem;
    flex-shrink: 0;
    object-fit: cover;
    margin-left: 8.44rem;
  }
  .frame14 {
    width: 31.13rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    gap: 1.56rem;
    font-size: 1rem;
    color: #000;
  }
  .frame8 {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    gap: 1.88rem;
    color: #03a9f4;
  }
  .frame-group {
    flex: 1;
    border-radius: 20px;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 3.75rem 5.31rem 6.25rem;
    gap: 3.13rem;
  }
  .frame-wrapper {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 0rem 3.75rem 4.38rem;
    text-align: left;
    font-size: 1.63rem;
    color: #000;
  }
  .frame-parent {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 3.13rem;
  }
  .hzuts-izrada-lanske-iskaznice {
    position: relative;
    background-color: #f8f7f5;
    width: 100%;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
    text-align: center;
    font-size: 2.5rem;
    color: #fff;
    font-family: Inter;
  }


  @media screen and (max-width: 460px) {
    .nakon-ulanjenja-u {
      font-size: 1.25rem;
    }

    .izgled-iskaznice {
      font-size: 1.25rem;
    }

    .slika-1-lanska {
      font-size: 0.55rem;
      text-align: center;
    }

    .prednja-strana-1-parent {
      flex: 1;
      flex-direction: column;
    }

    .frame6 {
      flex-direction: row;
      flex-wrap: wrap;
      align-items: center;
      justify-content: flex-start;
    }

    .frame-group {
width: 100%;
padding: 1rem 1rem;
    }

    .frame-wrapper {
padding: 1rem 1rem;
    }

    .frame-container {
flex-direction: column;
    }

    .za-izradu-iskaznice-container {
      font-size: 1.25rem;
    }

    .osobe-koje-prilikom-container {
      font-size: 1.25rem;
    }
  }
</style>