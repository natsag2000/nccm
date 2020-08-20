<template>
  <div class="container page">
    <p class="text-lg mt-4">
      Электрон ном
    </p>
    <div class="flex space-x-8">
      <a href="books/Hamtdaa-davan-tuulan-ni.pdf" target="_blank">
        <div class="border rounded-lg overflow-hidden shadow-lg">
          <img class="h-64 w-full object-cover" src="~/static/books/hamtdaa.png">
        </div>
      </a>
      <a href="books/Havdar-uwchnii-ueiin_hoollolt_0101__final.pdf" target="_blank">
        <div class="border rounded-lg overflow-hidden shadow-lg">
          <img class="h-64 w-full object-cover" src="~/static/books/hoollolt.png">
        </div>
      </a>
      <a href="books/havdriig_davan_tuulah_final_3dah-hevlel.pdf" target="_blank">
        <div class="border rounded-lg overflow-hidden shadow-lg">
          <img class="h-64 w-full object-cover" src="~/static/books/davan_tuulah.png">
        </div>
      </a>
    </div>
    <p class="text-lg mt-4">
      Хүүхдэд зориулсан электрон ном
    </p>
    <div class="flex space-x-8">
      <a href="books/Huuhdiin-havdriin-nom__01__final.pdf" target="_blank">
        <div class="border rounded-lg overflow-hidden shadow-lg">
          <img class="h-64 w-full object-cover" src="~/static/books/bold_huu.png">
        </div>
      </a>
      <a href="books/Minii_ger_buld_yu_tohioldoh_bol.pdf" target="_blank">
        <div class="border rounded-lg overflow-hidden shadow-lg">
          <img class="h-64 w-full object-cover" src="~/static/books/minii_ger.png">
        </div>
      </a>
    </div>
    <p class="text-lg mt-4">
      Гарын авлага, танилцуулгууд
    </p>
    <div class="flex space-x-8">
      <a href="gariin-avlaga/Breast-cancer-exercise.pdf" target="_blank">
        <div class="border rounded-lg overflow-hidden shadow-lg">
          <img class="h-64 w-full object-cover" src="~/static/gariin-avlaga/dasgal1.png">
        </div>
      </a>
      <a href="gariin-avlaga/BreastDasgal.pdf" target="_blank">
        <div class="border rounded-lg overflow-hidden shadow-lg">
          <img class="h-64 w-full object-cover" src="~/static/gariin-avlaga/dasgal2.png">
        </div>
      </a>
      <a href="gariin-avlaga/HPV_vaccine.pdf" target="_blank">
        <div class="border rounded-lg overflow-hidden shadow-lg">
          <img class="h-64 w-full object-cover" src="~/static/gariin-avlaga/vaccine1.png">
        </div>
      </a>
      <a href="gariin-avlaga/HPV_vaccine_sudalgaa.jpg" target="_blank">
        <div class="border rounded-lg overflow-hidden shadow-lg">
          <img class="h-64 w-full object-cover" src="~/static/gariin-avlaga/sudalgaa1.png">
        </div>
      </a>
      <a href="gariin-avlaga/HPV_vaccine_sudalgaa_2.jpg" target="_blank">
        <div class="border rounded-lg overflow-hidden shadow-lg">
          <img class="h-64 w-full object-cover" src="~/static/gariin-avlaga/sudalgaa2.png">
        </div>
      </a>
    </div>
    <div class="flex space-x-8 mt-8">
      <a href="gariin-avlaga/Huuhdiin_havdar_1.jpg" target="_blank">
        <div class="border rounded-lg overflow-hidden shadow-lg">
          <img class="h-64 w-full object-cover" src="~/static/gariin-avlaga/huuhed_havdar1.png">
        </div>
      </a>
      <a href="gariin-avlaga/Huuhdiin_havdar_2.jpg" target="_blank">
        <div class="border rounded-lg overflow-hidden shadow-lg">
          <img class="h-64 w-full object-cover" src="~/static/gariin-avlaga/huuhed_havdar2.png">
        </div>
      </a>

    </div>

  </div>
</template>

<script>
import mdContent from '~/static/content/tamhi.md'
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
