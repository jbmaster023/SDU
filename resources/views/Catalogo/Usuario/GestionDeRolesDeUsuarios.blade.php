@extends('layouts.Master')


@section('title', 'Modulo Usuarios del sistema')

@section('PluginsCss')
  {{ Html::style('assets/vendor/datatables/datatables.css') }}
  {{ Html::style('assets/examples/css/uikit/modals.css') }}
  {{ Html::style('css/multi-select.css') }}
        

  <style>

    .loading {    
    background-color: #ffffff;
    background-image: url("http://loadinggif.com/images/image-selection/3.gif");
    background-size: 25px 25px;
    background-position:right center;
    background-repeat: no-repeat;
}
  </style>



@endsection



@section('content')



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
            @foreach ($Roles as $k=> $Role)
              <tr class="gradeA">
                <td>
                {{$Role->name}}
                  
                </td>
              
                <td class="actions">
                
                <button type="button" data-target="#Permisos" rol_id="{{$Role->id}}" data-toggle="modal" class="btn btn-info waves-effect ladda-button waves-effect get-permisos"><i class="icon md-link" aria-hidden="true"></i> Permisos
                </button> 

                <button type="button" data-target="#EditarRol{{$Role->id}}" data-toggle="modal" class="btn btn-success ladda-button waves-effect"><i class="icon md-link" aria-hidden="true"></i> Editar
                </button>

                <button type="button" data-target="#EliminarRol{{$Role->id}}" data-toggle="modal" class="btn btn-danger waves-effect"><i class="icon md-link" aria-hidden="true"></i> Eliminar
                </button>

              
                </td>

              </tr>
           @endforeach 
            </tbody>
          </table>



        <!-- Modal - Crear nuevo rol de  Usuario -->
           @include('Catalogo/Usuario/CrearRolDeUsuario')
        <!-- End Modal Crear nuevo Usuario -->




     @foreach ($Roles as $k=> $Role)
 
        <!-- Modal - Editar Rol -->
            @include('Catalogo/Usuario/EditarRoles')

        <!-- Modal - Eliminar ROL-->
            @include('Catalogo/Usuario/EliminarRoles')

        <!-- Modal - Crear nuevo rol de  Usuario -->
            @include('Catalogo/Usuario/PermisosRoles')

     @endforeach 
       
       
      


  </div>
  <!-- End Page Content -->
</div>



@section('PluginsJs')

  {{ Html::script('assets/vendor/formatter/jquery.formatter.js') }}
  {{ Html::script('assets/js/Plugin/formatter.js') }}
  {{ Html::script('api-ajax/ConsultarPersonas.js') }}
  {{ Html::script('js/maskedinput.js') }}
  {{ Html::script('js/jquery.multi-select.js') }}


@if(count($errors)>0)
 <script>
$(document).ready(function(){
    $('#exampleFormModal').modal('show');
});
</script>
@endif


<script>
$(document).ready(function(){
    $('#exampleAddRow').DataTable();
    //$('#exampleFormModal').modal('show');
    $("#Cedula").mask("999-9999999-9",{placeholder:""}); });
</script>



        <script>
            $(document).on('ready', function(){
                
                rol_id = null;
               $('#select-permisos').multiSelect({
                    selectableHeader: "<div class='custom-header'>Permisos no asignados</div>",
                    selectionHeader:  "<div class='custom-header'>Permisos asignados</div>",
                   afterSelect:function(value){//enviamos al servidor el id del permiso seleccionado
                        $.ajax({
                        url : '{{ URL::to("/Catalogo/Usuarios/permisos/asignar") }}',
                        type : 'GET',
                        dataType: 'json',
                        data : {permission_id: value[0], role_id: rol_id}
                    }).done(function(data){
                        console.log(data);
                    });
                   },
                   afterDeselect:function(value){//enviamos al servidor el id del permiso seleccionado
                        $.ajax({
                        url : '{{ URL::to("/Catalogo/Usuarios/permisos/desasignar") }}',
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
                        url : '{{ URL::to("/Catalogo/Usuarios/permisos") }}',
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
  

  {{ Html::script('https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js') }}




@endsection




@endsection

