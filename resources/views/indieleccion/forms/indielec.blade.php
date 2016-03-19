

<div class="form-group">
{!!Form::label('Tema:')!!}
{!!Form::text('tema',null,['class'=>'form-control','placeholder'=>'Ingrese el tema a votar'])!!}
</div>

<div class="form-group">
{!!Form::label('Pregunta:')!!}
{!!Form::text('pregunta',null,['class'=>'form-control','placeholder'=>'Ingrese la pregunta'])!!}
</div>

<div class="form-group">
	{!!Form::label('TipoRespuesta','Tipo De respuesta:')!!}
	{!!Form::select('TipoRespuesta', ['placeholder'=> 'Selecciona','Si o no','Imagen','Selección multiple'])!!}
     
</div>
