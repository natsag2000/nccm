<template>
  <div class="container page">
    <div class="mx-4 pt-4 my-4">
      <span class="text-3xl uppercase">Хавдар үүсгэгч бодисууд</span>
    </div>
    <div class="flex flex-wrap md:flex-no-wrap">
      <div v-html="pageContent" class="mx-4 md:w-1/2" />
      <div class="flex flex-col md:w-1/2">
        <div class="pt-4">
          <div class="bg-gray-100 border rounded-lg overflow-hidden">
            <img class="w-full object-cover" src="img/ersdelt_huchin_zuil.jpg">
          </div>
        </div>
        <div class="pt-4">
          <div class="bg-gray-100 border rounded-lg overflow-hidden">
            <img class="w-full object-cover" src="img/ersdelt_huchin_zuil2.jpg">
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import mdContent from '~/static/content/havdar-uusgegch-bodisuud.md'
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
