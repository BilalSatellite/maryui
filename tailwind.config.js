import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brandRed: "#ED1B24",
                brandBlack: "#151515",
                brand900: "#18181B",
                brand800: "#27272A",
                brand700: "#3F3F46",
                brand600: "#52525B",
                brand500: "#71717A",
                brand400: "#A1A1AA",
                brand300: "#D4D4D8",
                brand200: "#E4E4E7",
                brand100: "#F4F4F5",
                brand50: "#FAFAFA",
            },
        },
    },
    plugins: [require("@tailwindcss/typography"), require("daisyui")],
    // daisyUI config (optional - here are the default values)
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#ED1B24",
                    secondary: "#151515",
                    accent: "#37cdbe",
                    neutral: "#3d4451",
                    "base-100": "#ffffff",
                },
            },
            "light",
            "dark",
        ], // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
        darkTheme: "mytheme",
    },
};
