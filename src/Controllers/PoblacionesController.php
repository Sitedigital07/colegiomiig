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
        $user->prejardinact = Input::get('sum1a');
        $user->jardinact = Input::get('sum2a');
        $user->transicionact = Input::get('sum3a');
        $user->primeroact = Input::get('sum4a');
        $user->segundoact = Input::get('sum5a');;
        $user->terceroact = Input::get('sum6a');
        $user->cuartoact = Input::get('sum7a');
        $user->quintoact = Input::get('sum8a');
        $user->sextoact = Input::get('sum9a');
        $user->septimoact = Input::get('sum10a');
        $user->octavoact = Input::get('sum11a');
        $user->novenoact = Input::get('sum12a');
        $user->decimoact = Input::get('sum13a');
        $user->onceact = Input::get('sum14a');
        $user->ano = $date->ano;
        $user->colegio_id = Input::get('colegio_id');
        $user->total = $user->prejardin+$user->jardin+$user->transicion+$user->primero+$user->segundo+$user->tercero+$user->cuarto+$user->quinto+$user->sexto+$user->septimo+$user->octavo;+$user->noveno
        +$user->decimo +$user->once;      
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
        $user->total = $user->prejardin+$user->jardin+$user->transicion+$user->primero+$user->segundo+$user->tercero+$user->cuarto+$user->quinto+$user->sexto+$user->septimo+$user->octavo;+$user->noveno
        +$user->decimo +$user->once;
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
