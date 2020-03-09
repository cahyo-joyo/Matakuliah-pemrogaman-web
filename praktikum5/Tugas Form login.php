<!DOCTYPE html>
<html>
<head>
	<title> Form Login </title>
</head>
<body>
	<form method="POST" action="postlogin.php">
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnlogin" value="login">
					<input type="reset" name="reset" value="reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>