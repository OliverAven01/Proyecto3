@extends('layouts.app')

@section('content')
    <h1>Nuevo Pedido</h1>

    <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="cliente_id">Cliente:</label>
            <select name="cliente_id" id="cliente_id" class="form-control" required>
                <option value="">Seleccione un cliente</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="productos">Productos:</label>
            <select name="productos[]" id="productos" class="form-control" multiple required>
                @foreach($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->nombre }} ({{ $producto->precio }} $)</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="pendiente">Pendiente</option>
                <option value="en_proceso">En proceso</option>
                <option value="completado">Completado</option>
                <option value="cancelado">Cancelado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear Pedido</button>
    </form>
@endsection