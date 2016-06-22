@extends('layouts.admin')


@section('content')

	<form action="" method="POST">

		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Alta Empleado</button>

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="exampleModalLabel">Alta de empleado</h4>
		      </div>
		      <div class="modal-body">
		          <div class="form-group">
		            <label for="recipient-name" class="control-label">Nombre</label>
		            <input type="text" class="form-control" id="recipient-name">
		          </div>
		          <div class="form-group">
		            <label for="message-text" class="control-label">Departamento</label>
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
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
		        <button type="button" class="btn btn-primary">Registrar</button>
		      </div>
		    </div>
		  </div>
		</div>
	</form>

		<script type="text/javascript">

			$('#exampleModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient = button.data('whatever') // Extract info from data-* attributes
		  var modal = $(this)
		  modal.find('.modal-title').text('New message to ' + recipient)
		  modal.find('.modal-body input').val(recipient)
		})
		</script>

@stop