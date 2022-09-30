@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Alta de clientes</h1> 
@stop
@section('content')
<div class="container">
    <form action="{{url('/clientes')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="col-4">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control"  name="nombre" id="nombre">
        </div>
        <div class="col-4">
            <label for="apaterno">Primer Apellido</label>
            <input type="text" class="form-control"  name="apaterno" id="apaterno">
        </div>
        <div class="col-4">
            <label for="amaterno">Segundo Apellido</label>
            <input type="text" class="form-control"  name="amaterno" id="amaterno">
        </div>
      </div>
    <div class="form-row">
        <div class="col-8">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" name="direccion" id="direccion">
        </div>
        <div class="col-4">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="telefono">
        </div>
    </div>
    <div class="form-row">
        <div class="col">
            <label for="correo">Correo</label>
            <input type="text" class="form-control" name="correo" id="correo">
        </div>
        <div class="col">
            <label for="fechareg">Fecha de Registro</label>
            <input type="date" class="form-control"  name="fechareg" id="fechareg">
        </div>
        <div class="col">
            <label for="nombre">Estatus</label>
            <select class="custom-select" id="estatus" name="estatus">
                <option selected>Selecciona...</option>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
              </select>
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