<template>
  <div class="container page">
    <div v-html="pageContent" class="mx-4" />
    <div class="flex ml-4 items-center">
      <a href="/static/gadaad-emchilgeenii-tushaal.pdf" target="_blank">
        <svg class="h-4 w-4 text-blue-700 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
      </a>
      <a class="ml-2 text-blue-700" href="/static/gadaad-emchilgeenii-tushaal.pdf" target="_blank">
        Гадаад эмчилгээний тушаал
      </a>

    </div>
  </div>
</template>

<script>
import mdContent from '~/static/content/gadaad-emchilgee.md'
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
