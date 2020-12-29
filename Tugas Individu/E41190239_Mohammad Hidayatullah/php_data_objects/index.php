<?php 
	include('database.php');
	$koneksi = new Database();
	//Tambah Data Baru
	if (isset($_POST['tambah'])) {
		$isbn = $_POST['isbn'];
		$judul = $_POST['judul'];
		$pengarang = $_POST['pengarang'];
		$penerbit = $_POST['penerbit'];
		$halaman = $_POST['halaman'];
		$tahun = $_POST['tahun'];
		$tabel = "buku";
		$kolom = "'$isbn','$judul','$pengarang','$penerbit','$halaman','$tahun'";
		$koneksi->add_data($tabel,$kolom);
		header('location:index.php?pesan=berhasil');
	}elseif (isset($_POST['update'])) {
		$isbn = $_POST['isbn'];
		$judul = $_POST['judul'];
		$pengarang = $_POST['pengarang'];
		$penerbit = $_POST['penerbit'];
		$halaman = $_POST['halaman'];
		$tahun = $_POST['tahun'];
		$tabel = "buku";
		$data = "isbn = '$isbn',judul = '$judul',pengarang = '$pengarang',penerbit = '$penerbit',halaman = '$halaman',tahun = '$tahun' ";
		$where = "isbn ='$isbn' ";
		
		$koneksi->update($tabel,$data,$where);
		header('location:index.php?pesan=update');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD PDO</title>
</head>
<body>
	<ul style="list-style-type: none;">
		<li><a style="text-decoration: none;" href="./">Home</a></li>
		<li><a style="text-decoration: none;" href="index.php?hal=tambah">Tambah Buku</a></li>
	</ul>
	<?php 
		if (isset($_GET['pesan'])) {
		 	if ($_GET['pesan'] == "berhasil") {
		 		echo "Berhasil menambahkan buku baru";
		 	}elseif ($_GET['pesan'] == "update") {
		 		echo "berhasil memperbarui data buku";
		 	}elseif ($_GET['pesan'] == "hapus") {
		 		echo "berhasil menghapus buku";
		 	}
		 } 
	?>
	<div>
	<?php
		if (isset($_GET['hal'])) {
		  	$hal = $_GET['hal'];
		  	switch ($hal) {
		  		case 'tambah':
		  			include 'input.php';
		  			break;
		  		case 'edit':
		  			include 'edit.php';
		  			break;
		  		case 'hapus':
		  			include 'hapus.php';
		  			break;
		  		default:
		  			echo "Halaman Tidak Ada";
		  			break;
		  	}
		}else{
			include 'test.php';
		}  
	?>
</div>
</body>
</html>