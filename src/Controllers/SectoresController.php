<?php

namespace Digitalmiig\Colegiomiig\Controllers;

use Illuminate\Routing\Controller;
use Digitalmiig\Colegiomiig\Region;
use Input;
use DB;

class SectoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectors = DB::table('users')
            ->join('regiones', 'users.id', '=', 'regiones.user_id')->get();
        return view('colegiomiig::sector')->with('sectors', $sectors);  
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sector = new Region;
        $sector->region = Input::get('region');
        $sector->user_id = Input::get('representante');
        $sector->save();

        return Redirect('/sectores')->with('status', 'ok_create');
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
              
        $ciudades = DB::table('ciudades')->where('region_id', '=', $id)->get();
        return view('colegiomiig::ciudades')->with('ciudades', $ciudades);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
       $gerentes = DB::table('regiones')
        ->join('users','regiones.user_id','=','users.id')
        ->where('regiones.id', '=', $id)->get();
        $sectores = Region::where('regiones.id', '=', $id)->get();
        $lista = DB::table('users')->get();
        return view('colegiomiig::editar-sector')->with('sectores', $sectores)->with('gerentes', $gerentes)->with('lista', $lista);
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
    $user = Region::find($id);
    $user->user_id = Input::get('representante');
    $user->region= Input::get('region');
    $user->save();
    return Redirect('/sectores')->with('status', 'ok_update');
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
}
