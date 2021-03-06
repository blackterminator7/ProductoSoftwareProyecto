@extends('layouts.plantillabase')

@section('tittle', 'Editar')

@section('import')
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>
@endsection

@section('contenido')
<h2>EDITAR REGISTROS</h2>
<form action="/inventarios/{{$inventario->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Tipo</label>
        <input id="tipo" name="tipo" type="text" class="form-control" value="{{$inventario->tipo}}" tabindex="1">
    </div>

    <div class="mb-3">
    <select class="form-control" name="establecimiento_id"  id="establecimiento_id">
        @foreach($establecimiento as $est)
            <option value="{{$est->id}}"> {{ $est->nombre_establecimiento }} </option>
        @endforeach
    </select>
    </div>
    
    <a href="/inventarios" class="btn btn-secondary" tabindex="4">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
</form>

@endsection