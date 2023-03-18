@extends('layouts.app')

@section('content')
    <h1>Editar calificación</h1>

    <form action="{{ route('calificaciones.update', $calificacion->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="materia_id">Materia:</label>
            <select name="materia_id" id="materia_id" class="form-control">
                @foreach ($materias as $materia)
                    <option value="{{ $materia->id }}" {{ $materia->id == $calificacion->materia_id ? 'selected' : '' }}>{{ $materia->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="actividad1">Actividad 1:</label>
            <input type="text" name="actividad1" id="actividad1" class="form-control" value="{{ $calificacion->actividad1 }}">
        </div>

        <div class="form-group">
            <label for="actividad2">Actividad 2:</label>
            <input type="text" name="actividad2" id="actividad2" class="form-control" value="{{ $calificacion->actividad2 }}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <a href="{{ route('calificaciones.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
