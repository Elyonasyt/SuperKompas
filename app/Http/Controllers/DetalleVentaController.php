<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\detalle_venta;
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalle_ventas = detalle_venta::all(); ;
        return view('detalle_venta.index',compact("detalle_ventas"));
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
    public function show(detalle_venta $detalle_venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(detalle_venta $detalle_venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, detalle_venta $detalle_venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(detalle_venta $detalle_venta)
    {
        //
    }
}
