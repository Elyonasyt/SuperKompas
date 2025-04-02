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
        $personas = Persona::all(); // Obtener todas las personas
        return view('personas.index', compact('personas')); // Enviar datos a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "HOLA DESDE CREATE";//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "HOLA DESDE CREATE";//
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
