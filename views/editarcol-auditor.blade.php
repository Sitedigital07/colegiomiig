@extends ('adminsite.asistente')



<!-- Define el titulo de la Página -->    
@section('title')
Gestión de usuarios Libros & Libros
@stop


@section('cabecera')
 @parent
@stop

@section('contenido')




<div class="container">
  

 <div class="block">
                                    <!-- Normal Form Title -->
                                    <div class="block-title">
                                     
                                        <h2><strong>Editar</strong> Colegio</h2>
                                    </div>
                                    <!-- END Normal Form Title -->

                                    <!-- Normal Form Content -->
                                    {{ Form::open(array('method' => 'POST', 'id' => 'defaultForm', 'url' => array('/update-colegiojr',$colegios->id))) }}
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group col-lg-6">
                                            <label for="example-nf-email">Nombre colegio</label>
                                            {{Form::text('nombre', $colegios->nombres, array('class' => 'form-control','placeholder'=>'', 'readonly'=>'readonly'))}}
                                        </div>
                                        <div class="form-group col-lg-6 ">
                                            <label for="example-nf-password">Código DANE</label>
                                            {{Form::text('codigo', $colegios->codigo, array('class' => 'form-control','placeholder'=>'', 'readonly'=>'readonly'))}}
                                        </div>
                                    </div>

                                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                         <div class="form-group col-lg-6">
                                            <label for="example-nf-email">Jornada</label>
                                              {{ Form::select('jornada', [$colegios->jornada => $colegios->jornada,
                                              'Diurna' => 'Diurna',
                                              'Tarde' => 'Tarde',
                                              'Unica' => 'Unica'], null, array('class' => 'form-control', 'readonly'=>'readonly')) }}
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Razón social</label>
                                            {{Form::text('r_social', $colegios->r_social, array('class' => 'form-control','placeholder'=>'', 'readonly'=>'readonly'))}}
                                        </div>
                                       </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                         <div class="form-group col-lg-6">
                                            <label for="example-nf-email">Número NIT</label>
                                            {{Form::text('nit', $colegios->nit, array('class' => 'form-control','placeholder'=>'', 'readonly'=>'readonly'))}}
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Tipo de Portafolio</label>
                                             {{ Form::select('adopcion', [$colegios->adopcion => $colegios->adopcion,
                                             '1' => 'Completa',
                                             '2' => 'Limitada'], null, array('class' => 'form-control', 'readonly'=>'readonly')) }}
                                        </div>
                                      </div>
                                         <div class="form-group col-lg-12 hidden-xs hidden-sm hidden-md hidden-lg">
                                            
                                             <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      @if($colegios->mt == 1)
       <input type="checkbox" name="mt" value="1" checked> <b>MT</b> - Matematicas<br>
       @else
       <input type="checkbox" name="mt" value=""> <b>MT</b> - Matematicas<br>
       @endif
       </div>
       <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
       @if($colegios->es == 1)
       <input type="checkbox" name="es" value="1" checked> <b>ES</b> - Español<br>
       @else
       <input type="checkbox" name="es" value=""> <b>ES</b> - Español<br>
       @endif
       </div>
       <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
       @if($colegios->sc == 1)
       <input type="checkbox" name="sc" value="1" checked> <b>CS</b> - Sociales<br>
       @else
       <input type="checkbox" name="sc" value=""> <b>CS</b> - Sociales<br>
       @endif
       </div>
       <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
       @if($colegios->cl == 1)
       <input type="checkbox" name="cl" value="1" checked> <b>CL</b> - Compresión Lectora<br>
       @else
       <input type="checkbox" name="cl" value=""> <b>CL</b> - Compresión Lectora<br>
       @endif
       </div><br><br>
       <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        @if($colegios->ig == 1)
       <input type="checkbox" name="ig" value="1" checked> <b>IG</b> - Interes General<br>
       @else
        <input type="checkbox" name="ig" value=""> <b>IG</b> - Interes General<br>
        @endif
       </div>
       <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
       @if($colegios->art == 1)
       <input type="checkbox" name="art" value="1" checked> <b>ART</b> - Artistica<br>
       @else
       <input type="checkbox" name="art" value=""> <b>ART</b> - Artistica<br>
       @endif
       </div>
       <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
       @if($colegios->ing == 1)
       <input type="checkbox" name="ing" value="1" checked> <b>ING</b> - Ingles<br>
       @else
       <input type="checkbox" name="ing" value=""> <b>ING</b> - Ingles<br>
       @endif
       </div>
                                        </div>
                                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-xs hidden-sm hidden-md hidden-lg">
                                         <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Regional</label>
                                            <select class="form-control" name="category" id="category">
                                             <option value="{{$colegios->region_id}}">{{$colegios->region_id}}</option>
                                             @foreach($regiones as $regiones)  
                                              <option value="{{$regiones->id}}">{{$regiones->region}}</option>
                                             @endforeach
                                            </select>
                                        </div>

                                         <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Agencia</label>
                                            <select class="form-control selector" name="subcategory" id="subcategory">
                                              <option value="{{$colegios->ciudad_id}}">{{$colegios->ciudad_id}}</option>
                                              @foreach($ciudades as $ciudades)
                                               <option value="{{$ciudades->id}}">{{$ciudades->n_ciudad}}</option>
                                              @endforeach
                                              <option value="1"></option>
                                            </select> 
                                        </div>
                                      </div>


                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-xs hidden-sm hidden-md hidden-lg">
                                         <div class="form-group col-lg-12">
                                            <label for="example-nf-password">Representante</label>
                                            <select class="form-control" name="representante" id="representante">
                                             <option value="{{$colegios->representante_id}}">{{$colegios->representante_id}}</option>
                                                @foreach($representantes as $representantes)
                                               <option value="{{$representantes->representante_id}}">{{$representantes->nombre}}</option>
                                                @endforeach
                                             <option value=""></option>
                                            </select> 
                                        </div>
                                      </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
      <br>     
<hr style="border:1px solid #27ae60" width="100%" size="10"/>
<li class="text-primary"><strong>DATOS GENERALES</strong></li>

 <hr style="border:1px solid #27ae60" width="100%" size="10"/>
       </div>      

                                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Persona contacto</label>
                                             {{Form::text('contacto', $colegios->contacto, array('class' => 'form-control','placeholder'=>''))}}
                                        </div>

                                         <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Cargo</label>
                                            {{Form::text('cargo', $colegios->cargo, array('class' => 'form-control','placeholder'=>''))}}
                                        </div>
                                      </div>          
                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group col-lg-12">
                                            <label for="example-nf-password">Representante legal</label>
                                            {{Form::text('representante_le', $colegios->representante, array('class' => 'form-control','placeholder'=>''))}}
                                        </div>
                                      </div>

     <br>
   
                                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                         <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Dirección de domicilio</label>
                                            {{Form::text('domicilio', $colegios->domicilio, array('class' => 'form-control','placeholder'=>''))}}
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Email contacto</label>
                                            {{Form::text('email', $colegios->emailcol, array('class' => 'form-control','placeholder'=>''))}}
                                        </div>
                                      </div>

                                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                         <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Teléfono contacto</label>
                                            {{Form::text('telefono', $colegios->telefono,array('class' => 'form-control','placeholder'=>''))}}
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Teléfono oficina</label>
                                            {{Form::text('telefono_ofc', $colegios->telefono_ofc ,array('class' => 'form-control','placeholder'=>''))}}
                                        </div>
                                        </div>

                                        <div class="form-group col-lg-12">

                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                            <b>Define</b><br>
                                            </div>
                                         <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      @if($colegios->producto == 1)
       <input type="checkbox" name="producto" value="1" checked> Producto<br>
       @else
       <input type="checkbox" name="producto" value=""> Producto<br>
       @endif
       </div>
       <div class="col-xs-3 col-sm-3 col-md-2 col-lg-3">
        @if($colegios->relacion == 1)
       <input type="checkbox" name="relacion" value="1" checked> Relación<br>
       @else
       <input type="checkbox" name="relacion" value=""> Relación<br>
       @endif
       </div>
       <div class="col-xs-3 col-sm-3 col-md-2 col-lg-3">
       @if($colegios->esseg == 1)
       <input type="checkbox" name="esseg" value="1" checked> ESSEG<br>
       @else
       <input type="checkbox" name="esseg" value=""> ESSEG<br>
       @endif
       </div><br><br>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
       <b>Canales de Distribución</b><br>
       </div>
       <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
       @if($colegios->venta_d == 1)
       <input type="checkbox" name="venta_d" value="1" checked> Venta Directa<br>
       @else
        <input type="checkbox" name="venta_d" value=""> Venta Directa<br>
       @endif
       </div>
       <div class="col-xs-3 col-sm-3 col-md-2 col-lg-3">
       @if($colegios->interme == 1)
       <input type="checkbox" name="interme" value="1" checked> Intermediarios<br>
       @else
       <input type="checkbox" name="interme" value=""> Intermediarios<br>
       @endif
       </div>
       <div class="col-xs-3 col-sm-3 col-md-2 col-lg-3">
       @if($colegios->c_aliados == 1)
       <input type="checkbox" name="c_aliados" value="1" checked> Clientes Aliados<br>
       @else
        <input type="checkbox" name="c_aliados" value=""> Clientes Aliados<br>
       @endif

       </div>

                                        </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
      <br><br> 
      <hr style="border:1px solid #27ae60" width="100%" size="10"/>        
<li class="text-primary"><strong>DATOS DE QUIEN DEFINE</strong></li>
<hr style="border:1px solid #27ae60" width="100%" size="10"/>
       </div>      


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
                                            <b>Definición adopcion</b><br>
                                            </div>
                                     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
      @if($colegios->junta_d == 1)
       <input type="checkbox" name="junta_d" value="1" checked> Junta Directiva<br>
       @else
       <input type="checkbox" name="junta_d" value=""> Junta Directiva<br>
       @endif
       </div>
       <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
       @if($colegios->rector == 1)
       <input type="checkbox" name="rector" value="1" checked> Rector<br>
       @else
        <input type="checkbox" name="rector" value=""> Rector<br>
       @endif
       </div>
       <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
       @if($colegios->coordinador == 1)
       <input type="checkbox" name="coordinador" value="1" checked> Coordinador<br>
       @else
       <input type="checkbox" name="coordinador" value=""> Coordinador<br>
       @endif
       </div>
       <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
       @if($colegios->docente == 1)
       <input type="checkbox" name="docente" value="1" checked> Docente<br>
       @else
       <input type="checkbox" name="docente" value=""> Docente<br>
       @endif
       </div>
       <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
       @if($colegios->propietario == 1)
       <input type="checkbox" name="propietario" value="1" checked> Dueño<br>
       @else
        <input type="checkbox" name="propietario" value=""> Dueño<br>
       @endif
       </div>
     </div>
<br><br><br>

       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Nombres</label>
                                             {{Form::text('nombredefine', $colegios->nombredefine, array('class' => 'form-control','placeholder'=>''))}}
                                        </div>

                                         <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Apellidos</label>
                                            {{Form::text('apellidodefine', $colegios->apellidodefine, array('class' => 'form-control','placeholder'=>''))}}
                                        </div>
                                      </div> 

         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Email de contacto</label>
                                             {{Form::text('emaildefine', $colegios->emaildefine, array('class' => 'form-control','placeholder'=>''))}}
                                        </div>

                                         <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Dirección</label>
                                            {{Form::text('direcciondefine', $colegios->direcciondefine, array('class' => 'form-control','placeholder'=>''))}}
                                        </div>
                                      </div>
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Teléfono celular</label>
                                             {{Form::text('telefonoceldefine', $colegios->telefonoceldefine, array('class' => 'form-control','placeholder'=>''))}}
                                        </div>

                                         <div class="form-group col-lg-6">
                                            <label for="example-nf-password">Teléfono oficina</label>
                                            {{Form::text('telefonodefine', $colegios->telefonodefine, array('class' => 'form-control','placeholder'=>''))}}
                                        </div>
                                      </div> 

                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                
                                        <div class="form-group col-lg-12">
                                            <label for="example-nf-password">Observaciones</label>
                                            {{Form::textarea('nota', $colegios->nota, array('class' => 'form-control','placeholder'=>''))}}
                                        </div> 
                                         </div>
                                        

                         
       <input type="hidden" name="auditor" value="{{Auth::user()->id}}">

                                        <div class="form-group form-actions">
                                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-user"></i> Editar Datos</button>
                                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Limpiar Datos</button>
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
              $('#subcategory').append('<option value="'+subcatObj.ids+'">'+subcatObj.n_ciudad+'</option>' );

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
              $('#representante').append('<option value="'+subcatObj.id+'">'+subcatObj.nombre+'</option>');
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
                        regexp: /^[- a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },


   codigo: {
                validators: {
                    notEmpty: {
                        message: 'El campo código MIIG es requerido'
                    },
                    stringLength: {
                        min: 2,
                        max: 20,
                        message: 'El campo código MIIG debe contener un minimo de 2 y un maximo de 20 Caracteres'
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
                        regexp: /^[- a-zA-Z0-9_\.]+$/,
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
                        regexp: /^[- a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },

    nit: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo NIT es requerido'
                    },
                    stringLength: {
                        min: 2,
                        max: 150,
                        message: 'El campo nit debe contener un minimo de 2 y un maximo de 15 Caracteres'
                    },
                    regexp: {
                        regexp: /^[- 0-9_\.]+$/,
                        message: 'El campo nit solo admite caracteres numericos'
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
                        regexp: /^[- a-zA-Z0-9_\.]+$/,
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
                        regexp: /^[- a-zA-Z0-9_\.]+$/,
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
                        regexp: /^[- a-zA-Z0-9_\.]+$/,
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
                        regexp: /^[- a-zA-Z0-9_\.]+$/,
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


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

@stop
