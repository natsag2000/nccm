<template>
  <div class="container page">
    <div class="flex text-3xl justify-center">Таны хандив</div>
    <div class="flex justify-center bg-ccm-blue-300 my-4">
      <button v-for="y in years" @click="load_year( y.year )" class="rounded bg-ccm-blue text-gray-100 p-2 hover:bg-blue-700 mx-2">
        {{y.year}}
      </button>
    </div>
    <div class="flex justify-center my-1">
      <button v-for="y in months" @click="select_month( y.month )" class="rounded bg-blue-700 text-gray-100 p-2 hover:bg-blue-700 mx-2">
        {{y.month}} сар
      </button>
    </div>
    <div v-if="selected_month" class="flex items-center flex-col">
      <div class="flex flex-col mt-2">
        <div class="p-1 bg-blue-400 rounded">
          {{cur_year}} он
        </div>
        <div class="mx-4">
          <div class="mt-2 bg-blue-300 p-1">{{cur_month}} сар</div>
          <table class="table-auto border rounded w-full">
            <thead>
              <tr class="border bg-gray-200">
                <th class="border p-1">Огноо</th>
                <th class="border p-1">Хандивын хэмжээ</th>
                <th class="border p-1">Хандивлагч</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="dd in cur_days">
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
      handiv: [],
      selected_year: '',
      selected_month: ''
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

  computed: {
    months: function () {
      if(this.handiv.length === 1) {
        return this.handiv[0].months
      } else if(this.selected_year) {
        const sel_year = this.selected_year
        var index = this.handiv.findIndex(function (o) { return o.year === sel_year})
        return this.handiv[index].months
      } else {
        return this.handiv[0].months
      }
    },

    cur_month: function () {
      if(this.selected_month) {
        const sel_month = this.selected_month
        var index = this.months.findIndex(function (o) { return o.month === sel_month })
        return this.months[index].month
      } else {
        return ''
      }
    },

    cur_days: function () {
      if(this.selected_month) {
        const sel_month = this.selected_month
        var index = this.months.findIndex(function (o) { return o.month === sel_month })
        return this.months[index].days
      }
    },

    cur_year: function () {
      if(this.handiv.length === 1) {
        return this.handiv[0].year
      } else if(this.selected_year) {
        const sel_year = this.selected_year
        var index = this.handiv.findIndex(function (o) { return o.year === sel_year})
        return this.handiv[index].year
      } else {
        return this.handiv[0].year
      }
    }
  },

  methods: {
    async load_year (year) {
      const z = await this.$content('handivs/'+year)
                              .only(['year', 'months'])
                              .fetch()

      this.handiv = [ z ]
      this.selected_year = year
      this.months = z.months
      this.selected_month = ''
    },

    select_month: function(m) {
      this.selected_month = m
    }
  }

}
</script>

<style>
  .container {
    @apply min-h-screen flex flex-col mx-auto;
  }
</style>
