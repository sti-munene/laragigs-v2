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
                primary: {
                    DEFAULT: "#A29F15", // Old Gold
                    50: "#F9F8D1",
                    100: "#F6F4B6",
                    200: "#EFEC80",
                    300: "#E8E44A",
                    400: "#D8D41C",
                    500: "#A29F15",
                    600: "#7E7C10",
                    700: "#5A580C",
                    800: "#363507",
                    900: "#121102",
                    950: "#000000",
                },
                secondary: {
                    DEFAULT: "#2274A5", // UCLA Blue
                    50: "#E1F0F9",
                    100: "#C8E3F4",
                    200: "#95CAE9",
                    300: "#63B0DF",
                    400: "#3097D4",
                    500: "#2274A5",
                    600: "#1A597F",
                    700: "#123E59",
                    800: "#0A2433",
                    900: "#03090D",
                    950: "#000000",
                },
            },
        },
    },
    plugins: [],
};
