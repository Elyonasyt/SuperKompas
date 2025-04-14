@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="alert alert-primary">Lista de Productos</h2>
        <a href="{{ route('productos.create') }}" class="btn btn-success mb-3">Agregar Producto</a>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID Producto</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Unidades en Stock</th>
                <th>Proveedor</th>
            </tr>
            </thead>
            <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->ID_Producto }}</td>
                    <td>{{ $producto->Nombre_Producto }}</td>
                    <td>{{ $producto->Descripcion }}</td>
                    <td>{{ $producto->Precio }}</td>
                    <td>{{ $producto->Unidades_Stock }}</td>
                    <td>{{ $producto->ID_Proveedor }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
