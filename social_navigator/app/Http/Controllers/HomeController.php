<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblContent;
use App\Models\TblNews;
use App\Models\TblAds;

class HomeController extends Controller
{
    public function getContent(Request $request) {
		//$view = View::make('Navi');;
		$contentNews = new TblNews;
		$contentNews = $contentNews->all();
		$contentAds = new TblAds;
		$contentAds = $contentAds->all();

		return view('Navi', ['news' => $contentNews, 'ads' => $contentAds]);
	}
	
	public function getStr(Request $request) {
		$content = TblContent::where('id_page', $request->id)->first();
		if (!$content) {
			return abort(404);
		}
		return view('href', ['content' => $content]);
	}
}
