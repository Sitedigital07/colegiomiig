<?php

// Rol Auditor
Route::post('/editarproventa/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editarproventa');
Route::group(['middleware' => ['auditor']], function (){


Route::post('/crearciudad', 'Digitalmiig\Colegiomiig\Controllers\CiudadesController@create');

Route::get('/editar-ciudad/{id}', function ($id) {
    $ciudades = DB::table('ciudades')->where('ids', $id)->get();
    $ciudad = DB::table('registros')->get();
    return view('colegiomiig::editar-ciudad')->with('ciudades', $ciudades)->with('ciudad', $ciudad);
});



Route::post('/editarciudad/{id}', 'Digitalmiig\Colegiomiig\Controllers\CiudadesController@update');

Route::get('/eliminar-ciudad/{id}', 'Digitalmiig\Colegiomiig\Controllers\CiudadesController@destroy');


Route::get('/sectores', 'Digitalmiig\Colegiomiig\Controllers\SectoresController@index');

Route::get('/crear-sector', function () {
    $users = DB::table('users')->get();
    return view('colegiomiig::crear-sector')->with('users', $users);
});

Route::post('/crearsector', 'Digitalmiig\Colegiomiig\Controllers\SectoresController@create');

Route::get('/editar-sector/{id}', 'Digitalmiig\Colegiomiig\Controllers\SectoresController@edit');

Route::post('/editarsector/{id}', 'Digitalmiig\Colegiomiig\Controllers\SectoresController@update');

Route::get('/lista-ciudades/{id}', 'Digitalmiig\Colegiomiig\Controllers\SectoresController@show');

Route::get('/crear-ciudad/{id}', function () {
    $ciudad = DB::table('registros')->get();
    $region = DB::table('regiones')->get();
    return view('colegiomiig::crear-ciudad')->with('ciudad', $ciudad)->with('region', $region);
});



Route::get('/lista-colegios', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@index');

Route::get('/crear-colegio', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@createcolegio');

Route::post('/crearcolegio', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@create');

Route::get('/editar-colegio/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@edit');



Route::post('/update-colegio/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@update');

Route::get('excel-colegios', function () {
    return view('colegiomiig::importExportColegio');
});

Route::get('exportadorcolegio/{type}', 'Digitalmiig\Colegiomiig\Controllers\ExportadorController@exportador');

Route::post('importadorcolegio', 'Digitalmiig\Colegiomiig\Controllers\ExportadorController@importador');




Route::group(['middleware' => ['auditor']], function (){


Route::get('/informe/representantesadm', function () {

$ciudad = Input::get('ciudad');
$ano = Input::get('ano');
$representante = Input::get('representante');



$colegios = DB::table('colegios')
->select(
                  'colegios.id',
                  'colegios.codigo',
                  'colegios.nombres',
                  'colegios.region_id',
                  'colegios.ciudad_id',
                  'colegios.representante_id'
                
          )
->where('ciudad_id','=',$ciudad)
->where('representante_id','=',$representante)
->orderBy('representante_id')
->get();


$descuentos = DB::table('descuento')
->select(
           'colegio_id',
           'ano',
           'descuento'
)
->get();



$esseg = DB::table('esseg')
->select(
                  'id',
                  'colegio_id',
                  'esseg',
                  'ano'            
          )
->where('ciudad_id','=',$ciudad)
->where('ano','=',$ano)
->get();



$essegcon = DB::table('esseg_con')
->select(
                  'id',
                  'colegio_id',
                  'valor',
                  'ano'             
          )
->where('ciudad_id','=',$ciudad)
->where('ano','=',$ano)
->get();



$representante = DB::table('users')
->select(
                  'id','name','last_name'            
          )
->get();


$regional = DB::table('regiones')
->get();



$ciudades = DB::table('ciudades')
->get();



$general = DB::table('campos')
->select(DB::raw('pr_titulo_mat as titulo_mat'),
 DB::raw('pr_vender_mat as vender_mat'),
 DB::raw('pr_muestra_mat as muestra_mat'),
 DB::raw('pr_poblacion_mat as poblacion_mat'),
 DB::raw('pr_titulo_esp as titulo_esp'),
 DB::raw('pr_vender_esp as vender_esp'),
 DB::raw('pr_muestra_esp as muestra_esp'),
 DB::raw('pr_poblacion_esp as poblacion_esp'),
 DB::raw('pr_titulo_cie as titulo_cie'),
 DB::raw('pr_vender_cie as vender_cie'),
 DB::raw('pr_muestra_cie as muestra_cie'),
 DB::raw('pr_poblacion_cie as poblacion_cie'),
 DB::raw('pr_titulo_com as titulo_com'),
 DB::raw('pr_vender_com as vender_com'),
 DB::raw('pr_muestra_com as muestra_com'),
 DB::raw('pr_poblacion_com as poblacion_com'),
 DB::raw('pr_titulo_ing as titulo_ing'),
 DB::raw('pr_vender_ing as vender_ing'),
 DB::raw('pr_muestra_ing as muestra_ing'),
 DB::raw('pr_poblacion_ing as poblacion_ing'),
 DB::raw('pr_titulo_art as titulo_art'),
 DB::raw('pr_vender_art as vender_art'),
 DB::raw('pr_muestra_art as muestra_art'),
 DB::raw('pr_poblacion_art as poblacion_art'),
 DB::raw('pr_titulo_art as titulo_int'),
 DB::raw('pr_vender_art as vender_int'),
 DB::raw('pr_muestra_art as muestra_int'),
 DB::raw('pr_poblacion_int as poblacion_int'),
 DB::raw('colegio_id as colegio_id'),
 DB::raw('ano as ano'),
 DB::raw('grado_id as grado_id'))
->where('ciudad_id','=',$ciudad)
->where('ano','=',$ano)
->get();

$titulos = DB::table('titulo')->get();


$sumamat = DB::table('campos')
->select(DB::raw('sum(pr_vender_mat) as suma_mat'),
DB::raw('sum(pr_muestra_mat) as muestra_mat'),
DB::raw('sum(pr_poblacion_mat) as poblacion_mat'),
DB::raw('colegio_id as colegio_id'),
DB::raw('ano as ano'))
->where('ano','=',$ano)
->where('ciudad_id','=',$ciudad)
->groupBy('colegio_id')
->get();


$sumaesp = DB::table('campos')
->select(DB::raw('sum(pr_vender_esp) as suma_esp'),
DB::raw('sum(pr_muestra_esp) as muestra_esp'),
DB::raw('sum(pr_poblacion_esp) as poblacion_esp'),
DB::raw('colegio_id as colegio_id'),
DB::raw('ano as ano'))
->where('ano','=',$ano)
->where('ciudad_id','=',$ciudad)
->groupBy('colegio_id')
->get();


$sumacie = DB::table('campos')
->select(DB::raw('sum(pr_vender_cie) as suma_cie'),
DB::raw('sum(pr_muestra_cie) as muestra_cie'),
DB::raw('sum(pr_poblacion_cie) as poblacion_cie'),
DB::raw('colegio_id as colegio_id'),
DB::raw('ano as ano'))
->where('ano','=',$ano)
->where('ciudad_id','=',$ciudad)
->groupBy('colegio_id')
->get();



$sumacom = DB::table('campos')
->select(DB::raw('sum(pr_vender_com) as suma_com'),
DB::raw('sum(pr_muestra_com) as muestra_com'),
DB::raw('sum(pr_poblacion_com) as poblacion_com'),
DB::raw('colegio_id as colegio_id'),
DB::raw('ano as ano'))
->where('ano','=',$ano)
->where('ciudad_id','=',$ciudad)
->groupBy('colegio_id')
->get();


$sumaing = DB::table('campos')
->select(DB::raw('sum(pr_vender_ing) as suma_ing'),
DB::raw('sum(pr_muestra_ing) as muestra_ing'),
DB::raw('sum(pr_poblacion_ing) as poblacion_ing'),
DB::raw('colegio_id as colegio_id'),
DB::raw('ano as ano'))
->where('ano','=',$ano)
->where('ciudad_id','=',$ciudad)
->groupBy('colegio_id')
->get();

$sumaart = DB::table('campos')
->select(DB::raw('sum(pr_vender_art) as suma_art'),
DB::raw('sum(pr_muestra_art) as muestra_art'),
DB::raw('sum(pr_poblacion_art) as poblacion_art'),
DB::raw('colegio_id as colegio_id'),
DB::raw('ano as ano'))
->where('ano','=',$ano)
->where('ciudad_id','=',$ciudad)
->groupBy('colegio_id')
->get();


$sumaint = DB::table('campos')
->select(DB::raw('sum(pr_vender_int) as suma_int'),
DB::raw('sum(pr_muestra_int) as muestra_int'),
DB::raw('sum(pr_poblacion_int) as poblacion_int'),
DB::raw('colegio_id as colegio_id'),
DB::raw('ano as ano'))
->where('ano','=',$ano)
->where('ciudad_id','=',$ciudad)
->groupBy('colegio_id')
->get();

$adopciones = DB::table('campos')
->join('esseg','esseg.colegio_id','=','campos.colegio_id')
->leftJoin('descuento','descuento.colegio_id','=','campos.colegio_id')
->leftJoin('fecha_meta','fecha_meta.colegio_id','=','campos.colegio_id')
->leftJoin('fecha_adopcion','fecha_adopcion.colegio_id','=','campos.colegio_id')

 ->select(
 DB::raw('sum(pr_vender_mat*pr_valor_mat+pr_vender_esp*pr_valor_esp+pr_vender_cie*pr_valor_cie+pr_vender_com*pr_valor_com+pr_vender_int*pr_valor_int+pr_vender_ing*pr_valor_ing+pr_vender_art*pr_valor_art) as total_metval'),
 DB::raw('campos.colegio_id as colegio_id'),
 DB::raw('fecha_meta.fecha as fecha_meta'),
  DB::raw('fecha_adopcion.fecha as fecha_adopcion'),
  DB::raw('esseg as esseg'),
  DB::raw('descuento as descuento'),
 DB::raw('campos.ano as ano'))
 ->where('campos.ano','=',$ano)
 ->where('campos.ciudad_id','=',$ciudad)
 ->groupBy('campos.colegio_id')
 ->get();

$adopcionescon = DB::table('campos')
->join('esseg_con','esseg_con.colegio_id','=','campos.colegio_id')
->leftJoin('descuento','descuento.colegio_id','=','campos.colegio_id')
->leftJoin('fecha_meta','fecha_meta.colegio_id','=','campos.colegio_id')
->leftJoin('fecha_adopcion','fecha_adopcion.colegio_id','=','campos.colegio_id')

 ->select(
 DB::raw('sum(pr_vender_mat*pr_valor_mat+pr_vender_esp*pr_valor_esp+pr_vender_cie*pr_valor_cie+pr_vender_com*pr_valor_com+pr_vender_int*pr_valor_int+pr_vender_ing*pr_valor_ing+pr_vender_art*pr_valor_art) as total_metval'),
 DB::raw('campos.colegio_id as colegio_id'),
 DB::raw('fecha_meta.fecha as fecha_meta'),
  DB::raw('fecha_adopcion.fecha as fecha_adopcion'),
  DB::raw('valor as valor'),
  DB::raw('descuento as descuento'),
 DB::raw('campos.ano as ano'))
 ->where('campos.ano','=',$ano)
 ->where('campos.ciudad_id','=',$ciudad)
 ->groupBy('campos.colegio_id')
 ->get();



if(DB::table('proventas')->where('ano','=',$ano)->first()){
    return view('colegiomiig::generico')->with('general', $general)->with('colegios', $colegios)->with('titulos', $titulos)->with('sumamat', $sumamat)->with('sumaesp', $sumaesp)->with('sumacie', $sumacie)->with('sumacom', $sumacom)->with('sumaing', $sumaing)->with('sumaart', $sumaart)->with('sumaint', $sumaint)->with('esseg', $esseg)->with('essegcon', $essegcon)->with('representante', $representante)->with('regional', $regional)->with('ciudades', $ciudades)->with('ano', $ano)->with('descuentos', $descuentos)->with('adopciones', $adopciones)->with('adopcionescon', $adopcionescon);
}
    else{
 return view('colegiomiig::respuesta-filtro');

}

});

Route::get('/informe/gerentes-matrizadm', function () {

$ciudades = DB::table('ciudades')->get();
 return view('colegiomiig::filtro-informeadm')->with('ciudades', $ciudades);

});

Route::get('/informe/generalweb', function () {
    $colegios = DB::table('colegios')->get();
    $representantes = DB::table('representantes')->get();
    return view('colegiomiig::informe-general')->with('colegios', $colegios)->with('representantes', $representantes);
});

Route::get('/informe/generalventas', function () {
    $colegios = DB::table('colegios')->get();
    $representantes = DB::table('representantes')->get();
    return view('colegiomiig::informe-generalventas')->with('colegios', $colegios)->with('representantes', $representantes);
});

Route::get('/informe/vendedor', function () {
    $colegios = DB::table('colegios')->get();
    $representantes = DB::table('representantes')->get();
    return view('colegiomiig::informe-vendedor')->with('colegios', $colegios)->with('representantes', $representantes);
});

Route::get('/informe/titulos', function () {
    $titulos = DB::table('titulo')->get();
    return view('colegiomiig::informe-titulo')->with('titulos', $titulos);
});


Route::post('informe/generalproventas', function(){
       
       $min_price = Input::has('min_price') ? Input::get('min_price') : 0;
       $max_price = Input::has('max_price') ? Input::get('max_price') : 10000000;
       $clientes =  Input::get('cliente') ;
       $estados =  Input::get('estado') ;
       $representantes =  Input::get('representante') ;
   
       $colegios = DB::table('representantes')
         ->join('colegios', 'representantes.id', '=', 'colegios.representante_id')
         ->where('colegios.id', 'like', '%' . $clientes . '%')
         ->where('representante_id', 'like', '%' . $representantes . '%')
         ->get();

        $titulos = DB::table('proventas')
         ->join('titulo', 'proventas.titulo', '=', 'titulo.id')
         ->where('colegio_id', 'like', '%' . $clientes . '%')
         ->where('representante_id', 'like', '%' . $representantes . '%')
         ->where('ano', 'like', '%' . $estados . '%')
         
         ->selectRaw('sum(cantidad) as cantidad')
         ->selectRaw('(colegio_id) as colegio_id')
         ->selectRaw('(nombre) as nombre')
         ->groupBy('titulo')
         ->groupBy('colegio_id')
         ->get();

         $titulos = DB::table('proventas')
         ->join('titulo', 'proventas.titulo', '=', 'titulo.id')
         ->where('colegio_id', 'like', '%' . $clientes . '%')
         ->where('representante_id', 'like', '%' . $representantes . '%')
         ->where('ano', 'like', '%' . $estados . '%')
         
         ->selectRaw('sum(cantidad) as cantidad')
         ->selectRaw('(colegio_id) as colegio_id')
         ->selectRaw('(nombre) as nombre')
         ->groupBy('titulo')
         ->groupBy('colegio_id')
         ->get();

         $totales = DB::table('proventas')
         ->where('colegio_id', 'like', '%' . $clientes . '%')
         ->where('representante_id', 'like', '%' . $representantes . '%')
         ->where('ano', 'like', '%' . $estados . '%')
         
         ->selectRaw('sum(cantidad) as suma')
         ->selectRaw('(colegio_id) as totalid')
         ->groupBy('colegio_id')
         ->get();

           $representantes = DB::table('proventas')
         ->join('titulo', 'proventas.titulo', '=', 'titulo.id')
         ->where('colegio_id', 'like', '%' . $clientes . '%')
         ->where('representante_id', 'like', '%' . $representantes . '%')
         ->where('ano', 'like', '%' . $estados . '%')
         
         ->selectRaw('sum(cantidad) as cantidad')
         ->selectRaw('(colegio_id) as colegio_id')
         ->selectRaw('(nombre) as nombre')
         ->groupBy('titulo')
         ->groupBy('colegio_id')
         ->get();

         $totalpesos = DB::table('proventas')
         ->join('titulo', 'proventas.titulo', '=', 'titulo.id')
         ->where('colegio_id', 'like', '%' . $clientes . '%')
         ->where('ano', 'like', '%' . $estados . '%')
         
         ->selectRaw('sum(cantidad*precio) as suma')
         ->selectRaw('(colegio_id) as totalid')
         ->groupBy('colegio_id')
         ->get();


         $totalcolegios = DB::table('colegios')
         ->selectRaw('count(region_id) as conteo')
    
         ->get();

         $totalmercado = DB::table('colegios')
         ->join('datos', 'colegios.id', '=', 'datos.colegio_id')
         ->selectRaw('(total) as total')
         ->selectRaw('(colegio_id) as totalid')
        
         ->get();

         $totallibros = DB::table('proventas')
         ->selectRaw('sum(cantidad) as conteo')
         ->where('titulo', '>', 0)
         ->get();

         $totalibrosedito = DB::table('proventas')
         ->selectRaw('sum(cantidad) as conteo')
         ->where('titulo', '=', 0)
         ->get(); 

        $porcentajeventastotal = DB::table('proventas')
         ->selectRaw('sum(cantidad) as conteo')
         ->get();


         $porcentajeventas = DB::table('proventas')
         ->selectRaw('sum(cantidad) as conteo')
         ->where('titulo', '>', 0)
         ->get();       

          $totalrepresentantes = DB::table('representantes')

         ->selectRaw('count(id) as conteo')
      
         ->get();       
         
      return view('colegiomiig::informe-generalaud')->with('colegios', $colegios)->with('titulos', $titulos)->with('totales', $totales)->with('totalcolegios', $totalcolegios)->with('totallibros', $totallibros)->with('totalrepresentantes', $totalrepresentantes)->with('totalpesos', $totalpesos)->with('representantes', $representantes)->with('totalibrosedito', $totalibrosedito)->with('porcentajeventastotal', $porcentajeventastotal)->with('porcentajeventas', $porcentajeventas)->with('totalmercado', $totalmercado);

        
});

Route::post('informe/generalauditor', function(){
       
       $min_price = Input::has('min_price') ? Input::get('min_price') : 0;
       $max_price = Input::has('max_price') ? Input::get('max_price') : 10000000;
       $clientes =  Input::get('cliente') ;
       $estados =  Input::get('estado') ;
       $representantes =  Input::get('representante') ;
   
       $colegios = DB::table('representantes')
         ->join('colegios', 'representantes.id', '=', 'colegios.representante_id')
         ->where('colegios.id', 'like', '%' . $clientes . '%')
         ->where('representante_id', 'like', '%' . $representantes . '%')
         ->get();

         $titulos = DB::table('campos')
         ->join('titulo', 'campos.titulo', '=', 'titulo.id')
         ->where('colegio_id', 'like', '%' . $clientes . '%')
         ->where('representante_id', 'like', '%' . $representantes . '%')
         ->where('ano', 'like', '%' . $estados . '%')
            
         ->selectRaw('sum(cantidad) as cantidad')
         ->selectRaw('(colegio_id) as colegio_id')
         ->selectRaw('(nombre) as nombre')
         ->groupBy('titulo')
         ->groupBy('colegio_id')
         ->get();

         $totales = DB::table('campos')
         ->where('colegio_id', 'like', '%' . $clientes . '%')
         ->where('representante_id', 'like', '%' . $representantes . '%')
         ->where('ano', 'like', '%' . $estados . '%')
         ->where('titulo', '>', 0)
         ->selectRaw('sum(cantidad) as suma')
         ->selectRaw('(colegio_id) as totalid')
         ->groupBy('colegio_id')
         ->get();

           $representantes = DB::table('campos')
         ->join('titulo', 'campos.titulo', '=', 'titulo.id')
         ->where('colegio_id', 'like', '%' . $clientes . '%')
         ->where('representante_id', 'like', '%' . $representantes . '%')
         ->where('ano', 'like', '%' . $estados . '%')
         
         ->selectRaw('sum(cantidad) as cantidad')
         ->selectRaw('(colegio_id) as colegio_id')
         ->selectRaw('(nombre) as nombre')
         ->groupBy('titulo')
         ->groupBy('colegio_id')
         ->get();

         $totalpesos = DB::table('campos')
         ->join('titulo', 'campos.titulo', '=', 'titulo.id')
         ->where('colegio_id', 'like', '%' . $clientes . '%')
         ->where('ano', 'like', '%' . $estados . '%')
         
         ->selectRaw('sum(cantidad*precio) as suma')
         ->selectRaw('(colegio_id) as totalid')
         ->groupBy('colegio_id')
         ->get();

         $totalmercado = DB::table('colegios')
         ->join('datos', 'colegios.id', '=', 'datos.colegio_id')
         ->selectRaw('(total) as total')
         ->selectRaw('(colegio_id) as totalid')
        
         ->get();

         $totalcolegios = DB::table('colegios')
         ->selectRaw('count(region_id) as conteo')
        ->where('colegios.id', 'like', '%' . $clientes . '%')
        ->where('representante_id', 'like', '%' . $representantes . '%')
         ->get();

         $totallibros = DB::table('campos')
         ->selectRaw('sum(cantidad) as conteo')
         ->where('titulo', '>', 0)
         ->get();

         $totalibrosedito = DB::table('campos')
         ->selectRaw('sum(cantidad) as conteo')
         ->where('titulo', '=', 0)
         ->get(); 

        $porcentajeventastotal = DB::table('campos')
         ->selectRaw('sum(cantidad) as conteo')
         ->get();


         $porcentajeventas = DB::table('campos')
         ->selectRaw('sum(cantidad) as conteo')
         ->where('titulo', '>', 0)
         ->get();       

          $totalrepresentantes = DB::table('representantes')

         ->selectRaw('count(id) as conteo')
      
         ->get();       
         
      return view('colegiomiig::informe-generalaud')->with('colegios', $colegios)->with('titulos', $titulos)->with('totales', $totales)->with('totalcolegios', $totalcolegios)->with('totallibros', $totallibros)->with('totalrepresentantes', $totalrepresentantes)->with('totalpesos', $totalpesos)->with('representantes', $representantes)->with('totalibrosedito', $totalibrosedito)->with('porcentajeventastotal', $porcentajeventastotal)->with('porcentajeventas', $porcentajeventas)->with('totalmercado', $totalmercado);

        
});


Route::get('/dashboard', function () {
    $colegios = Digitalmiig\Colegiomiig\Colegio::all()->count();
    $adopcioncompleta = DB::table('colegios')->where('adopcion', '=', 'Completa')->count();
    $adopcionlimitada = DB::table('colegios')->where('adopcion', '=', 'Limitada')->count();

        $despachos=DB::table('regiones')
        ->join('colegios', 'regiones.id', '=', 'colegios.region_id')
        ->select(DB::raw('count(*) as cantidad'),DB::raw('(region) as region'))
        ->groupBy('region_id')
        ->get();

        $total = DB::table('campos')->sum('cantidad');
        $totalyl = DB::table('campos')->where('editorial_id','=',1)->sum('cantidad');

        $colegionames = DB::table('colegios')
        ->join('campos', 'colegios.id', '=', 'campos.colegio_id')
        ->select(DB::raw('sum(cantidad) as cantidad'),DB::raw('(nombres) as nombre'))
        ->groupBy('colegio_id')
        ->where('editorial_id','=',1)
        ->orderBy('cantidad', 'desc')
        ->get();

        $representantes = DB::table('representantes')
        ->join('campos', 'representantes.id', '=', 'campos.representante_id')
        ->select(DB::raw('sum(cantidad) as cantidad'),DB::raw('(nombre) as nombre'),DB::raw('(apellido) as apellidp'))
        ->groupBy('representante_id')
        ->where('editorial_id','=',1)
        ->orderBy('cantidad', 'desc')
        ->get();

        $totaleditoriales = DB::table('editoriales')
        ->join('campos', 'editoriales.id', '=', 'campos.editorial_id')
        ->select(DB::raw('sum(cantidad) as cantidad'),DB::raw('(editorial) as editorial'))
        ->groupBy('editorial_id')
        ->orderBy('cantidad', 'desc')
        ->get();
    
        $librosano = DB::table('campos')
        ->select(DB::raw('sum(cantidad) as cantidad'),DB::raw('(ano) as ano'))
        ->groupBy('ano')
        ->orderBy('cantidad', 'desc')
        ->where('editorial_id','=',1)
        ->get();

        $aperturas = DB::table('colegios')
        ->join('ciudades', 'colegios.ciudad_id', '=', 'ciudades.ids')
        ->select(DB::raw('count(*) as cantidad'),DB::raw('(n_ciudad) as ciudad'))
        ->groupBy('ciudad_id')
        ->orderBy('cantidad', 'desc')
        ->get();

        $costoregion = DB::table('campos')
        ->join('titulo', 'campos.titulo', '=', 'titulo.id')
        ->join('regiones', 'campos.region_id', '=', 'regiones.id')
        ->select(DB::raw('sum(cantidad*precio) as cantidad'),DB::raw('(region) as region'))
        ->groupBy('region_id')
        ->orderBy('cantidad', 'desc')
        ->get();

        $costoregionventa = DB::table('proventas')
        ->join('titulo', 'proventas.titulo', '=', 'titulo.id')
        ->join('regiones', 'proventas.region_id', '=', 'regiones.id')
        ->select(DB::raw('sum(cantidad*precio) as cantidad'),DB::raw('(region) as region'))
        ->groupBy('region_id')
        ->orderBy('cantidad', 'desc')
        ->get();
        
    return view('colegiomiig::dashboard')->with('colegios', $colegios)->with('despachos', $despachos)->with('adopcioncompleta', $adopcioncompleta)->with('adopcionlimitada', $adopcionlimitada)->with('total', $total)->with('representantes', $representantes)->with('totaleditoriales', $totaleditoriales)->with('aperturas', $aperturas)->with('colegionames', $colegionames)->with('totalyl', $totalyl)->with('librosano', $librosano)->with('costoregion', $costoregion)->with('costoregionventa', $costoregionventa);
});

Route::post('informe/versus', function(){
       
       $min_price = Input::has('min_price') ? Input::get('min_price') : 0;
       $max_price = Input::has('max_price') ? Input::get('max_price') : 10000000;
       $clientes =  Input::get('cliente') ;
       $estados =  Input::get('estado') ;
       $representantes =  Input::get('representante') ;
   
       $vendedores = DB::table('representantes')
            ->where('representantes.id', 'like', '%' . $representantes . '%')
            ->get();

        $colegios = DB::table('representantes')
            ->join('colegios', 'colegios.representante_id', '=', 'representantes.id')
            ->where('representantes.id', 'like', '%' . $representantes . '%')
            ->get();

        $totalauditoria = DB::table('campos')
            ->join('titulo', 'campos.titulo', '=', 'titulo.id')
            ->selectRaw('sum(cantidad*precio) as suma')
            ->selectRaw('(colegio_id) as totalid')
            ->where('ano', 'like', '%' . $estados . '%')
            ->groupBy('colegio_id')
            ->get();

        $totalventas = DB::table('proventas')
            ->join('titulo', 'proventas.titulo', '=', 'titulo.id')
            ->selectRaw('sum(cantidad*precio) as suma')
            ->selectRaw('(colegio_id) as totalid')
            ->where('ano', 'like', '%' . $estados . '%')
            ->groupBy('colegio_id')
            ->get();

        $totalrpventa = DB::table('proventas')
            ->join('titulo', 'proventas.titulo', '=', 'titulo.id')
            ->selectRaw('sum(cantidad*precio) as suma')
            ->where('ano', 'like', '%' . $estados . '%')
            ->selectRaw('(representante_id) as totalid')
            ->where('titulo', '>', 0)
            ->groupBy('representante_id')
            ->get();

        $totalrpauditor = DB::table('campos')
            ->join('titulo', 'campos.titulo', '=', 'titulo.id')
            ->selectRaw('sum(cantidad*precio) as suma')
            ->where('ano', 'like', '%' . $estados . '%')
            ->selectRaw('(representante_id) as totalid')
            ->where('titulo', '>', 0)
            ->groupBy('representante_id')
            ->get();

     
        
       return view('colegiomiig::informe-versus')->with('vendedores', $vendedores)->with('colegios', $colegios)->with('totalauditoria', $totalauditoria)->with('totalventas', $totalventas)->with('totalrpventa', $totalrpventa)->with('totalrpauditor', $totalrpauditor);

        
});


Route::post('informe/titulos', function(){
       
       $min_price = Input::has('min_price') ? Input::get('min_price') : 0;
       $max_price = Input::has('max_price') ? Input::get('max_price') : 10000000;
       $clientes =  Input::get('cliente') ;
       $estados =  Input::get('estado') ;
       $representantes =  Input::get('representante') ;
   


        $titulos = DB::table('proventas')
            ->join('titulo', 'proventas.titulo', '=', 'titulo.id')
            ->selectRaw('sum(cantidad) as suma')
            ->selectRaw('(nombre) as nombre')
            ->where('ano', 'like', '%' . $estados . '%')
            ->groupBy('titulo')
            ->get();

        $totaltitulos = DB::table('proventas')
            ->selectRaw('sum(cantidad) as suma')
            ->where('ano', 'like', '%' . $estados . '%')
            ->where('titulo', '>', 0)
            ->get();
     
        
       return view('colegiomiig::informe-titul')->with('titulos', $titulos)->with('totaltitulos', $totaltitulos);

        
});


});
});

Route::group(['middleware' => ['gerentereg']], function (){


Route::get('/informe/gerentesweb', function () {

 $ano = Input::get('ano');

 

        $ciudades = DB::table('ciudades')
        ->where('region_id','=',Auth::user()->regionid)
        ->get();



        $diferenciameta = DB::table('proventas')
         ->select(DB::raw('sum(pr_vender_mat+pr_vender_esp+pr_vender_cie+pr_vender_com+pr_vender_int+pr_vender_art+pr_vender_ing) as totalven'),
         DB::raw('sum(pr_vender_mat*pr_valor_mat+pr_vender_esp*pr_valor_esp+pr_vender_cie*pr_valor_cie+pr_vender_com*pr_valor_com+pr_vender_int*pr_valor_int+pr_vender_art*pr_valor_art+pr_vender_ing*pr_valor_ing) as totalval'),
         DB::raw('ciudad_id as ciudad_id'),
         DB::raw('ano as ano'))
         ->where('ano','=',$ano)
         ->groupBy('ciudad_id')
         ->get();

          $diferenciaadopcion = DB::table('campos')
         ->select(DB::raw('sum(pr_vender_mat+pr_vender_esp+pr_vender_cie+pr_vender_com+pr_vender_int+pr_vender_art+pr_vender_ing) as totalven'),
         DB::raw('sum(pr_vender_mat*pr_valor_mat+pr_vender_esp*pr_valor_esp+pr_vender_cie*pr_valor_cie+pr_vender_com*pr_valor_com+pr_vender_int*pr_valor_int+pr_vender_art*pr_valor_art+pr_vender_ing*pr_valor_ing) as totalval'),
         DB::raw('ciudad_id as ciudad_id'),
         DB::raw('ano as ano'))
         ->where('ano','=',$ano)
         ->groupBy('ciudad_id')
         ->get();







    
       $date = date("Y-m-d");
        $date_future = strtotime('+15 day', strtotime($date));
        $date_future = date('Y-m-d', $date_future);
        $date_futuretres = strtotime('+15 day', strtotime($date));
        $date_futuretres = date('Y-m-d', $date_futuretres);
        $date_futurecua = strtotime('+29 day', strtotime($date));
        $date_futurecua = date('Y-m-d', $date_futurecua);
        $date_futurecinc = strtotime('+30 day', strtotime($date));
        $date_futurecinc = date('Y-m-d', $date_futurecinc);



        $informes = DB::table('proventas')
        ->select(DB::raw('(pr_titulo_mat) as titulo_mat'),
         DB::raw('sum(pr_vender_mat*pr_valor_mat) as vender_mat'), 
         DB::raw('sum(pr_vender_esp*pr_valor_esp) as vender_esp'),
         DB::raw('sum(pr_vender_cie*pr_valor_cie) as vender_cie'),
         DB::raw('sum(pr_vender_com*pr_valor_com) as vender_com'),
         DB::raw('sum(pr_vender_int*pr_valor_int) as vender_int'),
         DB::raw('sum(pr_vender_ing*pr_valor_ing) as vender_ing'),
         DB::raw('sum(pr_vender_art*pr_valor_art) as vender_art'),
         DB::raw('sum(pr_vender_mat) as suma_mat'),
         DB::raw('sum(pr_vender_esp) as suma_esp'),
         DB::raw('sum(pr_vender_cie) as suma_cie'),
         DB::raw('sum(pr_vender_com) as suma_com'),
         DB::raw('sum(pr_vender_int) as suma_int'),
         DB::raw('sum(pr_vender_ing) as suma_ing'),
         DB::raw('sum(pr_vender_art) as suma_art'),
         DB::raw('sum(pr_muestra_mat) as muestra_mat'),
         DB::raw('sum(pr_muestra_esp) as muestra_esp'),
         DB::raw('sum(pr_muestra_cie) as muestra_cie'),
         DB::raw('sum(pr_muestra_com) as muestra_com'),
         DB::raw('sum(pr_muestra_int) as muestra_int'),
         DB::raw('sum(pr_muestra_ing) as muestra_ing'),
         DB::raw('sum(pr_muestra_art) as muestra_art'),
         DB::raw('sum(pr_vender_mat+pr_vender_esp+pr_vender_cie+pr_vender_com+pr_vender_int+pr_vender_ing+pr_vender_art) as total_met'),
         DB::raw('sum(pr_muestra_mat+pr_muestra_esp+pr_muestra_cie+pr_muestra_com+pr_muestra_int+pr_muestra_ing+pr_muestra_art) as total_muestramet'),
         DB::raw('sum(pr_vender_mat*pr_valor_mat+pr_vender_esp*pr_valor_esp+pr_vender_cie*pr_valor_cie+pr_vender_com*pr_valor_com+pr_vender_int*pr_valor_int+pr_vender_ing*pr_valor_ing+pr_vender_art*pr_valor_art) as total_metval'),
         DB::raw('ciudad_id as ciudad_id'),
         DB::raw('ano as ano'))
        ->where('ano','=',$ano)
        ->groupBy('ciudad_id')
        ->get();

        $rojo = DB::table("colegios")
                ->join('fecha_adopcion','colegios.id','=','fecha_adopcion.colegio_id')
                ->where('colegios.ciudad_id',1)
                ->where('fecha' ,'<', $date_future)->count();



          $informestotales = DB::table('proventas')
        ->select(DB::raw('(pr_titulo_mat) as titulo_mat'),
         DB::raw('sum(pr_vender_mat*pr_valor_mat) as vender_mat'), 
         DB::raw('sum(pr_vender_esp*pr_valor_esp) as vender_esp'),
         DB::raw('sum(pr_vender_cie*pr_valor_cie) as vender_cie'),
         DB::raw('sum(pr_vender_com*pr_valor_com) as vender_com'),
         DB::raw('sum(pr_vender_int*pr_valor_int) as vender_int'),
         DB::raw('sum(pr_vender_ing*pr_valor_ing) as vender_ing'),
         DB::raw('sum(pr_vender_art*pr_valor_art) as vender_art'),
         DB::raw('sum(pr_vender_mat) as suma_mat'),
         DB::raw('sum(pr_vender_esp) as suma_esp'),
         DB::raw('sum(pr_vender_cie) as suma_cie'),
         DB::raw('sum(pr_vender_com) as suma_com'),
         DB::raw('sum(pr_vender_int) as suma_int'),
         DB::raw('sum(pr_vender_ing) as suma_ing'),
         DB::raw('sum(pr_vender_art) as suma_art'),
         DB::raw('sum(pr_muestra_mat) as muestra_mat'),
         DB::raw('sum(pr_muestra_esp) as muestra_esp'),
         DB::raw('sum(pr_muestra_cie) as muestra_cie'),
         DB::raw('sum(pr_muestra_com) as muestra_com'),
         DB::raw('sum(pr_muestra_int) as muestra_int'),
         DB::raw('sum(pr_muestra_ing) as muestra_ing'),
         DB::raw('sum(pr_muestra_art) as muestra_art'),
         DB::raw('sum(pr_vender_mat+pr_vender_esp+pr_vender_cie+pr_vender_com+pr_vender_int+pr_vender_ing+pr_vender_art) as total_met'),
         DB::raw('sum(pr_vender_mat*pr_valor_mat+pr_vender_esp*pr_valor_esp+pr_vender_cie*pr_valor_cie+pr_vender_com*pr_valor_com+pr_vender_int*pr_valor_int+pr_vender_ing*pr_valor_ing+pr_vender_art*pr_valor_art) as total_metval'),
         DB::raw('ano as ano'),
         DB::raw('region_id as region_id'))
        ->where('region_id','=',Auth::user()->regionid)
        ->where('ano','=',$ano)
        ->get();
 
   

        $informesadopcion = DB::table('campos')
        ->select(DB::raw('sum(pr_vender_mat*pr_valor_mat) as vender_mat'),
         DB::raw('sum(pr_vender_esp*pr_valor_esp) as vender_esp'),
         DB::raw('sum(pr_vender_cie*pr_valor_cie) as vender_cie'),
         DB::raw('sum(pr_vender_com*pr_valor_com) as vender_com'),
         DB::raw('sum(pr_vender_int*pr_valor_int) as vender_int'),
         DB::raw('sum(pr_vender_ing*pr_valor_ing) as vender_ing'),
         DB::raw('sum(pr_vender_art*pr_valor_art) as vender_art'),
         DB::raw('sum(pr_vender_mat) as suma_mat'),
         DB::raw('sum(pr_vender_esp) as suma_esp'),
         DB::raw('sum(pr_vender_cie) as suma_cie'),
         DB::raw('sum(pr_vender_com) as suma_com'),
         DB::raw('sum(pr_vender_int) as suma_int'),
         DB::raw('sum(pr_vender_ing) as suma_ing'),
         DB::raw('sum(pr_vender_art) as suma_art'),
         DB::raw('sum(pr_muestra_mat) as muestra_mat'),
         DB::raw('sum(pr_muestra_esp) as muestra_esp'),
         DB::raw('sum(pr_muestra_cie) as muestra_cie'),
         DB::raw('sum(pr_muestra_com) as muestra_com'),
         DB::raw('sum(pr_muestra_int) as muestra_int'),
         DB::raw('sum(pr_muestra_ing) as muestra_ing'),
         DB::raw('sum(pr_muestra_art) as muestra_art'),
         DB::raw('sum(pr_vender_mat+pr_vender_esp+pr_vender_cie+pr_vender_com+pr_vender_int+pr_vender_ing+pr_vender_art) as total_adop'),
         DB::raw('sum(pr_vender_mat*pr_valor_mat+pr_vender_esp*pr_valor_esp+pr_vender_cie*pr_valor_cie+pr_vender_com*pr_valor_com+pr_vender_int*pr_valor_int+pr_vender_ing*pr_valor_ing+pr_vender_art*pr_valor_art) as total_adopval'),
         DB::raw('ciudad_id as ciudad_id'),
         DB::raw('ano as ano'))
        ->groupBy('ciudad_id')
        ->where('ano','=',$ano)
        ->get();


        $muestrapre = DB::table('proventas')
        ->join('users','users.id','=','proventas.representante_id')
        ->select(
         DB::raw('sum(pr_muestra_mat+pr_muestra_esp+pr_muestra_cie+pr_muestra_com+pr_muestra_int+pr_muestra_ing+pr_muestra_art) as muestra'),
         DB::raw('ano as ano'),
         DB::raw('region_id as region_id'))
        ->where('region_id','=',Auth::user()->regionid)
        ->where('ano','=',$ano)
        ->get();

           $muestracon = DB::table('campos')
        ->join('users','users.id','=','campos.representante_id')
        ->select(
         DB::raw('sum(pr_muestra_mat+pr_muestra_esp+pr_muestra_cie+pr_muestra_com+pr_muestra_int+pr_muestra_ing+pr_muestra_art) as muestra_mat'),
         DB::raw('ano as ano'),
         DB::raw('region_id as region_id'))
        ->where('region_id','=',Auth::user()->regionid)
        ->where('ano','=',$ano)
        ->get();





          $presupuestomet = DB::table('proventas')
            ->join('users','users.id','=','proventas.representante_id')
        ->select(DB::raw('sum(pr_muestra_mat) as muestra_mat'),
         DB::raw('sum(pr_muestra_esp) as muestra_esp'),
         DB::raw('sum(pr_muestra_cie) as muestra_cie'),
         DB::raw('sum(pr_muestra_com) as muestra_com'),
         DB::raw('sum(pr_muestra_int) as muestra_int'),
         DB::raw('sum(pr_muestra_ing) as muestra_ing'),
         DB::raw('sum(pr_muestra_art) as muestra_art'),
         DB::raw('colegio_id as colegio_id'),
         DB::raw('ano as ano'),
         DB::raw('ciudad_id as ciudad_id'))
         ->where('ano','=',$ano)
         ->where('region_id','=',Auth::user()->regionid)
         ->groupBy('region_id')
        ->get();


                $presupuestocon = DB::table('campos')
            ->join('users','users.id','=','campos.representante_id')
        ->select(DB::raw('sum(pr_muestra_mat) as muestra_mat'),
         DB::raw('sum(pr_muestra_esp) as muestra_esp'),
         DB::raw('sum(pr_muestra_cie) as muestra_cie'),
         DB::raw('sum(pr_muestra_com) as muestra_com'),
         DB::raw('sum(pr_muestra_int) as muestra_int'),
         DB::raw('sum(pr_muestra_ing) as muestra_ing'),
         DB::raw('sum(pr_muestra_art) as muestra_art'),
         DB::raw('colegio_id as colegio_id'),
         DB::raw('ano as ano'),
         DB::raw('ciudad_id as ciudad_id'))
         ->where('ano','=',$ano)
         ->where('region_id','=',Auth::user()->regionid)
         ->groupBy('region_id')
        ->get();

  



          $presupuestoadop = DB::table('campos')
        ->select(DB::raw('sum(pr_muestra_mat) as muestra_mat'),
         DB::raw('sum(pr_muestra_esp) as muestra_esp'),
         DB::raw('sum(pr_muestra_cie) as muestra_cie'),
         DB::raw('sum(pr_muestra_com) as muestra_com'),
         DB::raw('sum(pr_muestra_int) as muestra_int'),
         DB::raw('sum(pr_muestra_ing) as muestra_ing'),
         DB::raw('sum(pr_muestra_art) as muestra_art'),
         DB::raw('sum(pr_muestra_mat+pr_muestra_esp+pr_muestra_cie+pr_muestra_com+pr_muestra_int+pr_muestra_ing+pr_muestra_art) as total_adop'),
         DB::raw('colegio_id as colegio_id'),
         DB::raw('ano as ano'))
         ->where('ano','=',$ano)
         ->get();


       
        $esseg_con = DB::table('esseg_con')
        ->select(DB::raw('sum(valor) as valor'),
        DB::raw('ano as ano'),
        DB::raw('ciudad_id as ciudad_id'))
        ->where('ano','=',$ano)
        ->groupBy('ciudad_id')
        ->get();
          


          $informesadopciontotales = DB::table('campos')
        ->select(DB::raw('sum(pr_vender_mat*pr_valor_mat) as vender_mat'),
         DB::raw('sum(pr_vender_esp*pr_valor_esp) as vender_esp'),
         DB::raw('sum(pr_vender_cie*pr_valor_cie) as vender_cie'),
         DB::raw('sum(pr_vender_com*pr_valor_com) as vender_com'),
         DB::raw('sum(pr_vender_int*pr_valor_int) as vender_int'),
         DB::raw('sum(pr_vender_ing*pr_valor_ing) as vender_ing'),
         DB::raw('sum(pr_vender_art*pr_valor_art) as vender_art'),
         DB::raw('sum(pr_vender_mat) as suma_mat'),
         DB::raw('sum(pr_vender_esp) as suma_esp'),
         DB::raw('sum(pr_vender_cie) as suma_cie'),
         DB::raw('sum(pr_vender_com) as suma_com'),
         DB::raw('sum(pr_vender_int) as suma_int'),
         DB::raw('sum(pr_vender_ing) as suma_ing'),
         DB::raw('sum(pr_vender_art) as suma_art'),
         DB::raw('sum(pr_muestra_mat) as muestra_mat'),
         DB::raw('sum(pr_muestra_esp) as muestra_esp'),
         DB::raw('sum(pr_muestra_cie) as muestra_cie'),
         DB::raw('sum(pr_muestra_com) as muestra_com'),
         DB::raw('sum(pr_muestra_int) as muestra_int'),
         DB::raw('sum(pr_muestra_ing) as muestra_ing'),
         DB::raw('sum(pr_muestra_art) as muestra_art'),
         DB::raw('sum(pr_vender_mat+pr_vender_esp+pr_vender_cie+pr_vender_com+pr_vender_int+pr_vender_ing+pr_vender_art) as total_adop'),
         DB::raw('sum(pr_vender_mat*pr_valor_mat+pr_vender_esp*pr_valor_esp+pr_vender_cie*pr_valor_cie+pr_vender_com*pr_valor_com+pr_vender_int*pr_valor_int+pr_vender_ing*pr_valor_ing+pr_vender_art*pr_valor_art) as total_adopval'),
         DB::raw('representante_id as representante_id'),
         DB::raw('ano as ano'),
         DB::raw('region_id as region_id'))
        ->where('region_id','=',Auth::user()->regionid)
         ->where('ano','=',$ano)
        ->get();



        $date = date('Y-m-d');
        //convertimos la fecha 1 a objeto Carbon
$carbon1 = new \Carbon\Carbon($date);
//convertimos la fecha 2 a objeto Carbon
$carbon2 = new \Carbon\Carbon("2010-02-02 00:00:00");
//de esta manera sacamos la diferencia en minutos
$minutesDiff=$carbon1->diffInDays($carbon2);










        $esseg = DB::table('esseg')
        ->select(
         DB::raw('sum(esseg) as total_esseg'),
         DB::raw('ciudad_id as ciudad_id'),
        DB::raw('ano as ano'))
        ->where('ano','=',$ano)
        ->groupBy('ciudad_id')

        ->get();


        $rojos= DB::table('colegios')
        ->join('fecha_adopcion','colegios.id','=','fecha_adopcion.colegio_id')
        ->where('colegios.ciudad_id',2)->where('fecha' ,'<', '2019-10-15')
        ->groupBy('fecha_adopcion.colegio_id')
        ->orderBy('fecha_adopcion.fecha','desc')
        ->get();



     $rojo = DB::table('fecha_adopcion')
      ->join('colegios','colegios.id','=','fecha_adopcion.colegio_id')
        ->select(
        DB::raw('count(fecha) as fecha'),
        DB::raw('colegio_id as colegio_id'),
        DB::raw('ciudad_id as ciudad_id'),
        DB::raw('ano as ano'))
       ->where('fecha' ,'<', $date_futuretres)
       ->where('ano','=',$ano)
       ->groupBy('ciudad_id')
       ->get();


       $amarillo = DB::table('fecha_adopcion')
      ->join('colegios','colegios.id','=','fecha_adopcion.colegio_id')
        ->select(
        DB::raw('count(fecha) as fecha'),
        DB::raw('colegio_id as colegio_id'),
        DB::raw('ciudad_id as ciudad_id'),
        DB::raw('ano as ano'))
       ->whereBetween('fecha',[$date_futuretres, $date_futurecinc])
       ->where('ano','=',$ano)
       ->groupBy('ciudad_id')
       ->get();



        $verde = DB::table('fecha_adopcion')
      ->join('colegios','colegios.id','=','fecha_adopcion.colegio_id')
        ->select(
        DB::raw('count(fecha) as fecha'),
        DB::raw('colegio_id as colegio_id'),
        DB::raw('ciudad_id as ciudad_id'),
        DB::raw('ano as ano'))
       ->where('fecha' ,'>', $date_futurecinc)
       ->where('ano','=',$ano)
         ->groupBy('ciudad_id')
       ->get();
       

          $essegcol = DB::table('esseg')
        ->join('colegios','colegios.id','=','esseg.colegio_id')
        ->select(DB::raw('sum(esseg.esseg) as esseg'))
        ->where('ano','=',$ano)
        ->where('region_id','=',Auth::user()->regionid)
        ->get();

           $essegcolcon = DB::table('esseg_con')
        ->join('colegios','colegios.id','=','esseg_con.colegio_id')
        ->select(DB::raw('sum(valor) as valor'))
        ->where('ano','=',$ano)
        ->where('region_id','=',Auth::user()->regionid)
        ->get();





      


        $verdeweb = DB::table('colegios')
      ->leftJoin('fecha_adopcion','colegios.id','=','fecha_adopcion.colegio_id')
      ->leftJoin('campos','colegios.id','=','campos.colegio_id')
        ->select(
        DB::raw('count(fecha) as fecha'),
        DB::raw('count(campos.colegio_id) as adopcion, campos.ciudad_id'),
        DB::raw('colegios.ciudad_id as ciudad_id'),
        DB::raw('fecha_adopcion.ano as ano'))
       ->where('fecha' ,'<', '2019-10-15')
       ->where('campos.ciudad_id' ,'>=', '1')
       ->where('fecha_adopcion.ano','=',$ano)
       ->groupBy('colegios.ciudad_id')
       ->get();

             $rojoweb = DB::table('colegios')
      ->leftJoin('fecha_adopcion','colegios.id','=','fecha_adopcion.colegio_id')
      ->leftJoin('campos','colegios.id','=','campos.colegio_id')
        ->select(
        DB::raw('count(fecha) as fecha'),
        DB::raw('(campos.colegio_id) as adopcion, campos.ciudad_id'),
        DB::raw('colegios.ciudad_id as ciudad_id'),
        DB::raw('fecha_adopcion.ano as ano'))
       ->where('fecha' ,'<', '2019-10-15')
       ->whereNull('campos.ciudad_id')
       ->where('fecha_adopcion.ano','=',$ano)
       ->groupBy('colegios.ciudad_id')
       ->get();

          $amarilloweb = DB::table('colegios')
      ->leftJoin('fecha_adopcion','colegios.id','=','fecha_adopcion.colegio_id')
      ->leftJoin('campos','colegios.id','=','campos.colegio_id')
        ->select(
        DB::raw('count(fecha) as fecha'),
        DB::raw('count(campos.colegio_id) as adopcion,  campos.ciudad_id'),
        DB::raw('fecha_adopcion.colegio_id as colegio_id'),
        DB::raw('colegios.ciudad_id as ciudad_id'),
        DB::raw('fecha_adopcion.ano as ano'))
       ->where('fecha' ,'>', '2019-10-15')
       ->whereNull('campos.ciudad_id')
       ->where('fecha_adopcion.ano','=',$ano)

        ->groupBy('colegios.ciudad_id')
       ->get();

    

         $rojowebs = DB::table('fecha_adopcion')
      ->join('colegios','colegios.id','=','fecha_adopcion.colegio_id')
      ->leftJoin('campos','colegios.id','=','campos.colegio_id')
        ->select(
        DB::raw('count(fecha) as fecha'),
        DB::raw('count(campos.colegio_id) as adopcion'),
        DB::raw('fecha_adopcion.colegio_id as colegio_id'),
        DB::raw('colegios.ciudad_id as ciudad_id'),
        DB::raw('fecha_adopcion.ano as ano'))
       ->where('fecha' ,'<', '2019-10-15')
       ->where('fecha_adopcion.ano','=',$ano)
        ->groupBy('colegios.id')
       ->get();


      







 if(DB::table('proventas')->where('ano','=',$ano)->first()){
         return view('colegiomiig::informereg', compact('informesweb','informesmat','informesesp','titulos','informeswebadop','representantes','ciudades','informes','informesadopcion','fechameta','fechaadopcion','proventas','esseg','essegcon','date','masa','informesadopcion','informestotales','informesadopciontotales','presupuestomet','presupuestoadop','colegiosman','dispapel','dispapelcam','date','date_futuretres','date_future','date_futuretres','date_futurecua','date_futurecinc','esseg_con','diferenciameta','diferenciaadopcion','rojo','verde','amarillo','verdeweb','amarilloweb','essegcol','essegcolcon','muestrapre','presupuestocon','rojoweb'));
     }
         else{
 return view('colegiomiig::respuesta-filtro');

}

});





Route::get('/gerentereg', function () {
    $ciudades = DB::table('ciudades')
    ->where('region_id', '=', Auth::user()->regionid)->get();
    return view('colegiomiig::gerentereg')->with('ciudades', $ciudades);
});

Route::get('/filtro-gerentesreg', function () {

 return view('colegiomiig::filtro-gerentereg');

});

Route::get('/editar-descuentoreg/{id}', function ($id) {
    $descuentos = DB::table('descuento')->where('id', '=', $id)->get();
    $valores = DB::table('descuentos')->where('id', '=', 1)->get();
    return view('colegiomiig::editar-descuento')->with('descuentos', $descuentos)->with('valores', $valores);
});


Route::post('/editardescuentoreg/{id}', 'Digitalmiig\Usuariomiig\Controllers\RepresentantesController@editardescuento');

Route::get('/colegio-descuentoreg/{id}', function ($id) {
    $descuentos = DB::table('descuento')->where('colegio_id', '=', $id)->get();
    $ano = DB::table('configuracion')->where('id','=',1)->get();
    $anos = DB::table('configuracion')->where('id','=',1)->get();
     $valores = DB::table('descuentos')->where('id', '=', 1)->get();

    return view('colegiomiig::descuento')->with('descuentos', $descuentos)->with('ano', $ano)->with('anos', $anos)->with('valores', $valores);
});



Route::get('/informe/vendedorreg', function () {
     $colegios = DB::table('colegios')
     ->join('ciudades', 'ciudades.ids', '=', 'colegios.ciudad_id')
     ->leftjoin('users', 'users.id', '=', 'colegios.auditor')
     ->join('regiones', 'regiones.id', '=', 'colegios.region_id')
     ->where('colegios.region_id','=',Auth::user()->regionid)
     ->select('colegios.estadoaud','colegios.codigo','colegios.nombres','ciudades.n_ciudad','colegios.emailcol','users.name','colegios.id')
     ->get();
     $ano = DB::table('configuracion')->where('id', '=', 1)->get();
     return view('colegiomiig::allcolegiosreg')->with('colegios', $colegios)->with('ano', $ano);

});

Route::post('informe/versusreg', function(){
       
       $min_price = Input::has('min_price') ? Input::get('min_price') : 0;
       $max_price = Input::has('max_price') ? Input::get('max_price') : 10000000;
       $clientes =  Input::get('cliente') ;
       $estados =  Input::get('estado') ;
       $representantes =  Input::get('representante') ;
   
       $vendedores = DB::table('representantes')
            ->where('representantes.id', 'like', '%' . $representantes . '%')
            ->where('region_id','=',Auth::user()->regionid)
            ->get();

        $colegios = DB::table('representantes')
            ->join('colegios', 'colegios.representante_id', '=', 'representantes.id')
            ->where('representantes.id', 'like', '%' . $representantes . '%')
            ->where('colegios.region_id','=',Auth::user()->regionid)
            ->get();

        $totalauditoria = DB::table('campos')
            ->join('titulo', 'campos.titulo', '=', 'titulo.id')
            ->selectRaw('sum(cantidad*precio) as suma')
            ->selectRaw('(colegio_id) as totalid')
            ->where('ano', 'like', '%' . $estados . '%')
            ->where('region_id','=',Auth::user()->regionid)
            ->groupBy('colegio_id')
            ->get();

        $totalventas = DB::table('proventas')
            ->join('titulo', 'proventas.titulo', '=', 'titulo.id')
            ->selectRaw('sum(cantidad*precio) as suma')
            ->selectRaw('(colegio_id) as totalid')
            ->where('ano', 'like', '%' . $estados . '%')
            ->where('region_id','=',Auth::user()->regionid)
            ->groupBy('colegio_id')
            ->get();

        $totalrpventa = DB::table('proventas')
            ->join('titulo', 'proventas.titulo', '=', 'titulo.id')
            ->selectRaw('sum(cantidad*precio) as suma')
            ->where('ano', 'like', '%' . $estados . '%')
            ->selectRaw('(representante_id) as totalid')
            ->where('region_id','=',Auth::user()->regionid)
            ->where('titulo', '>', 0)
            ->groupBy('representante_id')
            ->get();

        $totalrpauditor = DB::table('campos')
            ->join('titulo', 'campos.titulo', '=', 'titulo.id')
            ->selectRaw('sum(cantidad*precio) as suma')
            ->where('ano', 'like', '%' . $estados . '%')
            ->selectRaw('(representante_id) as totalid')
            ->where('region_id','=',Auth::user()->regionid)
            ->where('titulo', '>', 0)
            ->groupBy('representante_id')
            ->get();

     
        
       return view('colegiomiig::informe-versus')->with('vendedores', $vendedores)->with('colegios', $colegios)->with('totalauditoria', $totalauditoria)->with('totalventas', $totalventas)->with('totalrpventa', $totalrpventa)->with('totalrpauditor', $totalrpauditor);

        
});



Route::post('informe/general', function(){
       
       $min_price = Input::has('min_price') ? Input::get('min_price') : 0;
       $max_price = Input::has('max_price') ? Input::get('max_price') : 10000000;
       $clientes =  Input::get('cliente') ;
       $estados =  Input::get('estado') ;
       $representantes =  Input::get('representante') ;
   
       $colegios = DB::table('colegios')
         ->join('representantes', 'colegios.representante_id', '=', 'representantes.id')
         ->where('colegios.id', 'like', '%' . $clientes . '%')
         ->where('colegios.region_id','=',Auth::user()->regionid)
         ->get();

        $titulos = DB::table('proventas')
         ->join('titulo', 'proventas.titulo', '=', 'titulo.id')
         ->where('colegio_id', 'like', '%' . $clientes . '%')
         ->where('representante_id', 'like', '%' . $representantes . '%')
         ->where('ano', 'like', '%' . $estados . '%')
         ->where('region_id','=',Auth::user()->regionid)
         ->selectRaw('sum(cantidad) as cantidad')
         ->selectRaw('(colegio_id) as colegio_id')
         ->selectRaw('(nombre) as nombre')
         ->groupBy('titulo')
         ->groupBy('colegio_id')
         ->get();

         $titulos = DB::table('proventas')
         ->join('titulo', 'proventas.titulo', '=', 'titulo.id')
         ->where('colegio_id', 'like', '%' . $clientes . '%')
         ->where('representante_id', 'like', '%' . $representantes . '%')
         ->where('ano', 'like', '%' . $estados . '%')
         ->where('region_id','=',Auth::user()->regionid)
         ->selectRaw('sum(cantidad) as cantidad')
         ->selectRaw('(colegio_id) as colegio_id')
         ->selectRaw('(nombre) as nombre')
         ->groupBy('titulo')
         ->groupBy('colegio_id')
         ->get();

         $totales = DB::table('proventas')
         ->where('colegio_id', 'like', '%' . $clientes . '%')
         ->where('representante_id', 'like', '%' . $representantes . '%')
         ->where('ano', 'like', '%' . $estados . '%')
         ->where('region_id','=',Auth::user()->regionid)
         ->selectRaw('sum(cantidad) as suma')
         ->selectRaw('(colegio_id) as totalid')
         ->groupBy('colegio_id')
         ->where('titulo', '>', 0)
         ->get();

           $representantes = DB::table('proventas')
         ->join('titulo', 'proventas.titulo', '=', 'titulo.id')
         ->where('colegio_id', 'like', '%' . $clientes . '%')
         ->where('representante_id', 'like', '%' . $representantes . '%')
         ->where('ano', 'like', '%' . $estados . '%')
         ->where('region_id','=',Auth::user()->regionid)
         ->selectRaw('sum(cantidad) as cantidad')
         ->selectRaw('(colegio_id) as colegio_id')
         ->selectRaw('(nombre) as nombre')
         ->groupBy('titulo')
         ->groupBy('colegio_id')
         ->get();

         $totalpesos = DB::table('proventas')
         ->join('titulo', 'proventas.titulo', '=', 'titulo.id')
         ->where('colegio_id', 'like', '%' . $clientes . '%')
         ->where('ano', 'like', '%' . $estados . '%')
         ->where('region_id','=',Auth::user()->regionid)
         ->selectRaw('sum(cantidad*precio) as suma')
         ->selectRaw('(colegio_id) as totalid')
         ->groupBy('colegio_id')
         ->get();


         $totalcolegios = DB::table('colegios')

         ->where('region_id','=',Auth::user()->regionid)
         ->selectRaw('count(region_id) as conteo')
         ->groupBy('region_id')
         ->get();

         $totallibros = DB::table('proventas')
       
         ->where('region_id','=',Auth::user()->regionid)
         ->selectRaw('sum(cantidad) as conteo')
         ->groupBy('region_id')
         ->get();  

          $totalmercado = DB::table('colegios')
         ->join('datos', 'colegios.id', '=', 'datos.colegio_id')
         ->selectRaw('(total) as total')
         ->selectRaw('(colegio_id) as totalid')
        
         ->get();       

          $totalrepresentantes = DB::table('representantes')
       
         ->where('region_id','=',Auth::user()->regionid)
         ->selectRaw('count(id) as conteo')
         ->groupBy('region_id')
         ->get();         

         
      return view('colegiomiig::informes-region')->with('colegios', $colegios)->with('titulos', $titulos)->with('totales', $totales)->with('totalcolegios', $totalcolegios)->with('totallibros', $totallibros)->with('totalrepresentantes', $totalrepresentantes)->with('totalpesos',$totalpesos)->with('representantes', $representantes)->with('totalmercado', $totalmercado);

        
});









});








Route::get('/lista-colegios', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@index');

Route::group(['middleware' => ['gerentenac']], function (){

Route::get('/informe/representantesplata', function () {

$ciudad = Input::get('ciudad');
$ano = Input::get('ano');
$representante = Input::get('representante');



$colegios = DB::table('colegios')
->select(
                  'colegios.id',
                  'colegios.codigo',
                  'colegios.nombres',
                  'colegios.region_id',
                  'colegios.ciudad_id',
                  'colegios.representante_id'
                
          )
->where('ciudad_id','=',$ciudad)
->where('representante_id','=',$representante)
->orderBy('representante_id')
->get();



$esseg = DB::table('esseg')
->select(
                  'id',
                  'colegio_id',
                  'esseg'             
          )
->where('ciudad_id','=',$ciudad)
->where('ano','=',$ano)
->get();



$essegcon = DB::table('esseg_con')
->select(
                  'id',
                  'colegio_id',
                  'valor'             
          )
->where('ciudad_id','=',$ciudad)
->where('ano','=',$ano)
->get();




$representante = DB::table('users')
->select(
                  'id','name','last_name'            
          )
->get();


$regional = DB::table('regiones')
->get();



$ciudades = DB::table('ciudades')
->get();



$general = DB::table('campos')
->select(DB::raw('pr_titulo_mat as titulo_mat'),
 DB::raw('pr_vender_mat as vender_mat'),
 DB::raw('pr_muestra_mat as muestra_mat'),
 DB::raw('pr_poblacion_mat as poblacion_mat'),
 DB::raw('pr_titulo_esp as titulo_esp'),
 DB::raw('pr_vender_esp as vender_esp'),
 DB::raw('pr_muestra_esp as muestra_esp'),
 DB::raw('pr_poblacion_esp as poblacion_esp'),
 DB::raw('pr_titulo_cie as titulo_cie'),
 DB::raw('pr_vender_cie as vender_cie'),
 DB::raw('pr_muestra_cie as muestra_cie'),
 DB::raw('pr_poblacion_cie as poblacion_cie'),
 DB::raw('pr_titulo_com as titulo_com'),
 DB::raw('pr_vender_com as vender_com'),
 DB::raw('pr_muestra_com as muestra_com'),
 DB::raw('pr_poblacion_com as poblacion_com'),
 DB::raw('pr_titulo_ing as titulo_ing'),
 DB::raw('pr_vender_ing as vender_ing'),
 DB::raw('pr_muestra_ing as muestra_ing'),
 DB::raw('pr_poblacion_ing as poblacion_ing'),
 DB::raw('pr_titulo_art as titulo_art'),
 DB::raw('pr_vender_art as vender_art'),
 DB::raw('pr_muestra_art as muestra_art'),
 DB::raw('pr_poblacion_art as poblacion_art'),
 DB::raw('pr_titulo_art as titulo_int'),
 DB::raw('pr_vender_art as vender_int'),
 DB::raw('pr_muestra_art as muestra_int'),
 DB::raw('pr_poblacion_int as poblacion_int'),
 DB::raw('colegio_id as colegio_id'),
 DB::raw('ano as ano'),
 DB::raw('grado_id as grado_id'))
->where('ciudad_id','=',$ciudad)
->where('ano','=',$ano)
->get();



$titulos = DB::table('titulo')->get();



$sumamat = DB::table('campos')
->select(DB::raw('sum(pr_vender_mat) as suma_mat'),
DB::raw('sum(pr_muestra_mat) as muestra_mat'),
DB::raw('sum(pr_poblacion_mat) as poblacion_mat'),
DB::raw('colegio_id as colegio_id'),
DB::raw('ano as ano'))
->where('ano','=',$ano)
->where('ciudad_id','=',$ciudad)
->groupBy('colegio_id')
->get();

$sumaesp = DB::table('campos')
->select(DB::raw('sum(pr_vender_esp) as suma_esp'),
DB::raw('sum(pr_muestra_esp) as muestra_esp'),
DB::raw('sum(pr_poblacion_esp) as poblacion_esp'),
DB::raw('colegio_id as colegio_id'),
DB::raw('ano as ano'))
->where('ano','=',$ano)
->where('ciudad_id','=',$ciudad)
->groupBy('colegio_id')
->get();



$sumacie = DB::table('campos')
->select(DB::raw('sum(pr_vender_cie) as suma_cie'),
DB::raw('sum(pr_muestra_cie) as muestra_cie'),
DB::raw('sum(pr_poblacion_cie) as poblacion_cie'),
DB::raw('colegio_id as colegio_id'),
DB::raw('ano as ano'))
->where('ano','=',$ano)
->where('ciudad_id','=',$ciudad)
->groupBy('colegio_id')
->get();



$sumacom = DB::table('campos')
->select(DB::raw('sum(pr_vender_com) as suma_com'),
DB::raw('sum(pr_muestra_com) as muestra_com'),
DB::raw('sum(pr_poblacion_com) as poblacion_com'),
DB::raw('colegio_id as colegio_id'),
DB::raw('ano as ano'))
->where('ano','=',$ano)
->where('ciudad_id','=',$ciudad)
->groupBy('colegio_id')
->get();


$sumaing = DB::table('campos')
->select(DB::raw('sum(pr_vender_ing) as suma_ing'),
DB::raw('sum(pr_muestra_ing) as muestra_ing'),
DB::raw('sum(pr_poblacion_ing) as poblacion_ing'),
DB::raw('colegio_id as colegio_id'),
DB::raw('ano as ano'))
->where('ano','=',$ano)
->where('ciudad_id','=',$ciudad)
->groupBy('colegio_id')
->get();

$sumaart = DB::table('campos')
->select(DB::raw('sum(pr_vender_art) as suma_art'),
DB::raw('sum(pr_muestra_art) as muestra_art'),
DB::raw('sum(pr_poblacion_art) as poblacion_art'),
DB::raw('colegio_id as colegio_id'),
DB::raw('ano as ano'))
->where('ano','=',$ano)
->where('ciudad_id','=',$ciudad)
->groupBy('colegio_id')
->get();


$sumaint = DB::table('campos')
->select(DB::raw('sum(pr_vender_int) as suma_int'),
DB::raw('sum(pr_muestra_int) as muestra_int'),
DB::raw('sum(pr_poblacion_int) as poblacion_int'),
DB::raw('colegio_id as colegio_id'),
DB::raw('ano as ano'))
->where('ano','=',$ano)
->where('ciudad_id','=',$ciudad)
->groupBy('colegio_id')
->get();

$adopciones = DB::table('campos')
->join('esseg','esseg.colegio_id','=','campos.colegio_id')
->leftJoin('descuento','descuento.colegio_id','=','campos.colegio_id')

 ->select(
 DB::raw('sum(pr_vender_mat*pr_valor_mat+pr_vender_esp*pr_valor_esp+pr_vender_cie*pr_valor_cie+pr_vender_com*pr_valor_com+pr_vender_int*pr_valor_int+pr_vender_ing*pr_valor_ing+pr_vender_art*pr_valor_art) as total_metval'),
 DB::raw('campos.colegio_id as colegio_id'),
  DB::raw('esseg as esseg'),
  DB::raw('descuento as descuento'),
 DB::raw('campos.ano as ano'))
 ->where('campos.ano','=',$ano)
 ->where('campos.ciudad_id','=',$ciudad)
 ->groupBy('campos.colegio_id')
 ->get();

$adopcionescon = DB::table('campos')
->join('esseg_con','esseg_con.colegio_id','=','campos.colegio_id')
->leftJoin('descuento','descuento.colegio_id','=','campos.colegio_id')
->leftJoin('fecha_meta','fecha_meta.colegio_id','=','campos.colegio_id')
->leftJoin('fecha_adopcion','fecha_adopcion.colegio_id','=','campos.colegio_id')

 ->select(
 DB::raw('sum(pr_vender_mat*pr_valor_mat+pr_vender_esp*pr_valor_esp+pr_vender_cie*pr_valor_cie+pr_vender_com*pr_valor_com+pr_vender_int*pr_valor_int+pr_vender_ing*pr_valor_ing+pr_vender_art*pr_valor_art) as total_metval'),
 DB::raw('campos.colegio_id as colegio_id'),
 DB::raw('fecha_meta.fecha as fecha_meta'),
  DB::raw('fecha_adopcion.fecha as fecha_adopcion'),
  DB::raw('valor as valor'),
  DB::raw('descuento as descuento'),
 DB::raw('campos.ano as ano'))
 ->where('campos.ano','=',$ano)
 ->where('campos.ciudad_id','=',$ciudad)
 ->groupBy('campos.colegio_id')
 ->get();



if(DB::table('proventas')->where('ano','=',$ano)->first()){
    return view('colegiomiig::generico')->with('general', $general)->with('colegios', $colegios)->with('titulos', $titulos)->with('sumamat', $sumamat)->with('sumaesp', $sumaesp)->with('sumacie', $sumacie)->with('sumacom', $sumacom)->with('sumaing', $sumaing)->with('sumaart', $sumaart)->with('sumaint', $sumaint)->with('esseg', $esseg)->with('essegcon', $essegcon)->with('representante', $representante)->with('regional', $regional)->with('ciudades', $ciudades)->with('ano', $ano)->with('adopciones', $adopciones)->with('adopcionescon', $adopcionescon);
}
    else{
 return view('colegiomiig::respuesta-filtro');

}

});

Route::get('/informe/gerentes-matriz', function () {

$ciudades = DB::table('ciudades')->get();
 return view('colegiomiig::filtro-informe')->with('ciudades', $ciudades);

});

Route::get('/filtro-gerentesnac', function () {

 return view('colegiomiig::filtro-gerentenac');

});





Route::get('/informe/gerentes', function () {

 $ano = Input::get('ano');

 

        $ciudades = DB::table('ciudades')
        ->get();


        $diferenciameta = DB::table('proventas')
         ->select(DB::raw('sum(pr_vender_mat+pr_vender_esp+pr_vender_cie+pr_vender_com+pr_vender_int+pr_vender_art+pr_vender_ing) as totalven'),
         DB::raw('sum(pr_vender_mat*pr_valor_mat+pr_vender_esp*pr_valor_esp+pr_vender_cie*pr_valor_cie+pr_vender_com*pr_valor_com+pr_vender_int*pr_valor_int+pr_vender_art*pr_valor_art+pr_vender_ing*pr_valor_ing) as totalval'),
         DB::raw('ciudad_id as ciudad_id'),
         DB::raw('ano as ano'))
         ->where('ano','=',$ano)
         ->groupBy('ciudad_id')
         ->get();

          $diferenciaadopcion = DB::table('campos')
         ->select(DB::raw('sum(pr_vender_mat+pr_vender_esp+pr_vender_cie+pr_vender_com+pr_vender_int+pr_vender_art+pr_vender_ing) as totalven'),
         DB::raw('sum(pr_vender_mat*pr_valor_mat+pr_vender_esp*pr_valor_esp+pr_vender_cie*pr_valor_cie+pr_vender_com*pr_valor_com+pr_vender_int*pr_valor_int+pr_vender_art*pr_valor_art+pr_vender_ing*pr_valor_ing) as totalval'),
         DB::raw('ciudad_id as ciudad_id'),
         DB::raw('ano as ano'))
         ->where('ano','=',$ano)
         ->groupBy('ciudad_id')
         ->get();







    
       $date = date("Y-m-d");
        $date_future = strtotime('+15 day', strtotime($date));
        $date_future = date('Y-m-d', $date_future);
        $date_futuretres = strtotime('+16 day', strtotime($date));
        $date_futuretres = date('Y-m-d', $date_futuretres);
        $date_futurecua = strtotime('+29 day', strtotime($date));
        $date_futurecua = date('Y-m-d', $date_futurecua);
        $date_futurecinc = strtotime('+30 day', strtotime($date));
        $date_futurecinc = date('Y-m-d', $date_futurecinc);



        $informes = DB::table('proventas')
        ->select(DB::raw('(pr_titulo_mat) as titulo_mat'),
         DB::raw('sum(pr_vender_mat*pr_valor_mat) as vender_mat'), 
         DB::raw('sum(pr_vender_esp*pr_valor_esp) as vender_esp'),
         DB::raw('sum(pr_vender_cie*pr_valor_cie) as vender_cie'),
         DB::raw('sum(pr_vender_com*pr_valor_com) as vender_com'),
         DB::raw('sum(pr_vender_int*pr_valor_int) as vender_int'),
         DB::raw('sum(pr_vender_ing*pr_valor_ing) as vender_ing'),
         DB::raw('sum(pr_vender_art*pr_valor_art) as vender_art'),
         DB::raw('sum(pr_vender_mat) as suma_mat'),
         DB::raw('sum(pr_vender_esp) as suma_esp'),
         DB::raw('sum(pr_vender_cie) as suma_cie'),
         DB::raw('sum(pr_vender_com) as suma_com'),
         DB::raw('sum(pr_vender_int) as suma_int'),
         DB::raw('sum(pr_vender_ing) as suma_ing'),
         DB::raw('sum(pr_vender_art) as suma_art'),
         DB::raw('sum(pr_muestra_mat) as muestra_mat'),
         DB::raw('sum(pr_muestra_esp) as muestra_esp'),
         DB::raw('sum(pr_muestra_cie) as muestra_cie'),
         DB::raw('sum(pr_muestra_com) as muestra_com'),
         DB::raw('sum(pr_muestra_int) as muestra_int'),
         DB::raw('sum(pr_muestra_ing) as muestra_ing'),
         DB::raw('sum(pr_muestra_art) as muestra_art'),
         DB::raw('sum(pr_vender_mat+pr_vender_esp+pr_vender_cie+pr_vender_com+pr_vender_int+pr_vender_ing+pr_vender_art) as total_met'),
         DB::raw('sum(pr_muestra_mat+pr_muestra_esp+pr_muestra_cie+pr_muestra_com+pr_muestra_int+pr_muestra_ing+pr_muestra_art) as total_muestramet'),
         DB::raw('sum(pr_vender_mat*pr_valor_mat+pr_vender_esp*pr_valor_esp+pr_vender_cie*pr_valor_cie+pr_vender_com*pr_valor_com+pr_vender_int*pr_valor_int+pr_vender_ing*pr_valor_ing+pr_vender_art*pr_valor_art) as total_metval'),
         DB::raw('ciudad_id as ciudad_id'),
         DB::raw('ano as ano'))
        ->where('ano','=',$ano)
        ->groupBy('ciudad_id')
        ->get();
   
        $rojo = DB::table("colegios")
                ->join('fecha_adopcion','colegios.id','=','fecha_adopcion.colegio_id')
                ->where('colegios.ciudad_id',1)
                ->where('fecha' ,'<', $date_future)->count();



          $informestotales = DB::table('proventas')
        ->select(DB::raw('(pr_titulo_mat) as titulo_mat'),
         DB::raw('sum(pr_vender_mat*pr_valor_mat) as vender_mat'), 
         DB::raw('sum(pr_vender_esp*pr_valor_esp) as vender_esp'),
         DB::raw('sum(pr_vender_cie*pr_valor_cie) as vender_cie'),
         DB::raw('sum(pr_vender_com*pr_valor_com) as vender_com'),
         DB::raw('sum(pr_vender_int*pr_valor_int) as vender_int'),
         DB::raw('sum(pr_vender_ing*pr_valor_ing) as vender_ing'),
         DB::raw('sum(pr_vender_art*pr_valor_art) as vender_art'),
         DB::raw('sum(pr_vender_mat) as suma_mat'),
         DB::raw('sum(pr_vender_esp) as suma_esp'),
         DB::raw('sum(pr_vender_cie) as suma_cie'),
         DB::raw('sum(pr_vender_com) as suma_com'),
         DB::raw('sum(pr_vender_int) as suma_int'),
         DB::raw('sum(pr_vender_ing) as suma_ing'),
         DB::raw('sum(pr_vender_art) as suma_art'),
         DB::raw('sum(pr_muestra_mat) as muestra_mat'),
         DB::raw('sum(pr_muestra_esp) as muestra_esp'),
         DB::raw('sum(pr_muestra_cie) as muestra_cie'),
         DB::raw('sum(pr_muestra_com) as muestra_com'),
         DB::raw('sum(pr_muestra_int) as muestra_int'),
         DB::raw('sum(pr_muestra_ing) as muestra_ing'),
         DB::raw('sum(pr_muestra_art) as muestra_art'),
         DB::raw('sum(pr_vender_mat+pr_vender_esp+pr_vender_cie+pr_vender_com+pr_vender_int+pr_vender_ing+pr_vender_art) as total_met'),
         DB::raw('sum(pr_vender_mat*pr_valor_mat+pr_vender_esp*pr_valor_esp+pr_vender_cie*pr_valor_cie+pr_vender_com*pr_valor_com+pr_vender_int*pr_valor_int+pr_vender_ing*pr_valor_ing+pr_vender_art*pr_valor_art) as total_metval'),
         DB::raw('ano as ano'))
        ->where('ano','=',$ano)
        ->get();
 
   

        $informesadopcion = DB::table('campos')
        ->select(DB::raw('sum(pr_vender_mat*pr_valor_mat) as vender_mat'),
         DB::raw('sum(pr_vender_esp*pr_valor_esp) as vender_esp'),
         DB::raw('sum(pr_vender_cie*pr_valor_cie) as vender_cie'),
         DB::raw('sum(pr_vender_com*pr_valor_com) as vender_com'),
         DB::raw('sum(pr_vender_int*pr_valor_int) as vender_int'),
         DB::raw('sum(pr_vender_ing*pr_valor_ing) as vender_ing'),
         DB::raw('sum(pr_vender_art*pr_valor_art) as vender_art'),
         DB::raw('sum(pr_vender_mat) as suma_mat'),
         DB::raw('sum(pr_vender_esp) as suma_esp'),
         DB::raw('sum(pr_vender_cie) as suma_cie'),
         DB::raw('sum(pr_vender_com) as suma_com'),
         DB::raw('sum(pr_vender_int) as suma_int'),
         DB::raw('sum(pr_vender_ing) as suma_ing'),
         DB::raw('sum(pr_vender_art) as suma_art'),
         DB::raw('sum(pr_muestra_mat) as muestra_mat'),
         DB::raw('sum(pr_muestra_esp) as muestra_esp'),
         DB::raw('sum(pr_muestra_cie) as muestra_cie'),
         DB::raw('sum(pr_muestra_com) as muestra_com'),
         DB::raw('sum(pr_muestra_int) as muestra_int'),
         DB::raw('sum(pr_muestra_ing) as muestra_ing'),
         DB::raw('sum(pr_muestra_art) as muestra_art'),
         DB::raw('sum(pr_vender_mat+pr_vender_esp+pr_vender_cie+pr_vender_com+pr_vender_int+pr_vender_ing+pr_vender_art) as total_adop'),
         DB::raw('sum(pr_vender_mat*pr_valor_mat+pr_vender_esp*pr_valor_esp+pr_vender_cie*pr_valor_cie+pr_vender_com*pr_valor_com+pr_vender_int*pr_valor_int+pr_vender_ing*pr_valor_ing+pr_vender_art*pr_valor_art) as total_adopval'),
         DB::raw('ciudad_id as ciudad_id'),
         DB::raw('ano as ano'))
        ->groupBy('ciudad_id')
        ->where('ano','=',$ano)
        ->get();


   



          $presupuestomet = DB::table('proventas')
        ->select(DB::raw('sum(pr_muestra_mat) as muestra_mat'),
         DB::raw('sum(pr_muestra_esp) as muestra_esp'),
         DB::raw('sum(pr_muestra_cie) as muestra_cie'),
         DB::raw('sum(pr_muestra_com) as muestra_com'),
         DB::raw('sum(pr_muestra_int) as muestra_int'),
         DB::raw('sum(pr_muestra_ing) as muestra_ing'),
         DB::raw('sum(pr_muestra_art) as muestra_art'),
         DB::raw('colegio_id as colegio_id'),
         DB::raw('ano as ano'))
         ->where('ano','=',$ano)
        ->get();



          $presupuestoadop = DB::table('campos')
        ->select(DB::raw('sum(pr_muestra_mat) as muestra_mat'),
         DB::raw('sum(pr_muestra_esp) as muestra_esp'),
         DB::raw('sum(pr_muestra_cie) as muestra_cie'),
         DB::raw('sum(pr_muestra_com) as muestra_com'),
         DB::raw('sum(pr_muestra_int) as muestra_int'),
         DB::raw('sum(pr_muestra_ing) as muestra_ing'),
         DB::raw('sum(pr_muestra_art) as muestra_art'),
         DB::raw('sum(pr_muestra_mat+pr_muestra_esp+pr_muestra_cie+pr_muestra_com+pr_muestra_int+pr_muestra_ing+pr_muestra_art) as total_adop'),
         DB::raw('colegio_id as colegio_id'),
         DB::raw('ano as ano'))
         ->where('ano','=',$ano)
         ->get();


       
        $esseg_con = DB::table('esseg_con')
        ->select(DB::raw('sum(valor) as valor'),
        DB::raw('ano as ano'),
        DB::raw('ciudad_id as ciudad_id'))
        ->where('ano','=',$ano)
        ->groupBy('ciudad_id')
        ->get();
          


          $informesadopciontotales = DB::table('campos')
        ->select(DB::raw('sum(pr_vender_mat*pr_valor_mat) as vender_mat'),
         DB::raw('sum(pr_vender_esp*pr_valor_esp) as vender_esp'),
         DB::raw('sum(pr_vender_cie*pr_valor_cie) as vender_cie'),
         DB::raw('sum(pr_vender_com*pr_valor_com) as vender_com'),
         DB::raw('sum(pr_vender_int*pr_valor_int) as vender_int'),
         DB::raw('sum(pr_vender_ing*pr_valor_ing) as vender_ing'),
         DB::raw('sum(pr_vender_art*pr_valor_art) as vender_art'),
         DB::raw('sum(pr_vender_mat) as suma_mat'),
         DB::raw('sum(pr_vender_esp) as suma_esp'),
         DB::raw('sum(pr_vender_cie) as suma_cie'),
         DB::raw('sum(pr_vender_com) as suma_com'),
         DB::raw('sum(pr_vender_int) as suma_int'),
         DB::raw('sum(pr_vender_ing) as suma_ing'),
         DB::raw('sum(pr_vender_art) as suma_art'),
         DB::raw('sum(pr_muestra_mat) as muestra_mat'),
         DB::raw('sum(pr_muestra_esp) as muestra_esp'),
         DB::raw('sum(pr_muestra_cie) as muestra_cie'),
         DB::raw('sum(pr_muestra_com) as muestra_com'),
         DB::raw('sum(pr_muestra_int) as muestra_int'),
         DB::raw('sum(pr_muestra_ing) as muestra_ing'),
         DB::raw('sum(pr_muestra_art) as muestra_art'),
         DB::raw('sum(pr_vender_mat+pr_vender_esp+pr_vender_cie+pr_vender_com+pr_vender_int+pr_vender_ing+pr_vender_art) as total_adop'),
         DB::raw('sum(pr_vender_mat*pr_valor_mat+pr_vender_esp*pr_valor_esp+pr_vender_cie*pr_valor_cie+pr_vender_com*pr_valor_com+pr_vender_int*pr_valor_int+pr_vender_ing*pr_valor_ing+pr_vender_art*pr_valor_art) as total_adopval'),
         DB::raw('representante_id as representante_id'),
         DB::raw('ano as ano'))
         ->where('ano','=',$ano)
        ->get();



        $date = date('Y-m-d');
        //convertimos la fecha 1 a objeto Carbon
$carbon1 = new \Carbon\Carbon($date);
//convertimos la fecha 2 a objeto Carbon
$carbon2 = new \Carbon\Carbon("2010-02-02 00:00:00");
//de esta manera sacamos la diferencia en minutos
$minutesDiff=$carbon1->diffInDays($carbon2);










        $esseg = DB::table('esseg')
        ->select(
         DB::raw('sum(esseg) as total_esseg'),
         DB::raw('ciudad_id as ciudad_id'),
        DB::raw('ano as ano'))
        ->where('ano','=',$ano)
        ->groupBy('ciudad_id')

        ->get();


        $rojos= DB::table('colegios')
        ->join('fecha_adopcion','colegios.id','=','fecha_adopcion.colegio_id')
        ->where('colegios.ciudad_id',2)->where('fecha' ,'<', '2019-09-28')
        ->groupBy('fecha_adopcion.colegio_id')
        ->orderBy('fecha_adopcion.fecha','desc')
        ->get();



     $rojo = DB::table('fecha_adopcion')
      ->join('colegios','colegios.id','=','fecha_adopcion.colegio_id')
        ->select(
        DB::raw('count(fecha) as fecha'),
        DB::raw('colegio_id as colegio_id'),
        DB::raw('ciudad_id as ciudad_id'),
        DB::raw('ano as ano'))
       ->where('fecha' ,'<', $date_futuretres)
       ->where('ano','=',$ano)
       ->groupBy('ciudad_id')
       ->get();


       $amarillo = DB::table('fecha_adopcion')
      ->join('colegios','colegios.id','=','fecha_adopcion.colegio_id')
        ->select(
        DB::raw('count(fecha) as fecha'),
        DB::raw('colegio_id as colegio_id'),
        DB::raw('ciudad_id as ciudad_id'),
        DB::raw('ano as ano'))
       ->whereBetween('fecha',[$date_futuretres, $date_futurecinc])
       ->where('ano','=',$ano)
       ->groupBy('ciudad_id')
       ->get();



        $verde = DB::table('fecha_adopcion')
      ->join('colegios','colegios.id','=','fecha_adopcion.colegio_id')
        ->select(
        DB::raw('count(fecha) as fecha'),
        DB::raw('colegio_id as colegio_id'),
        DB::raw('ciudad_id as ciudad_id'),
        DB::raw('ano as ano'))
       ->where('fecha' ,'>', $date_futurecinc)
       ->where('ano','=',$ano)
         ->groupBy('ciudad_id')
       ->get();
       

          $essegcol = DB::table('esseg')
        ->join('colegios','colegios.id','=','esseg.colegio_id')
        ->select(DB::raw('sum(esseg.esseg) as esseg'))
        ->where('ano','=',$ano)
        ->where('region_id','=',Auth::user()->regionid)
        ->get();

           $essegcolcon = DB::table('esseg_con')
        ->join('colegios','colegios.id','=','esseg_con.colegio_id')
        ->select(DB::raw('sum(valor) as valor'))
        ->where('ano','=',$ano)
        ->where('region_id','=',Auth::user()->regionid)
        ->get();





      


        $verdeweb = DB::table('colegios')
      ->leftJoin('fecha_adopcion','colegios.id','=','fecha_adopcion.colegio_id')
      ->leftJoin('campos','colegios.id','=','campos.colegio_id')
        ->select(
        DB::raw('count(fecha) as fecha'),
        DB::raw('count(campos.colegio_id) as adopcion, campos.ciudad_id'),
        DB::raw('colegios.ciudad_id as ciudad_id'),
        DB::raw('fecha_adopcion.ano as ano'))
       ->where('fecha' ,'<', '2019-10-15')
       ->where('campos.ciudad_id' ,'>=', '1')
       ->where('fecha_adopcion.ano','=',$ano)
       ->groupBy('colegios.ciudad_id')
       ->get();

             $rojoweb = DB::table('colegios')
      ->leftJoin('fecha_adopcion','colegios.id','=','fecha_adopcion.colegio_id')
      ->leftJoin('campos','colegios.id','=','campos.colegio_id')
        ->select(
        DB::raw('count(fecha) as fecha'),
        DB::raw('(campos.colegio_id) as adopcion, campos.ciudad_id'),
        DB::raw('colegios.ciudad_id as ciudad_id'),
        DB::raw('fecha_adopcion.ano as ano'))
       ->where('fecha' ,'<', '2019-10-15')
       ->whereNull('campos.ciudad_id')
       ->where('fecha_adopcion.ano','=',$ano)
       ->groupBy('colegios.ciudad_id')
       ->get();

          $amarilloweb = DB::table('colegios')
      ->leftJoin('fecha_adopcion','colegios.id','=','fecha_adopcion.colegio_id')
      ->leftJoin('campos','colegios.id','=','campos.colegio_id')
        ->select(
        DB::raw('count(fecha) as fecha'),
        DB::raw('count(campos.colegio_id) as adopcion,  campos.ciudad_id'),
        DB::raw('fecha_adopcion.colegio_id as colegio_id'),
        DB::raw('colegios.ciudad_id as ciudad_id'),
        DB::raw('fecha_adopcion.ano as ano'))
       ->where('fecha' ,'>', '2019-10-15')
       ->whereNull('campos.ciudad_id')
       ->where('fecha_adopcion.ano','=',$ano)

        ->groupBy('colegios.ciudad_id')
       ->get();

    

         $rojowebs = DB::table('fecha_adopcion')
      ->join('colegios','colegios.id','=','fecha_adopcion.colegio_id')
      ->leftJoin('campos','colegios.id','=','campos.colegio_id')
        ->select(
        DB::raw('count(fecha) as fecha'),
        DB::raw('count(campos.colegio_id) as adopcion'),
        DB::raw('fecha_adopcion.colegio_id as colegio_id'),
        DB::raw('colegios.ciudad_id as ciudad_id'),
        DB::raw('fecha_adopcion.ano as ano'))
       ->where('fecha' ,'<', '2019-10-15')
       ->where('fecha_adopcion.ano','=',$ano)
        ->groupBy('colegios.id')
       ->get();



       




  if(DB::table('proventas')->where('ano','=',$ano)->first()){
         return view('colegiomiig::informe', compact('informesweb','informesmat','informesesp','titulos','informeswebadop','representantes','ciudades','informes','informesadopcion','fechameta','fechaadopcion','proventas','esseg','essegcon','date','masa','informesadopcion','informestotales','informesadopciontotales','presupuestomet','presupuestoadop','colegiosman','dispapel','dispapelcam','date','date_futuretres','date_future','date_futuretres','date_futurecua','date_futurecinc','esseg_con','diferenciameta','diferenciaadopcion','rojo','verde','amarillo','verdeweb','amarilloweb','rojoweb'));
}
 else{
 return view('colegiomiig::respuesta-filtro');

}

});







Route::get('/colegio-descuentoaud/{id}', function ($id) {
    $descuentos = DB::table('descuento')->where('colegio_id', '=', $id)->get();
    $ano = DB::table('configuracion')->where('id','=',1)->get();
    $anos = DB::table('configuracion')->where('id','=',1)->get();
     $valores = DB::table('descuentos')->where('id', '=', 1)->get();
    return view('colegiomiig::descuento')->with('descuentos', $descuentos)->with('ano', $ano)->with('anos', $anos)->with('valores', $valores);
});

Route::get('/editar-descuentoaud/{id}', function ($id) {
    $descuentos = DB::table('descuento')->where('id', '=', $id)->get();
     $valores = DB::table('descuentos')->where('id', '=', 1)->get();
    return view('colegiomiig::editar-descuento')->with('descuentos', $descuentos)->with('valores', $valores);
});



Route::get('/eliminar-descuentoaud/{id}', 'Digitalmiig\Usuariomiig\Controllers\RepresentantesController@eliminardescuento');
Route::post('/creardescuentoaud', 'Digitalmiig\Usuariomiig\Controllers\RepresentantesController@createdescuento');
Route::post('/editardescuentoaud/{id}', 'Digitalmiig\Usuariomiig\Controllers\RepresentantesController@editardescuento');

Route::get('/gerentenal', function () {
    return view('usuariomiig::gerentenal');
});

Route::post('/crearcierrecolegio', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@cierrecolegio');
Route::post('actualizarcierrecolegio/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@actucolegio');



Route::get('/colegios-lista', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@colegiosnac');

Route::get('/representantes-lista', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@representantesnac');
Route::get('/lista-colegiosnac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@listacolegiosnac');

Route::get('proyeccionventasadopcionnac/{id}', function ($id) {

    $proventas = DB::table('campos')->where('colegio_id', '=', $id)->get();
    $proventasf = DB::table('campos')->where('colegio_id', '=', $id)->get();
    $proventasprimero = DB::table('campos')->where('colegio_id', '=', $id)->where('grado_id', '=', 1)->select('id')->orderBy('id', 'DESC')->first();   
    $proventassegundo = DB::table('campos')->where('colegio_id', '=', $id)->where('grado_id', '=', 2)->select('id')->orderBy('id', 'DESC')->first();   
    $proventastercero = DB::table('campos')->where('colegio_id', '=', $id)->where('grado_id', '=', 3)->select('id')->orderBy('id', 'DESC')->first();
    $proventascuarto = DB::table('campos')->where('colegio_id', '=', $id)->where('grado_id', '=', 4)->select('id')->orderBy('id', 'DESC')->first();
    $proventasquinto = DB::table('campos')->where('colegio_id', '=', $id)->where('grado_id', '=', 5)->select('id')->orderBy('id', 'DESC')->first();
    $proventassexto = DB::table('campos')->where('colegio_id', '=', $id)->where('grado_id', '=', 6)->select('id')->orderBy('id', 'DESC')->first();
    $proventasseptimo = DB::table('campos')->where('colegio_id', '=', $id)->where('grado_id', '=', 7)->select('id')->orderBy('id', 'DESC')->first();
    $proventasoctavo = DB::table('campos')->where('colegio_id', '=', $id)->where('grado_id', '=', 8)->select('id')->orderBy('id', 'DESC')->first();
    $proventasnoveno = DB::table('campos')->where('colegio_id', '=', $id)->where('grado_id', '=', 9)->select('id')->orderBy('id', 'DESC')->first();
    $proventasdecimo = DB::table('campos')->where('colegio_id', '=', $id)->where('grado_id', '=', 10)->select('id')->orderBy('id', 'DESC')->first();
    $proventasonce = DB::table('campos')->where('colegio_id', '=', $id)->where('grado_id', '=', 11)->select('id')->orderBy('id', 'DESC')->first();
    $ventas = DB::table('colegios')
    ->join('esseg_con','esseg_con.miig','=','colegios.codigo')
    ->where('colegios.id','=',$id)
    ->get();
    $ano = DB::table('configuracion')->where('id', '=', 1)->get();
    $anoweb = DB::table('configuracion')->where('id', '=', 1)->get();
    $anon = DB::table('configuracion')->where('id', '=', 1)->get();
    $anoe = DB::table('configuracion')->where('id', '=', 1)->get();
    $esseg = DB::table('esseg')->where('colegio_id', '=', $id)->get();
    $identificador = DB::table('campos')->where('colegio_id', '=', $id)->select('id')->orderBy('id', 'DESC')->first();
    $identificadores = DB::table('campos')->where('colegio_id', '=', $id)->select('id')->orderBy('id', 'DESC')->first();
     foreach($ano as $anoes){
    
        $fecha = DB::table('fecha_adopcion')->where('ano','=', $anoes->ano)->where('colegio_id','=',$id)->orderby('created_at','DESC')->take(1)->get();

        $matematicas = DB::table('titulo')
        ->join('campos','titulo.id','=','campos.pr_titulo_mat')
        ->select(DB::raw('sum(pr_vender_mat*precio) as vender_mat'))
        ->where('colegio_id', '=', $id)
        ->where('ano', '=', $anoes->ano)
        ->get();
        foreach($matematicas as $matematicasweb){
         $matematicaswebsd = $matematicasweb->vender_mat;
        }


        $ciencias = DB::table('titulo')
        ->join('campos','titulo.id','=','campos.pr_titulo_cie')
        ->select(DB::raw('sum(pr_vender_cie*precio) as vender_cie'))
        ->where('colegio_id', '=', $id)
        ->where('ano', '=', $anoes->ano)
        ->get();
        foreach($ciencias as $cienciasweb){
         $cienciaswebsd = $cienciasweb->vender_cie;
        }

        $espanol = DB::table('titulo')
        ->join('campos','titulo.id','=','campos.pr_titulo_esp')
        ->select(DB::raw('sum(pr_vender_esp*precio) as vender_esp'))
        ->where('colegio_id', '=', $id)
        ->where('ano', '=', $anoes->ano)
        ->get();
        foreach($espanol as $espanolweb){
         $espanolwebsd = $espanolweb->vender_esp;
        }

        $comprension = DB::table('titulo')
        ->join('campos','titulo.id','=','campos.pr_titulo_com')
        ->select(DB::raw('sum(pr_vender_com*precio) as vender_com'))
        ->where('colegio_id', '=', $id)
        ->where('ano', '=', $anoes->ano)
        ->get();
        foreach($comprension as $comprensionweb){
         $comprensionwebsd = $comprensionweb->vender_com;
        }

        $interes = DB::table('titulo')
        ->join('campos','titulo.id','=','campos.pr_titulo_int')
        ->select(DB::raw('sum(pr_vender_int*precio) as vender_int'))
        ->where('colegio_id', '=', $id)
        ->where('ano', '=', $anoes->ano)
        ->get();
        foreach($interes as $interesweb){
         $intereswebsd = $interesweb->vender_int;
        }

        $artistica = DB::table('titulo')
        ->join('campos','titulo.id','=','campos.pr_titulo_art')
        ->select(DB::raw('sum(pr_vender_art*precio) as vender_art'))
        ->where('colegio_id', '=', $id)
        ->where('ano', '=', $anoes->ano)
        ->get();
        foreach($artistica as $artisticaweb){
         $artisticawebsd = $artisticaweb->vender_art;
        }

        $ingles = DB::table('titulo')
        ->join('campos','titulo.id','=','campos.pr_titulo_ing')
        ->select(DB::raw('sum(pr_vender_ing*precio) as vender_ing'))
        ->where('colegio_id', '=', $id)
        ->where('ano', '=', $anoes->ano)
        ->get();
        foreach($ingles as $inglesweb){
         $ingleswebsd = $inglesweb->vender_ing;
        }
        }
         
        $total = $cienciaswebsd+$matematicaswebsd+$espanolwebsd+$comprensionwebsd+$intereswebsd+$artisticawebsd+$ingleswebsd;
    return view('usuariomiig::proyecciongradosadopcionnac', compact('proventas','proventasf','proventasprimero','proventassegundo','proventastercero','proventascuarto','proventasquinto','proventassexto','proventasseptimo','proventasoctavo','proventasnoveno','proventasdecimo','proventasonce','proventasonce','ano','identificador','anon','anoe','identificadores','total','esseg','fecha','anoweb','ventas'));

});

Route::get('editar-gradowebasinac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradoasi');
Route::get('editar-gradoweb-segundoasinac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradosegundoasi');
Route::get('editar-gradoweb-terceroasinac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradoterceroasi');
Route::get('editar-gradoweb-cuartoasinac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradocuartoasi');
Route::get('editar-gradoweb-quintoasinac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradoquintoasi');
Route::get('editar-gradoweb-sextoasinac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradosextoasi');
Route::get('editar-gradoweb-septimoasinac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradoseptimoasi');
Route::get('editar-gradoweb-octavoasinac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradooctavoasi');
Route::get('editar-gradoweb-novenoasinac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradonovenoasi');
Route::get('editar-gradoweb-decimoasinac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradodecimoasi');
Route::get('editar-gradoweb-onceasinac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradoonceasi');



Route::get('editar-gradowebnac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargrado');
Route::get('editar-gradoweb-segundonac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradosegundo');
Route::get('editar-gradoweb-terceronac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradotercero');
Route::get('editar-gradoweb-cuartonac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradocuarto');
Route::get('editar-gradoweb-quintonac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradoquinto'); 
Route::get('editar-gradoweb-sextonac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradosexto');
Route::get('editar-gradoweb-septimonac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradoseptimo');
Route::get('editar-gradoweb-octavonac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradooctavo');
Route::get('editar-gradoweb-novenonac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradonoveno');
Route::get('editar-gradoweb-decimonac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradodecimo');
Route::get('editar-gradoweb-oncenac/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@editargradoonce');



Route::get('proyeccionventasnac/{id}', function ($id) {
   
    $colegios = DB::table('colegios')->where('id',"=",$id)->get();
    $proventas = DB::table('proventas')->where('colegio_id', '=', $id)->get();
    $proventasf = DB::table('proventas')->where('colegio_id', '=', $id)->get();
    $proventasprimero = DB::table('proventas')->where('colegio_id', '=', $id)->where('grado_id', '=', 1)->select('id')->orderBy('id', 'DESC')->first();   
    $proventassegundo = DB::table('proventas')->where('colegio_id', '=', $id)->where('grado_id', '=', 2)->select('id')->orderBy('id', 'DESC')->first();   
    $proventastercero = DB::table('proventas')->where('colegio_id', '=', $id)->where('grado_id', '=', 3)->select('id')->orderBy('id', 'DESC')->first();
    $proventascuarto = DB::table('proventas')->where('colegio_id', '=', $id)->where('grado_id', '=', 4)->select('id')->orderBy('id', 'DESC')->first();
    $proventasquinto = DB::table('proventas')->where('colegio_id', '=', $id)->where('grado_id', '=', 5)->select('id')->orderBy('id', 'DESC')->first();
    $proventassexto = DB::table('proventas')->where('colegio_id', '=', $id)->where('grado_id', '=', 6)->select('id')->orderBy('id', 'DESC')->first();
    $proventasseptimo = DB::table('proventas')->where('colegio_id', '=', $id)->where('grado_id', '=', 7)->select('id')->orderBy('id', 'DESC')->first();
    $proventasoctavo = DB::table('proventas')->where('colegio_id', '=', $id)->where('grado_id', '=', 8)->select('id')->orderBy('id', 'DESC')->first();
    $proventasnoveno = DB::table('proventas')->where('colegio_id', '=', $id)->where('grado_id', '=', 9)->select('id')->orderBy('id', 'DESC')->first();
    $proventasdecimo = DB::table('proventas')->where('colegio_id', '=', $id)->where('grado_id', '=', 10)->select('id')->orderBy('id', 'DESC')->first();
    $proventasonce = DB::table('proventas')->where('colegio_id', '=', $id)->where('grado_id', '=', 11)->select('id')->orderBy('id', 'DESC')->first();
    $ano = DB::table('configuracion')->where('id', '=', 1)->get();
    $anoweb = DB::table('configuracion')->where('id', '=', 1)->get();
    $anon = DB::table('configuracion')->where('id', '=', 1)->get();
    $anoe = DB::table('configuracion')->where('id', '=', 1)->get();
    $esseg = DB::table('esseg')->where('colegio_id', '=', $id)->get();
    $identificador = DB::table('proventas')->where('colegio_id', '=', $id)->select('id')->orderBy('id', 'DESC')->first();
    $identificadores = DB::table('proventas')->where('colegio_id', '=', $id)->select('id')->orderBy('id', 'DESC')->first();
    foreach($ano as $anoes){
    
    $cierre = DB::table('cierre')->where('colegio_id', '=', $id)->where('ano', '=', $anoes->ano)->get();

         $fecha = DB::table('fecha_meta')->where('ano','=', $anoes->ano)->where('colegio_id','=',$id)->get();   
        $matematicas = DB::table('titulo')
        ->join('proventas','titulo.id','=','proventas.pr_titulo_mat')
        ->select(DB::raw('sum(pr_vender_mat*precio) as vender_mat'))
        ->where('colegio_id', '=', $id)
        ->where('ano', '=', $anoes->ano)
        ->get();
        foreach($matematicas as $matematicasweb){
         $matematicaswebsd = $matematicasweb->vender_mat;
        }

        $ciencias = DB::table('titulo')
        ->join('proventas','titulo.id','=','proventas.pr_titulo_cie')
        ->select(DB::raw('sum(pr_vender_cie*precio) as vender_cie'))
        ->where('colegio_id', '=', $id)
        ->where('ano', '=', $anoes->ano)
        ->get();
        foreach($ciencias as $cienciasweb){
         $cienciaswebsd = $cienciasweb->vender_cie;
        }

        $espanol = DB::table('titulo')
        ->join('proventas','titulo.id','=','proventas.pr_titulo_esp')
        ->select(DB::raw('sum(pr_vender_esp*precio) as vender_esp'))
        ->where('colegio_id', '=', $id)
        ->where('ano', '=', $anoes->ano)
        ->get();
        foreach($espanol as $espanolweb){
         $espanolwebsd = $espanolweb->vender_esp;
        }

        $comprension = DB::table('titulo')
        ->join('proventas','titulo.id','=','proventas.pr_titulo_com')
        ->select(DB::raw('sum(pr_vender_com*precio) as vender_com'))
        ->where('colegio_id', '=', $id)
        ->where('ano', '=', $anoes->ano)
        ->get();
        foreach($comprension as $comprensionweb){
         $comprensionwebsd = $comprensionweb->vender_com;
        }

        $interes = DB::table('titulo')
        ->join('proventas','titulo.id','=','proventas.pr_titulo_int')
        ->select(DB::raw('sum(pr_vender_int*precio) as vender_int'))
        ->where('colegio_id', '=', $id)
        ->where('ano', '=', $anoes->ano)
        ->get();
        foreach($interes as $interesweb){
         $intereswebsd = $interesweb->vender_int;
        }

        $artistica = DB::table('titulo')
        ->join('proventas','titulo.id','=','proventas.pr_titulo_art')
        ->select(DB::raw('sum(pr_vender_art*precio) as vender_art'))
        ->where('colegio_id', '=', $id)
        ->where('ano', '=', $anoes->ano)
        ->get();
        foreach($artistica as $artisticaweb){
         $artisticawebsd = $artisticaweb->vender_art;
        }

        $ingles = DB::table('titulo')
        ->join('proventas','titulo.id','=','proventas.pr_titulo_ing')
        ->select(DB::raw('sum(pr_vender_ing*precio) as vender_ing'))
        ->where('colegio_id', '=', $id)
        ->where('ano', '=', $anoes->ano)
        ->get();
        foreach($ingles as $inglesweb){
         $ingleswebsd = $inglesweb->vender_ing;
        }
        }
         
        $total = $cienciaswebsd+$matematicaswebsd+$espanolwebsd+$comprensionwebsd+$intereswebsd+$artisticawebsd+$ingleswebsd;
    return view('usuariomiig::proyecciongradosnac', compact('proventas','proventasf','proventasprimero','proventassegundo','proventastercero','proventascuarto','proventasquinto','proventassexto','proventasseptimo','proventasoctavo','proventasnoveno','proventasdecimo','proventasonce','proventasonce','ano','identificador','anon','anoe','identificadores','total','esseg','anoweb','fecha','cierre','colegios'));

});


Route::get('grado-primeronac/{id}', function ($id) {
   $titulo = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
   $titulof = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
   $adopciones = DB::table('adopciones')->where('id', '=', 1)->get();
   $region = Digitalmiig\Colegiomiig\Colegio::find($id);
   $date = DB::table('configuracion')->where('id', '=', 1)->get();
   $proventas = DB::table('proventas')
   ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
   ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradoprimero', compact('titulo','titulof','region','date','proventas','adopciones'));
});


Route::get('grado-segundonac/{id}', function ($id) {
   $titulo = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
   $titulof = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
    ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
    ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradosegundo', compact('titulo','titulof','region','date','proventas'));
});


Route::get('grado-terceronac/{id}', function ($id) {
     $titulo = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
   $titulof = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
        ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradotercero', compact('titulo','titulof','region','date','proventas'));
});


Route::get('grado-cuartonac/{id}', function ($id) {
  $titulo = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
   $titulof = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
        ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradocuarto', compact('titulo','titulof','region','date','proventas'));
});


Route::get('grado-quintonac/{id}', function ($id) {
    $titulo = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
   $titulof = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('campos')
        ->join('titulo', 'titulo.id', '=', 'campos.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradoquinto', compact('titulo','titulof','region','date','proventas'));
});

Route::get('grado-sextonac/{id}', function ($id) {
    $titulo = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
   $titulof = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
        ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradosexto', compact('titulo','titulof','region','date','proventas'));
});

Route::get('grado-septimonac/{id}', function ($id) {
    $titulo = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
   $titulof = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
        ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradoseptimo', compact('titulo','titulof','region','date','proventas'));
});

Route::get('grado-octavonac/{id}', function ($id) {
  $titulo = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
   $titulof = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
        ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradooctavo', compact('titulo','titulof','region','date','proventas'));
});

Route::get('grado-novenonac/{id}', function ($id) {
   $titulo = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
   $titulof = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
        ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradonoveno', compact('titulo','titulof','region','date','proventas'));
});

Route::get('grado-decimonac/{id}', function ($id) {
  $titulo = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
   $titulof = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
        ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradodecimo', compact('titulo','titulof','region','date','proventas'));
});

Route::get('grado-oncenac/{id}', function ($id) {
    $titulo = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
   $titulof = DB::table('colegios')
   ->join('titulo','colegios.adopcion', '=', 'titulo.portafolio')->where('colegios.id', '=', $id)->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
        ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradoonce', compact('titulo','titulof','region','date','proventas'));
});


Route::get('grado-primeroadopcionnac/{id}', function ($id) {

    $colegios = DB::table('colegios')->where('id', "=", $id)->get();
    $titulo = DB::table('titulo')->get();
    $titulof = DB::table('titulo')->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
        ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradoprimeroadopcion', compact('titulo','titulof','region','date','proventas','colegios'));
});


Route::get('grado-segundoadopcionnac/{id}', function ($id) {
    $colegios = DB::table('colegios')->where('id', "=", $id)->get();
    $titulo = DB::table('titulo')->get();
    $titulof = DB::table('titulo')->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
        ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradosegundoadopcion', compact('titulo','titulof','region','date','proventas','colegios'));
});


Route::get('grado-terceroadopcionnac/{id}', function ($id) {
    $colegios = DB::table('colegios')->where('id', "=", $id)->get();
    $titulo = DB::table('titulo')->get();
    $titulof = DB::table('titulo')->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
        ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradoterceroadopcion', compact('titulo','titulof','region','date','proventas','colegios'));
});


Route::get('grado-cuartoadopcionnac/{id}', function ($id) {
    $colegios = DB::table('colegios')->where('id', "=", $id)->get();
    $titulo = DB::table('titulo')->get();
    $titulof = DB::table('titulo')->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
        ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradocuartoadopcion', compact('titulo','titulof','region','date','proventas','colegios'));
});


Route::get('grado-quintoadopcionnac/{id}', function ($id) {
    $colegios = DB::table('colegios')->where('id', "=", $id)->get();
    $titulo = DB::table('titulo')->get();
    $titulof = DB::table('titulo')->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('campos')
        ->join('titulo', 'titulo.id', '=', 'campos.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradoquintoadopcion', compact('titulo','titulof','region','date','proventas','colegios'));
});

Route::get('grado-sextoadopcionnac/{id}', function ($id) {
    $colegios = DB::table('colegios')->where('id', "=", $id)->get();
    $titulo = DB::table('titulo')->get();
    $titulof = DB::table('titulo')->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
        ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradosextoadopcion', compact('titulo','titulof','region','date','proventas','colegios'));
});

Route::get('grado-septimoadopcionnac/{id}', function ($id) {
    $colegios = DB::table('colegios')->where('id', "=", $id)->get();
    $titulo = DB::table('titulo')->get();
    $titulof = DB::table('titulo')->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
        ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradoseptimoadopcion', compact('titulo','titulof','region','date','proventas','colegios'));
});

Route::get('grado-octavoadopcionnac/{id}', function ($id) {
    $colegios = DB::table('colegios')->where('id', "=", $id)->get();
    $titulo = DB::table('titulo')->get();
    $titulof = DB::table('titulo')->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
        ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradooctavoadopcion', compact('titulo','titulof','region','date','proventas','colegios'));
});

Route::get('grado-novenoadopcionnac/{id}', function ($id) {
    $colegios = DB::table('colegios')->where('id', "=", $id)->get();
    $titulo = DB::table('titulo')->get();
    $titulof = DB::table('titulo')->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
        ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradonovenoadopcion', compact('titulo','titulof','region','date','proventas','colegios'));
});

Route::get('grado-decimoadopcionnac/{id}', function ($id) {
    $colegios = DB::table('colegios')->where('id', "=", $id)->get();
    $titulo = DB::table('titulo')->get();
    $titulof = DB::table('titulo')->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
        ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradodecimoadopcion', compact('titulo','titulof','region','date','proventas','colegios'));
});

Route::get('grado-onceadopcionnac/{id}', function ($id) {
    $colegios = DB::table('colegios')->where('id', "=", $id)->get();
    $titulo = DB::table('titulo')->get();
    $titulof = DB::table('titulo')->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $proventas = DB::table('proventas')
        ->join('titulo', 'titulo.id', '=', 'proventas.pr_titulo_mat')
        ->where('colegio_id', '=', $id)->get();
                         
    return view('usuariomiig::gradoonceadopcion', compact('titulo','titulof','region','date','proventas','colegios'));
});


});























Route::get('/memar/ajax-subcater',function(){

        $cat_id = Input::get('cat_id');
        $subcategories = Digitalmiig\Usuariomiig\User::where('regionid', '=', $cat_id)->where('rol_id', '=', 5)->get();
        return Response::json($subcategories);
});





Route::post('/crearproyec', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@createpro');




Route::group(['middleware' => ['auditorjr']], function (){

// Rol AuditorJR
Route::get('/auditorjr', function () {
    $ciudades = DB::table('ciudades')->orderBy('n_ciudad', 'asc')->get();
    return view('colegiomiig::auditorjr')->with('ciudades', $ciudades);
});













Route::get('/eliminar-poblacion/{id}', 'Digitalmiig\Colegiomiig\Controllers\PoblacionesController@destroy');

Route::get('/crear-producto/{id}', function ($id) {
    $asignaturas = DB::table('datos')->where('colegio_id', '=', $id)->get();
    $categories = Digitalmiig\Titulomiig\Grado::all();
    $grados = DB::table('grados')->get();
    $region = Digitalmiig\Colegiomiig\Colegio::find($id);
    $data = DB::table('campos')->where('colegio_id', $id)->whereIn('grado_id', [1, 2, 3])->exists();
    $visuales = Digitalmiig\Colegiomiig\Colegio::find($id);
    $titulo = DB::table('titulo')->get();
    $colegios = DB::table('colegios')->where('id','=',$id)->get();
    $editorial = DB::table('editoriales')->get();
    $areas = DB::table('colegios')->get();
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $ano =  DB::table('configuracion')->where('id', '=', 1)->get();
    return view('colegiomiig::crear-producto')->with('grados', $grados)->with('data', $data)->with('editorial', $editorial)->with('editoriala', $editorial)->with('editorialb', $editorial)->with('editorialc', $editorial)->with('editoriald', $editorial)->with('editoriale', $editorial)->with('editorialf', $editorial)->with('region', $region)->with('categories', $categories)->with('colegios', $colegios)->with('visuales', $visuales)->with('titulo', $titulo)->with('titulof', $titulo)->with('areas', $areas)->with('asignaturas', $asignaturas)->with('date', $date)->with('ano', $ano);
});

Route::post('/crearproducto', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@createproducto');










});




Route::get('/memo/ajax-subcat',function(){

        $cat_id = Input::get('cat_id');
        $subcategories = Digitalmiig\Colegiomiig\Ciudad::where('region_id', '=', $cat_id)->get();
        return Response::json($subcategories);
});

Route::get('/mema/ajax-subcatder',function(){

        $cat_id = Input::get('cat_id');
        $subcategories = DB::table('users')->where('ciudadid', '=', $cat_id)->get();
        return Response::json($subcategories);
});


Route::get('validacioncorreo', function () {
          $user = DB::table('users')->where('email', Input::get('email'))->count();
    if($user > 0) {
        $isAvailable = FALSE;
    } else {
        $isAvailable = TRUE;
    }
    echo json_encode(
            array(
                'valid' => $isAvailable
            )); 

});

Route::get('validaciudad', function () {
          $user = DB::table('ciudades')->where('n_ciudad', Input::get('ciudad'))->count();
    if($user > 0) {
        $isAvailable = FALSE;
    } else {
        $isAvailable = TRUE;
    }
    echo json_encode(
            array(
                'valid' => $isAvailable
            )); 

});

Route::get('validacioncodigo', function () {
          $user = DB::table('colegios')->where('codigo', Input::get('codigo'))->count();
    if($user > 0) {
        $isAvailable = FALSE;
    } else {
        $isAvailable = TRUE;
    }
    echo json_encode(
            array(
                'valid' => $isAvailable
            )); 

});
