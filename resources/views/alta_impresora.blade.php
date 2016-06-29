@extends('layouts.admin')

@section('content')

<div class="container">
			<h2 class="titulos">Registrar Impresora</h2>
			<form action="" class="">
				<div class="row">
					<div class="col-md-4">
						<label for="" class="control-label" >Nombre (ID):</label>
						<input type="text" class="form-control" placeholder="Ej: Impresora-Ventas">
					</div>
					<div class="col-md-4">
					<label for="" class="control-label">Estatus</label>
						<select class="form-control">
						   <option>-estatus-</option>
						  <option>Asignada</option>
						  <option>No funciona</option>
						  <option>Partes</option>
						  <option>En garantia</option>
						  <option>En reparación</option>
						  <option>Baja</option>
						  <option>Almacenada</option>
						</select>
					</div>
					<div class="col-md-4">
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
					<div class="col-md-4">
						<label for="" class="control-label">Marca</label>
						<select class="form-control">
						  <option>-marca-</option>
						  <option>Epson</option>
						  <option>HP</option>
						  <option>Lexmark</option>
						  <option>brother</option>
						  <option>Xerox</option>
						  <option>Kyocera</option>
						</select>
					</div>
					<div class="col-md-4">
						<label for="" class="control-label">Modelo</label>
						<input type="text" class="form-control" placeholder="Ej: laserjet pro p1102w">
					</div>
					<div class="col-md-4">
						<label for="" class="control-label">Tipo</label>
						<select class="form-control">
						  <option>-Tipo de impresora-</option>
						  <option>Laser</option>
						  <option>Inyección de tinta</option>
						</select>
					</div>
										
				</div><br>
				<div class="row">
					<div class="col-md-4">
						<label for="" class="control-label">Fecha de compra</label>
						<input type="date" class="form-control">
					</div>
					<div class="col-md-4">
						<label for="" class="control-label">Fecha de instalacion</label>
						<input type="date" class="form-control">
					</div>
					<div class="col-md-4">
						<label for="" class="control-label">Fecha de ultimo mantenimiento</label>
						<input type="date" class="form-control">
					</div>
				</div><br>

				<div class="row">
					<div class="col-md-8">
						<label for="" class="control-label">Caracteristicas adicionales</label>
						<textarea class="form-control" rows="5" placeholder="Ej: Computadora Semi-nueva color negra con algunos tallones en la base del CPU"></textarea>
					</div>
					<div class="col-md-4">
						<label for="" class="control-label">Nº de serie Impresora:</label>
						<input type="text" class="form-control" placeholder="Ej: J66651A9J146851A">
					</div>
					
				</div>
				<input type="submit" value="Cancelar" class="btn  btn-default">
				<input type="submit" value="Registrar" class="btn  btn-primary">

			</form>
			
		</div>

@stop