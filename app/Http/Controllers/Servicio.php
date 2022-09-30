<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios;

class Servicio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['servicios']=Servicios::paginate(5);
        return view ('servicios/listservicios',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('servicios/addservicios');
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
        $datoServicio=request()->except('_token');
        Servicios::insert($datoServicio);  
        return redirect('servicios');  
        //
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idservicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idservicio)
    {
        $servicio=Servicios::findOrFail($idservicio);
        return view ('servicios/editservicios',compact('servicio'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idservicio)
    {
        $datoServicio=request()->except(['_token','_method']);
        Servicios::where('idservicio','=',$idservicio)->update($datoServicio);

        $servicio=Servicios::findOrFail($idservicio);
        //alert ("Datos actualizados");
        return view ('servicios/editservicios',compact('servicio'));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idservicio)
    {
        Servicios::destroy($idservicio);
        return redirect('servicios');
    }
}

