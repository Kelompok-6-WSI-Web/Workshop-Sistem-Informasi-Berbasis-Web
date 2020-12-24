<?php
    include 'koneksi.php';
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog</title>
    </head>
<body>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="cart_user.css">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php include('navbar.php'); ?>
    
 <!-- isi konten -->
    <section class="konten">
    <div class="katalog">
    <div class="container">
        <h2> DAFTAR SAYUR </h2> <br>

        <div class="row">
            
        
            <?php $ambil = $koneksi->query("select * from produk"); ?>
            <?php while ($perproduk = $ambil->fetch_assoc()) { ?>

<!-- melihat array -->


            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                <img class="card-img-top" src="foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="">
                    
                        <h3 class="card-title"> <?php echo $perproduk['nama_produk']; ?> </h3>
                        <h5 class="card-title">Rp. <?php echo number_format ($perproduk['harga_produk']); ?></h5>
                        <a href="beli.php?id=<?php echo $perproduk['id_produk'];?>" class="btn"> Add to cart </a>
                        <a href="detail.php?id=<?php echo $perproduk['id_produk']; ?> " class="btn"> Detail </a>
                    </div>
                    
                </div>
            </div>
            <?php } ?>
        
        
        </div>
    </div>
    </div>
</section>



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
    
</body>
</html>