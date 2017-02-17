<div class="modal fade modal-danger" id="Eliminar{{$Usuario->id}}" aria-hidden="true"
aria-labelledby="Eliminar{{$Usuario->id}}" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Eliminar Usuario</h4>
      </div>
      <div class="modal-body">
      <h3>
        <p>Esta seguro que decea eliminar este usuario: {{$Usuario->usuario}}</p>
      </h3>
      </div>
      <div class="modal-footer">
        
        {{ Form::open(array('method' => 'DELETE', 'route' => array('GestionDeUsuarios.destroy', $Usuario->id))) }}
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">NO</button>
          <button type="submit" class="btn btn-danger waves-effect">SI</button>
        {{ Form::close() }}
       
      </div>
    </div>
  </div>
</div>
