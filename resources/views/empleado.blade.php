@extends('layouts.admin')

@section('content')


<div class="row">
    <div class="col-md-12">
        <h2 class="titulos">Tabla Empleados</h2>
        @if(session()->has('success'))
          <div class="alert alert-success">Genial!! El empleado ha sido dado de alta.</div>
        @elseif(session()->has('error'))
          <div class="alert alert-danger">Error!! El empleado no ha sido dado de alta.</div>
        @endif
    </div>

</div>
<div class="row">
    <div class="table-responsive col-md-10">
     <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Área</th>
                    <th>CPU</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Área</th>
                    <th>CPU</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($empleados as $empleado)
                  <tr>
                      <td>{{$empleado->nombre}}</td>
                      <td>{{$empleado->departamento}}</td>
                      <td>{{$empleado->equipo}}</td>
                      <td>
                          <div class="row">
                              <div class="col-md-4">
                                  <button class="btn btn-primary" ><span><i class="fa fa-pencil" aria-hidden="true"></i></span></button>
                              </div>
                              <div class="col-md-4">
                                  <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                              </div>
                          </div>
                      </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="table-responsive col-md-2">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><span><i class="fa fa-plus" aria-hidden="true"></i></span></button>
     </div>
        <form action="empleado" method="POST">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Alta Departamento</h4>
                  </div>
                  <div class="modal-body">
                      <div class="form-group">
                        <label for="recipient-name" class="control-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="control-label">Departamento</label>
                        <select class="form-control" name="departamento">
                            <option value="#">-Departamento-</option>
                            @foreach($departamentos as $departamento)
                            <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
                            @endforeach
                        </select>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                  </div>
                </div>
              </div>
            </div>
        </form>
    </div>


</div>
<script type="text/javascript">

            $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this)
          modal.find('.modal-title').text('New message to ' + recipient)
          modal.find('.modal-body input').val(recipient)
        })
</script>

<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );

</script>

@stop