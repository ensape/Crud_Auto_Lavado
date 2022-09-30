@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Alta de Vehiculos</h1> 
@stop
@section('content')
<div class="container">
    <form action="{{url('/vehiculos')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="col-4">
            <label for="placa">Placa</label>
            <input type="text" class="form-control"  name="placa" id="placa">
        </div>
        <div class="col-4">
            <label for="tipo">Tipo</label>
            <input type="text" class="form-control"  name="tipo" id="tipo">
        </div>
        <div class="col-4">
            <label for="marca">Marca</label>
            <input type="text" class="form-control"  name="marca" id="marca">
        </div>
      </div>
    <div class="form-row">
        <div class="col-4">
            <label for="modelo">Modelo</label>
            <input type="number" class="form-control" name="modelo" id="modelo">
        </div>
        <div class="col-4">
            <label for="color">Color</label>
            <input type="text" class="form-control" name="color" id="color">
        </div>
        <div class="col-4">
            <label for="puertas">Puertas</label>
            <input type="number" class="form-control" name="puertas" id="puertas">
        </div>
    </div>
    <div class="form-row">
        <div class="col-4">
            <label for="estatus">Estatus</label>
            <input type="text" class="form-control" name="estatus" id="estatus">
        </div>
        <div class="col-4">
            <label for="idcliente">IdCliente</label>
            <input type="text" class="form-control" name="idcliente" id="idcliente">
        </div>
        <div class="col-4">
            <label for="fechareg">Fecha de Registro</label>
            <input type="date" class="form-control"  name="fechareg" id="fechareg">
        </div>
    </div>
    <br>
    <input type="submit" class="btn btn-success" value="Guardar">
</form>
</div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script> console.log('Hi!'); </script>
@stop