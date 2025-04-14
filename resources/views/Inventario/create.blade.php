@extends('layouts.app')
@section('content')

    <div class="container">
        <h1 class="alert alert-success">Agregar Inventario</h1>
        <form method="POST" action="{{ route('inventarios.store') }}">
            @csrf
            <div class="mb-3">
                <label for="ID_Producto" class="form-label">ID Producto</label>
                <input type="number" name="ID_Producto" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Cantidad_Disponible" class="form-label">Cantidad Disponible</label>
                <input type="number" name="Cantidad_Disponible" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Fecha_Actualizacion" class="form-label">Fecha de Actualización</label>
                <input type="date" name="Fecha_Actualizacion" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('inventarios.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

@endsection
