@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="alert alert-primary">Registrar Nueva Persona</h2>

        <form action="{{ route('personas.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" name="Nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="Apellido_Paterno" class="form-label">Apellido Paterno</label>
                <input type="text" name="Apellido_Paterno" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="Apellido_Materno" class="form-label">Apellido Materno</label>
                <input type="text" name="Apellido_Materno" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="Telefono" class="form-label">Teléfono</label>
                <input type="text" name="Telefono" class="form-control">
            </div>

            <div class="mb-3">
                <label for="Correo" class="form-label">Correo Electrónico</label>
                <input type="email" name="Correo" class="form-control">
            </div>

            <div class="mb-3">
                <label for="Direccion" class="form-label">Dirección</label>
                <textarea name="Direccion" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('personas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
