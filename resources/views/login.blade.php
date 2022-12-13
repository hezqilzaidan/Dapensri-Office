
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Login - Dapensri</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/Logo.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="css/login.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.min.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>

        <div id="col-1">
            <div class="centered">
              <div style="margin: auto;background-color: #FFFFFF;border-radius: 250px;padding-bottom:10px; width:250px; height:250px ; box-shadow: 8px 8px 20px rgba(0, 0, 0, 0.25);">
                <img src="img/Logo.png" height="250" width="270" class="center">
              </div>
              <h3 class="epok_definition" style="margin-top:30px">Apa itu DAPEN</h3>
              <h3 class="epok_definition2">Sistem Pengelolaan Data Pensiunan yang dapat membuat proses Pengelolaan Data Pensiunan dapat lebih optimal, lebih mudah, dan lebih fleksibel, termasuk sistem laporan keuangan , SPT pajak dan Pengelolaan penggunaan Aplikasi Mobile Pensiunan.</h3>
            </div>
          </div>

          <!-- Login Page - Kanan -->
          <div id="col-2">
            <div class="centered">
              <div class="text-center">
                <h3 class="login_welcome">Selamat datang di,</h3>
                <h3 class="login_welcome2">ADMIN DAPENSRI</h3>
                <h3 class="login_welcome3">Masuk akun anda untuk melanjutkan</h3>
              </div>

              <!-- Flash Message -->

              <!-- Form Login -->
              <form class="user" action="{{url('login/post')}}" method="POST">
                @csrf
                  <div class="form_container">
                  <input type="username" class="form_input" id="username"  placeholder="Badge" name="badge" required>
                  <div class="invalid-feedback">
                    Please choose a username.
                  </div>
                </div>
                <div class="form_container">
                  <div style="display: flex;">
                    <input type="password" class="password_input" id="password" placeholder="Password" name="password" required>
                    <i class="fa fa-eye c-black" id="togglePassword" style="padding-top:20px;"></i>
                  </div>
                </div>
                <script src="js/dist/app.js"></script>
                <button href="/loginPost" class="btn btn-primary bold-font rounded-radius w-100 login-height" type="submit">Masuk</button>
              </form>
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
