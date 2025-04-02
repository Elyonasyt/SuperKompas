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
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Juan</td>
            <td>Perez</td>
            <td>Gomez</td>
            <td>5551234567</td>
            <td>juan.perez@example.com</td>
            <td>Calle Falsa 123, CDMX</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Maria</td>
            <td>Lopez</td>
            <td>Hernandez</td>
            <td>5559876543</td>
            <td>maria.lopez@example.com</td>
            <td>Av. Reforma 456, CDMX</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Carlos</td>
            <td>Rodriguez</td>
            <td>Diaz</td>
            <td>5557418529</td>
            <td>carlos.rod@example.com</td>
            <td>Blvd. Principal 789, CDMX</td>
        </tr>
        </tbody>
    </table>
@endsection
