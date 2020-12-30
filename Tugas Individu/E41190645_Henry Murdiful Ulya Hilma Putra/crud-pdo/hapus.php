<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$tabel = "dosen";
		$where = "Nip='$id'"; 
		$mahasiswa = $koneksi->remove($tabel,$where);
		header('location:index.php?pesan=hapus');
	}  
?>