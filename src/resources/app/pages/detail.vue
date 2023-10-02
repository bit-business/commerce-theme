



<!--
<template>
  <div>
    <div class="container mt-8 hidden sm:block navbarpraznina">
      <div class="bg-white grid grid-cols-5 gap-8 p-4 shadow-sm rounded-xl">
        <div class="col-start-1 col-end-3 w-full">
          <div class="aspect-w-1 aspect-h-1">
            <img :src="activeImageSource" alt="" class="w-full h-full object-center object-cover cursor-pointer rounded-xl">
          </div>
          <carousel :show="4" class="mt-2" :hide-navigation="product.productDetails.length <= 4" v-if="product.productDetails.length > 0">
            <carousel-item
              v-for="productDetail, index in product.productDetails"
              :key="index"
              no-gutter
              :class="['cursor-pointer', activeImageCarousel === index ? 'ring-2 ring-primary ring-inset' : '', 'rounded-xl']"
              :padding="2"
            >
              <img
                :src="productDetail.productImage"
                alt=""
                @mouseenter="activeImageSource = productDetail.productImage; activeImageCarousel = index"
                @mouseleave="activeImageSource = product.productDetails[active].productImage; activeImageCarousel = active"
                class="rounded-xl"
              >
            </carousel-item>
          </carousel>

        </div>
        <div class="w-full col-start-3 col-end-6">
          <div class="uppercase text-lg font-semibold text-gray-700">{{ product.name }}</div>
          <div class="flex items-center mt-4 flex-nowrap gap-2 text-sm divide-x">

      
            <div class="pl-2">
              {{ getProductSold }} <span class="text-gray-500">Prodano</span>
            </div>
          </div>
          <div class="mt-4 flex items-center bg-gray-100 gap-2 rounded-xl" v-if="hasActiveDiscount">
            <div class="text-normal text-gray-400 pl-5 py-3 line-through">
              {{ $currency(activePrice) }}
            </div>
            <div class="text-3xl text-primary font-semibold py-3">
              {{ getDiscountedPrice(activePrice, activeDiscount) }}
            </div>
            <div class="flex items-center gap-2 text-white text-xs bg-primary rounded-sm px-1.5 py-0.5 font-bold">
             - {{ getDiscount }} Popust
            </div>
          </div>
          <div class="mt-4 flex items-center bg-gray-100 gap-2 rounded-xl" v-else>
            <div class="text-3xl text-primary font-semibold py-3 pl-5">
              {{ $currency(activePrice) }}
            </div>
          </div>
          <div class="p-4 flex flex-wrap text-sm text-gray-500 gap-4">
            <div class="grid grid-cols-6 gap-y-4 items-center w-full">
              <div class="col-span-1">Član:</div>
              <div class="col-span-5 flex gap-2">
                <div class="px-2.5 py-1.5 text-sm border rounded-md hover:border-primary hover:text-primary cursor-pointer"
                  :class="productDetail.id == selectedProduct.id ? 'text-primary border-primary' : 'text-gray-500 border-gray-300'"
                  v-for="productDetail, index in product.productDetails" :key="index"
                  @click="clickProductDetail(productDetail, index)"
                  @mouseenter="hoverProductDetail(index)"
                  @mouseleave="leaveProductDetail(active)"
                >
                  {{ $voca.titleCase(productDetail.name) }}
                </div>
              </div>

              <div class="col-span-1">Količina</div>
              <div class="col-span-5 flex items-center gap-4">
                <counter v-model="quantity" :min="1" :max="product.productDetails[active].quantity" />
                Preostalo {{ activeStock }} ulaznica
              </div>
            </div>
            <div class="w-full flex gap-4 items-center">
              <button class="p-3 flex items-center gap-2 border border-primary bg-primary bg-opacity-10 text-primary rounded-md" @click="addToCart">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                </svg>
                Prijevoz
              </button>
              <button class="py-3 px-12 flex items-center bg-primary text-white rounded-md hover:brightness-110 filter" @click="buyNow">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                </svg> Prijava i plaćanje
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-5 gap-8 mt-8">
        <div class="flex flex-wrap col-start-1 col-end-5 shadow-sm">
          <div class="bg-white p-6 rounded-xl">
            <div class="w-full bg-gray-100 text-gray-700 font-medium text-lg py-2 px-4 rounded-xl">Opis:</div>
            <div class="mt-2 p-4 grid grid-cols-4 gap-16 text-sm flex-wrap">
              <div class="flex gap-4 flex-wrap col-span-1">
                <div class="text-gray-400 w-full">Kategorija</div>
                <div class="text-gray-400 w-full">Zaliha</div>
              </div>
              <div class="flex gap-4 flex-wrap col-span-3">
                <div class="text-gray-600 w-full">{{ product.productCategory.name }}</div>
                <div class="text-gray-600 w-full">{{ activeStock }}</div>
              </div>
            </div>

            <div class="w-full bg-gray-100 text-gray-700 font-medium text-lg py-2 px-4 rounded-xl">Opis</div>
            <div class="mt-2 p-4 text-sm flex-wrap text-justify">
              <div v-html="product.desc"></div>

            </div>
          </div>

          <!--
          <div class="bg-white p-6 mt-8 rounded-xl">
            <div class="text-lg text-gray-700 font-medium w-full">Ocjene</div>
            <div class="grid grid-cols-6 bg-gray-100 border border-gray-200 w-full p-6 gap-8 mt-4 rounded-xl">
              <div class="col-span-1 text-primary flex justify-center flex-wrap gap-2">
                <div class="font-medium flex-1 text-center"><span class="text-2xl">{{ parseFloat(product.reviewAvgRating || 0).toFixed(2) }}</span> dari 5</div>
                <rating class="flex-1 justify-center" stroke v-model="product.reviewAvgRating" :star-width="20" :star-height="20" star-active-color="rgba(6, 187, 211, 1)" star-empty-color="transparent" />
              </div>
              <div class="col-span-5 flex items-center flex-wrap gap-2">
                <button @click="reviewActive = 0" :class="getReviewButtonClasses(0)" class="py-1 px-4 text-sm border rounded-md">Semua</button>
                <button @click="reviewActive = 5" :class="getReviewButtonClasses(5)" class="py-1 px-4 text-sm border rounded-md">5 Bintang ({{ rating[5] }})</button>
                <button @click="reviewActive = 4" :class="getReviewButtonClasses(4)" class="py-1 px-4 text-sm border rounded-md">4 Bintang ({{ rating[4] }})</button>
                <button @click="reviewActive = 3" :class="getReviewButtonClasses(3)" class="py-1 px-4 text-sm border rounded-md">3 Bintang ({{ rating[3] }})</button>
                <button @click="reviewActive = 2" :class="getReviewButtonClasses(2)" class="py-1 px-4 text-sm border rounded-md">2 Bintang ({{ rating[2] }})</button>
                <button @click="reviewActive = 1" :class="getReviewButtonClasses(1)" class="py-1 px-4 text-sm border rounded-md">1 Bintang ({{ rating[1] }})</button>
              </div>
            </div>
            <div class="flex w-full flex-wrap">
              <div class="flex items-start w-full pl-4 border-b border-gray-300 pb-4 last:border-b-0 gap-4 flex-wrap mt-4" v-for="review, index in getFilteredReviews" :key="index">
                <img :src="review.user.avatar" class="object-center object-cover w-12 h-12 rounded-full">
                <div class="flex-1 flex flex-wrap gap-1 text-sm">
                  <div class="text-xs w-full">{{ review.user.name }}</div>
                  <rating stroke v-model="review.rating" :star-width="12" :star-height="12" star-active-color="rgba(6, 187, 211, 1)" star-empty-color="transparent" />
                  <div class="w-full text-gray-400 capitalize">Varijanta: {{ review.orderDetail.productDetail.name }}</div>
                  <div class="text-gray-700 my-2 w-full" v-if="review.review">{{ review.review }}</div>
                  <div class="w-full flex flex-wrap gap-2">
                    <template v-for="media, index in review.media">
                      <img v-if="isImage(media)" :src="media" class="w-20 h-20 object-cover" :key="`image-${index}`">
                      <video v-if="isVideo(media)" :key="`video-${index}`" class="w-20 h-20">
                        <source :src="media">
                      </video>
                    </template>
                  </div>
                  <div class="text-gray-400 text-xs">{{ $moment(review.createdAt).format('DD-MM-YYYY HH:mm:ss') }}</div>
                </div>
              </div>
            </div>
            <pagination v-if="review.data.length > 0" :total="review.total" :per-page="10" v-model="currentPage" />
          </div>
        ->

        </div>
        <div class="flex flex-wrap col-start-5 col-end-auto row-span-2 mb-auto bg-white shadow-sm pt-4 rounded-xl">
          <div class="text-gray-400 text-sm pl-4">Drugi Događaji</div>
          <div class="flex flex-col w-full">
            <Link :href="route('skijasi.commerce-theme.detail', similarProduct.slug)" v-for="similarProduct, index in similarProducts" :key="index">
              <div class="flex flex-col p-4">
                <div class="aspect-w-15 aspect-h-16">
                  <img :src="similarProduct.productImage" :alt="similarProduct.name" class="w-full h-full object-center object-cover">
                </div>
                <div class="line-clamp-2 ml-2 mt-2 mb-1">{{ similarProduct.name }}</div>
                <div class="text-primary ml-2 font-semibold">{{ $currency(similarProduct.productDetails[0].price) }}</div>
              </div>
              <div class="w-full h-px bg-gray-300" v-if="index !== 6" />
            </Link>
          </div>
        </div>
      </div>
    </div>

    <div class="sm:hidden relative">
      <transition
        enter-active-class="transition-all ease-out duration-100"
        leave-active-class="transition-all ease-in duration-100"
        enter-class="opacity-0"
        enter-to-class="opacity-100"
        leave-class="opacity-100"
        leave-to-class="opacity-0"
      >
        <div key="background" v-if="popup" class="fixed inset-0 w-screen h-screen bg-black z-80 bg-opacity-50" @click="closePopup" />
      </transition>
      <transition
        enter-active-class="transition-all ease-out duration-100"
        leave-active-class="transition-all ease-in duration-100"
        enter-class="opacity-40 scale-0"
        enter-to-class="opacity-100 scale-100"
        leave-class="opacity-100 scale-100"
        leave-to-class="opacity-40 scale-0"
      >
        <div key="content" class="fixed top-7 p-2 transform origin-top-right right-7 z-90 bg-white rounded-md" v-if="popup">
          <div class="flex flex-col gap-2">
            <Link :href="route('skijasi.commerce-theme.home')" class="py-2 flex items-center text-sm gap-2 outline-none select-none highlight-none" @click="hideBodyScroll">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Povratak na glavnu stranicu
            </Link>
            <div class="py-2 flex items-center text-sm gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              Trebate pomoć?
            </div>
          </div>
        </div>
      </transition>
    </div>

    <div class="sm:hidden relative">
      <transition
        enter-active-class="transition-all ease-out duration-100"
        leave-active-class="transition-all ease-in duration-100"
        enter-class="opacity-0"
        enter-to-class="opacity-100"
        leave-class="opacity-100"
        leave-to-class="opacity-0"
      >
        <div key="background" v-if="variation" class="fixed inset-0 w-screen h-screen bg-black z-80 bg-opacity-50" @click="closeVariationDialog" />
      </transition>
      <transition
        enter-active-class="transition-all ease-out duration-100"
        leave-active-class="transition-all ease-in duration-100"
        enter-class="opacity-40 translate-y-full"
        enter-to-class="opacity-100 translate-y-0"
        leave-class="opacity-100 translate-y-0"
        leave-to-class="opacity-40 translate-y-full"
      >
        <div key="content" class="fixed bottom-0 p-3 transform origin-bottom right-0 left-0 w-full z-90 bg-white rounded-t-md" v-if="variation">
          <div class="flex flex-col gap-2">

            <div class="w-full flex gap-2 pb-3 border-b">
              <div class="w-1/3">
                <img :src="getImageSourceMobile">
              </div>
              <div class="w-2/3 flex flex-col">
                <div class="w-full flex justify-end text-gray-400" @click="closeVariationDialog">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </div>
                <div class="flex-grow" />
                <div v-if="hasActiveDiscount">
                  <div class="text-normal text-gray-400 line-through">
                    {{ $currency(activePrice) }}
                  </div>
                  <div class="text-lg text-primary font-semibold">
                    {{ getDiscountedPrice(activePrice, activeDiscount) }}
                  </div>
                </div>
                <div class="text-lg text-primary font-semibold" v-else>
                  {{ $currency(activePrice) }}
                </div>
                <div class="text-sm text-gray-400">
                  Stok: {{ activeStock }}
                </div>
              </div>
            </div>

            <div class="w-full flex gap-2 flex-col border-b pb-3">
              <div class="text-sm">Član</div>

              <div class="w-full flex flex-row flex-wrap gap-4">
                <div v-for="productDetail, index in product.productDetails" :key="index" class="py-1.5 gap-2 rounded-md bg-gray-100 flex items-center px-3" @click="clickProductDetail(productDetail, index)" :class="[index == active ? 'border-primary border' : '']">
                  <img :src="productDetail.productImage" class="h-6 w-6">
                  <div class="text-sm">{{ productDetail.name }}</div>
                </div>
              </div>
            </div>

            <div class="w-full flex gap-2 justify-between items-center">
              <div class="text-sm">Preostalo</div>
              <counter v-model="quantity" :min="1" :max="product.productDetails[active].quantity" />
            </div>

            <div class="w-full flex gap-4 justify-center items-center mt-2">
              <div class="w-1/2 h-14 flex items-center justify-center text-white text-sm rounded-md uppercase py-2 px-4 text-center bg-gray-400" @click="addToCart(); closeVariationDialog()">Masukkan Keranjang</div>
              <div class="w-1/2 h-14 flex items-center justify-center text-white text-sm rounded-md uppercase py-2 px-4 text-center bg-primary" @click="buyNow(); closeVariationDialog()">Beli Sekarang</div>
            </div>
          </div>
        </div>
      </transition>
    </div>

    <div class="sm:hidden pb-12">
      <div class="max-h-16 flex fixed bottom-0 left-0 right-0 w-full flex-row items-center z-70">
        <div class="w-2/5 h-12 text-xs flex justify-center items-center flex-col text-center bg-gray-400 text-white" @click="addToCart">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
          Prijevoz
        </div>
        <div class="w-3/5 h-12 bg-primary flex items-center justify-center text-sm text-white border-l border-white" @click="buyNow">
          Na plaćanje
        </div>
      </div>

      <div class="relative">
        <div class="absolute flex justify-between top-2 left-0 px-4 z-50 w-full">
          <div @click="goBack" class="rounded-full bg-black bg-opacity-30 p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
          </div>
          <div class="flex gap-2">
            <Link :href="route('skijasi.commerce-theme.cart')" class="rounded-full bg-black bg-opacity-30 p-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </Link>
            <div @click="openPopup" class="rounded-full bg-black bg-opacity-30 p-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
              </svg>
            </div>
          </div>
        </div>
        <carousel-single class="w-full h-full">
          <carousel-item-single v-for="d, index in getAllImages" :key="index">
            <img class="h-full w-full" :src="d" alt="">
          </carousel-item-single>
        </carousel-single>
      </div>
      <div class="flex flex-row px-3 py-3 bg-white">
        <div class="w-10/12 flex flex-col gap-2">
          <div class="line-clamp-2">{{ product.name }}</div>

          <div v-if="hasActiveDiscount">
            <div class="text-xl text-primary font-semibold">
              {{ getDiscountedPrice(activePrice, activeDiscount) }}
            </div>
            <div class="text-normal text-gray-400 line-through">
              {{ $currency(activePrice) }}
            </div>
          </div>
          <div class="text-xl text-primary font-semibold" v-else>
            {{ $currency(activePrice) }}
          </div>
        </div>
        <div class="w-2/12 flex justify-end">
          <div class="relative h-8 w-8" v-if="hasActiveDiscount">
            <span class="absolute right-0 top-0 text-xs z-10 w-full text-center text-white font-bold line-clamp-2">{{ getDiscount }}<br/>
              <span class="text-white font-normal">OFF</span>
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 z-0 h-10 absolute top-0 right-0 transform scale-x-125 text-primary" fill="currentColor" viewBox="0 0 10 14">
              <path d="M 0 0 L 10 0 L 10 14 L 5 12 L 0 14 L 0 0 Z"></path>
            </svg>
          </div>
        </div>
      </div>
      <div class="bg-white flex divide-x px-3 pb-3">
        <div class="text-sm w-1/2" v-if="product.reviewCount === 0">Još nema ocjena</div>
        <div class="text-sm w-1/2" v-else>
          <rating stroke v-model="product.reviewAvgRating" :star-width="16" :star-height="16" star-active-color="rgba(6, 187, 211, 1)" star-empty-color="transparent" />
        </div>
        <div class="text-sm w-1/2 pl-2">{{ getProductSold }} prodano</div>
      </div>

      <div class="bg-white mt-3 flex flex-col border-b text-gray-500 pointer-events-auto" @click="openVariationDialog">
        <div class="flex gap-2 flex-row flex-nowrap p-4 justify-between items-center">
          <span class="text-sm">Odaberite Varijaciju</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
          </svg>
        </div>
      </div>

      <div class="bg-white mt-3 flex flex-col border-b">
        <div class="flex gap-2 flex-row flex-nowrap p-3">
          <span class="text-sm">Rincian Product</span>
          <div class="flex flex-row items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-gray-500 text-xs">{{ getHumanReadableUpdatedAt }}</span>
          </div>
        </div>
      </div>

      <div class="flex flex-col bg-white border-b">
        <div class="p-3 flex flex-nowrap">
          <div class="w-5/12 text-sm">Stok</div>
          <div class="w-7/12 text-sm">{{ activeStock }}</div>
        </div>
        <div class="p-3 flex flex-nowrap">
          <div class="w-5/12 text-sm">Kategori</div>
          <div class="w-7/12 text-sm">{{ product.productCategory.name }}</div>
        </div>
      </div>

      <div class="flex flex-col bg-white p-3 pb-0" :class="!openDesc ? 'max-h-80' : ''">
        <div class="relative overflow-hidden overflow-clip" :class="!openDesc ? 'max-h-64' : ''">
          <div v-html="product.desc"></div>
          <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent" v-if="!openDesc" />
        </div>
        <div class="max-h-16 h-16 inline-flex justify-center items-center w-full gap-2 text-sm text-primary" @click="toggleDescButton">
          Vidi više
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 duration-200 transition-all ease-in-out transform" :class="!openDesc ? '' : 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </div>
      </div>

      <div class="bg-white mt-3 flex flex-col border-b">


        <div class="flex w-full flex-wrap">
          <div class="flex items-start w-full pl-4 border-b border-gray-300 pb-4 last:border-b-0 gap-4 flex-wrap mt-4" v-for="review, index in getFilteredReviews" :key="index">
            <img :src="review.user.avatar" class="object-center object-cover w-4 h-4 rounded-full">
            <div class="flex-1 flex flex-wrap gap-1 text-sm">
              <div class="text-xs w-full">{{ review.user.name }}</div>
              <rating stroke v-model="review.rating" :star-width="12" :star-height="12" star-active-color="rgba(6, 187, 211, 1)" star-empty-color="transparent" />
              <div class="text-gray-700 my-2 w-full" v-if="review.review">{{ review.review }}</div>
              <div class="w-full flex flex-wrap gap-2">
                <template v-for="media, index in review.media">
                  <img v-if="isImage(media)" :src="media" class="w-20 h-20 object-cover" :key="`image-${index}`">
                  <video v-if="isVideo(media)" :key="`video-${index}`" class="w-20 h-20">
                    <source :src="media">
                  </video>
                </template>
              </div>
              <div class="text-gray-400 text-xs">{{ $moment(review.createdAt).format('DD-MM-YYYY HH:mm:ss') }}</div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white mt-3 flex flex-col border-b">
        <div class="flex gap-2 flex-row flex-nowrap p-3 border-b">
          <div class="flex-grow flex flex-col uppercase text-sm">
            Drugi proizvodi
          </div>
        </div>

        <div class="overflow-x-scroll overflow-y-hidden hide-scrollbar">
          <div class="inline-flex items-start justify-start h-full flex-row my-2">
            <div v-for="similarProduct, index in similarProducts" :key="index" class="w-32 flex-1 mr-2 first:ml-2">
              <Link :href="route('skijasi.commerce-theme.detail', similarProduct.slug)" class="rounded-xl border border-gray-300 flex w-32 flex-wrap">
                <div class="w-full relative mb-2 flex items-center">
                  <div class="w-full bg-contain bg-no-repeat rounded-t-xl" :style="`background-image: url('${similarProduct.productImage}'); padding-top: 100%`" />
                </div>
                <div class="flex-1 px-2 pb-2 w-full">
                  <div class="text-left text-sm line-clamp-2 overflow-hidden overflow-clip">{{ similarProduct.name }}</div>
                  <div class="w-full flex mt-2 items-center">
                    <div class="font-medium flex-shrink line-clamp-1 text-primary">{{ getProductPrice(similarProduct) }}</div>
                  </div>
                  <div class="w-full flex items-center">
                       <div class="text-xs flex-grow whitespace-nowrap">{{ getProductSoldTotal(similarProduct) }}+ terjual</div>
                  </div>
                </div>
              </Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

-->


<template>
  <div class="hzuts-events-details-screen-de navbarpraznina">
    <div class="frame">
      <div class="logoframe-parent">
        <div class="logoframe">
          <img class="logohzuts-icon" alt="" src="/storage/slike/logohzuts.svg" />
        </div>
        <div class="objavljenoframe">
          <b class="objavljeno-20032023">OBJAVLJENO: 02.10.2023.</b>
        </div>
        <a class="qrcodeframe">
          <div class="qrcodeframe-child" />
          <img class="qr-code-1-icon" alt="" src="/storage/slike/qrcode-1.svg" />
        </a>
      </div>
    </div>
    <div class="donjidiobezslike">
      <b class="hzuts-zutss"
        >{{ product.name }}</b
      >
      <div class="frame1">
        <b class="kada">Kada:</b>
        <b class="b">{{ formatDateRange(product.datumPocetka, product.datumKraja) }}, {{ product.mjesto }}</b>
      </div>
      <b class="galerija">Galerija:</b>
      
    <carousel :show="4" class="gallery-group" :hide-navigation="product.productDetails.length <= 4" v-if="product.productDetails.length > 0">
            <carousel-item
              v-for="productDetail, index in product.productDetails"
              :key="index"
              no-gutter
              :class="['cursor-pointer', 'rounded-xl']"
              :padding="2"
            >
              <img
                :src="productDetail.productImage"
                alt=""
                @mouseenter="activeImageSource = productDetail.productImage; activeImageCarousel = index"
                @mouseleave="activeImageSource = product.productDetails[active].productImage; activeImageCarousel = active"
                class="gallery-group-item"
              >
            </carousel-item>
          </carousel>

      <div class="grupazatekstove">
        <b class="opis">Opis:</b>
          <div class="dragi-lanovi-hzuts-a text-sm flex-wrap text-justify ">
              <div v-html="product.desc"></div>
    </div>
        <b class="informacije">Informacije:</b>
        <div class="dragi-lanovi-hzuts-a-container">
          <p class="p">
           Ubrzo više informacija i cijene!
          </p>
        </div>
      </div>
      <div class="frame-parent">
      <a class="home-icon-parent cursor-pointer">
        <svg class="home-icon" width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.5 14.9999L20.5 3.33325L35.5 14.9999V33.3333C35.5 34.2173 35.1488 35.0652 34.5237 35.6903C33.8986 36.3154 33.0507 36.6666 32.1667 36.6666H8.83333C7.94928 36.6666 7.10143 36.3154 6.47631 35.6903C5.85119 35.0652 5.5 34.2173 5.5 33.3333V14.9999Z" stroke="#03A9F4" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15.5 36.6667V20H25.5V36.6667" stroke="#03A9F4" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
        <div class="smjetaj">Smještaj</div>
      </a>
      <a class="truck-1-parent cursor-pointer">
        <svg class="truck-1-icon" width="43" height="40" viewBox="0 0 43 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M28.167 5H3.16699V26.6667H28.167V5Z" stroke="#03A9F4" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M28.167 13.3333H34.8337L39.8337 18.3333V26.6666H28.167V13.3333Z" stroke="#03A9F4" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.6667 35.0001C12.9679 35.0001 14.8333 33.1346 14.8333 30.8334C14.8333 28.5322 12.9679 26.6667 10.6667 26.6667C8.36548 26.6667 6.5 28.5322 6.5 30.8334C6.5 33.1346 8.36548 35.0001 10.6667 35.0001Z" stroke="#03A9F4" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M32.3337 35.0001C34.6348 35.0001 36.5003 33.1346 36.5003 30.8334C36.5003 28.5322 34.6348 26.6667 32.3337 26.6667C30.0325 26.6667 28.167 28.5322 28.167 30.8334C28.167 33.1346 30.0325 35.0001 32.3337 35.0001Z" stroke="#03A9F4" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
        <div class="smjetaj">Prijevoz</div>
      </a>

    <a class="check-square-1-parent cursor-pointer" @click="">
        <svg class="check-square-1-icon"  width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.25 18.3334L19.25 23.3334L35.9167 6.66675" stroke="#03A9F4" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M35.5 20V31.6667C35.5 32.5507 35.1488 33.3986 34.5237 34.0237C33.8986 34.6488 33.0507 35 32.1667 35H8.83333C7.94928 35 7.10143 34.6488 6.47631 34.0237C5.85119 33.3986 5.5 32.5507 5.5 31.6667V8.33333C5.5 7.44928 5.85119 6.60143 6.47631 5.97631C7.10143 5.35119 7.94928 5 8.83333 5H27.1667" stroke="#03A9F4" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
        <div class="smjetaj">Prijava i plaćanje</div>
      </a>
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
        desc: null,
        name: "",
        datum_pocetka: null,
        datum_kraja: null,
        mjesto: "",

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
    })
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
    }
  },
  mounted() {
    this.getProduct()
  },
  methods: {

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
        .read({
          slug: this.$page.props.slug
        })
        .then(res => {
          this.product = res.data.product
          this.product.reviewAvgRating = parseFloat(res.data.product.reviewAvgRating) || 0
          this.activeImageSource = res.data.product.productDetails[0].productImage
          this.activePrice = res.data.product.productDetails[0].price
          this.activeStock = res.data.product.productDetails[0].quantity
          this.selectedProduct.id = res.data.product.productDetails[0].id
          this.activeDiscount = res.data.product.productDetails[0].discount
          this.getSimilarProduct()
          this.getReviews()
        })
        .catch(err => {
          this.$helper.displayErrors(err)
          this.$inertia.visit(this.route('skijasi.commerce-theme.404'))
        })
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
      if (this.selectedProduct.id === null) {
        this.$helper.alert("Morate odabrati opciju!")
        return
      }

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
      if (this.selectedProduct.id === null) {
        this.$helper.alert("Potrebno je odabrati barem jednu vrstu!")
        return
      }

      if (!this.isAuthenticated) {
        this.$helper.alert("Morate se prijaviti prvo. Niste logirani!")
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
          this.$inertia.visit(this.route('skijasi.commerce-theme.cart'))
          this.$helper.alert(res.message)
        })
        .catch(err => {
          this.$helper.displayErrors(err)
        })
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


  .check-square-1-parent:hover,
.truck-1-parent:hover,
.home-icon-parent:hover {
    color: #fff;
    background-color: #03a9f4;
}

.check-square-1-parent:hover .check-square-1-icon path,
.truck-1-parent:hover .truck-1-icon path,
.home-icon-parent:hover .home-icon path {
    stroke: white; 
}

  .logohzuts-icon {
    position: absolute;
    margin: 0 !important;
    top: 0rem;
    left: 0rem;
    width: 8.75rem;
    height: 8.75rem;
    z-index: 0;
  }
  .logoframe {
    margin: 0 !important;
    position: absolute;
    top: 23.5rem;
    left: 4rem;
    width: 8.75rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 0.63rem;
    box-sizing: border-box;
    z-index: 0;
   
  }
  .objavljeno-20032023 {
    position: relative;
  }
  .objavljenoframe {
    margin: 0 !important;
    position: absolute;
    top: 30.38rem;
    right: 0rem;
    background-color: rgba(0, 0, 0, 0.6);
    height: 4rem;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: center;
    padding: 1.25rem 1.63rem;
    box-sizing: border-box;
    z-index: 1;
  }
  .qrcodeframe-child {
    position: relative;
    border-radius: 50%;
    background-color: #03a9f4;
    width: 3.75rem;
    height: 3.75rem;
    z-index: 0;
  }
  .qr-code-1-icon {
    position: absolute;
    margin: 0 !important;
    top: calc(50% - 15px);
    left: calc(50% - 15px);
    width: 1.88rem;
    height: 1.88rem;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
  }
  .qrcodeframe {
    text-decoration: none;
    margin: 0 !important;
    position: absolute;
    top: 2.63rem;
    right: 3.25rem;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 0.63rem;
    z-index: 2;
  }
  .logoframe-parent {
    align-self: stretch;
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    background-image: url("/storage/demo/frame-441@3x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
    top: 3.75rem;
  }
  .frame {
    align-self: stretch;
    height: 34.38rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  .hzuts-zutss {
    align-self: stretch;
    position: relative;
    font-size: 2.94rem;
  }
  .kada {
    position: relative;
  }
  .b {
    position: relative;
    display: flex;
    color: #03a9f4;
    align-items: center;
    width: 28.19rem;
    flex-shrink: 0;
  }
  .frame1 {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    gap: 3.75rem;
  }
  .galerija {
    position: relative;
  }
  .gallery-group-child {
    position: relative;
    border-radius: 10px;
    width: 12.5rem;
    height: 12.5rem;
    object-fit: cover;
  }
  .gallery-group {
    align-self: stretch;
    height: 12.5rem;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 2.5rem;
  }
  .opis {
    position: relative;
  }
  .dragi-lanovi-hzuts-a {
    align-self: stretch;
    position: relative;
    font-size: 1.75rem;
    font-weight: 300;
  }
  .informacije {
    position: relative;
  }
  .p {
    margin: 0;
  }
  .dragi-lanovi-hzuts-a-container {
    align-self: stretch;
    position: relative;
    font-size: 1.75rem;
    font-weight: 300;
    white-space: pre-wrap;
  }
  .grupazatekstove {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1.69rem;
  }
  .home-icon {
    position: relative;
    border-radius: 20px;
    width: 2.5rem;
    height: 2.5rem;
    overflow: hidden;
    flex-shrink: 0;
  }
  .smjetaj {
    position: relative;
    font-weight: 600;
  }
  .home-icon-parent {
    text-decoration: none;
    border-radius: 20px;
    border: 4px solid #03a9f4;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    padding: 2rem 2.5rem;
    gap: 2.5rem;
    color: inherit;
  }
  .truck-1-icon {
    position: relative;
    border-radius: 20px;
    width: 2.67rem;
    height: 2.5rem;
  }
  .truck-1-parent {
    text-decoration: none;
    border-radius: 20px;
    border: 4px solid #03a9f4;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    padding: 1.88rem 2.81rem;
    gap: 2.13rem;
    color: inherit;
  }
  .check-square-1-icon {
    position: relative;
    width: 2.5rem;
    height: 2.5rem;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 100;
  }
  .check-square-1-parent {
    text-decoration: none;
    border-radius: 20px;
    border: 4px solid #03a9f4;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-start;
    padding: 1.88rem 0.75rem;
    gap: 0.5rem;
    font-size: 1.63rem;
    color: inherit;
    z-index: 100;
  }
  .frame-parent {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 2.5rem;
    font-size: 1.69rem;
    color: #03a9f4;
  }
  .donjidiobezslike {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0rem 5.63rem;
    gap: 4.38rem;
    text-align: left;
    font-size: 2rem;
    color: #000;
  }
  .hzuts-events-details-screen-de {
    position: relative;
    background-color: #f8f7f5;
    width: 100%;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0rem 0rem 5.63rem;
    box-sizing: border-box;
    gap: 4.38rem;
    text-align: center;
    font-size: 1.25rem;
    color: #fff;
    font-family: Inter;
  }

  @media screen and (max-width: 1200px) {
    .hzuts-zutss {
      font-size: 2.63rem;
      text-align: left;
    }

    .kada {
      font-size: 1.88rem;
    }

    .b {
      font-size: 1.88rem;
    }

    .opis {
      font-size: 1.88rem;
    }

    .dragi-lanovi-hzuts-a {
      font-size: 1.69rem;
    }

    .informacije {
      font-size: 1.88rem;
    }

    .dragi-lanovi-hzuts-a-container {
      font-size: 1.69rem;
    }
  }
  @media screen and (max-width: 960px) {
    .logoframe {
      width: auto;
      align-self: unset;
      flex-direction: row;
      gap: 0.63rem;
      align-items: center;
      justify-content: flex-start;
      padding-left: 0.63rem;
      box-sizing: border-box;
    }

    .hzuts-zutss {
      font-size: 2.19rem;
    }

    .kada {
      font-size: 1.75rem;
    }

    .b {
      font-size: 1.75rem;
    }

    .opis {
      font-size: 1.75rem;
    }

    .dragi-lanovi-hzuts-a {
      font-size: 1.44rem;
    }

    .informacije {
      font-size: 1.75rem;
    }

    .dragi-lanovi-hzuts-a-container {
      font-size: 1.44rem;
    }
  }
  @media screen and (max-width: 490px) {
    .logoframe {
      display: none;
      width: auto;
      align-self: unset;
      height: auto;
      align-items: center;
      justify-content: center;
      padding-left: 0.63rem;
      padding-bottom: 0.63rem;
      box-sizing: border-box;
    }

    .frame {
      display: flex;
      flex-direction: column;
      gap: 0rem;
      align-items: flex-start;
      justify-content: flex-start;
      padding-left: 0rem;
      padding-top: 0rem;
      padding-bottom: 0rem;
      box-sizing: border-box;
    }

    .hzuts-zutss {
      font-size: 1.56rem;
    }

    .galerija {
      font-size: 1.88rem;
      text-align: left;
    }

    .opis {
      font-size: 1.88rem;
      text-align: left;
    }

    .dragi-lanovi-hzuts-a {
      font-size: 1.13rem;
    }

    .informacije {
      font-size: 1.88rem;
    }

    .dragi-lanovi-hzuts-a-container {
      font-size: 1.13rem;
    }
  }
</style>