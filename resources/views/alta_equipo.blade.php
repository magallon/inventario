@extends('layouts.admin')

@section('content')

<div class="container">
	<h2 class="pull-left titulos">Registrar equipo de computo</h2>
	<div class="col-xs-12">
		<form action="" class="">
			<div class="row">
				<div class="col-md-3">
					<label for="" class="control-label" >Nombre (ID):</label>
					<input type="text" class="form-control" placeholder="Ej: Ventas-PC">
				</div>
				<div class="col-md-3">
				<label for="" class="control-label">Estatus</label>
					<select class="form-control">
					   <option>-estatus-</option>
					  <option>Asignado</option>
					  <option>No funciona</option>
					  <option>Partes</option>
					  <option>En garantia</option>
					  <option>En reparación</option>
					  <option>Baja</option>
					  <option>Almacenada</option>
					</select>
				</div>
				<div class="col-md-3">
					<label for="" class="control-label">Departamento:</label>
					<select class="form-control">
						<option>-Departamento-</option>
						<option>Compras</option>
						<option>Administracion</option>
						<option>Telemarketing</option>
						<option>Ventas</option>
						<option>Compras</option>
						<option>Contabilidad</option>
						<option>Almacen</option>
					</select>
				</div>
			</div><br>

			<div class="row">
				<div class="col-md-3">
					<label for="" class="control-label">Marca</label>
					<select class="form-control">
					  <option>-marca-</option>
					  <option>Dell</option>
					  <option>HP</option>
					  <option>Lanix</option>
					  <option>Acer</option>
					  <option>Lenovo</option>
					  <option>Sony</option>
					</select>
				</div>
				<div class="col-md-3">
				<label for="" class="control-label">Memoria RAM:</label>
					<div class="input-group">
						<input type="number" class="form-control" placeholder="2">
						<span class="input-group-addon">GB</span>
					</div>
				</div>
				<div class="col-md-3">
					<label for="" class="control-label">Empleado responsable:</label>
					<div class="input-group">
						<select class="form-control">
						  <option>-nombre del empleado-</option>
						  <option>Juan Rodriguez Perez</option>
						  <option>Raul Jimenez Salazar</option>
						</select>
						<span class="input-group-addon">+</span>
					</div>	
				</div>
				
			</div><br>

			<div class="row">
				<div class="col-md-3">
					<label for="" class="control-label">Modelo</label>
					<input type="text" class="form-control" placeholder="Ej: Pavilion g4">
				</div>
				<div class="col-md-3">
					<label for="" class="control-label">Procesador:</label>
					<input type="text" class="form-control" placeholder="Ej: Intel i3 tercera generación">
				</div>
				<div class="col-md-3">
					<label for="" class="control-label">Nº de serie CPU:</label>
					<input type="text" class="form-control">
				</div>
				
			</div><br>

			<div class="row">
				<div class="col-md-3">
					<label for="" class="control-label">Fecha de compra</label>
					<input type="date" class="form-control">
				</div>
				<div class="col-md-3">
					<label for="" class="control-label">Fecha de instalacion</label>
					<input type="date" class="form-control">
				</div>
				<div class="col-md-3">
					<label for="" class="control-label">Fecha de ultimo mantenimiento</label>
					<input type="date" class="form-control">
				</div>
			</div><br>

			<div class="row">
				<div class="col-md-9">
					<label for="" class="control-label">Caracteristicas adicionales</label>
					<textarea class="form-control" rows="5" placeholder="Ej: Computadora Semi-nueva color negra con algunos tallones en la base del CPU"></textarea>
				</div>
				
			</div><br>
			<input type="submit" value="Cancelar" class="btn  btn-default">
			<input type="submit" value="Registrar" class="btn  btn-primary">
		</form>
	</div>	
</div>

@stop