<?php include 'head.php';
if(empty($_SESSION['id'])){ ?>
  <script>window.location.href='index.php'</script>
<?php }else{
$result=tampildokumen();
?>
<link rel="stylesheet" type="text/css" href="dt/css/dataTables.bootstrap.css">

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Foto</th>
      <th>Ijazah TK</th>
      <th>Ktp Ayah</th>
      <th>Ktp Ibu</th>
      <th>Akte</th>
      <th>KK</th>

    </tr>
  </thead>
      <tbody>
      
      <?php $no=1; while ($row=mysqli_fetch_assoc($result)) {
        
      ?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama_pendaftar']?></td>
        <td><a href="../<?= $row['foto'] ?>">Lihat Foto</a></td>
        <td><a href="../<?= $row['ijazah'] ?>">Lihat Ijazah TK</a></td>
        <td><a href="../<?= $row['ktp_ayah'] ?>">Lihat KTP Ayah</a></td>
        <td><a href="../<?= $row['ktp_ibu'] ?>">Lihat KTP Ibu</a></td>
        <td><a href="../<?= $row['akte'] ?>">Lihat Akte</a></td>
        <td><a href="../<?= $row['kk'] ?>">Lihat KK</a></td>
        </tr>
        <?php $no++; }?>

      </tbody>
    
  </thead>
</table>


</head>

<?php } include 'foot.php'; ?>
  