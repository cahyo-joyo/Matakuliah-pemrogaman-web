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
				<center><img src="plastik.png" width="500" height="300"></center>
				<p align="justify">Plastik terus mencekik planet kita. Bisakah kamu membayangkan dunia tanpa plastik? Plastik sekali pakai terus mengotori lingkungan kita bahkan sudah sering kita lihat gambaran satwa-satwa di sekitar laut yang mati akibat memakan plastik.<br><br>

				Tidak hanya satwa, plastik pun masuk ke dalam tubuh manusia dalam bentuk mikroplastik lewat makanan, minuman, bahkan udara yang kita hirup. Ya, memasuki tubuhmu!<br><br>

				Hey, ada kabar baik! Kita bisa bantu membebaskan bumi dari jeratan plastik. Mulai dari perubahan gaya hidup yang harus dimulai dari sekarang juga, sampai mendesak perusahaan untuk berinovasi dan meninggalkan plastik sekali pakai dan mendesak pemerintah untuk membuat aturan mengenai plastik sekali pakai.</p>
				<br><br><br>
				<h2><center>Kumpul.in</center></h2>
				<p align="justify"> Kumpul.in merupakan sebuat platform yang berita-cita mengurangi sampah yang ada di Indonesia. Kami akan membuat bank sampah di seluruh kota di Indonesia dan mitra yang tersebar dimana-mana. Kami juga berupaya untuk membuat masyarakat Indonesia senang akan mengolah sampah.<br><br>

				Kami mempunyai sistem yaitu sampah ditukar menjadi uang. Teknisnya masyarakat membawa sampah jenis apapun dan sudah dipisah sesuai jenisnya bisa diserahkan di bank sampah kami atau dapat dijemput langsung kerumah dengan menelepon kami dan mitra kami akan menjemputnya.</p>
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