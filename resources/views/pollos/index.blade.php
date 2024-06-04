@extends('layouts.app')

@section('content')
    <h1>Gestión de Pollos</h1>

    <a href="{{ route('pollos.create') }}" class="btn btn-primary mb-3">Agregar Pollo</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Raza</th>
                <th>Peso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pollos as $pollo)
                <tr>
                    <td>{{ $pollo->nombre }}</td>
                    <td>{{ $pollo->raza }}</td>
                    <td>{{ $pollo->peso }} kg</td>
                    <td>
                        <a href="{{ route('pollos.show', $pollo->id) }}" class="btn btn-sm btn-info">Ver</a>
                        <a href="{{ route('pollos.edit', $pollo->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('pollos.destroy', $pollo->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection