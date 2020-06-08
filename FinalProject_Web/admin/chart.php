<?php
include 'head.php';
$konek = mysqli_connect("localhost", "root", "", "daftar_sekolah");
?>

<html>
<head>
	<title>Grafik</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<h3 style="text-align: center;">Grafik Perbandingan Jumlah Pendaftar</h3>
	<p></p>
	<center>
	<div id="canvas-holder" style="width: 50%">
		<canvas id="myChart"></canvas>
		<br>
		<br>
	</div>

	<script>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'pie',
		data: {
			labels: ["Laki-laki", "Perempuan"],
			datasets: [{
				label: '',
				data: [
				<?php 
				$jumlah_laki = mysqli_query($konek,"select * from formulir_mhs where jenis_kelamin='laki-laki'");
				echo mysqli_num_rows($jumlah_laki);
				?>, 
				<?php 
				$jumlah_perempuan = mysqli_query($konek,"select * from formulir_mhs where jenis_kelamin='perempuan'");
				echo mysqli_num_rows($jumlah_perempuan);
				?>
				],
				backgroundColor: [
				
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 99, 132, 0.2)'
				],
				borderColor: [
				
				'rgba(54, 162, 235, 1)',
				'rgba(255,99,132,1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>
</center>
</body>
</html>

<?php include 'foot.php'; ?>