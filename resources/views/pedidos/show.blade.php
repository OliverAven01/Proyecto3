@extends('layouts.app')

@section('content')
    <h1>Detalles del Pedido</h1>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Cliente: {{ $pedido->cliente->nombre }}</h5>
            <p class="card-text"><strong>Fecha:</strong> {{ $pedido->fecha }}</p>
            <p class="card-text"><strong>Estado:</strong> {{ $pedido->estado }}</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Productos</h5>
        </div>
        <ul class="list-group list-group-flush">
            @foreach($pedido->productos as $producto)
                <li class="list-group-item">{{ $producto->nombre }} ({{ $producto->precio }} $)</li>
            @endforeach
        </ul>
        <div class="card-footer">
            <strong>Total:</strong> {{ $pedido->total }} $
        </div>
    </div>

    <a href="{{ route('pedidos.index') }}" class="btn btn-primary mt-3">Volver</a>
@endsection