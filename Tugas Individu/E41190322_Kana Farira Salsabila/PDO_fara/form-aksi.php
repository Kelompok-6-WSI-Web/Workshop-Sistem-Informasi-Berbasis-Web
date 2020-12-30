<?php
// menghubungkn dengan koneksi database
include "database.php";

// memasukkan data ke database dari form
$query = "INSERT INTO person VALUES ('', '$_POST[nama]', '$_POST[alamat]')";

// db yang di database dibuat untuk menyiapkan query untuk di eksekusi
$data = $db->prepare($query);  // menyiapkan query sql

// setelah siap data akan di jalankan, 
$data->execute(); //menjalankan perintah query ke sql


// $db->query($query); //cara kedua langsung prepare dan execute

header("location:form.php");


?>