 <div class="modal fade modal-success" id="Editar<?php echo e($Usuario->id); ?>" aria-hidden="true" aria-labelledby="exampleModalSuccess" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Editar Usuario:</h4>
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

          <?php echo e(Form::model(array('method' => 'POST', 'route' => array('GestionDeUsuarios.edit'), 'class' => 'modal-content','id'=>'CNU-Form'))); ?>


    <div class="modal-body">
        <div class="col-xs-12 col-xl-4 form-group">
            <label class="form-control-label "  for="inputBasicFirstName">Cedula</label>
            <input type="text" id="Cedula"  maxlength="13"  class="form-control"  placeholder="Cedula" required name="Cedula" value="<?php echo e(Request::old('Cedula')); ?><?php echo e($Usuario->Empleados->Personas->Cedula); ?>" autocomplete="off" >
            <input type="hidden" id="CrearPersona" value'false' name="CrearPersona">
        </div>

         <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Nombre</label>
          <input type="text" class="form-control" value="<?php echo e(Request::old('Nombre')); ?><?php echo e($Usuario->Empleados->Personas->Nombre); ?>" required id="Nombre" name="Nombre" placeholder="Nombre">
        </div>
        <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Apellidos</label>
          <input type="text" class="form-control" value="<?php echo e(Request::old('Apellidos')); ?><?php echo e($Usuario->Empleados->Personas->Apellidos); ?>" required id="Apellidos" name="Apellidos" placeholder="Apellidos">
        </div>
        <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Fecha De Nacimiento</label>
          <input type="date" class="form-control" required value="<?php echo e(Request::old('Fecha_de_Nacimiento')); ?><?php echo e($Usuario->Empleados->Personas->Fecha_de_Nacimiento); ?>" id="Fecha_de_Nacimiento" name="Fecha_de_Nacimiento">
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
                 <option><?php echo e($rol->name); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>  
          </select>
        </div>
    </div>

    <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
       <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </div>

<?php echo e(Form::close()); ?>

           


    </div>
  </div>
</div>