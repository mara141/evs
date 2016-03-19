@extends('layouts.admin')

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
	@section('content')
	{!!Form::open(['route'=>'mail.store', 'method'=>'POST'])!!}

	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Cédula</th>
			<th>Email</th>
			<th>path</th>
		
		</thead>
		@foreach($votantes as $votants)
			<tbody>
				<td>{{$votants->name}}</td>
				<td>{{$votants->cedula}}</td>
				<td>{{$votants->email}}</td>
				<td>{{$votants->path}}</td>
					
              
			</tbody>
		@endforeach
	</table>
	{!!Form::submit('Send',['class'=>'btn btn-primary'])!!}
	@endsection
		