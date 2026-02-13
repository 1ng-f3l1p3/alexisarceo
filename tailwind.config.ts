import type { Config } from 'tailwindcss';

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./storage/framework/views/*.php",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        'beige': '#B2AB81',
        'marron-oscuro': '#6C2F27',
        'verde-oliva': '#4C4F3C',
        'marron-dorado': '#A8673D',
        'beige-claro': '#F2EEE4',
      }
    },
  },
  plugins: [],
} satisfies Config