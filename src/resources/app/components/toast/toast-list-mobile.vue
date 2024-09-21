<template>
  <div class="fixed bottom-1/2 right-6 align-center justify-center max-w-xs w-full flex gap-y-4 flex-wrap z-auto">
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