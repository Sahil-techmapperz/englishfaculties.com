/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    extend: {
      backdropBlur: {
        'custom': '12.4px',
      },
    },
  },
  plugins: [],
}

