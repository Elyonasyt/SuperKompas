<?php

    namespace App\Http\Controllers;

    use App\Models\Inventario;
    use Illuminate\Http\Request;

    class InventarioController extends Controller
    {
    public function index()
    {
    $inventarios = Inventario::all();
    return view('inventario.index', compact('inventarios'));
    }

    public function create()
    {
    return view('inventario.create');
    }

    public function store(Request $request)
    {
    Inventario::create([
    'ID_Producto' => $request->ID_Producto,
    'Cantidad_Disponible' => $request->Cantidad_Disponible,
    'Fecha_Actualizacion' => $request->Fecha_Actualizacion,
    ]);

    return redirect()->route('inventarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(inventario $inventario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, inventario $inventario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(inventario $inventario)
    {
        //
    }
}
