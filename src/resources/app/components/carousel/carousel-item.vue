<template>
  <div 
    :class="[
      `flex-shrink-0 m-0 relative flex h-100 justify-center items-center ${noGutter ? `${parseInt(padding) === 1 ? 'p-0' : `p-${padding}`}` : `p-${parseInt(padding)}`}`
    ]" 
    :style="{ width: `${100 / $parent.show}%` }"
  >
    <slot 
      @quantity-change="handleQuantityChange"
      @click="$emit('click', $event)"
      @subtract="$emit('subtract', $event)"
    />
  </div>
</template>

<script>
export default {
  props: {
    noGutter: {
      type: Boolean,
      default: false
    },
    padding: {
      type: Number|String,
      default: 1
    }
  },
  methods: {
    handleQuantityChange(payload) {
      this.$emit('quantity-change', payload);
    }
  }
}
</script>