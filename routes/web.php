<?php

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
    return view('welcome');
});

Route::get('/formnando', function () {
    return view('nando.form');
});
Route::get('form/simpan', 'FormControllerNando@simpandata');

Route::get('/formsidiq', function(){
	return view('sidiq.form');
});

Route::get('form/simpan', 'FormControllerSidiq@simpandata');

Route::get('/formrendi', function() {
	return view('rendi.form');
});

Route::post('/rendi/simpan', 'FormControllerRendi@simpandata');