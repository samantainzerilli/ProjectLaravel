@extends('layouts.app')

@section('content')
<div class="container">
    <div id="agenda">
        calendario
    </div>
</div>

<!-- Botón para abrir el modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#evento">
  Abrir Modal
</button>

<!-- Modal -->
<div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Título del Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! csrf_field() !!}

        <form id="formularioEvento">

            <div class="form-group">
              <label for="id">ID:</label>
              <input type="text" class="form-control" name="id" id="id" aria-describebody="helpId" placeholder="Escribe el título del evento">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            
            <div class="form-group">
              <label for="title">Título</label>
              <input type="text" class="form-control" name="title" id="title" aria-describebody="helpId" placeholder="Escribe el título del evento">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            
            <div class="form-group">
              <label for="descripcion">Descripción</label>
              <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
            </div>
            
            <div class="form-group">
              <label for="start">Start</label>
              <input type="text" class="form-control" name="start" id="start" aria-describebody="helpId" placeholder="Escribe la fecha de inicio del evento">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            
            <div class="form-group">
              <label for="end">End</label>
              <input type="text" class="form-control" name="end" id="end" aria-describebody="helpId" placeholder="Escribe la fecha de fin del evento">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
        <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
        <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

@endsection


@section('scripts')
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/axios.min.js') }}"></script>
<script>
  var agregarEventoURL = "{{ $agregarEventoURL }}";
</script>
<script src="{{ asset('js/agenda.js') }}"></script>
@endsection