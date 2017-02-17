<div class="modal fade modal-success" id="<?php echo $__env->yieldContent('tituloModal2'); ?>" aria-hidden="true" aria-labelledby="exampleModalSuccess" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title"><?php echo $__env->yieldContent('Modal_Title'); ?></h4>
      </div>

         <?php if(count($errors)>0): ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">×</span>
              </button>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
              <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
           </div>
         <?php endif; ?>

         <!-- Contenido -->
          <?php $__env->startSection('Contenido'); ?>
          <?php echo $__env->yieldSection(); ?>       


    </div>
  </div>
</div>