
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

->




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

-->



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
      
      <button :class="{ 'active': activeSection === 'cijene' }" class="o-skijalitu" @click="activeSection = 'cijene'">Plaćanje i cijene</button>
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
                  <div v-html="product.desc"></div>
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
                  <div v-html="product.desc2"></div>
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
                  <div v-html="product.desc3"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="galerijaframe">

            <div class="photo-gallery">
              <img class="arrow-left" @click="prevPhoto" alt="" src="/storage/slike/detail/group-276.svg" />
              <img class="arrow-right" @click="nextPhoto" src="/storage/slike/detail/group-2761.svg"/>

    <div class="gallery-container" ref="galleryContainer">
      <div v-for="(photo, index) in photos" :key="index" class="photo" @click="showFullscreen(index)">
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
                  <div v-html="product.desc4"></div>
                </div>
              </div>
            </div>
          </div>
       
  
  
        </div>
      </div>
    <!-- Content for Prijevoz -->
</div>

<div v-if="activeSection === 'cijene'" class="smjestajpodframe">
  <!-- Content for Plaćanje i cijene -->
  <div class="smjestajglavniframe">
  <div class="smjestajpodframe">
          <div class="tekstovipodpodframe">
            <div class="titleglavninatekstu">
              <b class="sexten">Plaćanje i cijene</b>
            </div>
            <div class="adminsadrzajframe">
              <div class="sudionici-seminara-bit-e-smje-parent">
             
                <div class="smjetaj-je-u-container">
                  <div v-html="product.desc5"></div>
                </div>
              </div>
            </div>
          </div>
  
  
        </div>







</div>
      <div class="framegumbi">
        <a class="lijevigumb" href="https://forms.gle/z95LVJdJV6Lr8jyh7">
          <b class="prijavnica-za-dogaaj">PRIJAVNICA ZA DOGAĐAJ</b>
        </a>
       <!-- <a class="desnigumb">
          <b class="uplatite-lanarinu-hzuts-u">UPLATITE ČLANARINU HZUTS-U</b>
        </a>-->
      </div>

    <!-- Content for Plaćanje i cijene -->

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

      activeSection: 'skijaliste',


      backgroundImage: null,
      photos: [
        '/storage/slike/dogadaj1/galerija1.jpeg',
        '/storage/slike/dogadaj1/galerija2.jpeg',
        '/storage/slike/dogadaj1/hotel1.jpg',
        '/storage/slike/dogadaj1/hotel2.jpg',
        '/storage/slike/dogadaj1/hotel3.jpg',
        '/storage/slike/dogadaj1/hotel4.jpg',
        '/storage/slike/dogadaj1/galerija3.jpeg',
        '/storage/slike/dogadaj1/galerija4.jpeg',
        '/storage/slike/dogadaj1/galerija5.jpeg',
        '/storage/slike/dogadaj1/galerija6.jpeg',
        '/storage/slike/dogadaj1/galerija7.jpeg',
        '/storage/slike/dogadaj1/galerija8.jpeg',

      ],
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
        desc: null,
        desc2: null,
        desc3: null,
        desc4: null,
        desc5: null,
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
    this.getProduct()

  },
  methods: {
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
    const imageURL = this.photos[index];
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
    if (this.fullscreenImageIndex < this.photos.length - 1) {
      this.fullscreenImageIndex++;
    } else {
      this.fullscreenImageIndex = 0; // loop back to the first image
    }
    const overlay = document.getElementById('fullscreen-overlay');
    const img = overlay.querySelector('img');
    img.src = this.photos[this.fullscreenImageIndex];
  },

  showPreviousImage() {
    if (this.fullscreenImageIndex > 0) {
      this.fullscreenImageIndex--;
    } else {
      this.fullscreenImageIndex = this.photos.length - 1; // loop back to the last image
    }
    const overlay = document.getElementById('fullscreen-overlay');
    const img = overlay.querySelector('img');
    img.src = this.photos[this.fullscreenImageIndex];
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
         // this.getSimilarProduct()
         // this.getReviews()
         console.log('Active Image Source:', this.activeImageSource);

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
    align-items: flex-start;
    justify-content: flex-start;
    padding: 1.94rem 1.88rem 1.81rem;
    gap: 1.25rem;
  }
  .adminsadrzajframe {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
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
    justify-content: flex-start;
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
      font-size: 0.81rem;
    }

    .lijevigumb {
      width: 16.88rem;
      height: 3.75rem;
      padding-left: 1.88rem;
      padding-right: 1.88rem;
      box-sizing: border-box;
    }

    .uplatite-lanarinu-hzuts-u {
      font-size: 0.81rem;
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

</style>