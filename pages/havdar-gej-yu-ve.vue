<template>
  <div class="container">
    <div class="mx-4 pt-4 my-4">
      <span class="text-3xl uppercase">Хавдар гэж юу вэ?</span>
    </div>
    <div class="flex flex-wrap md:flex-no-wrap">
      <div v-html="pageContent" class="mx-4 md:w-1/2" />
      <div class="flex flex-col md:w-1/2">
        <div class="pt-4">
          <div class="bg-gray-100 border rounded-lg overflow-hidden">
            <img class="w-full object-cover" src="img/havdar_gej_yu_ve1.jpg">
          </div>
        </div>
        <div class="pt-4">
          <div class="bg-gray-100 border rounded-lg overflow-hidden">
            <img class="w-full object-cover" src="img/havdar_gej_yu_ve2.jpg">
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import mdContent from '~/static/content/havdar-gej-yu-ve.md'
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
