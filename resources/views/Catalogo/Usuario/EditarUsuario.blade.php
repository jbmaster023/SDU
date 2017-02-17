 <div class="modal fade modal-success" id="Editar{{$Usuario->id}}" aria-hidden="true" aria-labelledby="exampleModalSuccess" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Editar Usuario:</h4>
      </div>

         @if(count($errors)>0)
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">×</span>
              </button>
              @foreach($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
           </div>
         @endif

         <!-- Contenido -->

          {{ Form::model(array('method' => 'POST', 'route' => array('GestionDeUsuarios.edit'), 'class' => 'modal-content','id'=>'CNU-Form')) }}

    <div class="modal-body">
        <div class="col-xs-12 col-xl-4 form-group">
            <label class="form-control-label "  for="inputBasicFirstName">Cedula</label>
            <input type="text" id="Cedula"  maxlength="13"  class="form-control"  placeholder="Cedula" required name="Cedula" value="{{Request::old('Cedula')}}{{$Usuario->Empleados->Personas->Cedula}}" autocomplete="off" >
            <input type="hidden" id="CrearPersona" value'false' name="CrearPersona">
        </div>

         <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Nombre</label>
          <input type="text" class="form-control" value="{{Request::old('Nombre')}}{{$Usuario->Empleados->Personas->Nombre}}" required id="Nombre" name="Nombre" placeholder="Nombre">
        </div>
        <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Apellidos</label>
          <input type="text" class="form-control" value="{{Request::old('Apellidos')}}{{$Usuario->Empleados->Personas->Apellidos}}" required id="Apellidos" name="Apellidos" placeholder="Apellidos">
        </div>
        <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Fecha De Nacimiento</label>
          <input type="date" class="form-control" required value="{{Request::old('Fecha_de_Nacimiento')}}{{$Usuario->Empleados->Personas->Fecha_de_Nacimiento}}" id="Fecha_de_Nacimiento" name="Fecha_de_Nacimiento">
        </div>

      
        <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Sexo</label>
           <select class="form-control"    required id="Sexo" name="Sexo">
            <option value="">Seleccioné</option>
            <option value="M" @if (Request::old('Sexo') == 'M') selected="selected" @endif>Masculino</option>
            <option value="F" @if (Request::old('Sexo') == 'F') selected="selected" @endif>Femenino</option>
          </select>
        </div>
        <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Provincias</label>

           <select class="form-control" required id="Provincia_id" name="Provincia_id">
            <option value="">Seleccioné</option>
              @foreach ($Provincias as $Provincia) 
         

             <option value="{{$Provincia->id}}" @if (old('Provincia_id') == $Provincia->id) selected="selected" @endif>{{ $Provincia->nombre }}</option>
           
              @endforeach 
          </select>
        </div>
        <div class="col-xs-12 col-xl-8 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Dirección</label>
         <input type="text" class="form-control" required value="{{Request::old('Direccion')}}" id="Direccion" name="Direccion" placeholder="" autocomplete="off">
        </div>
        <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Telefono</label>
          <input type="text" class="form-control" id="Telefono" value="{{Request::old('Telefono')}}" data-plugin="formatter" data-pattern="([[999]])-[[999]]-[[9999]]" name="Telefono" placeholder="">
        </div>
        <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Usuario</label>
          <input type="text" class="form-control" value="{{Request::old('usuario')}}" required id="usuario" name="usuario" placeholder="">
        </div>
        <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Contraseña</label>
          <input type="Password" class="form-control"  required name="password" placeholder=""> 
        </div>
        <div class="col-xs-12 col-xl-4 form-group">
        <label class="form-control-label" for="inputBasicFirstName">Permisos</label>
           <select class="form-control"  name="Permisos">
            <option value="">Permisos</option>
               @foreach ($Roles as $rol) 
                 <option>{{$rol->name}}</option>
               @endforeach  
          </select>
        </div>
    </div>

    <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
       <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </div>

{{ Form::close() }}
           


    </div>
  </div>
</div>