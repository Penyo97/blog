<?php $__env->startSection('title'); ?>
<title>Friend</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div>
    <div class="container form">
        <div class="col-8 py-3 px-lg-5">
            <?php if($users == "[]"): ?>
                <h1>Not exist</h1>
            <?php else: ?>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-8">
                            <div class="row justify-content-center mx-lg-n5">
                             <?php if($user->image == null): ?>
                             <div class="col-4"><img src="svg/ice-cream.svg" height="200px" class="headerimg"/></div>
                             <?php else: ?>
                             <div class="col-4"><img src="images/<?php echo e($user->image); ?>" height="200px" class="profimg"/></div>
                            <?php endif; ?>
                            <div class="col-4 py-3 px-lg-5 "><h4><?php echo e($user->name); ?></h4></div>
                            <div class="col-4 py-3 px-lg-5 "><friendbutton id="<?php echo e($user->id); ?>"/></div>
                        </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
    <land/>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\facebook_clone\resources\views/main/friends.blade.php ENDPATH**/ ?>