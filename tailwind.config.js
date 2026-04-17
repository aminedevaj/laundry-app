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
        // Hna t-zid l-alwan dyal l-brand li mkhddam f l-code
        'brand-blue': '#2563eb', // Example: baddalha b l-blue dyalk
        'brand-black': '#0a0a0a',
        'brand-dark': '#1a1a1a',
      },
      fontFamily: {
        // Hna khass t-zid l-font 'DM Serif Display' bach t-ban f l-build
        'serif': ['"DM Serif Display"', 'serif'],
      },
    },
  },
  plugins: [],
}