<?php $__env->startSection('content'); ?>
	
	<div class="sidenav">
  <a href="#" style="text-align: center;">
  <img src="/images/<?php echo e($user_details->photo); ?>" alt="user Image" height="200px" width="150/px"/>
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
  <table class="table table-striped">
    <tbody>
      <tr>
        <td style="font-weight: bold;">Name</td>
        <td><?php echo e($user_details->name); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Employee Code</td>
        <td><?php echo e($user_details->emp_id); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Date of Birth</td>
        <td><?php echo e($user_details->dob); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Sex</td>
        <td><?php echo e($user_details->sex); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Discipline</td>
        <td><?php echo e($user_details->discipline); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Address</td>
        <td><?php echo e($user_details->address); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Hometown</td>
        <td><?php echo e($user_details->hometown); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Religion</td>
        <td><?php echo e($user_details->religion); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Caste</td>
        <td><?php echo e($user_details->caste); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Contact No.</td>
        <td><?php echo e($user_details->contact); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Marital Status</td>
        <td><?php echo e($user_details->marital_status); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Children</td>
        <td><?php echo e($user_details->children); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Salutation</td>
        <td><?php echo e($user_details->salutation); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Category</td>
        <td><?php echo e($user_details->category); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Physically Disabled</td>
        <td><?php echo e($user_details->physically_disabled); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">PNT No.</td>
        <td><?php echo e($user_details->pnt_no); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Appointed On Quota</td>
        <td><?php echo e($user_details->appointed_on_quota); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Salary</td>
        <td><?php echo e($user_details->salary); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Achievements</td>
        <td><?php echo e($user_details->achievements); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">PAN No.</td>
        <td><?php echo e($user_details->pan_no); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Aadhar No.</td>
        <td><?php echo e($user_details->aadhaar); ?></td>
      </tr>
    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>