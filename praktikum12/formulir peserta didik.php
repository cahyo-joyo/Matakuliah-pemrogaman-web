<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style> .warning {color: #FF0000;}</style>
</head>
<body>
<?php
include"koneksi.php";
?>
<?php
$error_nama = "";
$error_kelamin = "";
$error_nisn = "";
$error_nik = "";
$error_tempatlhr = "";
$error_tanggallhr = "";
$error_akta = "";
$error_agama = "";
$error_kewarganegaraan = "";
$error_wna = "";
$error_berkebutuhan = "";
$error_alamat = "";
$error_rt = "";
$error_rw = "";
$error_dusun = "";
$error_kelurahan = "";
$error_kecamatan = "";
$error_kodepos = "";
$error_lintang = "";
$error_bujur = "";
$error_tinggal = "";
$error_transportasi = "";
$error_kks = "";
$error_anak = "";
$error_kps = "";
$error_nokps = "";

$nama = "";
$kelamin = "";
$nisn = "";
$nik = "";
$tempatlhr = "";
$tanggallhr = "";
$akta = "";
$agama = "";
$kewarganegaraan = "";
$wna = "";
$berkebutuhan = "";
$alamat = "";
$rt = "";
$rw = "";
$dusun = "";
$kelurahan = "";
$kecamatan = "";
$kodepos = "";
$lintang = "";
$bujur = "";
$tinggal = "";
$transportasi = "";
$kks = "";
$anak = "";
$kps = "";
$nokps = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if (empty($_POST["nama"])) 
	{
		$error_nama = "Nama tidak boleh kosong";
	}
	else 
	{
		$nama = cek_input($_POST["nama"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $nama)) 
		{
			$error_nama = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["kelamin"])) 
	{
		$error_kelamin = "Kelamin tidak boleh kosong";
	}
	else 
	{
		$kelamin = cek_input($_POST["kelamin"]);
	}
	if (empty($_POST["nisn"])) 
	{
		$error_nisn = "NISN tidak boleh kosong";
	}
	else 
	{
		$nisn = cek_input($_POST["nisn"]);
		if (!is_numeric($nisn)) 
		{
			$error_nisn = "NISN hanya boleh angka";
		}
	}
	if (empty($_POST["nik"])) 
	{
		$error_nik = "NIK tidak boleh kosong";
	}
	else 
	{
		$nik = cek_input($_POST["nik"]);
		if (!is_numeric($nik)) 
		{
			$error_nik = "NIK hanya boleh angka";
		}
	}
	if (empty($_POST["tempatlhr"])) 
	{
		$error_tempatlhr = "Tempat lahir tidak boleh kosong";
	}
	else 
	{
		$tempatlhr = cek_input($_POST["tempatlhr"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $tempatlhr)) 
		{
			$error_tempatlhr = "Inputan hanya boleh huruf";
		}
	}
	if (empty($_POST["tanggallhr"])) 
	{
		$error_tanggallhr = "Tanggal lahir tidak boleh kosong";
	}
	else 
	{
		$tanggallhr = cek_input($_POST["tanggallhr"]);
	}
	if (empty($_POST["akta"])) 
	{
		$error_akta = "No Akta lahir tidak boleh kosong";
	}
	else 
	{
		$akta = cek_input($_POST["akta"]);
		if (!is_numeric($akta)) 
		{
			$error_akta = "No Akta lahir hanya boleh angka";
		}
	}
	if (empty($_POST["agama"])) 
	{
		$error_agama = "Agama tidak boleh kosong";
	}
	else 
	{
		$agama = cek_input($_POST["agama"]);
	}
	if (empty($_POST["kewarganegaraan"])) 
	{
		$error_kewarganegaraan = "Kewarganegaraan tidak boleh kosong";
	}
	else 
	{
		$kewarganegaraan = cek_input($_POST["kewarganegaraan"]);
	}
	if (empty($_POST["berkebutuhan"])) 
	{
		$error_berkebutuhan = "Berkebutuhan khusus tidak boleh kosong";
	}
	else 
	{
		$berkebutuhan = cek_input($_POST["berkebutuhan"]);
	}
	if (empty($_POST["alamat"])) 
	{
		$error_alamat = "Alamat tidak boleh kosong";
	}
	else 
	{
		$alamat = cek_input($_POST["alamat"]);
		if (!preg_match("/^[a-z A-z0-9+&@#\/%?=~_|!:,.;]*$/", $_POST["alamat"])) 
		{
			$error_alamat = "Alamat hanya boleh angka";
		}
	}if (empty($_POST["rt"])) 
	{
		$error_rt = "RT tidak boleh kosong";
	}
	else 
	{
		$rt = cek_input($_POST["rt"]);
		if (!is_numeric($rt)) 
		{
			$error_rt = "RT hanya boleh angka";
		}
	}
	if (empty($_POST["rw"])) 
	{
		$error_rw = "RW tidak boleh kosong";
	}
	else 
	{
		$rw = cek_input($_POST["rw"]);
		if (!is_numeric($rw)) 
		{
			$error_rw = "RW hanya boleh angka";
		}
	}
	if (empty($_POST["dusun"])) 
	{
		$error_dusun = "Dusun tidak boleh kosong";
	}
	else 
	{
		$dusun = cek_input($_POST["dusun"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $dusun)) 
		{
			$error_dusun = "Dusun hanya boleh huruf";
		}
	}
	if (empty($_POST["kelurahan"])) 
	{
		$error_kelurahan = "Kelurahan tidak boleh kosong";
	}
	else 
	{
		$kelurahan = cek_input($_POST["kelurahan"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $kelurahan)) 
		{
			$error_kelurahan = "Kelurahan hanya boleh huruf";
		}
	}
	if (empty($_POST["kecamatan"])) 
	{
		$error_kecamatan = "Kecamatan tidak boleh kosong";
	}
	else 
	{
		$kecamatan = cek_input($_POST["kecamatan"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $kecamatan)) 
		{
			$error_kecamatan = "Kecamatan hanya boleh huruf";
		}
	}
	if (empty($_POST["kodepos"])) 
	{
		$error_kodepos = "Kode pos tidak boleh kosong";
	}
	else 
	{
		$kodepos = cek_input($_POST["kodepos"]);
		if (!is_numeric($kodepos)) 
		{
			$error_kodepos = "Kode pos hanya boleh angka";
		}
	}
	if (empty($_POST["lintang"])) 
	{
		$error_lintang = "Lintang tidak boleh kosong";
	}
	else 
	{
		$lintang = cek_input($_POST["lintang"]);
	}
	if (empty($_POST["bujur"])) 
	{
		$error_bujur = "Bujur tidak boleh kosong";
	}
	else 
	{
		$bujur = cek_input($_POST["bujur"]);
	}
	if (empty($_POST["tinggal"])) 
	{
		$error_tinggal = "Tempat tinggal tidak boleh kosong";
	}
	else 
	{
		$tinggal = cek_input($_POST["tinggal"]);
	}
	if (empty($_POST["transportasi"])) 
	{
		$error_transportasi = "Moda transportasi tidak boleh kosong";
	}
	else 
	{
		$transportasi = cek_input($_POST["transportasi"]);
	}
	if (empty($_POST["anak"])) 
	{
		$error_anak = "Inputan tidak boleh kosong";
	}
	else 
	{
		$anak = cek_input($_POST["anak"]);
		if (!is_numeric($anak)) 
		{
			$error_anak = "Inputan hanya boleh angka";
		}
	}
	if (empty($_POST["kps"])) 
	{
		$error_kps = "Inputan tidak boleh kosong";
	}
	else 
	{
		$kps = cek_input($_POST["kps"]);
	}
}

$conn = mysqli_connect($host, $user, $password);
if(!$conn) {
	die("Koneksi Gagal : ".mysqli_connect_error());
}

$conndb = mysqli_select_db($conn, 'praktikum11_web');
if(!$conndb) {
	die("Koneksi Database Gagal : ".mysqli_error());
}
$sql = "INSERT INTO formpeserta SET nama='$nama', kelamin='$kelamin', nisn='$nisn', nik='$nik', tempatlhr='$tempatlhr', tanggallhr='$tanggallhr', akta='$akta', agama='$agama', kewarganegaraan='$kewarganegaraan', wna='$wna', berkebutuhan='$berkebutuhan', alamat='$alamat', rt='$rt', rw='$rw', dusun='$dusun', kelurahan='$kelurahan', kecamatan='$kecamatan', kodepos='$kodepos', lintang='$lintang', bujur='$bujur', tinggal='$tinggal', transportasi='$transportasi', kks='$kks', anak='$anak', kps='$kps', nokps='$nokps'";
mysqli_query($conn, $sql) or die (mysqli_error($conn));

function cek_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<div class="row">
<div class="col-md-6">
<div class="card">
	<div class="card-header">
		FORMULIR PESERTA DIDIK
	</div>
	<div class="card-body">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		<div class="form-group row">
			<label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
			<div class="col-sm-10">
				<input type="text" name="nama" class="form-control <?php echo($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
			<div class="col-sm-10">
				<input type="radio" name="kelamin" class="<?php if(isset($kelamin) && $kelamin=="Laki") echo("checked");?>" value="Laki-Laki">Laki - Laki
				<input type="radio" name="kelamin"  class="<?php if(isset($kelamin) && $kelamin=="Perempuan") echo("checked");?>" value="Perempuan">Perempuan<span class="warning"><?php echo $error_kelamin;?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="nisn" class="col-sm-2 col-form-label">NISN</label>
			<div class="col-sm-10">
				<input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="nik" class="col-sm-2 col-form-label">NIK/ No. KITAS</label>
			<div class="col-sm-10">
				<input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="NIK" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="tempatlhr" class="col-sm-2 col-form-label">Tempat Lahir</label>
			<div class="col-sm-10">
				<input type="text" name="tempatlhr" class="form-control <?php echo($error_tempatlhr !="" ? "is-invalid" : ""); ?>" id="tempatlhr" placeholder="Tempat Lahir" value="<?php echo $tempatlhr; ?>"><span class="warning"><?php echo $error_tempatlhr; ?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="tanggallhr" class="col-sm-2 col-form-label">Tanggal Lahir</label>
			<div class="col-sm-10">
				<input type="date" name="tanggallhr" class="form-control<?php echo($error_tanggallhr !="" ? "is-invalid" : "");?>" value="<?php echo($tanggallhr); ?>"><span class="warning"><?php echo $error_tanggallhr;?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="akta" class="col-sm-2 col-form-label">No Registrasi Akta Lahir</label>
			<div class="col-sm-10">
				<input type="text" name="akta" class="form-control <?php echo($error_akta !="" ? "is-invalid" : ""); ?>" id="akta" placeholder="Akta Kelahiran" value="<?php echo $akta; ?>"><span class="warning"><?php echo $error_akta; ?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="agama" class="col-sm-2 col-form-label">Agama & Kepercayaan</label>
			<div class="col-sm-10">
				<select name="agama" class="form-control">
					<option value="Islam" class="<?= ($_POST["agama"]=="1")?"selected":"" ?>">Islam</option>
					<option value="Kristen" class="<?= ($_POST["agama"]=="2")?"selected":"" ?>">Kristen</option>
					<option value="Katolik" class="<?= ($_POST["agama"]=="3")?"selected":"" ?>">Katolik</option>
					<option value="Budha" class="<?= ($_POST["agama"]=="4")?"selected":"" ?>">Budha</option>
					<option value="Hindu" class="<?= ($_POST["agama"]=="5")?"selected":"" ?>">Hindu</option>
					<option value="Konghucu" class="<?= ($_POST["agama"]=="6")?"selected":"" ?>">Kong Hu Cu</option>
				</select><span class="warning"><?php echo $error_agama;?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="nama" class="col-sm-2 col-form-label">Kewarganegaraan</label>
			<div class="col-sm-10">
				<input type="radio" name="kewarganegaraan" class="<?php if(isset($kewarganegaraan) && $kewarganegaraan=="indo") echo("checked");?>" value="wni">WNI
				<input type="radio" name="kewarganegaraan" class="<?php if(isset($kewarganegaraan) && $kewarganegaraan=="asing") echo("checked");?>" value="asing">WNA<span class="warning"><?php echo $error_kewarganegaraan;?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="wna" class="col-sm-2 col-form-label">Warga Negara Asing</label>
			<div class="col-sm-10">
				<input type="text" name="wna" class="form-control <?php echo($error_wna !="" ? "is-invalid" : ""); ?>" id="wna" placeholder="Warga Negara Asing" value="<?php echo $wna; ?>"><span class="warning"><?php echo $error_wna; ?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="berkebutuhan" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
			<div class="col-sm-10">
				<input type="radio" name="berkebutuhan" class="<?php if(isset($berkebutuhan) && $berkebutuhan=="iya") echo("checked");?>" value="iya">IYA
				<input type="radio" name="berkebutuhan" class="<?php if(isset($berkebutuhan) && $berkebutuhan=="tidak") echo("checked");?>" value="tidak">TIDAK<span class="warning"><?php echo $error_berkebutuhan;?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="alamat" class="col-sm-2 col-form-label">Alamat Jalan</label>
			<div class="col-sm-10">
				<input type="text" name="alamat" class="form-control <?php echo($error_alamat !="" ? "is-invalid" : ""); ?>" id="alamat" placeholder="Alamat Lengkap" value="<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat; ?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="rt" class="col-sm-2 col-form-label">RT</label>
			<div class="col-sm-10">
				<input type="text" name="rt" class="form-control <?php echo($error_rt !="" ? "is-invalid" : ""); ?>" id="rt" placeholder="RT" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="rw" class="col-sm-2 col-form-label">RW</label>
			<div class="col-sm-10">
				<input type="text" name="rw" class="form-control <?php echo($error_rw !="" ? "is-invalid" : ""); ?>" id="rw" placeholder="RW" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="dusun" class="col-sm-2 col-form-label">Nama Dusun</label>
			<div class="col-sm-10">
				<input type="text" name="dusun" class="form-control <?php echo($error_dusun !="" ? "is-invalid" : ""); ?>" id="dusun" placeholder="Dusun" value="<?php echo $dusun; ?>"><span class="warning"><?php echo $error_dusun; ?></span>
			</div>
		</div><div class="form-group row">
			<label for="kelurahan" class="col-sm-2 col-form-label">Nama Kelurahan/Desa</label>
			<div class="col-sm-10">
				<input type="text" name="kelurahan" class="form-control <?php echo($error_kelurahan !="" ? "is-invalid" : ""); ?>" id="kelurahan" placeholder="Kelurahan" value="<?php echo $kelurahan; ?>"><span class="warning"><?php echo $error_kelurahan; ?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
			<div class="col-sm-10">
				<input type="text" name="kecamatan" class="form-control <?php echo($error_kecamatan !="" ? "is-invalid" : ""); ?>" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>"><span class="warning"><?php echo $error_kecamatan; ?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
			<div class="col-sm-10">
				<input type="text" name="kodepos" class="form-control <?php echo($error_kodepos !="" ? "is-invalid" : ""); ?>" id="kodepos" placeholder="Kode Pos" value="<?php echo $kodepos; ?>"><span class="warning"><?php echo $error_kodepos; ?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="lintang" class="col-sm-2 col-form-label">Lintang</label>
			<div class="col-sm-10">
				<input type="text" name="lintang" class="form-control <?php echo($error_lintang !="" ? "is-invalid" : ""); ?>" id="lintang" placeholder="Lintang" value="<?php echo $lintang; ?>"><span class="warning"><?php echo $error_lintang; ?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="bujur" class="col-sm-2 col-form-label">Bujur</label>
			<div class="col-sm-10">
				<input type="text" name="bujur" class="form-control <?php echo($error_bujur !="" ? "is-invalid" : ""); ?>" id="bujur" placeholder="Bujur" value="<?php echo $bujur; ?>"><span class="warning"><?php echo $error_bujur; ?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="tinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label>
			<div class="col-sm-10">
				<select name="tinggal" class="form-control">
					<option value="Rumah Sendiri" class="<?= ($_POST["tinggal"]=="1")?"selected":"" ?>">Rumah Sendiri</option>
					<option value="Kos" class="<?= ($_POST["tinggal"]=="2")?"selected":"" ?>">Kos</option>
					<option value="Kontrak" class="<?= ($_POST["tinggal"]=="3")?"selected":"" ?>">Kontrak</option>
					<option value="Wali" class="<?= ($_POST["tinggal"]=="4")?"selected":"" ?>">Bersama Wali/Orang Tua</option>
				</select><span class="warning"><?php echo $error_tinggal;?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="transportasi" class="col-sm-2 col-form-label">Moda Transportasi</label>
			<div class="col-sm-10">
				<select name="transportasi" class="form-control">
					<option value="Jalan kaki" class="<?= ($_POST["transportasi"]=="1")?"selected":"" ?>">Jalan kaki</option>
					<option value="kendaraan pribadi" class="<?= ($_POST["transportasi"]=="2")?"selected":"" ?>">Kendaraan Pribadi</option>
					<option value="Umum" class="<?= ($_POST["transportasi"]=="3")?"selected":"" ?>">Angkutan Umum</option>
				</select><span class="warning"><?php echo $error_transportasi;?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="kks" class="col-sm-2 col-form-label">Nomor KKS (Kartu Keluarga Sejahtera)</label>
			<div class="col-sm-10">
				<input type="text" name="kks" class="form-control <?php echo($error_kks !="" ? "is-invalid" : ""); ?>" id="kks" placeholder="Nomor KKS" value="<?php echo $kks; ?>"><span class="warning"><?php echo $error_kks; ?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="anak" class="col-sm-2 col-form-label">Anak ke-berapa (Berdasarkan KK)</label>
			<div class="col-sm-10">
				<input type="text" name="anak" class="form-control <?php echo($error_anak !="" ? "is-invalid" : ""); ?>" id="anak" placeholder="Anak Ke-" value="<?php echo $anak; ?>"><span class="warning"><?php echo $error_anak; ?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="kps" class="col-sm-2 col-form-label">Penerima KPS/PKH</label>
			<div class="col-sm-10">
				<input type="radio" name="kps" class="<?php if(isset($kps) && $kps=="iya") echo("checked");?>" value="iya">IYA
				<input type="radio" name="kps" class="<?php if(isset($kps) && $kps=="tidak") echo("checked");?>" value="tidak">TIDAK<span class="warning"><?php echo $error_kps;?></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="nokps" class="col-sm-2 col-form-label">No. KPS/PKH</label>
			<div class="col-sm-10">
				<input type="text" name="nokps" class="form-control <?php echo($error_nokps !="" ? "is-invalid" : ""); ?>" id="nokps" placeholder="Nomor KPS" value="<?php echo $nokps; ?>"><span class="warning"><?php echo $error_nokps; ?></span>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-10">
				<button type="submit" class="btn btn-primary">Masukkan Data</button>
			</div>
		</div>
	</form>
	</div>
</div>
</div>
</div>
<?php
echo "<h2>Hasil Inputan:</h2>";
echo "Nama Lengkap = ".$nama;
echo "<br>";
echo "Jenis Kelamin = ".$kelamin;
echo "<br>";
echo "NISN = ".$nisn;
echo "<br>";
echo "NIK = ".$nik;
echo "<br>";
echo "Tempat Lahir = ".$tempatlhr;
echo "<br>";
echo "Tanggal Lahir = ".$tanggallhr;
echo "<br>";
echo "No Akta = ".$akta;
echo "<br>";
echo "Agama = ".$agama;
echo "<br>";
echo "Kewarganegaraan = ".$kewarganegaraan;
echo "<br>";
echo "WNA = ".$wna;
echo "<br>";
echo "Berkebutuhan Khusus = ".$berkebutuhan;
echo "<br>";
echo "Alamat Jalan= ".$alamat;
echo "<br>";
echo "RT = ".$rt;
echo "<br>";
echo "RW = ".$rw;
echo "<br>";
echo "Dusun = ".$dusun;
echo "<br>";
echo "Kelurahan = ".$kelurahan;
echo "<br>";
echo "Kecamatan = ".$kecamatan;
echo "<br>";
echo "Kode Pos = ".$kodepos;
echo "<br>";
echo "Lintang = ".$lintang;
echo "<br>";
echo "Bujur = ".$bujur;
echo "<br>";
echo "Tempat Tinggal = ".$tinggal;
echo "<br>";
echo "Moda Transportasi = ".$transportasi;
echo "<br>";
echo "No KKS = ".$kks;
echo "<br>";
echo "Anak Ke = ".$anak;
echo "<br>";
echo "Penerima KPS = ".$kps;
echo "<br>";
echo "No KPS = ".$nokps;
echo "<br>";
?>
</body>
</html>