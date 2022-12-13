
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Register - Dapensri</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/Logo.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="css/style.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.min.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body class="account-page">

		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">

				<div class="container">

					<!-- Account Logo -->
					<div class="account-logo">
						<a href="index.html"><img src="img/logo.png" alt="Dapensri - PSP" ></a>
					</div>
					<!-- /Account Logo -->

					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Register</h3>
							<p class="account-subtitle">Registration to our Dapensri-Office</p>

							<!-- Account Form -->
							<form action={{url('register/post')}} method="POST">
                                @csrf
                                <div class="form-group">
									<label>Nama</label>
									<input class="form-control"  name="name" value="{{old('name')}}" type="text" required>
								</div>
								<div class="form-group">
									<label>Badge</label>
									<input class="form-control " name="badge" value="{{old('badge')}}" type="text" required>
                                    @if ($errors->has('badge'))
                                    <span class="badge bg-inverse-danger">
                                        Badge Sudah Ada
                                    </span>
                                    @endif
								</div>
								<div class="form-group">
									<label>Password</label>
									<input class="form-control " id="inputpass" name="password"  type="password" value="{{old('password')}}" required>
                                </div>
                                <div class="form-group">
									<label>Password Confirmation</label>
									<input class="form-control" name="password_confirmation"  id="inputpass" required type="password">
                                    @if ($errors->has('password'))
                                    <span class="badge bg-inverse-danger">
                                        Password Anda Tidak Sama
                                    </span>
                                    @endif
                                </div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit">Register</button>
								</div>
							</form>
							<!-- /Account Form -->
						</div>
					</div>
                    <div class="account-footer mt-2">
                        <p>IT-Business Patner- &copy Copright-2021</p>
                    </div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

		<!-- Custom JS -->
		<script src="js/app.js"></script>

    </body>
</html>
