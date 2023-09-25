<template>
  <div>
    <commerce-top-bar class="hidden sm:flex" />
    <nav class="relative bg-white items-stretch w-full h-20 shadow-md hidden sm:flex">
      <div class="container flex items-center gap-16 justify-between">
        <div class="flex flex-shrink-0 items-center">
          <Link :href="route('skijasi.commerce-theme.home')" class="flex flex-nowrap items-center divide-x">
            <commerce-logo dark />
            <div class="text-lg mt-3 pl-4 text-primary">{{ $page.props.name }}</div>
          </Link>
        </div>
      
      </div>
    </nav>

    <nav class="flex flex-nowrap bg-gray-50 shadow-md px-4 sm:hidden relative z-50 w-full h-14 gap-6 items-center">
      <div @click="goBack">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
      </div>
      <div class="text-lg text-center mr-6 font-medium">{{ $page.props.name }}</div>
    </nav>

    <slot />
   <!--<commerce-footer class="hidden sm:block" />--> 
  </div>
</template>

<script>
import CommerceTopBar from '../components/commerce-top-bar.vue'
import CommerceFooter from '../components/commerce-footer.vue'
import CommerceLogo from '../components/commerce-logo.vue'
import { Link } from '@inertiajs/inertia-vue'

export default {
  name: "cart-layout",
  inject: ['goBack'],
  components: {
    CommerceTopBar,
    CommerceFooter,
    CommerceLogo,
    Link,
  },
  data() {
    return {
      search: ''
    }
  },
  methods: {
    searchProduct() {
      return
    }
  },
};
</script>
