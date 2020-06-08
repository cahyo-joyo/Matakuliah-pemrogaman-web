<?php 
include 'config/config.php';

if(isset($_POST['masuk'])){
	$nama=$_POST['nama'];
	$password=$_POST['password'];

	if(ceklogin($nama,$password)){
		echo "<script>window.location.href='user.php'</script>";
	}else{
		echo "
		<style>
			body{
				 background: linear-gradient(-75deg, red, #B22222);
			}
			h1{
				color: #fff;
			}
		</style>

		<body>
		<center>
		<h1> MAAF ANDA GAGAL LOGIN</h1>
		<h3> Silahkan Coba Kembali </h3>
		<hr>
		<a href='awal.php'>Kembali</a>
		</center>
		</body>";
	}
}
 ?>