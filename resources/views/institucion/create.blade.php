@extends('layouts.admin')
@include('alerts.request')
@section('content')
{!!Form::open(['route'=>'institucion.store', 'method'=>'POST', 'files'=>true])!!}
@include('institucion.forms.int')
{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}

@stop