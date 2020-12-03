<?php
//$email = $_POST['email'];
//$password = $_POST['password'];

//$login = array(
    //'a1'=>array(
        //'email' => 'sintanur096@gmail.com',
        //'password' => "sinta111"),
    //'a2'=>array(
        //'email' => 'nuryahs86@gmail.com',
        //'password' => "nuri111")
    //);

//foreach ($login as $key => $value){
    //if((strcasecmp($email,$value['email']) == 0))
       // if(($password==$value['password']))
   // {

//$email_saya = "sintanur096@gmail.com";
//$password_saya = 12345678;

 //   header("location:index.php?pesan=berhasil");
  //  break;
//}else
  //  {header("location:login.php?pesan=passwordsalah");
   // break;
//}else
  //  {header("location:login.php?pesan=emailsalah");
    //}
//}

?>

<?php
session_start();
include 'koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];
$querySql = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE email='$email'");
$data = mysqli_fetch_array($querySql);
if ($email == $data['email']) {
    if ($password == $data['password']) {
        header("location:index.php?pesan=berhasil");
    }else{
        header("location:login.php?pesan=passwordsalah");
    }

    }else{
        header("location:login.php?pesan=emailsalah");
    
    }

?>