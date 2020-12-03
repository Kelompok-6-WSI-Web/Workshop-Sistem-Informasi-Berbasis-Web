<?php
include 'header.php';
?>
        <div class="container-fluid">

        <!-- Page Heading -->
        <div calss="d-ssm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Registration</h1>
      </div>

      <!-- Content Row -->

      <div class="row">
          <!--Area Chart -->
          <div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
              <!--Card Header -Dropdown --> 
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Total pembayaran</h6>
                  <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                  </div>    
          </div>
        <!-- Card Body -->
        <div class="card-body">
        <table class="table">
                <tr>
                    <td align="center" colspan="5"><h3>TOTAL PEMBAYARAN</h3></td>
                </tr>
                <tr>
                    <td align="center">Nomor</td>
                    <td align="center">Nama Barang</td>
                    <td align="center">Harga</td>
                    <td align="center">Jumlah</td>
                    <td align="center">Total</td>
                </tr>
                <?php
                    $barang = $_GET['barang'];
                    $harga = $_GET['harga'];
                    $jumlah = $_GET['jumlah'];
                    $a = 1;
                    $gtotal = 0;
                    foreach ($barang as $key => $value) {
           
                ?>
                <tr>
                    <td align="center">
                        <?php echo $a++;?>
                    </td>
                    <td align="center">
                        <?php echo $barang[$key]; ?>
                    </td>
                    <td align="center">
                        <?php echo $harga[$key]; ?>
                    </td>
                    <td align="center">
                        <?php echo $jumlah[$key]; ?>
                    </td>
                    <td align="center">
                        <?php echo $total = $harga[$key] * $jumlah[$key]; ?>
                    </td>
                </tr>
                <?php
 
                        $gtotal += $total;
                    }
                ?>
                <tr>
                    <td colspan="4" align="center">Total</td>
                    <td align="center"><?php echo $gtotal; ?></td>
                </tr>
               
            </table>   
        </div>
        
        </div>
          </div>
          </div>

          <!--Pie Chart -->
      </div>

        </div>
        <!-- /.container-fluid -->
        
   <?php
   include 'foter.php';
   ?>