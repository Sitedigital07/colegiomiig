@extends ('adminsite.asistente')



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
                                    <a href="/asistente"><i class="gi gi-charts"></i> Dashboard</a>
                                </li>
                                <li class="active">
                                    <a href="/asistente-representantes"><i class="gi gi-charts"></i> Representantes</a>
                                </li>
                                <li>
                                    <a href="/colegios-region"><i class="fa fa-home"></i> Colegios</a>
                                </li>
                                 <li>
                                    <a href="/asistente-ciudades"><i class="fa fa-home"></i> Ciudades</a>
                                </li>
                            </ul>
                        </div>




    <div class="container">
          <!-- Datatables Content -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Ciudades</strong> registrados</h2>
                            </div>
                            <div class="row">
                                
                      
                            @foreach($ciudades as $ciudades)
                       
                            <div class="col-sm-12 col-lg-3">
                                <a href="/colegios-region" class="widget widget-hover-effect1 themed-background">
                                    <div class="widget-simple">
                                        <img src="/adminsite/img/placeholders/avatars/avatar.jpg" alt="avatar" class="widget-image img-circle pull-left">
                                        <h4 class="widget-content widget-content-light">
                                            <strong>{{$ciudades->n_ciudad}}</strong>
                                            <small>Web Designer</small>
                                        </h4>
                                    </div>
                                </a>
                            </div>
                     
                            @endforeach
                            </div>
                        </div>
  </div>




  
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

@stop