<?php

namespace App\Http\Controllers;

use App\Models\Pasajero;
use Illuminate\Http\Request;
use Validator;

class PasajerosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = Pasajero::orderBy('id', 'ASC')->get();
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
            'nombre' => 'required',
            'apellido' => 'required',
            'genero' => 'required',
            'fecha_nacimiento' => 'required|date',
            'nacionalidad' => 'required',
            'tipo_documento' => 'required',
            'numero_documento' => 'required',
            'email' => 'nullable|email',
            'telefono' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $validatedData = $validator->validated();

        try {
            Pasajero::create($validatedData);
            return response()->json(['message' => 'Passenger created'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error creating passenger'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $data = Pasajero::find($id);

            if (!$data) {
                return response()->json(['message' => 'Passenger not found'], 404);
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
        $passenger = Pasajero::find($id);

        if (!$passenger) {
            return response()->json([
                'status' => 'error',
                'message' => 'Passenger not found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'apellido' => 'required',
            'genero' => 'required',
            'fecha_nacimiento' => 'required|date',
            'nacionalidad' => 'required',
            'tipo_documento' => 'required',
            'numero_documento' => 'required',
            'email' => 'nullable|email',
            'telefono' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ]);
        }

        $passenger->update($validator->validated());

        return response()->json([
            'status' => 'success',
            'message' => 'Passenger updated successfully',
            'data' => $passenger,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $passenger = Pasajero::find($id);

        if (!$passenger) {
            return response()->json([
                'status' => 'error',
                'message' => 'Passenger not found',
            ], 404);
        }

        $passenger->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Passenger deleted successfully',
        ]);
    }
}
