<html>
    <head>
        <style type="text/css">
            body{
                background-color: green;
            }
            table{
                width: 600px;
                background: white;
                /*meletakkan form ke tengah*/
                margin: 80px auto;
                padding: 30px 20px;
            }
        </style>
    </head>
    <body>
        <div class="kotak">
            <form method="GET" action="form_html3.php">
                <table>
                    <tr>
                        <td align="center" colspan="5"><h3>TOTAL PEMBAYARAN</h3></td>
                    </tr>
                    <tr>
                        <td align="center">Nomor</td>
                        <td align="center">Nama Produk</td>
                        <td align="center">Harga</td>
                        <td align="center">Jumlah</td>
                    </tr>
                    <?php
                        $a = 1;
                        $jumlah = $_GET['jumlah'];
                        for($i=0; $i<$jumlah; $i++){
                    ?>
                    <tr>
                        <td align="center">
                        <?php echo $a++;?></td>
                        <td>
                            <input type="text" name="barang[<?php echo $i; ?>]">
                        </td>
                        <td>
                            <input type="text" name="harga[<?php echo $i; ?>]">
                        </td>
                        <td>
                            <input type="text" name="jumlah[<?php echo $i; ?>]">
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button align="right" type="submit">SUBMIT</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>