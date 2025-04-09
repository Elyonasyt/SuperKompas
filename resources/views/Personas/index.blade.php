@extends("layouts.app")
@section("content")

    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Datos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container my-5">
    <!-- Tabla de Personas -->
    <h1 class="alert alert-info">Lista de Personas</h1>
    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Dirección</th>
        </tr>
        <tbody>
        @foreach($personas as $personas)
            <tr>
                <td>{{$personas->ID_Persona }}</td>
                <td>{{$personas->Nombre }}</td>
                <td>{{$personas->Nombre }}</td>
                <td>{{$personas->Apellido_Materno }}</td>
                <th>{{$personas->Telefono}}</th>
                <th>{{$personas->Correo}}</th>
                <th>{{$personas->Direccion}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
