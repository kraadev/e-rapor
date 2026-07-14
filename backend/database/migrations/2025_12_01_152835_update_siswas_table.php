<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('siswas', function (Blueprint $table) {
            // 1. Tambah kolom untuk data pribadi
            $table->string('tempat_lahir')->nullable()->after('nama');
            $table->date('tanggal_lahir')->nullable()->after('tempat_lahir');
            $table->text('alamat')->nullable()->after('tanggal_lahir');
            $table->string('no_hp')->nullable()->after('alamat');
            $table->string('nama_ayah')->nullable()->after('no_hp');
            $table->string('nama_ibu')->nullable()->after('nama_ayah');
            $table->string('pekerjaan_ayah')->nullable()->after('nama_ibu');
            $table->string('pekerjaan_ibu')->nullable()->after('pekerjaan_ayah');
            
            // 2. Tambah kolom untuk agama
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu'])
                  ->default('Islam')
                  ->after('jk');
            
            // 3. Tambah kolom untuk status dan akademik
            $table->enum('status', ['aktif', 'lulus', 'pindah', 'dropout'])
                  ->default('aktif')
                  ->after('rombel_id');
            
            $table->string('tahun_ajaran')->default('2024/2025')->after('status');
            $table->date('tanggal_masuk')->nullable()->after('tahun_ajaran');
            $table->date('tanggal_keluar')->nullable()->after('tanggal_masuk');
            
            // 4. Tambah index untuk pencarian lebih cepat
            $table->index('status');
            $table->index('tahun_ajaran');
            $table->index(['nis', 'nama']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('siswas', function (Blueprint $table) {
            // Hapus semua kolom yang ditambahkan
            $table->dropColumn([
                'tempat_lahir',
                'tanggal_lahir',
                'alamat',
                'no_hp',
                'nama_ayah',
                'nama_ibu',
                'pekerjaan_ayah',
                'pekerjaan_ibu',
                'agama',
                'status',
                'tahun_ajaran',
                'tanggal_masuk',
                'tanggal_keluar'
            ]);
            
            // Hapus index
            $table->dropIndex(['status']);
            $table->dropIndex(['tahun_ajaran']);
            $table->dropIndex(['nis', 'nama']);
        });
    }
};