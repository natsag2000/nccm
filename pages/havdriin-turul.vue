<template>
  <div class="container page">
    <div v-html="buduunShuluunGedesContent" class="mx-4 my-4" />
    <div v-html="uushgiContent" class="mx-4" />
  </div>
</template>

<script>
import buduunShuluunGedes from '~/static/content/Buduun-shuluun-gedes.md'
import uushgi from '~/static/content/uushgi.md'
export default {
  computed: {
    buduunShuluunGedesContent () {
      return buduunShuluunGedes
    },
    uushgiContent () {
      return uushgi
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
