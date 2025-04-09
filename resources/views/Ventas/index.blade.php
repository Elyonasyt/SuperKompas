@extends("layouts.app")
@section("content")

    <h1 class="alert alert-info">Lista de Ventas</h1>
    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>ID_Venta</th>
            <th>ID_Cliente</th>
            <th>Fecha_Venta</th>
            <th>Total_Venta</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ventas as $ventas)
            <tr>
                <td>{{$ventas->ID_Venta }}</td>
                <td>{{$ventas->ID_Cliente }}</td>
                <td>{{$ventas->Fecha_Venta }}</td>
                <th>{{$ventas->Total_Venta}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
