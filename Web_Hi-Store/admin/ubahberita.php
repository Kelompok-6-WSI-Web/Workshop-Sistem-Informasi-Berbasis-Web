<br>
<br>
<br>

<div class="container">
<h2>
HALAMAN UBAH BERITA </h2>

<?php
$ambil = $koneksi->query("select * from berita where id_news='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
<div class="form-group">
    <label> Judul </label>
    <input type="text" class="form-control" name="judul" 
    value="<?php echo $pecah['judul_news']; ?>">
</div>
<div class="form-group">
    <label> Deskripsi </label>
    <textarea class="form-control" name="deskripsi" rows="10">
    <?php echo $pecah['deskripsi_news']; ?>
    </textarea>
</div>
<div class="form-group">
    <label> Ganti Foto </label>
    <input type="file" name="foto" class="form-control">
    </div>
<div class="form-group">
    <img src="../banner/<?php echo $pecah['banner_news'] ?>" width="200">
</div>


<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah']))
{
    $id = $_GET['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    if(!empty($lokasifoto))
    {
        move_uploaded_file($lokasifoto, "../banner/$namafoto");

        $koneksi->query("update berita set judul_news='$judul',
        deskripsi_news='$deskripsi', banner_news='$namafoto'
        where id_news=$id");
    }
    else
    {
        $koneksi->query("update berita set judul_news='$judul',
        deskripsi_news='$deskripsi' where id_news=$id");
    }
    echo  "<script> alert('Data Berita Telah Dirubah'); </script>";
    echo "<script> location='index.php?halaman=berita'; </script>";
}
?>
</div>