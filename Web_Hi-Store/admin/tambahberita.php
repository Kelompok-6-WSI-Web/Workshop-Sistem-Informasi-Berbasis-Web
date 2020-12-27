<br>
<br>
<br>
<br>

<div class="container">
<h2> TAMBAH BERITA </h2>

<form method="post" enctype="multipart/form-data">
<div class="form-group">
    <label> Judul </label>
    <input type="text" class="form-control" name="judul">
</div>
<div class="form-group">
    <label> Deskripsi </label>
    <textarea class="form-control" name="deskripsi" rows="10"></textarea>
</div>
<div class="form-group">
    <label> Banner </label>
    <input type="file" class="form-control" name="banner">
</div>

<button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php
if (isset($_POST['save']))
{
    $judul = $_FILES['banner']['name'];
    $lokasi= $_FILES['banner']['tmp_name'];
    move_uploaded_file($lokasi, "../banner/".$judul);
    $koneksi->query("insert into berita (judul_news, deskripsi_news, banner_news)
    values('$_POST[judul]', '$_POST[deskripsi]', '$judul')");

    echo "<div class='alert alert=info'> Data Tersimpan </div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=news'>";
}
?>
</div>
