<template>    
  <div class="dogadanja">
    <Head :title="$page.props.name" />
       
    
    <carousel-item-single 
    v-if="nextEvent"
    :product="nextEvent"
    no-gutter
    :class="['vrhslikaitekst']"
    :padding="2"
    :style="{ 'background-image': `url(${nextEvent.productImage ? nextEvent.productImage : '/storage/slike/prvireddesni@3x.png'})` }"
>

      <div class="frame-parent">
        <div class="frame">
          <div class="line-parent">
            <div class="frame-child" />
            <div class="sljedei-dogaaj">Sljedeći događaj</div>
            <div class="frame-child" />
          </div>

   <!-- Render the link when nextEvent.slug exists -->
<Link 
    v-if="nextEvent.slug"
    class="login-with-email-button cursor-pointer" 
    :href="route('skijasi.commerce-theme.detail', nextEvent.slug)"
>     
    <div class="saznaj-vie">Saznaj više</div>
</Link>

<!-- Render the button without a link when nextEvent.slug does not exist -->
<div 
    v-else
    class="login-with-email-button cursor-pointer"
>     
    <div class="saznaj-vie">Uskoro novi događaji</div>
</div>



        </div>
        <div class="frame1">
          <b class="teaj-za-uitelja">{{ nextEvent.name }} </b>
          <div class="frame-group">
            <div class="frame2">
              <div class="countdown">{{ countdownTime }}</div>
            </div>
            <div class="frame3">
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
         <div class="dogaanja">Događanja</div>
       </div>



     
       <main class="glavniframekvadrati">
          <div class="svikvadrtatiframe">
           <div class="velikikvadratiskupinapodframe">


           
           
            <div v-if="products.data.length > 0" class="products-grid">
    <div 
        class="product-item animacijakvadrati"

       v-for="product in reversedProducts"

        :key="product.id"
    >
        <Link :href="route('skijasi.commerce-theme.detail', product.slug)" class="prvireddesni">
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


import { mapState } from 'vuex'
import { Link, Head } from '@inertiajs/inertia-vue'
import appLayout from '../layouts/app.vue'
import categoryLayout from '../layouts/category.vue'
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


      countdownTime: '00:00:00:00'
   
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
    isEventActive(product) {
        const now = new Date();
        const eventEndDate = new Date(product.datumKraja);
        return now < eventEndDate;
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
      this.$inertia.visit(this.route('skijasi.commerce-theme.category', {
        ...this.queryParams(),
        sort
      }))
    },
    applyFilterSortPrice(type) {
      this.sort = 'price';
      this.type = 'type'
      this.$inertia.visit(this.route('skijasi.commerce-theme.category', {
        ...this.queryParams(),
        sort: this.sort,
        type
      }))
    },
    applyFilterQueryString() {
      this.$inertia.visit(this.route('skijasi.commerce-theme.category', this.queryParams()))
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
  align-self: stretch;
  height: 43.63rem;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  background-size: cover; /* This makes the image aspect-fill */
  background-repeat: no-repeat;
  background-position: center; /* Centers the image */

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
   overflow-y: auto;

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
  .countdown{
font-size: 2rem;
  }
  .dana{
font-size: 0.5rem;
    
  }
  .frame3 {
    left: 50%;     
    top: 2.2rem;           /* Move the left edge to the center of the parent */
  }

}



</style>