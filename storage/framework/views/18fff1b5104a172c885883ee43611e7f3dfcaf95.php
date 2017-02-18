<?php $__env->startSection('title', 'Modulo Usuarios del sistema'); ?>

<?php $__env->startSection('PluginsCss'); ?>
  <?php echo e(Html::style('assets/vendor/datatables/datatables.css')); ?>

  <?php echo e(Html::style('assets/examples/css/uikit/modals.css')); ?>


  <style>

    .loading {    
    background-color: #ffffff;
    background-image: url("http://loadinggif.com/images/image-selection/3.gif");
    background-size: 25px 25px;
    background-position:right center;
    background-repeat: no-repeat;
}
  </style>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>



        <div class="panel">
        <header class="panel-heading">
          <h3 class="panel-title">Gestión de Usuarios</h3>
        </header>

        <div class="panel-body">
          <div class="row">
            <div class="col-xs-12 col-md-6">

              <div class="m-b-15">
                <button id="addToTable" data-target="#CrearUsuario" data-toggle="modal" class="btn btn-primary" type="button">
                  <i class="icon md-plus" aria-hidden="true"></i> Crear Nuevo Usuario
                </button>
              </div>
            </div>
          </div>

        <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
            <thead>
              <tr>
                <th>Usuario</th>
                <th>Nombre Completo</th>
                <th>Cedula</th>
                <th>Permisos</th>
                <th>Actions</th>
              </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $Usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=> $Usuario): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
              <tr class="gradeA">
                <td><?php echo e($Usuario->usuario); ?></td>
                <td>
                <?php echo e($Usuario->empleados->Personas->Nombre); ?> <?php echo e($Usuario->empleados->Personas->Apellidos); ?>

                </td>
                <td><?php echo e($Usuario->empleados->Personas->Cedula); ?></td>
                <?php $__currentLoopData = $Usuario->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <td><?php echo e($news_data->name); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 

                
              
                <td class="actions">
                
                <button type="button" data-target="#Editar<?php echo e($Usuario->id); ?>" data-toggle="modal" class="btn btn-success ladda-button waves-effect"><i class="icon md-link" aria-hidden="true"></i> Editar
                </button>

                <button type="button" data-target="#Eliminar<?php echo e($Usuario->id); ?>" data-toggle="modal" class="btn btn-danger waves-effect"><i class="icon md-link" aria-hidden="true"></i> Eliminar
                </button>

              
                </td>
              </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 
            </tbody>
          </table>



        <!-- Modal - Crear nuevo Usuario -->
           <?php echo $__env->make('Catalogo/Usuario/CrearUsuario', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- End Modal Crear nuevo Usuario -->

        <?php $__currentLoopData = $Usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=> $Usuario): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

        <!-- Modal - Editar Usuario -->
            <?php echo $__env->make('Catalogo/Usuario/EditarUsuario', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- End Modal Editar  Usuario -->

          <!-- Modal Eliminar usuario -->
            <?php echo $__env->make('Catalogo/Usuario/EliminarUsuario', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <!-- End Modal Eliminar usuario -->

          <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 

  </div>
  <!-- End Page Content -->
</div>



<?php $__env->startSection('PluginsJs'); ?>

  <?php echo e(Html::script('assets/vendor/formatter/jquery.formatter.js')); ?>

  <?php echo e(Html::script('assets/js/Plugin/formatter.js')); ?>

  <?php echo e(Html::script('api-ajax/ConsultarPersonas.js')); ?>

  <?php echo e(Html::script('js/maskedinput.js')); ?>



<?php if(count($errors)>0): ?>
 <script>
$(document).ready(function(){
    $('#exampleFormModal').modal('show');
});
</script>
<?php endif; ?>


<script>
$(document).ready(function(){
    $('#exampleAddRow').DataTable();
    //$('#exampleFormModal').modal('show');
    $("#Cedula").mask("999-9999999-9",{placeholder:""});
    


   
});
</script>
  

  <?php echo e(Html::script('https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js')); ?>





<?php $__env->stopSection(); ?>




<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.Master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>