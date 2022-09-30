<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculos;

class Vehiculo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['vehiculos']=Vehiculos::paginate(5);
        return view ('vehiculos/listvehiculos',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('vehiculos/addvehiculos');
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
        $datoVehiculo=request()->except('_token');
        Vehiculos::insert($datoVehiculo);  
        return redirect('vehiculos');  
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idvehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idvehiculo)
    {
        $vehiculo=Vehiculos::findOrFail($idvehiculo);
        return view ('vehiculos/editvehiculos',compact('vehiculo'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idvehiculo)
    {
        $datoVehiculo=request()->except(['_token','_method']);
        Vehiculos::where('idvehiculo','=',$idvehiculo)->update($datoVehiculo);

        $vehiculo=Vehiculos::findOrFail($idvehiculo);
        //alert ("Datos actualizados");
        return view ('vehiculos/editvehiculos',compact('vehiculo'));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idvehiculo)
    {
        Vehiculos::destroy($idvehiculo);
        return redirect('vehiculos');
    }
}
