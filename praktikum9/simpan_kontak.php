<?php
//$vid=$_POST['id']
$vnama  =$_POST['nama'];
$vjkel  =$_POST['jkel'];
$vemail =$_POST['email'];
$valamat=$_POST['alamat'];
$vkota  =$_POST['kota'];
$vpesan =$_POST['pesan'];

include 'admin/koneksi.inc.php';

$sql="INSERT INTO praktikum9 set nama='$vnama',
						jkel='$vjkel',
						email='$vemail',
						alamat='$valamat',
						kota='$vkota',
						pesan='$vpesan'";
mysqli_query($conn, $sql) or die ("Proses simpan ke database gagal");
mysqli_close();
header("location:kontak.html");
?>