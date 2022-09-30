@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Alta de Servicios</h1> 
@stop
@section('content')
<div class="container">
    <form action="{{url('/servicios')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="col-3">
            <label for="descripcion">Descripcion</label>
            <input type="text" class="form-control"  name="descripcion" id="descripcion">
        </div>
        <div class="col-3">
            <label for="costo">Costo</label>
            <input type="text" class="form-control"  name="costo" id="costo">
        </div>
        <div class="col-3">
            <label for="estatus">Estatus</label>
            <input type="text" class="form-control"  name="estatus" id="estatus">
        </div>
        <div class="col-3">
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