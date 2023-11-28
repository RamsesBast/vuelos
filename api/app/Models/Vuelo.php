<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;
    protected $fillable=[
        'fecha',
        'hora_salida',
        'hora_llegada',
        'duracion',
        'precio',
        'asientos_disponibles',
    ];
}
