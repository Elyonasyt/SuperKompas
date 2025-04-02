@extends("layouts.app")
@section("content")

    <h1 class="alert alert-info">Lista de Productos</h1>
    <a href="{{ route('productos.create') }}" class="btn btn-success">Agregar Producto</a>

    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->stock}}</td>
                <td>
                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
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
