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
            $table->increments('ID_reserva');
            $table->foreignId('ID_pasajero')->constrained('pasajeros');
            $table->foreignId('ID_vuelo')->constrained('vuelos');
            $table->date('fecha_reserva');
            $table->string('estado');
            $table->string('forma_pago');
            $table->string('codigo_confirmacion');
            $table->timestamps();
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
