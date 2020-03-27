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
			<center><table border="3" width="600">
				<thead>
				<tr>	<th>No</th>
						<th>Nama Jenis Sampah</th>
						<th>Harga/Kg</th>
				</tr>
				</thead>
				<tbody>
				<tr>	<td>01</td>
						<td>Kertas HVS</td>
						<td>Rp. 1000,-/Kg</td>
				</tr>
				<tr>	<td>02</td>
						<td>Isi Buku Tulis Putih, Buku Cetak Putih</td>
						<td>Rp. 1000,-/Kg</td>
				</tr>
				<tr>	<td>03</td>
						<td>Isi Buku Tulis Berwarna, Buku Cetak Berwarna</td>
						<td>Rp. 800,-/Kg</td>
				</tr>
				<tr>	<td>04</td>
						<td>Sampul Buku, Majalah, Karton Berwarna</td>
						<td>Rp. 500,-/Kg</td>
				</tr>
				<tr>	<td>05</td>
						<td>Tempat Telur, otak Kemasan minuman (Ex: Susu, Teh, Dll)</td>
						<td>Rp. 300,-/Kg</td>
				</tr>				
				<tr>	<td>06</td>
						<td>Koran (LKS, Buram)</td>
						<td>Rp. 850,-/Kg</td>
				</tr>
				<tr>	<td>07</td>
						<td>Koran Bagus (Bacaan)</td>
						<td>Rp. 1000,-/Kg</td>
				</tr>
				<tr>	<td>08</td>
						<td>Karton Coklat/Kardus</td>
						<td>Rp. 1200,-/Kg</td>
				</tr>
				<tr>	<td>09</td>
						<td>Botol Plastik Bersih</td>
						<td>Rp. 2000,-/Kg</td>
				</tr>
				<tr>	<td>10</td>
						<td>Botol Plastik Kotor</td>
						<td>Rp. 1000,-/Kg</td>
				</tr>
				<tr>	<td>11</td>
						<td>Gelas Mineral Plastik Bersih</td>
						<td>Rp. 3000,-/Kg</td>
				</tr>
				<tr>	<td>12</td>
						<td>Gelas Mineral Plastik Kotor</td>
						<td>Rp. 1000,-/Kg</td>
				</tr>
				<tr>	<td>13</td>
						<td>Ale-ale, Mizon</td>
						<td>Rp. 1200,-/Kg</td>
				</tr>
				<tr>	<td>14</td>
						<td>Karah Botol Plastik (Shampo, Sabun, Handbody)</td>
						<td>Rp. 200,-/Kg</td>
				</tr>
				<tr>	<td>15</td>
						<td>Ember/Pot Bunga Hitam/Paralon</td>
						<td>Rp. 500,-/Kg</td>
				</tr>
				<tr>	<td>16</td>
						<td>Galon/Derigen</td>
						<td>Rp. 2000,-/Kg</td>
				</tr>
				<tr>	<td>17</td>
						<td>Kaleng Minuman</td>
						<td>Rp. 8000,-/Kg</td>
				</tr>
				<tr>	<td>18</td>
						<td>Kaleng Keras (Ex: Susu, Kue, Semprot Nyamuk, Dll)</td>
						<td>Rp. 1000,-/Kg</td>
				</tr>
				</tbody>
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