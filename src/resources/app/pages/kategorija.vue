<template>    
  <div class="dogadanja">
    <Head :title="$page.props.name" />
    <div class="blurbackground" v-if="showKalendarFrame" @click="closeKalendarFrame"></div>
    <transition name="slide-fade">
      <Kalendar 
    v-if="showKalendarFrame && kalendar.data.length > 0" 
    ref="myScrollableElement" 
    @close="handleKalendarClose" 
    :products="sortedAndFilteredProductsKALENDAR"
    :formatDateRange="formatDateRange">
  </Kalendar>
</transition>

    
    <carousel-item-single 
    v-if="nextEvent"
    :product="nextEvent"
    no-gutter
    :class="['vrhslikaitekst']"
    :padding="2"
    :style="{ 'background-image': `url(${nextEvent.productImage ? nextEvent.productImage : '/storage/slike/prvireddesni@3x.png'})` }"
>

      <div class="frame-parent">
        <div class="frame-kategorija">
          <div class="line-parent">
            <div class="frame-child" />
            <div class="sljedei-dogaaj">Sljedeći događaj</div>
            <div class="frame-child" />
          </div>

   <!-- Render the link when nextEvent.slug exists -->
<Link 
    v-if="nextEvent.slug"
    class="login-with-email-button cursor-pointer" 
    :href="route('skijasi.commerce-theme.detalji', nextEvent.slug)"
>     
    <div class="saznaj-vie-kategorija">Saznaj više</div>
</Link>

<!-- Render the button without a link when nextEvent.slug does not exist -->
<div 
    v-else
    class="login-with-email-button cursor-pointer"
>     
    <div class="saznaj-vie-kategorija">Uskoro novi događaji</div>
</div>



        </div>
        <div class="dogadajiframe1">
          <b class="teaj-za-uitelja">{{ nextEvent.name }} </b>
          <div class="frame-group">
            <div class="dogadajiframe2">
              <div class="countdown">{{ countdownTime }}</div>
            </div>
            <div class="dogadajiframe3">
              <div class="frame4">
                <b class="dana">DANA</b>
                <b class="dana">SATI</b>
              </div>
              <div class="frame5">
                <b class="dana">MINUTA</b>
                <b class="dana">SEKUNDI</b>
              </div>
            </div>
          </div>
        </div>
         </div>
        </carousel-item-single>
         
        
        <div class="dogadanjatekst">
         <div class="dogaanja">Događanja</div>  <div class="dogaanja2 cursor-pointer rounded-xl border-red-400 border-2 text-red-500 p-3"  @click="handleKalendarOpen"><svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.5833 4.33337H5.41667C4.22005 4.33337 3.25 5.30342 3.25 6.50004V21.6667C3.25 22.8633 4.22005 23.8334 5.41667 23.8334H20.5833C21.78 23.8334 22.75 22.8633 22.75 21.6667V6.50004C22.75 5.30342 21.78 4.33337 20.5833 4.33337Z" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M17.3333 2.16663V6.49996" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8.66675 2.16663V6.49996" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.25 10.8333H22.75" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>Cijeli popis događaja</div>
       </div>



     
       <main class="glavniframekvadrati">
          <div class="svikvadrtatiframe">
           <div class="velikikvadratiskupinapodframe">


           
           
            <div v-if="products.data.length > 0" class="products-grid">
    <div 
        class="product-item animacijakvadrati"

        v-for="(product, index) in sortedAndFilteredProductsKvadrati"

        :key="product.id"
          v-if="product.sakrij !== 1"
    >
        <Link :href="route('skijasi.commerce-theme.detalji', product.slug)" class="prvireddesni">
          <div class="prvireddesni" :style="`background-image: url('${product.productImage}');`">


            <div class="frame6">
              <div class="wrapper">
                <div class="div1">{{ formatDateRange(product.datumPocetka, product.datumKraja) }}</div>
              </div>
            </div>
            <div class="frame7">
              <div class="frame-container">
                <div class="frame8">
                  <div class="map-pin-1-parent">
                    <img class="map-pin-1-icon" alt="" src="/storage/slike/dogadajiikonamap.png" />
                    <div class="lachtal">{{ product.mjesto }}</div>
                  </div>
                  <div class="parent">
                  
              
                  </div>
                </div>
                <div class="teaj-za-uitelje">{{ product.name }}</div>
                    </div>
                </div>
              </div>
            </Link>
            <div v-if="!isEventActive(product)" class="inactive-overlay">
                              NIJE AKTIVNO
            </div>
        <!--    <div v-if="index > 3" class="inactive-overlay">
    UBRZO DETALJI
</div>-->

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

import Kalendar from '../components/kalendardogadaja/kalendar.vue'


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
   
    Kalendar,
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
      showKalendarFrame: false, 



      currentPage: 1,
      products: {
        data: []
      },
      kalendar: {
        data: []
      },

      kalendarDUMMY: {
      data: [
      {
          id: 1,
          datumPocetka: "2024-11-07",
          datumKraja: "2024-11-10",
          name: "Seminar HZUTS-a",
          mjesto: "STUBAI",
          slug: "ski-hzuts-seminar2024-11"
        },
        {
          id: 2,
          datumPocetka: "2024-12-12",
          datumKraja: "2024-12-15",
          name: "Državni seminar I",
          mjesto: "SEXTEN",
          slug: "mountain-adventure"
        },
        {
          id: 3,
          datumPocetka: "2024-12-15", 
          datumKraja: "2024-12-19",
          name: "ISIA seminar",
          mjesto: "SEXTEN",
          slug: "summer-glacier-skiing"
        },
        {
          id: 4,
          datumPocetka: "2024-12-19",
          datumKraja: "2024-12-22",
          name: "Državni seminar II",
          mjesto: "SEXTEN",
          slug: "ski-technique-workshop"
        }
      ]
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


      countdownTime: '00:00:00:00'
   
    }
  },
  computed: {

    sortedAndFilteredProducts() {
    return this.kalendar.data.sort((a, b) => {
      return new Date(a.datumPocetka) - new Date(b.datumPocetka);
    });
  },

  sortedAndFilteredProductsKALENDAR() {

    // OVO MAKNUTI KASNIJE I TREBA UCITAVATI OVAJ IZNAD BEZ KALENDARA...OVDJE RUCNO STAVILI TO UNAPRIJED.. OBRISAT OVAJ...GORE PROMIJENIT I U DATA MAKNUT DUMMY KALENDAR
    return this.kalendarDUMMY.data.sort((a, b) => {
      return new Date(a.datumPocetka) - new Date(b.datumPocetka);
    });
  },


  sortedAndFilteredProductsKvadrati() {
      const today = new Date();

      // Separate active and non-active products, excluding those with sakrij === 1
      const activeProducts = this.products.data.filter(product => 
        new Date(product.datumPocetka) >= today && product.sakrij !== 1
      );
      const nonActiveProducts = this.products.data.filter(product => 
        new Date(product.datumPocetka) < today && product.sakrij !== 1
      );

      // Sort active products by closest date to today
      activeProducts.sort((a, b) => new Date(a.datumPocetka) - new Date(b.datumPocetka));

      // Sort non-active products by latest to oldest
      nonActiveProducts.sort((a, b) => new Date(b.datumPocetka) - new Date(a.datumPocetka));

      // Return combined list: active first, then non-active
      return [...activeProducts, ...nonActiveProducts];
    },
  



    reversedProducts() {
        return this.products.data.slice().reverse();
    },

    filteredEvents() {
    const now = new Date();
    return this.products.data.filter(product => {
      const productDate = new Date(Date.parse(product.datumPocetka));
      return productDate > now;
    });
  },

  sortedEvents() {
    return this.filteredEvents.sort((a, b) => {
      const dateA = new Date(Date.parse(a.datumPocetka));
      const dateB = new Date(Date.parse(b.datumPocetka));
      return dateA - dateB;
    });
  },

  nextEvent() {
    return this.sortedEvents.length > 0 ? this.sortedEvents[0] : {};
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

    this.startCountdown();


  },
  methods: {
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

    // Ensure startDate is always the earlier date
    const [earlierDate, laterDate] = startDate <= endDate ? [startDate, endDate] : [endDate, startDate];

    const startDay = earlierDate.getDate().toString().padStart(2, '0');
    const startMonth = (earlierDate.getMonth() + 1).toString().padStart(2, '0');

    const endDay = laterDate.getDate().toString().padStart(2, '0');
    const endMonth = (laterDate.getMonth() + 1).toString().padStart(2, '0');

    const year = laterDate.getFullYear();

    return `${startDay}.${startMonth}.-${endDay}.${endMonth}.${year}.`;
},

startCountdown() {
      setInterval(() => {
        this.updateCountdown();
      }, 1000);  // Update every 1000 milliseconds (1 second)
    },

updateCountdown() {
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
          this.products = res.data.products;
          this.kalendar = res.data.products;
          console.log("PODACI KALENDARA:" ,this.kalendar);
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


    scrollToTop() {
    if (this.$refs.myScrollableElement) {
      this.$refs.myScrollableElement.scrollTop = 0;
    }
  },
  closeKalendarFrame() {
    this.showKalendarFrame = false;
  },
  handleKalendarClose() {
    this.showKalendarFrame = false;
  },

  handleKalendarOpen() {
    if (this.kalendar.data.length > 0) {
      this.showKalendarFrame = true;
    } else {
      console.log("No product data available");
    }
  },

  // Close frame if clicked outside
  handleClickOutside(event) {
    if (this.showKalendarFrame && !this.$refs.detailsFrame.contains(event.target)) {
      this.closeKalendarFrame();
    }
  },




  }
}
</script>



<style scoped>


.slide-fade-enter-active, .slide-fade-leave-active {
  transition: all 0.5s ease;
}
.slide-fade-enter, .slide-fade-leave-to {
  transform: translateX(100%);
  opacity: 0.8;
}

.blurbackground {
    flex: 1;
    position: absolute;
    margin: 0 !important;
    top: 0rem;
    left: 0rem;
    background-color: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(10px);
    height: 100%;
    width: 100%;
    z-index: 1000;
  }



/*
.products-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 20px;
}
.product-item:nth-child(1),
.product-item:nth-child(2) {
    grid-column: span 3;
}

.product-item:nth-child(n+3) {
    grid-column: span 2;
}
*/
.products-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 20px;
    padding: 4rem;
}
.product-item {
    grid-column: span 2;
}

.product-item:nth-child(1),
.product-item:nth-child(2) {
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
.saznaj-vie-kategorija {
  position: relative;
  letter-spacing: -0.17px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
 
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

.frame-kategorija {
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
.dogadajiframe2 {
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
.dogadajiframe3 {
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
.dogadajiframe1 {
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
  align-self: stretch;
  height: 43.63rem;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  background-size: cover; /* This makes the image aspect-fill */
  background-repeat: no-repeat;
  background-position: center; /* Centers the image */

  margin-top:3.5rem;
}
.vrhslikaitekst::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.6); /* Black with 60% opacity */

}

.dogaanja {
  position: relative;
  font-weight: 600;
  display: flex;
  align-items: center;

  flex-shrink: 0;
}

  .dogaanja2 {
  /* Styles for right-aligned div with SVG */
  position: relative;
  display: flex;
  align-items: center; /* Align SVG and text vertically */
  /* color: #03A9F4; */
  font-family: Inter;
  font-size: 0.9rem;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  margin-right: 2.7%;
  transform: scale(1); /* Original size */
  transition: color 0.3s ease, transform 0.3s ease; /* Smooth transition for hover effect */
}

.dogaanja2:hover {
  color: #05BFF6; /* Lighter color on hover */
  transform: scale(1.03); /* Slightly larger on hover */
}

.dogaanja2 svg {
  display: inline;
  vertical-align: middle;
  margin-right: 10px;
}



.dogadanjatekst {
  align-self: stretch;
  height: 3rem;
  display: flex;
  flex-direction: row;
  padding: 0rem 3.13rem;
  box-sizing: border-box;
  align-items: center; /* Change from flex-start to center for vertical alignment */
  justify-content: space-between;
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
  justify-content: flex-start;
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
  
  width: 100%; /* Make it full width */
    height: 100%; /* Adjust height as needed */
    display: flex;
    flex-direction: column; /* Change to column if needed */
    padding: 1.23rem 2.12rem;
    box-sizing: border-box;
    align-items: stretch; /* This will make children stretch to full width */
    justify-content: flex-start;
    gap: 1.75rem;
}
.frame7 {
    width: 100%; 
    height: 10rem;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    color: #fff;
}
.prvireddesni {
  width: 100%;
  max-width: 100%;
  height: 100%;
  min-height: 200px; /* Adjust as needed */


  text-decoration: none;
  border-radius: 20px;


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
  overflow-y: auto;
}
.dogadanja {
  position: relative;
  background-color: #f8f7f5;
  width: 100%;
  height: 220rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 2.5rem;
  text-align: center;
  font-size: 1.25rem;
  color: #fff;
  font-family: Inter;
  overflow: hidden;

  
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

  .countdown {
        max-width: 100vw;
        height: auto; 
        white-space: nowrap;
        font-size: calc(40px + (40 - 20) * ((100vw - 320px) / (720 - 320)));
    }

    .dana {
        max-width: 50vw;
        height: auto; 
        white-space: nowrap;
        font-size: calc(2px + (40 - 20) * ((100vw - 320px) / (720 - 320)));
    }
    .dogadajiframe3 {
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




  .teaj-za-uitelja{
font-size: 1.5rem;

  }

  .teaj-za-uitelje{
font-size: 1.45rem;
word-break: break-all;
  }



    .frame7 {
        max-width: 80vw;
        height: auto;  
    }
    .frame-container {
        max-width: 80vw;
        height: auto;  
    }



 

    .dogadanja {
  height: 286rem;

}
 

}

@media screen and (max-width: 500px) {


.dogaanja {
font-size: 1.5rem;
align-items: left;
}
.dogaanja2 {
font-size:0.8rem;
align-items: right;
}
.dogadanjatekst{
gap: 2.4rem;
padding: 0 rem 2.4rem;
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
    .dogadajiframe1 {
        max-width: 80vw;
        height: auto; 
    }
    .frame-container {
        max-width: 80vw;
        height: auto;  
    }



    .frame-kategorija {
  height: 33.69rem;

  padding-bottom: 29.06rem;
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
        .dogadajiframe3 {
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

    .teaj-za-uitelja{
font-size: 1.2rem;
  }

  .login-with-email-button{
height: 4.6rem;
  }


  .teaj-za-uitelje{
font-size: 1.2rem;
  }


  .countdown{
font-size: 2rem;
  }
  .dana{
font-size: 0.5rem;
    
  }
  .dogadajiframe3 {
        
    top: 2.2rem;  
    gap: 1.5rem !important;       
  }


  .dogadajiframe1 {
        max-width: 95vw;
    }

    .frame4, .frame5{
              gap: 1.3rem !important;

          }
     .frame4 {

              margin-left: 0.4rem;
     }

}




@media screen and (max-width: 1200px) {
    .products-grid {
        grid-template-columns: repeat(4, 1fr);
    }
    .product-item,
    .product-item:nth-child(1),
    .product-item:nth-child(2) {
        grid-column: span 2;
    }
}

@media screen and (max-width: 768px) {
    .products-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .product-item,
    .product-item:nth-child(1),
    .product-item:nth-child(2) {
        grid-column: span 1;
    }
}

@media screen and (max-width: 480px) {
    .products-grid {
        grid-template-columns: 1fr;
    }
    .product-item,
    .product-item:nth-child(1),
    .product-item:nth-child(2) {
        grid-column: span 1;
    }
}

</style>