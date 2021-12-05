<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Navi');
});

Route::get('/Navi1', function () {
    return view('Navi1');
});

Route::get('/Form_doctor', function () {
    return view('Form_doctor');
});

Route::get('/Navi2', function () {
    return view('Navi2');
});

Route::get('/Form_activities', function () {
    return view('Form_activities');
});

Route::get('/href', function () {
    return view('href');
});

Route::get('/buildings', function () {
	//сюда метод контролера
	//Route::get('/si/time_control', 'Special\TimeControlController@main'); 
    return view('buildings');
});