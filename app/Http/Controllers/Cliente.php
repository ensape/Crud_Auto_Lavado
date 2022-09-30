<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes; //importar el modelo de Clientes

class Cliente extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['clientes']=Clientes::paginate(5); //genrar el arreglo con los datos de los clientes
        return view ('clientes/listcliente',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('clientes/addcliente');
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
        //
        $datosCliente=request()->except('_token');
        Clientes::insert($datosCliente);  
        return redirect('clientes');  
        //return response()->json($datosCliente);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idcliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idcliente)
    {
        $cliente=Clientes::findOrFail($idcliente);
        return view ('clientes/editcliente',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idcliente)
    {
        $datosCliente=request()->except(['_token','_method']);
        Clientes::where('idcliente','=',$idcliente)->update($datosCliente);

        $cliente=Clientes::findOrFail($idcliente);
        //alert ("Datos actualizados");
        return view ('clientes/editcliente',compact('cliente'));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idcliente)
    {
        Clientes::destroy($idcliente);
        return redirect('clientes');
        //
    }
}
