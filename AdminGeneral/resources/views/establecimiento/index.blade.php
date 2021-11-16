@extends('layouts.plantillabase')

@section('tittle', 'Establecimientos')

@section('import')
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>
@endsection

@section('contenido')

@section('nav')
    @include('layouts.nav')
@endsection

<a href="establecimientos/create" class="btn btn-primary">CREAR</a>

<table class="table table-striped mt-4">

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Telefono</th>
            <th scope="col">Encargado</th>
            <th scope="col">Direcciones</th>
            <th scope="col">ID Municipio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($establecimientos as $establecimiento)
        <tr>
            <td>{{ $establecimiento->id }}</td>
            <td>{{ $establecimiento->nombre_establecimiento }}</td>
            <td>{{ $establecimiento->telefono }}</td>
            <td>{{ $establecimiento->encargado }}</td>
            <td>{{ $establecimiento->direccion }}</td>
            <td>{{ $establecimiento->municipio_id }}</td>
            <td>
                <form action="{{ route ('establecimientos.destroy', $establecimiento->id) }}" method="POST">
                <a href="/establecimientos/{{ $establecimiento->id }}/edit" class="btn btn-info">Editar</a>
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