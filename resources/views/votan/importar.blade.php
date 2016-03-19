
@extends('layouts.admin')
@section('content')
{!!Form::open(['route'=>'votan.store', 'method'=>'POST', 'files'=>true])!!}

<div class="form-group">
	{!!Form::label('Logo','Logo:')!!}
	{!!Form::file('path')!!}
</div>

{!!Form::submit('Send',['class'=>'btn btn-primary'])!!}
	@endsection