@extends('layouts.base')

@section('menu-user')
@include('admin.menu-profile')
@stop

@section('userimg')
{{ asset('storage/fotos/'.Auth::user()->foto) }}
@stop

@section('username')
{!!Auth::user()->name!!}
@stop

@section('page-title')
Panel de
@stop

@section('page-subtitle')
  Administracion

@stop

@section('content')

@stop

@section('sidebar')
@include(Auth::user()->menu)
@stop
