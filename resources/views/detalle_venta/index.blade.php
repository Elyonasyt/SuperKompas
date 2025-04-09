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
        <tbody>
        @foreach($detalle_ventas as $detalle_ventas)
            <tr>
                <td>{{$detalle_ventas->ID_Venta }}</td>
                <td>{{$detalle_ventas->ID_Producto }}</td>
                <td>{{$detalle_ventas->Cantidad }}</td>
                <td>{{$detalle_ventas->Precio_Unitario }}</td>
            </tr>
        @endforeach
        </tbody>
        </table>

@endsection


