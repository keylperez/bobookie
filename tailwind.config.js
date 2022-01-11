module.exports = {
  purge: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        main: ["Montserrat", "sans-serif"],
      },
      fontSize: {
        'vxs': '0.5rem',
      },
      colors: {
        primary: "#FEB155",
        secondary: "#2A2A2A",
        active: "#FEB155",
        softgray: "#E5E5E5"
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};

