<template>
  <div class="fixed bottom-4 right-0 px-4 sm:px-0 sm:right-8 max-w-xs w-full flex gap-y-4 flex-wrap z-50">
    <toast v-for="t in toast" :key="t.id" :message="t.message" :bg-color="t.backgroundColor" :text-color="t.textColor" :timeout="t.timeout" />
  </div>
</template>

<script>
import { mapState } from 'vuex';
import Toast from './toast.vue';
export default {
  components: {
    Toast
  },
  computed: {
    ...mapState(["toast"])
  }
}
</script>