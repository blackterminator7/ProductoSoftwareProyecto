<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Establecimiento;
use App\models\Departamento;
use App\models\Municipio;

class EstablecimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $establecimientos = Establecimiento::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        
        return view('establecimiento.index')
                    ->with('establecimientos' , $establecimientos)
                    ->with('departamentos', $departamentos)
                    ->with('municipios', $municipios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $establecimientos = Establecimiento::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();

        return view('establecimiento.create')
                    ->with('establecimientos' , $establecimientos)
                    ->with('departamentos', $departamentos)
                    ->with('municipios', $municipios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $establecimientos = new Establecimiento();

        $establecimientos->nombre_establecimiento = $request->get('nombre');
        $establecimientos->telefono = $request->get('telefono');
        $establecimientos->encargado = $request->get('encargado');
        $establecimientos->direccion = $request->get('direccion');
        $establecimientos->municipio_id = $request->get('municipio_id') ;

        $establecimientos->save();

        return redirect('/establecimientos');
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
        $establecimiento = Establecimiento::find($id);
        $departamento = Departamento::all();
        $municipio = Municipio::all();

        return view('establecimiento.edit')
                    ->with('establecimiento' , $establecimiento)
                    ->with('departamento', $departamento)
                    ->with('municipio', $municipio);
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
        $establecimiento = Establecimiento::find($id);

        $establecimiento->nombre_establecimiento = $request->get('nombre');
        $establecimiento->telefono = $request->get('telefono');
        $establecimiento->encargado = $request->get('encargado');
        $establecimiento->direccion = $request->get('direccion');
        $establecimiento->municipio_id = $request->get('municipio_id') ;

        $establecimiento->save();

        return redirect('/establecimientos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $establecimiento = Establecimiento::find($id);  
        $establecimiento->delete();

        return redirect('/establecimientos');
    }
}
