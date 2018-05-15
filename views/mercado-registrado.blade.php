@extends ('adminsite.auditor')

<!-- Define el titulo de la Página -->    
@section('title')
Gestión de usuarios Libros & Libros
@stop


@section('cabecera')
 @parent
@stop

@section('contenido')


  
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
    @foreach($poblacionweb as $poblacionweb)
    @endforeach
    <div class="container">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <a href="/colegio-poblacion/{{Request::segment(2)}}" type="button" class="btn btn-primary pull-right">Crear mercadeo</a>
     </div>
 </div>
  </br>
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
                                            <th class="text-center">Id</th>
                                            <th class="text-center">Colegio</th>
                                            <th class="text-center">Codigo MIIG</th>
                                            <th class="text-center">Año</th>
                                            <th class="text-center">Total</th>
                                             <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($poblacion as $poblacion)

                                        <tr>
                                            <td>{{$poblacion->id}}</td>
                                            <td>{{$poblacion->nombres}}</td>
                                            <td>{{$poblacion->codigo}}</td>
                                            <td>{{$poblacion->ano}}</td>
                                            <td>{{$poblacion->total}}</td>
                                    

                                            <td class="text-center">
                                            
											   <a href="/editar-poblacion/{{$poblacion->id}}"><button type="button" class="btn btn-primary">Actualizar datos</button></a>
                         <a href="/eliminar-poblacion/{{$poblacion->id}}"><button type="button" class="btn btn-danger">Eliminar</button></a>
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
