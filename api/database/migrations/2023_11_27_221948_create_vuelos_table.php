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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ID_aerolinea');
            $table->unsignedInteger('ID_origen');
            $table->unsignedInteger('ID_destino');
            $table->date('fecha');
            $table->time('hora_salida');
            $table->time('hora_llegada');
            $table->integer('duracion');
            $table->decimal('precio', 8, 2);
            $table->integer('asientos_disponibles');
            $table->timestamps();

            $table->foreign('ID_aerolinea')->references('id')->on('aerolineas');
            $table->foreign('ID_origen')->references('id')->on('aeropuertos');
            $table->foreign('ID_destino')->references('id')->on('aeropuertos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
