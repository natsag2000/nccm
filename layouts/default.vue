<template>
  <div>
    <nav class="flex justify-center ">
      <div class="flex flex-grow items-center justify-between flex-no-wrap p-1 max-w-screen-xl">
        <div class="flex items-center flex-shrink-0">
          <img class="hidden md:block" src="/logo_350_100.png"></img>
          <img class="w-64 md:hidden" src="/logo_350_100.png"></img>
        </div>
        <div class="block md:hidden">
          <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" /></svg>
          </button>
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
    <nav class="flex bg-ccm-yellow h-6 md:h-24 justify-center items-center">
      <div class="flex flex-no-wrap h-24 invisible md:visible w-screen max-w-screen-xl font-sans text-xl tracking-normal leading-none text-white">
        <div class="w-1/6 flex justify-center items-center  hover:bg-ccm-blue">
          <p class="w-24 text-center">
            Бидний тухай
          </p>
        </div>
        <div class="w-1/6 flex justify-center items-center hover:bg-ccm-blue">
          <div class="w-24 text-center text-white">
            Хавдрын тухай
          </div>
        </div>
        <div class="w-1/6 flex justify-center items-center hover:bg-ccm-blue">
          <div class="w-24 text-centertext-gray-100">
            Урьдчилан сэргийлэх
          </div>
        </div>
        <DropdownMenu :mc-menu="menu4" mc-width="w-1/6" />
        <div class="w-1/6 flex justify-center items-center hover:bg-ccm-blue">
          <div class="w-26 text-center ">
            Сайн дурын <br>ажилтан
          </div>
        </div>
        <div class="w-1/6 flex justify-center items-center hover:bg-ccm-blue">
          <div class="w-24 text-center ">
            Хандив Донор
          </div>
        </div>
      </div>
    </nav>
    <nuxt />
  </div>
</template>

<script>
import DropdownMenu from '~/components/DropdownMenu.vue'
export default {
  components: {
    DropdownMenu
  },
  data () {
    return {
      menu4: {
        title: 'Дэмжлэг үзүүлэх',
        dropmenu: [
          {
            title: 'Гэр бүл асран хамгаалагч',
            dropmenu: [
              {
                title: 'Өвчтөний асаргаа сувилгаа',
                linke: 'pageAsargaa'
              },
              {
                title: 'Хүүхдийн асаргаа сувилгаа',
                linke: 'pageChild'
              },
              {
                title: 'Сэтгэлзүйн дэмжлэг',
                linke: 'pagehelp'
              }
            ]
          },
          {
            title: 'Ажил олгогч нарт',
            link: 'pagetest'
          },
          {
            title: 'Өөрийн түүхээс хуваалцахуй',
            link: 'pagetest'
          }
        ]
      }
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
