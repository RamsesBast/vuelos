<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VuelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vuelos = [
            ['ID_aerolinea' => 1, 'ID_origen' => 1, 'ID_destino' => 2, 'fecha' => '2023-12-15', 'hora_salida' => '08:00:00', 'hora_llegada' => '10:30:00', 'duracion' => 150, 'precio' => 5000.00, 'asientos_disponibles' => 20],
            ['ID_aerolinea' => 2, 'ID_origen' => 2, 'ID_destino' => 3, 'fecha' => '2023-12-16', 'hora_salida' => '12:00:00', 'hora_llegada' => '16:00:00', 'duracion' => 240, 'precio' => 8000.00, 'asientos_disponibles' => 15],
            ['ID_aerolinea' => 3, 'ID_origen' => 3, 'ID_destino' => 4, 'fecha' => '2023-12-17', 'hora_salida' => '18:00:00', 'hora_llegada' => '22:00:00', 'duracion' => 240, 'precio' => 10000.00, 'asientos_disponibles' => 10],
            ['ID_aerolinea' => 4, 'ID_origen' => 4, 'ID_destino' => 5, 'fecha' => '2023-12-18', 'hora_salida' => '06:00:00', 'hora_llegada' => '12:00:00', 'duracion' => 360, 'precio' => 12000.00, 'asientos_disponibles' => 5],
            ['ID_aerolinea' => 5, 'ID_origen' => 5, 'ID_destino' => 1, 'fecha' => '2023-12-19', 'hora_salida' => '14:00:00', 'hora_llegada' => '20:00:00', 'duracion' => 360, 'precio' => 15000.00, 'asientos_disponibles' => 0]
        ];

        // Insertar los registros en la tabla vuelos
        foreach ($vuelos as $vuelo) {
            //Crear modelo
            //Vuelo::create($vuelo);
        }
    }
}
