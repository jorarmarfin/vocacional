@extends('layouts.base')

@section('menu-user')
@include('admin.menu-profile')
@stop

@section('name-user')
{!!Auth::user()->name!!}
@stop

@section('page-title')
@stop

@section('page-subtitle')

@stop

@section('content')
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
				<a href="#myModalNewUser" data-toggle="modal" class="btn blue">
					<i class="fa fa-plus"></i>
					<i class="fa fa-user"></i>
				</a>
				<div class="table-scrollable">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>fecha</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($Lista as $item)
							<tr>
								<td>{{$item->name}}</td>
								<td>{{$item->email}}</td>
								<td>
									<a href="#" title="Editar"class="btn btn-icon-only green-haze">
										<i class="fa fa-edit"></i>
									</a>
									<a href="#" title="Eliminar" class="btn -btn-icon-only red">
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
</div>
@include('admin.users.modals.create')
@stop

@section('sidebar')
@include('admin.menu')
@stop

@section('js-plugins')
{!! Html::script('assets/global/plugins/jquery-ui/jquery-ui.min.js') !!}
@stop
