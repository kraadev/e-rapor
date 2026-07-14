<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rombels', function (Blueprint $table) {
            $table->id();
            $table->string('wali_kelas');
            $table->string('nama_kelas');
            $table->string('jurusan')->nullable();
            $table->string('tingkat')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rombels');
    }
};