<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblVol;

class VolController extends Controller
{
	#private $id_doctor;
	
    public function getVol() {
		//$view = View::make('Navi');;
		$contentVols = new TblVol;
		$contentVols = $contentVols->all();
		
		#$this->id_doctor = $contentDoctors->;
		
		return view('Navi2', ['vols' => $contentVols]);
	}
}

