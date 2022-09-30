<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajadores;

class Trabajador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['trabajadores']=Trabajadores::paginate(5);
        return view('trabajador/listtrabajador',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('trabajador/addtrabajador');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datoTrabajador=request()->except('_token');
        Trabajadores::insert($datoTrabajador);  
        return redirect('trabajadores');  
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idtrabajador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idtrabajador)
    {
        $trabajador=Trabajadores::findOrFail($idtrabajador);
        return view ('trabajador/edittrabajador',compact('trabajador'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idtrabajador)
    {
        $datosTrabajador=request()->except(['_token','_method']);
        Trabajadores::where('idtrabajador','=',$idtrabajador)->update($datosTrabajador);

        $trabajador=Trabajadores::findOrFail($idtrabajador);
        //alert ("Datos actualizados");
        return view ('trabajador/edittrabajador',compact('trabajador'));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idtrabajador)
    {
        Trabajadores::destroy($idtrabajador);
        return redirect('trabajadores');
    }
}
