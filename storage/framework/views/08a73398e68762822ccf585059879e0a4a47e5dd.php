<?php $__env->startSection('nav'); ?>
<br>
<link href="/css/nav.css" rel="stylesheet"> 

<header role="banner">
      <nav class="navbar">
      <div class="container">
          <ul class="nav">
              <li><a href="/approval">All</a></li>
              <li><a href="/leavependingapproval">Pending</a></li>
              <li><a href="/leaveapproved">Approved</a></li>
              <li><a href="/leaverejected">Rejected</a></li>
          </ul>
      </div>
      </nav>
</header>
<br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="sidenav">
  <a href="#" style="text-align: center;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbTzYAUrDCsawDGrujPE8i_3i6YQYOBySJCH0xr0rIyBEz2OVZgg" alt="user Image" height="200px" width="150/px" />
  </a>
  <a href="#">User Name</a>
  <a href="#"><i class="fa fa-cog"></i>Profile Update</a>
  <a href="#"><i class="fa fa-refresh"></i>Search Info</a>
  
  <a href="/logout"><i class="fa fa-sign-out"></i>Logout</a>
  </div>

<div class="sidenavright">

  </div>
  
<div class="wrapper">
<div class="post-list">
<hr>
<?php $__currentLoopData = $user_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="post-item">
        <header class="post-item-header">
           <p class="post-item-meta">
             <span class="post-item-date">Leave start date: <?php echo e($user_details->start_date); ?></span>
            </p>
            <h2 class="post-item-title">BY - <?php echo e($user_details->emp_id); ?> - <?php echo e($user_details->name); ?></h2>
        </header>

        <div class="post-item-description">
            <p>
                Purpose Of Leave - <?php echo e($user_details->purpose); ?>

            </p>
        </div>

      <footer class="post-item-footer">
        <a class="post-item-more" href="/approval/<?php echo e($user_details->ID); ?>">Read Full Details</a>
      </footer>
    </section>
<hr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>