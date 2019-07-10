<?php


namespace Digitalmiig\Colegiomiig\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Digitalmiig\Colegiomiig\Item;
use Digitalmiig\Colegiomiig\Colegio;
use Digitalmiig\Colegiomiig\Titulo;
use Digitalmiig\Colegiomiig\Registro;
use DB;
use Input;
use Excel;



class ExportadorController extends Controller
{
	public function importExport()
	{
		return view('importExport');
	}

	public function downloadExcel($type)
	{
		$data = Colegio::get()->toArray();
		return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}


	public function importExcel()
	{
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$insert[] = ['ciudadania' => $value->ciudadania];
				}
				if(!empty($insert)){
					DB::table('colegioss')->insert($insert);
					dd('Insert Record successfully.');
				}
			}
		}
		return back();
	}


public function exportadores()
	{

Excel::create('Filename', function($excel) {

    $excel->sheet('Sheetname', function($sheet) {

      
       $colegios = Colegio::all();
       $sheet->fromArray($colegios);

    });

})->export('xls');
}


	public function exportador($type)
	{
		$data = Colegio::get()->toArray();
		return Excel::create('colegios', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}

	public function importador()
	{
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$insert[] = ['nombres' => $value->nombres, 'universo' => $value->universo, 'jornada' => $value->jornada, 'codigo' => $value->codigo, 'r_social' => $value->r_social, 'domicilio' => $value->domicilio, 'pueblo' => $value->pueblo, 'contacto' => $value->contacto, 'adopcion' => $value->adopcion, 'nit' => $value->nit, 'mt' => $value->mt, 'es' => $value->es, 'sc' => $value->sc, 'cl' => $value->cl, 'ig' => $value->ig, 'art' => $value->art, 'ing' => $value->ing, 'pj' => $value->pj, 'jd' => $value->jd, 'ts' => $value->ts, 'user_id' => $value->user_id, 'region_id' => $value->region_id, 'ciudad_id' => $value->ciudad_id, 'representante_id' => $value->representante_id, 'representante' => $value->representante, 'junta_d' => $value->junta_d, 'rector' => $value->rector, 'coordinador' => $value->coordinador, 'docente' => $value->docente, 'propietario' => $value->propietario, 'cargo' => $value->cargo, 'emailcol' => $value->emailcol, 'telefono' => $value->telefono, 'telefono_ofc' => $value->telefono_ofc, 'producto' => $value->producto, 'relacion' => $value->relacion, 'esseg' => $value->esseg, 'venta_d' => $value->venta_d, 'interme' => $value->interme, 'c_aliados' => $value->c_aliados, 'estadoaud' => $value->estadoaud, 'auditor' => $value->auditor, 'nombredefine' => $value->nombredefine, 'apellidodefine' => $value->apellidodefine, 'emaildefine' => $value->emaildefine, 'direcciondefine' => $value->direcciondefine, 'telefonodefine' => $value->telefonodefine, 'telefonoceldefine' => $value->telefonoceldefine, 'nota' => $value->nota, 'created_at' => $value->created_at, 'updated_at' => $value->updated_at];
				}
				if(!empty($insert)){
					DB::table('colegios')->insert($insert);
					dd('Insert Record successfully.');
				}
			}
		}
		return back();
	}

}