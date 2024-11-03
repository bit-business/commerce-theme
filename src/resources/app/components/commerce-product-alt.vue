<template>
  <div>
    <div class="w-full h-72 hover:shadow-md rounded-xl transition-transform duration-200 ease-in-out transform hover:-translate-y-1 bg-gray-200 relative group">
    <!-- Counter Component - Show only for non-slipper products -->
    <div v-if="(isAdded || cartData.cartId) && !isSlippersProduct" 
         class="absolute top-2 left-0 right-0 flex items-center justify-center z-10 transition-all duration-300"
         :class="{'opacity-100 translate-y-0': isAdded || cartData.cartId, 'opacity-0 -translate-y-4': !isAdded && !cartData.cartId}">
         <counter
          class="justify-center bg-white rounded-lg shadow-lg transform transition-transform duration-300"
          @subtract="handleSubtract"
          :key="`counter-${cartData.cartId}-${cartData.quantity}`"
          @input="handleQuantityChange"
          :value="cartData.quantity"
          :min="1"
          text-disabled
          :disabled="loading"
        />
    </div>


      <!-- "Rasprodano" Label -->
      <div v-if="parseInt(product.productDetails[0].quantity) <= 0" 
           class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-1 rounded-full z-10">
        {{ $t('rasprodano') }}
      </div>
      
      <!-- Product Image Container -->
      <div class="w-full h-4/5 bg-gray-300 rounded-t-xl flex items-center justify-center overflow-hidden cursor-pointer relative">
      <img :src="product.productImage" 
           alt="Product Image" 
           class="object-contain w-4/5 h-full transition-transform duration-300 ease-in-out"
           :class="{'scale-95': loading}">
        
         <!-- Modify the Hover Overlay buttons section -->
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-evenly opacity-0 group-hover:opacity-100 transition-all duration-300">
      <button 
        class="bg-white text-gray-800 font-regular text-sm py-2 px-4 rounded-lg mb-2 hover:bg-gray-100 transition-colors duration-200"
        @click.stop="handlePreview"
      >
        {{ $t('pogledaj') }}
      </button>

      <!-- Add to Cart Button - Modified logic -->
      <button 
        v-if="(!isAdded && !cartData.cartId) || (isSlippersProduct)"
        class="bg-blue-500 text-white text-xs font-regular py-2 px-4 rounded-lg hover:bg-blue-600 transition-colors duration-200 flex items-center"
        @click.stop="handleClick"
        :disabled="loading"
      >
        <!-- Cart/Checkmark Animation -->
        <div class="relative w-5 h-5 mr-2">
          <svg 
            class="absolute inset-0 transform transition-transform duration-500 ease-in-out"
            :class="{'scale-0 rotate-180': loading || addSuccess, 'scale-100 rotate-0': !loading && !addSuccess}"
            xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 24 24" 
            fill="none" 
            stroke="currentColor"
          >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
          <svg 
            class="absolute inset-0 transform transition-transform duration-500 ease-in-out text-green-500"
            :class="{'scale-100 rotate-0': addSuccess, 'scale-0 -rotate-180': !addSuccess}"
            xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 24 24" 
            fill="none" 
            stroke="currentColor"
          >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7" />
          </svg>
        </div>
        {{ isSlippersProduct ? $t('dodaj-papuce') : $t('dodaj-u-kosaricu') }}
      </button>

   <!-- Remove Button - Modified to handle both cases -->
   <button 
        v-if="(isAdded || cartData.cartId)"
        class="bg-red-500 text-white font-regular text-xs py-2 px-4 rounded-lg hover:bg-red-600 transition-colors duration-200 flex items-center gap-2"
        @click.stop="isSlippersProduct ? handleRemoveAllSizes() : handleRemove()"
        :disabled="loading"
      >
        <svg 
          class="w-4 h-4" 
          xmlns="http://www.w3.org/2000/svg" 
          fill="none" 
          viewBox="0 0 24 24" 
          stroke="currentColor"
        >
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
        </svg>
        {{ isSlippersProduct ? $t('ukloni-sve-papuce') : '' }}
      </button>
    </div>


        <!-- Loading Spinner -->
        <div v-if="loading" 
             class="absolute inset-0 bg-black bg-opacity-25 flex items-center justify-center">
          <div class="spinner"></div>
        </div>
      </div>
      
      <!-- Product Info -->
      <div class="px-4 pb-4">
        <h3 class="line-clamp-2 cart-text cursor-pointer">{{ localizedProductName  }}</h3>
        <div class="flex items-start justify-between mt-1">
          <div class="cart-price">
            {{ getProductPrice }}
          </div>
        </div>
      </div>
    </div>

    <!-- Fullscreen Image Preview -->
    <div v-if="showPreview" 
         class="fixed inset-0 w-full h-full bg-black bg-opacity-90 flex items-center justify-center z-[9999]"
         style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; min-height: 100vh;"
         @click="showPreview = false">
      <div class="relative w-full h-full flex items-center justify-center p-4">
        <!-- Close Button -->
        <button 
          @click.stop="showPreview = false"
          class="absolute top-4 right-4 text-white hover:text-gray-300 transition-colors duration-200 z-[10000] p-2"
        >
          <svg xmlns="http://www.w3.org/2000/svg" 
               class="h-8 w-8" 
               fill="none" 
               viewBox="0 0 24 24" 
               stroke="currentColor">
            <path stroke-linecap="round" 
                  stroke-linejoin="round" 
                  stroke-width="2" 
                  d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>

        <!-- Image -->
        <img 
          :src="product.productImage" 
          alt="Product Preview" 
          class="max-w-[90vw] max-h-[90vh] object-contain"
          @click.stop
        >
      </div>
    </div>
  </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue';
import Counter from './counter/counter.vue';

export default {
  components: {
    Link,
    Counter
  },
  props: {
    product: {
      required: true,
    },
    cartData: {
      type: Object,
      default: () => ({
        cartId: null,
        quantity: 1
      })
    }
  },
  

  data() {
    return {
   
      loading: false,
      isAdded: false,
      addSuccess: false,
      showPreview: false
    }
  },

  
  methods: {
    handlePreview() {
      this.$emit('show-preview', this.product);
    },
    handleClick() {
      if (this.loading) return;
      this.$emit('click', this.product.id);
    },

    handleQuantityChange(value) {
      if (this.cartData.cartId && !this.loading) {
        this.localQuantity = parseInt(value);
        this.$emit('quantity-change', {
          quantity: this.localQuantity,
          cartId: this.cartData.cartId
        });
      }
    },

    handleSubtract(event) {
      console.log('CartData:', this.cartData); // Debug log
      if (this.cartData && this.cartData.cartId) {
        if (event <= 1) {
          console.log('Emitting subtract with cartId:', this.cartData.cartId); // Debug log
          this.$emit('subtract', {
            event,
            cartId: this.cartData.cartId
          });
        } else {
          this.handleQuantityChange(event);
        }
      }
    },
    
    async handleRemoveAllSizes() {
      if (this.loading) return;
      
      try {
        this.loading = true;
        // Emit an event to parent to handle the removal of all slippers
        this.$emit('remove-all-slippers');
      } catch (error) {
        console.error('Error removing items:', error);
        this.$helper.alert('Failed to remove items');
      } finally {
        this.loading = false;
      }
    },

    async addToCart() {
  try {
    this.loading = true;
    // Instead of directly adding to cart, emit an event
    this.$emit('click', this.product.id);
  } catch (error) {
    console.error('Error adding to cart:', error);
    this.$helper.alert('Failed to add item to cart');
  } finally {
    this.loading = false;
  }
},
  
    async findCartId() {
      try {
        const response = await this.$api.skijasiCart.browse();
        const cartItem = response.data.carts.find(cart => 
          cart.product_detail_id === this.product.productDetails[0].id
        );
        if (cartItem) {
          this.isAdded = true;
          this.localQuantity = cartItem.quantity;
          this.cartId = cartItem.id;
        } else {
          this.isAdded = false;
          this.localQuantity = 1;
          this.cartId = null;
        }
      } catch (err) {
        console.error('Error finding cart item:', err);
      }
    },
    async handleSubtract(event) {
      if (this.cartId) {
        if (event <= 1) {
          try {
            this.loading = true;
            await this.$api.skijasiCart.delete({
              id: this.cartId
            });
            this.$emit('subtract', { event, cartId: this.cartId });
            this.isAdded = false;
            this.cartId = null;
            this.localQuantity = 1;
          } catch (error) {
            console.error('Error removing item:', error);
            this.$helper.alert('Failed to remove item');
          } finally {
            this.loading = false;
          }
        } else {
          this.handleQuantityChange(event);
        }
      }
    },

    async handleRemove() {
      if (this.loading) return;
      
      try {
        this.loading = true;
        await this.$api.skijasiCart.delete({
          id: this.cartData.cartId
        });
        
        this.isAdded = false;
        this.$emit('subtract', { event: 0, cartId: this.cartData.cartId });
        await this.$store.dispatch('FETCH_CARTS');
        
      } catch (error) {
        console.error('Error removing from cart:', error);
        this.$helper.alert('Failed to remove item from cart');
      } finally {
        this.loading = false;
      }
    },

  },
  created() {
    // Initialize local quantity from props immediately
    this.localQuantity = this.cartData.quantity || 1;
    this.isAdded = !!this.cartData.cartId;
    
    // Initial cart check
    this.findCartId();
  },
  watch: {
    cartData: {
      immediate: true,
      deep: true,
      handler(newVal) {
        this.isAdded = !!newVal.cartId;
      }
    },
    'product.id': {
      immediate: true,
      handler() {
        this.findCartId();
      }
    },
    cartId: {
    immediate: true,
    handler(newVal) {
      this.isAdded = !!newVal;
    }
  },
  
  },
  computed: {
    localizedProductName() {
      const locale = this.$i18n.locale; // Get current locale
      
      switch (locale) {
        case 'en':
          return this.product.nameEn || this.product.name; // Fallback to default name if English translation is missing
        case 'it':
          return this.product.nameIt || this.product.name; // Fallback to default name if Italian translation is missing
        default:
          return this.product.name; // Default Croatian name
      }
    },
    isInCart() {
      return !!this.cartData.cartId;
    },
    isNewProduct() {
      const createdAt = new Date(this.product.createdAt);
      const currentDate = new Date();
      const diffInTime = currentDate - createdAt;
      const diffInDays = diffInTime / (1000 * 3600 * 24);
      return diffInDays <= 60;
    },
    getProductPrice() {
      if (this.product.productDetails.length > 0) {
        let min = this.$_.minBy(this.product.productDetails, 'price');
        let max = this.$_.maxBy(this.product.productDetails, 'price');
        return min == max
          ? this.$currency(min.price)
          : `${this.$currency(min.price)} - ${this.$currency(max.price)}`;
      }
      return this.$currency(0);
    },

    isSlippersProduct() {
      return this.product.id === 43; // ID for slippers
    },
  },
};
</script>

<style scoped>
.cart-text {
  font-family: Inter;
  font-size: 1rem;
  font-weight: 500;
  text-align: left;
}

.cart-price {
  font-family: Inter;
  font-size: 1.3rem;
  font-weight: 700;
  text-align: left;
}

/* Loading Spinner */
.spinner {
  border: 3px solid #f3f3f3;
  border-top: 3px solid #03a9f4;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  animation: spin 1s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Hover effect styles */
.group:hover .opacity-0 {
  opacity: 1;
}

/* Adjusting image and container style */
img {
  max-height: 100%;
  max-width: 100%;
  transition: all 0.3s ease;
}

.w-full {
  background-color: #e6e6e6;
}

.group:hover img {
  transform: scale(1.05);
}

/* Transition classes */
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.3s ease;
}

.fade-enter, .fade-leave-to {
  opacity: 0;
}

.slide-enter-active, .slide-leave-active {
  transition: all 0.3s ease;
}

.slide-enter, .slide-leave-to {
  transform: translateY(-20px);
  opacity: 0;
}





.modal-enter-active,
.modal-leave-active {
  transition: all 0.3s ease;
}

.modal-enter-from,
.modal-leave-to {
  opacity: 0;
  transform: scale(0.9);
}

.modal-enter-to,
.modal-leave-from {
  opacity: 1;
  transform: scale(1);
}


.spinner {
  border: 3px solid #f3f3f3;
  border-top: 3px solid #03a9f4;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  animation: spin 1s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Cart success animation */
@keyframes checkmark {
  0% {
    transform: scale(0) rotate(-45deg);
  }
  50% {
    transform: scale(1.2) rotate(-45deg);
  }
  100% {
    transform: scale(1) rotate(-45deg);
  }
}

.success-checkmark {
  animation: checkmark 0.5s ease-in-out forwards;
}





/* Remove button hover animation */
@keyframes shake {
  0%, 100% { transform: translateX(0); }
  25% { transform: translateX(-2px); }
  75% { transform: translateX(2px); }
}

.shake {
  animation: shake 0.3s ease-in-out;
}
</style>