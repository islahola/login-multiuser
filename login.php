<?php 
session_start();
require 'koneksi.php';
$username=$_POST["username"];
$password=$_POST["password"];
$login = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username' AND password = '$password'");
$rowcount = mysqli_num_rows($login);
//var_dump($rowcount); die;
	if ($rowcount === 1) {

		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];

		echo "<script>alert('Anda berhasil masuk');
		window.location.href='?module=indexuser#pos';</script>";
	}else {

		echo "<script>alert('Anda gagal masuk');
		window.location.href='?module=kontak#pos';</script>";
		
	}

 ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Login | Islah Khofifah Nuraini</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/floating-labels.css" rel="stylesheet">
  </head>

  <body>
  <form class="form-signin" action="" method="post">
  <div class="text-center mb-4">
    <img class="mb-4" src="assets/brand/ola.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Silahkan Login</h1>
    <p>Masukan Username dan Password anda</p>
  </div>
  <div class="form-label-group">
    <input name="username" type="text" id="username" class="form-control" placeholder="Username" required autofocus>
    <label for="username">Username</label>
  </div>

  <div class="form-label-group">
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <label for="inputPassword">Password</label>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button name="login" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p>Belum memiliki akun? <a href="signup.php">registrasi</a></p>
  <p class="mt-5 mb-3 text-muted text-center">&copy;2020 | Islah Khofifah</p>
</form>
</body>
</html>
