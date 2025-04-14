@extends("layouts.app")

@section("content")

    <h1 class="alert alert-info">Crear Nueva Venta</h1>

    <form action="{{ route('ventas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="ID_Cliente">ID Cliente</label>
            <input type="text" id="ID_Cliente" name="ID_Cliente" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Fecha_Venta">Fecha de Venta</label>
            <input type="date" id="Fecha_Venta" name="Fecha_Venta" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Total_Venta">Total de Venta</label>
            <input type="number" id="Total_Venta" name="Total_Venta" class="form-control" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Crear Venta</button>
    </form>

@endsection
