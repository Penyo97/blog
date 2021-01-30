<nav class="navbar navbar-expand-lg navbar-light  bg-dark">
    <a class="navbar-brand" href="<?php echo e(route('main')); ?>"><img src="svg/ice-cream.svg" style="height: 30px"/></a>
    <form class="form-inline my-2 my-lg-0" method="POST" action="<?php echo e(route('search')); ?>">
        <?php echo csrf_field(); ?>
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="name">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
          <?php if(Auth::check()): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('profile',['id' => Auth::user()->id])); ?>">
                <?php if(Auth::user()->image == null): ?>
                <img src="svg/ice-cream.svg" height="30px" class="headerimg"/>
                <?php else: ?>
                <img src="images/<?php echo e(Auth::user()->image); ?>" height="30px" class="headerimg"/>
                <?php endif; ?>
                <?php echo e(Auth::user()->name); ?> profile</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('message')); ?>"><i class="far fa-comment-dots"></i> Messages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('setting')); ?>"><i class="fas fa-cogs"></i> Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('logout')); ?>"><i class="fas fa-sign-out-alt"></i> Log out</a>
          </li>
            <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('getlogin')); ?>">Login</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('getreg')); ?>">Registration</a>
              </li>
          <?php endif; ?>
      </ul>
    </div>
  </nav>
<?php /**PATH C:\xampp\htdocs\facebook_clone\resources\views/header/header.blade.php ENDPATH**/ ?>