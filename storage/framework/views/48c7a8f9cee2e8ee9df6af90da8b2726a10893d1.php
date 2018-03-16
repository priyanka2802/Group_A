<?php $__env->startSection('content'); ?>
<br><br>
	<form action="/clform" method="POST">
			<?php echo e(csrf_field()); ?>

				<label for="start_date">Start Date (of leave)</label><br>
				<input type="date" id="start_date" name="start_date" required>
				<br><br>
				<label for="num_days">Number Of Days</label><br>
				<input type="number" id="num_days" name="num_days" required>
				<br><br>
				<label for="purpose">Purpose Of Leave</label><br>
				<input type="text" id="purpose" name="purpose" required>
				<br><br>
				<label for="contact">Contact Number (during leave)</label><br>
				<input type="number" id="contact" name="contact" required>
				<br><br>
				<button type="submit" class="btn btn-primary">Submit</button>
		</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>