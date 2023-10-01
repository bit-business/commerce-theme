<template>

  <!--
  <div class="bg-white p-0 sm:p-8">
    <div class="h-40 w-full gap-1 mx-auto container">
      <div class="rounded-sm">
        <carousel-single autoplay :autoplayDuration="7000" class="rounded-sm h-full">
          <carousel-item-single class="rounded-sm" v-for="d, index in bannerSrc" :key="index">
            <img class="rounded-sm h-40 object-cover object-center w-full" :src="d" alt="">
          </carousel-item-single>
        </carousel-single>
      </div>
    </div>
  </div>
-->
<div class="h-full p-0 w-full overflow-hidden video-fullwidth">
<carousel-single class="rounded-sm h-full ">
  <div class="rounded-sm h-full">
    <video autoplay muted playsinline loop class="h-full w-full video-fullwidth" v-if="isSafari" :src="banner.mainBanner.data.banner1.data"></video>
    <video autoplay muted playsinline loop class="h-full w-full video-fullwidth" v-else :src="banner.mainBanner.data.banner2.data"></video>
  </div>
</carousel-single>
</div>
</template>

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
      bannerSrc: [],
      banner: {
        mainBanner: {
        //  data: {}

        data: { 
          banner1: {
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

  computed: {
    isSafari() {
      return /Safari/.test(navigator.userAgent) && !/Chrome/.test(navigator.userAgent) && !/Firefox/.test(navigator.userAgent) && !/Opera|OPR\//.test(navigator.userAgent);
    }
  },


  mounted() {
    this.getBanner()
  },
  methods: {
    getBanner() {
      this.$api.skijasiContent
        .fetch({
          slug: 'home-banner'
        })
        .then(res => {

          this.banner = res.data.value;
/*
          let value = res.data.value;
          let mainBanner = value.mainBanner.data;
          for (let key in mainBanner) {
            this.bannerSrc.push(mainBanner[key].data)
          }
          this.bannerSrc.push(value.subBanner.data.subBanner1.data)
          this.bannerSrc.push(value.subBanner.data.subBanner2.data)
          */
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
  width: 140%;
  height: 140%;
}

.video-fullwidth {
  width: 140%;
  height: 140%;
  object-fit: fill;
}

</style>