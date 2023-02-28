<?php
session_start();
$username = $_SESSION['username'];

// GET PULL
$no = $_GET['no_transaksi'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arjuna Resort | Admin "<?php echo $username ?>"</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="../img/Arjuna_logo_favicon_2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

	<div>
    <div class="row flex-nowrap gap-4">
      <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 text-primary" style="background-color: #4f2d01;">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-4 gap-3 text-white min-vh-100">
          <a href="index.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline font-leyton">Arjuna Resort</span>
          </a>
          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start font-montserrat" id="menu">
            <li class="nav-item">
              <a class="nav-link align-middle p-2 btn btn-dark btn-md active" href="index.php" aria-current="page">
                <i class="bi bi-house fs-4"></i>
                <span class="ms-1 d-none d-sm-inline">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="btn btn-dark btn-md dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fs-4 bi bi-credit-card"></i> 
                  <span class="ms-1 d-none d-sm-inline">Opsi</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-light text-small shadow" style="background-color: antiquewhite;">
                  <li>
                    <a class="dropdown-item" href="show_transaksi.php">Transaksi</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li>
                    <a class="dropdown-item" href="show_detail.php">Detail Transaksi</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a href="show_pengunjung.php" class="nav-link align-middle p-2 btn btn-dark btn-md">
                <i class="fs-4 bi bi-file-person"></i> 
                <span class="ms-1 d-none d-sm-inline">Pengunjung</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="show_karyawan.php" class="nav-link align-middle p-2 btn btn-dark btn-md">
                <i class="fs-4 bi bi-person-workspace"></i> 
                <span class="ms-1 d-none d-sm-inline">Karyawan</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="show_kamar.php" class="nav-link align-middle p-2 btn btn-dark btn-md">
                <i class="fs-4 bi bi-houses"></i> 
                <span class="ms-1 d-none d-sm-inline">Kamar</span> 
              </a>
            </li>
            <li class="nav-item">
              <a href="show_website_user.php" class="nav-link align-middle p-2 btn btn-dark btn-md">
                <i class="fs-4 bi bi-person-circle"></i> 
                <span class="ms-1 d-none d-sm-inline">Website User</span> 
              </a>
            </li>
          </ul>
          <hr>
          <div class="dropdown pb-4 font-montserrat">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="../img/user.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
							<span class="d-none d-sm-inline mx-1"><?php echo $username?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-light text-small shadow" style="background-color: antiquewhite;">
              <li>
								<a class="dropdown-item" href="admin_profile.php">Profile</a>
							</li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
								<a class="dropdown-item" href="logout.php">Logout</a>
							</li>
            </ul>
          </div>
        </div>
      </div>
			<div class="col py-3 ml-2">
				<div class="container">

          <!-- header -->
          <header class="mt-4 row">
            <div class="col">
              <h3 class="fw-light font-montserrat">Admin Workspace | Update Data Transaksi</h3>
            </div>
            <div class="col d-flex justify-content-end align-items-center">
              <div class="font-montserrat">
                <div id="hari"></div>
                <div id="clock"></div>
              </div>
            </div>
          </header>
          <!--  -->

          <hr>

          <!-- breadcump -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb font-montserrat">
              <li class="breadcrumb-item"><a href="show_transaksi.php">Transaksi</a></li>
              <li class="breadcrumb-item active" aria-current="page">Update Data Transaksi <strong><?php echo $no ?></strong> </li>
            </ol>
          </nav>
          <!--  -->
          
          <?php

          require("../app/koneksi.php");
          $code = $_GET['no_transaksi'];
          $query = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE no_transaksi = '$code'");
          $row_data = mysqli_fetch_array($query);
          ?>

          <!-- content -->
          <main>
            <div class="mt-5 font-montserrat">
              <div class="pb-2">
                <p class="lead">Update Data</p>
              </div>
                <form class="row g-3" action="update/update_process_transaksi.php" method="post">
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="no_transaksi" id="no_transaksi" placeholder="name@example.com" value="<?php echo $row_data['no_transaksi']; ?>" readonly>
                      <label for="no_transaksi">No. Transaksi</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <select class="form-select" name="id_pengunjung" id="id_pengunjung" aria-label="Floating label select example">
                        <?php
                        echo "<option value=" .$row_data['id_pengunjung']. ">" .$row_data['id_pengunjung']. "</option>";
                        echo "<option>--</option>";
                        include "../koneksi.php";
                        $id_pengunjung = mysqli_query($koneksi, "SELECT * FROM pengunjung");
                        foreach ($id_pengunjung as $row) {
                          echo "<option value=" . $row['id_pengunjung'] . ">" . $row['id_pengunjung'] . " : " . $row['nama_pengunjung'] . "</option>";
                        }
                        ?>
                      </select>
                      <label for="id_pengunjung">ID Pengunjung</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <select class="form-select" name="id_karyawan" id="id_karyawan" aria-label="Floating label select example">
                        <?php
                        echo "<option value=" .$row_data['id_karyawan']. ">" .$row_data['id_karyawan']. "</option>";
                        echo "<option>--</option>";
                        include "../koneksi.php";
                        $id_karyawan = mysqli_query($koneksi, "SELECT * FROM karyawan");
                        foreach ($id_karyawan as $row) {
                          echo "<option value=" . $row['id_karyawan'] . ">" . $row['id_karyawan'] . " : " . $row['nama_karyawan'] . "</option>";
                        }  
                        ?>
                      </select>
                      <label for="id_karyawan">ID karyawan</label>
                    </div>
                  </div>

                  <!-- dynamic input field -->
                  <div class="col-12">
                    <div id="row">
                      <div class="input-group mb-3">
                        <div class="form-floating">
                          <select class="form-select" name="data_kamar[]" id="kamar" aria-label="Floating label select example">
                            <option selected>---</option>
                            <?php
                            include "../koneksi.php";
                            $no_kamar = mysqli_query($koneksi, "SELECT * FROM kamar");
                            foreach ($no_kamar as $row) {
                              echo "<option value=" . $row['no_kamar'] . ">" . $row['no_kamar'] . " : " . $row['jenis_kamar'] . ", Rp. " . $row['harga'] . "</option>";
                            }

                            ?>
                          </select>
                          <label for="kamar">Kamar</label>
                        </div>
                        <button class="btn btn-dark" type="button" id="rowAdder">+</button>
                        <button class="btn btn-dark" type="button" id="deleteRow">-</button>
                      </div>
                    </div>
                  </div>

                  <div class="col-12" id="newInput"></div>

                  <div class="col-md-6">
                    <div class="form-floating mb-3">
                      <input type="date" class="form-control" name="tgl_masuk" id="no_transaksi" placeholder="name@example.com" value="<?php echo $row_data['tgl_masuk']; ?>">
                      <label for="no_transaksi">Tanggal Masuk</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-3">
                      <input type="date" class="form-control" name="tgl_keluar" id="no_transaksi" placeholder="name@example.com" value="<?php echo $row_data['tgl_keluar']; ?>">
                      <label for="no_transaksi">Tanggal Keluar</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-dark btn-md">Submit</button>
                  </div>
              </form>
            </div>
          </main>
          <!--  -->
				</div>
			</div>
  	</div>
	</div>
    
  <!-- Personal JS Script -->
  <script>
    $("#rowAdder").click(function(){
      newRowAdd = 
      '<div id="row">' +
      '<div class="input-group mb-3">' + 
      '<div class="form-floating">' +
      '<select class="form-select" name="data_kamar[]" id="kamar" aria-label="Floating label select example">' +
      '<option selected>---</option>' +
      '<?php include "../koneksi.php"; ?>' +
      '<?php $no_kamar = mysqli_query($koneksi, "SELECT * FROM kamar"); ?>' +
      '<?php foreach ($no_kamar as $row) {
                      echo "<option value=" . $row['no_kamar'] . ">" . $row['no_kamar'] . " : " . $row['jenis_kamar'] . ", Rp. " . $row['harga'] . "</option>";
                    }   ?>' +
      '</select>' +
      '<label for="kamar">Kamar</label>' +
      '</div>' +
      '<button class="btn btn-dark" type="button" id="rowAdder">+</button>' +
      '<button class="btn btn-dark" type="button" id="deleteRow">-</button>' +
      '</div> </div>';

      $('#newInput').append(newRowAdd);
    });

    $("body").on("click", "#deleteRow", function(){
      $(this).parents("#row").remove();
    })
  </script>
  <!-- // -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- personal JS -->
    <script src="clock.js"></script>
  </body>
</html>