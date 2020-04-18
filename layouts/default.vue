<template>
  <div class="flex flex-col">
    <nav class="flex justify-center ">
      <div class="flex flex-grow items-center justify-between flex-no-wrap p-1 max-w-screen-xl">
        <div class="flex items-center flex-shrink-0">
          <img class="hidden md:block" src="/logo_350_100.png"></img>
          <img class="w-64 md:hidden" src="/logo_350_100.png"></img>
        </div>
        <div class="block md:hidden">
          <button @click="toggleMobileMenu()" class="flex items-center px-3 py-2 border text-ccm-blue border-ccm-blue rounded">
            <svg v-if="showMobileMenu" class="h-3 w-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/></svg>
            <svg v-else class="h-3 w-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" /></svg>
          </button>
        </div>
        <div class="absolute inset-0 min-h-screen min-w-screen bg-ccm-yellow hidden flex flex-col">
          <div class="flex justify-end mt-4 mr-4 text-gray-200">
            <svg class="h-8 w-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm1.41-1.41A8 8 0 1 0 15.66 4.34 8 8 0 0 0 4.34 15.66zm9.9-8.49L11.41 10l2.83 2.83-1.41 1.41L10 11.41l-2.83 2.83-1.41-1.41L8.59 10 5.76 7.17l1.41-1.41L10 8.59l2.83-2.83 1.41 1.41z" /></svg>
          </div>
          <div class="flex h-full bg-gray-100 justify-center items-center">
            baldan
          </div>
        </div>
        <div class="hidden md:flex md:flex md:items-center">
          <div class="text-md md:flex-grow">
            <a href="#responsive-header" class="block mt-4 md:inline-block md:mt-0 text-gray-700 hover:text-ccm-yellow mr-4">
              Монгол
            </a>
            <a href="#responsive-header" class="block mt-4 md:inline-block md:mt-0 text-gray-700 hover:text-ccm-yellow mr-4">
              English
            </a>
            <a href="#responsive-header" class="block mt-4 md:inline-block md:mt-0 text-gray-700 hover:text-ccm-yellow mr-4">
              Холбогдох
            </a>
          </div>
        </div>
      </div>
    </nav>
    <nav class="flex bg-ccm-yellow h-6 md:h-24 justify-center items-center w-screen">
      <div class="flex flex-no-wrap h-24 max-w-screen-xl flex-grow invisible md:visible font-sans text-xl tracking-normal leading-none text-white justify-around">
        <DropdownMenu :mc-menu="menu.menu1" mc-width="w-1/6" />
        <DropdownMenu :mc-menu="menu.menu2" mc-width="w-1/6" />
        <DropdownMenu :mc-menu="menu.menu3" mc-width="w-1/6" />
        <DropdownMenu :mc-menu="menu.menu4" mc-width="w-1/6" />
        <DropdownMenu :mc-menu="menu.menu5" mc-width="w-1/6" />
        <DropdownMenu :mc-menu="menu.menu6" mc-width="w-1/6" />
      </div>
    </nav>
    <nav :class="showMobileMenu == true ? '' : 'hidden'" class="flex bg-ccm-yellow md:hidden">
      <div class="flex flex-col w-screen font-sans text-xl tracking-normal leading-none text-white">
        <DropdownMenu :mc-menu="menu.menu1" :mc-mobile="true" mc-width="w-auto" />
        <DropdownMenu :mc-menu="menu.menu2" :mc-mobile="true" mc-width="w-auto" />
        <DropdownMenu :mc-menu="menu.menu3" :mc-mobile="true" mc-width="w-auto" />
        <DropdownMenu :mc-menu="menu.menu4" :mc-mobile="true" mc-width="w-auto" />
        <DropdownMenu :mc-menu="menu.menu5" :mc-mobile="true" mc-width="w-auto" />
        <DropdownMenu :mc-menu="menu.menu6" :mc-mobile="true" mc-width="w-auto" />
      </div>
    </nav>
    <nuxt />
  </div>
</template>

<script>
import DropdownMenu from '~/components/DropdownMenu.vue'
import menu from '~/static/data/menu.json'
export default {
  components: {
    DropdownMenu
  },
  data () {
    return {
      showMobileMenu: false,
      menu
    }
  },
  methods: {
    toggleMobileMenu (e) {
      this.showMobileMenu = !this.showMobileMenu
    }
  }
}
</script>

<style>
  html {
    font-family: 'Source Sans Pro', -apple-system, BlinkMacSystemFont, 'Segoe UI',
    Roboto, 'Helvetica Neue', Arial, sans-serif;
    font-size: 16px;
    word-spacing: 1px;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    box-sizing: border-box;
  }

  *,
  *:before,
  *:after {
    box-sizing: border-box;
    margin: 0;
  }

  .button--green {
    display: inline-block;
    border-radius: 4px;
    border: 1px solid #3b8070;
    color: #3b8070;
    text-decoration: none;
    padding: 10px 30px;
  }

  .button--green:hover {
    color: #fff;
    background-color: #3b8070;
  }

  .button--grey {
    display: inline-block;
    border-radius: 4px;
    border: 1px solid #35495e;
    color: #35495e;
    text-decoration: none;
    padding: 10px 30px;
    margin-left: 15px;
  }

  .button--grey:hover {
    color: #fff;
    background-color: #35495e;
  }
</style>
