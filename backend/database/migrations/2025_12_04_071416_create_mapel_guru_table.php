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
        Schema::create('mapel_guru', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mapel_id')
                  ->constrained('mapels')
                  ->onDelete('cascade');
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onDelete('cascade');
            $table->timestamps();
            
            // Unique constraint untuk menghindari duplikasi
            $table->unique(['mapel_id', 'user_id']);
            
            // Index untuk performa query
            $table->index(['mapel_id']);
            $table->index(['user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapel_guru');
    }
};