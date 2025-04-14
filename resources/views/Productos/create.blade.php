@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="alert alert-primary">Registrar Nuevo Producto</h2>

        <form action="{{ route('productos.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="Nombre_Producto" class="form-label">Nombre del Producto</label>
                <input type="text" name="Nombre_Producto" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="Descripcion" class="form-label">Descripción</label>
                <textarea name="Descripcion" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="Precio" class="form-label">Precio</label>
                <input type="number" name="Precio" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="Unidades_Stock" class="form-label">Unidades en Stock</label>
                <input type="number" name="Unidades_Stock" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="ID_Proveedor" class="form-label">ID del Proveedor</label>
                <input type="number" name="ID_Proveedor" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Producto</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
