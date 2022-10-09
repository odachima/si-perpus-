<?php 
include 'inc_koneksi.php';
$id = $_POST['ID'];
$title = $_POST['Title'];
$author = $_POST['Author'];
$publisher = $_POST['Publisher'];
$category = $_POST['Category'];
$year = $_POST['Year'];
$status = $_POST['Status'];
$type = $_POST['Type'];
$condition = $_POST['Condition'];

 
mysqli_query($koneksi,"INSERT INTO databuku VALUES('$id','$title','$author','$publisher','$category','$year','$status','$type','$condition')");
 
header("location:admin_depan.php?pesan=input");
?>
