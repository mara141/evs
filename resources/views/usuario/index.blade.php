
@extends('layouts.UsuarioAdmin')
<?php $message=Session::get('message')?>

@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Usuario creado exitosamente
</div>
@endif
@section ('content')
<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>
<br> 
</br>
<a href= "http://localhost:8000/admin"><i class="fa fa-users fa-fw"></i> {!!Form::submit('Elección institucional',['class'=>'btn btn-primary'])!!}</a>
<a href= "http://localhost:8000/indadmin"><i class="fa fa-child fa-fw"></i> {!!Form::submit('Elección individual',['class'=>'btn btn-primary'])!!} </a>
@stop