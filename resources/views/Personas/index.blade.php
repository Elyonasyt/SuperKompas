@extends("layouts.app")

@section("content")
    <div class="container my-5">
        <h1 class="alert alert-info">Lista de Personas</h1>

        <a href="{{ route('personas.create') }}" class="btn btn-success mb-3">Nueva Persona</a>

        <table class="table table-bordered border-primary">
            <thead>
            <tr>
                <th>ID</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th>
                <th>Teléfono</th><th>Correo</th><th>Dirección</th><th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($personas as $p)
                <tr>
                    <td>{{ $p->ID_Persona }}</td>
                    <td>{{ $p->Nombre }}</td>
                    <td>{{ $p->Apellido_Paterno }}</td>
                    <td>{{ $p->Apellido_Materno }}</td>
                    <td>{{ $p->Telefono }}</td>
                    <td>{{ $p->Correo }}</td>
                    <td>{{ $p->Direccion }}</td>
                    <td>
                        <a href="{{ route('personas.edit', $p->ID_Persona) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('personas.destroy', $p->ID_Persona) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar esta persona?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
