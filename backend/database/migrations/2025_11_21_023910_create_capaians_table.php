<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('capaians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mapel_id')->constrained()->onDelete('cascade');
            $table->string('elemen');
            $table->longText('deskripsi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('capaians');
    }
};
