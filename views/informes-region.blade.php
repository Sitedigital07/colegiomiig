


<!DOCTYPE html>
<html>
    <head>
        <title>Vista Previa de una web en tiempo real con jQuery</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="/informe/js/jquery-2.2.0.min.js"></script>
        <script src="/informe/js/jquery-live-preview.js"></script>
       <link rel="stylesheet" href="/adminsite/css/bootstrap.min.css">
        <link href="/informe/css/livepreview.css" rel="stylesheet" type="text/css">

        <!-- Bootstrap -->
        
        <script src="/informe/js/bootstrap.min.js"></script>
        
        
        <script type="text/javascript">
            $(document).ready(function() {
                $(".vistaprevia").livePreview({
                    trigger: 'hover', // Modo de accionar la vista previa. Puede ser 'click'
                    viewWidth: 480,   // Ancho del Tooltip vista previa
                    viewHeight: 325,  // Ato del Tooltip vista previa                    
                    position: 'right' // Lado a donde se va mostrar la vista previa.
                });
            });
        </script>

        <!-- Mostrar la vista previa al hacer 'click' -->
        <script type="text/javascript">
            $(document).ready(function() {
                $(".vistaprevia_b").livePreview({
                    trigger: 'click',
                    viewWidth: 480,
                    viewHeight: 325,                 
                    position: 'right'
                });
            });
        </script>
        
    </head>
    <body>


    	 <div class="col-lg-6 col-lg-offset-3">
    	 	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    	 		<img src="" class="img-responsive" alt="Image">
    	 	</div>


    	
    	 	
    	 	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 datos">
    	 	 <h1>Informe de gestión</h1>
    	 	 <p><strong>Fecha generación:</strong> {{date('Y-m-d H:i:s')}}<p>
			   <p><strong>Generado por:</strong> {{Auth::user()->name}} {{Auth::user()->last_name}}</p>
    	 	</div>

    	 </div>


    	    <div class="row">
			 <div class="col-lg-6 col-lg-offset-3">
			 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			 	@foreach($totalcolegios as $totalcolegios)
			 	<h2 class="text-center">{{$totalcolegios->conteo}}</h2>
			 	@endforeach
			 	<h3 class="text-center">Total Colegios</h3>
			 </div>
			 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			 	@foreach($totallibros as $totallibros)
			 	<h2 class="text-center">{{$totallibros->conteo}}</h2>
			 	@endforeach
			 	<h3 class="text-center">Total Libros</h3>
			 </div>
			 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			 	@foreach($totalrepresentantes as $totalrepresentantes)
			 	<h2 class="text-center">{{$totalrepresentantes->conteo}}</h2>
			 	@endforeach
			 	<h3 class="text-center">Total Representantes</h3>
			 </div>
			 </div>
			</div>



    		<div class="row">
    		@foreach($colegios as $colegios)
			 <div class="col-lg-6 col-lg-offset-3">
			  <table class="table table-bordered">
    		   <thead>
      			<tr style="background:green; color:#fff">
        		 <th class="text-uppercase"><strong>
        		 	Colegio: {{$colegios->nombres}}<br>
        		 	Representante: {{$colegios->nombre}}<br>
        		 	Cantidad: 
        		 	 @foreach($totales as $totalesa)
					  @if($colegios->id == $totalesa->totalid)
				      {{$totalesa->suma}}
					  @endif
                     @endforeach <br>
                     Total pesos:
                     @foreach($totalpesos as $totalpesosa)
                      @if($colegios->id == $totalpesosa->totalid)
                      {{$totalpesosa->suma}}
                      @endif
					 @endforeach
        		 </strong></th>
        		</tr>
    		   </thead>
  			  </table>
			 </div>
			</div>





            <div class="row">
			 <div class="col-lg-6 col-lg-offset-3">
			  <table class="table table-bordered">
    		   <thead>
                
  			   </thead>
   			   
   			   <tbody>
   			   	@foreach($titulos as $titulosa)
   			   	@if($colegios->id == $titulosa->colegio_id)
 				<tr>			
  				 <td>{{$titulosa->nombre}}</td>
  				 <td>{{$titulosa->cantidad}}</td>
  				</tr>
  				@endif
  				@endforeach

  				@endforeach
			   </tbody>
 			  </table>
			 </div>
			</div>

            



    </body>
</html>

