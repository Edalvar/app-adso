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
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');             // Título de la serie
            $table->string('genero');             // Género de la serie
            $table->string('director');           // Director de la serie
            $table->year('año_inicio');           // Año de inicio de la serie
            $table->year('año_final')->nullable(); // Año final de la serie (nullable para series en curso)
            $table->text('sinopsis');             // Sinopsis de la serie
            $table->integer('temporadas');        // Número de temporadas
            $table->integer('episodios');         // Número de episodios
            $table->string('idioma');             // Idioma principal de la serie
            $table->boolean('subtitulos');        // Si tiene subtítulos (1 para sí, 0 para no)
            $table->string('imagen_portada');     // URL o path de la imagen de portada
            $table->unsignedBigInteger('id_pais');
            $table->foreign('id_pais')->references('id')->on('pais');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('series');
    }
};
