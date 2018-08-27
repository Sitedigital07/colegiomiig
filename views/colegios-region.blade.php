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
                                
                                <li>
                                    <a href="/asistente-representantes"><i class="fa fa-users"></i> Representantes</a>
                                </li>
                                <li class="active">
                                    <a href="/colegios-region"><i class="fa fa-building"></i> Colegios</a>
                                </li>
                                 <li>
                                    <a href="/asistente-ciudades"><i class="fa fa-map"></i> Agencias</a>
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
                            <p><a href="https://datatables.net/" target="_blank">DataTables</a> is a plug-in for the Jquery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, which will add advanced interaction controls to any HTML table. It is integrated with template's design and it offers many features such as on-the-fly filtering and variable length pagination.</p>

                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Estado</th>
                                            <th class="text-center">Código</th>
                                            <th class="text-center">Nombre</th>
                                            <th>Ciudad</th>
                                            <th>Email</th>
                                            <th>Auditor</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      {{DB::table('proyeccion')->where('colegio_id','=',5)->count()}}

                                                                                 <?php
date_default_timezone_set('America/Los_Angeles');
$date = date('Y-m-d');
echo $date;
?>
                             
                                      @foreach($colegios as $colegio)
                                        <tr>
                                        @if(DB::table('proyeccion')->where('colegio_id','=',$colegio->id)->where('ano','=',$ano->ano)->count() == 0)
                                          <td>
                                                <span class="label label-info">Sin registro</span>
                                          </td>
                                          @elseif(DB::table('proyeccion')->where('colegio_id','=',$colegio->id)->where('ano','=',$ano->ano)->max('date_com') > $date)
                                           <td>
                                                <span class="label label-warning">En proceso</span>
                                          </td>
                                           @elseif(DB::table('proyeccion')->where('colegio_id','=',$colegio->id)->where('ano','=',$ano->ano)->max('date_com') < $date)
                                           <td>
                                                <span class="label label-danger">Fecha excedida</span>
                                          </td>

                                        @endif 

                                            <td class="text-center">{{$colegio->codigo}}</td>
                                            <td class="text-center">{{$colegio->nombres}}</td>
                                            <td>{{$colegio->r_social}}</td>
                                            <td>{{$colegio->emailcol}}</td>
                                             
                                             <td>{{$colegio->domicilio}}</td>

                                            <td class="text-center">
                                              @if (DB::table('proventas')->where('colegio_id', '=', $colegio->id)->where('ano', '=', $ano->ano)->where('cierre', '=', 1)->exists())
                                              <a href="/proyeccionventasadopcion/{{$colegio->id}}"  class="btn btn-warning">Crear Adopcion</a>
                                              @else
                                              <a href="/proyeccionventas/{{$colegio->id}}"  class="btn btn-success">Generar Meta</a>
                                              @endif
                                              @if (DB::table('proyeccion')->where('colegio_id', '=', $colegio->id)->where('ano', '=', $ano->ano)->exists())
                                              <a href="/proyeccion/{{$colegio->id}}"  class="btn btn-info">Amplicar Cierre</a>
                                              @else
                                              <a href="/proyeccion/{{$colegio->id}}"  class="btn btn-primary">Crear Cierre</a>
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