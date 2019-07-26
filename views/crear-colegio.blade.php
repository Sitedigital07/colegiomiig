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


<div class="content-header">
                            <ul class="nav-horizontal text-center">
                                <li>
                                    <a href="/lista-colegios"><i class="fa fa-building"></i> Colegios</a>
                                </li>
                                <li class="active">
                                    <a href="/crear-colegio"><i class="fa fa-plus-circle"></i> Crear colegio</a>
                                </li>
                            </ul>
                        </div>

	
<div class="container">
  

 <div class="block">
                                    <!-- Normal Form Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">No Borders</a>
                                        </div>
                                        <h2><strong>Normal</strong> Form</h2>
                                    </div>
                                    <!-- END Normal Form Title -->

                                    <!-- Normal Form Content -->
                                    {{ Form::open(array('method' => 'POST', 'id' => 'defaultForm', 'url' => array('/crearcolegio'))) }}
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group col-lg-6">
                                            <label for="example-nf-email">Nombre colegio</label>
                                            {{Form::text('nombre', '', array('class' => 'form-control','placeholder'=>''))}}
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Codigo MIIG</label>
                                            {{Form::text('codigo', '', array('class' => 'form-control','placeholder'=>'','style'=>'text-transform:uppercase'))}}
                                        </div>
                                    </div>
                                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                         <div class="form-group col-lg-6">
                                            <label for="example-nf-email">Jornada</label>
                                            {{ Form::select('jornada', ['' => '-- Seleccione jornada --',
                                            'Diurna' => 'Diurna',
                                            'Tarde' => 'Tarde',
                                            'Dual' => 'Dual',
                                            'Unica' => 'Unica'], null, array('class' => 'form-control')) }}    
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Razón social</label>
                                            {{Form::text('r_social', '', array('class' => 'form-control','placeholder'=>''))}}
                                        </div>
                                       </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                         <div class="form-group col-lg-6">
                                            <label for="example-nf-email">Número NIT</label>
                                            {{Form::text('nit', '', array('class' => 'form-control','placeholder'=>''))}}
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Tipo Adopción</label>
                                            {{Form::label('adopcion', 'Adopción' )}}
                                            {{ Form::select('adopcion', ['' => 'Seleccione Adopción',
                                            '1' => 'Completo',
                                            '2' => 'Especial'], null, array('class' => 'form-control')) }}
                                        </div>
                                      </div>
                                        
                                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                         <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Regional</label>
                                            <select class="form-control" name="category" id="category">
                                             <option value="" disabled selected>Seleccione región</option>
                                             @foreach($categories as $category)
                                              <option value="{{$category->id}}">{{$category->region}}</option>
                                             @endforeach
                                            </select>
                                        </div>

                                         <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Agencia</label>
                                            <select class="form-control selector" name="subcategory" id="subcategory">
                                             <option value="1"></option>
                                            </select> 
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                         <div class="form-group col-lg-12">
                                            <label for="example-nf-password">Representante</label>
                                            <select class="form-control" name="representante" id="representante">
                                             <option value="" disabled selected>Seleccione Represente</option>
                                             <option value=""></option>
                                            </select> 
                                        </div>
                                      </div>
                                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Persona contacto</label>
                                             {{Form::text('contacto', '', array('class' => 'form-control','placeholder'=>''))}}
                                        </div>

                                         <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Cargo</label>
                                            {{Form::text('cargo', '', array('class' => 'form-control','placeholder'=>''))}}
                                        </div>
                                      </div>          
                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group col-lg-12">
                                            <label for="example-nf-password">Representante legal</label>
                                            {{Form::text('representante_le', '', array('class' => 'form-control','placeholder'=>''))}}
                                        </div>
                                      </div>

                                         <div class="form-group col-lg-12">
                                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
                                            <b>Definición adopcion</b><br>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
                                              <input type="checkbox" name="junta_d" value="1"> Junta Directiva<br>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
                                             <input type="checkbox" name="rector" value="1"> Rector<br>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
                                             <input type="checkbox" name="coordinador" value="1"> Coordinador<br>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
                                             <input type="checkbox" name="docente" value="1"> Docente<br>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
                                              <input type="checkbox" name="propietario" value="1"> Dueño<br>
                                            </div>
                                        </div>
                                       
                                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                         </br>
                                         <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Dirección de domicilio</label>
                                            {{Form::text('domicilio', '', array('class' => 'form-control','placeholder'=>''))}}
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Email contacto</label>
                                            {{Form::text('email', '', array('class' => 'form-control','placeholder'=>''))}}
                                        </div>
                                      </div>

                                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                         <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Teléfono contacto</label>
                                            {{Form::text('telefono', '',array('class' => 'form-control','placeholder'=>''))}}
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Teléfono oficina</label>
                                            {{Form::text('telefono_ofc', '',array('class' => 'form-control','placeholder'=>''))}}
                                        </div>
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                            <b>Define</b><br>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                             <input type="checkbox" name="producto" value="1"> Producto<br>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-2 col-lg-3">
                                             <input type="checkbox" name="relacion" value="1"> Relación<br>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-2 col-lg-3">
                                             <input type="checkbox" name="esseg" value="1"> ESSEG<br>
                                            </div><br><br>
                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                             <b>Canales de Distribución</b><br>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                             <input type="checkbox" name="venta_d" value="1"> Venta Directa<br>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-2 col-lg-3">
                                             <input type="checkbox" name="interme" value="1"> Codificados<br>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-2 col-lg-3">
                                             <input type="checkbox" name="c_aliados" value="1"> Clientes Aliados<br>
                                            </div>
                                        </div>

                                        <div class="form-group form-actions">
                                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Crear Colegio</button>
                                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                        </div>
                                       {{ Form::close() }}
                                    <!-- END Normal Form Content -->
                                </div>
                                <!-- END Normal Form Block -->

</div>



















 <script type="text/javascript">
     
      $('#category').on('change',function(e){
        console.log(e);

        var cat_id = e.target.value;

        $.get('/memo/ajax-subcat?cat_id=' + cat_id, function(data){
            $('#subcategory').empty();
            $.each(data, function(index, subcatObj){
              $('#subcategory').append('<option value="" style="display:none"></option>','<option value="'+subcatObj.ids+'">'+subcatObj.n_ciudad+'</option>' );

 $("#subcategory option[value='1']").attr("selected",true);
            });
        });
      });
   </script>   






 <script type="text/javascript">
     
      $('#category').on('change',function(e){
        console.log(e);

        var cat_id = e.target.value;

        $.get('/memo/ajax-subcat?cat_id=' + cat_id, function(data){
            $('#subcategorya').empty();
            $.each(data, function(index, subcatObj){
              $('#subcategorya').append('<option value="'+subcatObj.n_ciudad+'">'+subcatObj.n_ciudad+'</option>');
            });
        });
      });
   </script>   

   <script type="text/javascript">
     
      $('#subcategory').on('change',function(e){
        console.log(e);

        var cat_id = e.target.value;

        $.get('/mema/ajax-subcat?cat_id=' + cat_id, function(data){
            $('#representante').empty();
            $.each(data, function(index, subcatObj){
              $('#representante').append('<option value="'+subcatObj.id+'">'+subcatObj.name+' '+subcatObj.last_name+'</option>');
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
     
             nombre: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo colegio es requerido'
                    },
                    stringLength: {
                        min: 2,
                        max: 200,
                        message: 'El campo colegio debe contener un minimo de 2 y un maximo de 200 Caracteres'
                    },
                    regexp: {
                        regexp: /^[- a-zA-Z0-9_\.ñáéíóú]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },


   codigo: {
                validators: {
                    notEmpty: {
                        message: 'El campo código MIIG es requerido'
                    },
                     regexp: {
                        regexp: /^[-a-zA-Z0-9ñ_\.]+$/,
                        message: 'No son validos los datos ingresados'
                    },
                    stringLength: {
                        min: 2,
                        max: 20,
                        message: 'El campo código MIIG debe contener un minimo de 2 y un maximo de 20 Caracteres'
                    },
                    remote: {
                        type: 'GET',
                        url: '/validacioncodigo',
                        message: 'Este código MIIG ya se encuentra registrado',
                        delay: 10
                    }
                }
            },

  jornada: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo jornada es requerido'
                    },
                    
                    regexp: {
                        regexp: /^[- a-zA-Z0-9ñ_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },

  r_social: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo razón social es requerido'
                    },
                    stringLength: {
                        min: 2,
                        max: 200,
                        message: 'El campo razón social debe contener un minimo de 2 y un maximo de 200 Caracteres'
                    },
                    regexp: {
                        regexp: /^[- a-zA-Z0-ñ9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },


      adopcion: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo dirigido es requerido'
                    },
                    
                    regexp: {
                        regexp: /^[- a-zA-Z0-9ñ_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },

              category: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo jornada es requerido'
                    },
                    
                    regexp: {
                        regexp: /^[- a-zA-Z0-9ñ_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },

              subcategory: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo jornada es requerido'
                    },
                    
                    regexp: {
                        regexp: /^[- a-zA-Z0-9ñ_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
              representante: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo jornada es requerido'
                    },
                    
                    regexp: {
                        regexp: /^[- a-zA-Z0-9ñ_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
      password: {
                validators: {
                    notEmpty: {
                        message: 'El campo contraseña es requerido'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'La contraseña y su confirmación no son los mismos'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'El campo confirmar contraseña es requerido'
                    },
                    identical: {
                        field: 'password',
                        message: 'La contraseña y su confirmación no son los mismos'
                    }
                }
            },   

                level: {
                validators: {
                    notEmpty: {
                        message: 'El campo rol es requerido'
                    },
                   
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
