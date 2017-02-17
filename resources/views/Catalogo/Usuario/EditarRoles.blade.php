 <div class="modal fade modal-success" id="EditarRol{{$Role->id}}" aria-hidden="true" aria-labelledby="exampleModalSuccess" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Editar Usuario:</h4>
      </div>


         <!-- Contenido -->

{{--  {{ Form::open(array('method' => 'POST', 'route' => array('GestionDeRoles.store'), 'class' => 'modal-content','id'=>'CNU-Form')) }} --}}
 {{ Form::Model($Role, array('method' => 'PUT', 'route' => array('GestionDeRoles.update', $Role->id),  'class' => 'modal-content','id'=>'CNU-Form')) }}


    <div class="modal-body">
      <div class="col-xs-12 col-xl-12 form-group">
          <label class="form-control-label "  for="inputBasicFirstName">Nombre del rol.</label>
          {{Form::text('name', null, array('class' => 'form-control', 'placeholder'=>'Nombre del rol','required'=>'true'))}}
      </div>
    </div>

    <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
       <button type="submit" class="btn btn-primary">Guardar</button>
    </div>

{{ Form::close() }}



    </div>
  </div>
</div>