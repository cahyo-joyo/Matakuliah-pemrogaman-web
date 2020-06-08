<?php 

include 'head.php';
$id=$_SESSION['id'];
$result=tampildo_cetakk($id);

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
      <td>Foto</td>
      <td><a href="<?= $row['foto'] ?>">Lihat Foto</a></td>
    </tr>

    <tr>
      <td>Ijazah TK</td>
      <td><a href="<?= $row['ijazah'] ?>">Lihat Ijazah TK</a></td>
    </tr>

    <tr>
      <td>KTP Ayah</td>
      <td><a href="<?= $row['ktp_ayah'] ?>">Lihat KTP Ayah</a></td>
    </tr>

    <tr>
      <td>KTP Ibu</td>
      <td><a href="<?= $row['ktp_ibu'] ?>">Lihat KTP Ibu</a></td>
    </tr>

    <tr>
      <td>Akte Kelahiran</td>
      <td><a href="<?= $row['akte'] ?>">Lihat Akte</a></td>
    </tr>

    <tr>
      <td>Kartu Keluarga</td>
      <td><a href="<?= $row['kk'] ?>">Lihat KK</a></td>
    </tr>
        <?php  }?>

  
</table>
<a href="user.php" class="btn btn-success">Kembali</a>
</div>

<div class="col-md-2"></div><br>
<div style="clear: both;</div>
<?php include 'foot.php'; ?>
