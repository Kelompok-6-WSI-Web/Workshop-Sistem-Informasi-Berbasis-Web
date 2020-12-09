<?php

    session_start();
    include 'koneksi.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $querySql = mysqli_query($koneksi,"SELECT * FROM users WHERE email='$email'");
    $data = mysqli_fetch_array($querySql);

    if($email == $data['email']){
        if($password == $data['password']){
            if ($data['id_kategori'] == 1) {
				
				header("location:admin/home.php");
			}elseif ($data['id_kategori'] == 2) {
				
                header("location:home_customer.php");
            }
    }else{
        header ("location:login.php?pesan=passwordsalah");
    }
}else{
    header("location:login.php?pesan=emailsalah");
    }
?>