<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;
    protected $fillable=[
        'ID_aerolinea',
        'ID_origen',
        'ID_destino',
        'fecha',
        'hora_salida',
        'hora_llegada',
        'duracion',
        'precio',
        'asientos_disponibles',
    ];
}
