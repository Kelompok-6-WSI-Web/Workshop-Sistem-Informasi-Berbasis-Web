<br>
<br>
<br>

<div class="container">
<h2>
    HALAMAN PRODUK ADMIN
</h2>

<table class='table table-bordered'>
    <thead>
        <tr>
            <th> NO </th>
            <th> JUDUL </th>
            <th> DESKRIPSI </th>
            <th> BANNER </th>
            <th> AKSI </th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
         <?php $ambil=$koneksi->query("select * from berita"); ?>
         <?php while ($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
            <td>  <?php echo $nomor; ?> </td>
            <td> <?php echo $pecah['judul_news']; ?> </td>
            <td>  <?php echo $pecah['deskripsi_news']; ?> </td>
            <td> 
                    <img src="../banner/<?php echo $pecah['banner_news']; ?>" width="100">
            </td>
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