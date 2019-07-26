@extends ('adminsite.asistente')

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
                                    
                                        <h2><strong>Editar</strong> descuento</h2>
                                    </div>
                                    <!-- END Form Elements Title -->
                                    @foreach($descuentos as $descuentos)
                                    
                                    <!-- Basic Form Elements Content -->
                                    @if(Auth::user()->rol_id == 3)
                                    {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/editardescuentoaud',$descuentos->id))) }}
                                    @elseif(Auth::user()->rol_id == 4)
                                    {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/editardescuentoreg',$descuentos->id))) }}
                                    @else
                                    {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/editardescuento',$descuentos->id))) }}
                                    @endif 
                                     
                                     @if(Auth::user()->rol_id == 3)
                                      <div class="form-group">
                                       <label class="col-md-3 control-label" for="example-text-input">Descuento:</label>
                                       <div class="col-md-9">
                                       <input type="number" name="descuento" class="form-control" id="" value="{{$descuentos->descuento}}" placeholder="Ingrese descuento" max="30">
                                       </div>
                                      </div>
                                      @elseif(Auth::user()->rol_id == 4)
                                      <div class="form-group">
                                       <label class="col-md-3 control-label" for="example-text-input">Descuento:</label>
                                       <div class="col-md-9">
                                       <input type="number" name="descuento" class="form-control" id="" value="{{$descuentos->descuento}}" placeholder="Ingrese descuento" max="25">
                                       </div>
                                      </div>
                                      @else
                                      <div class="form-group">
                                       <label class="col-md-3 control-label" for="example-text-input">Descuento:</label>
                                       <div class="col-md-9">
                                       <input type="number" name="descuento" class="form-control" id="" value="{{$descuentos->descuento}}" placeholder="Ingrese descuento" max="22">
                                       </div>
                                      </div>
                                      @endif
                                       
                                      <input type="hidden" name="colegio_id" id="input" class="form-control" value="{{$descuentos->colegio_id}}" required="required" pattern="" title="">
                                      <input type="hidden" name="rol_id" id="input" class="form-control" value="{{Auth::user()->name}} {{Auth::user()->last_name}}" required="required" pattern="" title="">
                                      <input type="hidden" name="ano" id="input" class="form-control" value="{{$descuentos->ano}}" required="required" pattern="" title="">

                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                     
                                      

                                        <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Editar descuento</button>
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

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

@stop