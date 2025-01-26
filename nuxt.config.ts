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
      domainURL: process.env.DOMAIN_URL,
      apiURL: process.env.API_URL,
    },
  },
});
