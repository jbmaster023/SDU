  <div class="site-menubar ">
    <div class="site-menubar-body">
      <div>
        <div>

      
          <ul class="site-menu" data-plugin="menu">

         {{--  @if(Entrust::can('Facturacion')) --}}
            <li class="site-menu-category">FACTURACION</li>
            <li class="site-menu-item">
              <a class="animsition-link" href="{{ route('Facturacion.index') }}">
                <i class="site-menu-icon icon md-label" aria-hidden="true"></i>
                <span class="site-menu-title" title="Crear Nueva Factura">Crear Nueva Factura</span>
              </a>
            </li>

            <li class="site-menu-item">
              <a class="animsition-link" href="{{ route('Facturacion.index') }}">
                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title" title="Crear Presupuesto">Crear Presupuesto</span>
              </a>
            </li>

                        <li class="site-menu-item">
              <a class="animsition-link" href="{{ route('Facturacion.index') }}">
                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title" title="Agregar Servicios a Factura" >Agregar Servicios a Factura</span>
              </a>
            </li>

                        <li class="site-menu-item">
              <a class="animsition-link" href="{{ route('Facturacion.index') }}">
                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title" title="Eliminar o Modificar Factura">Eliminar o Modificar Factura</span>
              </a>
            </li>

          {{--    @endif --}}
   

     




            <li class="site-menu-category">CONSULTA DE DATOS</li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                <span class="site-menu-title" title="Buscar Datos Relacionados">Buscar Datos Relacionados</span>
                <span class="site-menu-arrow"></span>
              </a>
            </li>

            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                <span class="site-menu-title" title="Buscar Factura">Buscar Factura</span>
                <span class="site-menu-arrow"></span>
              </a>
            </li>

            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                <span class="site-menu-title" title="Buscar Paciente">Buscar Paciente</span>
                <span class="site-menu-arrow"></span>
              </a>
            </li>

           <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                <span class="site-menu-title" title="Cuadre De Caja">Cuadre De Caja</span>
                <span class="site-menu-arrow"></span>
              </a>
            </li>

 
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                <span class="site-menu-title" title="Paciente Hospitalizadoss">Paciente Hospitalizados</span>
                <span class="site-menu-arrow"></span>
              </a>
            </li>


           <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                <span class="site-menu-title" title="Buscar Datos Relacionados">Buscar Datos Relacionados</span>
                <span class="site-menu-arrow"></span>
              </a>
            </li>



            <li class="site-menu-category">CATALOGO</li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                <span class="site-menu-title" title="Aseguradoras">Aseguradoras</span>
                <span class="site-menu-arrow"></span>
              </a>
            </li>

            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                <span class="site-menu-title" title="Proveedores">Proveedores</span>
                <span class="site-menu-arrow"></span>
              </a>
            </li>

            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                <span class="site-menu-title" title="Medicos">Medicos</span>
                <span class="site-menu-arrow"></span>
              </a>
            </li>

            <!---Usuarios -->

            <li class="site-menu-item has-sub  {{  Route::is('GestionDeUsuarios.index','GestionDeRoles.index') ? 'active' : '' }} {{  Route::is('GestionDeUsuarios.index','GestionDeRoles.index') ? 'open' : '' }} ">
                  <a href="javascript:void(0)" class=" waves-effect waves-classic">
                  <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                    <span class="site-menu-title">Usuarios</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub ">
                    <li class="site-menu-item {{  Route::is('GestionDeUsuarios.index') ? 'active' : '' }}  is-shown">
                      <a class="animsition-link waves-effect waves-classic" href="{{ route('GestionDeUsuarios.index') }}">
                        <span class="site-menu-title">Gestión de Usuarios</span>
                      </a>
                    </li>
                    <li class="site-menu-item {{  Route::is('GestionDeRoles.index') ? 'active' : '' }}">
                      <a class="animsition-link waves-effect waves-classic" href="{{ route('GestionDeRoles.index') }}">
                        <span class="site-menu-title">Gestión de Roles</span>
                      </a>
                    </li>
                  </ul>
                </li>


              <!---FIN Usuarios -->

 
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                <span class="site-menu-title" title="Servicios Y Productos">Servicios Y Productos</span>
                <span class="site-menu-arrow"></span>
              </a>
            </li>


           <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                <span class="site-menu-title" title="Usuarios(Pacientes)">Usuarios (Pacientes)</span>
                <span class="site-menu-arrow"></span>
              </a>
            </li>

















          </ul>

        </div>
      </div>
    </div>

  </div>