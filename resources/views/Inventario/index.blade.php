@extends("layouts.app")
@section("content")

    <h1 class="alert alert-info">Lista de Inventario</h1>
    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>ID_Inventario</th>
            <th>ID_Producto</th>
            <th>Cantidad_Disponible</th>
            <th>Fecha_Actualizacion</th>
        </tr>
        <tbody>
        @foreach($inventarios as $inventarios )
            <tr>
                <td>{{$inventarios->ID_Inventario }}</td>
                <td>{{$inventarios->ID_Producto }}</td>
                <td>{{$inventarios->Cantidad_Disponible }}</td>
                <td>{{$inventarios->Fecha_Actualizacion }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
