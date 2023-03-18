@extends('layouts.app')

@section('content')
    <h1>Calificaciones</h1>

    <a href="{{ route('calificaciones.create') }}" class="btn btn-primary mb-3">Agregar calificación</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Materia</th>
                <th>Actividad 1</th>
                <th>Actividad 2</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($calificaciones as $calificacion)
                <tr>
                    <td>{{ $calificacion->id }}</td>
                    <td>{{ $calificacion->materia->nombre }}</td>
                    <td>{{ $calificacion->actividad1 }}</td>
                    <td>{{ $calificacion->actividad2 }}</td>
                    <td>
                        <a href="{{ route('calificaciones.edit', $calificacion->id) }}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{ route('calificaciones.destroy', $calificacion->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
