 <div class="modal fade modal-success" id="EditarRol<?php echo e($Role->id); ?>" aria-hidden="true" aria-labelledby="exampleModalSuccess" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Editar Usuario:</h4>
      </div>


         <!-- Contenido -->


 <?php echo e(Form::Model($Role, array('method' => 'PUT', 'route' => array('GestionDeRoles.update', $Role->id),  'class' => 'modal-content','id'=>'CNU-Form'))); ?>



    <div class="modal-body">
      <div class="col-xs-12 col-xl-12 form-group">
          <label class="form-control-label "  for="inputBasicFirstName">Nombre del rol.</label>
          <?php echo e(Form::text('name', null, array('class' => 'form-control', 'placeholder'=>'Nombre del rol','required'=>'true'))); ?>

      </div>
    </div>

    <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
       <button type="submit" class="btn btn-primary">Guardar</button>
    </div>

<?php echo e(Form::close()); ?>




    </div>
  </div>
</div>