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

    <title>Navbar</title>
  </head>
  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainnav">
        <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" height="30px" width="30px"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
            <a class="nav-link js-scroll-trigger text-white ml-4" href="home.php">HOME<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-white ml-4" href="index.php?halaman=produk">PRODUCT</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-white ml-4" href="index.php?halaman=struk">STRUK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger text-white ml-4" href="index.php?halaman=news">NEWS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger text-white ml-4" href="index.php?halaman=laporan">LAPORAN</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user text-white ml-3 mt-2"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php if(!isset($_SESSION['user'])){ ?>
                <a class="dropdown-item" href="login.php">Sign In</a>
                <a class="dropdown-item" href="register.php">Sign Up</a>
                <div class="dropdown-divider"></div>
                <?php }else{ ?>   
                <a class="dropdown-item" href="logout.php">Log Out</a>
              </div>
              <?php }?>
            </li>
        </ul>
        </div>
        </div>  
    </nav>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
  </body>
</html>