@extends("layouts.app")
@section("content")

    <h1 class="alert alert-info">Lista de Ventas</h1>
    <a href="{{ route('ventas.create') }}" class="btn btn-success">Agregar Venta</a>

    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>ID</th>
            <th>ID Cliente</th>
            <th>Fecha Venta</th>
            <th>Total Venta</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ventas as $venta)
            <tr>
                <td>{{$venta->id}}</td>
                <td>{{$venta->id_cliente}}</td>
                <td>{{$venta->fecha_venta}}</td>
                <td>{{$venta->total_venta}}</td>
                <td>
                    <a href="{{ route('ventas.edit', $venta->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST" style="display:inline;">
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
