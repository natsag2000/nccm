<template>
  <div class="container">
    <div v-html="mdContent" class="mx-4 mb-4" />
    <div class="flex flex-col md:flex-row items-start space-y-4 md:space-y-0 md:space-x-4">
      <div class="flex max-w-md">
        <div class="flex flex-col p-4 border shadow-md rounded ml-4 text-gray-800">
          <span class="text-base font-bold pb-4">Манай байгууллагын хандивын данс</span>
          <span>Хаан банк: 5003 893517</span>
          <span>Голомт банк: 1415 101162</span>
          <span>Худалдаа хөгжлийн банк: 499 313474</span>
          <span>Хүлээн авагч: Хавдрын үндэсний зөвлөл</span>
        </div>
      </div>
      <!-- online donor -->
      <div class="flex bg-gray-100 mx-4">
        <div class="">
          <form class="bg-white shadow-md border rounded pb-8 mb-2">
            <div class="text-center font-bold text-base py-4">
              <span>Онлайн хандивлах</span>
            </div>
            <div class="ml-4">
              <div class="flex mb-2 items-center">
                <input
                  id="5k"
                  v-model="donorValue"
                  class="shadow border rounded w-4 h-4"
                  type="radio"
                  name="handiv"
                  value="5000"
                >
                <label class="text-gray-700 text-sm font-bold ml-2" for="5k">
                  5,000 ₮
                </label>
              </div>
              <div class="flex mb-2 items-center">
                <input
                  id="10k"
                  v-model="donorValue"
                  class="shadow border rounded w-4 h-4"
                  type="radio"
                  name="handiv"
                  value="10000"
                >
                <label class="text-gray-700 text-sm font-bold ml-2" for="10k">
                  10,000 ₮
                </label>
              </div>
              <div class="flex mb-2 items-center">
                <input
                  id="20k"
                  v-model="donorValue"
                  class="shadow border rounded w-4 h-4"
                  type="radio"
                  name="handiv"
                  value="20000"
                >
                <label class="text-gray-700 text-sm font-bold ml-2" for="20k">
                  20,000 ₮
                </label>
              </div>
              <div class="flex mb-2 items-center">
                <input
                  id="50k"
                  v-model="donorValue"
                  class="shadow border rounded w-4 h-4"
                  type="radio"
                  name="handiv"
                  value="50000"
                >
                <label class="text-gray-700 text-sm font-bold ml-2" for="50k">
                  50,000 ₮
                </label>
              </div>
            </div>
            <div class="flex p-3">
              <div class="flex flex-col justify-start ml-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="other">
                  Бусад
                </label>
                <input id="other" v-model="donorValueOther" class="shadow appearance-none border border-blue-400 rounded py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline w-48" type="text">
              </div>
              <div class="flex flex-col mx-3">
                <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-state">
                  Currency
                </label>
                <div class="relative">
                  <select id="grid-state" v-model="currency" class="block appearance-none bg-gray-200 border border-gray-200 text-gray-700 py-2 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option value="MNT">
                      MNT ₮
                    </option>
                    <option value="USD">
                      USD $
                    </option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                  </div>
                </div>
              </div>
            </div>

            <div class="flex justify-center mt-4">
              <button @click="checkoutDonor" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Хандивлах/Donate
              </button>
            </div>
          </form>
          <p class="text-center text-gray-500 text-xs">
            &copy;2020 Hi-Pay powered.
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import donor from '~/static/content/donor.md'
export default {
  data () {
    return {
      donorValue: 0,
      donorValueOther: '',
      currency: 'MNT'
    }
  },
  computed: {
    mdContent () {
      return donor
    }
  },
  methods: {
    checkoutDonor () {
      console.log(this.donorValue)
      console.log(this.donorValueOther)
      console.log(this.currency)
      if (this.donorValue === 0 && this.donorValueOther === '') {
        this.$toast.error('Хандивын тоон хэмжээг сонгоно уу').goAway(1500)
      } else if (this.donorValue > 0 && this.donorValueOther === '') {
        this.$router.push({ name: 'hipaydonor', params: { donorValue: this.donorValue, currency: 'MNT' } })
      } else if (this.donorValueOther !== '') {
        this.$router.push({ name: 'hipaydonor', params: { donorValue: this.donorValueOther, currency: this.currency } })
      }
    }
  }
}
</script>

<style>
  .container {
    @apply min-h-screen flex mx-auto;
  }

</style>
