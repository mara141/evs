


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datepicker</title>


<div class="form-group">
<label for="dp">Fecha de Inicio</label>
<input type="date" class="form-control" id="dateinicio",null />
  	</div>
   
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
     $( "#dp" ).datepicker({
		//changeMonth: true,
		//changeYear: true
	});
    </script>

    <div class="form-group">
<label for="dp">Fecha Final</label>
<input type="date" class="form-control" id="datefinal",null />
  	</div>
   
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
     $( "#dp" ).datepicker({
		//changeMonth: true,
		//changeYear: true
	});
    </script>
  </body>
</html>
<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='time'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>

                    </span>
                     <script type="text/javascript">
           $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
                
           
        </script>
    </div>
</div>