const colors = require('tailwindcss/colors')

module.exports = {

  content: [
    './www/themes/phenomena/**/*.{php,html,js,svg}',
    './www/data/statiques/**/*.{php,html,js,svg}',
    './www/core/lib/class.plx.show.php',
  ],

  darkMode: 'class',

  theme: {
    extend: {
      
      fontFamily: {
        // 'base': ['Mulish'],
        // 'display': ['Fraunces'],
        // 'base': ['-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol']
      },
      colors: {

        "primary" : {
        '50': '#f0f2fd',
        '100': '#e4e8fb',
        '200': '#ced3f7',
        '300': '#b1b8f0',
        '400': '#9193e8',
        '500': '#7b76de',
        '600': '#6b5dd0',
        '700': '#5b4cb6',
        '800': '#4a4093',
        '900': '#3f3976',
        '950': '#262145',
        },

        'secondary': {
          '50': '#fff0f1',
          '100': '#ffe2e6',
          '200': '#ffcad2',
          '300': '#ff9fad',
          '400': '#ff6983',
          '500': '#ff3d63',
          '600': '#ed1146',
          '700': '#c8083c',
          '800': '#a80939',
          '900': '#8f0c37',
          '950': '#500119',
      },

          // primary: colors.stone,
          // secondary: colors.cyan,
          // tertiary: colors.pink,
      },
    },
  },
  plugins: [
  ],
}
