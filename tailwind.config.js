/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        main: 'var(--color-main)',
        light: 'var(--color-light)',
        primary: 'var(--color-light)',
      },
      fontFamily: {
        'moles': ['Moles', 'sans-serif'],
        'monte': ['MonteCarlo'],
        'baskervville': ['Baskervville', 'serif'],
      },
    },
  },
  plugins: [],
}

