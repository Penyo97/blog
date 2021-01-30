<?php $__env->startSection('title'); ?>
    <title>Registration</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container form">
        <div class="row">
        <div class="col-sm-8">
            <form method="POST" action="<?php echo e(route('regist')); ?>" >
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label >Email address</label>
                  <input type="text" class="form-control" name="mail">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name">
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Registration</button>
              </form>
        </div>
        <div class="col-sm-4">
            <img src="svg/reg_ice.svg" class="cream_img" />
        </div>
        </div>
        <land/>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\facebook_clone\resources\views/Auth/registration.blade.php ENDPATH**/ ?>