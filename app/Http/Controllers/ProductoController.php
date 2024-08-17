<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'categoria_id' => 'nullable|exists:categorias,categoria_id',
            'precio_unitario' => 'required|numeric|min:0',
            'stock_disponible' => 'required|integer|min:0',
            'descuento_por_cantidad' => 'nullable|numeric|min:0',
        ]);

        $producto = Productos::create($validatedData);

        return response()->json([
            'message' => 'Producto creado exitosamente',
            'producto' => $producto
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Productos::findOrFail($id);
        return response()->json($producto);
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
        $validatedData = $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'descripcion' => 'sometimes|nullable|string',
            'categoria_id' => 'sometimes|nullable|exists:categorias,categoria_id',
            'precio_unitario' => 'sometimes|required|numeric|min:0',
            'stock_disponible' => 'sometimes|required|integer|min:0',
            'descuento_por_cantidad' => 'sometimes|nullable|numeric|min:0',
        ]);

        $producto = Productos::findOrFail($id);
        $producto->update($validatedData);

        return response()->json([
            'message' => 'Producto actualizado exitosamente',
            'producto' => $producto
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
