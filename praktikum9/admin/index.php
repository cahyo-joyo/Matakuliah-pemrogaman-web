<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<body>
	<center>
	<h2>Silahkan Login Terlebih Dahulu</h2>
	<?php
	if(isset ($_GET['pesan'])){
		if ($_GET['pesan'] == "gagal"){
			echo "Login Gagal!!! username dan password salah!!!";
		} else if ($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		} else if ($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		} 
	}
	?>
	<br>
	<br>
	<form method="post" action="ceklogin.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan Username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan Password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="Login"></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>