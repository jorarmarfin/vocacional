@extends('layouts.login')

@section('content')
    @include('alerts.errors')
{!! Form::open(['url'=>'login','method'=>'POST']) !!}
    <h3 class="form-title font-green">Iniciar Sesion</h3>
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
        {!!Form::submit('Entrar',['class'=>'btn green uppercase btn-block'])!!}
    </div>
    <div class="create-account">
        <p>
    {!!Form::boton('Crear usuario',url('/register'),'green','fa fa-plus')!!}
    {!!Form::boton('Olvide mi Clave',url('/password/reset'),'green','fa fa-cog')!!}
        </p>
    </div>
{!! Form::close() !!}
@stop

@section('copyright')
Oficina Central de Admision. Universidad Nacional de Ingeniería
@stop