@extends('layout.admin.mainlayout')
@section('content')

<div class="page-wrapper">
<div class="content container-fluid">

<!-- Page Header -->
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">Data Pengguna Aplikasi Mobile</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Aplikasi Mobile</a></li>
                <li class="breadcrumb-item active">Data Pengguna Aplikasi</li>
            </ul>
        </div>
    </div>
    <button class="btn btn-success" id="tombol-tambah">Add Data</button>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-nowrap able-striped mb-0 " id="dataKar">
                <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">ex.Badge</th>
                        <th class="text-center" >Password</th>
                        <th class="tex-center">Action</th>
                    </tr>
                </thead>
            </table>
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
                        <form id="formData">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" id="name" name="name"  class="form-control">
                                        <input type="hidden" id="id" name="id"  class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Ex Badge</label>
                                        <input type="text" placeholder="Masukan Ex Badge" id="badge" name="badge" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="Text" placeholder="Password" name="password" id="password" class="form-control">
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
            scrollY: 400,
            ajax :{
              url: "{{url('userMob/getData')}}",
              type:'GET',
            //   dataSrc:''
            },
            columns: [
              {data:'name', },
              {data:'badge'},
              {data:'password',},
          {
              data      : 'id',
              render    : function(data){
                return "<div class='btn-group'>" +
                            "<button  type='button' value='"+data+"' class='text-primary btn editData'><li class='la la-edit'></li>Edit</button>" +
                            "<button class='text-danger btn deleteData' type='button' value='" +data+ "' id='" +data+ "'> <li class='la la-trash-o'></li> Delete</button>" +
                        "</div>";
              },
              className : 'text-center'
          },
            ], order:[[0,'asc']]
            });
    });

    $('#tombol-tambah').click(function () {
            $('#button-simpan').val("create-post"); //valuenya menjadi create-post
            $('#id').val(''); //valuenya menjadi kosong
            $('#formData').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul').html("Tambah Pengguna Baru"); //valuenya tambah pegawai baru
            $('#add_modal').modal('show'); //modal tampil
        });
    

        $('#dataKar').on('click', '.deleteData', function(){
        dataId = $(this).attr('id');
        $('#deleteModal').modal('show');
        });

        $('#tombol-hapus').click(function () {
            $.ajax({
                url: "{{url('userMob/delete/')}}"+"/"+ dataId, //eksekusi ajax ke url ini
                type: 'GET',
                data : "id=" + dataId + '&_token={{ csrf_token() }}',
                beforeSend: function () {
                    $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#deleteModal').modal('hide'); //sembunyikan konfirmasi modal
                        var soTable = $('#dataKar').dataTable();
                        soTable.fnDraw(false); //reset datatable
                    });
                }
            })
        });

        $('#formData').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            type : 'POST',
            url  : "{{url('userMob/register')}}",
            data : $('#formData').serialize(),
            success :  function(response){
                $('#add_modal').modal('hide');
                var soTable = $('#dataKar').dataTable();
                soTable.fnDraw(false);
            },
            error: function (data) { //jika error tampilkan error pada console
                            console.log('Error:', data);
                            $('#tombol-simpan').html('Simpan');
                        }
            })
        });

    $('#dataKar').on('click', '.editData', function(){
                $.getJSON("userMob/getItem"+"/"+ this.value, function(result){
                    $("#id").val(result.id);
                    $("#name").val(result.name);
                    $("#badge").val(result.badge);
                    $("#password").val(result.password);
                    $('#add_modal').modal('show');
                });
            });

</script>

@endsection