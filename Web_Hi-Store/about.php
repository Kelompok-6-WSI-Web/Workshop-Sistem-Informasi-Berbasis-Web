<?php
include 'koneksi.php';
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
    <link rel="stylesheet" href="news.css">
    <script src="https://kit.fontawesome.com/c44947b450.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">

    <title>Hi-Store</title>
  </head>
  <body id="page-top">
  <?php include('navbar.php'); ?>
  <div class="profil text-white">
          <center>
            <h2>Profile Product Owner</h2>
          </center>
    </div>
  <div class="keunggulan">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="img/team/kung.jpg" alt="" class="gambar">
          </div>
          <div class="col-md-8">
              <h5 class="card-title">H. Affandi</h5>
              <p class="card-text">Usia 74 Tahun <br>
              Jl. Brawijaya No.63 Q <br>
              Jubung, Sukorambi, Jember, Jawa Timur, 68151 <br>
              Berkecipung dibidang Pertanian sejak 1966 di PTP 27 Jember<br>
              Mulai budidaya tanaman dengan metode Hidroponik sekitar tahun 2019 </p>
          </div>
        </div>
      </div>
    </div>
  <div class="teamm text-white">
          <center>
            <h2>Team </h2>
          </center>
    </div>
      <div class="team">
        <div class="row">
          <div class="col-md-2">
          <div class="card">
            <img src="img/team/udin.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <center>
              <h5 class="card-title">Udin </h5>
             </center>
            </div>
          </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="img/team/fara.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <center>
                <h5 class="card-title">Fara</h5>
                </center>
              </div>
            </div>
            </div>
            <div class="col-md-2">
              <div class="card">
                <img src="img/team/dayat1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <center>
                    <h5 class="card-title">Dayat</h5>
                  </center>
                </div>
              </div>
              </div>
              <div class="col-md-2">
          <div class="card">
            <img src="img/team/kung.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <center>
              <h5 class="card-title">H. Affandi</h5>
             </center>
            </div>
          </div>
          </div>
            <div class="col-md-2">
             <div class="card">
              <img src="img/team/sinta.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <center>
                  <h5 class="card-title">Sinta</h5>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-2">
          <div class="card">
            <img src="img/team/henry.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <center>
              <h5 class="card-title">Henry</h5>
             </center>
            </div>
          </div>
          </div>
        </div>
      </div>
  <div class="card">
  <div class="card-header">
    Quote
  </div>
    <?php include('footer.php'); ?>
    
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