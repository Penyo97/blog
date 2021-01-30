<div class="container input">
    <div class="col-sm-8">
        <form method="POST" action="<?php echo e(route('post')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <input type="text" class="form-control" name="post">
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file" name="img">
              </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-plus-square"></i> Post</button>
          </form>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\facebook_clone\resources\views/main/postinput.blade.php ENDPATH**/ ?>