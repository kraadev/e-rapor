<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mapel_rombel', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rombel_id')->constrained()->onDelete('cascade');
            $table->foreignId('mapel_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            
            $table->unique(['rombel_id', 'mapel_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('mapel_rombel');
    }
};