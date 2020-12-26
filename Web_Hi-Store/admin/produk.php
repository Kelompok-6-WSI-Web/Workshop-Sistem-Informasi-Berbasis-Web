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
            <th> NAMA </th>
            <th> HARGA </th>
            <th> BERAT </th>
            <th> FOTO </th>
            <th> AKSI </th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
         <?php $ambil=$koneksi->query("select * from produk"); ?>
         <?php while ($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
            <td>  <?php echo $nomor; ?> </td>
            <td> <?php echo $pecah['nama_produk']; ?> </td>
            <td>  <?php echo $pecah['harga_produk']; ?> </td>
            <td>  <?php echo $pecah['berat_produk']; ?> </td>
            <td> 
                    <img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100">
            </td>
            <td>  
                 <a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn-danger btn"> HAPUS </a>
                 <a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn btn-warning"> UBAH </a>
            </td>
        </tr>
        <?php $nomor++; ?>
         <?php } ?>
    </tbody>   
</table>
<a href="index.php?halaman=tambahproduk" class="btn-primary btn">TAMBAH PRODUK</a>
</div>