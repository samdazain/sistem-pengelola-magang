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
                primary: "#EC2028",
                accent: "#BBFDE7",
                text: "#1B1F27",
                textAccent: "#08875D",
                neutralLight: "#E9E9E9",
                body: "#F8F9FC",
            },
            fontFamily: {
                sans: ["Montserrat", "sans-serif"],
            },
        },
    },
    plugins: [],
};
