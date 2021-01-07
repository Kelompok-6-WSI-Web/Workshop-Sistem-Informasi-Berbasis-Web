<br>
<br>
<br>

<div class="container">
<h2>
    STRUK MASUK PELANGGAN
</h2>

<table class='table table-bordered'>
    <thead>
        <tr>
            <th> Nama Pelanggan </th>
            <th> Struk </th>
            <th> No HP </th>
            <th> Alamat </th>
            <th> AKSI </th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
         <?php $ambil=$koneksi->query("SELECT * FROM pembelian pm LEFT JOIN users us ON pm.id_user=us.id_user
        WHERE bukti"); ?>
         <?php while ($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
            <td> <?php echo $pecah['nama']; ?> </td>
            <td> 
                    <img src="bukti_pembayaran/<?php echo $pecah['bukti']; ?>" width="100">
            </td>
            <td>  <?php echo $pecah['no_hp']; ?> </td>
            <td> <?php echo $pecah['alamat']; ?> </td>

            <td>  
                 <a href="index.php?halaman=hapusberita&id=<?php echo $pecah['id_news']; ?>" class="btn-danger btn"> HAPUS </a>
                 <a href="index.php?halaman=ubahberita&id=<?php echo $pecah['id_news']; ?>" class="btn btn-warning"> UBAH </a>
            </td>
        </tr>
        <?php $nomor++; ?>
         <?php } ?>
    </tbody>   
</table>
<a href="index.php?halaman=tambahberita" class="btn-primary btn"> TAMBAH BERITA </a>
</div>