@extends('layouts.base')

@section('content')
<div class="row">
	<div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box dark">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-comments"></i>Gestion de {{ Session::get('tablename') }} </div>
            </div>
            <div class="portlet-body">
                	{!! Alert::render() !!}
                    <a href="#NewPersonal" data-toggle="modal" class="btn blue margin-bottom-20">
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-user"></i>
                    </a>

                    <table class="table table-striped table-hover midt">

                        <thead>
                            <tr>
                            @if (Session::get('tablename') == 'maestro')
                                <th> idtitem </th>
                            @endif
                            @if (Session::get('tablename') != 'jefatura')
                                <th> Codigo </th>
                            @endif
                                <th> Nombre </th>
                            @if (Session::get('tablename') != 'jefatura' )
                                <th> Descripcion </th>
                            @endif
                                <th> Activo </th>
                                <th> Opciones </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($Lista as $item)
                            <tr >
                            @if (Session::get('tablename') == 'maestro')
                                <td> {{ $item->iditem }} </td>
                            @endif
                            @if (Session::get('tablename') != 'jefatura')
                                <td> {{ $item->codigo }} </td>
                            @endif
                                <td> {{ $item->nombre }} </td>
                            @if (Session::get('tablename') != 'jefatura')
                                <td> {{ $item->descripcion }} </td>
                            @endif
                                <td>
                                @if ($item->activo)
                                    <a href="{{route('catalogo.active',$item->id)}}" class="label label-sm label-info">Activo</a>
                                @else
                                    <a href="{{route('catalogo.active',$item->id)}}" class="label label-sm label-danger">Inactivo</a>
                                @endif
                                </td>
                                <td>
                                    <a href="{{route('catalogo.edit',$item->id)}}" title="Editar"class="btn btn-icon-only green-haze">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('catalogo.show',$item->id)}}" title="Eliminar" class="btn -btn-icon-only red" id="Eliminar">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
    </div>
</div>
@include('catalogo.modals.create')
@stop




@section('title')
GESTION DE CATALOGO
@stop

@section('page-title')
@stop

@section('page-subtitle')
@stop

@section('sidebar')
@include(Auth::user()->menu)
@stop

@section('user-menu')
@include('menu.profile-admin')
@stop


@section('user-name')
{!!Auth::user()->name!!}
@stop


@section('user-img')
{!! Auth::user()->mostrar_foto !!}
@stop

