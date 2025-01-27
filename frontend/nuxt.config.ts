// https://nuxt.com/docs/api/configuration/nuxt-config
import Aura from "@primevue/themes/aura";

export default defineNuxtConfig({
  compatibilityDate: "2024-11-01",
  devtools: { enabled: true },
  modules: [
    "@primevue/nuxt-module",
    "@nuxt/image",
    "@nuxt/fonts",
    "@nuxtjs/tailwindcss",
  ],
  css: ["primeicons/primeicons.css"],
  primevue: {
    options: {
      theme: {
        preset: Aura,
      },
    },
  },
  runtimeConfig: {
    public: {
      baseURL: process.env.BASE_URL || "http://localhost:3000",
      apiURL: process.env.API_URL || "http://localhost:8000/api", // laravel url
      apiVersion: process.env.API_VERSION || "v1",
    },
  },
  image: {
    dir: "public",
    domains: ["localhost", "0.0.0.0"],
  },
  // https://stackoverflow.com/questions/76474128/how-to-start-a-nuxt-3-project-on-a-specific-ip-address
  devServer: {
    host: process.env.HOST || "0.0.0.0",
    port: Number(process.env.PORT) || 3000,
  },
});
