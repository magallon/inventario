@extends('layouts.admin')


@section('content')
  <form action="departamento" method="POST">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Alta Departamentos</button>
      <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Alta Departamento</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
               <label for="recipient-name" class="control-label" name ="nombre">Nombre</label>
                <input type="text" class="form-control">
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