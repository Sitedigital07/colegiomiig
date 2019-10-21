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
                                    <a href="/colegios-region"><i class="fa fa-building"></i> Colegios</a>
                                </li>
                                 <li class="active">
                                    <a href="/filtro-representante"><i class="fa fa-laptop"></i> Informe Colegios</a>
                                </li>
          
   
                            </ul>
                        </div>


<div class="container">
  <div class="row">
                            <div class="col-md-12">
                                <!-- Basic Form Elements Block -->
                                <div class="block">
                                    <!-- Basic Form Elements Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">No Borders</a>
                                        </div>
                                        <h2><strong>Informe</strong> Facturación</h2>
                                    </div>
                                    <!-- END Form Elements Title -->
                                    
                                    <!-- Basic Form Elements Content -->
                                     {{ Form::open(array('method' => 'GET','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/informe/representantes'))) }}
            

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-email-input">Seleccione año</label>
                                            <div class="col-md-9">
                                             <select name="ano" class="form-control" required>
                                              <option value="" selected>Seleccione año</option>
                                              <option value="2016">2016</option>
                                              <option value="2017">2017</option>
                                              <option value="2018">2018</option>
                                              <option value="2019">2019</option>
                                              <option value="2020">2020</option>
                                              <option value="2021">2021</option>
                                              <option value="2022">2022</option>
                                              <option value="2023">2023</option>
                                              <option value="2024">2024</option>
                                              <option value="2025">2025</option>
                                              <option value="2026">2026</option>
                                              <option value="2027">2027</option>
                                             </select>
                                            </div>
                                        </div>

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                            </div>
                                        </div>
                                    {{ Form::close() }}
                                
                                </div>
                                <!-- END Basic Form Elements Block -->
                            </div>
                          </div>
                          
</div>



  
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
@stop