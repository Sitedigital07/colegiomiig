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
<td width="200">Estado </td>

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

<td>Titulo </td>
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
 Rojo: {{DB::table("colegios")->join('fecha_adopcion','colegios.id','=','fecha_adopcion.colegio_id')->where('colegios.ciudad_id',$ciudades->ids)->where('fecha' ,'<', $date_future)->count()}}
 <br>
 Amarillo: {{DB::table("colegios")->join('fecha_adopcion','colegios.id','=','fecha_adopcion.colegio_id')->where('colegios.ciudad_id',$ciudades->ids)->whereBetween('fecha', [$date_futuretres, $date_futurecua])->count()}}
 <br>
 Verde: {{DB::table("colegios")->join('fecha_adopcion','colegios.id','=','fecha_adopcion.colegio_id')->where('colegios.ciudad_id',$ciudades->ids)->where('fecha' ,'>', $date_futurecinc)->count()}}
</td>




    <td>{{$ciudades->n_ciudad}} </td>
   
@if(DB::table('proventas')->where('ciudad_id',$ciudades->ids)->first())
@foreach($informes as $informesweb)
@if($ciudades->ids == $informesweb->ciudad_id)
<td>{{$informesweb->suma_mat+$informesweb->suma_esp+$informesweb->suma_cie+$informesweb->suma_com+$informesweb->suma_art+$informesweb->suma_int+$informesweb->suma_ing}}</td>
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
<td>{{$informeswebadopcion->suma_mat+$informeswebadopcion->suma_esp+$informeswebadopcion->suma_cie+$informeswebadopcion->suma_com+$informeswebadopcion->suma_art+$informeswebadopcion->suma_int+$informeswebadopcion->suma_ing}}</td>
<td>${{number_format($informeswebadopcion->vender_mat+$informeswebadopcion->vender_esp+$informeswebadopcion->vender_cie+$informeswebadopcion->vender_com+$informeswebadopcion->vender_art+$informeswebadopcion->vender_ing+$informeswebadopcion->vender_int,0,",",".")}}</td>
@endif
@endforeach
@else
<td>0</td>
<td>0</td>
@endif

@if(DB::table('campos')->where('ciudad_id',$ciudades->ids)->first())
@foreach($informesesp as $informesesps)
@if($ciudades->ids == $informesesps->ciudad_id)
<td>{{DB::table('campos')->where('ciudad_id',$ciudades->ids)->sum(DB::raw('pr_vender_mat + pr_vender_esp + pr_vender_cie + pr_vender_com + pr_vender_int + pr_vender_ing + pr_vender_art')) - DB::table('proventas')->where('ciudad_id',$ciudades->ids)->sum(DB::raw('pr_vender_mat + pr_vender_esp + pr_vender_cie + pr_vender_com + pr_vender_int + pr_vender_ing + pr_vender_art'))}}</td>
<td>${{number_format(DB::table('campos')->where('ciudad_id',$ciudades->ids)->sum(DB::raw('pr_vender_mat*pr_valor_mat+pr_vender_esp*pr_valor_esp+pr_vender_cie*pr_valor_cie+pr_vender_com*pr_valor_com+pr_vender_int*pr_valor_int+pr_vender_art*pr_valor_art+pr_vender_ing*pr_valor_ing')) - DB::table('proventas')->where('ciudad_id',$ciudades->ids)->sum(DB::raw('pr_vender_mat*pr_valor_mat+pr_vender_esp*pr_valor_esp+pr_vender_cie*pr_valor_cie+pr_vender_com*pr_valor_com+pr_vender_int*pr_valor_int+pr_vender_art*pr_valor_art+pr_vender_ing*pr_valor_ing')),0,",",".")}}</td>
@endif
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

      
    <td>${{number_format(DB::table('esseg_con')->where('ciudad_id',$ciudades->ids)->sum('valor'),0,",",".")}}</td>

   @if(DB::table('proventas')->where('ciudad_id',$ciudades->ids)->first())
@foreach($informes as $informesweb)
@if($ciudades->ids == $informesweb->ciudad_id)
<td>{{$informesweb->muestra_mat+$informesweb->muestra_esp+$informesweb->muestra_cie+$informesweb->muestra_com+$informesweb->muestra_art+$informesweb->muestra_int+$informesweb->muestra_ing}}</td>
@endif
@endforeach
@else
<td>0</td>
@endif
      
@if(DB::table('campos')->where('ciudad_id',$ciudades->ids)->first())
@foreach($informesadopcion as $informeswebadopcion) 
@if($ciudades->ids == $informeswebadopcion->ciudad_id)
<td>{{$informeswebadopcion->muestra_mat+$informeswebadopcion->muestra_esp+$informeswebadopcion->muestra_cie+$informeswebadopcion->muestra_com+$informeswebadopcion->muestra_art+$informeswebadopcion->muestra_int+$informeswebadopcion->muestra_ing}}</td>
@endif
@endforeach
@else
<td>0</td>
@endif


  <td>Rojo: {{ DB::table("colegios")->join('fecha_adopcion','colegios.id','=','fecha_adopcion.colegio_id')->join('campos','colegios.id','=','campos.colegio_id')->where('colegios.ciudad_id',$ciudades->ids)->where('campos.id', '=', 1)->where('fecha' ,'>', '2019-08-09')->count()}}
<br>
Amarillo:
<br>
Verde:</td>
      


@endforeach

</tr>
<tr>
<td width="208" colspan="2"><b>TOTALES</b></td>

@if(DB::table('proventas')->count() == 0)
<td><b>0</b></td>
<td><b>0</b></td>
@else
@foreach($informestotales as $informestotales)
<td><b>{{$informestotales->total_met}}</b></td>
<td><b>${{number_format($informestotales->total_metval,0,",",".")}}</b></td>
@endforeach
@endif
@if(DB::table('campos')->count() == 0)
<td><b>0</b></td>
<td><b>0</b></td>
@else
@foreach($informesadopciontotales as $informesadopciontotales)
<td><b>{{$informesadopciontotales->total_adop}}</b></td>
<td><b>${{number_format($informesadopciontotales->total_adopval,0,",",".")}}</b></td>
@endforeach
@endif

@if(DB::table('campos')->count() == 0)
<td><b>0</b></td>
<td><b>0</b></td>
@else
<td><b>{{$informesadopciontotales->total_adop-$informestotales->total_met}}</b></td>
<td><b>${{number_format($informesadopciontotales->total_adopval-$informestotales->total_metval,0,",",".")}}</b></td>
@endif
<td><b>${{number_format(DB::table('esseg')->sum('esseg'),0,",",".")}}</b></td>
<td><b>${{number_format(DB::table('esseg_con')->sum('valor'),0,",",".")}}</b></td>
@foreach($presupuestomet as $presupuestometd)
<td><b>{{$presupuestometd->muestra_mat+$presupuestometd->muestra_esp+$presupuestometd->muestra_cie+$presupuestometd->muestra_com+$presupuestometd->muestra_int+$presupuestometd->muestra_ing+$presupuestometd->muestra_art}}</b></td>
@endforeach
@foreach($presupuestoadop as $presupuestoadops)
<td><b>{{$presupuestoadops->muestra_mat+$presupuestoadops->muestra_esp+$presupuestoadops->muestra_cie+$presupuestoadops->muestra_com+$presupuestoadops->muestra_int+$presupuestoadops->muestra_ing+$presupuestoadops->muestra_art}}</b></td>
@endforeach
<td>

</td>


</tr>
</tbody>
</table>



</div>



                 

        