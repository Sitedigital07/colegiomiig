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
use Digitalmiig\Colegiomiig\Esseg;
use Digitalmiig\Colegiomiig\Cierre;
use Digitalmiig\Usuariomiig\Fecha;
use Digitalmiig\Usuariomiig\Fechameta;
use Digitalmiig\Colegiomiig\Descuento;
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
        ->join('users', 'users.id', '=', 'colegios.representante_id')
        ->select(
                  'colegios.id',
                  'colegios.codigo',
                  'colegios.nombres',
                  'ciudades.n_ciudad',
                  'users.name',
                  'users.last_name'
                
          )
        ->get();
        
        return view('colegiomiig::allcolegios')->with('colegios', $colegios);
    }


       public function colegiosnac()
    {

        $colegios = DB::table('colegios')
        ->join('ciudades', 'ciudades.ids', '=', 'colegios.ciudad_id')
         ->leftjoin('users', 'users.id', '=', 'colegios.representante_id')
         ->select('colegios.estadoaud','colegios.codigo','colegios.nombres','ciudades.n_ciudad','colegios.emailcol','users.name','colegios.id')
        ->get();
         $ano = DB::table('configuracion')->where('id', '=', 1)->get();
        return view('colegiomiig::allcolegiosnac')->with('colegios', $colegios)->with('ano', $ano);
    }


public function editardescuentowebsite($id)
    {
        $input = Input::all();
        $descuento = Descuento::find($id);
        $descuento->descuento_nacional = Input::get('nacional');
        $descuento->descuento_regional = Input::get('regional');
        $descuento->descuento_representante = Input::get('representante');
        $descuento->save();
        return Redirect('carga-descuento')->with('status', 'ok_update');
    
    }

   public function listacolegiosnac($id)
    {

        $colegios = DB::table('colegios')
        ->join('ciudades', 'ciudades.ids', '=', 'colegios.ciudad_id')
         ->leftjoin('users', 'users.id', '=', 'colegios.auditor')
         ->where('colegios.representante_id','=',$id)
         ->select('colegios.estadoaud','colegios.codigo','colegios.nombres','ciudades.n_ciudad','colegios.emailcol','users.name','colegios.id')

        ->get();
         $ano = DB::table('configuracion')->where('id', '=', 1)->get();
        return view('colegiomiig::allcolegiosnac')->with('colegios', $colegios)->with('ano', $ano);
    }


           public function representantesnac()
    {

        $representantes = DB::table('users')->where('rol_id','=',5)->where('regionid','=',Auth::user()->regionid)
        ->get();
         $ano = DB::table('configuracion')->where('id', '=', 1)->get();
        return view('colegiomiig::allrepresentantesnac')->with('representantes', $representantes)->with('ano', $ano);
    }



   public function region()
    {

         
         $ano = DB::table('configuracion')->where('id', '=', 1)->get();
         $colegios = DB::table('colegios')
                     ->join('ciudades', 'ciudades.ids', '=', 'colegios.ciudad_id')
                     ->join('users', 'users.id', '=', 'colegios.representante_id')
                     ->select(
                  'colegios.id',
                  'colegios.codigo',
                  'colegios.nombres',
                  'ciudades.n_ciudad',
                  'users.name',
                  'users.last_name'
                
          )
                     ->where('colegios.representante_id','=',Auth::user()->id)
                    ->get();
         $fechas = DB::table('proyeccion')->get();
         $representantes = DB::table('representantes')->get();

        return view('colegiomiig::colegios-region')->with('colegios', $colegios)->with('ano', $ano)->with('fechas', $fechas)->with('representantes', $representantes);
    }


public function regionciudad($id)
    {


        $id =  Crypt::decrypt($id);
        $ano = DB::table('configuracion')->where('id', '=', 1)->get();
        $colegios = DB::table('colegios')->where('ciudad_id', '=', $id)->get();
        $representantes = DB::table('representantes')->get();
        return view('colegiomiig::colegios-region')->with('colegios', $colegios)->with('ano', $ano)->with('representantes', $representantes);
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
        $user->essegcol = Input::get('esseg');
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
        $proyeccion->ano = Input::get('ano');
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
        ->join('users', 'users.id', '=', 'colegios.representante_id')   
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

      $camps = DB::table('colegios')->where('id','=',$id)->get();
       foreach ($camps as $camps) {
        $campssd = Input::get('representante');
      }
          if($camps->representante_id ==  $campssd){
  
          }
          else{

        $ano = DB::table('configuracion')->where('id', '=', 1)->get();
        foreach($ano as $anoes){
        $res = Proventa::where('colegio_id',$id)->where('ano',$anoes->ano)->delete();  
        $resdos = Campo::where('colegio_id',$id)->where('ano',$anoes->ano)->delete();
        $resuno = Esseg::where('colegio_id',$id)->where('ano',$anoes->ano)->delete();
        $restres = Fecha::where('colegio_id',$id)->where('ano',$anoes->ano)->delete();
        $rescuatro = Fechameta::where('colegio_id',$id)->where('ano',$anoes->ano)->delete();   
        $rescuatroa = Cierre::where('colegio_id',$id)->where('ano',$anoes->ano)->delete();
        $rescuatroav = DB::table('descuento')->where('colegio_id',$id)->where('ano',$anoes->ano)->delete();    
          }
          

       }

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
        $user->essegcol = Input::get('esseg');
        $user->venta_d = Input::get('venta_d');
        $user->interme = Input::get('interme');
        $user->c_aliados = Input::get('c_aliados');
        $user->estadoaud = Input::get('estadoaud');
        $user->save();
    return Redirect('/lista-colegios')->with('status', 'ok_update');
    }

public function actucolegio($id)
    {
      $indice = Input::get('indice');
       $colegio = Input::get('colegio');
       $anual = Input::get('ano');
      if($indice == 0){
        DB::table('proventas')->insert(array(
        array('colegio_id' => $colegio,'ano' => $anual),
));
      }
        else{

        }


       
        $input = Input::all();
        $cierre = Cierre::find($id);
        $cierre->cierre = Input::get('cierre');
        $cierre->ano = Input::get('ano');
        $cierre->colegio_id = Input::get('colegio');
        $cierre->save();
    return Redirect('/proyeccionventasnac/'.$colegio)->with('status', 'ok_update');
    }

public function cierrecolegio()
    {
        $colegio = Input::get('colegio');
        $cierre = new Cierre;
        $cierre->cierre = Input::get('cierre');
        $cierre->ano = Input::get('ano');
        $cierre->colegio_id = Input::get('colegio');
        $cierre->save();
    return Redirect('/proyeccionventasnac/'.$colegio)->with('status', 'ok_update');
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
        $user->nombredefine = Input::get('nombredefine');
        $user->apellidodefine = Input::get('apellidodefine');
        $user->emaildefine = Input::get('emaildefine');
        $user->direcciondefine = Input::get('direcciondefine');
        $user->telefonodefine = Input::get('telefonodefine');
        $user->telefonoceldefine = Input::get('telefonoceldefine');
        $user->nota = Input::get('nota');
        $user->relacion = Input::get('relacion');
        $user->essegcol = Input::get('esseg');
        $user->venta_d = Input::get('venta_d');
        $user->interme = Input::get('interme');
        $user->c_aliados = Input::get('c_aliados');
        $user->estadoaud = Input::get('estadoaud');
        $user->auditor = Input::get('auditor');
        $user->save();
    return Redirect('/colegios-region')->with('status', 'ok_update');
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

         $ano = DB::table('configuracion')->where('id', '=', 1)->get();
         $colegios = DB::table('colegios')
                    ->where('representante_id','=',Auth::user()->representante_id)->get();
         $fechas = DB::table('proyeccion')->get();
         $representantes = DB::table('representantes')->get();
         

        return view('colegiomiig::colegios-region')->with('colegios', $colegios)->with('ano', $ano)->with('fechas', $fechas)->with('representantes', $representantes);
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


        $mema = Input::get('pr_titulo_mat')+Input::get('pr_vender_mat')+Input::get('pr_titulo_esp')+Input::get('pr_vender_esp')+Input::get('pr_titulo_cie')+Input::get('pr_vender_cie')+Input::get('pr_titulo_com')+Input::get('pr_vender_com')+Input::get('pr_titulo_int')+Input::get('pr_vender_int')+Input::get('pr_titulo_ing')+Input::get('pr_vender_ing')+Input::get('pr_titulo_art')+Input::get('pr_vender_art');
       
       if($mema == 0){
          return Redirect('/proyeccionventas/'.Input::get('colegio'))->with('status', 'ok_danger');
       }
      else{
        $user = new Proventa; 
        
                  if(Input::get('pr_titulo_mat') == '0'){
        $user->pr_valor_mat = 0;
        }
        else{
        $matema = Input::get('pr_titulo_mat');
        $valormat = DB::table('titulo')->where('id','=',$matema)->get();
        foreach($valormat as $valormat){
        $user->pr_valor_mat = $valormat->precio;
        }
        }


        if(Input::get('pr_titulo_esp') == '0'){
        $user->pr_valor_esp = 0;
        }
        else{
        $espano = Input::get('pr_titulo_esp');
        $valoresp = DB::table('titulo')->where('id','=',$espano)->get();
        foreach($valoresp as $valoresp){
        $user->pr_valor_esp = $valoresp->precio;
        }
        }

        if(Input::get('pr_titulo_cie') == '0'){
        $user->pr_valor_cie = 0;
        }
        else{
        $ciencias = Input::get('pr_titulo_cie');
        $valorcie = DB::table('titulo')->where('id','=',$ciencias)->get();
        foreach($valorcie as $valorcie){
        $user->pr_valor_cie = $valorcie->precio;
        }
        }


        if(Input::get('pr_titulo_com') == '0'){
        $user->pr_valor_com = 0;
        }
        else{
        $comprension = Input::get('pr_titulo_com');
        $valorcom = DB::table('titulo')->where('id','=',$comprension)->get();
        foreach($valorcom as $valorcom){
        $user->pr_valor_com = $valorcom->precio;
        }
        }


        if(Input::get('pr_titulo_int') == '0'){
        $user->pr_valor_int = 0;
        }
        else{
        $interes = Input::get('pr_titulo_int');
        $valorint = DB::table('titulo')->where('id','=',$interes)->get();
        foreach($valorint as $valorint){
        $user->pr_valor_int = $valorint->precio;
        }
        }

        if(Input::get('pr_titulo_ing') == '0'){
        $user->pr_valor_ing = 0;
        }
        else{
        $ingles = Input::get('pr_titulo_ing');
        $valoring = DB::table('titulo')->where('id','=',$ingles)->get();
        foreach($valoring as $valoring){
        $user->pr_valor_ing = $valoring->precio;
        }
        }

        if(Input::get('pr_titulo_art') == '0'){
        $user->pr_valor_art = 0;
        }
        else{
        $artistica = Input::get('pr_titulo_art');
        $valorart = DB::table('titulo')->where('id','=',$artistica)->get();
        foreach($valorart as $valorart){
        $user->pr_valor_art = $valorart->precio;
        }
        }

        $user->colegio_id = Input::get('colegio');
        $user->ciudad_id = Auth::user()->ciudadid;
        $user->grado_id = Input::get('subcategory');
        $user->region_id = Input::get('region');
        $user->representante_id = Auth::user()->id;
        $user->ano = Input::get('ano');
       

        if(Input::get('pr_vender_mat') == '' OR Input::get('pr_titulo_mat') == ''){
          $user->pr_titulo_mat = 0;
          $user->pr_vender_mat = 0;
          $user->pr_matematicas = 0;
          $user->pr_muestra_mat = 0;
          $user->pr_poblacion_mat = 0;
          $user->pr_metas_ing = 0;
        }
        else{
          $user->pr_titulo_mat = Input::get('pr_titulo_mat');
          $user->pr_vender_mat = Input::get('pr_vender_mat');
          $user->pr_matematicas = Input::get('pr_matematicas');
          $user->pr_muestra_mat = Input::get('pr_muestra_mat');
          $user->pr_poblacion_mat = Input::get('pr_poblacion_mat');
          $user->pr_metas_mat = Input::get('pr_metas_mat');

        }

        if(Input::get('pr_vender_esp') == '' OR Input::get('pr_titulo_esp') == ''){
          $user->pr_titulo_esp = 0;
          $user->pr_vender_esp = 0;
          $user->pr_espanol = 0;
          $user->pr_muestra_esp = 0;
          $user->pr_poblacion_esp = 0;
          $user->pr_metas_esp = 0;
        }
        else{
          $user->pr_espanol = Input::get('pr_espanol');
          $user->pr_titulo_esp = Input::get('pr_titulo_esp');
          $user->pr_vender_esp = Input::get('pr_vender_esp');
          $user->pr_muestra_esp = Input::get('pr_muestra_esp');
          $user->pr_poblacion_esp = Input::get('pr_poblacion_esp');
          $user->pr_metas_esp = Input::get('pr_metas_esp');
        }


        if(Input::get('pr_vender_cie') == '' OR Input::get('pr_titulo_cie') == ''){
          $user->pr_titulo_cie = 0;
          $user->pr_vender_cie = 0;
          $user->pr_ciencias = 0;
          $user->pr_muestra_cie = 0;
          $user->pr_poblacion_cie = 0;
          $user->pr_metas_cie = 0;
        }
        else{
          $user->pr_ciencias = Input::get('pr_ciencias');
          $user->pr_titulo_cie = Input::get('pr_titulo_cie');
          $user->pr_vender_cie = Input::get('pr_vender_cie');
          $user->pr_muestra_cie = Input::get('pr_muestra_cie');
          $user->pr_poblacion_cie = Input::get('pr_poblacion_cie');
          $user->pr_metas_cie = Input::get('pr_metas_cie');
        }

        if(Input::get('pr_vender_com') == '' OR Input::get('pr_titulo_com') == ''){
          $user->pr_titulo_com = 0;
          $user->pr_vender_com = 0;
          $user->pr_comprension = 0;
          $user->pr_muestra_com = 0;
          $user->pr_poblacion_com = 0;
            $user->pr_metas_com = 0;
        }
        else{
          $user->pr_comprension = Input::get('pr_comprension');
          $user->pr_titulo_com = Input::get('pr_titulo_com');
          $user->pr_vender_com = Input::get('pr_vender_com');
          $user->pr_muestra_com = Input::get('pr_muestra_com');
          $user->pr_poblacion_com = Input::get('pr_poblacion_com');
            $user->pr_metas_com = Input::get('pr_metas_com');
        }

        if(Input::get('pr_vender_int') == '' OR Input::get('pr_titulo_int') == ''){
          $user->pr_titulo_int = 0;
          $user->pr_vender_int = 0;
          $user->pr_interes = 0;
          $user->pr_muestra_int = 0;
          $user->pr_poblacion_int = 0;
            $user->pr_metas_int = 0;
        }
        else{
          $user->pr_interes = Input::get('pr_interes');
          $user->pr_titulo_int = Input::get('pr_titulo_int');
          $user->pr_vender_int = Input::get('pr_vender_int');
          $user->pr_muestra_int = Input::get('pr_muestra_int');
          $user->pr_poblacion_int = Input::get('pr_poblacion_int');
            $user->pr_metas_int = Input::get('pr_metas_int');
        }


        if(Input::get('pr_vender_art') == '' OR Input::get('pr_titulo_art') == ''){
          $user->pr_titulo_art = 0;
          $user->pr_vender_art = 0;
          $user->pr_artistica = 0;
          $user->pr_muestra_art = 0;
          $user->pr_poblacion_art = 0;
          $user->pr_metas_art = 0;
        }
        else{
          $user->pr_artistica = Input::get('pr_artistica');
          $user->pr_titulo_art = Input::get('pr_titulo_art');
          $user->pr_vender_art = Input::get('pr_vender_art');
          $user->pr_muestra_art = Input::get('pr_muestra_art');
          $user->pr_poblacion_art = Input::get('pr_poblacion_art');
          $user->pr_metas_art = Input::get('pr_metas_art');
        }
       
        if(Input::get('pr_vender_ing') == '' OR Input::get('pr_titulo_ing') == ''){
          $user->pr_titulo_ing = 0;
          $user->pr_vender_ing = 0;
          $user->pr_ingles = 0;
          $user->pr_muestra_ing = 0;
          $user->pr_poblacion_ing = 0;
          $user->pr_metas_ing = 0;
        }
        else{
          $user->pr_ingles = Input::get('pr_ingles');
          $user->pr_titulo_ing = Input::get('pr_titulo_ing');
          $user->pr_vender_ing = Input::get('pr_vender_ing');
          $user->pr_muestra_ing = Input::get('pr_muestra_ing');
          $user->pr_poblacion_ing = Input::get('pr_poblacion_ing');
          $user->pr_metas_ing = Input::get('pr_metas_ing');
        }
       
  
        $user->metadopcion = 0;
        $user->save();

        }
 


          return Redirect('/proyeccionventas/'.$user->colegio_id)->with('status', 'ok_create');
    }


public function createsseg()
    {
        $user = new Esseg;
        $user->esseg = Input::get('esseg');
        $user->ano = Input::get('ano');
        $user->ciudad_id = Input::get('ciudad');
        $user->colegio_id = Input::get('colegio');
        $user->representante_id = Auth::user()->id;
        $user->save();



          return Redirect('/colegios-region')->with('status', 'ok_create');
    }

public function updateesseg($id)
    {
        $input = Input::all();
        $user = Esseg::find($id);
        $user->esseg = Input::get('esseg');
        $user->ano = Input::get('ano');
        $user->ciudad_id = Input::get('ciudad');
        $user->colegio_id = Input::get('colegio');
        $user->representante_id = Auth::user()->id;
        $user->save();



          return Redirect('/proyeccionventas/'.$user->colegio_id)->with('status', 'ok_create');
    }




public function createproventawebadopcion()
    {
      

      $mema = Input::get('pr_titulo_mat')+Input::get('pr_vender_mat')+Input::get('pr_titulo_esp')+Input::get('pr_vender_esp')+Input::get('pr_titulo_cie')+Input::get('pr_vender_cie')+Input::get('pr_titulo_com')+Input::get('pr_vender_com')+Input::get('pr_titulo_int')+Input::get('pr_vender_int')+Input::get('pr_titulo_ing')+Input::get('pr_vender_ing')+Input::get('pr_titulo_art')+Input::get('pr_vender_art');
       
       if($mema == 0){
          return Redirect('/proyeccionventasadopcion/'.Input::get('colegio'))->with('status', 'ok_danger');
       }
      else{
        $user = new Campo;


                  if(Input::get('pr_titulo_mat') == '0'){
        $user->pr_valor_mat = 0;
        }
        else{
        $matema = Input::get('pr_titulo_mat');
        $valormat = DB::table('titulo')->where('id','=',$matema)->get();
        foreach($valormat as $valormat){
        $user->pr_valor_mat = $valormat->precio;
        }
        }


        if(Input::get('pr_titulo_esp') == '0'){
        $user->pr_valor_esp = 0;
        }
        else{
        $espano = Input::get('pr_titulo_esp');
        $valoresp = DB::table('titulo')->where('id','=',$espano)->get();
        foreach($valoresp as $valoresp){
        $user->pr_valor_esp = $valoresp->precio;
        }
        }

        if(Input::get('pr_titulo_cie') == '0'){
        $user->pr_valor_cie = 0;
        }
        else{
        $ciencias = Input::get('pr_titulo_cie');
        $valorcie = DB::table('titulo')->where('id','=',$ciencias)->get();
        foreach($valorcie as $valorcie){
        $user->pr_valor_cie = $valorcie->precio;
        }
        }


        if(Input::get('pr_titulo_com') == '0'){
        $user->pr_valor_com = 0;
        }
        else{
        $comprension = Input::get('pr_titulo_com');
        $valorcom = DB::table('titulo')->where('id','=',$comprension)->get();
        foreach($valorcom as $valorcom){
        $user->pr_valor_com = $valorcom->precio;
        }
        }


        if(Input::get('pr_titulo_int') == '0'){
        $user->pr_valor_int = 0;
        }
        else{
        $interes = Input::get('pr_titulo_int');
        $valorint = DB::table('titulo')->where('id','=',$interes)->get();
        foreach($valorint as $valorint){
        $user->pr_valor_int = $valorint->precio;
        }
        }

        if(Input::get('pr_titulo_ing') == '0'){
        $user->pr_valor_ing = 0;
        }
        else{
        $ingles = Input::get('pr_titulo_ing');
        $valoring = DB::table('titulo')->where('id','=',$ingles)->get();
        foreach($valoring as $valoring){
        $user->pr_valor_ing = $valoring->precio;
        }
        }

        if(Input::get('pr_titulo_art') == '0'){
        $user->pr_valor_art = 0;
        }
        else{
        $artistica = Input::get('pr_titulo_art');
        $valorart = DB::table('titulo')->where('id','=',$artistica)->get();
        foreach($valorart as $valorart){
        $user->pr_valor_art = $valorart->precio;
        }
        }

        $user->colegio_id = Input::get('colegio');
        $user->ciudad_id = Auth::user()->ciudadid;
        $user->grado_id = Input::get('subcategory');
        $user->region_id = Input::get('region');
        $user->representante_id = Auth::user()->id;
        $user->ano = Input::get('ano');
       

        if(Input::get('pr_vender_mat') == '' OR Input::get('pr_titulo_mat') == ''){
          $user->pr_titulo_mat = 0;
          $user->pr_vender_mat = 0;
          $user->pr_matematicas = 0;
          $user->pr_muestra_mat = 0;
          $user->pr_poblacion_mat = 0;
          $user->pr_metas_ing = 0;
        }
        else{
          $user->pr_titulo_mat = Input::get('pr_titulo_mat');
          $user->pr_vender_mat = Input::get('pr_vender_mat');
          $user->pr_matematicas = Input::get('pr_matematicas');
          $user->pr_muestra_mat = Input::get('pr_muestra_mat');
          $user->pr_poblacion_mat = Input::get('pr_poblacion_mat');
          $user->pr_metas_mat = Input::get('pr_metas_mat');

        }

        if(Input::get('pr_vender_esp') == '' OR Input::get('pr_titulo_esp') == ''){
          $user->pr_titulo_esp = 0;
          $user->pr_vender_esp = 0;
          $user->pr_espanol = 0;
          $user->pr_muestra_esp = 0;
          $user->pr_poblacion_esp = 0;
          $user->pr_metas_esp = 0;
        }
        else{
          $user->pr_espanol = Input::get('pr_espanol');
          $user->pr_titulo_esp = Input::get('pr_titulo_esp');
          $user->pr_vender_esp = Input::get('pr_vender_esp');
          $user->pr_muestra_esp = Input::get('pr_muestra_esp');
          $user->pr_poblacion_esp = Input::get('pr_poblacion_esp');
          $user->pr_metas_esp = Input::get('pr_metas_esp');
        }


        if(Input::get('pr_vender_cie') == '' OR Input::get('pr_titulo_cie') == ''){
          $user->pr_titulo_cie = 0;
          $user->pr_vender_cie = 0;
          $user->pr_ciencias = 0;
          $user->pr_muestra_cie = 0;
          $user->pr_poblacion_cie = 0;
          $user->pr_metas_cie = 0;
        }
        else{
          $user->pr_ciencias = Input::get('pr_ciencias');
          $user->pr_titulo_cie = Input::get('pr_titulo_cie');
          $user->pr_vender_cie = Input::get('pr_vender_cie');
          $user->pr_muestra_cie = Input::get('pr_muestra_cie');
          $user->pr_poblacion_cie = Input::get('pr_poblacion_cie');
          $user->pr_metas_cie = Input::get('pr_metas_cie');
        }

        if(Input::get('pr_vender_com') == '' OR Input::get('pr_titulo_com') == ''){
          $user->pr_titulo_com = 0;
          $user->pr_vender_com = 0;
          $user->pr_comprension = 0;
          $user->pr_muestra_com = 0;
          $user->pr_poblacion_com = 0;
            $user->pr_metas_com = 0;
        }
        else{
          $user->pr_comprension = Input::get('pr_comprension');
          $user->pr_titulo_com = Input::get('pr_titulo_com');
          $user->pr_vender_com = Input::get('pr_vender_com');
          $user->pr_muestra_com = Input::get('pr_muestra_com');
          $user->pr_poblacion_com = Input::get('pr_poblacion_com');
            $user->pr_metas_com = Input::get('pr_metas_com');
        }

        if(Input::get('pr_vender_int') == '' OR Input::get('pr_titulo_int') == ''){
          $user->pr_titulo_int = 0;
          $user->pr_vender_int = 0;
          $user->pr_interes = 0;
          $user->pr_muestra_int = 0;
          $user->pr_poblacion_int = 0;
            $user->pr_metas_int = 0;
        }
        else{
          $user->pr_interes = Input::get('pr_interes');
          $user->pr_titulo_int = Input::get('pr_titulo_int');
          $user->pr_vender_int = Input::get('pr_vender_int');
          $user->pr_muestra_int = Input::get('pr_muestra_int');
          $user->pr_poblacion_int = Input::get('pr_poblacion_int');
            $user->pr_metas_int = Input::get('pr_metas_int');
        }


        if(Input::get('pr_vender_art') == '' OR Input::get('pr_titulo_art') == ''){
          $user->pr_titulo_art = 0;
          $user->pr_vender_art = 0;
          $user->pr_artistica = 0;
          $user->pr_muestra_art = 0;
          $user->pr_poblacion_art = 0;
          $user->pr_metas_art = 0;
        }
        else{
          $user->pr_artistica = Input::get('pr_artistica');
          $user->pr_titulo_art = Input::get('pr_titulo_art');
          $user->pr_vender_art = Input::get('pr_vender_art');
          $user->pr_muestra_art = Input::get('pr_muestra_art');
          $user->pr_poblacion_art = Input::get('pr_poblacion_art');
          $user->pr_metas_art = Input::get('pr_metas_art');
        }
       
        if(Input::get('pr_vender_ing') == '' OR Input::get('pr_titulo_ing') == ''){
          $user->pr_titulo_ing = 0;
          $user->pr_vender_ing = 0;
          $user->pr_ingles = 0;
          $user->pr_muestra_ing = 0;
          $user->pr_poblacion_ing = 0;
          $user->pr_metas_ing = 0;
        }
        else{
          $user->pr_ingles = Input::get('pr_ingles');
          $user->pr_titulo_ing = Input::get('pr_titulo_ing');
          $user->pr_vender_ing = Input::get('pr_vender_ing');
          $user->pr_muestra_ing = Input::get('pr_muestra_ing');
          $user->pr_poblacion_ing = Input::get('pr_poblacion_ing');
          $user->pr_metas_ing = Input::get('pr_metas_ing');
        }
       
  
        $user->metadopcion = 0;
        $user->save();

        }
        

          return Redirect('/proyeccionventasadopcion/'.$user->colegio_id)->with('status', 'ok_create');
    }


public function createproventawebadopcionaud()
    {
     

        $campos = new Campo;
        $campos->colegio_id = Input::get('colegio');
        $campos->grado_id = Input::get('subcategory');
        $campos->region_id = Input::get('region');
        $campos->representante_id = Input::get('representante');
        $campos->ano = Input::get('ano');
        $campos->pr_matematicas = Input::get('pr_matematicas');
        $campos->pr_titulo_mat = Input::get('pr_titulo_mat');
        $campos->edt_mat = Input::get('edt_mat');
        $campos->pr_espanol = Input::get('pr_espanol');
        $campos->pr_titulo_esp = Input::get('pr_titulo_esp');
        $campos->edt_esp = Input::get('edt_esp');
        $campos->pr_ciencias = Input::get('pr_ciencias');
        $campos->pr_titulo_cie = Input::get('pr_titulo_cie');
        $campos->edt_cie = Input::get('edt_cie');
        $campos->pr_comprension = Input::get('pr_comprension');
        $campos->pr_titulo_com = Input::get('pr_titulo_com');
        $campos->edt_com = Input::get('edt_com');
        $campos->pr_interes = Input::get('pr_interes');
        $campos->pr_titulo_int = Input::get('pr_titulo_int');
        $campos->edt_int = Input::get('edt_int');
        $campos->pr_artistica = Input::get('pr_artistica');
        $campos->pr_titulo_art = Input::get('pr_titulo_art');
        $campos->edt_art = Input::get('edt_art');
        $campos->pr_ingles = Input::get('pr_ingles');
        $campos->pr_titulo_ing = Input::get('pr_titulo_ing');
        $campos->edt_ing = Input::get('edt_ing');
        $campos->metadopcion = 2;
        $campos->save();

          return Redirect('/proyeccionventasadopcionaud/'.$campos->colegio_id)->with('status', 'ok_create');
    }

public function editarproventaweb($id)
    {
       
        $input = Input::all();
        $user = Proventa::find($id);
         
           if(Input::get('pr_titulo_mat') == '0'){
        $user->pr_valor_mat = 0;
        }
        else{
        $matema = Input::get('pr_titulo_mat');
        $valormat = DB::table('titulo')->where('id','=',$matema)->get();
        foreach($valormat as $valormat){
        $user->pr_valor_mat = $valormat->precio;
        }
        }


        if(Input::get('pr_titulo_esp') == '0'){
        $user->pr_valor_esp = 0;
        }
        else{
        $espano = Input::get('pr_titulo_esp');
        $valoresp = DB::table('titulo')->where('id','=',$espano)->get();
        foreach($valoresp as $valoresp){
        $user->pr_valor_esp = $valoresp->precio;
        }
        }

        if(Input::get('pr_titulo_cie') == '0'){
        $user->pr_valor_cie = 0;
        }
        else{
        $ciencias = Input::get('pr_titulo_cie');
        $valorcie = DB::table('titulo')->where('id','=',$ciencias)->get();
        foreach($valorcie as $valorcie){
        $user->pr_valor_cie = $valorcie->precio;
        }
        }


        if(Input::get('pr_titulo_com') == '0'){
        $user->pr_valor_com = 0;
        }
        else{
        $comprension = Input::get('pr_titulo_com');
        $valorcom = DB::table('titulo')->where('id','=',$comprension)->get();
        foreach($valorcom as $valorcom){
        $user->pr_valor_com = $valorcom->precio;
        }
        }


        if(Input::get('pr_titulo_int') == '0'){
        $user->pr_valor_int = 0;
        }
        else{
        $interes = Input::get('pr_titulo_int');
        $valorint = DB::table('titulo')->where('id','=',$interes)->get();
        foreach($valorint as $valorint){
        $user->pr_valor_int = $valorint->precio;
        }
        }

        if(Input::get('pr_titulo_ing') == '0'){
        $user->pr_valor_ing = 0;
        }
        else{
        $ingles = Input::get('pr_titulo_ing');
        $valoring = DB::table('titulo')->where('id','=',$ingles)->get();
        foreach($valoring as $valoring){
        $user->pr_valor_ing = $valoring->precio;
        }
        }

        if(Input::get('pr_titulo_art') == '0'){
        $user->pr_valor_art = 0;
        }
        else{
        $artistica = Input::get('pr_titulo_art');
        $valorart = DB::table('titulo')->where('id','=',$artistica)->get();
        foreach($valorart as $valorart){
        $user->pr_valor_art = $valorart->precio;
        }
        }

        $user->colegio_id = Input::get('colegio');
        $user->ciudad_id = Auth::user()->ciudadid;
        $user->grado_id = Input::get('subcategory');
        $user->region_id = Input::get('region');
        $user->representante_id = Auth::user()->id;
        $user->ano = Input::get('ano');
       

        if(Input::get('pr_vender_mat') == '' OR Input::get('pr_titulo_mat') == ''){
          $user->pr_titulo_mat = 0;
          $user->pr_vender_mat = 0;
          $user->pr_matematicas = 0;
          $user->pr_muestra_mat = 0;
          $user->pr_poblacion_mat = 0;
          $user->pr_metas_ing = 0;
        }
        else{
          $user->pr_titulo_mat = Input::get('pr_titulo_mat');
          $user->pr_vender_mat = Input::get('pr_vender_mat');
          $user->pr_matematicas = Input::get('pr_matematicas');
          $user->pr_muestra_mat = Input::get('pr_muestra_mat');
          $user->pr_poblacion_mat = Input::get('pr_poblacion_mat');
          $user->pr_metas_mat = Input::get('pr_metas_mat');

        }

        if(Input::get('pr_vender_esp') == '' OR Input::get('pr_titulo_esp') == ''){
          $user->pr_titulo_esp = 0;
          $user->pr_vender_esp = 0;
          $user->pr_espanol = 0;
          $user->pr_muestra_esp = 0;
          $user->pr_poblacion_esp = 0;
          $user->pr_metas_esp = 0;
        }
        else{
          $user->pr_espanol = Input::get('pr_espanol');
          $user->pr_titulo_esp = Input::get('pr_titulo_esp');
          $user->pr_vender_esp = Input::get('pr_vender_esp');
          $user->pr_muestra_esp = Input::get('pr_muestra_esp');
          $user->pr_poblacion_esp = Input::get('pr_poblacion_esp');
          $user->pr_metas_esp = Input::get('pr_metas_esp');
        }


        if(Input::get('pr_vender_cie') == '' OR Input::get('pr_titulo_cie') == ''){
          $user->pr_titulo_cie = 0;
          $user->pr_vender_cie = 0;
          $user->pr_ciencias = 0;
          $user->pr_muestra_cie = 0;
          $user->pr_poblacion_cie = 0;
          $user->pr_metas_cie = 0;
        }
        else{
          $user->pr_ciencias = Input::get('pr_ciencias');
          $user->pr_titulo_cie = Input::get('pr_titulo_cie');
          $user->pr_vender_cie = Input::get('pr_vender_cie');
          $user->pr_muestra_cie = Input::get('pr_muestra_cie');
          $user->pr_poblacion_cie = Input::get('pr_poblacion_cie');
          $user->pr_metas_cie = Input::get('pr_metas_cie');
        }

        if(Input::get('pr_vender_com') == '' OR Input::get('pr_titulo_com') == ''){
          $user->pr_titulo_com = 0;
          $user->pr_vender_com = 0;
          $user->pr_comprension = 0;
          $user->pr_muestra_com = 0;
          $user->pr_poblacion_com = 0;
            $user->pr_metas_com = 0;
        }
        else{
          $user->pr_comprension = Input::get('pr_comprension');
          $user->pr_titulo_com = Input::get('pr_titulo_com');
          $user->pr_vender_com = Input::get('pr_vender_com');
          $user->pr_muestra_com = Input::get('pr_muestra_com');
          $user->pr_poblacion_com = Input::get('pr_poblacion_com');
            $user->pr_metas_com = Input::get('pr_metas_com');
        }

        if(Input::get('pr_vender_int') == '' OR Input::get('pr_titulo_int') == ''){
          $user->pr_titulo_int = 0;
          $user->pr_vender_int = 0;
          $user->pr_interes = 0;
          $user->pr_muestra_int = 0;
          $user->pr_poblacion_int = 0;
            $user->pr_metas_int = 0;
        }
        else{
          $user->pr_interes = Input::get('pr_interes');
          $user->pr_titulo_int = Input::get('pr_titulo_int');
          $user->pr_vender_int = Input::get('pr_vender_int');
          $user->pr_muestra_int = Input::get('pr_muestra_int');
          $user->pr_poblacion_int = Input::get('pr_poblacion_int');
            $user->pr_metas_int = Input::get('pr_metas_int');
        }


        if(Input::get('pr_vender_art') == '' OR Input::get('pr_titulo_art') == ''){
          $user->pr_titulo_art = 0;
          $user->pr_vender_art = 0;
          $user->pr_artistica = 0;
          $user->pr_muestra_art = 0;
          $user->pr_poblacion_art = 0;
          $user->pr_metas_art = 0;
        }
        else{
          $user->pr_artistica = Input::get('pr_artistica');
          $user->pr_titulo_art = Input::get('pr_titulo_art');
          $user->pr_vender_art = Input::get('pr_vender_art');
          $user->pr_muestra_art = Input::get('pr_muestra_art');
          $user->pr_poblacion_art = Input::get('pr_poblacion_art');
          $user->pr_metas_art = Input::get('pr_metas_art');
        }
       
        if(Input::get('pr_vender_ing') == '' OR Input::get('pr_titulo_ing') == ''){
          $user->pr_titulo_ing = 0;
          $user->pr_vender_ing = 0;
          $user->pr_ingles = 0;
          $user->pr_muestra_ing = 0;
          $user->pr_poblacion_ing = 0;
          $user->pr_metas_ing = 0;
        }
        else{
          $user->pr_ingles = Input::get('pr_ingles');
          $user->pr_titulo_ing = Input::get('pr_titulo_ing');
          $user->pr_vender_ing = Input::get('pr_vender_ing');
          $user->pr_muestra_ing = Input::get('pr_muestra_ing');
          $user->pr_poblacion_ing = Input::get('pr_poblacion_ing');
          $user->pr_metas_ing = Input::get('pr_metas_ing');
        }
       
  
        $user->metadopcion = 0;
        $user->save();

 
         return Redirect('proyeccionventas/'.$user->colegio_id)->with('status', 'ok_create');

    }

public function editarproventawebadopcion($id)
    {
       
        $input = Input::all();
        $user = Campo::find($id);
        if(Input::get('pr_titulo_mat') == '0'){
        $user->pr_valor_mat = 0;
        }
        else{
        $matema = Input::get('pr_titulo_mat');
        $valormat = DB::table('titulo')->where('id','=',$matema)->get();
        foreach($valormat as $valormat){
        $user->pr_valor_mat = $valormat->precio;
        }
        }


        if(Input::get('pr_titulo_esp') == '0'){
        $user->pr_valor_esp = 0;
        }
        else{
        $espano = Input::get('pr_titulo_esp');
        $valoresp = DB::table('titulo')->where('id','=',$espano)->get();
        foreach($valoresp as $valoresp){
        $user->pr_valor_esp = $valoresp->precio;
        }
        }

        if(Input::get('pr_titulo_cie') == '0'){
        $user->pr_valor_cie = 0;
        }
        else{
        $ciencias = Input::get('pr_titulo_cie');
        $valorcie = DB::table('titulo')->where('id','=',$ciencias)->get();
        foreach($valorcie as $valorcie){
        $user->pr_valor_cie = $valorcie->precio;
        }
        }


        if(Input::get('pr_titulo_com') == '0'){
        $user->pr_valor_com = 0;
        }
        else{
        $comprension = Input::get('pr_titulo_com');
        $valorcom = DB::table('titulo')->where('id','=',$comprension)->get();
        foreach($valorcom as $valorcom){
        $user->pr_valor_com = $valorcom->precio;
        }
        }


        if(Input::get('pr_titulo_int') == '0'){
        $user->pr_valor_int = 0;
        }
        else{
        $interes = Input::get('pr_titulo_int');
        $valorint = DB::table('titulo')->where('id','=',$interes)->get();
        foreach($valorint as $valorint){
        $user->pr_valor_int = $valorint->precio;
        }
        }

        if(Input::get('pr_titulo_ing') == '0'){
        $user->pr_valor_ing = 0;
        }
        else{
        $ingles = Input::get('pr_titulo_ing');
        $valoring = DB::table('titulo')->where('id','=',$ingles)->get();
        foreach($valoring as $valoring){
        $user->pr_valor_ing = $valoring->precio;
        }
        }

        if(Input::get('pr_titulo_art') == '0'){
        $user->pr_valor_art = 0;
        }
        else{
        $artistica = Input::get('pr_titulo_art');
        $valorart = DB::table('titulo')->where('id','=',$artistica)->get();
        foreach($valorart as $valorart){
        $user->pr_valor_art = $valorart->precio;
        }
        }

        $user->colegio_id = Input::get('colegio');
        $user->grado_id = Input::get('subcategory');
        $user->region_id = Input::get('region');
        $user->representante_id = Auth::user()->id;
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
        $user->pr_poblacion_mat = Input::get('pr_poblacion_mat');
        if(Input::get('pr_vender_mat') == ''){
        $user->pr_vender_mat = 0;}
        else{
        $user->pr_vender_mat = Input::get('pr_vender_mat');
        }
        $user->pr_muestra_mat = Input::get('pr_muestra_mat');
        $user->pr_metas_mat = Input::get('pr_metas_mat');
        $user->pr_poblacion_esp = Input::get('pr_poblacion_esp');
        if(Input::get('pr_vender_esp') == ''){
        $user->pr_vender_esp = 0;}
        else{
        $user->pr_vender_esp = Input::get('pr_vender_esp');
        }
        $user->pr_muestra_esp = Input::get('pr_muestra_esp');
        $user->pr_metas_esp = Input::get('pr_metas_esp');
        $user->pr_poblacion_cie = Input::get('pr_poblacion_cie');
        if(Input::get('pr_vender_cie') == ''){
        $user->pr_vender_cie = 0;}
        else{
        $user->pr_vender_cie = Input::get('pr_vender_cie');
        }
        $user->pr_muestra_cie = Input::get('pr_muestra_cie');
        $user->pr_metas_cie = Input::get('pr_metas_cie');
        $user->pr_poblacion_com = Input::get('pr_poblacion_com');
        if(Input::get('pr_vender_com') == ''){
        $user->pr_vender_com = 0;}
        else{
        $user->pr_vender_com = Input::get('pr_vender_com');
        }
        $user->pr_muestra_com = Input::get('pr_muestra_com');
        $user->pr_metas_com = Input::get('pr_metas_com');
        $user->pr_poblacion_int = Input::get('pr_poblacion_int');
        if(Input::get('pr_vender_int') == ''){
        $user->pr_vender_int = 0;}
        else{
        $user->pr_vender_int = Input::get('pr_vender_int');
        }
        $user->pr_muestra_int = Input::get('pr_muestra_int');
        $user->pr_metas_int = Input::get('pr_metas_int');
        $user->pr_poblacion_art = Input::get('pr_poblacion_art');
        if(Input::get('pr_vender_art') == ''){
        $user->pr_vender_art = 0;}
        else{
        $user->pr_vender_art = Input::get('pr_vender_art');
        }
        $user->pr_muestra_art = Input::get('pr_muestra_art');
        $user->pr_metas_art = Input::get('pr_metas_art');
        $user->pr_poblacion_ing = Input::get('pr_poblacion_ing');
        if(Input::get('pr_vender_ing') == ''){
        $user->pr_vender_ing = 0;}
        else{
        $user->pr_vender_ing = Input::get('pr_vender_ing');
        }
        $user->pr_muestra_ing = Input::get('pr_muestra_ing');
        $user->pr_metas_ing = Input::get('pr_metas_ing');
        $user->metadopcion = 0;
        $user->save();

         return Redirect('proyeccionventasadopcion/'.$user->colegio_id)->with('status', 'ok_create');

    }


    public function editarproventawebadopcionaud($id)
    {
       
        $input = Input::all();
        $user = Campo::find($id);
        $user->colegio_id = Input::get('colegio');
        $user->grado_id = Input::get('grado');
        $user->region_id = Input::get('region');
        $user->representante_id = Auth::user()->id;
        $user->ano = Input::get('ano');
        $user->pr_matematicas = Input::get('pr_matematicas');
        $user->pr_titulo_mat = Input::get('pr_titulo_mat');
        $user->edt_mat = Input::get('edt_mat');
        $user->pr_espanol = Input::get('pr_espanol');
        $user->pr_titulo_esp = Input::get('pr_titulo_esp');
        $user->edt_esp = Input::get('edt_esp');
        $user->pr_ciencias = Input::get('pr_ciencias');
        $user->pr_titulo_cie = Input::get('pr_titulo_cie');
        $user->edt_cie = Input::get('edt_cie');
        $user->pr_comprension = Input::get('pr_comprension');
        $user->pr_titulo_com = Input::get('pr_titulo_com');
        $user->edt_com = Input::get('edt_com');
        $user->pr_interes = Input::get('pr_interes');
        $user->pr_titulo_int = Input::get('pr_titulo_int');
        $user->edt_int = Input::get('edt_int');
        $user->pr_artistica = Input::get('pr_artistica');
        $user->pr_titulo_art = Input::get('pr_titulo_art');
        $user->edt_art = Input::get('edt_art');
        $user->pr_ingles = Input::get('pr_ingles');
        $user->pr_titulo_ing = Input::get('pr_titulo_ing');
        $user->edt_ing = Input::get('edt_ing');
        $user->metadopcion = 2;

        $user->save();

         return Redirect('proyeccionventasadopcionaud/'.$user->colegio_id)->with('status', 'ok_create');

    }


    public function editarproventawebadopcionasi($id)
    {
       
        $input = Input::all();
        $user = Campo::find($id);
        if(Input::get('pr_titulo_mat') == '0'){
        $user->pr_valor_mat = 0;
        }
        else{
        $matema = Input::get('pr_titulo_mat');
        $valormat = DB::table('titulo')->where('id','=',$matema)->get();
        foreach($valormat as $valormat){
        $user->pr_valor_mat = $valormat->precio;
        }
        }


        if(Input::get('pr_titulo_esp') == '0'){
        $user->pr_valor_esp = 0;
        }
        else{
        $espano = Input::get('pr_titulo_esp');
        $valoresp = DB::table('titulo')->where('id','=',$espano)->get();
        foreach($valoresp as $valoresp){
        $user->pr_valor_esp = $valoresp->precio;
        }
        }

        if(Input::get('pr_titulo_cie') == '0'){
        $user->pr_valor_cie = 0;
        }
        else{
        $ciencias = Input::get('pr_titulo_cie');
        $valorcie = DB::table('titulo')->where('id','=',$ciencias)->get();
        foreach($valorcie as $valorcie){
        $user->pr_valor_cie = $valorcie->precio;
        }
        }


        if(Input::get('pr_titulo_com') == '0'){
        $user->pr_valor_com = 0;
        }
        else{
        $comprension = Input::get('pr_titulo_com');
        $valorcom = DB::table('titulo')->where('id','=',$comprension)->get();
        foreach($valorcom as $valorcom){
        $user->pr_valor_com = $valorcom->precio;
        }
        }


        if(Input::get('pr_titulo_int') == '0'){
        $user->pr_valor_int = 0;
        }
        else{
        $interes = Input::get('pr_titulo_int');
        $valorint = DB::table('titulo')->where('id','=',$interes)->get();
        foreach($valorint as $valorint){
        $user->pr_valor_int = $valorint->precio;
        }
        }

        if(Input::get('pr_titulo_ing') == '0'){
        $user->pr_valor_ing = 0;
        }
        else{
        $ingles = Input::get('pr_titulo_ing');
        $valoring = DB::table('titulo')->where('id','=',$ingles)->get();
        foreach($valoring as $valoring){
        $user->pr_valor_ing = $valoring->precio;
        }
        }

        if(Input::get('pr_titulo_art') == '0'){
        $user->pr_valor_art = 0;
        }
        else{
        $artistica = Input::get('pr_titulo_art');
        $valorart = DB::table('titulo')->where('id','=',$artistica)->get();
        foreach($valorart as $valorart){
        $user->pr_valor_art = $valorart->precio;
        }
        }

        $user->colegio_id = Input::get('colegio');
        $user->ciudad_id = Auth::user()->ciudadid;
        $user->grado_id = Input::get('subcategory');
        $user->region_id = Input::get('region');
        $user->representante_id = Auth::user()->id;
        $user->ano = Input::get('ano');
       

        if(Input::get('pr_vender_mat') == '' OR Input::get('pr_titulo_mat') == ''){
          $user->pr_titulo_mat = 0;
          $user->pr_vender_mat = 0;
          $user->pr_matematicas = 0;
          $user->pr_muestra_mat = 0;
          $user->pr_poblacion_mat = 0;
          $user->pr_metas_ing = 0;
        }
        else{
          $user->pr_titulo_mat = Input::get('pr_titulo_mat');
          $user->pr_vender_mat = Input::get('pr_vender_mat');
          $user->pr_matematicas = Input::get('pr_matematicas');
          $user->pr_muestra_mat = Input::get('pr_muestra_mat');
          $user->pr_poblacion_mat = Input::get('pr_poblacion_mat');
          $user->pr_metas_mat = Input::get('pr_metas_mat');

        }

        if(Input::get('pr_vender_esp') == '' OR Input::get('pr_titulo_esp') == ''){
          $user->pr_titulo_esp = 0;
          $user->pr_vender_esp = 0;
          $user->pr_espanol = 0;
          $user->pr_muestra_esp = 0;
          $user->pr_poblacion_esp = 0;
          $user->pr_metas_esp = 0;
        }
        else{
          $user->pr_espanol = Input::get('pr_espanol');
          $user->pr_titulo_esp = Input::get('pr_titulo_esp');
          $user->pr_vender_esp = Input::get('pr_vender_esp');
          $user->pr_muestra_esp = Input::get('pr_muestra_esp');
          $user->pr_poblacion_esp = Input::get('pr_poblacion_esp');
          $user->pr_metas_esp = Input::get('pr_metas_esp');
        }


        if(Input::get('pr_vender_cie') == '' OR Input::get('pr_titulo_cie') == ''){
          $user->pr_titulo_cie = 0;
          $user->pr_vender_cie = 0;
          $user->pr_ciencias = 0;
          $user->pr_muestra_cie = 0;
          $user->pr_poblacion_cie = 0;
          $user->pr_metas_cie = 0;
        }
        else{
          $user->pr_ciencias = Input::get('pr_ciencias');
          $user->pr_titulo_cie = Input::get('pr_titulo_cie');
          $user->pr_vender_cie = Input::get('pr_vender_cie');
          $user->pr_muestra_cie = Input::get('pr_muestra_cie');
          $user->pr_poblacion_cie = Input::get('pr_poblacion_cie');
          $user->pr_metas_cie = Input::get('pr_metas_cie');
        }

        if(Input::get('pr_vender_com') == '' OR Input::get('pr_titulo_com') == ''){
          $user->pr_titulo_com = 0;
          $user->pr_vender_com = 0;
          $user->pr_comprension = 0;
          $user->pr_muestra_com = 0;
          $user->pr_poblacion_com = 0;
            $user->pr_metas_com = 0;
        }
        else{
          $user->pr_comprension = Input::get('pr_comprension');
          $user->pr_titulo_com = Input::get('pr_titulo_com');
          $user->pr_vender_com = Input::get('pr_vender_com');
          $user->pr_muestra_com = Input::get('pr_muestra_com');
          $user->pr_poblacion_com = Input::get('pr_poblacion_com');
            $user->pr_metas_com = Input::get('pr_metas_com');
        }

        if(Input::get('pr_vender_int') == '' OR Input::get('pr_titulo_int') == ''){
          $user->pr_titulo_int = 0;
          $user->pr_vender_int = 0;
          $user->pr_interes = 0;
          $user->pr_muestra_int = 0;
          $user->pr_poblacion_int = 0;
            $user->pr_metas_int = 0;
        }
        else{
          $user->pr_interes = Input::get('pr_interes');
          $user->pr_titulo_int = Input::get('pr_titulo_int');
          $user->pr_vender_int = Input::get('pr_vender_int');
          $user->pr_muestra_int = Input::get('pr_muestra_int');
          $user->pr_poblacion_int = Input::get('pr_poblacion_int');
            $user->pr_metas_int = Input::get('pr_metas_int');
        }


        if(Input::get('pr_vender_art') == '' OR Input::get('pr_titulo_art') == ''){
          $user->pr_titulo_art = 0;
          $user->pr_vender_art = 0;
          $user->pr_artistica = 0;
          $user->pr_muestra_art = 0;
          $user->pr_poblacion_art = 0;
          $user->pr_metas_art = 0;
        }
        else{
          $user->pr_artistica = Input::get('pr_artistica');
          $user->pr_titulo_art = Input::get('pr_titulo_art');
          $user->pr_vender_art = Input::get('pr_vender_art');
          $user->pr_muestra_art = Input::get('pr_muestra_art');
          $user->pr_poblacion_art = Input::get('pr_poblacion_art');
          $user->pr_metas_art = Input::get('pr_metas_art');
        }
       
        if(Input::get('pr_vender_ing') == '' OR Input::get('pr_titulo_ing') == ''){
          $user->pr_titulo_ing = 0;
          $user->pr_vender_ing = 0;
          $user->pr_ingles = 0;
          $user->pr_muestra_ing = 0;
          $user->pr_poblacion_ing = 0;
          $user->pr_metas_ing = 0;
        }
        else{
          $user->pr_ingles = Input::get('pr_ingles');
          $user->pr_titulo_ing = Input::get('pr_titulo_ing');
          $user->pr_vender_ing = Input::get('pr_vender_ing');
          $user->pr_muestra_ing = Input::get('pr_muestra_ing');
          $user->pr_poblacion_ing = Input::get('pr_poblacion_ing');
          $user->pr_metas_ing = Input::get('pr_metas_ing');
        }
       
  
        $user->metadopcion = 0;
        $user->save();



         return Redirect('proyeccionventasadopcion/'.$user->colegio_id)->with('status', 'ok_create');

    }
 
public function editargrado($id)
    {

      $school = DB::table('proventas')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('proventas')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargrado')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);




    }

     public function editargradosegundo($id)
    {
       $school = DB::table('proventas')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('proventas')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradosegundo')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);

    }

      public function editargradotercero($id)
    {

        $school = DB::table('proventas')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('proventas')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradotercero')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);

    }

      public function editargradocuarto($id)
    {
        $school = DB::table('proventas')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('proventas')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradocuarto')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);

    }

      public function editargradoquinto($id)
    {
          $school = DB::table('proventas')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('proventas')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradoquinto')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);

    }

      public function editargradosexto($id)
    {
        $school = DB::table('proventas')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('proventas')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradosexto')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);

    }

      public function editargradoseptimo($id)
    {
          $school = DB::table('proventas')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('proventas')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradoseptimo')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);

    }

      public function editargradooctavo($id)
    {
        $school = DB::table('proventas')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('proventas')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradooctavo')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);

    }

      public function editargradonoveno($id)
    {
         $school = DB::table('proventas')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('proventas')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradonoveno')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);

    }

      public function editargradodecimo($id)
    {
         $school = DB::table('proventas')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('proventas')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradodecimo')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);

    }

      public function editargradoonce($id)
    {
          $school = DB::table('proventas')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('proventas')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradoonce')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);

    }

          public function eliminaresseg()
  {
    $esseg = DB::table('esseg_con')->truncate();  
return Redirect('/carga-esseg')->with('status', 'ok_delete');
  }




     public function editargradoaud($id)
    {

        $proventas = DB::table('campos')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        $titulom = DB::table('titulo')->get();
        $editorial = DB::table('editoriales')->get();
        $editorialf = DB::table('editoriales')->get();
        $editorialwebf = DB::table('editoriales')->get();
        $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
        $date = DB::table('configuracion')->where('id', '=', 1)->get();   
        $datef = DB::table('configuracion')->where('id', '=', 1)->get();   
        return view('usuariomiig::editargradoaud')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulom', $titulom)->with('titulof', $titulof)->with('date', $date)->with('datef', $datef)->with('ano', $ano)->with('editorial', $editorial)->with('editorialf', $editorialf)->with('editorialwebf', $editorialwebf);
    }

     public function editargradosegundoaud($id)
    {
         $proventas = DB::table('campos')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        $titulom = DB::table('titulo')->get();
        $editorial = DB::table('editoriales')->get();
        $editorialf = DB::table('editoriales')->get();
        $editorialwebf = DB::table('editoriales')->get();
        $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
        $date = DB::table('configuracion')->where('id', '=', 1)->get();   
        $datef = DB::table('configuracion')->where('id', '=', 1)->get();   
        return view('usuariomiig::editargradosegundoaud')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulom', $titulom)->with('titulof', $titulof)->with('date', $date)->with('datef', $datef)->with('ano', $ano)->with('editorial', $editorial)->with('editorialf', $editorialf)->with('editorialwebf', $editorialwebf);
    }

      public function editargradoterceroaud($id)
    {
        $proventas = DB::table('campos')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        $titulom = DB::table('titulo')->get();
        $editorial = DB::table('editoriales')->get();
        $editorialf = DB::table('editoriales')->get();
        $editorialwebf = DB::table('editoriales')->get();
        $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
        $date = DB::table('configuracion')->where('id', '=', 1)->get();   
        $datef = DB::table('configuracion')->where('id', '=', 1)->get();   
        return view('usuariomiig::editargradoterceroaud')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulom', $titulom)->with('titulof', $titulof)->with('date', $date)->with('datef', $datef)->with('ano', $ano)->with('editorial', $editorial)->with('editorialf', $editorialf)->with('editorialwebf', $editorialwebf);
    }

      public function editargradocuartoaud($id)
    {
        $proventas = DB::table('campos')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        $titulom = DB::table('titulo')->get();
        $editorial = DB::table('editoriales')->get();
        $editorialf = DB::table('editoriales')->get();
        $editorialwebf = DB::table('editoriales')->get();
        $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
        $date = DB::table('configuracion')->where('id', '=', 1)->get();   
        $datef = DB::table('configuracion')->where('id', '=', 1)->get();   
        return view('usuariomiig::editargradocuartoaud')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulom', $titulom)->with('titulof', $titulof)->with('date', $date)->with('datef', $datef)->with('ano', $ano)->with('editorial', $editorial)->with('editorialf', $editorialf)->with('editorialwebf', $editorialwebf);
    }

      public function editargradoquintoaud($id)
    {
         $proventas = DB::table('campos')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        $titulom = DB::table('titulo')->get();
        $editorial = DB::table('editoriales')->get();
        $editorialf = DB::table('editoriales')->get();
        $editorialwebf = DB::table('editoriales')->get();
        $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
        $date = DB::table('configuracion')->where('id', '=', 1)->get();   
        $datef = DB::table('configuracion')->where('id', '=', 1)->get();   
        return view('usuariomiig::editargradoquintoaud')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulom', $titulom)->with('titulof', $titulof)->with('date', $date)->with('datef', $datef)->with('ano', $ano)->with('editorial', $editorial)->with('editorialf', $editorialf)->with('editorialwebf', $editorialwebf);
    }

      public function editargradosextoaud($id)
    {
        $proventas = DB::table('campos')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        $titulom = DB::table('titulo')->get();
        $editorial = DB::table('editoriales')->get();
        $editorialf = DB::table('editoriales')->get();
        $editorialwebf = DB::table('editoriales')->get();
        $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
        $date = DB::table('configuracion')->where('id', '=', 1)->get();   
        $datef = DB::table('configuracion')->where('id', '=', 1)->get();   
        return view('usuariomiig::editargradosextoaud')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulom', $titulom)->with('titulof', $titulof)->with('date', $date)->with('datef', $datef)->with('ano', $ano)->with('editorial', $editorial)->with('editorialf', $editorialf)->with('editorialwebf', $editorialwebf);
    }

      public function editargradoseptimoaud($id)
    {
        $proventas = DB::table('campos')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        $titulom = DB::table('titulo')->get();
        $editorial = DB::table('editoriales')->get();
        $editorialf = DB::table('editoriales')->get();
        $editorialwebf = DB::table('editoriales')->get();
        $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
        $date = DB::table('configuracion')->where('id', '=', 1)->get();   
        $datef = DB::table('configuracion')->where('id', '=', 1)->get();   
        return view('usuariomiig::editargradoseptimoaud')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulom', $titulom)->with('titulof', $titulof)->with('date', $date)->with('datef', $datef)->with('ano', $ano)->with('editorial', $editorial)->with('editorialf', $editorialf)->with('editorialwebf', $editorialwebf);
    }

      public function editargradooctavoaud($id)
    {
        $proventas = DB::table('campos')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        $titulom = DB::table('titulo')->get();
        $editorial = DB::table('editoriales')->get();
        $editorialf = DB::table('editoriales')->get();
        $editorialwebf = DB::table('editoriales')->get();
        $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
        $date = DB::table('configuracion')->where('id', '=', 1)->get();   
        $datef = DB::table('configuracion')->where('id', '=', 1)->get();   
        return view('usuariomiig::editargradooctavoaud')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulom', $titulom)->with('titulof', $titulof)->with('date', $date)->with('datef', $datef)->with('ano', $ano)->with('editorial', $editorial)->with('editorialf', $editorialf)->with('editorialwebf', $editorialwebf);
    }

      public function editargradonovenoaud($id)
    {
       $proventas = DB::table('campos')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        $titulom = DB::table('titulo')->get();
        $editorial = DB::table('editoriales')->get();
        $editorialf = DB::table('editoriales')->get();
        $editorialwebf = DB::table('editoriales')->get();
        $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
        $date = DB::table('configuracion')->where('id', '=', 1)->get();   
        $datef = DB::table('configuracion')->where('id', '=', 1)->get();   
        return view('usuariomiig::editargradonovenoaud')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulom', $titulom)->with('titulof', $titulof)->with('date', $date)->with('datef', $datef)->with('ano', $ano)->with('editorial', $editorial)->with('editorialf', $editorialf)->with('editorialwebf', $editorialwebf);
    }

      public function editargradodecimoaud($id)
    {
        $proventas = DB::table('campos')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        $titulom = DB::table('titulo')->get();
        $editorial = DB::table('editoriales')->get();
        $editorialf = DB::table('editoriales')->get();
        $editorialwebf = DB::table('editoriales')->get();
        $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
        $date = DB::table('configuracion')->where('id', '=', 1)->get();   
        $datef = DB::table('configuracion')->where('id', '=', 1)->get();   
        return view('usuariomiig::editargradodecimoaud')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulom', $titulom)->with('titulof', $titulof)->with('date', $date)->with('datef', $datef)->with('ano', $ano)->with('editorial', $editorial)->with('editorialf', $editorialf)->with('editorialwebf', $editorialwebf);
    }

      public function editargradoonceaud($id)
    {
        $proventas = DB::table('campos')->where('id', '=', $id)->get();
        $titulowebf = DB::table('titulo')->get();
        $titulof = DB::table('titulo')->get();
        $titulo = DB::table('titulo')->get();
        $titulom = DB::table('titulo')->get();
        $editorial = DB::table('editoriales')->get();
        $editorialf = DB::table('editoriales')->get();
        $editorialwebf = DB::table('editoriales')->get();
        $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
        $date = DB::table('configuracion')->where('id', '=', 1)->get();   
        $datef = DB::table('configuracion')->where('id', '=', 1)->get();   
        return view('usuariomiig::editargradoonceaud')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('titulom', $titulom)->with('titulof', $titulof)->with('date', $date)->with('datef', $datef)->with('ano', $ano)->with('editorial', $editorial)->with('editorialf', $editorialf)->with('editorialwebf', $editorialwebf);
    }





 public function editargradoasi($id)
    {

         $school = DB::table('campos')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('campos')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradoasi')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);

    }

     public function editargradosegundoasi($id)
    {
         $school = DB::table('campos')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('campos')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradosegundoasi')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);
    }

      public function editargradoterceroasi($id)
    {
         $school = DB::table('campos')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('campos')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradoterceroasi')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);
    }

      public function editargradocuartoasi($id)
    {
         $school = DB::table('campos')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('campos')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradocuartoasi')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);
    }

      public function editargradoquintoasi($id)
    {
         $school = DB::table('campos')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('campos')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradoquintoasi')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);
    }

      public function editargradosextoasi($id)
    {
         $school = DB::table('campos')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('campos')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradosextoasi')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);
    }

      public function editargradoseptimoasi($id)
    {
        $school = DB::table('campos')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('campos')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradoseptimoasi')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);
    }

      public function editargradooctavoasi($id)
    {
         $school = DB::table('campos')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('campos')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradooctavoasi')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);
    }

      public function editargradonovenoasi($id)
    {
         $school = DB::table('campos')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('campos')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradonovenoasi')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);
    }

      public function editargradodecimoasi($id)
    {
         $school = DB::table('campos')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('campos')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradodecimoasi')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);
    }

      public function editargradoonceasi($id)
    {
        $school = DB::table('campos')->where('id', '=', $id)->get();
       foreach($school as $school){    
        $colegios = DB::table('colegios')->where('id', "=", $school->colegio_id)->get();
       }
       $titulo = DB::table('titulo')->get();
       $proventas = DB::table('campos')->where('id', '=', $id)->get();
       $titulowebf = DB::table('titulo')->get();
       $ano = DB::table('configuracion')->where('id', '=', 1)->get();  
       return view('usuariomiig::editargradoonceasi')->with('proventas', $proventas)->with('titulowebf', $titulowebf)->with('titulo', $titulo)->with('ano', $ano)->with('colegios', $colegios);
    }


}


