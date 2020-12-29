<?php
    $host = "localhost";
    $dbname = "dbsekolah";
    $username = "root";
    $password = "";

    try{
        $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exception){
        die("Connection error:" . $exception->getmassage());
    }
    
?>