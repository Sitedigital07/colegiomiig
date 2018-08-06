<?php

namespace Digitalmiig\Colegiomiig\Controllers;

use Illuminate\Routing\Controller;
use DB;
use Input;
use \Crypt;
use Digitalmiig\Colegiomiig\Region;
use Digitalmiig\Usuariomiig\Representante;
use Digitalmiig\Colegiomiig\Colegio;
use Digitalmiig\Colegiomiig\Proyec;
use Digitalmiig\Colegiomiig\Config;
use Digitalmiig\Colegiomiig\Campo;
use Digitalmiig\Colegiomiig\Proventa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ColegiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $colegios = DB::table('colegios')
        
        ->join('ciudades', 'ciudades.ids', '=', 'colegios.ciudad_id')
         ->leftjoin('users', 'users.id', '=', 'colegios.auditor')
             ->select('colegios.estadoaud','colegios.codigo','colegios.nombres','ciudades.n_ciudad','colegios.emailcol','users.name','colegios.id')

        ->get();
        
        return view('colegiomiig::allcolegios')->with('colegios', $colegios);
    }


   public function region()
    {

         $roles = DB::table('ciudades')->where('asistente', '=', Auth::user()->id)->pluck('ids');

          $colegios = DB::table('colegios')
                    ->whereIn('ciudad_id', $roles)->get();
        
        return view('colegiomiig::colegios-region')->with('colegios', $colegios);
    }


public function regionciudad($id)
    {


        $id =  Crypt::decrypt($id);
        $colegios = DB::table('colegios')->where('ciudad_id', '=', $id)->get();
        return view('colegiomiig::colegios-region')->with('colegios', $colegios);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new Colegio;
        $user->nombres = Input::get('nombre');
        $user->universo = Input::get('universo');
        $user->jornada = Input::get('jornada');
        $user->codigo = Input::get('codigo');
        $user->r_social = Input::get('r_social');
        $user->adopcion = Input::get('adopcion');
        $user->domicilio = Input::get('domicilio');
        $user->mt = Input::get('mt');
        $user->es = Input::get('es');
        $user->sc = Input::get('sc');
        $user->cl = Input::get('cl');
        $user->ig = Input::get('ig');
        $user->art = Input::get('art');
        $user->ing = Input::get('ing');
        $user->pj = Input::get('pj');
        $user->jd = Input::get('jd');
        $user->ts = Input::get('ts');
        $user->cargo = Input::get('cargo');
        $user->junta_d = Input::get('junta_d');
        $user->rector = Input::get('rector');
        $user->coordinador = Input::get('coordinador');
        $user->docente = Input::get('docente');
        $user->propietario = Input::get('propietario');
        $user->pueblo = Input::get('pueblo');
        $user->contacto = Input::get('contacto');
        $user->nit = Input::get('nit');
        $user->user_id = Input::get('user_id');
        $user->region_id = Input::get('category');
        $user->ciudad_id = Input::get('subcategory');
        $user->representante_id = Input::get('representante');
        $user->representante = Input::get('representante_le');
        $user->emailcol = Input::get('email');
        $user->domicilio = Input::get('domicilio');
        $user->telefono = Input::get('telefono');
        $user->telefono_ofc = Input::get('telefono_ofc');
        $user->producto = Input::get('producto');
        $user->relacion = Input::get('relacion');
        $user->esseg = Input::get('esseg');
        $user->venta_d = Input::get('venta_d');
        $user->interme = Input::get('interme');
        $user->c_aliados = Input::get('c_aliados');
        $user->estadoaud = Input::get('estadoaud');
        $user->save();

         return Redirect('lista-colegios')->with('status', 'ok_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

    public function show($id)
    {
    $ident = User::find($id);       
    $colegios = User::find($id)->colegios;
    return view('colegiomiig::colegios')->with('colegios', $colegios)->with('ident', $ident);
    }

    public function createpro()
    {
     
        $proyeccion = new Proyec;
        $proyeccion->date_com = Input::get('presentacion');
        $proyeccion->colegio_id = Input::get('colegio');
        $proyeccion->representante_id = Input::get('representante');
        $proyeccion->save();

        return Redirect('/proyeccion/'.$proyeccion->colegio_id)->with('status', 'ok_create');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
             
        $colegios = Colegio::find($id);

        $respaldo = DB::table('colegios')
        ->join('ciudades', 'ciudades.ids', '=', 'colegios.ciudad_id')    
        ->join('representantes', 'representantes.id', '=', 'colegios.representante_id')   
        ->join('regiones', 'regiones.id', '=', 'colegios.region_id')    
        ->where('colegios.id', '=', $id)
        ->get();

        $representantes = DB::table('representantes')
        ->join('colegios', 'representantes.id', '=', 'colegios.representante_id')
        ->where('colegios.id', '=', $id)    
        ->get();
        $regiones = DB::table('regiones')->get();

        $ciudades = DB::table('ciudades')
        ->join('colegios','ciudades.ids', '=', 'colegios.ciudad_id')
        ->where('colegios.id', '=', $id)    
        ->get();
        return view('colegiomiig::editar-colegio')->with('colegios', $colegios)->with('representantes', $representantes)->with('regiones', $regiones)->with('ciudades', $ciudades)->with('respaldo', $respaldo);
    }


        public function edicion($id)
    {
        

        $colegios = Colegio::find($id);
        $representantes = DB::table('representantes')
        ->join('colegios', 'representantes.id', '=', 'colegios.representante_id')
        ->where('colegios.id', '=', $id)    
        ->get();
        $regiones = DB::table('regiones')->get();

        $ciudades = DB::table('ciudades')
        ->join('colegios','ciudades.ids', '=', 'colegios.ciudad_id')
        ->where('colegios.id', '=', $id)    
        ->get();
        return view('colegiomiig::editarcol-auditor')->with('colegios', $colegios)->with('representantes', $representantes)->with('regiones', $regiones)->with('ciudades', $ciudades);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = Input::all();
        $user = Colegio::find($id);
        $user->nombres = Input::get('nombre');
        $user->universo = Input::get('universo');
        $user->jornada = Input::get('jornada');
        $user->codigo = Input::get('codigo');
        $user->r_social = Input::get('r_social');
        $user->adopcion = Input::get('adopcion');
        $user->domicilio = Input::get('domicilio');
        $user->mt = Input::get('mt');
        $user->es = Input::get('es');
        $user->sc = Input::get('sc');
        $user->cl = Input::get('cl');
        $user->ig = Input::get('ig');
        $user->art = Input::get('art');
        $user->ing = Input::get('ing');
        $user->pj = Input::get('pj');
        $user->jd = Input::get('jd');
        $user->ts = Input::get('ts');
        $user->cargo = Input::get('cargo');
        $user->junta_d = Input::get('junta_d');
        $user->rector = Input::get('rector');
        $user->coordinador = Input::get('coordinador');
        $user->docente = Input::get('docente');
        $user->propietario = Input::get('propietario');
        $user->pueblo = Input::get('pueblo');
        $user->contacto = Input::get('contacto');
        $user->nit = Input::get('nit');
        $user->user_id = Input::get('user_id');
        $user->region_id = Input::get('category');
        $user->ciudad_id = Input::get('subcategory');
        $user->representante_id = Input::get('representante');
        $user->representante = Input::get('representante_le');
        $user->emailcol = Input::get('email');
        $user->domicilio = Input::get('domicilio');
        $user->telefono = Input::get('telefono');
        $user->telefono_ofc = Input::get('telefono_ofc');
        $user->producto = Input::get('producto');
        $user->relacion = Input::get('relacion');
        $user->esseg = Input::get('esseg');
        $user->venta_d = Input::get('venta_d');
        $user->interme = Input::get('interme');
        $user->c_aliados = Input::get('c_aliados');
        $user->estadoaud = Input::get('estadoaud');
        $user->save();
    return Redirect('/lista-colegios')->with('status', 'ok_update');
    }

public function actucolegio($id)
    {
        $colegio = Input::get('colegio');
        $input = Input::all();
        $user = Proventa::find($id);
        $user->cierre = Input::get('cierre');
        $user->save();
    return Redirect('/proyeccionventas/'.$colegio)->with('status', 'ok_update');
    }


    public function updatejr(Request $request, $id)
    {
        $input = Input::all();
        $user = Colegio::find($id);
        $user->nombres = Input::get('nombre');
        $user->universo = Input::get('universo');
        $user->jornada = Input::get('jornada');
        $user->codigo = Input::get('codigo');
        $user->r_social = Input::get('r_social');
        $user->adopcion = Input::get('adopcion');
        $user->domicilio = Input::get('domicilio');
        $user->mt = Input::get('mt');
        $user->es = Input::get('es');
        $user->sc = Input::get('sc');
        $user->cl = Input::get('cl');
        $user->ig = Input::get('ig');
        $user->art = Input::get('art');
        $user->ing = Input::get('ing');
        $user->cargo = Input::get('cargo');
        $user->junta_d = Input::get('junta_d');
        $user->rector = Input::get('rector');
        $user->coordinador = Input::get('coordinador');
        $user->docente = Input::get('docente');
        $user->propietario = Input::get('propietario');
        $user->pueblo = Input::get('pueblo');
        $user->contacto = Input::get('contacto');
        $user->nit = Input::get('nit');
        $user->user_id = Input::get('user_id');
        $user->region_id = Input::get('category');
        $user->ciudad_id = Input::get('subcategory');
        $user->representante_id = Input::get('representante');
        $user->representante = Input::get('representante_le');
        $user->emailcol = Input::get('email');
        $user->domicilio = Input::get('domicilio');
        $user->telefono = Input::get('telefono');
        $user->telefono_ofc = Input::get('telefono_ofc');
        $user->producto = Input::get('producto');
        $user->relacion = Input::get('relacion');
        $user->esseg = Input::get('esseg');
        $user->venta_d = Input::get('venta_d');
        $user->interme = Input::get('interme');
        $user->c_aliados = Input::get('c_aliados');
        $user->estadoaud = Input::get('estadoaud');
        $user->auditor = Input::get('auditor');
        $user->save();
    return Redirect('colegios/auditores/'.$user->ciudad_id)->with('status', 'ok_update');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     public function colegioauditores($id)
    {
        $colegiosaud = DB::table('colegios')->where('ciudad_id', '=', $id)->get();
        return view('colegiomiig::colegiosauditor')->with('colegiosaud', $colegiosaud);
    }

      public function createcolegio()
    {
        
         $categories = Region::all();
         $representantes = Representante::all();
         return view('colegiomiig::crear-colegio')->with('categories', $categories)->with('representantes', $representantes);
    }

    public function configuracion(){
    $ano =  DB::table('configuracion')->where('id', '=', 1)->get();
    return view('colegiomiig::configuracion')->with('ano', $ano);
    }    


    public function configuracionupdate()
    {
    $user = Input::all();
    $user = Config::find(1);
    $user->ano = Input::get('ano');
    $user->save();
    return Redirect('/configuracion')->with('status', 'ok_update');
    }


 public function createproducto() {

$cantidad = Input::get('cantidad');
$editorial = Input::get('edt');
$grado = Input::get('subcategory');
$materia = Input::get('materia');
$region = Input::get('region');
$colegio = Input::get('colegio');
$representante = Input::get('representante');
$colegio_id = Input::get('colegiored');
$titulo = Input::get('titulo');
$ano = Input::get('ano');


foreach($cantidad as $key => $n ) {

/*Load array */

$arrData = array("cantidad"=>$cantidad[$key], "titulo"=>$titulo[$key], "editorial_id"=>$editorial[$key], "grado_id"=>$grado[$key], "materia_id"=>$materia[$key], "ano"=>$ano[$key], "region_id"=>$region[$key], "colegio_id"=>$colegio[$key], "representante_id"=>$representante[$key]);
Campo::insert($arrData);
}

    return Redirect('crear-producto/'.$colegio[$key])->with('status', 'ok_create');}  

     public function createproventawebold() {


$editorial = Input::get('edt');
$grado = Input::get('subcategory');
$materia = Input::get('materia');
$region = Input::get('region');
$colegio = Input::get('colegio');
$representante = Input::get('representante');
$colegio_id = Input::get('colegiored');
$titulo = Input::get('titulo');
$ano = Input::get('ano');


foreach($titulo as $key => $n ) {

/*Load array */

$arrData = array("titulo"=>$titulo[$key], "editorial_id"=>$editorial[$key], "grado_id"=>$grado[$key], "materia_id"=>$materia[$key], "ano"=>$ano[$key], "region_id"=>$region[$key], "colegio_id"=>$colegio[$key], "representante_id"=>$representante[$key]);
Proventa::insert($arrData);
}

    return Redirect('proyeccionventas/'.$colegio[$key])->with('status', 'ok_create');}  



     public function editarproventa() {

$editorial = Input::get('edt');
$grado = Input::get('subcategory');
$materia = Input::get('materia');
$region = Input::get('region');
$colegio = Input::get('colegio');
$representante = Input::get('representante');
$colegio_id = Input::get('colegiored');
$titulo = Input::get('titulo');
$ano = Input::get('ano');


foreach($titulo as $key => $n ) {

/*Load array */

$arrData = array("titulo"=>$titulo[$key], "editorial_id"=>$editorial[$key], "grado_id"=>$grado[$key], "ano"=>$ano[$key], "region_id"=>$region[$key], "colegio_id"=>$colegio[$key], "representante_id"=>$representante[$key]);
Proventa::where('colegio_id', $colegio = Input::get('colegio'))->where('grado_id', $grado = Input::get('subcategory'))->where('materia_id', $materia = Input::get('materia'))
              ->update($arrData);
}


    return Redirect('proyeccionventas/'.$colegio[$key])->with('status', 'ok_create');}  




     public function respaldo($request) {

foreach (Input::get('colegio') as $key => $value) {
$asistencia = Proventa::find(Input::get('colegio')[$key]);

$asistencia->editorial_id = Input::get('edt')[$key];

$asistencia->titulo = Input::get('titulo')[$key];
$asistencia->ano = Input::get('ano')[$key];
 $asistencia->update();
}

    return Redirect('proyeccionventas/'.$colegio[$key])->with('status', 'ok_create');}  






public function createproventaweb()
    {
        $user = new Proventa;

        $user->colegio_id = Input::get('colegio');
        $user->grado_id = Input::get('subcategory');
        $user->region_id = Input::get('region');
        $user->representante_id = Input::get('representante');
        $user->ano = Input::get('ano');
        $user->pr_matematicas = Input::get('pr_matematicas');
        $user->pr_titulo_mat = Input::get('pr_titulo_mat');
        $user->pr_espanol = Input::get('pr_espanol');
        $user->pr_titulo_esp = Input::get('pr_titulo_esp');
        $user->pr_ciencias = Input::get('pr_ciencias');
        $user->pr_titulo_cie = Input::get('pr_titulo_cie');
        $user->pr_comprension = Input::get('pr_comprension');
        $user->pr_titulo_com = Input::get('pr_titulo_com');
        $user->pr_interes = Input::get('pr_interes');
        $user->pr_titulo_int = Input::get('pr_titulo_int');
        $user->pr_artistica = Input::get('pr_artistica');
        $user->pr_titulo_art = Input::get('pr_titulo_art');
        $user->pr_ingles = Input::get('pr_ingles');
        $user->pr_titulo_ing = Input::get('pr_titulo_ing');

        $user->save();

          return Redirect('proyeccionventas/'.$user->colegio_id)->with('status', 'ok_create');
    }


public function editarproventaweb($id)
    {
       
        $input = Input::all();
        $user = Proventa::find($id);
        $user->colegio_id = Input::get('colegio');
        $user->grado_id = Input::get('subcategory');
        $user->region_id = Input::get('region');
        $user->representante_id = Input::get('representante');
        $user->ano = Input::get('ano');
        $user->pr_matematicas = Input::get('pr_matematicas');
        $user->pr_titulo_mat = Input::get('pr_titulo_mat');
        $user->pr_espanol = Input::get('pr_espanol');
        $user->pr_titulo_esp = Input::get('pr_titulo_esp');
        $user->pr_ciencias = Input::get('pr_ciencias');
        $user->pr_titulo_cie = Input::get('pr_titulo_cie');
        $user->pr_comprension = Input::get('pr_comprension');
        $user->pr_titulo_com = Input::get('pr_titulo_com');
        $user->pr_interes = Input::get('pr_interes');
        $user->pr_titulo_int = Input::get('pr_titulo_int');
        $user->pr_artistica = Input::get('pr_artistica');
        $user->pr_titulo_art = Input::get('pr_titulo_art');
        $user->pr_ingles = Input::get('pr_ingles');
        $user->pr_titulo_ing = Input::get('pr_titulo_ing');

        $user->save();

         return Redirect('proyeccionventas/'.$user->colegio_id)->with('status', 'ok_create');

    }

 
 public function editargrado($id)
    {

        $proventas = DB::table('proventas')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        $date = DB::table('configuracion')->where('id', '=', 1)->get();   
        $datef = DB::table('configuracion')->where('id', '=', 1)->get();   
        return view('usuariomiig::editargrado')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulof', $titulof)->with('date', $date)->with('datef', $datef);
    }

     public function editargradosegundo($id)
    {
        $proventas = DB::table('proventas')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        return view('usuariomiig::editargradosegundo')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulof', $titulof);
    }

      public function editargradotercero($id)
    {
        $proventas = DB::table('proventas')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        return view('usuariomiig::editargradotercero')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulof', $titulof);
    }

      public function editargradocuarto($id)
    {
        $proventas = DB::table('proventas')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        return view('usuariomiig::editargradocuarto')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulof', $titulof);
    }

      public function editargradoquinto($id)
    {
        $proventas = DB::table('proventas')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        return view('usuariomiig::editargradoquinto')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulof', $titulof);
    }

      public function editargradosexto($id)
    {
        $proventas = DB::table('proventas')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        return view('usuariomiig::editargradosexto')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulof', $titulof);
    }

      public function editargradoseptimo($id)
    {
        $proventas = DB::table('proventas')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        return view('usuariomiig::editargradoseptimo')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulof', $titulof);
    }

      public function editargradooctavo($id)
    {
        $proventas = DB::table('proventas')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        return view('usuariomiig::editargradooctavo')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulof', $titulof);
    }

      public function editargradonoveno($id)
    {
        $proventas = DB::table('proventas')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        return view('usuariomiig::editargradonoveno')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulof', $titulof);
    }

      public function editargradodecimo($id)
    {
        $proventas = DB::table('proventas')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        return view('usuariomiig::editargradodecimoo')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulof', $titulof);
    }

      public function editargradoonce($id)
    {
        $proventas = DB::table('proventas')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        return view('usuariomiig::editargradoonce')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulof', $titulof);
    }

}


