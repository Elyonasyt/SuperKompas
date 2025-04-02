@extends("layouts.app")
@section("content")

    <h1 class="alert alert-info">Lista de Detalles de Venta</h1>
    <a href="{{ route('detalle-venta.create') }}" class="btn btn-success">Agregar Detalle</a>

    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>ID</th>
            <th>ID Venta</th>
            <th>ID Producto</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($detalles as $detalle)
            <tr>
                <td>{{$detalle->id}}</td>
                <td>{{$detalle->id_venta}}</td>
                <td>{{$detalle->id_producto}}</td>
                <td>{{$detalle->cantidad}}</td>
                <td>{{$detalle->precio_unitario}}</td>
                <td>
                    <a href="{{ route('detalle-venta.edit', $detalle->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('detalle-venta.destroy', $detalle->id) }}" method="POST" style="display:inline;">
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


