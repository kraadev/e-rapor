// stores/auth.js
import { defineStore } from 'pinia'

export const useAuthStore = defineStore('auth', () => {
  const user = ref(null)
  const token = ref(null)
  const isAuthenticated = ref(false)

  // Computed property untuk role
  const role = computed(() => {
    return user.value?.role || null
  })

  // Check role functions
  const isGuru = computed(() => {
    return role.value === 'guru'
  })

  const isAdmin = computed(() => {
    return role.value === 'admin'
  })

  const isKepalaSekolah = computed(() => {
    return role.value === 'kepala_sekolah'
  })

  const isStaff = computed(() => {
    return role.value === 'staff'
  })

  // Check if user has permission for CRUD operations
  const canCRUD = computed(() => {
    return isAdmin.value || isKepalaSekolah.value || isStaff.value
  })

  // Check if user can view certain page
  const canView = (pageName) => {
    switch (pageName) {
      case 'dashboard':
        return true // All roles can view dashboard
      case 'mata-pelajaran':
        return !isGuru.value // Guru can't view mata pelajaran management
      case 'guru':
        return !isGuru.value // Guru can't view guru management
      case 'kelas':
        return !isGuru.value // Guru can't view kelas management
      case 'siswa':
        return !isGuru.value // Guru can't view siswa management
      case 'nilai':
        return true // All roles can view nilai
      default:
        return true
    }
  }

  // Helper function to get CSRF token from cookie
  const getCsrfToken = () => {
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

  // Ensure CSRF token is available
  const ensureCsrfToken = async () => {
    try {
      console.log('🔐 Ensuring CSRF token...')
      await $fetch('http://localhost:8000/sanctum/csrf-cookie', {
        method: 'GET',
        credentials: 'include',
        mode: 'cors'
      })
      console.log('✅ CSRF token ensured')
    } catch (error) {
      console.error('❌ Failed to get CSRF token:', error)
      throw error
    }
  }

  // Actions
  const login = async (credentials) => {
    try {
      console.log('1. Getting CSRF token...')
      
      // Step 1: Get CSRF cookie
      await ensureCsrfToken()
      
      console.log('2. Attempting login...')
      
      // Get CSRF token from cookie
      const csrfToken = getCsrfToken()
      console.log('CSRF Token:', csrfToken)
      
      // Step 2: Login
      const response = await $fetch('http://localhost:8000/api/login', {
        method: 'POST',
        body: credentials,
        credentials: 'include',
        mode: 'cors',
        headers: {
          'X-XSRF-TOKEN': csrfToken,
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        }
      })
      
      // Save to store
      user.value = response.user
      token.value = response.token
      isAuthenticated.value = true
      
      // Save to localStorage
      if (process.client) {
        localStorage.setItem('auth_user', JSON.stringify(response.user))
        localStorage.setItem('auth_token', response.token)
      }
      
      console.log('✅ Login success! Role:', response.user?.role)
      return response
      
    } catch (error) {
      console.error('❌ Login failed:', error.data || error.message)
      throw error.data || error
    }
  }

  const logout = async () => {
    try {
      if (token.value) {
        const csrfToken = getCsrfToken()
        await $fetch('http://localhost:8000/api/logout', {
          method: 'POST',
          credentials: 'include',
          headers: {
            'X-XSRF-TOKEN': csrfToken,
            'Accept': 'application/json',
            'Authorization': `Bearer ${token.value}`
          }
        })
      }
    } catch (error) {
      console.error('Logout error:', error)
    } finally {
      // Clear store
      user.value = null
      token.value = null
      isAuthenticated.value = false
      
      // Clear localStorage
      if (process.client) {
        localStorage.removeItem('auth_user')
        localStorage.removeItem('auth_token')
      }
      
      await navigateTo('/login?message=logout_success')
    }
  }

  const initializeAuth = () => {
    if (process.client) {
      const savedToken = localStorage.getItem('auth_token')
      const savedUser = localStorage.getItem('auth_user')
      
      if (savedToken && savedUser) {
        token.value = savedToken
        user.value = JSON.parse(savedUser)
        isAuthenticated.value = true
        console.log('✅ Auth initialized from localStorage')
      }
    }
  }

  return {
    user: readonly(user),
    token: readonly(token),
    isAuthenticated: readonly(isAuthenticated),
    role,
    isGuru,
    isAdmin,
    isKepalaSekolah,
    isStaff,
    canCRUD,
    canView,
    login,
    logout,
    initializeAuth,
    ensureCsrfToken,
    getCsrfToken
  }
})