<?php 
		$kolom = "*";
		$tabel = "dosen";
		$dosen = $koneksi->getID($kolom,$tabel); 
?>
<table border="1">
	<tr>
		<td>Nip</td>
		<td>Nama</td>
		<td>Jenis Kelamin</td>
		<td>Umur</td>
		<td>Aksi</td>
	</tr>
		<?php foreach ($dosen as $key => $value){ ?>
	<tr>
		<td><?php echo $value['Nip']; ?></td>
		<td><?php echo $value['Nama']; ?></td>
		<td><?php echo $value['Jenis_kelamin']; ?></td>
		<td><?php echo $value['Umur']; ?></td>
		<td>
			<a href="index.php?hal=edit&&id=<?php echo $value['Nip'] ?>" ?>Edit</a> |
			<a href="index.php?hal=hapus&&id=<?php echo $value['Nip'] ?>" ?>Hapus</a>
		</td>
	</tr>
		<?php } ?>
</table>