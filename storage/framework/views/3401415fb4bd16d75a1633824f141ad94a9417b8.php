<div class="modal fade modal-success" id="Permisos">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title">Gestionar permisos</h4>
        </div>
        <div class="modal-body">
          <select id="select-permisos" multiple="multiple">
                <?php if(isset($permisos)): ?>
                    <?php $__currentLoopData = $permisos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permiso): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <option value="<?php echo e($permiso->id); ?>"><?php echo e($permiso->display_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                <?php endif; ?>
            </select>
        </div>
        <div class="modal-footer">

          <a href="#" data-dismiss="modal" onClick="window.location.reload()" class="btn btn-default">Cerrar</a>
        </div>
      </div>
    </div>
</div>




