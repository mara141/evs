<div class="form-group">
{!!Form::label('Institución:')!!}
{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre de la institución'])!!}
</div>
<div class="form-group">
{!!Form::label('Alias:')!!}
{!!Form::text('alias',null,['class'=>'form-control','placeholder'=>'Ingrese su Alias'])!!}
</div>

<div class="form-group">
{!!Form::label('Teléfono:')!!}
{!!Form::text('numero',null,['class'=>'form-control','placeholder'=>'Ingrese Número de teléfono'])!!}
</div>

<div class="form-group">
	{!!Form::label('Logo','Logo:')!!}
	{!!Form::file('path')!!}
</div>

