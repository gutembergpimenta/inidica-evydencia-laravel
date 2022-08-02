/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],

    theme: {
        colors: {
            ...require('tailwindcss/colors'),
            primary: '#EF4444',
            secondary: '#2563EB'
        },
        extend: {},
    },

    plugins: [],
}
