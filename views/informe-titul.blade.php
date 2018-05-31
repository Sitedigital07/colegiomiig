




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
                                 
                                </div>
</div>
</div>


<div class="container">
   <!-- Orders and Products -->
      <div class="container-fluid">

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
                      Informanción de títulos basada en unidades<br>
                      @foreach($totaltitulos as $totaltitulos)
                      Total Unidades: {{$totaltitulos->suma}}
                      @endforeach

                    </h2>
                </div>
                <!-- END Latest Orders Title -->

                <!-- Latest Orders Content -->
                <table class="table table-borderless table-striped table-vcenter table-bordered">
             
                    <tbody>
                     @foreach($titulos as $titulos)
                    <tr>
                     <td>{{$titulos->nombre}}</td>       
                     <td>{{$titulos->suma}}</td>
                    </tr>
                     @endforeach
                    </tbody>
                </table>
                <!-- END Latest Orders Content -->
            </div>
           
            <!-- END Latest Orders Block -->
        </div>
      
</div>








   
  


    
      

            



    </body>
</html>

