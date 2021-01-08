<?php 
$semuadata=array();
$tgl_mulai = "-";
$tgl_selesai = "-";
$BOOL = false;
if (isset($_POST["kirim"]))
{
    $tgl_mulai = $_POST["tglm"];
    $tgl_selesai = $_POST["tgls"];
    $ambil = $koneksi->query("SELECT * FROM pembelian pm LEFT JOIN users us ON pm.id_user=us.id_user
        WHERE tanggal_pembelian BETWEEN '$tgl_mulai' AND '$tgl_selesai' AND status='proses'");
   if($ambil){
    $pecah = $ambil->fetch_assoc();
    $BOOL = true;
   }
    //echo "<pre>";
    //print_r($semuadata);
    //echo "</pre>";
}
?>

<br>
<br>
<br>

<div class="container">
<h2>
    KONFIRMASI PEMBELIAN dari <?php echo $tgl_mulai ?> hingga <?php echo $tgl_selesai ?>
</h2>
<hr>

<form method="post">
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label>Tanggal Mulai</label>
                <input type="date" class="form-control" name="tglm" value="<?php echo $tgl_mulai ?>">
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label>Tanggal Selesai</label>
                <input type="date" class="form-control" name="tgls" value="<?php echo $tgl_selesai ?>">
            </div>
        </div>
        <div class="col-md-2">
                <label>&nbsp;</label><br>
                <button class="btn-btn-primary" name="kirim">Lihat</button>
            </div>
        </div>
    </div>
</form>

<div class="container">
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
        <?php 
        if($BOOL == true){
        ?>
        <?php $total=0; ?>
        <?php foreach ($ambil as $key => $value ): ?>
        <tr>
            <td><?php echo $value["nama"] ?></td>
            <td><img src="../bukti_pembayaran/<?= $value["bukti"] ?>" style="width: 20%;"></td>
            <td><?php echo $value["no_hp"] ?></td>
            <td><?php echo $value["alamat"] ?></td>
            <td>
                <a href="terima.php?id=<?= $value['id_pembelian']?>">Terima</a> | 
                <a href="tolak.php?id=<?= $value['id_pembelian']?>">Tolak</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
    <?php } ?>
</table>
</div>