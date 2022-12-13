@extends('layout.user.mainlayout2')
@section('content')

<div class="page-wrapper">

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <html lang="en">
        <head>
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Form Data Pernikahan</h3>
                    
                </div>
</div>
</div>

<div class="form-group">
<div style="margin-bottom: 1rem;">
  <label>Status Pernikahan</label>
            <select class="form-control" name="st_pernikahan">
                <option>Pilih...</option>
                <option>Menikah</option>
                <option>Janda-cerai</option>
                <option>Janda-meninggal</option>
                <option>Duda-cerai</option>
                <option>Duda-meninggal</option>
                <option>Lajang</option>
              </select>
    </div>

<div class="form-group">
        <label>Tanggal</label> <br>
        <input type="date" id="tgl_mnkh"name="tgl_mnkh" class="form-control">
</div>

<div class="form-group">
        <label>Status</label> <br>
        <input type="radio" name="jenis_kelamin" value="sendiri"> Aktif </br>
        <input type="radio" name="jenis_kelamin" value="janda"> Non Aktif </br>
</div>

<div class="footer">
    <a href="" class="btn  btn-success" ><span> Simpan</span></a>
</div>
@endsection

