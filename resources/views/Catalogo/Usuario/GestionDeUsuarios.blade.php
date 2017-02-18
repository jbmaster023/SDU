@extends('layouts.Master')


@section('title', 'Modulo Usuarios del sistema')

@section('PluginsCss')
  {{ Html::style('assets/vendor/datatables/datatables.css') }}
  {{ Html::style('assets/examples/css/uikit/modals.css') }}

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
            @foreach ($Usuarios as $k=> $Usuario)
              <tr class="gradeA">
                <td>{{$Usuario->usuario}}</td>
                <td>
                {{$Usuario->empleados->Personas->Nombre}} {{$Usuario->empleados->Personas->Apellidos}}
                </td>
                <td>{{$Usuario->empleados->Personas->Cedula}}</td>
                @foreach($Usuario->roles as $news_data)
                <td>{{$news_data->name}}</td>
                @endforeach 

                
              
                <td class="actions">
                
                <button type="button" data-target="#Editar{{$Usuario->id}}" data-toggle="modal" class="btn btn-success ladda-button waves-effect"><i class="icon md-link" aria-hidden="true"></i> Editar
                </button>

                <button type="button" data-target="#Eliminar{{$Usuario->id}}" data-toggle="modal" class="btn btn-danger waves-effect"><i class="icon md-link" aria-hidden="true"></i> Eliminar
                </button>

              
                </td>
              </tr>
           @endforeach 
            </tbody>
          </table>



        <!-- Modal - Crear nuevo Usuario -->
           @include('Catalogo/Usuario/CrearUsuario')
        <!-- End Modal Crear nuevo Usuario -->

        @foreach ($Usuarios as $k=> $Usuario)

        <!-- Modal - Editar Usuario -->
            @include('Catalogo/Usuario/EditarUsuario')
        <!-- End Modal Editar  Usuario -->

          <!-- Modal Eliminar usuario -->
            @include('Catalogo/Usuario/EliminarUsuario')
          <!-- End Modal Eliminar usuario -->

          @endforeach 

  </div>
  <!-- End Page Content -->
</div>



@section('PluginsJs')

  {{ Html::script('assets/vendor/formatter/jquery.formatter.js') }}
  {{ Html::script('assets/js/Plugin/formatter.js') }}
  {{ Html::script('api-ajax/ConsultarPersonas.js') }}
  {{ Html::script('js/maskedinput.js') }}


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
    $("#Cedula").mask("999-9999999-9",{placeholder:""});
    


   
});
</script>
  

  {{ Html::script('https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js') }}




@endsection




@endsection

