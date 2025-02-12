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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', 40);
            $table->integer('num_socios');
        });
        Schema::table('jugadors', function(Blueprint $table){
            $table->unsignedBigInteger('id_equipo')->nullable();
            $table->foreign('id_equipo')->references('id')->on('equipos')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jugadors',function(Blueprint $table){
            $table->dropForeign(['id_equipo']);
        });
        Schema::dropColumns('alumnos',['id_equipo']);
        Schema::dropIfExists('equipos');
    }
};
