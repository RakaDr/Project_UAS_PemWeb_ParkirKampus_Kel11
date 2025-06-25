/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './app/Filament/**/*.php',
    './vendor/filament/**/*.blade.php',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
