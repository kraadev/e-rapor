<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('siswas', function (Blueprint $table) {
            // Kolom untuk nilai Matematika (MTK)
            $table->decimal('nilai_mtk', 5, 2)->nullable()->after('rombel_id');
            $table->string('keterangan_mtk', 255)->nullable()->after('nilai_mtk');
            
            // Kolom untuk nilai Bahasa Indonesia (BIND)
            $table->decimal('nilai_bind', 5, 2)->nullable()->after('keterangan_mtk');
            $table->string('keterangan_bind', 255)->nullable()->after('nilai_bind');
            
            // Kolom untuk nilai Bahasa Inggris (BING)
            $table->decimal('nilai_bing', 5, 2)->nullable()->after('keterangan_bind');
            $table->string('keterangan_bing', 255)->nullable()->after('nilai_bing');
            
            // Kolom untuk nilai IPAS
            $table->decimal('nilai_ipas', 5, 2)->nullable()->after('keterangan_bing');
            $table->string('keterangan_ipas', 255)->nullable()->after('nilai_ipas');
            
            // Kolom untuk nilai PPKN
            $table->decimal('nilai_ppkn', 5, 2)->nullable()->after('keterangan_ipas');
            $table->string('keterangan_ppkn', 255)->nullable()->after('nilai_ppkn');
            
            // Kolom untuk nilai PJOK
            $table->decimal('nilai_pjok', 5, 2)->nullable()->after('keterangan_ppkn');
            $table->string('keterangan_pjok', 255)->nullable()->after('nilai_pjok');
            
            // Kolom untuk nilai Seni Budaya (SB)
            $table->decimal('nilai_sb', 5, 2)->nullable()->after('keterangan_pjok');
            $table->string('keterangan_sb', 255)->nullable()->after('nilai_sb');
            
            // Kolom untuk nilai Sejarah (SEJ)
            $table->decimal('nilai_sej', 5, 2)->nullable()->after('keterangan_sb');
            $table->string('keterangan_sej', 255)->nullable()->after('nilai_sej');
            
            // Kolom untuk nilai Informatika (INFOR)
            $table->decimal('nilai_infor', 5, 2)->nullable()->after('keterangan_sej');
            $table->string('keterangan_infor', 255)->nullable()->after('nilai_infor');
            
            // Kolom untuk nilai Muatan Lokal (MULOK)
            $table->decimal('nilai_mulok', 5, 2)->nullable()->after('keterangan_infor');
            $table->string('keterangan_mulok', 255)->nullable()->after('nilai_mulok');
            
            // Kolom untuk nilai PAI
            $table->decimal('nilai_pai', 5, 2)->nullable()->after('keterangan_mulok');
            $table->string('keterangan_pai', 255)->nullable()->after('nilai_pai');
            
            // Kolom untuk nilai PAK
            $table->decimal('nilai_pak', 5, 2)->nullable()->after('keterangan_pai');
            $table->string('keterangan_pak', 255)->nullable()->after('nilai_pak');
            
            // Kolom untuk nilai PKWU
            $table->decimal('nilai_pkwu', 5, 2)->nullable()->after('keterangan_pak');
            $table->string('keterangan_pkwu', 255)->nullable()->after('nilai_pkwu');
            
            // Kolom untuk nilai MPP
            $table->decimal('nilai_mpp', 5, 2)->nullable()->after('keterangan_pkwu');
            $table->string('keterangan_mpp', 255)->nullable()->after('nilai_mpp');
            
            // Kolom untuk nilai MKK
            $table->decimal('nilai_mkk', 5, 2)->nullable()->after('keterangan_mpp');
            $table->string('keterangan_mkk', 255)->nullable()->after('nilai_mkk');
            
            // Kolom untuk nilai DPK
            $table->decimal('nilai_dpk', 5, 2)->nullable()->after('keterangan_mkk');
            $table->string('keterangan_dpk', 255)->nullable()->after('nilai_dpk');
            
            // Kolom untuk rata-rata nilai
            $table->decimal('rata_rata', 5, 2)->nullable()->after('keterangan_dpk');
            $table->string('predikat', 50)->nullable()->after('rata_rata');
        });
    }

    public function down()
    {
        Schema::table('siswas', function (Blueprint $table) {
            // Hapus semua kolom nilai mapel
            $table->dropColumn([
                'nilai_mtk', 'keterangan_mtk',
                'nilai_bind', 'keterangan_bind',
                'nilai_bing', 'keterangan_bing',
                'nilai_ipas', 'keterangan_ipas',
                'nilai_ppkn', 'keterangan_ppkn',
                'nilai_pjok', 'keterangan_pjok',
                'nilai_sb', 'keterangan_sb',
                'nilai_sej', 'keterangan_sej',
                'nilai_infor', 'keterangan_infor',
                'nilai_mulok', 'keterangan_mulok',
                'nilai_pai', 'keterangan_pai',
                'nilai_pak', 'keterangan_pak',
                'nilai_pkwu', 'keterangan_pkwu',
                'nilai_mpp', 'keterangan_mpp',
                'nilai_mkk', 'keterangan_mkk',
                'nilai_dpk', 'keterangan_dpk',
                'rata_rata', 'predikat'
            ]);
        });
    }
};