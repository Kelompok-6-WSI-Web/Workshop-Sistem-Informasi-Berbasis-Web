<?php
session_start();

include 'koneksi.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> KERANJANG ANDA </title>

</head>
<body>

<!-- untuk css tampilan keranjang ya -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    

<!-- NAVBAR -->
<?php include('navbar.php'); ?>
<?php
$id = $_SESSION['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM pembelian WHERE id_user-$id");
?>

<!-- konten -->
<section class="konten">
    <div class="container">
    <br>
    <br>
    <br>
        <h1> KERANJANG BELANJA </h1>
        <br>
        <form action="checkout.php" method="post">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th> NO </th>
                    <th> NAMA PRODUK </th>
                    <th> HARGA PRODUK </th>
                    <th> JUMLAH </th>
                    <th> SUBHARGA </th>
                    <th> AKSI </th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor=1; ?>
                <?php if(isset($_SESSION['keranjang'])): ?>
                <?php foreach ($_SESSION['keranjang'] as $id_produk => $jumlah): ?>
        
        <!-- menampilkan produk -->
                <?php
                $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$id_produk'"); 
                $pecah = $ambil->fetch_assoc();
                $subharga = $pecah["harga_produk"]*$jumlah;

                // echo "<pre>";
                // print_r($pecah);
                // echo "</pre>";  
                ?>

                <tr>
                    <td> <?php  echo $nomor;?> </td>
                    <td><?php echo $pecah["nama_produk"]; ?></td>
                    <input type="hidden" name="id_produk[]" value="<?php echo $pecah['id_produk'] ?>">
                    <td> Rp. <?php echo number_format($pecah["harga_produk"]); ?> </td>
                    <td> <?php echo $jumlah; ?> </td>
                    <td> Rp. <?php echo number_format($subharga); ?></td>
                    <td> <a href="hapuskeranjang.php?id=<?php echo $id_produk ?>"  class="btn btn-danger btn-xs"> Hapus </a> </td>
                </tr>
                <?php $nomor++; ?>
                <?php endforeach ?>
                <?php endif ?> 
            </tbody>
        </table>
        
        <a href="cart_user.php" class="btn btn-primary"> Lanjut belanja </a>
        <button class="btn btn-primary" name="submit">Checkout</button>
                </form>
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