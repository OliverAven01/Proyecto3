@extends('layouts.app')

@section('content')
    <h1>Nuevo Proveedor</h1>

    <form action="{{ route('proveedores.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="contacto">Contacto:</label>
            <input type="text" name="contacto" id="contacto" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Proveedor</button>
    </form>
@endsection