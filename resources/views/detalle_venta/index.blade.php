@extends("layouts.app")

@section("content")
    <div class="container">

        <h1 class="alert alert-info d-flex justify-content-between align-items-center">
            Detalle de Ventas
            <a href="{{ route('detalle_ventas.create') }}" class="btn btn-success float-end">Agregar</a>
        </h1>

        <table class="table table-bordered border-primary">
            <thead class="table-light">
            <tr>
                <th>ID Venta</th>
                <th>ID Producto</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
            </tr>
            </thead>
            <tbody>
            @foreach($detalle_ventas as $detalle)
                <tr>
                    <td>{{ $detalle->ID_Venta }}</td>
                    <td>{{ $detalle->ID_Producto }}</td>
                    <td>{{ $detalle->Cantidad }}</td>
                    <td>${{ number_format($detalle->Precio_Unitario, 2) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
