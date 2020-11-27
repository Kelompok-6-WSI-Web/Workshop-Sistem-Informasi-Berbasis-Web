<?php
session_start();
// mendapat id produk dari url
$id_produk = $_GET['id'];


// jk produk di krnjang, produk di +1
if(isset($_SESSION['keranjang'][$id_produk]))
{
    $_SESSION['keranjang'][$id_produk]+=1;
}
// jika blm dikeranjang, produk = 1
else
{
    $_SESSION['keranjang'][$id_produk] = 1;
}


// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

echo "<script> alert ('Produk telah ditambahkan ke keranjang'); </script>";
echo "<script> location='keranjang.php' ;</script>";

?>