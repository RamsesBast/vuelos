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
            $table->increments('ID_vuelo');
            $table->foreignId('ID_aerolinea')->constrained('aerolineas');
            $table->foreignId('ID_origen')->constrained('aeropuertos');
            $table->foreignId('ID_destino')->constrained('aeropuertos');
            $table->date('fecha');
            $table->time('hora_salida');
            $table->time('hora_llegada');
            $table->integer('duracion');
            $table->decimal('precio', 8, 2);
            $table->integer('asientos_disponibles');
            $table->timestamps();
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
