<!DOCTYPE html>
<html>
<head>
	<title> Koneksi Database </title>
</head>
<body>
<h1> Koneksi database MySQL </h1>
	<?php
	$conn = mysqli_connect("localhost","root","","myDB");

	//check connection
	if (mysqli_connect_error()) {
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
		exit();
	} else {
		echo "<p>Anda sudah terkoneksi dengan database</p>";
	}
	?>
</body>
</html>