@extends ('adminsite.presentacion')

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




  <div class="container">
                                <!-- Basic Form Elements Block -->
                                <div class="block">
                                    <!-- Basic Form Elements Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">No Borders</a>
                                        </div>
                                        <h2><strong>Editar</strong> ciudad</h2>
                                    </div>
                                    <!-- END Form Elements Title -->
                                    @foreach($ciudades as $ciudades)
                                    
                                    <!-- Basic Form Elements Content -->
                                    {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/editarciudad',$ciudades->ids))) }}
                                       
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Ciudad</label>
                                            <div class="col-md-9">
                                                {{Form::text('ciudad', $ciudades->n_ciudad, array('class' => 'form-control','placeholder'=>''))}}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-select">Región</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="regional" data-live-search="true" id="regional">
                                                   
                                                    <option value="{{$ciudades->region_id}}">{{$ciudades->region}}</option>
                                                        @foreach($region as $region)
                                                      <option value="{{$region->id}}">{{$region->region}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>

                                           <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-select">Asistente</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="asistente" data-live-search="true" id="asistente">
                                               
                                                    <option value="{{$ciudades->asistente}}">{{$ciudades->name}}</option>
                                                      <option value=""></option>
                                                 
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
                                    <!-- END Basic Form Elements Content -->
                                    @endforeach
                                </div>
                              </div>


  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

 <script type="text/javascript">
     
      $('#regional').on('change',function(e){
        console.log(e);

        var cat_id = e.target.value;

        $.get('/memar/ajax-subcater?cat_id=' + cat_id, function(data){
            $('#asistente').empty();
            $.each(data, function(index, subcatObj){
              $('#asistente').append('<option value="'+subcatObj.id+'">'+subcatObj.name' '+subcatObj.last_name+'</option>');
            });
        });
      });
   </script>  

<script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
     
             ciudad: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo dirigido es requerido'
                    }
                   
                }
            },
   
    
        }
    });
  $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });

});

</script>


@stop