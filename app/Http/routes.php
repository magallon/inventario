<?php

//login---------------------------------------------------------------------------------------------------------------
Route::get('/iniciar', function (){
	return view('login');
});


//tablas--------------------------------------------------------------------------------------------------------------
Route::get('/departamento', function (){
	return view('departamento');
});

Route::get('/empleado', function (){
	return view('empleado');
});

Route::get('/equipo', function (){
	return view('equipo');
});

Route::get('/impresora', function (){
	return view('impresora');
});

Route::get('/accesorio', function (){
	return view('accesorio');
});

//altas---------------------------------------------------------------------------------------------------------------
Route::get('/alta_empleado', function (){
	return view('alta_empleado');
});

/*
	Route::get('/alta_departamento', function () {
  	return view('departamento.alta_departamento');
});
*/

Route::post('/departamento', 'departamentoController@store');

Route::post('/empleado', 'departamentoController@store');

Route::get('/alta_equipo', function (){
	return view('alta_equipo');
});
Route::get('/alta_impresora', function (){
	return view('alta_impresora');
});
Route::get('/alta_accesorio', function (){
	return view('alta_accesorio');
});





