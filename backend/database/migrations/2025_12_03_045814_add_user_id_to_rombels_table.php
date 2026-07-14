<?php
// database/migrations/2025_12_03_xxxxxx_add_user_id_to_rombels_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('rombels', function (Blueprint $table) {
            // Tambah kolom user_id setelah kolom tingkat
            $table->unsignedBigInteger('user_id')->nullable()->after('tingkat');
            
            // Tambah foreign key constraint
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('set null');
            
            // Index untuk performa query
            $table->index('user_id');
        });

        // Update data yang sudah ada untuk menghubungkan dengan users
        $this->linkExistingRombelsToUsers();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rombels', function (Blueprint $table) {
            // Hapus foreign key constraint
            $table->dropForeign(['user_id']);
            
            // Hapus index
            $table->dropIndex(['user_id']);
            
            // Hapus kolom
            $table->dropColumn('user_id');
        });
    }

    /**
     * Link existing rombels to users based on wali_kelas
     */
    private function linkExistingRombelsToUsers(): void
    {
        // Link rombels ke users berdasarkan nama wali_kelas
        $rombels = DB::table('rombels')->get();
        
        foreach ($rombels as $rombel) {
            if ($rombel->wali_kelas) {
                // Cari user dengan nama yang sama (case insensitive)
                $user = DB::table('users')
                    ->whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($rombel->wali_kelas) . '%'])
                    ->where('role', 'guru')
                    ->first();
                
                if ($user) {
                    DB::table('rombels')
                        ->where('id', $rombel->id)
                        ->update(['user_id' => $user->id]);
                    
                    // Update wali_kelas di users jika belum ada
                    if (!$user->wali_kelas) {
                        DB::table('users')
                            ->where('id', $user->id)
                            ->update(['wali_kelas' => $rombel->nama_kelas]);
                    }
                }
            }
        }
    }
};