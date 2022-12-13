@extends('layout.admin.mainlayout')
@section('content')

<div class="page-wrapper">

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Data Laporan Keuangan</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Master Data</a></li>
                        <li class="breadcrumb-item active">Data Keuangan </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card mb-0">
            <div class="card-body">
               <div class="card-title">
                   <a href="javascript:void(0)" id="tombol-tambah" class="btn btn-success"><i class="la la-file-pdf-o"></i>Tambah Laporan</a>
               </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-nowrap table-striped mb-0 " id="dataKar">
                                <thead>
                                    <tr>
                                        <th class="text-center">Periode</th>
                                        <th class="text-center">Keterangan</th>
                                        <th class="text-center" > File</th>
                                        <th class="text-center" > Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
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
                        <form action="lapKeu/uploadData" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Periode</label>
                                        <input type="date" id="periode" name="periode"  class="form-control">
                                        <input type="hidden" id="id" name="id"  class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input type="text" placeholder="Keterangan" id="ket" name="ket" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Upload File</label>
                                    {{-- <input type="text" name="namaFile" class="form-control"> --}}
                                    <input type="file" placeholder="Pilih File Anda" name="namaFile" id="namaFile" class="form-control">
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
            scrollY: 390,
            ajax :{
              url: "{{url('lapKeu/getData')}}",
              type:'GET',
            //   dataSrc:''
            },
            columns: [
              {data:'periode', name:'periode',className : 'text-center'},
              {data:'ket', name:'ket',className : 'text-center'},
              {
                    data      : 'namaFile',
                    render    : function(data){
                        return  "<a href='dataFile/"+data+"' data-toggle='tooltip' target='_blank'  data-id='"+data+"' data-original-title='Edit' class='edit edit-post'>"+data+"</a>"
                            ;
                    },
                    className : 'text-center'
                },
                {
                    data      : 'id',
                    render    : function(data){
                        return  "<div class='btn-group'>" +
                            "<button  type='button' value='" +data+ "' class='edit text-primary btn editData'><li class='la la-edit'></li>Edit</button>" +
                            "<button class='text-danger btn deleteData' type='button' value='" +data+ "' id='" +data+ "'> <li class='la la-trash-o'></li>Delete</button>" +
                        "</div>";
                    },
                    className : 'text-center'
                },

            ], order:[[0,'asc']]
            });

            $('#tombol-tambah').click(function () {
            $('#id').val(""); //valuenya menjadi kosong
            $('#form-tambah-edit').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul').html("Upload Data Keuangan");
            $('#add_modal').modal('show'); //modal tampil
        });

    });

    $('#dataKar').on('click', '.deleteData', function(){
        dataId = $(this).attr('id');
        $('#deleteModal').modal('show');
        });

        $('#tombol-hapus').click(function () {
            $.ajax({
                url: "{{url('lapKeu/delete/')}}"+"/"+ dataId, //eksekusi ajax ke url ini
                type: 'GET',
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

        $('#dataKar').on('click', '.editData', function(){
                $.getJSON("/getItem"+"/"+ this.value, function(result){
                    $("#id").val(result.id);
                    $("#ket").val(result.ket);
                    $("#periode").val(result.periode);
                    $("#namaFile").val(result.namaFile);
                    $('#add_modal').modal('show');
                });
        });
    </script>
@endsection
