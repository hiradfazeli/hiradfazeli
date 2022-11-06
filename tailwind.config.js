/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'primary': ['Montserrat', 'sans-serif'],
      },
      colors: {
        'primary': '#0f0f0f',
        'secondary': '#f4efde',
      },
    },
  },
  plugins: [],
}