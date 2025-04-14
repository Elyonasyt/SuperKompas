<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtiene todas las personas
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    public function create()
    {
        // Retorna el formulario para crear una nueva persona
        return view('personas.create');
    }

    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'Nombre' => 'required',
            'Apellido_Paterno' => 'required',
            'Apellido_Materno' => 'required',
            'Telefono' => 'nullable',
            'Correo' => 'nullable|email',
            'Direccion' => 'nullable',
        ]);

        // Guardar una nueva persona en la base de datos
        Persona::create($request->all());

        return redirect()->route('personas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(persona $persona)
    {
        return "HOLA DESDE CREATE";//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(persona $persona)
    {
        return "HOLA DESDE CREATE";//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, persona $persona)
    {
        return "HOLA DESDE CREATE";//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(persona $persona)
    {
        return "HOLA DESDE CREATE";//
    }
}
