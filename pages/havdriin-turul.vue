<template>
  <div class="container page">
    <div v-html="buduunShuluunGedesContent" class="mx-4" />
  </div>
</template>

<script>
import buduunShuluunGedes from '~/static/content/Buduun-shuluun-gedes.md'
export default {
  computed: {
    buduunShuluunGedesContent () {
      return buduunShuluunGedes
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
