<?php 
include "koneksi.php";
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"SELECT * FROM situbondo WHERE  id='$id'");
$as = mysqli_fetch_array($sql);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>update</title>
 	<style type="text/css">
 		form{
			padding:70px;
			background:rgba(0,0,0,0.5);
			width: 900px;
			margin-top: 40px;
			margin-left: 165px;
			border-radius: 10px;
			color: white;
			text-align: center;
		}
 	</style>
 </head>
 <body>
 <form method="POST">
	<p><input type="text" name="nama" class="nama" value="<?=$as['nama'];?>" placeholder="nama anda..."></p><br><br>
	<p><input type="email" name="email" class="email" value="<?=$as['email'];?>" placeholder="email anda..."></p><br><br>
	<p><textarea type="text" name="komentar" class="komentar"  placeholder="komentar anda..."><?=$as['komentar'];?></textarea></p><br><br>
	<input type="submit" name="btn">
</form>
 </body>
 </html>

 <?php 
if (isset($_POST['btn'])) {
	$sql = mysqli_query($koneksi,"UPDATE situbondo SET nama='$_POST[nama]',email='$_POST[email]',komentar='$_POST[komentar]'WHERE id='$id'");
	if ($sql){
		header('location:admin.php');
	}
}
  ?>