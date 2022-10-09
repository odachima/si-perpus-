<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'inc_koneksi.php';
 
// menangkap data yang dikirim dari form login

$username = $_POST['username'];
$password = $_POST['password'];
 



 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from datauser where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['akses_id']=="1"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['akses_id'] = "1";
		// alihkan ke halaman dashboard admin
		header("location:admin_depan.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['akses_id']=="2"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['akses_id'] = "2";
		// alihkan ke halaman dashboard pegawai
		header("location:user_depan.php");
 
	
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php");
	}	
}else{
	header("location:login.php");
}
 
?>