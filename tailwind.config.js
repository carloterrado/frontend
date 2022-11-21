/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/*.php'],
  theme: {
    screen: {
      sm: '480px',
      md: '768px',
      lg: '976',
      xl: '1440px'
    },
    extend: {
      colors: {
        accent: {
          regular:'#e84949',
          dark: 'rgba(248, 57, 57, 0.80)',
          light: 'rgba(161, 12, 12, 0.777)',
          verylight: 'rgba(232, 73, 73, 0.10)',
        },
        dark: '#060505',
        mid: '#695252',
        white: '#FFFFFF',
      }
    },
  },
  plugins: [],
}
