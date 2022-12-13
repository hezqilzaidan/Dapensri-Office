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
                    <h3 class="page-title">Fom Verifikasi Data</h3>

</head>

<div class="form-group">
@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
	
				<form action="/verifikasi2/proses" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
			<div class="form-group">
				<div style="margin-bottom: 10rem;">
				<b>File File KTP :</b><br/>
				<input type="file" name="file">
			</div>

			<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>
 
					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
			</div>

			
		</div>
	</div>






















<!-- <!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
</head>
<body>
	<div class="row">
		<div class="container">
			<h2 class="text-center my-5">Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</h2>
			
			<div class="col-lg-8 mx-auto my-5">	
 
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 
				<form action="/upload/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
 
					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
					</div>
 
					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>
 
					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
</body>
</html> -->

@endsection