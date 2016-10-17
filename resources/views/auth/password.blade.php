@extends('layouts.login')

@section('content')
@include('alerts.errors')
{!! Form::open(['route'=>'password.email','method'=>'POST']) !!}
    <h3 class="font-green">Se te olvidó tu clave ?</h3>
    <p> Introduzca su dirección de correo electrónico para restablecer la contraseña. </p>
		<div class="form-group">
			{!!Form::email('email',old('email') , ['class'=>'form-control','placeholder'=>'Email']);!!}
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