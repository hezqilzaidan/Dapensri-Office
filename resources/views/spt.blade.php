@extends('layout.admin.mainlayout')
@section('content')

<div class="page-wrapper">

    @if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
		@endif

		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>{{ $sukses }}</strong>
		</div>
		@endif

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Data SPT Ex Karyawan</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Master Data</a></li>
                        <li class="breadcrumb-item active">Data SPT Ex Karyawan</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a  href="#" data-target="#addModal" data-toggle="modal"  class="btn-success btn"><i class="la la-download"></i><span> Import Data </span> </a>
                </div>
            </div>
        </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-nowrap  mb-0 " id="dataKar">
                                <thead>
                                    <tr>
                                        <th class="text-center">Masa Pajak</th>
                                        <th class="text-center">Tahun Pajak</th>
                                        <th class="text-center" >Pembetulan</th>
                                        <th class="text-center" >No Bukti</th>
                                        <th class="tex-center">NPWP</th>
                                        <th class="tex-center">NIK</th>
                                        <th class="tex-center">Nama</th>
                                        <th class="tex-center">Download File</th>
                                        <th class="tex-center">Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>


        <div id="addModal" class="modal custom-modal fade" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-judul"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{url('/spt/import')}}" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Upload File</label>
                                    {{-- <input type="text" name="namaFile" class="form-control"> --}}
                                    <input type="file" placeholder="Pilih File Anda" name="file" class="form-control">
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

        <div id="add_modals" class="modal custom-modal fade" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-judul"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formData">
                            @csrf
                            <div class="form-scroll">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title"> Data SPT </h3>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" id="nama" name="nama" value="" class="form-control">
                                                    <input type="hidden" id="id" name="id" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>NIK</label>
                                                    <input type="text" placeholder="nik" id="nik" name="nik" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Masa Pajak</label>
                                                    <input type="text" id="kode_form" name="kode_form"  placeholder="Masa Pajak" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Tahun Pajak</label>
                                                    <input type="text" id="tahun_pajak" name="tahun_pajak"  placeholder="Tahun Pajak" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Jumlah Tanggungan</label>
                                                    <input type="text" id="jlh_tanggungan" name="jlh_tanggungan"  placeholder="Jumlah Tanggungan" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <input type="text" id="alamat" name="alamat"  placeholder="Alamat" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Pembetulan</label>
                                                    <input type="text" id="pembetulan" name="pembetulan"  placeholder="pembetulan" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Masa Perolehan Akhir</label>
                                                    <input type="text" id="masa_perolehan_1" name="masa_perolehan_1"  placeholder="Masa Perolehan AKhir" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Masa Perolehan Akhir</label>
                                                    <input type="text" id="masa_perolehan_2" name="masa_perolehan_2"  placeholder="Masa Perolehan Akhir" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label>No Bukti Potongan</label>
                                                    <input type="text" id="no_urut" name="no_urut"  placeholder="No Bukti Potongan" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Jenis Kelamin</label>
                                                    <input type="text" id="jk" name="jk"  placeholder="Jenis Kelamin" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label>Nama Jabatan</label>
                                                    <input type="text" id="jabatan" name="jabatan"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Status PTKP</label>
                                                    <input type="text" id="sts_ptkp" name="sts_ptkp"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label>WP Luar Negeri</label>
                                                    <input type="text" id="flag_asing" name="flag_asing"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="form-group">
                                                    <label>NPWP</label>
                                                    <input type="text" id="npwp" name="npwp"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Kode Negara</label>
                                                    <input type="text" id="flag_status" name="flag_status"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Kode Pajak</label>
                                                    <input type="text" id="kp" name="kp"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Status Pindah</label>
                                                    <input type="text" id="st_pindah" name="st_pindah"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title"> Jumlah </h3>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 1</label>
                                                        <input type="text" id="A1" name="A1"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 2</label>
                                                        <input type="text" id="A2" name="A2"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 3</label>
                                                        <input type="text" id="A3" name="A3"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 4</label>
                                                        <input type="text" id="A4" name="A4"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 5</label>
                                                        <input type="text" id="A5" name="A5"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 6</label>
                                                        <input type="text" id="A6" name="A6"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 7</label>
                                                        <input type="text" id="A7" name="A7"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 8</label>
                                                        <input type="text" id="A8" name="A8"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 9</label>
                                                        <input type="text" id="A9" name="A9"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 10</label>
                                                        <input type="text" id="A10" name="A10"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 11</label>
                                                        <input type="text" id="A11" name="A11"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 12</label>
                                                        <input type="text" id="A12" name="A12"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 13</label>
                                                        <input type="text" id="A13" name="A13"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 14</label>
                                                        <input type="text" id="A14" name="A14"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 15</label>
                                                        <input type="text" id="A15" name="A15"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 16</label>
                                                        <input type="text" id="A16" name="A16"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 17</label>
                                                        <input type="text" id="A17" name="A17"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 18</label>
                                                        <input type="text" id="A18" name="A18"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 19</label>
                                                        <input type="text" id="A19" name="A19"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Jumlah 20</label>
                                                        <input type="text" id="A20" name="A20"  class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-tittle"> Data Pemotong </h3>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>NPWP Pemotong</label>
                                                    <input type="text" id="npwppemungut" name="npwppemungut"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Nama Pemotong</label>
                                                    <input type="text" id="namapemungut" name="namapemungut"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Tanggal Bukti</label>
                                                    <input type="text" id="tgl_bukti" name="tgl_bukti"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn" type="submit" >Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Perhatian</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                   Apakah Anda Yakin Akan di Hapus?
                 </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" name="tombol-hapus" id="tombol-hapus" class="btn btn-danger">Hapus</button>
                </div>
                 </form>
              </div>
            </div>
          </div>



<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js" integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
                  $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });
              });

    $(document).ready(function(){
           var oTable= $('#dataKar').DataTable({
            ordering: false,
            processing: true,
            serverSide: true,
            scrollY: 400,
            scrollX:1200,
            ajax :{
              url: "{{url('spt/getData')}}",
              type:'GET',
            //   dataSrc:''
            },
            columns: [
              {data:'kode_form', },
              {data:'tahun_pajak',},
              {data:'pembetulan'},
              {data:'no_urut'},
              {data:'npwp'},
              {data:'nik'},
              {data:'nama'},
              {
              data      : 'nama',
              render    : function(data){
                return "<a href='' class=''><i class='la btn-group la-file-pdf-o'></i> <span class='badge bg-inverse-success'>PDF </span></a>"
                       ;
              },
              className : 'text-center'
          },
          {
              data      : 'id',
              render    : function(data){
                return "<div class='btn-group'>" +
                            "<button  type='button' value='"+data+"' class='text-primary btn editDatas'><li class='la la-edit'></li>Edit</button>" +
                            "<button class='text-danger btn deleteData' type='button' value='" +data+ "' id='" +data+ "'> <li class='la la-trash-o'></li> Delete</button>" +
                        "</div>";
              },
              className : 'text-center'
          },
            ], order:[[0,'asc']]
            });
    });

    $('#formData').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            type : 'POST',
            url  : "{{url('/spt/store')}}",
            data : $('#formData').serialize(),
            success :  function(response){
                $('#add_modals').modal('hide');
                var oTable = $('#dataKar').DataTable();
                oTable.draw(false);
            },
            error: function (data) { //jika error tampilkan error pada console
                            console.log('Error:', data);
                            $('#tombol-simpan').html('Simpan');
                        }
            })
        });
    $('#dataKar').on('click', '.editDatas', function(){
                $.getJSON("spt/getItem"+"/"+ this.value, function(result){
                    $("#id").val(result.id);
                    $("#nama").val(result.nama);
                    $("#nik").val(result.nik);
                    $("#kode_form").val(result.kode_form);
                    $("#tahun_pajak").val(result.tahun_pajak);
                    $("#alamat").val(result.alamat);
                    $("#pembetulan").val(result.pembetulan);
                    $("#masa_perolehan_1").val(result.masa_perolehan_1);
                    $("#masa_perolehan_2").val(result.masa_perolehan_2);
                    $("#no_urut").val(result.no_urut);
                    $("#jlh_tanggungan").val(result.jlh_tanggungan);
                    $("#jk").val(result.jk);
                    $("#sts_ptkp").val(result.sts_ptkp);
                    $("#flag_asing").val(result.flag_asing);
                    $("#jabatan").val(result.jabatan);
                    $("#npwp").val(result.npwp);
                    $("#npwppemungut").val(result.npwppemungut);
                    $("#flag_status").val(result.flag_status);
                    $("#kp").val(result.kp);
                    $("#st_pindah").val(result.st_pindah);
                    $("#namapemungut").val(result.namapemungut);
                    $("#A1").val(result.A1);
                    $("#A2").val(result.A2);
                    $("#A3").val(result.A3);
                    $("#A4").val(result.A4);
                    $("#A5").val(result.A5);
                    $("#A6").val(result.A6);
                    $("#A7").val(result.A7);
                    $("#A8").val(result.A8);
                    $("#A9").val(result.A9);
                    $("#A10").val(result.A10);
                    $("#A11").val(result.A11);
                    $("#A12").val(result.A12);
                    $("#A13").val(result.A13);
                    $("#A14").val(result.A14);
                    $("#A15").val(result.A15);
                    $("#A16").val(result.A16);
                    $("#A17").val(result.A17);
                    $("#A18").val(result.A18);
                    $("#A19").val(result.A19);
                    $("#A20").val(result.A20);
                    $("#tgl_bukti").val(result.tgl_bukti);
                    $('#add_modals').modal('show');
                });
            });
        $('#dataKar').on('click', '.deleteData', function(){
        dataId = $(this).attr('id');
        $('#deleteModal').modal('show');
        });

        $('#tombol-hapus').click(function () {
            $.ajax({
                url: "{{url('/spt/delete/')}}"+"/"+ dataId, //eksekusi ajax ke url ini
                type: 'DELETE',
                data : "id=" + dataId + '&_token={{ csrf_token() }}',
                beforeSend: function () {
                    $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#deleteModal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#dataKar').dataTable();
                        oTable.fnDraw(false); //reset datatable
                    });
                }
            })
        });
    </script>
@endsection
