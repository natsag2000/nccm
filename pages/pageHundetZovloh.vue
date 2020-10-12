<template>
  <div class="container">
    <div class="mx-4 pt-4 my-4">
      <span class="text-3xl uppercase">Хүндэт зөвлөх</span>
    </div>
    <div class="flex flex-wrap md:flex-no-wrap">
      <div class="pt-4 mx-4 md:w-1/3">
        <div class="bg-gray-100 border rounded-lg overflow-hidden">
          <img class="w-full object-cover" src="img/hundet_zovloh.jpeg">
          <div class="p-2 flex flex-col items-end">
            <span class="text-sm text-gray-700">Хүндэт зөвлөх</span>
            <span class="text-sm text-gray-700 uppercase">Жон Лангтри</span>
          </div>
        </div>
      </div>
      <div v-html="pageContent" class="mx-4 md:w-2/3" />
    </div>
  </div>
</template>

<script>
import mdContent from '~/static/content/pageHundetZovloh.md'
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
