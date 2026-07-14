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
            <NuxtLink to="/guru" class="flex items-center space-x-3 px-3 py-2 text-gray-900 bg-gray-100 rounded-md">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
              </svg>
              <span class="text-sm font-medium">Guru</span>
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
          <li v-if="isAdmin">
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
            <h1 class="text-2xl font-semibold text-gray-900">Guru</h1>
            <p class="text-sm text-gray-500 mt-1">Kelola informasi dan peran guru di dalam sistem.</p>
            <!-- Role Indicator -->
            <div class="flex items-center mt-1">
              <span class="text-xs text-gray-400">Login sebagai:</span>
              <span :class="getRoleBadgeClass(authStore.user?.role)" class="ml-2 px-2 py-1 text-xs font-medium rounded-full">
                {{ authStore.user?.role || 'Unknown' }}
              </span>
            </div>
          </div>
          <div class="flex items-center space-x-3">
            <!-- Filter Dropdown -->
            <div class="relative">
              <button 
                @click="showFilterDropdown = !showFilterDropdown"
                class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
              >
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                </svg>
                Filter
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>

              <!-- Filter Dropdown Menu -->
              <div v-if="showFilterDropdown" class="absolute right-0 mt-2 w-64 bg-white rounded-md shadow-lg border border-gray-200 z-50">
                <div class="py-1">
                  <button
                    @click="setFilter('all')"
                    :class="activeFilter === 'all' ? 'bg-blue-50 text-blue-700' : 'text-gray-700'"
                    class="flex items-center w-full px-4 py-2 text-sm hover:bg-gray-50"
                  >
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                    </svg>
                    Semua Guru
                  </button>
                  
                  <button
                    @click="setFilter('wali_kelas')"
                    :class="activeFilter === 'wali_kelas' ? 'bg-blue-50 text-blue-700' : 'text-gray-700'"
                    class="flex items-center w-full px-4 py-2 text-sm hover:bg-gray-50"
                  >
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                    Wali Kelas
                  </button>
                  
                  <button
                    @click="setFilter('pembina_ekskul')"
                    :class="activeFilter === 'pembina_ekskul' ? 'bg-blue-50 text-blue-700' : 'text-gray-700'"
                    class="flex items-center w-full px-4 py-2 text-sm hover:bg-gray-50"
                  >
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    Pembina Ekstrakurikuler
                  </button>
                  
                  <button
                    @click="setFilter('pembina_p5')"
                    :class="activeFilter === 'pembina_p5' ? 'bg-blue-50 text-blue-700' : 'text-gray-700'"
                    class="flex items-center w-full px-4 py-2 text-sm hover:bg-gray-50"
                  >
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Pembina P5
                  </button>

                  <!-- Reset Filter -->
                  <div class="border-t border-gray-100 mt-1 pt-1">
                    <button
                      @click="resetFilter"
                      class="flex items-center w-full px-4 py-2 text-sm text-gray-500 hover:bg-gray-50"
                    >
                      <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                      </svg>
                      Reset Filter
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tambah Guru Button - Hanya untuk Admin -->
            <button 
              v-if="isAdmin"
              @click="showAddModal = true"
              class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
            >
              + Tambah Guru
            </button>

            <!-- Info untuk Guru -->
            <div v-else class="text-sm text-gray-500 italic">
              Hanya admin yang dapat menambah/mengedit data guru
            </div>
          </div>
        </div>

        <!-- Active Filter Badge -->
        <div v-if="activeFilter !== 'all'" class="mt-3 flex items-center space-x-2">
          <span class="text-sm text-gray-600">Filter aktif:</span>
          <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
            {{ getFilterLabel(activeFilter) }}
            <button @click="resetFilter" class="ml-1 hover:text-blue-600">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </span>
        </div>
      </div>

      <!-- Main Content -->
      <main class="flex-1 overflow-y-auto p-8">
        <!-- Add/Edit Modal - Hanya untuk Admin -->
        <div v-if="showAddModal && isAdmin" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50" @click.self="closeModal">
          <div class="relative top-20 mx-auto p-8 border w-full max-w-2xl shadow-lg rounded-lg bg-white">
            <div class="mb-6">
              <h3 class="text-xl font-semibold text-gray-900">{{ editMode ? 'Edit Guru' : 'Tambah Guru Baru' }}</h3>
            </div>
            
            <form @submit.prevent="handleSubmit" class="space-y-4">
              <!-- Nama Guru -->
              <div>
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Guru *</label>
                <input
                  id="nama"
                  v-model="formData.name"
                  type="text"
                  required
                  placeholder="Nama Lengkap Guru"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
              </div>

              <!-- Email -->
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                <input
                  id="email"
                  v-model="formData.email"
                  type="email"
                  required
                  placeholder="email@sekolah.sch.id"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
              </div>

              <!-- Role -->
              <div>
                <label for="role" class="block text-sm font-medium text-gray-700 mb-1">Role *</label>
                <select
                  id="role"
                  v-model="formData.role"
                  required
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
                  <option value="guru">Guru</option>
                  <option value="admin">Admin</option>
                </select>
              </div>

              <!-- Password untuk Tambah Guru -->
              <div v-if="!editMode">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password *</label>
                <input
                  id="password"
                  v-model="formData.password"
                  type="password"
                  required
                  placeholder="Minimal 8 karakter"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
                <p class="text-xs text-gray-500 mt-1">Password wajib diisi untuk user baru</p>
              </div>

              <!-- Password untuk Edit Guru -->
              <div v-else>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input
                  id="password"
                  v-model="formData.password"
                  type="password"
                  placeholder="Kosongkan jika tidak ingin mengubah"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
                <p class="text-xs text-gray-500 mt-1">Kosongkan jika tidak ingin mengubah password</p>
              </div>

              <!-- Konfirmasi Password untuk Tambah Guru -->
              <div v-if="!editMode && formData.password">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password *</label>
                <input
                  id="password_confirmation"
                  v-model="formData.password_confirmation"
                  type="password"
                  required
                  placeholder="Ulangi password"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
              </div>

              <!-- Wali Kelas -->
              <div>
                <label for="wali_kelas" class="block text-sm font-medium text-gray-700 mb-1">Wali Kelas</label>
                <select
                  id="wali_kelas"
                  v-model="formData.wali_kelas"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
                  <option value="">Tidak Ada</option>
                  
                  <optgroup label="DKV (Desain Komunikasi Visual)">
                    <option value="X DKV 1">X DKV 1</option>
                    <option value="X DKV 2">X DKV 2</option>
                    <option value="XI DKV 1">XI DKV 1</option>
                    <option value="XI DKV 2">XI DKV 2</option>
                    <option value="XII DKV 1">XII DKV 1</option>
                    <option value="XII DKV 2">XII DKV 2</option>
                  </optgroup>
                  
                  <optgroup label="RPL (Rekayasa Perangkat Lunak)">
                    <option value="X RPL 1">X RPL 1</option>
                    <option value="X RPL 2">X RPL 2</option>
                    <option value="XI RPL 1">XI RPL 1</option>
                    <option value="XI RPL 2">XI RPL 2</option>
                    <option value="XII RPL 1">XII RPL 1</option>
                    <option value="XII RPL 2">XII RPL 2</option>
                  </optgroup>
                  
                  <optgroup label="ANM (Animasi)">
                    <option value="X ANM 1">X ANM 1</option>
                    <option value="X ANM 2">X ANM 2</option>
                    <option value="XI ANM 1">XI ANM 1</option>
                    <option value="XI ANM 2">XI ANM 2</option>
                    <option value="XII ANM 1">XII ANM 1</option>
                    <option value="XII ANM 2">XII ANM 2</option>
                  </optgroup>
                </select>
              </div>

              <!-- Pembina Ekstrakurikuler -->
              <div>
                <label for="pembina_ekskul" class="block text-sm font-medium text-gray-700 mb-1">Pembina Ekstrakurikuler</label>
                <select
                  id="pembina_ekskul"
                  v-model="formData.pembina_ekskul"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
                  <option value="">Tidak Ada</option>
                  <option value="Paskibra">Paskibra</option>
                  <option value="Pramuka">Pramuka</option>
                  <option value="Basket">Basket</option>
                  <option value="Futsal">Futsal</option>
                  <option value="Badminton">Badminton</option>
                  <option value="Voli">Voli</option>
                  <option value="Rohani Islam">Rohani Islam</option>
                  <option value="English Club">English Club</option>
                  <option value="Seni Tari">Seni Tari</option>
                  <option value="Seni Musik">Seni Musik</option>
                  <option value="Animation Club">Animation Club</option>
                  <option value="Coding Club">Coding Club</option>
                </select>
              </div>

              <!-- Pembina P5 -->
              <div>
                <label for="pembina_p5" class="block text-sm font-medium text-gray-700 mb-1">Pembina P5</label>
                <select
                  id="pembina_p5"
                  v-model="formData.pembina_p5"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
                  <option value="">Tidak Diasosiasikan</option>
                  <option value="Bangunlah Jiwa dan Raganya">Bangunlah Jiwa dan Raganya</option>
                  <option value="Berekayasa dan Berteknologi untuk Membangun NKRI">Berekayasa dan Berteknologi untuk Membangun NKRI</option>
                  <option value="Bhinneka Tunggal Ika">Bhinneka Tunggal Ika</option>
                  <option value="Gaya Hidup Berkelanjutan">Gaya Hidup Berkelanjutan</option>
                  <option value="Kearifan Lokal">Kearifan Lokal</option>
                  <option value="Kewirausahaan">Kewirausahaan</option>
                </select>
              </div>

              <!-- Error Message dengan detail -->
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

        <!-- Access Warning untuk Guru -->
        <div v-if="!isAdmin" class="mb-6 bg-yellow-50 border border-yellow-200 rounded-lg p-4">
          <div class="flex items-center">
            <svg class="w-5 h-5 text-yellow-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 15.5c-.77.833.192 2.5 1.732 2.5z"></path>
            </svg>
            <div>
              <h3 class="text-sm font-medium text-yellow-800">Akses Terbatas</h3>
              <p class="text-sm text-yellow-700 mt-1">
                Anda login sebagai <strong>Guru</strong>. Hanya dapat melihat data, tidak dapat menambah, mengedit, atau menghapus data guru.
              </p>
            </div>
          </div>
        </div>

        <!-- Search Bar -->
        <div class="mb-6">
          <div class="relative">
            <input
              v-model="searchQuery"
              type="text"
              :placeholder="getSearchPlaceholder()"
              class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
            >
            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
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
            @click="fetchUsers"
            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700"
          >
            Coba Lagi
          </button>
        </div>

        <!-- Table -->
        <div v-else class="bg-white rounded-lg shadow overflow-hidden">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No.</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Guru</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Wali Kelas</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pembina Ekstrakurikuler</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pembina P5</th>
                <th v-if="isAdmin" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr v-for="(user, index) in filteredUsers" :key="user.id" class="hover:bg-gray-50">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ index + 1 }}.</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ user.name }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ user.email }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span :class="getStatusClass(user.wali_kelas)" class="px-2 py-1 text-xs font-medium rounded">
                    {{ user.wali_kelas || 'Tidak Ada' }}
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span :class="getStatusClass(user.pembina_ekskul)" class="px-2 py-1 text-xs font-medium rounded">
                    {{ user.pembina_ekskul || 'Tidak Ada' }}
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span :class="getStatusClass(user.pembina_p5)" class="px-2 py-1 text-xs font-medium rounded">
                    {{ user.pembina_p5 || 'Tidak Diasosiasikan' }}
                  </span>
                </td>
                <!-- Aksi Column - Hanya untuk Admin -->
                <td v-if="isAdmin" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <div class="flex space-x-2">
                    <button 
                      @click="editUser(user)"
                      class="text-blue-600 hover:text-blue-900"
                    >
                      Edit
                    </button>
                    <span class="text-gray-300">|</span>
                    <button 
                      @click="deleteUser(user)"
                      class="text-red-600 hover:text-red-900"
                    >
                      Hapus
                    </button>
                  </div>
                </td>
              </tr>
              <tr v-if="filteredUsers.length === 0">
                <td :colspan="isAdmin ? 7 : 6" class="px-6 py-8 text-center text-gray-500">
                  <div class="flex flex-col items-center">
                    <svg class="w-12 h-12 text-gray-400 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="text-gray-600">Tidak ada data guru ditemukan</p>
                    <p class="text-sm text-gray-500 mt-1">Coba ubah filter atau kata kunci pencarian</p>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
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

// Computed untuk cek role user
const isAdmin = computed(() => {
  return authStore.user?.role === 'admin'
})

const loading = ref(true)
const error = ref('')
const searchQuery = ref('')
const showAddModal = ref(false)
const showFilterDropdown = ref(false)
const usersList = ref([])
const editMode = ref(false)
const submitting = ref(false)
const formError = ref('')
const formSuccess = ref('')
const editingId = ref(null)
const activeFilter = ref('all')

const formData = ref({
  name: '',
  email: '',
  password: '',
  password_confirmation: '',
  role: 'guru',
  wali_kelas: '',
  pembina_ekskul: '',
  pembina_p5: ''
})

// Filter users based on search and active filter
const filteredUsers = computed(() => {
  let filtered = usersList.value
  
  // Apply filter berdasarkan jenis
  if (activeFilter.value !== 'all') {
    filtered = filtered.filter(user => {
      switch (activeFilter.value) {
        case 'wali_kelas':
          return user.wali_kelas && user.wali_kelas !== '' && user.wali_kelas !== 'Tidak Ada'
        case 'pembina_ekskul':
          return user.pembina_ekskul && user.pembina_ekskul !== '' && user.pembina_ekskul !== 'Tidak Ada'
        case 'pembina_p5':
          return user.pembina_p5 && user.pembina_p5 !== '' && user.pembina_p5 !== 'Tidak Diasosiasikan'
        default:
          return true
      }
    })
  }
  
  // Apply search query
  if (searchQuery.value) {
    const query = searchQuery.value.toLowerCase()
    filtered = filtered.filter(user => 
      user.name.toLowerCase().includes(query) ||
      user.email.toLowerCase().includes(query) ||
      (user.wali_kelas && user.wali_kelas.toLowerCase().includes(query)) ||
      (user.pembina_ekskul && user.pembina_ekskul.toLowerCase().includes(query)) ||
      (user.pembina_p5 && user.pembina_p5.toLowerCase().includes(query))
    )
  }
  
  return filtered
})

// Get role badge class
const getRoleBadgeClass = (role) => {
  switch (role) {
    case 'admin':
      return 'bg-purple-100 text-purple-800'
    case 'guru':
      return 'bg-blue-100 text-blue-800'
    default:
      return 'bg-gray-100 text-gray-800'
  }
}

// Set active filter
const setFilter = (filterType) => {
  activeFilter.value = filterType
  showFilterDropdown.value = false
}

// Reset filter
const resetFilter = () => {
  activeFilter.value = 'all'
  searchQuery.value = ''
  showFilterDropdown.value = false
}

// Get filter label
const getFilterLabel = (filter) => {
  const labels = {
    'all': 'Semua Guru',
    'wali_kelas': 'Wali Kelas',
    'pembina_ekskul': 'Pembina Ekstrakurikuler',
    'pembina_p5': 'Pembina P5'
  }
  return labels[filter] || filter
}

// Get search placeholder based on active filter
const getSearchPlaceholder = () => {
  const placeholders = {
    'all': 'Cari nama guru, email, atau peran...',
    'wali_kelas': 'Cari wali kelas...',
    'pembina_ekskul': 'Cari pembina ekstrakurikuler...',
    'pembina_p5': 'Cari pembina P5...'
  }
  return placeholders[activeFilter.value] || 'Cari...'
}

// Get status badge class
const getStatusClass = (status) => {
  if (!status || status === 'Tidak Ada' || status === 'Tidak Diasosiasikan') {
    return 'bg-red-100 text-red-800'
  }
  return 'bg-green-100 text-green-800'
}

// Fetch all users data (hanya guru)
const fetchUsers = async () => {
  loading.value = true
  error.value = ''
  
  try {
    console.log('🔍 Fetching users data...')
    
    await authStore.ensureCsrfToken()
    
    const response = await $api.get('/api/users', {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })
    
    console.log('✅ API Response received:', response.data)
    
    // Normalize response
    let data = []
    if (Array.isArray(response.data)) {
      data = response.data
    } else if (response.data.data && Array.isArray(response.data.data)) {
      data = response.data.data
    } else if (response.data.success && Array.isArray(response.data.data)) {
      data = response.data.data
    }
    
    usersList.value = data
    console.log('✅ Users data loaded:', usersList.value.length, 'items')
    
  } catch (err) {
    console.error('❌ Error fetching users:', err)
    error.value = 'Gagal memuat data users: ' + (err.response?.data?.message || err.message || 'Terjadi kesalahan')
    
    if (err.response?.status === 401) {
      console.log('🔒 Unauthorized, logging out...')
      await authStore.logout()
    }
  } finally {
    loading.value = false
  }
}

// Close modal
const closeModal = () => {
  showAddModal.value = false
  editMode.value = false
  editingId.value = null
  formError.value = ''
  formSuccess.value = ''
  
  setTimeout(() => {
    formData.value = {
      name: '',
      email: '',
      password: '',
      password_confirmation: '',
      role: 'guru',
      wali_kelas: '',
      pembina_ekskul: '',
      pembina_p5: ''
    }
  }, 300)
}

// Edit user - Hanya untuk Admin
const editUser = (user) => {
  if (!isAdmin.value) {
    alert('Anda tidak memiliki akses untuk mengedit data guru.')
    return
  }
  
  editMode.value = true
  editingId.value = user.id
  formData.value = {
    name: user.name,
    email: user.email,
    password: '',
    password_confirmation: '',
    role: user.role || 'guru',
    wali_kelas: user.wali_kelas || '',
    pembina_ekskul: user.pembina_ekskul || '',
    pembina_p5: user.pembina_p5 || ''
  }
  showAddModal.value = true
}

// Delete user - Hanya untuk Admin
const deleteUser = async (user) => {
  if (!isAdmin.value) {
    alert('Anda tidak memiliki akses untuk menghapus data guru.')
    return
  }

  if (!confirm(`Apakah Anda yakin ingin menghapus guru "${user.name}"?`)) {
    return
  }

  try {
    console.log('🗑️ Deleting user:', user.id)
    
    await authStore.ensureCsrfToken()
    
    await $api.delete(`/api/users/${user.id}`, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json'
      }
    })

    console.log('✅ User deleted successfully')
    await fetchUsers()
    
  } catch (err) {
    console.error('❌ Error deleting user:', err)
    alert('Gagal menghapus user: ' + (err.response?.data?.message || err.message))
  }
}

// Handle form submit - Hanya untuk Admin
const handleSubmit = async () => {
  if (!isAdmin.value) {
    alert('Anda tidak memiliki akses untuk menambah/mengedit data guru.')
    return
  }

  submitting.value = true
  formError.value = ''
  formSuccess.value = ''
  
  try {
    console.log('🔄 Starting form submission...')
    
    await authStore.ensureCsrfToken()
    
    const url = editMode.value ? `/api/users/${editingId.value}` : '/api/users'
    const method = editMode.value ? 'put' : 'post'

    const requestData = {
      name: formData.value.name.trim(),
      email: formData.value.email.trim(),
      role: formData.value.role,
      wali_kelas: formData.value.wali_kelas || null,
      pembina_ekskul: formData.value.pembina_ekskul || null,
      pembina_p5: formData.value.pembina_p5 || null
    }

    console.log('📦 Prepared data:', requestData)

    // Handle password
    if (formData.value.password) {
      requestData.password = formData.value.password
      requestData.password_confirmation = formData.value.password_confirmation || formData.value.password
      console.log('🔐 Password included in request')
    } else if (!editMode.value) {
      formError.value = 'Password wajib diisi untuk user baru'
      submitting.value = false
      return
    }

    // Validasi konfirmasi password untuk tambah user
    if (!editMode.value && formData.value.password !== formData.value.password_confirmation) {
      formError.value = 'Password dan konfirmasi password tidak cocok'
      submitting.value = false
      return
    }

    console.log('2. Sending request to:', url)
    console.log('📤 Final request data:', requestData)
    
    const response = await $api[method](url, requestData, {
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      }
    })
    
    console.log('✅ User saved successfully:', response.data)
    formSuccess.value = editMode.value ? 'Data user berhasil diupdate!' : 'User berhasil ditambahkan!'
    
    setTimeout(async () => {
      await fetchUsers()
      closeModal()
    }, 1500)
    
  } catch (err) {
    console.error('❌ Error saving user:', err)
    
    if (err.code === 'ECONNREFUSED') {
      formError.value = 'Tidak dapat terhubung ke server. Pastikan backend Laravel berjalan di port 8000.'
      return
    }
    
    if (err.response?.status === 502) {
      formError.value = 'Bad Gateway - Backend server tidak merespon. Pastikan Laravel berjalan dengan baik.'
      return
    }
    
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
      formError.value = err.message || 'Gagal menyimpan data user'
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

// Close dropdown when clicking outside
const handleClickOutside = (event) => {
  const filterButton = document.querySelector('.relative button')
  const dropdown = document.querySelector('.absolute .bg-white')
  
  if (filterButton && !filterButton.contains(event.target) && 
      dropdown && !dropdown.contains(event.target)) {
    showFilterDropdown.value = false
  }
}

// Initialize on mount
onMounted(async () => {
  console.log('🚀 Initializing users page...')
  
  if (process.client) {
    authStore.initializeAuth()
    await authStore.ensureCsrfToken()
    await fetchUsers()
    
    // Add click outside listener
    document.addEventListener('click', handleClickOutside)
  }
})

// Cleanup
onUnmounted(() => {
  if (process.client) {
    document.removeEventListener('click', handleClickOutside)
  }
})
</script>