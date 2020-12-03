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
                  <h6 class="m-0 font-weight-bold text-primary">Registration</h6>
                  <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                  </div>    
          </div>
        <!-- Card Body -->
        <div class="card-body">
            <form>
                <div calss="form-group">
                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Anda" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username Anda" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Anda" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password Anda" required>
                </div>
                <div class="form-group">
                Pilih Jenis Kelamin: <br>
                <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
                </div>
                <div class="form-group">
                    <input type="agama" class="form-control form-control-user" id="agama" name="agama" placeholder="Agama Anda" required>
                </div>
                <div class="form-group">
                    <input type="textarea" class="form-control form-control-user" id="biografi" name="biografi" placeholder="Biografi" required>
                </div>
                <button type="submit" class="btn btn-syccess" name="submit">Tambah</button>
                <?php
                $name = @$_GET['name'];
                $username = @$_GET['username'];
                $email= @$_GET['email'];
                $password= @$_GET['password'];
                $radio= @$_GET['gender'];
                $agama= @$_GET['agama'];
                $biografi= @$_GET['biografi'];
                if ($name) {
                    echo "<br><br><strong>Nama:</strong> {$name} <br>";
                }
                if ($username) {
                    echo "<strong>Username:</strong> {$username} <br>";
                }
                if ($email) {
                    echo "<strong>Email:</strong> {$email} <br>";
                }
                if ($password) {
                    echo "<strong>Password:</strong> {$password} <br>";
                }
                if (isset($_POST['jenis_kelamin'])) {

                    $jenis_kelamin=$_POST['jenis_kelamin'];
                    echo "<br>".$jenis_kelamin;
                }
            
                if ($agama) {
                    echo "<strong>Agama:</strong> {$agama} <br>";
                }
                if ($biografi) {
                    echo "<strong>Biografi:</strong> {$biografi} <br>";
                }

            ?>
            </form>
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
