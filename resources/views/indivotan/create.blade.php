@extends('layouts.indadmin')
@include('alerts.request')
@section('content')
{!!Form::open(['route'=>'indivotan.store', 'method'=>'POST', 'files'=>true])!!}
@include('indivotan.forms.votant')
{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}

@stop