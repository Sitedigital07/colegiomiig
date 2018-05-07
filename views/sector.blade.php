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
                                    <a href="/sectores"><i class="fa fa-home"></i> Regionales</a>
                                </li>
                                <li>
                                    <a href="/crear-sector"><i class="gi gi-charts"></i> Crear Regional</a>
                                </li>
                            </ul>
                        </div>


 <div class="container">
   <?php $status=Session::get('status');?>

    @if($status=='ok_create')
     <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Sector</strong> registrado con éxito.
     </div>
    @endif

    @if($status=='ok_delete')
     <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Sector</strong> actualizado con éxito.
     </div>
    @endif

    @if($status=='ok_update')
     <div class="alert alert-warning">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       <strong>Sector</strong> actualizado con éxito.
     </div>
    @endif
  </div>


	<div class="container">
          <!-- Datatables Content -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Regiones</strong> registradas</h2>
                            </div>
                            <p><a href="https://datatables.net/" target="_blank">DataTables</a> is a plug-in for the Jquery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, which will add advanced interaction controls to any HTML table. It is integrated with template's design and it offers many features such as on-the-fly filtering and variable length pagination.</p>

                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-center">Represesentante</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($sectors as $sectors)
                                        <tr>
                                            <td class="text-center">{{$sectors->region}}</td>
                                            <td class="text-center">{{$sectors->name}} {{$sectors->last_name}}</td>
                                            <td class="text-center">
                                               <a href="/lista-ciudades/{{$sectors->id}}" class="btn btn-primary">Ver agencias</a>
					                           <a href="/editar-sector/{{$sectors->id}}"  class="btn btn-warning">Editar Sector</button>
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