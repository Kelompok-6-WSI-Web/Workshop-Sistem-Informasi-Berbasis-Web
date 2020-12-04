<?php
session_start();

include 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CHECKOUT</title>

</head>
<body>

<!-- untuk css tampilan keranjang ya -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    

<!-- NAVBAR -->
<?php include('navbar.php'); ?>

<!-- konten -->
<section class="konten">
    <div class="container">
    <br>
    <br>
    <br>
        <h1> CHECKOUT</h1>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th> NO </th>
                    <th> NAMA PRODUK </th>
                    <th> HARGA PRODUK </th>
                    <th> JUMLAH </th>
                    <th> SUBHARGA </th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor=1; ?>
                <?php $totalbelanja=0; ?>
                <?php foreach ($_SESSION['keranjang'] as $id_produk => $jumlah): ?>
        
        <!-- menampilkan produk -->
                <?php
                $ambil = $koneksi->query("select * from produk where id_produk = '$id_produk'"); 
                $pecah = $ambil->fetch_assoc();
                $subharga = $pecah["harga_produk"]*$jumlah;
                

                // echo "<pre>";
                // print_r($pecah);
                // echo "</pre>";  
                ?>

                <tr>
                    <td> <?php  echo $nomor;?> </td>
                    <td><?php echo $pecah["nama_produk"]; ?></td>
                    <td> Rp. <?php echo number_format($pecah["harga_produk"]); ?> </td>
                    <td> <?php echo $jumlah; ?> </td>
                    <td> Rp. <?php echo number_format($subharga); ?></td>
                </tr>
                <?php $nomor++; ?>
                <?php $totalbelanja+=$subharga; ?>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4">Total Belanja</th>
                    <th>Rp. <?php echo number_format($totalbelanja) ?> </th>
                </tr>
            </tfoot>
        </table>

<!--form pembelian -->

        <form method="post">
            <div class="row">
            <div class="col-md-4">
                    <select class="form-control" name="id_ongkir">
                        <option value="">Pilih Ongkos Kirim</option>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM ongkir");
                        while($perongkir = $ambil->fetch_assoc()){
                        ?>
                        <option value="<?php echo $perongkir["id_ongkir"] ?>">
                            <?php echo $perongkir['nama_kecamatan'] ?> -
                            <?php echo $perongkir['tarif'] ?> 
                        </option>
                        
                        <?php
                            }
                        ?>
                    </select>
            </div>
            </div>
            
        </form>
        <br>
        <a href="checkout.php" class="btn btn-primary">Checkout</a>

        <?php 
        if (isset($_POST["checkout"]))
        {
            $id_ongkir = $_POST["id_ongkir"];
            $tanggal_pembelian = date("Y-m-d");

            $ambil = $koneksi->query("SELECT * FROM ongkir WHERE id_ongkir='$id_ongkir'");
            $arrayongkir = $ambil->fetch_assoc();
            $tarif = $arrayongkir['tarif'];

            $total_pembelian = $totalbelanja + $tarif;

            //menyimpan data ke tabel pembelian
            $koneksi->query("INSERT INTO pembelian (
            id_ongkkir,tanggal_pembelian,total_pembelian)
            VALUES ('$id_ongkir','$tanggal_pembelian','$total_pembelian')"
            );

            //mendapatkan id_pembelian barusan terjadi
            $id_pembelian_barusan = $koneksi->insert_id;

            foreach ($_SESSION["keranjang"] as $id_produk => $jumlah)
            {
                $koneksi->query("INSERT INTO pembelian_produk (id_pembelian,id_produk,jumlah)
                VALUES ('$id_pembelian_barusan','$id_produk','$jumlah') ");
            }


        }
        ?>
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