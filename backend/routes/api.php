<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\CapaianController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\RaporController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\RaporPdfController;
use App\Http\Controllers\RombelMapelController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// ======================
//  CSRF PROTECTION
// ======================
Route::get('/sanctum/csrf-cookie', function (Request $request) {
    return response()->noContent();
});

// ======================
//  HEALTH CHECK
// ======================
Route::get('/health', function () {
    return response()->json([
        'status' => 'OK',
        'message' => 'API is running',
        'timestamp' => now()
    ]);
});

// ======================
//  PUBLIC TEST ROUTES (UNTUK TESTING)
// ======================
Route::get('rombel', [RombelController::class, 'index']);
Route::post('rombel', [RombelController::class, 'store']);
Route::get('rombel/{rombel}', [RombelController::class, 'show']);
Route::put('rombel/{rombel}', [RombelController::class, 'update']);
Route::delete('rombel/{rombel}', [RombelController::class, 'destroy']);

// ======================
//  PUBLIC AUTH ROUTES
// ======================
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// ======================
//   PROTECTED ROUTES
// ======================
Route::middleware('auth:sanctum')->group(function () {
    
    // --------------------
    // Auth & Profile
    // --------------------
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
    Route::put('/profile', [AuthController::class, 'updateProfile']);
    Route::put('/password', [AuthController::class, 'updatePassword']);

    // --------------------
    // USER MANAGEMENT
    // --------------------
    Route::apiResource('users', UserController::class);
    Route::get('/users/role/{role}', [UserController::class, 'getByRole']);
    Route::get('/search/users', [UserController::class, 'search']);
    Route::get('/users/gurus', [RombelController::class, 'getGurus']);

    // --------------------
    // Mata Pelajaran (MAPEL)
    // --------------------
    Route::apiResource('mapels', MapelController::class);
    
    // Additional mapel routes  
    Route::get('mapels/{id}/capaian', [MapelController::class, 'capaian']);
    Route::get('mapels/{id}/nilai', [MapelController::class, 'nilai']);
    Route::get('mapels/{id}/rombels', [MapelController::class, 'rombels']);
    Route::get('mapels/{id}/siswa', [MapelController::class, 'siswa']);
    Route::get('mapels/kode-mapels', [MapelController::class, 'kodeMapels']);
    Route::get('mapels/statistics', [MapelController::class, 'statistics']);
    
    // 🔥 ROUTES BARU UNTUK GURU PENGAMPU
    Route::get('mapels/{mapel}/gurus', [MapelController::class, 'gurus']); // Get semua guru pengampu
    Route::post('mapels/{mapel}/gurus', [MapelController::class, 'addGuru']); // Tambah guru
    Route::delete('mapels/{mapel}/gurus/{guru}', [MapelController::class, 'removeGuru']); // Hapus guru
    Route::put('mapels/{mapel}/gurus/sync', [MapelController::class, 'syncGurus']); // Sync semua guru
    Route::get('mapels/{mapel}/available-gurus', [MapelController::class, 'availableGurus']); // Guru yang tersedia
    Route::get('gurus/{guru}/mapels', [MapelController::class, 'mapelsByGuru']); // Mapel yang diajarkan oleh guru
    Route::get('mapels/gurus/all', [MapelController::class, 'getAllGurus']); // Semua guru untuk dropdown

    // --------------------
    // Rombel (Kelas)
    // --------------------
    Route::apiResource('rombels', RombelController::class);

    // Additional rombel routes
    Route::get('rombels/{id}/siswa', [RombelController::class, 'siswa']);
    Route::get('rombels/{id}/rapor', [RombelController::class, 'rapor']);
    Route::get('rombels/{id}/summary', [RombelController::class, 'summary']);
    Route::get('rombels/{id}/mapels', [RombelController::class, 'getMapels']);
    Route::post('rombels/{id}/set-mapels', [RombelController::class, 'setMapels']);
    Route::get('/search/classes', [RombelController::class, 'search']);
    
    // Route untuk halaman detail kelas (ambil semua siswa dalam kelas)
    Route::get('rombels/{rombel_id}/students', [SiswaController::class, 'getByRombel']);

    // --------------------
    // Capaian Pembelajaran (CP)
    // --------------------
    Route::apiResource('capaian', CapaianController::class);
    
    // Additional capaian routes
    Route::get('capaian/mapel/{mapel_id}', [CapaianController::class, 'byMapel']);

    // ======================
    // SISWA ROUTES (DIPERBAIKI)
    // ======================
    // Route utama untuk siswa (PLURAL: siswas)
    Route::get('/siswas', [SiswaController::class, 'index']);
    Route::get('/siswas/{id}', [SiswaController::class, 'show']);
    Route::post('/siswas', [SiswaController::class, 'store']);
    Route::put('/siswas/{id}', [SiswaController::class, 'update']);
    Route::patch('/siswas/{id}', [SiswaController::class, 'update']);
    Route::delete('/siswas/{id}', [SiswaController::class, 'destroy']);
    
    // Additional siswa routes dengan plural
    Route::get('/siswas/rombel/{rombel_id}', [SiswaController::class, 'byRombel']);
    Route::get('/siswas/{id}/rapor', [SiswaController::class, 'rapor']);
    Route::get('/siswas/{id}/nilai', [SiswaController::class, 'nilai']);
    Route::get('/siswas/{id}/progress', [SiswaController::class, 'progress']);
    Route::get('/search/students', [SiswaController::class, 'search']);
    Route::get('/siswas/{siswa}/nilai-form', [SiswaController::class, 'getNilaiForm']);
    Route::post('/siswas/{siswa}/update-nilai', [SiswaController::class, 'updateNilai']);
    Route::get('/siswas/{siswa}/laporan-nilai', [SiswaController::class, 'getLaporanNilai']);
    Route::get('/siswas/create-data', [SiswaController::class, 'createData']);
    Route::get('/siswas/{siswa}/edit-data', [SiswaController::class, 'editData']);
    
    // ALIAS untuk kompatibilitas (singular) - bisa dihapus nanti
    Route::get('/siswa', [SiswaController::class, 'index']);
    Route::get('/siswa/{id}', [SiswaController::class, 'show']);
    Route::post('/siswa', [SiswaController::class, 'store']);
    Route::put('/siswa/{id}', [SiswaController::class, 'update']);
    Route::patch('/siswa/{id}', [SiswaController::class, 'update']);
    Route::delete('/siswa/{id}', [SiswaController::class, 'destroy']);
    Route::get('/siswa/rombel/{rombel_id}', [SiswaController::class, 'byRombel']);
    Route::get('/siswa/{id}/rapor', [SiswaController::class, 'rapor']);
    Route::get('/siswa/{id}/nilai', [SiswaController::class, 'nilai']);
    Route::get('/siswa/{id}/progress', [SiswaController::class, 'progress']);
    Route::get('/siswa/{siswa}/nilai-form', [SiswaController::class, 'getNilaiForm']);
    Route::post('/siswa/{siswa}/update-nilai', [SiswaController::class, 'updateNilai']);
    Route::get('/siswa/{siswa}/laporan-nilai', [SiswaController::class, 'getLaporanNilai']);
    Route::get('/siswa/create-data', [SiswaController::class, 'createData']);
    Route::get('/siswa/{siswa}/edit-data', [SiswaController::class, 'editData']);

    // --------------------
    // Rapor (Header)
    // --------------------
    Route::apiResource('rapor', RaporController::class);
    
    // Additional rapor routes
    Route::get('rapor/{id}/rekap', [RaporController::class, 'rekap']);
    Route::get('rapor/{id}/nilai', [RaporController::class, 'nilai']);
    Route::post('rapor/{id}/generate', [RaporController::class, 'generate']);
    Route::get('rapor/siswa/{siswa_id}', [RaporController::class, 'bySiswa']);
    Route::get('rapor/rombel/{rombel_id}', [RaporController::class, 'byRombel']);

    // --------------------
    // Nilai (Detail Rapor)
    // --------------------
    Route::apiResource('nilai', NilaiController::class);
    
    // Additional nilai routes
    Route::get('nilai/rapor/{rapor_id}', [NilaiController::class, 'byRapor']);
    Route::get('nilai/siswa/{siswa_id}', [NilaiController::class, 'bySiswa']);
    Route::get('nilai/mapel/{mapel_id}', [NilaiController::class, 'byMapel']);
    Route::post('nilai/bulk', [NilaiController::class, 'storeBulk']);

    // --------------------
    // Export PDF
    // --------------------
    Route::get('rapor/{id}/pdf', [RaporPdfController::class, 'print']);
    Route::get('rombel/{id}/leger', [RaporPdfController::class, 'leger']);
    Route::get('siswa/{id}/rapor-pdf', [RaporPdfController::class, 'siswaRapor']);
    Route::get('export/rombel/{id}/nilai', [RaporPdfController::class, 'exportNilaiRombel']);

    // --------------------
    // Dashboard & Reports
    // --------------------
    Route::get('/dashboard/stats', [RaporController::class, 'dashboardStats']);
    Route::get('/reports/summary', [RaporController::class, 'summaryReport']);
    Route::get('/dashboard/overview', [RaporController::class, 'dashboardOverview']);
});

// ======================
//  FALLBACK ROUTE
// ======================
Route::fallback(function () {
    return response()->json([
        'message' => 'Endpoint not found. Please check the API documentation.',
        'available_endpoints' => [
            'GET /api/health',
            'POST /api/login',
            'POST /api/register',
            'GET /api/sanctum/csrf-cookie',
            // Siswa endpoints
            'GET /api/siswas',
            'POST /api/siswas',
            'GET /api/siswas/{id}',
            'PUT /api/siswas/{id}',
            'DELETE /api/siswas/{id}',
            'GET /api/rombels',
            'GET /api/mapels'
        ]
    ], 404);
});