<?php session_start(); ?>
<?php
include 'koneksi.php';
 
// mendapat id produk dari url
$id_produk = $_GET['id'];

// ambil data
$ambil = $koneksi->query("select * from produk where id_produk='$id_produk'");
$detail = $ambil -> fetch_assoc();

// echo "<pre>";
// print_r($detail);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Detail Produk </title>

</head>
<body>
      <?php include('navbar.php'); ?>

      <!-- konten -->
<section class="konten">
<div class="katalog">
<div class="container">
    <br>
    <br>
    <br>
        <h1> DETAIL BARANG </h1>
        <br>
    <div class="row">
        <div class="col-md-6">
            <img src="foto_produk/<?php echo $detail["foto_produk"]; ?>">
        </div>
        <div class="col-md-6">
            <h2><?php echo $detail['nama_produk']; ?> </h2>
            <h4> Rp. <?php echo number_format($detail['harga_produk']); ?> </h2>

            <form method="POST">
                <div class="form-group">
                    <div class="input-group">
                        <input type="number" min="1" name="jumlah" class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-primary" name="beli"> Beli </button>
                            <a href="cart_user.php" class="btn btn-primary"> Lanjut belanja </a>
                        </div>
                    </div>
                </div>           
            </form>

            <?php
            // jika ada tombol beli
            if (isset($_POST["beli"]))
            {
                // mendapatkan jumlah yg diinputkan
                $jumlah = $_POST["jumlah"];

                // masukkan di keranjang
                $_SESSION["keranjang"]["$id_produk"] = $jumlah;

                echo "<script> alert ('Produk telah ditambahkan ke keranjang'); </script>";
                echo "<script> location='keranjang.php' ;</script>";
            }
            ?>


            <p><?php echo $detail['deskripsi_produk']; ?> </p>
        </div>
    </div>


</div>
</div>
</section>

</body>
</html>