<template>
  <div class="container">
    <div v-html="mdContent" class="mx-4" />
    <div class="flex mt-4">
      <div class="flex flex-col bg-gray-300 p-2 rounded ml-4 bg-gray-200 text-gray-800">
        <span class="font-bold">Манай байгууллагын хандивын данс</span>
        <span>Хаан банк: 5003 893517</span>
        <span>Голомт банк: 1415101162</span>
        <span>Худалдаа хөгжлийн банк: 499 313474</span>
        <span>Хүлээн авагч: Хавдрын үндэсний зөвлөл</span>
      </div>
    </div>
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
