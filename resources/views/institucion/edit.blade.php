@extends('layouts.admin')
	@section('content')
	<style>
	img {
    max-width: 100%;
    max-height: 100%;
}
	</style>
		{!!Form::model($inst,['route'=>['institucion.update',$inst],'method'=>'PUT','enctype'=>"multipart/form-data"])!!}
			@include('institucion.forms.int')
<div style="width: 200px;">
				{!! HTML::image('logo/'.$inst->path) !!}
			</div>
			<br>
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		<!-- Delete -->
		{!!Form::open(['route'=>['institucion.destroy',$inst],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}

	@endsection
