<?php include 'config/config.php';
if(empty($_SESSION['id'])){ ?>
  <script>window.location.href='awal.php'</script>
<?php }else{
$result=tampilpendaftar();
$result1=tampildataortu();
$result2=tampilpembayaran();
$_SESSION['nama'];
?>

<center>
  <h1>LAPORAN DATA SISWA PPDB MI MATHOLIUL ANWAR</h1>
  <p></p>
</center>


<h2>Data Formulir</h2>

<table border="1" style="border-color: yellow;">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Lengkap</th>
      <th>Tempat Lahir</th>
      <th>Tgl Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Anak Ke</th>
      <th>Dari</th>
      <th>Agama</th>
      <th>Tempat Tinggal</th>
      <th>Alamat</th>
      <th>Provinsi</th>
      <th>Ukuran Seragam</th>
      <th>Tgl Daftar</th>
    </tr>
  </thead>

    
      <tbody>
      
      <?php $no=1; while ($row=mysqli_fetch_assoc($result)) {
        
      ?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama_lengkap'] ?></td>
        <td><?= $row['tempat_lahir'] ?></td>
        <td><?= $row['tgl_lahir'] ?></td>
        <td><?= $row['jenis_kelamin'] ?></td>
        <td><?= $row['anak ke']?></td>
        <td><?= $row['dari']?></td>
        <td><?= $row['agama'] ?></td>
        <td><?= $row['tempat tinggal'] ?></td>
        <td><?= $row['alamat'] ?></td>
        <td><?= $row['provinsi'] ?></td>
        <td><?= $row['no_srgm'] ?></td>
        <td><?= $row['tgl_daftar'] ?></td>
        </tr>
        <?php $no++; }?>

      </tbody>
    
  </thead>
</table>
</head>

<br>
<br>
<h2>Data Orang Tua Pendaftar</h2>
<link rel="stylesheet" type="text/css" href="dt/css/dataTables.bootstrap.css">
  <table border="1" style="border-color: blue;">
  <thead>
    <tr>
      <th>No</th>
      <th>Pendaftar</th>
      <th>Ayah</th>
      <th>Ibu</th>
      <th>Wali</th>
      <th>Alamat</th>
      <th>Provinsi</th>
      <th>Kota</th>
      <th>Kecamatan</th>
      <th>Pos</th>
      <th>No Hp</th>
      <th>Email</th>
      <th>Pendidikan Ayah</th>
      <th>Pendidikan Ibu</th>
      <th>Pekerjaan Ayah</th>
      <th>Pekerjaan Ibu</th>
      <th>Penghasilan</th>
    </tr>
  </thead>
  
      <tbody>
      
      <?php $no=1; while ($row=mysqli_fetch_assoc($result1)) {?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama_pendaftar'] ?></td>
        <td><?= $row['nama_ayah'] ?></td>
        <td><?= $row['nama_ibu'] ?></td>
        <td><?= $row['nama_wali'] ?></td>
        <td><?= $row['alamat'] ?></td>
        <td><?= $row['provinsi'] ?></td>
        <td><?= $row['kota'] ?></td>
        <td><?= $row['kecamatan'] ?></td>
        <td><?= $row['kodepos'] ?></td>
        <td><?= $row['nohp'] ?></td>
        <td><?= $row['email_ortu'] ?></td>
        <td><?= $row['pendidikan_ayah'] ?></td>
        <td><?= $row['pendidikan_ibu'] ?></td>
        <td><?= $row['pekerjaan_ayah'] ?></td>
        <td><?= $row['pekerjaan_ibu'] ?></td>
        <td><?= $row['penghasilan_ortu'] ?></td>
        </tr>
        <?php $no++; }?>

      </tbody>
    
  </thead>
</table>
<script>
            $(document).ready( function () {
          $('#pendaftar').DataTable({
            responsive:true
          });
      } );
        </script>
</head>

<br>
<br>
<h2>Data Pembayaran Pendaftar</h2>
<table  border="1" style="border-color: purple;">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Pendaftar</th>
      <th>Nama Bank</th>
      <th>Status</th>
    </tr>
  </thead>

    
      <tbody>
      
      <?php $no=1; while ($row=mysqli_fetch_assoc($result2)) { ?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama_pendaftar'] ?></td>
        <td><?= $row['nama_bank'] ?></td>
        <td><?php if($row['status']==1){ ?>
          <a class="btn btn-success">Lunas</a>
          <?php }else{?>
            <a class="btn btn-danger">Ditolak / Belum diperiksa</a>
          <?php } ?>
        </td>
        </tr>
        <?php $no++; }?>

      </tbody>
    
  </thead>
</table>


<script src="dt/js/jquery.dataTables.min.js"></script>
<script src="dt/js/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready( function () {
          $('#pendaftar').DataTable({
            responsive:true
          });
      } );
        </script>
         <script type="text/javascript">

          window.print();
          </script>
</head>
<?php }?>