<?php

namespace Database\Seeders;

use App\Models\Aerolinea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AerolineasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aerolineas = [
            ['nombre' => 'AeroMéxico', 'logo' => 'aeromexico.png', 'pais' => 'México', 'telefono' => '01 800 021 4000', 'email' => 'contacto@aeromexico.com'],
            ['nombre' => 'American Airlines', 'logo' => 'american.png', 'pais' => 'Estados Unidos', 'telefono' => '01 800 904 6000', 'email' => 'servicioalcliente@aa.com'],
            ['nombre' => 'LATAM Airlines', 'logo' => 'latam.png', 'pais' => 'Chile', 'telefono' => '01 800 123 1619', 'email' => 'atencionalcliente@latam.com'],
            ['nombre' => 'Air France', 'logo' => 'airfrance.png', 'pais' => 'Francia', 'telefono' => '01 800 266 0046', 'email' => 'mail.servicioalcliente.mx@airfrance.fr'],
            ['nombre' => 'Lufthansa', 'logo' => 'lufthansa.png', 'pais' => 'Alemania', 'telefono' => '01 800 202 5413', 'email' => 'customer.relations@lufthansa.com']
        ];

        // Insertar los registros en la tabla aerolineas
        foreach ($aerolineas as $aerolinea) {
            Aerolinea::create($aerolinea);
        }
    }
}
