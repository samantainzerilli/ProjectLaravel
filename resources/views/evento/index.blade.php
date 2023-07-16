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

      <form action= "">

      <div class="form-group">
    <label for="id">ID:</label>
    <input type="text" class="form-control" name="id" id="id" aria-describebody="helpId" placeholder="Escribe el titulo del evento">
    <small id="helpId" class="form-text text-muted">Help text</small>
</div>
      
      <div class="form-group">
    <label for="title">Titulo</label>
    <input type="text" class="form-control" name="title" id="title" aria-describebody="helpId" placeholder="Escribe el titulo del evento">
    <small id="helpId" class="form-text text-muted">Help text</small>
</div>
<div class="form-group">
    <label for="descripcion">Descripcion</label>
    <textarea class="form-control" name="descripcion" id= "descripcion" rows="3"></textarea>
</div>

<div class="form-group">
    <label for="start">start</label>
    <input type="text" class="form-control" name="start" id="start" aria-describebody="helpId" placeholder="Escribe el titulo del evento">
    <small id="helpId" class="form-text text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="end">end</label>
    <input type="text" class="form-control" name="end" id="end" aria-describebody="helpId" placeholder="Escribe el titulo del evento">
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
@parent
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script>
  // Asignar eventos a los botones
  document.getElementById('btnGuardar').addEventListener('click', function() {
    // Lógica para el botón Guardar
    console.log('Guardar clickeado');
  });

  document.getElementById('btnModificar').addEventListener('click', function() {
    // Lógica para el botón Modificar
    console.log('Modificar clickeado');
  });

  document.getElementById('btnEliminar').addEventListener('click', function() {
    // Lógica para el botón Eliminar
    console.log('Eliminar clickeado');
  });
</script>
@endsection

