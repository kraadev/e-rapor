import tailwindcss from "@tailwindcss/vite";

export default defineNuxtConfig({
  compatibilityDate: "2025-07-15",
  devtools: { enabled: true },
  css: ['@/assets/css/main.css'],
  vite: {
    plugins: [
      tailwindcss(),
    ],
  },
  
  // Pastikan pinia ada di modules
  modules: ['@pinia/nuxt'],

  runtimeConfig: {
    public: {
      apiBase: 'http://localhost:8000'
    }
  },

  nitro: {
    routeRules: {
      '/api/**': {
        proxy: {
          to: 'http://localhost:8000/api/**',
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          }
        }
      },
      '/sanctum/**': {
        proxy: {
          to: 'http://localhost:8000/sanctum/**',
          headers: {
            'Accept': 'application/json'
          }
        }
      }
    }
  },

  devServer: {
    port: 3000
  }
});