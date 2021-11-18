@extends('layouts.plantillabase')

@section('tittle', 'Conexion')

@section('import')
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>
@endsection

@section('contenido')

@section('nav')
    @include('layouts.nav')
@endsection

</hr>
<h1 align="center">Conectar a Base de Datos</h1>
</br>

<div align="center">
    <form action="/conexion/conectar" method="POST" style="width: 30%; display: inline-block; text-align: center; ">
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Gestor</label>
            <select name="gestor" class="form-control" required>
                <option value="">Seleccione Gestor... </option>
                <option value="pgsql">PostgreSQL</option>
                <option value="mysql">MySQL</option>
            </select>
        </div> 

        <div class="mb-3">
            <label for="" class="form-label">Host</label>
            <input id="host" name="host" value="127.0.0.1" type="text" class="form-control" tabindex="1">
        </div> 

        <div class="mb-3">
            <label for="" class="form-label">Port</label>
            <input id="port" name="port" type="text" class="form-control" tabindex="2" placeholder="Ej.: 5432 | 3306" required>
        </div> 

        <div class="mb-3">
            <label for="" class="form-label">Usuario</label>
            <input id="usuario" name="usuario" type="text" class="form-control" tabindex="3" placeholder="Ej.: root" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input id="password" name="password" type="password" class="form-control" tabindex="4" placeholder="Ej.: password" required>
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Database</label>
            <input id="database" name="database" type="text" class="form-control" tabindex="5" placeholder="Ej.: baseEmpresa" required>
        </div>

        <a href="/" class="btn btn-danger" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Conectar</button>
        {{-- <a href="conexion/conectar" class="btn btn-primary">Conectar</a> --}}

    </form>
</div>

</br></br>

@endsection