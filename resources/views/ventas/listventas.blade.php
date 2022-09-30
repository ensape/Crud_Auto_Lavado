@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Lista de Ventas</h1>
@stop
@section('content')
<a href="ventas/create" class="btn btn-info">Agregar Ventas<i class="fas fa-fw fa-plus"></i></a>
<table class="table table-light">
	<thead class="thead-ligth">
		<tr>
			<th>#</th>
			<th>fecha</th>
			<th>IdVehiculo</th>
            <th>IdTrabajador</th>
            <th>IdServicio</th>
            <th>Estatus</th>
            <th>Eliminar | Editar</th>
		</tr>
	</thead>
	<tbody>
        @foreach($ventas as $venta)
		<tr>
            <td>{{$venta->idventa}}</td>
            <td>{{$venta->fecha}}</td>
            <td>{{$venta->idvehiculo}}</td>
            <td>{{$venta->idtrabajador}}</td>
            <td>{{$venta->idservicio}}</td>
            <td>{{$venta->estatus}}</td>
            <td>
                <form action="{{url('/ventas/'.$venta->idventa)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar')">
                        <i class="fas fa-fw fa-trash"></i>
                    </button>
                </form>
                    <a href="{{url('/ventas/'.$venta->idventa.'/edit')}}">
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
