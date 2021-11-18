<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use App\Models\Establecimiento;
Use DB;

class InventariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $establecimientos = Establecimiento::with('inventarios')->get();
        return view('inventario.index' , compact('establecimientos'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventarios = Inventario::all();
        $establecimientos = Establecimiento::all();

        return view('inventario.create')
                    ->with('inventarios' , $inventarios)
                    ->with('establecimientos', $establecimientos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventarios = new Inventario();

        $inventarios->tipo = $request->get('tipo');
        $inventarios->establecimiento_id = $request->get('establecimiento_id');
    
        $inventarios->save();

        return redirect('/inventarios');   
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
        $inventario = Inventario::find($id);
        $establecimiento = Establecimiento::all();

        return view('inventario.edit')
                    ->with('inventario' , $inventario)
                    ->with('establecimiento', $establecimiento);
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
        $inventario = Inventario::find($id);

        $inventario->tipo = $request->get('tipo');
        $inventario->establecimiento_id = $request->get('establecimiento_id');

        $inventario->save();

        return redirect('/inventarios');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventario = Inventario::find($id);    
        $inventario->delete();

        return redirect('/inventarios');
    }
}
