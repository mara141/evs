@extends('layouts.admin')


	@section('content')
	<table class="table">
		<thead>
			<th>Institucion</th>
			<th>Tema</th>
			<th>Pregunta</th>
			<th>Tipo de Respuesta</th>
			<th>Fecha de Inicio</th>
			<th>Fecha de Cierre</th>
			<th>Path</th>
		</thead>
		@foreach($eleccions as $eleccion)
			<tbody>
				<td>{{$eleccion->alias}}</td>
				<td>{{$eleccion->tema}}</td>
				<td>{{$eleccion->pregunta}}</td>
				<td>{{$eleccion->TipoRespuesta}}</td>
				<td>{{$eleccion->dateinicio}}</td>
				<td>{{$eleccion->datefinal}}</td>
				<td>
				<img src="logo/{{$eleccion->path}}" alt="" style="width:100px"/>
					
                 </td>
			</tbody>
		@endforeach
	</table>
	@endsection