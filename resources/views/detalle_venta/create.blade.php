@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="alert alert-success text-center">Agregar Detalle de Venta</h1>

        <form action="{{ route('detalle_ventas.store') }}" method="POST" class="row g-3">
            @csrf

            <div class="col-md-6">
                <label for="ID_Venta" class="form-label">ID Venta</label>
                <input type="number" class="form-control" name="ID_Venta" id="ID_Venta" required>
            </div>

            <div class="col-md-6">
                <label for="ID_Producto" class="form-label">ID Producto</label>
                <input type="number" class="form-control" name="ID_Producto" id="ID_Producto" required>
            </div>

            <div class="col-md-6">
                <label for="Cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" name="Cantidad" id="Cantidad" required>
            </div>

            <div class="col-md-6">
                <label for="Precio_Unitario" class="form-label">Precio Unitario</label>
                <input type="number" step="0.01" class="form-control" name="Precio_Unitario" id="Precio_Unitario" required>
            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('detalle_ventas.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
