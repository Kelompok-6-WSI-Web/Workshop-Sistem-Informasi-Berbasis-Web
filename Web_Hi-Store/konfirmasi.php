<?php
session_start();

include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SIGN IN </title>
    <style>
        .form{
          background-color: #6A7B67;
          padding-bottom: 250px;
        }
        .box-konfirmasi .btn {
            background-color: white;
            border: none;
            border-radius: 5px;
            color: #6A7B67;
        }
        .box-konfirmasi{
            width : 60%;
            height : 50%;
            background-color: #6A7B67;
            margin: 5% auto;
            padding: 2%;
        }
        .warning a{
            color : red;
        }
    </style>
</head>
<body>


<!-- untuk css tampilan register ya -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
<!-- NAVBAR -->
<?php include('navbar.php'); ?>



<!-- konten -->
<div class="form">

    <div class="container"><br><br><br>

        <h1 class="text-white"> UPLOAD KONFIRMASI NOTA PEMBAYARAN </h1>

            <div class="box-konfirmasi" >
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    <label> Bukti Pembayaran </label>
                        <input type="file" class="form-control" name="bukti">
                    </div>
            
                    <button class="btn btn-primary" name="save">UPLOAD</button>
                </form>
            </div>           
    </div>
</div>

<?php
 $id = $_GET['id'];
if (isset($_POST['save']))
{
    $nama = $_FILES['bukti']['name'];
    $lokasi= $_FILES['bukti']['tmp_name'];
    move_uploaded_file($lokasi, "bukti_pembayaran/".$nama);
    $koneksi->query("UPDATE pembelian SET bukti='$nama',status='proses' WHERE id_pembelian = $id");
    echo $koneksi->error;
    echo "<script> alert('Tunggu Konfirmasi Dari Admin'); </script>";
    echo "<script> location='home_customer.php'; </script>";
}

?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  

</body>
</html>