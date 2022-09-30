@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Lista de Vehiculos</h1>
@stop
@section('content')
<a href="vehiculos/create" class="btn btn-info">Agregar Vehiculo<i class="fas fa-fw fa-plus"></i></a>
<table class="table table-light">
	<thead class="thead-ligth">
		<tr>
			<th>#</th>
			<th>Matricula</th>
			<th>Tipo</th>
			<th>Marca</th>
            <th>Modelo</th>
            <th>Color</th>
            <th>Puertas</th>
            <th>Estatus</th>
            <th>IdCliente</th>
            <th>Fecha de Registro</th>
            <th>Eliminar | Editar</th>
		</tr>
	</thead>
	<tbody>
        @foreach($vehiculos as $vehiculo)
		<tr>
            <td>{{$vehiculo->idvehiculo}}</td>
            <td>{{$vehiculo->placa}}</td>
            <td>{{$vehiculo->tipo}}</td>
            <td>{{$vehiculo->marca}}</td>
            <td>{{$vehiculo->modelo}}</td>
            <td>{{$vehiculo->color}}</td>
            <td>{{$vehiculo->puertas}}</td>
            <td>{{$vehiculo->estatus}}</td>
            <td>{{$vehiculo->idcliente}}</td>
            <td>{{$vehiculo->fechareg}}</td>
            <td>
                    <form action="{{url('/vehiculos/'.$vehiculo->idvehiculo)}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar')">
                        <i class="fas fa-fw fa-trash"></i>
                        </button>
                    </form>
                    <a href="{{url('/vehiculos/'.$vehiculo->idvehiculo.'/edit')}}">
                        <button type="submit" class="btn btn-warning" onclick="return confirm('Editar Registro!')">
                        <i class="fas fa-fw fa-pen"></i></button>
                    </a>
            </td>
        </tr>
        @endforeach
	</tbody>
</table>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script> console.log('Hi!'); </script>
@stop
