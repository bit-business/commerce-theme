<template>
  <div class="w-full h-72 hover:shadow-md rounded-xl transition-transform duration-200 ease-in-out transform hover:-translate-y-1 bg-gray-200 relative group">
    <!-- Counter Component - Show when item is in cart -->
    <div v-if="isInCart" class="absolute top-2 left-0 right-0 flex items-center justify-center z-10">
      <counter
        class="justify-center bg-white rounded-lg"
        @subtract="handleSubtract"
        :key="product.id"
        @input="handleQuantityChange"
        v-model="localQuantity"
        :min="1"
        text-disabled
        :disabled="loading"
      />
    </div>

    <!-- "Rasprodano" Label -->
    <div 
      v-if="parseInt(product.productDetails[0].quantity) <= 0" 
      class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-1 rounded-full z-10"
    >
      {{ $t('rasprodano') }}
    </div>
    
    <!-- Product Image Container -->
    <div 
      class="w-full h-4/5 bg-gray-300 rounded-t-xl flex items-center justify-center overflow-hidden cursor-pointer relative" 
      @click="handleClick"
    >
      <img 
        :src="product.productImage" 
        alt="Product Image" 
        class="object-contain w-4/5 h-full transition-transform duration-300 ease-in-out"
        :class="{'scale-95': loading}"
      >
      
      <!-- Hover Shopping Cart Icon -->
      <div 
        class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300"
        :class="{'pointer-events-none': loading}"
      >
        <div 
          class="bg-white p-3 rounded-full transform transition-all duration-300 hover:scale-110"
          :class="{'rotate-180': loading}"
        >
          <svg 
            v-if="!isAdded" 
            xmlns="http://www.w3.org/2000/svg" 
            class="h-6 w-6" 
            fill="none" 
            viewBox="0 0 24 24" 
            stroke="currentColor"
          >
            <path 
              stroke-linecap="round" 
              stroke-linejoin="round" 
              stroke-width="2" 
              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" 
            />
          </svg>
          <svg 
            v-else 
            xmlns="http://www.w3.org/2000/svg" 
            class="h-6 w-6" 
            fill="none" 
            viewBox="0 0 24 24" 
            stroke="currentColor"
          >
            <path 
              stroke-linecap="round" 
              stroke-linejoin="round" 
              stroke-width="2" 
              d="M12 6v6m0 0v6m0-6h6m-6 0H6" 
            />
          </svg>
        </div>
      </div>

      <!-- Loading Spinner -->
      <div 
        v-if="loading" 
        class="absolute inset-0 bg-black bg-opacity-25 flex items-center justify-center"
      >
        <div class="spinner"></div>
      </div>
    </div>
    
    <!-- "New" Label -->
    <div 
      v-if="isNewProduct" 
      class="absolute bottom-20 left-2 bg-blue-500 text-white text-xs px-2 py-1 rounded-full"
    >
      {{ $t('novo') }}
    </div>
    
    <!-- Product Info -->
    <div class="px-4 pb-4">
      <h3 class="line-clamp-2 cart-text cursor-pointer" @click="handleClick">{{ product.name }}</h3>
      <div class="flex items-start justify-between mt-1">
        <div class="cart-price">
          {{ getProductPrice }}
        </div>
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
      localQuantity: this.cartData.quantity,
      loading: false,
      isAdded: false
    }
  },
  methods: {
    handleQuantityChange(value) {
      if (this.cartData.cartId) {
        this.$emit('quantity-change', {
          quantity: parseInt(value),
          cartId: this.cartData.cartId
        });
      }
    },
    
    handleSubtract(event) {
      if (this.cartData.cartId) {
        this.$emit('subtract', {
          event,
          cartId: this.cartData.cartId
        });
      }
    },


    async handleClick() {
      if (this.loading) return;
      
      if (!this.isAdded) {
        await this.addToCart();
      }
    },
    async addToCart() {
      try {
        this.loading = true;
        await this.$api.skijasiCart.add({
          id: this.product.productDetails[0].id,
          quantity: this.localQuantity
        });
        this.isAdded = true;
        await this.findCartId();
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
  },
  async created() {
    await this.findCartId();
  },
  watch: {
    'cartData': {
      immediate: true,
      deep: true,
      handler(newVal) {
        this.localQuantity = newVal.quantity;
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
  initialQuantity: {
    immediate: true,
    handler(newVal) {
      this.localQuantity = newVal;
    }
  }
  },
  computed: {
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
</style>