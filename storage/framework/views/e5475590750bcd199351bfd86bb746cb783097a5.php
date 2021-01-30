<?php $__env->startSection('title'); ?>
    <title><?php echo e(Auth::user()->name); ?> profile</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container form">
    <div class="row justify-content-center">
    <div class="col-sm-4">
        <?php if($profiledata->image == null): ?>
                   <img src="svg/ice-cream.svg" height="100px" class="profimg"/>
                   <hr>
                   <form method="POST" action="<?php echo e(route('image')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                      <input type="file" class="form-control-file" name="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Image Upload</button>
                  </form>
        <?php else: ?>
        <img src="images/<?php echo e($profiledata->image); ?>" height="200px" class="profimg"/>
        <hr>
        <form method="POST" action="<?php echo e(route('image')); ?>" enctype="multipart/form-data">
         <?php echo csrf_field(); ?>
         <div class="form-group">
           <input type="file" class="form-control-file" name="img">
         </div>
         <button type="submit" class="btn btn-primary">Image Update</button>
       </form>
        <?php endif; ?>
    </div>
    <div class="col-sm-4">
        <h1><?php echo e($profiledata->name); ?></h1>
    </div>
    <div class="col-sm-4">
        <h3>Friends number: <?php echo e($profiledata->friends->count()); ?></h3>
    </div>
</div>
</div>
<land />
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\facebook_clone\resources\views/profile.blade.php ENDPATH**/ ?>