<?php 
		$kolom = "*";
		$tabel = "buku";
		$buku = $koneksi->getID($kolom,$tabel); 
?>
<table border="1">
	<tr>
		<td>ISBN</td>
		<td>JUDUL BUKU</td>
		<td>PENGARANG</td>
		<td>PENERBIT</td>
		<td>LEMBAR HALAMAN</td>
		<td>TAHUN TERBIT</td>
		<td>AKSI</td>
	</tr>
		<?php foreach ($buku as $key => $value){ ?>
	<tr>
		<td><?php echo $value['isbn']; ?></td>
		<td><?php echo $value['judul']; ?></td>
		<td><?php echo $value['pengarang']; ?></td>
		<td><?php echo $value['penerbit']; ?></td>
		<td><?php echo $value['halaman']; ?> lembar</td>
		<td>tahun <?php echo $value['tahun']; ?></td>
		<td>
			<a href="index.php?hal=edit&&id=<?php echo $value['isbn'] ?>" ?>Edit</a> |
			<a href="index.php?hal=hapus&&id=<?php echo $value['isbn'] ?>" ?>Hapus</a>
		</td>
	</tr>
		<?php } ?>
</table>