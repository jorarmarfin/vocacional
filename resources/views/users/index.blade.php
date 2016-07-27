@extends('layouts.base')

@section('menu-user')
@include('users.menu-profile')
@stop

@section('name-user')
{!!Auth::user()->name!!}
@stop

@section('page-title')

@stop

@section('page-subtitle')
 Panel de Usuario
@stop

@section('content')

@stop

@section('sidebar')
@include('users.sidebar')
@stop
