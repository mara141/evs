@extends('layouts.indadmin')


	@section('content')
	<table class="table">
		<thead>
			<th>Tema</th>
			<th>Pregunta</th>
			<th>Tipo de Respuesta</th>
		</thead>
		@foreach($indieleccions as $indieleccion)
			<tbody>
				
				<td>{{$indieleccion->tema}}</td>
				<td>{{$indieleccion->pregunta}}</td>
				<td>{{$indieleccion->TipoRespuesta}}</td>
					
                 
			</tbody>
		@endforeach
	</table>
	@endsection