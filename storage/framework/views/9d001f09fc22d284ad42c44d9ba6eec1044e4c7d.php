<?php $__env->startSection('content'); ?>
	
	<div class="sidenav">
  <a href="#" style="text-align: center;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbTzYAUrDCsawDGrujPE8i_3i6YQYOBySJCH0xr0rIyBEz2OVZgg" alt="user Image" height="200px" width="150/px"/>
  </a>
  <a href="#"><?php echo e($user_details->name); ?></a>
  <a href="#"><i class="fa fa-cog"></i>Profile Update</a>
  <a href="/clform"><i class="fa fa-user"></i>Apply for Leave</a>
  <a href="#"><i class="fa fa-shopping-cart"></i>Check Leave Balance</a>
  <a href="#"><i class="fa fa-refresh"></i>Leave History</a>
  
  <a href="/logout"><i class="fa fa-sign-out"></i>Logout</a>
  </div>

<div class="sidenavright">

  </div>


<div style="margin:20px;padding:10px;text-align:center;color:black">
  <h2>
    Your Profile 
  </h2>
</div>
  <div class="container">
  <ul class="list-group">
    <li class="list-group-item">Name : <?php echo e($user_details->name); ?></li>
  <li class="list-group-item">Employee Code : <?php echo e($user_details->emp_id); ?></li>
    <li class="list-group-item">Date of Birth : <?php echo e($user_details->dob); ?></li>
    <li class="list-group-item">Sex : <?php echo e($user_details->sex); ?></li>
  <li class="list-group-item">Discipline : <?php echo e($user_details->discipline); ?></li>
    <li class="list-group-item">Address : <?php echo e($user_details->address); ?></li>
  <li class="list-group-item">Home Town : <?php echo e($user_details->hometown); ?></li>
  <li class="list-group-item">Religion  : <?php echo e($user_details->religion); ?></li>
  <li class="list-group-item">Caste  : <?php echo e($user_details->caste); ?></li>
  <li class="list-group-item">Contact No.  : <?php echo e($user_details->contact); ?></li>
  <li class="list-group-item">Marital Status  : <?php echo e($user_details->marital_status); ?></li>
  <li class="list-group-item">Children  : <?php echo e($user_details->children); ?></li>
  <li class="list-group-item">Salutation  : <?php echo e($user_details->salutation); ?></li>
  <li class="list-group-item">Category  : <?php echo e($user_details->category); ?></li>
  <li class="list-group-item">Physically Disabled  : <?php echo e($user_details->physically_disabled); ?></li>
  <li class="list-group-item">PNT No.  : <?php echo e($user_details->pnt_no); ?></li>
  <li class="list-group-item">Appointed On Quota  : <?php echo e($user_details->appointed_on_quota); ?></li>
  <li class="list-group-item">Salary  : <?php echo e($user_details->salary); ?></li>
  <li class="list-group-item">Achievement  : <?php echo e($user_details->achievements); ?></li>
  <li class="list-group-item">PAN No.  : <?php echo e($user_details->pan_no); ?></li>
  <li class="list-group-item">Aadhar No.  : <?php echo e($user_details->aadhaar); ?></li>
  </ul>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>