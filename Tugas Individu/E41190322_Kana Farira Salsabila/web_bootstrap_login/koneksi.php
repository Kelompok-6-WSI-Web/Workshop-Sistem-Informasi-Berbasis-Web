<?php
    $koneksi = mysqli_connect("localhost","root", "", "test");
    if (mysqli_connect_error()) {
        echo "Koneksi databsae gagal :" . mysqli_connect_error();
    }
?>