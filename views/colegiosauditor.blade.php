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
                                        
                                            <th>Email</th>
                                            <th>Dirección</th>
                                            
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($colegiosaud as $colegioaud)
                                        <tr>
                                           <td>
                                               @if($colegioaud->estadoaud == 'Auditado')
                                               <span class="label label-primary">Auditado</span>
                                               @elseif($colegioaud->estadoaud == 'No-auditado')
                                               <span class="label label-danger">No Auditado</span>
                                               @elseif($colegioaud->estadoaud == 'En-proceso')
                                               <span class="label label-warning">En proceso</span>
                                               @endif
                                             </td>
                                            <td class="text-center">{{$colegioaud->codigo}}</td>
                                            <td class="text-center">{{$colegioaud->nombres}}</td>
                                            
                                            <td>{{$colegioaud->emailcol}}</td>
                                             <td>{{$colegioaud->domicilio}}</td>
                                            <td class="text-center">
                                               <a href="/poblacion-registrada/{{$colegioaud->id}}" type="button" class="btn btn-info">Mercadeo</a>
                         <a href="/proyeccionventasadopcionaud/{{$colegioaud->id}}"><button type="button" class="btn btn-warning">Auditoria</button></a>
                         <a href="/editar-colegiorp/{{$colegioaud->id}}"><button type="button" class="btn btn-primary">Actualizar datos</button></a>
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
