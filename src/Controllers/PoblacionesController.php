<?php

namespace Digitalmiig\Colegiomiig\Controllers;

use Illuminate\Routing\Controller;
use Digitalmiig\Colegiomiig\Dato;
use Input;
use DB;

class PoblacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $date = DB::table('configuracion')->where('id', '=', 1)->get();
        foreach ($date as $date) {
       
        $user = new Dato;
        $user->prejardin = Input::get('sum1');
        $user->jardin = Input::get('sum2');
        $user->transicion = Input::get('sum3');
        $user->primero = Input::get('sum4');
        $user->segundo = Input::get('sum5');;
        $user->tercero = Input::get('sum6');
        $user->cuarto = Input::get('sum7');
        $user->quinto = Input::get('sum8');
        $user->sexto = Input::get('sum9');
        $user->septimo = Input::get('sum10');
        $user->octavo = Input::get('sum11');
        $user->noveno = Input::get('sum12');
        $user->decimo = Input::get('sum13');
        $user->once = Input::get('sum14');
        $user->ano = $date->ano;
        $user->colegio_id = Input::get('colegio_id');
        $user->total = Input::get('res');
       
        $user->save();

        return Redirect('poblacion-registrada/'.$user->colegio_id)->with('status', 'ok_create');
         }
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
                
      
         $poblacion = DB::table('colegios')
            ->join('datos', 'datos.colegio_id', '=', 'colegios.id')
            ->where('datos.colegio_id', '=', $id)
            ->get();
            $poblacionweb = DB::table('datos')
            ->join('colegios', 'colegios.id', '=', 'datos.colegio_id')
            ->where('colegios.id', '=', $id)
            ->get();
        return view('colegiomiig::mercado-registrado')->with('poblacion', $poblacion)->with('poblacionweb', $poblacionweb);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $datos = Dato::find($id);

        return view('colegiomiig::editar-mercado')->with('datos', $datos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function update($id)
    {
        $input = Input::all();
        $user = Dato::find($id);
        $user->prejardin = Input::get('sum1');
        $user->jardin = Input::get('sum2');
        $user->transicion = Input::get('sum3');
        $user->primero = Input::get('sum4');
        $user->segundo = Input::get('sum5');;
        $user->tercero = Input::get('sum6');
        $user->cuarto = Input::get('sum7');
        $user->quinto = Input::get('sum8');
        $user->sexto = Input::get('sum9');
        $user->septimo = Input::get('sum10');
        $user->octavo = Input::get('sum11');
        $user->noveno = Input::get('sum12');
        $user->decimo = Input::get('sum13');
        $user->once = Input::get('sum14');
        $user->colegio_id = Input::get('colegio_id');
        $user->total = Input::get('res')-3;
        $user->save();
    return Redirect('/poblacion-registrada/'.$user->colegio_id)->with('status', 'ok_update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poblacion = Dato::where('id', '=', $id)->delete();


        return Redirect('/auditorjr/')->with('status', 'ok_delete');
    }
}
