@extends('layouts.plantillabase')

@section('tittle', 'Inventarios')

@section('import')
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>
@endsection

@section('contenido')

@section('nav')
    @include('layouts.nav')
@endsection

<a href="inventarios/create" class="btn btn-primary">CREAR NUEVO INVENTARIO</a>

<table class="table table-striped mt-3">

    <thead>
        <tr>
            <th scope="col">Tipo</th>
            <th scope="col">Establecimiento</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($inventarios as $inventario)
        <tr>
            <td>{{ $inventario->tipo }}</td>
            <td>{{ $inventario->establecimiento_id}}</td>

            <td>
                <form action="{{ route ('inventarios.destroy', $inventario->id) }}" method="POST">
                <a href="/inventarios/{{ $inventario->id }}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" onclick="if (!confirm('¿Seguro que desea eliminar?')) { return false }" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>


@endsection