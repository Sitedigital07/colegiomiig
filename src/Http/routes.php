<?php

// Rol Auditor

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

Route::get('/memo/ajax-subcat',function(){

        $cat_id = Input::get('cat_id');
        $subcategories = App\Ciudad::where('region_id', '=', $cat_id)->get();
        return Response::json($subcategories);
});

Route::get('/mema/ajax-subcat',function(){

        $cat_id = Input::get('cat_id');
        $subcategories = App\Representante::where('agencia', '=', $cat_id)->get();
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

Route::group(['middleware' => ['auditor']], function (){

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
   
       $colegios = DB::table('colegios')
         ->join('representantes', 'colegios.representante_id', '=', 'representantes.id')
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
         
      return view('colegiomiig::informe-generalaud')->with('colegios', $colegios)->with('titulos', $titulos)->with('totales', $totales)->with('totalcolegios', $totalcolegios)->with('totallibros', $totallibros)->with('totalrepresentantes', $totalrepresentantes)->with('totalpesos', $totalpesos)->with('representantes', $representantes)->with('totalibrosedito', $totalibrosedito)->with('porcentajeventastotal', $porcentajeventastotal)->with('porcentajeventas', $porcentajeventas);

        
});

Route::post('informe/generalauditor', function(){
       
       $min_price = Input::has('min_price') ? Input::get('min_price') : 0;
       $max_price = Input::has('max_price') ? Input::get('max_price') : 10000000;
       $clientes =  Input::get('cliente') ;
       $estados =  Input::get('estado') ;
       $representantes =  Input::get('representante') ;
   
       $colegios = DB::table('colegios')
         ->join('representantes', 'colegios.representante_id', '=', 'representantes.id')
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
         
      return view('colegiomiig::informe-generalaud')->with('colegios', $colegios)->with('titulos', $titulos)->with('totales', $totales)->with('totalcolegios', $totalcolegios)->with('totallibros', $totallibros)->with('totalrepresentantes', $totalrepresentantes)->with('totalpesos', $totalpesos)->with('representantes', $representantes)->with('totalibrosedito', $totalibrosedito)->with('porcentajeventastotal', $porcentajeventastotal)->with('porcentajeventas', $porcentajeventas);

        
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


Route::group(['middleware' => ['gerentereg']], function (){
Route::get('/gerentereg', function () {
    $colegios = DB::table('colegios')
    ->where('region_id', '=', Auth::user()->region)->get();
    $representantes = DB::table('representantes')
    ->where('region_id', '=', Auth::user()->region)->get();
    return view('colegiomiig::gerentereg')->with('colegios', $colegios)->with('representantes', $representantes);
});




Route::get('/informe/vendedorreg', function () {
    $colegios = DB::table('colegios')
    ->where('region_id','=',Auth::user()->region)
    ->get();
    $representantes = DB::table('representantes')
    ->where('region_id','=',Auth::user()->region)
    ->get();
    return view('colegiomiig::informe-vendedorreg')->with('colegios', $colegios)->with('representantes', $representantes);
});

Route::post('informe/versusreg', function(){
       
       $min_price = Input::has('min_price') ? Input::get('min_price') : 0;
       $max_price = Input::has('max_price') ? Input::get('max_price') : 10000000;
       $clientes =  Input::get('cliente') ;
       $estados =  Input::get('estado') ;
       $representantes =  Input::get('representante') ;
   
       $vendedores = DB::table('representantes')
            ->where('representantes.id', 'like', '%' . $representantes . '%')
            ->where('region_id','=',Auth::user()->region)
            ->get();

        $colegios = DB::table('representantes')
            ->join('colegios', 'colegios.representante_id', '=', 'representantes.id')
            ->where('representantes.id', 'like', '%' . $representantes . '%')
            ->where('colegios.region_id','=',Auth::user()->region)
            ->get();

        $totalauditoria = DB::table('campos')
            ->join('titulo', 'campos.titulo', '=', 'titulo.id')
            ->selectRaw('sum(cantidad*precio) as suma')
            ->selectRaw('(colegio_id) as totalid')
            ->where('ano', 'like', '%' . $estados . '%')
            ->where('region_id','=',Auth::user()->region)
            ->groupBy('colegio_id')
            ->get();

        $totalventas = DB::table('proventas')
            ->join('titulo', 'proventas.titulo', '=', 'titulo.id')
            ->selectRaw('sum(cantidad*precio) as suma')
            ->selectRaw('(colegio_id) as totalid')
            ->where('ano', 'like', '%' . $estados . '%')
            ->where('region_id','=',Auth::user()->region)
            ->groupBy('colegio_id')
            ->get();

        $totalrpventa = DB::table('proventas')
            ->join('titulo', 'proventas.titulo', '=', 'titulo.id')
            ->selectRaw('sum(cantidad*precio) as suma')
            ->where('ano', 'like', '%' . $estados . '%')
            ->selectRaw('(representante_id) as totalid')
            ->where('region_id','=',Auth::user()->region)
            ->where('titulo', '>', 0)
            ->groupBy('representante_id')
            ->get();

        $totalrpauditor = DB::table('campos')
            ->join('titulo', 'campos.titulo', '=', 'titulo.id')
            ->selectRaw('sum(cantidad*precio) as suma')
            ->where('ano', 'like', '%' . $estados . '%')
            ->selectRaw('(representante_id) as totalid')
            ->where('region_id','=',Auth::user()->region)
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
         ->where('colegios.region_id','=',Auth::user()->region)
         ->get();

        $titulos = DB::table('proventas')
         ->join('titulo', 'proventas.titulo', '=', 'titulo.id')
         ->where('colegio_id', 'like', '%' . $clientes . '%')
         ->where('representante_id', 'like', '%' . $representantes . '%')
         ->where('ano', 'like', '%' . $estados . '%')
         ->where('region_id','=',Auth::user()->region)
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
         ->where('region_id','=',Auth::user()->region)
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
         ->where('region_id','=',Auth::user()->region)
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
         ->where('region_id','=',Auth::user()->region)
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
         ->where('region_id','=',Auth::user()->region)
         ->selectRaw('sum(cantidad*precio) as suma')
         ->selectRaw('(colegio_id) as totalid')
         ->groupBy('colegio_id')
         ->get();


         $totalcolegios = DB::table('colegios')

         ->where('region_id','=',Auth::user()->region)
         ->selectRaw('count(region_id) as conteo')
         ->groupBy('region_id')
         ->get();

         $totallibros = DB::table('proventas')
       
         ->where('region_id','=',Auth::user()->region)
         ->selectRaw('sum(cantidad) as conteo')
         ->groupBy('region_id')
         ->get();         

          $totalrepresentantes = DB::table('representantes')
       
         ->where('region_id','=',Auth::user()->region)
         ->selectRaw('count(id) as conteo')
         ->groupBy('region_id')
         ->get();         

         
      return view('colegiomiig::informes-region')->with('colegios', $colegios)->with('titulos', $titulos)->with('totales', $totales)->with('totalcolegios', $totalcolegios)->with('totallibros', $totallibros)->with('totalrepresentantes', $totalrepresentantes)->with('totalpesos', $totalpesos)->with('representantes', $representantes);

        
});

});





Route::get('/dashboard', function () {
    $colegios = App\Colegio::all()->count();
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
        ->orderBy('cantidad', 'desc')
        ->get();


    $representantes = DB::table('representantes')
        ->join('campos', 'representantes.id', '=', 'campos.representante_id')
        ->select(DB::raw('sum(cantidad) as cantidad'),DB::raw('(nombre) as nombre'))
        ->groupBy('representante_id')
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
        ->get();



        $aperturas = DB::table('colegios')
        ->join('ciudades', 'colegios.ciudad_id', '=', 'ciudades.ids')
        ->select(DB::raw('count(*) as cantidad'),DB::raw('(n_ciudad) as ciudad'))
        ->groupBy('ciudad_id')
        ->orderBy('cantidad', 'desc')
        ->get();
        
    return view('colegiomiig::dashboard')->with('colegios', $colegios)->with('despachos', $despachos)->with('adopcioncompleta', $adopcioncompleta)->with('adopcionlimitada', $adopcionlimitada)->with('total', $total)->with('representantes', $representantes)->with('totaleditoriales', $totaleditoriales)->with('aperturas', $aperturas)->with('colegionames', $colegionames)->with('totalyl', $totalyl)->with('librosano', $librosano);
});
































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
    return view('colegiomiig::crear-ciudad')->with('ciudad', $ciudad);
});

Route::post('/crearciudad', 'Digitalmiig\Colegiomiig\Controllers\CiudadesController@create');

Route::get('/editar-ciudad/{id}', function ($id) {
    $ciudades = DB::table('ciudades')->where('ids', $id)->get();
    return view('colegiomiig::editar-ciudad')->with('ciudades', $ciudades);
});

Route::post('/editarciudad/{id}', 'Digitalmiig\Colegiomiig\Controllers\CiudadesController@update');

Route::get('/eliminar-ciudad/{id}', 'Digitalmiig\Colegiomiig\Controllers\CiudadesController@destroy');


Route::get('proyeccion/{id}', function ($id) {
    $represen = DB::table('colegios')->where('id', '=', $id)->get();
    $fechas =  DB::table('proyeccion')->where('colegio_id', $id)->orderBy('id', 'asc')->get();
    $conteo = DB::table('proyeccion')->where('colegio_id', $id)->count();
    return view('colegiomiig::proyeccion')->with('fechas', $fechas)->with('conteo', $conteo)->with('represen', $represen);
});

Route::post('/crearproyec', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@createpro');





// Rol AuditorJR
Route::get('/auditorjr', function () {
    $ciudades = DB::table('ciudades')->orderBy('n_ciudad', 'asc')->get();
    return view('colegiomiig::auditorjr')->with('ciudades', $ciudades);
});


Route::get('/colegios/auditores/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@colegioauditores');

Route::get('/poblacion-registrada/{id}', 'Digitalmiig\Colegiomiig\Controllers\PoblacionesController@show');


Route::get('/colegio-poblacion/{id}', function ($id) {
    date_default_timezone_set('America/Bogota');
    $date = date('Y');
    $ano =  DB::table('configuracion')->where('id', '=', 1)->get();
    $datos = DB::table('datos')->where('colegio_id', $id)->get();
    $data = DB::table('datos')->where('colegio_id', $id)->where('ano', $date)->exists();

    return view('colegiomiig::crear-mercado')->with('data', $data)->with('date', $date)->with('datos', $datos)->with('ano', $ano);
});

Route::post('/poblaciones', 'Digitalmiig\Colegiomiig\Controllers\PoblacionesController@create');

Route::get('/editar-poblacion/{id}', 'Digitalmiig\Colegiomiig\Controllers\PoblacionesController@edit');

Route::post('/update-mercado/{id}', 'Digitalmiig\Colegiomiig\Controllers\PoblacionesController@update');

Route::get('/eliminar-poblacion/{id}', 'Digitalmiig\Colegiomiig\Controllers\PoblacionesController@destroy');

Route::get('/crear-producto/{id}', function ($id) {
    $asignaturas = DB::table('datos')->where('colegio_id', '=', $id)->get();
    $categories = App\Grado::all();
    $grados = DB::table('grados')->get();
    $region = App\Colegio::find($id);
    $data = DB::table('campos')->where('colegio_id', $id)->whereIn('grado_id', [1, 2, 3])->exists();
    $visuales = App\Colegio::find($id);
    $titulo = DB::table('titulo')->get();
    $colegios = DB::table('colegios')->where('id','=',$id)->get();
    $editorial = DB::table('editoriales')->get();
    $areas = DB::table('colegios')->get();
    $date = DB::table('configuracion')->where('id', '=', 1)->get();
    $ano =  DB::table('configuracion')->where('id', '=', 1)->get();
    return view('colegiomiig::crear-producto')->with('grados', $grados)->with('data', $data)->with('editorial', $editorial)->with('editoriala', $editorial)->with('editorialb', $editorial)->with('editorialc', $editorial)->with('editoriald', $editorial)->with('editoriale', $editorial)->with('editorialf', $editorial)->with('region', $region)->with('categories', $categories)->with('colegios', $colegios)->with('visuales', $visuales)->with('titulo', $titulo)->with('titulof', $titulo)->with('areas', $areas)->with('asignaturas', $asignaturas)->with('date', $date)->with('ano', $ano);
});

Route::post('/crearproducto', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@createproducto');

Route::group(['middleware' => ['auditorjr']], function (){

Route::get('/editar-colegiorp/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@edicion');

});


Route::post('/update-colegiojr/{id}', 'Digitalmiig\Colegiomiig\Controllers\ColegiosController@updatejr');






