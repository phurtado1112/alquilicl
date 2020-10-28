@extends('plantillas.alquilic')

@section('content')
    <h1 class="text-center">Lista de clientes</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
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
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->nombre }}</td>
                            <td>{{ $cliente->apellido }}</td>
                            <td>{{ $cliente->correo }}</td>
                            <td>{{ $cliente->empresa }}</td>
                            <td>Editar</td>
                            <td>Eliminar</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
