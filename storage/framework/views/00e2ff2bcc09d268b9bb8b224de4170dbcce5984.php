
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
                    <h3 class="page-title">Form Data Pribadi</h3>
                    
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="" class="btn  btn-success" ><li class="la la-file-excel-o"></li> <span> Lihat Data</span></a>
                </div>
            </div>
            </head>
        </div>

<div class="page-body">
    <form action="/datadiri/store" method="post">
      <?php echo e(csrf_field()); ?>


      <div class="form-group">
            <label>Nama</label><br>
            <input type="text" id="name" name="name" class="form-control">
            </div>

        <div class="form-group">
            <label>badge</label><br>
            <input type="text" id="badge" name="badge" class="form-control">
            </div>

            
        <div class="form-group">
            <label>NIK</label><br>
            <input type="text" id="nik" name="nik" class="form-control">
            </div>
        
            
        <div class="form-group">
            <label>No KK</label><br>
            <input type="text" id="no_kk" name="no_kk" class="form-control">
            </div>
    <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" id="tmpt_lahir" name="tmpt_lahir" class="form-control">
        </div>

    <div class="form-group">
            <label>Tanggal Lahir</label> <br>
            <input type="date" id="tgl_lahir"name="tgl_lahir" class="form-control">
        </div>

    <div class="page-body">
    <h3>Alamat Lengkap</h3>
    <div class="row align-items-center">
    </div>
    
    <div class="form-group">
        <select name="provinsi" id="select-provinsi" class="form-control">
            <option value="-" selected disabled>-- Pilih Provinsi Terlebih Dahulu --</option>
        </select>
    </div>
    
        <div class="form-group">
            <select name="kab_kot" id="select-kab_kot" class="form-control">
                <option value="-" selected disabled>-- Pilih Kabupaten/Kota Terlebih Dahulu--</option>
            </select>
        </div>
        
        <div class="form-group">
            <select name="kec" id="select-kec" class="form-control">
                <option value="-" selected disabled>-- Pilih Kecamatan Terlebih Dahulu --</option>
            </select>
        </div>
        
        <div class="form-group">
            <select name="kel" id="select-kel" class="form-control">
                <option value="-" selected disabled>-- Pilih Kelurahan Terlebih Dahulu --</option>
            </select>
        </div>
        
        <div class="form-group">
            <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat">
        </div>
        
        
        <div class="form-group">
            <input type="text" id="kode_pos" name="kode_pos" class="form-control" placeholder="Kode Pos">
        </div>

        <div class="page-body">
            <h3>Data Bank</h3>
            <div class="row align-items-center">
        </div>
        <div class="form-group">
            <select class="form-control" name="bank">
                <option>-- Pilih Bank Terlebih Dahulu --!</option>
                <option>Bank </option>
                <option>Bank BRI</option>
                <option>Bank BCA</option>
                <option>Bank Mandiri</option>
                <option>Bank BTN</option>
                <option>Bank Syariah Indonesia (BSI)</option>
                <option>Bank Cimb Niaga</option>
                <option>Bank Danamon Indonesia</option>
                <option>Bank Mega</option>
                <option>Bank OCBC NISP</option>
                <option>Bank Permata</option>
                <option>Bank Sinarmas</option>
                <option>Bank Bca Syariah</option>
                <option>Bank Mayora</option>
                <option>Bank Syariah Bukopin</option>
                <option>Bank Bank Aceh</option>
                <option>Bank BPD Bengkulu</option>
                <option>Bank Bank DKI</option>
                <option>Bank Bank Jabar Banten</option>
                <option>Bank BPD Jambi</option>
                <option>Bank Kalimantan Tengah</option>
                <option>Bank BPD Maluku</option>
                <option>Bank Maluku </option>
                <option>Bank Riau Dan Kepulauan Riau</option>
                <option>Bank BPD Riau Dan Kepulauan Riau</option>
                <option>Bank BPD Sulawesi Selatan Dan Sulawesi Barat</option>
                <option>Bank BPD Sumatera Barat</option>
                <option>Bank Bank Jateng</option>
                <option>Bank Jatim</option>
                <option>Bank BPD Kalimantan Barat</option>
                <option>Bank BPD Nusa Tenggara Barat</option>
                <option>Bank BPD Nusa Tenggara Timur</option>
                <option>Bank BPD Sulawesi Tengah</option>
                <option>Bank BPD Sulawesi Utara</option>
                <option>Bank BPD Bali</option>
                <option>Bank BPD Kalimantan Selatan</option>
                <option>Bank BPD Papua</option>
                <option>Bank Sumatera Selatan Dan Bangka Belitung</option>
                <option>Bank Sumatera Utara</option>
                <option>Bank Sulawesi Tenggara</option>
                <option>Bank BPD Yogyakarta</option>
                <option>Bank Kalimantan Timur</option>
        </select>
        </div>
        
        <div class="form-group">
                <input type="number" id="no_rek" name="no_rek" class="form-control" placeholder="No Rekeneing">
                </div>
        </div>

        <div class="form-group">
                <input type="text" id="atas_nama" name="atas_nama" class="form-control" placeholder="Nama Pemilik">
        </div>


        
        <div class="page-body">
            <h3>Data Lainnya</h3>
            <div class="row align-items-center">
        </div>         
                <div class="form-group">
                    <input type="number" id="no_hp" name="no_hp" class="form-control" placeholder="No HP">
                </div>
                <div class="form-group">
                    <input type="number" id="npwp" name="npwp" class="form-control" placeholder="NPWP">
                </div>

        <div class="page-body">
            <h3>Status Pensiun</h3>
            <div class="row align-items-center">
        </div>

    <div class="form-group">
        <input type="radio" name="st_pensiun" value="sendiri"> Sendiri </br>
        <input type="radio" name="st_pensiun" value="janda"> Janda </br>
        <input type="radio" name="st_pensiun" value="duda"> Duda </br>
        <input type="radio" name="st_pensiun" value="yatim"> Yatim </br>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-success">Simpan Data</button>

</div>



  </form>

   

</div>

<?php $__env->stopSection(); ?>









<!-- 
<div class="page-body">
            <label>Nama</label>
            <input type="text" name="nama[]" class="form-control">
            <label>Jenis Kelamin</label>
            <input type="text" name="jk[]" class="form-control">
            <label>Alamat</label>
            <input type="text" name="alamat[]" class="form-control">
            <label>Jurusan</label>
            <select class="form-control" name="jurusan[]">
                <option>Sistem Informasi</option>
                <option>Informatika</option>
                <option>Akuntansi</option>
                <option>DKV</option>
              </select>
            
            

          <button class="btn btn-success" type="submit">Submit</button>
        </form>

</div>
 -->

<?php echo $__env->make('layout.user.mainlayout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dapensri-office\resources\views/datadiri.blade.php ENDPATH**/ ?>