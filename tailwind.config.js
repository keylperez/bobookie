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
      textColor: {
        primary: "#FEB155",
        secondary: "#2A2A2A",
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
