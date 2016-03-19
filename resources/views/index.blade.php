@extends('layouts.principal')
@include('alerts.errors')
	@section('content')
	
				<div class="header">
			<div class="top-header">
				<div class="logo">
					<a href="index.html"><img src="" alt="" /></a>
					<p>E-vs</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="header-info">
				<h1>LogIn</h1>
				{!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
					<div class="form-group">
						{!!Form::label('correo','Correo:')!!}	
						{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('contrasena','Contraseña:')!!}	
						{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
					</div>
					{!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
				<a href= "http://localhost:8000/usuario/create"> Registrarse Aquí </a>
			</div>

		</div>
@stop