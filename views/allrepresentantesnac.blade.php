@extends ('adminsite.representante')

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

                                     <li class="active">
                                    <a href="/representantes-lista"><i class="fa fa-building"></i> Representantes</a>
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
                            

                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th class="text-center">Nombres</th>
                                            <th class="text-center">Apellidos</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Fecha creación</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($representantes as $representante)
                                        <tr>
                                            <td class="text-center">{{$representante->id}}</td>
                                            <td class="text-center">{{$representante->name}}</td>
                                            <td class="text-center">{{$representante->last_name}}</td>
                                            <td class="text-center">{{$representante->email}}</td>
                                            
                                             
                                             <td class="text-center">{{$representante->created_at}}</td>

                                            <td class="text-center">
                                          <a href="/lista-colegiosnac/{{$representante->id}}" data-toggle="tooltip" data-placement="left" title="Ver Colegios" class="btn btn-warning"><i class="fa fa-book"></i></a>
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