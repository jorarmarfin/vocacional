@extends('layouts.base')

@section('content')
qwe
@stop

@section('menu-user')
@include('menu.profile-admin')
@stop

@section('sidebar')
@include(Auth::user()->menu)
@stop

@section('user-img')
{{ Auth::user()->mostrar_foto }}
@stop

@section('user-name')
{!!Auth::user()->name!!}
@stop



@section('page-title')
Panel de
@stop

@section('page-subtitle')
  Administracion

@stop




