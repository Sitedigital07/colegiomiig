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
					$insert[] = ['ciudadania' => $value->ciudadania];
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