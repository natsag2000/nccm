<template>
  <div class="flex-col md:w-1/2 bg-gray-100 p-2 rounded-full">
    <div class="text-2xl leading-none text-ccm-blue">
      <nuxt-link :to="link">
        {{ title }}
      </nuxt-link>
    </div>
    <div class="flex space-x-4 items-start">
      <img :src="image" class="min-h-24 h-24 md:min-h-48 md:h-48 object-contain mt-4">
      <div class="flex-col">
        <p>
          {{ content }}
        </p>
        <nuxt-link :to="link">
          <div class="flex items-center text-ccm-blue">
            <p href="project1">
              Дэлгэрэнгүй
            </p>
            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" /></svg>
          </div>
        </nuxt-link>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    title: {
      type: String,
      default: ''
    },
    image: {
      type: String,
      default: ''
    },
    content: {
      type: String,
      default: ''
    },
    link: {
      type: String,
      default: ''
    }
  }
}
</script>
