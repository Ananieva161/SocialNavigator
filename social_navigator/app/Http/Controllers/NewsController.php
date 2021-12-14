<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblNews;

class HomeController extends Controller
{
    public function getContent(Request $request) {
		//$view = View::make('Navi');
		$content = TblContent::where('id_page', /*$request->id*/1)->first();
		
		if (!$content) {
			return abort(404);
		}
		
		return view('Navi', ['contentNews' => $content]);
	}
}
