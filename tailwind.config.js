/*
** TailwindCSS Configuration File
**
** Docs: https://tailwindcss.com/docs/configuration
** Default: https://github.com/tailwindcss/tailwindcss/blob/master/stubs/defaultConfig.stub.js
*/
module.exports = {
  theme: {
    extend: {
      colors: {
        'ccm-yellow': '#C61390',
        'ccm-blue': '#10436D'
      }
    }
  },
  variants: {
    pointerEvents: ['responsive', 'hover', 'focus']
  },
  plugins: []
}
