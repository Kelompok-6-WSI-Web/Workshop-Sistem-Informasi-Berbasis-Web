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
        WHERE tanggal_pembelian BETWEEN '$tgl_mulai' AND '$tgl_selesai' AND status='konfirmasi'");
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
    LAPORAN PEMBELIAN dari <?php echo $tgl_mulai ?> hingga <?php echo $tgl_selesai ?>
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
            <th>No</th>
            <th>Pelanggan</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Jumlah</th>
            <th>Detail Transaksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if($BOOL == true){
        ?>
        <?php $total=0; ?>
        <?php foreach ($ambil as $key => $value ): ?>
        <?php $total+=$value['total_pembelian'] ?>
        <tr>
            <td><?php echo $key+1; ?></td>
            <td><?php echo $value["nama"] ?></td>
            <td><?php echo $value["tanggal_pembelian"] ?></td>
            <td><?php echo $value["status"] ?></td>
            <td><?php echo number_format ($value["total_pembelian"]) ?></td>
            
            <td>
                <a href="detail.php?id=<?= $value['id_pembelian']?>">Detail</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="4">Total</th>
            <th> Rp. <?php echo number_format($total) ?></th>
            <th></th>
        </tr>
    </tfoot>
    <?php } ?>
</table>
</div>