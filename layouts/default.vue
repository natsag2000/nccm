<template>
  <div class="flex flex-col">
    <nav class="flex justify-center ">
      <div class="flex flex-grow items-center justify-between flex-no-wrap p-1 max-w-screen-xl relative">
        <nuxt-link class="outline-none" to="/">
          <div class="flex items-center flex-shrink-0">
            <img class="hidden md:block" src="~/static/logo_350_100.png"></img>
            <img class="w-64 md:hidden" src="~/static/logo_350_100.png"></img>
          </div>
        </nuxt-link>
        <div class="text-ccm-yellow flex absolute bottom-0 right-0 -mb-2 mr-10 md:hidden">
          <a class="outline-none" href="https://www.facebook.com/people/%D0%A5%D0%B0%D0%B2%D0%B4%D1%80%D1%8B%D0%BD-%D2%AE%D0%BD%D0%B4%D1%8D%D1%81%D0%BD%D0%B8%D0%B9-%D0%97%D3%A9%D0%B2%D0%BB%D3%A9%D0%BB/100008502519081" target="_blank">
            <svg class="w-10 h-10 mr-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6S15.302.4 10 .4zm2.274 6.634h-1.443c-.171 0-.361.225-.361.524V8.6h1.805l-.273 1.486H10.47v4.461H8.767v-4.461H7.222V8.6h1.545v-.874c0-1.254.87-2.273 2.064-2.273h1.443v1.581z" /></svg>
          </a>
          <a class="outline-none" href="https://twitter.com/cancercouncilmn" target="_blank">
            <svg class="w-10 h-10 mr-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6S15.302.4 10 .4zm3.905 7.864c.004.082.005.164.005.244 0 2.5-1.901 5.381-5.379 5.381a5.335 5.335 0 0 1-2.898-.85c.147.018.298.025.451.025.886 0 1.701-.301 2.348-.809a1.895 1.895 0 0 1-1.766-1.312 1.9 1.9 0 0 0 .853-.033 1.892 1.892 0 0 1-1.517-1.854v-.023c.255.141.547.227.857.237a1.89 1.89 0 0 1-.585-2.526 5.376 5.376 0 0 0 3.897 1.977 1.891 1.891 0 0 1 3.222-1.725 3.797 3.797 0 0 0 1.2-.459 1.9 1.9 0 0 1-.831 1.047 3.799 3.799 0 0 0 1.086-.299 3.834 3.834 0 0 1-.943.979z" /></svg>
          </a>
        </div>
        <div class="hidden md:flex md:flex-1 md:justify-end text-ccm-yellow">
          <a class="outline-none" href="https://www.facebook.com/people/%D0%A5%D0%B0%D0%B2%D0%B4%D1%80%D1%8B%D0%BD-%D2%AE%D0%BD%D0%B4%D1%8D%D1%81%D0%BD%D0%B8%D0%B9-%D0%97%D3%A9%D0%B2%D0%BB%D3%A9%D0%BB/100008502519081" target="_blank">
            <svg class="w-10 h-10 mr-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6S15.302.4 10 .4zm2.274 6.634h-1.443c-.171 0-.361.225-.361.524V8.6h1.805l-.273 1.486H10.47v4.461H8.767v-4.461H7.222V8.6h1.545v-.874c0-1.254.87-2.273 2.064-2.273h1.443v1.581z" /></svg>
          </a>
          <a class="outline-none" href="https://twitter.com/cancercouncilmn" target="_blank">
            <svg class="w-10 h-10 mr-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6S15.302.4 10 .4zm3.905 7.864c.004.082.005.164.005.244 0 2.5-1.901 5.381-5.379 5.381a5.335 5.335 0 0 1-2.898-.85c.147.018.298.025.451.025.886 0 1.701-.301 2.348-.809a1.895 1.895 0 0 1-1.766-1.312 1.9 1.9 0 0 0 .853-.033 1.892 1.892 0 0 1-1.517-1.854v-.023c.255.141.547.227.857.237a1.89 1.89 0 0 1-.585-2.526 5.376 5.376 0 0 0 3.897 1.977 1.891 1.891 0 0 1 3.222-1.725 3.797 3.797 0 0 0 1.2-.459 1.9 1.9 0 0 1-.831 1.047 3.799 3.799 0 0 0 1.086-.299 3.834 3.834 0 0 1-.943.979z" /></svg>
          </a>
        </div>
        <div class="block md:hidden">
          <button @click="toggleMobileMenu()" class="flex items-center px-3 py-2 border text-ccm-blue border-ccm-blue rounded">
            <svg v-if="showMobileMenu" class="h-3 w-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" /></svg>
            <svg v-else class="h-3 w-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" /></svg>
          </button>
        </div>
        <div class="absolute inset-0 min-h-screen min-w-screen bg-ccm-yellow hidden flex flex-col">
          <div class="flex justify-end mt-4 mr-4 text-gray-200">
            <svg class="h-8 w-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm1.41-1.41A8 8 0 1 0 15.66 4.34 8 8 0 0 0 4.34 15.66zm9.9-8.49L11.41 10l2.83 2.83-1.41 1.41L10 11.41l-2.83 2.83-1.41-1.41L8.59 10 5.76 7.17l1.41-1.41L10 8.59l2.83-2.83 1.41 1.41z" /></svg>
          </div>
          <div class="flex h-full bg-gray-100 justify-center items-center">
            baldana
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
            <a href="contact" class="block mt-4 md:inline-block md:mt-0 text-gray-700 hover:text-ccm-yellow mr-4">
              Холбогдох
            </a>
          </div>
        </div>
      </div>
    </nav>
    <nav class="flex bg-ccm-yellow h-6 md:h-24 justify-center items-center w-screen">
      <div class="flex flex-no-wrap h-24 max-w-screen-xl flex-grow invisible md:visible font-sans text-xl tracking-normal leading-none text-white justify-around">
        <DropdownMenu :mc-menu="menu.menu1" mc-width="w-auto" />
        <DropdownMenu :mc-menu="menu.menu2" mc-width="w-auto" />
        <DropdownMenu :mc-menu="menu.menu3" mc-width="w-auto" />
        <DropdownMenu :mc-menu="menu.menu4" mc-width="w-auto" />
        <DropdownMenu :mc-menu="menu.menu5" mc-width="w-auto" />
        <DropdownMenu :mc-menu="menu.menu6" mc-width="w-auto" />
        <DropdownMenu :mc-menu="menu.menu7" mc-width="w-auto" />
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
        <DropdownMenu :mc-menu="menu.menu7" :mc-mobile="true" mc-width="w-auto" />
        <div class="flex p-2">
          <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" /></svg>
          <a class="ml-1" href="contact">Холбогдох</a>
        </div>
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
