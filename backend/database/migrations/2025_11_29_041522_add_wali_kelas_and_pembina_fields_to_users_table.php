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
        Schema::table('users', function (Blueprint $table) {

            // Tambah wali_kelas jika belum ada
            if (!Schema::hasColumn('users', 'wali_kelas')) {
                $table->string('wali_kelas')->nullable()->after('name');
            }

            // Tambah pembina_ekskul jika belum ada
            if (!Schema::hasColumn('users', 'pembina_ekskul')) {
                $table->string('pembina_ekskul')->nullable()->after('wali_kelas');
            }

            // Tambah pembina_p5 jika belum ada
            if (!Schema::hasColumn('users', 'pembina_p5')) {
                $table->string('pembina_p5')->nullable()->after('pembina_ekskul');
            }

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['wali_kelas', 'pembina_ekskul', 'pembina_p5']);
        });
    }
};
