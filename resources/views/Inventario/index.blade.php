@extends('layouts.app')
@section('content')

    <div class="container">
        <h1 class="alert alert-info">Inventario</h1>
        <a href="{{ route('inventarios.create') }}" class="btn btn-primary mb-3">Agregar Inventario</a>

        <table class="table table-bordered border-primary">
            <thead>
            <tr>
                <th>ID Inventario</th>
                <th>ID Producto</th>
                <th>Cantidad Disponible</th>
                <th>Fecha Actualización</th>
            </tr>
            </thead>
            <tbody>
            @foreach($inventarios as $inventario)
                <tr>
                    <td>{{ $inventario->ID_Inventario }}</td>
                    <td>{{ $inventario->ID_Producto }}</td>
                    <td>{{ $inventario->Cantidad_Disponible }}</td>
                    <td>{{ $inventario->Fecha_Actualizacion }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
