<template>
  <div :class="mcWidth" class="dropdown relative inline-block">
    <div :class="holdhover ? 'bg-ccm-blue' : ''" class="h-full flex hover:bg-ccm-blue justify-center items-center cursor-pointer">
      <div class="w-24 text-center ">
        {{ mcMenu.title }}
      </div>
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
    }
  },
  data () {
    return {
      holdhover: false
    }
  }
}
</script>

<style>
  .dropdown:hover > .dropdown-content {
    display: block;
  }
</style>
