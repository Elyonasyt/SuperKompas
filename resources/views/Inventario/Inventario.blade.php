@extends("layouts.app")
@section("content")

    <h1 class="alert alert-info">Lista de Inventario</h1>
    <a href="{{ route('inventario.create') }}" class="btn btn-success">Agregar Producto</a>

    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>ID</th>
            <th>ID Producto</th>
            <th>Cantidad Disponible</th>
            <th>Fecha Actualización</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($inventarios as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->id_producto}}</td>
                <td>{{$item->cantidad_disponible}}</td>
                <td>{{$item->fecha_actualizacion}}</td>
                <td>
                    <a href="{{ route('inventario.edit', $item->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('inventario.destroy', $item->id) }}" method="POST" style="display:inline;">
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
