<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use Illuminate\Http\Request;
use Validator;

class VuelosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = Vuelo::select(
                'vuelos.*',
                'aerolineas.nombre as aerolinea_nombre',
                'origen.nombre as origen_nombre',
                'destino.nombre as destino_nombre'
            )
                ->join('aerolineas', 'vuelos.ID_aerolinea', '=', 'aerolineas.id')
                ->join('aeropuertos as origen', 'vuelos.ID_origen', '=', 'origen.id')
                ->join('aeropuertos as destino', 'vuelos.ID_destino', '=', 'destino.id')
                ->orderBy('vuelos.id', 'ASC')
                ->get();

            return response()->json([
                'status' => 'success',
                'data' => $data
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ID_aerolinea' => 'required',
            'ID_origen' => 'required',
            'ID_destino' => 'required',
            'fecha' => 'required|date',
            'hora_salida' => 'required|date_format:H:i:s',
            'hora_llegada' => 'required|date_format:H:i:s',
            'duracion' => 'required|integer',
            'precio' => 'required|numeric',
            'asientos_disponibles' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $validatedData = $validator->validated();

        try {
            Vuelo::create($validatedData);
            return response()->json(['message' => 'Flight created'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error creating flight'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $data = Vuelo::find($id);

            if (!$data) {
                return response()->json(['message' => 'Flight not found'], 404);
            }

            return response()->json([
                'status' => 'success',
                'data' => $data
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $flight = Vuelo::find($id);

        if (!$flight) {
            return response()->json([
                'status' => 'error',
                'message' => 'Flight not found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'ID_aerolinea' => 'required',
            'ID_origen' => 'required',
            'ID_destino' => 'required',
            'fecha' => 'required|date',
            'hora_salida' => 'required|date_format:H:i:s',
            'hora_llegada' => 'required|date_format:H:i:s',
            'duracion' => 'required|integer',
            'precio' => 'required|numeric',
            'asientos_disponibles' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ]);
        }

        $flight->update($validator->validated());

        return response()->json([
            'status' => 'success',
            'message' => 'Flight updated successfully',
            'data' => $flight,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flight = Vuelo::find($id);

        if (!$flight) {
            return response()->json([
                'status' => 'error',
                'message' => 'Flight not found',
            ], 404);
        }

        $flight->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Flight deleted successfully',
        ]);
    }
}
