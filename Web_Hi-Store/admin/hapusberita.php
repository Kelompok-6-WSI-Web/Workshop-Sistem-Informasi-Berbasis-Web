<?php

$ambil = $koneksi->query("select * from berita where id_news='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$bannernews = $pecah['banner'];
if (file_exists(".../banner/$bannernews")){
    unlink(".../banner/$bannernews");
}
$koneksi->query("DELETE FROM berita WHERE id_news='$_GET[id]'");

echo "<script> alert('Berita Terhapus'); </script>";
echo "<script> location='index.php?halaman=news'; </script>";
?>