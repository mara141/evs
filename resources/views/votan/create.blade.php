@extends('layouts.admin')
@include('alerts.request')
@section('content')
{!!Form::open(['route'=>'votan.store', 'method'=>'POST', 'files'=>true])!!}
@include('votan.forms.votant')


{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}

@stop