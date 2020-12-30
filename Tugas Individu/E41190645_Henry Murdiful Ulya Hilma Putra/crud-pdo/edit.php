<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$kolom = "*";
		$tabel = "dosen";
		$where = "Nip='$id'"; 
		$mahasiswa = $koneksi->getID($kolom,$tabel,$where);
		foreach ($mahasiswa as $key => $value){
	}
?>
<h2>Edit Data Mahasiswa</h2>
<form method="post" action="">
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="Nip" value="<?php echo $value['Nip'] ?>"></td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama" value="<?php echo $value['Nama'] ?>"></td>					
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="Jenis_kelamin" value="Laki-Laki"> Laki - Laki
					<input type="radio" name="Jenis_kelamin" value="Perempuan"> Perempuan
				</td>
			</tr>	
			<tr>
				<td>Umur</td>
				<td><input type="text" name="Umur" value="<?php echo $value['Umur'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" name="update" value="Update"></td>					
			</tr>				
		</table>
	<?php } ?>
	</form>