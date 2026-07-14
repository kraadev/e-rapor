<template>
  <div class="min-h-screen bg-gray-50">
    <!-- Sidebar (tetap sama) -->
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
            <NuxtLink to="/mapel" class="flex items-center space-x-3 px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-md">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
              </svg>
              <span class="text-sm">Mata Pelajaran</span>
            </NuxtLink>
          </li>
          <li>
            <NuxtLink to="/kelas" class="flex items-center space-x-3 px-3 py-2 text-gray-900 bg-gray-50 rounded-md">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
              </svg>
              <span class="text-sm font-medium">Kelas</span>
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
            <h1 class="text-2xl font-semibold text-gray-900">{{ showDetail ? 'Detail Kelas' : 'Kelas' }}</h1>
            <p class="text-sm text-gray-500 mt-1">
              {{ showDetail ? `Daftar siswa kelas ${selectedRombel?.nama_kelas}` : 'Daftar rombongan belajar dari siswa yang dikelola pada satu kelas.' }}
            </p>
          </div>
          <div class="flex items-center space-x-3">
            <button 
              v-if="showDetail"
              @click="backToKelas"
              class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"
            >
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
              </svg>
              Kembali ke Daftar Kelas
            </button>
            <button 
              v-if="!showDetail"
              class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"
            >
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
              </svg>
              Ekspor
            </button>
            <button 
              v-if="!showDetail"
              @click="openAddModal"
              class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-800"
            >
              + Tambah Kelas
            </button>
          </div>
        </div>
      </div>

      <!-- Main Content -->
      <main class="flex-1 overflow-y-auto p-8">
        <!-- Add/Edit Rombel Modal -->
        <div v-if="showAddModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50" @click.self="closeModal">
          <div class="relative top-20 mx-auto p-8 border w-full max-w-2xl shadow-lg rounded-lg bg-white">
            <div class="mb-6">
              <h3 class="text-xl font-semibold text-gray-900">{{ editMode ? 'Edit Kelas' : 'Tambah Kelas' }}</h3>
              <p class="text-sm text-gray-500 mt-1">
                {{ editMode ? 'Edit data kelas yang sudah ada.' : 'Tambahkan kelas baru dengan memilih wali kelas dari daftar guru.' }}
              </p>
            </div>
            
            <div class="space-y-4">
              <!-- Wali Kelas dengan Auto-complete -->
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                  Wali Kelas <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                  <input
                    v-model="formData.wali_kelas"
                    type="text"
                    placeholder="Ketik nama guru..."
                    @input="searchGuru"
                    @focus="showGuruDropdown = true"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    :class="{'border-green-500': selectedGuru, 'border-red-500': formData.wali_kelas && !selectedGuru}"
                  >
                  <svg v-if="loadingGurus" class="w-5 h-5 text-gray-400 absolute right-3 top-2.5 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                  </svg>
                  
                  <!-- Dropdown list guru -->
                  <div 
                    v-if="showGuruDropdown && guruSearchResults.length > 0" 
                    class="absolute z-50 mt-1 w-full bg-white border border-gray-300 rounded-md shadow-lg max-h-60 overflow-y-auto"
                  >
                    <div 
                      v-for="guru in guruSearchResults" 
                      :key="guru.id"
                      @click="selectGuru(guru)"
                      class="px-3 py-2 hover:bg-gray-50 cursor-pointer flex items-center justify-between border-b border-gray-100 last:border-b-0"
                    >
                      <div class="flex-1">
                        <div class="font-medium text-gray-900">{{ guru.name }}</div>
                        <div class="text-xs text-gray-500 flex items-center mt-1">
                          <span>{{ guru.email }}</span>
                          <span class="mx-2">•</span>
                          <span :class="guru.role === 'admin' ? 'text-purple-600' : 'text-blue-600'">
                            {{ guru.role === 'admin' ? 'Admin' : 'Guru' }}
                          </span>
                          <span v-if="guru.wali_kelas" class="ml-2 px-1.5 py-0.5 text-xs bg-green-100 text-green-800 rounded">
                            {{ guru.wali_kelas }}
                          </span>
                        </div>
                      </div>
                      <div class="ml-2">
                        <span v-if="guru.wali_kelas" class="px-2 py-1 text-xs bg-green-100 text-green-800 rounded-full whitespace-nowrap">
                          Wali Kelas
                        </span>
                        <span v-else class="px-2 py-1 text-xs bg-gray-100 text-gray-800 rounded-full whitespace-nowrap">
                          Tidak Aktif
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Info messages -->
                <div v-if="formData.wali_kelas && !loadingGurus" class="mt-1">
                  <p v-if="selectedGuru && selectedGuru.wali_kelas" class="text-xs text-green-600 flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Guru ditemukan: {{ selectedGuru.name }} (Wali {{ selectedGuru.wali_kelas }})
                  </p>
                  <p v-else-if="selectedGuru && !selectedGuru.wali_kelas" class="text-xs text-blue-600 flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Guru ditemukan: {{ selectedGuru.name }} (Belum menjadi wali kelas)
                  </p>
                  <p v-else-if="formData.wali_kelas.length >= 2 && guruSearchResults.length === 0" class="text-xs text-yellow-600 flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.346 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                    </svg>
                    Guru tidak ditemukan. Pastikan nama guru terdaftar di sistem.
                  </p>
                </div>
              </div>

              <!-- Kelas (otomatis terisi jika guru sudah punya kelas) -->
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                  Kelas <span class="text-red-500">*</span>
                </label>
                <div class="flex space-x-2">
                  <input
                    v-model="formData.nama_kelas"
                    type="text"
                    placeholder="Contoh: X RPL 1"
                    class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    :class="{'bg-gray-50': autoFillClass}"
                  >
                  <button
                    v-if="autoFillClass && selectedGuru?.wali_kelas"
                    @click="clearAutoFillClass"
                    type="button"
                    class="px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md"
                    title="Hapus kelas otomatis"
                  >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                  </button>
                </div>
                <div class="mt-1 flex items-center space-x-2">
                  <div v-if="autoFillClass && selectedGuru?.wali_kelas" class="text-xs text-blue-600 flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Kelas diisi otomatis dari data guru
                  </div>
                  <div v-if="formData.nama_kelas && !autoFillClass" class="text-xs text-gray-500">
                    Format: [Tingkat] [Jurusan] [Nomor]
                  </div>
                </div>
              </div>

              <!-- Jurusan -->
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                  Jurusan <span class="text-red-500">*</span>
                </label>
                <input
                  v-model="formData.jurusan"
                  type="text"
                  placeholder="Contoh: Rekayasa Perangkat Lunak"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
              </div>

              <!-- Tingkat -->
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Tingkat</label>
                <div class="flex space-x-2">
                  <select
                    v-model="formData.tingkat"
                    class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                  >
                    <option value="">Pilih Tingkat</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                  </select>
                  <button
                    v-if="formData.nama_kelas"
                    @click="autoDetectTingkat"
                    type="button"
                    class="px-4 py-2 text-sm border border-gray-300 rounded-md hover:bg-gray-50 whitespace-nowrap"
                  >
                    Auto-detect
                  </button>
                </div>
                <div v-if="formData.tingkat" class="mt-1 text-xs text-gray-500">
                  Tingkat kelas: <span class="font-medium">{{ formData.tingkat }}</span>
                </div>
              </div>

              <!-- Error Message -->
              <div v-if="formError" class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded">
                <div class="flex items-center">
                  <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                  {{ formError }}
                </div>
              </div>

              <!-- Success Message -->
              <div v-if="formSuccess" class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded">
                <div class="flex items-center">
                  <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                  {{ formSuccess }}
                </div>
              </div>

              <!-- Buttons -->
              <div class="flex justify-end space-x-3 pt-4">
                <button
                  @click="closeModal"
                  class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50"
                >
                  Batal
                </button>
                <button
                  @click="handleSubmit"
                  :disabled="submitting || !formValid"
                  class="px-6 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-800 disabled:bg-gray-400 disabled:cursor-not-allowed"
                >
                  <span v-if="submitting" class="flex items-center">
                    <svg class="w-4 h-4 mr-2 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    Menyimpan...
                  </span>
                  <span v-else>{{ editMode ? 'Update' : 'Simpan' }}</span>
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Add/Edit Siswa Modal -->
        <div v-if="showSiswaModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50" @click.self="closeSiswaModal">
          <div class="relative top-20 mx-auto p-8 border w-full max-w-2xl shadow-lg rounded-lg bg-white">
            <div class="mb-6">
              <h3 class="text-xl font-semibold text-gray-900">{{ editSiswaMode ? 'Edit Siswa' : 'Tambah Siswa' }}</h3>
              <p class="text-sm text-gray-500 mt-1">Kelas: {{ selectedRombel?.nama_kelas }}</p>
            </div>
            
            <div class="space-y-4">
              <!-- NIS -->
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">NIS</label>
                <input
                  v-model="siswaForm.nis"
                  type="text"
                  placeholder="Nomor Induk Siswa"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
              </div>

              <!-- Nama -->
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                <input
                  v-model="siswaForm.nama"
                  type="text"
                  placeholder="Nama Lengkap Siswa"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
              </div>

              <!-- Jenis Kelamin -->
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                <select
                  v-model="siswaForm.jk"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                  <option value="">Pilih Jenis Kelamin</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>

              <!-- Status -->
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <select
                  v-model="siswaForm.status"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                  <option value="aktif">Aktif</option>
                  <option value="lulus">Lulus</option>
                  <option value="pindah">Pindah</option>
                  <option value="dropout">Drop Out</option>
                </select>
              </div>

              <!-- Error Message -->
              <div v-if="siswaFormError" class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded">
                {{ siswaFormError }}
              </div>

              <!-- Success Message -->
              <div v-if="siswaFormSuccess" class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded">
                {{ siswaFormSuccess }}
              </div>

              <!-- Buttons -->
              <div class="flex justify-end space-x-3 pt-4">
                <button
                  @click="closeSiswaModal"
                  class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50"
                >
                  Batal
                </button>
                <button
                  @click="handleSiswaSubmit"
                  :disabled="submittingSiswa"
                  class="px-6 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-800 disabled:bg-gray-400"
                >
                  {{ submittingSiswa ? 'Menyimpan...' : 'Simpan' }}
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Manage Mapel -->
        <div v-if="showManageMapelModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50" @click.self="closeManageMapelModal">
          <div class="relative top-20 mx-auto p-8 border w-full max-w-4xl shadow-lg rounded-lg bg-white">
            <div class="mb-6">
              <h3 class="text-xl font-semibold text-gray-900">Kelola Mata Pelajaran</h3>
              <p class="text-sm text-gray-500 mt-1">Pilih mata pelajaran yang akan diajarkan di kelas {{ selectedRombel?.nama_kelas }}</p>
            </div>
            
            <div v-if="loadingMapels" class="flex justify-center items-center py-12">
              <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600"></div>
              <span class="ml-3 text-gray-600">Memuat data mapel...</span>
            </div>

            <div v-else-if="mapelError" class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded mb-4">
              {{ mapelError }}
              <button 
                @click="fetchAllMapels"
                class="ml-3 text-red-700 hover:text-red-900 underline"
              >
                Coba Lagi
              </button>
            </div>

            <div v-else class="space-y-4">
              <!-- Search Mapel -->
              <div class="relative">
                <input
                  v-model="mapelSearchQuery"
                  type="text"
                  placeholder="Cari mata pelajaran..."
                  class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
              </div>

              <!-- Mapel Stats -->
              <div class="flex items-center justify-between bg-blue-50 px-4 py-3 rounded-lg">
                <div>
                  <span class="text-sm text-gray-600">Total mapel tersedia: </span>
                  <span class="font-medium">{{ allMapels.length }}</span>
                </div>
                <div>
                  <span class="text-sm text-gray-600">Terpilih: </span>
                  <span class="font-medium text-blue-600">{{ selectedMapelIds.length }}</span>
                </div>
              </div>

              <!-- Mapel List -->
              <div class="max-h-96 overflow-y-auto border border-gray-200 rounded-lg">
                <div class="divide-y divide-gray-200">
                  <div 
                    v-for="mapel in filteredMapels" 
                    :key="mapel.id"
                    class="flex items-center justify-between px-4 py-3 hover:bg-gray-50"
                  >
                    <div class="flex items-center space-x-3">
                      <input
                        type="checkbox"
                        :id="`mapel-${mapel.id}`"
                        :value="mapel.id"
                        v-model="selectedMapelIds"
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                      >
                      <label :for="`mapel-${mapel.id}`" class="cursor-pointer">
                        <div class="font-medium text-gray-900">{{ mapel.nama_mapel }}</div>
                        <div class="text-sm text-gray-500">{{ mapel.kode_mapel }} • {{ mapel.fase || 'Fase E' }}</div>
                      </label>
                    </div>
                    <span 
                      class="px-2 py-1 text-xs rounded-full"
                      :class="getFaseBadgeColor(mapel.fase)"
                    >
                      {{ mapel.fase || 'Fase E' }}
                    </span>
                  </div>
                </div>
              </div>

              <!-- Error Message -->
              <div v-if="manageMapelError" class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded">
                {{ manageMapelError }}
              </div>

              <!-- Success Message -->
              <div v-if="manageMapelSuccess" class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded">
                {{ manageMapelSuccess }}
              </div>

              <!-- Buttons -->
              <div class="flex justify-between pt-4">
                <button
                  @click="closeManageMapelModal"
                  class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50"
                >
                  Batal
                </button>
                <div class="space-x-3">
                  <button
                    @click="selectAllMapels"
                    class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50"
                  >
                    Pilih Semua
                  </button>
                  <button
                    @click="deselectAllMapels"
                    class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50"
                  >
                    Hapus Semua
                  </button>
                  <button
                    @click="saveMapels"
                    :disabled="savingMapels"
                    class="px-6 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 disabled:bg-blue-400"
                  >
                    {{ savingMapels ? 'Menyimpan...' : 'Simpan Mapel' }}
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Input Nilai Per Mapel -->
        <div v-if="showNilaiModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50" @click.self="closeNilaiModal">
          <div class="relative top-20 mx-auto p-8 border w-full max-w-md shadow-lg rounded-lg bg-white">
            <div class="mb-6">
              <h3 class="text-xl font-semibold text-gray-900">Input Nilai</h3>
              <p class="text-sm text-gray-500 mt-1">
                {{ selectedSiswaForNilai?.nama }} - {{ selectedMapelForNilai?.nama_mapel }}
              </p>
              <div class="mt-2 text-xs text-gray-500">
                Kode: {{ selectedMapelForNilai?.kode_mapel }} • Fase: {{ selectedMapelForNilai?.fase || 'Fase E' }}
              </div>
            </div>
            
            <div v-if="loadingNilaiForm" class="flex justify-center items-center py-12">
              <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600"></div>
              <span class="ml-3 text-gray-600">Memuat form nilai...</span>
            </div>

            <div v-else class="space-y-6">
              <!-- Informasi Siswa dan Mapel -->
              <div class="bg-blue-50 rounded-lg p-4 mb-4">
                <div class="space-y-3">
                  <div class="flex items-center justify-between">
                    <div>
                      <div class="text-xs text-gray-500">Nama Siswa</div>
                      <div class="font-medium">{{ selectedSiswaForNilai?.nama }}</div>
                    </div>
                    <div>
                      <div class="text-xs text-gray-500">NIS</div>
                      <div class="font-medium">{{ selectedSiswaForNilai?.nis || '-' }}</div>
                    </div>
                  </div>
                  <div>
                    <div class="text-xs text-gray-500">Mata Pelajaran</div>
                    <div class="font-medium">{{ selectedMapelForNilai?.nama_mapel }}</div>
                  </div>
                </div>
              </div>

              <!-- Form Input Nilai -->
              <div class="space-y-4">
                <!-- Nilai -->
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">
                    Nilai (0-100)
                  </label>
                  <input
                    type="number"
                    min="0"
                    max="100"
                    step="0.01"
                    v-model="nilaiForm.nilai"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="0.00"
                    @input="updatePredikat"
                  >
                  <div class="mt-2 flex items-center justify-between">
                    <div class="text-sm text-gray-600">
                      {{ getNilaiPredikat(nilaiForm.nilai) }}
                    </div>
                    <div class="text-xs">
                      <span v-if="nilaiForm.nilai && nilaiForm.nilai >= 90" class="text-green-600 font-medium">Sangat Baik</span>
                      <span v-else-if="nilaiForm.nilai && nilaiForm.nilai >= 80" class="text-blue-600 font-medium">Baik</span>
                      <span v-else-if="nilaiForm.nilai && nilaiForm.nilai >= 70" class="text-yellow-600 font-medium">Cukup</span>
                      <span v-else-if="nilaiForm.nilai && nilaiForm.nilai >= 60" class="text-orange-600 font-medium">Kurang</span>
                      <span v-else-if="nilaiForm.nilai" class="text-red-600 font-medium">Sangat Kurang</span>
                      <span v-else class="text-gray-500">Belum dinilai</span>
                    </div>
                  </div>
                </div>

                <!-- Keterangan -->
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">
                    Keterangan (Opsional)
                  </label>
                  <textarea
                    v-model="nilaiForm.keterangan"
                    rows="3"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Catatan tentang nilai, misal: tugas tidak lengkap, terlambat mengumpulkan, dll."
                  ></textarea>
                  <div class="text-xs text-gray-500 mt-1">
                    {{ nilaiForm.keterangan?.length || 0 }}/255 karakter
                  </div>
                </div>

                <!-- Rata-rata Sekarang -->
                <div v-if="selectedSiswaForNilai?.rata_rata_nilai" class="bg-gray-50 rounded-lg p-3">
                  <div class="text-sm text-gray-600">Rata-rata saat ini:</div>
                  <div class="flex items-center justify-between mt-1">
                    <span class="text-lg font-bold text-gray-900">
                      {{ selectedSiswaForNilai?.rata_rata_nilai?.toFixed(2) }}
                    </span>
                    <span class="px-2 py-1 text-xs rounded-full" :class="getRataRataBadgeClass(selectedSiswaForNilai?.rata_rata_nilai)">
                      {{ getNilaiPredikat(selectedSiswaForNilai?.rata_rata_nilai) }}
                    </span>
                  </div>
                </div>
              </div>

              <!-- Error Message -->
              <div v-if="nilaiFormError" class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded">
                {{ nilaiFormError }}
              </div>

              <!-- Success Message -->
              <div v-if="nilaiFormSuccess" class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded">
                {{ nilaiFormSuccess }}
              </div>

              <!-- Buttons -->
              <div class="flex justify-end space-x-3 pt-4">
                <button
                  @click="closeNilaiModal"
                  class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50"
                >
                  Batal
                </button>
                <button
                  @click="saveNilai"
                  :disabled="savingNilai"
                  class="px-6 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 disabled:bg-blue-400"
                >
                  {{ savingNilai ? 'Menyimpan...' : 'Simpan Nilai' }}
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Detail Kelas View -->
        <div v-if="showDetail && selectedRombel" class="space-y-6">
          <!-- Header Detail Kelas -->
          <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="px-6 py-6 border-b border-gray-200 bg-blue-50">
              <div class="flex justify-between items-start">
                <div>
                  <h2 class="text-2xl font-bold text-gray-900 mb-2">{{ selectedRombel.nama_kelas }}</h2>
                  <div class="flex flex-wrap gap-4">
                    <div class="flex items-center">
                      <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                      </svg>
                      <span class="text-sm text-gray-600">Wali Kelas: <span class="font-medium">{{ selectedRombel.wali_kelas }}</span></span>
                    </div>
                    <div class="flex items-center">
                      <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                      </svg>
                      <span class="text-sm text-gray-600">Jurusan: <span class="font-medium">{{ selectedRombel.jurusan }}</span></span>
                    </div>
                    <div class="flex items-center">
                      <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg>
                      <span class="text-sm text-gray-600">Tingkat: <span class="font-medium">{{ selectedRombel.tingkat || 'X' }}</span></span>
                    </div>
                  </div>
                </div>
                <div class="flex items-center space-x-3">
                  <div class="text-center">
                    <div class="text-2xl font-bold text-blue-600">{{ siswaList.length }}</div>
                    <div class="text-xs text-gray-500">Total Siswa</div>
                  </div>
                  <div class="h-10 w-px bg-gray-300"></div>
                  <div class="text-center">
                    <div class="text-xl font-semibold text-green-600">{{ siswaAktifCount }}</div>
                    <div class="text-xs text-gray-500">Siswa Aktif</div>
                  </div>
                  <div class="h-10 w-px bg-gray-300"></div>
                  <div class="text-center">
                    <div class="text-xl font-semibold text-purple-600">{{ selectedRombel.mapels?.length || 0 }}</div>
                    <div class="text-xs text-gray-500">Mata Pelajaran</div>
                  </div>
                  <div class="h-10 w-px bg-gray-300"></div>
                  <div class="flex space-x-2">
                    <button 
                      @click="openManageMapelModal"
                      class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50"
                    >
                      <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                      </svg>
                      Mapel
                    </button>
                    <button 
                      @click="openAddSiswaModal"
                      class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700"
                    >
                      <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                      </svg>
                      Tambah Siswa
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tabs Navigation -->
            <div class="border-b border-gray-200">
              <nav class="flex -mb-px">
                <button
                  @click="activeTab = 'siswa'"
                  :class="[
                    'px-6 py-3 text-sm font-medium border-b-2',
                    activeTab === 'siswa'
                      ? 'border-blue-500 text-blue-600'
                      : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'
                  ]"
                >
                  <span class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13 1a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Daftar Siswa
                  </span>
                </button>
                <button
                  @click="activeTab = 'mapel'"
                  :class="[
                    'px-6 py-3 text-sm font-medium border-b-2',
                    activeTab === 'mapel'
                      ? 'border-blue-500 text-blue-600'
                      : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'
                  ]"
                >
                  <span class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    Mata Pelajaran
                  </span>
                </button>
                <button
                  @click="activeTab = 'nilai'"
                  :class="[
                    'px-6 py-3 text-sm font-medium border-b-2',
                    activeTab === 'nilai'
                      ? 'border-blue-500 text-blue-600'
                      : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'
                  ]"
                >
                  <span class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    Nilai
                  </span>
                </button>
              </nav>
            </div>

            <!-- Tab Content -->
            <div class="p-6">
              <!-- Tab: Daftar Siswa -->
              <div v-if="activeTab === 'siswa'">
                <!-- Search Bar for Students -->
                <div class="mb-6">
                  <div class="flex items-center justify-between">
                    <div class="relative flex-1 max-w-md">
                      <input
                        v-model="studentSearchQuery"
                        type="text"
                        placeholder="Cari siswa berdasarkan nama atau NIS..."
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                      >
                      <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                      </svg>
                    </div>
                    <div class="flex items-center space-x-3">
                      <button 
                        @click="refreshStudents"
                        class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50"
                      >
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                        Refresh
                      </button>
                      <button 
                        @click="showImportSiswa = true"
                        class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50"
                      >
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                        </svg>
                        Import Excel
                      </button>
                    </div>
                  </div>
                </div>

                <!-- Loading State for Students -->
                <div v-if="loadingStudents" class="flex justify-center items-center py-12">
                  <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600"></div>
                  <span class="ml-3 text-gray-600">Memuat data siswa...</span>
                </div>

                <!-- Error State for Students -->
                <div v-else-if="studentError" class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded">
                  {{ studentError }}
                  <button 
                    @click="fetchSiswaByRombel(selectedRombel.id)"
                    class="ml-3 text-red-700 hover:text-red-900 underline"
                  >
                    Coba Lagi
                  </button>
                </div>

                <!-- Empty State for Students -->
                <div v-else-if="filteredStudents.length === 0 && !loadingStudents" class="text-center py-12">
                  <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13 1a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                  <h3 class="text-lg font-medium text-gray-900 mb-2">Tidak ada data siswa</h3>
                  <p class="text-gray-500">Belum ada siswa yang terdaftar dalam kelas ini.</p>
                  <button 
                    @click="openAddSiswaModal"
                    class="mt-4 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700"
                  >
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Tambah Siswa Pertama
                  </button>
                </div>

                <!-- Students Table -->
                <div v-else class="overflow-x-auto">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIS</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Siswa</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Kelamin</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rata-rata</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <tr v-for="(siswa, index) in filteredStudents" :key="siswa.id" class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ index + 1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">{{ siswa.nis || '-' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ siswa.nama }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <span class="px-2 py-1 text-xs rounded-full" :class="siswa.jk === 'L' ? 'bg-blue-100 text-blue-800' : 'bg-pink-100 text-pink-800'">
                            {{ siswa.jk === 'L' ? 'Laki-laki' : 'Perempuan' }}
                          </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <span class="px-3 py-1 rounded-full text-xs font-medium" :class="getStatusBadgeClass(siswa.status)">
                            {{ getStatusText(siswa.status) }}
                          </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <span class="px-3 py-1 rounded-full text-xs font-medium" :class="getRataRataBadgeClass(siswa.rata_rata_nilai)">
                            {{ siswa.rata_rata_nilai ? siswa.rata_rata_nilai.toFixed(2) : '-' }}
                          </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                          <div class="flex space-x-3">
                            <div class="relative">
                              <button 
                                @click.stop="toggleSiswaMenu(siswa.id)"
                                class="inline-flex items-center px-3 py-1 text-xs text-blue-600 bg-blue-50 hover:bg-blue-100 rounded-md"
                              >
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Input Nilai
                              </button>
                              
                              <!-- Dropdown Menu untuk Input Nilai Per Mapel -->
                              <div
                                v-if="openSiswaMenuId === siswa.id"
                                class="absolute left-0 mt-2 w-64 bg-white rounded-md shadow-lg z-50 border border-gray-200"
                              >
                                <div class="py-1 max-h-60 overflow-y-auto">
                                  <div v-if="!selectedRombel?.mapels?.length" class="px-4 py-2 text-sm text-gray-500">
                                    Belum ada mata pelajaran
                                  </div>
                                  <template v-else>
                                    <button
                                      v-for="mapel in selectedRombel.mapels"
                                      :key="mapel.id"
                                      @click="openInputNilaiPerMapel(siswa, mapel)"
                                      class="flex items-center justify-between w-full text-left px-4 py-2 text-sm hover:bg-gray-50 border-b border-gray-100 last:border-b-0"
                                    >
                                      <div class="flex-1">
                                        <div class="font-medium text-gray-900">{{ mapel.nama_mapel }}</div>
                                        <div class="text-xs text-gray-500">{{ mapel.kode_mapel }}</div>
                                      </div>
                                      <div class="ml-2 text-xs">
                                        <span class="px-1 py-0.5 rounded" :class="getNilaiBadgeClass(getSiswaNilai(siswa, mapel))">
                                          {{ getSiswaNilai(siswa, mapel) || '-' }}
                                        </span>
                                      </div>
                                    </button>
                                  </template>
                                </div>
                              </div>
                            </div>
                            <div class="relative">
                              <button 
                                @click.stop="toggleSiswaDetailMenu(siswa.id)"
                                class="text-gray-400 hover:text-gray-600 focus:outline-none"
                              >
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                  <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                </svg>
                              </button>
                              
                              <!-- Dropdown Menu Detail Siswa -->
                              <div
                                v-if="openSiswaDetailMenuId === siswa.id"
                                class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50 border border-gray-200"
                              >
                                <div class="py-1">
                                  <button
                                    @click="viewSiswaDetail(siswa)"
                                    class="flex items-center w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-50"
                                  >
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Detail
                                  </button>
                                  <button
                                    @click="editSiswa(siswa)"
                                    class="flex items-center w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-50"
                                  >
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    Edit
                                  </button>
                                  <button
                                    @click="deleteSiswa(siswa)"
                                    class="flex items-center w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-50"
                                  >
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                    Hapus
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  
                  <!-- Pagination Info -->
                  <div class="px-6 py-3 border-t border-gray-200 bg-gray-50">
                    <p class="text-sm text-gray-600">
                      Menampilkan <span class="font-medium">{{ filteredStudents.length }}</span> dari <span class="font-medium">{{ siswaList.length }}</span> siswa
                    </p>
                  </div>
                </div>
              </div>

              <!-- Tab: Mata Pelajaran -->
              <div v-if="activeTab === 'mapel'">
                <div class="mb-6">
                  <div class="flex items-center justify-between">
                    <div>
                      <h3 class="text-lg font-medium text-gray-900">Mata Pelajaran di Kelas Ini</h3>
                      <p class="text-sm text-gray-500 mt-1">
                        Pilih mata pelajaran yang akan diajarkan di kelas ini. Setiap siswa akan memiliki kolom nilai untuk mapel yang dipilih.
                      </p>
                    </div>
                    <button 
                      @click="openManageMapelModal"
                      class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700"
                    >
                      <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                      </svg>
                      Kelola Mapel
                    </button>
                  </div>
                </div>

                <!-- Loading State for Mapels -->
                <div v-if="loadingRombelMapels" class="flex justify-center items-center py-12">
                  <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600"></div>
                  <span class="ml-3 text-gray-600">Memuat data mapel...</span>
                </div>

                <!-- Error State for Mapels -->
                <div v-else-if="rombelMapelError" class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded">
                  {{ rombelMapelError }}
                  <button 
                    @click="fetchRombelMapels(selectedRombel.id)"
                    class="ml-3 text-red-700 hover:text-red-900 underline"
                  >
                    Coba Lagi
                  </button>
                </div>

                <!-- Empty State for Mapels -->
                <div v-else-if="selectedRombel.mapels?.length === 0" class="text-center py-12">
                  <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                  </svg>
                  <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada mata pelajaran</h3>
                  <p class="text-gray-500">Tambahkan mata pelajaran yang akan diajarkan di kelas ini.</p>
                  <button 
                    @click="openManageMapelModal"
                    class="mt-4 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700"
                  >
                    Tambah Mapel
                  </button>
                </div>

                <!-- Mapel List -->
                <div v-else class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                  <div 
                    v-for="mapel in selectedRombel.mapels" 
                    :key="mapel.id"
                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow"
                  >
                    <div class="flex items-start justify-between">
                      <div>
                        <h4 class="font-medium text-gray-900">{{ mapel.nama_mapel }}</h4>
                        <p class="text-sm text-gray-500 mt-1">{{ mapel.kode_mapel }}</p>
                      </div>
                      <span 
                        class="px-2 py-1 text-xs rounded-full"
                        :class="getFaseBadgeColor(mapel.fase)"
                      >
                        {{ mapel.fase || 'Fase E' }}
                      </span>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                      <p class="text-xs text-gray-500">Kolom nilai: <span class="font-medium text-gray-700">nilai_{{ formatMapelKey(mapel.kode_mapel) }}</span></p>
                      <p class="text-xs text-gray-500">Kolom keterangan: <span class="font-medium text-gray-700">keterangan_{{ formatMapelKey(mapel.kode_mapel) }}</span></p>
                    </div>
                  </div>
                </div>

                <!-- Mapel Stats -->
                <div v-if="selectedRombel.mapels?.length > 0" class="mt-6 bg-gray-50 rounded-lg p-4">
                  <h4 class="font-medium text-gray-900 mb-2">Informasi Mapel</h4>
                  <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="text-center">
                      <div class="text-2xl font-bold text-blue-600">{{ selectedRombel.mapels.length }}</div>
                      <div class="text-xs text-gray-500">Total Mapel</div>
                    </div>
                    <div class="text-center">
                      <div class="text-xl font-semibold text-green-600">
                        {{ countMapelByFase('Fase E') }}
                      </div>
                      <div class="text-xs text-gray-500">Fase E</div>
                    </div>
                    <div class="text-center">
                      <div class="text-xl font-semibold text-purple-600">
                        {{ countMapelByFase('Fase D') }}
                      </div>
                      <div class="text-xs text-gray-500">Fase D</div>
                    </div>
                    <div class="text-center">
                      <div class="text-xl font-semibold text-yellow-600">
                        {{ selectedRombel.mapels.length - (countMapelByFase('Fase E') + countMapelByFase('Fase D')) }}
                      </div>
                      <div class="text-xs text-gray-500">Fase Lain</div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Tab: Nilai -->
              <div v-if="activeTab === 'nilai'">
                <div class="mb-6">
                  <div class="flex items-center justify-between">
                    <div>
                      <h3 class="text-lg font-medium text-gray-900">Nilai Siswa</h3>
                      <p class="text-sm text-gray-500 mt-1">
                        Kelola nilai siswa untuk setiap mata pelajaran yang dipilih di kelas ini.
                      </p>
                    </div>
                    <div class="flex items-center space-x-3">
                      <button 
                        @click="refreshNilai"
                        class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50"
                      >
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                        Refresh
                      </button>
                      <button 
                        @click="exportNilai"
                        class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50"
                      >
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        Ekspor Nilai
                      </button>
                    </div>
                  </div>
                </div>

                <!-- Loading State -->
                <div v-if="loadingNilai" class="flex justify-center items-center py-12">
                  <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600"></div>
                  <span class="ml-3 text-gray-600">Memuat data nilai...</span>
                </div>

                <!-- Error State -->
                <div v-else-if="nilaiError" class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded">
                  {{ nilaiError }}
                </div>

                <!-- Empty State -->
                <div v-else-if="!selectedRombel.mapels?.length || siswaList.length === 0" class="text-center py-12">
                  <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                  </svg>
                  <h3 class="text-lg font-medium text-gray-900 mb-2">Data nilai belum tersedia</h3>
                  <p class="text-gray-500">
                    {{
                      !selectedRombel.mapels?.length 
                        ? 'Tambahkan mata pelajaran terlebih dahulu di tab "Mata Pelajaran".'
                        : 'Tambahkan siswa terlebih dahulu untuk mulai mengisi nilai.'
                    }}
                  </p>
                </div>

                <!-- Nilai Table -->
                <div v-else class="overflow-x-auto">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" rowspan="2" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">Nama Siswa</th>
                        <th 
                          v-for="mapel in selectedRombel.mapels" 
                          :key="mapel.id"
                          colspan="2"
                          class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200"
                        >
                          {{ mapel.kode_mapel }}
                        </th>
                        <th rowspan="2" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">Rata-rata</th>
                        <th rowspan="2" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">Aksi</th>
                      </tr>
                      <tr>
                        <th 
                          v-for="mapel in selectedRombel.mapels" 
                          :key="mapel.id + '-sub'"
                          class="px-4 py-2 text-center text-xs text-gray-500 border-b border-gray-200"
                        >
                          <div class="flex justify-between">
                            <span>Nilai</span>
                            <span>Ket.</span>
                          </div>
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <tr v-for="siswa in siswaList" :key="siswa.id" class="hover:bg-gray-50">
                        <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">
                          {{ siswa.nama }}
                        </td>
                        <td 
                          v-for="mapel in selectedRombel.mapels" 
                          :key="mapel.id + '-' + siswa.id"
                          class="px-4 py-3"
                        >
                          <div class="flex items-center space-x-2">
                            <button 
                              @click="openInputNilaiPerMapel(siswa, mapel)"
                              class="text-sm font-medium text-gray-900 hover:text-blue-600 hover:underline"
                              :title="`Edit nilai ${mapel.nama_mapel}`"
                            >
                              {{ getSiswaNilai(siswa, mapel) || '-' }}
                            </button>
                            <span v-if="getSiswaKeterangan(siswa, mapel)" class="text-xs text-gray-500 cursor-help" :title="getSiswaKeterangan(siswa, mapel)">
                              ✓
                            </span>
                          </div>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap">
                          <span class="px-2 py-1 text-xs rounded-full" :class="getRataRataBadgeClass(siswa.rata_rata_nilai)">
                            {{ siswa.rata_rata_nilai ? siswa.rata_rata_nilai.toFixed(2) : '-' }}
                          </span>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap">
                          <button 
                            @click="viewSiswaAllNilai(siswa)"
                            class="inline-flex items-center px-3 py-1 text-xs text-green-600 bg-green-50 hover:bg-green-100 rounded-md"
                          >
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Detail
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <!-- Nilai Summary -->
                <div v-if="selectedRombel.mapels?.length > 0 && siswaList.length > 0" class="mt-6 bg-gray-50 rounded-lg p-4">
                  <h4 class="font-medium text-gray-900 mb-3">Ringkasan Nilai</h4>
                  <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="text-center">
                      <div class="text-2xl font-bold text-blue-600">
                        {{ calculateRataRataKelas().toFixed(2) }}
                      </div>
                      <div class="text-xs text-gray-500">Rata-rata Kelas</div>
                    </div>
                    <div class="text-center">
                      <div class="text-xl font-semibold text-green-600">
                        {{ countSiswaDenganNilai() }}
                      </div>
                      <div class="text-xs text-gray-500">Siswa Telah Dinilai</div>
                    </div>
                    <div class="text-center">
                      <div class="text-xl font-semibold text-purple-600">
                        {{ findMapelTertinggi()?.kode_mapel || '-' }}
                      </div>
                      <div class="text-xs text-gray-500">Mapel Tertinggi</div>
                    </div>
                    <div class="text-center">
                      <div class="text-xl font-semibold text-yellow-600">
                        {{ findMapelTerendah()?.kode_mapel || '-' }}
                      </div>
                      <div class="text-xs text-gray-500">Mapel Terendah</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Main Table View (when not in detail mode) -->
        <div v-if="!showDetail">
          <!-- Search Bar -->
          <div class="mb-6">
            <div class="relative">
              <input
                v-model="searchQuery"
                type="text"
                placeholder="Cari kelas, wali kelas, atau jurusan..."
                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
              <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
            </div>
          </div>

          <!-- Loading State -->
          <div v-if="loading" class="flex justify-center items-center py-12">
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600"></div>
            <span class="ml-3 text-gray-600">Memuat data kelas...</span>
          </div>

          <!-- Error State -->
          <div v-else-if="error" class="bg-red-50 border border-red-200 rounded-lg p-6 text-center">
            <svg class="w-12 h-12 text-red-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <p class="text-red-700 mb-4 font-medium">{{ error }}</p>
            <div class="space-x-3">
              <button 
                @click="fetchRombels"
                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700"
              >
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
                Coba Lagi
              </button>
              <button 
                @click="testConnection"
                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"
              >
                Test Koneksi
              </button>
            </div>
          </div>

          <!-- Empty State -->
          <div v-else-if="filteredRombels.length === 0 && !loading" class="bg-white rounded-lg shadow overflow-hidden text-center py-12">
            <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2M4 13h2m8-8V4a1 1 0 00-1-1h-2a1 1 0 00-1 1v1M9 7h6"></path>
            </svg>
            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada data kelas</h3>
            <p class="text-gray-500 mb-4">Mulai dengan menambahkan kelas pertama Anda.</p>
            <button 
              @click="openAddModal"
              class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-800"
            >
              + Tambah Kelas Pertama
            </button>
          </div>

          <!-- Table -->
          <div v-else class="bg-white rounded-lg shadow overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
              <div class="flex justify-between items-center">
                <p class="text-sm text-gray-600">
                  Menampilkan <span class="font-medium">{{ filteredRombels.length }}</span> dari <span class="font-medium">{{ rombels.length }}</span> kelas
                </p>
                <div class="flex items-center space-x-2">
                  <span class="text-sm text-gray-600">Status:</span>
                  <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">
                    {{ connected ? 'Terhubung' : 'Memuat...' }}
                  </span>
                </div>
              </div>
            </div>
            
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Wali Kelas</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelas</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tingkat</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jurusan</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mapel</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr v-for="(rombel, index) in filteredRombels" :key="rombel.id" class="hover:bg-gray-50">
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ index + 1 }}.</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div>
                        <div class="text-sm font-medium text-gray-900">{{ rombel.wali_kelas }}</div>
                        <div v-if="rombel.user" class="text-xs text-gray-500">
                          {{ rombel.user.email }}
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span :class="getKelasBadgeColor(rombel.nama_kelas)" class="px-3 py-1 rounded-full text-xs font-medium">
                      {{ rombel.nama_kelas }}
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-700">
                      {{ rombel.tingkat || 'X' }}
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span :class="getJurusanBadgeColor(rombel.jurusan)" class="px-3 py-1 rounded-full text-xs font-medium">
                      {{ rombel.jurusan }}
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center space-x-2">
                      <span class="text-sm text-gray-900">{{ rombel.mapels?.length || 0 }}</span>
                      <button 
                        @click.stop="viewRombelMapels(rombel)"
                        class="text-blue-600 hover:text-blue-800"
                        title="Lihat mapel"
                      >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                      </button>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    <div class="flex space-x-3">
                      <button
                        @click="showDetailView(rombel)"
                        class="inline-flex items-center px-3 py-2 text-xs text-blue-600 bg-blue-50 hover:bg-blue-100 rounded-md"
                      >
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        Detail
                      </button>
                      <button
                        @click="deleteRombel(rombel)"
                        class="inline-flex items-center px-3 py-2 text-xs text-red-600 bg-red-50 hover:bg-red-100 rounded-md"
                      >
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                        Hapus
                      </button>
                      <div class="relative">
                        <button
                          @click.stop="toggleMenu(rombel.id)"
                          class="text-gray-400 hover:text-gray-600 focus:outline-none"
                        >
                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                          </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div
                          v-if="openMenuId === rombel.id"
                          class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50 border border-gray-200"
                        >
                          <div class="py-1">
                            <button
                              @click="editRombel(rombel)"
                              class="flex items-center w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-50"
                            >
                              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                              </svg>
                              Edit
                            </button>
                            <button
                              @click="manageMapelForRombel(rombel)"
                              class="flex items-center w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-50"
                            >
                              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                              </svg>
                              Kelola Mapel
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </div>
  </div>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted, watch } from 'vue'
import { useAuthStore } from '~/store/auth'

definePageMeta({
  requiresAuth: true
})

const { $api } = useNuxtApp()
const authStore = useAuthStore()

// State variables untuk Rombel
const loading = ref(true)
const loadingStudents = ref(false)
const loadingRombelMapels = ref(false)
const loadingMapels = ref(false)
const loadingNilai = ref(false)
const loadingGurus = ref(false)
const loadingNilaiForm = ref(false)
const error = ref('')
const studentError = ref('')
const rombelMapelError = ref('')
const mapelError = ref('')
const nilaiError = ref('')
const searchQuery = ref('')
const studentSearchQuery = ref('')
const mapelSearchQuery = ref('')
const showAddModal = ref(false)
const showSiswaModal = ref(false)
const showManageMapelModal = ref(false)
const showNilaiModal = ref(false)
const showDetail = ref(false)
const rombels = ref([])
const siswaList = ref([])
const allMapels = ref([])
const allGurus = ref([])
const selectedRombel = ref(null)
const selectedMapelIds = ref([])
const editMode = ref(false)
const editSiswaMode = ref(false)
const submitting = ref(false)
const submittingSiswa = ref(false)
const savingMapels = ref(false)
const savingNilai = ref(false)
const formError = ref('')
const formSuccess = ref('')
const siswaFormError = ref('')
const siswaFormSuccess = ref('')
const manageMapelError = ref('')
const manageMapelSuccess = ref('')
const nilaiFormError = ref('')
const nilaiFormSuccess = ref('')
const editingId = ref(null)
const editingSiswaId = ref(null)
const openMenuId = ref(null)
const openSiswaMenuId = ref(null)
const openSiswaDetailMenuId = ref(null)
const connected = ref(false)
const showImportSiswa = ref(false)
const activeTab = ref('siswa')

// State variables untuk Auto-complete Guru
const showGuruDropdown = ref(false)
const selectedGuru = ref(null)
const guruSearchResults = ref([])

// State variables untuk Input Nilai Per Mapel
const selectedSiswaForNilai = ref(null)
const selectedMapelForNilai = ref(null)
const nilaiForm = ref({
  nilai: null,
  keterangan: '',
  predikat: ''
})

// PERBAIKAN: Form Data untuk Rombel harus dideklarasikan dengan ref
const formData = ref({
  wali_kelas: '',
  nama_kelas: '',
  jurusan: '',
  tingkat: '',
  user_id: null
})

// Form data untuk Siswa
const siswaForm = ref({
  nis: '',
  nama: '',
  jk: '',
  status: 'aktif',
  rombel_id: null
})

// ==================== MAPPING KODE MAPEL KE KOLOM DATABASE ====================
// Mapping lengkap berdasarkan struktur database siswas
const mapelColumnMapping = {
  // Format: 'KODE_MAPEL_DARI_API': 'key_di_database'
  'MTK': 'mtk',
  'B.IND': 'bind',
  'B.ING': 'bing',
  'IPAS': 'ipas',
  'PPKN': 'ppkn',
  'PJOK': 'pjok',
  'SB': 'sb',
  'SEJ': 'sej',
  'INFOR': 'infor',
  'MULOK': 'mulok',
  'PAI': 'pai',
  'PAK': 'pak',
  'PKWU': 'pkwu',
  'MPP': 'mpp',
  'MKK': 'mkk',
  'DPK': 'dpk'
}

// Helper function untuk mengubah kode mapel ke format kolom database
const formatMapelKey = (kode_mapel) => {
  if (!kode_mapel) return ''
  
  // Cek di mapping
  if (mapelColumnMapping[kode_mapel]) {
    return mapelColumnMapping[kode_mapel]
  }
  
  // Fallback: lowercase, hapus titik, spasi, dan karakter khusus
  return kode_mapel.toLowerCase()
    .replace(/[.\s]/g, '')  // Hapus titik dan spasi
    .replace(/\//g, '_')     // Ganti slash dengan underscore
    .replace(/[^a-z0-9_]/g, '') // Hapus karakter khusus lainnya
}

// Computed Properties
const filteredRombels = computed(() => {
  if (!searchQuery.value) return rombels.value
  
  const query = searchQuery.value.toLowerCase()
  return rombels.value.filter(rombel => 
    rombel.wali_kelas?.toLowerCase().includes(query) ||
    rombel.nama_kelas?.toLowerCase().includes(query) ||
    rombel.jurusan?.toLowerCase().includes(query) ||
    rombel.tingkat?.toLowerCase().includes(query) ||
    (rombel.user?.name?.toLowerCase().includes(query)) ||
    (rombel.user?.email?.toLowerCase().includes(query))
  )
})

const filteredStudents = computed(() => {
  if (!studentSearchQuery.value) return siswaList.value
  
  const query = studentSearchQuery.value.toLowerCase()
  return siswaList.value.filter(siswa => 
    siswa.nama?.toLowerCase().includes(query) ||
    siswa.nis?.toLowerCase().includes(query) ||
    siswa.status?.toLowerCase().includes(query)
  )
})

const filteredMapels = computed(() => {
  if (!mapelSearchQuery.value) return allMapels.value
  
  const query = mapelSearchQuery.value.toLowerCase()
  return allMapels.value.filter(mapel => 
    mapel.nama_mapel?.toLowerCase().includes(query) ||
    mapel.kode_mapel?.toLowerCase().includes(query) ||
    mapel.fase?.toLowerCase().includes(query)
  )
})

const siswaAktifCount = computed(() => {
  return siswaList.value.filter(siswa => siswa.status === 'aktif').length
})

const autoFillClass = computed(() => {
  return selectedGuru.value && selectedGuru.value.wali_kelas && !formData.value.nama_kelas
})

const formValid = computed(() => {
  return formData.value.wali_kelas && 
         formData.value.nama_kelas && 
         formData.value.jurusan
})

// Helper Functions
const getKelasBadgeColor = (namaKelas) => {
  if (!namaKelas) return 'bg-gray-100 text-gray-700'
  if (namaKelas.includes('AKM')) return 'bg-red-100 text-red-700'
  if (namaKelas.includes('DKV')) return 'bg-green-100 text-green-700'
  if (namaKelas.includes('RPL')) return 'bg-blue-100 text-blue-700'
  if (namaKelas.includes('X')) return 'bg-yellow-100 text-yellow-700'
  if (namaKelas.includes('XI')) return 'bg-purple-100 text-purple-700'
  if (namaKelas.includes('XII')) return 'bg-indigo-100 text-indigo-700'
  return 'bg-gray-100 text-gray-700'
}

const getJurusanBadgeColor = (jurusan) => {
  if (!jurusan) return 'bg-gray-100 text-gray-700'
  if (jurusan.includes('Akuntansi')) return 'bg-orange-100 text-orange-700'
  if (jurusan.includes('Desain Komunikasi Visual')) return 'bg-green-100 text-green-700'
  if (jurusan.includes('Rekayasa Perangkat Lunak')) return 'bg-blue-100 text-blue-700'
  return 'bg-gray-100 text-gray-700'
}

const getStatusBadgeClass = (status) => {
  const classes = {
    'aktif': 'bg-green-100 text-green-800',
    'lulus': 'bg-blue-100 text-blue-800',
    'pindah': 'bg-yellow-100 text-yellow-800',
    'dropout': 'bg-red-100 text-red-800'
  }
  return classes[status] || 'bg-gray-100 text-gray-800'
}

const getStatusText = (status) => {
  const texts = {
    'aktif': 'Aktif',
    'lulus': 'Lulus',
    'pindah': 'Pindah',
    'dropout': 'Drop Out'
  }
  return texts[status] || status
}

const getFaseBadgeColor = (fase) => {
  if (!fase) return 'bg-gray-100 text-gray-700'
  if (fase.includes('Fase A')) return 'bg-blue-100 text-blue-800'
  if (fase.includes('Fase B')) return 'bg-green-100 text-green-800'
  if (fase.includes('Fase C')) return 'bg-yellow-100 text-yellow-800'
  if (fase.includes('Fase D')) return 'bg-orange-100 text-orange-800'
  if (fase.includes('Fase E')) return 'bg-purple-100 text-purple-800'
  if (fase.includes('Fase F')) return 'bg-red-100 text-red-800'
  return 'bg-gray-100 text-gray-700'
}

const getRataRataBadgeClass = (nilai) => {
  if (!nilai) return 'bg-gray-100 text-gray-700'
  if (nilai >= 90) return 'bg-green-100 text-green-800'
  if (nilai >= 80) return 'bg-blue-100 text-blue-800'
  if (nilai >= 70) return 'bg-yellow-100 text-yellow-800'
  if (nilai >= 60) return 'bg-orange-100 text-orange-800'
  return 'bg-red-100 text-red-800'
}

const getNilaiBadgeClass = (nilai) => {
  if (!nilai || isNaN(nilai)) return 'bg-gray-100 text-gray-700'
  if (nilai >= 90) return 'bg-green-100 text-green-800'
  if (nilai >= 80) return 'bg-blue-100 text-blue-800'
  if (nilai >= 70) return 'bg-yellow-100 text-yellow-800'
  if (nilai >= 60) return 'bg-orange-100 text-orange-800'
  return 'bg-red-100 text-red-800'
}

const getNilaiPredikat = (nilai) => {
  if (!nilai || isNaN(nilai)) return '-'
  if (nilai >= 90) return 'Sangat Baik (A)'
  if (nilai >= 80) return 'Baik (B)'
  if (nilai >= 70) return 'Cukup (C)'
  if (nilai >= 60) return 'Kurang (D)'
  return 'Sangat Kurang (E)'
}

// ==================== FUNGSI UNTUK NILAI DENGAN FORMAT YANG BENAR ====================

const getSiswaNilai = (siswa, mapel) => {
  const key = formatMapelKey(mapel.kode_mapel)
  const kolomNilai = `nilai_${key}`
  return siswa[kolomNilai] || null
}

const getSiswaKeterangan = (siswa, mapel) => {
  const key = formatMapelKey(mapel.kode_mapel)
  const kolomKeterangan = `keterangan_${key}`
  return siswa[kolomKeterangan] || null
}

// ==================== FUNGSI BARU UNTUK AUTO-COMPLETE GURU ====================

const searchGuru = async () => {
  const query = formData.value.wali_kelas.trim().toLowerCase()

  if (!query || query.length < 2) {
    guruSearchResults.value = []
    selectedGuru.value = null
    formData.value.user_id = null
    showGuruDropdown.value = false
    return
  }

  showGuruDropdown.value = true

  // Filter dari data guru yang sudah dimuat
  const results = allGurus.value.filter(guru =>
    guru.name.toLowerCase().includes(query) ||
    guru.email.toLowerCase().includes(query) ||
    (guru.wali_kelas && guru.wali_kelas.toLowerCase().includes(query))
  ).slice(0, 10)

  guruSearchResults.value = results

  // Cek apakah ada guru dengan nama yang cocok (exact match)
  const exactMatch = allGurus.value.find(guru =>
    guru.name.toLowerCase() === query.toLowerCase()
  )

  if (exactMatch) {
    // Auto-select guru yang cocok
    selectedGuru.value = exactMatch
    formData.value.user_id = exactMatch.id

    // Auto-fill kelas jika guru sudah punya kelas (selalu override)
    if (exactMatch.wali_kelas) {
      formData.value.nama_kelas = exactMatch.wali_kelas
      autoDetectTingkat()
      extractJurusanFromKelas()
    }

    // Jika hanya ada satu hasil, sembunyikan dropdown
    if (results.length === 1) {
      guruSearchResults.value = []
      showGuruDropdown.value = false
    }
  } else {
    // Reset selected guru jika tidak ada yang cocok
    selectedGuru.value = null
    formData.value.user_id = null
    // Jangan reset nama_kelas jika sudah diisi manual
  }
}

const selectGuru = (guru) => {
  selectedGuru.value = guru
  formData.value.wali_kelas = guru.name
  formData.value.user_id = guru.id
  
  // Auto-fill kelas jika guru sudah punya kelas
  if (guru.wali_kelas && !formData.value.nama_kelas) {
    formData.value.nama_kelas = guru.wali_kelas
    autoDetectTingkat()
  }
  
  // Auto-fill jurusan dari kelas jika belum diisi
  if (formData.value.nama_kelas && !formData.value.jurusan) {
    extractJurusanFromKelas()
  }
  
  // Sembunyikan dropdown
  guruSearchResults.value = []
  showGuruDropdown.value = false
}

const clearAutoFillClass = () => {
  formData.value.nama_kelas = ''
  selectedGuru.value.wali_kelas = null
}

const autoDetectTingkat = () => {
  if (!formData.value.nama_kelas) return
  
  const namaKelas = formData.value.nama_kelas.toUpperCase()
  
  if (namaKelas.includes(' XII ') || namaKelas.startsWith('XII')) {
    formData.value.tingkat = 'XII'
  } else if (namaKelas.includes(' XI ') || namaKelas.startsWith('XI')) {
    formData.value.tingkat = 'XI'
  } else if (namaKelas.includes(' X ') || namaKelas.startsWith('X')) {
    formData.value.tingkat = 'X'
  } else {
    // Coba ekstrak tingkat dari nama kelas
    const tingkatMatch = namaKelas.match(/\b([X]{1,3})\b/)
    if (tingkatMatch && tingkatMatch[1]) {
      formData.value.tingkat = tingkatMatch[1]
    }
  }
}

const extractJurusanFromKelas = () => {
  if (!formData.value.nama_kelas) return
  
  const namaKelas = formData.value.nama_kelas.toUpperCase()
  
  if (namaKelas.includes('RPL')) {
    formData.value.jurusan = 'Rekayasa Perangkat Lunak'
  } else if (namaKelas.includes('AKM')) {
    formData.value.jurusan = 'Akuntansi'
  } else if (namaKelas.includes('DKV')) {
    formData.value.jurusan = 'Desain Komunikasi Visual'
  } else if (namaKelas.includes('TEI')) {
    formData.value.jurusan = 'Teknik Elektronika Industri'
  } else if (namaKelas.includes('TKJ')) {
    formData.value.jurusan = 'Teknik Komputer dan Jaringan'
  } else if (namaKelas.includes('TP')) {
    formData.value.jurusan = 'Teknik Pemesinan'
  } else if (namaKelas.includes('TBSM')) {
    formData.value.jurusan = 'Teknik dan Bisnis Sepeda Motor'
  }
}

// ==================== FUNGSI UNTUK LOAD DATA GURU ====================

const fetchAllGurus = async () => {
  loadingGurus.value = true
  try {
    console.log('📚 Fetching all gurus...')
    
    const response = await $api.get('/api/users/gurus', {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })

    console.log('✅ Guru response:', response.data)

    if (response.data && response.data.success) {
      allGurus.value = response.data.data || []
      console.log(`✅ Loaded ${allGurus.value.length} gurus`)
    } else {
      console.warn('⚠️ No guru data returned, using mock data')
      allGurus.value = await getMockGuruData()
    }
  } catch (err) {
    console.error('❌ Error fetching gurus:', err)
    console.log('⚠️ Using mock guru data due to error')
    allGurus.value = await getMockGuruData()
  } finally {
    loadingGurus.value = false
  }
}

const getMockGuruData = async () => {
  // Data mock untuk development
  return [
    { id: 8, name: 'Nurhayatul Fadilah S.Pd', email: 'contoh@gmail.com', role: 'guru', wali_kelas: 'XII RPL 2' },
    { id: 9, name: 'Khairul Arifin', email: 'khairul@example.com', role: 'guru', wali_kelas: 'XI RPL 2' },
    { id: 10, name: 'Azizah', email: 'azizah@example.com', role: 'guru', wali_kelas: 'XII RPL 1' },
    { id: 11, name: 'Arif', email: 'arif@example.com', role: 'guru', wali_kelas: 'X RPL 2' },
    { id: 12, name: 'Budi Santoso', email: 'budi@example.com', role: 'guru', wali_kelas: null },
    { id: 13, name: 'Siti Aminah', email: 'siti@example.com', role: 'guru', wali_kelas: 'X AKM 1' },
    { id: 14, name: 'Agus Suparman', email: 'agus@example.com', role: 'guru', wali_kelas: 'XI DKV 1' },
  ]
}

// ==================== FUNGSI MODAL BARU ====================

const openAddModal = () => {
  editMode.value = false
  editingId.value = null
  selectedGuru.value = null
  showGuruDropdown.value = false
  guruSearchResults.value = []
  formData.value = {
    wali_kelas: '',
    nama_kelas: '',
    jurusan: '',
    tingkat: '',
    user_id: null
  }
  formError.value = ''
  formSuccess.value = ''
  showAddModal.value = true
}

const closeModal = () => {
  showAddModal.value = false
  editMode.value = false
  editingId.value = null
  selectedGuru.value = null
  showGuruDropdown.value = false
  guruSearchResults.value = []
  formError.value = ''
  formSuccess.value = ''
  formData.value = {
    wali_kelas: '',
    nama_kelas: '',
    jurusan: '',
    tingkat: '',
    user_id: null
  }
}

const editRombel = async (rombel) => {
  openMenuId.value = null
  editMode.value = true
  editingId.value = rombel.id
  
  formData.value = {
    wali_kelas: rombel.wali_kelas,
    nama_kelas: rombel.nama_kelas,
    jurusan: rombel.jurusan,
    tingkat: rombel.tingkat,
    user_id: rombel.user_id || null
  }

  // Cari guru yang sesuai
  if (rombel.user_id && allGurus.value.length > 0) {
    const guru = allGurus.value.find(g => g.id === rombel.user_id)
    if (guru) {
      selectedGuru.value = guru
    }
  }

  showAddModal.value = true
}

// ==================== UPDATE FUNGSI HANDLE SUBMIT ====================

const handleSubmit = async () => {
  if (!formData.value.wali_kelas || !formData.value.nama_kelas || !formData.value.jurusan) {
    formError.value = 'Wali Kelas, Kelas, dan Jurusan harus diisi'
    return
  }

  // Validasi: jika ada selectedGuru, pastikan user_id ada
  if (selectedGuru.value && !selectedGuru.value.id) {
    formError.value = 'Terjadi kesalahan: ID guru tidak valid'
    return
  }

  submitting.value = true
  formError.value = ''
  formSuccess.value = ''

  try {
    const url = editMode.value ? `/api/rombel/${editingId.value}` : '/api/rombel'
    const method = editMode.value ? 'PUT' : 'POST'

    console.log(`📤 ${method} request to:`, url)
    console.log('📤 Data to send:', formData.value)

    await authStore.ensureCsrfToken()

    const response = await $api(url, {
      method: method,
      data: formData.value,
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      }
    })

    console.log('✅ Save response:', response.data)

    if (response.data && response.data.success !== false) {
      if (editMode.value) {
        // Update local data
        const index = rombels.value.findIndex(r => r.id === editingId.value)
        if (index !== -1) {
          rombels.value[index] = { ...rombels.value[index], ...formData.value, ...response.data.data }
        }
        formSuccess.value = 'Data kelas berhasil diupdate!'
      } else {
        // Add new rombel to list
        if (response.data.data) {
          rombels.value.push(response.data.data)
        }
        formSuccess.value = 'Kelas berhasil ditambahkan!'
      }

      // Refresh gurus data untuk update wali_kelas status
      await fetchAllGurus()

      setTimeout(() => {
        closeModal()
      }, 1500)
    } else {
      throw new Error(response.data?.error || response.data?.message || 'Gagal menyimpan data')
    }

  } catch (err) {
    console.error('❌ Error saving rombel:', err)
    console.error('❌ Error details:', err.response?.data)

    if (err.response?.status === 422 && err.response?.data?.errors) {
      const errors = err.response.data.errors
      const errorMessages = []
      for (const field in errors) {
        errorMessages.push(...errors[field])
      }
      formError.value = 'Validasi gagal: ' + errorMessages.join(', ')
    } else if (err.response?.status === 422 && err.response?.data?.message) {
      formError.value = err.response.data.message
    } else {
      formError.value = err.response?.data?.message || err.message || 'Gagal menyimpan data kelas. Silakan coba lagi.'
    }
  } finally {
    submitting.value = false
  }
}

// ==================== FUNGSI UNTUK INPUT NILAI PER MAPEL ====================

const openInputNilaiPerMapel = async (siswa, mapel) => {
  openSiswaMenuId.value = null
  openSiswaDetailMenuId.value = null
  
  selectedSiswaForNilai.value = siswa
  selectedMapelForNilai.value = mapel
  loadingNilaiForm.value = true
  nilaiFormError.value = ''
  nilaiFormSuccess.value = ''

  try {
    console.log('🔍 DEBUG - Opening nilai modal:')
    console.log('Siswa:', siswa.id, siswa.nama)
    console.log('Mapel:', mapel.id, mapel.kode_mapel, mapel.nama_mapel)
    console.log('Formatted Key:', formatMapelKey(mapel.kode_mapel))

    // Reset form
    nilaiForm.value = {
      nilai: null,
      keterangan: '',
      predikat: ''
    }

    // Load data siswa untuk mendapatkan nilai yang sudah ada untuk mapel ini
    const response = await $api.get(`/api/siswa/${siswa.id}`, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })

    if (response.data && response.data.success) {
      const siswaData = response.data.data
      
      // Ambil nilai untuk mapel ini dengan format yang benar
      const mapelKey = formatMapelKey(mapel.kode_mapel)
      const kolomNilai = `nilai_${mapelKey}`
      const kolomKeterangan = `keterangan_${mapelKey}`
      
      console.log('🔍 DEBUG - Looking for columns:')
      console.log('Nilai column:', kolomNilai)
      console.log('Keterangan column:', kolomKeterangan)
      console.log('Siswa data keys:', Object.keys(siswaData))
      
      nilaiForm.value.nilai = siswaData[kolomNilai] || null
      nilaiForm.value.keterangan = siswaData[kolomKeterangan] || ''
      nilaiForm.value.predikat = getNilaiPredikat(nilaiForm.value.nilai)
      
      console.log('🔍 DEBUG - Found values:', {
        nilai: nilaiForm.value.nilai,
        keterangan: nilaiForm.value.keterangan
      })
    }
  } catch (err) {
    console.error('❌ Error loading siswa data:', err)
    // Jika error, tetap buka modal dengan form kosong
  } finally {
    loadingNilaiForm.value = false
    showNilaiModal.value = true
  }
}

const closeNilaiModal = () => {
  showNilaiModal.value = false
  selectedSiswaForNilai.value = null
  selectedMapelForNilai.value = null
  nilaiForm.value = {
    nilai: null,
    keterangan: '',
    predikat: ''
  }
  nilaiFormError.value = ''
  nilaiFormSuccess.value = ''
}

const updatePredikat = () => {
  nilaiForm.value.predikat = getNilaiPredikat(nilaiForm.value.nilai)
}

const saveNilai = async () => {
  if (!selectedSiswaForNilai.value || !selectedMapelForNilai.value) return

  console.log('=== DEBUG NILAI SAVE START ===')
  console.log('Siswa:', selectedSiswaForNilai.value.id, selectedSiswaForNilai.value.nama)
  console.log('Mapel:', selectedMapelForNilai.value.kode_mapel, selectedMapelForNilai.value.nama_mapel)
  console.log('Formatted Key:', formatMapelKey(selectedMapelForNilai.value.kode_mapel))
  console.log('Nilai:', nilaiForm.value.nilai)
  console.log('Keterangan:', nilaiForm.value.keterangan)

  savingNilai.value = true
  nilaiFormError.value = ''
  nilaiFormSuccess.value = ''

  try {
    // Prepare update data dengan format yang benar
    const mapelKey = formatMapelKey(selectedMapelForNilai.value.kode_mapel)
    const nilaiKey = `nilai_${mapelKey}`
    const keteranganKey = `keterangan_${mapelKey}`
    
    const updateData = {
      [nilaiKey]: nilaiForm.value.nilai ? parseFloat(nilaiForm.value.nilai) : null,
      [keteranganKey]: nilaiForm.value.keterangan || null
    }

    console.log('🔍 DEBUG - Update Data Keys:')
    console.log('Mapel Key:', mapelKey)
    console.log('Nilai Key:', nilaiKey)
    console.log('Keterangan Key:', keteranganKey)
    console.log('Update Data:', updateData)

    // Hitung rata-rata baru setelah update nilai
    const semuaNilai = []
    
    // Hitung semua nilai termasuk yang baru diupdate
    selectedRombel.value.mapels?.forEach(mapel => {
      const key = formatMapelKey(mapel.kode_mapel)
      const kolomNilai = `nilai_${key}`
      let nilai = null
      
      if (mapel.id === selectedMapelForNilai.value.id) {
        // Gunakan nilai baru
        nilai = updateData[nilaiKey]
      } else {
        // Gunakan nilai lama dengan format yang benar
        nilai = selectedSiswaForNilai.value[kolomNilai] || null
      }
      
      if (nilai !== null && !isNaN(nilai)) {
        semuaNilai.push(parseFloat(nilai))
      }
    })

    // Update rata-rata jika ada nilai
    if (semuaNilai.length > 0) {
      const total = semuaNilai.reduce((sum, nilai) => sum + nilai, 0)
      const rataRata = total / semuaNilai.length
      updateData.rata_rata_nilai = parseFloat(rataRata.toFixed(2))
      updateData.predikat = getNilaiPredikat(rataRata).split('(')[0].trim()
      
      console.log('🔍 DEBUG - Rata-rata calculation:')
      console.log('Semua nilai:', semuaNilai)
      console.log('Total:', total)
      console.log('Rata-rata:', rataRata)
      console.log('Predikat:', updateData.predikat)
    } else {
      updateData.rata_rata_nilai = null
      updateData.predikat = null
    }

    console.log('📤 Final Update Data untuk siswa ID', selectedSiswaForNilai.value.id, ':', updateData)

    await authStore.ensureCsrfToken()

    const response = await $api.put(`/api/siswa/${selectedSiswaForNilai.value.id}`, updateData, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      }
    })

    console.log('✅ Update response:', response.data)

    if (response.data && response.data.success) {
      nilaiFormSuccess.value = 'Nilai berhasil disimpan!'
      
      // Update siswa data in local list
      const index = siswaList.value.findIndex(s => s.id === selectedSiswaForNilai.value.id)
      if (index !== -1) {
        siswaList.value[index] = { ...siswaList.value[index], ...updateData }
        
        // Update selected siswa juga
        if (selectedSiswaForNilai.value.id === siswaList.value[index].id) {
          selectedSiswaForNilai.value = { ...selectedSiswaForNilai.value, ...updateData }
        }
      }
      
      setTimeout(() => {
        closeNilaiModal()
      }, 1500)
    } else {
      throw new Error(response.data?.message || 'Gagal menyimpan nilai')
    }

  } catch (err) {
    console.error('❌ Error saving nilai:', err)
    console.error('❌ Full error object:', err)
    console.error('❌ Error response:', err.response?.data)
    console.error('❌ Error status:', err.response?.status)
    
    if (err.response?.status === 422 && err.response?.data?.errors) {
      const errors = err.response.data.errors
      const errorMessages = []
      for (const field in errors) {
        errorMessages.push(...errors[field])
      }
      nilaiFormError.value = 'Validasi gagal: ' + errorMessages.join(', ')
    } else if (err.response?.data?.message) {
      nilaiFormError.value = err.response.data.message
    } else {
      nilaiFormError.value = err.message || 'Gagal menyimpan nilai. Silakan coba lagi.'
    }
  } finally {
    savingNilai.value = false
    console.log('=== DEBUG NILAI SAVE END ===')
  }
}

// API Functions untuk Mapel
const fetchAllMapels = async () => {
  loadingMapels.value = true
  mapelError.value = ''

  try {
    const response = await $api.get('/api/mapels', {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })

    console.log('📊 Data Mapel dari API:', response.data)

    if (response.data && response.data.success) {
      allMapels.value = response.data.data || []
      console.log(`✅ Loaded ${allMapels.value.length} mapels`)
      console.log('Kode Mapel contoh:', allMapels.value[0]?.kode_mapel)
    } else {
      throw new Error(response.data?.message || 'Gagal mengambil data mapel')
    }

  } catch (err) {
    console.error('Error fetching mapels:', err)
    mapelError.value = err.response?.data?.message || err.message || 'Gagal memuat data mapel'
  } finally {
    loadingMapels.value = false
  }
}

const fetchRombelMapels = async (rombelId) => {
  loadingRombelMapels.value = true
  rombelMapelError.value = ''

  try {
    const response = await $api.get(`/api/rombels/${rombelId}/mapels`, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })

    if (response.data && response.data.success) {
      // Update selected rombel dengan data mapel
      if (selectedRombel.value && selectedRombel.value.id === rombelId) {
        selectedRombel.value.mapels = response.data.data?.mapel_aktif || []
      }
      
      // Update rombel di daftar utama
      const index = rombels.value.findIndex(r => r.id === rombelId)
      if (index !== -1) {
        rombels.value[index].mapels = response.data.data?.mapel_aktif || []
      }
    } else {
      throw new Error(response.data?.message || 'Gagal mengambil data mapel rombel')
    }

  } catch (err) {
    console.error('Error fetching rombel mapels:', err)
    rombelMapelError.value = err.response?.data?.message || err.message || 'Gagal memuat data mapel'
  } finally {
    loadingRombelMapels.value = false
  }
}

const saveMapelsForRombel = async (rombelId, mapelIds) => {
  savingMapels.value = true
  manageMapelError.value = ''
  manageMapelSuccess.value = ''

  try {
    await authStore.ensureCsrfToken()

    const response = await $api.post(`/api/rombels/${rombelId}/set-mapels`, {
      mapel_ids: mapelIds
    }, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })

    if (response.data && response.data.success) {
      manageMapelSuccess.value = 'Mata pelajaran berhasil disimpan!'
      
      // Update selected rombel
      selectedRombel.value.mapels = response.data.data?.mapel_aktif || []
      
      // Update rombel di daftar utama
      const index = rombels.value.findIndex(r => r.id === rombelId)
      if (index !== -1) {
        rombels.value[index].mapels = response.data.data?.mapel_aktif || []
      }

      setTimeout(() => {
        closeManageMapelModal()
      }, 1500)
    } else {
      throw new Error(response.data?.message || 'Gagal menyimpan mapel')
    }

  } catch (err) {
    console.error('Error saving mapels:', err)
    manageMapelError.value = err.response?.data?.message || err.message || 'Gagal menyimpan mata pelajaran'
  } finally {
    savingMapels.value = false
  }
}

// UI Functions untuk Manage Mapel
const openManageMapelModal = async () => {
  if (!selectedRombel.value) return

  showManageMapelModal.value = true
  mapelSearchQuery.value = ''
  manageMapelError.value = ''
  manageMapelSuccess.value = ''

  // Load all mapels jika belum dimuat
  if (allMapels.value.length === 0) {
    await fetchAllMapels()
  }

  // Set selected mapel ids dari rombel saat ini
  selectedMapelIds.value = selectedRombel.value.mapels?.map(m => m.id) || []
}

const closeManageMapelModal = () => {
  showManageMapelModal.value = false
  selectedMapelIds.value = []
  manageMapelError.value = ''
  manageMapelSuccess.value = ''
}

const selectAllMapels = () => {
  selectedMapelIds.value = allMapels.value.map(m => m.id)
}

const deselectAllMapels = () => {
  selectedMapelIds.value = []
}

const saveMapels = async () => {
  if (!selectedRombel.value) return

  await saveMapelsForRombel(selectedRombel.value.id, selectedMapelIds.value)
}

const manageMapelForRombel = (rombel) => {
  openMenuId.value = null
  selectedRombel.value = rombel
  openManageMapelModal()
}

const viewRombelMapels = (rombel) => {
  const mapelCount = rombel.mapels?.length || 0
  const mapelNames = rombel.mapels?.map(m => m.nama_mapel).join(', ') || 'Belum ada mapel'
  
  alert(`Mata pelajaran di ${rombel.nama_kelas} (${mapelCount} mapel):\n\n${mapelNames}`)
}

// Helper Functions untuk Tab Nilai
const viewSiswaAllNilai = (siswa) => {
  const nilaiList = selectedRombel.value?.mapels?.map(mapel => {
    const nilai = getSiswaNilai(siswa, mapel)
    const keterangan = getSiswaKeterangan(siswa, mapel)
    return `${mapel.kode_mapel}: ${nilai || '-'} ${keterangan ? `(${keterangan})` : ''}`
  }).join('\n') || 'Belum ada nilai'
  
  alert(`Detail nilai ${siswa.nama}:\n\n${nilaiList}`)
}

const calculateRataRataKelas = () => {
  const siswaDenganNilai = siswaList.value.filter(s => s.rata_rata_nilai !== null)
  if (siswaDenganNilai.length === 0) return 0
  
  const total = siswaDenganNilai.reduce((sum, siswa) => sum + siswa.rata_rata_nilai, 0)
  return total / siswaDenganNilai.length
}

const countSiswaDenganNilai = () => {
  return siswaList.value.filter(s => s.rata_rata_nilai !== null).length
}

const countMapelByFase = (fase) => {
  if (!selectedRombel.value?.mapels) return 0
  return selectedRombel.value.mapels.filter(m => m.fase === fase).length
}

const findMapelTertinggi = () => {
  if (!selectedRombel.value?.mapels || siswaList.value.length === 0) return null
  
  const mapelStats = selectedRombel.value.mapels.map(mapel => {
    const kolomNilai = `nilai_${formatMapelKey(mapel.kode_mapel)}`
    const total = siswaList.value.reduce((sum, siswa) => sum + (siswa[kolomNilai] || 0), 0)
    const count = siswaList.value.filter(s => s[kolomNilai] !== null).length
    const rataRata = count > 0 ? total / count : 0
    
    return {
      ...mapel,
      rata_rata: rataRata
    }
  })
  
  return mapelStats.reduce((prev, current) => 
    (prev.rata_rata > current.rata_rata) ? prev : current
  )
}

const findMapelTerendah = () => {
  if (!selectedRombel.value?.mapels || siswaList.value.length === 0) return null
  
  const mapelStats = selectedRombel.value.mapels.map(mapel => {
    const kolomNilai = `nilai_${formatMapelKey(mapel.kode_mapel)}`
    const total = siswaList.value.reduce((sum, siswa) => sum + (siswa[kolomNilai] || 0), 0)
    const count = siswaList.value.filter(s => s[kolomNilai] !== null).length
    const rataRata = count > 0 ? total / count : 0
    
    return {
      ...mapel,
      rata_rata: rataRata
    }
  })
  
  return mapelStats.reduce((prev, current) => 
    (prev.rata_rata < current.rata_rata) ? prev : current
  )
}

const refreshNilai = async () => {
  if (selectedRombel.value) {
    await fetchSiswaByRombel(selectedRombel.value.id)
  }
}

const exportNilai = () => {
  alert('Fitur ekspor nilai akan segera tersedia')
}

// API Functions untuk Siswa
const fetchSiswaByRombel = async (rombelId) => {
  loadingStudents.value = true
  studentError.value = ''
  siswaList.value = []

  try {
    console.log(`📡 Mengambil data siswa untuk rombel ID: ${rombelId}`)

    const response = await $api.get(`/api/siswa/rombel/${rombelId}`, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })

    console.log('✅ Response API siswa:', response.data)

    if (response.data && response.data.success) {
      siswaList.value = response.data.siswas || []

      if (response.data.rombel) {
        selectedRombel.value = response.data.rombel
      }

      console.log(`✅ ${response.data.total || siswaList.value.length} siswa ditemukan`)
    } else {
      throw new Error(response.data?.message || 'Gagal mengambil data siswa')
    }

  } catch (err) {
    console.error('❌ Error mengambil data siswa:', err)
    studentError.value = err.response?.data?.message || err.message || 'Gagal memuat data siswa'

    // Fallback ke mock data untuk development
    if (process.env.NODE_ENV === 'development' && !siswaList.value.length) {
      console.log('⚠️ Menggunakan data mock untuk development')
      siswaList.value = generateMockSiswaData(rombelId)
      studentError.value = ''
    }
  } finally {
    loadingStudents.value = false
  }
}

const createSiswa = async (siswaData) => {
  try {
    console.log('📤 Creating siswa:', siswaData)

    await authStore.ensureCsrfToken()

    const response = await $api.post('/api/siswa', siswaData, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })

    console.log('✅ Siswa created:', response.data)

    if (response.data && response.data.success) {
      return { success: true, data: response.data.data, message: response.data.message }
    } else {
      throw new Error(response.data?.message || 'Gagal membuat siswa')
    }

  } catch (err) {
    console.error('❌ Error creating siswa:', err)
    return { 
      success: false, 
      message: err.response?.data?.message || err.message || 'Gagal membuat siswa' 
    }
  }
}

const updateSiswa = async (id, siswaData) => {
  try {
    console.log(`📤 Updating siswa ID ${id}:`, siswaData)

    await authStore.ensureCsrfToken()

    const response = await $api.put(`/api/siswa/${id}`, siswaData, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })

    console.log('✅ Siswa updated:', response.data)

    if (response.data && response.data.success) {
      return { success: true, data: response.data.data, message: response.data.message }
    } else {
      throw new Error(response.data?.message || 'Gagal mengupdate siswa')
    }

  } catch (err) {
    console.error('❌ Error updating siswa:', err)
    return { 
      success: false, 
      message: err.response?.data?.message || err.message || 'Gagal mengupdate siswa' 
    }
  }
}

const deleteSiswaApi = async (id) => {
  try {
    console.log(`🗑️ Deleting siswa ID ${id}`)

    await authStore.ensureCsrfToken()

    const response = await $api.delete(`/api/siswa/${id}`, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })

    console.log('✅ Siswa deleted:', response.data)

    if (response.data && response.data.success) {
      return { success: true, message: response.data.message }
    } else {
      throw new Error(response.data?.message || 'Gagal menghapus siswa')
    }

  } catch (err) {
    console.error('❌ Error deleting siswa:', err)
    return { 
      success: false, 
      message: err.response?.data?.message || err.message || 'Gagal menghapus siswa' 
    }
  }
}

const fetchRombels = async () => {
  loading.value = true
  error.value = ''
  connected.value = false

  try {
    console.log('🔍 Fetching rombels from API...')

    await authStore.ensureCsrfToken()

    const response = await $api.get('/api/rombel', {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })

    console.log('✅ API Response received:', response)

    let data = []
    if (Array.isArray(response.data)) {
      data = response.data
    } else if (response.data && Array.isArray(response.data.data)) {
      data = response.data.data
    } else if (response.data && response.data.success && Array.isArray(response.data.data)) {
      data = response.data.data
    } else {
      console.warn('⚠️ Unexpected API response format:', response.data)
      data = []
    }

    rombels.value = data
    connected.value = true
    console.log('✅ Rombels loaded:', rombels.value.length, 'items')

  } catch (err) {
    console.error('❌ Error fetching rombels:', err)
    connected.value = false

    if (err.response?.status === 404) {
      error.value = 'Endpoint API tidak ditemukan. Pastikan route rombel sudah terdaftar.'
    } else if (err.response?.status === 500) {
      error.value = 'Server error. Pastikan tabel rombels sudah dibuat di database.'
    } else if (err.code === 'ECONNREFUSED') {
      error.value = 'Tidak dapat terhubung ke server. Pastikan backend Laravel berjalan.'
    } else {
      error.value = 'Gagal memuat data kelas: ' + (err.response?.data?.message || err.message || 'Terjadi kesalahan')
    }
  } finally {
    loading.value = false
  }
}

// UI Functions untuk Siswa
const openAddSiswaModal = () => {
  editSiswaMode.value = false
  editingSiswaId.value = null
  siswaForm.value = {
    nis: '',
    nama: '',
    jk: '',
    status: 'aktif',
    rombel_id: selectedRombel.value?.id || null
  }
  siswaFormError.value = ''
  siswaFormSuccess.value = ''
  showSiswaModal.value = true
}

const closeSiswaModal = () => {
  showSiswaModal.value = false
  editSiswaMode.value = false
  editingSiswaId.value = null
  siswaFormError.value = ''
  siswaFormSuccess.value = ''
  siswaForm.value = {
    nis: '',
    nama: '',
    jk: '',
    status: 'aktif',
    rombel_id: null
  }
}

const editSiswa = (siswa) => {
  openSiswaDetailMenuId.value = null
  editSiswaMode.value = true
  editingSiswaId.value = siswa.id
  siswaForm.value = {
    nis: siswa.nis || '',
    nama: siswa.nama || '',
    jk: siswa.jk || '',
    status: siswa.status || 'aktif',
    rombel_id: selectedRombel.value?.id || null
  }
  siswaFormError.value = ''
  siswaFormSuccess.value = ''
  showSiswaModal.value = true
}

const handleSiswaSubmit = async () => {
  if (!siswaForm.value.nis || !siswaForm.value.nama || !siswaForm.value.jk) {
    siswaFormError.value = 'NIS, Nama, dan Jenis Kelamin harus diisi'
    return
  }

  if (!siswaForm.value.rombel_id && selectedRombel.value) {
    siswaForm.value.rombel_id = selectedRombel.value.id
  }

  submittingSiswa.value = true
  siswaFormError.value = ''
  siswaFormSuccess.value = ''

  try {
    let result
    if (editSiswaMode.value) {
      result = await updateSiswa(editingSiswaId.value, siswaForm.value)
    } else {
      result = await createSiswa(siswaForm.value)
    }

    if (result.success) {
      siswaFormSuccess.value = editSiswaMode.value ? 'Data siswa berhasil diupdate!' : 'Siswa berhasil ditambahkan!'

      // Refresh siswa list
      await fetchSiswaByRombel(selectedRombel.value.id)

      setTimeout(() => {
        closeSiswaModal()
      }, 1500)
    } else {
      throw new Error(result.message)
    }

  } catch (err) {
    console.error('❌ Error saving siswa:', err)
    siswaFormError.value = err.message || 'Gagal menyimpan data siswa. Silakan coba lagi.'
  } finally {
    submittingSiswa.value = false
  }
}

const deleteSiswa = async (siswa) => {
  openSiswaDetailMenuId.value = null

  if (!confirm(`Apakah Anda yakin ingin menghapus siswa "${siswa.nama}" (NIS: ${siswa.nis})?`)) {
    return
  }

  try {
    const result = await deleteSiswaApi(siswa.id)

    if (result.success) {
      // Remove from local state
      siswaList.value = siswaList.value.filter(s => s.id !== siswa.id)
      
      siswaFormSuccess.value = `Siswa "${siswa.nama}" berhasil dihapus!`
      setTimeout(() => {
        siswaFormSuccess.value = ''
      }, 3000)
    } else {
      throw new Error(result.message)
    }

  } catch (err) {
    console.error('❌ Error deleting siswa:', err)
    alert(err.message || 'Gagal menghapus siswa. Silakan coba lagi.')
  }
}

const toggleSiswaMenu = (id) => {
  if (openSiswaMenuId.value === id) {
    openSiswaMenuId.value = null
  } else {
    openSiswaMenuId.value = id
    openSiswaDetailMenuId.value = null
  }
}

const toggleSiswaDetailMenu = (id) => {
  if (openSiswaDetailMenuId.value === id) {
    openSiswaDetailMenuId.value = null
  } else {
    openSiswaDetailMenuId.value = id
    openSiswaMenuId.value = null
  }
}

// UI Functions untuk Rombel
const showDetailView = async (rombel) => {
  console.log('🔍 Menampilkan detail kelas:', rombel)
  
  openMenuId.value = null
  
  selectedRombel.value = rombel
  
  showDetail.value = true
  activeTab.value = 'siswa'
  
  studentSearchQuery.value = ''
  
  await fetchSiswaByRombel(rombel.id)
  
  // Load mapel untuk rombel ini
  if (!selectedRombel.value.mapels) {
    await fetchRombelMapels(rombel.id)
  }
}

const backToKelas = () => {
  showDetail.value = false
  selectedRombel.value = null
  siswaList.value = []
  studentError.value = ''
  openSiswaMenuId.value = null
  openSiswaDetailMenuId.value = null
  activeTab.value = 'siswa'
}

const refreshStudents = async () => {
  if (selectedRombel.value) {
    await fetchSiswaByRombel(selectedRombel.value.id)
  }
}

const viewSiswaDetail = (siswa) => {
  openSiswaDetailMenuId.value = null
  
  const nilaiInfo = selectedRombel.value?.mapels?.map(mapel => {
    const nilai = getSiswaNilai(siswa, mapel)
    const keterangan = getSiswaKeterangan(siswa, mapel)
    return `${mapel.kode_mapel}: ${nilai || '-'} ${keterangan ? `(${keterangan})` : ''}`
  }).join('\n') || 'Belum ada nilai'
  
  alert(`Detail siswa:\nNama: ${siswa.nama}\nNIS: ${siswa.nis || '-'}\nJenis Kelamin: ${siswa.jk === 'L' ? 'Laki-laki' : 'Perempuan'}\nStatus: ${getStatusText(siswa.status)}\nRata-rata: ${siswa.rata_rata_nilai ? siswa.rata_rata_nilai.toFixed(2) : '-'}\n\nNilai:\n${nilaiInfo}`)
}

const toggleMenu = (id) => {
  if (openMenuId.value === id) {
    openMenuId.value = null
  } else {
    openMenuId.value = id
  }
}

const closeMenuOnOutsideClick = (event) => {
  if (openMenuId.value === null && openSiswaMenuId.value === null && openSiswaDetailMenuId.value === null) return
  
  const clickedButton = event.target.closest('button')
  const isMenuButton = clickedButton && clickedButton.contains(event.target)
  
  const clickedDropdown = event.target.closest('.absolute.right-0') || 
                          event.target.closest('.absolute.left-0')
  
  if (!isMenuButton && !clickedDropdown) {
    openMenuId.value = null
    openSiswaMenuId.value = null
    openSiswaDetailMenuId.value = null
  }
}

const closeGuruDropdownOnOutsideClick = (event) => {
  if (!showGuruDropdown.value) return
  
  const input = document.querySelector('input[placeholder="Ketik nama guru..."]')
  const dropdown = document.querySelector('.absolute.z-50.mt-1')
  
  if (input && dropdown && 
      !input.contains(event.target) && 
      !dropdown.contains(event.target)) {
    showGuruDropdown.value = false
  }
}

// Mock Data Functions
const generateMockSiswaData = (rombelId) => {
  const mockData = [
    { id: 1, nis: '0058269322', nama: 'Airlam Tugar Aya Putanto', jk: 'L', status: 'aktif', rombel_id: rombelId },
    { id: 2, nis: '0058269366', nama: 'AbSarayah Puna Halayat', jk: 'P', status: 'aktif', rombel_id: rombelId },
    { id: 3, nis: '0058269355', nama: 'AH Sariyo Nagarbo', jk: 'L', status: 'aktif', rombel_id: rombelId },
    { id: 4, nis: '0058172655', nama: 'Alpwah Ajye', jk: 'L', status: 'aktif', rombel_id: rombelId },
    { id: 5, nis: '0058281955', nama: 'Arleo Sagiri', jk: 'L', status: 'aktif', rombel_id: rombelId },
  ]
  
  // Tambahkan nilai acak untuk testing
  mockData.forEach(siswa => {
    siswa.rata_rata_nilai = Math.floor(Math.random() * 30) + 70 // nilai antara 70-100
    siswa.nilai_mtk = Math.floor(Math.random() * 30) + 70
    siswa.nilai_bind = Math.floor(Math.random() * 30) + 70
    siswa.nilai_bing = Math.floor(Math.random() * 30) + 70
  })
  
  return mockData
}

const deleteRombel = async (rombel) => {
  openMenuId.value = null

  if (!confirm(`Apakah Anda yakin ingin menghapus kelas "${rombel.nama_kelas}"? Tindakan ini tidak dapat dibatalkan.`)) {
    return
  }

  try {
    console.log('🗑️ Deleting rombel:', rombel.id)

    await authStore.ensureCsrfToken()

    await $api.delete(`/api/rombel/${rombel.id}`, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })

    // Remove from local state
    rombels.value = rombels.value.filter(r => r.id !== rombel.id)
    console.log('✅ Rombel deleted successfully')

    // Refresh gurus data
    await fetchAllGurus()

    formSuccess.value = `Kelas "${rombel.nama_kelas}" berhasil dihapus!`
    setTimeout(() => {
      formSuccess.value = ''
    }, 3000)

  } catch (err) {
    console.error('❌ Error deleting rombel:', err)

    if (err.response?.status === 422 && err.response?.data?.message) {
      alert(`Tidak dapat menghapus kelas: ${err.response.data.message}`)
    } else {
      alert(err.response?.data?.message || err.message || 'Gagal menghapus kelas. Silakan coba lagi.')
    }
  }
}

const testConnection = async () => {
  console.log('Testing connection to backend...')
  try {
    const response = await $api('/health')
    console.log('Backend health check:', response)
    alert('Koneksi ke backend berhasil! Server sedang berjalan.')
    return true
  } catch (err) {
    console.error('Backend connection failed:', err)
    alert('Koneksi ke backend gagal. Pastikan server Laravel berjalan di http://localhost:8000')
    return false
  }
}

const handleLogout = async () => {
  try {
    await authStore.logout()
  } catch (err) {
    console.error('Logout failed', err)
  }
}

// Lifecycle
onMounted(async () => {
  console.log('🚀 Initializing Kelas page...')
  
  if (typeof document !== 'undefined') {
    document.addEventListener('click', closeMenuOnOutsideClick)
    document.addEventListener('click', closeGuruDropdownOnOutsideClick)
  }

  if (process.client) {
    authStore.initializeAuth()
    await authStore.ensureCsrfToken()
    await fetchRombels()
    await fetchAllGurus() // Load data guru
  }
})

onUnmounted(() => {
  if (typeof document !== 'undefined') {
    document.removeEventListener('click', closeMenuOnOutsideClick)
    document.removeEventListener('click', closeGuruDropdownOnOutsideClick)
  }
})

// Watch untuk auto-fill kelas saat guru dipilih
watch(selectedGuru, (newGuru) => {
  if (newGuru && newGuru.wali_kelas && !formData.value.nama_kelas) {
    formData.value.nama_kelas = newGuru.wali_kelas
    autoDetectTingkat()
    extractJurusanFromKelas()
  }
})

// Watch untuk auto-detect tingkat saat nama kelas berubah
watch(() => formData.value.nama_kelas, (newNamaKelas) => {
  if (newNamaKelas && !formData.value.tingkat) {
    autoDetectTingkat()
  }
  if (newNamaKelas && !formData.value.jurusan) {
    extractJurusanFromKelas()
  }
})

// Watch untuk reset selectedGuru saat form direset
watch(() => formData.value.wali_kelas, (newWaliKelas) => {
  if (!newWaliKelas) {
    selectedGuru.value = null
    formData.value.user_id = null
  }
})
</script>

<style scoped>
.nuxt-link-active {
  background-color: rgba(243, 244, 246, 1);
  color: rgba(17, 24, 39, 1);
}

.animate-spin {
  animation: spin 1s linear infinite;
}

@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

/* Ensure dropdown appears above content */
.absolute.right-0, .absolute.left-0, .absolute.z-50 {
  z-index: 100;
}

/* Button focus styles */
button:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
}

/* Detail button styles */
.bg-blue-50 {
  background-color: #eff6ff;
}

.bg-blue-50:hover {
  background-color: #dbeafe;
}

/* Smooth transitions */
.hover\:bg-gray-50 {
  transition: background-color 0.2s;
}

/* Tab styles */
.border-b-2 {
  transition: border-color 0.2s;
}

/* Mapel card hover effect */
.hover\:shadow-md {
  transition: box-shadow 0.2s;
}

/* Table cell padding */
td {
  padding: 0.75rem 1rem;
}

/* Dropdown animation */
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.2s;
}
.fade-enter, .fade-leave-to {
  opacity: 0;
}

/* Scrollbar styling for dropdown */
.max-h-60::-webkit-scrollbar {
  width: 6px;
}
.max-h-60::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 3px;
}
.max-h-60::-webkit-scrollbar-thumb {
  background: #888;
  border-radius: 3px;
}
.max-h-60::-webkit-scrollbar-thumb:hover {
  background: #555;
}
</style>