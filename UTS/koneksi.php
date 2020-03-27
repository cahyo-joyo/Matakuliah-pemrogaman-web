<!DOCTYPE html>
<html>
<head>
	<title> Koneksi Database </title>
</head>
<body>
	<?php
	$conn = mysqli_connect("localhost","root","","utsweb");

	//check connection
	if (mysqli_connect_error()) {
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
		exit();
	}
	?>
</body>
</html>