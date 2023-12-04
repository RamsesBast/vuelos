<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $fillable=[
        'ID_pasajero',
        'ID_vuelo',
        'fecha_reserva',
        'estado',
        'forma_pago',
        'codigo_confirmacion',
    ];
}
