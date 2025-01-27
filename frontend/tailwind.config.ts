import type { Config } from "tailwindcss";
import Typography from "@tailwindcss/typography";

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
        primary: "#143257", // unilink main theme color
        nav: {
          inactive: "#6B7280",
          active: "#3B82F6",
        },
        wishlist: "#37404C",
        gift: "#EFF3F8",
        card: {
          title: "#101828",
          content: "#667085",
          link: "#1C477B",
          "link-inactive": "#476996",
        },
        footer: {
          active: "#60a5fa",
        },
        copyright: "#97AAC2",
      },
      fontFamily: {
        inter: ['"Inter"', "sans-serif"], // std
        weird: ['"Comic Sans MS"', "cursive"], // Test font
      },
      spacing: {
        "page-gap": "6rem",
        "mobile-gap": "2rem",
        "nav-gap": "5rem",
        "nav-mobile-gap": "1rem",
      },
    },
  },
  plugins: [Typography],
} satisfies Config;
