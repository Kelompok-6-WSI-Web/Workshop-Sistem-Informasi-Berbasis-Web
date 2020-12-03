<html>
    <head>
        <style type="text/css">
            body{
                background-color: green;
            }
            .kotak{
                width: 500px;
                background: white;
                /*meletakkan form ke tengah*/
                margin: 80px auto;
                padding: 30px 20px;
            }
        </style>
    </head>
    <body>
        <div class="kotak" align="center">
            <h3>Web Pembelian Produk Hi-Store</h3>
            <form method="GET" action="form_html2.php">
                <label>Jumlah Produk</label>
                <input type="text" name="jumlah">
                <button type="submit">SUBMIT</button>
            </form>
        </div>
    </body>
</html>