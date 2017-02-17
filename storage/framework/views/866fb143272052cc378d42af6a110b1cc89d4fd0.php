<?php if(Session::has('error')): ?>

	<div id="mensaje" class="alert dark alert-danger alert-dismissible" role="alert">
	                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                    <span aria-hidden="true">×</span>
	                  </button>
	                  <?php echo e(Session::get('error')); ?>

	                </div>

<?php endif; ?>





