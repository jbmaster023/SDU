<div class="modal fade modal-success" id="@yield('tituloModal')" aria-hidden="true" aria-labelledby="exampleModalSuccess" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">@yield('Modal_Title')</h4>
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
          @section('Contenido')
          @show       


    </div>
  </div>
</div>