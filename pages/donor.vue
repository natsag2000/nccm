<template>
  <div class="container">
    <div v-html="mdContent" class="mx-4" />
  </div>
</template>

<script>
import donor from '~/static/content/donor.md'
export default {
  computed: {
    mdContent () {
      return donor
    }
  }
}
</script>

<style>
  .container {
    @apply min-h-screen flex mx-auto;
  }

</style>
