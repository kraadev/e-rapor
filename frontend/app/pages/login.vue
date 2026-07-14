<template>
  <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
      <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Login eRapor
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600">
          Sistem Management Rapor Digital
        </p>
      </div>
      
      <!-- Alert Success -->
      <div v-if="successMessage" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
        {{ successMessage }}
      </div>

      <!-- Alert Error -->
      <div v-if="loginError" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
        {{ loginError }}
      </div>

      <form class="mt-8 space-y-6" @submit.prevent="handleLogin">
        <div class="rounded-md shadow-sm -space-y-px">
          <div>
            <label for="email-address" class="sr-only">Email address</label>
            <input
              id="email-address"
              v-model="form.email"
              name="email"
              type="email"
              autocomplete="email"
              required
              class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
              placeholder="Email address"
            >
          </div>
          <div>
            <label for="password" class="sr-only">Password</label>
            <input
              id="password"
              v-model="form.password"
              name="password"
              type="password"
              autocomplete="current-password"
              required
              class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
              placeholder="Password"
            >
          </div>
        </div>

        <div>
          <button
            type="submit"
            :disabled="loading"
            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 disabled:bg-gray-400 disabled:cursor-not-allowed"
          >
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              <svg class="h-5 w-5 text-blue-500 group-hover:text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
              </svg>
            </span>
            <span v-if="loading">Memproses...</span>
            <span v-else>Masuk</span>
          </button>
        </div>

        <!-- Demo Credentials -->
        <div class="text-center">
          <p class="text-sm text-gray-600">
            <strong>Demo Credentials:</strong><br>
            Email: admin@example.com<br>
            Password: password123
          </p>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
// Import store
import { useAuthStore } from '~/store/auth'
const authStore = useAuthStore()

// Define page meta - no auth checks on login page
definePageMeta({})

const form = ref({
  email: '',
  password: ''
})

const loading = ref(false)
const loginError = ref('')
const successMessage = ref('')

// Check jika ada success message dari redirect (setelah logout)
onMounted(() => {
  const route = useRoute()
  if (route.query.message === 'logout_success') {
    successMessage.value = 'Anda telah berhasil logout.'
  }
})

async function handleLogin() {
  loading.value = true
  loginError.value = ''
  successMessage.value = ''

  try {
    console.log('Memulai proses login...')
    
    // Login melalui auth store
    await authStore.login(form.value)
    
    console.log('Login berhasil, checking role...')
    console.log('User role:', authStore.user?.role)
    
    // REDIRECT BERDASARKAN ROLE
    if (authStore.user?.role === 'Administrator') {
      console.log('Redirecting to admin dashboard')
      return navigateTo('/dashboard/admin')
    }
    if (authStore.user?.role === 'Guru') {
      console.log('Redirecting to guru dashboard')
      return navigateTo('/dashboard/guru')
    }

    // default fallback
    console.log('Redirecting to default dashboard')
    return navigateTo('/dashboard')

  } catch (error) {
    console.error('Error login:', error)
    
    if (error.message) {
      loginError.value = error.message
    } else if (error.errors?.email) {
      loginError.value = error.errors.email[0]
    } else {
      loginError.value = 'Login gagal. Periksa email dan password Anda.'
    }
  } finally {
    loading.value = false
  }
}
</script>