@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Editar Vehiculo</h1> 
@stop
@section('content')
<div class="container">
    <form action="{{url('/vehiculos/'.$vehiculo->idvehiculo)}}" method="post">
        @csrf
        {{method_field('PATCH')}}
        <div class="form-row">
            <div class="col-4">
                <label for="placa">Matricula</label>
                <input type="text" class="form-control"  name="placa" id="placa" value="{{$vehiculo->marca}}">
            </div>
            <div class="col-4">
                <label for="tipo">Tipo</label>
                <input type="text" class="form-control"  name="tipo" id="tipo" value="{{$vehiculo->tipo}}">
            </div>
            <div class="col-4">
                <label for="marca">Marca</label>
                <input type="text" class="form-control"  name="marca" id="marca" value="{{$vehiculo->marca}}">
            </div>
        </div>
        <div class="form-row">
            <div class="col-4">
                <label for="modelo">Modelo</label>
                <input type="text" class="form-control"  name="modelo" id="modelo" value="{{$vehiculo->modelo}}">
            </div>
            <div class="col-4">
                <label for="color">Color</label>
                <input type="text" class="form-control"  name="color" id="color" value="{{$vehiculo->color}}">
            </div>
            <div class="col-4">
                <label for="puertas">Puertas</label>
                <input type="number" class="form-control" name="puertas" id="puertas" value="{{$vehiculo->puertas}}">
            </div>
        </div>
        <div class="form-row">
            <div class="col-4">
                <label for="estatus">Estatus</label>
                <input type="text" class="form-control" name="estatus" id="estatus" value="{{$vehiculo->estatus}}">
            </div>
            <div class="col-4">
                <label for="idcliente">IdCliente</label>
                <input type="text" class="form-control" name="idcliente" id="idcliente" value="{{$vehiculo->idcliente}}">
            </div>
            <div class="col-4">
                <label for="fechareg">Fecha de Registro</label>
                c
            </div>
        </div>

    <br>
    <input type="submit" class="btn btn-success" value="Actualizar">
</form>
</div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script> console.log('Hi!'); </script>
@stop