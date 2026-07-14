<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('rombels', function (Blueprint $table) {
            // Tambah kolom baru dulu
            $table->string('wali_kelas')->after('id')->nullable();
            $table->string('nama_kelas')->after('wali_kelas')->nullable();
        });

        // Migrasi data dari nama_rombel ke nama_kelas
        DB::table('rombels')->update([
            'nama_kelas' => DB::raw('nama_rombel'),
            'wali_kelas' => 'Guru Wali Kelas' // default value sementara
        ]);

        // Update data wali_kelas berdasarkan data yang ada
        DB::table('rombels')->where('id', 1)->update(['wali_kelas' => 'Mulsya Ningish']);
        DB::table('rombels')->where('id', 2)->update(['wali_kelas' => 'Khairul Arifin']);
        DB::table('rombels')->where('id', 3)->update(['wali_kelas' => 'Anggi Laras Pratiwi']);

        // Set kolom baru menjadi not nullable
        Schema::table('rombels', function (Blueprint $table) {
            $table->string('wali_kelas')->nullable(false)->change();
            $table->string('nama_kelas')->nullable(false)->change();
        });

        // Hapus kolom lama setelah data dimigrasi
        Schema::table('rombels', function (Blueprint $table) {
            $table->dropColumn('nama_rombel');
        });

        // Update data tingkat dari nama_kelas
        DB::table('rombels')->where('nama_kelas', 'like', 'X %')->update(['tingkat' => 'X']);
        DB::table('rombels')->where('nama_kelas', 'like', 'XI %')->update(['tingkat' => 'XI']);
        DB::table('rombels')->where('nama_kelas', 'like', 'XII %')->update(['tingkat' => 'XII']);

        // Update data jurusan
        DB::table('rombels')->where('nama_kelas', 'like', '%RPL%')->update(['jurusan' => 'Rekayasa Perangkat Lunak']);
        DB::table('rombels')->where('nama_kelas', 'like', '%AKM%')->update(['jurusan' => 'Akuntansi']);
        DB::table('rombels')->where('nama_kelas', 'like', '%DKV%')->update(['jurusan' => 'Desain Komunikasi Visual']);
    }

    public function down(): void
    {
        Schema::table('rombels', function (Blueprint $table) {
            // Kembalikan kolom lama
            $table->string('nama_rombel')->after('id')->nullable();
        });

        // Migrasi data kembali
        DB::table('rombels')->update([
            'nama_rombel' => DB::raw('nama_kelas')
        ]);

        // Set not nullable
        Schema::table('rombels', function (Blueprint $table) {
            $table->string('nama_rombel')->nullable(false)->change();
        });

        // Hapus kolom baru
        Schema::table('rombels', function (Blueprint $table) {
            $table->dropColumn(['wali_kelas', 'nama_kelas']);
        });

        // Reset data jurusan dan tingkat
        DB::table('rombels')->update([
            'jurusan' => null,
            'tingkat' => null
        ]);
    }
};