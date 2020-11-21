<template>
  <div class="container">
    <div class="flex bg-gray-100 justify-center">
      <div class="mt-4">
        <div class="bg-white shadow-md border rounded p-8 mb-2">
          <div class="text-center font-bold text-base mb-4">
            <span>Онлайн хандивлах</span>
          </div>
          <div class="text-2xl text-center">
            <span>{{ this.$route.params.donorValue }} {{ this.$route.params.currency }}</span>
          </div>
          <p class="text-sm mt-4">Та хүсвэл холбоо барих мэдээллээ оруулна уу</p>
          <div class="flex flex-col">
            <input v-model="donate_name" class="shadow appearance-none border border-blue-400 rounded py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Нэр">
            <input v-model="donate_tel" class="shadow appearance-none border border-blue-400 rounded py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Утас">
            <input v-model="donate_email" class="shadow appearance-none border border-blue-400 rounded py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Имэйл">
          </div>
          <div class="flex justify-center mt-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" @click="donate_now">
              Хандивлах / Donate
            </button>
          </div>
        </div>
      </div>
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
        cancelUrl: 'http://www.cancercouncilmongolia.mn/donor',
        donate_name: '',
        donate_tel: '',
        donate_email: ''
      }
    } else {
      return {
        actionUrl: 'https://test.hipay.mn/payment',
        thankyouUrl: 'http://localhost:3000/thankyou',
        cancelUrl: 'http://localhost:3000/donor',
        donate_name: '',
        donate_tel: '',
        donate_email: ''
      }
    }
  },
  computed: {
    has_person_info: function () {
      return this.donate_name.length > 0 || this.donate_tel.length > 0 || this.donate_email.length > 0
    }
  },
  methods: {
    donate_now () {
      var msg = 'Anonymous'
      if(this.has_person_info) {
        msg = `name: ${this.donate_name}, tel: ${this.donate_tel}, email: ${this.donate_email}`
      }
      this.$router.push({ name: 'hipaydonor', params: { donorValue: this.$route.params.donorValue, currency: this.$route.params.currency, msg: msg } })
    }
  }
}
</script>
<style>
  .container {
    @apply min-h-screen flex mx-auto;
  }

</style>
