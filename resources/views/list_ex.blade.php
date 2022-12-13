@extends('layout.admin.mainlayout')
@section('content')

<div class="page-wrapper">

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Data Diri Ex Karyawan</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Master Profile</a></li>
                        <li class="breadcrumb-item active">Data Diri Ex Karyawan</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{url('export_excel')}}" class="btn  btn-success" ><li class="la la-file-excel-o"></li> <span> EXPORT DATA </span></a>
                </div>
            </div>
        </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-nowrap table-striped custom-table mb-0 " id="dataKar">
                                <thead>
                                    <tr>
                                        <th rowspan="2"class="text-center">Nama</th>
                                        <th rowspan="2"class="text-center">Ex.Badge</th>
                                        <th rowspan="2"class="text-center">Tempat Lahir</th>
                                        <th rowspan="2" class="text-center">Tanggal Lahir</th>
                                        <th rowspan="2" class="text-center">NIK</th>
                                        <th rowspan="2" class="text-center">No KK</th>
                                        <th rowspan="2" class="text-center">Status Pernikahan</th>
                                        <th rowspan="2" class="text-center">Tanggal Cerai</th>
                                        <th rowspan="2" class="text-center">Status Pensiun</th>
                                        <th colspan="4" class="text-center">Alamat</th>
                                        <th rowspan="2">No. Hp</th>
                                        <th colspan="3">Uang Pensiun dibayar melalui</th>
                                        <th rowspan="2" class="text-center">action</th>
                                        <tr>
                                            <th>Kelurahan</th>
                                            <th>Kecamatan</th>
                                            <th>Kota</th>
                                            <th>Provinsi</th>
                                            <th>No Rekening</th>
                                            <th>Bank</th>
                                            <th>Atas Nama</th>
                                        </tr>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

                <div id="add_modal" class="modal custom-modal fade" role="dialog" aria-hidden="true">
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
                                                <h3 class="card-title"> Data Pribadi </h3>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" id="name" name="name" value="" class="form-control">
                                                            <input type="hidden" id="id" name="id" value="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>ExBadge</label>
                                                            <input type="text" placeholder="exBadge" id="badge" name="badge" value="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <label>Tempat Lahir</label>
                                                            <input type="text" id="tmpt_lahir" name="tmpt_lahir"  placeholder="Tempat Lahir" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Tanggal Lahir</label>
                                                            <input type="date" id="tgl_lahir" name="tgl_lahir"  placeholder="Tempat Lahir" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>NIK</label>
                                                            <input type="text" id="nik" name="nik"  placeholder="NIK" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>NO KK</label>
                                                            <input type="text" id="no_kk" name="no_kk"  placeholder="NO KK" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <input type="text" id="alamat" name="alamat"  placeholder="Alamat" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Kode Pos</label>
                                                            <input type="text" id="kode_pos" name="kode_pos"  placeholder="Kode Pos" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Kelurahan</label>
                                                            <input type="text" id="kel" name="kel"  placeholder="Kelurahan" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Kecamatan</label>
                                                            <input type="text" id="kec" name="kec"  placeholder="Kecamatan" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Kota/Kabupaten</label>
                                                            <input type="text" id="kab_kot" name="kab_kot"  placeholder="Kota/Kabupaten" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Provinsi</label>
                                                            <input type="text" id="provinsi" name="provinsi"  placeholder="Provinsi" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>No Handphone/No Telp</label>
                                                            <input type="text" id="no_hp" name="no_hp"  placeholder="No Handphone/No Telp" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
											<div class="card-body">
                                                <h3 class="card-title"> Uang Pensiuan dibayar Melalui </h3>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Bank</label>
                                                            <input type="text" id="bank" name="bank"  class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Atas Nama</label>
                                                            <input type="text" id="atas_nama" name="atas_nama"  class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>No Rekening</label>
                                                            <input type="text" id="no_rek" name="no_rek"  class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
											<div class="card-body">
                                                <h3 class="card-title"> Pernikahan </h3>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Status Pernikahan</label>
                                                            <input type="text" id="st_pernikahan" name="st_pernikahan"  class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Tanggal Menikah</label>
                                                            <input type="date" id="tgl_mnkh" name="tgl_mnkh"  class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Tanggal Cerai</label>
                                                            <input type="date" id="tgl_cerai" name="tgl_cerai"  class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Tanggal Meniggal</label>
                                                            <input type="date" id="mniggal" name="mniggal"  class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>NPWP</label>
                                                <input type="text" id="npwp" name="npwp"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Status Pensiun</label>
                                                <input type="text" id="st_pensiun" name="st_pensiun"  class="form-control">
                                                <input type="hidden" id="user_id" name="user_id"  class="form-control">
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

<script type="text/javascript">
    $(document).ready(function () {
                  $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });
              });

$(document).ready( function () {
var oTable= $('#dataKar').DataTable({
            ordering: false,
            processing: true,
            serverSide: true,
            scrollY: 390,
            scrollX:900,
            ajax :{
              url: "{{url('getData')}}",
              type:'GET',
            //   dataSrc:''
            },
            columns: [
              {data:'name', name:'name'},
              {data:'badge', name:'badge'},
              {data:'tmpt_lahir', name:'tmpt_lahir'},
              {data:'tgl_lahir', name:'tgl_lahir'},
              {data:'nik', name:'nik'},
              {data:'no_kk', name:'no_kk'},
              {data:'st_pernikahan', name:'st_pernikahan'},
              {data:'tgl_cerai', name:'tgl_cerai'},
              {data:'st_pensiun', name:'st_pensiun'},
              {data:'kel' ,name:'kel'},
              {data:'kec' ,name:'kec'},
              {data:'kab_kot', name:'kab_kot'},
              {data:'provinsi'},
              {data:'no_hp'},
              {data:'no_rek'},
              {data:'bank'},
              {data:'atas_nama'},
              {
              data      : 'id',
              render    : function(data){
                return "<div class='btn-group'>" +
                            "<button value='" +data+ "' type='button' class='text-primary btn editData'><li class='la la-edit'></li>Edit</button>" +
                            "<button class='text-danger btn deleteData' type='button'value='" +data+ "' id='"+data+"'> <li class='la la-trash-o'></li>Delete</button>" +
                        "</div>";
              },
              className : 'text-center'
          },
            ], order:[[0,'asc']]

    });

    $('#formData').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            type : 'POST',
            url  : "{{url('List_Ex')}}",
            data : $('#formData').serialize(),
            success :  function(response){
                $('#add_modal').modal('hide');
                oTable.draw(false);
            },
            error: function (data) { //jika error tampilkan error pada console
                            console.log('Error:', data);
                            $('#tombol-simpan').html('Simpan');
                        }
            })
        });
    });

    $('#dataKar').on('click', '.editData', function(){
                $.getJSON("list_ex/getItem"+"/"+ this.value, function(result){
                    $("#id").val(result.id);
                    $("#name").val(result.name);
                    $("#badge").val(result.badge);
                    $("#tmpt_lahir").val(result.tmpt_lahir);
                    $("#tgl_lahir").val(result.tgl_lahir);
                    $("#nik").val(result.nik);
                    $("#no_kk").val(result.no_kk);
                    $("#alamat").val(result.alamat);
                    $("#kel").val(result.kel);
                    $("#kec").val(result.kec);
                    $("#kab_kot").val(result.kab_kot);
                    $("#provinsi").val(result.provinsi);
                    $("#kode_pos").val(result.kode_pos);
                    $("#no_hp").val(result.no_hp);
                    $("#atas_nama").val(result.atas_nama);
                    $("#no_rek").val(result.no_rek);
                    $("#bank").val(result.bank);
                    $("#npwp").val(result.npwp);
                    $("#st_pensiun").val(result.st_pensiun);
                    $("#st_pernikahan").val(result.st_pernikahan);
                    $("#tgl_mnkh").val(result.tgl_mnkh);
                    $("#tgl_cerai").val(result.tgl_cerai);
                    $("#mniggal").val(result.mniggal);
                    $("#user_id").val(result.user_id);
                    $('#add_modal').modal('show');
                });
            });
    $('#dataKar').on('click', '.deleteData', function(){
        dataId = $(this).attr('id');
        $('#deleteModal').modal('show');
        });

        $('#tombol-hapus').click(function () {
            $.ajax({
                url: "List_Ex/"+ dataId, //eksekusi ajax ke url ini
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
