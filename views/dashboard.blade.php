@extends ('adminsite.presentacion')

<!-- Define el titulo de la Página -->    
@section('title')
Gestión de usuarios Libros & Libros
@stop


@section('cabecera')
 @parent

 <link rel="stylesheet" href="rgraph/demos.css" type="text/css" media="screen" />
    
    <script type="text/javascript" src="rgraph/libraries/RGraph.common.core.js" ></script>
    <script type="text/javascript" src="rgraph/libraries/RGraph.common.effects.js" ></script>
    <script type="text/javascript" src="rgraph/libraries/RGraph.bar.js" ></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
@stop

@section('contenido')

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
                                            Informe <strong>Resultados Libros y Libros</strong>
                                        </h3>
                                    </div>
                                    <div class="widget-extra-full">
                                        <div class="row text-center">
                                            <div class="col-xs-6 col-lg-4">
                                                <h3>
                                                    <strong>{{$colegios}}</strong> <small></small><br>
                                                    <small><i class="fa fa-folder-open-o"></i> Cantidad Colegios</small>
                                                </h3>
                                            </div>
                                            <div class="col-xs-6 col-lg-4">
                                                <h3>
                                                    <strong>{{$adopcioncompleta}}</strong> <small></small><br>
                                                    <small><i class="fa fa-hdd-o"></i> Colegios Adopción Completa</small>
                                                </h3>
                                            </div>
                                            <div class="col-xs-6 col-lg-4">
                                                <h3>
                                                    <strong>{{$adopcionlimitada}}</strong> <small></small><br>
                                                    <small><i class="fa fa-building-o"></i> Colegios Adopción Limitada</small>
                                                </h3>
                                            </div>
                                            <div class="col-xs-6 col-lg-4">
                                                <h3>
                                                    <strong>{{$total}}</strong> <small></small><br>
                                                    <small><i class="fa fa-building-o"></i> Total Libros Vendidos</small>
                                                </h3>
                                            </div>
                                            <div class="col-xs-6 col-lg-4">
                                                <h3>
                                                    <strong>{{$totalyl}}</strong> <small></small><br>
                                                    <small><i class="fa fa-building-o"></i> Total Libros Vendidos LYL</small>
                                                </h3>
                                            </div>
                                            <div class="col-xs-6 col-lg-4">
                                                <h3>
                                                    <strong>{{number_format($totalyl*100/$total,2)}}%</strong> <small></small><br>
                                                    <small>Participación en el Mercado</small>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
</div>
</div>


<div class="container">
@foreach ($despachos as $despacho) 
  <div class="col-sm-12 col-lg-4">
                                <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background">
                                        <h4 class="widget-content-light"><strong>Colegios</strong> {{$despacho->region}}</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 animation-expandOpen">{{$despacho->cantidad}}</span></div>
                                </a>
                            </div>
      @endforeach


</div>

<div class="container">
      <div class="col-lg-12">
                                <!-- Top Products Block -->
                                <div class="block">
                                    <!-- Top Products Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="page_ecom_products.html" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <h2><strong>Resultado</strong> ventas por región</h2>
                                    </div>
                                    <!-- END Top Products Title -->

                                    <!-- Top Products Content -->
                                    <table class="table table-borderless table-striped table-vcenter table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="text-center"><a href="page_ecom_product_edit.html"><strong>Ciudad</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">Datos auditoria</a></td>
                                                <td><a href="page_ecom_product_edit.html">Datos venta</a></td>
                                                <td><a href="page_ecom_product_edit.html">Porcentaje</a></td>
                                            </tr>
                                            @foreach($costoregion as $costoregions)
                                            @foreach($costoregionventa as $costoregionventas)
                                            <tr>
                                                <td class="text-center"><a href="page_ecom_product_edit.html"><strong>{{$costoregions->region}}</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">{{number_format($costoregions->cantidad, 0, ",", ".")}}</a></td>
                                                <td><a href="page_ecom_product_edit.html">{{number_format($costoregionventas->cantidad, 0, ",", ".")}}</a></td>
                                                <td><a href="page_ecom_product_edit.html">{{number_format($costoregions->cantidad*100/$costoregionventas->cantidad,2)}}%</a></td>
                                            </tr>
                                  
                                            @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- END Top Products Content -->
                                </div>
                                <!-- END Top Products Block -->
            
</div>
</div>

<div class="container">




 <div class="col-lg-6">
                                <!-- Top Products Block -->
                                <div class="block">
                                    <!-- Top Products Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="page_ecom_products.html" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <h2><strong>Cantidad títulos</strong> por representante</h2>
                                    </div>
                                    <!-- END Top Products Title -->

                                    <!-- Top Products Content -->
                                    <table class="table table-borderless table-striped table-vcenter table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="text-center"><a href="page_ecom_product_edit.html"><strong>Represdentante</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">Cantidad</a></td>
                                            </tr>
                                             @foreach ($representantes as $representantes)
                                            <tr>
                                                <td class="text-center"><a href="page_ecom_product_edit.html"><strong>{{$representantes->nombre}} {{$representantes->apellido}}</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">{{$representantes->cantidad}}</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- END Top Products Content -->
                                </div>
                                <!-- END Top Products Block -->
                    </div>


 <div class="col-lg-6">
                                <!-- Top Products Block -->
                                <div class="block">
                                    <!-- Top Products Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="page_ecom_products.html" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <h2><strong>Cantidad títulos</strong> por colegio</h2>
                                    </div>
                                    <!-- END Top Products Title -->

                                    <!-- Top Products Content -->
                                    <table class="table table-borderless table-striped table-vcenter table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="text-center"><a href="page_ecom_product_edit.html"><strong>Colegio</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">Cantidad</a></td>
                                            </tr>
                                             @foreach ($colegionames as $colegionames)
                                            <tr>
                                                <td class="text-center"><a href="page_ecom_product_edit.html"><strong>{{$colegionames->nombre}}</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">{{$colegionames->cantidad}}</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- END Top Products Content -->
                                </div>
                                <!-- END Top Products Block -->
                    </div>









</div>




<div class="container">
 
 <div class="col-lg-6">
                                <!-- Top Products Block -->
                                <div class="block">
                                    <!-- Top Products Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="page_ecom_products.html" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <h2><strong>Cantidad títulos</strong> por editorial</h2>
                                    </div>
                                    <!-- END Top Products Title -->

                                    <!-- Top Products Content -->
                                    <table class="table table-borderless table-striped table-vcenter table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="text-center"><a href="page_ecom_product_edit.html"><strong>Editorial</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">Cantidad</a></td>
                                            </tr>
                                            @foreach($totaleditoriales as $totaleditoriales)
                                            <tr>
                                                <td class="text-center"><a href="page_ecom_product_edit.html"><strong>{{$totaleditoriales->editorial}}</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">{{$totaleditoriales->cantidad}}</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- END Top Products Content -->
                                </div>
                                <!-- END Top Products Block -->
                    </div>








  <div class="col-lg-6">
                                <!-- Top Products Block -->
                                <div class="block">
                                    <!-- Top Products Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="page_ecom_products.html" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <h2><strong>Cantidad títulos</strong> por ciudad</h2>
                                    </div>
                                    <!-- END Top Products Title -->

                                    <!-- Top Products Content -->
                                    <table class="table table-borderless table-striped table-vcenter table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="text-center"><a href="page_ecom_product_edit.html"><strong>Ciudad</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">Cantidad</a></td>
                                            </tr>
                                            @foreach($aperturas as $aperturas)
                                            <tr>
                                                <td class="text-center"><a href="page_ecom_product_edit.html"><strong>{{$aperturas->ciudad}}</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">{{$aperturas->cantidad}}</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- END Top Products Content -->
                                </div>
                                <!-- END Top Products Block -->
            
</div>





  <div class="col-lg-6">
                                <!-- Top Products Block -->
                                <div class="block">
                                    <!-- Top Products Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="page_ecom_products.html" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <h2><strong>Cantidad títulos</strong> por año</h2>
                                    </div>
                                    <!-- END Top Products Title -->

                                    <!-- Top Products Content -->
                                    <table class="table table-borderless table-striped table-vcenter table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="text-center"><a href="page_ecom_product_edit.html"><strong>Año</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">Cantidad</a></td>
                                            </tr>
                                            @foreach($librosano as $librosano)
                                            <tr>
                                                <td class="text-center"><a href="page_ecom_product_edit.html"><strong>{{$librosano->ano}}</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">{{$librosano->cantidad}}</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- END Top Products Content -->
                                </div>
                                <!-- END Top Products Block -->
            
</div>

</div>










<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
       


@stop