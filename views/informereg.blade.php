<!DOCTYPE html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Title Page</title>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>




<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="Hello World"></script>
</body>
</html>


<div class="container-fluid">



<h1>Informe Gerentes  </h1>

<table id="testTable" class="table table-bordered table-striped table-hover">
<tbody>
<tr>
<td width="200">Estado  </td>

<td width="250">Ciudad</td>
<td colspan="2">Metas</td>
<td colspan="2">Adopciones</td>
<td colspan="2">Diferencia</td>
<td colspan="2">Esseg</td>
<td colspan="2">Muestra</td>
<td>Fecha Cierre (Metas)</td>


</tr>
<tr>
<td colspan="2"></td>

<td>Titulo</td>
<td>Valor</td>
<td>Titulo</td>
<td>Valor</td>
<td>Titulo</td>
<td>Valor</td>
<td>Presupuesto</td>
<td>Consumo</td>
<td>Presupuesto</td>
<td>Consumo</td>
<td></td>


</tr>

@foreach($ciudades as $ciudades)
<tr>




<td>
@if(DB::table('fecha_adopcion')->join('colegios','colegios.id','=','fecha_adopcion.colegio_id')->where('ciudad_id',$ciudades->ids)->count())
 @foreach($rojo as $rojos)
  @if($ciudades->ids == $rojos->ciudad_id)
   Rojo: {{$rojos->fecha}}
  @endif
 @endforeach
 <br>
 @foreach($amarillo as $amarillos)
  @if($ciudades->ids == $amarillos->ciudad_id)
   Amarillo: {{$amarillos->fecha}}
  @endif
 @endforeach
 <br>
 @foreach($verde as $verdes)
  @if($ciudades->ids == $verdes->ciudad_id)
   Verde: {{$verdes->fecha}}
  @endif
 @endforeach
 @else
  Rojo: -
 <br>
 Amarillo: -
 <br>
 Verde: -

@endif
</td>







    <td>{{$ciudades->n_ciudad}} </td>
   
@if(DB::table('proventas')->where('ciudad_id',$ciudades->ids)->first())
@foreach($informes as $informesweb)
@if($ciudades->ids == $informesweb->ciudad_id)
<td>{{number_format($informesweb->suma_mat+$informesweb->suma_esp+$informesweb->suma_cie+$informesweb->suma_com+$informesweb->suma_art+$informesweb->suma_int+$informesweb->suma_ing,0,",",".")}}</td>
<td>${{number_format($informesweb->vender_mat+$informesweb->vender_esp+$informesweb->vender_cie+$informesweb->vender_com+$informesweb->vender_art+$informesweb->vender_ing+$informesweb->vender_int,0,",",".")}}</td>
@endif
@endforeach
@else
<td>0</td>
<td>0</td>
@endif

@if(DB::table('campos')->where('ciudad_id',$ciudades->ids)->first())
@foreach($informesadopcion as $informeswebadopcion) 
@if($ciudades->ids == $informeswebadopcion->ciudad_id)
<td>{{number_format($informeswebadopcion->suma_mat+$informeswebadopcion->suma_esp+$informeswebadopcion->suma_cie+$informeswebadopcion->suma_com+$informeswebadopcion->suma_art+$informeswebadopcion->suma_int+$informeswebadopcion->suma_ing,0,",",".")}}</td>
<td>${{number_format($informeswebadopcion->vender_mat+$informeswebadopcion->vender_esp+$informeswebadopcion->vender_cie+$informeswebadopcion->vender_com+$informeswebadopcion->vender_art+$informeswebadopcion->vender_ing+$informeswebadopcion->vender_int,0,",",".")}}</td>
@endif
@endforeach
@else
<td>0</td>
<td>0</td>
@endif

@if(DB::table('campos')->where('ciudad_id',$ciudades->ids)->first())
@foreach($diferenciameta as $diferenciametas)
@foreach($diferenciaadopcion as $diferenciaadopcions)
@if($ciudades->ids == $diferenciaadopcions->ciudad_id)
@if($ciudades->ids == $diferenciametas->ciudad_id)
<td>{{number_format($diferenciaadopcions->totalven-$diferenciametas->totalven,0,",",".")}}</td>
<td>{{number_format($diferenciaadopcions->totalval-$diferenciametas->totalval,0,",",".")}}</td>
@endif
@endif
@endforeach
@endforeach
@else
<td>0</td>
<td>0</td>
@endif


@if(DB::table('esseg')->where('ciudad_id',$ciudades->ids)->first())
@foreach($esseg as $essegs)
@if($ciudades->ids == $essegs->ciudad_id)
<td>${{number_format($essegs->total_esseg,0,",",".")}} </td>
@endif
@endforeach
@else
<td>0</td>
@endif

	@foreach($esseg_con as $esseg_cons)
	@if($esseg_cons->ciudad_id == $ciudades->ids)
    <td>${{number_format($esseg_cons->valor,0,",",".")}}</td>
    @endif
    @endforeach

   @if(DB::table('proventas')->where('ciudad_id',$ciudades->ids)->first())
@foreach($informes as $informesweb)
@if($ciudades->ids == $informesweb->ciudad_id)
<td>{{number_format($informesweb->muestra_mat+$informesweb->muestra_esp+$informesweb->muestra_cie+$informesweb->muestra_com+$informesweb->muestra_art+$informesweb->muestra_int+$informesweb->muestra_ing,0,",",".")}}</td>
@endif
@endforeach
@else
<td>0</td>
@endif
      
@if(DB::table('campos')->where('ciudad_id',$ciudades->ids)->first())
@foreach($informesadopcion as $informeswebadopcion) 
@if($ciudades->ids == $informeswebadopcion->ciudad_id)
<td>{{number_format($informeswebadopcion->muestra_mat+$informeswebadopcion->muestra_esp+$informeswebadopcion->muestra_cie+$informeswebadopcion->muestra_com+$informeswebadopcion->muestra_art+$informeswebadopcion->muestra_int+$informeswebadopcion->muestra_ing,0,",",".")}}</td>
@endif
@endforeach
@else
<td>0</td>
@endif


  <td>
 @foreach($verdeweb as $verdewebs)
  @if($ciudades->ids == $verdewebs->ciudad_id)
    Verde:{{$verdewebs->fecha}}  
   @endif
    @endforeach

<br>
 @foreach($rojoweb as $rojowebs)
  @if($ciudades->ids == $rojowebs->ciudad_id)
    Rojo:{{$rojowebs->fecha}}  
   @endif
    @endforeach

<br>
@foreach($amarilloweb as $amarillowebs)
@if($ciudades->ids == $amarillowebs->ciudad_id)

Amarillo: {{$amarillowebs->fecha}}

@endif
@endforeach

@foreach($rojoweb as $rojowebs)
@endforeach

@endforeach

</tr>
<tr>
<td width="208" colspan="2"><b>TOTALES</b></td>

@if(DB::table('proventas')->count() == 0)
<td><b>0</b></td>
<td><b>0</b></td>
@else
@foreach($informestotales as $informestotales)
<td><b>{{number_format($informestotales->total_met,0,",",".")}}</b></td>
<td><b>${{number_format($informestotales->total_metval,0,",",".")}}</b></td>
@endforeach
@endif
@if(DB::table('campos')->count() == 0)
<td><b>0</b></td>
<td><b>0</b></td>
@else
@foreach($informesadopciontotales as $informesadopciontotales)
<td><b>{{number_format($informesadopciontotales->total_adop,0,",",".")}}</b></td>
<td><b>${{number_format($informesadopciontotales->total_adopval,0,",",".")}}</b></td>
@endforeach
@endif

@if(DB::table('campos')->count() == 0)
<td><b>0</b></td>
<td><b>0</b></td>
@else
<td><b>{{number_format($informesadopciontotales->total_adop-$informestotales->total_met,0,",",".")}}</b></td>
<td><b>${{number_format($informesadopciontotales->total_adopval-$informestotales->total_metval,0,",",".")}}</b></td>
@endif

@foreach($essegcol as $essegcol)
<td><b>${{number_format($essegcol->esseg,0,",",".")}}</b></td>
@endforeach
@foreach($essegcolcon as $essegcolcon)
<td><b>${{number_format($essegcolcon->valor,0,",",".")}}</b></td>
@endforeach
@foreach($presupuestomet as $presupuestomet)
<td><b>{{number_format($presupuestomet->muestra_mat+$presupuestomet->muestra_cie+$presupuestomet->muestra_com+$presupuestomet->muestra_ing+$presupuestomet->muestra_int+$presupuestomet->muestra_art+$presupuestomet->muestra_esp,0,",",".")}}</b></td>
@endforeach
@foreach($presupuestocon as $presupuestocon)
<td><b>{{number_format($presupuestocon->muestra_mat+$presupuestocon->muestra_cie+$presupuestocon->muestra_com+$presupuestocon->muestra_ing+$presupuestocon->muestra_int+$presupuestocon->muestra_art+$presupuestocon->muestra_esp,0,",",".")}}</b></td>
@endforeach
<td>

</td>


</tr>
</tbody>
</table>



</div>