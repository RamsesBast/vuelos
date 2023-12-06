<?php

namespace App\Http\Controllers;

use App\Models\Aerolinea;
use Illuminate\Http\Request;

class AerolineasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aerolineas = Aerolinea::all();
        return view('ruta-pendiente', compact('aerolineas'));
    }
}
