@extends("layouts.app")

@section("content")
    <div class="container mt-5">
        <h2 class="alert alert-primary">Registrar Nuevo Proveedor</h2>

        <form action="{{ route('proveedore.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="ID_Persona" class="form-label">ID Persona</label>
                <input type="number" name="ID_Persona" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="Nombre_Proveedor" class="form-label">Nombre del Proveedor</label>
                <input type="text" name="Nombre_Proveedor" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('proveedore.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
