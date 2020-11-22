<template>
  <div class="container">
    <div class="flex bg-gray-100 justify-center">
      <div class="flex justify-center mt-4 w-2/3">
        <div class="bg-white shadow-md border rounded p-8 mb-2 w-2/3">
          <div class="text-center font-bold text-base mb-4">
            <span>Гүйлгээний дугаар лавлах</span>
          </div>
          <div class="flex flex-col">
            <div class="flex">
              <input v-model="checkid" class="shadow appearance-none border border-blue-400 rounded py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline w-full" type="text" placeholder="Гүйлгээний дугаараа оруулна уу">
              <svg @click="cleanid" class="w-6 h-6 mt-2 ml-2 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" /></svg>
            </div>
          </div>
          <div class="flex justify-center mt-4">
            <button @click="check_now" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
              Лавлах
            </button>
          </div>
          <div class="mt-4">
            {{ response }}
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
    return {
      url: 'https://cancercouncilmongolia.mn/checkdonate.php',
      // url: '/v1/',
      checkid: '',
      response: ''
    }
  },
  methods: {
    cleanid () {
      this.checkid = ''
      this.response = ''
    },
    async check_now () {
      this.response = ''
      const { data } = await this.$axios.get(this.url, { params: { checkid: this.checkid } })
      this.response = JSON.stringify(data)
    }
  }
}
</script>
<style>
  .container {
    @apply min-h-screen flex mx-auto;
  }

</style>
