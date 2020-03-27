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
				<form method="post" action="simpan.php">
				<table width="400" align="center" cellpadding="2" cellspacing="2">
					<h2>PENDAFTARAN MITRA KUMPUL.IN</h2>
					<h3>Dimohon Untuk Mengisi Data Dengan Benar</h3>
					<tr>
						<td width="200">NIK</td>
						<td><input type="text" name="nik"></td>
					</tr>
					<tr>
						<td width="200">Nama</td>
						<td><input type="text" name="nama"></td>
					</tr>
					<tr>
						<td width="200">Alamat Detail</td>
						<td><input type="text" name="alamat"></td>
					</tr>
					<tr>
						<td width="200">Tanggal Lahir</td>
						<td><input type="date" name="lahir"></td>
					</tr>
					<tr>
						<td width="200">No Telp</td>
						<td><input type="text" name="telp"></td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="btnsimpan" value="simpan">	
						</td>
						<script language="javascript">
					window. alert("Semua data yang diisi adalah data yang sebenar-benarnya");
					</script>
					</tr>
					
				</table>
				</form>
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