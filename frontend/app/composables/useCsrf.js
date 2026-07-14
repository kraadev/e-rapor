export const useCsrf = () => {
  const getCsrfToken = async () => {
    try {
      const { $config } = useNuxtApp()
      
      // Ambil CSRF token dari endpoint Sanctum/cookie
      await $fetch('/sanctum/csrf-cookie', {
        baseURL: $config.public.apiBase || 'http://localhost:8000',
        credentials: 'include',
        headers: {
          'Accept': 'application/json',
        }
      })
      
      console.log('CSRF token berhasil diambil')
      return true
    } catch (error) {
      console.error('Gagal mengambil CSRF token:', error)
      return false
    }
  }

  const getCsrfTokenFromCookie = () => {
    if (process.client) {
      const name = 'XSRF-TOKEN='
      const decodedCookie = decodeURIComponent(document.cookie)
      const ca = decodedCookie.split(';')
      for (let i = 0; i < ca.length; i++) {
        let c = ca[i]
        while (c.charAt(0) === ' ') {
          c = c.substring(1)
        }
        if (c.indexOf(name) === 0) {
          return c.substring(name.length, c.length)
        }
      }
    }
    return ''
  }

  return {
    getCsrfToken,
    getCsrfTokenFromCookie
  }
}