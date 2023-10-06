<template>
  <div>
<Head :title="$page.props.name" />

<VuePreloader
  background-color="#000"
  color="#fff"
  transition-type="fade-down"
  :loading-speed="25"
  :transition-speed="1400"
  @loading-is-over="showAnimation = false"
  @transition-is-over="transitionIsOver"
>

</VuePreloader>

<commerce-top-bar class="pocetnaanimacija  sm:flex" />
<div class="hzuts-home-screen-desktop">
  <div class="video-container homepageglavnaslika-icon">
            <iframe 
    class="video-fullwidth" 
    :src="'https://www.youtube.com/embed/g1QNLH6nhMM?autoplay=1&mute=1&loop=1&playlist=g1QNLH6nhMM&modestbranding=1&rel=0&controls=0&vq=hd1080'"
    frameborder="0"
    width="740"
    height="465" 
    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen>
</iframe>
</div>
 
 <!--
  <commerce-main-banner class="homepageglavnaslika-icon hidden sm:block" />
  
  <commerce-mobile-main-banner class="block sm:hidden" />
-->

                <vue-marquee-slider
              id="marquee-slider-cards"
              :space="60"
              :speed="42000"
              :width="420"
              class="pokretnitekst"
            >
              <div>Dobrodošli na našu novu web stranicu!</div>
              <div>Pratite najnovije informacije!</div>
              <div>Pogledajte planirana događanja za novu sezonu!</div>
            </vue-marquee-slider>
           

    <div class="obavijestitraka" />
    <div class="drugired">
      <div class="drugiredlijevo-parent">
        <a class="drugiredlijevo animacijakvadrati" href="https://www.skijasko-uciliste.hr" target="_blank" rel="noopener noreferrer">
          <div class="drugiredlijevotekst">
            <b class="kako-postati-uitelj"
              >Kako postati učitelj sportova na snijegu</b
            >
            <div class="saznajvise">
              <img class="vector-icon" alt="" src="/storage/slike/pocetna/vector2.svg" />
              <div class="saznaj-vie">Saznaj više</div>
            </div>
            <div class="proitajte-kako-postati">
              Pročitajte kako postati učitelj skijanja ili daskanja na snijegu
            </div>
          </div>
          <div class="slikaframe3">
            <img
              class="whatsapp-image-2023-06-14-at-1 animate-on-scroll"
              alt=""
              src="/storage/slike/pocetna/whatsapp-image-20230614-at-195410photoroom-1@2x.png"
            />
          </div>
        </a>
  
  <Link class="drugireddesno animacijakvadrati" :href="route('skijasi.commerce-theme.uclanise')">

    
          <div class="slikaframe4">
            <img
              class="fullsizerender-3-photoroom-1-icon"
              alt=""
              src="/storage/slike/pocetna/fullsizerender-3photoroom-1@2x.png"
            />
          </div>
          <div class="tekstdrugireddesno">
            <b class="ulanite-se-u">Učlanite se u HZUTS</b>
            <div class="tekstdrugiredsaznajvise">
              <img class="vector-icon" alt="" src="/storage/slike/pocetna/vector2.svg" />
              <div class="saznaj-vie">Saznaj više</div>
            </div>
            <div class="saznajte-informacije-kako">
              Saznajte informacije kako se možete učlaniti te postati dio HZUTS
              obitelji.
            </div>
          </div>
        </Link>
      </div>
    </div>
    <div class="framesadrzaji">
      <div class="prviredframeova">
       
          <Link class="drugireddesno animacijakvadrati" :href="route('skijasi.commerce-theme.podrucnizborovi')">

          <img
            class="img-5449-photoroom-1-icon"
            alt=""
            src="/storage/slike/pocetna/img-5449photoroom-1@2x.png"
          />
          <b class="podruni-zborovi-hzuts-a">Područni zborovi HZUTS-a</b>
          <div class="saznajte-informacije-o">
            Saznajte informacije o područnim zborovima
          </div>
          <div class="vector-parent">
            <img class="vector-icon2" alt="" src="/storage/slike/pocetna/vector.svg" />
            <div class="saznaj-vie2">Saznaj više</div>
          </div>
        </Link>
 
          <Link  class="drugireddesno animacijakvadrati" :href="route('skijasi.commerce-theme.interskikongres')">

          <img
            class="img-7155-photoroom-1-icon animate-on-scroll"
            alt=""
            src="/storage/slike/pocetna/img-7155photoroom-1@2x.png"
          />
          <b class="interski-kongresi-i">Interski kongresi i Demo team</b>
          <div class="saznajvise1">
            <img class="vector-icon" alt="" src="/storage/slike/pocetna/vector1.svg" />
            <div class="saznaj-vie">Saznaj više</div>
          </div>
          <div class="saznajte-informacije-o1">
            Saznajte informacije o povijest interski kongresa i članova demo
            team-a
          </div>
        </Link>
      </div>
    </div>
    <div class="dogadajitrecired">
      <div class="srednjibannerdogadaji animate-on-scroll">
        <carousel-3d :controls-visible="true" :loop="true" :display="5" :width="780" :height="530" :count="slides.length"
         :controls-prev-html="'&#10092; '" :controls-next-html="'&#10093;'" 
               :controls-width="60" :controls-height="60" :perspective="12" >
    <slide v-for="(slide, i) in slides" :index="i" :key="i" >
      <figure>
       <!-- <Link :href="route('skijasi.commerce-theme.uclanise', slide.slug)" style="color: white">  promijenit ovo za vijesti-->
        <img class="" :src="slide.image" :alt="'Image ' + i">
        <div class="objavljenotekst">
          <b class="objavljeno-20032023">{{ 'OBJAVLJENO: ' + $moment(slide.datum).format('DD.MM.YYYY') }}</b>
        </div>
        <figcaption class="fontweight">
          {{ slide.title }}
        </figcaption>

      
            <!-- </Link>--> 

      </figure>
    </slide>
</carousel-3d>
</div>

    </div>
    <div class="sponzorigrupa">
      <div class="sponzor1">
        <vue-marquee-slider
  id="marquee-slider-width"
  :speed="100000"
  :width="250"
  :paused="isPaused"
  class="rostsport-1-icon"
  @mouseenter="pauseMarquee"
    @mouseleave="resumeMarquee"
>
<a href="https://www.dreizinnen.com/en/skiresort-3-zinnen-dolomites.html">
  <img src="/storage/slike/sponzori/sponzor1.jpg" />
</a>
<a href="https://www.energiapura.info">
  <img src="/storage/slike/sponzori/sponzor2.jpg" />
</a>
<a href="https://elan.si">
  <img src="/storage/slike/sponzori/sponzor3.png" />
</a>
<a href="https://dobro.hr">
  <img src="/storage/slike/sponzori/sponzor4.png" />
</a>
  <a href="https://www.kotanyi.com/en/">
  <img src="/storage/slike/sponzori/sponzor5.jpg" />
</a>
  <a href="https://www.oryx-osiguranje.hr">
  <img src="/storage/slike/sponzori/sponzor6.png" />
</a>
  <a href="https://staklorez-buric.hr">
  <img src="/storage/slike/sponzori/sponzor7.jpg" />
</a>
</vue-marquee-slider>

      </div>
    </div>
    <div class="popustizaclanove animate-on-scroll">
      <div class="frameslikapopusti">
        <img class="img-4689-photoroom-1-icon" alt="" src="/storage/slike/pocetna/image@2x.png" />
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
    <div class="analitikahome animate-on-scroll">
      <div class="analitikapodgrupa">
        <div class="analitika1">
          <b class="b">{{ totalUsers }}</b>
          <b class="lanova">Članova</b>
          <img class="analitika1-child" alt="" src="/storage/slike/pocetna/line-112.svg" />
          <img class="membership-1-icon" alt="" src="/storage/slike/pocetna/membership-1.svg" />
        </div>
        <div class="analitika1">
          <b class="b1">87</b>
          <b class="godina-postojanja">Godina postojanja</b>
          <img class="analitika2-child" alt="" src="/storage/slike/pocetna/line-112.svg" />
          <img class="group-icon" alt="" src="/storage/slike/pocetna/group.svg" />
        </div>
        <div class="analitika1">
          <b class="b2">6</b>
          <b class="podrunih-zborova">Područnih zborova</b>
          <img class="analitika3-child" alt="" src="/storage/slike/pocetna/line-112.svg" />
          <img class="group-icon1" alt="" src="/storage/slike/pocetna/group1.svg" />
        </div>
        <div class="analitika4">
          <b class="b3">51</b>
          <b class="demostratora-skijanja">Demostratora skijanja</b>
          <img class="clip-path-group" alt="" src="/storage/slike/pocetna/clip-path-group.svg" />
        </div>
      </div>
    </div>
    <div class="bilteniframe animate-on-scroll">
      <div class="biltenipodframe">
        <b class="bilteni-hzuts-a">BILTENI HZUTS-a</b>
        <div class="frame-parent">
          <a class="rectangle-parent" href="https://hzuts.hr/repozitorij/2020/01/HZUTS-Bilten-2020-v1.3.pdf">
            <img class="frame-child" alt="" src="/storage/slike/pocetna/bilten2020.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2019/2020</p>
            </b>
          </a>
          <a class="rectangle-parent" href="https://hzuts.hr/repozitorij/2018/12/HZUTS-Bilten-2019-v1.3low.pdf">
            <img class="frame-child" alt="" src="/storage/slike/pocetna/bilten2019.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2018/2019</p>
            </b>
          </a>
          <a class="rectangle-parent" href="https://hzuts.hr/repozitorij/2017/11/HZUTS-Bilten-2018-v2.3-rgb-web.pdf">
            <img class="frame-child" alt="" src="/storage/slike/pocetna/bilten2018.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2017/2018</p>
            </b>
          </a>
          <a class="rectangle-parent" href="https://hzuts.hr/repozitorij/2016/10/HZUTS-Bilten-2017-v1.2.1-150dpiR.pdf">
            <img class="frame-child" alt="" src="/storage/slike/pocetna/bilten2017.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2016/2017</p>
            </b>
          </a>
          <a class="rectangle-parent" href="https://hzuts.hr/repozitorij/2016/02/HZUTS_Bilten_2016.pdf">
            <img class="frame-child" alt="" src="/storage/slike/pocetna/bilten2016.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2015/2016</p>
            </b>
          </a>
        </div>
        <img class="lijevastrelica-icon" alt="" src="/storage/slike/pocetna/lijevastrelica.svg" />
        <div class="desnastrelica">
          <div class="desnastrelica-child" />
          <img class="vector-icon4" alt="" src="/storage/slike/pocetna/vector11.svg" />
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
import { VueMarqueeSlider } from 'vue-marquee-slider';
import { Carousel3d, Slide } from 'vue-carousel-3d';



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


import { VuePreloader } from 'vue2-preloader';

export default {
  components: {
    CommerceTopBar,
    CommerceMainBanner,
    NovostiBanner,
    VueperSlides,
    VueperSlide,
    VueMarqueeSlider,
    Carousel3d,
Slide,
VuePreloader,


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
  showAnimation: true,

  slides: [{}, {}, {}, {}, {}, {}, {},{},{}, {}, {}, {}, {}, {},{},{}, {}, {}, {}, {}, {},{}, {}, {}, {}, {}, {},{}, {}, {}, {}, {}, {}, {}],

  isPaused: false,

  bannersponzori: {
      
        sponzori: {
          data: {
            sponzor1: {
              data: null
            },
            sponzor2: {
              data: null
            },
          }
        }
      },



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
    getSponzore() {
      this.$api.skijasiContent
        .fetch({
          slug: 'sponzori'
        })
        .then(res => {
 
    this.bannersponzori = res.data.value;

        })
        .catch(err => {
          console.error(err);
        })
    },


    pauseMarquee() {
      this.isPaused = true;
    },
    resumeMarquee() {
      this.isPaused = false;
    },


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

  async getThumbnails() {
  this.posts.data.forEach(element => {
    if (element.thumbnail) {
      this.thumbnails.push(element);
    }
  });

  // Map over thumbnails to create the slides array
  this.slides = this.thumbnails.map(item => {
    return {
      datum: item.publishedAt,
      title: item.title,
      slug: item.slug,
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


.video-container{
  width: 100vw;
  height: 115vh;
}

 iframe {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100vw;
  height: 100vh;
  transform: translate(-50%, -50%);
  pointer-events: none;
}

#text{
  position: absolute;
  color: #FFFFFF;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

@media (min-aspect-ratio: 16/9) {
  .video-container iframe {
    height: 56.25vw;
  }
}
@media (max-aspect-ratio: 16/9) {
  .video-container iframe {
    width: 177.78vh;
  }
}
@media (max-width: 767px) {
  .video-container iframe {
    width: 88vh;
    height: 95vw;
  }


}



.carousel-3d-container figure {
  margin:0;

}

.padsponzori {
 padding: 2%;
 width: 100%;
}
.carousel-3d-container figcaption {
  position: absolute;
  font-weight: 800;
  color: #fff;
  bottom: 0;
  position: absolute;
  bottom: 0;
  padding: 15px;
  font-size: 17px;
  min-width: 100%;
  box-sizing: border-box;

  background-color: rgba(0, 0, 0, 0.6);

    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: center;

    box-sizing: border-box;
}


  .homepageglavnaslika-icon {
    align-self: stretch;
    position: relative; /* make sure it's positioned relative or absolute */
    top: -3.75rem;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%; 
    
    object-fit: cover;
    opacity: 0; /* Set initial opacity to 50% */
  transition: opacity 1s ease-in-out; /* Apply a smooth transition to opacity */
  animation: fadeIn 1s ease-in-out 3s forwards; /* Apply the initial fade-in animation */
    margin-bottom: -3.7rem;
  }
  .obavijestitraka {
    align-self: stretch;
    background-color: #fff;

    margin-bottom: -4rem;
  }




  .obavijestitraka {
    align-self: stretch;
    background-color: #fff;
  }
  .kako-postati-uitelj {
    position: absolute;
    width: 100%;
    top: calc(50% - 106.5px);
    left: 0%;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 6rem;
  }
  .vector-icon {
    position: absolute;
    height: 52.63%;
    width: 5.66%;
    top: 26.32%;
    right: -0.91%;
    bottom: 21.05%;
    left: 95.25%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
  }
  .saznaj-vie {
    position: absolute;
    top: calc(50% - 9.5px);
    left: calc(50% - 52px);
    font-weight: 600;
  }
  .saznajvise {
    position: absolute;
    height: 8.92%;
    top: 91.08%;
    bottom: 0%;
    left: calc(50% - 55.01px);
    width: 6.88rem;
    font-size: 1rem;
    color: #03a9f4;
  }
  .proitajte-kako-postati {
    position: absolute;
    width: 74.74%;
    top: calc(50% + 9.5px);
    left: 12.63%;
    font-size: 1.25rem;
    letter-spacing: -0.17px;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 3rem;
  }
  .drugiredlijevotekst {
    position: absolute;
    width: 85.32%;
    top: calc(50% + 52px);
    right: 7.63%;
    left: 7.05%;
    height: 13.31rem;
  }
  .whatsapp-image-2023-06-14-at-1 {
    position: relative;
    width: 34.31rem;
    height: 22rem;
    object-fit: cover;
  }
  .slikaframe3 {
    position: absolute;
    top: 0rem;
    left: calc(50% - 274.51px);
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
  }
  .drugiredlijevo {
    flex: 1;
    position: relative;
    background-color: #fff;
    height: 37.5rem;
  }
  .fullsizerender-3-photoroom-1-icon {
    position: relative;
    width: 21.72rem;
    height: 25.23rem;
    object-fit: cover;
  }
  .slikaframe4 {
    position: absolute;
    top: 12.25rem;
    left: calc(50% - 173.24px);
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: center;
  }
  .ulanite-se-u {
    position: absolute;
    width: 100%;
    top: calc(50% - 77.5px);
    left: 0%;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 3rem;
  }
  .tekstdrugiredsaznajvise {
    position: absolute;
    height: 12.26%;
    top: 87.74%;
    bottom: 0%;
    left: calc(50% - 55px);
    width: 6.88rem;
    font-size: 1rem;
    color: #03a9f4;
  }
  .saznajte-informacije-kako {
    position: absolute;
    width: 97.78%;
    top: calc(50% - 9.5px);
    left: 1.11%;
    font-size: 1.25rem;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 3rem;
  }
  .tekstdrugireddesno {
    position: absolute;
    width: 65.22%;
    top: calc(50% - 265px);
    right: 17.39%;
    left: 17.39%;
    height: 9.69rem;
  }
  .drugireddesno {
    flex: 1;
    position: relative;
    background-color: #fff;
    height: 37.5rem;
  }
  .drugiredlijevo-parent {
    width: 87.5rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 1.25rem;
  }
  .drugired {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    padding: 0rem 1.25rem;
    box-sizing: border-box;
    max-height: 375rem;
  }
  .img-5449-photoroom-1-icon {
    position: absolute;
    height: 87.5%;
    width: 98.85%;
    top: 12.5%;
    right: 1.15%;
    bottom: 0%;
    left: 0%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    object-fit: cover;
  }
  .podruni-zborovi-hzuts-a {
    position: absolute;
    width: 85.32%;
    top: calc(50% - 254px);
    left: 7.34%;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 3rem;
  }
  .saznajte-informacije-o {
    position: absolute;
    width: 57.97%;
    top: calc(50% - 176px);
    left: 21.01%;
    font-size: 1.25rem;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 3rem;
  }
  .vector-icon2 {
    position: absolute;
    width: 5.69%;
    top: 0.31rem;
    right: -1.63%;
    left: 95.94%;
    max-width: 100%;
    overflow: hidden;
    height: 0.63rem;
  }
  .saznaj-vie2 {
    position: absolute;
    height: 100%;
    top: 0%;
    left: calc(50% - 55px);
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 6.88rem;
  }
  .vector-parent {
    position: absolute;
    height: 3.17%;
    top: 31.33%;
    bottom: 65.5%;
    left: calc(50% - 63px);
    width: 6.88rem;
    font-size: 1rem;
    color: #03a9f4;
  }
  .img-7155-photoroom-1-icon {
    position: absolute;
    height: 77.78%;
    width: 50.14%;
    top: 22.17%;
    right: 0.29%;
    bottom: 0.06%;
    left: 49.57%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    object-fit: cover;
  }
  .interski-kongresi-i {
    position: absolute;
    width: 83.91%;
    top: calc(50% - 254px);
    left: 8.12%;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 3rem;
  }
  .saznajvise1 {
    position: absolute;
    height: 3.17%;
    top: 31.33%;
    bottom: 65.5%;
    left: calc(50% - 58.32px);
    width: 6.88rem;
    font-size: 1rem;
    color: #03a9f4;
  }
  .saznajte-informacije-o1 {
    position: absolute;
    width: 63.77%;
    top: calc(50% - 176px);
    left: 18.12%;
    font-size: 1.25rem;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 3rem;
  }
  .prviredframeova {
    flex: 1;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 1.25rem;
  }
  .framesadrzaji {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    padding: 0rem 1.25rem;
    box-sizing: border-box;
    max-height: 375rem;
  }
  .srednjibannerdogadaji-child {
    align-self: stretch;
    flex: 1;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    object-fit: cover;
    z-index: 0;
  }
  .objavljeno-20032023 {
    position: relative;
    font-size: 0.94rem;
  }
  .objavljenotekst {
    margin: 0 !important;
    position: absolute;
    height: calc(100% - 536px);
    width: 32%;
    top: 0rem;
    right: 0%;
    bottom: 33.5rem;
    left: 68%;
    background-color: rgba(0, 0, 0, 0.6);
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 1.25rem 1.69rem;
    box-sizing: border-box;
    z-index: 1;
  }
  .srednjibannerdogadaji {
    width: 62.5rem;
    height: 37.5rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    gap: 0.63rem;
    z-index: 0;
  }
  .dogadajipodgrupa-child {
    position: relative;
    width: 11.88rem;
    height: 0.63rem;
    z-index: 1;
  }
  .otkazan-ctt-test {
    flex: 1;
    position: relative;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .otkazan-ctt-test-sigurnosti-wrapper {
    background-color: rgba(0, 0, 0, 0.6);
    width: 62.5rem;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: center;
    padding: 1.25rem 11.63rem;
    box-sizing: border-box;
  }
  .dogadajusredini {
    margin: 0 !important;
    position: absolute;
    width: 100%;
    right: 0rem;
    bottom: 2.75rem;
    left: 0rem;
    height: 4rem;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: center;
    z-index: 2;
  }
  .dogadajipodgrupa {
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 1.25rem 0rem;
    position: relative;
    gap: 2.06rem;
  }
  .dogadajitrecired {
    align-self: stretch;
    background-color: #fff;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 6.25rem 0rem;
    font-size: 1.25rem;
    color: #fff;
  }
  .sponzorigrupa {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    height: 8.31rem;
    overflow: hidden;
    flex-shrink: 0;
}

.sponzor1 {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    background-color: #fff;
    width: 100%;
    height: 7.69rem;
    overflow: hidden;
}

.rostsport-1-icon {
    display: flex;
    align-items: center;
    width: 100%;
    height: 100%;
    object-fit: cover;
}


  .img-4689-photoroom-1-icon {
    align-self: stretch;
    flex: 1;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    object-fit: cover;
  }
  .frameslikapopusti {
    width: 43.75rem;
    height: 25.95rem;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
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
    position: relative;
    letter-spacing: 10px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .popustisaznajvise {
    border: 2px solid #03a9f4;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 1.13rem 5.19rem;
  }
  .okvirtekst {
    width: 43.75rem;
    height: 26.25rem;
    overflow: hidden;
    flex-shrink: 0;
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
    overflow: hidden;
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
    width: 0.06rem;
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
    height: 19.81rem;
    overflow: visible;
    flex-shrink: 0;
    position: relative;
  }
  .b1 {
    position: absolute;
    top: 11.81rem;
    left: calc(50% - 71px);
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
    width: 0.06rem;
    height: 18.75rem;
  }
  .group-icon {
    position: absolute;
    top: 0rem;
    left: calc(50% - 96px);
    width: 8.13rem;
    height: 8.13rem;
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
    width: 0.06rem;
    height: 18.75rem;
  }
  .group-icon1 {
    position: absolute;
    top: 0rem;
    left: calc(50% - 94px);
    width: 8.13rem;
    height: 8.13rem;
  }
  .b3 {
    position: absolute;
    top: 11.83rem;
    left: calc(50% - 36.5px);
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
    height: 19.83rem;
    overflow: visible;
    flex-shrink: 0;
    position: relative;
  }
  .analitikapodgrupa {
    flex: 1;
    height: 19.81rem;
    padding: 0rem 8.75rem;
    box-sizing: border-box;
    gap: 4.69rem;
    display: grid;
    grid-template-columns: minmax(auto, 240px) minmax(auto, 238px) minmax(
        auto,
        242px
      ) minmax(auto, 215px);
    grid-row-gap: 0px;
    grid-column-gap: 75px;
  }
  .analitikahome {
    align-self: stretch;
    background-color: #fff;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    padding: 2.5rem 0rem;
    font-size: 4rem;
    color: #03a9f4;
  }
  .analitika1, .analitika2, .analitika3, .analitika4 {
    display: inline-block;
    flex: none;
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
    overflow: hidden;
    flex-shrink: 0;
    font-size: 2rem;
    padding-bottom: 5rem;
  }
  .hzuts-home-screen-desktop {
    position: relative;
    background-color: #f3f3f3;
    width: 100%;
    overflow: hidden;
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

  @media screen and (max-width: 1200px) {
    .saznajte-informacije-kako {
      width: 27.5rem;
    }

    .analitikapodgrupa {
    display: flex; /* Display children in a row */
    white-space: nowrap; /* Prevent wrapping */
    overflow-x: auto; /* Make it horizontally scrollable */
    overflow-y: hidden; /* Prevent vertical scrolling */
  }

  

  /* Set a fixed width for each child to prevent resizing */
  .analitika1, .analitika4 {
    width: 240px;
  }
  }


  @media screen and (max-width: 960px) {




    .drugiredlijevo {
      flex: unset;
      align-self: stretch;
    }

    .drugireddesno {
      flex: unset;
      align-self: stretch;
    }

    .drugiredlijevo-parent {
      flex: 1;
      flex-direction: column;
    }

    .drugired {
      align-self: stretch;
      width: auto;
      height: auto;
    }

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
    }

    .otkazan-ctt-test {
      font-size: 0.94rem;
    }

    .sponzorigrupa {
      height: auto;
    }

    .okvirtekst {
      width: auto;
      align-self: unset;
      height: auto;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      padding-left: 1.25rem;
      padding-right: 1.25rem;
      box-sizing: border-box;
    }

    .popustizaclanove {
      flex-direction: column;
    }

 



    .hzuts-home-screen-desktop {
      width: auto;
      align-self: unset;
      height: auto;
    }
  }
  @media screen and (max-width: 490px) {
    .homepageglavnaslika-icon {
      height: 35rem;
    }

    .obavijestitraka {
      height: 3.31rem;
      flex-direction: row;
      gap: 0rem;
      padding-top: 0rem;
      padding-bottom: 0rem;
      box-sizing: border-box;
    }

    .kako-postati-uitelj {
      font-size: 1.5rem;
      text-align: center;
      max-width: 28.13rem;
    }

    .proitajte-kako-postati {
      font-size: 1.06rem;
      max-width: 28.13rem;
    }

    .drugiredlijevotekst {
      max-width: 20rem;
    }

    .drugiredlijevo {
      height: 37.5rem;
      flex: unset;
      align-self: stretch;
    }

    .ulanite-se-u {
      font-size: 1.5rem;
      max-width: 27.5rem;
    }

    .saznajte-informacije-kako {
      font-size: 1.06rem;
      max-width: 18.75rem;
    }

    .tekstdrugireddesno {
      display: flex;
      max-width: 27.5rem;
      max-height: 13.13rem;
    }

    .drugireddesno {
      flex: unset;
      align-self: stretch;
    }

    .drugiredlijevo-parent {
      flex-direction: column;
      gap: 1.25rem;
      padding-right: 0rem;
      box-sizing: border-box;
    }

    .drugired {
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
      gap: 0rem;
      padding-left: 0.63rem;
      padding-right: 0.63rem;
      box-sizing: border-box;
    }

    .podruni-zborovi-hzuts-a {
      font-size: 1.75rem;
      text-align: center;
    }

    .saznajte-informacije-o {
      font-size: 1.06rem;
      text-align: center;
      max-width: 27.5rem;
    }

    .saznaj-vie2 {
      font-size: 1.06rem;
    }

    .interski-kongresi-i {
      font-size: 1.5rem;
    }

    .saznajte-informacije-o1 {
      font-size: 1.06rem;
      max-width: 28.13rem;
    }

    .prviredframeova {
      flex-direction: column;
    }

    .framesadrzaji {
      padding-left: 0.63rem;
      padding-right: 0.63rem;
      box-sizing: border-box;
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

    .frameslikapopusti {
      align-self: stretch;
      width: auto;
      flex: 1;
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

    .popustisaznajvise {
      width: auto;
      align-self: unset;
      flex-direction: column;
      gap: 3.13rem;
      padding-left: 9.38rem;
      padding-right: 9.38rem;
      box-sizing: border-box;
      max-width: 23.75rem;
    }

    .popustizaclanove {
      align-self: stretch;
      width: auto;
      flex: 1;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      padding-left: 0rem;
      box-sizing: border-box;
    }


  }











.pokretnitekst{
  font-size: 1rem;
  font-weight: 1000;
  opacity: 0.7;
  background-color: #fff;
  color: #03a9f4;
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}

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