<?php
include'koneksi.php';
if (isset($_POST['login_user'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = mysql_query("SELECT*FROM user WHERE name_user='$username' AND password='$password'");
	if (mysql_num_rows($query)!==0) {
		
		$get = mysql_fetch_array($query);
		$level = $get['level_user'];
		if($level=="admin") {
			header("location:admin.php");
		} elseif($level=="sekolah") {
			header("location:Utama.php");
		}
		elseif($level=="ppd") {
			header("location:senarai_permohonan.php");
		}
		elseif($level=="jtk") {
			header("location:tugasan.php");
		}
	} else {
		echo "Login gagal";
	}
} else {
		header("location:login.php");
}
?>
