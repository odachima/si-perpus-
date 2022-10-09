<?php 
include 'inc_koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$akses_id = $_POST['akses_id'];
$akun_id = $_POST['account_id'];

 
mysqli_query($koneksi,"INSERT INTO datauser VALUES('$akun_id','$username','$password','$akses_id')");
 
header("location:admin_tambah_admin.php?pesan=input");
?>