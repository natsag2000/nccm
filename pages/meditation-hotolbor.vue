<template>
  <div class="container">
    <div v-html="pageContent" class="mx-4" />
  </div>
</template>

<script>
import mdContent from '~/static/content/meditation-hotolbor.md'
export default {
  computed: {
    pageContent () {
      return mdContent
    }
  }
}
</script>

<style>
  .container {
    @apply min-h-screen flex flex-col mx-auto;
  }

</style>
