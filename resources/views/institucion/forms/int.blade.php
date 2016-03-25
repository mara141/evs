<div class="form-group">
{!!Form::label('Institución:')!!}
{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre de la institución','required'=>'required'])!!}
</div>
<div class="form-group">
{!!Form::label('Alias:')!!}
{!!Form::text('alias',null,['class'=>'form-control','placeholder'=>'Ingrese su Alias','required'=>'required'])!!}
</div>

<div class="form-group">
{!!Form::label('Teléfono:')!!}
{!!Form::number('numero',null,['class'=>'form-control','placeholder'=>'Ingrese Número de teléfono','required'=>'required'])!!}
</div>

<div class="form-group">
	{!!Form::label('Logo','Logo:')!!}
	{{--{!!Form::file('path', (isset($isEditView) && $isEditView == 1) ? []: ['required'=>'required'])!!}--}}

	<input type="file" {{  (isset($isEditView) && $isEditView == 1) ? '' : 'required' }} name="path">
</div>
