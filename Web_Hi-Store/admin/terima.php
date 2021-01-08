<?php>
    include 'koneksi.php'
    $id = $_GET['id_pembelian'];

    $koneksi->query("UPDATE pembelian SET status='konfirmasi' WHERE id_pembelian=$id");
    
    echo  "<script> alert('Konfirmasi Berhasil'); </script>";
    echo "<script> location='index.php?halaman=struk'; </script>";
}
?>
