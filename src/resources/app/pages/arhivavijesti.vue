<template>    
  <div class="dogadanja">
    <Head :title="$page.props.name" />
       
    
    <div 
    no-gutter
    :class="['vrhslikaitekst']"
    :padding="2"
    :style="{ 'background-image': `url(${'/storage/slike/arhivavijesti/naslovnaslika.jpg'})` }"
>

      <div class="frame-parent">
        <div class="glavnipodframe">
      <div class="gornjiblokframe">
        <div class="gornjiblokframe-item" />
        <div class="ulanite-se-u-hzuts-wrapper">
          <div class="ulanite-se-u">ARHIVA VIJESTI</div>
        </div>
      </div>

       
         </div>
        </div>
      </div>

         
   
       <main class="glavniframekvadrati">
          <div class="svikvadrtatiframe">
           <div class="velikikvadratiskupinapodframe">


           

            <div class="dogadajitrecired">
  <div class="grid-container">
    <div class="grid-item" v-for="(slide, index) in slides" :key="index">
      <a v-if="slide.link" :href="slide.link" class="slide-link">
        <img class="slikeslider" :src="slide.image" :alt="'Image ' + index">
        <div class="content-container">
          <div class="vijestinaslov">{{ slide.title }}</div>
          <div class="vijestitekst" v-html="slide.content"></div>
        </div>
        <b class="objavljeno-20032023">{{ $moment(slide.datum).format('DD.MM.YYYY') }}</b>
      </a>
      <template v-else>
        <img class="slikeslider" :src="slide.image" :alt="'Image ' + index">
        <div class="content-container">
          <div class="vijestinaslov">{{ slide.title }}</div>
          <div class="vijestitekst" v-html="slide.content"></div>
        </div>
        <b class="objavljeno-20032023">{{ $moment(slide.datum).format('DD.MM.YYYY') }}</b>
      </template>
    </div>
  </div>
</div>



    


        </div>
      </div>
      </main>




      </div>
</template>

<script>
import CommerceMobileMainBanner from './../components/commerce-mobile-main-banner.vue'
import CarouselSingle from './../components/carousel-single/carousel.vue'
import CarouselItemSingle from './../components/carousel-single/carousel-item.vue'
import Pagination from './../components/pagination/pagination.vue'
import CommerceProductAlt from '../components/commerce-product-alt.vue'
import CommerceMobileProduct from '../components/commerce-mobile-product.vue'
import Card from '../components/card/card.vue'
import CardHeader from '../components/card/card-header.vue'
import CardAction from '../components/card/card-action.vue'
import CardBody from '../components/card/card-body.vue'
import Carousel from '../components/carousel/carousel.vue'
import CarouselItem from '../components/carousel/carousel-item.vue'
import CommerceLogo from "../components/commerce-logo.vue";
import CommerceSearchInput from "../components/commerce-search-input.vue";


import { VueMarqueeSlider } from 'vue-marquee-slider';


import { mapState } from 'vuex'
import { Link, Head } from '@inertiajs/inertia-vue'
import appLayout from '../layouts/app.vue'
import categoryLayout from '../layouts/kategorija.vue'
export default {
  layout: [appLayout, categoryLayout],
  components: {
    CommerceMobileMainBanner,
    CarouselSingle,
    CarouselItemSingle,
    Pagination,
    CommerceProductAlt,
    CommerceMobileProduct,
    Link,
    Head,


    VueMarqueeSlider,


   
    Card,
    CardHeader,
    CardAction,
    CardBody,
    Carousel,
    CarouselItem,
    CommerceLogo,
    CommerceSearchInput,
  },
  inject: ["goBack"],
  data() {
    return {
      currentPage: 1,
      products: {
        data: []
      },
      productCategories: [],
      minPrice: null,
      maxPrice: null,
      search: null,
      filter: false,
      rating: null,
      sort: 'latest',
      type: 'desc',
      priceFilter: false,


  // za clanke
  clanci:  [],
    thumbnails: [],
  // za clanke
  slides: [],
  isPaused: false,
  currentIndex: 0,


   
    }
  },
  computed: {
    reversedProducts() {
        return this.products.data.slice().reverse();
    },

    nextEvent() {
      const now = new Date();
const filteredEvents = this.products.data.filter(product => {
    // Use the correct property name
    const productDate = new Date(Date.parse(product.datumPocetka));
    const isAfterNow = productDate > now;
    console.log(`Is ${product.name} after now?`, isAfterNow);
    return isAfterNow;
});

const sortedEvents = filteredEvents.sort((a, b) => {
    const dateA = new Date(Date.parse(a.datumPocetka));
    const dateB = new Date(Date.parse(b.datumPocetka));
    return dateA - dateB;
});

console.log("Sorted Events:", sortedEvents);
return sortedEvents.length > 0 ? sortedEvents[0] : {};


    },



    sortedProducts() {
      return this.products.data.sort((a, b) => {
        if (this.sort === 'latest') {
          if (this.type === 'desc') {
            return this.$moment(a.createdAt).isBefore(b.createdAt) ? 1 : -1
          } else {
            return this.$moment(a.createdAt).isAfter(b.createdAt) ? 1 : -1
          }
        }

        if (this.sort === 'most-selling') {
          let aSold = a.productDetails.reduce((total, item) => {
            if (item.sold !== null) {
              return total + parseInt(item.sold)
            }
            return total;
          }, 0)

          let bSold = b.productDetails.reduce((total, item) => {
            if (item.sold !== null) {
              return total + parseInt(item.sold)
            }
            return total;
          }, 0)

          if (this.type === 'desc') {
            return bSold - aSold
          } else {
            return aSold - bSold
          }
        }

        if (this.sort === 'price') {

          if (this.type === 'desc') {
            // get a price from product details using Math.max
            let aPrice = Math.max(...a.productDetails.map(item => item.price))
            let bPrice = Math.max(...b.productDetails.map(item => item.price))
            return bPrice > aPrice ? 1 : -1
          } else {
            // get a price from product details using Math.min
            let aPrice = Math.min(...a.productDetails.map(item => item.price))
            let bPrice = Math.min(...b.productDetails.map(item => item.price))
            return bPrice < aPrice ? 1 : -1
          }
        }
      })
    },
    splitCategory() {
      return this.$_.chunk(this.productCategories, 2)
    },
    activeCategory() {
      return this.$_.find(this.productCategories, { slug: this.$page.props.slug })
    },
    filteredCategories() {
      return this.$_.filter(this.productCategories, (o) => {
        return o.slug !== this.$page.props.slug
      })
    },
    ...mapState({
      productLimit(state) {
        return parseInt(this.$_.find(state.moduleConfigurations, { key: "homeProductLimit" }).value);
      },
    })
  },
  created() {
    this.fetchPosts();
  },
  watch: {
    currentPage: {
      handler(val) {
        this.getProducts()
      }
    }
  },
  beforeRouteEnter(to, from, next) {
    next(vm => {
      document.title = `${vm.$voca.titleCase(vm.$page.props.slug, true)} Događaji - Hzuts.hr`
    })
  },
  mounted() {
    this.search = this.$page.props.search;
    this.getProducts();
    this.getCategories();
    this.setQueryParams();



  setInterval(() => {
    this.updateCountdown();
  }, 1000);


  },
  methods: {


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
},




    isEventActive(product) {
        const now = new Date();
        const eventEndDate = new Date(product.datumKraja);
        return now < eventEndDate;
    },

    isEvenUnajavi() {
  
        return true
    },

    formatDateRange(datumPocetka, datumKraja) {
        const startDate = new Date(datumPocetka);
        const endDate = new Date(datumKraja);

        const startDay = startDate.getDate().toString().padStart(2, '0');
        const startMonth = (startDate.getMonth() + 1).toString().padStart(2, '0');

        const endDay = endDate.getDate().toString().padStart(2, '0');
        const endMonth = (endDate.getMonth() + 1).toString().padStart(2, '0');

        const year = endDate.getFullYear();

        return `${startDay}.${startMonth}.-${endDay}.${endMonth}.${year}.`;
    },


    updateCountdown() {
    if (this.nextEvent && Object.keys(this.nextEvent).length > 0) {
        this.computeCountdown();
    } else {
        this.countdownTime = '00 : 00 : 00 : 00';
    }
},



computeCountdown() {
  if (!this.nextEvent) {
    this.countdownTime = '00 : 00 : 00 : 00';
    return;
  }

  const now = new Date();
  const target = new Date(this.nextEvent.datumPocetka);
  const diff = target - now;

  if (diff <= 0) {
    this.countdownTime = '00 : 00 : 00 : 00';
    return;
  }

  const days = Math.floor(diff / (1000 * 60 * 60 * 24));
  const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((diff % (1000 * 60)) / 1000);

  // Here, we're using `padStart()` to ensure that each component always has at least two digits
  this.countdownTime = `${String(days).padStart(2, '0')} : ${String(hours).padStart(2, '0')} : ${String(minutes).padStart(2, '0')} : ${String(seconds).padStart(2, '0')}`;

},






    setQueryParams() {
      this.search = this.$page.props.search
      this.rating = this.$page.props.rating ? parseInt(this.$page.props.rating) : null
      this.minPrice = parseInt(this.$page.props.minPrice)
      this.maxPrice = parseInt(this.$page.props.maxPrice)
      this.sort = this.$page.props.sort || 'latest'
      this.type = this.$page.props.type || 'desc'
      this.page = this.$page.props.page
      this.slug = this.$page.props.slug
    },
    openFilter() {
      this.filter = true;
    },
    closeFilter() {
      this.filter = false;
    },
    searchProduct() {
      if (this.search) {
        this.$inertia.visit(this.route('skijasi.commerce-theme.search', this.search))
      }
    },
    setMinPrice() {
      if (this.products.data.length === 0) return 0
      let prices = []
      this.products.data.forEach(product => {
        product.productDetails.forEach(detail => {
          prices.push(detail.price)
        })
      })

      this.minPrice = Math.min(...prices)
    },
    setMaxPrice() {
      if (this.products.data.length === 0) return 0
      let prices = []
      this.products.data.forEach(product => {
        product.productDetails.forEach(detail => {
          prices.push(detail.price)
        })
      })

      this.maxPrice = Math.max(...prices)
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
    resetProducts() {
      this.products = {
        data: []
      }
      this.minPrice = 0;
      this.maxPrice = 0;
      this.rating = 0;
      this.currentPage = 1;
      this.applyFilterQueryString()
    },
    setRatingOption(rating) {
      if (this.rating === rating) {
        this.rating = 0
      } else {
        this.rating = rating
      }
    },
    getProducts() {
      this.$api.skijasiProduct
        .browseByCategorySlug(this.queryParams())
        .then(res => {
          this.products = res.data.products
          this.updateCountdown(); 
       //   this.setMaxPrice();
        //  this.setMinPrice();
        })
        .catch(err => {
          console.error(err);
        })
    },
    queryParams() {
      let params = {
        sort: this.$page.props.sort || this.props || 'latest',
        rating: [0, 1, 2, 3, 4, 5].includes(this.rating) ? this.rating : (this.$page.props.rating || "0"),
        search: this.search || "",
        page: this.currentPage || 1,
        slug: this.$page.props.slug,
        type: this.type || "desc"
      }

      if (this.minPrice) {
        params.minPrice = this.minPrice
      }

      if (this.maxPrice) {
        params.maxPrice = this.maxPrice
      }

      return params
    },
    applyFilterSort(sort) {
      this.sort = sort;
      this.type = 'desc'
      this.$inertia.visit(this.route('skijasi.commerce-theme.kategorija', {
        ...this.queryParams(),
        sort
      }))
    },
    applyFilterSortPrice(type) {
      this.sort = 'price';
      this.type = 'type'
      this.$inertia.visit(this.route('skijasi.commerce-theme.kategorija', {
        ...this.queryParams(),
        sort: this.sort,
        type
      }))
    },
    applyFilterQueryString() {
      this.$inertia.visit(this.route('skijasi.commerce-theme.kategorija', this.queryParams()))
    },
    applyFilter() {
      this.products = {
        data: []
      }

      let params = {
        slug: this.$page.props.slug,
        page: this.currentPage,
        min: this.minPrice,
        max: this.maxPrice,
      }

      if (this.rating > 0) {
        params = { ...params, rating: this.rating }
      }

      this.$api.skijasiProduct
        .browseByCategorySlug(params)
        .then(res => {
          this.products = res.data.products
        })
        .catch(err => {
          console.error(err);
        })
        .finally(() => {
          this.closeFilter()
        })
    },
    resetFilter() {
      this.products = {
        data: []
      }

      this.$api.skijasiProduct
        .browseByCategorySlug({
          slug: this.$page.props.slug,
          page: this.currentPage,
        })
        .then(res => {
          this.products = res.data.products
          this.setMaxPrice();
          this.setMinPrice();
        })
        .catch(err => {
          console.error(err);
        })
        .finally(() => {
          this.closeFilter()
        })
    },

  }
}
</script>



<style scoped>

.grid-container {
  display: grid;
  grid-template-columns: repeat(4, minmax(250px, 1fr)); /* Adjust for four items */
  gap: 18px;
  padding: 15px;
  padding-top: 35px;
  padding-left: 25px;
  padding-right: 25px ;
}

.grid-item {
  position: relative;
  flex-direction: column; 

  background: white;
  padding: 0px;

  height: 330px;

  box-shadow: 0px 2px 4px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
  border-radius: 9px; /* Rounded corners */
  overflow: hidden; /* Ensures that the child elements do not overflow the rounded corners */
}
.grid-item img {
  width: 100%; /* Full width */
  height: 150px; /* Fixed height */
 
  object-fit: cover; /* Ensures the image covers the area without stretching */
  border-radius: 10px 10px 0 0; /* Rounded corners at the top of the image */
}
.content-container {
  overflow-y: auto; /* Enable vertical scrolling */
  max-height: 130px; /* Adjust the max height as needed */
  padding: 3px;
  flex-grow: 1;
  /* Rest of your styles for .content-container */
}
.grid-item-content {
  flex-grow: 1; /* Allows the container to expand */
  overflow-y: auto; /* Makes content scrollable if it overflows */
  padding: 10px; /* Optional padding for aesthetics */


  color: #000;
font-family: Inter;
font-size: 12px;
font-style: normal;
font-weight: 300;
line-height: normal;
}
.vijestinaslov{
color: #000;
font-family: Inter;
font-size: 14px !important;
font-style: normal;
font-weight: 600;
line-height: normal;
}
.grid-item:hover {
  transform: scale(1.12); /* Slightly increase the size on hover */
  z-index: 1000;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4); 
}

.objavljeno-20032023 {
  position: absolute;
  bottom: 5px; /* Adjust as needed for spacing from the bottom */
  left: 10px; /* Adjust as needed for spacing from the left */
  color: rgba(0, 0, 0, 0.40); /* Sets the text color to a darker shade of gray */
  z-index: 2; /* Ensure it's above other content */
  font-family: Inter;
  font-size: 12px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
}



.slide-link {
  text-decoration: none;
  color: #3498db;
}

.slikeslider {
  width: 100%;
  height: auto;
  margin-bottom: 10px;
}
.vijestinaslov{
text-align: left;
}
.vijestinaslov, .vijestitekst, .objavljeno-20032023 {
  margin-bottom: 6px;
}
@media (max-width: 1024px) {
  .grid-container {
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Adjust for smaller screens */
  }
}


@media (max-width: 600px) {
  .grid-container {
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
  }
}

@media (max-width: 460px) {
.grid-item-content {
font-size: 11px !important;
}
.vijestinaslov{
font-size: 12px !important;
}
}

  .gornjiblokframe-child {
    position: absolute;
    width: 100%;
    top: calc(50% - 264px);
    right: 0%;
    left: 0%;
    max-width: 100%;
    overflow: hidden;
    height: 33rem;
    object-fit: cover;
  }
  .gornjiblokframe-item {
    position: absolute;
    width: 100%;
    top: calc(50% - 264px);
    right: 0%;
    left: 0%;
    background-color: rgba(0, 0, 0, 0.7);
    height: 33rem;
  }
  .ulanite-se-u {
    flex: 1;
    position: relative;
    color: #FFF;
text-align: center;
font-family: Inter;
font-size: 40px;
font-style: normal;
font-weight: 600;
line-height: normal;
letter-spacing: 3px;
  }
  .ulanite-se-u-hzuts-wrapper {
    position: absolute;
    top: calc(50% - 24px);
    left: calc(50% - 252px);
    width: 31.56rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
  }
  .gornjiblokframe {
    position: relative;
    width: 100%;
    height: 33rem;
  }

.products-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 20px;
}

.product-item {
    grid-column: span 3;
}




.inactive-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.5); /* Black with 60% opacity */
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-weight: bold;
  border-radius: 20px;
  font-size: 2rem;
  z-index: 2;  /* Ensure it's above other content */
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
.dogadajipodgrupa {
   
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
   padding: 0.25rem 0rem;
   position: relative;
   gap: 2.06rem;
   
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
  padding: 3%;
  text-align: left;
  
  display: -webkit-box;       /* Required for line-clamp to work */
  -webkit-box-orient: vertical; /* Required for line-clamp to work */
  overflow: hidden;           /* Hide any content that exceeds this height */
}

.dogadajipodgrupa-child {
    height: 300px;

  position: relative;
  width: 13%; /* Adjust this as per your design */
/* Adjust this as per your design */
  overflow: hidden; /* This will clip any child content going out of the boundaries */
  z-index: 1;
  background-color: #fff;
  transition: transform 0.3s ease-in-out; /* Smooth transition for scaling */
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
    z-index: 1000;  /* Ensures that the enlarged slide is above other elements */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4); 
}


.animacijakvadrati:hover {
  transform: scale(0.944); 
  transition: transform 0.4s; 
}
.animacijakvadrati:not(:hover) {
  transform: scale(1); /* Original scale */
  transition: transform 0.3s; /* Add transition property */
}


.frame-child {
  position: relative;
  border-top: 1px solid #fff;
  box-sizing: border-box;
  width: 12.56rem;
  height: 0.06rem;
}
.sljedei-dogaaj {
  position: relative;
  letter-spacing: 3px;
  font-weight: 500;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 14.81rem;
  flex-shrink: 0;
}
.line-parent {
  height: 1.5rem;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  gap: 1.19rem;
}
.saznaj-vie {
  position: relative;
  letter-spacing: -0.17px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 5.67rem;
}
.login-with-email-button {
  text-decoration: none;
  border-radius: 20px;
  border: 2.5px solid #03a9f4;
  box-sizing: border-box;
  width: 25rem;
  height: 3.13rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  font-size: 1rem;
  color: inherit;
  z-index: 1;
}

.login-with-email-button:hover {
  background-color: #03a9f4;
  color: #fff;
}

.frame {
  align-self: stretch;
  height: 29.69rem;
  overflow: hidden;
  flex-shrink: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  gap: 25.06rem;
}
.teaj-za-uitelja {
  align-self: stretch;
  position: relative;
  letter-spacing: 3px;
  text-transform: uppercase;
}
.countdown {
  position: relative;
  font-weight: 800;
  gap: 10rem;
}
.frame2 {
  flex: 1;
  height: 8.31rem;
  overflow: hidden;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: center;
  z-index: 0;
}
.dana {
  position: relative;
  letter-spacing: 3px;
}
.frame4 {
  width: 15.19rem;
  height: 1.06rem;
  overflow: hidden;
  flex-shrink: 0;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: flex-start;
  gap: 9.25rem;
}
.frame5 {
  width: 18rem;
  height: 1.06rem;
  overflow: hidden;
  flex-shrink: 0;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: flex-start;
  gap: 7.94rem;
}
.frame3 {
  margin: 0 !important;
  position: absolute;
  top: 7.28rem;
  left: calc(50% - 324.5px);
  overflow: hidden;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  gap: 8.63rem;
  z-index: 1;
  font-size: 0.88rem;
}
.frame-group {
  align-self: stretch;
  height: 8.31rem;
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: center;
  position: relative;
  font-size: 6rem;
  color: #fff;
}
.frame1 {
  height: 25.06rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  gap: 4.38rem;
  margin-top: -25.06rem;
  font-size: 2.5rem;
  color: #03a9f4;
}
.frame-parent {
  width: 90rem;
  height: 29.69rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.vrhslikaitekst {
  position: relative; /* Needed for proper positioning of ::before */
  align-self: stretch;
  height: 24.63rem;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  background-size: cover !important;
  background-repeat: no-repeat !important;
  background-position: center;
}

.vrhslikaitekst::before {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.6); /* Black with 60% opacity */
  z-index: 0; /* Lower than the content */
}

/* Ensure the content inside .vrhslikaitekst is above the overlay */
.vrhslikaitekst > * {
  position: relative;
  z-index: 1;
}


.dogaanja {
  position: relative;
  font-weight: 600;
  display: flex;
  align-items: center;
  width: 13rem;
  flex-shrink: 0;
  
}
.dogadanjatekst {
  align-self: stretch;
  height: 3rem;
  display: flex;
  flex-direction: row;
  padding: 0rem 3.13rem;
  box-sizing: border-box;
  align-items: flex-start;
  justify-content: flex-start;
  text-align: left;
  font-size: 2.5rem;
  color: #000;
}
.div1 {
  position: relative;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 10.2rem;
  height: 1.47rem;
  flex-shrink: 0;
  font-size: 16px; /* Adjust this to your desired font size */

}

.wrapper {
  border-radius: 5px;
  background-color: #fff;
  width: 13.13rem;
  height: 3.44rem;
  display: flex;
  flex-direction: column;
  padding: 0rem 1.41rem;
  box-sizing: border-box;
  align-items: flex-start;
  justify-content: center;
}
.frame6 {
  flex: 1;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  padding: 0.75rem 1.25rem;
  align-items: flex-start;
  justify-content: center;
}
.map-pin-1-icon {
  position: relative;
  width: 2rem;
  height: 2rem;
  overflow: hidden;
  flex-shrink: 0;
  object-fit: cover;
}
.lachtal {
  position: relative;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 9.57rem;
  height: 1.84rem;
  flex-shrink: 0;
}
.map-pin-1-parent {
  width: 7.33rem;
  height: 2rem;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: flex-start;
  gap: 0.75rem;
}
.div2 {
  position: absolute;
  top: 0.07rem;
  left: 4.46rem;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 2.76rem;
  height: 1.47rem;
}
.frame-inner {
  position: absolute;
  top: 0rem;
  left: 0rem;
  border-radius: 50%;
  width: 1.63rem;
  height: 1.72rem;
  object-fit: cover;
}
.ellipse-icon {
  position: absolute;
  top: 0rem;
  left: 1.27rem;
  border-radius: 50%;
  width: 1.63rem;
  height: 1.72rem;
  object-fit: cover;
}
.frame-child1 {
  position: absolute;
  top: 0rem;
  left: 2.55rem;
  border-radius: 50%;
  width: 1.63rem;
  height: 1.72rem;
  object-fit: cover;
}
.parent {
  position: relative;
  width: 7.22rem;
  height: 1.72rem;
  font-size: 1rem;
}
.frame8 {

  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  gap: 19rem;
}
.teaj-za-uitelje {
  flex: 1;
  position: relative;
  font-size: 1.75rem;
  font-weight: 600;
  text-align: left;
}
.frame-container {
  border-radius: 0px 0px 20px 20px;
  background: linear-gradient(
    178.27deg,
    rgba(3, 169, 244, 0.8),
    rgba(0, 0, 0, 0.8)
  );
  width: 37.8rem;
  height: 10.8rem;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  padding: 1.23rem 2.12rem;
  box-sizing: border-box;
  align-items: flex-start;
  justify-content: flex-start;
  gap: 1.75rem;
}
.frame7 {
  overflow: hidden;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  color: #fff;
}
.prvireddesni {
  text-decoration: none;
  border-radius: 20px;
  width: 37.75rem;
  height: 34.38rem;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  /*padding: 1.56rem 0rem 0rem 0rem;*/
  box-sizing: border-box;
  align-items: flex-start;
  justify-content: flex-start;
  gap: 18.56rem;
  background-image: url("/storage/slike/prvireddesni@3x.png");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: top;
  color: inherit;
}
.velikikvadratiskupinapodframe {
  flex: 1;
  height: 34.37rem;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}
.svikvadrtatiframe {
  flex: 1;
  height: 34.37rem;
 
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  align-items: center;
  justify-content: flex-start;
}
.glavniframekvadrati {
  align-self: stretch;
  flex: 1;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  align-items: flex-start;
  justify-content: center;
  text-align: center;
  font-size: 1.25rem;
  color: #000;
  font-family: Inter;

  margin-bottom: 3rem;
    height: 100%; 
  height: 100%;

}
.dogadanja {
  position: relative;
  background-color: #f8f7f5;
  width: 100%;
  height: 130.49rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  font-size: 1.25rem;
  color:  #F8F7F5;
  font-family: Inter;
  overflow: hidden;

  padding-top: 3.75rem;

  
}
.arhivavijestitekst {
color: #FFF;
text-align: center;
font-family: Inter;
font-size: 40px;
font-style: normal;
font-weight: 600;
line-height: normal;
letter-spacing: 3px;
}





@media screen and (max-width: 1200px) {
    .prvireddesni {
        max-width: 45vw;
        height: auto;  
    }
    .frame7 {
        max-width: 45vw;
        height: auto; 
    }
    .frame-container {
        max-width: 45vw;
        height: auto; 
    }
}

@media screen and (max-width: 720px) {

  .ulanite-se-u {
    flex: 1;
    position: relative;
    color: #FFF;
text-align: center;
font-family: Inter;
font-size: 26px;
font-style: normal;
font-weight: 600;
line-height: normal;
letter-spacing: 3px;
  }

    .frame3 {
    left: 52%;               
    transform: translateX(-50%); 
    top: 4.6rem;
    gap: 2.3rem;
    max-width: 100vw;
    height: auto; 
  }
  
  .frame4, .frame5{
      gap: 2.2rem;
      top: 4.1rem;
      width:auto;
  }





  .prvireddesni {
        max-width: 80vw;
        height: auto;  
    }
    .frame7 {
        max-width: 80vw;
        height: auto;  
    }
    .frame-container {
        max-width: 80vw;
        height: auto;  
    }

    .products-grid {
        grid-template-columns: repeat(1, 1fr);
    }

    .product-item {
        grid-column: span 1;
    }
 

    .dogadanja {
  height: 190rem;

}
 

}


@media screen and (max-width: 480px) {
    .prvireddesni {
        max-width: 80vw;
        height: auto;  
    }
    .frame7 {
        max-width: 80vw;
        height: auto; 
    }
    .frame1 {
        max-width: 80vw;
        height: auto; 
    }
    .frame-container {
        max-width: 80vw;
        height: auto;  
    }



    .frame {
  height: 33.69rem;

  gap: 29.06rem;
}
    .login-with-email-button {
          width: 16rem;
          height: 5.73rem;
          font-size: 1rem;
          margin-top: -2.5rem;
    margin-bottom: 2.4rem;
        overflow: visible;
        bottom: 5rem;
              }
        .frame3 {
            left: 52%;           
            transform: translateX(-50%); 
            top: 3.3rem;
       
            max-width: 100vw;
            height: auto; 

          }
          
          .frame4, .frame5{
              gap: 2.2rem;
              top: 3.2rem;
              width:auto;
              margin-top: 1rem;
            
          }
          .dana{
        font-size: 0.8rem;   
          }




.teaj-za-uitelja {
margin-top: -10%;
}


}



  @media screen and (max-width: 400px) {

  .frame3 {
    left: 50%;     
    top: 2.2rem;           
  }

}



</style>