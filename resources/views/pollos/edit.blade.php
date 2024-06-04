@extends('layouts.app')

@section('content')
    <h1>Editar Pollo</h1>

    <form action="{{ route('pollos.update', $pollo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $pollo->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="raza">Raza:</label>
            <input type="text" name="raza" id="raza" class="form-control" value="{{ $pollo->raza }}" required>
        </div>
        <div class="form-group">
            <label for="peso">Peso (kg):</label>
            <input type="number" name="peso" id="peso" class="form-control" step="0.01" value="{{ $pollo->peso }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection@extends('layouts.app')

@section('content')
    <h1>Editar Pollo</h1>

    <form action="{{ route('pollos.update', $pollo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $pollo->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="raza">Raza:</label>
            <input type="text" name="raza" id="raza" class="form-control" value="{{ $pollo->raza }}" required>
        </div>
        <div class="form-group">
            <label for="peso">Peso (kg):</label>
            <input type="number" name="peso" id="peso" class="form-control" step="0.01" value="{{ $pollo->peso }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection