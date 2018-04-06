
<html>
	<head>
		<title>PHP Search Form</title>
	</head>
	<body>
		<form method="post" action="search.php">
			<input type="text" name="q" placeholder="Search Query...">
			<select name="column">
				<option value="">Select Filter</option>
				<option value="firstName">nombor tiket</option>
				<option value="lastName">kod sekolah</option>
			</select>
			<input type="submit" name="submit" value="Find">
            
		</form>
    <?php
	if (isset($_POST['submit'])) {
		$connection = new mysqli("localhost", "root", "", "smart-team");
		$q = $connection->real_escape_string($_POST['q']);
		$column = $connection->real_escape_string($_POST['column']);
		
		
		
		if ($column == "" || ($column != "no_tiket"))
			$column = "no_tiket";
			

		$sql = $connection->query("SELECT * FROM permohonan WHERE $column LIKE '%$q%'");
		if ($sql->num_rows > 0) {
			while ($data = $sql->fetch_array())
				echo "NOMBOR TIKET : " . $data['no_tiket'] ."<br>"."KOD SEKOLAH : " . $data['kod_sekolah'] ."<br>"."STATUS PERMOHONAN : " . $data['status']."<br>";
		
		} else
			echo "Your search query doesn't match any data!";
			
		
		
	}
	?>
	</body>
</html>
