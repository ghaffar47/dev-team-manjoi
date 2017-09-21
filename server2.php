<?php 
	
	$errors = "";
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "smart-team");

	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {

		if (empty($_POST['sekolah'])) {
			$errors = "You must fill in the sekolah";
		}else{
			$sekolah = $_POST['sekolah'];
			$kod_sekolah = $_POST['kod_sekolah'];
			$nama_pelapor = $_POST['nama_pelapor'];
			$jawatan_pelapor = $_POST['jawatan_pelapor'];
			$telefon_pelapor = $_POST['telefon_pelapor'];
			$email = $_POST['email'];
			$keterangan = $_POST['keterangan'];
			$no_tiket = $_POST['no_tiket'];
			$tarikh = $_POST['tarikh'];
			$num = rand(100000,999999);
			$cod = "ST";
    		$randnum = $cod . $num;
			$query = "INSERT INTO permohonan (sekolah, kod_sekolah, nama_pelapor, jawatan_pelapor, telefon_pelapor, email, keterangan, no_tiket, tarikh) VALUES ('$sekolah', '$kod_sekolah', '$nama_pelapor', '$jawatan_pelapor', '$telefon_pelapor', '$email', '$keterangan', '$randnum', now())";
			$retval = mysqli_query($db, $query);
			
			header('location: permohonan_baru.php');
		}
	}	

	// delete task
	if (isset($_GET['del_sekolah'])) {
		$id = $_GET['del_sekolah'];

		mysqli_query($db, "DELETE FROM permohonan WHERE id_mohon=".$id_mohon);
		header('location: permohonan_baru.php');
	}

	// select all tasks if page is visited or refreshed
	$sekolah = mysqli_query($db, "SELECT * FROM permohonan");
	
	//random number
	
if (count($errors) == 0) {
			
			$query = "INSERT INTO permohonan (sekolah, kod_sekolah, nama_pelapor, jawatan_pelapor, telefon_pelapor, email, keterangan, no_tiket, tarikh) VALUES ('$sekolah', '$kod_sekolah', '$nama_pelapor', '$jawatan_pelapor', '$telefon_pelapor', '$email', '$keterangan', '$randnum', now())";
			mysqli_query($db, $query);

			
			$_SESSION['success'] = "You are now logged in";
			header('location: permohonan_baru.php');
		}

	


?>