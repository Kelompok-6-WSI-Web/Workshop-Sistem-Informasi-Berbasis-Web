<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Pembelian</title>
 </head>>
    <br>
    <br>
    <br>

<body>    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- NAVBAR -->
<?php include('navbar.php'); ?>

<section class="konten">
    <div class="container">
    <br>
    <br>
    <br>
        <h1> DETAIL PEMBELIAN</h1>
        <?php
        $id = $_GET['id'];
        $ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan
            ON pembelian.id_user=users.id_user
            WHERE pembelian.id_pembelian='$id'");
        $detail = $ambil->fetch_assoc();
        ?>
        <pre><?php print_r($detail); ?></pre>

        <strong><?php echo $detail['nama']; ?></strong> <br>
        <p>
            <?php echo $detail['no_hp']; ?> <br>  
            <?php echo $detail['email']; ?>
        </p>
        <p>
            Tanggal: <?php echo $detail['tanggal_pembelian']; ?> <br>
            Total: <?php echo $detail['total_pembelian']; ?>
        </p>

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

        </div>
    </div>
</section>

<?php 
        if (isset($_POST["checkout"]))
        {
            $id_user = $_SESSION["users"]["id_user"];
            $id_ongkir = $_POST["id_ongkir"];
            $tanggal_pembelian = date("Y-m-d");

        }

    ?>

</body>
</html>


    