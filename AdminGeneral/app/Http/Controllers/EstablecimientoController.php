<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Establecimiento;

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
        
        return view('establecimiento.index')->with('establecimientos', $establecimientos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('establecimiento.create');
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

        $establecimientos->nombre = $request->get('nombre');
        $establecimientos->telefono = $request->get('telefono');
        $establecimientos->encargado = $request->get('encargado');
        //$establecimientos->direccion = $request->get('direccion');

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

        return view('establecimiento.edit')->with('establecimiento', $establecimiento);
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

        $establecimiento->nombre = $request->get('nombre');
        $establecimiento->telefono = $request->get('telefono');
        $establecimiento->encargado = $request->get('encargado');

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
