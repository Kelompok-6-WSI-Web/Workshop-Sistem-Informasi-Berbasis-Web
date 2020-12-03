<?php
session_start();
include 'koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];
$ambil = mysqli_query($koneksi, "select * from login_user where email='$email'");
$pecah = mysqli_fetch_array($ambil);

// var_dump($pecah);
if ($email == $pecah['email']) {
    if ($password == $pecah['password']) {
        header("location:index.php?pesan=berhasil");
    }else {
        header("location:login.php?pesan=passwordsalah");
    }
}else {
    header("location:login.php?pesan=emailsalah");
}




// $acc = array(
//     'acc1' => array(
//         'email' => "kanafarira@gmail.com",
//         'password' => "fara123"),
//     'acc2' => array(
//         'email' => "kana@gmail.com",
//         'password' => "kana123")
//     );

//     foreach ($acc as $key => $value) {
//         if((strcasecmp($email,$value['email']) ==0))
//             if(($password==$value['password']))
//         {
//             header("location:index.php?pesan=berhasil");
//         break;
//         } else{
//             header("location:login.php?pesan=passwordsalah");
//         break;
//         } else{
//             header("location:login.php?pesan=emailsalah");
//         }
//     }

// $email_saya = "kanafarira@gmail.com";
// $password_saya = 12345678;
// if((strcasecmp($email_saya,$email) == 0) && ($password_saya==$password))
// {header("location:index.php?pesan=berhasil");}
// else
//     {header("location:login.php?pesan=gagal");}
?>