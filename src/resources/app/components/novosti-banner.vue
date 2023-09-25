
<!--
<template>
  <div class="h-full w-full p-0 grid grid-cols-3 place-items-center">
    <div class="banner-container">
      <vue-glide :perView="3" :gap="20" :peek="1" :type="'carousel'" direction="ltr">
      <!-- Left sub-banner ->
      <vue-glide-slide>
        <div class="side-banner">
          <img :src="banner.subBanner.data.subBanner1.data" @click="moveToCenter('subBanner1')" alt="">
        </div>
      </vue-glide-slide>
      
      <!-- Center main banner ->
      <vue-glide-slide v-for="(image, index) in banner.mainBanner.data" :key="index">
        <img :src="image.data" @click="moveToCenter('main')" alt="">
      </vue-glide-slide>
      
      <!-- Right sub-banner ->
      <vue-glide-slide>
        <div class="side-banner">
          <img :src="banner.subBanner.data.subBanner2.data" @click="moveToCenter('subBanner2')" alt="">
        </div>
      </vue-glide-slide>
    </vue-glide>
  </div>
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
  methods: {
    moveToCenter(bannerName) {
    console.log(`Clicked on: ${bannerName}`);
    if (bannerName == 'subBanner1') {
      let temp = { ...this.banner.mainBanner.data }; // Clone the object
      this.banner.mainBanner.data = { banner1: { data: this.banner.subBanner.data.subBanner1.data } };
      this.banner.subBanner.data.subBanner1.data = temp.banner1.data;
    } else if (bannerName == 'subBanner2') {
      let temp = { ...this.banner.mainBanner.data }; // Clone the object
      this.banner.mainBanner.data = { banner1: { data: this.banner.subBanner.data.subBanner2.data } };
      this.banner.subBanner.data.subBanner2.data = temp.banner1.data;
    }
  },



    getBanner() {
      this.$api.skijasiContent
        .fetch({
          slug: 'home-banner'
        })
        .then(res => {
          this.banner = res.data.value
        })
        .catch(err => {
          console.error(err);
        })
    }
  }
}
</script>


<style scoped>
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
  opacity: 0;
}


.side-banner {
  display: flex;
  justify-content: center;
  align-items: flex-end; /* Adjust the vertical positioning of the side banners */
  height: 80%; /* Adjust this value if you want to change the height of the side banners */
}


.banner-container {
  width: 100%;
  overflow: hidden; /* To hide any extra content that might go beyond the container */
}



</style>