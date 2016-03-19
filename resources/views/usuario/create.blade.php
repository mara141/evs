@extends('layouts.UsuarioAdmin')

@section('content')
@include('alerts.request')
{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
<div class="form-group">
{!!Form::label('Nombre:')!!}
{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>
<div class="form-group">
{!!Form::label('Correo:')!!}
{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese su E-mail'])!!}
</div>
<div class="form-group">
{!!Form::label('Password:')!!}
{!!Form::password('password',null,['class'=>'form-control','placeholder'=>'Ingrese su E-mail'])!!}
</div>
{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}


{!!Form::close()!!}

@stop

