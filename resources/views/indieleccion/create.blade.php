@extends('layouts.indadmin')
@include('alerts.request')
@section('content')
{!!Form::open(['route'=>'indieleccion.store', 'method'=>'POST', 'files'=>true])!!}
@include('indieleccion.forms.indielec')
@include('indieleccion.forms.fecha')
{!!Form::submit('Crear',['class'=>'btn btn-primary'])!!}

@stop