<br>
<br>
<br>
<br>
<div class="container">
<h2>Berita</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Banner</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query ("select * from berita"); ?>
    <?php while($pecah = $ambil->fetch_assoc()){?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['judul_news'];?></td>
            <td><?php echo $pecah['deskripsi_news'];?></td>
            <td>
                <img src="../banner_news/<?php echo $pecah['banner_news'];?>" width="100px">
            </td>
            <td>
                <a href="index.php?halaman=hapusberita&id=<?php echo $pecah['id_news'];?>" class="btn-danger btn">Hapus</a>
                <a href="" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php }?>
    </tbody>
</table>
<a href="index.php?halaman=tambahberita" class="btn-primary btn"> Tambah Berita</a>
</div>