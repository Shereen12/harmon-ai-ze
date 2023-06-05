/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/**/*.blade.php",
        "./public/js/*.js",
        "./public/js/main.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                cairo: ["cairo"],
            },
        },
    },
    plugins: [],
};
