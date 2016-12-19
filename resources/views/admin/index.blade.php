@extends('layouts.base')

@section('menu-user')
@include('menu.profile-admin')
@stop

@section('sidebar')
@include(Auth::user()->menu)
@stop

@section('user-img')
{{ asset('storage/fotos/'.Auth::user()->foto) }}
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

@section('content')
qwe
@stop


