<template>
  <section class="hzuts-leadership-parent">
    <div class="hzuts-leadership">
      <b class="vodstvo-hzuts-a3">{{ $t('vodstvo-hzuts-a') }}</b>
    </div>
    <div class="dopredsednik-vucinic">
      <PredsjednikLikvidatorTomisla
        propWidth="29.13rem"
        propGap="0.13rem"
      />
      <div class="predsjednik-edin-sarac">
        <img class="group-icon8" loading="eager" alt="" src="/storage/slike/osnovneinformacije/line-34.svg" />
      </div>
    </div>
    <div class="izvrsni-odbor-members">
      <div class="nastavna-komisa">
        <div class="lanovi-izvrnog-odbora-container1">
          <span>
            <p class="lanovi-izvrnog-odbora1">{{ $t('clanovi-izvrsnog-odbora') }}</p>
            <ul class="dag-modri-predstavnik-pz-nik1">
              <li class="dag-modri3">
                <span>Dag Modrić</span>
              </li>
              <li class="predstavnik-pz-nik-krmar1">
                <span>{{ $t('predstavnik-pz-nik-krcmar') }}</span>
              </li>
              <li class="predstavnik-pz-istra1">
                <span>{{ $t('predstavnik-pz-istra') }}</span>
              </li>
              <li class="predstavnik-pz-slavonije-i-bar1">
                <span>{{ $t('predstavnik-pz-slavonije-i-baranje') }}</span>
              </li>
              <li class="predstavnik-pz-ogulin1">
                <span>{{ $t('predstavnik-pz-ogulin') }}</span>
              </li>
              <li class="predstavnik-pz-primorsko-goran1">
                <span>{{ $t('predstavnik-pz-primorsko-goranska-zupanije') }}</span>
              </li>
              <li class="predstavnik-pz-sjeverozapadne1">
                <span>{{ $t('predstavnik-pz-sjeverozapadne-hrvatske') }}</span>
              </li>
              <li class="dario-ali1">
                <span>Dario Šalić</span>
              </li>
              <li class="ivan-vuini3">
                <span>Ivan Vučinić</span>
              </li>
              <li class="tomislav-jug2">
                <span>Tomislav Jug</span>
              </li>
              <li class="petar-thur1">
                <span>Petar Thur</span>
              </li>
              <li class="dario-maravi1">
                <span>Dario Maravić</span>
              </li>
              <li>
                <span>Edin Sarač</span>
              </li>
            </ul>
          </span>
        </div>
        <img
          class="predsednik-dario-salic"
          loading="eager"
          alt=""
          src="/storage/slike/osnovneinformacije/frame.svg"
        />
      </div>
      <div class="nadzorni-odbor-members">
        <div class="interskia-komisa-i-s-i-a">
          <div class="nastavna-komisija1">
            <span>
              <span>{{ $t('nastavna-komisija') }}</span>
              <b> </b>
            </span>
          </div>
          <div class="predsjednik-dario-maravic-edin">
            <div class="predsjednik-dario-maravi1">
              {{ $t('predsjednik-dario-maravic') }}
            </div>
          </div>
        </div>
        <div class="interskia-komisa-i-s-i-a1">
          <div class="isia-komisija1">
            <span>
              <span>{{ $t('isia-komisija') }}</span>
              <b> </b>
            </span>
          </div>
          <div class="frame197">
            <div class="predsjednik-edin-sara1">{{ $t('predsjednik-edin-sarac') }}</div>
          </div>
        </div>
        <div class="interskia-komisa-i-s-i-a2">
          <div class="interski-komisija1">
            <span>
              <span>{{ $t('interski-komisija') }}</span>
              <b> </b>
            </span>
          </div>
          <div class="frame198">
            <div class="predsjednik-petar-thur1">{{ $t('predsjednik-petar-thur') }}</div>
          </div>
        </div>
        <div class="isia-komisa-predsjednik-franjo">
          <div class="predsjednik-zeljko-crnkovic">
            <div class="gospodarska-komisija1">
              <span>
                <span>{{ $t('gospodarska-komisija') }}</span>
                <b> </b>
              </span>
            </div>
            <div class="stegovni-sud-tomislav-bartolic">
              <div class="predsjednik-dario-ali1">{{ $t('predsjednik') }}: Dario Šalić</div>
            </div>
          </div>
          <div class="nadzorni-odbor-neven-putar-per">
            <footer class="predsjednik-neven-putar">
              <div class="nadzorni-odbor-neven-container1">
                <span>
                  <p class="nadzorni-odbor1">{{ $t('nadzorni-odbor') }}</p>
                  <ul class="neven-putar-pero-miheli-pavl1">
                    <li class="neven-putar1">Neven Putar</li>
                    <li class="pero-miheli1">Pero Mihelčić</li>
                    <li>Pavle Zobundžija</li>
                  </ul>
                </span>
              </div>
            </footer>
            <div class="predsjednik-neven-putar1">
              <div class="stegovni-sud-tomislav-container1">
                <span>
                  <p class="stegovni-sud1">{{ $t('stegovni-sud') }}</p>
                  <ul class="tomislav-bartoli-anja-kostren1">
                    <li class="tomislav-bartoli1">Tomislav Bartolić</li>
                    <li class="anja-kostreni1">Anja Kostrenčić</li>
                    <li>Majda Krčmar Kavić</li>
                  </ul>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
  import { defineComponent } from "vue";
  import PredsjednikLikvidatorTomisla from "./predsjednik-likvidator-tomisla.vue";

  export default defineComponent({
    name: "FrameComponent",
    components: { PredsjednikLikvidatorTomisla },
  });
</script>
<style scoped>

ul.dag-modri-predstavnik-pz-nik1, ul.neven-putar-pero-miheli-pavl1, ul.tomislav-bartoli-anja-kostren1 {
  list-style-type: disc; /* This will show bullet points */
  padding-left: 3rem; /* This ensures that there's space for bullets */
}


  .vodstvo-hzuts-a3 {
    height: 2.44rem;
    position: relative;
    letter-spacing: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .hzuts-leadership {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0rem 0rem 0.56rem;
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
  }
  .group-icon8 {
    flex: 1;
    position: relative;
    max-width: 100%;
    overflow: clip;
    max-height: unset;
  }
  .predsjednik-edin-sarac {
    align-self: stretch;
    height: 0rem;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0rem 0rem 0rem 1.13rem;
    box-sizing: border-box;
    max-width: 100%;
  }
  .dopredsednik-vucinic {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1.88rem;
    max-width: 100%;
    flex-shrink: 0;
  }
  .lanovi-izvrnog-odbora1 {
    margin: 0;
  }
  .dag-modri3 {
    margin-bottom: false;
  }
  .predstavnik-pz-nik-krmar1 {
    margin-bottom: false;
  }
  .predstavnik-pz-istra1 {
    margin-bottom: false;
  }
  .predstavnik-pz-slavonije-i-bar1 {
    margin-bottom: false;
  }
  .predstavnik-pz-ogulin1 {
    margin-bottom: false;
  }
  .predstavnik-pz-primorsko-goran1 {
    margin-bottom: false;
  }
  .predstavnik-pz-sjeverozapadne1 {
    margin-bottom: false;
  }
  .dario-ali1 {
    margin-bottom: false;
  }
  .ivan-vuini3 {
    margin-bottom: false;
  }
  .tomislav-jug2 {
    margin-bottom: false;
  }
  .petar-thur1 {
    margin-bottom: false;
  }
  .dario-maravi1 {
    margin-bottom: false;
  }
  .dag-modri-predstavnik-pz-nik1 {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    padding-left: 1.34rem;
    color: #03a9f4;
  }
  .lanovi-izvrnog-odbora-container1 {
    height: 34.13rem;
    position: relative;
    display: flex;
    align-items: center;
    max-width: 100%;
  }
  .predsednik-dario-salic {
    align-self: stretch;
    height: 62.5rem;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    flex-shrink: 0;
    opacity: 0;
    z-index: 1;
    margin-top: -32.37rem;
    
  }
  .nastavna-komisa {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }
  .nastavna-komisija1 {
    height: 2.44rem;
    position: relative;
    white-space: pre-wrap;
    display: flex;
    align-items: center;
    max-width: 100%;
  }
  .predsjednik-dario-maravi1 {
    align-self: stretch;
    position: relative;
    padding-left: 10%;
  }
  .predsjednik-dario-maravic-edin {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
  }
  .interskia-komisa-i-s-i-a {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 0.13rem;
    max-width: 100%;
  }
  .isia-komisija1 {
    height: 2.44rem;
    position: relative;
    display: flex;
    align-items: center;
    
  }
  .predsjednik-edin-sara1 {
    align-self: stretch;
    position: relative;
    padding-left: 10%;
  }
  .frame197 {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
  }
  .interskia-komisa-i-s-i-a1 {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 0.13rem;
  }
  .interski-komisija1 {
    height: 2.44rem;
    position: relative;
    display: flex;
    align-items: center;
  }
  .predsjednik-petar-thur1 {
    align-self: stretch;
    position: relative;
    padding-left: 10%;
  }
  .frame198 {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
  }
  .interskia-komisa-i-s-i-a2 {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 0.63rem;
  }
  .gospodarska-komisija1 {
    align-self: stretch;
    height: 2.44rem;
    position: relative;
    display: flex;
    align-items: center;
  }
  .predsjednik-dario-ali1 {
    align-self: stretch;
    height: 2.44rem;
    position: relative;
    display: flex;
    align-items: center;
    padding-left: 10%;
  }
  .stegovni-sud-tomislav-bartolic {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
  }
  .predsjednik-zeljko-crnkovic {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 0.63rem;
  }
  .nadzorni-odbor1 {
    margin: 0;
  }
  .neven-putar1 {
    margin-bottom: false;
  }
  .pero-miheli1 {
    margin-bottom: false;
  }
  .neven-putar-pero-miheli-pavl1 {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    padding-left: 1.34rem;
  }
  .nadzorni-odbor-neven-container1 {
    align-self: stretch;
    height: 9.75rem;
    position: relative;
    display: flex;
    align-items: center;
  }
  .predsjednik-neven-putar {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
    text-align: left;
    font-size: 2rem;
    color: #000;
    font-family: Inter;
  }
  .stegovni-sud1 {
    margin: 0;
  }
  .tomislav-bartoli1 {
    margin-bottom: false;
  }
  .anja-kostreni1 {
    margin-bottom: false;
  }
  .tomislav-bartoli-anja-kostren1 {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    padding-left: 1.34rem;
  }
  .stegovni-sud-tomislav-container1 {
    align-self: stretch;
    height: 9.75rem;
    position: relative;
    display: flex;
    align-items: center;
  }
  .predsjednik-neven-putar1 {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
  }
  .nadzorni-odbor-neven-putar-per {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1.88rem;
    padding-left: 10%;
  }
  .isia-komisa-predsjednik-franjo {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    gap: 1.88rem;
  }
  .nadzorni-odbor-members {
    width: 29.06rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1.88rem;
    max-width: 100%;
    z-index: 2;
    margin-top: -26.94rem;
  }
  .izvrsni-odbor-members {
    width: 69.19rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
    flex-shrink: 0;
  }
  .hzuts-leadership-parent {
    align-self: stretch;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 3.81rem 7.56rem 5.31rem 6.31rem;
    box-sizing: border-box;
    gap: 2.56rem;
    max-width: 100%;
    flex-shrink: 0;
    text-align: left;
    font-size: 2rem;
    color: #000;
    font-family: Inter;
  }


  @media screen and (min-width: 1151px) {
    .hzuts-leadership-parent {
 
    background-image: url("/storage/slike/osnovneinformacije/g14.svg");

    background-size: 50% auto;
    background-repeat: no-repeat;
    background-position: center;
    max-width: 100%;
    }
  }


  @media screen and (max-width: 1150px) {
    .predsednik-dario-salic {
    opacity: 1;
  }
    .hzuts-leadership-parent {
      padding-top: 2.5rem;
      padding-bottom: 3.44rem;
      box-sizing: border-box;
    }
  }
  @media screen and (max-width: 1050px) {
    .vodstvo-hzuts-a3 {
      font-size: 1.63rem;
    }

    .lanovi-izvrnog-odbora-container1 {
      font-size: 1.63rem;
    }

    .nastavna-komisija1 {
      font-size: 1.63rem;
    }

    .predsjednik-dario-maravi1 {
      font-size: 1.63rem;
    }

    .isia-komisija1 {
      font-size: 1.63rem;
    }

    .predsjednik-edin-sara1 {
      font-size: 1.63rem;
    }

    .interski-komisija1 {
      font-size: 1.63rem;
    }

    .predsjednik-petar-thur1 {
      font-size: 1.63rem;
    }

    .gospodarska-komisija1 {
      font-size: 1.63rem;
    }

    .predsjednik-dario-ali1 {
      font-size: 1.63rem;
    }

    .nadzorni-odbor-neven-container1 {
      font-size: 1.63rem;
    }

    .stegovni-sud-tomislav-container1 {
      font-size: 1.63rem;
    }

    .hzuts-leadership-parent {
      padding-top: 1.63rem;
      padding-bottom: 2.25rem;
      box-sizing: border-box;
    }
  }
  @media screen and (max-width: 750px) {
    .hzuts-leadership-parent {
      gap: 1.25rem;
      padding: 1.25rem 3.75rem 1.44rem 3.13rem;
      box-sizing: border-box;
    }
    .vodstvo-hzuts-a3 {
    letter-spacing: 1px;
    align-items: center;
    justify-content: left;
  }

  }
  @media screen and (max-width: 450px) {
    .vodstvo-hzuts-a3 {
      font-size: 1.19rem;
    }

    .lanovi-izvrnog-odbora-container1 {
      font-size: 1.19rem;
    }

    .nastavna-komisija1 {
      font-size: 1.19rem;
    }

    .predsjednik-dario-maravi1 {
      font-size: 1.19rem;
    }

    .isia-komisija1 {
      font-size: 1.19rem;
    }

    .predsjednik-edin-sara1 {
      font-size: 1.19rem;
    }

    .interski-komisija1 {
      font-size: 1.19rem;
    }

    .predsjednik-petar-thur1 {
      font-size: 1.19rem;
    }

    .gospodarska-komisija1 {
      font-size: 1.19rem;
    }

    .predsjednik-dario-ali1 {
      font-size: 1.19rem;
    }

    .nadzorni-odbor-neven-container1 {
      font-size: 1.19rem;
    }

    .stegovni-sud-tomislav-container1 {
      font-size: 1.19rem;
    }

    .hzuts-leadership-parent {
      padding-left: 1.25rem;
      padding-right: 1.25rem;
      box-sizing: border-box;
    }
  }


  @media screen and (max-width: 380px) {
  .vodstvo-hzuts-a3 {
    letter-spacing: 1px;
    align-items: center;
    justify-content: left;
  }
}

ul {
  list-style-type: disc; 
}

ol {
  list-style-type: decimal; 
  font-weight: 300;
}

li {
  list-style-position: inside; 
}

</style>
