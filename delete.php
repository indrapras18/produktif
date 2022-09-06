<?php 
include 'koneksi.php';
$id = $_GET['id'];
$sql=mysqli_query($koneksi, "DELETE FROM situbondo where id='$id'");
if ($sql) {
	header('location:admin.php');
}
 ?>