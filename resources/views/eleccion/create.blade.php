@extends('layouts.admin')
@include('alerts.request')
@section('content')
{!!Form::open(['route'=>'eleccion.store', 'method'=>'POST', 'files'=>true])!!}
@include('eleccion.forms.elec')

{!! Form::close()!!}
@stop
