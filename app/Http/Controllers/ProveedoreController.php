<?php

namespace App\Http\Controllers;

use App\Models\Proveedore;
use Illuminate\Http\Request;

class ProveedoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los proveedores
        $proveedores = Proveedore::all();
        return view('proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'ID_Persona' => 'required|integer|unique:proveedores,ID_Persona', // Verificar que ID_Persona sea único
            'Nombre_Proveedor' => 'required|string|max:100',
        ]);

        // Crear un nuevo proveedor
        Proveedore::create([
            'ID_Persona' => $request->ID_Persona,
            'Nombre_Proveedor' => $request->Nombre_Proveedor,
        ]);

        return redirect()->route('proveedore.index')->with('success', 'Proveedor creado exitosamente');
    }

    /**
     * Show the specified resource.
     */
    public function show(Proveedore $proveedore)
    {
        // Opcional: puedes mostrar un proveedor específico
        return view('proveedores.show', compact('proveedore'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedore $proveedore)
    {
        return view('proveedores.edit', compact('proveedore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proveedore $proveedore)
    {
        // Validar los datos del formulario
        $request->validate([
            'ID_Persona' => 'required|integer',
            'Nombre_Proveedor' => 'required|string|max:100',
        ]);

        // Actualizar el proveedor
        $proveedore->update([
            'ID_Persona' => $request->ID_Persona,
            'Nombre_Proveedor' => $request->Nombre_Proveedor,
        ]);

        return redirect()->route('proveedores.index')->with('success', 'Proveedor actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedore $proveedore)
    {
        $proveedore->delete();
        return redirect()->route('proveedores.index')->with('success', 'Proveedor eliminado exitosamente');
    }
}
