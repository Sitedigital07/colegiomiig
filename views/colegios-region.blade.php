@extends ('adminsite.asistente')

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
                                    <a href="/colegios-region"><i class="fa fa-building"></i> Colegios</a>
                                </li>
                                 <li class="active">
                                    <a href="/filtro-representante"><i class="fa fa-laptop"></i> Informe Colegios</a>
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


@foreach($ano as $ano)
@endforeach

  <div class="container">
          <!-- Datatables Content -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Colegios</strong> registrados</h2>
                            </div>
                           

                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th class="text-center">DANE</th>
                                            <th class="text-center">Colegio</th>
                                            <th>Ciudad</th>
                                            <th>Representante</th>
                                       
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      {{DB::table('proyeccion')->where('colegio_id','=',5)->count()}}

                             
                                      @foreach($colegios as $colegio)
                                        <tr>
                                       
                                           <td> {{$colegio->id}}</td>
                                           <td class="text-center">{{$colegio->codigo}}</td>
                                           <td class="text-center">{{$colegio->nombres}}</td>
                                           <td>{{$colegio->n_ciudad}}</td>
                                       
                                            <td>{{$colegio->name}} {{$colegio->last_name}}</td>
                                               

                                            <td class="text-center">
                                              <a href="/proyeccionventas/{{$colegio->id}}"  data-toggle="tooltip" data-placement="left" title="Generar Meta" class="btn btn-success"><i class="fa fa-book"></i></a>
                                              <a href="/proyeccionventasadopcion/{{$colegio->id}}" data-toggle="tooltip" data-placement="left" title="Generar Adopciòn" class="btn btn-warning"><i class="fa fa-book"></i></a>
                         
                                              
                                
                                              <a href="/editar-colegiorp/{{$colegio->id}}" data-toggle="tooltip" data-placement="top" title="Actualizar Datos"  class="btn btn-success"><i class="fa fa-clipboard"></i></a>
                                              <a href="/poblacion-registrada/{{$colegio->id}}" data-toggle="tooltip" data-placement="right" title="Crear Mercado" type="button" class="btn btn-info"><i class="fa fa-table"></i>
                                              </a>
                                              @if (DB::table('cierre')->where('colegio_id', '=', $colegio->id)->where('ano', '=', $ano->ano)->where('cierre','=',1)->exists())
                                              <a href="/colegio-descuento/{{$colegio->id}}" data-toggle="tooltip" data-placement="right" title="Descuento Colegio" type="button" class="btn btn-info"><i class="fa fa-dollar"></i>
                                              </a>
                                              @else
                                              @endif
                                            
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


