<?php $__env->startSection('content'); ?>

<div class="container-fluid">
<div class="post-list">
<hr>
<?php $__currentLoopData = $user_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="hey">
    <section class="post-item">
        <header class="post-item-header">
          <h5 class="post-item-title">BY - <?php echo e($user_details->emp_id); ?> - <?php echo e($user_details->name); ?></h5>
            </header>
            <br>
            <p>
                Leave start date: <?php echo e($user_details->start_date); ?>

                <br>
                Purpose Of Leave - <?php echo e($user_details->purpose); ?>

                <br><a class="post-item-more" href="/admin/<?php echo e($user_details->ID); ?>">Read Full Details</a>

            </p>
        </section>
  </div>
<hr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>