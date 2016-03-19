<!-- images/image-upload/css/fileinput.css -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="/images/image-upload/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="/images/image-upload//js/fileinput.js" type="text/javascript"></script>
<script src="/images/image-upload//js/fileinput_locale_fr.js" type="text/javascript"></script>
<script src="/images/image-upload//js/fileinput_locale_es.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
<SCRIPT LANGUAGE="JavaScript">
// alias_id
$(function(){
	$('#image-container').hide();

	$(".kv-file-remove").click(function(){
		// console.log();
	});
	// $('#election_id').hide();	
	// var alias_id = $('#alias_id').val();	

	// $("#alias_id").change(function(){
	// 	alias_id = $('#alias_id').val();
	// });

	var selector = $("#select-change");
	selector.change(function(){
		if (selector.val() == "image") {
			$('#image-container').fadeIn();
		} else {
			$('#image-container').fadeOut();
		}
	});
});
</SCRIPT>

<div class="form-group">
	{!!Form::label('alias','Institución:')!!}
	{!!Form::select('alias_id',$insts,true,['id'=>'alias_id'])!!}
</div>

<div class="form-group">
{!!Form::label('Tema:')!!}
{!!Form::text('tema',null,['class'=>'form-control','placeholder'=>'Ingrese el tema a votar', 'required'=>'required'])!!}
</div>

<div class="form-group">
{!!Form::label('Pregunta:')!!}
{!!Form::text('pregunta',null,['class'=>'form-control','placeholder'=>'Ingrese la pregunta', 'required'=>'required'])!!}
</div>



<div class="form-group">
	{!!Form::label('dateinicio','Publicar en:')!!}
    {!!Form::input('datetime', 'dateinicio', date('Y-m-d h:i:s'), ['class' => 'Form-Control', 'required'=>'required']) !!}
    
</div>

<div class="form-group">
	{!!Form::label('datefinal','Expirar en:')!!}
    {!!Form::input('datetime', 'datefinal', date('Y-m-d h:i:s'), ['class' => 'Form-Control', 'required'=>'required']) !!}
   </div>
<form>
<div class="form-group">
{!!Form::label('Tipo De respuesta:')!!}
<select name="TipoRespuesta" id="select-change" required>
<option selected>
	<option></option>
<option value="0" >Si o no
<option value="image"> Imagen
</select>
</div>

{!!Form::submit('Crear',['class'=>'btn btn-primary'])!!}
</form>
<div id="image-container" style=" width:600px;  margin-bottom:10px;">
    <form enctype="multipart/form-data">
        <input id="file-es" name="file-es[]" type="file" multiple>
        {!! Form::token() !!}
    </form>
</div>


<script>
 
    $('#file-es').fileinput({
        language: 'es',
        uploadUrl: '/image-uploads',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });

    $('#input-id').on('filedeleted', function(event, key) {
    	console.log('Key = ' + key);
	});



    $("#file-0").fileinput({
        'allowedFileExtensions' : ['jpg', 'png','gif'],
    });

    $("#file-1").fileinput({
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
	});
  
	$("#file-3").fileinput({
		showUpload: false,
		showCaption: false,
		browseClass: "btn btn-primary btn-lg",
		fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
	});
	$("#file-4").fileinput({
		uploadExtraData: {kvId: '10'}
	});
    $(".btn-warning").on('click', function() {
        if ($('#file-4').attr('disabled')) {
            $('#file-4').fileinput('enable');
        } else {
            $('#file-4').fileinput('disable');
        }
    });    
    $(".btn-info").on('click', function() {
        $('#file-4').fileinput('refresh', {previewClass:'bg-info'});
    });

    $(document).ready(function() {
        $("#test-upload").fileinput({
            'showPreview' : false,
            'allowedFileExtensions' : ['jpg', 'png','gif'],
            'elErrorContainer': '#errorBlock'
        });
    });
	</script>
