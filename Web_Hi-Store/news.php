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
    

    <title>Hi Store</title>
  </head>
  <body id="page-top">
  <?php include('navbar.php'); ?>
    <div class="container">
        <div class="berita">

          
        <?php $ambil = $koneksi->query("select * from berita"); ?>
        <?php while ($perberita = $ambil->fetch_assoc()) { ?>
          
          <div class="card mb-3">
              <img class="card-img-top" src="banner/<?php echo $perberita['banner_news'];?> " alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title"><?php echo $perberita['judul_news'];?></h5>
                  <p class="card-text"><?php echo $perberita['deskripsi_news'];?></p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
          </div>
          <?php }?>



        </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>