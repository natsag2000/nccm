<template>
  <div class="container">
    <div class="flex bg-gray-100 justify-center">
      <div class="mt-4">
        <form class="bg-white shadow-md border rounded p-8 mb-2">
          <div class="text-center font-bold text-base mb-4">
            <span>Онлайн хандивлах</span>
          </div>
          <div class="text-2xl text-center">
            <span>{{ this.$route.params.donorValue }} {{ this.$route.params.currency }}</span>
          </div>
          <div class="flex flex-col">
            <p class="text-sm">Хамт илгээх үг/Message</p>
            <textarea class="border" name="items[0][name]" id="msg" rows="3" tabindex=""></textarea>
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
export default {
  data () {
    return {
      donorValue: 0,
      donorValueOther: '',
      currency: 'T',
      finallValue: 0,
      finallCurrency: 'MNT'
    }
  },
  methods: {
    checkoutDonor () {
      console.log(this.donorValue)
      console.log(this.donorValueOther)
      console.log(this.currency)
    }
  }
}
</script>

<style>
  .container {
    @apply min-h-screen flex mx-auto;
  }

</style>
