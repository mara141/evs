@extends('layouts.admin')

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
	@section('content')
	<table class="table">
		<thead>
			<th>Institucion</th>
			<th>Alias</th>
			<th>Teléfono</th>
			<th>path</th>
			<th>Operación</th>
		</thead>
		@foreach($insts as $inst)
			<tbody>
				<td>{{$inst->name}}</td>
				<td>{{$inst->alias}}</td>
				<td>{{$inst->numero}}</td>
				<td>
				<img src="logo/{{$inst->path}}" alt="" style="width:100px"/>
					
                 </td>
					<td>  {!!link_to_route('institucion.edit', $title = 'Editar', $parameters = $inst, $attributes = ['class'=>'btn btn-primary'])!!} 
					</td>
                        
			</tbody>
		@endforeach
	</table>
	@endsection
		
