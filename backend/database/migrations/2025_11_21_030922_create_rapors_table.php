<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('rapors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained()->onDelete('cascade');
            $table->foreignId('mapel_id')->constrained()->onDelete('cascade');
            $table->foreignId('capaian_id')->constrained()->onDelete('cascade');

            $table->integer('nilai'); // 0 – 100
            $table->string('predikat')->nullable(); // A/B/C/D
            $table->longText('deskripsi')->nullable();

            $table->string('semester'); // ex: "Ganjil", "Genap"
            $table->string('tahun_ajaran'); // ex: "2024/2025"

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapors');
    }
};
