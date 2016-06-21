<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('iniciar', function (){
	return view('login');
});
Route::post('administrador', function (){
	return view('index');
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