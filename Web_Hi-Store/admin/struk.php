<?php 
    $ambil = $koneksi->query("SELECT * FROM pembelian pm LEFT JOIN users us ON pm.id_user=us.id_user
        WHERE status='proses'");
   if($ambil){
    $pecah = $ambil->fetch_assoc();
   }
    //echo "<pre>";
    //print_r($semuadata);
    //echo "</pre>";
?>

<br>
<br>
<br>
<div class="container">
 <h1>KONFIRMASI STRUK PELANGGAN</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Struk</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $total=0; ?>
        <?php foreach ($ambil as $key => $value ): ?>
        <tr>
            <td><?php echo $value["nama"] ?></td>
            <td><img src="../bukti_pembayaran/<?= $value["bukti"] ?>" style="width: 20%;"></td>
            <td><?php echo $value["no_hp"] ?></td>
            <td><?php echo $value["alamat"] ?></td>
            <td>
                <a href="detail.php?id=<?= $value['id_pembelian']?>">Detail</a> |
                <a href="terima.php?id=<?= $value['id_pembelian']?>">Terima</a> | 
                <a href="tolak.php?id=<?= $value['id_pembelian']?>">Tolak</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>