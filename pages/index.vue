<template>
  <div class="container">
    <div v-html="aboutUs" class="mx-4" />
    <div v-html="startpage" class="mx-4" />
  </div>
</template>

<script>
import aboutUs from '~/static/content/aboutUs.md'
import startcontent from '~/static/content/start.md'
export default {
  computed: {
    startpage () {
      return startcontent
    },
    aboutUs () {
      return aboutUs
    }
  }
}
</script>

<style>
.container {
  @apply min-h-screen flex flex-col mx-auto;
}

</style>
