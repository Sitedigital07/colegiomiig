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
                                    <a href="/representantes-lista"><i class="gi gi-group"></i> Representantes</a>
                                </li>

                                  <li class="active">
                                    <a href="/informe/gerentes"><i class="gi gi-file"></i> Informe Gerentes</a>
                                </li>

                                 <li class="active">
                                    <a href="/informe/gerentes-matriz"><i class="gi gi-file"></i> Matriz</a>
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
     <h2><strong>Crear</strong> Descuento</h2>
    </div>
    
    {{ Form::open(array('method' => 'POST', 'id' => 'defaultForm', 'url' => array('/creardescuento'))) }}
    <form action="" method="POST" role="form" url="/creardescuento">
    
      <div class="form-group">
        <label for="">Ingrese descuento</label>
        @foreach($valores as $valores)
        @if(Auth::user()->rol_id == 5)
        <input type="number" name="descuento" class="form-control" id="" placeholder="Ingrese descuento" max="{{$valores->descuento_representante}}">
        @elseif(Auth::user()->rol_id == 3)
        <input type="number" name="descuento" class="form-control" id="" placeholder="Ingrese descuento" max="{{$valores->descuento_nacional}}">
         @elseif(Auth::user()->rol_id == 4)
        <input type="number" name="descuento" class="form-control" id="" placeholder="Ingrese descuento" max="{{$valores->descuento_regional}}">
        @endif
        @endforeach
      </div>
      <input type="hidden" name="colegio_id" id="input" class="form-control" value="{{Request::segment(2)}}" required="required" pattern="" title="">
      <input type="hidden" name="rol_id" id="input" class="form-control" value="{{Auth::user()->name}} {{Auth::user()->last_name}}" required="required" pattern="" title="">
      @foreach($ano as $ano)
      <input type="hidden" name="ano" id="input" class="form-control" value="{{$ano->ano}}" required="required" pattern="" title="">


      @if (DB::table('descuento')->where('ano', '=',$ano->ano)->where('colegio_id', '=', Request::segment(2))->exists())

      <button type="submit" class="btn btn-primary" disabled="">Aceptar</button>
      @else
      <button type="submit" class="btn btn-primary">Aceptar</button>
      @endif
            @endforeach
    {{ Form::close() }}
    <br>

    <div class="table-responsive">
     <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
      <thead>
       <tr>
        <th>ID</th>
        <th class="text-center">Descuento</th>
        <th class="text-center">Rol</th>
        <th class="text-center">Año</th>

        <th class="text-center">Acciones</th>
       </tr>
      </thead>
      
      <tbody>
       <tr>
         @foreach($anos as $ano)
         @endforeach
        @foreach($descuentos as $descuentos)
        <td>{{$descuentos->id}} </td>
        <td class="text-center">{{$descuentos->descuento}} %</td>
        <td class="text-center">{{$descuentos->rol_id}}</td>
        <td class="text-center">{{$descuentos->ano}}</td>

        <td class="text-center">
          
        @if (DB::table('descuento')->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists())

        @if(Auth::user()->rol_id == 5)
        <a href="/editar-descuentorep/{{$descuentos->id}}" class="btn btn-primary"><i class="fa fa-eraser"></i></a>
        @elseif(Auth::user()->rol_id == 3)
         <a href="/editar-descuentoaud/{{$descuentos->id}}" class="btn btn-primary"><i class="fa fa-eraser"></i></a>
          @elseif(Auth::user()->rol_id == 4)
         <a href="/editar-descuentoreg/{{$descuentos->id}}" class="btn btn-primary"><i class="fa fa-eraser"></i></a>
        @endif
       
       
       
        <script language="JavaScript">
        function confirmar ( mensaje ) {
        return confirm( mensaje );}
        </script>
        @if(Auth::user()->rol_id == 3 OR Auth::user()->rol_id == 4)
        @else
        <a href="/eliminar-descuento/{{$descuentos->id}}" onclick="return confirmar('¿Está seguro que desea eliminar los registros para este colegio?')" data-toggle="tooltip" data-placement="right" title="Eliminar descuento" type="button" class="btn btn-danger"><i class="hi hi-trash"></i></a>
          @endif
        @else
        <a href="#" class="btn btn-primary" disabled><i class="fa fa-eraser"></i></a>
        
        <a href="#" onclick="return confirmar('¿Está seguro que desea eliminar los registros para este colegio?')" data-toggle="tooltip" data-placement="right" title="Eliminar descuento" type="button" class="btn btn-danger" disabled><i class="hi hi-trash"></i></a>

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


