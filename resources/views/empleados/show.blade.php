@extends('layouts.app')

@section('content')
    <h1>Detalles del Empleado</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $empleado->nombre }}</h5>
            <p class="card-text"><strong>Cargo:</strong> {{ $empleado->cargo }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $empleado->email }}</p>
        </div>
    </div>

    <a href="{{ route('empleados.index') }}" class="btn btn-primary mt-3">Volver</a>
@endsection