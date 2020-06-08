<?php include 'head.php'; 

if(isset($_POST['simpanktpayah'])){
  $id_pendaftar=$_SESSION['id'];

  $nama   = $_FILES['ktpayah']['name'];
  $size   = $_FILES['ktpayah']['size'];
  $error  = $_FILES['ktpayah']['error'];
  $asal   = $_FILES['ktpayah']['tmp_name'];
  
  $lokasi_foto="img/dokumen/ktp ayah/" . $nama;
  $format = pathinfo($nama, PATHINFO_EXTENSION);

  if($error === 0){

    if ($size > 9000){ 
    
          if($format === "jpg" || $format === "png" || $format === "JPG" || $format === "PNG" ){
            
            if(simpanktpayah($id_pendaftar,$lokasi_foto)){
              echo "<script>alert('KTP Ayah berhasil di simpan')</script>";
              echo "<script>window.location.href='dokumen.php'</script>";
              }else{
                echo mysqli_error($konek);
              } 
    
            move_uploaded_file($asal, "img/dokumen/ktp ayah/".$nama);
          }else{
            echo "<script>alert('Maaf format filenya harus jpg/png')</script>";
          }
    
      }else{
        echo "<script>alert('file terlalu besar')</script>";
      }
  }else echo "<script>alert('Ada kesalahan saat upload')</script>";
}

?>