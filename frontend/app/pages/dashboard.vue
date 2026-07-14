<template>
  <div class="min-h-screen bg-gray-50">
    <!-- Sidebar -->
    <div class="w-64 bg-white border-r border-gray-200 flex flex-col fixed h-screen overflow-y-auto left-0 top-0 z-10">
      <!-- Logo/Brand -->
      <div class="p-4 border-b border-gray-200">
        <div class="flex items-center space-x-2">
          <div class="w-8 h-8 bg-blue-600 rounded flex items-center justify-center">
            <span class="text-white font-bold text-sm">E</span>
          </div>
          <span class="font-semibold text-gray-900">E-Rapor</span>
        </div>
      </div>

      <!-- Menu Items -->
      <nav class="flex-1 p-4">
        <ul class="space-y-1">
          <li>
            <NuxtLink to="/dashboard" class="flex items-center space-x-3 px-3 py-2 text-gray-900 bg-gray-100 rounded-md">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
              </svg>
              <span class="text-sm font-medium">Beranda</span>
            </NuxtLink>
          </li>
          <li>
            <a href="#" class="flex items-center space-x-3 px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-md">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
              </svg>
              <span class="text-sm">Kepala Sekolah</span>
            </a>
          </li>
          <li>
            <NuxtLink to="/guru" class="flex items-center space-x-3 px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-md">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
              </svg>
              <span class="text-sm">Guru</span>
            </NuxtLink>
          </li>
          <li>
            <NuxtLink to="/mapel" class="flex items-center space-x-3 px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-md">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
              </svg>
              <span class="text-sm">Mata Pelajaran</span>
            </NuxtLink>
          </li>
          <li>
            <NuxtLink to="/kelas" class="flex items-center space-x-3 px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-md">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
              </svg>
              <span class="text-sm">Kelas</span>
            </NuxtLink>
          </li>
          <li>
            <NuxtLink to="/siswa" class="flex items-center space-x-3 px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-md">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
              </svg>
              <span class="text-sm">Peserta Didik</span>
            </NuxtLink>
          </li>
        </ul>
      </nav>

      <!-- Bottom Menu -->
      <div class="p-4 border-t border-gray-200">
        <ul class="space-y-1">
          <li>
            <a href="#" class="flex items-center space-x-3 px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-md">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
              <span class="text-sm">Pengaturan</span>
            </a>
          </li>
          <li>
            <button 
              @click="handleLogout"
              class="flex items-center space-x-3 px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-md w-full text-left"
            >
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
              </svg>
              <span class="text-sm">Logout</span>
            </button>
          </li>
        </ul>
      </div>
    </div>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col ml-64 min-h-screen">
      <!-- Header -->
      <div class="bg-white border-b border-gray-200 px-8 py-4">
        <div class="flex justify-between items-center">
          <h1 class="text-2xl font-semibold text-gray-900">Beranda</h1>
          <div class="flex items-center space-x-3">
            <span class="text-sm text-gray-600">Halo, {{ authStore.user?.name }}</span>
          </div>
        </div>
      </div>

      <!-- Main Content -->
      <main class="flex-1 overflow-y-auto">
        <!-- Loading State -->
        <div v-if="loading" class="p-8">
          <div class="flex flex-col items-center justify-center py-12">
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600"></div>
            <p class="mt-4 text-gray-600">Memuat data dashboard...</p>
          </div>
        </div>

        <!-- Error State -->
        <div v-else-if="error" class="p-8">
          <div class="bg-red-50 border border-red-200 rounded-lg p-6 text-center">
            <div class="text-red-700 mb-4">
              {{ error }}
            </div>
            <button 
              @click="fetchData"
              class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
            >
              Coba Lagi
            </button>
          </div>
        </div>

        <!-- Success State -->
        <div v-else class="p-8">
          <!-- Welcome Section -->
          <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-6">
            <h2 class="text-xl font-semibold text-gray-900 mb-2">
              Selamat Datang, {{ authStore.user?.name }}! 👋
            </h2>
            <p class="text-gray-600 text-sm">
              Anda berhasil login ke Sistem eRapor. Email: <strong>{{ authStore.user?.email }}</strong>
            </p>
          </div>

          <!-- Quick Stats -->
          <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 mb-6">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
              <div class="flex items-center justify-between mb-2">
                <h3 class="text-sm font-medium text-gray-500">Total Rombel</h3>
                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
              </div>
              <p class="text-3xl font-bold text-gray-900">{{ stats.totalClasses }}</p>
              <p class="text-xs text-gray-500 mt-1">Kelas aktif dalam sistem</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
              <div class="flex items-center justify-between mb-2">
                <h3 class="text-sm font-medium text-gray-500">Total Siswa</h3>
                <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
              </div>
              <p class="text-3xl font-bold text-gray-900">{{ stats.totalStudents }}</p>
              <p class="text-xs text-gray-500 mt-1">Siswa terdaftar</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
              <div class="flex items-center justify-between mb-2">
                <h3 class="text-sm font-medium text-gray-500">Rapor Terbit</h3>
                <svg class="w-8 h-8 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
              </div>
              <p class="text-3xl font-bold text-gray-900">{{ stats.totalReports }}</p>
              <p class="text-xs text-gray-500 mt-1">Rapor yang sudah dibuat</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
              <div class="flex items-center justify-between mb-2">
                <h3 class="text-sm font-medium text-gray-500">Mata Pelajaran</h3>
                <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
              </div>
              <p class="text-3xl font-bold text-gray-900">{{ stats.totalMapels }}</p>
              <p class="text-xs text-gray-500 mt-1">Mapel aktif</p>
            </div>
          </div>

          <!-- Quick Actions -->
          <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
              <button class="flex items-center justify-center px-4 py-3 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Tambah Rombel
              </button>
              <button class="flex items-center justify-center px-4 py-3 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
                Input Nilai
              </button>
              <button class="flex items-center justify-center px-4 py-3 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                </svg>
                Cetak Rapor
              </button>
              <button 
                @click="fetchData"
                class="flex items-center justify-center px-4 py-3 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
              >
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
                Refresh Data
              </button>
            </div>
          </div>

          <!-- Data Preview -->
          <div v-if="showDataPreview" class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
              <h3 class="text-lg font-semibold text-gray-900 mb-4">Rombel Terbaru</h3>
              <div v-if="classes.length > 0" class="space-y-3">
                <div v-for="cls in classes.slice(0, 5)" :key="cls.id" class="flex items-center justify-between py-2 border-b border-gray-100 last:border-0">
                  <span class="text-sm text-gray-700">{{ cls.name || cls.nama || `Rombel ${cls.id}` }}</span>
                  <span class="text-xs text-gray-500">Aktif</span>
                </div>
              </div>
              <div v-else class="text-sm text-gray-500 text-center py-4">
                Tidak ada data rombel
              </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
              <h3 class="text-lg font-semibold text-gray-900 mb-4">Siswa Terbaru</h3>
              <div v-if="students.length > 0" class="space-y-3">
                <div v-for="student in students.slice(0, 5)" :key="student.id" class="flex items-center justify-between py-2 border-b border-gray-100 last:border-0">
                  <span class="text-sm text-gray-700">{{ student.name || student.nama || `Siswa ${student.id}` }}</span>
                  <span class="text-xs text-gray-500">Terdaftar</span>
                </div>
              </div>
              <div v-else class="text-sm text-gray-500 text-center py-4">
                Tidak ada data siswa
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</template>

<script setup>
import { useAuthStore } from '~/store/auth'

// Import store
const authStore = useAuthStore()

// Define page meta untuk protected route
definePageMeta({
  requiresAuth: true
})

// Reactive state
const loading = ref(true)
const error = ref('')
const showDataPreview = ref(true)

// Data arrays
const classes = ref([])
const students = ref([])
const reports = ref([])
const mapels = ref([])

// Stats computed from fetched data
const stats = computed(() => ({
  totalClasses: classes.value.length,
  totalStudents: students.value.length,
  totalReports: reports.value.length,
  totalMapels: mapels.value.length
}))

// Helper untuk normalize API response
const normalizeList = (resp) => {
  if (!resp) return []
  if (Array.isArray(resp)) return resp
  if (resp.data && Array.isArray(resp.data)) return resp.data
  if (resp.items && Array.isArray(resp.items)) return resp.items
  return []
}

// Main data fetching function
const fetchData = async () => {
  loading.value = true
  error.value = ''

  try {
    console.log('Fetching dashboard data...')

    // Reset data sebelum fetch baru
    classes.value = []
    students.value = []
    reports.value = []
    mapels.value = []

    // Fetch data dari API endpoints
    const endpoints = [
      { key: 'classes', url: '/api/rombel' },
      { key: 'students', url: '/api/siswa' },
      { key: 'reports', url: '/api/rapor' },
      { key: 'mapels', url: '/api/mapel' }
    ]

    // Fetch semua data secara parallel
    const promises = endpoints.map(async ({ key, url }) => {
      try {
        const response = await $fetch(url, {
          baseURL: 'http://localhost:8000',
          credentials: 'include',
          headers: {
            'Accept': 'application/json'
          }
        })
        
        const data = normalizeList(response)
        console.log(`Fetched ${key}:`, data.length, 'items')
        return { key, data }
      } catch (err) {
        console.warn(`Failed to fetch ${key}:`, err)
        return { key, data: [], error: err.message }
      }
    })

    const results = await Promise.all(promises)

    // Process results
    results.forEach(({ key, data, error: err }) => {
      if (err) {
        console.warn(`Error loading ${key}:`, err)
      }
      
      switch (key) {
        case 'classes':
          classes.value = data
          break
        case 'students':
          students.value = data
          break
        case 'reports':
          reports.value = data
          break
        case 'mapels':
          mapels.value = data
          break
      }
    })

    console.log('Dashboard data loaded successfully')

  } catch (err) {
    console.error('Error fetching dashboard data:', err)
    error.value = 'Gagal memuat data dashboard: ' + (err.message || 'Terjadi kesalahan')
  } finally {
    loading.value = false
  }
}

// Logout handler
const handleLogout = async () => {
  try {
    await authStore.logout()
  } catch (err) {
    console.error('Logout failed', err)
  }
}

// Initialize on mount
onMounted(async () => {
  await fetchData()
})
</script>