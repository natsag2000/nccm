<template>
  <div class="container">
    <div class="mx-4 pt-4 my-4">
      <span class="text-3xl uppercase">Гүйцэтгэх захирлын мэндчилгээ</span>
    </div>
    <div class="flex flex-wrap md:flex-no-wrap">
      <div class="pt-4 mx-4">
        <div class="bg-gray-100 border rounded-lg overflow-hidden">
          <img class="w-full object-cover" src="img/tsetsegsaikhan_photo.jpg">
          <div class="p-2 flex flex-col items-end">
            <span class="text-sm text-gray-700">Хүний их эмч, анагаах ухааны доктор</span>
            <span class="text-sm text-gray-700 uppercase">Б.Цэцэгсайхан</span>
          </div>
        </div>
      </div>
      <div v-html="mdContent" class="mx-4" />
    </div>
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
