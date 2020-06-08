<?php include 'head.php'; 

if(isset($_POST['simpanktpibu'])){
  $id_pendaftar=$_SESSION['id'];

  $nama   = $_FILES['ktpibu']['name'];
  $size   = $_FILES['ktpibu']['size'];
  $error  = $_FILES['ktpibu']['error'];
  $asal = $_FILES['ktpibu']['tmp_name'];
  
  $lokasi_foto="img/dokumen/ktp ibu/" . $nama;
  $format = pathinfo($nama, PATHINFO_EXTENSION);

  if($error === 0){

    if ($size > 9000){ 
    
          if($format === "jpg" || $format === "png" || $format === "JPG" || $format === "PNG" ){
            
            if(simpanktpibu($id_pendaftar,$lokasi_foto)){
              echo "<script>alert('KTP Ibu berhasil di simpan')</script>";
              echo "<script>window.location.href='dokumen.php'</script>";
              }else{
                echo mysqli_error($konek);
              } 
    
            move_uploaded_file($asal, "img/dokumen/ktp ibu/".$nama);
          }else{
            echo "<script>alert('Maaf format filenya harus jpg/png')</script>";
          }
    
      }else{
        echo "<script>alert('file terlalu besar')</script>";
      }
  }else "<script>alert('Ada kesalahan saat upload')</script>";
}

?>