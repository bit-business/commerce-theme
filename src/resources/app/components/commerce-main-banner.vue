<template>
  <div class="p-0 overflow-hidden video-fullwidth">
   <!-- <div class="h-64 w-full grid grid-rows-2 grid-cols-3 gap-1 mx-auto container">--> 
   <!--    
    <carousel-single autoplay :autoplayDuration="10000" class="rounded-sm h-full">
  <carousel-item-single class="rounded-sm" v-for="d, index in banner.mainBanner.data" :key="index">
    <video controls class="h-full w-full aspect-w-1" v-if="isSafari" :src="d?.banner1?.data
"></video>
    <video controls class="h-full w-full aspect-w-1" v-else-if="isFirefoxOrOpera" :src="d?.banner2?.data"></video>
    <video controls class="h-full w-full aspect-w-1" v-else :src="d.banner2.data"></video>
  </carousel-item-single>
</carousel-single>
--> 

<carousel-single class="">
  <div class=" full-dimensions">
    <video autoplay preload="auto" muted playsinline loop class="video-fullwidth" v-if="isSafari" :src="banner.mainBanner.data.banner1.data"></video>
    <video autoplay muted preload="auto" playsinline loop class="video-fullwidth" v-else :src="banner.mainBanner.data.banner2.data"></video>
  </div>
</carousel-single>


   
    <!-- <img class="h-full w-full rounded-sm object-cover" :src="banner.subBanner.data.subBanner1.data" alt="">
      <img class="h-full w-full rounded-sm object-cover" :src="banner.subBanner.data.subBanner2.data" alt="">
      
    </div>--> 
  </div>
</template>








<!--  ZA BANERE KOD
<template>
  <div class="h-full w-full p-0 ">
   <!- <div class="h-64 w-full grid grid-rows-2 grid-cols-3 gap-1 mx-auto container">-> 
      <div class="col-start-1 col-end-3 row-start-1 row-end-3 rounded-sm">
        <carousel-single autoplay :autoplayDuration="7000" class="rounded-sm h-full">
          <carousel-item-single class="rounded-sm" v-for="d, index in banner.mainBanner.data" :key="index">
            <img class="rounded-sm h-full" :src="d.data" alt="">
          </carousel-item-single>
        </carousel-single>
      </div>
    <!- <img class="h-full w-full rounded-sm object-cover" :src="banner.subBanner.data.subBanner1.data" alt="">
      <img class="h-full w-full rounded-sm object-cover" :src="banner.subBanner.data.subBanner2.data" alt="">
      
    </div> -> 
  </div>
</template>
-->
<script>
import CarouselSingle from './carousel-single/carousel.vue'
import CarouselItemSingle from './carousel-single/carousel-item.vue'
export default {
  components: {
    CarouselSingle,
    CarouselItemSingle
  },
  data() {
    return {
      banner: {
        mainBanner: {
          data: { banner1: {
              data: null
            },
            banner2: {
              data: null
            },
          
          }
        },
        subBanner: {
          data: {
            subBanner1: {
              data: null
            },
            subBanner2: {
              data: null
            },
          }
        }
      }
    }
  },
  mounted() {
    this.getBanner()
  },

  computed: {
    isSafari() {
      return /Safari/.test(navigator.userAgent) && !/Chrome/.test(navigator.userAgent) && !/Firefox/.test(navigator.userAgent) && !/Opera|OPR\//.test(navigator.userAgent);
    }
  },


  methods: {
    getBanner() {
      this.$api.skijasiContent
        .fetch({
          slug: 'home-banner'
        })
        .then(res => {
 
    this.banner = res.data.value;



        })
        .catch(err => {
          console.error(err);
        })
    }
  }
}
</script>
<style scope>
.full-dimensions {
  width: 120%;
  height: 120%;
}

.video-fullwidth {
  width: 120%;
  height: 120%;
  object-fit: cover;
}
</style>