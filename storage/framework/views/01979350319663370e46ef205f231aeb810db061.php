<?php $__env->startSection('title', 'Modulo Usuarios del sistema'); ?>

<?php $__env->startSection('PluginsCss'); ?>
  <?php echo e(Html::style('assets/vendor/datatables/datatables.css')); ?>

  <?php echo e(Html::style('assets/examples/css/uikit/modals.css')); ?>

  <?php echo e(Html::style('css/multi-select.css')); ?>

        

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
                <button id="addToTable" data-target="#CrearROL" data-toggle="modal" class="btn btn-primary" type="button">
                  <i class="icon md-plus" aria-hidden="true"></i> Crear roles
                </button>
              </div>
            </div>
          </div>

        <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
            <thead>
              <tr>
                <th>Nombre</th>
                <th></th>
              </tr>
            </thead>


            <tbody>
            <?php $__currentLoopData = $Roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=> $Role): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
              <tr class="gradeA">
                <td>
                <?php echo e($Role->name); ?>

                  
                </td>
              
                <td class="actions">
                
                <button type="button" data-target="#Permisos" rol_id="<?php echo e($Role->id); ?>" data-toggle="modal" class="btn btn-info waves-effect ladda-button waves-effect get-permisos"><i class="icon md-link" aria-hidden="true"></i> Permisos
                </button> 

                <button type="button" data-target="#EditarRol<?php echo e($Role->id); ?>" data-toggle="modal" class="btn btn-success ladda-button waves-effect"><i class="icon md-link" aria-hidden="true"></i> Editar
                </button>

                <button type="button" data-target="#EliminarRol<?php echo e($Role->id); ?>" data-toggle="modal" class="btn btn-danger waves-effect"><i class="icon md-link" aria-hidden="true"></i> Eliminar
                </button>

              
                </td>

              </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 
            </tbody>
          </table>



        <!-- Modal - Crear nuevo rol de  Usuario -->
           <?php echo $__env->make('Catalogo/Usuario/CrearRolDeUsuario', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- End Modal Crear nuevo Usuario -->




     <?php $__currentLoopData = $Roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=> $Role): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
 
        <!-- Modal - Editar Rol -->
            <?php echo $__env->make('Catalogo/Usuario/EditarRoles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <!-- Modal - Eliminar ROL-->
            <?php echo $__env->make('Catalogo/Usuario/EliminarRoles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <!-- Modal - Crear nuevo rol de  Usuario -->
            <?php echo $__env->make('Catalogo/Usuario/PermisosRoles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

     <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 
       
       
      


  </div>
  <!-- End Page Content -->
</div>



<?php $__env->startSection('PluginsJs'); ?>

  <?php echo e(Html::script('assets/vendor/formatter/jquery.formatter.js')); ?>

  <?php echo e(Html::script('assets/js/Plugin/formatter.js')); ?>

  <?php echo e(Html::script('api-ajax/ConsultarPersonas.js')); ?>

  <?php echo e(Html::script('js/maskedinput.js')); ?>

  <?php echo e(Html::script('js/jquery.multi-select.js')); ?>



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



        <script>
            $(document).on('ready', function(){
                
                rol_id = null;
               $('#select-permisos').multiSelect({
                    selectableHeader: "<div class='custom-header'>Permisos no asignados</div>",
                    selectionHeader:  "<div class='custom-header'>Permisos asignados</div>",
                   afterSelect:function(value){//enviamos al servidor el id del permiso seleccionado
                        $.ajax({
                        url : '<?php echo e(URL::to("/Catalogo/Usuarios/permisos/asignar")); ?>',
                        type : 'GET',
                        dataType: 'json',
                        data : {permission_id: value[0], role_id: rol_id}
                    }).done(function(data){
                        console.log(data);
                    });
                   },
                   afterDeselect:function(value){//enviamos al servidor el id del permiso seleccionado
                        $.ajax({
                        url : '<?php echo e(URL::to("/Catalogo/Usuarios/permisos/desasignar")); ?>',
                        type : 'GET',
                        dataType: 'json',
                        data : {permission_id: value[0], role_id: rol_id}
                    }).done(function(data){
                        console.log(data);
                    });
                   }
               });
                
                
                $('.get-permisos').on('click', function(){
                
                    rol_id = $(this).attr('rol_id');
                    
                    


                    $.ajax({
                        url : '<?php echo e(URL::to("/Catalogo/Usuarios/permisos")); ?>',
                        type : 'GET',
                        dataType: 'json',
                        data : {id: rol_id}
                    }).done(function(data){

                        
                        $.each(data.permisosAsignados ,function(index, value){
                            $('#select-permisos option[value="'+value.id+'"]').attr('selected', true);
                        });
                        $('#select-permisos').multiSelect('refresh');
                        //



                    });
                    //$('#select-permisos').val('');
                });
            });
        </script>
  

  <?php echo e(Html::script('https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js')); ?>





<?php $__env->stopSection(); ?>




<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.Master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>