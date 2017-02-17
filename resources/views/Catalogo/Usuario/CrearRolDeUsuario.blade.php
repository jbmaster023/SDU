@extends('layouts.Modales.Modal-Pequeno')

@section('tituloModal','CrearROL')

@section('Modal_Title', 'Crear Nuevo rol')

@section('Contenido')

 {{ Form::open(array('method' => 'POST', 'route' => array('GestionDeRoles.store'), 'class' => 'modal-content','id'=>'CNU-Form')) }}

    <div class="modal-body">
      <div class="col-xs-12 col-xl-12 form-group">
          <label class="form-control-label "  for="inputBasicFirstName">Nombre del rol.</label>
          <input type="text" id="name" name='name' maxlength="13"  class="form-control"  placeholder="Nombre del rol." required name="Nombre_del_rol" value="{{Request::old('Cedula')}}" autocomplete="off" >
      </div>
    </div>

    <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
       <button type="submit" class="btn btn-primary">Guardar</button>
    </div>

{{ Form::close() }}


@endsection






