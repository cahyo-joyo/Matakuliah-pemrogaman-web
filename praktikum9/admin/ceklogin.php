<?php
session_start();
include 'koneksi.inc.php';
$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($conn, "select * from admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);
if ($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("index.php");
} else {
	header("index.php?pesan=gagal");
}
?>
<center>
<form method="post" action="cetak.php">
	<table>
			<tr>
				<td><h2>Selamat Anda Telah Masuk Sebagai Admin</h2></td>
			</tr>
			<tr>
				<td><input type="submit" name="cetak" value="hlmn cetak"></td>
			</tr>
		</table>
</form>
</center>