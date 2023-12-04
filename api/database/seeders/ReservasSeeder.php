<?php

namespace Database\Seeders;

use App\Models\Reserva;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reservas = [
            ['ID_pasajero' => 1, 'ID_vuelo' => 1, 'fecha_reserva' => '2023-12-01', 'estado' => 'Confirmada', 'forma_pago' => 'Tarjeta de crédito', 'codigo_confirmacion' => 'ABC123'],
            ['ID_pasajero' => 2, 'ID_vuelo' => 2, 'fecha_reserva' => '2023-12-02', 'estado' => 'Pendiente', 'forma_pago' => 'PayPal', 'codigo_confirmacion' => 'DEF456'],
            ['ID_pasajero' => 3, 'ID_vuelo' => 3, 'fecha_reserva' => '2023-12-03', 'estado' => 'Cancelada', 'forma_pago' => 'Efectivo', 'codigo_confirmacion' => 'GHI789'],
            ['ID_pasajero' => 4, 'ID_vuelo' => 4, 'fecha_reserva' => '2023-12-04', 'estado' => 'Confirmada', 'forma_pago' => 'Tarjeta de débito', 'codigo_confirmacion' => 'JKL012'],
            ['ID_pasajero' => 5, 'ID_vuelo' => 5, 'fecha_reserva' => '2023-12-05', 'estado' => 'Pendiente', 'forma_pago' => 'Transferencia bancaria', 'codigo_confirmacion' => 'MNO345']
        ];

        // Insertar los registros en la tabla reservas
        foreach ($reservas as $reserva) {
            Reserva::create($reserva);
        }
    }
}
