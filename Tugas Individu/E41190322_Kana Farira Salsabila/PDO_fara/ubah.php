<?php
include "database.php";

$query = "SELECT * FROM person WHERE id='$_GET[id]'";
$data = $db->prepare($query);
$data->execute();

$person = $data->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> UBAH DATA </title>
</head>
<body>
    
    <h2> SILAHKAN UBAH IDENTITAS </h2>
    <br>
    <form method="POST" action="update.php">
    <input type="hidden" name="id " value="<?php echo $person->id ?>">
        <table>
            <tr>
                <td> Nama  </td>
                <td> <input type="text" value="<?php echo $person->nama ?>"  name="nama">  </td>
            </tr> 
            <tr>
                <td> Alamat  </td>
                <td> <textarea name="alamat"  cols="30" rows="5"> <?php echo $person->alamat ?> </textarea> </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Simpan">
                </td>s
            </tr>

        </table>
    </form>
