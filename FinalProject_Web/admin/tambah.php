<?php include 'head.php';
if(empty($_SESSION['id'])){ ?>
  <script>window.location.href='index.php'</script>
<?php }else{

if(isset($_POST['submit'])){

  $nama=$_POST['nama'];
  $password=$_POST['password'];
  $repassword=$_POST['ulangpassword'];

  if($password==$repassword){

      if(simpanadmin($nama,$password)){
        echo "<script>alert('Berhasil')</script>";
      }else{
        echo "<script>alert('Password Salah')</script>";
      }
  }else{
    echo "<script>alert('Maaf Anda Gagal Login')</script>";
  }
}

?>

<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Lengkap</label>
    <input type="text" class="form-control" name="nama" placeholder="Nama" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ulangi Password</label>
    <input type="password" class="form-control" name="ulangpassword" placeholder="Ulangi Password" required>
  </div>

  <button type="submit" name="submit" class="btn btn-success">Tambah</button>
</form>

<?php } include 'foot.php';?>