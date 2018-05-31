<?php

namespace Digitalmiig\Colegiomiig\Controllers;

use Illuminate\Routing\Controller;
use Digitalmiig\Colegiomiig\Ciudad;
use Digitalmiig\Colegiomiig\Region;
use Input;
use DB;
use Illuminate\Support\Facades\Auth;

class CiudadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudades = DB::table('ciudades')->where('asistente','=', Auth::user()->id)->get();
        
        return view('colegiomiig::asistente-ciudades')->with('ciudades', $ciudades);
    }
        


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudades = new Ciudad;
        $ciudades->n_ciudad = Input::get('ciudad');
        $ciudades->region_id = Input::get('regional');
        $ciudades->asistente = Input::get('asistente');
        $ciudades->save();

        return Redirect('lista-ciudades/'.$ciudades->region_id)->with('status', 'ok_create');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $ciudad = Ciudad::where('ids', '=', $id)->get();
        return Redirect('/editar-ciudad')->with('status', 'ok_delete');
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
        $ciudads = Input::get('ciudad');
        $regions = Input::get('region_id');
        
        Ciudad::where('ids',$id)->update(array(
                         'n_ciudad'=>$ciudads,
                         
));

        return Redirect('lista-ciudades/'.$regions)->with('status', 'ok_update');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $users = Ciudad::where('ids', '=', $id)->delete();
      
        return Redirect('/sectores')->with('status', 'ok_delete');
        
    }




}
