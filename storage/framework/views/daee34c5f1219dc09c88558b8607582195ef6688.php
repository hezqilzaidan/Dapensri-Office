
<?php $__env->startSection('content'); ?>

    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid">

            <!-- Page Header -->
            <html lang="en">

            <head>
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Data Identitas Diri</h3>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div style="margin-bottom: 1rem;">

                        <div class="row">
                            <div clas="col-md-4">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo e(strtoupper($data->name)); ?></h5>
                                        <p class="card-text">
                                            <?php echo e($data->alamat); ?>

                                        </p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Badge: <?php echo e($data->badge); ?></li>
                                        <li class="list-group-item">NIK: <?php echo e($data->nik); ?></li>
                                        <li class="list-group-item">No KK: <?php echo e($data->nik); ?></li>
                                        <li class="list-group-item">No HP: <?php echo e($data->no_hp); ?></li>
                                        <li class="list-group-item">TTL: <?php echo e($data->tmpt_lahir); ?>,
                                            <?php echo e(date('d-m-Y', strtotime($data->tgl_lahir))); ?></li>


                                </div>
                            </div>

<?php echo $__env->make('layout.user.mainlayout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dapensri\resources\views/home.blade.php ENDPATH**/ ?>