<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$kolom = "*";
		$tabel = "buku";
		$where = "isbn='$id'"; 
		$buku = $koneksi->getID($kolom,$tabel,$where);
		foreach ($buku as $key => $value){
	}
?>
<h2>Edit Data Buku</h2>
<form method="post" action="">
		<table>
		<tr>
			<td>ISBN</td>
				<td><input type="text" name="isbn" value="<?php echo $value['isbn'] ?>"></td>					
			</tr>
			<tr>
				<td>JUDUL BUKU</td>
				<td><input type="text" name="judul" value="<?php echo $value['judul'] ?>"></td>					
			</tr>	
			<tr>
				<td>PENGARANG</td>
				<td><input type="text" name="pengarang" value="<?php echo $value['pengarang'] ?>"></td>					
			</tr>
			<tr>
				<td>PENERBIT</td>
				<td><input type="text" name="penerbit" value="<?php echo $value['penerbit'] ?>"></td>					
			</tr>
			<tr>
				<td>LEMBAR HALAMAN</td>
				<td><input type="text" name="halaman" value="<?php echo $value['halaman'] ?>"></td>					
			</tr>
			<tr>
				<td>TAHUN TERBIT</td>
				<td><input type="text" name="tahun" value="<?php echo $value['tahun'] ?>"></td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="update" value="Update"></td>					
			</tr>				
		</table>
	<?php } ?>
	</form>