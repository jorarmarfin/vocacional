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
 Panel de Administracion
@stop

@section('content')

@stop

@section('sidebar')
@include('admin.menu')
@stop
