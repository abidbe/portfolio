const colors = require("tailwindcss/colors");
/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        screens: {
            xs: "320px",  
            sm: "480px",
            md: "768px",
            lg: "976px",
            xl: "1440px",
        },
        colors: {
            customBlue: {
                50: "#F1F6FD",
                100: "#DEEBFB",
                200: "#C5DEF8",
                300: "#9DC9F3",
                400: "#6EABEC",
                500: "#4D8BE4",
                600: "#386FD8",
                700: "#2F5BC6",
                800: "#284594",
                900: "#284280",
                950: "#1D2A4E",
                "darker-50": "#0E0F14",
                "darker-100": "#1B2430",
                "darker-200": "#2D3A49",
                "darker-300": "#334058",
                "darker-400": "#445477",
                "darker-500": "#54668A",
                "darker-600": "#2C3E57",
                "darker-700": "#273451",
                "darker-800": "#1E2A3A",
                "darker-900": "#1E2833",
                "darker-950": "#0F141B",
            }
        },
        fontFamily: {
            sans: ["Graphik", "sans-serif"],
            serif: ["Merriweather", "serif"],
            modak: ['Modak', 'cursive'],
            bebas: ['Bebas Neue', 'cursive'],
            poppins: ['Poppins', 'sans-serif'],
        },
        extend: {
            spacing: {
                128: "32rem",
                144: "36rem",
            },
            borderRadius: {
                "4xl": "2rem",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
