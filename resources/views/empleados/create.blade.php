@extends('layouts.app')

@section('content')
    <h1>Nuevo Empleado</h1>

    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cargo">Cargo:</label>
            <input type="text" name="cargo" id="cargo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Empleado</button>
    </form>
@endsection