// middleware/auth.js
import { useAuthStore } from '~/store/auth'

export default defineNuxtRouteMiddleware((to, from) => {
  const authStore = useAuthStore()

  // Initialize auth on client side
  if (process.client) {
    authStore.initializeAuth()
  }

  console.log('Auth Middleware - Checking:', {
    path: to.path,
    requiresAuth: to.meta.requiresAuth,
    isAuthenticated: authStore.isAuthenticated,
    user: authStore.user,
    role: authStore.role
  })

  // ===== AUTHENTICATION CHECK =====
  // Routes that require authentication (dashboard, etc)
  if (to.meta.requiresAuth && !authStore.isAuthenticated) {
    console.log('Redirecting to login: requires auth but not authenticated')
    return navigateTo('/login')
  }

  // Routes that should be accessible only for guests (login page)
  if (to.meta.guest && authStore.isAuthenticated) {
    console.log('Redirecting to dashboard: already authenticated')
    return navigateTo('/dashboard')
  }

  // ===== ROLE-BASED AUTHORIZATION =====
  if (authStore.isAuthenticated) {
    const path = to.path
    
    // ===== RESTRICTIONS FOR GURU ROLE =====
    if (authStore.role === 'guru') {
      // Guru hanya boleh mengakses:
      // 1. Dashboard (/dashboard)
      // 2. Halaman input nilai (/nilai)
      // 3. Halaman profil atau pengaturan pribadi
      
      const allowedPathsForGuru = [
        '/dashboard',
        '/nilai',
        '/nilai/input',
        '/nilai/siswa',
        '/profile',
        '/settings',
        '/logout'
      ]
      
      const isAllowed = allowedPathsForGuru.some(allowedPath => 
        path === allowedPath || path.startsWith(allowedPath + '/')
      )
      
      if (!isAllowed) {
        console.log(`Guru tidak diizinkan mengakses ${path}. Redirect ke /nilai`)
        
        // Jika mencoba akses CRUD pages, redirect ke nilai
        const restrictedCRUDPaths = [
          '/mata-pelajaran',
          '/guru',
          '/kelas',
          '/siswa',
          '/kepala-sekolah'
        ]
        
        if (restrictedCRUDPaths.some(restrictedPath => 
          path.startsWith(restrictedPath)
        )) {
          return navigateTo('/nilai')
        }
        
        // Untuk routes lain yang tidak jelas, redirect ke dashboard
        return navigateTo('/dashboard')
      }
    }
    
    // ===== RESTRICTIONS FOR KEPALA SEKOLAH =====
    if (authStore.role === 'kepala_sekolah') {
      // Kepala sekolah hanya boleh mengakses:
      // 1. Dashboard
      // 2. Halaman khusus kepala sekolah
      // 3. View-only pages (tidak bisa CRUD)
      
      const allowedPathsForKepalaSekolah = [
        '/dashboard',
        '/kepala-sekolah',
        '/laporan',
        '/rapor',
        '/monitoring'
      ]
      
      const isAllowed = allowedPathsForKepalaSekolah.some(allowedPath => 
        path === allowedPath || path.startsWith(allowedPath + '/')
      )
      
      if (!isAllowed) {
        console.log(`Kepala sekolah tidak diizinkan mengakses ${path}`)
        return navigateTo('/kepala-sekolah')
      }
    }
    
    // ===== ALLOW ACCESS TO KELAS AND SISWA FOR ADMIN/STAFF =====
    if (path === '/kelas' || path === '/siswa') {
      // Hanya admin, staff, atau kepala sekolah yang bisa akses
      const allowedRoles = ['admin', 'staff', 'kepala_sekolah']
      if (!allowedRoles.includes(authStore.role)) {
        console.log(`Role ${authStore.role} tidak diizinkan mengakses ${path}`)
        return navigateTo('/dashboard')
      }
    }
  }
})

// Middleware untuk protect CRUD operations
export const requireAdmin = defineNuxtRouteMiddleware((to, from) => {
  const authStore = useAuthStore()
  
  if (process.client) {
    authStore.initializeAuth()
  }
  
  // Hanya admin yang boleh CRUD
  const allowedRoles = ['admin', 'staff']
  
  if (!allowedRoles.includes(authStore.role)) {
    console.log(`Access denied: Role ${authStore.role} cannot perform CRUD operations`)
    return navigateTo('/dashboard')
  }
})

// Middleware untuk guru hanya bisa input nilai
export const requireGuruForNilai = defineNuxtRouteMiddleware((to, from) => {
  const authStore = useAuthStore()
  
  if (process.client) {
    authStore.initializeAuth()
  }
  
  // Hanya guru yang boleh input nilai
  if (authStore.role !== 'guru') {
    console.log(`Access denied: Role ${authStore.role} cannot input nilai`)
    return navigateTo('/dashboard')
  }
})