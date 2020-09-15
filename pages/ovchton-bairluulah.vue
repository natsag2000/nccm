<template>
  <div class="container">
    <div v-html="pageContent" class="mx-4" />
    <a class="outline-none ml-4 mt-4 text-blue-700" href="ovchtond/Uwchtuniig-tur-bairluuleh-bair-2020-4-23.pdf" target="_blank">
      <div class="flex items-center">
        <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4 18h12V6h-4V2H4v16zm-2 1V0h12l4 4v16H2v-1z" /></svg>
        <div class="ml-1 text-lg">
          Дарь Эхийн Өргөө төвийн танилцуулга
        </div>
      </div>
    </a>
  </div>
</template>

<script>
import mdContent from '~/static/content/ovchton-bairluulah.md'
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
