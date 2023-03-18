@extends('layouts.app')

@section('content')
    <h1>Calificación para la materia {{ $calificacion->materia->nombre }}</h1>

    <dl>
        <dt>Actividad 1:</dt>
        <dd>{{ $calificacion->actividad1 }}</dd>
        <dt>Actividad 2:</dt>
        <dd>{{ $calificacion->actividad2 }}</dd>
    </dl>

    <a href="{{ route('calificaciones.edit', $calificacion->id) }}" class="btn btn-secondary mr-2">Editar</a>

    <form action="{{ route('calificaciones.destroy', $calificacion->id) }}" method="POST" class="d-inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
@endsection
