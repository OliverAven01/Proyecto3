@extends('layouts.app')

@section('content')
    <h1>Detalles del Proveedor</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $proveedor->nombre }}</h5>
            <p class="card-text"><strong>Contacto:</strong> {{ $proveedor->contacto }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $proveedor->email }}</p>
        </div>
    </div>

    <a href="{{ route('proveedores.index') }}" class="btn btn-primary mt-3">Volver</a>
@endsection