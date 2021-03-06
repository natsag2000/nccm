
export default {
  target: 'static',
  /*
  ** Headers of the page
  */
  head: {
    title: process.env.npm_package_name || '',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: process.env.npm_package_description || '' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },
  /*
  ** Customize the progress-bar color
  */
  loading: { color: '#fff' },
  /*
  ** Global CSS
  */
  css: [
  ],
  /*
  ** Plugins to load before mounting the App
  */
  plugins: [
    { src: '~/plugins/vue-gallery.client.js', ssr: true }
  ],
  /*
  ** Nuxt.js dev-modules
  */
  buildModules: [
    // Doc: https://github.com/nuxt-community/eslint-module
    '@nuxtjs/eslint-module',
    // Doc: https://github.com/nuxt-community/nuxt-tailwindcss
    '@nuxtjs/tailwindcss'
  ],
  /*
  ** Nuxt.js modules
  */
  modules: [
    // Doc: https://axios.nuxtjs.org/usage
    '@nuxtjs/axios',
    '@nuxtjs/markdownit',
    '@nuxtjs/pwa',
    '@nuxtjs/toast',
    '@nuxtjs/content',
  ],

  content: {
    fullTextSearchFields: ['year', 'month', 'days', 'day', 'name', 'count', 'desc']
  },

  toast: {
    position: 'top-center'
  },

  /*
  ** Axios module configuration
  ** See https://axios.nuxtjs.org/options
  */
  axios: {
    common: {
    },
    proxy: true,
    proxyHeaders: true
  },

  proxy: {
    '/api/': { target: 'http://cancercouncilmongolia.mn/hipay.php', pathRewrite: { '^/api/': '' } },
    '/v1/': { target: 'http://cancercouncilmongolia.mn/checkdonate.php', pathRewrite: { '^/v1/': '' } },
    '/v2/': { target: 'https://raw.githubusercontent.com/natsag2000/nccm/master/static/content/zardal-zartsuulalt.md', pathRewrite: { '^/v2/': '' } },
    '/v3/': { target: 'https://raw.githubusercontent.com/natsag2000/nccm/master/static/content/tanii-handiv.md', pathRewrite: { '^/v3/': '' } }

  },
  /**
  ** Markdownit
  */
  markdownit: {
    injected: true,
    breaks: true,
    linkify: true,
    use: [
      'markdown-it-div',
      'markdown-it-attrs',
      'markdown-it-multimd-table'
    ]
  },
  /*
  ** Build configuration
  */
  build: {
    /*
    ** You can extend webpack config here
    */
    extend (config, ctx) {
    }
  }
}
