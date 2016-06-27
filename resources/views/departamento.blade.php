@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12"><h2 class="titulos">Tabla Departamentos</h2></div>
</div>
<div class="row">
    <div class="table-responsive col-md-10">
     <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Área</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Área</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>

                    <td>
                        <div class="row">
                           
                            <div class="col-md-3">
                                <button class="btn btn-primary" ><span><i class="fa fa-pencil" aria-hidden="true"></i></span></button>
                            </div>
                            
                            <div class="col-md-3">
                                <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </div>
                            
                        </div>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
    <div class="table-responsive col-md-2">
        <form action="departamento" method="POST">
		    <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-sm"><span><i class="fa fa-plus" aria-hidden="true"></i></span></button>
		    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		      <div class="modal-dialog modal-sm">  
		         <div class="modal-content">
		           <div class="modal-header">
		               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		              <h4 class="modal-title">Alta Departamento</h4>
		           </div>
		           <div class="modal-body">
		             <div class="form-group">
		               <label for="recipient-name" class="control-label">Nombre</label>
		                <input type="text" class="form-control" name="nombre">
		             </div>
		           </div>
		            <div class="modal-footer">
		              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
		              <input type="submit" class="btn btn-primary" value="Registrar">
		            </div>
		         </div>
		      </div>
		    </div>
  		</form>
    </div>
</div>



<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );

</script>

@stop