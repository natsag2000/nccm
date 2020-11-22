<template>
  <div class="container page">
    <div v-html="pageContent" class="mx-4" />
  </div>
</template>

<script>

export default {
  computed: {
    pageContent () {
      return this.mdContent
    }
  },
  async asyncData ({ $axios }) {
    const url = 'https://raw.githubusercontent.com/natsag2000/nccm/master/static/content/tanii-handiv.md'
    const md = require('markdown-it')()
      .use(require('markdown-it-multimd-table'))
    const { data } = await $axios.get(url)
    return {
      mdContent: md.render(data)
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
