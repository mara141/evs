@extends('layouts.principal')

	@section('content')
			 {!!Form::open(['route'=>'votar.store', 'method'=>'POST', 'files'=>true])!!}



			</div>
			
				<h3 class="head">Elección</h3>
					<div class="col-md-9 reviews-grids">

						

						@foreach($eleccions as $eleccion)
						
						<div class="show">
							<div class="movie-pic">
								<img src="logo/{{$eleccion->path}}" alt="" style="width:100px"/>
								 <h1><img src="logo/{{$eleccion->path}}" width="249" height="107"></h1>
							</div>
							<div class="review-info">
								<a class="span" href="single.html">
								
									<i>{{$eleccion->alias}}</i></a>
								<p class="info">Tema:&nbsp; &nbsp;{{$eleccion-> tema}}</p>
								<p class="info">Pregunta: &nbsp;&nbsp;{{$eleccion-> pregunta}}</p>
								<p class="info">Respuesta: &nbsp;&nbsp;@if(($eleccion-> TipoRespuesta)==0)
                                 <form> 

                                 <input type="radio" name="respuesta" value="1"> <span style="color:black">SI</span> 
                                 <input type="radio" name="respuesta" value="0"> <span style="color:black">NO</span>
                                  </form>
								
				                 @else
									@foreach($eleccions as $eleccion)
										a
									@endforeach
				                 @endif
								</p>
								
										{!!Form::submit('Votar',['class'=>'btn btn-primary'])!!}
				       
				         
							<div class="clearfix"></div>
						</div>
                          <?php break; ?>
						@endforeach
						

					
				


				@endsection