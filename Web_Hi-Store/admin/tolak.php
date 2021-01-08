<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $koneksi->query("UPDATE pembelian SET status='tertolak' WHERE id_pembelian=$id");
    echo  "<script> alert('Konfirmasi Berhasil'); </script>";
    echo "<script> location='index.php?halaman=struk'; </script>";
?>
