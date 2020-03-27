<?php
if (empty($_POST['nama']) or empty($_POST['nama'])or empty($_POST['alamat']) 
	or empty($_POST['lahir']) or empty($_POST['telp'])) {
	header("Location:kurang.php");
} else {
include 'koneksi.php';
$nik	= $_POST['nik'];
$nama	= $_POST['nama'];
$alamat	= $_POST['alamat'];
$lahir	= $_POST['lahir'];
$telp	= $_POST['telp'];
$query="INSERT INTO mitra SET nik='$nik', nama='$nama', alamat='$alamat', lahir='$lahir', telp='$telp'";
mysqli_query($conn, $query);
header("location:uts daftar.php");
}
?>