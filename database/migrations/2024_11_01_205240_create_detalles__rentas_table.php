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
        Schema::create('detalles__rentas', function (Blueprint $table) {
            $table->id();
            $table->integer('precio');
            $table->unsignedBigInteger('id_catalogo');
            $table->foreign('id_catalogo')->references('id')->on('catalogos');
            $table->unsignedBigInteger('id_renta');
            $table->foreign('id_renta')->references('id')->on('rentas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles__rentas');
    }
};
