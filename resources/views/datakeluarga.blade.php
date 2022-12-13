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
                            <h3 class="page-title">Form Data Keluarga</h3>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div style="margin-bottom: 1rem;">
                        <form action="/datakeluarga/store" method="post">
                            {{ csrf_field() }}
                            <label>Status Pernikahan</label>
                            <select class="form-control" name="ket" id="ket">
                                <option>Pilih Keterangan</option>
                                <option>Suami/Istri</option>
                                <option>Anak</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama"
                            value="{{ $data->nama }}">
                    </div>

                    <div class="form-group">
                        <input type="number" id="no_kk" name="no_kk" class="form-control" placeholder="No KK"
                            value="{{ $data->no_kk }}">
                    </div>

                    <div class="form-group">
                        <input type="number" id="nik" name="nik" class="form-control" placeholder="NIK"
                            value="{{ $data->nik }}">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label> <br>
                        <input type="date" id="tgl_lahir"name="tgl_lahir" class="form-control"
                            value="{{ $data->tgl_lahir }}">
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
                @endsection

                @section('c-js')
                    <script>
                        $('#ket').val('{{ $data->ket }}')
                    </script>
                @endsection
