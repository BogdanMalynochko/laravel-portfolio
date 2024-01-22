/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./vendor/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'main': ["Poppins"],
      },
      colors: {
        'portfolio-black': '#101111',
        'blue': '#7A87FB',
        'yellow': '#FFD49C',
        'dark': '#292929',
        'grey': 'rgba(255, 255, 255, 0.25)',
        'dark_second': '#151515',
        'grey_second': '#7D7D7D',
      },
    },
    container: {
      center: true,
      padding: "1rem",
      screens: {
        sm: "1200px",
        md: "1200px",
        lg: "1200px",
        xl: "1240px",
        "2xl": "1400px",
      },
    },
  },
  plugins: [],
}