<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make('layout.admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>

  <body>

 <?php echo $__env->make('layout.admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('layout.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <?php echo $__env->yieldContent('content'); ?>
 <?php echo $__env->make('layout.admin.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  </body>
</html><?php /**PATH C:\xampp\htdocs\dapensri-office\resources\views/layout/admin/mainlayout.blade.php ENDPATH**/ ?>