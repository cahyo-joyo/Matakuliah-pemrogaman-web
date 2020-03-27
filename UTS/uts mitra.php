<!DOCTYPE html>
<html>
<head>
	<title> UTS </title>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	$(".sembunyi").click(function(){$("#foto").hide("slow")});
	$(".tampil").click(function(){$("#foto").show("slow")});

	$(".sembunyi1").click(function(){$("#foto1").hide("slow")});
	$(".tampil1").click(function(){$("#foto1").show("slow")});
	});
	</script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrap">
		<div class="header">
		<center>
			<h1>Kumpul.in</h1>
			<p>Website yang berisi informasi tentang pengolahan sampah</p>
		</center>			
			
		</div>
		<div class="menu">
			<ul>
				<li><a href="uts home.php">Home</a></li>
				<li><a href="uts jemput.php">Jemput Sampah</a></li>
				<li><a href="uts harga.php">harga Sampah</a></li>
				<li><a href="uts edukasi.php">Edukasi</a></li>
				<li><a href="uts mitra.php">Mitra Kami</a></li>
			</ul>
		</div>
		<div class="badan">			
			<div class="sidebar">
				<ul>
					<li><a href="uts home.php">Home</a></li>
					<li><a href="uts daftar.php">Pendaftaran Mitra</a></li>
					<li><a href="uts tentang.php">Tentang Kami</a></li>				
				</ul>
				<div class="p1">
				<center><button class="sembunyi">sembunyikan</button>
				<button class="tampil">tampilkan</button>
				<a href="https://www.youtube.com/watch?v=pnuiEGuThsI">
				<img id="foto" src="yt1.png" width="220" height="135">
				Seberapa Banyak Sampah Plastik Di Dunia?</center></a>
				<br>
				</div>
				<div class="p1">
				<center><button class="sembunyi1">sembunyikan</button>
				<button class="tampil1">tampilkan</button>
				<a href="https://www.youtube.com/watch?v=4UelvJjrdGE">
				<img id="foto1" src="yt2.png" width="220" height="135">
				Pengelolaan sampah : Reduce, Reuse, Recycle</center></a>
				</div>
			</div>
			<div class="content">
			<center>
			<table border="3" width="600">
				<tr>
					<th>No</th>
					<th>NIK</th>
					<th>NAMA</th>
					<th>ALAMAT</th>
					<th>TGL LAHIR</th>
					<th>NO TELP</th>
				</tr>
				<?php
				include 'koneksi.php';
				$no = 1;
				$data = mysqli_query($conn, "select * from mitra");
				while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nik']; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['alamat']; ?></td>
					<td><?php echo $d['lahir']; ?></td>
					<td><?php echo $d['telp']; ?></td>
				</tr>
				<?php
			}
				?>
			</table>
			</center>
			</div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			hubungi kami <br>
			<a href="#">Kumpul.in</a><br>
			+62 8123456789 (admin)
		</div>
	</div>
</body>
</html>