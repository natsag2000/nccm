<template>
  <div class="container">
    <!-- If Donation ready -->
    <div v-if="donationReady" class="flex bg-gray-100 justify-center">
      <div class="mt-4">
        <form :action="actionUrl" class="bg-white shadow-md border rounded p-8 mb-2" method="post">
          <div class="text-center font-bold text-base mb-4">
            <span>Онлайн хандивлах</span>
          </div>
          <div class="text-2xl text-center">
            <span>{{ this.$route.params.donorValue }} {{ this.$route.params.currency }}</span>
          </div>
          <input :value="checkoutId" type="hidden" name="checkoutId">
          <input :value="thankyouUrl" type="hidden" name="shopperResultUrl">
          <input :value="cancelUrl" type="hidden" name="shopperCancelUrl">
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
  computed: {
    donationReady () {
      return this.code === 1
    }
  },
  async asyncData ({ $axios, params }) {
    // const apiUrl = '/api/' // TEST
    const apiUrl = 'hipay.php' // PROD
    const config = {
      method: 'GET',
      url: apiUrl,
      data: {
        'amount': params.donorValue,
        'currency': params.currency
      }
    }
    const { data } = await $axios.get(apiUrl, { params: config.data })
    return data
  }
}
</script>
<style>
  .container {
    @apply min-h-screen flex mx-auto;
  }

</style>
