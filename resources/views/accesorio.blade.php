@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12"><h2 class="titulos">Tabla Accesorios</h2></div>
</div>
<div class="row">
    <div class="table-responsive col-md-10">
     <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Estatus</th>
                    <th>CPU</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Estatus</th>
                    <th>CPU</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>
	                    <div class="row">
	                    	<div class="col-md-3">
	                    		<button class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></button>
	                    	</div>

	                    	<div class="col-md-3">
	                    		<button class="btn btn-primary" ><span><i class="fa fa-pencil" aria-hidden="true"></i></span></button>
	                    	</div>
	                    	
	                    	<div class="col-md-3">
	                    		<a class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
	                    	</div>
	                    	
	                    </div>
                    </td>

                </tr>
                <tr>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                    <td>
	                    <div class="row">
	                    	<div class="col-md-3">
	                    		<button class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></button>
	                    	</div>

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
        <a class="btn btn-info" href="/alta_accesorio"><span><i class="fa fa-plus" aria-hidden="true"></i></span></a>
    </div>
</div>

<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );

</script>
@stop