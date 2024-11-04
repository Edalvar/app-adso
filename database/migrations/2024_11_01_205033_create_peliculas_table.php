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
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');            // Título de la película
            $table->string('genero');             // Género de la película
            $table->string('director');           // Director de la película
            $table->year('año');                  // Año de lanzamiento (campo tipo año)
            $table->integer('duracion');          // Duración en minutos
            $table->text('sinopsis');             // Sinopsis o descripción de la película
            $table->string('clasificacion');      // Clasificación de la película (e.g., PG, R, etc.)
            $table->string('idioma');             // Idioma principal de la película
            $table->boolean('subtitulos');        // Indica si tiene subtítulos (1 para sí, 0 para no)
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
        Schema::dropIfExists('peliculas');
    }
};
