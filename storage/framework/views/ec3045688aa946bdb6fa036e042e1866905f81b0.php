<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make('layout.user.head2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>

  <body>

 <?php echo $__env->make('layout.user.nav2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layout.user.header2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <?php echo $__env->yieldContent('content'); ?>
 <?php echo $__env->make('layout.user.footer-scripts2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  </body>
</html><?php /**PATH C:\xampp\htdocs\dapensri-office\resources\views/layout/user/mainlayout2.blade.php ENDPATH**/ ?>