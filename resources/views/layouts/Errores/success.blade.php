@if(Session::has('success'))

	<div id="mensaje" class="alert dark alert-success alert-dismissible" role="alert">
	                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                    <span aria-hidden="true">×</span>
	                  </button>
	                   Exitoso : {{ Session::get('success') }}
	                </div>
@endif

