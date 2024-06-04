@extends('layouts.app')

@section('content')
    <h1>Gestión de Empleados</h1>

    <a href="{{ route('empleados.create') }}" class="btn btn-primary mb-3">Nuevo Empleado</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cargo</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->cargo }}</td>
                    <td>{{ $empleado->email }}</td>
                    <td>
                        <a href="{{ route('empleados.show', $empleado->id) }}" class="btn btn-sm btn-info">Ver</a>
                        <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display: inline-block;">
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