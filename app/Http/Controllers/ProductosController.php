<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = productos::all();  // Obtener todos los productos de la base de datos
        return view('productos.index', compact('productos'));
    }

    // Mostrar el formulario de creación de producto
    public function create()
    {
        return view('productos.create');
    }

    // Almacenar un nuevo producto
    public function store(Request $request)
    {
        // Validar los datos de la solicitud
        $request->validate([
            'Nombre_Producto' => 'required|string|max:100',
            'Descripcion' => 'nullable|string',
            'Precio' => 'required|numeric',
            'Unidades_Stock' => 'required|integer',
            'ID_Proveedor' => 'required|integer',
        ]);

        // Crear un nuevo producto
        productos::create([
            'Nombre_Producto' => $request->Nombre_Producto,
            'Descripcion' => $request->Descripcion,
            'Precio' => $request->Precio,
            'Unidades_Stock' => $request->Unidades_Stock,
            'ID_Proveedor' => $request->ID_Proveedor,
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(productos $productos)
    {
        //
    }
}
