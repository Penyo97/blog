<?php $__env->startSection('title'); ?>
    <title>Main</title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<?php echo $__env->make('main.postinput', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
 $count = 0
?>
<div class="container posts">
<?php if($post->img != null): ?>
    <img src="images/<?php echo e($post->img); ?>" style="height: 360px" class="img-fluid rounded"/>
<?php endif; ?>
<div class="col-sm-12">
    <h4><?php echo e($post->text); ?></h4>
</div>
<hr>
<div class="row">
    <div class="col-sm-6">
        <h5><?php echo e($post->user); ?></h5>
    </div>
    <div class="col-sm-6">
        <h5><?php echo e($post->post_time); ?></h5>
    </div>
</div>
<div class="col-sm-12">
    <form method="POST"  action="<?php echo e(route('comment',['id' => $post->id])); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <input type="text" class="form-control" name="text">
        </div>
        <div class="row">
            <?php $__currentLoopData = $likes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $like): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($post->id == $like->post_id): ?>
                    <?php
                     $count++
                    ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('like',['id' => $post->id])); ?>" class="btn btn-primary"><?php echo e($count); ?> <i class="fas fa-thumbs-up"></i> Like</a>
        <button type="submit" class="btn btn-primary" style="margin-left: 20px"><i class="far fa-comment"></i> Comment</button>
        </div>
      </form>
</div>
<div class="col-sm-12">
    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($post->id == $comment->post_id): ?>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h6><?php echo e($comment->text); ?></h6>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                           <p> <?php echo e($comment->user); ?></p>
                        </div>
                        <div class="col-sm-6">
                            <p> <?php echo e($comment->comment_time); ?></p>
                         </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="container" style="margin-top: 20px">
    <div class="col-sm-12">
        <?php echo e($posts->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\facebook_clone\resources\views/main/main.blade.php ENDPATH**/ ?>