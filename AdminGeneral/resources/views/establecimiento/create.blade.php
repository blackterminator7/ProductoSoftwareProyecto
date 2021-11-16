@extends('layouts.plantillabase')

@section('tittle', 'Crear')

@section('import')
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>
@endsection

@section('contenido')
<h2>CREAR REGISTROS</h2>
<form action="/establecimientos" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="text" class="form-control" tabindex="2">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Encargado</label>
        <input id="encargado" name="encargado" type="text" class="form-control" tabindex="3">
    </div> 
    
    <div class="mb-3">
        <label for="" class="form-label">Direccion</label>
        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="4">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Departamento</label>
    <select class="form-control" name="departamento_id"  id="departamento">
        @foreach($departamentos as $departamento)
            <option value="{{$departamento->id}}"> {{ $departamento->nombre_departamento }} </option>
        @endforeach
    </select>
    <div id="selectmunicipio"></div>
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Municipio</label>
    <select class="form-control" name="municipio_id"  id="municipio">
        @foreach($municipios as $municipio)
            <option value="{{$municipio->id}}"> {{ $municipio->nombre_municipio }} </option>
        @endforeach
    </select>
    </div>

    <!-- Aqui irian dos select, uno para el departamento, en donde al momento de elegir uno,
        se deben de actualizar el otro select que seria de municipios, y solo se enviaria
        el id del municipio que eligio-->

    <a href="/establecimientos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>

@endsection