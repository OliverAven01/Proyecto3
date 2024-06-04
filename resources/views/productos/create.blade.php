@extends('layouts.app')

@section('content')
    <h1>Nuevo Producto</h1>

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="number" name="stock" id="stock" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Producto</button>
    </form>
@endsection