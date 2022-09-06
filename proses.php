<?php 
ob_start();

include "koneksi.php";
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];

if (isset($_SESSION['username'])) header("location:index.php");

 //proses login
	if (isset($_POST['done'])) {
		
		$sql_login = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$user' AND password ='$pass'");
		$cek = mysqli_num_rows($sql_login);

		if ($cek > 0) {
			
			$_SESSION['status'] = 'login';
			$_SESSION['username'] = $user;
			$_SESSION['password'] = $pass;

			if ($user == 'admin') {
				header("location:admin.php");
			}else {
				header("location:index.php");
			}
			
		}else{
			header("location:login.php");
		}

	}

mysqli_close($koneksi);
ob_end_flush();
?>
