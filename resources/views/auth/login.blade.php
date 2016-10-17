@extends('layouts.login')

@section('content')
{!! Form::open(['route'=>'auth.login','method'=>'POST']) !!}
    <h3 class="form-title font-green">Iniciar Sesion</h3>
    @include('alerts.errors')
    <div class="form-group">
            <div class="input-icon right ">
            <i class="fa fa-envelope"></i>
            {!!Form::email('email',old('email'), ['class'=>'form-control','placeholder'=>'Email'])!!}
            </div>
    </div>
    <div class="form-group">
        <div class="input-icon right ">
            <i class="fa fa-lock"></i>
            {!!Form::password('password', ['class'=>'form-control','placeholder'=>'Clave'])!!}
        </div>
    </div>
    <div class="form-actions">
        {!!Form::submit('Entrar',['class'=>'btn green uppercase'])!!}
        <a href="{{ route('password.email') }}" class="forget-password">Olvide mi clave</a>
    </div>

    <div class="create-account">
        <p>
            <a href="{{ route('auth.register') }}" class="uppercase">Crear una cuenta</a>
        </p>
    </div>
{!! Form::close() !!}
@stop

@section('copyright')
SAHOST - 2014 © Metronic. Admin Dashboard Template.
@stop