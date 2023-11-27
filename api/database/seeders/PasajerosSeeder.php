<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasajerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pasajeros = [
            ['nombre' => 'Juan', 'apellido' => 'Pérez', 'genero' => 'M', 'fecha_nacimiento' => '1990-01-01', 'nacionalidad' => 'Mexicana', 'tipo_documento' => 'Pasaporte', 'numero_documento' => 'A12345678', 'email' => 'juan.perez@gmail.com', 'telefono' => '555-1234'],
            ['nombre' => 'María', 'apellido' => 'García', 'genero' => 'F', 'fecha_nacimiento' => '1995-02-02', 'nacionalidad' => 'Española', 'tipo_documento' => 'DNI', 'numero_documento' => '12345678A', 'email' => 'maria.garcia@hotmail.com', 'telefono' => '666-4321'],
            ['nombre' => 'David', 'apellido' => 'Smith', 'genero' => 'M', 'fecha_nacimiento' => '2000-03-03', 'nacionalidad' => 'Estadounidense', 'tipo_documento' => 'Licencia de conducir', 'numero_documento' => 'S123456789', 'email' => 'david.smith@yahoo.com', 'telefono' => '777-5678'],
            ['nombre' => 'Anna', 'apellido' => 'Lee', 'genero' => 'F', 'fecha_nacimiento' => '2005-04-04', 'nacionalidad' => 'China', 'tipo_documento' => 'Visa', 'numero_documento' => 'V1234567890', 'email' => 'anna.lee@gmail.com', 'telefono' => '888-8765'],
            ['nombre' => 'Carlos', 'apellido' => 'Rodríguez', 'genero' => 'M', 'fecha_nacimiento' => '2010-05-05', 'nacionalidad' => 'Argentina', 'tipo_documento' => 'Cédula de identidad', 'numero_documento' => '1234567890', 'email' => 'carlos.rodriguez@hotmail.com', 'telefono' => '999-0987']
        ];

        // Insertar los registros en la tabla pasajeros
        foreach ($pasajeros as $pasajero) {
            //Modelo
            //Pasajero::create($pasajero);
        }
    }
}
