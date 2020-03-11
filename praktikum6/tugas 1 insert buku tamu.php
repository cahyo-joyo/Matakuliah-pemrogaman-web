<?php
include "koneksi.php";

//Create Database
$sql = "INSERT INTO buku_tamu (nama, email, isi)
VALUES ('cahyo', 'cahyo@gmail.com', 'menemui manager pemasaran')";
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>