@extends ('template.librosylibros')

<!-- Define el titulo de la Página -->    
@section('title')
Gestión de usuarios Libros & Libros
@stop


@section('cabecera')
 @parent

@stop

@section('contenido')

<div class="container-fluid">

<div class="container-fluid">
<a href="/crear-colegio/{{$ident->id}}"  class="btn btn-primary pull-right btn-lg"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Crear Colegio</a>
</div>

	<table class="table table-hover">
		<thead>
			<tr>
				<th>Código</th>
				<th>Colegio</th>
				<th>Ciudad</th>
				<th>Dirección</th>
				<th>Tareas</th>
			</tr>
		</thead>
		<tbody>
		@foreach($colegios as $colegio)
			<tr>
			
			    <td>{{$colegio->codigo}}</td>
				<td>{{$colegio->nombre}}</td>
				<td>{{$colegio->n_ciudad}}</td>
				<td>{{$colegio->domicilio}}</td>
				<td>
					<a href="/colegio-poblacion/{{$colegio->id}}" type="button" class="btn btn-info btn-lg">Mercadeo</a>
					<a href="/crear-producto/{{$colegio->id}}"><button type="button" class="btn btn-danger btn-lg">Producto</button></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>

</div>

@stop