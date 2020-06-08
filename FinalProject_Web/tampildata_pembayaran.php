<?php 
include 'head.php';
$id=$_SESSION['id'];
$result=tampilpembayaran_cetak($id);

?>

<style>
  .navbar-default{
    display: none;
  }
</style>

<div class="col-md-3"></div>

<div class="col-md-6">
<table class="table table-striped table-bordered table-responsive">
<?php while ($row=mysqli_fetch_assoc($result)) { ?>

    <tr>
      <td>Nama Bank dan Atas Nama</td>
      <td><?= $row['nama_bank'] ?></td>
    </tr>

    <tr>
      <td>Bukti Transfer</td>
      <td><a href="<?= $row['bukti_transfer'] ?>">Lihat bukti Transfer</a></td>
    </tr>
        <?php  }?>

  
</table>
<a href="user.php" class="btn btn-success">Kembali</a>
</div>

<div class="col-md-2"></div><br>
<div style="clear: both;</div>
<?php include 'foot.php'; ?>
