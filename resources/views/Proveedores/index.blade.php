@extends("layouts.app")

@section("content")
    <h1 class="alert alert-info">Lista de Proveedores</h1>

    <!-- Botón para ir a la página de crear proveedor -->
    <a href="{{ route('proveedore.create') }}" class="btn btn-success mb-3">Agregar Nuevo Proveedor</a>

    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>ID_Proveedor</th>
            <th>ID_Persona</th>
            <th>Nombre_Proveedor</th>
        </tr>
        </thead>
        <tbody>
        @foreach($proveedores as $proveedor)
            <tr>
                <td>{{ $proveedor->ID_Proveedor }}</td>
                <td>{{ $proveedor->ID_Persona }}</td>
                <td>{{ $proveedor->Nombre_Proveedor }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
