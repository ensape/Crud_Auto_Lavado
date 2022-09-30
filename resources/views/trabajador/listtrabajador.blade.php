@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Listar Trabajador</h1>
@stop
@section('content')
    <a href="trabajadores/create" class="btn btn-info">Agregar Trabajador<i class="fas fa-fw fa-plus"></i></a>
<table class="table table-light">
	<thead class="thead-ligth">
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Primer Apellido</th>
			<th>Segundo Apellido</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Tipo</th>
            <th>Estatus</th>
            <th>Eliminar | Editar</th>
            
		</tr>
	</thead>
	<tbody>
        @foreach($trabajadores as $trabajador)
		<tr>
            <td>{{$trabajador->idtrabajador}}</td>
            <td>{{$trabajador->nombre}}</td>
            <td>{{$trabajador->apaterno}}</td>
            <td>{{$trabajador->amaterno}}</td>
            <td>{{$trabajador->direccion}}</td>
            <td>{{$trabajador->telefono}}</td>
            <td>{{$trabajador->correo}}</td>
            <td>{{$trabajador->tipo}}</td>
            <td>{{$trabajador->estatus}}</td>
            <td>
                <form action="{{ url('/trabajadores/'.$trabajador->idtrabajador)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar')">
                    <i class="fas fa-fw fa-trash"></i>
                </button>
                </form>
                <a href="{{url('/trabajadores/'.$trabajador->idtrabajador.'/edit')}}">
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
