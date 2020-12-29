<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$tabel = "buku";
		$where = "isbn='$id'"; 
		$buku = $koneksi->remove($tabel,$where);
		header('location:index.php?pesan=hapus');
	}  
?>