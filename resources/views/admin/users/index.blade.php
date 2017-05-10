@extends('layouts.base')

@section('content')
{!! Alert::render() !!}
<div class="row">
	<div class="col-md-8">
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-table"></i>
					Usuarios
				</div>
			</div>
			<div class="portlet-body">
		{!!Form::botonmodal('Nuevo Usuario','#myModalNewUser','blue','fa fa-plus','margin-bottom-20')!!}
					<table class="table table-striped table-hover midt">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>fecha</th>
								<th>foto</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($Lista as $item)
							<tr>
								<td>{{$item->name}}</td>
								<td>{{$item->email}}</td>
								<td><img src="{{$item->mostrar_foto}}" width='25px'></td>
								<td>
									<a href="{{ route('admin.users.edit',$item->id) }}" title="Editar"class="btn btn-icon-only green-haze" >
										<i class="fa fa-edit"></i>
									</a>
									<a href="{{ route('admin.users.show',$item->id) }}" title="Eliminar" class="btn -btn-icon-only red">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>

			</div>

		</div>
	</div>
</div>
@include('admin.users.modals.create')
@stop

@section('user-img')
{{ Auth::user()->mostrar_foto }}
@stop

@section('menu-user')
@include('menu.profile-admin')
@stop

@section('sidebar')
@include(Auth::user()->menu)
@stop

@section('user-name')
{!!Auth::user()->name!!}
@stop

@section('page-title')
@stop

@section('page-subtitle')

@stop

