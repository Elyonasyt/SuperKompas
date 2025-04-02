@extends("layouts.app")
@section("content")

    <h1 class="alert alert-info">Lista de Productos</h1>
    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>Nombre Producto</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Unidades en Stock</th>
            <th>ID Proveedor</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Leche Entera</td>
            <td>1 litro de leche entera</td>
            <td>$20.50</td>
            <td>100</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Pan Blanco</td>
            <td>Pan de caja 500g</td>
            <td>$35.00</td>
            <td>50</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Arroz 1kg</td>
            <td>Paquete de arroz blanco</td>
            <td>$25.75</td>
            <td>80</td>
            <td>1</td>
        </tr>
        </tbody>
    </table>

@endsection
