@extends('layouts.login')

@section('content')
@include('alerts.errors')
{!! Form::open(['route'=>'password.email','method'=>'POST']) !!}
    <h3 class="font-green">Se te olvidó tu clave ?</h3>
    <p> Introduzca su dirección de correo electrónico para restablecer la contraseña. </p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                <div class="form-actions">
                    <a href="{{ route('auth.login') }}" class="btn default">Regresar</a>
                    <button type="submit" class="btn btn-success uppercase pull-right">Enviar</button>
                </div>
{!! Form::close() !!}
@stop

@section('copyright')
SAHOST - 2014 © Metronic. Admin Dashboard Template.
@stop