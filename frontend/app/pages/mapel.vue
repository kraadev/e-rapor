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
            <NuxtLink to="/dashboard" class="flex items-center space-x-3 px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-md">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
              </svg>
              <span class="text-sm">Beranda</span>
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
            <NuxtLink to="/mata-pelajaran" class="flex items-center space-x-3 px-3 py-2 text-gray-900 bg-gray-100 rounded-md">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
              </svg>
              <span class="text-sm font-medium">Mata Pelajaran</span>
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
          <div>
            <h1 class="text-2xl font-semibold text-gray-900">Mata Pelajaran</h1>
            <p class="text-sm text-gray-500 mt-1">Kelola daftar mata pelajaran dan guru pengajar</p>
          </div>
          <div class="flex items-center space-x-3">
            <button class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
              </svg>
              Ekspor
            </button>
            <button 
              @click="showAddModal = true"
              class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-800"
            >
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
              </svg>
              Tambah
            </button>
          </div>
        </div>
      </div>

      <!-- Main Content -->
      <main class="flex-1 overflow-y-auto p-8">
        <!-- Add/Edit Modal -->
        <div v-if="showAddModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50" @click.self="closeModal">
          <div class="relative top-20 mx-auto p-8 border w-full max-w-2xl shadow-lg rounded-lg bg-white">
            <div class="mb-6">
              <h3 class="text-xl font-semibold text-gray-900">{{ editMode ? 'Edit Mata Pelajaran' : 'Tambah Mata Pelajaran' }}</h3>
            </div>
            
            <form @submit.prevent="handleSubmit" class="space-y-4">
              <!-- Nama Mata Pelajaran -->
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Mata Pelajaran *</label>
                <input
                  v-model="formData.nama_mapel"
                  type="text"
                  required
                  placeholder="Contoh: Matematika"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                  :class="{ 'border-red-300': formErrors.nama_mapel }"
                >
                <p v-if="formErrors.nama_mapel" class="mt-1 text-sm text-red-600">{{ formErrors.nama_mapel }}</p>
              </div>

              <!-- Kode Mata Pelajaran -->
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kode Mata Pelajaran *</label>
                <input
                  v-model="formData.kode_mapel"
                  type="text"
                  required
                  placeholder="Contoh: MTK"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                  :class="{ 'border-red-300': formErrors.kode_mapel }"
                >
                <p v-if="formErrors.kode_mapel" class="mt-1 text-sm text-red-600">{{ formErrors.kode_mapel }}</p>
              </div>

              <!-- Fase -->
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Fase</label>
                <select
                  v-model="formData.fase"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
                  <option value="">Pilih Fase</option>
                  <option value="Fase A">Fase A</option>
                  <option value="Fase B">Fase B</option>
                  <option value="Fase C">Fase C</option>
                  <option value="Fase D">Fase D</option>
                  <option value="Fase E">Fase E</option>
                  <option value="Fase F">Fase F</option>
                </select>
              </div>

              <!-- Guru Pengajar -->
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Guru Pengajar</label>
                <div class="mt-1 space-y-2">
                  <div v-if="loadingGurus" class="text-sm text-gray-500 italic">
                    <div class="flex items-center">
                      <svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                      </svg>
                      Memuat data guru...
                    </div>
                  </div>
                  <div v-else-if="guruOptions.length === 0" class="text-sm text-gray-500 italic">
                    Tidak ada guru tersedia
                  </div>
                  <div v-else class="space-y-2 max-h-60 overflow-y-auto p-2 border border-gray-200 rounded-md">
                    <div v-for="guru in guruOptions" :key="guru.value" class="flex items-center">
                      <input
                        :id="`guru-${guru.value}`"
                        v-model="formData.guru_ids"
                        :value="guru.value"
                        type="checkbox"
                        class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                      >
                      <label :for="`guru-${guru.value}`" class="ml-3 text-sm text-gray-700 flex flex-col">
                        <span class="font-medium">{{ guru.label }}</span>
                        <span class="text-gray-500 text-xs">{{ guru.email }}</span>
                        <span v-if="guru.wali_kelas" class="text-blue-600 text-xs mt-1">
                          <svg class="w-3 h-3 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                          </svg>
                          Wali {{ guru.wali_kelas }}
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
                <p class="mt-1 text-xs text-gray-500">Pilih guru yang akan mengajar mata pelajaran ini</p>
              </div>

              <!-- Error Message -->
              <div v-if="formError" class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded">
                <div class="flex items-center">
                  <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                  <span class="font-medium">Kesalahan Validasi:</span>
                </div>
                <p class="mt-1 text-sm">{{ formError }}</p>
              </div>

              <!-- Success Message -->
              <div v-if="formSuccess" class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded">
                <div class="flex items-center">
                  <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                  <span class="font-medium">Sukses!</span>
                </div>
                <p class="mt-1 text-sm">{{ formSuccess }}</p>
              </div>

              <!-- Buttons -->
              <div class="flex justify-end space-x-3 pt-4">
                <button
                  type="button"
                  @click="closeModal"
                  class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                >
                  Batal
                </button>
                <button
                  type="submit"
                  :disabled="submitting"
                  class="px-6 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 disabled:bg-gray-400 disabled:cursor-not-allowed"
                >
                  {{ submitting ? 'Menyimpan...' : (editMode ? 'Update' : 'Simpan') }}
                </button>
              </div>
            </form>
          </div>
        </div>

        <!-- Search Bar -->
        <div class="mb-6">
          <div class="relative">
            <input
              v-model="searchQuery"
              type="text"
              placeholder="Cari nama mata pelajaran, kode, atau nama guru..."
              class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              @input="handleSearch"
            >
            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
          </div>
        </div>

        <!-- Statistics -->
        <div v-if="!loading && mapelList.length > 0" class="mb-6 grid grid-cols-1 md:grid-cols-4 gap-4">
          <div class="bg-white p-4 rounded-lg shadow border border-gray-200">
            <div class="flex items-center">
              <div class="p-2 bg-blue-100 rounded-lg">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-sm text-gray-500">Total Mapel</p>
                <p class="text-2xl font-semibold text-gray-900">{{ statistics.total_mapels || 0 }}</p>
              </div>
            </div>
          </div>
          <div class="bg-white p-4 rounded-lg shadow border border-gray-200">
            <div class="flex items-center">
              <div class="p-2 bg-green-100 rounded-lg">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-sm text-gray-500">Mapel dengan Guru</p>
                <p class="text-2xl font-semibold text-green-600">{{ statistics.mapels_with_guru || 0 }}</p>
              </div>
            </div>
          </div>
          <div class="bg-white p-4 rounded-lg shadow border border-gray-200">
            <div class="flex items-center">
              <div class="p-2 bg-yellow-100 rounded-lg">
                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-sm text-gray-500">Mapel tanpa Guru</p>
                <p class="text-2xl font-semibold text-yellow-600">{{ statistics.mapels_without_guru || 0 }}</p>
              </div>
            </div>
          </div>
          <div class="bg-white p-4 rounded-lg shadow border border-gray-200">
            <div class="flex items-center">
              <div class="p-2 bg-purple-100 rounded-lg">
                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-sm text-gray-500">Persentase</p>
                <p class="text-2xl font-semibold text-purple-600">{{ statistics.percentage_with_guru || 0 }}%</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Loading State -->
        <div v-if="loading" class="flex justify-center items-center py-12">
          <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600"></div>
        </div>

        <!-- Error State -->
        <div v-else-if="error" class="bg-red-50 border border-red-200 rounded-lg p-6 text-center">
          <div class="flex flex-col items-center">
            <svg class="w-12 h-12 text-red-400 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <p class="text-red-700 mb-4">{{ error }}</p>
            <button 
              @click="fetchMapel"
              class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700"
            >
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
              </svg>
              Coba Lagi
            </button>
          </div>
        </div>

        <!-- Table -->
        <div v-else class="bg-white rounded-lg shadow overflow-hidden">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Mata Pelajaran</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fase</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Guru Pengajar</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr v-for="(mapel, index) in filteredMapel" :key="mapel.id" class="hover:bg-gray-50">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                  {{ index + 1 }}.
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                    {{ mapel.kode_mapel || '-' }}
                  </span>
                </td>
                <td class="px-6 py-4">
                  <div class="text-sm font-medium text-gray-900">{{ mapel.nama_mapel }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                    {{ mapel.fase || '-' }}
                  </span>
                </td>
                <td class="px-6 py-4">
                  <div class="space-y-1">
                    <div v-if="mapel.gurus && mapel.gurus.length > 0">
                      <div v-for="guru in mapel.gurus" :key="guru.id" class="flex items-center text-sm text-gray-600">
                        <div class="flex-shrink-0 h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-700 text-xs font-medium mr-2">
                          {{ getInitials(guru.name) }}
                        </div>
                        <div>
                          <div class="font-medium">{{ guru.name }}</div>
                          <div v-if="guru.wali_kelas" class="text-xs text-blue-600">
                            Wali {{ guru.wali_kelas }}
                          </div>
                        </div>
                      </div>
                    </div>
                    <div v-else class="text-sm text-gray-400 italic">
                      <div class="flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Belum ada guru
                      </div>
                    </div>
                    <div v-if="mapel.gurus && mapel.gurus.length > 0" class="text-xs text-gray-500 mt-2">
                      Total: {{ mapel.gurus.length }} guru
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                  <div class="flex space-x-2">
                    <button 
                      @click="editMapel(mapel)"
                      class="inline-flex items-center px-3 py-1 border border-blue-300 text-blue-700 bg-blue-50 rounded-md hover:bg-blue-100 text-xs font-medium"
                    >
                      <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                      </svg>
                      Edit
                    </button>
                    <button 
                      @click="deleteMapel(mapel)"
                      class="inline-flex items-center px-3 py-1 border border-red-300 text-red-700 bg-red-50 rounded-md hover:bg-red-100 text-xs font-medium"
                    >
                      <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                      </svg>
                      Hapus
                    </button>
                    <button 
                      @click="manageGurus(mapel)"
                      class="inline-flex items-center px-3 py-1 border border-green-300 text-green-700 bg-green-50 rounded-md hover:bg-green-100 text-xs font-medium"
                      title="Kelola Guru Pengajar"
                    >
                      <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                      </svg>
                      Guru
                    </button>
                  </div>
                </td>
              </tr>
              <tr v-if="filteredMapel.length === 0">
                <td colspan="6" class="px-6 py-8 text-center text-gray-500">
                  <div class="flex flex-col items-center">
                    <svg class="w-12 h-12 text-gray-400 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="text-gray-600">Tidak ada data mata pelajaran ditemukan</p>
                    <p class="text-sm text-gray-500 mt-1">Coba ubah kata kunci pencarian</p>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>


        </div>

        <!-- Manage Gurus Modal -->
        <div v-if="showManageGurusModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50" @click.self="closeManageGurusModal">
          <div class="relative top-20 mx-auto p-8 border w-full max-w-3xl shadow-lg rounded-lg bg-white">
            <div class="mb-6">
              <h3 class="text-xl font-semibold text-gray-900">Kelola Guru Pengajar</h3>
              <p class="text-sm text-gray-500 mt-1">{{ currentMapel?.nama_mapel }} ({{ currentMapel?.kode_mapel }})</p>
            </div>
            
            <div v-if="loadingManageGurus" class="text-center py-8">
              <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600 mx-auto"></div>
              <p class="text-gray-500 mt-2">Memuat data guru...</p>
            </div>
            
            <div v-else>
              <!-- Current Gurus -->
              <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-900 mb-3">Guru yang Mengajar</h4>
                <div v-if="currentGurus.length === 0" class="text-gray-500 italic text-sm">
                  Belum ada guru yang ditugaskan untuk mata pelajaran ini
                </div>
                <div v-else class="space-y-2">
                  <div v-for="guru in currentGurus" :key="guru.id" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg border border-gray-200">
                    <div class="flex items-center">
                      <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-700 font-medium">
                        {{ getInitials(guru.name) }}
                      </div>
                      <div class="ml-3">
                        <div class="font-medium text-gray-900">{{ guru.name }}</div>
                        <div class="text-sm text-gray-500">{{ guru.email }}</div>
                        <div v-if="guru.wali_kelas" class="text-xs text-blue-600 mt-1">
                          Wali {{ guru.wali_kelas }}
                        </div>
                      </div>
                    </div>
                    <button 
                      @click="removeGuruFromMapel(guru)"
                      class="text-red-600 hover:text-red-900 text-sm font-medium"
                    >
                      Hapus
                    </button>
                  </div>
                </div>
              </div>

              <!-- Available Gurus -->
              <div>
                <h4 class="text-lg font-medium text-gray-900 mb-3">Tambah Guru Pengajar</h4>
                <div v-if="availableGurus.length === 0" class="text-gray-500 italic text-sm">
                  Semua guru sudah mengajar mata pelajaran ini
                </div>
                <div v-else class="space-y-2 max-h-64 overflow-y-auto">
                  <div v-for="guru in availableGurus" :key="guru.id" class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-lg border border-gray-200">
                    <div class="flex items-center">
                      <div class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 flex items-center justify-center text-green-700 font-medium">
                        {{ getInitials(guru.name) }}
                      </div>
                      <div class="ml-3">
                        <div class="font-medium text-gray-900">{{ guru.name }}</div>
                        <div class="text-sm text-gray-500">{{ guru.email }}</div>
                        <div v-if="guru.wali_kelas" class="text-xs text-blue-600 mt-1">
                          Wali {{ guru.wali_kelas }}
                        </div>
                      </div>
                    </div>
                    <button 
                      @click="addGuruToMapel(guru)"
                      class="text-blue-600 hover:text-blue-900 text-sm font-medium"
                    >
                      Tambah
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-end space-x-3 pt-6 mt-6 border-t border-gray-200">
              <button
                type="button"
                @click="closeManageGurusModal"
                class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
              >
                Tutup
              </button>
              <button
                v-if="currentGurus.length > 0"
                @click="saveGurus"
                :disabled="savingGurus"
                class="px-6 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 disabled:bg-gray-400 disabled:cursor-not-allowed"
              >
                {{ savingGurus ? 'Menyimpan...' : 'Simpan Perubahan' }}
              </button>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</template>

<script setup>
import { useAuthStore } from '~/store/auth'

const authStore = useAuthStore()
const { $api } = useNuxtApp()

definePageMeta({
  requiresAuth: true
})

// State management
const loading = ref(true)
const loadingGurus = ref(false)
const error = ref('')
const searchQuery = ref('')
const showAddModal = ref(false)
const showManageGurusModal = ref(false)
const mapelList = ref([])
const editMode = ref(false)
const submitting = ref(false)
const formError = ref('')
const formSuccess = ref('')
const editingId = ref(null)
const currentMapel = ref(null)
const currentGurus = ref([])
const availableGurus = ref([])
const loadingManageGurus = ref(false)
const savingGurus = ref(false)
const guruOptions = ref([])



// Form data
const formData = ref({
  nama_mapel: '',
  kode_mapel: '',
  fase: '',
  guru_ids: []
})

// Statistics
const statistics = ref({
  total_mapels: 0,
  mapels_with_guru: 0,
  mapels_without_guru: 0,
  percentage_with_guru: 0
})

// Form errors
const formErrors = ref({
  nama_mapel: '',
  kode_mapel: ''
})

// Helper function untuk mendapatkan inisial nama
const getInitials = (name) => {
  if (!name) return '??'
  return name.split(' ')
    .map(word => word[0])
    .join('')
    .toUpperCase()
    .substring(0, 2)
}

// Filtered mapel based on search and pagination
const filteredMapel = computed(() => {
  let filtered = mapelList.value
  
  // Apply search filter
  if (searchQuery.value) {
    const query = searchQuery.value.toLowerCase()
    filtered = filtered.filter(mapel => 
      mapel.nama_mapel.toLowerCase().includes(query) ||
      (mapel.kode_mapel && mapel.kode_mapel.toLowerCase().includes(query)) ||
      (mapel.fase && mapel.fase.toLowerCase().includes(query)) ||
      (mapel.gurus && mapel.gurus.some(guru => 
        guru.name.toLowerCase().includes(query) ||
        guru.email.toLowerCase().includes(query)
      ))
    )
  }
  
  return filtered
})



// Fetch all gurus for dropdown
const fetchAllGurus = async () => {
  loadingGurus.value = true
  try {
    console.log('🔍 Fetching all gurus for dropdown...')
    
    const response = await $api.get('/api/mapels/gurus/all', {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })
    
    if (response.data.success) {
      guruOptions.value = response.data.data
      console.log('✅ Guru options loaded:', guruOptions.value.length)
    }
  } catch (err) {
    console.error('❌ Error fetching gurus:', err)
  } finally {
    loadingGurus.value = false
  }
}

// Fetch mata pelajaran data from API
const fetchMapel = async () => {
  loading.value = true
  error.value = ''
  
  try {
    console.log('🔍 Fetching mata pelajaran data...')
    
    await authStore.ensureCsrfToken()
    
    const response = await $api.get('/api/mapels', {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })
    
    console.log('✅ API Response received:', response.data)
    
    // Handle response
    if (response.data.success) {
      mapelList.value = response.data.data
      statistics.value = response.data.statistics || {}
      console.log('✅ Mata pelajaran data loaded:', mapelList.value.length, 'items')
    } else {
      throw new Error(response.data.message || 'Gagal memuat data')
    }
    
  } catch (err) {
    console.error('❌ Error fetching mata pelajaran:', err)
    
    // Handle specific error cases
    if (err.response?.status === 404) {
      error.value = 'Endpoint API tidak ditemukan. Pastikan route mapels sudah terdaftar.'
    } else if (err.response?.status === 500) {
      error.value = 'Server error. Pastikan tabel mapels sudah dibuat di database.'
    } else if (err.code === 'ECONNREFUSED') {
      error.value = 'Tidak dapat terhubung ke server. Pastikan backend Laravel berjalan.'
    } else {
      error.value = 'Gagal memuat data mata pelajaran: ' + (err.response?.data?.message || err.message || 'Terjadi kesalahan')
    }
    
  } finally {
    loading.value = false
  }
}

// Fetch statistics
const fetchStatistics = async () => {
  try {
    const response = await $api.get('/api/mapels/statistics', {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })
    
    if (response.data.success) {
      statistics.value = response.data.data
    }
  } catch (err) {
    console.error('❌ Error fetching statistics:', err)
  }
}

// Close modal
const closeModal = () => {
  showAddModal.value = false
  editMode.value = false
  editingId.value = null
  formError.value = ''
  formSuccess.value = ''
  formErrors.value = {
    nama_mapel: '',
    kode_mapel: ''
  }
  
  setTimeout(() => {
    formData.value = {
      nama_mapel: '',
      kode_mapel: '',
      fase: '',
      guru_ids: []
    }
  }, 300)
}

// Close manage gurus modal
const closeManageGurusModal = () => {
  showManageGurusModal.value = false
  currentMapel.value = null
  currentGurus.value = []
  availableGurus.value = []
}

// Validate form
const validateForm = () => {
  let isValid = true
  formErrors.value = { 
    nama_mapel: '',
    kode_mapel: ''
  }

  if (!formData.value.nama_mapel.trim()) {
    formErrors.value.nama_mapel = 'Nama mata pelajaran wajib diisi'
    isValid = false
  }

  if (!formData.value.kode_mapel.trim()) {
    formErrors.value.kode_mapel = 'Kode mata pelajaran wajib diisi'
    isValid = false
  }

  return isValid
}

// Edit mapel
const editMapel = async (mapel) => {
  editMode.value = true
  editingId.value = mapel.id
  formData.value = {
    nama_mapel: mapel.nama_mapel,
    kode_mapel: mapel.kode_mapel || '',
    fase: mapel.fase || '',
    guru_ids: mapel.gurus ? mapel.gurus.map(g => g.id) : []
  }
  
  // Load guru options if not loaded yet
  if (guruOptions.value.length === 0) {
    await fetchAllGurus()
  }
  
  showAddModal.value = true
}

// Delete mapel
const deleteMapel = async (mapel) => {
  if (!confirm(`Apakah Anda yakin ingin menghapus mata pelajaran "${mapel.nama_mapel}"?`)) {
    return
  }

  try {
    console.log('🗑️ Deleting mata pelajaran:', mapel.id)
    
    await authStore.ensureCsrfToken()
    
    await $api.delete(`/api/mapels/${mapel.id}`, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })

    console.log('✅ Mata pelajaran deleted successfully')
    await fetchMapel()
    
  } catch (err) {
    console.error('❌ Error deleting mata pelajaran:', err)
    alert('Gagal menghapus mata pelajaran: ' + (err.response?.data?.message || err.message))
  }
}

// Manage gurus for mapel
const manageGurus = async (mapel) => {
  currentMapel.value = mapel
  loadingManageGurus.value = true
  
  try {
    // Fetch current gurus
    const gurusResponse = await $api.get(`/api/mapels/${mapel.id}/gurus`, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })
    
    if (gurusResponse.data.success) {
      currentGurus.value = gurusResponse.data.data
    }
    
    // Fetch available gurus
    const availableResponse = await $api.get(`/api/mapels/${mapel.id}/available-gurus`, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })
    
    if (availableResponse.data.success) {
      availableGurus.value = availableResponse.data.data
    }
    
    showManageGurusModal.value = true
    
  } catch (err) {
    console.error('❌ Error fetching gurus for mapel:', err)
    alert('Gagal memuat data guru: ' + (err.response?.data?.message || err.message))
  } finally {
    loadingManageGurus.value = false
  }
}

// Add guru to mapel
const addGuruToMapel = async (guru) => {
  if (!currentMapel.value) return
  
  try {
    const response = await $api.post(`/api/mapels/${currentMapel.value.id}/gurus`, {
      guru_id: guru.id
    }, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })
    
    if (response.data.success) {
      // Move guru from available to current
      currentGurus.value.push(guru)
      availableGurus.value = availableGurus.value.filter(g => g.id !== guru.id)
    }
    
  } catch (err) {
    console.error('❌ Error adding guru to mapel:', err)
    alert('Gagal menambahkan guru: ' + (err.response?.data?.message || err.message))
  }
}

// Remove guru from mapel
const removeGuruFromMapel = async (guru) => {
  if (!currentMapel.value) return
  
  try {
    const response = await $api.delete(`/api/mapels/${currentMapel.value.id}/gurus/${guru.id}`, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })
    
    if (response.data.success) {
      // Move guru from current to available
      currentGurus.value = currentGurus.value.filter(g => g.id !== guru.id)
      availableGurus.value.push(guru)
    }
    
  } catch (err) {
    console.error('❌ Error removing guru from mapel:', err)
    alert('Gagal menghapus guru: ' + (err.response?.data?.message || err.message))
  }
}

// Save gurus changes
const saveGurus = async () => {
  if (!currentMapel.value) return
  
  savingGurus.value = true
  try {
    const guruIds = currentGurus.value.map(g => g.id)
    
    const response = await $api.put(`/api/mapels/${currentMapel.value.id}/gurus/sync`, {
      guru_ids: guruIds
    }, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })
    
    if (response.data.success) {
      alert('Data guru pengajar berhasil disimpan!')
      closeManageGurusModal()
      await fetchMapel() // Refresh data
    }
    
  } catch (err) {
    console.error('❌ Error saving gurus:', err)
    alert('Gagal menyimpan data guru: ' + (err.response?.data?.message || err.message))
  } finally {
    savingGurus.value = false
  }
}

// Handle form submit
const handleSubmit = async () => {
  if (!validateForm()) {
    return
  }

  submitting.value = true
  formError.value = ''
  formSuccess.value = ''
  
  try {
    console.log('🔄 Starting form submission...')
    
    await authStore.ensureCsrfToken()
    
    const url = editMode.value ? `/api/mapels/${editingId.value}` : '/api/mapels'
    const method = editMode.value ? 'put' : 'post'

    const requestData = {
      nama_mapel: formData.value.nama_mapel.trim(),
      kode_mapel: formData.value.kode_mapel.trim(),
      fase: formData.value.fase || null,
      guru_ids: formData.value.guru_ids || []
    }

    console.log('📦 Prepared data:', requestData)
    console.log('Sending request to:', url)
    
    const response = await $api[method](url, requestData, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      }
    })
    
    if (response.data.success) {
      console.log('✅ Mata pelajaran saved successfully:', response.data)
      formSuccess.value = editMode.value ? 'Data mata pelajaran berhasil diupdate!' : 'Mata pelajaran berhasil ditambahkan!'
      
      setTimeout(async () => {
        await fetchMapel()
        closeModal()
      }, 1500)
    } else {
      throw new Error(response.data.message || 'Gagal menyimpan data')
    }
    
  } catch (err) {
    console.error('❌ Error saving mata pelajaran:', err)
    
    // Handle network errors
    if (err.code === 'ECONNREFUSED') {
      formError.value = 'Tidak dapat terhubung ke server. Pastikan backend Laravel berjalan di port 8000.'
      return
    }
    
    if (err.response?.status === 502) {
      formError.value = 'Bad Gateway - Backend server tidak merespon.'
      return
    }
    
    // Handle validation errors
    if (err.response?.data?.errors) {
      const errors = err.response.data.errors
      const errorMessages = []
      for (const field in errors) {
        errorMessages.push(...errors[field])
      }
      formError.value = 'Validasi gagal: ' + errorMessages.join(', ')
    } else if (err.response?.data?.message) {
      formError.value = err.response.data.message
    } else {
      formError.value = err.message || 'Gagal menyimpan data mata pelajaran'
    }
  } finally {
    submitting.value = false
  }
}

// Handle search input
const handleSearch = () => {
  currentPage.value = 1 // Reset to first page when searching
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
  console.log('🚀 Initializing mata pelajaran page...')
  
  if (process.client) {
    authStore.initializeAuth()
    await authStore.ensureCsrfToken()
    await Promise.all([
      fetchMapel(),
      fetchAllGurus()
    ])
  }
})
</script>

<style scoped>
/* Custom scrollbar for dropdown */
.max-h-60::-webkit-scrollbar {
  width: 6px;
}

.max-h-60::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 3px;
}

.max-h-60::-webkit-scrollbar-thumb {
  background: #cbd5e0;
  border-radius: 3px;
}

.max-h-60::-webkit-scrollbar-thumb:hover {
  background: #a0aec0;
}

/* Smooth transitions */
.fixed {
  transition: opacity 0.3s ease-in-out;
}

/* Animation for modal */
@keyframes modalFadeIn {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.relative.top-20.mx-auto {
  animation: modalFadeIn 0.3s ease-out;
}
</style>