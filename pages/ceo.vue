<template>
  <div class="container">
    <div v-html="mdContent" class="mx-4" />
  </div>
</template>

<script>
import mdContent from '~/static/content/ceo.md'
export default {
  computed: {
    mdContent () {
      return mdContent
    }
  }
}
</script>

<style>
  .container {
    @apply min-h-screen flex mx-auto;
  }

</style>
