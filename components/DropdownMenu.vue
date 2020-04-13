<template>
  <div :class="mcMobile ? '' : mcWidth">
    <!-- mobile -->
    <div v-if="mcMobile" :class="mcWidth" class="flex flex-col">
      <div @click="toggleSubMenu()" class="flex p-2">
        <svg v-if="showSubMenu" class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        <svg v-else class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
        <div v-html="mcMenu.title" class="ml-1 " />
      </div>
      <ul :class="showSubMenu ? '' : 'hidden'" class="flex flex-col w-auto text-md opacity-75 whitespace-no-wrap">
        <li
          v-for="m in mcMenu.dropmenu"
          :key="m.title"
          @mouseover="holdhover=true"
          @mouseleave="holdhover=false"
          class="flex flex-col bg-ccm-yellow text-white pl-8 ml-1 pb-2 hover:text-gray-500"
        >
          <a v-if="m.dropmenu === undefined" :href="m.link">{{ m.title }}</a>
          <template v-else>
            <div class="flex items-center">
              <svg class="h-4 w-4 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 4h20v2H0V7zm0 4h20v2H0v-2zm0 4h20v2H0v-2z"/></svg>
              <a href="#" class="cursor-default">{{ m.title }}</a>
            </div>
            <ul class="text-md cursor-pointer">
              <li
                v-for="mnu in m.dropmenu"
                :key="mnu.title"
                @mouseover="holdhover=true"
                @mouseleave="holdhover=false"
                class="flex-none bg-ccm-yellow text-white py-1 hover:text-gray-500"
              >
                <a :href="mnu.link">{{ mnu.title }}</a>
              </li>
            </ul>
          </template>
        </li>
      </ul>
    </div>

    <!-- desktop -->
    <div v-else class="h-full w-full dropdown relative inline-block">
      <div :class="holdhover ? 'bg-ccm-blue' : ''" class="h-full flex hover:bg-ccm-blue justify-center items-center cursor-pointer pointer-events-auto focus:bg-ccm-blue">
        <div v-html="mcMenu.title" class="w-24 text-center" />
      </div>
      <ul class="dropdown-content absolute left-0 hidden text-md whitespace-no-wrap rounded-b-lg overflow-hidden cursor-pointer">
        <li
          v-for="m in mcMenu.dropmenu"
          :key="m.title"
          @mouseover="holdhover=true"
          @mouseleave="holdhover=false"
          :class="m.dropmenu === undefined ? '': 'dropdown'"
          class="flex-none bg-ccm-blue text-white px-6 pb-2 hover:text-gray-500"
        >
          <a v-if="m.dropmenu === undefined" :href="m.link">{{ m.title }}</a>
          <template v-else>
            <a href="#" class="cursor-default">{{ m.title }}</a>
            <ul class="text-md cursor-pointer">
              <li
                v-for="mnu in m.dropmenu"
                :key="mnu.title"
                @mouseover="holdhover=true"
                @mouseleave="holdhover=false"
                class="flex-none bg-ccm-blue text-white px-6 py-1 hover:text-gray-500"
              >
                <a :href="mnu.link">{{ mnu.title }}</a>
              </li>
            </ul>
          </template>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    mcWidth: {
      type: String,
      default: 'w-1/6'
    },
    mcMenu: {
      type: Object,
      default () {
        return {
          title: 'Default Title',
          dropmenu: [{ title: 'Title', link: 'Link' }]
        }
      }
    },
    mcMobile: {
      type: Boolean,
      default: false
    }
  },
  data () {
    return {
      holdhover: false,
      showSubMenu: false
    }
  },
  methods: {
    toggleSubMenu (e) {
      this.showSubMenu = !this.showSubMenu
    },
    toggleHoldhover (e) {
      this.holdhover = !this.holdhover
    }
  }
}
</script>

<style>
  .dropdown:hover > .dropdown-content {
    display: block;
  }
</style>
