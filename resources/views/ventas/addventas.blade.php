@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Alta de Ventas</h1> 
@stop
@section('content')
<div class="container">
    <form action="{{url('/ventas')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
    <div class="col-4">
            <label for="fecha">Fecha de Registro</label>
            <input type="date" class="form-control"  name="fecha" id="fecha">
        </div>
        <div class="col-4">
            <label for="idvehiculo">IdVehiculo</label>
            <input type="number" class="form-control"  name="idvehiculo" id="idvehiculo">
        </div>
        <div class="col-4">
            <label for="idtrabajador">IdTrabajador</label>
            <input type="number" class="form-control"  name="idtrabajador" id="idtrabajador">
        </div>
      </div>
    <div class="form-row">
        <div class="col-4">
            <label for="idservicio">IdServicio</label>
            <input type="number" class="form-control" name="idservicio" id="idservicio">
        </div>
        <div class="col-4">
            <label for="estatus">Estado</label>
            <input type="number" class="form-control" name="estatus" id="estatus">
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