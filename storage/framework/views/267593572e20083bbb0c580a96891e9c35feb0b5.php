<?php $__env->startSection('tituloModal','CrearUsuario'); ?>

<?php $__env->startSection('Modal_Title', 'Crear Nuevo Usuario del sistema'); ?>

<?php $__env->startSection('Contenido'); ?>


 <?php echo e(Form::open(array('method' => 'POST', 'route' => array('GestionDeUsuarios.store'), 'class' => 'modal-content','id'=>'CNU-Form'))); ?>


    <div class="modal-body">
        <div class="col-xs-12 col-xl-4 form-group">
            <label class="form-control-label "  for="inputBasicFirstName">Cedula</label>
            <input type="text" id="Cedula"  maxlength="13"  class="form-control"  placeholder="Cedula" required name="Cedula" value="<?php echo e(Request::old('Cedula')); ?>" autocomplete="off" >
            <input type="hidden" id="CrearPersona" value'false' name="CrearPersona">
        </div>

         <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Nombre</label>
          <input type="text" class="form-control" value="<?php echo e(Request::old('Nombre')); ?>" required id="Nombre" name="Nombre" placeholder="Nombre">
        </div>
        <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Apellidos</label>
          <input type="text" class="form-control" value="<?php echo e(Request::old('Apellidos')); ?>" required id="Apellidos" name="Apellidos" placeholder="Apellidos">
        </div>
        <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Fecha De Nacimiento</label>
          <input type="date" class="form-control" required value="<?php echo e(Request::old('Fecha_de_Nacimiento')); ?>" id="Fecha_de_Nacimiento" name="Fecha_de_Nacimiento">
        </div>

      
        <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Sexo</label>
           <select class="form-control"    required id="Sexo" name="Sexo">
            <option value="">Seleccioné</option>
            <option value="M" <?php if(Request::old('Sexo') == 'M'): ?> selected="selected" <?php endif; ?>>Masculino</option>
            <option value="F" <?php if(Request::old('Sexo') == 'F'): ?> selected="selected" <?php endif; ?>>Femenino</option>
          </select>
        </div>
        <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Provincias</label>

           <select class="form-control" required id="Provincia_id" name="Provincia_id">
            <option value="">Seleccioné</option>
              <?php $__currentLoopData = $Provincias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Provincia): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> 
         

             <option value="<?php echo e($Provincia->id); ?>" <?php if(old('Provincia_id') == $Provincia->id): ?> selected="selected" <?php endif; ?>><?php echo e($Provincia->nombre); ?></option>
           
              <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 
          </select>
        </div>
        <div class="col-xs-12 col-xl-8 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Dirección</label>
         <input type="text" class="form-control" required value="<?php echo e(Request::old('Direccion')); ?>" id="Direccion" name="Direccion" placeholder="" autocomplete="off">
        </div>
        <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Telefono</label>
          <input type="text" class="form-control" id="Telefono" value="<?php echo e(Request::old('Telefono')); ?>" data-plugin="formatter" data-pattern="([[999]])-[[999]]-[[9999]]" name="Telefono" placeholder="">
        </div>
        <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Usuario</label>
          <input type="text" class="form-control" value="<?php echo e(Request::old('usuario')); ?>" required id="usuario" name="usuario" placeholder="">
        </div>
        <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Contraseña</label>
          <input type="Password" class="form-control"  required name="password" placeholder=""> 
        </div>
        <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Permisos</label>
           <select class="form-control"  name="Permisos">
            <option value="">Permisos</option>
               <?php $__currentLoopData = $Roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> 
                 <option value="<?php echo e($rol->id); ?>"><?php echo e($rol->name); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>  
          </select>
        </div>
    </div>

    <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
       <button type="submit" class="btn btn-primary">Crear</button>
    </div>

<?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.Modales.Modal-Pequeno', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>