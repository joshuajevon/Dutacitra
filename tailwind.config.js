/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "custom-light-gray": "#EAEAEA",
                "custom-white": "#FCFEFF",
                "custom-light-taupe": "#C6C0AF",
                "custom-light-yellow": "#F8F4E9",
                "custom-light-blue": "#BFDFE9",
                "custom-dark-blue": "#213371",
                "custom-darker-blue": "#18275C",
            },
        },
    },
    plugins: [],
};
