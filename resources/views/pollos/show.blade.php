@extends('layouts.app')

@section('content')
    <h1>Detalles del Pollo</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $pollo->nombre }}</h5>
            <p class="card-text"><strong>Raza:</strong> {{ $pollo->raza }}</p>
            <p class="card-text"><strong>Peso:</strong> {{ $pollo->peso }} kg</p>
        </div>
    </div>

    <a href="{{ route('pollos.index') }}" class="btn btn-primary mt-3">Volver</a>
@endsection