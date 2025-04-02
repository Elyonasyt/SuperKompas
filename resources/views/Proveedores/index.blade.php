@extends("layouts.app")
@section("content")

    <h1 class="alert alert-info">Lista de Proveedores</h1>
    <a href="{{ route('proveedores.create') }}" class="btn btn-success">Agregar Proveedor</a>

    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Contacto</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($proveedores as $proveedor)
            <tr>
                <td>{{$proveedor->id}}</td>
                <td>{{$proveedor->nombre}}</td>
                <td>{{$proveedor->contacto}}</td>
                <td>{{$proveedor->telefono}}</td>
                <td>
                    <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
