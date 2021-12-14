<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('Navi');
});*/

Route::get('/', 'App\Http\Controllers\HomeController@getContent')->name('mains');

Route::get('/Navi1', 'App\Http\Controllers\DoctorController@getDoctor')->name('mains');

Route::get('/Navi2', 'App\Http\Controllers\VolController@getVol')->name('mains');


#Route::get('/href', function () {
#    return view('href');
#});

/*Route::get('/Form_doctor', function () {
    return view('Form_doctor');
});*/

Route::get('/Form_doctor', 'App\Http\Controllers\StudentsApplicationsController@form');
Route::post('/Form_doctor', 'App\Http\Controllers\StudentsApplicationsController@form');

Route::get('/result_doctor_form', 'App\Http\Controllers\StudentsApplicationsController@result');
Route::post('/result_doctor_form', 'App\Http\Controllers\StudentsApplicationsController@result');

/*Route::get('/Form_activities', function () {
    return view('Form_activities');
});*/

Route::get('/Form_activities', 'App\Http\Controllers\VolunteersApplicationsController@form');
Route::post('/Form_activities', 'App\Http\Controllers\VolunteersApplicationsController@form');

Route::get('/result_volunteer_form', 'App\Http\Controllers\VolunteersApplicationsController@result');
Route::post('/result_volunteer_form', 'App\Http\Controllers\VolunteersApplicationsController@result');

Route::get('/buildings', function () {
	//сюда метод контролера
	//Route::get('/si/time_control', 'Special\TimeControlController@main'); 
    return view('buildings');
});

Route::get('/{id}', 'App\Http\Controllers\HomeController@getStr');
