<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;

class Venta extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['ventas']=Ventas::paginate(5);
        return view ('ventas/listventas',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('ventas/addventas');
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
        $datoVenta=request()->except('_token');
        Ventas::insert($datoVenta);  
        return redirect('ventas');  
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idventa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idventa)
    {
        $venta=Ventas::findOrFail($idventa);
        return view ('ventas/editventas',compact('venta'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idventa)
    {
        $datoventa=request()->except(['_token','_method']);
        Ventas::where('idventa','=',$idventa)->update($datoventa);

        $venta=Ventas::findOrFail($idventa);
        //alert ("Datos actualizados");
        return view ('ventas/editventas',compact('venta'));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idventa)
    {
        Ventas::destroy($idventa);
        return redirect('ventas');
    }
}
