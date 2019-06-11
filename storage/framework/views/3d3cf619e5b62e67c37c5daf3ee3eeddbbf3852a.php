

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        	<div class="card">
                <div class="card-header">All Students</div>
                <div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Roll</th>
									<th>Email</th>
									<th>Registration</th>
									<th>mobile</th>

								</tr>
							</thead>
							<tbody>
								<?php if(count($students) > 0): ?>
									<?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e(++$loop->index); ?></td>
										<td><?php echo e($student->name); ?></td>
										<td><?php echo e($student->roll); ?></td>
										<td><?php echo e($student->email); ?></td>
										<td><?php echo e($student->address); ?></td>
										<td><?php echo e($student->registration); ?></td>
										<td><?php echo e($student->phone); ?></td>
										
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php else: ?>
									<p>No Data Found</p>
								<?php endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>