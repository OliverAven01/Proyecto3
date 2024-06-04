@extends('layouts.app')

@section('content')
    <h1>Detalles del Cliente</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $cliente->nombre }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $cliente->email }}</p>
            <p class="card-text"><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
        </div>
    </div>

    <a href="{{ route('clientes.index') }}" class="btn btn-primary mt-3">Volver</a>
@endsection