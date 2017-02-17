<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Login | SoftClinic.do</title>

  <?php echo e(Html::style('assets/images/apple-touch-icon.png')); ?>

  <?php echo e(Html::style('assets/images/favicon.ico')); ?>


  <!-- Stylesheets -->
  <?php echo e(Html::style('assets/css/bootstrap.min.css')); ?>

  <?php echo e(Html::style('assets/css/bootstrap-extend.min.css')); ?>

  <?php echo e(Html::style('assets/css/site.min.css')); ?>

 
  <!-- Plugins -->
  <?php echo e(Html::style('assets/vendor/animsition/animsition.css')); ?>

  <?php echo e(Html::style('assets/vendor/asscrollable/asScrollable.css')); ?>

  <?php echo e(Html::style('assets/vendor/switchery/switchery.css')); ?>

  <?php echo e(Html::style('assets/vendor/intro-js/introjs.css')); ?>

  <?php echo e(Html::style('assets/vendor/slidepanel/slidePanel.css')); ?>

  <?php echo e(Html::style('assets/vendor/flag-icon-css/flag-icon.css')); ?>

  <?php echo e(Html::style('assets/vendor/waves/waves.css')); ?>

  <?php echo e(Html::style('assets/css/login.css')); ?>


  <!-- Fonts -->
  <?php echo e(Html::style('assets/fonts/material-design/material-design.min.css')); ?>

  <?php echo e(Html::style('assets/fonts/brand-icons/brand-icons.min.css')); ?>


  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!--[if lt IE 9]>
  <?php echo e(Html::style('assets/html5shiv/html5shiv.min.js')); ?>

    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <?php echo e(HTML::script('assets/vendor/breakpoints/breakpoints.js')); ?>

  <script>
  Breakpoints();
  </script>
</head>
<body class="animsition page-login-v3 layout-full">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <!-- Page -->
  <div class="page vertical-align text-xs-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
      <div class="panel">
        <div class="panel-body">
          <div class="brand">
            <img class="brand-img" src="assets/images/logo2.jpeg" alt="...">
            
          </div>
          <form method="post" action="<?php echo e(url('/login')); ?>" autocomplete="off">
          <?php echo e(csrf_field()); ?>

          <?php echo e($errors->first('usuario')); ?>

          </br>
          <?php echo e($errors->first('password')); ?>




            <div class="form-group form-material floating <?php echo e($errors->has('usuario') ? 'has-danger' : ''); ?> ">
              <input type="text" class="form-control form-control-lg" name="usuario" value="<?php echo e(old('usuario')); ?>" />
              <label class="floating-label">Usuario:</label>
            </div>


            <div class="form-group form-material floating <?php echo e($errors->has('password') ? 'has-danger' : ''); ?>">
              <input type="password" class="form-control form-control-lg" name="password" />
              <label class="floating-label">Contraseña:</label>
            </div>


            <div class="form-group clearfix">
              <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg pull-xs-left">
                <input type="checkbox" id="inputCheckbox" name="remember">
                
              </div>
              <a class="pull-xs-right" href="<?php echo e(url('/password/reset')); ?>">Se te olvidó tu contraseña?</a>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg m-t-40">Iniciar sesión</button>
          </form>
        </div>
      </div>
      <footer class="page-copyright page-copyright-inverse">
        <p>SoftClinic v.1</p>
        <p>© 2016. Todos los derechos reservados.</p>
        <div class="social">
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
            <i class="icon bd-twitter" aria-hidden="true"></i>
          </a>
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
            <i class="icon bd-facebook" aria-hidden="true"></i>
          </a>
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
            <i class="icon bd-google-plus" aria-hidden="true"></i>
          </a>
        </div>
      </footer>
    </div>
  </div>
  <!-- End Page -->
  <!-- Core  -->
  <?php echo e(HTML::script('assets/vendor/babel-external-helpers/babel-external-helpers.js')); ?>

  <?php echo e(HTML::script('assets/vendor/jquery/jquery.js')); ?>

  <?php echo e(HTML::script('assets/vendor/tether/tether.js')); ?>

  <?php echo e(HTML::script('assets/vendor/bootstrap/bootstrap.js')); ?>

  <?php echo e(HTML::script('assets/vendor/animsition/animsition.js')); ?>

  <?php echo e(HTML::script('assets/vendor/mousewheel/jquery.mousewheel.js')); ?>

  <?php echo e(HTML::script('assets/vendor/asscrollbar/jquery-asScrollbar.js')); ?>

  <?php echo e(HTML::script('assets/vendor/asscrollable/jquery-asScrollable.js')); ?>

  <?php echo e(HTML::script('assets/vendor/ashoverscroll/jquery-asHoverScroll.js')); ?>

  <?php echo e(HTML::script('assets/vendor/waves/waves.js')); ?>


  <!-- Plugins -->
  <?php echo e(HTML::script('assets/vendor/switchery/switchery.min.js')); ?>

  <?php echo e(HTML::script('assets/vendor/intro-js/intro.js')); ?>

  <?php echo e(HTML::script('assets/vendor/screenfull/screenfull.js')); ?>

  <?php echo e(HTML::script('assets/vendor/slidepanel/jquery-slidePanel.js')); ?>

  <?php echo e(HTML::script('assets/vendor/jquery-placeholder/jquery.placeholder.js')); ?>


  <!-- Scripts -->
  <?php echo e(HTML::script('assets/vendor/js/State.js')); ?>

  <?php echo e(HTML::script('assets/vendor/js/Component.js')); ?>

  <?php echo e(HTML::script('assets/vendor/js/Plugin.js')); ?>

  <?php echo e(HTML::script('assets/vendor/js/Base.js')); ?>

  <?php echo e(HTML::script('assets/vendor/js/Config.js')); ?>

  <?php echo e(HTML::script('assets/js/Section/Menubar.js')); ?>

  <?php echo e(HTML::script('assets/js/Section/GridMenu.js')); ?>

  <?php echo e(HTML::script('assets/js/Section/Sidebar.js')); ?>

  <?php echo e(HTML::script('assets/js/Section/PageAside.js')); ?>

  <?php echo e(HTML::script('assets/js/Plugin/menu.js')); ?>

  <?php echo e(HTML::script('assets/vendor/js/config/colors.js')); ?>

  <?php echo e(HTML::script('assets/js/config/tour.js')); ?>



  <?php echo e(HTML::script('assets/js/Site.js')); ?>

  <?php echo e(HTML::script('assets/js/Plugin/asscrollable.js')); ?>

  <?php echo e(HTML::script('assets/js/Plugin/switchery.js')); ?>

  <?php echo e(HTML::script('assets/js/Plugin/jquery-placeholder.js')); ?>

  <?php echo e(HTML::script('assets/js/Plugin/material.js')); ?>


  <script>
  (function(document, window, $) {
    'use strict';
    var Site = window.Site;
    $(document).ready(function() {
      Site.run();
    });
  })(document, window, jQuery);
  </script>
</body>
</html>