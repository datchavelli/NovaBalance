/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{js,jsx,ts,tsx}",
  ],
  theme: {
    extend: {
      fontFamily: {
        roboto: ['Roboto', 'sans-serif'],
        redrose: ['"Red Rose"', 'cursive'],
        playfair: ['"Playfair Display"', 'serif'],
        inter: ['"Inter"', 'sans-serif'],
        lato: ['"Lato"', 'sans-serif'],
        merriweather: ['"Merriweather"', 'serif'],
      },
      colors: {
        'hover-pink': '#a0258c',
        'hover-dark-pink': '#861f73',
        'logo-color': '#8a2582',
      },
      screens: {
        'sm': '640px',
        'md': '768px',
        'custom': '889px', // 👈 your custom breakpoint
        'lg': '1024px',
        'xl': '1280px',
      },
    },
  },
  plugins: [],
}