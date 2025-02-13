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
        Schema::create('equipo_torneo', function(Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_equipo');
            $table->unsignedBigInteger('id_torneo');
            $table->foreign('id_equipo')->references('id')->on('equipos');
            $table->foreign('id_torneo')->references('id')->on('torneos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipo_torneo');
    }
};
