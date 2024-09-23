<template>
  <div>
<Head :title="$page.props.name" />

    <VuePreloader
      v-if="showPreloader"
      background-color="#000"
      color="#4698F4"
      transition-type="fade-down"
      :loading-speed="25"
      :transition-speed="1400"
      @loading-is-over="showAnimation = false"
      @transition-is-over="transitionIsOver"
    >
    </VuePreloader>

<commerce-top-bar class="pocetnaanimacija sm:flex" :class="{ 'pocetnaanimacija': !firstLoad }"/>
<div class="hzuts-home-screen-desktop" >

  <div class="homepageglavnaslika-icon" :class="['video-container', isSmallScreen ? 'mobile' : 'desktop', { 'pocetnaanimacija': !firstLoad }]">
      <iframe
        id="youtube-player"
        :src="isSmallScreen ? mobileVideoUrl : desktopVideoUrl"
        frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
      <div class="overlay"></div>
    </div>

 
 <!--
  <commerce-main-banner class="homepageglavnaslika-icon hidden sm:block" />
  
  <commerce-mobile-main-banner class="block sm:hidden" />
-->

                <vue-marquee-slider
              id="marquee-slider-cards"
              :space="60"
              :speed="42000"
              :width="computedSpace"
              class="pokretnitekst"
            >
              <div>Važne vijesti</div>
              <div>Važne vijesti</div>
              <div>Važne vijesti</div>
              <div>Važne vijesti</div>
              <div>Važne vijesti</div>
            </vue-marquee-slider>
           

    <div class="obavijestitraka" />


    
 
    
<!--

      <carousel-3d :controls-visible="true" :loop="false" :display="3" :width="550" :height="360" :count="slides.length"
         :controls-prev-html="'&#10092; '" :controls-next-html="'&#10093;'" 
               :controls-width="60" :controls-height="60" :perspective="1" 
        
               ref="carousel"
               @after-slide-change="updateCurrentIndex">
    <slide v-for="(slide, i) in slides" :index="i" :key="i" >
      <figure>
       <!- <Link :href="route('skijasi.commerce-theme.uclanise', slide.slug)" style="color: white">  promijenit ovo za vijesti->
        <img class="" :src="slide.image" :alt="'Image ' + i">
        <div class="objavljenotekst">
          <b class="objavljeno-20032023">{{ 'OBJAVLJENO: ' + $moment(slide.datum).format('DD.MM.YYYY') }}</b>
        </div>
        <figcaption class="fontweight">
          {{ slide.title }}
        </figcaption>

      
             </Link>

      </figure>
    </slide>
</carousel-3d>

--> 
<div class="dogadajitrecired ">
  <div class="pogledajvisecontainer">
  <Link :href="route('skijasi.commerce-theme.arhivavijesti')" class="view-more-button">
    Pogledaj više <span class="pogledajarrow">→</span>
  </Link>
</div>

    
      <ssr-carousel  v-if="limitedSlides.length > 0" class="dogadajipodgrupa"
      overflow-visible
      show-arrows
  :slides-per-page='4'
  gutter='40'
  :peek='40'
  :responsive='[
    {
      minWidth: 1280,
      slidesPerPage: 4,
    },
    {
      maxWidth: 1024,
      slidesPerPage: 3,
    },
    {
      maxWidth: 867,
      slidesPerPage: 2,
    },
      {
        maxWidth: 600,  
        slidesPerPage: 1,  
        gutter: 12,
      }
  ]'>
<template>
  <div class="dogadajipodgrupa-child" v-for="(slide, i) in limitedSlides" :index="i" :key="i">

    <a v-if="slide.link" :href="slide.link" style="text-decoration: none; color: #3498db;">
      <!-- Slide content -->
      <img class="slikeslider" :src="slide.image" :alt="'Image ' + i">
      <div class="vijestinaslov">
        {{ slide.title }}
        <div class="vijestitekst" v-html="slide.content"></div>
      </div>
      <b class="objavljeno-20032023">{{ $moment(slide.datum).format('DD.MM.YYYY') }}</b>
    </a>
    <!-- Render slide content normally if slide.url doesn't exist -->
    <template v-else>
      <img class="slikeslider" :src="slide.image" :alt="'Image ' + i">
      <div class="vijestinaslov">
        {{ slide.title }}
        <div class="vijestitekst" v-html="slide.content"></div>
      </div>
      <b class="objavljeno-20032023">{{ $moment(slide.datum).format('DD.MM.YYYY') }}</b>
    </template>
  </div>
</template>


<!-- Back Arrow -->
<template #back-arrow='{ disabled }'>
    <div class="arrow-overlay dogadajipodgrupa" :style="{ left: '-2rem', backgroundColor: disabled ? 'transparent' : 'rgba(0, 0, 0, 0.5)' }">
      <div class="arrow" :class="{ 'is-disabled': disabled }"><svg width="16" height="28" viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14 26L2 14L14 2" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</div> 
    </div>
</template>

<!-- Next Arrow -->
<template #next-arrow='{ disabled }'>
    <div class="arrow-overlay dogadajipodgrupa" :style="{ right: '-2rem', backgroundColor: disabled ? 'transparent' : 'rgba(0, 0, 0, 0.5)' }">
      <div class="arrow" :class="{ 'is-disabled': disabled }"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28" fill="none">
  <path d="M2 26L14 14L2 2" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div> 
    </div>
</template>



</ssr-carousel>




    </div>



    <div class="drugired">
      <div class="drugiredlijevo-parent">
        <a class="drugiredlijevo animacijakvadrati" href="https://www.skijasko-uciliste.hr" target="_blank" rel="noopener noreferrer">
          <div class="drugiredlijevotekst">
            <b class="kako-postati-uitelj"
              >Kako postati učitelj sportova na snijegu</b
            >
            <div class="saznajvise">
              <img class="home-vector-icon" alt="" src="/storage/slike/pocetna/vector2.svg" />
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
              class="fullsizerender-3-photoroom-1-icon animate-on-scroll"
              alt=""
              src="/storage/slike/pocetna/fullsizerender-3photoroom-1@2x.png"
            />
          </div>
          <div class="tekstdrugireddesno">
            <b class="ulanite-se-u">Učlanite se u HZUTS</b>
            <div class="tekstdrugiredsaznajvise">
              <img class="home-vector-icon" alt="" src="/storage/slike/pocetna/vector2.svg" />
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
       
    <!--Link-->      <Link class="drugireddesno animacijakvadrati" :href="route('skijasi.commerce-theme.savjetizaclanove')">

          <img
            class="img-5449-photoroom-1-icon animate-on-scroll"
            alt=""
            src="/storage/slike/pocetna/img-5449photoroom-1@2x.png"
          />
          <b class="podruni-zborovi-hzuts-a">Savjeti za članove</b>
          <div class="saznajte-informacije-o">
            Sve što trebate znati na jednom mjestu
          </div>
          <div class="vector-parent">
            <img class="home-vector-icon2" alt="" src="/storage/slike/pocetna/vector.svg" />
            <div class="saznaj-vie2">Saznaj više</div>
          </div>
     <!--Link-->   </Link>
 
          <Link  class="drugireddesno animacijakvadrati" :href="route('skijasi.commerce-theme.interskikongres')">

          <img
            class="img-7155-photoroom-1-icon animate-on-scroll"
            alt=""
            src="/storage/slike/pocetna/img-7155photoroom-1@2x.png"
          />
          <b class="interski-kongresi-i">Interski kongresi i Demo team</b>
          <div class="saznajvise1">
            <img class="home-vector-icon" alt="" src="/storage/slike/pocetna/vector1.svg" />
            <div class="saznaj-vie">Saznaj više</div>
          </div>
          <div class="saznajte-informacije-o1">
            Saznajte informacije o povijest interski kongresa i članova demo
            team-a
          </div>
        </Link>
      </div>
    </div>
   
    <div class="sponzorigrupa">
      <div class="sponzor1">
        <vue-marquee-slider
  id="marquee-slider-width"
  :speed="100000"
  :width="250"
  :space="100"
  :paused="isPaused"
  class="sponzor1"
  @mouseenter="pauseMarquee"
    @mouseleave="resumeMarquee"
>
<a class="rostsport-1-icon" href="https://www.dreizinnen.com/en/skiresort-3-zinnen-dolomites.html">
  <img src="/storage/slike/sponzori/sponzor1.jpg" />
</a>
<a class="rostsport-1-icon" href="https://www.energiapura.info">
  <img src="/storage/slike/sponzori/sponzor2.jpg" />
</a>
<a class="rostsport-1-icon" href="https://elan.si">
  <img src="/storage/slike/sponzori/sponzor3.png" />
</a>
<a class="rostsport-1-icon" href="https://dobro.hr">
  <img src="/storage/slike/sponzori/sponzor4.png" />
</a>
  <a class="rostsport-1-icon" href="https://www.kotanyi.com/en/">
  <img src="/storage/slike/sponzori/sponzor5.jpg" />
</a><!--
  <a class="rostsport-1-icon" href="https://www.oryx-osiguranje.hr">
  <img src="/storage/slike/sponzori/sponzor6.png" />
</a>-->
  <a class="rostsport-1-icon" href="https://staklorez-buric.hr">
  <img src="/storage/slike/sponzori/sponzor7.jpg" />
</a>
<!-- <a class="rostsport-1-icon" href="https://lenovostore.hr">
  <img src="/storage/slike/sponzori/sponzor8.png" />
</a> -->
<a class="rostsport-1-icon" href="https://5th-element.com.hr">
  <img src="/storage/slike/sponzori/sponzor9.jpg" />
</a>
<!-- <a class="rostsport-1-icon" href="https://www.bolle.com">
  <img src="/storage/slike/sponzori/sponzor10.jpg" />
</a> -->
<a class="rostsport-1-icon" href="https://www.jamnica.hr">
  <img src="/storage/slike/sponzori/sponzor11.jpg" />
</a>
<a class="rostsport-1-icon" href="https://klara.hr">
  <img src="/storage/slike/sponzori/sponzor12.jpg" />
</a><!--
<a class="rostsport-1-icon" href="https://www.oryx-asistencija.hr">
  <img src="/storage/slike/sponzori/sponzor13.png" />
</a>-->
<a class="rostsport-1-icon" href="https://www.seat.hr">
  <img src="/storage/slike/sponzori/sponzor14.jpg" />
</a>
<a class="rostsport-1-icon" href="https://galic-vina.hr">
  <img src="/storage/slike/sponzori/sponzor15.png" />
</a>

<a class="rostsport-1-icon" href="https://croatia.hr">
  <img src="/storage/slike/sponzori/sponzor16.png" />
</a>
<a class="rostsport-1-icon" href="https://www.milojevic.hr">
  <img src="/storage/slike/sponzori/sponzor17.png" />
</a>
<a class="rostsport-1-icon" href="https://www.messer.hr">
  <img src="/storage/slike/sponzori/sponzor18.jpg" />
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
          <!--Link-->     <Link class="saznaj-vie4" :href="route('skijasi.commerce-theme.popustizaclanove')">SAZNAJ VIŠE</Link>
        </div>
      </div>
    </div>
    <div class="analitikahome animate-on-scroll">
      <div class="analitikapodgrupa">
        <div class="analitika1">
          <b class="b">{{ totalUsers }}</b>
          <b class="lanova">Članova</b>
          <img class="membership-1-icon" alt="" src="/storage/slike/pocetna/membership-1.svg" />
        </div>
        <div class="analitika1">
          <b class="b1">87</b>
          <b class="godina-postojanja">Godina postojanja</b>
          <img class="group-icon" alt="" src="/storage/slike/pocetna/group.svg" />
        </div>
        <div class="analitika1">
          <b class="b2">6</b>
          <b class="podrunih-zborova">Područnih zborova</b>
          <img class="group-icon1" alt="" src="/storage/slike/pocetna/group1.svg" />
        </div>
        <div class="analitika1">
          <b class="b3">61</b>
          <b class="demostratora-skijanja">Demonstratora skijanja</b>
          <img class="clip-path-group" alt="" src="/storage/slike/pocetna/clip-path-group.svg" />
        </div>
      </div>
    </div>

  
    <div class="bilteniframe animate-on-scroll">


      <div class="biltenipodframe">
        <b class="bilteni-hzuts-a">BILTENI HZUTS-a</b>

        <div class="slider-container">
        <img class="slider-arrow left-arrow" src="/storage/slike/pocetna/lijevastrelica.svg" @click="moveSlider(-1)">
      <div class="bilteni-slides">
     
          <a class="bilteni-rectangle-parent " href="/storage/slike/pocetna/bilteni/HZUTS-Bilten-2020-v1.3.pdf">
            <img class="bilteni-frame-child" alt="" src="/storage/slike/pocetna/bilten2020.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2019/2020</p>
            </b>
          </a>
          <a class="bilteni-rectangle-parent " href="/storage/slike/pocetna/bilteni/HZUTS-Bilten-2019-v1.3low.pdf">
            <img class="bilteni-frame-child" alt="" src="/storage/slike/pocetna/bilten2019.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2018/2019</p>
            </b>
          </a>
          <a class="bilteni-rectangle-parent " href="/storage/slike/pocetna/bilteni/HZUTS-Bilten-2018-v2.3-rgb-web.pdf">
            <img class="bilteni-frame-child" alt="" src="/storage/slike/pocetna/bilten2018.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2017/2018</p>
            </b>
          </a>
          <a class="bilteni-rectangle-parent " href="/storage/slike/pocetna/bilteni/HZUTS-Bilten-2017-v1.2.1-150dpiR.pdf">
            <img class="bilteni-frame-child" alt="" src="/storage/slike/pocetna/bilten2017.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2016/2017</p>
            </b>
          </a>
          <a class="bilteni-rectangle-parent " href="/storage/slike/pocetna/bilteni/HZUTS_Bilten_2016.pdf">
            <img class="bilteni-frame-child" alt="" src="/storage/slike/pocetna/bilten2016.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2015/2016</p>
            </b>
          </a>
        
          <a class="bilteni-rectangle-parent " href="/storage/slike/pocetna/bilteni/HZUTS_Bilten_2015.pdf">
            <img class="bilteni-frame-child" alt="" src="/storage/slike/pocetna/bilten2015.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2014/2015</p>
            </b>
          </a>

          <a class="bilteni-rectangle-parent " href="/storage/slike/pocetna/bilteni/HZUTS_Bilten_2014.pdf">
            <img class="bilteni-frame-child" alt="" src="/storage/slike/pocetna/bilten2014.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2013/2014</p>
            </b>
          </a>

          <a class="bilteni-rectangle-parent " href="/storage/slike/pocetna/bilteni/HZUTS_Bilten_2013.pdf">
            <img class="bilteni-frame-child" alt="" src="/storage/slike/pocetna/bilten2013.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2012/2013</p>
            </b>
          </a>
          <a class="bilteni-rectangle-parent " href="/storage/slike/pocetna/bilteni/HZUTS_Bilten_2012.pdf">
            <img class="bilteni-frame-child" alt="" src="/storage/slike/pocetna/bilten2012.png" />
            <b class="bilten-sezona-20192020-container">
              <p class="bilten-sezona">Bilten sezona</p>
              <p class="bilten-sezona">2011/2012</p>
            </b>
          </a>
    
      </div>
      
      <img class="slider-arrow right-arrow" src="/storage/slike/pocetna/desnipointer.svg" @click="moveSlider(1)">
    </div>
    </div>
    </div>

  </div>
</div>
</template>











<script>
import CommerceTopBar from '../components/commerce-top-bar.vue'
import NovostiBanner from './../components/novosti-banner.vue'

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
 
  data() {
    return {
      showPreloader: false,
      showAnimation: true,


      firstLoad: true, 

      scrollPosition: 0,
    maxScroll: 0,


    
      desktopVideoUrl:
        'https://www.youtube.com/embed/9QR0c8cybkM?autoplay=1&mute=1&loop=1&playlist=9QR0c8cybkM&modestbranding=1&rel=0&controls=0&vq=hd2160',
      mobileVideoUrl:
        'https://www.youtube.com/embed/kYD8pPOTmDs?autoplay=1&mute=1&loop=1&playlist=kYD8pPOTmDs&modestbranding=1&rel=0&controls=0&vq=hd2160',
      isSmallScreen: window.innerWidth < 800,

// za clanke
      clanci:  [],
    thumbnails: [],
  // za clanke


  slides: [],

  isPaused: false,

  currentIndex: 0,

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




  window.addEventListener('resize', this.updateScreenSize);

  
  const slider = this.$el.querySelector('.bilteni-slides');
  this.maxScroll = slider.scrollWidth - slider.clientWidth;
  this.updateArrowsVisibility();



  },
  computed: {
    limitedSlides() {
      if (window.innerWidth < 800) {
        return this.slides.slice(0, 3);
      } else {
      return this.slides.slice(0, 4); } // This will take the first 3 slides
    },

    computedSpace() {
    // Check if window width is less than 500
    if (window.innerWidth < 500) {
      return 180;
    }
    return 410;
  },


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

    user(state) {
    return state.user
  },

splitCategory() {
  return this.$_.chunk(this.productCategories, 2)
}
  },

 


  beforeDestroy() {
    window.removeEventListener('resize', this.updateScreenSize);
  },

  watch: {
    $route(to, from) {
      this.firstLoad = from === null || from === undefined;
    },
    
  },
  methods: {
  
    
    moveSlider(direction) {
    const slider = this.$el.querySelector('.bilteni-slides');
    const amount = direction * 250;
    slider.scrollBy({
      left: amount,
      behavior: 'smooth'
    });
    this.scrollPosition = slider.scrollLeft;

    // Update arrows visibility
    this.updateArrowsVisibility();
  },

  updateArrowsVisibility() {
    const leftArrow = this.$el.querySelector('.left-arrow');
    const rightArrow = this.$el.querySelector('.right-arrow');

    // Hide left arrow if at the start
    if (this.scrollPosition <= 0) {
      leftArrow.style.display = 'none';
    } else {
      leftArrow.style.display = 'block';
    }

    // Hide right arrow if at the end
    if (this.scrollPosition >= this.maxScroll) {
      rightArrow.style.display = 'none';
    } else {
      rightArrow.style.display = 'block';
    }
  },
   

    checkAnimationStatus() {
  // Check if the animation has been shown before
  const animationShown = localStorage.getItem('animationShown');
  console.log("TEST:", animationShown);
  if (!animationShown) {
    // Check the time since the last animation
    const lastAnimationTime = localStorage.getItem('lastAnimationTime');
    const currentTime = new Date().getTime();
    const timeDifference = currentTime - lastAnimationTime;

    // If not shown in the last 12 hours, show the animation
    if (!lastAnimationTime || timeDifference > 12 * 60 * 60 * 1000) {
      this.showAnimation = true;
      localStorage.setItem('lastAnimationTime', currentTime);
      console.log("TEST2:");
    }
  }
},





    checkPreloaderStatus() {
      const lastVisitTimestamp = localStorage.getItem('lastVisitTimestamp');

      if (!lastVisitTimestamp || this.isTimestampOlderThan12Hours(lastVisitTimestamp)) {
        // If no timestamp is found or it's older than 12 hours, show the preloader
        this.showPreloader = true;

        // Update the timestamp in local storage to the current time
        localStorage.setItem('lastVisitTimestamp', new Date().getTime().toString());
      }
    },

    isTimestampOlderThan12Hours(timestamp) {
      const twelveHoursInMilliseconds = 12 * 60 * 60 * 1000;
      const currentTime = new Date().getTime();
      const lastVisitTime = parseInt(timestamp);

      return currentTime - lastVisitTime > twelveHoursInMilliseconds;
    },


    transitionIsOver() {
  // Set a flag in local storage to indicate that the animation has been shown
  localStorage.setItem('animationShown', 'true');

  console.log("TEST1");

  // Set the current timestamp in localStorage
  localStorage.setItem('lastAnimationTime', new Date().getTime());

  this.showAnimation = false;
},


 

    updateScreenSize() {
      this.isSmallScreen = window.innerWidth < 800;
    },


    updateCurrentIndex(newIndex) {
    this.currentIndex = newIndex;
},


    goToSlide(index) {
        this.$refs.carousel.goSlide(index);
        this.currentIndex = index;
    },
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
  // Filter out unpublished posts
  const publishedPosts = this.posts.data.filter(post => post.published === 1);

  // Iterate over the filtered, published posts
  publishedPosts.forEach(element => {
    if (element.thumbnail) {
      this.thumbnails.push(element);
    }
  });

  // Map over thumbnails of published posts to create the slides array
  this.$set(this, 'slides', this.thumbnails.map(item => {
    return {
      datum: item.publishedAt,
      title: item.title,
      link: item.link,
      content: item.content,
      slug: item.slug,
      published: item.published,
      image: item.thumbnail 
    };
  }));
}


  },

  created() {
    this.fetchPosts();

    this.checkAnimationStatus();
    this.checkPreloaderStatus();
  },


}
</script>

<style scoped>

.video-container {
  position: relative;
  width: 100%;
}

.video-container.mobile {
  padding-bottom: 133.33%; /* 3:4 aspect ratio for mobile */
}

.video-container.desktop {
  padding-bottom: 60.25%; /* 16:9 aspect ratio for desktop */
}

#youtube-player {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 8%; /* sakrivanje logoa */
  background: #f3f3f3; 
  pointer-events: none; /* Ensure the overlay doesn't block interaction */
}

#text{
  position: absolute;
  color: #FFFFFF;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}




.arrow-overlay {
  background-color: transparent;

    position: absolute;
    top: 0;
    bottom: 0;
    width: 38px;
    height: 300px; 
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10; /* Make sure the overlay is on top */
}

.arrow {
    font-size: 24px; /* Adjust based on the desired size of the arrow */
    cursor: pointer;
    color: white; /* Color of the arrow */
}

.arrow.is-disabled {
    opacity: 0;


}



.pogledajvisecontainer {
  position: relative;
  align-self: flex-end; /* Aligns the container to the right */
  width: auto; /* Adjust this as needed */
  margin-top: auto; /* Pushes the container to the top */
}

.view-more-button {
  position: relative;
  top: 5%; /* Adjust as needed */
  padding-bottom: 20px;
  padding-right: 10px;
  color: #000;
  text-decoration: none; /* Removes underline from links */
  font-weight: bold; /* Makes the text bold */
  border-radius: 6px; /* Slight rounding of corners */
  display: flex; /* Aligns the text and the arrow nicely */
  align-items: center; /* Centers items vertically */
  gap: 3px; /* Spacing between text and arrow */
  font-size: 15px;
  cursor: pointer; /* Changes the cursor to a pointer on hover */

font-family: Inter;
font-size: 15px;
font-style: normal;
font-weight: 700;
line-height: normal;

transition: transform 0.3s ease, color 0.3s ease; /* Smooth transition for hover effects */


}

.view-more-button:hover {
  transform: scale(1.05); 
  color: #3498db; 
}

.pogledajarrow {
  display: block;
  font-size: 16px;
  color: #03a9f4;
  transition: transform 0.3s ease; /* Smooth transition for hover effect */
}

.view-more-button:hover .arrow {
  transform: translateX(5px); /* Moves the arrow to the right on hover */
}


.vijestinaslov{
align-self: stretch;
    position: relative;

    text-align: left;
 padding: 3%;


    color: #000;
font-family: Inter;
font-size: 1.1rem;
font-style: normal;
font-weight: 600;
line-height: normal;
  }
  .vijestitekst {
  color: #000;
  font-family: Inter;
  font-size: 12px;
  font-style: normal;
  font-weight: 300;
  line-height: normal;
  padding-top: 2%;
  
  display: -webkit-box;       /* Required for line-clamp to work */
  -webkit-line-clamp: 3;      /* Truncate text after 3 lines */
  -webkit-box-orient: vertical; /* Required for line-clamp to work */
  overflow: hidden;           /* Hide any content that exceeds this height */
  max-height: calc(1.2em * 3);  /* Adjust based on line-height and number of lines */
}


.dogadajipodgrupa-child {
  transition: transform 0.3s ease-in-out; /* Smooth transition for scaling */
  z-index: 1; /* Default z-index */
}

.dogadajipodgrupa-child .vijestitekst {
    height: 5%;           /* Set the height to 20% of parent */
    overflow: hidden;      /* Hide any content that exceeds this height */
    display: block;        /* Ensure it behaves like a block element */
    display: -webkit-box;      /* Important for line-clamp to work */
    -webkit-line-clamp: 3;     /* Truncate text after 3 lines */
    -webkit-box-orient: vertical; /* Required for line-clamp to work */
}


.dogadajipodgrupa-child:hover {
  transform: scale(1.15);
    z-index: 1000; 
    box-shadow: 0 3px 4px rgba(0, 0, 0, 0.15); 
}





.carousel-3d-container {
    overflow: visible;
}

.carousel-3d-controls-prev {
    left: -90px; 
}

.carousel-3d-controls-next {
    right: -90px; 
}

.slide-dots {
    display: flex;
    justify-content: center;
    margin-top: 10px; 
}




.slide-dots span {
    width: 10px;
    height: 10px;
    background-color: gray;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.slide-dots .active-dot {
    background-color: #03a9f4; 
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
    position: relative; 
    top: -3.75rem;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%; 
    
    object-fit: cover;
    /* opacity: 0;  Set initial opacity to 50% 
  transition: opacity 1s ease-in-out;  Apply a smooth transition to opacity 
  animation: fadeIn 1s ease-in-out 3s forwards;  Apply the initial fade-in animation */
    margin-bottom: -3.7rem;
  }
  .obavijestitraka {
    align-self: stretch;


    margin-bottom: -4rem;
  }



  .slider-container {
    display: flex;
    align-items: center;
    justify-content: center;

    overflow: hidden;
width: 100%;
  height: 100%;    
}


.bilteni-slides {
  width: 100%;
  height: 100%;
  display: flex;
  overflow-x: auto;

  align-items: center;
    justify-content: flex-start;

padding-left: 6%;
padding-right: 6%;
}


.bilteni-slides::-webkit-scrollbar {
  display: none;
}

/* Hide scrollbar for IE, Edge, and Firefox */
.bilteni-slides {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}



.bilteni-rectangle-parent  {
  scroll-snap-align: start;
  flex: 0 0 auto;
  margin-right: 66px; /* Adjust this gap between slides if necessary */
  transition: transform 0.3s ease;
}

.bilteni-rectangle-parent:hover {
transform: scale(1.08); 
}


.slider-arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
  z-index: 10;
}

.left-arrow {
  left: 3%;
}

.right-arrow {
  right: 3%;
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
  .home-vector-icon {
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
    flex: 1;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 1.95rem;
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
  .home-vector-icon2 {
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
    height: 89.78%;
    width: 50.14%;
    /* top: 22.17%; */
    right: 0.29%;
    bottom: 0.06%;
    left: 49.57%;
    max-width: 100%;
    overflow: visible;
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

  .drugired {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    padding: 0rem 1.75rem;
    box-sizing: border-box;
    max-height: 375rem;
  }

  .prviredframeova {
    flex: 1;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 1.95rem;
  }
  .framesadrzaji {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    padding: 0rem 1.75rem;
    box-sizing: border-box;
    max-height: 375rem;
  }
  .srednjibannerdogadaji-child {
    align-self: stretch;
    flex: 1;
    position: relative;
    max-width: 30%;
    overflow: hidden;
    max-height: 10%;
    object-fit: cover;
    z-index: 1;
  }
  .objavljeno-20032023 {
    position: absolute; /* Changed from relative to absolute */
    bottom: 0.5rem; /* Adjust as desired */
    left: 0.7rem; /* Adjust as desired */

    color: rgba(0, 0, 0, 0.30);
font-family: Inter;
font-size: 12px;
font-style: normal;
font-weight: 600;
line-height: normal;
  }

.slikeslider {
  overflow: hidden;
  width: 100%;
  height: 50%;
  object-fit: cover; /* Ensure image maintains aspect ratio and is cropped to fit */
}

.objavljenotekst {
    margin: 0 !important;
    position: absolute;
    height: calc(100% - 536px);
    width: 34%;
    top: 0rem;
    right: 0%;
    bottom: 23.5rem;
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
    color: #000;
    width: 100%;
    height: 20rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;

    gap: 0.63rem;
    z-index: 0;
  }
  .dogadajipodgrupa-child {
    height: 300px;

  position: relative;
  width: 13%; /* Adjust this as per your design */
/* Adjust this as per your design */
  overflow: hidden; /* This will clip any child content going out of the boundaries */
  z-index: 1;
  background-color: #fff;
  transition: transform 0.3s ease-in-out;
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
   
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0.25rem 0rem;
    position: relative;
    gap: 2.06rem;
    
  }
  .dogadajitrecired {
 
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0.25rem 1rem;
    font-size: 1.25rem;
    color: #000;

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
 
    width: 100%;
    height: 7.69rem;
    overflow: hidden;
}




.rostsport-1-icon {
    display: flex;
    align-items: center;
    width: 15.63rem;
    height: 7.68rem;
    padding: 2.4rem;
    object-fit: cover;
    background-color: #fff;
}
.rostsport-1-icon:hover {

    box-shadow: 0 3px 10px rgba(118, 118, 118, 0.25); 

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
    padding: 1.13rem 5rem;
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
    left: calc(50% - 86.5px);
  }
  .lanova {
    position: absolute;
    top: 18.31rem;
    left: calc(50% - 50.5px);
    font-size: 1.25rem;
    color: #000;
  }
  .analitika1-child {
    position: absolute;
    top: 1.06rem;
    left: calc(50% + 96.5px);
    width: 0.06rem;
    height: 18.75rem;
  }
  .membership-1-icon {
    position: absolute;
    top: 0rem;
    left: calc(50% - 67.5px);
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
    left: calc(50% - 51px);
  }
  .godina-postojanja {
    position: absolute;
    top: 18.31rem;
    left: calc(50% - 95px);
    font-size: 1.25rem;
    color: #000;
  }
  .analitika2-child {
    position: absolute;
    top: 1.06rem;
    left: calc(50% + 108px);
    width: 0.06rem;
    height: 18.75rem;
  }
  .group-icon {
    position: absolute;
    top: 0rem;
    left: calc(50% - 60px);
    width: 8.13rem;
    height: 8.13rem;
  }
  .b2 {
    position: absolute;
    top: 11.81rem;
    left: calc(50% - 40px);
  }
  .podrunih-zborova {
    position: absolute;
    top: 18.31rem;
    left: calc(50% - 101px);
    font-size: 1.25rem;
    color: #000;
  }
  .analitika3-child {
    position: absolute;
    top: 1.06rem;
    left: calc(50% + 110px);
    width: 0.06rem;
    height: 18.75rem;
  }
  .group-icon1 {
    position: absolute;
    top: 0rem;
    left: calc(50% - 80px);
    width: 8.13rem;
    height: 8.13rem;
  }
  .b3 {
    position: absolute;
    top: 11.83rem;
    left: calc(50% - 60px);
  }
  .demostratora-skijanja {
    position: absolute;
    top: 18.33rem;
    left: calc(50% - 116px);
    font-size: 1.25rem;
    color: #000;
  }
  .clip-path-group {
    position: absolute;
    top: 0rem;
    left: calc(50% - 80px);
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

    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); /* Adjust the 200px to your preferred minimum width */

    flex: 1;
    height: auto;
    padding: 0rem 8.75rem;
    box-sizing: border-box;
    gap: 4.69rem;
    display: grid;

    justify-content: center;  /* Horizontally center the children */
    align-items: center;      /* Vertically center the children */

      /* Gap between the grid items */
    grid-gap: 3.2rem 4.69rem; 

    flex-wrap: wrap; 
  }
  .analitikahome {
    align-self: stretch;
    background-color: #fff;

    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    padding: 2.5rem 0rem;
    font-size: 4rem;
    color: #03a9f4;
  }
  .analitika1, .analitika2, .analitika3, .analitika4 {
grid-column: span 1;
}
  .bilteni-hzuts-a {
    position: absolute;
    top: 1.88rem;
    left: 2.5rem;
  }
  .bilteni-frame-child {
    position: absolute;
    top: 0rem;
    left: 0rem;
    width: 12.5rem;
    height: 15.63rem;
    object-fit: cover;
  }
  .bilten-sezona {
    margin: 0;
    color: #03a9f4;
  }
  .bilten-sezona-20192020-container {
    position: absolute;
    top: 17.5rem;
    left: 1.06rem;
  }
  .bilteni-rectangle-parent  {
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
  .home-vector-icon4 {
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
    font-size: 1.55rem;
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
    padding-bottom: 3%;
  }


.pokretnitekst{
  
  background-color: transparent;
  margin-top: -5rem; 
  width: 100%;

  color: #DB1F26;
font-family: Inter;
font-size: 1.5rem;
font-style: normal;
font-weight: 700;
line-height: normal;
}


  @media screen and (max-width: 1200px) {
    .saznajte-informacije-kako {
      width: 27.5rem;
    }

    .analitikapodgrupa {
    display: flex; /* Display children in a row */
    white-space: nowrap; /* Prevent wrapping */
    overflow-x: hidden; /* Make it horizontally scrollable */
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
      font-size: 0.74rem;
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
      font-size: 0.71rem !important;
    }

    .srednjibannerdogadaji {
      align-self: stretch;

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
    .pokretnitekst{
  
  font-size: 1.2rem;
margin-top: -4rem;

}



  .popustisaznajvise {
      width: 3rem;
      gap: 3.13rem;
      padding-left: 8rem;
      padding-right: 8rem;
      max-width: 23.75rem;
    }

    .popusti-za-nae {
      font-size: 1.7rem;
    }

    
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
  animation: fadeIn 1s ease-in-out 4s forwards; /* Apply the initial fade-in animation */
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
  transform: scale(1.026); 
  transition: transform 0.4s; 
  box-shadow: 0 3px 4px rgba(118, 118, 118, 0.22); 
}
.animacijakvadrati:not(:hover) {
  transform: scale(1); /* Original scale */
  transition: transform 0.3s; /* Add transition property */

}

.popustisaznajvise:hover {
    background-color: #03a9f4;
    color: #fff; 
    border: 2px solid #68cefd;
    cursor: pointer;
  }

  .animate-on-scroll {
  opacity: 0;
  transform: translateY(130px);
  transition: opacity 1.1s ease, transform 1.1s ease;
}

.animate-on-scroll.active {
  opacity: 1;
  transform: translateY(0);
}




@media (max-width: 480px) {
  .arrow-overlay {
    left: 0 !important;  /* Start from the very left edge */
    right: 0 !important; /* Start from the very right edge */
    width: 40px;
  }
}
@media (max-width: 364px) {
  .arrow-overlay {
    width: 66px; 
  }
}



</style>