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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');
            $table->unsignedBigInteger('id_pelicula');
            $table->foreign('id_pelicula')->references('id')->on('peliculas');
            $table->unsignedBigInteger('id_serie');
            $table->foreign('id_serie')->references('id')->on('series');
            $table->text('comentario');            // Texto del comentario
            $table->integer('calificacion');       // Calificación (por ejemplo, de 1 a 5)
            $table->date('fecha');         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
