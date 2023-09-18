


<template>
<div>
<Head :title="$page.props.name" />

<commerce-top-bar class="pocetnaanimacija  sm:flex" />


<div class="hzuts-home-screen-desktop">
  <commerce-main-banner class="homepageglavnaslika-icon hidden sm:block" />
    <commerce-mobile-main-banner class="block sm:hidden" />
   <!-- <img
      class="homepageglavnaslika-icon"
      alt=""
      src="/storage/slike/homepageglavnaslika@2x.png"
    />-->
    <div class="dogadajitrecired">
      <div class="dogadajipodgrupa">
        <div class="srednjibannerdogadaji">
    
        <commerce-main-banner class="" />
    <commerce-mobile-main-banner class="block sm:hidden" />
  </div>
        <img class="animate-on-scroll dogadajipodgrupa-item" alt="" src="/storage/slike/group-271.svg" />
       

        <div class="objavljenotekst">
          <b class="objavljeno-20032023">OBJAVLJENO: 20.03.2023.</b>
        </div>
      </div>
      <div class="dogadajusredini">
     
     
        <div class="otkazan-ctt-test-sigurnosti-wrapper">
          <b class="otkazan-ctt-test"
            >OTKAZAN C.T.T. TEST SIGURNOSTI - ZERMATT, 12.-16.04.2023.</b
          >
        </div>
      </div> 
    </div>
    <div class="analitikahome">
      <div class="analitikapodgrupa">
        <div class="analitika1">
          <b class="b">{{ totalUsers }}</b>
          <b class="lanova">Članova</b>
          <img class="animate-on-scroll analitika1-child" alt="" src="/storage/slike/line-11.svg" />
          <img class="animate-on-scroll membership-1-icon" alt="" src="/storage/slike/membership-1.svg" />
        </div>
        <div class="analitika2">
          <b class="b1">40</b>
          <b class="godina-postojanja">Godina postojanja</b>
          <img class="animate-on-scroll analitika2-child" alt="" src="/storage/slike/line-11.svg" />
          <img class="animate-on-scroll group-icon1" alt="" src="/storage/slike/group.svg" />
        </div>
        <div class="analitika3">
          <b class="b2">6</b>
          <b class="podrunih-zborova">Područnih zborova</b>
          <img class="animate-on-scroll analitika3-child" alt="" src="/storage/slike/line-11.svg" />
          <img class="animate-on-scroll group-icon2" alt="" src="/storage/slike/group1.svg" />
        </div>
        <div class="analitika4">
          <b class="b3">100</b>
          <b class="demostratora-skijanja">Demostratora skijanja</b>
          <img class="animate-on-scroll clip-path-group" alt="" src="/storage/slike/clip-path-group.svg" />
        </div>
      </div>
    </div>
    <div class="sponzorigrupa">
      <div class="sponzor1">
        <img class="animate-on-scroll rostsport-1-icon" alt="" src="/storage/slike/rostsport-1@2x.png" />
      </div>
      <div class="sponzor2">
        <img
          class="animate-on-scroll porsche-logo-1-icon"
          alt=""
          src="/storage/slike/223238porschelogo-1@2x.png"
        />
      </div>
      <div class="sponzor3">
        <img
          class="animate-on-scroll lenovo-global-corporate-logo-1-icon"
          alt=""
          src="/storage/slike/lenovo-global-corporate-logo-1@2x.png"
        />
      </div>
    </div>
    <div class="framesadrzaji">
     
      <div class="popustizaclanove">
        <img
          class="animate-on-scroll img-4689-photoroom-1-icon"
          alt=""
          src="/storage/slike/img-4689photoroom-1@2x.png"
        />
        <b class="popusti-za-nae">Popusti za naše članove</b>
        <div class="saznajte-pogodnosti-za">
          Saznajte pogodnosti za članove HZUTS-a
        </div>
        <div class="popustisaznajvise">
          <Link class="saznaj-vie" :href="route('skijasi.commerce-theme.uclanise')">SAZNAJ VIŠE</Link>
        </div>

      </div>
      <div class="drugired">
        <Link class="drugiredlijevo animacijakvadrati" :href="route('skijasi.commerce-theme.uclanise')">
          <div class="drugiredlijevotekst">
            <b class="kako-postati-uitelj"
              >Kako postati učitelj sportova na snijegu</b
            >
            <div class="saznajvise">
              <img class="vector-icon6" alt="" src="/storage/slike/vector6.svg" />
              <div class="saznaj-vie1">Saznaj više</div>
            </div>
            <div class="proitajte-kako-postati">
              Pročitajte kako postati učitelj skijanja ili daskanja na snijegu
            </div>
          </div>
          <img
            class="animate-on-scroll whatsapp-image-2023-06-14-at-1 animacijaslike"
            alt=""
            src="/storage/slike/whatsapp-image-20230614-at-195410photoroom-1@2x.png"
          />
        </Link>
        <Link class="drugireddesno animacijakvadrati" :href="route('skijasi.commerce-theme.uclanise')">
          <img
            class="animate-on-scroll fullsizerender-3-photoroom-1-icon"
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
              <img class=" vector-icon6" alt="" src="/storage/slike/vector6.svg" />
              <div class="saznaj-vie1">Saznaj više</div>
            </div>
          </div>
        </Link>
      </div>
      <div class="prviredframeova">
        <Link class="drugiredlijevo animacijakvadrati" :href="route('skijasi.commerce-theme.podrucnizborovi')">
          <img
            class="animate-on-scroll img-5449-photoroom-1-icon"
            alt=""
            src="/storage/slike/img-5449photoroom-1@2x.png"
          />
          <b class="podruni-zborovi-hzuts-a">Područni zborovi HZUTS-a</b>
          <div class="saznajte-informacije-o">
            Saznajte informacije o područnim zborovima
          </div>
          <div class="vector-parent">
            <img class=" vector-icon6" alt="" src="/storage/slike/vector6.svg" />
            <div class="saznaj-vie3">Saznaj više</div>
          </div>
        </Link>
        <Link  class="drugireddesno animacijakvadrati" :href="route('skijasi.commerce-theme.interskikongres')">
          <img
            class="animate-on-scroll img-7155-photoroom-1-icon"
            alt=""
            src="/storage/slike/img-7155photoroom-1@2x.png"
          />
          <b class="interski-kongresi-i">Interski kongresi i Demo team</b>
          <div class="saznajvise1">
            <img class="vector-icon6" alt="" src="/storage/slike/vector6.svg" />
            <div class="saznaj-vie1">Saznaj više</div>
          </div>
          <div class="saznajte-informacije-o1">
            Saznajte informacije o povijest interski kongresa i članova demo
            team-a
          </div>
        </Link>
      </div>
    </div>
  </div>




</div>

<!--



  <div>
    <Head :title="$page.props.name" />

    <commerce-main-banner class="hidden sm:block" />
    <commerce-mobile-main-banner class="block sm:hidden" />
    <div class="h-5 hidden sm:block" />

    


    <card class="hidden sm:block">
      <card-header>
        Kategorija
      </card-header>
      <card-body color="transparent" no-gutter>
        <carousel show="10" class="container">
          <carousel-item v-for="category, index in splitCategory" :key="index">
            <div class="flex items-start justify-start h-full flex-wrap gap-y-2">
              <Link v-if="category[0]" :href="route('skijasi.commerce-theme.category', category[0].slug)" class="bg-white h-1/2 rounded-xl block">
                <img :src="category[0].image" alt="" class="rounded-full p-4">
                <div class="pb-4 text-center text-sm">
                  {{ category[0].name }}
                </div>
              </Link>
              <Link v-if="category[1]" :href="route('skijasi.commerce-theme.category', category[1].slug)" class="bg-white h-1/2 rounded-xl block">
                <img :src="category[1].image" alt="" class="rounded-full p-4">
                <div class="pb-4 text-center text-sm">
                  {{ category[1].name }}
                </div>
              </Link>
            </div>
          </carousel-item>
        </carousel>
      </card-body>
    </card>
    <card class="sm:hidden block" :gap="0">
      <div class="text-gray-400 bg-white pl-2 pt-2">KATEGORIJA</div>
      <card-body color="white" no-gutter :radius="0" class="overflow-x-scroll hide-scrollbar pb-4">
        <div class="inline-flex items-start justify-start h-full flex-row gap-x-2 mx-2">
          <div v-for="category, index in splitCategory" :key="index" class="w-24 flex-1">
            <Link v-if="category[0]" :href="route('skijasi.commerce-theme.category', category[0].slug)" class="h-full w-24 rounded-xl flex flex-wrap">
              <img :src="category[0].image" alt="" class="rounded-full object-contain object-center w-24 h-24">
              <div class="text-center text-sm h-10 w-full line-clamp-2">{{ category[0].name }}</div>
            </Link>
            <Link v-if="category[1]" :href="route('skijasi.commerce-theme.category', category[1].slug)" class="h-full w-24 rounded-xl flex flex-wrap mt-2">
              <img :src="category[1].image" alt="" class="rounded-full object-contain object-center w-24 h-24">
              <div class="text-center text-sm h-10 w-full line-clamp-2">{{ category[1].name }}</div>
            </Link>
          </div>
        </div>
      </card-body>
    </card>

    <div class="h-4 sm:h-5" />

  // Product Terlaris 
    <card class="hidden sm:block">
      <card-header text-color="primary">
        Najprodavanije
        <card-action>
          <a href="#" class="capitalize font-normal tracking-normal text-sm inline-flex items-center">
            Pogledaj sve
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
          </a>
        </card-action>
      </card-header>
      <card-body color="transparent" no-gutter>
        <carousel show="6" class="container">
          <carousel-item v-for="product, index in bestSelling" :key="index">
            <Link :href="route('skijasi.commerce-theme.detail', product.slug)" class="bg-white rounded-xl flex w-full flex-wrap">
              <div class="w-full relative mb-2 flex items-center">
                <div class="p-2 bg-primary absolute top-0 left-4">
                  <span class="text-sm text-white font-semibold">TOP</span>
                </div>
                <div class="absolute bottom-0 w-full text-center text-white p-1">
                  <span class="z-10 relative">Prodaja / mjesec {{ getProductSoldTotal(product) }}+</span>
                  <div class="bg-black opacity-40 w-full top-0 left-0 absolute h-full z-0"></div>
                </div>
                <div class="w-full bg-contain bg-no-repeat rounded-t-xl" :style="`background-image: url('${product.productImage}'); padding-top: 100%`" />
              </div>
              <div class="flex-1 px-4 pb-4">
                <div class="text-left text-xl font-semibold line-clamp-1">{{ product.name }}</div>
              </div>
            </Link>
          </carousel-item>
        </carousel>
      </card-body>
    </card>
    <card class="sm:hidden block" :gap="0">
      <div class="text-gray-400 bg-white pl-2 pt-2">NAJPRODAVANIJE</div>
      <card-body color="white" no-gutter :radius="0" class="overflow-x-scroll overflow-y-hidden hide-scrollbar">
        <div class="inline-flex items-start justify-start h-full flex-row-reverse my-2">
          <div v-for="product, index in bestSelling" :key="index" class="w-32 flex-1 ml-2 first:mr-2">
            <Link :href="route('skijasi.commerce-theme.detail', product.slug)" class="rounded-xl border border-gray-300 flex w-32 flex-wrap">
              <div class="w-full relative mb-2 flex items-center">
                <div class="p-1 bg-primary absolute top-0 left-0 rounded-tl-xl">
                  <span class="text-sm text-white font-semibold">TOP</span>
                </div>
                <div class="w-full bg-contain bg-no-repeat rounded-t-xl" :style="`background-image: url('${product.productImage}'); padding-top: 100%`" />
              </div>
              <div class="flex-1 px-4 pb-4">
                <div class="text-left text-sm line-clamp-2">{{ product.name }}</div>
                <div class="text-xs mt-2">{{ getProductSoldTotal(product) }}+ prodano</div>
              </div>
            </Link>
          </div>
        </div>
      </card-body>
    </card>

    <div class="h-4 sm:h-5" />

    <card gap="2" class="relative hidden sm:block">
      <card-header text-color="primary" class="sticky top-0 z-30">
        Preporuka
      </card-header>
      <card-body color="transparent" no-gutter class="mt-1">
        <div class="w-full grid md:grid-cols-4 lg:grid-cols-6 gap-2">
          <commerce-product :product="product" v-for="product, index in products.data" :key="index" />
          <div class="h-5 col-span-full" />
          <div class="flex lg:col-start-3 lg:col-end-5 md:col-start-2 md:col-end-4">
            <Link :href="route('skijasi.commerce-theme.product-list')" class="bg-white flex justify-center items-center w-full text-sm py-2 border border-gray-300 hover:bg-gray-200 rounded-lg">Lihat Lainnya</Link>
          </div>
        </div>
      </card-body>
    </card>
    <card class="sm:hidden block" :gap="0">
      <div class="text-gray-400 bg-white pl-2 pt-2">PREPORUKA</div>
      <card-body color="white" no-gutter :radius="0">
        <div class="w-full grid grid-cols-2 px-2 mt-2 gap-2 bg-gradient-to-t from-gray-100 via-gray-100 to-white">
          <commerce-mobile-product :product="product" v-for="product, index in products.data" :key="index" />
          <div class="h-3 col-span-full" />
          <div class="flex col-span-full">
            <Link :href="route('skijasi.commerce-theme.product-list')" class="bg-white flex justify-center items-center w-full text-sm py-2 border border-primary text-primary hover:bg-gray-200 rounded-lg">Lihat Lainnya</Link>
          </div>
        </div>
      </card-body>
    </card>

    <div class="h-4 sm:h-5" />
  </div>





-->







  
</template>

<script>
import CommerceTopBar from '../components/commerce-top-bar.vue'

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
    }






  },




}
</script>

<style scoped>
  .homepageglavnaslika-icon {
    position: absolute;
    top: -3.75rem; 
    left: calc(50% - 720px);
    width: 90rem;
    height: 50rem;
    object-fit: cover;
opacity: 0; /* Set initial opacity to 50% */
  transition: opacity 1s ease-in-out; /* Apply a smooth transition to opacity */
  animation: fadeIn 1s ease-in-out 3s forwards; /* Apply the initial fade-in animation */
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





.srednjibannerdogadaji {
    position: absolute;
    top: 0rem;
    left: 14.06rem;
    width: 62.5rem;
    height: 37.5rem;
  }

  .dogadajipodgrupa-child {
    position: absolute;
    top: calc(50% - 324.5px);
    left: calc(50% - 495px);
    width: 62.5rem;
    height: 37.5rem;
    object-fit: contain;
  }
  .dogadajipodgrupa-item {
    position: absolute;
    top: 39.94rem;
    left: 39.06rem;
    width: 11.88rem;
    height: 0.63rem;
  }
  .dogadajipodgrupa-inner {
    position: absolute;
    top: calc(50% - 253.5px);
    left: 0rem;
    width: 11.69rem;
    height: 28.13rem;
  }
  .group-icon {
    position: absolute;
    top: calc(50% - 253.5px);
    left: 78.31rem;
    width: 11.69rem;
    height: 28.13rem;
  }
  .objavljeno-20032023 {
    position: absolute;
    top: calc(50% - 11.5px);
    left: calc(50% - 133px);
  }
  .objavljenotekst {
    position: absolute;
    top: 0rem;
    left: 56.56rem;
    background-color: rgba(0, 0, 0, 0.6);
    width: 20rem;
    height: 4.06rem;
  }
  .dogadajipodgrupa {
    position: absolute;
    top: 4.63rem;
    left: 0rem;
    width: 90rem;
    height: 40.56rem;
  }
  .otkazan-ctt-test {
    position: absolute;
    top: calc(50% - 11.5px);
    left: calc(50% - 314px);
  }
  .otkazan-ctt-test-sigurnosti-wrapper {
    position: absolute;
    top: 0rem;
    left: 0.63rem;
    background-color: rgba(0, 0, 0, 0.6);
    width: 62.5rem;
    height: 4.06rem;
  }


  .dogadajusredini {
    position: absolute;
    top: 38.06rem;
    left: 13.44rem;
    width: 63.13rem;
    height: 64.06rem;
    overflow: hidden;
  }
  .dogadajitrecired {
    position: absolute;
    top: 130rem;
    left: 0rem;
    background-color: #fff;
    width: 90rem;
    height: 47.06rem;
  }
  .b {
    position: absolute;
    top: 11.81rem;
    left: calc(50% - 120.5px);
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
    position: absolute;
    top: 0rem;
    left: 0rem;
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
  .group-icon1 {
    position: absolute;
    top: 0rem;
    left: calc(50% - 96px);
    width: 8.13rem;
    height: 8.13rem;
  }
  .analitika2 {
    position: absolute;
    top: 0rem;
    left: 18.13rem;
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
  .group-icon2 {
    position: absolute;
    top: 0rem;
    left: calc(50% - 94px);
    width: 8.13rem;
    height: 8.13rem;
  }
  .analitika3 {
    position: absolute;
    top: 0.19rem;
    left: 37.69rem;
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
    position: absolute;
    top: 0rem;
    left: 57.5rem;
    width: 13.44rem;
    height: 19.83rem;
  }
  .analitikapodgrupa {
    position: absolute;
    top: 2.5rem;
    left: 9.5rem;
    width: 70.94rem;
    height: 20rem;
  }
  .analitikahome {
    position: absolute;
    top: 224.88rem;
    left: calc(50% - 720px);
    background-color: #fff;
    width: 90rem;
    height: 25rem;
    font-size: 4rem;
    color: #03a9f4;
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
    position: absolute;
    top: 0rem;
    left: 0rem;
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
  .sponzor2 {
    position: absolute;
    top: 0rem;
    left: 28.13rem;
    background-color: #fff;
    width: 26.25rem;
    height: 15.94rem;
  }
  .lenovo-global-corporate-logo-1-icon {
    position: absolute;
    top: calc(50% - 33.5px);
    left: calc(50% - 100px);
    width: 12.5rem;
    height: 4.17rem;
    object-fit: cover;
  }
  .sponzor3 {
    position: absolute;
    top: 0rem;
    left: 56.25rem;
    background-color: #fff;
    width: 26.25rem;
    height: 15.94rem;
  }
  .sponzorigrupa {
    position: absolute;
    top: 178.94rem;
    left: 0rem;
    width: 90rem;
    height: 15.94rem;
  }

  .map-pin-1-icon {
    position: relative;
    width: 1rem;
    height: 1rem;
    overflow: hidden;
    flex-shrink: 0;
  }
  .maksimirska-51a-10000 {
    text-decoration: none;
    position: relative;
    color: inherit;
    white-space: nowrap;
  }
  .frame1 {
    width: 14.94rem;
    height: 1.06rem;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 0.75rem;
    text-align: left;
  }
  .div {
    position: relative;
    letter-spacing: -0.17px;
  }
  .frame2 {
    width: 8.88rem;
    height: 1.06rem;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 0.63rem;
  }
  .frame3 {
    width: 8.88rem;
    height: 1.13rem;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 0.63rem;
  }
  .infohzutshr {
    text-decoration: none;
    position: relative;
    letter-spacing: -0.17px;
    color: inherit;
    white-space: nowrap;
  }
  .frame4 {
    width: 7.25rem;
    height: 1.06rem;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 0.63rem;
    color: #03a9f4;
  }
  .frame {
    width: 14.94rem;
    height: 7.13rem;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 0.64rem;
    text-align: center;
    font-size: 0.88rem;
    color: #000;
  }
  .kontakt-parent {
    margin: 0 !important;
    position: absolute;
    right: 19.25rem;
    bottom: 13.81rem;
    width: 14.94rem;
    height: 10.5rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1.88rem;
    z-index: 1;
    white-space: nowrap;
  }
  .o-nama {
    position: relative;
    font-weight: 600;
    white-space: nowrap;
  }
  .osnovne-informacije {
    text-decoration: none;
    position: relative;
    font-weight: 500;
    color: inherit;
    white-space: nowrap;
  }
  .frame6 {
    width: 8.63rem;
    height: 7.06rem;
    overflow:visible;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 0.64rem;
    font-size: 0.88rem;
    color: #000;
  }
  .frame5 {
    width: 8.63rem;
    height: 16.44rem;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1.88rem;
  }
 
  .frame-parent {
    margin: 0 !important;
    position: absolute;
    right: 39.19rem;
    bottom: 9.88rem;
    width: 8.63rem;
    height: 14.44rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    gap: 0.94rem;
    z-index: 2;
  }
  .copyright-2023 {
    position: absolute;
    margin: 0 !important;
    bottom: 1.69rem;
    left: calc(50% - 227px);
    font-size: 1rem;
    font-weight: 600;
    color: #fff;
    z-index: 3;
    white-space: nowrap;
  }
  .img-5195-photoroom-1-icon {
    position: absolute;
    margin: 0 !important;
    bottom: 4.56rem;
    left: 0rem;
    width: 40.88rem;
    height: 23.88rem;
    object-fit: cover;
    z-index: 4;
  }
  .pratite-nas-wrapper {
    width: 6.44rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    white-space: nowrap;
  }
  .vector-icon2 {
    position: absolute;
    right: 0.47rem;
    bottom: 0.47rem;
    width: 0.93rem;
    height: 0.93rem;
  }
  .instagram-group {
    text-decoration: none;
    position: absolute;
    right: 9.38rem;
    bottom: 0rem;
    border-radius: 5px;
    background-color: rgba(29, 161, 242, 0.95);
    width: 1.88rem;
    height: 1.88rem;
  }
  .vector-icon3 {
    position: absolute;
    right: 0.66rem;
    bottom: 0.49rem;
    width: 0.52rem;
    height: 0.9rem;
  }
  .facebook-group {
    text-decoration: none;
    position: absolute;
    right: 6.25rem;
    bottom: 0rem;
    border-radius: 5px;
    background-color: rgba(29, 161, 242, 0.95);
    width: 1.88rem;
    height: 1.88rem;
  }
  .vector-icon4 {
    position: absolute;
    right: 0.45rem;
    bottom: 0.53rem;
    width: 0.98rem;
    height: 0.81rem;
  }
  .twitter-group {
    text-decoration: none;
    position: absolute;
    right: 3.13rem;
    bottom: 0rem;
    border-radius: 5px;
    background-color: rgba(29, 161, 242, 0.95);
    width: 1.88rem;
    height: 1.88rem;
  }
  .vector-icon5 {
    position: absolute;
    right: 0.49rem;
    bottom: 0.53rem;
    width: 0.9rem;
    height: 0.85rem;
  }
  .linkedin-group {
    text-decoration: none;
    position: absolute;
    right: 0rem;
    bottom: 0rem;
    border-radius: 5px;
    background-color: rgba(29, 161, 242, 0.95);
    width: 1.88rem;
    height: 1.88rem;
    
  }
  .frame9 {
    position: relative;
    width: 11.25rem;
    height: 1.88rem;
    overflow: hidden;
    flex-shrink: 0;
  }
  .frame-group {
    width: 11.25rem;
    height: 5.25rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1.88rem;
  }
  .frame8 {
    position: absolute;
    top: -3.37rem;
    left: 0rem;
    width: 11.25rem;
    height: 8.63rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
  }
  .grupasocialnemreze {
    position: absolute;
    margin: 0 !important;
    right: 3rem;
    bottom: 19.06rem;
    width: 11.25rem;
    height: 1.88rem;
    z-index: 5;
  }

  .img-4689-photoroom-1-icon {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 43.75rem;
    height: 25.95rem;
    object-fit: cover;
  }
  .popusti-za-nae {
    position: absolute;
    top: 2.19rem;
    left: calc(50% + 129px);
    font-size: 2.5rem;
  }
  .saznajte-pogodnosti-za {
    position: absolute;
    top: calc(50% - 87px);
    left: calc(50% + 177px);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 23.38rem;
  }
  .saznaj-vie {
    position: absolute;
    top: calc(50% - 12px);
    left: calc(50% - 117px);
    letter-spacing: 10px;
  }
  .popustisaznajvise {
    position: absolute;
    top: 16.63rem;
    left: 54.81rem;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    width: 25rem;
    height: 3.75rem;
  }
  .popustisaznajvise:hover {
    background-color: #03a9f4;
    color: #fff; 
  }

  .popustizaclanove {
    position: absolute;
    top: 145.19rem;
    left: 1.25rem;
    background-color: #fff;
    width: 87.5rem;
    height: 26.25rem;
    font-size: 1.25rem;
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
  .vector-icon6 {
  position: absolute;
  height: 52.63%;
  width: 5.77%;
  top: calc(26.32% + 3px); /* Adjusted top value */
  right: -0.96%;
  bottom: 21.05%;
  left: 95.19%;
  max-width: 100%;
  align-items: center;
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
  .drugiredlijevo {
    position: absolute;
    top: 0rem;
    left: 0rem;
    background-color: #fff;
    width: 43.13rem;
    height: 37.5rem;
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
  .drugireddesno {
    position: absolute;
    top: 0rem;
    left: 44.38rem;
    background-color: #fff;
    width: 43.13rem;
    height: 37.5rem;
  }
  .drugired {
    position: absolute;
    top: 39.06rem;
    left: 1.25rem;
    width: 87.5rem;
    height: 37.5rem;
    overflow: hidden;
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
  .vector-icon8 {
    position: absolute;
    top: 0.31rem;
    left: 6.19rem;
    width: 0.38rem;
    height: 0.63rem;
  }
  .saznaj-vie3 {
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
  .saznajvise1 {
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
    position: absolute;
    top: 0rem;
    left: 1.25rem;
    width: 87.5rem;
    height: 37.5rem;
    overflow: hidden;
  }


  .framesadrzaji {
    position: absolute;
    top: 51.56rem;
    left: 0rem;
    width: 100%;
    height: 225.25rem;
    overflow: hidden;
    font-size: 2.5rem;
    color: #000;
  }
  .hzuts-home-screen-desktop {
    position: relative;
    background-color: #f8f7f5;
    width: 100%;
    height: 252rem;
    text-align: center;
    font-size: 1.25rem;
    color: #fff;
    font-family: Inter;
  }

  @media screen and (max-width: 1200px) {
    .hzuts-home-screen-desktop {
      max-width: 1200px;
    }
  }
  @media screen and (max-width: 960px) {
    .hzuts-home-screen-desktop {
      max-width: 960px;
    }
  }
  @media screen and (max-width: 420px) {
    .hzuts-home-screen-desktop {
      max-width: 420px;
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