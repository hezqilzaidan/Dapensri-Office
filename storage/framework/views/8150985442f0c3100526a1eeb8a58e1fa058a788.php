
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
                            <h3 class="page-title">Form Data Keluarga</h3>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div style="margin-bottom: 1rem;">
                        <form action="/datakeluarga/store" method="post">
                            <?php echo e(csrf_field()); ?>

                            <label>Status Pernikahan</label>
                            <select class="form-control" name="ket" id="ket">
                                <option>Pilih Keterangan</option>
                                <option>Suami/Istri</option>
                                <option>Anak</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama"
                            value="<?php echo e($data->nama); ?>">
                    </div>

                    <div class="form-group">
                        <input type="number" id="no_kk" name="no_kk" class="form-control" placeholder="No KK"
                            value="<?php echo e($data->no_kk); ?>">
                    </div>

                    <div class="form-group">
                        <input type="number" id="nik" name="nik" class="form-control" placeholder="NIK"
                            value="<?php echo e($data->nik); ?>">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label> <br>
                        <input type="date" id="tgl_lahir"name="tgl_lahir" class="form-control"
                            value="<?php echo e($data->tgl_lahir); ?>">
                    </div>

                    <div class="form-group">
                        <div style="margin-bottom: 10rem;">
                            <b>*Upload surat keterangan kuliah jika umur diatas 21 tahun </b><br />
                            <input type="file" name="file">
                        </div>



                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan Data</button>

                        </div>
                        </form>

                    </div>
                <?php $__env->stopSection(); ?>

                <?php $__env->startSection('c-js'); ?>
                    <script>
                        $('#ket').val('<?php echo e($data->ket); ?>')
                    </script>
                <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.user.mainlayout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dapensri\resources\views/datakeluarga.blade.php ENDPATH**/ ?>