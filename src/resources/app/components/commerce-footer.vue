<template>
    <div class="footer-container">
  <div class="footerdesktop">
    <footer class="velikifooterkvadrat">
      <div class="bijelapozadina" />
      <div class="slikaframe">
        <img
          class="img-5195-photoroom-1-icon"
          alt=""
          src="/storage/slike/img-5195photoroom-1@2x.png"
        />
      </div>
      <div class="glavnagrupakontakt">
        <div class="kontakt">Kontakt</div>
        <div class="kontainerzakontakttekstove">
          <div class="text-input">
            <img class="container-icontelefon" alt="" src="/storage/slike/containertelefon.svg" />
            <div class="div">+385 1 23 999 50</div>
          </div>
          <!--
          <div class="horizontal-container">
            <img
              class="vertical-container-icon"
              alt=""
              src="/storage/slike/printer-21.svg"
            />
            <div class="div1">+385 1 23 999 55</div>
          </div>-->
          <a class="text-input1">
            <img class="container-icon1email" alt="" src="/storage/slike/container1email.svg" />
            <a class="infohzutshr" href="mailto:info@hzuts.hr">info@hzuts.hr</a>
          </a>
          <a class="adresaframe" href="https://goo.gl/maps/18tA6BKkGBjNovbM8">
            <img class="map-pin-1-icon" alt="" src="/storage/slike/mappin-1.svg" />
            <div class="maksimirska-51a-10000">
              Maksimirska 51A, 10000 Zagreb
            </div>
          </a>
        </div>
      </div>
      <div class="glavnagrupaonama">
        <div class="gornjidiotekstovionama">
          <div class="o-nama">O nama</div>
          <div class="paragraph-container">
            <a class="osnovne-informacije">Osnovne informacije</a>
            <a class="povijest">Povijest</a>
            <a class="bilteni-hzuts-a">Bilteni HZUTS-a</a>
            <a class="podruni-zborovi">Područni zborovi</a>
          </div>
        </div>
        <div class="donjidioonama">
          <a class="osnovne-informacije">Politika privatnosti</a>
          <a class="povijest">Politika o kolačićima</a>
        </div>
      </div>
      <div class="glavnagrupapratitenas">
        <div class="pratitenasnaslov">
          <div class="pratite-nas">Pratite nas</div>
        </div>
        <a class="facebookgrupa" target="_blank" href="https://www.facebook.com/hzuts">
          <img class="fbvector-icon" alt="" src="/storage/slike/fbvector.svg" />
        </a>
        <a class="instagramgrupa" target="_blank" href="https://www.instagram.com/hzuts/">
          <img class="instagramvector-icon" alt="" src="/storage/slike/instagramvector.svg" />
        </a>
      
      </div>
    </footer>
    <footer class="footernajdonji">
      <div class="copyright-2023">
        Copyright © 2023 Sva prava pridržana od strane HZUTS-a.
      </div>
    </footer>
  </div>
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
import { mapState } from 'vuex';
export default {
  data() {
    return {
      footerData: {
        services: {
          title: "Služba za korisnike",
          child: [
            'Pomoć',
          ]
        },
        explore: {
          title: null,
          child: [
             'O nama',
             'Uvjeti pružanja usluge',
             'Pravila o privatnosti',
          ]
        },
        payment: {
          title: "Plaćanje",
          child: [
            'Ručni prijenos',
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
    align-self: stretch;
    flex: 1;
    position: relative;
    background-color: #fff;
    z-index: 0;
  }
  .img-5195-photoroom-1-icon {
    position: relative;
    width: 40.85rem;
    height: 25.35rem;
    object-fit: cover;
  }
  .slikaframe {
    margin: 0 !important;
    position: absolute;
    width: 45.42%;
    top: calc(50% - 243.28px);
    right: 54.57%;
    left: 0.02%;
    height: 25.47rem;
   
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    padding: 0.06rem 0rem;
    box-sizing: border-box;
    align-items: flex-start;
    justify-content: center;
    z-index: 1;
  }
  .kontakt {
    position: absolute;
    top: 0%;
    left: 0%;
    font-weight: 500;
  }
  .container-icontelefon {
    position: absolute;
    right: 9.75rem;
    bottom: 0.03rem;
    width: 1rem;
    height: 1rem;
    overflow: hidden;
  }
  .div {
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
  .vertical-container-icon {
    position: absolute;
    right: 7.88rem;
    bottom: 0.06rem;
    width: 1rem;
    height: 1rem;
    overflow: hidden;
  }
  .div1 {
    position: absolute;
    right: 0rem;
    bottom: 0.03rem;
    letter-spacing: -0.17px;
  }
  .horizontal-container {
    position: absolute;
    top: 4rem;
    left: 0rem;
    width: 8.88rem;
    height: 1.13rem;
    overflow: hidden;
  }
  .container-icon1email {
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
    top: 6.06rem;
    left: 0rem;
    width: 7.25rem;
    height: 1.06rem;
    overflow: hidden;
    color: #03a9f4;
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
    left: 1.81rem;
    display: inline-block;
    width: 14.25rem;
    height: 3.13rem;
  }
  .adresaframe {
    position: absolute;
    top: 0.02rem;
    left: 0.03rem;
    width: 16.08rem;
    height: 1.06rem;
    overflow: hidden;
    text-align: left;
  }
  .kontainerzakontakttekstove {
    position: absolute;
    top: 3.38rem;
    left: 0.06rem;
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
    width: 17.92%;
    top: calc(50% - 148px);
    right: 20.14%;
    left: 61.94%;
    height: 14.44rem;
    z-index: 2;
  }
  .o-nama {
    position: absolute;
    right: 4rem;
    bottom: 8.94rem;
    font-weight: 500;
  }
  .osnovne-informacije {
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
    top: 3.38rem;
    left: 0rem;
    width: 8.63rem;
    height: 7.06rem;
    overflow: hidden;
    font-size: 0.88rem;
    color: #000;
  }
  .gornjidiotekstovionama {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 8.63rem;
    height: 10.44rem;
    overflow: hidden;
  }
  .donjidioonama {
    position: absolute;
    top: 11.38rem;
    left: 0.06rem;
    width: 8.5rem;
    height: 3.06rem;
    overflow: hidden;
    font-size: 0.88rem;
    color: #000;
  }
  .glavnagrupaonama {
    position: absolute;
    margin: 0 !important;
    height: 47.93%;
    top: 19.23%;
    bottom: 32.85%;
    left: calc(50% - 33px);
    width: 8.63rem;
    z-index: 3;
  }
  .pratite-nas {
    position: absolute;
    right: 0rem;
    bottom: 0rem;
    font-weight: 500;
    display: inline-block;
    width: 6.44rem;
  }
  .pratitenasnaslov {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 6.44rem;
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
    left: 3.13rem;
    border-radius: 5px;
    background-color: rgba(29, 161, 242, 0.95);
    width: 1.88rem;
    height: 1.88rem;
  }
  .glavnagrupapratitenas {
    position: absolute;
    margin: 0 !important;
    width: 7.15%;
    top: calc(50% - 148px);
    right: 8.19%;
    left: 84.65%;
    height: 4.63rem;
    z-index: 4;
  }
  .velikifooterkvadrat {
    position: absolute;
    width: 100%;
    top: calc(50% - 240px);
    right: 0%;
    left: 0%;
    height: 30.13rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 0.63rem;
    text-align: left;
    font-size: 1.25rem;
    color: #03a9f4;
    font-family: Inter;
  }
  .copyright-2023 {
    position: absolute;
    height: 26.06%;
    top: 36.99%;
    left: calc(50% - 216px);
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 28.31rem;
  }
  .footernajdonji {
    position: absolute;
    height: 15.08%;
    width: 100%;
    top: 84.92%;
    right: 0%;
    bottom: 0%;
    left: 0%;
    background-color: #03a9f4;
    text-align: center;
    font-size: 1rem;
    color: #fff;
    font-family: Inter;
  }
  .footerdesktop {
    position: relative;
    width: 100%;
    height: 30.25rem;
  }

  @media screen and (max-width: 1200px) {
    .glavnagrupaonama {
      flex-direction: column;
      padding-right: 15%;
      box-sizing: border-box;
    }

    .glavnagrupapratitenas {
      width: 6.5rem;
    }



  }
  
 
  
  
  
  
  
  @media screen and (max-width: 1080px) {

  .bijelapozadina {
    align-self: stretch;
    flex: 1;
    position: relative;
    background-color: #fff;
    z-index: 0;
  }
  .img-5195-photoroom-1-icon {
    position: relative;
    width: 24.94rem;
    height: 15.5rem;
    object-fit: cover;
  }
  .slikaframe {
    margin: 0 !important;
    position: absolute;
    width: 45.42%;
    top: calc(50% - 243.28px);
    right: 54.57%;
    left: 0.02%;
    height: 25.47rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    padding: 0.06rem 0rem;
    box-sizing: border-box;
    align-items: center;
    justify-content: center;
    z-index: 1;
  }
  .kontakt {
    position: absolute;
    width: 83.14%;
    top: 0%;
    left: 0.19%;
    font-weight: 500;
    display: inline-block;
  }
  .container-icon {
    position: absolute;
    right: 9.75rem;
    bottom: 0.03rem;
    width: 1rem;
    height: 1rem;
    overflow: hidden;
  }
  .div {
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
    overflow: hidden;
  }
  .vertical-container-icon {
    position: absolute;
    right: 7.88rem;
    bottom: 0.06rem;
    width: 1rem;
    height: 1rem;
    overflow: hidden;
  }
  .div1 {
    position: absolute;
    right: 0rem;
    bottom: 0.03rem;
    letter-spacing: -0.17px;
  }
  .horizontal-container {
    position: absolute;
    top: 4.65rem;
    left: 0rem;
    width: 8.88rem;
    height: 1.13rem;
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
    top: 7.02rem;
    left: 0rem;
    width: 7.25rem;
    height: 1.06rem;
    overflow: hidden;
    color: #03a9f4;
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
    left: 1.81rem;
    display: inline-block;
    width: 14.25rem;
    height: 3.13rem;
  }
  .adresaframe {
    position: absolute;
    top: 0.02rem;
    left: 0.03rem;
    width: 16.08rem;
    height: 1.06rem;
    overflow: hidden;
    text-align: left;
  }
  .kontainerzakontakttekstove {
    position: absolute;
    top: 3.38rem;
    left: 0.06rem;
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
    width: 17.92%;
    top: calc(50% - 213px);
    right: 11.98%;
    left: 70.1%;
    height: 14.44rem;
    z-index: 2;
  }
  .o-nama {
    position: absolute;
    right: 4rem;
    bottom: 10.19rem;
    font-weight: 500;
  }
  .osnovne-informacije {
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
    top: 3.38rem;
    left: 0rem;
    width: 8.56rem;
    height: 8.69rem;
    font-size: 0.88rem;
    color: #000;
  }
  .gornjidiotekstovionama {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 8.63rem;
    height: 11.69rem;
    overflow: hidden;
  }
  .donjidioonama {
    position: absolute;
    top: 12.25rem;
    left: 0rem;
    width: 8.5rem;
    height: 4.31rem;
    overflow: hidden;
    font-size: 0.88rem;
    color: #000;
  }
  .glavnagrupaonama {
    position: absolute;
    margin: 0 !important;
    height: 47.93%;
    top: 5.81%;
    bottom: 46.27%;
    left: calc(50% - 17px);
    width: 8.63rem;
    z-index: 3;
  }
  .pratite-nas {
    position: absolute;
    right: 0rem;
    bottom: 0rem;
    font-weight: 500;
    display: inline-block;
    width: 6.44rem;
  }
  .pratitenasnaslov {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 6.44rem;
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
    left: 3.13rem;
    border-radius: 5px;
    background-color: rgba(29, 161, 242, 0.95);
    width: 1.88rem;
    height: 1.88rem;
  }
  .glavnagrupapratitenas {
    position: absolute;
    margin: 0 !important;
    width: 7.15%;
    top: calc(50% + 68px);
    right: 44.62%;
    left: 48.23%;
    height: 4.63rem;
    z-index: 4;
  }
  .velikifooterkvadrat {
    position: absolute;
    width: 100%;
    top: calc(50% - 240px);
    right: 0%;
    left: 0%;
    height: 30.13rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 0.63rem;
    text-align: left;
    font-size: 1.25rem;
    color: #03a9f4;
    font-family: Inter;
  }
  .copyright-2023 {
    position: absolute;
    height: 26.06%;
    top: 36.99%;
    left: calc(50% - 216px);
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 28.31rem;
  }
  .footernajdonji {
    position: absolute;
    height: 15.08%;
    width: 100%;
    top: 84.92%;
    right: 0%;
    bottom: 0%;
    left: 0%;
    background-color: #03a9f4;
    text-align: center;
    font-size: 1rem;
    color: #fff;
    font-family: Inter;
  }
  .footerdesktop {
    position: relative;
    width: 100%;
    height: 30.25rem;
  }

}



  




  @media screen and (max-width: 660px) {
    .bijelapozadina {
    flex: 1;
    position: relative;
    background-color: #fff;
    height: 47.5rem;
    z-index: 0;
  }
  .img-5195-photoroom-1-icon {
    position: relative;
    width: 29.56rem;
    height: 17.75rem;
    object-fit: cover;
  }
  .slikaframe {
    margin: 0 !important;
    position: absolute;
    height: 35.39%;
    width: 112.27%;
    top: -0.53%;
    right: -12.27%;
    bottom: 65.13%;
    left: 0%;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    padding: 0.06rem 0rem;
    box-sizing: border-box;
    align-items: center;
    justify-content: center;
    z-index: 1;
  }
  .kontakt {
    position: absolute;
    width: 83.14%;
    top: 0%;
    left: 0.19%;
    font-weight: 500;
    display: inline-block;
  }
  .container-icon {
    position: absolute;
    right: 9.75rem;
    bottom: 0.03rem;
    width: 1rem;
    height: 1rem;
    overflow: hidden;
  }
  .div {
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
    overflow: hidden;
  }
  .vertical-container-icon {
    position: absolute;
    right: 7.88rem;
    bottom: 0.06rem;
    width: 1rem;
    height: 1rem;
    overflow: hidden;
  }
  .div1 {
    position: absolute;
    right: 0rem;
    bottom: 0.03rem;
    letter-spacing: -0.17px;
  }
  .horizontal-container {
    position: absolute;
    top: 4.65rem;
    left: 0rem;
    width: 8.88rem;
    height: 1.13rem;
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
    top: 7.02rem;
    left: 0rem;
    width: 7.25rem;
    height: 1.06rem;
    overflow: hidden;
    color: #03a9f4;
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
    left: 1.81rem;
    display: inline-block;
    width: 14.25rem;
    height: 3.13rem;
  }
  .adresaframe {
    position: absolute;
    top: 0.02rem;
    left: 0.03rem;
    width: 16.08rem;
    height: 1.06rem;
    overflow: hidden;
    text-align: left;
  }
  .kontainerzakontakttekstove {
    position: absolute;
    top: 3.38rem;
    left: 0.06rem;
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
    height: 30.39%;
    width: 17.92%;
    top: 40.10%;
    right: 33.6%;
    bottom: 34.21%;
    left: 48.48%;
    z-index: 2;
  }
  .o-nama {
    position: absolute;
    right: 4rem;
    bottom: 10.19rem;
    font-weight: 500;
  }
  .osnovne-informacije {
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
    top: 3.38rem;
    left: 0rem;
    width: 8.56rem;
    height: 8.69rem;
    font-size: 0.88rem;
    color: #000;
  }
  .gornjidiotekstovionama {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 8.63rem;
    height: 11.69rem;
    overflow: hidden;
  }
  .donjidioonama {
    position: absolute;
    top: 12.25rem;
    left: 0rem;
    width: 8.5rem;
    height: 4.31rem;
    overflow: hidden;
    font-size: 0.88rem;
    color: #000;
  }
  .glavnagrupaonama {
    position: absolute;
    margin: 0 !important;
    height: 47.89%;
    width: 26.97%;
    top: 39.87%;
    right: 59.39%;
    bottom: 17.24%;
    left: 9.64%;
    z-index: 3;
  }
  .pratite-nas {
    position: absolute;
    right: 0rem;
    bottom: 0rem;
    font-weight: 500;
    display: inline-block;
    width: 6.44rem;
  }
  .pratitenasnaslov {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 6.44rem;
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
    left: 3.13rem;
    border-radius: 5px;
    background-color: rgba(29, 161, 242, 0.95);
    width: 1.88rem;
    height: 1.88rem;
  }
  .glavnagrupapratitenas {
    position: absolute;
    margin: 0 !important;
    width: 7.15%;
    top: calc(50% + 235px);
    right: 51.48%;
    left: 41.36%;
    height: 4.63rem;
    z-index: 4;
  }
  .velikifooterkvadrat {
    position: absolute;
    width: 100%;
    top: calc(50% - 240px);
    right: 0%;
    left: 0%;
    height: 47.5rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    gap: 0.63rem;
    text-align: left;
    font-size: 1.25rem;
    color: #03a9f4;
    font-family: Inter;
  }
  .copyright-2023 {
    position: absolute;
    height: 26.06%;
    top: 36.99%;
    left: calc(50% - 216px);
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 28.31rem;
    font-size: 0.85rem;
  }
  .footernajdonji {
    position: absolute;
    height: 15.06%;
    top: 84.94%;
    bottom: 0%;
    left: calc(50% - 720px);
    background-color: #03a9f4;
    width: 90rem;
    text-align: center;
    font-size: 0.85rem;
    color: #fff;
    font-family: Inter;
    margin-top: 21rem;
  }
  
    
  .footerdesktop {
    position: relative;
    width: 100%;
    height: 30.25rem;
  }



  }


 

  @media screen and (max-width: 800px) {
  .footer-container {
    transform: scale(0.85);
    transform-origin: center top; /* to ensure scaling happens from the center top */

  }
  .bijelapozadina {
    transform: scale(1.17647); 
    transform-origin: center top; 
  
  }
 
  .slikaframe {

    left: -10%;
    overflow: visible;

    }

    .footernajdonji {
      transform: scale(1.17647); 
    position: absolute;
    height: 15.08%;
    width: 100%;
    top: 100%;
    right: 0%;
    bottom: -57.44%;
    left: 0%;
    background-color: #03a9f4;
    text-align: center;
    font-size: 1rem;
    color: #fff;
    font-family: Inter;
  }

}

  



</style>