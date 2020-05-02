<!DOCTYPE html>
<html>
<head>
	<title>Membuat Grafik Menggunakan Chart JS</title>
	<script type="text/javascript" src="Chart.js"></script>
	<meta charset="utf-8">
    <style type="text/css">
            .container {
                width: 40%;
                margin: 15px auto;
            }
    </style>
</head>
<body>
<?php
include('koneksi.php');
$covid = mysqli_query($koneksi,"select * from covid");
while($row = mysqli_fetch_array($covid)){
	$nama_covid[] = $row['negara'];
	
	$query = mysqli_query($koneksi,"select sum(mati_baru) as mati_baru from covid where id_negara='".$row['id_negara']."'");
	$row = $query->fetch_array();
	$jumlah_covid[] = $row['mati_baru'];
}
?>
	<h1>Bar Chart Baru Meninggal</h1>
	<div class="container" style="width: 490px;height: 300px">
		<canvas id="myChart"></canvas>
	</div>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($nama_covid); ?>,
				datasets: [{
					label: 'Grafik Baru Meninggal',
					data: <?php echo json_encode($jumlah_covid); ?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255,99,132,1)',
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
</body>
</html>