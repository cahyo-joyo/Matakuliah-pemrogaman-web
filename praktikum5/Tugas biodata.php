<!DOCTYPE html>
<html>
<head>
	<title> Form Login </title>
</head>
<body>
	<h1><center>Form Biodata</center></h1>
	<form method="POST" action="postbiodata.php">
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="200">Nama Lengkap</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="200">Alamat Lengkap</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td width="200">Kota Kelahiran</td>
				<td><input type="text" name="kotalahir"></td>
			</tr>
			<tr>
				<td width="200">Tanggal Lahir</td>
				<td><input type="date" name="lahir"></td>
			</tr>
			<tr>
				<td width="200">Jenis Kelamin</td>
				<td><input type="radio" name="kelamin" value="laki"> Laki-laki
					<input type="radio" name="kelamin" value="laki"> Perempuan</td>
			</tr>
			<tr>
				<td width="200">Agama</td>
				<td><select name="agama">					
					<option value="islam"> Islam </option>
					<option value="protestan"> Kristen Protestan </option>
					<option value="khatolik"> Kristen Khatolik </option>
					<option value="hindu"> Hindu </option>
					<option value="budha"> Budha </option>
					<option value="konghucu"> Konghucu </option>
					</select></td>
			</tr>
			<tr>
				<td width="200">Status Perkawinan</td>
				<td><select name="status">
					<option value="belum">  belum Kawin</option>
					<option value="kawin"> Kawin</option>
					<option value="ceraih"> Cerai Hidup </option>
					<option value="ceraim"> Cerai Mati</option>
					</select></td>
			</tr>
			<tr>
				<td width="200">Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td width="200">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td width="200">No Telephone</td>
				<td><input type="text" name="telephone"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnhasil" value="Lihat Hasil">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>