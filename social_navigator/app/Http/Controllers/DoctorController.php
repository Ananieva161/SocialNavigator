<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblDoctors;

class DoctorController extends Controller
{
	#private $id_doctor;
	
    public function getDoctor() {
		//$view = View::make('Navi');;
		$contentDoctors = new TblDoctors;
		$contentDoctors = $contentDoctors->all();
		
		#$this->id_doctor = $contentDoctors->;
		
		return view('Navi1', ['doctor' => $contentDoctors]);
	}
}

