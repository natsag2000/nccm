<template>
  <div class="container page">
    <div v-html="pageContent" class="mx-4" />
  </div>
</template>

<script>
import mdContent from '~/static/content/hongovchloh-tuslamj.md'
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

  .page table tr{
    @apply m-4 border-2
  }

  .page table tr td {
    @apply p-2
  }
</style>
