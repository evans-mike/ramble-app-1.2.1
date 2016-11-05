<?php $__env->startSection('content'); ?>
  <div class="flex-center position-ref full-height">
      <?php if(Route::has('login')): ?>
          <div class="top-right links">
              <a href="<?php echo e(url('/login')); ?>">Login</a>
              <a href="<?php echo e(url('/register')); ?>">Register</a>
          </div>
      <?php endif; ?>

      <div class="content">
          <div class="title m-b-md">
              Welcome
          </div>

          <div class="links">
              <a href="https://laravel.com/docs">Documentation</a>
              <a href="https://laracasts.com">Laracasts</a>
              <a href="https://laravel-news.com">News</a>
              <a href="https://forge.laravel.com">Forge</a>
              <a href="https://github.com/laravel/laravel">GitHub</a>
          </div>
      </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>