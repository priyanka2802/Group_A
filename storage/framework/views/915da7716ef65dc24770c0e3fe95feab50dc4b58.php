<?php $__env->startSection('title'); ?>
  Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <form method="POST" action="/login">
      <?php echo e(csrf_field()); ?>

        <h1>Login</h1>
        
            <input type="email" id="email" name="email" placeholder="Email">
            
            <input type="password" id="password" name="password" placeholder="Password">
          
        <button type = "submit" class="btn btn-success btn-block">Let Me In</button>
        <br><br>
        <?php echo $__env->make('errors.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('session.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>