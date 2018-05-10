
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
          @foreach($vendedores as $vendedores)
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
                      Representante: {{$vendedores->nombre}}<br>
                      @foreach($totalrpventa as $totalrpventav)
                      @if($vendedores->id == $totalrpventav->totalid)
                      Venta: $ {{number_format($totalrpventav->suma, 0, ",", ".")}}
                      @endif
                      @endforeach<br>

                      @foreach($totalrpauditor as $totalrpauditorv)
                      @if($vendedores->id == $totalrpauditorv->totalid)
                      Auditoria:$ {{number_format($totalrpauditorv->suma, 0, ",", ".")}}
                      @endif
                      @endforeach<br>

                      @foreach($totalrpauditor as $totalrpauditorv)
                      @if($totalrpauditorv->totalid == $totalrpventav->totalid)
                      @foreach($totalrpventa as $totalrpventav)
                      @if($vendedores->id == $totalrpauditorv->totalid)
                      @endif
              
                      @if($vendedores->id == $totalrpventav->totalid)
                      Efectividad:<strong> {{number_format($totalrpauditorv->suma*100 / $totalrpventav->suma,2)}}% </strong>
                      @endif
                      @endforeach
                      @endif
                      @endforeach

                    </h2>
                </div>
                <!-- END Latest Orders Title -->

                <!-- Latest Orders Content -->
                <table class="table table-borderless table-striped table-vcenter table-bordered">
                   <thead>
            <th width="4%">ID</th>
            <th width="40%">Colegio</th>
            <th width="20%">Código MIIG</th>
            <th width="20%">Auditoria</th>
            <th width="20%">Ventas</th>
            <th width="10%">Porcentaje</th>
           </thead>
                    <tbody>
                      @foreach($colegios as $colegiosa)
                      @if($vendedores->id == $colegiosa->representante_id)
                        <tr>
                           <td>{{$colegiosa->id}}</td>    
                           <td>{{$colegiosa->nombres}}</td>
                           <td>{{$colegiosa->codigo}}</td>

                           @foreach($totalauditoria as $totalauditoriav)
                           @if($colegiosa->id == $totalauditoriav->totalid)
                           <td>$ {{number_format($totalauditoriav->suma, 0, ",", ".")}}</td>
                           @endif
                           @endforeach
                           @foreach($totalventas as $totalventasv)
                           @if($colegiosa->id == $totalventasv->totalid)
                           <td>$ {{number_format($totalventasv->suma, 0, ",", ".")}}</td>
                           @endif
                           @endforeach
        
                           @foreach($totalauditoria as $totalauditoriav)
                           @foreach($totalventas as $totalventasv)
                           @if($colegiosa->id == $totalauditoriav->totalid)
                           @if($colegiosa->id == $totalventasv->totalid)
                            @if($totalauditoriav->suma*100/$totalventasv->suma <= 89)
                            <td style="color:red"><strong>{{number_format($totalauditoriav->suma*100/$totalventasv->suma,2)}} % </strong></td>
                            @elseif($totalauditoriav->suma*100/$totalventasv->suma <= 99)
                            <td style="color:orange"><strong>{{number_format($totalauditoriav->suma*100/$totalventasv->suma,2)}} % </strong></td>
                            @elseif($totalauditoriav->suma*100/$totalventasv->suma >= 100)
                            <td style="color:green"><strong>{{number_format($totalauditoriav->suma*100/$totalventasv->suma,2)}} % </strong></td>
                            @endif
                           @endif
                           @endif
                           @endforeach
                           @endforeach
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








   
  


    
      

            



    </body>
</html>

