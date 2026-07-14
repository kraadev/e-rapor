// composables/useApi.ts
export const useApi = () => {
  const baseURL = 'http://localhost:3000' // 🔥 GUNAKAN 3000 karena proxy
  
  const $api = $fetch.create({
    baseURL,
    credentials: 'include', // 🔥 PENTING untuk CSRF cookie
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json'
    },
    onRequest({ options }) {
      console.log('API Request:', options.method, options)
    },
    onResponseError({ error }) {
      console.error('API Error:', error)
    }
  })
  
  return {
    $api
  }
}