@extends("layouts.app")
@section("content")

    <h1 class="alert alert-info">Personas</h1>
    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
        </thead>
        <tbody>
        @foreach($personas as $persona)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$persona->nombre}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

