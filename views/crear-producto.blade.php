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

<div class="container">

  <?php $status=Session::get('status'); ?>
  @if($status=='ok_create')
   <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Productos registrados con éxito</strong>
   </div>
  @endif

  @if($status=='ok_delete')
   <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Usuario eliminado con éxito</strong>
   </div>
  @endif

  @if($status=='ok_update')
   <div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Usuario actualizado con éxito</strong>
   </div>
  @endif

</div>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seleccionar opción para mostrar un formulario u otro</title>
<link type="text/css" href="css/styles.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>



<script type="text/javascript">
function primeroa(id) {
  if (id == "1") {
    $("#1a").show();
  }
}
</script>

<script type="text/javascript">
function primerob(id) {
  if (id == "1") {
    $("#1b").show();
  }
}
</script>

<script type="text/javascript">
function primeroc(id) {
  if (id == "1") {
    $("#1c").show();
  }
}
</script>

<script type="text/javascript">
function primerod(id) {
  if (id == "1") {
    $("#1d").show();
  }
}
</script>

<script type="text/javascript">
function primeroe(id) {
  if (id == "1") {
    $("#1e").show();
  }
}
</script>

<script type="text/javascript">
function primerof(id) {
  if (id == "1") {
    $("#1f").show();
  }
}
</script>


<script type="text/javascript">
function primerog(id) {
  if (id == "1") {
    $("#1g").show();
  }
}
</script>



<script type="text/javascript">
function segundoa(id) {
  if (id == "1") {
    $("#2a").show();
  }
}
</script>


<script type="text/javascript">
function segundob(id) {
  if (id == "1") {
    $("#2b").show();
  }
}
</script>

<script type="text/javascript">
function segundoc(id) {
  if (id == "1") {
    $("#2c").show();
  }
}
</script>

<script type="text/javascript">
function segundod(id) {
  if (id == "1") {
    $("#2d").show();
  }
}
</script>

<script type="text/javascript">
function segundoe(id) {
  if (id == "1") {
    $("#2e").show();
  }
}
</script>

<script type="text/javascript">
function segundof(id) {
  if (id == "1") {
    $("#2f").show();
  }
}
</script>

<script type="text/javascript">
function segundog(id) {
  if (id == "1") {
    $("#2g").show();
  }
}
</script>

<script type="text/javascript">
function terceroa(id) {
  if (id == "1") {
    $("#3a").show();
  }
}
</script>


<script type="text/javascript">
function tercerob(id) {
  if (id == "1") {
    $("#3b").show();
  }
}
</script>

<script type="text/javascript">
function terceroc(id) {
  if (id == "1") {
    $("#3c").show();
  }
}
</script>

<script type="text/javascript">
function tercerod(id) {
  if (id == "1") {
    $("#3d").show();
  }
}
</script>

<script type="text/javascript">
function terceroe(id) {
  if (id == "1") {
    $("#3e").show();
  }
}
</script>

<script type="text/javascript">
function tercerof(id) {
  if (id == "1") {
    $("#3f").show();
  }
}
</script>

<script type="text/javascript">
function tercerog(id) {
  if (id == "1") {
    $("#3g").show();
  }
}
</script>

<script type="text/javascript">
function cuartoa(id) {
  if (id == "1") {
    $("#4a").show();
  }
}
</script>


<script type="text/javascript">
function cuartob(id) {
  if (id == "1") {
    $("#4b").show();
  }
}
</script>

<script type="text/javascript">
function cuartoc(id) {
  if (id == "1") {
    $("#4c").show();
  }
}
</script>

<script type="text/javascript">
function cuartod(id) {
  if (id == "1") {
    $("#4d").show();
  }
}
</script>

<script type="text/javascript">
function cuartoe(id) {
  if (id == "1") {
    $("#4e").show();
  }
}
</script>

<script type="text/javascript">
function cuartof(id) {
  if (id == "1") {
    $("#4f").show();
  }
}
</script>

<script type="text/javascript">
function cuartog(id) {
  if (id == "1") {
    $("#4g").show();
  }
}
</script>

<script type="text/javascript">
function quintoa(id) {
  if (id == "1") {
    $("#5a").show();
  }
}
</script>


<script type="text/javascript">
function quintob(id) {
  if (id == "1") {
    $("#5b").show();
  }
}
</script>

<script type="text/javascript">
function quintoc(id) {
  if (id == "1") {
    $("#5c").show();
  }
}
</script>

<script type="text/javascript">
function quintod(id) {
  if (id == "1") {
    $("#5d").show();
  }
}
</script>

<script type="text/javascript">
function quintoe(id) {
  if (id == "1") {
    $("#5e").show();
  }
}
</script>

<script type="text/javascript">
function quintof(id) {
  if (id == "1") {
    $("#5f").show();
  }
}
</script>

<script type="text/javascript">
function quintog(id) {
  if (id == "1") {
    $("#5g").show();
  }
}
</script>

<script type="text/javascript">
function sextoa(id) {
  if (id == "1") {
    $("#6a").show();
  }
}
</script>


<script type="text/javascript">
function sextob(id) {
  if (id == "1") {
    $("#6b").show();
  }
}
</script>

<script type="text/javascript">
function sextoc(id) {
  if (id == "1") {
    $("#6c").show();
  }
}
</script>

<script type="text/javascript">
function sextod(id) {
  if (id == "1") {
    $("#6d").show();
  }
}
</script>

<script type="text/javascript">
function sextoe(id) {
  if (id == "1") {
    $("#6e").show();
  }
}
</script>

<script type="text/javascript">
function sextof(id) {
  if (id == "1") {
    $("#6f").show();
  }
}
</script>

<script type="text/javascript">
function sextog(id) {
  if (id == "1") {
    $("#6g").show();
  }
}
</script>

<script type="text/javascript">
function septimoa(id) {
  if (id == "1") {
    $("#7a").show();
  }
}
</script>


<script type="text/javascript">
function septimob(id) {
  if (id == "1") {
    $("#7b").show();
  }
}
</script>

<script type="text/javascript">
function septimoc(id) {
  if (id == "1") {
    $("#7c").show();
  }
}
</script>

<script type="text/javascript">
function septimod(id) {
  if (id == "1") {
    $("#7d").show();
  }
}
</script>

<script type="text/javascript">
function septimoe(id) {
  if (id == "1") {
    $("#7e").show();
  }
}
</script>

<script type="text/javascript">
function septimof(id) {
  if (id == "1") {
    $("#7f").show();
  }
}
</script>

<script type="text/javascript">
function septimog(id) {
  if (id == "1") {
    $("#7g").show();
  }
}
</script>

<script type="text/javascript">
function octavoa(id) {
  if (id == "1") {
    $("#8a").show();
  }
}
</script>


<script type="text/javascript">
function octavob(id) {
  if (id == "1") {
    $("#8b").show();
  }
}
</script>

<script type="text/javascript">
function octavoc(id) {
  if (id == "1") {
    $("#8c").show();
  }
}
</script>

<script type="text/javascript">
function octavod(id) {
  if (id == "1") {
    $("#8d").show();
  }
}
</script>

<script type="text/javascript">
function octavoe(id) {
  if (id == "1") {
    $("#8e").show();
  }
}
</script>

<script type="text/javascript">
function octavof(id) {
  if (id == "1") {
    $("#8f").show();
  }
}
</script>

<script type="text/javascript">
function octavog(id) {
  if (id == "1") {
    $("#8g").show();
  }
}
</script>

<script type="text/javascript">
function novenoa(id) {
  if (id == "1") {
    $("#9a").show();
  }
}
</script>


<script type="text/javascript">
function novenob(id) {
  if (id == "1") {
    $("#9b").show();
  }
}
</script>

<script type="text/javascript">
function novenoc(id) {
  if (id == "1") {
    $("#9c").show();
  }
}
</script>

<script type="text/javascript">
function novenod(id) {
  if (id == "1") {
    $("#9d").show();
  }
}
</script>

<script type="text/javascript">
function novenoe(id) {
  if (id == "1") {
    $("#9e").show();
  }
}
</script>

<script type="text/javascript">
function novenof(id) {
  if (id == "1") {
    $("#9f").show();
  }
}
</script>

<script type="text/javascript">
function novenog(id) {
  if (id == "1") {
    $("#9g").show();
  }
}
</script>


<script type="text/javascript">
function decimoa(id) {
  if (id == "1") {
    $("#10a").show();
  }
}
</script>


<script type="text/javascript">
function decimob(id) {
  if (id == "1") {
    $("#10b").show();
  }
}
</script>

<script type="text/javascript">
function decimoc(id) {
  if (id == "1") {
    $("#10c").show();
  }
}
</script>

<script type="text/javascript">
function decimod(id) {
  if (id == "1") {
    $("#10d").show();
  }
}
</script>

<script type="text/javascript">
function decimoe(id) {
  if (id == "1") {
    $("#10e").show();
  }
}
</script>

<script type="text/javascript">
function decimof(id) {
  if (id == "1") {
    $("#10f").show();
  }
}
</script>

<script type="text/javascript">
function decimog(id) {
  if (id == "1") {
    $("#10g").show();
  }
}
</script>

<script type="text/javascript">
function oncea(id) {
  if (id == "1") {
    $("#11a").show();
  }
}
</script>


<script type="text/javascript">
function onceb(id) {
  if (id == "1") {
    $("#11b").show();
  }
}
</script>

<script type="text/javascript">
function oncec(id) {
  if (id == "1") {
    $("#11c").show();
  }
}
</script>

<script type="text/javascript">
function onced(id) {
  if (id == "1") {
    $("#11d").show();
  }
}
</script>

<script type="text/javascript">
function oncee(id) {
  if (id == "1") {
    $("#11e").show();
  }
}
</script>

<script type="text/javascript">
function oncef(id) {
  if (id == "1") {
    $("#11f").show();
  }
}
</script>

<script type="text/javascript">
function decimog(id) {
  if (id == "1") {
    $("#10g").show();
  }
}
</script>


<script type="text/javascript">
function mostrar(id) {
  if (id == "primero") {
    $("#primero").show();
    $("#segundo").hide();
    $("#tercero").hide();
    $("#cuarto").hide();
    $("#quinto").hide();
    $("#sexto").hide();
    $("#septimo").hide();
    $("#octavo").hide();
    $("#noveno").hide();
    $("#decimo").hide();
    $("#once").hide();
  }
  
  if (id == "segundo") {
    $("#primero").hide();
    $("#segundo").show();
    $("#tercero").hide();
    $("#cuarto").hide();
    $("#quinto").hide();
    $("#sexto").hide();
    $("#septimo").hide();
    $("#octavo").hide();
    $("#noveno").hide();
    $("#decimo").hide();
    $("#once").hide();
  }
  
  if (id == "tercero") {
    $("#primero").hide();
    $("#segundo").hide();
    $("#tercero").show();
    $("#cuarto").hide();
    $("#quinto").hide();
    $("#sexto").hide();
    $("#septimo").hide();
    $("#octavo").hide();
    $("#noveno").hide();
    $("#decimo").hide();
    $("#once").hide();
  }
  
   if (id == "cuarto") {
    $("#primero").hide();
    $("#segundo").hide();
    $("#tercero").hide();
    $("#cuarto").show();
    $("#quinto").hide();
    $("#sexto").hide();
    $("#septimo").hide();
    $("#octavo").hide();
    $("#noveno").hide();
    $("#decimo").hide();
    $("#once").hide();
  }

    if (id == "quinto") {
    $("#primero").hide();
    $("#segundo").hide();
    $("#tercero").hide();
    $("#cuarto").hide();
    $("#quinto").show();
    $("#sexto").hide();
    $("#septimo").hide();
    $("#octavo").hide();
    $("#noveno").hide();
    $("#decimo").hide();
    $("#once").hide();
  }

    if (id == "sexto") {
    $("#primero").hide();
    $("#segundo").hide();
    $("#tercero").hide();
    $("#cuarto").hide();
    $("#quinto").hide();
    $("#sexto").show();
    $("#septimo").hide();
    $("#octavo").hide();
    $("#noveno").hide();
    $("#decimo").hide();
    $("#once").hide();
  }

    if (id == "septimo") {
    $("#primero").hide();
    $("#segundo").hide();
    $("#tercero").hide();
    $("#cuarto").hide();
    $("#quinto").hide();
    $("#sexto").hide();
    $("#septimo").show();
    $("#octavo").hide();
    $("#noveno").hide();
    $("#decimo").hide();
    $("#once").hide();
  }

    if (id == "octavo") {
    $("#primero").hide();
    $("#segundo").hide();
    $("#tercero").hide();
    $("#cuarto").hide();
    $("#quinto").hide();
    $("#sexto").hide();
    $("#septimo").hide();
    $("#octavo").show();
    $("#noveno").hide();
    $("#decimo").hide();
    $("#once").hide();
  }

    if (id == "noveno") {
    $("#primero").hide();
    $("#segundo").hide();
    $("#tercero").hide();
    $("#cuarto").hide();
    $("#quinto").hide();
    $("#sexto").hide();
    $("#septimo").hide();
    $("#octavo").hide();
    $("#noveno").show();
    $("#decimo").hide();
    $("#once").hide();
  }

    if (id == "decimo") {
    $("#primero").hide();
    $("#segundo").hide();
    $("#tercero").hide();
    $("#cuarto").hide();
    $("#quinto").hide();
    $("#sexto").hide();
    $("#septimo").hide();
    $("#octavo").hide();
    $("#noveno").hide();
    $("#decimo").show();
    $("#once").hide();
  }

  if (id == "once") {
    $("#primero").hide();
    $("#segundo").hide();
    $("#tercero").hide();
    $("#cuarto").hide();
    $("#quinto").hide();
    $("#sexto").hide();
    $("#septimo").hide();
    $("#octavo").hide();
    $("#noveno").hide();
    $("#decimo").hide();
    $("#once").show();
  }

}
</script>
</head>

<body>

@foreach($ano as $ano)

@endforeach

<div class="container-fluid">
   <!-- Inline Form Block -->
            <div class="block full">
                <!-- Inline Form Title -->
                <div class="block-title">
                    <h2><strong>Seleccione grado</strong> para auditoría</h2>
                </div>
                <!-- END Inline Form Title -->

                <!-- Inline Form Content -->
                <form action="index.php" method="post">

    <select id="status" class="form-control input-md" name="status" onChange="mostrar(this.value);">
       <option value="" selected>Seleccione grado</option>

       @if (DB::table('campos')->where('grado_id', '=', 1)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="primero" disabled>Primero</option>
       @else
       <option value="primero">Primero</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 2)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
        <option value="segundo" disabled>Segundo</option>
       @else
       <option value="segundo">Segundo</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 3)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="tercero" disabled>Tercero</option>
       @else
       <option value="tercero">Tercero</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 4)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="cuarto" disabled>Cuarto</option>
       @else
       <option value="cuarto">Cuarto</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 5)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="quinto" disabled>Quinto</option>
       @else
       <option value="quinto">Quinto</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 6)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="sexto" disabled>Sexto</option>
       @else
       <option value="sexto">Sexto</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 7)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="septimo" disabled>Séptimo</option>
       @else
       <option value="septimo">Séptimo</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 8)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="octavo" disabled>Octavo</option>
       @else
       <option value="octavo">Octavo</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 9)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="noveno" disabled>Noveno</option>
       @else
       <option value="noveno">Noveno</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 10)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="decimo" disabled>Décimo</option>
       @else
       <option value="decimo">Décimo</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 11)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="once" disabled>Once</option>
       @else
       <option value="once">Once</option>
       @endif

     
     </select>
</form>
                <!-- END Inline Form Content -->
            </div>
            <!-- END Inline Form Block -->
</div>



<div id="primero" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="primeroa(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="1a" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulo as $titulo)
      @if($titulo->grado == 1)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="1" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   @foreach($date as $date)
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />
   @endforeach
  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="primerob(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="1b" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 1)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>



   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="1" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  
  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="primeroc(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="1c" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 1)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="1" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />
  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="primerod(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="1d" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 1)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="1" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />
  
  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="primeroe(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="1e" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 1)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
    
    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="1" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="primerof(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="1f" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 1)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="1" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="primerog(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="1g" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 1)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="1" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
 
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>


<div id="segundo" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="segundoa(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="2a" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 2)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="2" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="segundob(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="2b" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 2)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="2" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="segundoc(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="2c" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 2)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="2" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />
 
  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="segundod(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="2d" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 2)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="2" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">

 
  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="segundoe(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="2e" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 2)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    
    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="2" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="segundof(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="2f" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 2)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="2" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="segundog(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="2g" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 2)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="2" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
    
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>

<div id="tercero" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="terceroa(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="3a" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 3)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="3" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="tercerob(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="3b" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 3)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="3" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />
 
  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="terceroc(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="3c" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 3)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="3" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="tercerod(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="3d" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 3)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="3" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />
    
  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">

  
  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="terceroe(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="3e" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 3)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    
    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="3" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />
  
  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">

  
  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="tercerof(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="3f" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 3)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="3" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="tercerog(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="3g" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 3)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="3" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />
 
 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
    
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>

<div id="cuarto" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="cuartoa(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="4a" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 4)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="4" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="cuartob(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="4b" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 4)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="4" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />
 
  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="cuartoc(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="4c" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 4)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="4" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="cuartod(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="4d" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 4)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="4" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="cuartoe(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>

       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="4e" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 4)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    
    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="4" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />
   
      </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="cuartof(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="4f" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 4)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="4" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="cuartog(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="4g" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 4)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="4" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
   
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>


<div id="quinto" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="quintoa(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="5a" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 5)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="5" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="quintob(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="5b" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 5)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="5" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="quintoc(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="5c" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 5)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="5" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="quintod(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="5d" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 5)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="5" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="quintoe(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="5e" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 5)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
    
    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="5" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="quintof(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="5f" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 5)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="5" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">

  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="quintog(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="5g" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 5)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="5" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
    
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>

<div id="sexto" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="sextoa(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>


    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="6a" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 6)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="6" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />
 
  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="sextob(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>


    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="6b" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 6)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="6" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  
  
  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="sextoc(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>


    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="6c" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 6)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="6" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   
 
  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="sextod(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>


    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="6d" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 6)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="6" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="sextoe(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>


    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="6e" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 6)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
    
    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="6" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />
  
  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="sextof(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>


    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="6f" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 6)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div> 
   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="6" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="sextog(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>


    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="6g" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 6)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="6" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
    
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>


<div id="septimo" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="septimoa(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="7a" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 7)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="7" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="septimob(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="7b" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 7)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div> 

   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="7" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  
 
  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="septimoc(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="7c" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 7)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="7" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="septimod(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="7d" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 7)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="7" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="septimoe(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="7e" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 7)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
    
    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="7" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="septimof(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="7f" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 7)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="7" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="septimog(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="7g" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 7)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="7" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
    
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>


<div id="octavo" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="octavoa(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="8a" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 8)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="8" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  
 
  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="octavob(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="8b" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 8)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="8" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="octavoc(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="8c" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 8)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="8" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="octavod(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="8d" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 8)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="8" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="octavoe(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="8e" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 8)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
    
    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="8" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="octavof(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="8f" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 8)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="8" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="octavog(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="8g" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 8)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="8" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
   
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>


<div id="noveno" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="novenoa(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="9a" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 9)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="9" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="novenob(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="9b" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 9)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="9" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />
  
  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">

  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="novenoc(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="9c" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 9)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="9" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="novenod(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="9d" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 9)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="9" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />
 
  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="novenoe(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>
    
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="9e" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 9)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="9" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">

 
  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="novenof(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="9f" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 9)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="9" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="novenog(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="9g" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 9)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="9" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
   
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>

<div id="decimo" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  
  
  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="decimoa(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="10a" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 10)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="10" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="decimob(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>


   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="10b" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 10)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="10" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="decimoc(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="10c" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 10)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="10" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />
 
  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="decimod(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="10d" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 10)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="10" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="decimoe(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>
    
       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="10e" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 10)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="10" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="decimof(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="10f" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 10)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="10" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="decimog(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="10g" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 10)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="10" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
    
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>


<div id="once" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="oncea(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="11a" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 11)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="11" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="onceb(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="11b" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 11)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="11" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">

  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="oncec(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="11c" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 11)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="11" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
      <input type="hidden" name="ano[]" value="{{$date->ano}}" />
   
  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="onced(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="11d" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 11)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="11" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
       <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">

  
  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category" onChange="oncee(this.value);">
      <option value="0" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="11e" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 11)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
    
    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="11" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
       <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="oncef(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="11f" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 11)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="11" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
      <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" />
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category" onChange="onceg(this.value);">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="11g" class="element" style="display: none;">
    <select class="form-control input-sm" name="titulo[]" id="category">
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 11)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="11" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
  <input type="hidden" name="ano[]" value="{{$date->ano}}" />
 
 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
    
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>


</div>

</body>
</html>
</div>


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
@stop
