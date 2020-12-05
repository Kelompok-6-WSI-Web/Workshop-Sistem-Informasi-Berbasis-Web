<?php 

	include_once 'koneksi.php';
    
    $id_kategori = 2;
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
	$password = $_POST['password'];
	

    mysqli_query($koneksi,"INSERT INTO users VALUES ('','$id_kategori','$email','$nama','$no_hp','$alamat','$password')");


	header("location:login.php?pesan=input");
?>