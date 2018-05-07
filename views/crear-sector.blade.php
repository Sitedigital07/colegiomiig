


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
                                        <h2><strong>Editar</strong> sector</h2>
                                    </div>
                                    <!-- END Form Elements Title -->

                                    <!-- Basic Form Elements Content -->
                                    {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearsector'))) }}
                                       
                                      
                                         <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Region</label>
                                            <div class="col-md-9">
                                               {{Form::text('region', '', array('class' => 'form-control','placeholder'=>''))}}
                                            </div>
                                        </div>
                                       
                                          <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-select">Representante</label>
                                            <div class="col-md-9">
                                               <select id="example-select" name="representante" class="form-control">
                                                    <option value="" disabled selected>Seleccione representante</option>
                                                     @foreach($users as $users)
                                                      @if($users->rol_id == 4)
                                                      <option value="{{$users->id}}">{{$users->name}} {{$users->last_name}}</option>
                                                      @endif
                                                     @endforeach
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
                                </div>
                              </div>

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
     
             region: {
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
