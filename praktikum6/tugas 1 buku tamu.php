<?php
include "koneksi.php";
$sql = "SELECT * FROM buku_tamu";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table border="2" width="350px">
	<thead>
		<td> ID_BT </td>
		<th> NAMA </th>
		<th> EMAIL </th>
		<th> ISI </th>
	</thead>
	<tbody>
		<?php
		while ($tampil = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td align=center>".$tampil['ID_BT']."</td>";
			echo "<td>".$tampil['NAMA']."</td>";
			echo "<td>".$tampil['EMAIL']."</td>";
			echo "<td>".$tampil['ISI']."</td>";
			echo "</tr>";
		}
		?>
	</tbody>
</table>
</body>
</html>