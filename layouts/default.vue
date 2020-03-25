<template>
  <div>
    <nav class="flex justify-center ">
      <div class="flex flex-grow items-center justify-between flex-no-wrap p-1 max-w-screen-xl">
        <div class="flex items-center flex-shrink-0">
          <img src="/logo_350_100.png"></img>
        </div>
        <div class="block lg:hidden">
          <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" /></svg>
          </button>
        </div>
        <div class="block lg:flex lg:items-center">
          <div class="text-md lg:flex-grow">
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-700 hover:text-gray-500 mr-4">
              Монгол
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-700 hover:text-gray-500 mr-4">
              English
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-700 hover:text-gray-500 mr-2">
              Холбогдох
            </a>
          </div>
        </div>
      </div>
    </nav>
    <nav class="flex bg-ccm-yellow h-6 md:h-24 justify-center items-center">
      <div class="grid grid-cols-6 h-24 invisible md:visible w-screen max-w-screen-xl font-sans text-xl tracking-normal leading-none text-white">
        <div class="flex justify-center items-center  hover:bg-ccm-blue">
          <p class="w-24 text-center">
            Бидний тухай
          </p>
        </div>
        <div class="flex justify-center items-center ">
          <div class="w-24 text-center text-white">
            Хавдрын тухай
          </div>
        </div>
        <div class="flex justify-center items-center ">
          <div class="w-24 text-centertext-gray-100">
            Урьдчилан сэргийлэх
          </div>
        </div>
        <div class="flex justify-center items-center ">
          <div class="w-24 text-center ">
            Дэмжлэг үзүүлэх
          </div>
        </div>
        <div class="flex justify-center items-center ">
          <div class="w-26 text-center ">
            Сайн дурын <br>ажилтан
          </div>
        </div>
        <div class="flex justify-center items-center ">
          <div class="w-24 text-center ">
            Хандив Донор
          </div>
        </div>
      </div>
    </nav>
    <nuxt />
  </div>
</template>

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
