@extends ('adminsite.asistente')

<!-- Define el titulo de la Página -->    
@section('title')
Gestión de usuarios Libros & Libros
@stop


@section('cabecera')

 @parent
@stop

@section('contenido')

@foreach($ano as $ano)
@endforeach
<br><br>

  <div class="container">
     @if(DB::table('proyeccion')->where('colegio_id','=',Request::segment(2))->where('ano','=',$ano->ano)->count() == 1)
<div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Usted Ya posee una fecha</strong> Principal
  </div>
 @elseif(DB::table('proyeccion')->where('colegio_id','=',Request::segment(2))->where('ano','=',$ano->ano)->count() == 2)
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Usted Ya posee una Segunda</strong> Fecha
  </div>
 @elseif(DB::table('proyeccion')->where('colegio_id','=',Request::segment(2))->where('ano','=',$ano->ano)->count() == 3)
  <div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Usted Ya posee una fecha</strong> Adicional
  </div>
  @else
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Usted no Ha ejecutado</strong> Fechas
  </div>
  @endif
  </div>


<div class="container">
<div class="card">


@foreach($represen as $represen)
@endforeach

</div>
</div>

<br>
<div class="container">
  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Fechas Programación</div>
    <div class="panel-body">
  
    </div>
  <div class="container">
    {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproyec'))) }}

<div class="form-group">
 <label class="col-md-2 control-label" for="example-text-input">Fecha presentación</label>
  <div class="col-md-9">
   {{Form::date('presentacion', '', array('class' => 'form-control','placeholder'=>''))}}
  </div>
</div>
<input type="hidden" name="colegio" value="{{$represen->id}}">
<input type="hidden" name="ano" value="{{$ano->ano}}">
<input type="hidden" name="representante" value="{{$represen->representante_id}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">


@if(DB::table('proyeccion')->where('colegio_id','=',Request::segment(2))->where('ano','=',$ano->ano)->count() == 1)
@else
{{Form::submit('Crear', array('class' => 'btn btn-primary')  )}}
<br>
<br>
@endif
{{ Form::close() }}
 

  </div>

  </div>
</div>

{{ csrf_field() }}


<div class="container">
 @foreach($fechas as $fechas)

@if($fechas->ano == $ano->ano)
<div class="col-sm-6 col-lg-4">
                                <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background">
                                        <h4 class="widget-content-light"><strong>Fecha presentación</strong> presentación</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 animation-expandOpen">{{$fechas->date_com}}</span></div>
                                </a>
                            </div>
@else
@endif
@endforeach
</div>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

@stop

