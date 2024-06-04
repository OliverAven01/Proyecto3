@extends('layouts.app')

@section('content')
    <h1>Agregar Pollo</h1>

    <form action="{{ route('pollos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="raza">Raza:</label>
            <input type="text" name="raza" id="raza" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="peso">Peso (kg):</label>
            <input type="number" name="peso" id="peso" class="form-control" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
@endsection