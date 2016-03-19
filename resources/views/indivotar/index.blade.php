@extends('layouts.principal')

	@section('content')
			 {!!Form::open(['route'=>'indivotar.store', 'method'=>'POST', 'files'=>true])!!}
			</div>
			
				<h3 class="head">Elección</h3>
					<div class="col-md-9 reviews-grids">
						
						@foreach($indieleccions as $indieleccion)
						
						<div class="review">
							<div class="movie-pic">
								<img src="ImagesVotes/{{$indieleccion->path}}" alt="" /></a>
							</div>
							<div class="review-info">
								<a class="span" href="single.html">
								 
								<p class="info">Tema:&nbsp; &nbsp;{{$indieleccion-> tema}}</p>
								<p class="info">Pregunta: &nbsp;&nbsp;{{$indieleccion-> pregunta}}</p>
								<p class="info">Respuesta: &nbsp;&nbsp;@if(($indieleccion-> TipoRespuesta)==0)
                                 <form> 

                                 <input type="radio" name="respuesta" value="1"> <span style="color:black">SI</span> 
                                 <input type="radio" name="respuesta" value="0"> <span style="color:black">NO</span>
                                  </form>
								
				                 @endif
								</p>
								
										{!!Form::submit('Votar',['class'=>'btn btn-primary'])!!}
				       
				         
							<div class="clearfix"></div>
						</div>
                          {!!$indieleccions->render()!!}
						@endforeach
						

					
				


				@endsection