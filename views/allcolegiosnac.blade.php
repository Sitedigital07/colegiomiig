@extends ('adminsite.presentacion')

<!-- Define el titulo de la Página -->    
@section('title')
Gestión de usuarios Libros & Libros
@stop


@section('cabecera')
 @parent
@stop

@section('contenido')


<div class="content-header">
                            <ul class="nav-horizontal text-center">
                                <li class="active">
                                    <a href="/colegios-lista"><i class="fa fa-building"></i> Colegios</a>
                                </li>
                            
                            </ul>
                        </div>

  
 <div class="container">
   <?php $status=Session::get('status');?>

    @if($status=='ok_create')
     <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Colegio</strong> registrada con éxito.
     </div>
    @endif

    @if($status=='ok_delete')
     <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Colegio</strong> actualizado con éxito.
     </div>
    @endif

    @if($status=='ok_update')
     <div class="alert alert-warning">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       <strong>Colegio</strong> actualizado con éxito.
     </div>
    @endif
  </div>





	<div class="container">
          <!-- Datatables Content -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Colegios</strong> registrados</h2>
                            </div>
                            <p><a href="https://datatables.net/" target="_blank">DataTables</a> is a plug-in for the Jquery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, which will add advanced interaction controls to any HTML table. It is integrated with template's design and it offers many features such as on-the-fly filtering and variable length pagination.</p>

                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th class="text-center">DANE</th>
                                            <th class="text-center">Colegio</th>
                                            <th>Ciudad</th>
                                            <th>Auditor</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($colegios as $colegio)
                                        <tr>
                                            <td class="text-center">{{$colegio->id}}</td>
                                            <td class="text-center">{{$colegio->codigo}}</td>
                                            <td class="text-center">{{$colegio->nombres}}</td>
                                            <td>{{$colegio->n_ciudad}}</td>
                                            
                                             
                                             <td>{{$colegio->name}}</td>

                                            <td class="text-center">
                                              <a href="/proyeccionventasadopcionnac/{{$colegio->id}}" data-toggle="tooltip" data-placement="left" title="Generar Adopciòn" class="btn btn-warning"><i class="fa fa-book"></i></a>
                                              <a href="/proyeccionventasnac/{{$colegio->id}}"  data-toggle="tooltip" data-placement="left" title="Generar Meta" class="btn btn-success"><i class="fa fa-book"></i></a>
                                               <a href="/colegio-descuentoaud/{{$colegio->id}}" data-toggle="tooltip" data-placement="right" title="Descuento Colegio" type="button" class="btn btn-info"><i class="fa fa-dollar"></i>
                                              </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
  </div>


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
       


@stop