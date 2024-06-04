@extends('layouts.app')

@section('content')
    <h1>Gestión de Pedidos</h1>

    <a href="{{ route('pedidos.create') }}" class="btn btn-primary mb-3">Nuevo Pedido</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->cliente->nombre }}</td>
                    <td>{{ $pedido->fecha }}</td>
                    <td>{{ $pedido->total }} $</td>
                    <td>{{ $pedido->estado }}</td>
                    <td>
                        <a href="{{ route('pedidos.show', $pedido->id) }}" class="btn btn-sm btn-info">Ver</a>
                        <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display: inline-block;">
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