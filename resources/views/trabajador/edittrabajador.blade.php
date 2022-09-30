@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Editar Trabajador</h1> 
@stop
@section('content')
<div class="container">
    <form action="{{url('/trabajadores/'.$trabajador->idtrabajador)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    <div class="form-row">
        <div class="col-4">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control"  name="nombre" id="nombre" value="{{$trabajador->nombre}}">
        </div>
        <div class="col-4">
            <label for="apaterno">Primer Apellido</label>
            <input type="text" class="form-control"  name="apaterno" id="apaterno" value="{{$trabajador->apaterno}}">
        </div>
        <div class="col-4">
            <label for="amaterno">Segundo Apellido</label>
            <input type="text" class="form-control"  name="amaterno" id="amaterno" value="{{$trabajador->amaterno}}">
        </div>
      </div>
    <div class="form-row">
        <div class="col-8">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" name="direccion" id="direccion" value="{{$trabajador->direccion}}">
        </div>
        <div class="col-4">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="telefono" value="{{$trabajador->telefono}}">
        </div>
    </div>
    <div class="form-row">
        <div class="col">
            <label for="correo">Correo</label>
            <input type="text" class="form-control" name="correo" id="correo" value="{{$trabajador->correo}}">
        </div>
        <div class="col">
            <label for="tipo">Tipo</label>
            <select class="custom-select" id="tipo" name="tipo" >
                <option value="{{$trabajador->tipo}}">
                    @if($trabajador->tipo>2)         
                        Lavador       
                    @else
                        Cajero  
                    @endif
                </option>
                <option value="1">Lavador</option>
                <option value="2">Cajero</option>
              </select>
        </div>
        <div class="col">
            <label for="contrasena">Contraseña</label>
            <input type="text" class="form-control" name="contrasena" id="contrasena" value="{{$trabajador->contrasena}}">
        </div>
        <div class="col">
            <label for="estatus">Estatus</label>
            <input type="text" class="form-control" name="estatus" id="estatus" value="{{$trabajador->estatus}}">
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