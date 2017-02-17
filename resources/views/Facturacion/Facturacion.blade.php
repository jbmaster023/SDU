@extends('layouts.Master')


@section('title', 'Modulo de Facturacion')

@section('PluginsCss')

  <link rel="stylesheet" href="assets/vendor/jquery-wizard/jquery-wizard.css">
  <link rel="stylesheet" href="assets/vendor/formvalidation/formValidation.css">

  <link rel="stylesheet" href="assets/vendor/select2/select2.css">





@endsection

@section('content')


    <!-- Page -->
  <div class="page">
    <div class="page-content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <!-- Panel Wizard Form -->
          <div class="panel" id="exampleWizardForm">
            <div class="panel-heading">
              <h3 class="panel-title">FACTURACION DE SERVICIOS DE SALUD</h3>
            </div>
            <div class="panel-body">
              <!-- Steps -->
              <div class="steps steps-sm row" data-plugin="matchHeight" data-by-row="true" role="tablist">
                <div class="step col-lg-4 current" data-target="#exampleAccount" role="tab">
                  <span class="step-number">1</span>
                  <div class="step-desc">
                    <span class="step-title">Información del usuario</span>
                    <p>Datos importante del usuario</p>
                  </div>
                </div>
                <div class="step col-lg-4" data-target="#exampleBilling" role="tab">
                  <span class="step-number">2</span>
                  <div class="step-desc">
                    <span class="step-title">Descripción Del Servicio</span>
                    <p>Descripción Del Servicio</p>
                  </div>
                </div>
                <div class="step col-lg-4" data-target="#exampleGetting" role="tab">
                  <span class="step-number">3</span>
                  <div class="step-desc">
                    <span class="step-title">Getting</span>
                    <p>Waiting for the goods</p>
                  </div>
                </div>






              </div>
              <!-- End Steps -->
              <!-- Wizard Content -->
              <div class="wizard-content">
                <div class="wizard-pane" id="exampleAccount" role="tabpanel">
                  <form id="exampleAccountForm">

                    <div class="row">
                      <div class="col-md-2">
                            <h4 class="example-title">Buscar por:</h4>
                            <div class="form-material ">
                              <select class="form-control">
                                <option>Cedula</option>
                                <option>NSS</option>
                              </select>
                            </div>
                        </div>

                      <div class="form-group form-material col-md-2">
                      <h4 class="example-title">Buscar Usuario:</h4>
                        <input type="text" class="form-control" name="firstname" placeholder="Cedula" autocomplete="off">
                      </div>
                    </div>

                    <div class="row">
                       <hr style="height: 1px; border: 0px solid #D6D6D6; border-top-width: 2px;" />
                      <div class="form-group  col-md-3">
                       <h4 class="example-title">Nombre:</h4>
                        <input type="text" class="form-control" name="lastname" placeholder="Ingrese el nombre " autocomplete="off">
                      </div>
                     <div class="form-group col-md-3">
                       <h4 class="example-title">Apellidos:</h4>
                        <input type="text" class="form-control" name="Apellidos" placeholder="Ingrese el Apellidos " autocomplete="off">
                      </div>
                      <div class="form-group col-md-2">
                       <h4 class="example-title">Cedula:</h4>
                        <input type="text" class="form-control" name="Apellidos" placeholder="000-0000000-0" autocomplete="off">
                      </div>
                      <div class="form-group col-md-2">
                       <h4 class="example-title">Fecha De Nacimiento:</h4>
                        <input type="text" class="form-control" name="Apellidos" placeholder="DD/MM/YYYY " autocomplete="off">
                      </div>
                      <div class="form-group col-md-2">
                       <h4 class="example-title">SEXO:</h4>
                        <select class="form-control">
                                <option>Seleccione</option>
                                <option>Masculino</option>
                                <option >Femenino</option>
                              </select>
                        </div>
                      </div>

                    <div class="row">
                      <div class="form-group  col-md-3">
                       <h4 class="example-title">NACIONALIDAD:</h4>
                        <input type="text" class="form-control" name="lastname" placeholder="Ingrese el nombre " autocomplete="off">
                      </div>
                     <div class="form-group col-md-3">
                       <h4 class="example-title">DIRECCION:</h4>
                        <input type="text" class="form-control" name="Apellidos" placeholder="Calle  # " autocomplete="off">
                      </div>
                      <div class="form-group col-md-2">
                       <h4 class="example-title">TELEFONO:</h4>
                        <input type="text" class="form-control" name="Apellidos" placeholder="(000)-0000000" autocomplete="off">
                      </div>
                      <div class="form-group col-md-2">
                       <h4 class="example-title">CELULAR:</h4>
                        <input type="text" class="form-control" name="Apellidos" placeholder="(000)-0000000" autocomplete="off">
                      </div>
                      <div class="form-group col-md-2">
                       <h4 class="example-title">Correo:</h4>
                        <input type="text" class="form-control" name="Apellidos" placeholder="@" autocomplete="off">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group  col-md-3">
                       <h4 class="example-title">ARS:</h4>
                            <select class="form-control" data-plugin="select2">
                              <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                              </optgroup>
                              <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                              </optgroup>
                             </select>
                      </div>
                     <div class="form-group col-md-3">
                       <h4 class="example-title">PLAN:</h4>
                            <select class="form-control" data-plugin="select2">
                              <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                              </optgroup>
                              <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                              </optgroup>
                             </select>
                      </div>
                      <div class="form-group col-md-2">
                       <h4 class="example-title">NO. SEGURO:</h4>
                        <input type="text" class="form-control" name="Apellidos" placeholder="000000000" autocomplete="off">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group  col-md-3">
                       <h4 class="example-title">MEDICO BASE:</h4>
                            <select class="form-control" data-plugin="select2">
                              <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                              </optgroup>
                              <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                              </optgroup>
                             </select>
                      </div>
                      <div class="form-group col-md-3">
                       <h4 class="example-title">NOMBRE DEL FAMILIAR RESPONSIBLE:</h4>
                        <input type="text" class="form-control" name="Apellidos" placeholder="Ingrese el Apellidos " autocomplete="off">
                      </div>
                     <div class="form-group col-md-3">
                       <h4 class="example-title">TELEFONO DE CONTACTO  DE UN FAMILIAR:</h4>
                        <input type="text" class="form-control" name="Apellidos" placeholder="Ingrese el Apellidos " autocomplete="off">
                      </div>
                    </div>
                   <dir>
                  </form>
                </div>


 <!-- End ---------------------------------------------------------------------------------------------- -->


                <div class="wizard-pane" id="exampleBilling" role="tabpanel">
                  <form id="exampleBillingForm">

                    <div class="row">
                      <div class="col-md-3">
                            <h4 class="example-title">TIPO DE INGRESO:</h4>
                            <div class="">
                              <select class="form-control">
                                <option>Cedula</option>
                                <option>NSS</option>
                              </select>
                            </div>
                        </div>

                           <div class="col-md-3">
                            <h4 class="example-title">DESCRIPCION DE SERVICIOS:</h4>
                            <div class="">
                              <select class="form-control">
                                <option>Cedula</option>
                                <option>NSS</option>
                              </select>
                            </div>
                        </div>

                          <div class="col-md-3">
                            <h4 class="example-title">CARGAR A CUENTA DE:</h4>
                            <div class="">
                              <select class="form-control">
                                <option>Cedula</option>
                                <option>NSS</option>
                              </select>
                            </div>
                        </div>

                          <div class="col-md-3">
                            <h4 class="example-title">USAR LISTA DE PRECIO:</h4>
                            <div class="">
                              <select class="form-control">
                                <option>Cedula</option>
                                <option>NSS</option>
                              </select>
                            </div>
                        </div>

                    </div>
             
                    <br/>

                    <div class="row">
                      <div class="col-md-2">
                            <h4 class="example-title">NO. DE AUTORIZACION:</h4>
                            <input type="text" class="form-control" name="Apellidos" placeholder="#" autocomplete="off">
                        </div>

                           <div class="col-md-2">
                            <h4 class="example-title">REPRESENTANTE ARS:</h4>
                            <input type="text" class="form-control" name="Apellidos" placeholder="" autocomplete="off">
                        </div>

                         <div class="col-md-2">
                            <h4 class="example-title">COBERTURA ARS %</h4>
                            <input type="text" class="form-control" name="Apellidos" placeholder="%" autocomplete="off">
                        </div>


                        <div class="col-md-3">
                            <h4 class="example-title">DIAGNOSTICO:</h4>
                            <div class="">
                              <select class="form-control">
                                <option>Cedula</option>
                                <option>NSS</option>
                              </select>
                            </div>
                          </div>

                          <div class="col-md-3">
                            <h4 class="example-title">MEDICO TRATANTE:</h4>
                            <div class="">
                              <select class="form-control">
                                <option>Cedula</option>
                                <option>NSS</option>
                              </select>
                            </div>
                        </div>


                    </div>

                
                    <br/>

                    <div class="row">


                                  <div class="example-wrap">
                <h4 class="example-title">Example #5</h4>
                <p>Toolbar with delete button only and other name for row identifier
                  attribute.
                </p>
                <div class="example table-responsive">
                  <table id="tableditWithDeleteButtonOnly" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>CODIGO</th>
                        <th>NOMBRE DEL PROCEDIMIENTO</th>
                        <th>TIPO DE SERVICIOS</th>
                        <th>VALOR</th>
                        <th>COBERTURA</th>
                        <th>%</th>
                        <th>DIFERENCIA</th>
                        <th>COBERTURA</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>@Elijah</td>
                        <td>Teagan</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>@Ramiro</td>
                        <td>Andy</td>
                        <td>Gaylord</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>@Maxime</td>
                        <td>Veronica</td>
                        <td>Gusikowski</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>@Maggio</td>
                        <td>Bruce</td>
                        <td>Rogahn</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>@Hammes</td>
                        <td>Carolina</td>
                        <td>Hickle</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>@Amaya</td>
                        <td>Madaline</td>
                        <td>Eichmann</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                        <td>Prohaska</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>


                    </div>

                  </form>
                </div>




 <!-- End ---------------------------------------------------------------------------------------------- -->





                <div class="wizard-pane" id="exampleGetting" role="tabpanel">
                  <div class="text-xs-center m-y-20">
                    <i class="icon md-check font-size-40" aria-hidden="true"></i>
                    <h4>We got your order. Your product will be shipping soon.</h4>
                  </div>
                </div>
              </div>
              <!-- End Wizard Content -->
            </div>
          </div>
          <!-- End Panel Wizard One Form -->
        </div>

      </div>
    </div>
  </div>
  <!-- End Page -->
        


@section('PluginsJs')

  <script src="assets/vendor/formvalidation/formValidation.js"></script>
  <script src="assets/vendor/formvalidation/framework/bootstrap.js"></script>
  <script src="assets/vendor/matchheight/jquery.matchHeight-min.js"></script>
  <script src="assets/vendor/jquery-wizard/jquery-wizard.js"></script>

  <script src="assets/js/Plugin/jquery-wizard.js"></script>
  <script src="assets/js/Plugin/matchheight.js"></script>

  {{ Html::script('assets/js/facturacion.js') }}

{{--     <script src="assets/vendor/typeahead-js/typeahead.jquery.min.js"></script>
 --}}

{{-- 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  


  <script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
      minLength: 3,
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script> --}}


@endsection




@endsection

