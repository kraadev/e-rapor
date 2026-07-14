<!-- pages/siswa.vue -->
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
            <NuxtLink to="/siswa" class="flex items-center space-x-3 px-3 py-2 text-gray-900 bg-gray-100 rounded-md">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
              </svg>
              <span class="text-sm font-medium">Peserta Didik</span>
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
            <h1 class="text-2xl font-semibold text-gray-900">Peserta Didik</h1>
            <p class="text-sm text-gray-500 mt-1">Kelola data peserta didik (siswa) di sekolah.</p>
          </div>
          <div class="flex items-center space-x-3">
            <button class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
              </svg>
              Ekspor
            </button>
            <button
              @click="openAddModal"
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

      <!-- Main Content -->
      <main class="flex-1 overflow-y-auto p-8">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
          <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-600">Total Siswa</p>
                <p class="text-2xl font-semibold text-gray-900 mt-2">{{ siswaStats.total }}</p>
              </div>
              <div class="p-3 bg-blue-100 rounded-full">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13-7.647a4 4 0 00-4-4 4 4 0 00-4 4 4 4 0 004 4 4 4 0 004-4z"></path>
                </svg>
              </div>
            </div>
          </div>
          
          <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-600">Siswa Aktif</p>
                <p class="text-2xl font-semibold text-gray-900 mt-2">{{ siswaStats.aktif }}</p>
              </div>
              <div class="p-3 bg-green-100 rounded-full">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
            </div>
          </div>
          
          <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-600">Laki-laki</p>
                <p class="text-2xl font-semibold text-gray-900 mt-2">{{ siswaStats.laki }}</p>
              </div>
              <div class="p-3 bg-blue-100 rounded-full">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
              </div>
            </div>
          </div>
          
          <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-600">Perempuan</p>
                <p class="text-2xl font-semibold text-gray-900 mt-2">{{ siswaStats.perempuan }}</p>
              </div>
              <div class="p-3 bg-pink-100 rounded-full">
                <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
              </div>
            </div>
          </div>
        </div>

        <!-- Search and Filters -->
        <div class="bg-white rounded-lg shadow p-6 mb-6">
          <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Search -->
            <div class="md:col-span-2">
              <div class="relative">
                <input
                  v-model="searchQuery"
                  type="text"
                  placeholder="Cari NIS, Nama, atau Kelas..."
                  class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
              </div>
            </div>

            <!-- Filter by Status -->
            <div>
              <select
                v-model="statusFilter"
                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              >
                <option value="">Semua Status</option>
                <option value="aktif">Aktif</option>
                <option value="lulus">Lulus</option>
                <option value="pindah">Pindah</option>
                <option value="dropout">Dropout</option>
              </select>
            </div>

            <!-- Filter by Tahun Ajaran -->
            <div>
              <select
                v-model="tahunAjaranFilter"
                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              >
                <option value="">Semua Tahun Ajaran</option>
                <option v-for="tahun in uniqueTahunAjaran" :key="tahun" :value="tahun">{{ tahun }}</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Add/Edit Modal -->
        <div v-if="showAddModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50" @click.self="closeModal">
          <div class="relative top-10 mx-auto p-8 border w-full max-w-4xl shadow-lg rounded-lg bg-white max-h-[90vh] overflow-y-auto">
            <div class="mb-6">
              <h3 class="text-xl font-semibold text-gray-900">{{ editMode ? 'Edit Data Siswa' : 'Tambah Data Siswa' }}</h3>
            </div>
            
            <form @submit.prevent="handleSubmit" class="space-y-6">
              <!-- Informasi Pribadi -->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- NIS -->
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">NIS *</label>
                  <input
                    v-model="formData.nis"
                    type="text"
                    required
                    placeholder="Nomor Induk Siswa"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    :class="{ 'border-red-300': formErrors.nis }"
                  >
                  <p v-if="formErrors.nis" class="mt-1 text-sm text-red-600">{{ formErrors.nis }}</p>
                </div>

                <!-- NISN -->
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">NISN</label>
                  <input
                    v-model="formData.nisn"
                    type="text"
                    placeholder="Nomor Induk Siswa Nasional"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                  >
                </div>

                <!-- Nama -->
                <div class="md:col-span-2">
                  <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap *</label>
                  <input
                    v-model="formData.nama"
                    type="text"
                    required
                    placeholder="Nama lengkap siswa"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    :class="{ 'border-red-300': formErrors.nama }"
                  >
                  <p v-if="formErrors.nama" class="mt-1 text-sm text-red-600">{{ formErrors.nama }}</p>
                </div>

                <!-- Jenis Kelamin -->
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin *</label>
                  <select
                    v-model="formData.jk"
                    required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                  >
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>

                <!-- Agama -->
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Agama *</label>
                  <select
                    v-model="formData.agama"
                    required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                  >
                    <option value="">Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                  </select>
                </div>

                <!-- Tempat Lahir -->
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Tempat Lahir</label>
                  <input
                    v-model="formData.tempat_lahir"
                    type="text"
                    placeholder="Tempat lahir"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                  >
                </div>

                <!-- Tanggal Lahir -->
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
                  <input
                    v-model="formData.tanggal_lahir"
                    type="date"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                  >
                </div>
              </div>

              <!-- Informasi Kontak -->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- No HP -->
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">No. Telepon</label>
                  <input
                    v-model="formData.no_hp"
                    type="tel"
                    placeholder="Nomor telepon/handphone"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                  >
                </div>

                <!-- Alamat -->
                <div class="md:col-span-2">
                  <label class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                  <textarea
                    v-model="formData.alamat"
                    rows="3"
                    placeholder="Alamat lengkap"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                  ></textarea>
                </div>
              </div>

              <!-- Informasi Orang Tua -->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Nama Ayah</label>
                  <input
                    v-model="formData.nama_ayah"
                    type="text"
                    placeholder="Nama ayah"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                  >
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Pekerjaan Ayah</label>
                  <input
                    v-model="formData.pekerjaan_ayah"
                    type="text"
                    placeholder="Pekerjaan ayah"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                  >
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Nama Ibu</label>
                  <input
                    v-model="formData.nama_ibu"
                    type="text"
                    placeholder="Nama ibu"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                  >
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Pekerjaan Ibu</label>
                  <input
                    v-model="formData.pekerjaan_ibu"
                    type="text"
                    placeholder="Pekerjaan ibu"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                  >
                </div>
              </div>

              <!-- Informasi Akademik -->
              <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Kelas -->
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Kelas *</label>
                  <select
                    v-model="formData.rombel_id"
                    required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    :class="{ 'border-red-300': formErrors.rombel_id }"
                  >
                    <option value="">Pilih Kelas</option>
                    <option 
                      v-for="rombel in sortedRombelList" 
                      :key="rombel.id" 
                      :value="rombel.id"
                    >
                      {{ getRombelDisplayName(rombel) }}
                    </option>
                  </select>
                  <p v-if="formErrors.rombel_id" class="mt-1 text-sm text-red-600">{{ formErrors.rombel_id }}</p>
                </div>

                <!-- Status -->
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Status *</label>
                  <select
                    v-model="formData.status"
                    required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                  >
                    <option value="aktif">Aktif</option>
                    <option value="lulus">Lulus</option>
                    <option value="pindah">Pindah</option>
                    <option value="dropout">Dropout</option>
                  </select>
                </div>

                <!-- Tahun Ajaran -->
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Tahun Ajaran *</label>
                  <input
                    v-model="formData.tahun_ajaran"
                    type="text"
                    required
                    placeholder="2024/2025"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                  >
                </div>
              </div>

              <!-- Error & Success Messages -->
              <div v-if="formError" class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded">
                <div class="flex items-center">
                  <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                  <span class="font-medium">Kesalahan Validasi:</span>
                </div>
                <p class="mt-1 text-sm">{{ formError }}</p>
              </div>

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
              <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200">
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

        <!-- Detail Modal -->
        <div v-if="showDetailModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50" @click.self="closeDetailModal">
          <div class="relative top-10 mx-auto p-6 border w-full max-w-5xl shadow-2xl rounded-xl bg-white max-h-[90vh] overflow-y-auto">
            <div class="mb-6">
              <div class="flex justify-between items-start">
                <div>
                  <h3 class="text-2xl font-bold text-gray-900">Detail Peserta Didik</h3>
                  <p class="text-sm text-gray-500 mt-1">Informasi lengkap data siswa</p>
                </div>
                <button
                  @click="closeDetailModal"
                  class="text-gray-400 hover:text-gray-500 p-2 rounded-full hover:bg-gray-100"
                >
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
                </button>
              </div>
            </div>

            <!-- Profile Content -->
            <div v-if="detailSiswa" class="space-y-8">
              <!-- Profile Header -->
              <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-8">
                <div class="md:flex items-center">
                  <!-- Profile Photo/Icon -->
                  <div class="md:flex-shrink-0 mb-6 md:mb-0 md:mr-8">
                    <div class="relative">
                      <div class="w-32 h-32 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center shadow-lg">
                        <span class="text-4xl font-bold text-white">
                          {{ getInitials(detailSiswa.nama) }}
                        </span>
                      </div>
                      <!-- Status Badge -->
                      <div class="absolute -bottom-2 right-2">
                        <span :class="{
                          'px-3 py-1 rounded-full text-xs font-bold tracking-wide uppercase shadow': true,
                          'bg-green-100 text-green-800 border border-green-200': detailSiswa.status === 'aktif',
                          'bg-blue-100 text-blue-800 border border-blue-200': detailSiswa.status === 'lulus',
                          'bg-yellow-100 text-yellow-800 border border-yellow-200': detailSiswa.status === 'pindah',
                          'bg-red-100 text-red-800 border border-red-200': detailSiswa.status === 'dropout'
                        }">
                          {{ getStatusLabel(detailSiswa.status) }}
                        </span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Profile Info -->
                  <div class="flex-1">
                    <h1 class="text-3xl font-bold text-gray-900">{{ detailSiswa.nama }}</h1>
                    <p class="text-lg text-gray-600 mt-2">{{ getRombelName(detailSiswa.rombel_id) }}</p>
                    
                    <div class="flex flex-wrap gap-4 mt-4">
                      <div class="flex items-center">
                        <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path>
                        </svg>
                        <span class="text-gray-700">NIS: <strong>{{ detailSiswa.nis }}</strong></span>
                      </div>
                      <div class="flex items-center" v-if="detailSiswa.nisn">
                        <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span class="text-gray-700">NISN: <strong>{{ detailSiswa.nisn }}</strong></span>
                      </div>
                      <div class="flex items-center">
                        <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="text-gray-700">TA: <strong>{{ detailSiswa.tahun_ajaran }}</strong></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Main Content Grid -->
              <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column -->
                <div class="lg:col-span-2 space-y-8">
                  <!-- Informasi Pribadi -->
                  <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-6">
                      <h2 class="text-xl font-semibold text-gray-900">Informasi Pribadi</h2>
                      <span class="px-3 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded-full">
                        Data Diri
                      </span>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                      <div>
                        <label class="block text-sm font-medium text-gray-500 mb-1">Jenis Kelamin</label>
                        <div class="flex items-center">
                          <div :class="{
                            'w-8 h-8 rounded-full flex items-center justify-center mr-3': true,
                            'bg-blue-100': detailSiswa.jk === 'L',
                            'bg-pink-100': detailSiswa.jk === 'P'
                          }">
                            <svg v-if="detailSiswa.jk === 'L'" class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <svg v-else class="w-4 h-4 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                          </div>
                          <p class="text-gray-900 font-medium">{{ detailSiswa.jk === 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                        </div>
                      </div>
                      
                      <div>
                        <label class="block text-sm font-medium text-gray-500 mb-1">Agama</label>
                        <p class="text-gray-900 font-medium">{{ detailSiswa.agama }}</p>
                      </div>
                      
                      <div v-if="detailSiswa.tempat_lahir || detailSiswa.tanggal_lahir">
                        <label class="block text-sm font-medium text-gray-500 mb-1">Tempat & Tanggal Lahir</label>
                        <p class="text-gray-900">
                          {{ detailSiswa.tempat_lahir || '-' }}, 
                          {{ detailSiswa.tanggal_lahir ? formatDate(detailSiswa.tanggal_lahir) : '-' }}
                        </p>
                      </div>
                      
                      <div>
                        <label class="block text-sm font-medium text-gray-500 mb-1">Usia</label>
                        <p class="text-gray-900 font-medium">
                          {{ detailSiswa.tanggal_lahir ? calculateAge(detailSiswa.tanggal_lahir) : '-' }} tahun
                        </p>
                      </div>
                    </div>
                  </div>

                  <!-- Informasi Kontak -->
                  <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-6">
                      <h2 class="text-xl font-semibold text-gray-900">Informasi Kontak</h2>
                      <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">
                        Kontak
                      </span>
                    </div>
                    
                    <div class="space-y-4">
                      <div v-if="detailSiswa.alamat">
                        <label class="block text-sm font-medium text-gray-500 mb-1">Alamat</label>
                        <p class="text-gray-900">{{ detailSiswa.alamat }}</p>
                      </div>
                      
                      <div v-if="detailSiswa.no_hp">
                        <label class="block text-sm font-medium text-gray-500 mb-1">No. Telepon/HP</label>
                        <div class="flex items-center">
                          <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                          </svg>
                          <a :href="`tel:${detailSiswa.no_hp}`" class="text-blue-600 hover:text-blue-800 font-medium">
                            {{ detailSiswa.no_hp }}
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Informasi Akademik -->
                  <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-6">
                      <h2 class="text-xl font-semibold text-gray-900">Informasi Akademik</h2>
                      <span class="px-3 py-1 bg-purple-100 text-purple-800 text-xs font-medium rounded-full">
                        Akademik
                      </span>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                      <div>
                        <label class="block text-sm font-medium text-gray-500 mb-1">Kelas</label>
                        <div class="flex items-center">
                          <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                          </svg>
                          <p class="text-gray-900 font-medium">{{ getRombelName(detailSiswa.rombel_id) }}</p>
                        </div>
                      </div>
                      
                      <div v-if="detailRombelDetail">
                        <label class="block text-sm font-medium text-gray-500 mb-1">Wali Kelas</label>
                        <p class="text-gray-900 font-medium">{{ detailRombelDetail.wali_kelas }}</p>
                      </div>
                      
                      <div v-if="detailRombelDetail">
                        <label class="block text-sm font-medium text-gray-500 mb-1">Jurusan</label>
                        <p class="text-gray-900">{{ detailRombelDetail.jurusan }}</p>
                      </div>
                      
                      <div v-if="detailRombelDetail">
                        <label class="block text-sm font-medium text-gray-500 mb-1">Tingkat</label>
                        <p class="text-gray-900">{{ detailRombelDetail.tingkat }}</p>
                      </div>
                      
                      <div>
                        <label class="block text-sm font-medium text-gray-500 mb-1">Status</label>
                        <p class="text-gray-900 font-medium">{{ getStatusLabel(detailSiswa.status) }}</p>
                      </div>
                      
                      <div>
                        <label class="block text-sm font-medium text-gray-500 mb-1">Tahun Ajaran</label>
                        <p class="text-gray-900">{{ detailSiswa.tahun_ajaran }}</p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-8">
                  <!-- Informasi Orang Tua -->
                  <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-6">
                      <h2 class="text-xl font-semibold text-gray-900">Informasi Orang Tua</h2>
                      <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-xs font-medium rounded-full">
                        Keluarga
                      </span>
                    </div>
                    
                    <div class="space-y-6">
                      <!-- Ayah -->
                      <div v-if="detailSiswa.nama_ayah">
                        <div class="flex items-start mb-3">
                          <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                          </div>
                          <div>
                            <h3 class="font-medium text-gray-900">Ayah</h3>
                            <p class="text-gray-700">{{ detailSiswa.nama_ayah }}</p>
                            <p v-if="detailSiswa.pekerjaan_ayah" class="text-sm text-gray-500">{{ detailSiswa.pekerjaan_ayah }}</p>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Ibu -->
                      <div v-if="detailSiswa.nama_ibu">
                        <div class="flex items-start mb-3">
                          <div class="w-10 h-10 rounded-full bg-pink-100 flex items-center justify-center mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                          </div>
                          <div>
                            <h3 class="font-medium text-gray-900">Ibu</h3>
                            <p class="text-gray-700">{{ detailSiswa.nama_ibu }}</p>
                            <p v-if="detailSiswa.pekerjaan_ibu" class="text-sm text-gray-500">{{ detailSiswa.pekerjaan_ibu }}</p>
                          </div>
                        </div>
                      </div>
                      
                      <div v-if="!detailSiswa.nama_ayah && !detailSiswa.nama_ibu" class="text-center py-8">
                        <svg class="w-12 h-12 text-gray-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <p class="text-gray-500">Informasi orang tua belum diisi</p>
                      </div>
                    </div>
                  </div>

                  <!-- Statistik -->
                  <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-6">
                      <h2 class="text-xl font-semibold text-gray-900">Statistik</h2>
                      <span class="px-3 py-1 bg-yellow-100 text-yellow-800 text-xs font-medium rounded-full">
                        Stats
                      </span>
                    </div>
                    
                    <div class="space-y-4">
                      <div>
                        <label class="block text-sm font-medium text-gray-500 mb-1">Tanggal Masuk</label>
                        <p class="text-gray-900 font-medium">
                          {{ detailSiswa.tanggal_masuk ? formatDate(detailSiswa.tanggal_masuk) : 'Belum ditentukan' }}
                        </p>
                      </div>
                      
                      <div v-if="detailSiswa.tanggal_keluar && detailSiswa.status !== 'aktif'">
                        <label class="block text-sm font-medium text-gray-500 mb-1">Tanggal Keluar</label>
                        <p class="text-gray-900 font-medium">{{ formatDate(detailSiswa.tanggal_keluar) }}</p>
                      </div>
                      
                      <div>
                        <label class="block text-sm font-medium text-gray-500 mb-1">Lama Bersekolah</label>
                        <p class="text-gray-900 font-medium">
                          {{ detailSiswa.tanggal_masuk ? calculateSchoolDuration(detailSiswa.tanggal_masuk) : '-' }}
                        </p>
                      </div>
                    </div>
                  </div>

                  <!-- ID Card -->
                  <div class="bg-gradient-to-br from-blue-600 to-indigo-700 rounded-xl shadow-lg p-6 text-white">
                    <div class="text-center mb-6">
                      <h3 class="text-lg font-bold mb-2">Kartu Identitas Siswa</h3>
                      <p class="text-blue-100 text-sm">Tunjukkan kartu ini untuk keperluan administratif</p>
                    </div>
                    
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4">
                      <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center mr-3">
                          <span class="text-lg font-bold">
                            {{ getInitials(detailSiswa.nama) }}
                          </span>
                        </div>
                        <div>
                          <h4 class="font-bold">{{ detailSiswa.nama }}</h4>
                          <p class="text-blue-100 text-sm">{{ getRombelName(detailSiswa.rombel_id) }}</p>
                        </div>
                      </div>
                      
                      <div class="space-y-2 text-sm">
                        <div class="flex justify-between">
                          <span class="text-blue-200">NIS:</span>
                          <span class="font-medium">{{ detailSiswa.nis }}</span>
                        </div>
                        <div class="flex justify-between">
                          <span class="text-blue-200">Status:</span>
                          <span class="font-medium">{{ getStatusLabel(detailSiswa.status) }}</span>
                        </div>
                        <div class="flex justify-between">
                          <span class="text-blue-200">Tahun Ajaran:</span>
                          <span class="font-medium">{{ detailSiswa.tahun_ajaran }}</span>
                        </div>
                      </div>
                      
                      <div class="mt-6 pt-4 border-t border-white/20">
                        <p class="text-center text-blue-100 text-xs">
                          Kartu ini sah dan berlaku selama masa studi
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Action Buttons -->
              <div class="flex justify-between items-center pt-8 border-t border-gray-200">
                <div class="text-sm text-gray-500">
                  <p>Data terakhir diperbarui: {{ detailSiswa.updated_at ? formatDateTime(detailSiswa.updated_at) : '-' }}</p>
                </div>
                
                <div class="flex space-x-3">
                  <button 
                    @click="editSiswa(detailSiswa)"
                    class="inline-flex items-center px-4 py-2 border border-yellow-300 shadow-sm text-sm font-medium rounded-md text-yellow-700 bg-yellow-50 hover:bg-yellow-100"
                  >
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    Edit Data
                  </button>
                  <button 
                    @click="exportDetailData"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"
                  >
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Ekspor Data
                  </button>
                </div>
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
          <p class="text-red-700 mb-4">{{ error }}</p>
          <button 
            @click="fetchSiswa"
            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700"
          >
            Coba Lagi
          </button>
        </div>

        <!-- Table -->
        <div v-else class="bg-white rounded-lg shadow overflow-hidden">
          <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <button @click="toggleSort" class="flex items-center hover:text-gray-700">
                      No
                      <svg class="w-4 h-4 ml-1" :class="{ 'transform rotate-180': sortDescending }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
                      </svg>
                    </button>
                  </th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIS</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <button @click="toggleNameSort" class="flex items-center hover:text-gray-700">
                      Nama
                      <svg class="w-4 h-4 ml-1" :class="{ 'transform rotate-180': nameSortDescending }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
                      </svg>
                    </button>
                  </th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">JK</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Agama</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelas</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tahun Ajaran</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr v-for="(siswa, index) in sortedFilteredSiswa" :key="siswa.id" class="hover:bg-gray-50">
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ index + 1 }}.</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    {{ siswa.nis }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div>
                      <div class="text-sm font-medium text-gray-900">{{ siswa.nama }}</div>
                      <div class="text-sm text-gray-500" v-if="siswa.nisn">NISN: {{ siswa.nisn }}</div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                    <span :class="{
                      'px-2 py-1 rounded-full text-xs font-medium': true,
                      'bg-blue-100 text-blue-800': siswa.jk === 'L',
                      'bg-pink-100 text-pink-800': siswa.jk === 'P'
                    }">
                      {{ siswa.jk === 'L' ? 'Laki-laki' : 'Perempuan' }}
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ siswa.agama }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                    {{ getRombelName(siswa.rombel_id) }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span :class="{
                      'px-2 py-1 rounded-full text-xs font-medium': true,
                      'bg-green-100 text-green-800': siswa.status === 'aktif',
                      'bg-blue-100 text-blue-800': siswa.status === 'lulus',
                      'bg-yellow-100 text-yellow-800': siswa.status === 'pindah',
                      'bg-red-100 text-red-800': siswa.status === 'dropout'
                    }">
                      {{ getStatusLabel(siswa.status) }}
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ siswa.tahun_ajaran }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    <div class="flex space-x-2">
                      <button 
                        @click="viewSiswa(siswa)"
                        class="text-blue-600 hover:text-blue-900 flex items-center"
                      >
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        Lihat
                      </button>
                      <span class="text-gray-300">|</span>
                      <button 
                        @click="editSiswa(siswa)"
                        class="text-yellow-600 hover:text-yellow-900 flex items-center"
                      >
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Edit
                      </button>
                      <span class="text-gray-300">|</span>
                      <button 
                        @click="deleteSiswa(siswa)"
                        class="text-red-600 hover:text-red-900 flex items-center"
                      >
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                        Hapus
                      </button>
                    </div>
                  </td>
                </tr>
                <tr v-if="sortedFilteredSiswa.length === 0">
                  <td colspan="9" class="px-6 py-8 text-center text-gray-500">
                    <div class="flex flex-col items-center">
                      <svg class="w-12 h-12 text-gray-400 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13-7.647a4 4 0 00-4-4 4 4 0 00-4 4 4 4 0 004 4 4 4 0 004-4z"></path>
                      </svg>
                      <p class="text-gray-600">Tidak ada data siswa ditemukan</p>
                      <p class="text-sm text-gray-500 mt-1">Coba ubah kata kunci pencarian atau filter</p>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <!-- Pagination -->
          <div v-if="sortedFilteredSiswa.length > 0" class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
            <div class="flex-1 flex justify-between sm:hidden">
              <button 
                @click="currentPage > 1 ? currentPage-- : null"
                :disabled="currentPage === 1"
                class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed"
              >
                Sebelumnya
              </button>
              <button 
                @click="currentPage < totalPages ? currentPage++ : null"
                :disabled="currentPage === totalPages"
                class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed"
              >
                Selanjutnya
              </button>
            </div>
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
              <div>
                <p class="text-sm text-gray-700">
                  Menampilkan
                  <span class="font-medium">{{ startIndex + 1 }}</span>
                  sampai
                  <span class="font-medium">{{ Math.min(endIndex, sortedFilteredSiswa.length) }}</span>
                  dari
                  <span class="font-medium">{{ sortedFilteredSiswa.length }}</span>
                  siswa
                </p>
              </div>
              <div>
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                  <button 
                    @click="currentPage > 1 ? currentPage-- : null"
                    :disabled="currentPage === 1"
                    class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed"
                  >
                    <span class="sr-only">Sebelumnya</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                  </button>
                  
                  <button 
                    v-for="page in visiblePages" 
                    :key="page"
                    @click="currentPage = page"
                    :class="{
                      'relative inline-flex items-center px-4 py-2 border text-sm font-medium': true,
                      'z-10 bg-blue-50 border-blue-500 text-blue-600': currentPage === page,
                      'bg-white border-gray-300 text-gray-500 hover:bg-gray-50': currentPage !== page
                    }"
                  >
                    {{ page }}
                  </button>
                  
                  <button 
                    @click="currentPage < totalPages ? currentPage++ : null"
                    :disabled="currentPage === totalPages"
                    class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed"
                  >
                    <span class="sr-only">Selanjutnya</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                  </button>
                </nav>
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

const authStore = useAuthStore()
const { $api } = useNuxtApp()

definePageMeta({
  requiresAuth: true
})

// Data
const loading = ref(true)
const error = ref('')
const searchQuery = ref('')
const statusFilter = ref('')
const tahunAjaranFilter = ref('')
const showAddModal = ref(false)
const showDetailModal = ref(false)
const siswaList = ref([])
const rombelList = ref([])
const editMode = ref(false)
const submitting = ref(false)
const formError = ref('')
const formSuccess = ref('')
const editingId = ref(null)
const currentPage = ref(1)
const itemsPerPage = ref(10)

// Detail Modal Data
const detailSiswa = ref(null)
const detailRombelDetail = ref(null)

// Sorting state
const sortDescending = ref(false)
const nameSortDescending = ref(false)
const sortBy = ref('nama') // Default sort by name

// Form data structure matching database schema
const formData = ref({
  nis: '',
  nisn: '',
  nama: '',
  tempat_lahir: '',
  tanggal_lahir: '',
  alamat: '',
  no_hp: '',
  nama_ayah: '',
  nama_ibu: '',
  pekerjaan_ayah: '',
  pekerjaan_ibu: '',
  jk: '',
  agama: 'Islam',
  rombel_id: '',
  status: 'aktif',
  tahun_ajaran: '2024/2025',
  tanggal_masuk: '',
  tanggal_keluar: ''
})

const formErrors = ref({
  nis: '',
  nama: '',
  rombel_id: ''
})

// Computed properties
const siswaStats = computed(() => {
  const total = siswaList.value.length
  const aktif = siswaList.value.filter(s => s.status === 'aktif').length
  const laki = siswaList.value.filter(s => s.jk === 'L').length
  const perempuan = siswaList.value.filter(s => s.jk === 'P').length
  
  return { total, aktif, laki, perempuan }
})

const uniqueTahunAjaran = computed(() => {
  const tahunSet = new Set(siswaList.value.map(s => s.tahun_ajaran))
  return Array.from(tahunSet).sort().reverse()
})

// Rombel list sorted by nama_kelas
const sortedRombelList = computed(() => {
  return [...rombelList.value].sort((a, b) => {
    // Sort by tingkat first, then by nama_kelas
    if (a.tingkat && b.tingkat) {
      const tingkatComparison = a.tingkat.localeCompare(b.tingkat)
      if (tingkatComparison !== 0) return tingkatComparison
    }
    // Then sort by nama_kelas
    return (a.nama_kelas || '').localeCompare(b.nama_kelas || '')
  })
})

const filteredSiswa = computed(() => {
  let filtered = [...siswaList.value]
  
  // Apply search filter
  if (searchQuery.value) {
    const query = searchQuery.value.toLowerCase()
    filtered = filtered.filter(siswa => 
      siswa.nis?.toLowerCase().includes(query) ||
      siswa.nama?.toLowerCase().includes(query) ||
      siswa.nisn?.toLowerCase().includes(query) ||
      getRombelName(siswa.rombel_id)?.toLowerCase().includes(query)
    )
  }
  
  // Apply status filter
  if (statusFilter.value) {
    filtered = filtered.filter(siswa => siswa.status === statusFilter.value)
  }
  
  // Apply tahun ajaran filter
  if (tahunAjaranFilter.value) {
    filtered = filtered.filter(siswa => siswa.tahun_ajaran === tahunAjaranFilter.value)
  }
  
  return filtered
})

// Sorted siswa by name (alphabetical)
const sortedFilteredSiswa = computed(() => {
  let sorted = [...filteredSiswa.value]
  
  if (sortBy.value === 'nama') {
    // Sort by name alphabetically
    sorted.sort((a, b) => {
      const nameA = a.nama?.toLowerCase() || ''
      const nameB = b.nama?.toLowerCase() || ''
      
      if (nameSortDescending.value) {
        return nameB.localeCompare(nameA) // Z to A
      } else {
        return nameA.localeCompare(nameB) // A to Z
      }
    })
  } else if (sortBy.value === 'nis') {
    // Sort by NIS
    sorted.sort((a, b) => {
      const nisA = a.nis || ''
      const nisB = b.nis || ''
      
      if (sortDescending.value) {
        return nisB.localeCompare(nisA)
      } else {
        return nisA.localeCompare(nisB)
      }
    })
  }
  
  // Apply pagination
  const start = (currentPage.value - 1) * itemsPerPage.value
  const end = start + itemsPerPage.value
  return sorted.slice(start, end)
})

const totalPages = computed(() => {
  return Math.ceil(filteredSiswa.value.length / itemsPerPage.value)
})

const startIndex = computed(() => {
  return (currentPage.value - 1) * itemsPerPage.value
})

const endIndex = computed(() => {
  return startIndex.value + itemsPerPage.value
})

const visiblePages = computed(() => {
  const pages = []
  const maxVisible = 5
  let start = Math.max(1, currentPage.value - Math.floor(maxVisible / 2))
  let end = Math.min(totalPages.value, start + maxVisible - 1)
  
  if (end - start + 1 < maxVisible) {
    start = Math.max(1, end - maxVisible + 1)
  }
  
  for (let i = start; i <= end; i++) {
    pages.push(i)
  }
  
  return pages
})

// Helper functions
const getStatusLabel = (status) => {
  const labels = {
    'aktif': 'Aktif',
    'lulus': 'Lulus',
    'pindah': 'Pindah',
    'dropout': 'Dropout'
  }
  return labels[status] || status
}

const getRombelName = (rombelId) => {
  const rombel = rombelList.value.find(r => r.id == rombelId) // Use == for loose comparison
  if (rombel) {
    // Return nama_kelas from rombels table
    return rombel.nama_kelas || `Kelas ${rombel.id}`
  }
  return '-'
}

// Function to get display name for dropdown
const getRombelDisplayName = (rombel) => {
  let displayName = rombel.nama_kelas || `Kelas ${rombel.id}`
  
  // Add tingkat if available
  if (rombel.tingkat) {
    displayName = `${rombel.tingkat} ${displayName}`
  }
  
  // Add jurusan if available
  if (rombel.jurusan) {
    displayName += ` (${rombel.jurusan})`
  }
  
  // Add wali kelas if available
  if (rombel.wali_kelas) {
    displayName += ` - Wali: ${rombel.wali_kelas}`
  }
  
  return displayName
}

const getRombelDetail = (rombelId) => {
  const rombel = rombelList.value.find(r => r.id == rombelId)
  if (rombel) {
    return {
      nama_kelas: rombel.nama_kelas,
      wali_kelas: rombel.wali_kelas,
      jurusan: rombel.jurusan,
      tingkat: rombel.tingkat
    }
  }
  return null
}

// Helper functions for detail modal
const getInitials = (nama) => {
  if (!nama) return '?'
  const names = nama.split(' ')
  if (names.length === 1) return names[0].charAt(0).toUpperCase()
  return (names[0].charAt(0) + names[names.length - 1].charAt(0)).toUpperCase()
}

const formatDate = (dateString) => {
  if (!dateString) return '-'
  const date = new Date(dateString)
  return date.toLocaleDateString('id-ID', {
    weekday: 'long',
    year: 'numeric',
    month: 'long',
    day: 'numeric'
  })
}

const formatDateTime = (dateString) => {
  if (!dateString) return '-'
  const date = new Date(dateString)
  return date.toLocaleDateString('id-ID', {
    year: 'numeric',
    month: 'long',
    day: 'numeric',
    hour: '2-digit',
    minute: '2-digit'
  })
}

const calculateAge = (birthDate) => {
  if (!birthDate) return null
  const today = new Date()
  const birth = new Date(birthDate)
  let age = today.getFullYear() - birth.getFullYear()
  const monthDiff = today.getMonth() - birth.getMonth()
  
  if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birth.getDate())) {
    age--
  }
  
  return age
}

const calculateSchoolDuration = (entryDate) => {
  if (!entryDate) return '-'
  const today = new Date()
  const entry = new Date(entryDate)
  
  let years = today.getFullYear() - entry.getFullYear()
  let months = today.getMonth() - entry.getMonth()
  
  if (months < 0) {
    years--
    months += 12
  }
  
  if (years === 0) {
    return `${months} bulan`
  } else if (months === 0) {
    return `${years} tahun`
  } else {
    return `${years} tahun ${months} bulan`
  }
}

// Sorting functions
const toggleSort = () => {
  sortBy.value = 'nis'
  sortDescending.value = !sortDescending.value
  currentPage.value = 1
}

const toggleNameSort = () => {
  sortBy.value = 'nama'
  nameSortDescending.value = !nameSortDescending.value
  currentPage.value = 1
}

// Fetch functions
const fetchRombel = async () => {
  try {
    await authStore.ensureCsrfToken()
    
    const response = await $api.get('/api/rombels', {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })
    
    let data = []
    if (Array.isArray(response.data)) {
      data = response.data
    } else if (response.data.data && Array.isArray(response.data.data)) {
      data = response.data.data
    } else if (response.data.success && Array.isArray(response.data.data)) {
      data = response.data.data
    }
    
    rombelList.value = data
    console.log('✅ Rombel data loaded:', rombelList.value)
    
  } catch (err) {
    console.error('❌ Error fetching rombel:', err)
    // Silently fail for rombel - not critical
  }
}

const fetchSiswa = async () => {
  loading.value = true
  error.value = ''
  
  try {
    console.log('🔍 Fetching siswa data...')
    
    await authStore.ensureCsrfToken()
    
    const response = await $api.get('/api/siswas', {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })
    
    console.log('✅ API Response received:', response.data)
    
    // Handle different response formats
    let data = []
    if (Array.isArray(response.data)) {
      data = response.data
    } else if (response.data.data && Array.isArray(response.data.data)) {
      data = response.data.data
    } else if (response.data.success && Array.isArray(response.data.data)) {
      data = response.data.data
    } else {
      console.warn('⚠️ Unexpected API response format:', response.data)
      data = []
    }
    
    // Sort by name initially (A-Z)
    data.sort((a, b) => {
      const nameA = a.nama?.toLowerCase() || ''
      const nameB = b.nama?.toLowerCase() || ''
      return nameA.localeCompare(nameB)
    })
    
    siswaList.value = data
    console.log('✅ Siswa data loaded and sorted alphabetically:', siswaList.value.length, 'items')
    
    // Fetch rombel data for reference
    await fetchRombel()
    
  } catch (err) {
    console.error('❌ Error fetching siswa:', err)
    
    // Handle specific error cases
    if (err.response?.status === 404) {
      error.value = 'Endpoint API tidak ditemukan. Pastikan route siswas sudah terdaftar.'
    } else if (err.response?.status === 500) {
      error.value = 'Server error. Pastikan tabel siswas sudah dibuat di database.'
    } else if (err.code === 'ECONNREFUSED') {
      error.value = 'Tidak dapat terhubung ke server. Pastikan backend Laravel berjalan.'
    } else {
      error.value = 'Gagal memuat data siswa: ' + (err.response?.data?.message || err.message || 'Terjadi kesalahan')
    }
    
  } finally {
    loading.value = false
  }
}

// Modal functions
const openAddModal = () => {
  showAddModal.value = true
}

const closeModal = () => {
  showAddModal.value = false
  editMode.value = false
  editingId.value = null
  formError.value = ''
  formSuccess.value = ''
  formErrors.value = {
    nis: '',
    nama: '',
    rombel_id: ''
  }
  
  setTimeout(() => {
    formData.value = {
      nis: '',
      nisn: '',
      nama: '',
      tempat_lahir: '',
      tanggal_lahir: '',
      alamat: '',
      no_hp: '',
      nama_ayah: '',
      nama_ibu: '',
      pekerjaan_ayah: '',
      pekerjaan_ibu: '',
      jk: '',
      agama: 'Islam',
      rombel_id: '',
      status: 'aktif',
      tahun_ajaran: '2024/2025',
      tanggal_masuk: '',
      tanggal_keluar: ''
    }
  }, 300)
}

const openDetailModal = (siswa) => {
  detailSiswa.value = siswa
  detailRombelDetail.value = getRombelDetail(siswa.rombel_id)
  showDetailModal.value = true
}

const closeDetailModal = () => {
  showDetailModal.value = false
  setTimeout(() => {
    detailSiswa.value = null
    detailRombelDetail.value = null
  }, 300)
}

const validateForm = () => {
  let isValid = true
  formErrors.value = { nis: '', nama: '', rombel_id: '' }

  if (!formData.value.nis.trim()) {
    formErrors.value.nis = 'NIS wajib diisi'
    isValid = false
  }

  if (!formData.value.nama.trim()) {
    formErrors.value.nama = 'Nama lengkap wajib diisi'
    isValid = false
  }

  if (!formData.value.rombel_id) {
    formErrors.value.rombel_id = 'Kelas wajib dipilih'
    isValid = false
  }

  return isValid
}

// CRUD operations
const viewSiswa = (siswa) => {
  openDetailModal(siswa)
}

const editSiswa = (siswa) => {
  editMode.value = true
  editingId.value = siswa.id
  
  // Map database fields to form data
  formData.value = {
    nis: siswa.nis || '',
    nisn: siswa.nisn || '',
    nama: siswa.nama || '',
    tempat_lahir: siswa.tempat_lahir || '',
    tanggal_lahir: siswa.tanggal_lahir || '',
    alamat: siswa.alamat || '',
    no_hp: siswa.no_hp || '',
    nama_ayah: siswa.nama_ayah || '',
    nama_ibu: siswa.nama_ibu || '',
    pekerjaan_ayah: siswa.pekerjaan_ayah || '',
    pekerjaan_ibu: siswa.pekerjaan_ibu || '',
    jk: siswa.jk || 'L',
    agama: siswa.agama || 'Islam',
    rombel_id: siswa.rombel_id || '',
    status: siswa.status || 'aktif',
    tahun_ajaran: siswa.tahun_ajaran || '2024/2025',
    tanggal_masuk: siswa.tanggal_masuk || '',
    tanggal_keluar: siswa.tanggal_keluar || ''
  }
  
  showAddModal.value = true
}

const deleteSiswa = async (siswa) => {
  const rombelName = getRombelName(siswa.rombel_id)
  const confirmMessage = `Apakah Anda yakin ingin menghapus siswa:\n\nNama: ${siswa.nama}\nNIS: ${siswa.nis}\nKelas: ${rombelName}\n\nTindakan ini tidak dapat dibatalkan!`
  
  if (!confirm(confirmMessage)) {
    return
  }

  try {
    console.log('🗑️ Deleting siswa:', siswa.id)
    
    await authStore.ensureCsrfToken()
    
    await $api.delete(`/api/siswas/${siswa.id}`, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })

    console.log('✅ Siswa deleted successfully')
    
    // Show success message
    alert(`Siswa "${siswa.nama}" berhasil dihapus!`)
    
    await fetchSiswa()
    
  } catch (err) {
    console.error('❌ Error deleting siswa:', err)
    const errorMessage = err.response?.data?.message || err.message || 'Terjadi kesalahan yang tidak diketahui'
    alert(`Gagal menghapus siswa: ${errorMessage}`)
  }
}

const exportDetailData = () => {
  if (!detailSiswa.value) return
  
  const data = {
    'Nama Lengkap': detailSiswa.value.nama,
    'NIS': detailSiswa.value.nis,
    'NISN': detailSiswa.value.nisn || '-',
    'Jenis Kelamin': detailSiswa.value.jk === 'L' ? 'Laki-laki' : 'Perempuan',
    'Agama': detailSiswa.value.agama,
    'Tempat Lahir': detailSiswa.value.tempat_lahir || '-',
    'Tanggal Lahir': detailSiswa.value.tanggal_lahir ? formatDate(detailSiswa.value.tanggal_lahir) : '-',
    'Alamat': detailSiswa.value.alamat || '-',
    'No. Telepon': detailSiswa.value.no_hp || '-',
    'Kelas': getRombelName(detailSiswa.value.rombel_id),
    'Status': getStatusLabel(detailSiswa.value.status),
    'Tahun Ajaran': detailSiswa.value.tahun_ajaran,
    'Nama Ayah': detailSiswa.value.nama_ayah || '-',
    'Pekerjaan Ayah': detailSiswa.value.pekerjaan_ayah || '-',
    'Nama Ibu': detailSiswa.value.nama_ibu || '-',
    'Pekerjaan Ibu': detailSiswa.value.pekerjaan_ibu || '-',
    'Tanggal Masuk': detailSiswa.value.tanggal_masuk ? formatDate(detailSiswa.value.tanggal_masuk) : '-',
    'Tanggal Keluar': detailSiswa.value.tanggal_keluar ? formatDate(detailSiswa.value.tanggal_keluar) : '-'
  }
  
  // Create CSV content
  let csvContent = "data:text/csv;charset=utf-8," 
  csvContent += "Label,Nilai\r\n"
  
  Object.entries(data).forEach(([key, value]) => {
    csvContent += `"${key}","${value}"\r\n`
  })
  
  // Create download link
  const encodedUri = encodeURI(csvContent)
  const link = document.createElement("a")
  link.setAttribute("href", encodedUri)
  link.setAttribute("download", `data-siswa-${detailSiswa.value.nis}.csv`)
  document.body.appendChild(link)
  link.click()
  document.body.removeChild(link)
}

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
    
    const url = editMode.value ? `/api/siswas/${editingId.value}` : '/api/siswas'
    const method = editMode.value ? 'put' : 'post'

    const requestData = {
      nis: formData.value.nis.trim(),
      nisn: formData.value.nisn.trim() || null,
      nama: formData.value.nama.trim(),
      tempat_lahir: formData.value.tempat_lahir.trim() || null,
      tanggal_lahir: formData.value.tanggal_lahir || null,
      alamat: formData.value.alamat.trim() || null,
      no_hp: formData.value.no_hp.trim() || null,
      nama_ayah: formData.value.nama_ayah.trim() || null,
      nama_ibu: formData.value.nama_ibu.trim() || null,
      pekerjaan_ayah: formData.value.pekerjaan_ayah.trim() || null,
      pekerjaan_ibu: formData.value.pekerjaan_ibu.trim() || null,
      jk: formData.value.jk,
      agama: formData.value.agama,
      rombel_id: formData.value.rombel_id,
      status: formData.value.status,
      tahun_ajaran: formData.value.tahun_ajaran.trim(),
      tanggal_masuk: formData.value.tanggal_masuk || null,
      tanggal_keluar: formData.value.tanggal_keluar || null
    }

    console.log('📦 Prepared data:', requestData)
    
    const response = await $api[method](url, requestData, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      }
    })
    
    console.log('✅ Siswa saved successfully:', response.data)
    
    // Show success message based on action
    if (editMode.value) {
      formSuccess.value = `Data siswa "${formData.value.nama}" berhasil diperbarui!`
      alert(`Data siswa "${formData.value.nama}" berhasil diperbarui!`)
    } else {
      formSuccess.value = `Siswa "${formData.value.nama}" berhasil ditambahkan!`
      alert(`Siswa "${formData.value.nama}" berhasil ditambahkan ke sistem!`)
    }
    
    setTimeout(async () => {
      await fetchSiswa()
      closeModal()
    }, 1500)
    
  } catch (err) {
    console.error('❌ Error saving siswa:', err)
    
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
      formError.value = err.message || 'Gagal menyimpan data siswa'
    }
  } finally {
    submitting.value = false
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
  console.log('🚀 Initializing siswa page...')
  
  if (process.client) {
    try {
      // Initialize auth store
      await authStore.initializeAuth()
      
      // Check if authenticated
      if (!authStore.isAuthenticated || !authStore.token) {
        console.warn('User not authenticated, checking localStorage...')
        const token = localStorage.getItem('token')
        const user = localStorage.getItem('user')
        
        if (token && user) {
          authStore.token = token
          authStore.user = JSON.parse(user)
          authStore.isAuthenticated = true
          console.log('Auth restored from localStorage')
        } else {
          console.error('No auth found, might need to login')
          // Don't redirect here, let the middleware handle it
        }
      }
      
      await authStore.ensureCsrfToken()
      await fetchSiswa()
    } catch (error) {
      console.error('Error initializing siswa page:', error)
      // Handle initialization error
    }
  }
})

// Watch for filter changes to reset pagination
watch([searchQuery, statusFilter, tahunAjaranFilter], () => {
  currentPage.value = 1
})
</script>

<style scoped>
/* Custom scrollbar for modal */
.modal-content {
  scrollbar-width: thin;
  scrollbar-color: #d1d5db #f3f4f6;
}

.modal-content::-webkit-scrollbar {
  width: 8px;
}

.modal-content::-webkit-scrollbar-track {
  background: #f3f4f6;
}

.modal-content::-webkit-scrollbar-thumb {
  background-color: #d1d5db;
  border-radius: 4px;
}

/* Sorting button styles */
th button {
  transition: color 0.2s ease;
}

th button:hover {
  color: #374151; /* gray-700 */
}

th svg {
  transition: transform 0.2s ease;
}
</style>