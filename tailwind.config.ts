import type { Config } from "tailwindcss";

export default {
  content: [
    "./pages/**/*.{vue,js,ts}",
    "./components/**/*.{vue,js,ts}",
    "./layouts/**/*.{vue,js,ts}",
    "./plugins/**/*.{vue,js,ts}",
    "./nuxt.config.{js,ts}",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#143257",
        text: {
          light: "#97AAC2",
          gray: "#6B7280", // navlinks inactive
          blue: "#1C477B",
          muted: "#667085",
          dark: "#101828",
          lightGray: "#E5E7EB",
          slate: "#37404C",
          sky: "#3B82F6",
          slateAlt: "#37404C",
        },
      },
      fontFamily: {
        inter: ['"Inter"', "sans-serif"],
        weird: ['"Comic Sans MS"', "cursive"],
      },
    },
  },
  plugins: [],
} satisfies Config;
