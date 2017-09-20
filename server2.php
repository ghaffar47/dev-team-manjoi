<?php 
	session_start();

	// variable declaration
	$nama_pelapor = "";
	$jawatan_pelapor    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'smart-team');

	// PERMOHONAN BARU
	if (isset($_POST['permohonan_baru'])) {
		// receive all input values from the form
		$nama_pelapor = mysqli_real_escape_string($db, $_POST['nama_pelapor']);
		$jawatan_pelapor = mysqli_real_escape_string($db, $_POST['jawatan_pelapor']);
		$no_hubungi = mysqli_real_escape_string($db, $_POST['telefon_pelapor']);
		$kategori_kerosakan = mysqli_real_escape_string($db, $_POST['kategori_rosak']);
		$keterangan_kerosakan = mysqli_real_escape_string($db, $_POST['keterangan_rosak']);
		$no_lapor = mysqli_real_escape_string($db, $_POST['no_lapor']);
		

		// form validation: ensure that the form is correctly filled
		if (empty($nama_pelapor)) { array_push($errors, "Sila lengkapkan Nama Pelapor"); }
		if (empty($jawatan_pelapor)) { array_push($errors, "Sila lengkapkan Jawatan Pelapor"); }
		if (empty($telefon_pelapor)) { array_push($errors, "Sila lengkapkan Nama Pelapor"); }
		if (empty($kategori_rosak)) { array_push($errors, "Sila lengkapkan kategori kerosakan"); }

		// Jika Permohonan baru tiada ralat
		if (count($errors) == 0) {
			$query = "INSERT INTO permohonan (nama_pelapor, jawatan_pelapor, telefon_pelapor, kategori_rosak, keterangan_rosak, no_lapor) 
					  VALUES('$nama_pelapor', '$jawatan_pelapor', '$telefon_pelapor', '$kategori_rosak', '$keterangan_rosak', '$no_lapor')";
			mysqli_query($db, $query);

			$_SESSION['success'] = "Berjaya Dihantar";
			header('location: semak_status.php');
		}
		
	}
	

	
?>