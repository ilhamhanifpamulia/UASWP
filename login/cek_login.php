<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include('../koneksi/koneksi.php');
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from login_admin where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../admin/admin_home.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:form_login.php?pesan=gagal");
	}	
}else{
	header("location:form_login.php?pesan=gagal");
}
 
?>