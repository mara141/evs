@extends('layouts.admin')
	@section('content')
		{!!Form::model($inst,['route'=>['institucion.update',$inst],'method'=>'PUT'])!!}
	@include('institucion.forms.int')
	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['institucion.destroy',$inst],'method'=>'DELETE'])!!}
	{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
	@endsection