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
                                    <a href="/lista-colegios"><i class="fa fa-building"></i> Colegios</a>
                                </li>
                                <li>
                                    <a href="/crear-colegio"><i class="fa fa-plus-circle"></i> Crear colegio</a>
                                </li>
                                <li>
                                    <a href="/excel-colegios"><i class="fa fa-download"></i> Importar Exportar</a>
                                </li>
                                
                                   <li>
                                    <a href="/informe/gerentes-matrizadm"><i class="fa fa-user-plus"></i> Matriz</a>
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
                                            <th>Representante</th>
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
                                            
                                             
                                             <td>{{$colegio->name}} {{$colegio->last_name}}</td>

                                            <td class="text-center">
                                               <a href="editar-colegio/{{$colegio->id}}" class="btn btn-primary"><i class="fa fa-eraser"></i></a>
                                               <script language="JavaScript">
                                                function confirmar ( mensaje ) {
                                                return confirm( mensaje );}
                                               </script>
                                              <a href="/formatear-colegio/{{$colegio->id}}" onclick="return confirmar('¿Está seguro que desea eliminar los registros para este colegio?')" data-toggle="tooltip" data-placement="right" title="Formatear Colegio" type="button" class="btn btn-danger"><i class="gi gi-cleaning"></i></a>
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