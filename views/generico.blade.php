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

	

	<div class="container-fluid">
	
	@foreach($colegios as $colegiosweb)



		<h4 style="background:#e0e0e0;padding:15px;color:#989898">{{$colegiosweb->nombres}}</h4>

		<table id="testTable" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<td>Regional</td>
					<td>Ciudad</td>
					<td>Código DANE</td>
					<td>Representante</td>
					<td>Presupuesto Esseg</td>
					<td>Consumo</td>
					<td>Fecha Meta</td>
					<td>Fecha Adopción</td>
					<td>Descuento</td>
					<td>Descuento Real</td>
					
				</tr>
				
			</thead>
			<tbody>
				<tr>
				@foreach($regional as $regionals)
				@if($regionals->id == $colegiosweb->region_id)
				<th>{{$regionals->region}}</th>
				@endif
				@endforeach
				@foreach($ciudades as $ciudadesw)
				@if($ciudadesw->ids == $colegiosweb->ciudad_id)
				<th>{{$ciudadesw->n_ciudad}}</th>
				@endif
				@endforeach
				<th>{{$colegiosweb->codigo}}</th>
				@foreach($representante as $representantes)
				@if($representantes->id == $colegiosweb->representante_id)
				<th>{{$representantes->name}} {{$representantes->last_name}}</th>
				@endif
				@endforeach

				@if(DB::table('esseg')->where('colegio_id','=',$colegiosweb->id)->where('ano','=',$ano)->count() == 0)
				<th>Sin esseg</th>
				@else
				@foreach($esseg as $essegs)
				@if($essegs->colegio_id == $colegiosweb->id)
			    <th>$ {{number_format($essegs->esseg,0,",",".")}}</th>
			    @else
			    @endif
			    @endforeach
			 	@endif
			
		
				@foreach($essegcon as $essegcons)
			    @if($essegcons->colegio_id == $colegiosweb->id)
				<th>{{number_format($essegcons->valor,0,",",".")}}</th>
				@else
				@endif
				@endforeach
				

				@if(DB::table('fecha_meta')->where('colegio_id','=',$colegiosweb->id)->where('ano','=',$ano)->count()==0)
				<th>Sin Fecha</th>
				@else
				<th>{{str_replace(str_split('\\/:*?"[]|'),'',DB::table('fecha_meta')->where('colegio_id','=',$colegiosweb->id)->where('ano','=',$ano)->pluck('fecha'))}}</th>
				@endif

				@if(DB::table('fecha_adopcion')->where('colegio_id','=',$colegiosweb->id)->where('ano','=',$ano)->count()==0)
				<th>Sin Fecha</th>
				@else
				<th>{{str_replace(str_split('\\/:*?"[]|'),'',DB::table('fecha_adopcion')->where('colegio_id','=',$colegiosweb->id)->where('ano','=',$ano)->pluck('fecha'))}}</th>
				@endif


				
			

				@if(DB::table('descuento')->where('colegio_id','=',$colegiosweb->id)->where('ano','=',$ano)->count() == 0)
				<td>0</td>
				@else
				@foreach($adopciones as $adopcionesws)
				@if($adopcionesws->colegio_id == $colegiosweb->id)
					<th>{{$adopcionesws->descuento}} %</th>
					@else
					@endif
					@endforeach
				@endif

				@if(DB::table('campos')->where('colegio_id','=',$colegiosweb->id)->where('ano','=',$ano)->count() == 0)
				<th>Sin Descuento</th>
				@else
				@foreach($adopciones as $adopcionesw)
		
			
				@if($adopcionesw->colegio_id == $colegiosweb->id)

					@if($adopcionesw->esseg == '0' OR $adopcionesw->total_metval =='0')
						<th>0%</th>
				
				@else
				<th>{{number_format($adopcionesw->esseg/$adopcionesw->total_metval*100+$adopcionesw->descuento,2,",",".")}} %</th>
				@endif
				@endif
		
		
				@endforeach
				@endif

			</tr> 
			</tbody>
		</table>

		<table id="testTable" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>Grado</th>
					<th style="background:#32ac63; color:#fff">Matemáticas</th>
					<th>Proy. Venta</th>
					<th>Muestras</th>

					<th style="background:#32ac63; color:#fff">Español</th>
					<th>Proy. Venta</th>
					<th>Muestras</th>
			
					<th style="background:#32ac63; color:#fff">Ciencias</th>
					<th>Proy. Venta</th>
					<th>Muestras</th>

					<th style="background:#32ac63; color:#fff">Comprensión</th>
					<th>Proy. Venta</th>
					<th>Muestras</th>
					
					<th style="background:#32ac63; color:#fff">Inglés</th>
					<th>Proy. Venta</th>
					<th>Muestras</th>
			
					<th style="background:#32ac63; color:#fff">Artes</th>
					<th>Proy. Venta</th>
					<th>Muestras</th>
		
					<th style="background:#32ac63; color:#fff">Interes</th>
					<th>Proy. Venta</th>
					<th>Muestras</th>
		
				</tr>
			</thead>
			<tbody>
			    @foreach($general as $generalweb)
			    @if($colegiosweb->id == $generalweb->colegio_id)
			
				<tr>
					<td width="20">
						@if($generalweb->grado_id == 1)
					    Primero
						@elseif($generalweb->grado_id == 2)
						Segundo
						@elseif($generalweb->grado_id == 3)
						Tercero
						@elseif($generalweb->grado_id == 4)
						Cuarto
						@elseif($generalweb->grado_id == 5)
						Quinto
						@elseif($generalweb->grado_id == 6)
						Sexto
						@elseif($generalweb->grado_id == 7)
						Séptimo
						@elseif($generalweb->grado_id == 8)
						Octavo
						@elseif($generalweb->grado_id == 9)
						Noveno
						@elseif($generalweb->grado_id == 10)
						Décimo
						@elseif($generalweb->grado_id == 11)
						Once
						@endif

					</td>
					@if($generalweb->titulo_mat == 0)
					<td width="150">No aplica</td>
					@else
					@foreach($titulos as $titulosmat)
					@if($titulosmat->id == $generalweb->titulo_mat)
					<td width="150" style="background: #b0d0bd">{{$titulosmat->nombre}}</td>
					@endif
					@endforeach
					@endif
					<td  width="2">{{$generalweb->vender_mat}}</td>
					@if($generalweb->muestra_mat == '')
					<td  width="2">0</td>
					@else
					<td>{{$generalweb->muestra_mat}}</td>
					@endif
					
					@if($generalweb->titulo_esp == 0)
					<td width="150">No aplica</td>
					@else
					@foreach($titulos as $titulosesp)
					@if($titulosesp->id == $generalweb->titulo_esp)
					<td width="150" style="background: #b0d0bd">{{$titulosesp->nombre}}</td>
					@endif
					@endforeach
					@endif
					<td>{{$generalweb->vender_esp}}</td>
					@if($generalweb->muestra_esp == '')
					<td>0</td>
					@else
					<td>{{$generalweb->muestra_esp}}</td>
					@endif
					
					@if($generalweb->titulo_cie == 0)
					<td width="150">No aplica</td>
					@else
					@foreach($titulos as $tituloscie)
					@if($tituloscie->id == $generalweb->titulo_cie)
					<td width="150" style="background: #b0d0bd">{{$tituloscie->nombre}}</td>
					@endif
					@endforeach
					@endif
					<td>{{$generalweb->vender_cie}}</td>
					@if($generalweb->muestra_cie == '')
					<td>0</td>
					@else
					<td>{{$generalweb->muestra_cie}}</td>
					@endif
					
					@if($generalweb->titulo_com == 0)
					<td width="150">No aplica</td>
					@else
					@foreach($titulos as $tituloscom)
					@if($tituloscom->id == $generalweb->titulo_com)
					<td width="150" style="background: #b0d0bd">{{$tituloscom->nombre}}</td>
					@endif
					@endforeach
					@endif
					<td>{{$generalweb->vender_com}}</td>
					@if($generalweb->muestra_com == '')
					<td>0</td>
					@else
					<td>{{$generalweb->muestra_com}}</td>
					@endif
					
					@if($generalweb->titulo_ing == 0)
					<td width="150">No aplica</td>
					@else
					@foreach($titulos as $titulosing)
					@if($titulosing->id == $generalweb->titulo_ing)
					<td width="150" style="background: #b0d0bd">{{$titulosing->nombre}}</td>
					@endif
					@endforeach
					@endif
					<td>{{$generalweb->vender_ing}}</td>
					@if($generalweb->muestra_ing == '')
					<td>0</td>
					@else
					<td>{{$generalweb->muestra_ing}}</td>
					@endif
					
					@if($generalweb->titulo_art == 0)
					<td width="150">No aplica</td>
					@else
					@foreach($titulos as $titulosart)
					@if($titulosart->id == $generalweb->titulo_art)
					<td width="150" style="background: #b0d0bd">{{$titulosart->nombre}}</td>
					@endif
					@endforeach
					@endif
					<td>{{$generalweb->vender_art}}</td>
					@if($generalweb->muestra_art == '')
					<td>0</td>
					@else
					<td>{{$generalweb->muestra_art}}</td>
					@endif
					
					@if($generalweb->titulo_int == 0)
					<td width="150">No aplica</td>
					@else
					@foreach($titulos as $titulosint)
					@if($titulosint->id == $generalweb->titulo_int)
					<td width="150" style="background: #b0d0bd">{{$titulosint->nombre}}</td>
					@endif
					@endforeach
					@endif
					<td>{{$generalweb->vender_int}}</td>
					@if($generalweb->muestra_int == '')
					<td>0</td>
					@else
					<td>{{$generalweb->muestra_int}}</td>
					@endif
					

				</tr>
		
				@else
				@endif
				@endforeach
			</tbody>
			<tfooter>
				<tr>
					<th></th>
					<th></th>
					@foreach($sumamat as $sumamats)
					@if($sumamats->colegio_id == $colegiosweb->id)
					<th>{{$sumamats->suma_mat}}</th>
					<th>{{$sumamats->muestra_mat}}</th>
					
					@else 
					@endif
					@endforeach
					<th></th>
					@foreach($sumaesp as $sumaesps)
					@if($sumaesps->colegio_id == $colegiosweb->id)
					<th>{{$sumaesps->suma_esp}}</th>
					<th>{{$sumaesps->muestra_esp}}</th>
				
					@else
					@endif
					@endforeach
					<th></th>
					@foreach($sumacie as $sumacies)
					@if($sumacies->colegio_id == $colegiosweb->id)
					<th>{{$sumacies->suma_cie}}</th>
					<th>{{$sumacies->muestra_cie}}</th>
	
					@else
					@endif
					@endforeach
					<th></th>
					@foreach($sumacom as $sumacoms)
					@if($sumacoms->colegio_id == $colegiosweb->id)
					<th>{{$sumacoms->suma_com}}</th>
					<th>{{$sumacoms->muestra_com}}</th>
					
					@else
					@endif
					@endforeach
					<th></th>
					@foreach($sumaing as $sumaings)
					@if($sumaings->colegio_id == $colegiosweb->id)
					<th>{{$sumaings->suma_ing}}</th>
					<th>{{$sumaings->muestra_ing}}</th>
					
					@else
					@endif
					@endforeach
					<th></th>
					@foreach($sumaart as $sumaarts)
					@if($sumaarts->colegio_id == $colegiosweb->id)
					<th>{{$sumaarts->suma_art}}</th>
					<th>{{$sumaarts->muestra_art}}</th>
					
					@else
					@endif
					@endforeach
					<th></th>
					@foreach($sumaint as $sumaints)
					@if($sumaints->colegio_id == $colegiosweb->id)
					<th>{{$sumaints->suma_int}}</th>
					<th>{{$sumaints->muestra_int}}</th>
					
					@else
					@endif
					@endforeach
		

				</tr>

			</tfooter>
		</table>


		
		@endforeach
	</div>
		
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>