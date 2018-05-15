@extends ('adminsite.presentacion')

<!-- Define el titulo de la Página -->    
@section('title')
Gestión de usuarios Libros & Libros
@stop


@section('cabecera')
 @parent
@stop

@section('contenido')
<div class="container">
   <!-- Inline Form Block -->
            <div class="block full">
                <!-- Inline Form Title -->
                <div class="block-title">
                    <h2><strong>Año de</strong> Auditoría</h2>
                </div>
                <!-- END Inline Form Title -->

                <!-- Inline Form Content -->
                {{ Form::open(array('method' => 'POST', 'id' => 'defaultForm', 'url' => array('/configuracionupdate'))) }}

                <label>Seleccione año a auditar</label>
                 <select name="ano" class="form-control">
                  @foreach($ano as $ano) 
                   <option value="{{$ano->ano}}">{{$ano->ano}}</option>
                  @endforeach
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
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
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                  </select> 
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-user"></i> Editar</button>
                        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                    </div>
               {{ Form::close() }} 
                <!-- END Inline Form Content -->
            </div>
            <!-- END Inline Form Block -->
</div>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>


@stop