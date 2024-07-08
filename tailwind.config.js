/** @type {import("tailwindcss").Config} */

module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      fontFamily: {
        sans: ["DM Sans", "sans-serif"],
      },
      colors: {
        primary: "#99cc00",
      },
    },
  },
  plugins: [],
};
