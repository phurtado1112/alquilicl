@extends('plantillas.alquilic')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card-header">
                    <h2>Agregar nuevo programa</h2>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('programas.store') }}" method="post">
                        <div class="form-group">
                            <label for="">Nombre de programa *</label>
                            <input type="text" name="nombre_programa" class="form-control" required placeholder="Nombre del programa" value="{{ old('nombre_programa') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Version *</label>
                            <input type="text" name="version_programa" class="form-control" required placeholder="Versión del programa" value="{{ old('version_programa') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Fecha de pago</label>
                            <input type="datetime-local" name="fecha_pago" class="form-control" value="{{ old('fecha_pago') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Licencias totales</label>
                            <input type="number" name="licencia_total" class="form-control" value="{{ old('licencia_total') }}">
                        </div>
                        <div class="form-group">
                            @csrf
                            <input type="submit" class="btn btn-outline-success" value="Guardar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
