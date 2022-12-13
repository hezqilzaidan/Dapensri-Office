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
                            <h3 class="page-title">Form Data Pribadi</h3>

                        </div>
                        <div class="col-auto float-right ml-auto">
                            <a href="" class="btn  btn-success">
                                <li class="la la-file-excel-o"></li> <span> Lihat Data</span>
                            </a>
                        </div>
                    </div>
            </head>
        </div>

        <div class="page-body">
            <form action="/datadiri/store" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label>Nama</label><br>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $data->name }}"
                        readonly>
                </div>

                <div class="form-group">
                    <label>badge</label><br>
                    <input type="text" id="badge" name="badge" class="form-control" value="{{ $data->badge }}"
                        readonly>
                </div>


                <div class="form-group">
                    <label>NIK</label><br>
                    <input type="text" id="nik" name="nik" class="form-control" value="{{ $data->nik }}"
                        readonly>
                </div>


                <div class="form-group">
                    <label>No KK</label><br>
                    <input type="text" id="no_kk" name="no_kk" class="form-control" value="{{ $data->no_kk }}"
                        readonly>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" id="tmpt_lahir" name="tmpt_lahir" class="form-control"
                        value="{{ $data->tmpt_lahir }}" readonly>
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label> <br>
                    <input type="date" id="tgl_lahir"name="tgl_lahir" class="form-control" value="{{ $data->tgl_lahir }}"
                        readonly>
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
                        <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat"
                            value="{{ $data->alamat }}">
                    </div>


                    <div class="form-group">
                        <input type="text" id="kode_pos" name="kode_pos" class="form-control" placeholder="Kode Pos"
                            value="{{ $data->kode_pos }}">
                    </div>

                    <div class="page-body">
                        <h3>Data Bank</h3>
                        <div class="row align-items-center">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="bank" id="bank">
                                <option>-- Pilih Bank Terlebih Dahulu --!</option>
                                <option value='Bank BRI'>Bank BRI</option>
                                <option value='Bank BCA'>Bank BCA</option>
                                <option value='Bank Mandiri'>Bank Mandiri</option>
                                <option value='Bank BTN'>Bank BTN</option>
                                <option value='Bank Syariah Indonesia (BSI)'>Bank Syariah Indonesia (BSI)</option>
                                <option value='Bank Cimb Niaga'>Bank Cimb Niaga</option>
                                <option value='Bank Danamon Indonesia'>Bank Danamon Indonesia</option>
                                <option value='Bank Mega'>Bank Mega</option>
                                <option value='Bank OCBC NISP'>Bank OCBC NISP</option>
                                <option value='Bank Permata'>Bank Permata</option>
                                <option value='Bank Sinarmas'>Bank Sinarmas</option>
                                <option value='Bank Bca Syariah'>Bank Bca Syariah</option>
                                <option value='Bank Mayora'>Bank Mayora</option>
                                <option value='Bank Syariah Bukopin'>Bank Syariah Bukopin</option>
                                <option value='Bank Bank Aceh'>Bank Bank Aceh</option>
                                <option value='Bank BPD Bengkulu'>Bank BPD Bengkulu</option>
                                <option value='Bank Bank DKI'>Bank Bank DKI</option>
                                <option value='Bank Bank Jabar Banten'>Bank Bank Jabar Banten</option>
                                <option value='Bank BPD Jambi'>Bank BPD Jambi</option>
                                <option value='Bank Kalimantan Tengah'>Bank Kalimantan Tengah</option>
                                <option value='Bank BPD Maluku'>Bank BPD Maluku</option>
                                <option value='Bank Maluku '>Bank Maluku </option>
                                <option value='Bank Riau Dan Kepulauan Riau'>Bank Riau Dan Kepulauan Riau</option>
                                <option value='Bank BPD Riau Dan Kepulauan Riau'>Bank BPD Riau Dan Kepulauan Riau</option>
                                <option value='Bank BPD Sulawesi Selatan Dan Sulawesi Barat'>Bank BPD Sulawesi Selatan Dan
                                    Sulawesi Barat</option>
                                <option value='Bank BPD Sumatera Barat'>Bank BPD Sumatera Barat</option>
                                <option value='Bank Bank Jateng'>Bank Bank Jateng</option>
                                <option value='Bank Jatim'>Bank Jatim</option>
                                <option value='Bank BPD Kalimantan Barat'>Bank BPD Kalimantan Barat</option>
                                <option value='Bank BPD Nusa Tenggara Barat'>Bank BPD Nusa Tenggara Barat</option>
                                <option value='Bank BPD Nusa Tenggara Timur'>Bank BPD Nusa Tenggara Timur</option>
                                <option value='Bank BPD Sulawesi Tengah'>Bank BPD Sulawesi Tengah</option>
                                <option value='Bank BPD Sulawesi Utara'>Bank BPD Sulawesi Utara</option>
                                <option value='Bank BPD Bali'>Bank BPD Bali</option>
                                <option value='Bank BPD Kalimantan Selatan'>Bank BPD Kalimantan Selatan</option>
                                <option value='Bank BPD Papua'>Bank BPD Papua</option>
                                <option value='Bank Sumatera Selatan Dan Bangka Belitung'>Bank Sumatera Selatan Dan Bangka
                                    Belitung</option>
                                <option value='Bank Sumatera Utara'>Bank Sumatera Utara</option>
                                <option value='Bank Sulawesi Tenggara'>Bank Sulawesi Tenggara</option>
                                <option value='Bank BPD Yogyakarta'>Bank BPD Yogyakarta</option>
                                <option value='Bank Kalimantan Timur'>Bank Kalimantan Timur</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="number" id="no_rek" name="no_rek" class="form-control"
                                placeholder="No Rekeneing" value="{{ $data->no_rek }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" id="atas_nama" name="atas_nama" class="form-control"
                            placeholder="Nama Pemilik" value="{{ $data->atas_nama }}">
                    </div>



                    <div class="page-body">
                        <h3>Data Lainnya</h3>
                        <div class="row align-items-center">
                        </div>
                        <div class="form-group">
                            <input type="number" id="no_hp" name="no_hp" class="form-control"
                                placeholder="No HP" value="{{ $data->no_hp }}">
                        </div>
                        <div class="form-group">
                            <input type="number" id="npwp" name="npwp" class="form-control" placeholder="NPWP"
                                value="{{ $data->npwp }}">
                        </div>

                        <div class="page-body">
                            <h3>Status Pensiun</h3>
                            <div class="row align-items-center">
                            </div>

                            <div class="form-group">
                                <input type="radio" name="st_pensiun" value="sendiri"
                                    {{ $data->st_pensiun == 'sendiri' ? 'checked' : '' }}> Sendiri </br>
                                <input type="radio" name="st_pensiun" value="janda"
                                    {{ $data->st_pensiun == 'janda' ? 'checked' : '' }}> Janda </br>
                                <input type="radio" name="st_pensiun" value="duda"
                                    {{ $data->st_pensiun == 'duda' ? 'checked' : '' }}> Duda </br>
                                <input type="radio" name="st_pensiun" value="yatim"
                                    {{ $data->st_pensiun == 'yatim' ? 'checked' : '' }}> Yatim </br>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan Data</button>

                            </div>



            </form>



        </div>
    @endsection

    @section('c-js')
        <script>
            $(document).ready(function() {
                $('#bank').val('{{ $data->bank }}')

                $.ajax({
                    type: 'GET',
                    url: 'http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json',
                    dataType: 'json',
                    success: function(data) {
                        let prov_id;
                        $.each(data, function(index, element) {
                            if (element.name == '{{ $data->provinsi }}') {
                                prov_id = element.id;
                                $('#select-provinsi').append(`
				<option selected value = "${element.id}-${element.name}" >${element.name}</option>
				`);
                            } else {
                                $('#select-provinsi').append(`
				<option value = "${element.id}-${element.name}" >${element.name}</option>
				`);
                            }
                        });



                        $.ajax({
                            type: 'GET',
                            url: 'http://www.emsifa.com/api-wilayah-indonesia/api/regencies/' +
                                prov_id + '.json',
                            dataType: 'json',
                            success: function(data) {
                                let kab_kot_id;
                                $('#select-kab_kot').html('');
                                $('#select-kab_kot').html(
                                    `<option value='-' selected disabled>-- Pilih Kabupaten/Kota --</option>`
                                );
                                $.each(data, function(index, element) {
                                    if (element.name ==
                                        '{{ $data->kab_kot }}') {
                                        kab_kot_id = element.id;
                                        $('#select-kab_kot').append(`
					<option selected value = "${element.id}-${element.name}" >${element.name}</option>
					`);
                                    } else {
                                        $('#select-kab_kot').append(`
					<option value = "${element.id}-${element.name}" >${element.name}</option>
					`);
                                    }
                                });

                                $.ajax({
                                    type: 'GET',
                                    url: 'http://www.emsifa.com/api-wilayah-indonesia/api/districts/' +
                                        kab_kot_id + '.json',
                                    dataType: 'json',
                                    success: function(data) {
                                        let kec_id;
                                        $('#select-kec').html('');
                                        $('#select-kec').html(
                                            `<option value='-' selected disabled>-- Pilih Kecamatan --</option>`
                                        );
                                        $.each(data, function(index, element) {
                                            if (element.name ==
                                                '{{ $data->kec }}') {
                                                kec_id = element.id;
                                                $('#select-kec').append(`
					<option selected value = "${element.id}-${element.name}" >${element.name}</option>
					`);
                                            } else {
                                                $('#select-kec').append(`
					<option value = "${element.id}-${element.name}" >${element.name}</option>
					`);
                                            }
                                        });

                                        $.ajax({
                                            type: 'GET',
                                            url: 'http://www.emsifa.com/api-wilayah-indonesia/api/villages/' +
                                                kec_id + '.json',
                                            dataType: 'json',
                                            success: function(data) {
                                                $('#select-kel').html(
                                                    '');
                                                $('#select-kel').html(
                                                    `<option value='-' selected disabled>-- Pilih Kelurahan --</option>`
                                                );
                                                $.each(data, function(
                                                    index,
                                                    element) {
                                                    if (
                                                        element
                                                        .name ==
                                                        '{{ $data->kel }}'
                                                    ) {
                                                        $('#select-kel')
                                                            .append(`
					<option selected value = "${element.id}-${element.name}" >${element.name}</option>
					`);
                                                    } else {
                                                        $('#select-kel')
                                                            .append(`
					<option value = "${element.id}-${element.name}" >${element.name}</option>
					`);
                                                    }
                                                });
                                            }
                                        });
                                    }
                                });
                            }
                        });
                    }
                });

            });

            $.ajax({
                type: 'GET',
                url: 'http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json',
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(index, element) {
                        $('#select-provinsi').append(`
				<option value = "${element.id}-${element.name}" >${element.name}</option>
				`);
                    });
                }
            });

            $('#select-provinsi').on('change', function() {
                $.ajax({
                    type: 'GET',
                    url: 'http://www.emsifa.com/api-wilayah-indonesia/api/regencies/' + this.value.split('-')[
                        0] + '.json',
                    dataType: 'json',
                    success: function(data) {
                        $('#select-kab_kot').html('');
                        $('#select-kab_kot').html(
                            `<option value='-' selected disabled>-- Pilih Kabupaten/Kota --</option>`);
                        $.each(data, function(index, element) {
                            $('#select-kab_kot').append(`
					<option value = "${element.id}-${element.name}" >${element.name}</option>
					`);
                        });
                    }
                });
            });

            $('#select-kab_kot').on('change', function() {
                $.ajax({
                    type: 'GET',
                    url: 'http://www.emsifa.com/api-wilayah-indonesia/api/districts/' + this.value.split('-')[
                        0] + '.json',
                    dataType: 'json',
                    success: function(data) {
                        $('#select-kec').html('');
                        $('#select-kec').html(
                            `<option value='-' selected disabled>-- Pilih Kecamatan --</option>`);
                        $.each(data, function(index, element) {
                            $('#select-kec').append(`
					<option value = "${element.id}-${element.name}" >${element.name}</option>
					`);
                        });
                    }
                });
            });

            $('#select-kec').on('change', function() {
                $.ajax({
                    type: 'GET',
                    url: 'http://www.emsifa.com/api-wilayah-indonesia/api/villages/' + this.value.split('-')[
                        0] + '.json',
                    dataType: 'json',
                    success: function(data) {
                        $('#select-kel').html('');
                        $('#select-kel').html(
                            `<option value='-' selected disabled>-- Pilih Kelurahan --</option>`);
                        $.each(data, function(index, element) {
                            $('#select-kel').append(`
					<option value = "${element.id}-${element.name}" >${element.name}</option>
					`);
                        });
                    }
                });
            });
        </script>
    @endsection









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
