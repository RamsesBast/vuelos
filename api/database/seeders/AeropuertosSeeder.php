<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AeropuertosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aeropuertos = [
            ['nombre' => 'Aeropuerto Internacional Benito Juárez', 'ciudad' => 'Ciudad de México', 'pais' => 'México', 'codigo_IATA' => 'MEX', 'latitud' => 19.4363, 'longitud' => -99.0721],
            ['nombre' => 'Aeropuerto Internacional de Los Ángeles', 'ciudad' => 'Los Ángeles', 'pais' => 'Estados Unidos', 'codigo_IATA' => 'LAX', 'latitud' => 33.9416, 'longitud' => -118.4085],
            ['nombre' => 'Aeropuerto Internacional de París-Charles de Gaulle', 'ciudad' => 'París', 'pais' => 'Francia', 'codigo_IATA' => 'CDG', 'latitud' => 49.0097, 'longitud' => 2.5479],
            ['nombre' => 'Aeropuerto Internacional de Tokio-Haneda', 'ciudad' => 'Tokio', 'pais' => 'Japón', 'codigo_IATA' => 'HND', 'latitud' => 35.5494, 'longitud' => 139.7798],
            ['nombre' => 'Aeropuerto Internacional de Dubai', 'ciudad' => 'Dubai', 'pais' => 'Emiratos Árabes Unidos', 'codigo_IATA' => 'DXB', 'latitud' => 25.2532, 'longitud' => 55.3657]
        ];

        // Insertar los registros en la tabla aeropuertos
        foreach ($aeropuertos as $aeropuerto) {
            //Agregar modelo Aeropuerto
            //Aeropuerto::create($aeropuerto);
        }
    }
}
