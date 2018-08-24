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


<script type="text/javascript">
function sumaro(c){
var subtotal = 0;
campo = c.form;
  if(!/^\d*$/.test(c.value)) return;

      for (var i = 0; i < campo.length-1; i++) {
          if (!/^\d+$/.test(campo[i].value)) continue;
              subtotal += parseInt(campo[i].value);
      }
document.getElementById('reso').value = subtotal;
}
</script>
<br><br>

<div class="container-fluid">
@foreach($ano as $ano)

@endforeach

@if (DB::table('datos')->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
   Ya existe un mercado pra este colegio y año

@else()


  <div class="container">
          <!-- Datatables Content -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Población</strong> escolar año</h2>
                            </div>
                            <p>Texto introducción</p>
                          <div class="row">
                               <form name="a" action="/poblaciones" method="post" id="form">

<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Pre-Jardin:
<input type="number" class="form-control" name="sum1" value="0" onkeyup="sumar(this);" required/>
</div>
<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Pre-Jardin activa:
<input type="number" class="form-control" name="sum1a" value="0" onkeyup="sumar(this);" required/>
</div>

<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Jardin:
<input type="number" class="form-control" name="sum2" value="0" onkeyup="sumar(this);" required/>
</div>
<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Jardin activa:
<input type="number" class="form-control" name="sum2a" value="0" onkeyup="sumar(this);" required/>
</div>

<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Transicion:
<input type="number" class="form-control" name="sum3" value="0" onkeyup="sumar(this);" required/>
</div>

<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Transicion activa:
<input type="number" class="form-control" name="sum3a" value="0" onkeyup="sumar(this);" required/>
</div>

<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Primero:
<input type="number" class="form-control" name="sum4" value="0" onkeyup="sumar(this);" required/>
</div>

<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Primero activa:
<input type="number" class="form-control" name="sum4a" value="0" onkeyup="sumar(this);" required/>
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Segundo:
<input type="number" class="form-control" name="sum5" value="0" onkeyup="sumar(this);" required/>
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Segundo activa:
<input type="number" class="form-control" name="sum5a" value="0" onkeyup="sumar(this);" required/>
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Tercero:
<input type="number" class="form-control" name="sum6" value="0" onkeyup="sumar(this);" required/>
</div>

 <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Tercero activa:
<input type="number" class="form-control" name="sum6a" value="0" onkeyup="sumar(this);" required/>
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Cuarto:
<input type="number" class="form-control" name="sum7" value="0" onkeyup="sumar(this);" required/>
</div>

 <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Cuarto activa:
<input type="number" class="form-control" name="sum7a" value="0" onkeyup="sumar(this);" required/>
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Quinto:
<input type="number" class="form-control" name="sum8" value="0" onkeyup="sumar(this);" required/>
</div>

 <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Quinto activa
<input type="number" class="form-control" name="sum8a" value="0" onkeyup="sumar(this);" required/>
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Sexto:
<input type="number" class="form-control" name="sum9" value="0" onkeyup="sumar(this);" required/>
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Sexto activa:
<input type="number" class="form-control" name="sum9a" value="0" onkeyup="sumar(this);" required/>
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Septimo:
<input type="number" class="form-control" name="sum10" value="0" onkeyup="sumar(this);" required/>
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Septimo activa:
<input type="number" class="form-control" name="sum10a" value="0" onkeyup="sumar(this);" required/>
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Octavo:
<input type="number" class="form-control" name="sum11" value="0" onkeyup="sumar(this);" required/>
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Octavo activa:
<input type="number" class="form-control" name="sum11a" value="0" onkeyup="sumar(this);" required/>
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Noveno:
<input type="number" class="form-control" name="sum12" value="0" onkeyup="sumar(this);" required/>
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Noveno activa:
<input type="number" class="form-control" name="sum12a" value="0" onkeyup="sumar(this);" required/>
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Decimo:
<input type="number" class="form-control" name="sum13" value="0" onkeyup="sumar(this);" required/>
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Decimo activa:
<input type="number" class="form-control" name="sum13a" value="0" onkeyup="sumar(this);" required/>
</div>

  <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Once:
<input type="number" class="form-control" name="sum14" value="0" onkeyup="sumar(this);" required/>
</div>

 <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3">
Once activa:
<input type="number" class="form-control" name="sum14a" value="0" onkeyup="sumar(this);" required/>
</div>

 {{Form::hidden('colegio_id', Request::segment(2), array('class' => 'form-control','placeholder'=>''))}}
 <input type="hidden" class="form-control" name="_token" value="{{ csrf_token() }}">
<div class="container">
<button type="submit" class="btn btn-primary">Registrar población</button>
</div>
<input type="hidden" id="res" name="res" value="0"/>

</form>
                          </div>

                            
                        </div>
  </div>





@endif


</div>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
@stop




