@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Categorías</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Nueva Categoría</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
