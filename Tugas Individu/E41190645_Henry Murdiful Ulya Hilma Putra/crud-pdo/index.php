<?php 
	include('database.php');
	$koneksi = new Database();
	//Tambah Data Baru
	if (isset($_POST['tambah'])) {
		$nim = $_POST['Nip'];
		$nama = $_POST['Nama'];
		$jenis_kelamin = $_POST['Jenis_kelamin'];
		$umur = $_POST['Umur'];
		$tabel = "dosen";
		$kolom = "'$nip','$nama','$jenis_kelamin','$umur'";
		$koneksi->add_data($tabel,$kolom);
		header('location:index.php?pesan=berhasil');
	}elseif (isset($_POST['update'])) {
		$nim = $_POST['Nip'];
		$nama = $_POST['Nama'];
		$jk = $_POST['Jenis_kelamin'];
		$umur = $_POST['Umur'];
		$tabel = "dosen";
		$data = "Nama = '$nama',Jenis_kelamin = '$jenis_kelamin',Umur = '$umur' ";
		$where = "Nip ='$nim' ";
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
		<li><a style="text-decoration: none;" href="index.php?hal=tambah">Tambah</a></li>
	</ul>
	<?php 
		if (isset($_GET['pesan'])) {
		 	if ($_GET['pesan'] == "berhasil") {
		 		echo "Tambah Data Berhasil";
		 	}elseif ($_GET['pesan'] == "update") {
		 		echo "Update Data Berhasil";
		 	}elseif ($_GET['pesan'] == "hapus") {
		 		echo "Hapus Data Berhasil";
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