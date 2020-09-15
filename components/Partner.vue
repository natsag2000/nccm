<template>
  <a :href="link" class="outline-none" target="_blank">
    <img :class="size" :src="image">
  </a>
</template>
<script>
export default {
  props: {
    link: {
      type: String,
      default: ''
    },
    image: {
      type: String,
      default: ''
    },
    size: {
      type: String,
      default: ''
    }
  }
}
</script>
