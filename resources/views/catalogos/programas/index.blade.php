@extends('plantillas.alquilic')

@section('content')
    <h1 class="text-center">Lista de programas</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card-header">
                    <a href="{{ route('programas.create') }}" class="btn btn-outline-dark">Agregar</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Empresa</th>
                            <th colspan="2" class="text-center">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($programas as $programa)
                            <tr>
                                <td>{{ $programa->id }}</td>
                                <td>{{ $programa->nombre_programa }}</td>
                                <td>{{ $programa->version_programa }}</td>
                                <td>{{ $programa->licencia_total }}</td>
                                <td>{{ $programa->licencia_libre }}</td>
                                <td>Editar</td>
                                <td>Eliminar</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $programas->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>

@endsection

