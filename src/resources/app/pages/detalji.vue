


<template>
  <div class="hzuts-dogadaji-detalji">
    <div class="glavnipodframe">
      <div class="glavnipodpodframe">
        <div class="glavnaslikaframe" :style="{ backgroundImage: backgroundImage }">

          <div class="glavnisasvimenazivisimjesto">
            <div class="nazivseminarapodframe">
              <div class="dravni-seminar">{{ product.name }}</div>
              <div class="div">{{ formatDateRange(product.datumPocetka, product.datumKraja) }}</div>
            </div>
            <div class="nazivmjestaframe">
              <div class="nazivmjestaframe2">
                <div class="sexten">{{ product.mjesto }}</div>
              </div>
            </div>
          </div>
        </div>
     <!--  <button class="qrcodeframe">
          <div class="qrcodeframe-child" />
          <img class="qr-code-1-icon" alt="" src="/storage/slike/detail/qrcode-1.svg" />
        </button>--> 
        <div class="trakakategorije">
  <div class="framezakategorijepod">
    <div class="framezakategorije">
      <button :class="{ 'active': activeSection === 'skijaliste' }" class="o-skijalitu" @click="activeSection = 'skijaliste'">O skijalištu</button>
      <div class="framezakategorije-child" />
      
      <button :class="{ 'active': activeSection === 'informacije' }" class="o-skijalitu" @click="activeSection = 'informacije'">Informacije</button>
      <div class="framezakategorije-child" />
      
      <button :class="{ 'active': activeSection === 'smjestaj' }" class="o-skijalitu" @click="activeSection = 'smjestaj'">Smještaj</button>
      <img class="framezakategorije-inner" alt="" src="/storage/slike/detail/line-39.svg" />
      
      <button :class="{ 'active': activeSection === 'prijevoz' }" class="o-skijalitu" @click="activeSection = 'prijevoz'">Prijevoz</button>
      <img class="framezakategorije-inner" alt="" src="/storage/slike/detail/line-39.svg" />
      
      <button :class="{ 'active': activeSection === 'cijene' }" class="o-skijalitu" @click="activeSection = 'cijene'">Prijava i plaćanje</button>
    </div>
  </div>
</div>

      </div>

      





        <div v-if="activeSection === 'skijaliste'" class="smjestajpodframe">
  <!-- Content for O skijalištu -->
  <div class="smjestajglavniframe">
  <div class="smjestajpodframe">
    
          <div class="tekstovipodpodframe">
            <div class="titleglavninatekstu">
              <b class="sexten">O skijalištu</b>                 

            </div>
            <div class="adminsadrzajframe">
              <div class="sudionici-seminara-bit-e-smje-parent">
             
                <div class="smjetaj-je-u-container">
                  <div v-html="product.desc" class="no-tailwindcss-base"></div>
                </div>
              </div>
            </div>
          </div>
  
  
        </div>
      </div>
  <!-- Content for O skijalištu -->
</div>

<div v-if="activeSection === 'informacije'" class="smjestajpodframe">
  <!-- Content for Informacije -->
  <div class="smjestajglavniframe">
  <div class="smjestajpodframe">
          <div class="tekstovipodpodframe">
            <div class="titleglavninatekstu">
              <b class="sexten">Informacije</b>
            </div>
            <div class="adminsadrzajframe">
              <div class="sudionici-seminara-bit-e-smje-parent">
             
                <div class="smjetaj-je-u-container">
                  <div v-html="product.desc2" class="no-tailwindcss-base"></div>
                </div>
              </div>
            </div>
          </div>
       
  
  
        </div>
      </div>
   <!-- Content for Informacije -->
</div>

<div v-if="activeSection === 'smjestaj'" class="smjestajpodframe">
  <!-- Content for Smještaj -->

  <div class="smjestajglavniframe">
  <div class="smjestajpodframe">
          <div class="tekstovipodpodframe">
            <div class="titleglavninatekstu">
              <b class="sexten">Smještaj</b>
            </div>
            <div class="adminsadrzajframe">
              <div class="sudionici-seminara-bit-e-smje-parent">
             
                <div class="smjetaj-je-u-container">
                  <div v-html="product.desc3" class="no-tailwindcss-base"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="galerijaframe">

            <div class="photo-gallery">
              <img class="arrow-left" @click="prevPhoto" alt="" src="/storage/slike/detail/group-276.svg" />
              <img class="arrow-right" @click="nextPhoto" src="/storage/slike/detail/group-2761.svg"/>


        <div class="gallery-container" ref="galleryContainer">
    <div v-for="(photo, index) in currentPhotos" :key="index" class="photo" @click="showFullscreen(index)">
      <img class="galerijaframe-item" :src="photo" alt="Photo">

        <div class="overlay">
                  <svg width="32"  class="eye-icon" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M31.7966 15.3772C31.5108 14.9861 24.6993 5.80176 15.9998 5.80176C7.30039 5.80176 0.488626 14.9861 0.203063 15.3768C-0.0676876 15.7478 -0.0676876 16.251 0.203063 16.622C0.488626 17.013 7.30039 26.1974 15.9998 26.1974C24.6993 26.1974 31.5108 17.013 31.7966 16.6223C32.0678 16.2513 32.0678 15.7478 31.7966 15.3772ZM15.9998 24.0875C9.59177 24.0875 4.0417 17.9917 2.39875 15.9988C4.03957 14.0043 9.57802 7.91164 15.9998 7.91164C22.4076 7.91164 27.9573 14.0064 29.6009 16.0003C27.9601 17.9948 22.4217 24.0875 15.9998 24.0875Z" fill="white"/>
<path d="M15.9999 9.66992C12.5097 9.66992 9.67017 12.5095 9.67017 15.9996C9.67017 19.4898 12.5097 22.3293 15.9999 22.3293C19.49 22.3293 22.3296 19.4898 22.3296 15.9996C22.3296 12.5095 19.49 9.66992 15.9999 9.66992ZM15.9999 20.2194C13.673 20.2194 11.7801 18.3264 11.7801 15.9996C11.7801 13.6728 13.673 11.7799 15.9999 11.7799C18.3267 11.7799 20.2196 13.6728 20.2196 15.9996C20.2196 18.3264 18.3267 20.2194 15.9999 20.2194Z" fill="white"/>
</svg>                
            </div>
      </div>
      
    </div>

   
  </div>

          </div>
  
  
        </div>
      </div>
    <!-- Content for Smještaj -->
</div>

<div v-if="activeSection === 'prijevoz'" class="smjestajpodframe">
  <!-- Content for Prijevoz -->
  <div class="smjestajglavniframe">
  <div class="smjestajpodframe">
          <div class="tekstovipodpodframe">
            <div class="titleglavninatekstu">
              <b class="sexten">Prijevoz</b>
            </div>
            <div class="adminsadrzajframe">
              <div class="sudionici-seminara-bit-e-smje-parent">
             
                <div class="smjetaj-je-u-container">
                  <div v-html="product.desc4" class="no-tailwindcss-base"></div>
                </div>
              </div>
            </div>
          </div>
       
  
  
        </div>
      </div>
    <!-- Content for Prijevoz -->
</div>

<div v-if="activeSection === 'cijene'" class="smjestajpodframe">
  <!-- Content for Prijava i plaćanje -->
  <div class="smjestajglavniframe">
  <div class="smjestajpodframe">
          <div class="tekstovipodpodframe">
            <div class="titleglavninatekstu">
              <b class="sexten">Prijava i plaćanje</b>
            </div>
            <div class="adminsadrzajframe">
              <div class="sudionici-seminara-bit-e-smje-parent">
             
                <div class="smjetaj-je-u-container">
                  <div v-html="product.desc5" class="no-tailwindcss-base"></div>
                </div>
              </div>
            </div>
          </div>
  
  
        </div>







</div>
      <div class="framegumbi">
        <a class="lijevigumb" @click="buyNow()">  
          <b class="uplatite-lanarinu-hzuts-u">UPLATITE ČLANARINU HZUTS-U</b>
        </a>
        <a class="lijevigumb"  :href="route('skijasi.commerce-theme.prijavanadogadaj', { id:  product.formId })"  @click="handleClick">
  <b class="prijavnica-za-dogaaj">PRIJAVNICA ZA DOGAĐAJ</b>
</a>

<vs-popup :title="'Privremeno zatvorene prijave'" :active.sync="showPopup" @close="showPopup = false">

    </vs-popup>
      
      </div>

    <!-- Content for Prijava i plaćanje     https://forms.gle/z95LVJdJV6Lr8jyh7-->

</div>







      

<!-- Skiing Type Selection Popup -->
<div v-if="showSkiingTypePopup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Odaberite vrstu skijanja</h2>
    <div class="space-y-4">
      <button @click="selectSkiingType('Samostalno skijanje')" 
       v-if="korisnik.additionalInfo !== 'KIF'"
      class="w-full py-3 bg-blue-500 pt-6 pb-6 text-white text-lg rounded-lg hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105 flex justify-between items-center px-4">
        <span>Samostalno skijanje</span>
        <span class="font-bold">{{ $currency(getSkiingTypePrice('Samostalno skijanje')) }}</span>
      </button>
      <button @click="selectSkiingType('Grupno skijanje')" class="w-full py-3 bg-green-500 pt-6 pb-6 text-white text-lg rounded-lg hover:bg-green-600 transition duration-300 ease-in-out transform hover:scale-105 flex justify-between items-center px-4">
        <span>Grupno skijanje</span>
        <span class="font-bold">{{ $currency(getSkiingTypePrice('Grupno skijanje')) }}</span>
      </button>
    </div>
    <button @click="showSkiingTypePopup = false" class="text-nazad mt-6 w-3/4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">
      Nazad
    </button>
  </div>
</div>

  <!-- Loading Overlay -->
  <div v-if="isLoading" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-5 rounded-full">
      <svg class="animate-spin h-10 w-10 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
      </svg>
    </div>
  </div>





  
    </div>
  </div>
</template>


<script>
import Rating from './../components/rating/rating.vue'
import Counter from './../components/counter/counter.vue'
import Carousel from '../components/carousel/carousel.vue'
import CarouselItem from '../components/carousel/carousel-item.vue'
import Pagination from './../components/pagination/pagination.vue'

import { Link } from '@inertiajs/inertia-vue'
import appLayout from '../layouts/app.vue'
import detailLayout from '../layouts/detail.vue'

import CarouselSingle from '../components/carousel-single/carousel.vue'
import CarouselItemSingle from '../components/carousel-single/carousel-item.vue'
import { mapState } from 'vuex'
import { disableBodyScroll, enableBodyScroll } from "body-scroll-lock";

import podaciusera from '../../../../../core/src/resources/js/api/modules/skijasi-user.js';


export default {
  layout: [appLayout, detailLayout],
  components: {
    Rating,
    Counter,
    Carousel,
    CarouselItem,
    Pagination,
    Link,
    CarouselSingle,
    CarouselItemSingle
  },
  inject: ['goBack'],
  data() {
    return {
      showSkiingTypePopup: false,
      selectedSkiingType: null,
      isLoading: false,


      showPopup: true,

      activeSection: 'skijaliste',


      korisnik: [],


      backgroundImage: null,

      currentIndex: 0,
      fullscreenImageIndex: null,


      reviewActive: 0,
      quantity: 1,
      activeImageCarousel: 0,
      active: 0,
      activeImageSource: null,
      activePrice: 0,
      activeStock: 0,
      activeDiscount: {
        active: false,
        discountFixed: 0,
        discountPercent: 0,
        discountType: 'fixed'
      },
      currentPage: 1,
      selectedProduct: {
        id: null
      },
      rating: {
        1: 0,
        2: 0,
        3: 0,
        4: 0,
        5: 0,
      },
      product: {
        closed: 1, 
        form_id: null,

        desc: null,
        desc2: null,
        desc3: null,
        desc4: null,
        desc5: null,
        name: "",
        datum_pocetka: null,
        datum_kraja: null,
        mjesto: "",
        prijavnicalink: "",



        reviewAvgRating: 0,
        reviewCount: 0,
        productCategory: {
          name: null,
          slug: null,
        },
        productDetails: [
          {
            price: null,
            quantity: 0,
            discount: {
              active: false,
              discountFixed: 0,
              discountPercent: 0,
              discountType: 'fixed'
            },
            sold: 0
          }
        ],
        productImage: null,
        slug: null,
        updatedAt: this.$moment.now(),
      },
      review: {
        data: [],
        total: 0
      },
      similarProducts: [],
      popup: false,
      openDesc: false,
      variation: false
    }
  },
  computed: {
  currentPhotos() {
    if (!this.product.galleryimages) return [];
    
    // const baseUrl = process.env.APP_URL ?? '';
    const baseUrl =  process.env.MIX_FRONTEND_URL || 'http://127.0.0.1:8000/storage/';
    const images = JSON.parse(this.product.galleryimages);
    
    return images.map(path => {
      // Check if the path is already a full URL
      if (path.startsWith('http://') || path.startsWith('https://')) {
        return path;
      }
      
      // If it's a relative path, prepend the base URL
      return `${baseUrl}/storage/${path.replace(/^\//, '')}`;
    });
  },







    getImageSourceMobile() {
      return this.selectedProduct.productImage ? this.selectedProduct.productImage : this.product.productImage
    },
    getHumanReadableUpdatedAt() {
      return this.$moment(this.product.updatedAt).fromNow()
    },
    getAllImages() {
      return this.product.productDetails.map(d => d.productImage)
    },
    getFilteredReviews() {
      return this.reviewActive === 0
        ? this.review.data
        : this.$_.filter(this.review.data, { rating: this.reviewActive })
    },
    hasActiveDiscount() {
      return this.product.productDetails[this.activeImageCarousel].discount !== null
        ? this.product.productDetails[this.activeImageCarousel].discount.active === 1
        : false
    },
    getDiscount() {
      if (this.product.productDetails[0].discount !== null) {
        return this.getDiscountType == 'fixed'
          ? `${Math.round(this.product.productDetails[0].discount.discountFixed/1000)}K`
          : `${this.product.productDetails[0].discount.discountPercent}%`
      }

      return null
    },
    getDiscountType() {
      return this.product.productDetails[0].discount !== null
        ? this.product.productDetails[0].discount.discountType
        : null
    },
    getProductSold() {
      return this.product.productDetails.reduce((prev, curr) => {
        return prev + parseInt(curr.sold || 0)
      }, 0) || 0;
    },
    ...mapState({
      isAuthenticated(state) {
        return state.isAuthenticated
      },
      user(state) {
        return state.user
      },
      appName(state) {
        return this.$_.find(state.themeConfigurations, { key: "appName" }).value;
      },
    }),

  },
  watch: {
    '$page.props': {
      handler() {
        this.getProduct()
      },
      deep: true
    },
    "product.name": {
      handler(val) {
        document.title = `${val} - Hzuts.hr`
      }
    },
    currentPage: {
      handler() {
        this.getReviews()
      }
    },

    'product.productImage': {
    immediate: true,
    handler(newVal) {
      console.log('New image value:', newVal);
      this.backgroundImage = newVal ? `url(${newVal})` : 'none';
      console.log('Background image:', this.backgroundImage);
    },
  },

  },
  mounted() {
    this.getProduct();
    this.ucitajClanove();
  },
  methods: {
    async ucitajClanove() {
            console.log("TEST ID ucitaj clanove:", this.user.id);
        try {
          this.number = this.user.id;
        
          const response = await podaciusera.readmojstatus({
              id: this.number,
          });
              this.korisnik = response.data.user;
              console.log("TEST STATUS ucitaj clanove:", this.korisnik.statusString);
              console.log("TESTucitaj clanove:", this.korisnik);

            } catch (error) {
            // this.$closeLoader();
        
        }
      },

    handleClick() {
      if (this.product.closed === 1) {
        this.showPopup = true; // Show the popup
      } else {
        // Handle the normal click action if product is not closed
      }
    },


    prevPhoto() {
      if (this.currentIndex > 0) {
        this.currentIndex--;
        this.scrollToCurrentIndex();
      }
    },
    nextPhoto() {
      if (this.currentIndex < this.photos.length - 1) {
        this.currentIndex++;
        this.scrollToCurrentIndex();
      }
    },
    scrollToCurrentIndex() {
      const container = this.$refs.galleryContainer;
      const scrollPosition = container.offsetWidth * this.currentIndex;
      container.scrollLeft = scrollPosition;
    },


    showFullscreen(index) {
    // Use the index directly to get the image URL from the photos array
    const imageURL = this.currentPhotos[index];
    this.fullscreenImageIndex = index;


    const overlay = document.createElement('div');
    overlay.id = 'fullscreen-overlay';
    overlay.style.position = 'fixed';
    overlay.style.top = '0';
    overlay.style.left = '0';
    overlay.style.width = '100%';
    overlay.style.height = '100%';
    overlay.style.backgroundColor = 'rgba(0,0,0,0.9)';
    overlay.style.display = 'flex';
    overlay.style.justifyContent = 'center';
    overlay.style.alignItems = 'center';
    overlay.style.zIndex = '10000';

    overlay.innerHTML = ''; // Clear previous content

    const img = new Image();
    img.src = imageURL;
    overlay.appendChild(img);

    const leftArrow = document.createElement('button');
    leftArrow.innerHTML = '&lt;';
    leftArrow.onclick = () => this.showPreviousImage();
    leftArrow.style.position = 'absolute';
    leftArrow.style.left = '10px';
    leftArrow.style.top = '50%';
    leftArrow.style.transform = 'translateY(-50%) scaleY(1.7)';  
    leftArrow.style.fontSize = '3em';  
    leftArrow.style.lineHeight = '1'; 
    leftArrow.style.color = 'white';
    leftArrow.style.background = 'none';
    leftArrow.style.border = 'none';
    leftArrow.style.cursor = 'pointer';
    overlay.appendChild(leftArrow);

    const rightArrow = document.createElement('button');
    rightArrow.innerHTML = '&gt;';
    rightArrow.onclick = () => this.showNextImage();
    rightArrow.style.position = 'absolute';
    rightArrow.style.right = '10px';
    rightArrow.style.top = '50%';
    rightArrow.style.transform = 'translateY(-50%) scaleY(1.7)';  // Stretch the arrow vertically
    rightArrow.style.fontSize = '3em';  
    rightArrow.style.lineHeight = '1'; 
    rightArrow.style.color = 'white';
    rightArrow.style.background = 'none';
    rightArrow.style.border = 'none';
    rightArrow.style.cursor = 'pointer';
    overlay.appendChild(rightArrow);

    document.body.appendChild(overlay);
    overlay.addEventListener('click', (e) => {
        if (e.target === overlay) {
            document.body.removeChild(overlay);
            this.fullscreenImageIndex = null;
        }
    });




 // Create the "X" button
 const closeButton = document.createElement('button');
    closeButton.innerHTML = 'x';
    closeButton.onclick = () => {
        document.body.removeChild(overlay);
    };
    closeButton.style.position = 'absolute';
    closeButton.style.top = '20px';
    closeButton.style.right = '20px';
    closeButton.style.fontSize = '1.4em';
    closeButton.style.transform = 'translateY(-50%) scaleX(1.4)';  // Stretch the arrow vertically
    closeButton.style.color = 'white';
    closeButton.style.background = 'none';
    closeButton.style.border = 'none';
    closeButton.style.cursor = 'pointer';
    closeButton.style.zIndex = '10';  // Ensure it's above other elements
    overlay.appendChild(closeButton);

    document.body.appendChild(overlay);
    overlay.addEventListener('click', (e) => {
        if (e.target === overlay) {
            document.body.removeChild(overlay);
        }
    });




},



showNextImage() {
  if (this.fullscreenImageIndex < this.currentPhotos.length - 1) {
    this.fullscreenImageIndex++;
  } else {
    this.fullscreenImageIndex = 0;
  }
  const overlay = document.getElementById('fullscreen-overlay');
  const img = overlay.querySelector('img');
  img.src = this.currentPhotos[this.fullscreenImageIndex];
},

showPreviousImage() {
  if (this.fullscreenImageIndex > 0) {
    this.fullscreenImageIndex--;
  } else {
    this.fullscreenImageIndex = this.currentPhotos.length - 1;
  }
  const overlay = document.getElementById('fullscreen-overlay');
  const img = overlay.querySelector('img');
  img.src = this.currentPhotos[this.fullscreenImageIndex];
},






    setBackgroundImage(imageUrl) {
      this.backgroundImage = imageUrl || 'none';
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






    openVariationDialog() {
      if (!this.isAuthenticated) {
        this.$helper.alert("Morate se prijaviti prvo!")
        this.$inertia.visit(this.route('skijasi.commerce-theme.login'))
        return
      }

      disableBodyScroll(document.querySelector("body"));
      this.variation = true
    },
    closeVariationDialog() {
      enableBodyScroll(document.querySelector("body"));
      this.variation = false
    },
    hideBodyScroll() {
      enableBodyScroll(document.querySelector("body"));
    },
    getProductSoldTotal(product) {
      return product.productDetails.reduce((prev, curr) => {
        return prev + parseInt(curr.sold || 0)
      }, 0) || 0;
    },
    toggleDescButton() {
      this.openDesc = !this.openDesc
    },
    openPopup() {
      disableBodyScroll(document.querySelector("body"));
      this.popup = true
    },
    closePopup() {
      enableBodyScroll(document.querySelector("body"));
      this.popup = false
    },
    isImage(image) {
      var _validFileExtensions = [".jpg", ".jpeg", ".png"];
      var extIsValid = false;
      for (var j = 0; j < _validFileExtensions.length; j++) {
        var currentExtension = _validFileExtensions[j];
        if (image.endsWith(currentExtension)) {
          extIsValid = true;
          break;
        }
      }

      if (!extIsValid) return false;
      return true;
    },
    isVideo(video) {
      var _validFileExtensions = [".mp4", ".mkv"];
      var extIsValid = false;
      for (var j = 0; j < _validFileExtensions.length; j++) {
        var currentExtension = _validFileExtensions[j];
        if (video.endsWith(currentExtension)) {
          extIsValid = true;
          break;
        }
      }

      if (!extIsValid) return false;
      return true;
    },
    getReviewButtonClasses(index) {
      return this.reviewActive === index
        ? 'text-primary bg-white border-primary'
        : 'text-black bg-white border-gray-300'
    },
    getReviews() {
      this.$api.skijasiReview
        .browse({
          slug: this.$page.props.slug,
          page: this.currentPage
        })
        .then(res => {
          this.review = res.data.reviews
          this.rating = {...this.rating, ...this.$_.countBy(res.data.reviews.data, 'rating')}
        })
        .catch(err => {
          this.$helper.displayErrors(err)
        })
    },
    getProduct() {
  this.$api.skijasiProduct
    .read({ slug: this.$page.props.slug })
    .then(res => {
      this.product = res.data.product;
      this.product.reviewAvgRating = parseFloat(res.data.product.reviewAvgRating) || 0;
      this.activeImageSource = res.data.product.productDetails[0].productImage;
      this.activePrice = res.data.product.productDetails[0].price;
      this.activeStock = res.data.product.productDetails[0].quantity;
      this.activeDiscount = res.data.product.productDetails[0].discount;
// this.getSimilarProduct() // this.getReviews() 
     

     
    })
    .catch(err => {
      this.$helper.displayErrors(err);
      this.$inertia.visit(this.route('skijasi.commerce-theme.404'));
    });
},
setSelectedProduct() {
  if (this.korisnik.statusString === "Nije član" || this.korisnik.statusString === "") {
    const nijeclanProduct = this.product.productDetails.find(
      detail => detail.name === "Nije član"
    );
    this.selectedProduct.id = nijeclanProduct ? nijeclanProduct.id : this.product.productDetails[0].id;
  } else if (this.selectedSkiingType === 'Samostalno skijanje') {
    const hzutsProduct = this.product.productDetails.find(
      detail => detail.name === "HZUTS član"
    );
    this.selectedProduct.id = hzutsProduct ? hzutsProduct.id : this.product.productDetails[0].id;
  } else if (this.selectedSkiingType === 'Grupno skijanje') {
    const grupnoProduct = this.product.productDetails.find(
      detail => detail.name === "Grupno skijanje"
    );
    if (grupnoProduct) {
      this.selectedProduct.id = grupnoProduct.id;
    } else {
      // Handle case where "Grupno skijanje" is not found
      this.$helper.alert("Opcija 'Grupno skijanje' nije dostupna. Molimo odaberite drugu opciju.");
      this.showSkiingTypePopup = true; 
      this.isLoading = false; 
      // Show the popup again
      return; // Exit the method without setting selectedProduct.id
    }
  }

  // Log the selected product for debugging
  console.log("Selected product ID:", this.selectedProduct.id);
},

getSkiingTypePrice(type) {
      if (type === 'Samostalno skijanje') {
        const hzutsProduct = this.product.productDetails.find(
      detail => detail.name === "HZUTS član"
    );
    return hzutsProduct ? hzutsProduct.price : 0;
        // const matchingProduct = this.product.productDetails.find(
        //   detail => detail.name === this.korisnik.statusString
        // );
        // return matchingProduct ? matchingProduct.price : 0;
      } else if (type === 'Grupno skijanje') {
        const grupnoProduct = this.product.productDetails.find(
          detail => detail.name === "Grupno skijanje"
        );
        return grupnoProduct ? grupnoProduct.price : 0;
      }
      return 0;
    },


    getSimilarProduct() {
      this.$api.skijasiProduct
        .browseSimilar({
          slug:  this.product.productCategory.slug
        })
        .then(res => {
          this.similarProducts = res.data.products
        })
        .catch(err => {
          this.$helper.displayErrors(err)
        })
    },
    getDiscountedPrice(price, discount) {
      let d = 0
      if (discount.discountType === 'fixed') {
        d = discount.discountFixed;
      } else {
        d = discount.discountPercent * price / 100
      }
      return this.$currency(price - d)
    },
    addToCart() {
      // if (this.selectedProduct.id === null) {
      //   this.$helper.alert("Morate odabrati opciju!")
      //   return
      // }

      if (!this.isAuthenticated) {
        this.$helper.alert("Morate se prijaviti prvo!")
        this.$inertia.visit(this.route('skijasi.commerce-theme.login'))
        return
      }

      this.$api.skijasiCart
        .add({
          id: this.selectedProduct.id,
          quantity: this.quantity
        })
        .then(res => {
          this.$store.dispatch('FETCH_CARTS')
          this.$helper.alert(res.message)
        })
        .catch(err => {
          this.$helper.displayErrors(err)
        })
    },
    buyNow() {
      // if (this.selectedProduct.id === null) {
      //   this.$helper.alert("Potrebno je odabrati barem jednu vrstu!")
      //   return
      // }

      if (!this.isAuthenticated) {
        this.$helper.alert("Morate se prijaviti prvo. Niste logirani!")
        this.$inertia.visit(this.route('skijasi.commerce-theme.login'))
        return
      }
   
      this.isLoading = true; // Start loading

// Check if the user is "Nije član"
if (this.korisnik.statusString === "Nije član" || this.korisnik.statusString === "") {

  // Set the product for "Nije član" without showing the popup
  const nijeclanProduct = this.product.productDetails.find(
    detail => detail.name === "Nije član"
  );
  this.selectedProduct.id = nijeclanProduct ? nijeclanProduct.id : this.product.productDetails[0].id;
  this.processOrder();
} else {
  // Show the skiing type selection popup for other users
  this.showSkiingTypePopup = true;
  this.isLoading = false; // Stop loading as we're waiting for user input
}

    },
    processOrder() {
  this.$api.skijasiCart
    .add({
      id: this.selectedProduct.id,
      quantity: this.quantity
    })
    .then(res => {
      this.$store.dispatch('FETCH_CARTS')
      this.$inertia.visit(this.route('skijasi.commerce-theme.zaduzenja'))
      this.$helper.alert(res.message)
    })
    .catch(err => {
      this.$helper.displayErrors(err)
    })
    .finally(() => {
      this.isLoading = false; // Stop loading
    })
},

selectSkiingType(type) {
  this.selectedSkiingType = type;
  this.setSelectedProduct();
  if (this.selectedProduct.id) {
    this.showSkiingTypePopup = false;
    this.processOrder(); // Process the order after selection
  }
},
    clickProductDetail(productDetail, index) {
      this.selectedProduct = productDetail;
      this.quantity = 1;
      this.active = index;
      this.activePrice = productDetail.price
      this.activeStock = productDetail.quantity
      this.activeDiscount = productDetail.discount
    },
    hoverProductDetail(index) {
      this.activeImageCarousel = index;
      this.activeImageSource = this.product.productDetails[index].productImage
      this.activePrice = this.product.productDetails[index].price
      this.activeStock = this.product.productDetails[index].quantity
      this.activeDiscount = this.product.productDetails[index].discount
    },
    leaveProductDetail(active) {
      this.activeImageCarousel = active;
      this.activeImageSource = this.product.productDetails[active].productImage
      this.activePrice = this.product.productDetails[active].price
      this.activeStock = this.product.productDetails[active].quantity
      this.activeDiscount = this.product.productDetails[active].discount
    },
    getProductPrice(product) {
      if (product.productDetails.length > 0) {
        let min = this.$_.minBy(product.productDetails, 'price')
        let max = this.$_.maxBy(product.productDetails, 'price')
        return min == max
        ? this.$currency(min.price)
        : `${this.$currency(min.price)} - ${this.$currency(max.price)}`
      }

      return this.$_.has(this.$_.minBy(product.productDetails, 'price'), 'price')
        ? this.$currency(this.$_.minBy(product.productDetails, 'price').price)
        : this.$currency(0)
    },
  }
}
</script>
<style scoped>




.photo-gallery {
  position: relative;
  width: 100%;  /* Or any defined width */
  height: auto; /* Or any defined height */
}

.active {
  background-color: #03A9F4;
  color: white;
}


.o-skijalitu::before {
    content: "";
    position: absolute;
    bottom: 0;
    bottom: -30px; 
    left: 0;
    right: 0;
    height: 2px;  /* Thickness of the line */
    background-color: #03A9F4;
    transform: scaleX(0);
    transform-origin: bottom right;
    transition: transform 0.3s ease-out;
}

/* Hover effect: Line appears from right to left */
.o-skijalitu:hover::before {
    transform: scaleX(1);
    transform-origin: bottom left;
}

/* Active button style: A full line below the button */
.active::before {
    transform: scaleX(1);
    transform-origin: bottom left;
}




.photo {
  position: relative; 
  flex: none;  /* This ensures that the item does not shrink or grow */
  width: 11.14rem;  /* Set a fixed width for the photos */
  height: 12.5rem; 
  margin-right: 1.13rem;  /* Set a fixed gap between photos */


  cursor: pointer;
  display: flex; 
  align-items: center;  /* Center vertically */
  justify-content: flex-start;  /* Center horizontally */
  overflow: hidden;
}

.gallery-container {
  display: flex;
  width: calc(100% - 4%);  /* Minus the width of both arrows */
  overflow-x: scroll;
  scroll-snap-type: x mandatory;
  white-space: nowrap;
  margin: 0 auto;
  padding: 0 2%;  /* Padding equals half the width of one arrow, so the first and last photos are not hidden behind arrows */
}
.arrow-left, .arrow-right {
    z-index: 1001; /* Ensure it's above the photos and other elements */
}




.arrow-left {
    position: absolute;
    left: 0; /* Position it to the extreme left */
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
}

.arrow-right {
    position: absolute;
    right: 0; /* Position it to the extreme right */
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
}
.photo, .overlay, .galerijaframe-item {
  box-sizing: border-box;
}

.overlay {
  position: absolute;
    border-radius: 10px;
    width: 11.14rem;
    height: 80%;
    object-fit: cover;
    display: block;


  background-color: #03A9F4CC;
  opacity: 80%;
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
  transition: opacity 0.3s ease-in-out; /* smooth fade-in effect */
}

.eye-icon {
  width: 32px;
  height: 32px;
}

.photo:hover .overlay {
  opacity: 1;
}

.left-pointer, .right-pointer {
    position: absolute; /* Takes the pointers out of the normal flow */
    top: 50%;  /* Vertically centers the pointers */
    transform: translateY(-50%); 
    width: 40px;  /* Adjusted width */
    height: 40px; /* Adjusted height to match width */
    font-size: 24px; 
    align-items: center;
    justify-content: center;
    background-color: black; 
    opacity: 40%;
    display: flex;  
    border-radius: 50%; /* Makes it a circle */
    padding: 10px; /* Adjusts the size of the circle */
    cursor: pointer; /* Indicates interactivity */
    z-index: 2; /* Ensure pointers are above other elements */
}

.left-pointer {
    left: 3%; /* Positions at the left end */
    color: white;
/* adjust as needed */
    font-weight: 500;
}

.right-pointer {
    right: 3%; /* Positions at the right end */
    color: white;
 /* adjust as needed */
    font-weight: 500;
}





.lijevigumb {
    text-decoration: none;
    border: 2px solid #03a9f4;
    box-sizing: border-box;
    height: 5rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0rem 3.94rem;
    opacity: 1;
    color: inherit;
  }
  .lijevigumb:hover {
    color: #fff;
    background-color: #03a9f4;
    cursor: pointer;
}

  .dravni-seminar {
    align-self: stretch;
    position: relative;
    
  }
  .div {
    align-self: stretch;
    position: relative;
    font-size: 2.25rem;
    font-family: Monoton;
  }
  .nazivseminarapodframe {
    width: 30.13rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 0.06rem;
    flex-wrap: wrap;  
  }
  .sexten {
    position: relative;
  }
  .nazivmjestaframe2 {
    border-radius: 30px;
    background-color: #fff;
    width: 7.5rem;
    height: 2.5rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap; 
  }
  .nazivmjestaframe {
    width: 9.5rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: left;
    font-size: 0.88rem;
    color: #000;
    font-family: Inter;
  }
  .glavnisasvimenazivisimjesto {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    gap: 0.63rem;
  }
  .glavnaslikaframe {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 9.56rem 32.44rem;

    background-size: cover;
  background-position: center;
    background-repeat: no-repeat;

    z-index: 0;
  }
  .qrcodeframe-child {
    position: relative;
    border-radius: 50%;
    background-color: #03a9f4;
    width: 2.5rem;
    height: 2.5rem;
    z-index: 0;
  }
  .qr-code-1-icon {
    position: absolute;
    margin: 0 !important;
    top: calc(50% - 10px);
    left: calc(50% - 10px);
    width: 1.25rem;
    height: 1.25rem;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
  }
  .qrcodeframe {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    margin: 0 !important;
    position: absolute;
    top: 1.31rem;
    left: 85.75rem;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 0.63rem;
    z-index: 1;
  }
  .o-skijalitu {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: relative;
    font-size: 1.25rem;
    font-weight: 700;
    font-family: Inter;
    color: #fff;
    text-align: center;
    display: inline-block;
  }
  .framezakategorije-child {
    position: relative;
    border-right: 2px solid #03a9f4;
    box-sizing: border-box;
    width: 0.13rem;
    height: 2rem;
  }
  .framezakategorije-inner {
    position: relative;
    width: 0.13rem;
    height: 1.88rem;
  }
  .framezakategorije {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 1.88rem;
  }
  .framezakategorijepod {
    margin: 0 !important;
    position: absolute;
    top: 1.88rem;
    left: calc(50% - 400px);
    width: 50rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    z-index: 0;
  }
  .trakakategorije {
    align-self: stretch;
    background-color: #000;
    height: 5.63rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 1.88rem 20.63rem;
    box-sizing: border-box;
    position: relative;
    z-index: 2;
  }
  .glavnipodpodframe {
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    position: relative;
    color: #fff;
    font-family: "Luckiest Guy";
  }
  .titleglavninatekstu {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
  }
  .sudionici-seminara-bit {
    margin: 0;
  }
  .rainer {
    margin-bottom: false;
  }
  .waldheim {
    text-decoration: underline;
  }
  .rainer-passo-monte-croce-drei {
    margin: 0;
    padding-left: 1.35rem;
    color: #03a9f4;
  }
  .sudionici-seminara-bit-container {
    align-self: stretch;
    position: relative;
    font-weight: 500;
  }
  .vana-napomena {
    margin: 0;
    color: #db1f26;
  }
  .smjetaj-je-u-container {
    align-self: stretch;
    position: relative;
    font-size: 1.25rem;
    font-weight: 500;
    font-family: Inter;
  }
  .sudionici-seminara-bit-e-smje-parent {
    flex: 1;
    border-radius: 20px;
    background-color: #fff;
    display: flex;
    flex-direction: column;
   
    justify-content: flex-start;
    padding: 1.94rem 1.88rem 1.81rem;
    gap: 1.25rem;
  }
  .adminsadrzajframe {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;

    justify-content: space-between;
    font-size: inherit;
    font-family: inherit;
  }
  .tekstovipodpodframe {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 0rem 4.25rem;
    gap: 1.25rem;
  }
  .galerijaframe-child {
    position: relative;
    width: 3.75rem;
    height: 3.75rem;
  }
  .galerijaframe-item {
    position: relative;
    border-radius: 10px;
    width: 11.14rem;
    height: 80%;
    object-fit: cover;
    display: block;
  }
  .group-icon {
    position: relative;
    width: 11.56rem;
    height: 12.5rem;
  }
  .galerijaframe {
    width: 95%;
    height: 12.5rem;
    overflow: hidden;
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 1rem 1rem;
    gap: 1.88rem;

    margin: 0 auto;
  }
  .smjestajpodframe {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 0rem 1.25rem;
    gap: 1.88rem;
  }
  .smjestajglavniframe {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0rem 1.25rem;
    text-align: left;
    font-size: 2rem;
  }
  .prijavnica-za-dogaaj {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 17.44rem;
  }
 
  .uplatite-lanarinu-hzuts-u {
    align-self: stretch;
    position: relative;
  }
  .desnigumb {
    text-decoration: none;
    background-color: #03a9f4;
    height: 5rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0rem 2.81rem;
    box-sizing: border-box;
    color: #fff;
  }
  .framegumbi {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;

    gap: 5rem; 
    font-size: 1.25rem;
  }
  .glavnipodframe {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 3.75rem 0rem;
    gap: 3.75rem;
    width: 100%; 
  }
  .hzuts-dogadaji-detalji {
    position: relative;
    background-color: #f8f7f5;
    width: 100%;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0rem 0rem 3.13rem;
    box-sizing: border-box;
    text-align: center;
    font-size: 3rem;
    color: #000;
    font-family: Inter;
  }


  .text-nazad {
    font-size: medium;
    line-height: 2rem;
  }

  @media screen and (max-width: 550px) {
    .o-skijalitu {
      font-size: 0.63rem !important;
    }

    .framezakategorije {
      gap: 0.31rem;
      align-items: center;
      justify-content: center;
    }

    .prijavnica-za-dogaaj {
      font-size: 0.8rem;
    }

    .lijevigumb {
      width: 16.88rem;
      height: 3.75rem;
      padding-left: 1.88rem;
      padding-right: 1.88rem;
      box-sizing: border-box;
    }

    .uplatite-lanarinu-hzuts-u {
      font-size: 0.8rem;
    }

    .desnigumb {
      width: 16.88rem;
      height: 3.75rem;
      padding-left: 1.88rem;
      padding-right: 1.88rem;
      box-sizing: border-box;
    }
    .dravni-seminar {
      font-size: 2rem;
  }
  .div {
    font-size: 2rem;
  }
 

  }


  @media screen and (max-width: 800px) {
    .o-skijalitu {
      font-size: 1rem;
    }

    .framezakategorije {
      flex-direction: row;
      gap: 0.63rem;
    }

    .tekstovipodpodframe {
    padding: 0rem 0.85rem;

  }
  .galerijaframe {

padding: 0%;  
}

  }


  @media screen and (max-width: 500px) {
.smjestajpodframe {
  padding: 0rem 0rem;
  }
  .smjestajglavniframe {
  padding: 0rem 0rem;
  }

}



@media screen and (min-width: 1510px) {
.glavnaslikaframe {
width: 100%;
  }

.glavnipodpodframe {
width: 100%;
  }
  .glavnisasvimenazivisimjesto {
width: 100%;
  }

}

@media screen and (max-width: 980px) {
.framegumbi {
  flex-direction: column;
}

}


</style>