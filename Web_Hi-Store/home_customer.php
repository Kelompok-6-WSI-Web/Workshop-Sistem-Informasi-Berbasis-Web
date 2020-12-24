<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
    <script src="https://kit.fontawesome.com/c44947b450.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
    

    <title>Hi-Store</title>
  </head>
  <body id="page-top">
   
  <?php include('navbar.php');?>
  
      <div class="jumbotron">

        <div class="container" >
            <h1 class="display-4"> <span class="font-weight-bold">SELAMAT DATANG </br> HIDROPONIK STORE</span> </h1>
            <?php
          if (isset($_GET['pesan'])){
                    $pesan = $_GET['pesan'];
                    if ($pesan == "berhasil") {
                      ?>
                      <div class="alert alert-success">
                        <strong>Succes!</strong> Anda berhasil login.
                      </div>
                      <?php
                    }
                  }
        ?>
            <p class="lead">fresh from nature</p>
            <a class="btn btn-primary btn-lg" href="cart_user.php" role="button">SHOP NOW</a>
        </div>
      </div>
      <div class="pengertian">
        <div class="container">
          <h2>Apa itu Hidroponik?</h2>
          <p class="lead">Hidroponik adalah sistem atau teknik budididaya tanaman yang </br>
            meminimilisir penggunaan tanah. Pada prinsipnya tanaman </br>
            sebenarnya tidak membutuhkan tanah untuk tumbuh, tanaman </br>
            hanya membutuhkan mineral dari tanah</p>
        </div>
      </div>


    <div class="keunggulan">
      <div class="container">
        <img src="img/keunggulan.jpg" alt="" class="gambar"> 
        Apa Keunggulan Metode Hidroponik?
        </div>
      </div>
    </div>
    
    <div class="dijual text-white">
      <div class="container">
          <center>
            <h2>Apa saja yang dijual? </h2>
          </center>
      </div>
    </div>


    <div class="container">
      <div class="katalog">
        <div class="row">
          <div class="col-md-3">
          <div class="card">
            <img src="img/sayuran/bayam.png" class="card-img-top" alt="...">
            <div class="card-body">
              <center>
              <h5 class="card-title">Bayam </h5>
             </center>
            </div>
          </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="img/sayuran/kangkung.png" class="card-img-top" alt="...">
              <div class="card-body">
                <center>
                <h5 class="card-title">Kangkung</h5>
                </center>
              </div>
            </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="img/sayuran/pakcoy.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <center>
                    <h5 class="card-title">Pakcoy</h5>
                  </center>
                </div>
              </div>
              </div>
            <div class="col-md-3">
             <div class="card">
              <img src="img/sayuran/sawiputih.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <center>
                  <h5 class="card-title">Sawi</h5>
                  </center>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

    <div class="pengertian">
      <div class="container">
        <h2>Visit Us</h2><br>
        <h3>
          <i class="fab fa-instagram ml-5"></i> @histore
          <i class="fab fa-facebook ml-5"></i>histore
        </h3>
      </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>