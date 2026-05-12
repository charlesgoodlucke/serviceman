/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        brand: {
          primary: '#8046F1', // Using ServiceMan Purple for the PocketApp Purple role
          background: '#F8F9FA', // PocketApp off-white background
          dark: '#111111',
          green: '#2ECC71',
          orange: '#FF9F43',
          red: '#D63031',
          gray: '#E9ECEF',
          darkGray: '#343A40'
        }
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
        display: ['Clash Display', 'sans-serif'],
      },
      borderRadius: {
        '4xl': '2rem',
        '5xl': '2.5rem',
        '6xl': '3rem',
      }
    },
  },
  plugins: [],
}
