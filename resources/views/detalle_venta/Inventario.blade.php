@extends("layouts.app")
@section("content")

    <h1 class="alert alert-info">Detalle de Ventas</h1>
    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>ID Venta</th>
            <th>ID Producto</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>2</td>
            <td>$20.50</td>
        </tr>
        <tr>
            <td>1</td>
            <td>3</td>
            <td>1</td>
            <td>$25.75</td>
        </tr>
        <tr>
            <td>2</td>
            <td>2</td>
            <td>1</td>
            <td>$35.00</td>
        </tr>
        <tr>
            <td>2</td>
            <td>3</td>
            <td>1</td>
            <td>$25.75</td>
        </tr>
        </tbody>
    </table>
@endsection


