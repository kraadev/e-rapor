// middleware/guest.js
export default defineNuxtRouteMiddleware((to, from) => {
  const authStore = useAuthStore()
  
  // Initialize auth on client side
  if (process.client) {
    authStore.initializeAuth()
  }
  
  console.log('Guest Middleware - Checking:', {
    path: to.path,
    isAuthenticated: authStore.isAuthenticated
  })
  
  // If user is authenticated and trying to access guest-only pages (like login)
  if (authStore.isAuthenticated) {
    console.log('User already authenticated, redirecting to dashboard')
    return navigateTo('/dashboard')
  }
})