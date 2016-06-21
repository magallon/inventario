@extends('layouts.admin')


@section('content')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Alta Departamentos</button>

    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Alta Departamento</h4>
              </div>
               <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="control-label">Nombre</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Registrar</button>
        </div>
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

@stop