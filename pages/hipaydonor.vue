<template>
  <div class="container">
    <!-- If Donation ready -->
    <div v-if="donationReady" class="flex bg-gray-100 justify-center">
      <div class="mt-4">
        <form class="bg-white shadow-md border rounded p-8 mb-2" method="post" :action="actionUrl">
          <div class="text-center font-bold text-base mb-4">
            <span>Онлайн хандивлах</span>
          </div>
          <div class="text-2xl text-center">
            <span>{{ this.$route.params.donorValue }} {{ this.$route.params.currency }}</span>
          </div>
          <input type="hidden" name="checkoutId" :value="checkoutId">
          <input type="hidden" name="shopperResultUrl" :value="thankyouUrl">
          <input type="hidden" name="shopperCancelUrl" :value="cancelUrl">
          <div class="flex justify-center mt-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Хандивлах / Donate
            </button>
          </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
          &copy;2020 Hi-Pay powered.
        </p>
      </div>
    </div>
    <!-- If Donation NOT ready -->
    <div v-else class="flex bg-gray-100 justify-center mt-8">
      Системд алдаа гарлаа. Дараа дахин оролдоно уу
    </div>
  </div>
  </div>
</template>

<script>

export default {
  data () {
    const PROD = true
    if (PROD) {
      return {
        actionUrl: 'https://sts.hipay.mn/payment',
        thankyouUrl: 'http://www.cancercouncilmongolia.mn/thankyou',
        cancelUrl: 'http://www.cancercouncilmongolia.mn/donor'
      }
    } else {
      return {
        actionUrl: 'https://test.hipay.mn/payment',
        thankyouUrl: 'http://localhost:3000/thankyou',
        cancelUrl: 'http://localhost:3000/donor'
      }
    }
  },
  async asyncData ({ $axios, params }) {
    var FormData = require('form-data')
    const apiUrl = '/api/'
    const token = 'ZDdVY2pGanYyc0ZiZnhMYg' // PROD
    const entityId = 'cancerco' // PROD
    // const token = 'TzUwM09oWGVkaVlaQjlQRg' // TEST
    // const entityId = 'cancer' //TEST
    const formData = new FormData()
    formData.append('entityId', entityId)
    formData.append('amount', params.donorValue)
    formData.append('currency', params.currency)

    const config = {
      method: 'post',
      url: apiUrl,
      headers: {
        'Authorization': `Bearer ${token}`,
      },
      data: formData
    }
    const { data } = await $axios(config)
    return data
  },
  computed: {
    donationReady () {
      return this.code === 1 ? true : false
    }
  }
}
</script>

<style>
  .container {
    @apply min-h-screen flex mx-auto;
  }

</style>
