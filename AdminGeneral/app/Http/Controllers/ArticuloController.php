<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use Illuminate\Support\Facades\DB;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));

        $tipo=trim($request->get('tipo'));

       
       $articulos = Articulo::buscarpor($tipo,$texto);
        
       return view('articulo.index')->with('articulos', $articulos); 
      
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('articulo.create');
        
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulos = new Articulo();

        $articulos->nombre = $request->get('nombre');
        $articulos->descripcion = $request->get('descripcion');
        $articulos->precio = $request->get('precio');
        $articulos->cantidad = $request->get('cantidad');
        $articulos->marca = $request->get('marca');
        $articulos->imagen = $request->get('imagen');
        $articulos->descuento = $request->get('descuento');
        $articulos->empresaProveedora = $request->get('empresaProveedora');

        $articulos->save();

        return redirect('/articulos');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo = Articulo::find($id);

        return view('articulo.edit')->with('articulo', $articulo);    
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buscar()
    {
        $articulos = Articulo::all();

        return view('articulo.buscar');    
    }
    
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articuloss = Articulo::find($id);

        $articuloss->nombre = $request->get('nombre');
        $articuloss->descripcion = $request->get('descripcion');
        $articuloss->precio = $request->get('precio');
        $articuloss->cantidad = $request->get('cantidad');
        $articuloss->marca = $request->get('marca');
        $articuloss->imagen = $request->get('imagen');
        $articuloss->descuento = $request->get('descuento');
        $articuloss->empresaProveedora = $request->get('empresaProveedora');

        $articuloss->save();

        return redirect('/articulos');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $articulo = Articulo::find($id);    
        $articulo->delete();

        return redirect('/articulos');

    }
}