@extends('layouts.plantillabase')

@section('contenido')

<a href="inventarios/create" class="btn btn-primary">CREAR INVENTARIO</a>

<table class="table table-striped mt-4">

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tipo</th>
            <th scope="col">Establecimiento</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($inventarios as $inventario)
        <tr>
            <td>{{ $inventario->id }}</td>
            <td>{{ $inventario->tipo }}</td>
            <td>{{ $inventario->establecimiento_id }}</td>

            <td>
                <form action="{{ route ('inventarios.destroy', $inventario->id) }}" method="POST">
                <a href="/inventarios/{{ $inventario->id }}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>


@endsection