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
                $_SESSION['user'] = "coba";
                $_SESSION['status'] = "login";
                $_SESSION['id'] = $data['id_user'];
                $_SESSION['email'] = $email;
                $_SESSION['nama'] = $data['nama'];
                $_SESSION['no_hp'] = $data['no_hp'];
                $_SESSION['alamat'] = $data['alamat'];
                $_SESSION['nama_kategori'] = "admin";
                
				header("location:admin/home.php");
			}elseif ($data['id_kategori'] == 2) {
                $_SESSION['user'] = "coba";
                $_SESSION['status'] = "login";
                $_SESSION['id'] = $data['id_user'];
                $_SESSION['email'] = $email;
                $_SESSION['nama'] = $data['nama'];
                $_SESSION['no_hp'] = $data['no_hp'];
                $_SESSION['alamat'] = $data['alamat'];
                $_SESSION['nama_kategori'] = "customer";
                header("location:home_customer.php?pesan=login");
            }
    }else{
        header ("location:login.php?pesan=passwordsalah");
    }
}else{
    header("location:login.php?pesan=emailsalah");
    }
?>