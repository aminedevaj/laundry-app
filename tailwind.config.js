/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/**/*.php", 
  ],
  theme: {
    extend: {
      colors: {
        'brand-blue': '#3b82f6',
        'brand-black': '#0f172a',
      },
    },
  },
  plugins: [],
}