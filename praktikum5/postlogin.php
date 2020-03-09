<?php
date_default_timezone_set("Asia/Jakarta");
if (empty($_POST['nama'])or empty($_POST['email'])) {
	header("Location:kurang.php");
} else {
echo "<center>Nama : ".$_POST['nama']."</center><br>";
echo "<center>Email : ".$_POST['email']."</center><br>";
echo "<center> Anda Login pada : </center><br>";
echo "<center> Jam : " .date('H:i:s a'). "</center><br>";
echo "<center> Hari  : " .date('l'). "</center><br>";
echo "<center> Tanggal : " .date('d-m-Y')."</center><br>";
}
?>