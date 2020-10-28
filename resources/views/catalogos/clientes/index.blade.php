@extends('plantillas.alquilic')

@section('content')
    <h1 class="text-center">Lista de clientes</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card-header">
                    <a href="{{ route('clientes.create') }}" class="btn btn-outline-dark">Agregar</a>
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
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->nombre }}</td>
                            <td>{{ $cliente->apellido }}</td>
                            <td>{{ $cliente->correo }}</td>
                            <td>{{ $cliente->empresa }}</td>
                            <td><a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-outline-primary">Editar</a></td>
{{--                            <td>--}}
{{--                                <form action="{{ route('clientes.destroy', $cliente) }}" method="post">--}}
{{--                                    @csrf--}}
{{--                                    @method('DELETE')--}}
{{--                                    <input type="submit" class="btn btn-outline-danger" value="Eliminar" onclick="return confirm('¿Desea eliminar el cliente')">--}}
{{--                                </form>--}}
{{--                            </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $clientes->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>

@endsection
