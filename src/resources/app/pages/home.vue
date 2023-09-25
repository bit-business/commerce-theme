<template>
  <div>
<Head :title="$page.props.name" />

<commerce-top-bar class="pocetnaanimacija  sm:flex" />

  <div class="hzuts-home-screen-desktop">
    <commerce-main-banner class="homepageglavnaslika-icon hidden sm:block" />
    <commerce-mobile-main-banner class="block sm:hidden" />

    <div class="framesadrzaji">
      <div class="prviredframeova">
      
          <Link class="prviredlijevo animacijakvadrati" :href="route('skijasi.commerce-theme.podrucnizborovi')">

          <img
            class="img-5449-photoroom-1-icon"
            alt=""
            src="/storage/slike/img-5449photoroom-1@2x.png"
          />
          <b class="podruni-zborovi-hzuts-a">Područni zborovi HZUTS-a</b>
          <div class="saznajte-informacije-o">
            Saznajte informacije o područnim zborovima
          </div>
          <div class="vector-parent">
            <img class="vector-icon" alt="" src="/storage/slike/vector6.svg" />
            <div class="saznaj-vie">Saznaj više</div>
          </div>
        </Link>
        <Link  class="prviredlijevo animacijakvadrati" :href="route('skijasi.commerce-theme.interskikongres')">
          <img
            class="img-7155-photoroom-1-icon"
            alt=""
            src="/storage/slike/img-7155photoroom-1@2x.png"
          />
          <b class="interski-kongresi-i">Interski kongresi i Demo team</b>
          <div class="saznajvise">
            <img class="vector-icon1" alt="" src="/storage/slike/vector6.svg" />
            <div class="saznaj-vie1">Saznaj više</div>
          </div>
          <div class="saznajte-informacije-o1">
            Saznajte informacije o povijest interski kongresa i članova demo
            team-a
          </div>
        </Link>
      </div>
    </div>
    <div class="drugired">
     <Link class="prviredlijevo animacijakvadrati" :href="route('skijasi.commerce-theme.uclanise')">

        <div class="drugiredlijevotekst">
          <b class="kako-postati-uitelj"
            >Kako postati učitelj sportova na snijegu</b
          >
          <div class="saznajvise1">
            <img class="vector-icon1" alt="" src="/storage/slike/vector6.svg" />
            <div class="saznaj-vie1">Saznaj više</div>
          </div>
          <div class="proitajte-kako-postati">
            Pročitajte kako postati učitelj skijanja ili daskanja na snijegu
          </div>
        </div>
        <img
          class="whatsapp-image-2023-06-14-at-1"
          alt=""
          src="/storage/slike/whatsapp-image-20230614-at-195410photoroom-1@2x.png"
        />
      </Link>
      <Link class="prviredlijevo animacijakvadrati" :href="route('skijasi.commerce-theme.uclanise')">
        <img
          class="fullsizerender-3-photoroom-1-icon"
          alt=""
          src="/storage/slike/fullsizerender-3photoroom-1@2x.png"
        />
        <div class="tekstdrugireddesno">
          <b class="ulanite-se-u">Učlanite se u HZUTS</b>
          <div class="saznajte-informacije-kako">
            Saznajte informacije kako se možete učlaniti te postati dio HZUTS
            obitelji.
          </div>
          <div class="tekstdrugiredsaznajvise">
            <img class="vector-icon1" alt="" src="/storage/slike/vector6.svg" />
            <div class="saznaj-vie1">Saznaj više</div>
          </div>
        </div>
      </Link>
    </div>
    <div class="dogadajitrecired">



          <vueper-slides
  class="no-shadow srednjibannerdogadaji-child "
  :visible-slides="1"
  :slide-ratio="1 / 2.5"
  :infinite="true" 
  :bullets="true"
  :bullets-outside="false"
  :arrows="true"
  :touchable="true"
  :gap="1"
  :dragging-distance="20"
  :breakpoints="{ 800: { visibleSlides: 1, slideMultiple: 1 } }"

  >

  <vueper-slide
    v-for="(slide, i) in slides"
    :key="i"
    :image="slide.image">

    <div class="objavljenotekst">
      <b class="objavljeno-20032023">{{ 'OBJAVLJENO: ' + $moment(slides.title).format('DD.MM.YYYY') }}</b>
    </div>
  </vueper-slide>

      <div class="dogadajusredini">
        <div class="otkazan-ctt-test-sigurnosti-wrapper" v-for="(item, index) in thumbnails" :key="'title-' + index">
          <b class="otkazan-ctt-test">{{ item.title }}</b>
        </div>
      </div>

  
</vueper-slides>

    </div>
    <div class="sponzorigrupa">
      <div class="sponzor1">
        <img class="rostsport-1-icon" alt="" src="/storage/slike/rostsport-1@2x.png" />
      </div>
      <div class="sponzor1">
        <img
          class="porsche-logo-1-icon"
          alt=""
          src="/storage/slike/223238porschelogo-1@2x.png"
        />
      </div>
      <div class="sponzor1">
        <img
          class="lenovo-global-corporate-logo-1-icon"
          alt=""
          src="/storage/slike/lenovo-global-corporate-logo-1@2x.png"
        />
      </div>
    </div>
    <div class="popustizaclanove">
      <div class="frameslikapopusti">
        <img class="img-4689-photoroom-1-icon" alt="" src="/storage/slike/image@2x.png" />
      </div>
      <div class="okvirtekst">
        <b class="popusti-za-nae">Popusti za naše članove</b>
        <div class="saznajte-pogodnosti-za">
          Saznajte pogodnosti za članove HZUTS-a
        </div>
        <div class="popustisaznajvise">
          <Link class="saznaj-vie4" :href="route('skijasi.commerce-theme.uclanise')">SAZNAJ VIŠE</Link>

        </div>
      </div>
    </div>
    <div class="analitikahome">
      <div class="analitikapodgrupa">
        <div class="analitika1">
          <b class="b">{{ totalUsers }}</b>
          <b class="lanova">Članova</b>
          <img class="analitika1-child" alt="" src="/storage/slike/line-11.svg" />
          <img class="membership-1-icon" alt="" src="/storage/slike/membership-1.svg" />
        </div>
        <div class="analitika2">
          <b class="b1">40</b>
          <b class="godina-postojanja">Godina postojanja</b>
          <img class="analitika2-child" alt="" src="/storage/slike/line-11.svg" />
          <img class="group-icon" alt="" src="/storage/slike/group.svg" />
        </div>
        <div class="analitika3">
          <b class="b2">6</b>
          <b class="podrunih-zborova">Područnih zborova</b>
          <img class="analitika3-child" alt="" src="/storage/slike/line-11.svg" />
          <img class="group-icon1" alt="" src="/storage/slike/group1.svg" />
        </div>
        <div class="analitika4">
          <b class="b3">100</b>
          <b class="demostratora-skijanja">Demostratora skijanja</b>
          <img class="clip-path-group" alt="" src="/storage/slike/clip-path-group.svg" />
        </div>
      </div>
    </div>
    <div class="bilteniframe">
      <div class="biltenipodframe">
        <b class="bilteni-hzuts-a">BILTENI HZUTS-a</b>
        <div class="frame-parent">
          <div class="rectangle-parent">
            <img class="frame-child" alt="" src="/storage/demo/rectangle-236@2x.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2019/2020</p>
            </b>
          </div>
          <div class="rectangle-parent">
            <img class="frame-child" alt="" src="/storage/demo/rectangle-2361@2x.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2019/2020</p>
            </b>
          </div>
          <div class="rectangle-parent">
            <img class="frame-child" alt="" src="/storage/demo/rectangle-2362@2x.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2019/2020</p>
            </b>
          </div>
          <div class="rectangle-parent">
            <img class="frame-child" alt="" src="/storage/demo/rectangle-2363@2x.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2019/2020</p>
            </b>
          </div>
          <div class="rectangle-parent">
            <img class="frame-child" alt="" src="/storage/demo/rectangle-236@2x.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2019/2020</p>
            </b>
          </div>
        </div>
        <img class="lijevastrelica-icon" alt="" src="/storage/slike/lijevastrelica.svg" />
        <div class="desnastrelica">
         
          <svg c width="60" height="61" viewBox="0 0 60 61" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="30" cy="30.333" r="30" fill="black" fill-opacity="0.5"/>
<path d="M24 42.333L36 30.333L24 18.333" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

        </div>
      </div>
    </div>
  </div>
</div>
</template>





<script>
import CommerceTopBar from '../components/commerce-top-bar.vue'
import NovostiBanner from './../components/novosti-banner.vue'
import { VueperSlides, VueperSlide } from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'

import CommerceMainBanner from './../components/commerce-main-banner.vue'
import CommerceMobileMainBanner from './../components/commerce-mobile-main-banner.vue'
import Card from '../components/card/card.vue'
import CardHeader from '../components/card/card-header.vue'
import CardAction from '../components/card/card-action.vue'
import CardBody from '../components/card/card-body.vue'
import CommerceProduct from '../components/commerce-product.vue'
import CommerceMobileProduct from '../components/commerce-mobile-product.vue'
import Carousel from '../components/carousel/carousel.vue'
import CarouselItem from '../components/carousel/carousel-item.vue'

import appLayout from '../layouts/app.vue'
import defaultLayout from '../layouts/default.vue'
import { Link, Head } from "@inertiajs/inertia-vue"

import { mapState } from 'vuex';
export default {
  components: {
    CommerceTopBar,
    CommerceMainBanner,
    NovostiBanner,
    VueperSlides, VueperSlide,

    CommerceMobileMainBanner,
    CommerceMobileProduct,
    CommerceProduct,
    Card,
    CardHeader,
    CardAction,
    CardBody,
    Carousel,
    CarouselItem,
    Link,
    Head,
    
  },
  layout: [appLayout, defaultLayout],
  computed: {


    user(state) {
        return state.user
      },

    splitCategory() {
      return this.$_.chunk(this.productCategories, 2)
    }
  },
  data() {
    return {
// za clanke
      clanci:  [],
    thumbnails: [],
  // za clanke


  slides: [
    ],




      totalUsers: 1961,

      isCategoryHovered: false,
      isItemHovered: false,
      productCategories: [],
      products: {
        data: []
      },
      bestSelling: [],
    }
  },
  mounted() {

this.fetchTotalUsers();



    const images = document.querySelectorAll('.animate-on-scroll');
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.3, // Adjust this threshold as needed
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
        observer.unobserve(entry.target); // Stop observing once animation is triggered
      }
    });
  }, options);

  images.forEach(image => {
    observer.observe(image);
  });











  const elementsToAnimate = document.querySelectorAll('.b, .b1, .b2, .b3');
  
  const numberAnimationObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const element = entry.target;
        const endValue = parseInt(element.textContent, 10);
        let startValue = 0;
        let incrementValue = 1; // Default increment value
        let intervalDuration = 20; // Default interval duration

        if (element.classList.contains('b')) {
          incrementValue = 10;  // Increase the count in steps of 10 for faster animation
          intervalDuration = 10; // Reduce the interval duration for faster animation
        }

        const interval = setInterval(() => {
          if (startValue < endValue) {
            startValue += incrementValue; // Increment the value
            if (startValue > endValue) startValue = endValue; // Ensure it doesn't exceed the end value
            element.textContent = startValue;
          } else {
            clearInterval(interval);
          }
        }, intervalDuration);

        numberAnimationObserver.unobserve(element);
      }
    });
  }, {
    root: null,
    rootMargin: '0px',
    threshold: 0.5,  // Adjust the threshold as needed
  });

  elementsToAnimate.forEach((element) => {
    numberAnimationObserver.observe(element);
  });








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
  methods: {

    // za prikaz ukupnog broja clanova api
    fetchTotalUsers() {
        this.$api.skijasiUser
        .totalUsers()
        .then(response => {
            this.totalUsers = response.totalUsers;
        });
    },


    browseBestSellingProduct() {
      this.$api.skijasiProduct
        .browseBestSellingProduct()
        .then(res => {
          this.bestSelling = res.data.products
        })
        .catch(err => {
          console.error(err);
        })
    },
    getProducts() {
      this.$api.skijasiProduct
        .browse()
        .then(res => {
          this.products = res.data.products
        })
        .catch(err => {
          console.error(err);
        })
    },
    getCategories() {
      this.$api.skijasiProductCategory
        .browse()
        .then(res => {
          this.productCategories = res.data.productCategories
        })
        .catch(err => {
          console.error(err);
        })
    },
    getProductSoldTotal(product) {
      return product.productDetails.reduce((prev, curr) => {
        return prev + parseInt(curr.sold || 0)
      }, 0) || 0;
    },


    fetchPosts() {
  this.loading = true;
  this.$api.skijasiPostPublic
    .fetchPosts({
      page: 1,
      limit: 10
    })
    .then((res) => {
      this.posts = res.data.posts;
      this.getThumbnails();
      this.loading = false;
    })
    .catch((err) => {
      console.log('Error on fetching posts', err);
      this.loading = false;
    });
},

  getThumbnails() {
  this.posts.data.forEach(element => {
    if (element.thumbnail) {
      this.thumbnails.push(element);
    }
  });

  // Map over thumbnails to create the slides array
  this.slides = this.thumbnails.map(item => {
    return {
      title: item.publishedAt,
      image: item.thumbnail // Assuming thumbnail is the image URL/path
    };
  });
}


  },

  created() {
    this.fetchPosts();
  },


}
</script>

<style scoped>


.vueperslides__bullet .default {
  background-color: rgba(0, 0, 0, 0.3);
  border: none;
  box-shadow: none;
  transition: 0.3s;
  width: 16px;
  height: 16px;
}

.vueperslides__bullet--active .default {background-color: #42b983;}

.vueperslides__bullet span {
  display: block;
  color: #000;
  font-size: 10px;
  opacity: 0.8;
}

.vueperslides__arrow {color: yellow}
.vueperslides__bullet {color: yellow}
.vueperslides__bullet--active {color: yellow}
.vueperslides__bullet span {
  display: block;
  color: #000;
  font-size: 10px;
  opacity: 0.8;
}

.thumbnails {
  margin: auto;
  max-width: 100%;
}

.thumbnails .vueperslide {
  box-sizing: border-box;
  border: 1px solid #000;
  transition: 0.3s ease-in-out;
  opacity: 0.7;
  cursor: pointer;
}

.thumbnails .vueperslide--active {
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
  opacity: 1;
  border-color: #000;
}



.pocetnaanimacija {
opacity: 0; /* Set initial opacity to 50% */
  transition: opacity 1s ease-in-out; /* Apply a smooth transition to opacity */
  animation: fadeIn 1s ease-in-out 5s forwards; /* Apply the initial fade-in animation */
}

/* Keyframes animation for fading in */
@keyframes fadeIn {
  from {
    opacity: 0.2; /* Start with 50% opacity */
  }
  to {
    opacity: 1; /* Transition to 100% opacity */
  }
}



.animacijakvadrati:hover {
  transform: scale(1.024); 
  transition: transform 0.4s; 
}
.animacijakvadrati:not(:hover) {
  transform: scale(1); /* Original scale */
  transition: transform 0.3s; /* Add transition property */
}

.popustisaznajvise:hover {
    background-color: #03a9f4;
    color: #fff; 
  }



.inactive-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.6); /* Black with 60% opacity */
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-weight: bold;
  border-radius: 20px;
  font-size: 2rem;
  z-index: 2;  /* Ensure it's above other content */
}





.homepageglavnaslika-icon {
  position: relative; /* make sure it's positioned relative or absolute */
    top: -3.75rem;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%; 
    height: 50rem;
    object-fit: cover;
    opacity: 0; /* Set initial opacity to 50% */
  transition: opacity 1s ease-in-out; /* Apply a smooth transition to opacity */
  animation: fadeIn 1s ease-in-out 3s forwards; /* Apply the initial fade-in animation */
  }
  .img-5449-photoroom-1-icon {
    position: absolute;
    top: 4.69rem;
    left: 0rem;
    width: 43.13rem;
    height: 32.81rem;
    object-fit: cover;
  }
  .podruni-zborovi-hzuts-a {
    position: absolute;
    top: 2.19rem;
    left: 5.25rem;
  }
  .saznajte-informacije-o {
    position: absolute;
    top: 6.44rem;
    left: 14.38rem;
    font-size: 1.25rem;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 14.44rem;
  }
  .vector-icon {
    position: absolute;
    top: 0.31rem;
    left: 6.19rem;
    width: 0.38rem;
    height: 0.63rem;
  }
  .saznaj-vie {
    position: absolute;
    top: 0rem;
    left: 0rem;
    font-weight: 600;
  }
  .vector-parent {
    position: absolute;
    top: 10.69rem;
    left: 17.19rem;
    width: 6.5rem;
    height: 1.19rem;
    font-size: 1rem;
    color: #03a9f4;
  }
  .prviredlijevo {
    position: relative;
    background-color: #fff;
    width: 43.13rem;
    height: 37.5rem;
  }
  .img-7155-photoroom-1-icon {
    position: absolute;
    top: 8.31rem;
    left: 21.25rem;
    width: 21.88rem;
    height: 29.17rem;
    object-fit: cover;
  }
  .interski-kongresi-i {
    position: absolute;
    top: calc(50% - 265px);
    left: calc(50% - 298px);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 37.25rem;
  }
  .vector-icon1 {
    position: absolute;
    height: 52.63%;
    width: 5.77%;
    top: 26.32%;
    right: -0.96%;
    bottom: 21.05%;
    left: 95.19%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
  }
  .saznaj-vie1 {
    position: absolute;
    top: calc(50% - 9.5px);
    left: calc(50% - 52px);
    font-weight: 600;
  }
  .saznajvise {
    position: absolute;
    top: 10.69rem;
    left: 18.13rem;
    width: 6.5rem;
    height: 1.19rem;
    font-size: 1rem;
    color: #03a9f4;
  }
  .saznajte-informacije-o1 {
    position: absolute;
    top: 6.44rem;
    left: calc(50% - 187px);
    font-size: 1.25rem;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 23.38rem;
  }
  .prviredframeova {
    height: 37.5rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 1.25rem;
  }
  .framesadrzaji {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: center;
    max-height: 375rem;
  }
  .kako-postati-uitelj {
    position: absolute;
    top: calc(50% - 106.5px);
    left: calc(50% - 296.5px);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 37.06rem;
  }
  .saznajvise1 {
    position: absolute;
    top: 12.13rem;
    left: 15.25rem;
    width: 6.5rem;
    height: 1.19rem;
    font-size: 1rem;
    color: #03a9f4;
  }
  .proitajte-kako-postati {
    position: absolute;
    top: 7.25rem;
    left: calc(50% - 171.5px);
    font-size: 1.25rem;
    letter-spacing: -0.17px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 21.38rem;
  }
  .drugiredlijevotekst {
    position: absolute;
    top: 22rem;
    left: 3.06rem;
    width: 37.06rem;
    height: 13.31rem;
  }
  .whatsapp-image-2023-06-14-at-1 {
    position: absolute;
    top: 0rem;
    left: calc(50% - 277px);
    width: 34.56rem;
    height: 22rem;
    object-fit: cover;
  }
  .fullsizerender-3-photoroom-1-icon {
    position: absolute;
    top: 12.25rem;
    left: calc(50% - 175px);
    width: 21.88rem;
    height: 25.23rem;
    object-fit: cover;
  }
  .ulanite-se-u {
    position: absolute;
    top: calc(50% - 77.5px);
    left: calc(50% - 200px);
  }
  .saznajte-informacije-kako {
    position: absolute;
    top: 4.25rem;
    left: calc(50% - 171px);
    font-size: 1.25rem;
    letter-spacing: -0.17px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 21.38rem;
  }
  .tekstdrugiredsaznajvise {
    position: absolute;
    top: 8.5rem;
    left: 9.25rem;
    width: 6.5rem;
    height: 1.19rem;
    font-size: 1rem;
    color: #03a9f4;
  }
  .tekstdrugireddesno {
    position: absolute;
    top: 2.19rem;
    left: 9.06rem;
    width: 25rem;
    height: 9.69rem;
    overflow: hidden;
  }
  .drugired {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 1.25rem;
  }

  .objavljeno-20032023 {
    position: relative;
  }
  .objavljenotekst {
    margin: 0 !important;
    position: absolute;
    width: 32%;
    top: calc(50% - 290px);
    right: 0%;
    left: 68%;
    background-color: rgba(0, 0, 0, 0.6);
    height: 4rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 1.25rem 1.69rem;
    box-sizing: border-box;
    z-index: 1;
  }
  .srednjibannerdogadaji {
    width: 100% !important;
    height: 37.5rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    position: relative;
    gap: 0.63rem;
    
    overflow: hidden; 
  }

  .srednjibannerdogadaji-child {
    width: 70%;
    height: auto;
    object-fit: cover;
    display: block; 
    justify-content: center;
    align-items: center;
    align-self: stretch;
    position: relative;
    max-width: 100%;
    overflow: hidden;

    flex-shrink: 0;
    z-index: 1003;
  }

  .otkazan-ctt-test {
    position: relative;
  }
  .otkazan-ctt-test-sigurnosti-wrapper {
    background-color: rgba(0, 0, 0, 0.6);
    width: 62.5rem;
    height: 4rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 1.2rem 11.63rem;
    box-sizing: border-box;
  }
  .dogadajusredini {
    margin: 0 !important;
    position: absolute;
    top: 37.3rem;
    left: calc(50% - 500px);
    height: 4rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    z-index: 1;
  }
  .dogadajitrecired {
    align-self: stretch;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 3.75rem 0rem;
    position: relative;
    gap: 0.63rem;
    font-size: 1.25rem;
    color: #fff;
  }
  .rostsport-1-icon {
    position: absolute;
    top: calc(50% - 61.5px);
    left: calc(50% - 125px);
    width: 15.63rem;
    height: 7.68rem;
    object-fit: cover;
  }
  .sponzor1 {
    position: relative;
    background-color: #fff;
    width: 26.25rem;
    height: 15.94rem;
  }
  .porsche-logo-1-icon {
    position: absolute;
    top: calc(50% - 96.5px);
    left: calc(50% - 75px);
    width: 9.38rem;
    height: 12.11rem;
    object-fit: cover;
  }
  .lenovo-global-corporate-logo-1-icon {
    position: absolute;
    top: calc(50% - 33.5px);
    left: calc(50% - 100px);
    width: 12.5rem;
    height: 4.17rem;
    object-fit: cover;
  }
  .sponzorigrupa {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 1.88rem;
  }
  .img-4689-photoroom-1-icon {
    position: relative;
    width: 43.75rem;
    height: 25.95rem;
    object-fit: cover;
  }
  .frameslikapopusti {
    width: 43.75rem;
    height: 25.95rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .popusti-za-nae {
    position: relative;
    font-size: 2.5rem;
  }
  .saznajte-pogodnosti-za {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 23.38rem;
    flex-shrink: 0;
  }
  .saznaj-vie4 {
    position: absolute;
    top: calc(50% - 12px);
    left: calc(50% - 117px);
    letter-spacing: 10px;
  }
  .popustisaznajvise {
    position: relative;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    width: 25rem;
    height: 3.75rem;
  }
  .okvirtekst {
    flex: 1;
    height: 26.25rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: center;
    padding: 2.69rem 6.25rem;
    box-sizing: border-box;
    gap: 4.25rem;
  }
  .popustizaclanove {
    background-color: #fff;
    width: 87.5rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
  }
  .b {
    position: absolute;
    top: 11.81rem;
    left: calc(50% - 116.5px);
  }
  .lanova {
    position: absolute;
    top: 18.31rem;
    left: calc(50% - 82.5px);
    font-size: 1.25rem;
    color: #000;
  }
  .analitika1-child {
    position: absolute;
    top: 1.06rem;
    left: calc(50% + 106.5px);
    width: 0.13rem;
    height: 18.75rem;
  }
  .membership-1-icon {
    position: absolute;
    top: 0rem;
    left: calc(50% - 107.5px);
    width: 8.13rem;
    height: 8.13rem;
    overflow: hidden;
  }
  .analitika1 {
    position: relative;
    width: 13.44rem;
    height: 19.81rem;
  }
  .b1 {
    position: absolute;
    top: 11.81rem;
    left: calc(50% - 75px);
  }
  .godina-postojanja {
    position: absolute;
    top: 18.31rem;
    left: calc(50% - 119px);
    font-size: 1.25rem;
    color: #000;
  }
  .analitika2-child {
    position: absolute;
    top: 1.06rem;
    left: calc(50% + 118px);
    width: 0.13rem;
    height: 18.75rem;
  }
  .group-icon {
    position: absolute;
    top: 0rem;
    left: calc(50% - 96px);
    width: 8.13rem;
    height: 8.13rem;
  }
  .analitika2 {
    position: relative;
    width: 14.88rem;
    height: 19.81rem;
  }
  .b2 {
    position: absolute;
    top: 11.81rem;
    left: calc(50% - 50px);
  }
  .podrunih-zborova {
    position: absolute;
    top: 18.31rem;
    left: calc(50% - 121px);
    font-size: 1.25rem;
    color: #000;
  }
  .analitika3-child {
    position: absolute;
    top: 1.06rem;
    left: calc(50% + 120px);
    width: 0.13rem;
    height: 18.75rem;
  }
  .group-icon1 {
    position: absolute;
    top: 0rem;
    left: calc(50% - 94px);
    width: 8.13rem;
    height: 8.13rem;
  }
  .analitika3 {
    position: relative;
    width: 15.13rem;
    height: 19.81rem;
  }
  .b3 {
    position: absolute;
    top: 11.83rem;
    left: calc(50% - 60.5px);
  }
  .demostratora-skijanja {
    position: absolute;
    top: 18.33rem;
    left: calc(50% - 107.5px);
    font-size: 1.25rem;
    color: #000;
  }
  .clip-path-group {
    position: absolute;
    top: 0rem;
    left: calc(50% - 65.5px);
    width: 8.13rem;
    height: 8.13rem;
  }
  .analitika4 {
    position: relative;
    width: 13.44rem;
    height: 19.83rem;
  }
  .analitikapodgrupa {
    flex: 1;
    height: 19.83rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 4.69rem;
  }
  .analitikahome {
    background-color: #fff;
    width: 89.94rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 2.5rem 9.5rem;
    box-sizing: border-box;
    font-size: 4rem;
    color: #03a9f4;
  }
  .bilteni-hzuts-a {
    position: absolute;
    top: 1.88rem;
    left: 2.5rem;
  }
  .frame-child {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 12.5rem;
    height: 15.63rem;
    object-fit: cover;
  }
  .bilten-sezona {
    margin: 0;
  }
  .bilten-sezona-20192020-container {
    position: absolute;
    top: 17.5rem;
    left: 1.06rem;
  }
  .rectangle-parent {
    position: relative;
    width: 12.5rem;
    height: 21.13rem;
  }
  .frame-parent {
    position: absolute;
    top: 6.04rem;
    left: 1.25rem;
    width: 87.63rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 2.94rem;
    font-size: 1.5rem;
    color: #03a9f4;
  }
  .lijevastrelica-icon {
    position: absolute;
    top: 14.75rem;
    left: 1.25rem;
    width: 3.75rem;
    height: 3.75rem;
  }
  .desnastrelica-child {
    position: relative;
    border-radius: 50%;
    background-color: rgba(0, 0, 0, 0.5);
    width: 3.75rem;
    height: 3.75rem;
    z-index: 0;
  }
  .vector-icon4 {
    position: absolute;
    margin: 0 !important;
    top: calc(50% - 13.5px);
    right: 1.41rem;
    width: 0.94rem;
    height: 1.69rem;
    z-index: 1;
  }
  .desnastrelica {
    position: absolute;
    top: calc(50% - 20px);
    right: 1.13rem;
    height: 3.75rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 0.63rem;
  }
  .biltenipodframe {
    position: absolute;
    width: 100%;
    top: 0rem;
    right: 0%;
    left: 0%;
    background-color: #fff;
    height: 32rem;
  }
  .bilteniframe {
    align-self: stretch;
    position: relative;
    height: 32rem;
    font-size: 2rem;
  }
  .hzuts-home-screen-desktop {
    position: relative;
    background-color: #f8f7f5;
    width: 100%;
    height: 296.88rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    gap: 2.75rem;
    text-align: center;
    font-size: 2.5rem;
    color: #000;
    font-family: Inter;
  }

  @media screen and (max-width: 960px) {
    .prviredframeova {
      width: auto;
      align-self: unset;
      height: auto;
      flex-direction: column;
      gap: 1.25rem;
      align-items: flex-start;
      justify-content: flex-start;
    }

    .objavljeno-20032023 {
      font-size: 0.94rem;
    }

    .srednjibannerdogadaji {
      width: auto;
      align-self: unset;
      height: auto;
      gap: 0.63rem;
      align-items: center;
      justify-content: flex-start;
      padding-left: 0rem;
      padding-right: 0rem;
      box-sizing: border-box;

    
    overflow: hidden; 
    }

    .otkazan-ctt-test {
      font-size: 0.94rem;
    }

    .sponzorigrupa {
      height: auto;
    }

    .okvirtekst {
      width: auto;
      align-self: stretch;
      height: auto;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      padding-left: 1.25rem;
      padding-right: 1.25rem;
      box-sizing: border-box;
      flex: unset;
    }

    .popustizaclanove {
      flex-direction: column;
    }

    .analitikapodgrupa {
      flex: 1;
      align-self: stretch;
      height: auto;
      flex-direction: row;
      align-items: center;
      justify-content: flex-start;
      padding-left: 9.38rem;
      padding-bottom: 0rem;
      box-sizing: border-box;
    }

    .hzuts-home-screen-desktop {
      width: auto;
      align-self: unset;
      height: auto;

    }
  }
  @media screen and (max-width: 420px) {
    .podruni-zborovi-hzuts-a {
      font-size: 1.5rem;
      text-align: center;
    }

    .saznajte-informacije-o {
      font-size: 1.06rem;
    }

    .saznaj-vie {
      font-size: 1.06rem;
    }

    .interski-kongresi-i {
      font-size: 1.5rem;
    }

    .saznajte-informacije-o1 {
      font-size: 1.06rem;
    }

    .prviredframeova {
      flex-direction: column;
    }

    .kako-postati-uitelj {
      font-size: 1.5rem;
      text-align: center;
    }

    .proitajte-kako-postati {
      font-size: 1.06rem;
    }

    .ulanite-se-u {
      font-size: 1.5rem;
    }

    .saznajte-informacije-kako {
      font-size: 1.06rem;
    }

    .objavljeno-20032023 {
      font-size: 0.81rem;
    }

    .srednjibannerdogadaji {
      align-self: stretch;
      width: auto;
      height: auto;
      flex-direction: row;
    }

    .otkazan-ctt-test {
      font-size: 0.69rem;
    }

    .sponzorigrupa {
      width: auto;
      align-self: unset;
      height: auto;
      gap: 0.63rem;
      align-items: center;
      justify-content: flex-start;
    }

    .popusti-za-nae {
      font-size: 1.88rem;
    }

    .saznajte-pogodnosti-za {
      font-size: 1.25rem;
    }

    .saznaj-vie4 {
      font-size: 1.13rem;
    }

    .analitikapodgrupa {
      gap: 17.19rem;
      align-items: center;
      justify-content: flex-start;
      padding-left: 31.25rem;
      box-sizing: border-box;
    }
  }



  .animate-on-scroll {
  opacity: 0;
  transform: translateY(80px);
  transition: opacity 1.1s ease, transform 1.1s ease;
}

.animate-on-scroll.active {
  opacity: 1;
  transform: translateY(0);
}




</style>