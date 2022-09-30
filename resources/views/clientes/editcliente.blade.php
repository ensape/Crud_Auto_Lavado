@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Editar cliente</h1> 
@stop
@section('content')
<div class="container">
    <form action="{{url('/clientes/'.$cliente->idcliente)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    <div class="form-row">
        <div class="col-4">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control"  name="nombre" id="nombre" value="{{$cliente->nombre}}">
        </div>
        <div class="col-4">
            <label for="apaterno">Primer Apellido</label>
            <input type="text" class="form-control"  name="apaterno" id="apaterno" value="{{$cliente->apaterno}}">
        </div>
        <div class="col-4">
            <label for="amaterno">Segundo Apellido</label>
            <input type="text" class="form-control"  name="amaterno" id="amaterno" value="{{$cliente->amaterno}}">
        </div>
      </div>
    <div class="form-row">
        <div class="col-8">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" name="direccion" id="direccion" value="{{$cliente->direccion}}">
        </div>
        <div class="col-4">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="telefono" value="{{$cliente->telefono}}">
        </div>
    </div>
    <div class="form-row">
        <div class="col">
            <label for="correo">Correo</label>
            <input type="text" class="form-control" name="correo" id="correo" value="{{$cliente->correo}}">
        </div>
        <div class="col">
            <label for="fechareg">Fecha de Registro</label>
            <input type="date" class="form-control"  name="fechareg" id="fechareg" value="{{$cliente->fechareg}}">
        </div>
        <div class="col">
        <label for="estatus">Estado</label>
            <input type="text" class="form-control"  name="estatus" id="estatus" value="{{$cliente->estatus}}">
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