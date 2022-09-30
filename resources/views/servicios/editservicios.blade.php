@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Editar Servicio</h1> 
@stop
@section('content')
<div class="container">
    <form action="{{url('/servicios/'.$servicio->idservicio)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    <div class="form-row">
        <div class="col-3">
            <label for="descripcion">Descripcion</label>
            <input type="text" class="form-control"  name="descripcion" id="descripcion" value="{{$servicio->descripcion}}">
        </div>
        <div class="col-3">
            <label for="costo">Costo</label>
            <input type="text" class="form-control"  name="costo" id="costo" value="{{$servicio->costo}}">
        </div>
        <div class="col-3">
            <label for="estatus">Estado</label>
            <input type="text" class="form-control"  name="estatus" id="estatus" value="{{$servicio->estatus}}">
        </div>
        <div class="col-3">
            <label for="fechareg">Fecha de Registro</label>
            <input type="date" class="form-control"  name="fechareg" id="fechareg" value="{{$servicio->fechareg}}">
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