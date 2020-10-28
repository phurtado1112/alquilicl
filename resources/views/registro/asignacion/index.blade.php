@extends('plantillas.alquilic')

@section('content')
    <h1>Lista de Asignación</h1>

    @foreach($asignaciones as $asignacion)
        {{ $asignacion->cliente_id }} -
        {{ $asignacion->user_id}} -
        {{ $asignacion->programa_id }} -
        {{ $asignacion->cliente->nombre }}<br>
    @endforeach
@endsection
