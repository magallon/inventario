<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('iniciar', function (){
	return view('login');
});

Route::get('administrador', function (){
	return view('admin');
});

Route::get('alta_empleado', function (){
	return view('alta_empleado');
});

Route::get('alta_departamento', function (){
	return view('alta_departamento');
});

Route::get('alta_equipo', function (){
	return view('alta_equipo');
});

Route::get('alta_impresora', function (){
	return view('alta_impresora');
});

Route::get('alta_accesorio', function (){
	return view('alta_accesorio');
});

