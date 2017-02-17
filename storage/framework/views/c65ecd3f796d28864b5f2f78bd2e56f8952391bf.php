<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title><?php echo e(config('app.name', 'Laravel')); ?>| <?php echo $__env->yieldContent('title'); ?></title>

  <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
  </script>

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

  <?php echo e(Html::style('assets/vendor/select2/select2.css')); ?>




   <!-- ojo -->
  <?php $__env->startSection('PluginsCss'); ?>
  <?php echo $__env->yieldSection(); ?>

   
  <!-- Fonts -->


  <?php echo e(HTML::style('assets/fonts/7-stroke/7-stroke.css')); ?>

  <?php echo e(HTML::style('assets/fonts/material-design/material-design.min.css')); ?>

  <?php echo e(HTML::style('assets/fonts/brand-icons/brand-icons.min.css')); ?>

  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!--[if lt IE 9]>
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
<body class="animsition">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


<!-- Header PAGE -->
<?php echo $__env->make('layouts.include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- END Header PAGE --> 

<!-- Menu PAGE -->
<?php echo $__env->make('layouts.include.menus', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- END Menu PAGE --> 

<!-- footerControl PAGE -->
<?php echo $__env->make('layouts.include.footerControl', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- END footerControl PAGE --> 





</div>
 


<div class="page">
  <!-- Page Content -->
  <div class="page-content">

      <?php echo $__env->make('layouts/Errores/error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('layouts/Errores/success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <!-- Contenido -->
      <?php echo $__env->yieldContent('content'); ?>

  </div>
</div>            

<form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
 <?php echo e(csrf_field()); ?>

</form>



  <!-- footer PAGE -->
<?php echo $__env->make('layouts.include.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- END footer PAGE --> 

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

  <?php echo e(HTML::script('assets/vendor/select2/select2.full.min.js')); ?>


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

  <?php echo e(HTML::script('assets/js/Plugin/select2.js')); ?>

 


  <?php echo e(HTML::script('assets/js/Site.js')); ?>

  <?php echo e(HTML::script('assets/js/Plugin/asscrollable.js')); ?>

  <?php echo e(HTML::script('assets/js/Plugin/switchery.js')); ?>


  <?php echo e(HTML::script('assets/js/Plugin/jquery-placeholder.js')); ?>

  <?php echo e(HTML::script('assets/js/Plugin/material.js')); ?>





 <!-- ojo -->
  <?php $__env->startSection('PluginsJs'); ?>
  <?php echo $__env->yieldSection(); ?>

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