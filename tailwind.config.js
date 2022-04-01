module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        width: {
            '400': '400px',
            '800': '800px',
        },
        height: {
            '350': '350px',
            '400': '400px',
            '420': '420px',
            '450': '450px',
            '600': '600px',
            '500': '500px',
            '550': '550px',
            '700': '700px',
        }
      ,
        margin: {
            '350': '350px',
            '370': '370px',
        }
    },
  },
  plugins: [
      require('tailwindcss-textshadow')
  ],
}
