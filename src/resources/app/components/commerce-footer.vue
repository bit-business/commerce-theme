<template>
  <div class="footerdesktop">
    <footer class="velikifooterkvadrat">
      <div class="bijelapozadina" />
      <img class="slikaframe-icon" alt="" loading="eager" src="/storage/slike/footer/footerslika.svg" />
      <div class="glavnagrupakontakt">
        <div class="kontakt">{{ $t('Kontakt') }}</div>
        <div class="kontainerzakontakttekstove">
          <div class="text-input">
            <img class="container-icon" alt="" src="/storage/slike/footer/containerfooter.svg" />
            <a href="tel:+38512399950" class="divbrojmob">{{ $t('385-1-23-999-50') }}</a>
          </div>
          <a class="text-input1">
            <img class="container-icon1" alt="" src="/storage/slike/footer/containerfooter1.svg" />
            <a class="infohzutshr" href="mailto:info@hzuts.hr">info@hzuts.hr</a>
          </a>
          <!--
          <div class="horizontal-container">
            <img
              class="vertical-container-icon"
              alt=""
              src="/storage/slike/footer/vertical-container.svg"
            />
            <div class="div1brojmob">+385 1 23 999 55</div>
          </div>
        -->

          <a class="adresaframe" href="https://goo.gl/maps/18tA6BKkGBjNovbM8">
            <img class="map-pin-1-icon" alt="" src="/storage/slike/footer/mappin-1.svg" />
            <div class="maksimirska-51a-10000">
              {{ $t('maksimirska-51a-10000-zagreb') }}
            </div>
          </a>
        </div>
      </div>
      <div class="glavnagrupaonama">
        <div class="gornjidiotekstovionama">
          <div class="o-nama" href>{{ $t('o-nama') }}</div>
          <div class="paragraph-container">
            <a class="politika-privatnosti" href="https://hzuts.hr/politikaprivatnosti">{{ $t('politika-privatnosti-0') }}</a>
            <a class="politika-o-kolaiima" href="https://hzuts.hr/politikakolacica">{{ $t('politika-o-kolacicima') }}</a>
            <Link  :href="route('skijasi.commerce-theme.osnovneinformacije')" class="osnovne-informacije-footer">{{ $t('osnovne-informacije-0') }}</Link>
           <Link :href="route('skijasi.commerce-theme.popustizaclanove')" class="povijest">{{ $t('popusti-za-clanove') }}</Link>
            <a class="bilteni-hzuts-a" href="https://hzuts.hr/infoclanarine">{{ $t('clanarine-0') }}</a>
            <a class="podruni-zborovi">{{ $t('dokumenti') }}</a>
          </div>
        </div>
        <div class="donjidioonama" />
      </div>
      <div class="glavnagrupapratitenas">
        <div class="pratitenasnaslov">
          <div class="pratite-nas">{{ $t('pratite-nas') }}</div>
        </div>
        <a class="instagramgrupa" target="_blank" href="https://www.instagram.com/hzuts/">
          <img class="instagramvector-icon" alt="" src="/storage/slike/footer/instagramvector.svg" />
        </a>
        <a class="facebookgrupa" target="_blank" href="https://www.facebook.com/hzuts">
          <img class="fbvector-icon" alt="" src="/storage/slike/footer/fbvector.svg" />
        </a>
       <a class="youtubegrupa">
          <img class="instagramvector-icon" alt="" src="/storage/slike/footer/youtubeicona.svg" />
        </a>
      </div>
    </footer>
    <footer class="footernajdonji">
      <div class="copyright-2023">
        {{ $t('copyright-c-2023-sva-prava-pridrzana-od-strane-hzuts-a-0') }}
      </div>
    </footer>
    <cookie-consent />
  </div>
</template>



<!--
  <div :class="[`bg-gray-100  border-primary pt-16`, noGutter ? 'mt-0 border-t-0' : 'mt-16 border-t-4']">
    <div class="container flex justify-between">
      <ul class="text-gray-500 text-sm" v-for="(footer, index) in footerData" :key="index">
        <li class="uppercase font-semibold mb-4">
          <a href="#">{{ footer.title }}</a>
        </li>
        <li class="mb-2 text-xs" v-for="(child, indexChild) in footer.child" :key="indexChild">
          <a href="#" v-html="child" class="inline-flex hover:text-primary"></a>
        </li>
      </ul>
      <ul class="text-gray-500 text-sm">
        <li class="uppercase font-semibold mb-4">
          <a href="#">Prati nas</a>
        </li>
        <li class="mb-2 text-xs flex flex-col gap-3">
          <a target="_blank" :href="facebookUrl" class="inline-flex hover:text-primary">
            <svg role="img" class="h-4 w-4 mr-2 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            Facebook
          </a>
          <a target="_blank" :href="instagramUrl" class="inline-flex hover:text-primary">
            <svg role="img" class="h-4 w-4 mr-2 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
            Instagram
          </a>
          <a target="_blank" :href="twitterUrl" class="inline-flex hover:text-primary">
            <svg role="img" class="h-4 w-4 mr-2 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
            Twitter
          </a>
        </li>
      </ul>
    </div>

-->

    


<script>
import CookieConsent from './cookieconsent.vue';
import { Link, Head } from '@inertiajs/inertia-vue'
import { mapState } from 'vuex';
export default {
  components: {
    Link,
    Head,
    CookieConsent,
  },
  data() {
    return {
      footerData: {
        services: {
          title: this.$t('sluzba-za-korisnike'),
          child: [
            this.$t('pomoc'),
          ]
        },
        explore: {
          title: null,
          child: [
             this.$t('o-nama-0'),
             this.$t('uvjeti-pruzanja-usluge'),
             this.$t('pravila-o-privatnosti'),
          ]
        },
        payment: {
          title: this.$t('placanje'),
          child: [
            this.$t('rucni-prijenos'),
          ]
        },
      }
    }
  },
  props: {
    noGutter: {
      type: Boolean,
      default: false
    }
  },
  computed: {
    ...mapState({
      title(state) {
        return this.$_.find(state.themeConfigurations, { key: "themeTitle" }).value;
      },
      facebookUrl(state) {
        return this.$_.find(state.themeConfigurations, { key: "facebookUrl" }).value;
      },
      instagramUrl(state) {
        return this.$_.find(state.themeConfigurations, { key: "instagramUrl" }).value;
      },
      twitterUrl(state) {
        return this.$_.find(state.themeConfigurations, { key: "twitterUrl" }).value;
      },
    }),
  },
  mounted() {
   // this.footerData.explore.title = `Istražite ${this.title}`
  }
}
</script>

<style scoped>
  .bijelapozadina {
    position: relative;
    background-color: #fff;
    width: 100vw;
    height: 25.56rem;
    z-index: 0;
  }
  .slikaframe-icon {
    position: absolute;
    margin: 0 !important;
    width: 45.42%;
    top: calc(50% - 174.5px);
    right: 54.58%;
    left: 0%;
    max-width: 100%;
    overflow: hidden;
    height: 24.81rem;
    flex-shrink: 0;
    z-index: 1;
  }
  .kontakt {
    position: absolute;
    top: 0rem;
    left: 0rem;
    font-weight: 500;
  }
  .container-icon {
    position: absolute;
    right: 9.75rem;
    bottom: 0.03rem;
    width: 1rem;
    height: 1rem;
    overflow: hidden;
  }
  .divbrojmob {
    position: absolute;
    right: 1.88rem;
    bottom: 0rem;
    letter-spacing: -0.17px;
  }
  .text-input {
    position: absolute;
    top: 2rem;
    left: 0rem;
    width: 10.75rem;
    height: 1.06rem;
    overflow: hidden;
  }
  .container-icon1 {
    position: absolute;
    right: 6.25rem;
    bottom: 0.03rem;
    width: 1rem;
    height: 1rem;
    overflow: hidden;
  }
  .infohzutshr {
    text-decoration: none;
    position: absolute;
    right: 0rem;
    bottom: 0rem;
    letter-spacing: -0.17px;
    color: inherit;
  }
  .text-input1 {
    text-decoration: none;
    position: absolute;
    top: 4rem;
    left: 0rem;
    width: 7.25rem;
    height: 1.06rem;
    overflow: hidden;
    color: #03a9f4;
  }
  .vertical-container-icon {
    position: absolute;
    right: 7.88rem;
    bottom: 0.06rem;
    width: 1.2rem;
    height: 1rem;
    overflow: hidden;
  }
  .div1brojmob {
    position: absolute;
    right: 0rem;
    bottom: 0.03rem;
    letter-spacing: -0.17px;
  }
  .horizontal-container {
    position: absolute;
    top: 6rem;
    left: 0rem;
    width: 8.88rem;
    height: 1.13rem;
    overflow: hidden;
  }
  .map-pin-1-icon {
    position: absolute;
    top: 0.06rem;
    left: 0rem;
    width: 1.03rem;
    height: 1rem;
    overflow: hidden;
  }
  .maksimirska-51a-10000 {
    position: absolute;
    top: 0rem;
    left: 1.68rem;
    display: inline-block;
    width: 14.25rem;
    height: 3.13rem;
  }
  .adresaframe {
    position: absolute;
    top: 0.02rem;
    left: 0rem;
    width: 16.08rem;
    height: 1.06rem;
    overflow: hidden;
    text-align: left;
    display: inline-block;
  }
  .kontainerzakontakttekstove {
    position: absolute;
    top: 3.38rem;
    left: 0rem;
    width: 15.56rem;
    height: 10.44rem;
    overflow: hidden;
    text-align: center;
    font-size: 0.88rem;
    color: #000;
  }
  .glavnagrupakontakt {
    position: absolute;
    margin: 0 !important;
    width: 17.29%;
    top: calc(50% - 142.5px);
    right: 21.15%;
    left: 61.56%;
    height: 13.81rem;
    z-index: 2;
  }
  .o-nama {
    position: absolute;

    bottom: 15.15rem;
    font-weight: 500;
  }
  .politika-privatnosti {
    text-decoration: none;
    position: absolute;
    top: 8rem;
    left: 0.06rem;
    font-weight: 500;
    color: inherit;
  }
  .politika-o-kolaiima {
    text-decoration: none;
    position: absolute;
    top: 10rem;
    left: 0.06rem;
    font-weight: 500;
    color: inherit;
  }
  .osnovne-informacije-footer {
    text-decoration: none;
    position: absolute;
    top: 0rem;
    left: 0rem;
    font-weight: 500;
    color: inherit;
  }
  .povijest {
    text-decoration: none;
    position: absolute;
    top: 2rem;
    left: 0rem;
    font-weight: 500;
    color: inherit;
  }
  .bilteni-hzuts-a {
    text-decoration: none;
    position: absolute;
    top: 4rem;
    left: 0rem;
    font-weight: 500;
    color: inherit;
  }
  .podruni-zborovi {
    text-decoration: none;
    position: absolute;
    top: 6rem;
    left: 0rem;
    font-weight: 500;
    color: inherit;
  }
  .paragraph-container {
    position: absolute;
    top: 3.4rem;
    left: 0rem;
    width: 8.93rem;
    height: 13.25rem;
    font-size: 0.88rem;
    color: #000;
  }
  .gornjidiotekstovionama {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 8.63rem;
    height: 16.65rem;
    overflow: hidden;
  }
  .donjidioonama {
    position: absolute;
    top: 13rem;
    left: 0.06rem;
    width: 8.5rem;
    height: 3.06rem;
    overflow: hidden;
    display: none;
  }
  .glavnagrupaonama {
    position: absolute;
    margin: 0 !important;
    width: 9.58%;
    top: calc(50% - 142.5px);
    right: 43.61%;
    left: 46.81%;
    height: 16.65rem;
    z-index: 3;
  }
  .pratite-nas {
    position: absolute;
    bottom: 0rem;
    left: 0rem;
    font-weight: 500;
    display: inline-block;
    width: 8.06rem;
    height: 1.5rem;
  }
  .pratitenasnaslov {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 8.69rem;
    height: 1.5rem;
  }
  .instagramvector-icon {
    position: absolute;
    right: 0.47rem;
    bottom: 0.47rem;
    width: 0.93rem;
    height: 0.93rem;
  }
  .instagramgrupa {
    text-decoration: none;
    position: absolute;
    top: 2.75rem;
    left: 0rem;
    border-radius: 5px;
    background-color: rgba(29, 161, 242, 0.95);
    width: 1.88rem;
    height: 1.88rem;
  }
  .fbvector-icon {
    position: absolute;
    right: 0.66rem;
    bottom: 0.49rem;
    width: 0.52rem;
    height: 0.9rem;
  }
  .facebookgrupa {
    text-decoration: none;
    position: absolute;
    top: 2.75rem;
    left: 2.84rem;
    border-radius: 5px;
    background-color: rgba(29, 161, 242, 0.95);
    width: 1.88rem;
    height: 1.88rem;
  }
  .youtubegrupa {
    text-decoration: none;
    position: absolute;
    top: 2.75rem;
    left: 5.69rem;
    border-radius: 5px;
    background-color: rgba(29, 161, 242, 0.95);
    width: 1.88rem;
    height: 1.88rem;
  }
  .glavnagrupapratitenas {
    position: absolute;
    margin: 0 !important;
    width: 8.4%;
    top: calc(50% - 142.5px);
    right: 7.57%;
    left: 84.03%;
    height: 4.63rem;
    z-index: 4;
  }
  .velikifooterkvadrat {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    position: relative;
    text-align: left;
    font-size: 1.25rem;
    color: #03a9f4;
    font-family: Inter;
  }
  .copyright-2023 {
    flex: 1;
    position: relative;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 1.19rem;
  }
  .footernajdonji {
    align-self: stretch;
    background-color: #03a9f4;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 1.67rem 0rem;
    text-align: center;
    font-size: 1rem;
    color: #fff;
    font-family: Inter;
  }
  .footerdesktop {
    position: relative;
    width: 100%;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
  }

  @media screen and (max-width: 1080px) {
 
  .bijelapozadina {
    align-self: stretch;
    position: relative;
    background-color: #fff;
    height: 25.56rem;
    z-index: 0;
  }
  .slikaframe-icon {
    position: absolute;
    margin: 0 !important;
    width: 40.28%;
    top: calc(50% - 176.5px);
    right: 59.72%;
    left: 0%;
    max-width: 100%;
    overflow: hidden;
    height: 19rem;
    flex-shrink: 0;
    z-index: 1;
  }
  .kontakt {
    position: absolute;
    top: 0rem;
    left: 0rem;
    font-weight: 500;
  }
  .container-icon {
    position: absolute;
    right: 9.75rem;
    bottom: 0.03rem;
    width: 1rem;
    height: 1rem;
    overflow: hidden;
  }
  .divbrojmob {
    position: absolute;
    right: 1.88rem;
    bottom: 0rem;
    letter-spacing: -0.17px;
  }
  .text-input {
    position: absolute;
    top: 2.33rem;
    left: 0rem;
    width: 10.75rem;
    height: 1.06rem;
  }
  .container-icon1 {
    position: absolute;
    right: 6.25rem;
    bottom: 0.03rem;
    width: 1rem;
    height: 1rem;
    overflow: hidden;
  }
  .infohzutshr {
    text-decoration: none;
    position: absolute;
    right: 0rem;
    bottom: 0rem;
    letter-spacing: -0.17px;
    color: inherit;
  }
  .text-input1 {
    text-decoration: none;
    position: absolute;
    top: 4.65rem;
    left: 0rem;
    width: 7.25rem;
    height: 1.06rem;
    color: #03a9f4;
  }
  .vertical-container-icon {
    position: absolute;
    right: 7.88rem;
    bottom: 0.06rem;
    width: 1rem;
    height: 1rem;
    overflow: hidden;
  }
  .div1brojmob {
    position: absolute;
    right: 0rem;
    bottom: 0.03rem;
    letter-spacing: -0.17px;
  }
  .horizontal-container {
  
    top: 6.96rem;
    left: 0rem;
    width: 8.88rem;
    height: 1.13rem;
    overflow: hidden;
  }
  .map-pin-1-icon {
   
    top: 0.06rem;
    left: 0rem;
    width: 1.03rem;
    height: 1rem;
    overflow: hidden;
  }
  .maksimirska-51a-10000 {

    top: 0rem;
    left: 1.68rem;
    display: inline-block;
    width: 14.25rem;
    height: 3.13rem;
  }
  .adresaframe {
   
    top: 0.02rem;
    left: 0.03rem;
    width: 16.08rem;
    height: 4.06rem;
    overflow: hidden;
    text-align: left;
    padding-bottom: 4rem;
  }
  .kontainerzakontakttekstove {
    position: absolute;
    top: 3.06rem;
    left: 0rem;
    width: 15.56rem;
    height: 10.44rem;
    overflow: hidden;
    text-align: center;
    font-size: 0.88rem;
    color: #000;
  }
  .glavnagrupakontakt {
    position: absolute;
    margin: 0 !important;
    height: 54.03%;
    width: 23.06%;
    top: 5.13%;
    right: 9.72%;
    bottom: 40.83%;
    left: 67.22%;
    z-index: 2;
  }
  .o-nama {
    position: absolute;

    bottom: 15.15rem;
    font-weight: 500;
  }
  .politika-privatnosti {
    text-decoration: none;
    position: absolute;
    top: 9.25rem;
    left: 0.06rem;
    font-weight: 500;
    color: inherit;
  }
  .politika-o-kolaiima {
    text-decoration: none;
    position: absolute;
    top: 11.56rem;
    left: 0.06rem;
    font-weight: 500;
    color: inherit;
  }
  .osnovne-informacije-footer {
    text-decoration: none;
    position: absolute;
    top: 0rem;
    left: 0rem;
    font-weight: 500;
    color: inherit;
  }
  .povijest {
    text-decoration: none;
    position: absolute;
    top: 2.31rem;
    left: 0rem;
    font-weight: 500;
    color: inherit;
  }
  .bilteni-hzuts-a {
    text-decoration: none;
    position: absolute;
    top: 4.63rem;
    left: 0rem;
    font-weight: 500;
    color: inherit;
  }
  .podruni-zborovi {
    text-decoration: none;
    position: absolute;
    top: 6.94rem;
    left: 0rem;
    font-weight: 500;
    color: inherit;
  }
  .paragraph-container {
    position: absolute;
    top: 3.06rem;
    left: 0rem;
    width: 8.63rem;
    height: 13.25rem;
    font-size: 0.88rem;
    color: #000;
  }
  .gornjidiotekstovionama {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 8.63rem;
    height: 16.65rem;
    overflow: hidden;
  }
  .donjidioonama {
    position: absolute;
    top: 13rem;
    left: 0.06rem;
    width: 8.5rem;
    height: 3.06rem;
    overflow: hidden;
    display: none;
  }
  .glavnagrupaonama {
    position: absolute;
    margin: 0 !important;
    height: 65.28%;
    top: 5.13%;
    bottom: 29.58%;
    left: calc(50% - 37px);
    width: 8.63rem;
    z-index: 3;
  }
  .pratite-nas {
    position: absolute;
    bottom: 0rem;
    left: 0rem;
    font-weight: 500;
    display: inline-block;
    width: 8.06rem;
    height: 1.5rem;
  }
  .pratitenasnaslov {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 8.69rem;
    height: 1.5rem;
  }
  .instagramvector-icon {
    position: absolute;
    right: 0.47rem;
    bottom: 0.47rem;
    width: 0.93rem;
    height: 0.93rem;
  }
  .instagramgrupa {
    text-decoration: none;
    position: absolute;
    top: 2.5rem;
    left: 0rem;
    border-radius: 5px;
    background-color: rgba(29, 161, 242, 0.95);
    width: 1.88rem;
    height: 1.88rem;
  }
  .fbvector-icon {
    position: absolute;
    right: 0.66rem;
    bottom: 0.49rem;
    width: 0.52rem;
    height: 0.9rem;
  }
  .facebookgrupa {
    text-decoration: none;
    position: absolute;
    top: 2.5rem;
    left: 2.88rem;
    border-radius: 5px;
    background-color: rgba(29, 161, 242, 0.95);
    width: 1.88rem;
    height: 1.88rem;
  }
  .youtubegrupa {
    text-decoration: none;
    position: absolute;
    top: 2.5rem;
    left: 5.75rem;
    border-radius: 5px;
    background-color: rgba(29, 161, 242, 0.95);
    width: 1.88rem;
    height: 1.88rem;
  }
  .glavnagrupapratitenas {
    position: absolute;
    margin: 0 !important;
    height: 18.09%;
    top: 75.55%;
    bottom: 6.36%;
    left: calc(50% - 37px);
    width: 8.69rem;
    z-index: 4;
  }
  .velikifooterkvadrat {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    position: relative;
    text-align: left;
    font-size: 1.25rem;
    color: #03a9f4;
    font-family: Inter;
  }
  .copyright-2023 {
    flex: 1;
    position: relative;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 1.19rem;
  }
  .footernajdonji {
    align-self: stretch;
    background-color: #03a9f4;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 1.69rem 0rem;
    text-align: center;
    font-size: 1rem;
    color: #fff;
    font-family: Inter;
  }
  .footerdesktop-tablet {
    position: relative;
    width: 100%;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
  }





  }
  
  @media screen and (max-width: 750px) {
  
  .bijelapozadina {
    align-self: stretch;
    flex: 1;
    position: relative;
    background-color: #fff;
    z-index: 0;
  }
  .slikaframe-icon {
    position: absolute;
    margin: 0 !important;
    width: 66.93%;
    top: calc(50% - 325.5px);
    right: 10.4%;
    left: 22.67%;
    max-width: 100%;
    overflow: hidden;
    height: 17.44rem;
    flex-shrink: 0;
    z-index: 1;
  }
  .kontakt {
    position: absolute;
    top: 0rem;
    left: 0rem;
    font-weight: 500;
  }
  .container-icon {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 1rem;
    height: 1rem;
    overflow: hidden;
  }
  .divbrojmob {
    position: absolute;
    top: 0rem;
    left: 1.63rem;
    letter-spacing: -0.17px;
    text-align: left;
  }
  .text-input {
    position: absolute;
    top: 2.19rem;
    left: 0.18rem;
    width: 10.88rem;
    height: 1.06rem;
  }
  .infohzutshr {
    text-decoration: none;
    position: absolute;
    top: 0rem;
    left: 1.85rem;
    letter-spacing: -0.17px;
    color: inherit;
    text-align: left;
  }
  .text-input1 {
    text-decoration: none;
    position: absolute;
    top: 4.38rem;
    left: 0rem;
    width: 7.44rem;
    height: 1.06rem;
    color: #03a9f4;
    text-align: left;
  }
  .vertical-container-icon {
    position: absolute;
    top: 0.06rem;
    left: 0rem;
    width: 1rem;
    height: 1rem;
    overflow: hidden;
  }
  .div1brojmob {
    position: absolute;
    top: 0.06rem;
    left: 1.84rem;
    letter-spacing: -0.17px;
    text-align: left;
  }
  .horizontal-container {
    position: absolute;
    top: 6.56rem;
    left: 0rem;
    width: 9.06rem;
    height: 1.19rem;
    overflow: hidden;
    text-align: left;
  }
  .map-pin-1-icon {
    position: absolute;
    top: 0rem;
  left: 0.2rem;
    width: 1.03rem;
    height: 1rem;
    overflow: hidden;

  }
  .maksimirska-51a-10000 {
  position: absolute;
  top: 0rem;
  left: 1.84rem;
  width: 13.97rem;
    white-space: normal;
    overflow-wrap: break-word;
    word-wrap: break-word;

}




  .adresaframe {
    position: absolute;
    top: 0rem;
    left: 0.03rem;
    width: 17.81rem;
    height: 1.06rem;
    text-align: left;
    display: inline-block;
    
  }
  .kontainerzakontakttekstove {
    position: absolute;
    top: 2.81rem;
    left: 0rem;
    width: 16.88rem;
    height: 10.44rem;
    text-align: center;
    font-size: 0.88rem;
    color: #000;
  }
  .glavnagrupakontakt {
    position: absolute;
    margin: 0 !important;
    top: 16.44rem;
    left: calc(50% + 8.5px);
    width: 16.88rem;
    height: 13.5rem;
    z-index: 2;
  }
  .o-nama {
    position: absolute;

    bottom: 15.46rem;
    font-weight: 500;
  }
  .politika-privatnosti {
    text-decoration: none;
    position: absolute;
    top: 9.25rem;
    left: 0.06rem;
    font-weight: 500;
    color: inherit;
  }
  .politika-o-kolaiima {
    text-decoration: none;
    position: absolute;
    top: 11.56rem;
    left: 0.06rem;
    font-weight: 500;
    color: inherit;
  }
  .osnovne-informacije-footer {
    text-decoration: none;
    position: absolute;
    top: 0rem;
    left: 0rem;
    font-weight: 500;
    color: inherit;
  }
  .povijest {
    text-decoration: none;
    position: absolute;
    top: 2.31rem;
    left: 0rem;
    font-weight: 500;
    color: inherit;
  }
  .bilteni-hzuts-a {
    text-decoration: none;
    position: absolute;
    top: 4.63rem;
    left: 0rem;
    font-weight: 500;
    color: inherit;
  }
  .podruni-zborovi {
    text-decoration: none;
    position: absolute;
    top: 6.94rem;
    left: 0rem;
    font-weight: 500;
    color: inherit;
  }
  .paragraph-container {
    position: absolute;
    top: 3.06rem;
    left: 0rem;
    width: 8.63rem;
    height: 12.63rem;
    font-size: 0.88rem;
    color: #000;
  }
  .gornjidiotekstovionama {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 8.63rem;
    height: 16.96rem;
  }
 .glavnagrupaonama {
    position: absolute;
    margin: 0 !important;
    width: 18.4%;
    top: 16.44rem;
    right: 71.33%;
    left: 10.27%;
    height: 16.96rem;
    z-index: 3;
  }
 
  .pratite-nas {
    position: absolute;
    bottom: 0rem;
    left: 0rem;
    font-weight: 500;
    display: inline-block;
    width: 7.44rem;
  }
  .pratitenasnaslov {
    position: absolute;
    bottom: 2.88rem;
    left: 0.5rem;
    width: 7.44rem;
    height: 1.5rem;
  }
  .instagramvector-icon {
    position: absolute;
    right: 0.47rem;
    bottom: 0.47rem;
    width: 0.93rem;
    height: 0.93rem;
  }
  .instagramgrupa {
    text-decoration: none;
    position: absolute;
    top: 2.54rem;
    left: 0.25rem;
    border-radius: 5px;
    background-color: rgba(29, 161, 242, 0.95);
    width: 1.88rem;
    height: 1.88rem;
  }
  .fbvector-icon {
    position: absolute;
    right: 0.66rem;
    bottom: 0.49rem;
    width: 0.52rem;
    height: 0.9rem;
  }
  .facebookgrupa {
    text-decoration: none;
    position: absolute;
    top: 2.54rem;
    left: 3.13rem;
    border-radius: 5px;
    background-color: rgba(29, 161, 242, 0.95);
    width: 1.88rem;
    height: 1.88rem;
  }
  .youtubegrupa {
    text-decoration: none;
    position: absolute;
    top: 2.54rem;
    left: 6rem;
    border-radius: 5px;
    background-color: rgba(29, 161, 242, 0.95);
    width: 1.88rem;
    height: 1.88rem;
  }
  .glavnagrupapratitenas {
    position: absolute;
    margin: 0 !important;
    height: 10.25%;
    top: 80.81%;
    bottom: 8.95%;
    left: calc(50% - 73px);
    width: 8.69rem;
    z-index: 4;
    text-align: center;
  }
  .velikifooterkvadrat {
    align-self: stretch;
    height: 43.31rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    position: relative;
    text-align: left;
    font-size: 1.25rem;
    color: #03a9f4;
    font-family: Inter;
  }
  .copyright-2023 {
    flex: 1;
    position: relative;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 1.19rem;
  }
  .footernajdonji {
    align-self: stretch;
    background-color: #03a9f4;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 1.69rem 0rem;
    text-align: center;
    font-size: 1rem;
    color: #fff;
    font-family: Inter;
  }
  .footerdesktop-mobitel {
    position: relative;
    width: 100%;
    height: 47.94rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
  }

  
  @media screen and (max-width: 420px) {
    .divbrojmob {
      font-size: 0.63rem;
    }

    .infohzutshr {
      font-size: 0.63rem;
    }

    .div1brojmob {
      font-size: 0.63rem;
    }

    .maksimirska-51a-10000 {

      font-size: 0.63rem;
      flex-direction: row;
      align-items: flex-start;
      justify-content: flex-start;
    }

    .adresaframe {
      flex-direction: row;
      align-items: flex-start;
      justify-content: flex-start;
    }

    .glavnagrupakontakt {
      gap: 0.63rem;
      align-items: center;
      justify-content: flex-start;
      padding-right: 0rem;
      box-sizing: border-box;
    }

    .politika-privatnosti {
      font-size: 0.69rem;
    }

    .politika-o-kolaiima {
      font-size: 0.69rem;
    }

    .osnovne-informacije-footer {
      font-size: 0.69rem;
    }

    .povijest {
      font-size: 0.69rem;
    }

    .bilteni-hzuts-a {
      font-size: 0.69rem;
    }

    .podruni-zborovi {
      font-size: 0.69rem;
    }

    .glavnagrupaonama {
      height: auto;
      flex-direction: column;
      gap: 0.63rem;
      align-items: center;
      justify-content: flex-start;
      padding: 0rem;
      box-sizing: border-box;
    }

    .glavnagrupapratitenas {
      align-self: stretch;
      width: auto;
      flex: 1;
      flex-direction: row;
      align-items: flex-start;
      justify-content: flex-start;
      padding-bottom: 25rem;
      box-sizing: border-box;
    }

    .copyright-2023 {
      font-size: 0.6rem;
    }

    .footerdesktop-mobitel {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      justify-content: flex-start;
    }
  }

  @media screen and (max-width: 500px) {
  
    .text-input{
      top: 3.19rem;
    }
    .text-input1{
      top: 5.88rem;
    }
    .horizontal-container{
      top: 7.56rem;
    }
    .maksimirska-51a-10000 {
  position: absolute;
  top: 0rem;
  left: 1.84rem;
  max-width: 8.97rem;  
  text-align: left;
  white-space: normal; 
  overflow-wrap: break-word;  /* Wrap long words */
  white-space: normal;
    overflow-wrap: break-word;
    word-wrap: break-word;
}

.map-pin-1-icon {
    position: absolute;
    top: 0.5rem;
  left: 0.2rem;
    width: 1.03rem;
    height: 1rem;
    overflow: hidden;

  }

    .glavnagrupakontakt {
      gap: 1.38rem;
      align-items: flex-start;
      justify-content: flex-start;
      padding-right: 2.5rem;
      box-sizing: border-box;
    }

    .glavnagrupaonama {
      align-items: flex-start;
      justify-content: flex-start;
      padding-left: 1.25rem;
      padding-right: 0rem;
      box-sizing: border-box;
    }
  }


}
</style>