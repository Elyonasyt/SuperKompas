@extends("layouts.app")
@section("content")

    <h1 class="alert alert-info">Lista de Personas</h1>
    <a href="{{ route('personas.create') }}" class="btn btn-success">Agregar Persona</a>

    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($personas) && count($personas) > 0)
            @foreach($personas as $persona)
                <tr>
                    <td>{{$persona->id}}</td>
                    <td>{{$persona->nombre}}</td>
                    <td>{{$persona->direccion}}</td>
                    <td>{{$persona->telefono}}</td>
                    <td>
                        <a href="{{ route('personas.edit', ['persona' => $persona->id]) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5" class="text-center">No hay personas registradas.</td>
            </tr>
        @endif
        </tbody>
    </table>

@endsection
