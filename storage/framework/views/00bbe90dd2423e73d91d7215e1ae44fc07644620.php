<?php $__env->startSection('nav'); ?>
<br>
<link href="/css/nav.css" rel="stylesheet">	

<header role="banner">
			<nav class="navbar">
			<div class="container">
  				<ul class="nav">
    					<li><a href="/recommend">All</a></li>
    					<li><a href="/leavepending">Pending</a></li>
    					<li><a href="/leaverecommended">Recommended</a></li>
    					<li><a href="/leavereverted">Reverted Back</a></li>
  				</ul>
			</div>
			</nav>
</header>
<br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="sidenav">
  <a href="#">
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Macaca_sinica_-_01.jpg/1200px-Macaca_sinica_-_01.jpg" alt="user Image" height="200px" width="150/px" />
  </a>
  <a href="#">User Name</a>
  <a href="#"><i class="fa fa-cog"></i>Profile Update</a>
  <a href="/clform"><i class="fa fa-user"></i>Apply for Leave</a>
  <a href="#"><i class="fa fa-shopping-cart"></i>Check Leave Balance</a>
  <a href="#"><i class="fa fa-refresh"></i>Leave History</a>
  
  <a href="/logout"><i class="fa fa-sign-out"></i>Logout</a>
  </div>

<div class="sidenavright">

  </div>
  
<div class="wrapper">
<div class="post-list">
<h2><?php echo e($user_details->name); ?></h2>
<h5><b>Employee ID</b> : <?php echo e($user_details->emp_id); ?></h5>
<br>
<p><h5><b>Purpose of Leave: </b></h5><?php echo e($user_details->purpose); ?></p>
<p><h5><b>Start Date of Leave: </b></h5> <?php echo e($user_details->start_date); ?> </p>
<p><h5><b>Number of Days of Leave: </b></h5> <?php echo e($user_details->no_of_days); ?></p>
<p><h5><b>Contact (During Leave): </b></h5> <?php echo e($user_details->contact); ?> </p>
<br>
<a href="/recommended/<?php echo e($user_details->ID); ?>" class="btn btn-success status" role="button">Recommend</a>
<a href="/reverted/<?php echo e($user_details->ID); ?>" class="btn btn-success status" role="button">Revert Back</a>
</div></div>
<script>
	$(document).ready(function(){
		var status = "<?php echo $user_details->status ?>";
		// alert(status);
		if(status != 'Application submitted')
		{
			$('.status').bind('click', false).css({"background-color": "grey", "cursor": "default", "border-color":"grey"});
		}
	});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>