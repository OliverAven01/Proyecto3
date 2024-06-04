@extends('layouts.app')

@section('content')
    <h1>Gestión de Proveedores</h1>

    <a href="{{ route('proveedores.create') }}" class="btn btn-primary mb-3">Nuevo Proveedor</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Contacto</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $proveedor)
                <tr>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->contacto }}</td>
                    <td>{{ $proveedor->email }}</td>
                    <td>
                        <a href="{{ route('proveedores.show', $proveedor->id) }}" class="btn btn-sm btn-info">Ver</a>
                        <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" style="display: inline-block;">
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