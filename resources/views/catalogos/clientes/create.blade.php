@extends('plantillas.alquilic')

@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card-header">
                    <h2>Agregar nuevo cliente</h2>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form action="{{ route('clientes.store') }}" method="post">
                            <div class="form-group">
                                <label for="">Nombre *</label>
                                <input type="text" name="nombre" class="form-control" required placeholder="Nombre" value="{{ old('nombre') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Apellido *</label>
                                <input type="text" name="apellido" class="form-control" required placeholder="Apellido" value="{{ old('apellido') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Cédula</label>
                                <input type="text" name="cedula" class="form-control" placeholder="XXX-XXXXXX-XXXXN" value="{{ old('cedula') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Celular</label>
                                <input type="text" name="celular" class="form-control" placeholder="(NNN) NNNN-NNNN" value="{{ old('celular') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Correo *</label>
                                <input type="text" name="correo" class="form-control" required placeholder="usuario@correo.com" value="{{ old('correo') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Empresa *</label>
                                <input type="text" name="empresa" class="form-control" required placeholder="Empresa" value="{{ old('empresa') }}">
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
