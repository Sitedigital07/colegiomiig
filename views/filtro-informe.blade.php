@extends ('adminsite.representante')

<!-- Define el titulo de la Página -->    
@section('title')
Gestión de usuarios Libros & Libros
@stop


@section('cabecera')
 @parent
  <link rel="stylesheet" href="/validaciones/dist/css/bootstrapValidator.css"/>
    <script type="text/javascript" src="/validaciones/vendor/jquery/jquery.min.js"></script>

    <script type="text/javascript" src="/validaciones/dist/js/bootstrapValidator.js"></script>
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
                                    <a href="/filtro-gerentesnac"><i class="gi gi-file"></i> Informe Gerentes</a>
                                </li>

                                 <li class="active">
                                    <a href="/informe/gerentes-matriz"><i class="gi gi-file"></i> Matriz</a>
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
                                        <h2><strong>Informe</strong> Matriz</h2>
                                    </div>
                                    <!-- END Form Elements Title -->
                                    
                                    <!-- Basic Form Elements Content -->
                                     {{ Form::open(array('method' => 'GET','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/informe/representantesplata'))) }}


                                  
                                       
                                       <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Ciudades</label>
                                            <div class="col-md-9">
                                             <select class="selectpicker col-xs-12 col-sm-12 col-md-12 col-lg-12 form-control input-small" data-show-subtext="true" data-live-search="true" name="ciudad" id="ciudad" required>
                                              <option value="" selected disabled hidden>Seleccione ciudad</option>
                                               @foreach($ciudades as $ciudades)
                                              <option value="{{$ciudades->ids}}">{{$ciudades->n_ciudad}}</option>
                                               @endforeach
                                              </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Representante</label>
                                            <div class="col-md-9">
                                             <select class="selectpicker col-xs-12 col-sm-12 col-md-12 col-lg-12 form-control input-small" data-show-subtext="true" data-live-search="true" name="representante" id="representante" required>
                                              <option value="" disabled selected>Seleccione Represente</option>
                                             <option value=""></option>
                                              </select>
                                            </div>
                                        </div>
                                    

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


                                     

  

   <script type="text/javascript">
     
      $('#ciudad').on('change',function(e){
        console.log(e);

        var cat_id = e.target.value;

        $.get('/mema/ajax-subcatder?cat_id=' + cat_id, function(data){
            $('#representante').empty();
            $.each(data, function(index, subcatObj){
              $('#representante').append('<option value="'+subcatObj.id+'">'+subcatObj.name+' '+subcatObj.last_name+'</option>');
            });
        });
      });
   </script>   

  
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
@stop