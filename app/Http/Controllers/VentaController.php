<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::all();
        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {
        return view('ventas.create');
    }

    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'ID_Cliente' => 'required|integer',
            'Fecha_Venta' => 'required|date',
            'Total_Venta' => 'required|numeric',
        ]);

        // Crear una nueva venta
        venta::create([
            'ID_Cliente' => $request->ID_Cliente,
            'Fecha_Venta' => $request->Fecha_Venta,
            'Total_Venta' => $request->Total_Venta,
        ]);

        return redirect()->route('ventas.index')->with('success', 'Venta creada exitosamente');
    }

    public function edit(Venta $venta)
    {
        return view('ventas.edit', compact('venta'));
    }

    public function update(Request $request, Venta $venta)
    {
        $request->validate([
            'ID_Cliente' => 'required|integer',
            'Fecha_Venta' => 'required|date',
            'Total_Venta' => 'required|numeric',
        ]);

        $venta->update([
            'ID_Cliente' => $request->ID_Cliente,
            'Fecha_Venta' => $request->Fecha_Venta,
            'Total_Venta' => $request->Total_Venta,
        ]);

        return redirect()->route('ventas.index')->with('success', 'Venta actualizada exitosamente');
    }

    public function destroy(Venta $venta)
    {
        $venta->delete();
        return redirect()->route('ventas.index')->with('success', 'Venta eliminada exitosamente');
    }
}
