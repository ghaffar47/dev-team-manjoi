<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'smart-team');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$level_user = mysqli_real_escape_string($db, $_POST['level_user']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		if (empty($level_user)) { array_push($errors, "Level Pengguna is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO user (username, email, password, level_user) 
					  VALUES('$username', '$email', '$password', '$level_user')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index_admin.php');
		}

	}
	

	// PERMOHONAN BARU
	if (isset($_POST['permohonan_baru'])) {
		// receive all input values from the form
		$nama_pelapor = mysqli_real_escape_string($db, $_POST['nama_pelapor']);
		$jawatan_pelapor = mysqli_real_escape_string($db, $_POST['jawatan_pelapor']);
		$no_hubungi = mysqli_real_escape_string($db, $_POST['telefon_pelapor']);
		$kategori_kerosakan = mysqli_real_escape_string($db, $_POST['kategori_rosak']);
		$keterangan_kerosakan = mysqli_real_escape_string($db, $_POST['keterangan_rosak']);
		$no_laporan = mysqli_real_escape_string($db, $_POST['no_lapor']);
		

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
	

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		
		

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}


		
		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index_admin.php');
			}
			
			else {
				array_push($errors, "Wrong username/password combination");
			}
		}
		
		
	}
?>