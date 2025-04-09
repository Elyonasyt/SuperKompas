@extends("layouts.app")
@section("content")

    <h1 class="alert alert-info">Lista de Clientes</h1>
    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>ID Persona</th>
            <th>ID Cliente</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->ID_Cliente}}</td>
                <td>{{$cliente->ID_Persona }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
