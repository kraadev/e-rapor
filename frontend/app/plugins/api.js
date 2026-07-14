// plugins/api.js
import axios from 'axios'

export default defineNuxtPlugin((nuxtApp) => {
  const api = axios.create({
    baseURL: 'http://localhost:8000',
    withCredentials: true,
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json',
      'X-Requested-With': 'XMLHttpRequest'
    }
  })

  // Helper function untuk mendapatkan CSRF token dari cookie
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
    return null
  }

  // Helper function untuk mendapatkan auth token
  const getAuthToken = () => {
    if (process.client) {
      return localStorage.getItem('auth_token')
    }
    return null
  }

  // Request interceptor
  api.interceptors.request.use(async (config) => {
    const authToken = getAuthToken()
    const csrfToken = getCsrfTokenFromCookie()

    // Attach auth token
    if (authToken) {
      config.headers.Authorization = `Bearer ${authToken}`
    }

    // Attach CSRF token
    if (csrfToken) {
      config.headers['X-XSRF-TOKEN'] = csrfToken
    }

    console.log('🚀 API Request:', {
      method: config.method?.toUpperCase(),
      url: config.url,
      hasAuth: !!authToken,
      hasCsrf: !!csrfToken
    })

    return config
  }, (error) => {
    console.error('❌ Request interceptor error:', error)
    return Promise.reject(error)
  })

  // Response interceptor
  api.interceptors.response.use(
    (response) => {
      console.log('✅ API Response Success:', {
        status: response.status,
        url: response.config.url
      })
      return response
    },
    async (error) => {
      const originalRequest = error.config

      console.error('❌ API Error:', {
        status: error.response?.status,
        url: originalRequest?.url,
        message: error.response?.data?.message || error.message
      })

      // Handle CSRF token mismatch (419)
      if (error.response?.status === 419 && !originalRequest._retry) {
        console.log('🔄 CSRF token expired, refreshing...')
        originalRequest._retry = true

        try {
          // Refresh CSRF token
          await axios.get('http://localhost:8000/sanctum/csrf-cookie', {
            withCredentials: true
          })
          
          console.log('✅ CSRF token refreshed, retrying request...')
          
          // Update CSRF token header untuk retry
          const newCsrfToken = getCsrfTokenFromCookie()
          if (newCsrfToken) {
            originalRequest.headers['X-XSRF-TOKEN'] = newCsrfToken
          }
          
          // Retry original request
          return api(originalRequest)
        } catch (csrfError) {
          console.error('❌ Failed to refresh CSRF token:', csrfError)
        }
      }

      // Handle token expiry
      if (error.response?.status === 401) {
        console.log('🔒 Token expired, redirecting to login...')
        if (process.client) {
          // Clear auth data
          localStorage.removeItem('auth_user')
          localStorage.removeItem('auth_token')
          // Redirect ke login
          window.location.href = '/login'
        }
      }

      return Promise.reject(error)
    }
  )

  return {
    provide: {
      api
    }
  }
})