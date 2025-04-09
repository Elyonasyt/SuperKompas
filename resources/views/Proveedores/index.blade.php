@extends("layouts.app")
@section("content")

    <h1 class="alert alert-info">Lista de Proveedores</h1>
    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>ID_Proveedor</th>
            <th>ID_Persona</th>
            <th>Nombre_Proveedor</th>

        </tr>
        </thead>

        <tbody>
        @foreach($proveedores as $proveedores)
            <tr>
                <td>{{$proveedores->ID_Proveedor }}</td>
                <td>{{$proveedores->ID_Persona }}</td>
                <td>{{$proveedores->Nombre_Proveedor }}</td>
            </tr>
        @endforeach
        </tbody>

    </table>

@endsection
