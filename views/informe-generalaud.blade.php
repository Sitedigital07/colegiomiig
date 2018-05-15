


<!DOCTYPE html>
<html>
    <head>
        <title>Vista Previa de una web en tiempo real con jQuery</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="/informe/js/jquery-2.2.0.min.js"></script>
        <script src="/informe/js/jquery-live-preview.js"></script>
 
        <link href="/informe/css/livepreview.css" rel="stylesheet" type="text/css">



        <link rel="stylesheet" href="/adminsite/css/bootstrap.min.css">



        <link rel="stylesheet" href="/adminsite/css/main.css">
        <link rel="stylesheet" href="/adminsite/css/themes/spring.css">
          <link rel="stylesheet" href="/adminsite/css/plugins.css">


        
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
    <body style="background:none">

<br><br>
      <div class="container">
    

 <div class="col-md-12">
                                <!-- Your Plan Widget -->
                                <div class="widget">
                                    <div class="widget-extra themed-background-dark">
                                        <div class="widget-options">
                                            <div class="btn-group btn-group-xs">
                                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Edit Widget"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Quick Settings"><i class="fa fa-cog"></i></a>
                                            </div>
                                        </div>
                                        <h3 class="widget-content-light">
                                           <strong> Informe </strong> para la gestión de <strong>Auditoria</strong>
                                            
                                        </h3>
                                    </div>
                                    <div class="widget-extra-full">
                                        <div class="row text-center">
                                            <div class="col-xs-6 col-lg-3">
                                                <h3>
                                                    <strong></strong> <small></small><br>
                                                    <small><i class="fa fa-folder-open-o"></i> Cantidad Colegios</small>
                                                </h3>
                                            </div>
                                            <div class="col-xs-6 col-lg-3">
                                                <h3>
                                                    <strong></strong> <small></small><br>
                                                    <small><i class="fa fa-hdd-o"></i> Colegios Adopción Completa</small>
                                                </h3>
                                            </div>
                                            <div class="col-xs-6 col-lg-3">
                                                <h3>
                                                    <strong></strong> <small></small><br>
                                                    <small><i class="fa fa-building-o"></i> Colegios Adopción Limitada</small>
                                                </h3>
                                            </div>
                                            <div class="col-xs-6 col-lg-3">
                                                <h3>
                                                    <strong></strong> <small></small><br>
                                                    <small><i class="fa fa-building-o"></i> Total Libros Vendidos</small>
                                                </h3>
                                            </div>
                                            <div class="col-xs-6 col-lg-3">
                                                <h3>
                                                    <strong></strong> <small></small><br>
                                                    <small><i class="fa fa-building-o"></i> Total Libros Vendidos</small>
                                                </h3>
                                            </div>
                                            <div class="col-xs-6 col-lg-3">
                                                <h3>
                                                    <strong>%</strong> <small></small><br>Participación libros</small>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
</div>
</div>



<div class="container">
   <!-- Orders and Products -->
      <div class="container-fluid">
          @foreach($colegios as $colegios)
        <div class="col-lg-12">
            <!-- Latest Orders Block -->
            <div class="block">
                <!-- Latest Orders Title -->
                <div class="block-title text-light" style="background:#27ae60">
                    <div class="block-options pull-right">
                        <a href="page_ecom_orders.php" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2>
                      Colegio: {{$colegios->nombres}}<br>
                      Representante: {{$colegios->nombre}} {{$colegios->apellido}}<br>
                      Cantidad: 
                      @foreach($totales as $totalesa)
                      @if($colegios->id == $totalesa->totalid)
                      {{$totalesa->suma}}
                      @endif
                      @endforeach <br>
                      Total pesos:
                      @foreach($totalpesos as $totalpesosa)
                      @if($colegios->id == $totalpesosa->totalid)
                      ${{number_format($totalpesosa->suma, 0, ",", ".")}} 
                      @endif
                      @endforeach
                    </h2>
                </div>
                <!-- END Latest Orders Title -->

                <!-- Latest Orders Content -->
                <table class="table table-borderless table-striped table-vcenter table-bordered">
                    <tbody>
                      @foreach($titulos as $titulosa)
                      @if($colegios->id == $titulosa->colegio_id)
                        <tr>
                            <td class="" style="width: 80%;"><strong>{{$titulosa->nombre}}</strong></td>
                            <td class="hidden-xs"><a href="javascript:void(0)">{{$titulosa->cantidad}}</a></td>
                        </tr>
                      @endif
                      @endforeach
                    </tbody>
                </table>
                <!-- END Latest Orders Content -->
            </div>
           
            <!-- END Latest Orders Block -->
        </div>
        @endforeach
</div>








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
        @foreach($totalibrosedito as $totalibrosedito)
        <h2 class="text-center">{{$totalibrosedito->conteo}}</h2>
        @endforeach
        <h3 class="text-center">Total Libros</h3>
       </div>
			 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			 	@foreach($totalrepresentantes as $totalrepresentantes)
			 	<h2 class="text-center">{{$totalrepresentantes->conteo}}</h2>
			 	@endforeach
			 	<h3 class="text-center">Total Representantes</h3>
			 </div>

       <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
  
        <h2 class="text-center"> @foreach($porcentajeventastotal as $porcentajeventastotal)
        @foreach($porcentajeventas as $porcentajeventas)
         {{number_format($porcentajeventas->conteo*100/$porcentajeventastotal->conteo, 2)}} %
        @endforeach
       @endforeach</h2>
    
        <h3 class="text-center">Total Representantes</h3>
       </div>
			 </div>
			</div>



    		<div class="row">
    	
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
   			

  
			   </tbody>
 			  </table>
			 </div>
			</div>

            



    </body>
</html>

