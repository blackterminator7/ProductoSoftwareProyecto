@extends('layouts.plantillabase')

@section('contenido')

<a href="articulos/create" class="btn btn-primary" style="float: right;">CREAR</a>


<h2>GESTIONAR RESPUESTOS</h2>
            <div class="col-xl-12">
                <form action="{{route('articulos.index')}}" method="get">
                    <div class="form-row" >
                            
                            <select name="tipo" cllass="form-control" id="exampleFormControlSelect1">
                                <option>Buscar Por</option>
                                <option>descripcion</option>
                                <option>cantidad</option>
                                <option>precio</option>
                               
                            </select>  
                            
                        <div class="col-sm-3 my-2">      
                            <input type="text" class="form-control" name="texto" >
                        </div>
                        <div class="col-auto">
                            <input type="submit" class="btn btn-info" value="Buscar">
                        </div>             
                    </div>
                </form>
            </div>
           
        
    
    

<table class="table table-striped mt-4">

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
          
        </tr>
    </thead>

    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{ $articulo->id }}</td>
            <td>{{ $articulo->codigo }}</td> 
            <td>{{ $articulo->descripcion }}</td>
            <td>{{ $articulo->cantidad }}</td>
            <td>{{ $articulo->precio }}</td>

            <td>
                <form action="{{ route ('articulos.destroy', $articulo->id) }}" method="POST">
                <a href="/articulos/{{ $articulo->id }}/edit" class="btn btn-info">Editar</a>
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