<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasajero extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre',
        'apellido',
        'genero',
        'fecha_nacimiento',
        'nacionalidad',
        'tipo_documento',
        'numero_documento',
        'email',
        'telefono',
    ];
}
