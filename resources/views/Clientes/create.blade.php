@extends("layouts.app")

@section("content")
    <div class="container mt-5">
        <div class="card shadow rounded-4">
            <div class="card-header bg-primary text-white rounded-top-4">
                <h5 class="mb-0">Registrar Cliente</h5>
            </div>
            <div class="card-body">
                <form class="row g-3" method="POST" action="{{ route('clientes.store') }}">
                    @csrf

                    <div class="col-md-12">
                        <label for="id_persona" class="form-label">ID de la persona</label>
                        <input type="text" class="form-control" name="id_persona" id="id_persona" placeholder="Ingrese el ID">
                    </div>

                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
