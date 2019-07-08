
  @extends ('adminsite.presentacion')

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
                              <li>
                                    <a href="/carga-esseg"><i class="fa fa-building"></i> Esseg</a>
                                </li>
                              
                              <li class="active">
                                    <a href="{{ URL::to('exportadoresseg/xls') }}"><i class="fa fa-file-excel-o"></i> Descargar xls</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('exportadoressego/xlsx') }}"><i class="fa fa-file-excel-o"></i> Descargar xlsx</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('exportadoresseg/csv') }}"><i class="fa fa-file-excel-o"></i> Descargar CSV</a>
                                </li>
                            </ul>
                        </div>



  <div class="container">
    <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ URL::to('importadoresseg') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
      <input type="file" name="import_file" />
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <br>
      <button class="btn btn-primary">Importar</button>
    </form>
  </div>




<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
@stop
