<?php
$email = $_POST['email'];
$password = $_POST['password'];
$email_saya = "henry.m.ulya17@gmail.com";
$password_saya = ulfia354;
if ((strcasecmp($email_saya, $email) == 0)&&($password_saya==$password))
    if ($password == $data['password']) {
        header("location:index.php?pesan=berhasil");
    }else{
        header("location:login.php?pesan=gagal");}
?>