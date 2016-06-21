@extends('layouts.admin')


@section('content')

<div class="container">
			<h2 class="jumbotron">Registrar Accesorio</h2>
			<form action="" class="">
				<div class="row">
					<div class="col-md-4">
						<label for="" class="control-label" >Nombre (ID):</label>
						<input type="text" class="form-control" placeholder="Ej: Mouse PC3-Ventas">
					</div>
					<div class="col-md-4">
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
					<div class="col-md-4">
						<label for="" class="control-label">PC asignada:</label>
						<select class="form-control">
							<option>-Selecciona la PC-</option>
							<option>PC1-Compras</option>
							<option>PC2-Compras</option>
							<option>PC3-Compras</option>
							<option>PC1-Administracion</option>
							<option>PC1-Telemarketing</option>
							<option>PC2-Telemarketing</option>
							<option>PC3-Telemarketing</option>
							<option>PC-Ventas</option>
							<option>PC-Compras</option>
							<option>PC-Contabilidad</option>
							<option>PC-Almacen</option>
						</select>
					</div>
				</div><br>

				<div class="row">
					<div class="col-md-4">
						<label for="" class="control-label">Marca</label>
						<select class="form-control">
						  <option>-marca-</option>
						  <option>Logitech</option>
						  <option>HP</option>
						  <option>Acteck</option>
						  <option>Vorago</option>
						  <option>Dell</option>
						</select>
					</div>
					<div class="col-md-4">
						<label for="" class="control-label">Modelo</label>
						<input type="text" class="form-control" placeholder="Ej: WM514">
					</div>
					<div class="col-md-4">
						<label for="" class="control-label">Nº de serie Accesorio:</label>
						<input type="text" class="form-control" placeholder="Ej: J66651A9J146851A">
					</div>
										
				</div><br>
				<div class="row">
					<div class="col-md-4">
						<label for="" class="control-label">Fecha de compra</label>
						<input type="date" class="form-control">
					</div>
					<div class="col-md-4">
						<label for="" class="control-label">Fecha de asignación</label>
						<input type="date" class="form-control">
					</div>
					<div class="col-md-4">
						<label for="" class="control-label">Caracteristicas adicionales</label>
						<textarea class="form-control" rows="5" placeholder="Ej: Computadora Semi-nueva color negra con algunos tallones en la base del CPU"></textarea>
					</div>
					
				</div><br>
				<input type="submit" value="Cancelar" class="btn  btn-default">
				<input type="submit" value="Registrar" class="btn  btn-primary">

			</form>
			
		</div>
@stop