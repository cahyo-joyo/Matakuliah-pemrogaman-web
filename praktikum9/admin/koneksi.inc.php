<?php
$host="localhost";
$username="root";
$password="";
$conn = mysqli_connect($host, $username, $password);
if(!$conn){
	die("Koneksi Gagal : ". mysqli_connect_error());
}
$conndb = mysqli_select_db($conn, "praktikum9_web");
if(!$conndb){
	die("Koneksi ke Database Gagal : ". mysqli_error($conn));
}
?>