<template>
  <div class="container page">
    <div v-html="pageContent" class="mx-4" />
  </div>
</template>

<script>
import mdContent from '~/static/content/donation-status.md'
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

  .page ul {
    list-style-type: circle;
    list-style-position: inside;
  }
</style>
