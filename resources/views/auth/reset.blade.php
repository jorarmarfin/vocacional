@extends('layouts.login')

@section('content')
@include('alerts.errors')
{!! Form::open(['route'=>'password.reset','method'=>'POST']) !!}
    <h3 class="font-green">Restaurar Clave</h3>
    <p> Escriba de nuevo su contraseña :  </p>
		<div class="form-group">
			{!!Form::hidden('token',$token);!!}
			{!!Form::email('email', null , ['class'=>'form-control','placeholder'=>'Email']);!!}
		</div>
		<div class="form-group">
			{!!Form::password('password' , ['class'=>'form-control','placeholder'=>'Password']);!!}
		</div>
		<div class="form-group">
			{!!Form::password('password_confirmation' , ['class'=>'form-control','placeholder'=>'Confiramr Password']);!!}
		</div>
		<div class="form-actions">
			{!!Form::submit('Enviar',['class'=>'btn green uppercase'])!!}
	        <a href="{{ route('auth.login') }}" class="btn default">Regresar</a>
        </div>
{!! Form::close() !!}
@stop

@section('copyright')
SAHOST - 2014 © Metronic. Admin Dashboard Template.
@stop