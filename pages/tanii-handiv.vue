<template>
  <div class="container page">
    <div class="flex text-3xl justify-center">Таны хандив</div>
    <div class="flex justify-center bg-ccm-blue-300 my-4">
      <button v-for="y in years" @click="load_year( y.year )" class="rounded bg-ccm-blue text-gray-100 p-2 hover:bg-blue-700 mx-2">
        {{y.year}}
      </button>
    </div>
    <div class="flex items-center flex-col">
      <div v-for="zz in handiv" class="flex flex-col mt-2">
        <div class="p-1 bg-blue-400 rounded">
          {{zz.year}} он
        </div>
        <div v-for="mm in zz.months" class="mx-4">
          <div class="mt-2 bg-blue-300 p-1">{{mm.month}} сар</div>
          <table class="table-auto border rounded">
            <thead>
              <tr class="border bg-gray-200">
                <th class="border p-1">Огноо</th>
                <th class="border p-1">Хандивын хэмжээ</th>
                <th class="border p-1">Хандивлагч</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="dd in mm.days">
                <td class="border p-1"> {{dd.day}} </td>
                <td class="border p-1 text-center"> {{dd.count}} </td>
                <td class="border p-1"> {{dd.name}} </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</template>

<script>

export default {
  data () {
    return {
      years: [],
      handiv: []
    }
  },
  async fetch () {
    this.handiv = await this.$content('handivs')
                            .only(['year', 'months'])
                            .sortBy('year')
                            .fetch()
    this.years = await this.$content('handivs')
                             .only(['year'])
                             .fetch()
  },

  methods: {
    async load_year (year) {
      const z = await this.$content('handivs/'+year)
                              .only(['year', 'months'])
                              .fetch()

      this.handiv = [ z ]
    }
  }

}
</script>

<style>
  .container {
    @apply min-h-screen flex flex-col mx-auto;
  }
</style>
