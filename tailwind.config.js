/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        greenDark: '#7FE9DE',
        textDark: '#041C32',
        secFirst: '#FFF6BF'
      }
    },
  },
  plugins: [],
}