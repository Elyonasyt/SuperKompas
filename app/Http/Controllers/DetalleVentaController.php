<?php

namespace App\Http\Controllers;

use App\Models\detalle_venta;
use App\Models\DetalleVenta; // CORREGIDO: con mayúscula y bien importado
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    public function index()
    {
        $detalle_ventas = detalle_venta::all();
        return view('detalle_venta.index', compact("detalle_ventas"));
    }

    public function create()
    {
        return view('detalle_venta.create');
    }


    public function store(Request $request)
    {
        detalle_venta::create([
            'ID_Venta' => $request->ID_Venta,
            'ID_Producto' => $request->ID_Producto,
            'Cantidad' => $request->Cantidad,
            'Precio_Unitario' => $request->Precio_Unitario,
        ]);

        return redirect()->route('detalle_ventas.index');
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
