@extends("layouts.app")
@section("content")

    <h1 class="alert alert-info">Lista de Ventas</h1>
    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>ID Cliente</th>
            <th>Fecha Venta</th>
            <th>Total Venta</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>2023-03-31</td>
            <td>$81.25</td>
        </tr>
        <tr>
            <td>2</td>
            <td>2023-04-01</td>
            <td>$56.25</td>
        </tr>
        </tbody>
    </table>


@endsection
