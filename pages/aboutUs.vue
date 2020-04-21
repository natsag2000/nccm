<template>
  <div class="container">
    <div v-html="aboutUs" class="mx-4" />
  </div>
</template>

<script>
import aboutUs from '~/static/content/aboutUs.md'
export default {
  computed: {
    aboutUs () {
      return aboutUs
    }
  }
}
</script>

<style>
  .container {
    @apply min-h-screen flex mx-auto;
  }

</style>
