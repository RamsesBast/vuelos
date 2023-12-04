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
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ID_pasajero');
            $table->unsignedInteger('ID_vuelo');
            $table->date('fecha_reserva');
            $table->string('estado');
            $table->string('forma_pago');
            $table->string('codigo_confirmacion');
            $table->timestamps();

            $table->foreign('ID_pasajero')->references('id')->on('pasajeros');
            $table->foreign('ID_vuelo')->references('id')->on('vuelos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
