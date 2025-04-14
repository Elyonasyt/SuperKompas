@extends("layouts.app")

@section("content")

    <h1 class="alert alert-info">Lista de Ventas</h1>

    <!-- Botón para agregar una nueva venta -->
    <a href="{{ route('ventas.create') }}" class="btn btn-primary mb-3">Agregar Nueva Venta</a>

    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>ID_Venta</th>
            <th>ID_Cliente</th>
            <th>Fecha_Venta</th>
            <th>Total_Venta</th>
            <th>Acciones</th>
        </tr>
        </thead>

        <tbody>
        @foreach($ventas as $venta)
            <tr>
                <td>{{$venta->ID_Venta}}</td>
                <td>{{$venta->ID_Cliente}}</td>
                <td>{{$venta->Fecha_Venta}}</td>
                <td>{{$venta->Total_Venta}}</td>
                <td>
                    <!-- Aquí puedes agregar enlaces para editar o eliminar la venta -->
                    <a href="{{ route('ventas.edit', $venta->ID_Venta) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('ventas.destroy', $venta->ID_Venta) }}" method="POST" style="display: inline-block;">
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
