@extends('layouts.login')

@section('content')
@include('alerts.errors')
{!! Form::open(['route'=>'auth.register','method'=>'POST']) !!}
    <h3 class="font-green">Registrate</h3>
    <p class="hint"> Introduzca sus datos personales a continuación: </p>
    <div class="form-group">
        {!!Form::text('name', null , ['class'=>'form-control','placeholder'=>'Nombre de usuario']);!!}
    </div>
    <div class="form-group">
        {!!Form::text('email', null , ['class'=>'form-control','placeholder'=>'Email del usuario']);!!}
    </div>
    <div class="form-group">
        {!!Form::password('password', ['class'=>'form-control','placeholder'=>'Contraseña del usuario']);!!}
    </div>
{!! Form::close() !!}
@stop

@section('copyright')
SAHOST - 2014 © Metronic. Admin Dashboard Template.
@stop