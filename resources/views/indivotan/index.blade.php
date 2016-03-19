@extends('layouts.indadmin')

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
	@section('content')
	{!!Form::open(['route'=>'indimail.store', 'method'=>'POST'])!!}

	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Email</th>
		
		</thead>
		@foreach($indivotans as $indivotan)
			<tbody>
				<td>{{$indivotan->name}}</td>
				<td>{{$indivotan->email}}</td>
					
              
			</tbody>
		@endforeach
	</table>
	{!!Form::submit('Send',['class'=>'btn btn-primary'])!!}
	@endsection
		