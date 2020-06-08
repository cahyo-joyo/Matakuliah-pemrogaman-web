<?php 
include 'head.php';
if(isset($_POST['submit'])){
  $nama=$_POST['nama'];
  $tempat=$_POST['tempat'];
  $date=$_POST['date'];
  $jns_kel=$_POST['jns_kel'];
  $anak_ke=$_POST['anak_ke'];
  $dari=$_POST['dari'];
  $agama=$_POST['agama'];
  $tempat_tinggal=$_POST['tempat_tinggal'];
  $alamat=$_POST['alamat'];
  $provinsi=$_POST['provinsi'];
  $no_jaket=$_POST['no_jaket'];
  $password=$_POST['password'];
  $konfirmpass=$_POST['konfirmpass'];
  $datenow=date('ymd');

  if($password===$konfirmpass){ 

        if(daftarformulir($nama,$tempat,$date,$jns_kel,$anak_ke,$dari,$agama,$tempat_tinggal,$alamat,$provinsi,$no_jaket,$password,$datenow)){
          echo "<script>alert('Pendaftaran Berhasil, Silahkan Login')</script>";
        }else{
          echo "<script>alert('Pendaftaran Gagal')</script>";
        }
  }else{
    echo "<script>alert('Password konfirmasi tidak sama, silahkan ulangi kembali')</script>";
  }
}
?>
 
<style>
    .block-web.primary-box {
        background: #4eb2d8;
        padding: 5px;
        color: white;
    }
    
    .jumbotron{
  background: linear-gradient(to right, #808000 , #9ACD32);
}

.navbar-default{
  margin-bottom: 0;
}
    .navbar {
        margin-bottom: 0;
    }
  
  .login{
    background:linear-gradient(90deg, #5F9EA0 , #008B8B);
  }

  .daftar{
        background-color:  linear-gradient(to right, #808000 , yellow);
  }

  .petunjuk{
    border-radius: 0px;
  }

</style>

<div class="container-fluid">
    <div class="row" style="margin-left:0;margin-right:0;">

        <div class="col-md-8">
        <div class="jumbotron daftar">
            <div class="header">
                <h3><center>Formulir Pendaftaran</center></h3>
            </div>
            <hr style="border:1px solid black">
            <form action="" method="post">

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text" name="tempat" class="form-control" placeholder="Tempat Lahir" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="date" name="date" class="form-control" placeholder="Tanggal Lahir" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <label class="radio-inline">
              <input type="radio" name="jns_kel" value="laki-laki"><span class="custom-radio"></span> Laki-laki  
          </label>
                    <label class="radio-inline">
              <input type="radio" name="jns_kel" value="perempuan"><span class="custom-radio"></span> Perempuan  
          </label>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Anak Ke</label>
                    <input type="text" name="anak_ke" class="form-control" placeholder="Anak Ke" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Dari</label>
                    <input type="text" name="dari" class="form-control" placeholder="... Bersaudara" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Agama</label>
                    <select name="agama" class="form-control" required>
            <option value="0"> -- Pilih Agama -- </option>
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="katholik">Katholik</option>
            <option value="hindu">Hindu</option>
            <option value="budha">Budha</option>
            <option value="konghucu">Konghucu</option>
          </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Tinggal</label>
                    <select name="tempat_tinggal" class="form-control" required>
            <option value="0"> -- Pilih -- </option>
            <option value="bersama ortu">Bersama Orang Tua</option>
            <option value="kost">Kost</option>
            <option value="kontrak">Kontrak</option>
            <option value="bersama kerabat">Bersama kerabat</option>
            <option value="lainnya">Lainnya</option>
          </select>
                </div>                


                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Lengkap</label>
                    <textarea name="alamat" cols="50" rows="3" class="form-control" placeholder="Isikan dengan Alamat Rumah" required></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Propinsi</label>
                    <select name="provinsi" class="form-control" required>
              <option value=""> -- Pilih Propinsi -- </option>
              <option value="jakarata">D.K.I. Jakarta</option>
              <option value="jawa barat">Jawa Barat</option>
              <option value="jawa tengah">Jawa Tengah</option>
              <option value="yogyakarta">D.I. Yogyakarta</option>
              <option value="jawa timur">Jawa Timur</option>
              <option value="aceh">Aceh</option>
              <option value="sumatera utara">Sumatera Utara</option>
              <option value="sumatera barat">Sumatera Barat</option>
              <option value="riau">Riau</option>
              <option value="jambi">Jambi</option>
              <option value="sumatera selatan">Sumatera Selatan</option>
              <option value="lampung">Lampung</option>
              <option value="kalimantan barat">Kalimantan Barat</option>
              <option value="kalimantan tengah">Kalimantan Tengah</option>
              <option value="kalimantan selatan">Kalimantan Selatan</option>
              <option value="kalimantan timur">Kalimantan Timur</option>
              <option value="sulawesi utara">Sulawesi Utara</option>
              <option value="sulawesi tengah">Sulawesi Tengah</option>
              <option value="sulawesi selatan">Sulawesi Selatan</option>
              <option value="sulawesi tenggara">Sulawesi Tenggara</option>
              <option value="maluku">Maluku</option>
              <option value="bali">Bali</option>
              <option value="nusa tenggara barat">Nusa Tenggara Barat</option>
              <option value="nusa tenggara timur">Nusa Tenggara Timur</option>
              <option value="papua">Papua</option>
              <option value="bengkulu">Bengkulu</option>
              <option value="maluku utara">Maluku Utara</option>
              <option value="banten">Banten</option>
              <option value="bangka belitung">Bangka Belitung</option>
              <option value="gorontalo">Gorontalo</option>
              <option value="kepulauan riau">Kepulauan Riau</option>
              <option value="papua barat">Papua Barat</option>
              <option value="sulawesi barat">Sulawesi Barat</option>
            </select>
                </div>

            <div class="form-group">
                    <label for="exampleInputEmail1">Ukuran Seragam</label>
            <select name="no_jaket" class="form-control" required>
                  <option value="0"> -- Pilih Ukuran Seragam -- </option>
                  <option value="s">S</option>
                  <option value="m">M</option>
                  <option value="l">L</option>
                  <option value="xl">XL</option>
                  <option value="xxl">XXL</option>
                  <option value="xxxl">XXXL</option>
            </select>
            </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="6-8 digit" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Konfirmasi Password</label>
                    <input type="password" name="konfirmpass" class="form-control" placeholder="Konfirmasi Password" required>
                </div>
               
                <div class="form-group">
                    <input type="submit" name="submit" href="#" class="btn btn-block btn-primary btn-lg" value="Daftar">
                </div>
            </form>
          </div>
        </div>
        
        <div class="col-md-4">
        <div class="jumbotron login">
            <div class="header">
                <h3><center>SILAHKAN MASUK</center></h3>
            </div>
            <hr style="border:1px solid black">
            <form action="ceklogin.php" method="post">
                <div class="form-group">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>

                <div class="form-group">
                    <input type="submit" name="masuk" class="btn btn-block btn-success" value="Masuk" style="background: #32CD32;">
                </div>
            </form>
        </div>
        </div>

    </div>
</div>

<?php include 'foot.php'; ?>