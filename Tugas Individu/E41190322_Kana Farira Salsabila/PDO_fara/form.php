<?php
include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> COBA PDO </title>
</head>
<body>
    
    <h2> FORM IDENTITAS </h2>
    <br>
    <form method="POST" action="form-aksi.php">
        <table>
            <tr>
                <td> Nama  </td>
                <td> <input type="text" name="nama"> </td>
            </tr> 
            <tr>
                <td> Alamat  </td>
                <td> <textarea name="alamat" cols="30" rows="5"> </textarea> </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Simpan">
                </td>
                <td>
                    <input type="reset" value="Hapus">
                </td>
            </tr>

        </table>
    </form>

    <hr>
<table border="1">
    <thead>
        <tr>
            <th> NO </th>
            <th> NAMA </th>
            <th> ALAMAT </th>
            <th> HAPUS </th>
            <th> UBAH </th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = " SELECT * FROM person";
        $data = $db->prepare($query);
        $data->execute();

        $no = 1;
        // data dipecah jdi objek bkan array agar selaras dgn pdo
        while($person = $data->fetch(PDO::FETCH_OBJ)) {
        ?>
        
        <tr>
            <td> <?php echo $no  ?> </td>
            <td> <?php echo $person->nama ?> </td>
            <td> <?php echo $person->alamat ?> </td>
            <td> <a href="hapus.php?id=<?php echo $person->id ?>"> HAPUS </a> </td>
            <td> <a href="ubah.php?id=<?php echo $person->id ?>"> UBAH </a> </td>
        </tr>
        <?php
            $no++;
        } ?>
    </tbody>
</table>



</body>
</html>