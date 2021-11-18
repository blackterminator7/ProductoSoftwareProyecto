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

</br></br>

<table class="table table-striped mt-4">
    </hr>

    @if($gestor == 'mysql')
        <h1>MySQL</h1>
    @else
        <h1>PostgreSQL</h1>
    @endif

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Telefono</th>
            @if($gestor == 'mysql')
                <th scope="col">Encargado</th>
            @endif
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($establecimientos as $establecimiento)
        <tr>
            @if($gestor == 'mysql')
                <td>{{ $establecimiento->id }}</td>
                <td>{{ $establecimiento->nombre_establecimiento }}</td>
                <td>{{ $establecimiento->telefono }}</td>
                <td>{{ $establecimiento->encargado }}</td>
            @else
                <td>{{ $establecimiento->id }}</td>
                <td>{{ $establecimiento->nombreEstablecimiento }}</td>
                <td>{{ $establecimiento->telefonoEstablecimiento }}</td>
            @endif
            <td>
                <form action="" method="POST">
                    <a href="" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    
</table>

</br></br></br>

@endsection