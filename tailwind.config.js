module.exports = {
  purge: [
      './resources/views/app.blade.php',
      './resources/js/app.js',
      './resources/js/components/App.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        colors: {
            na: '#707070',
            vu: '#33ADE8',
            safeWalk: '#00FF00',
            semiSafeWalk: '#9FD23A',
            safeStay: '#FF9900',
            semiSafeStay: '#E16648',
            notSafe: '#CC0000',
            crowded: '#660000'
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
