@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Lista de Servicios</h1>
@stop
@section('content')

<a href="servicios/create" class="btn btn-info">Agregar Servicio<i class="fas fa-fw fa-plus"></i></a>
<table class="table table-light">
	<thead class="thead-ligth">
		<tr>
			<th>#</th>
			<th>Servicio</th>
			<th>Costo</th>
			<th>Estatus</th>
            <th>fecha de Registro</th>
            <th>Eliminar | Editar</th>
		</tr>
	</thead>
	<tbody>
        @foreach($servicios as $servicio)
		<tr>
            <td>{{$servicio->idservicio}}</td>
            <td>{{$servicio->descripcion}}</td>
            <td>{{$servicio->costo}}</td>
            <td>{{$servicio->estatus}}</td>
            <td>{{$servicio->fechareg}}</td>
            <td>
            <form action="{{url('/servicios/'.$servicio->idservicio)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar')">
                    <i class="fas fa-fw fa-trash"></i>
                </button>
                </form>
                <a href="{{url('/servicios/'.$servicio->idservicio.'/edit')}}">
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
