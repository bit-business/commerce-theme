<template>

  <div class="glavnidiv"> 
    <desktop-component v-if="isDesktop" />
    <mobile-component v-else />
  </div>
</template>


<script>
import DesktopComponent from "../components/popusti/popusti-za-clanove-desktop.vue";
import MobileComponent from "../components/popusti/popusti-za-clanove-mob.vue";

import galerijaLayout from '../layouts/galerija.vue'
import appLayout from '../layouts/app.vue'
import { mapState } from 'vuex'
import { Link, Head } from '@inertiajs/inertia-vue'
import _ from "lodash";

export default {
  layout: [appLayout, galerijaLayout],
  components: {
    DesktopComponent,
    MobileComponent
  },
  data() {
    return {
      isDesktop: window.innerWidth > 1100
    };
  },
  mounted() {
    window.addEventListener('resize', this.handleResize);
  },
  beforeDestroy() {
    window.removeEventListener('resize', this.handleResize);
  },
  methods: {
    handleResize() {
      this.isDesktop = window.innerWidth > 1100;
    }
  }
}
</script>


<style scoped>
  .glavnidiv {
margin-top: 3.75rem;
overflow: hidden;
margin-bottom: 3.5rem;
}

</style>