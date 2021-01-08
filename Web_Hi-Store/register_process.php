<?php 

include_once 'koneksi.php';

$id_kategori = 2;
$email = $_POST['email'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];


$query = $koneksi->query("INSERT INTO `users` (`id_kategori`, `email`, `nama`, `no_hp`, `alamat`, `password`) 
                        VALUES ('$id_kategori', '$email', '$nama', '$no_hp', '$alamat', '$password')");

// UNTUK CEK QUERY APAKAH BISA DIJALANKAN
// if (!$query) {
//     die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
// " - " . mysqli_error($koneksi));
// } else {
//     echo "halo";
// }


header("location:login.php?pesan=input");
?>