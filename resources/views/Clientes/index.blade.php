@extends("layouts.app")

@section("content")
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="alert alert-info flex-grow-1 mb-0">Lista de Clientes</h1>
            <a href="{{ route('clientes.create') }}" class="btn btn-success ms-3">Agregar</a>
        </div>

        <div class="card shadow rounded-4">
            <div class="card-body">
                <table class="table table-hover table-bordered border-primary mb-0">
                    <thead class="table-primary text-center">
                    <tr>
                        <th>ID Cliente</th>
                        <th>ID Persona</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clientes as $cliente)
                        <tr class="text-center">
                            <td>{{ $cliente->ID_Cliente }}</td>
                            <td>{{ $cliente->ID_Persona }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
