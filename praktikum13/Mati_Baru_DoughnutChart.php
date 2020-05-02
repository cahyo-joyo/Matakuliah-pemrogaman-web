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
<!doctype html>
<html>

<head>
	<title>Doghnut Chart</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>

<body>
	<h1>Doughnut Chart Baru Meninggal</h1>
	<div id="canvas-holder" width="100" height="100">
		<canvas id="chart-area"></canvas>
	</div>
	<script>
		var config = {
			type: 'doughnut',
			data: {
				datasets: [{
					label: 'Grafik Baru Meninggal',
					data:<?php echo json_encode($jumlah_covid); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(255, 153, 102, 0.2)',
					'rgba(255, 0, 204, 0.2)',
					'rgba(255, 51, 0, 0.2)',
					'rgba(255, 255, 0, 0.2)',
					'rgba(255, 51, 255, 0.2)',
					'rgba(255, 51, 51, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(255, 153, 102, 1)',
					'rgba(255, 0, 204, 1)',
					'rgba(255, 51, 0, 1)',
					'rgba(255, 255, 0, 1)',
					'rgba(255, 51, 255, 1)',
					'rgba(255, 51, 51, 1)'
					],
					label: 'Presentase Jumlah Kasus Covid'
				}],
				labels: <?php echo json_encode($nama_covid); ?>},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myDoughnut = new Chart(ctx, config);
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});

			window.myDoughnut.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var newDataset = {
				backgroundColor: [],
				data: [],
				label: 'New dataset ' + config.data.datasets.length,
			};

			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());

				var colorName = colorNames[index % colorNames.length];
				var newColor = window.chartColors[colorName];
				newDataset.backgroundColor.push(newColor);
			}

			config.data.datasets.push(newDataset);
			window.myDoughnut.update();
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			config.data.datasets.splice(0, 1);
			window.myDoughnut.update();
		});
	</script>
</body>

</html>
