@extends("layouts.app")
@section("content")

    <h1 class="alert alert-info">Lista de Inventario</h1>
    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>ID Producto</th>
            <th>Cantidad Disponible</th>
            <th>Fecha Actualización</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>100</td>
            <td>2023-04-01</td>
        </tr>
        <tr>
            <td>2</td>
            <td>50</td>
            <td>2023-04-01</td>
        </tr>
        <tr>
            <td>3</td>
            <td>80</td>
            <td>2023-04-01</td>
        </tr>
        </tbody>
    </table>
@endsection
