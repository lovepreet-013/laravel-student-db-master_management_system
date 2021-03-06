

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Student</div>
                <div class="card-body">
                    <form action="<?php echo e(route('saveStudent')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">

                            <input type="text" class="form-control" id="name" placeholder="Full Name" name="full_name" required="required">
                        </div>
                        <div class="form-group">
                        
                            <input type="number" class="form-control" id="roll" placeholder="Roll Number" name="roll_num" required="required">
                        </div>
 
                        <div class="form-group">
                
                            <input type="number" class="form-control" id="reg" placeholder="Registration Number" name="reg_num" required="required">
                        </div>
                        <div class="form-group">
                    
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required="required">
                        </div>
                        <div class="form-group">
    
                            <input type="text" class="form-control" id="phone" placeholder="Mobile Number" name="mobile" required="required">
                        </div>
                      

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>