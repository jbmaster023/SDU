<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>{{ config('app.name', 'Laravel') }}| @yield('title')</title>

  <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
  </script>

  {{ Html::style('assets/images/apple-touch-icon.png') }}
  {{ Html::style('assets/images/favicon.ico') }}
  <!-- Stylesheets -->
  {{ Html::style('assets/css/bootstrap.min.css') }}
  {{ Html::style('assets/css/bootstrap-extend.min.css') }}
  {{ Html::style('assets/css/site.min.css') }}
  <!-- Plugins -->
  {{ Html::style('assets/vendor/animsition/animsition.css') }}
  {{ Html::style('assets/vendor/asscrollable/asScrollable.css') }}
  {{ Html::style('assets/vendor/switchery/switchery.css') }}
  {{ Html::style('assets/vendor/intro-js/introjs.css') }}
  {{ Html::style('assets/vendor/slidepanel/slidePanel.css') }}
  {{ Html::style('assets/vendor/flag-icon-css/flag-icon.css') }}
  {{ Html::style('assets/vendor/waves/waves.css') }}
  {{ Html::style('assets/vendor/select2/select2.css') }}



   <!-- ojo -->
  @section('PluginsCss')
  @show

   
  <!-- Fonts -->


  {{ HTML::style('assets/fonts/7-stroke/7-stroke.css') }}
  {{ HTML::style('assets/fonts/material-design/material-design.min.css') }}
  {{ HTML::style('assets/fonts/brand-icons/brand-icons.min.css') }}
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  {{ HTML::script('assets/vendor/breakpoints/breakpoints.js') }}
  <script>
  Breakpoints();
  </script>
</head>
<body class="animsition">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


<!-- Header PAGE -->
@include('layouts.include.header')
<!-- END Header PAGE --> 

<!-- Menu PAGE -->
@include('layouts.include.menus')
<!-- END Menu PAGE --> 

<!-- footerControl PAGE -->
@include('layouts.include.footerControl')
<!-- END footerControl PAGE --> 





</div>
 


<div class="page">
  <!-- Page Content -->
  <div class="page-content">

      @include('layouts/Errores/error')
      @include('layouts/Errores/success')

      <!-- Contenido -->
      @yield('content')

  </div>
</div>            

<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
 {{ csrf_field() }}
</form>



  <!-- footer PAGE -->
@include('layouts.include.footer')
<!-- END footer PAGE --> 

  <!-- Core  -->
  {{ HTML::script('assets/vendor/babel-external-helpers/babel-external-helpers.js') }}
  {{ HTML::script('assets/vendor/jquery/jquery.js') }}
  {{ HTML::script('assets/vendor/tether/tether.js') }}
  {{ HTML::script('assets/vendor/bootstrap/bootstrap.js') }}
  {{ HTML::script('assets/vendor/animsition/animsition.js') }}
  {{ HTML::script('assets/vendor/mousewheel/jquery.mousewheel.js') }}
  {{ HTML::script('assets/vendor/asscrollbar/jquery-asScrollbar.js') }}
  {{ HTML::script('assets/vendor/asscrollable/jquery-asScrollable.js') }}
  {{ HTML::script('assets/vendor/ashoverscroll/jquery-asHoverScroll.js') }}
  {{ HTML::script('assets/vendor/waves/waves.js') }}

  <!-- Plugins -->
  {{ HTML::script('assets/vendor/switchery/switchery.min.js') }}
  {{ HTML::script('assets/vendor/intro-js/intro.js') }}
  {{ HTML::script('assets/vendor/screenfull/screenfull.js') }}
  {{ HTML::script('assets/vendor/slidepanel/jquery-slidePanel.js') }}
  {{ HTML::script('assets/vendor/select2/select2.full.min.js') }}

  {{ HTML::script('assets/vendor/jquery-placeholder/jquery.placeholder.js') }}

  <!-- Scripts -->
  {{ HTML::script('assets/vendor/js/State.js') }}
  {{ HTML::script('assets/vendor/js/Component.js') }}
  {{ HTML::script('assets/vendor/js/Plugin.js') }}
  {{ HTML::script('assets/vendor/js/Base.js') }}
  {{ HTML::script('assets/vendor/js/Config.js') }}
  {{ HTML::script('assets/js/Section/Menubar.js') }}
  {{ HTML::script('assets/js/Section/GridMenu.js') }}
  {{ HTML::script('assets/js/Section/Sidebar.js') }}
  {{ HTML::script('assets/js/Section/PageAside.js') }}
  {{ HTML::script('assets/js/Plugin/menu.js') }}
  {{ HTML::script('assets/vendor/js/config/colors.js') }}
  {{ HTML::script('assets/js/config/tour.js') }}
  {{ HTML::script('assets/js/Plugin/select2.js') }}
 


  {{ HTML::script('assets/js/Site.js') }}
  {{ HTML::script('assets/js/Plugin/asscrollable.js') }}
  {{ HTML::script('assets/js/Plugin/switchery.js') }}

  {{ HTML::script('assets/js/Plugin/jquery-placeholder.js') }}
  {{ HTML::script('assets/js/Plugin/material.js') }}




 <!-- ojo -->
  @section('PluginsJs')
  @show

  <script>
  (function(document, window, $) {
    'use strict';
    var Site = window.Site;
    $(document).ready(function() {
      Site.run();
    });
  })(document, window, jQuery);


  //Esconder los div de los mensajes 
  setTimeout(esconderdiv, 7000);
  function esconderdiv(){
    $("#mensaje").hide("fast")
  }
  </script>




</body>
</html>