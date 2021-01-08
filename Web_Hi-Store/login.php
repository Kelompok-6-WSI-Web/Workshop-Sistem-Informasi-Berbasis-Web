<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SIGN IN </title>
    <style>
        h1{
          text-align: center;
        }
        .form{
          background-color: #6A7B67;
          padding-bottom : 120px;          
        }
        .box-login .btn {
            background-color: white;
            border: none;
            border-radius: 5px;
            color: #6A7B67;
        }
        .box-login{
            width : 60%;
            height : 50%;
            background-color: #6A7B67;
            margin: 5% auto;
            padding: 2%;
        }
        .warning a{
            color : red;
        }
    </style>
</head>
<body>

<!-- untuk css tampilan register ya -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
<!-- NAVBAR -->
<?php include('navbar.php'); ?>

<!-- konten -->
<div class="form">

    <div class="container"><br><br><br>

        <h1 class="text-white"> SELAMAT DATANG </h1>
        <?php
        if (isset($_GET['pesan'])){
                    $pesan = $_GET['pesan'];
                    if ($pesan == "input") {
                      ?>
                      <div class="alert alert-success">
                        <strong>Succes!</strong> Anda berhasil daftar akun.
                      </div>
                      <?php
                    }
                  }
        ?>
            <?php
              if (isset($_GET['pesan'])){
                $pesan = $_GET['pesan'];
                  if ($pesan == "belum_login") {
                    ?>
                    <div class="alert alert-danger">
                      <strong>Danger!</strong> Anda harus login terlebih dahulu. <br>
                      sebelum melakukan proses checkout
                    </div>
                    <?php
                  }
              }
            ?>
            <?php
              if (isset($_GET['pesan'])){
                $pesan = $_GET['pesan'];
                  if ($pesan == "belum_login1") {
                    ?>
                    <div class="alert alert-danger">
                      <strong>Danger!</strong> Anda harus login terlebih dahulu. <br>
                      sebelum akses ke fitur admin.
                    </div>
                    <?php
                  }
              }
            ?>
            <div class="box-login" >
                <h4 class="text-white">Silahkan Login</h4>
                <br>

                <?php
               

                  if (isset($_GET['pesan'])){
                    $pesan = $_GET['pesan'];
                    if ($pesan == "emailsalah"){
                      ?>
                      <div class="alert alert-danger">
                        <strong>Danger!</strong> Email anda salah
                      </div>
                      <?php
                      } elseif($pesan == "passwordsalah"){
                        ?>
                        <div class="alert alert-danger">
                          <strong>Danger!</strong> Password anda salah
                        </div>
                          <?php
                    }
                  }
                
                  ?>
                <form class="user" action="login_process.php" method="post">

                    <div class="form-group">            
                        <input type="email" class="form-control form-control-user" name="email" placeholder="Alamat Email" required>
                        </div>
                    <div class="form-group">
    
                        <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary">Login</button>
                    <br>
                    <small class="warning text-white">belum punya akun? silahkan klik <a href="register.php">daftar akun</a></small>
                </form>
            </div>
            </div>           
        


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  

</body>
</html>