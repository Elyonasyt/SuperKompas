@extends("layouts.app")
@section("content")

    <h1 class="alert alert-info">Lista de Productos</h1>
    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>ID_Producto</th>
            <th>Nombre_Producto</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Unidades_Stock</th>
            <th>ID_Proveedor</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $productos)
            <tr>
                <td>{{$productos->ID_Producto }}</td>
                <td>{{$productos->Nombre_Producto }}</td>
                <td>{{$productos->Descripcion }}</td>
                <td>{{$productos->Precio }}</td>
                <td>{{$productos->Unidades_Stock }}</td>
                <td>{{$productos->ID_Proveedor }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
