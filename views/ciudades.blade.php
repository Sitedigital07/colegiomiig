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
                            	  <li>
                                    <a href="/sectores"><i class="gi gi-charts"></i> Regionales</a>
                                </li>
                                <li>
                                    <a href="/crear-ciudad/{{Request::segment(2)}}"><i class="gi gi-charts"></i> Crear agencia</a>
                                </li>
                            </ul>
                        </div>


 <div class="container">
   <?php $status=Session::get('status');?>

    @if($status=='ok_create')
     <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Ciudad</strong> registrada con éxito.
     </div>
    @endif

    @if($status=='ok_delete')
     <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Ciudad</strong> eliminada con éxito.
     </div>
    @endif

    @if($status=='ok_update')
     <div class="alert alert-warning">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       <strong>Ciudad</strong> actualizada con éxito.
     </div>
    @endif
  </div>


	<div class="container">
          <!-- Datatables Content -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Ciudades</strong> registradas</h2>
                            </div>
                            <p><a href="https://datatables.net/" target="_blank">DataTables</a> is a plug-in for the Jquery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, which will add advanced interaction controls to any HTML table. It is integrated with template's design and it offers many features such as on-the-fly filtering and variable length pagination.</p>

                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Ciudad</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	 @foreach($ciudades as $ciudad)
                                        <tr>
                                            <td class="text-center">{{$ciudad->n_ciudad}}</td>
                                         
                                            <td class="text-center">
                                               <a href="/editar-ciudad/{{$ciudad->ids}}" class="btn btn-primary">Editar agencia</a>
                                        <script language="JavaScript">
                                     function confirmar ( mensaje ) {
                                     return confirm( mensaje );}
                                      </script>
                                     <a href="/eliminar-ciudad/{{$ciudad->ids}}"  class="btn btn-danger" onclick="return confirmar('¿Está seguro que desea eliminar el registro?')">Eliminar</button>
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







