<?php

namespace App\Http\Controllers;

use App\Models\proveedore;
use Illuminate\Http\Request;

class ProveedoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = proveedore::all();
        return view('proveedores.index', compact('proveedores'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(proveedore $proveedore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(proveedore $proveedore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, proveedore $proveedore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(proveedore $proveedore)
    {
        //
    }
}
