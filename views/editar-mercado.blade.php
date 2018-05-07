@extends ('adminsite.auditor')

<!-- Define el titulo de la Página -->    
@section('title')
Gestión de usuarios Libros & Libros
@stop


@section('cabecera')
 @parent
@stop

@section('contenido')

<script type="text/javascript">
function sumar(c){
var subtotal = 0;
campo = c.form;
  if(!/^\d*$/.test(c.value)) return;

      for (var i = 0; i < campo.length-1; i++) {
          if (!/^\d+$/.test(campo[i].value)) continue;
              subtotal += parseInt(campo[i].value);
      }
document.getElementById('res').value = subtotal;
}
</script>




<div class="container-fluid">






  <div class="container">
          <!-- Datatables Content -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Población</strong> escolar año</h2>
                            </div>
                            <p>Texto introducción</p>
                          <div class="row">
                            

{{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('update-mercado',$datos->id))) }}
<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
Pre-Jardin:
<input type="text" class="form-control" name="sum1" value="{{$datos->prejardin}}" onkeyup="sumar(this);" />
</div>

<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
Jardin:
<input type="text" class="form-control" name="sum2" value="{{$datos->jardin}}" onkeyup="sumar(this);" />
</div>

<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
Transicion:
<input type="text" class="form-control" name="sum3" value="{{$datos->transicion}}" onkeyup="sumar(this);" />
</div>

<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
Primero:
<input type="text" class="form-control" name="sum4" value="{{$datos->primero}}" onkeyup="sumar(this);" />
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
Segundo:
<input type="text" class="form-control" name="sum5" value="{{$datos->segundo}}" onkeyup="sumar(this);" />
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
Tercero:
<input type="text" class="form-control" name="sum6" value="{{$datos->tercero}}" onkeyup="sumar(this);" />
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
Cuarto:
<input type="text" class="form-control" name="sum7" value="{{$datos->cuarto}}" onkeyup="sumar(this);" />
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
Quinto:
<input type="text" class="form-control" name="sum8" value="{{$datos->quinto}}" onkeyup="sumar(this);" />
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
Sexto:
<input type="text" class="form-control" name="sum9" value="{{$datos->sexto}}" onkeyup="sumar(this);" />
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
Septimo:
<input type="text" class="form-control" name="sum10" value="{{$datos->septimo}}" onkeyup="sumar(this);" />
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
Octavo:
<input type="text" class="form-control" name="sum11" value="{{$datos->octavo}}" onkeyup="sumar(this);" />
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
Noveno:
<input type="text" class="form-control" name="sum12" value="{{$datos->noveno}}" onkeyup="sumar(this);" />
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
Decimo:
<input type="text" class="form-control" name="sum13" value="{{$datos->decimo}}" onkeyup="sumar(this);" />
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
Once:
<input type="text" class="form-control" name="sum14" value="{{$datos->once}}" onkeyup="sumar(this);" />
</div>

 {{Form::hidden('colegio_id', $datos->colegio_id, array('class' => 'form-control','placeholder'=>''))}}
 <input type="hidden" class="form-control" name="_token" value="{{ csrf_token() }}">
<div class="container">
<button type="submit" class="btn btn-primary">Registrar población</button>
</div>
<input type="hidden" id="res" name="res" value="{{$datos->total}}"/>


    {{ Form::close() }}
                          </div>

                            
                        </div>
  </div>







</div>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
@stop




