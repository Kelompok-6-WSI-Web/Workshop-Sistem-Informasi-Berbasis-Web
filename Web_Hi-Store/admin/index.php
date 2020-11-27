<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="home.css">

    <title>Website Hi - Store</title>
     <style>
        #mainnav {
            background-color: #99B8A4;
        }
    </style>
  </head>
  <body id="page-top">

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-primary fixed-top " id="mainnav">
    <div class="container">
    <a class="navbar-brand text-white" href="#">Hi - Store</a>
    <button class="navbar-toggler navbar-togler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
				

             <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link text-white" href="home.php"> HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="index.php?halaman=produk"> PRODUK </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="index.php?halaman=about"> ABOUT </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="index.php?halaman=news"> NEWS </a>
                    </li>
                    <li>
                        <a href="cart_user.php"><i class="fas fa-shopping-cart text-white ml-3 mt-3"></i></a>            
                    </li>
                     <li>
                         <i class="fas fa-user-circle text-white ml-3 mt-3" ></i>
                     </li>
                </ul>
               
            </div>
        </div>
    </nav>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                    if($_GET['halaman']=="produk")
                    {
                        include'produk.php';
                    }
                    elseif($_GET['halaman']=="about")
                    {
                        include 'about.php';
                    }
                    elseif($_GET['halaman']=="news")
                    {
                        include 'news.php';
                    }
                    elseif($_GET['halaman']=="detail")
                    {
                        include 'detail.php';
                    }
                    elseif($_GET['halaman']=="tambahproduk")
                    {
                        include 'tambahproduk.php';
                    }
                    elseif($_GET['halaman']=="hapusproduk")
                    {
                        include 'hapusproduk.php';
                    }
                    elseif($_GET['halaman']=="ubahproduk")
                    {
                        include 'ubahproduk.php';
                    }
                    else 
                    {
                        include 'home.php';
                    }
                }
                ?>
            </div>     



    

    
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
      </body>
</html>
</body>
</html>