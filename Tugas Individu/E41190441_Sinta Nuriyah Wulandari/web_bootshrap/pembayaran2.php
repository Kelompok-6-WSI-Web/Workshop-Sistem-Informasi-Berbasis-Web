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
                  <h6 class="m-0 font-weight-bold text-primary">Pembayaran</h6>
                  <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                  </div>    
          </div>
        <!-- Card Body -->
        <div class="card-body">
        <form method="GET" action="pembayaran3.php">
                <?php
                        $a = 1;
                        $jumlah = $_GET['jumlah'];
                        for($i=0; $i<$jumlah; $i++){
                    ?>
                        <?php echo $a++;?></td>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="barang" name="barang[<?php echo $i; ?>]" placeholder="Nama Barang" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="harga" name="harga[<?php echo $i; ?>]" placeholder="Harga" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="jumlah" name="jumlah[<?php echo $i; ?>]" placeholder="Jumlah" required>
                        </div>
                        <?php } ?>
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    
            </form>
        </div>
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