  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Halaman Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <!-- Custom styles for this template -->
    <style>
      body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
 margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<?php 
include 'config/config.php';

if(isset($_POST['masuk'])){
  $nama=$_POST['nama'];
  $password=$_POST['password'];

  $password=($password);


  if(ceklogin($nama,$password)){
    echo "<script>window.location.href='awal.php'</script>";
  }else{
    echo "<script>alert('Login Gagal')</script>";
  }
}

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Admin</title>
<style type="text/css">
body{
background: radial-gradient(circle, #fdbb2d, #22c1c3);    
}.login{
background-color: white;
width: 370px;
padding: 20px;
margin: auto;
margin-top: 100px;
border: 2px solid black;
font-size: 18px;
}h1{
background-color: orange;
text-align: center;
color: white;
padding: 10px;
border-radius: 7px;
}
  
</style>
</head>
<body>
<center>
  <h1>Login Sebagai Admin</h1>
  <hr>
  <div class="container">
      <form class="form-signin" action="" method="post">
        
        <input type="text" name="nama" class="form-control" placeholder="Nama" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
       
        <button class="btn btn-lg btn-primary btn-block" name="masuk" type="submit">Masuk</button>
      </form>

    </div> 
</center>
</body>
</html>