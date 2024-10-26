<template>
  <transition name="modal">
    <div v-if="show" class="fixed inset-0 w-full h-full z-[9999] flex items-center justify-center">
      <!-- Backdrop -->
      <div 
        class="absolute inset-0 bg-black bg-opacity-50 backdrop-blur-sm"
        @click="$emit('close')"
      ></div>
      
      <!-- Dialog -->
      <div class="relative bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
        <!-- Header -->
        <div class="flex items-center justify-between p-4 border-b">
          <h2 class="text-lg font-semibold text-gray-900">{{ $t('odaberi-velicinu') }}</h2>
          <button
            @click="$emit('close')"
            class="p-2 rounded-full hover:bg-gray-100 transition-colors"
          >
            <svg class="w-5 h-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" />
            </svg>
          </button>
        </div>

        <!-- Size Grid -->
        <div class="p-4 grid grid-cols-3 gap-2">
          <button
            v-for="size in sizes"
            :key="size"
            @click="selectedSize = size"
            :class="[
              'p-3 text-center rounded-lg border-2 transition-all',
              selectedSize === size 
                ? 'border-blue-500 bg-blue-50 text-blue-600' 
                : 'border-gray-200 hover:border-blue-200'
            ]"
          >
            {{ size }}
          </button>
        </div>

        <!-- Footer -->
        <div class="p-4 border-t bg-gray-50">
          <button
            @click="handleSelect"
            :disabled="!selectedSize"
            :class="[
              'w-full py-2 px-4 rounded-lg font-medium transition-colors',
              selectedSize
                ? 'bg-blue-500 hover:bg-blue-600 text-white'
                : 'bg-gray-100 text-gray-400 cursor-not-allowed'
            ]"
          >
            {{ $t('dodaj-u-kosaricu-10') }}
          </button>
        </div>
      </div>
    </div>
  </transition>
</template>

<script>
export default {
  name: 'SizeSelectorDialog',
  props: {
    show: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {
      selectedSize: null,
      sizes: [37, 38, 39, 40, 41, 42, 43, 44, 45, 46]
    }
  },
  methods: {
    handleSelect() {
      if (this.selectedSize) {
        this.$emit('select', this.selectedSize);
      }
    }
  },
  watch: {
    show(newVal) {
      if (!newVal) {
        this.selectedSize = null;
      }
    }
  }
}
</script>

<style scoped>
.modal-enter-active,
.modal-leave-active {
  transition: opacity 0.3s ease;
}

.modal-enter-from,
.modal-leave-to {
  opacity: 0;
}

.modal-enter-to,
.modal-leave-from {
  opacity: 1;
}
</style>