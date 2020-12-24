<?php

$ambil = $koneksi->query("select * from berita where id_news='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$bannernews = $pecah['banner_news'];
if (file_exists(".../banner_news/$bannernews")){
    unlink(".../banner_news/$bannernews");
}
$koneksi->query("DELETE FROM produk WHERE id_news='$_GET[id]'");

echo "<script> alert('produk terhapus'); </script>";
echo "<script> location='index.php?halaman=news'; </script>";
?>