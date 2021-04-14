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