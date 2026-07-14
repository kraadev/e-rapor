<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rapor_id')->constrained()->onDelete('cascade');
            $table->foreignId('mapel_id')->constrained()->onDelete('cascade');
            $table->integer('nilai_angka')->nullable();  // nilai 0–100
            $table->string('predikat')->nullable();      // A, B, C, D
            $table->text('deskripsi')->nullable();       // deskripsi otomatis atau input manually
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
