<?php
use Illuminate\Http\Request;
Route::get('/', function(){
	return redirect('/iniciar');
});
//login---------------------------------------------------------------------------------------------------------------
Route::get('/iniciar', function (){
	return view('login');
});
//tablas--------------------------------------------------------------------------------------------------------------
Route::get('/departamento', function (){
	return view('departamento', ['departamentos' => \inventario\Departamento::all()]);
});
Route::get('/empleado', function (){
	$empleados = \DB::table('empleado')
		->leftJoin('departamento', 'empleado.Departamento_id', '=', 'departamento.id')
		->leftJoin('equipo', 'empleado.id', '=', 'equipo.Empleado_id')
		->select('empleado.id', 'empleado.nombre', 'departamento.nombre as departamento', 'equipo.nombre as equipo')
		->get();
	$departamentos = \inventario\Departamento::all();
	return view('empleado', compact('empleados', 'departamentos'));
});
Route::any('/equipo', function (){
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
Route::get('/alta_departamento', function () {
  	return view('departamento.alta_departamento');
});

Route::post('/departamento', 'departamentoController@store');
Route::post('/empleado', function(Request $request){
	$empleado = \DB::table('empleado')->insert([
		'nombre' => $request->nombre,
		'Departamento_id' => $request->departamento
	]);
	if($empleado){
		return back()->with('success', true);	
	}
	return back()->with('error', false);
});
Route::get('/alta_equipo', function (){
	return view('alta_equipo');
});
Route::get('/alta_impresora', function (){
	return view('alta_impresora');
});
Route::get('/alta_accesorio', function (){
	return view('alta_accesorio');
});