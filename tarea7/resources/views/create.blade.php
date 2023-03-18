@extends('layouts.app')

@section('content')
    <h1>Agregar calificación</h1>

    <form action="{{ route('calificaciones.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="materia_id">Materia:</label>
            <select name="materia_id" id="materia_id" class="form-control">
                @foreach ($materias as $materia)
                    <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="actividad1">Actividad 1:</label>
            <input type="text" name="actividad1" id="actividad1" class="form-control">
               <div class="form-group">
            <label for="actividad2">Actividad 2:</label>
            <input type="text" name="actividad2" id="actividad2" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('calificaciones.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection

