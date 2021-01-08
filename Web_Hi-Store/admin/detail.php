<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Nota Pembelian</title>
</head>
    <br>
    <br>
    <br>

<body>    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



<section class="konten">
    <div class="container">
        <h1> DETAIL PEMBELIAN</h1>
        <?php
        $id = $_GET['id'];
        $total = null ;
        $ambil = $koneksi->query("SELECT * FROM pembelian JOIN users
            ON pembelian.id_user=users.id_user
            WHERE pembelian.id_pembelian=$id");
        while($detail = mysqli_fetch_array($ambil)):
        ?>

        <strong><?php echo $detail['nama']; ?></strong> <br>
        <p>
            <?php echo $detail['no_hp']; ?> <br>  
            <?php echo $detail['email']; ?>
        </p>
        <p>
            Alamat : <?php echo $detail['alamat']; ?> <br>
            Tanggal: <?php echo $detail['tanggal_pembelian']; ?> <br>
            Total: <?php echo $detail['total_pembelian'];
            $total = $detail['total_pembelian'];
            endwhile;
            ?>
        </p>

        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th> NO </th>
                    <th> NAMA PRODUK </th>
                    <th> HARGA PRODUK </th>
                    <th> BERAT PRODUK </th>
                    <th> JUMLAH </th>
                    <th> SUBHARGA </th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor=1; ?>
                <?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk INNER JOIN produk ON pembelian_produk.id_produk=produk.id_produk
                WHERE id_pembelian='$_GET[id]'"); ?>
                <?php while ($pecah=$ambil->fetch_assoc()){ ?>
                

                <tr>
                    <td> <?php  echo $nomor;?> </td>
                    <td><?php echo $pecah["nama_produk"]; ?></td>
                    <td> Rp. <?php echo number_format($pecah["harga_produk"]) ; ?></td>
                    <td><?php echo $pecah["berat_produk"]; ?> Gr. </td>
                    <td><?php echo $pecah["jumlah"]; ?></td>
                    <td> Rp. <?php echo number_format($pecah["subharga"]) ; ?></td>
                       <?php echo $koneksi->error?>
                </tr>
                <?php 
                $nomor++; 
                    
                ?>
                <?php } ?>
            </tbody>
        </table>
        <a href="index.php?halaman=struk" class="btn-primary btn"> STRUK </a>

    </div>


            
</body>
</html>