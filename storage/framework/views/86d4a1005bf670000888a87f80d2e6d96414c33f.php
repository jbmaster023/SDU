<div class="modal fade modal-danger" id="EliminarRol<?php echo e($Role->id); ?>" aria-hidden="true"
aria-labelledby="EliminarRol<?php echo e($Role->id); ?>" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Eliminar rol</h4>
      </div>
      <div class="modal-body">
      <h3>
        Esta seguro que decea eliminar este rol: <?php echo e($Role->name); ?>

      </h3>
      </div>
      <div class="modal-footer">
        
        <?php echo e(Form::open(array('method' => 'DELETE', 'route' => array('GestionDeRoles.destroy', $Role->id)))); ?>

          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">NO</button>
          <button type="submit" class="btn btn-danger waves-effect">SI</button>
        <?php echo e(Form::close()); ?>

       
      </div>
    </div>
  </div>
</div>
