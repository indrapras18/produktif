<?php
 $koneksi;
$nameserver="localhost";
$username="root";
$password="";
$namedb="db_situbondo";

$koneksi = mysqli_connect($nameserver,$username,$password,$namedb);

if (!$koneksi) {
	die("koneksi gagal". mysqli_connect_error());
}
 ?>
